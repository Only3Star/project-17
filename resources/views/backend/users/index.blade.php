@extends('layouts.master_backend')
@section('contant')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">User</h5>
        <div class="table-responsive text-nowrap">
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
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
              <td>1</td>
              <td>iphone 14 Pro Max</td>
              <td>iphone.jpg</td>
              <td>45,990 บาท</td>
              <td>ผลิตโดยบริษัทแอปเปิ้ล</td>
              <td>2022-07-25 12:46:29</td>
              <td>2022-07-25 12:46:29</td>
              <td>
              </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection