@extends('backend.fixed.master')

@section('content')

<h1>Role list</h1>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        {{-- @foreach ($collection as $item) --}}

        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>

            <td>
                <a href="" type="button" class="btn btn-success">View</a>
                <a href="" type="button" class="btn btn-primary">Edit</a>
                <a href="" type="button" class="btn btn-danger">delete</a>
            </td>

          </tr>

        {{-- @endforeach --}}

    </tbody>
  </table>


@endsection

