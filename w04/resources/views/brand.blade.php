@extends('layout')
@section('title')
    
@endsection
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">brand_name</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($databrand as $item)
        <tr>
            <td>{{$item->brand_name}}</td>
            <td><a href="#" class="btn btn-warning">Edit</a></td>
            <td><a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection