@extends('employees.layout')
@section('content')
<div class="col d-flex justify-content-center">
  <div class="card text-white bg-dark border-success mb-10"  style="width: 50%;">
    <div class="card-header"><center><h1>View Employee</h1></center></div>
    <div class="card-body">
        <form action="{{ url('employees/') }}">
          <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
          <label>Name</label></br>
          <h3>{{$employees->emp_name}}</h3>
          <label>Address</label></br>
          <h3>{{$employees->address}}</h3>
          <label>Contact</label></br>
          <h3>{{$employees->contact}}</h3>
          <label>Gender</label></br>
          <h3>{{$employees->gender}}</h3>
          <label>Age</label></br>
          <h3>{{$employees->age}}</h3>
          <button type="submit" class="btn btn-success"><i class="fa fa-reply"></i> Go back</button></br>
      </form>
    
    </div>
  </div>
</div>
@stop