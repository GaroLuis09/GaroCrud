
@extends('employees.layout')
@section('content')
<div class="card text-white bg-dark border-success mb-3">
  <div class="card-header"><center><h1>Edit Employee</h1></center></div>
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
          <select class="form-select" aria-label="Default select example" name="gender" id="gender">
            <option disabled selected>{{$employees->gender}}</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$employees->age}}" class="form-control"></br>
        <button type="submit" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Update</button></br>
    </form>
  
  </div>
</div>
@stop