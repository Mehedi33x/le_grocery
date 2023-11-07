@extends('backend.fixed.master')

@section('content')

<h1>Product Details Edit Form</h1>
<form action="{{route('product.update',$product->id)}}" method="POST"

class="needs-validation" novalidate>
@method('put')
@csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationTooltip01">Product Name</label>
        <input type="text" name="Product Name" value="{{$product->product_name}}" class="form-control" id="validationTooltip01" placeholder="Enter Product Name"  required>
        <div class="valid-tooltip">
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Quantity</label>
        <input type="number" name="Quantity"   value="{{$product->Quantity}}"class="form-control" id="validationTooltip02" placeholder="Enter Quantity"  required>
        <div class="valid-tooltip">
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Price</label>
        <input type="number" name="Price" value="{{$product->Price}}" class="form-control" id="validationTooltip02" placeholder="Enter Product Price"  required>
        <div class="valid-tooltip">
        </div>
      </div>

  <button type="submit" class="btn btn-primary">Submit</button>

@endsection
