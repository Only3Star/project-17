@extends('layouts.master_backend')
@section('contant')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Products</h5>
        <br>
        <div class="table-responsive text-nowrap">
            <a href="{{ route('u.product.createform')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>images</th>
                <th>Price</th>
                <th>Description</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach ($product as $pro)
              <tr>
              <td>1</td>
              <td>asdwa</td>
              <td>asdwa</td>
              <td>4awd990 บาท</td>
              <td>awdawdawd</td>
              <td>2022-07-25 12:46:29</td>
              <td>2022-07-25 12:46:29</td>
              <td>
              <a href="{{ url('admin/user/product/edit/'.$pro->product_id )}}" class="btn btn-warning">edit</a>
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