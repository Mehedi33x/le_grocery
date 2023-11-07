<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function Product()

    {
        $product=Product::paginate(5);
        return view('backend.pages.product.product',compact('product'));
    }

    public function add_product() {

        return view('backend.pages.product.add_product');
    }

        public function product_store(Request $request)
        {
            Product::create([
                'product_name'=>$request->Product_Name,
                // 'category_id'=>$request->Category_Name,
                'Quantity'=>$request->Quantity,
                'Price'=>$request->Price,

            ]);
            return to_route('product');

        }

        public function edit_product($id){

            $product=Product::find($id);
            return view('backend.pages.product.edit_product',compact('product'));

        }

    public function update_product(Request $request,$id)

            {
                $request->validate([
                    'Product_Name'=>'required',
                    'Quantity'=>'required',
                    'Price'=>'required',

                ]);


                $product=Product::findorfail($id);
                // dd($product);
                $product->update([
                    'Product_Name'=>$request->Product_Name,
                    'Quantity'=>$request->Quantity,
                    'Price'=>$request->Price,


                ]);
                return to_route('product');
            }

            public function single_view_product($id)
            {
                $product=Product::find($id);
               return view('backend.pages.product.single_product_view',compact('product'));


            }

            public function single_product_delete($id)
            {
                 $product=Product::find($id);
                $product->delete();

                return to_route('product');
            }

            }




