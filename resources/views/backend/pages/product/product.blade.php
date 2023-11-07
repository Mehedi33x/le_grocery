@extends('backend.fixed.master')

@section('content')

<h1>Product List</h1>
<br>

<a href="{{route('add.product')}}" type="button" class="btn btn-success">Add New Product</a>

<br>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Product Name</th>
        {{-- <th scope="col">Category Name</th> --}}
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach ($product as $key=>$item)
<tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{$item->product_name}}</td>
    {{-- <td>{{$item->category_id}}</td> --}}
    <td>{{$item->Quantity}}</td>
    <td>{{$item->Price}}</td>

    <td>
        <a href="{{route('view.product',$item->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('product.edit',$item->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('single.product.delete',$item->id)}}" class="btn btn-danger">Delete</a>

    </td>
  </tr>

@endforeach


    </tbody>
  </table>
  {{$product->links()}}

@endsection
