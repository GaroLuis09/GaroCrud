
@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('employees/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="emp_name" id="emp_name" value="{{$employees->emp_name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$employees->address}}" class="form-control"></br>
        <label>Contact</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$employees->contact}}" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$employees->gender}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$employees->age}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop