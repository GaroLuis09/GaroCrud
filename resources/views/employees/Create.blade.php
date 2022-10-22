@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Add Employee Page</div>
  <div class="card-body">
      
      <form action="{{ url('employees') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="emp_name" id="emp_name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Contact</label></br>
        <input type="text" name="contact" id="contact" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection