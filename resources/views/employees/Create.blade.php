@extends('employees.layout')
@section('content')
  <div class="card text-white bg-dark border-success mb-3">
    <h1></h1>
    <div class="card-header"><center><h1>Add Employee</h1></center></div>
    <div class="card-body">
        
        <form action="{{ url('employees') }}" method="post">
          {!! csrf_field() !!}
          <label>Name</label></br>
          <input type="text" name="emp_name" id="emp_name" class="form-control">
          @error('emp_name')
          <span class="text-danger fst-italics">{{ $message }}</span>
          @enderror</br>
          <label>Address</label></br>
          <input type="text" name="address" id="address" class="form-control">
          @error('address')
          <span class="text-danger fst-italics">{{ $message }}</span>
          @enderror</br>
          <label>Contact</label></br>
          <input type="text" name="contact" id="contact" class="form-control">
          @error('contact')
          <span class="text-danger fst-italics">{{ $message }}</span>
          @enderror</br>
          <label>Gender</label></br>
          <select class="form-select" aria-label="Default select example" name="gender" id="gender">
            <option selected>--Select Gender--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select></br>
          <label>Age</label></br>
          <input type="text" name="age" id="age" class="form-control">
          @error('age')
          <span class="text-danger fst-italics">{{ $message }}</span>
          @enderror</br></br>
        
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button></br>
      </form>
    
    </div>
  </div>
@endsection