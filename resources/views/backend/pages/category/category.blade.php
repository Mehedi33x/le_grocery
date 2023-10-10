@extends('backend.fixed.master')
@section('content')

<div>
 <h1>Category list</h1>
</div>
<div>
    <a href="{{route('add.category')}}" type="button" class="btn btn-primary">Add new Category</a>
</div>



<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>
            <a href="" class="btn btn-primary">View</a>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>

        </td>
      </tr>

    </tbody>
  </table>

@endsection
