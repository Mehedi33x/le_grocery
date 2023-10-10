@extends('backend.fixed.master')

@section('content')

<form action="" method=POST >

    @csrf
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter Name" required> </div>

      <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
      </div>




      <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection
