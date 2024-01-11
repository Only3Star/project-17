@extends('layouts.master_backend')
@section('contant')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Category</h5>
        <br>
        <div class="table-responsive text-nowrap">
            <a href="{{ route('u.category.createform')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>category_id</th>
                <th>Name</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach ($category as $cat)
              <tr>
              <td>{{ $cat->category_id }}</td>
              <td>{{ $cat->name }}</td>
              <td>{{ $cat->created_at }}</td>
              <td>{{ $cat->updated_at }}</td>
              <td>
                <a href="{{ url('admin/user/category/edit/'.$cat->category_id )}}" class="btn btn-warning">edit</a>
                <a href="#" class="btn btn-danger">delete</a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection