@extends('employees.layout')
@section('content')
    <div class="row">
        <div>
            <div class="card text-white bg-dark border-success mb-3">
                <div class="card-header"><center><h1>Employee List</h1></center></div>
                <div class="card-body">
                    <div class="float-right">
                        <a href="{{ url('/employees/create') }}" class="btn btn-success" title="Add New Contact">
                            <i class="fa fa-plus " aria-hidden="true"></i> Add New</a>
                    </div>
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->emp_name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->contact }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->age }}</td>
                                    <td>
                                        <a href="{{ url('/employees/' . $item->id) }}" title="View Employee"><button class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/employees/' . $item->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="{{ url('/employees' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection