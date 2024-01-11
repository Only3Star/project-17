@extends('layouts.master_backend')
@section('contant')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">User</h5>
        <div class="table-responsive text-nowrap">
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
                <th>phone</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($u as $user)
              <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection