@extends('backend.fixed.master')


@section('content')

<h1>Add New Product</h1>
<br>

<form action="{{route('product.store')}}" method="POST"

class="needs-validation" novalidate>

@csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationTooltip01">Product Name</label>
        <input type="text" name="Product Name" class="form-control" id="validationTooltip01" placeholder="Enter Product Name"  required>
        <div class="valid-tooltip">
        </div>
      </div>
      {{-- <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Category Name</label>
        <input type="text" name="Category Name" class="form-control" id="validationTooltip02" placeholder="Enter Category name"  required>
        <div class="valid-tooltip">
        </div>
      </div> --}}
      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Quantity</label>
        <input type="number" name="Quantity" class="form-control" id="validationTooltip02" placeholder="Enter Quantity"  required>
        <div class="valid-tooltip">
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Price</label>
        <input type="number" name="Price" class="form-control" id="validationTooltip02" placeholder="Enter Product Price"  required>
        <div class="valid-tooltip">
        </div>
      </div>





      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit </button>
    <br>

    <a href="{{route('product')}}" type="button" class="btn btn-success">Back</a>
  </form>


@endsection
