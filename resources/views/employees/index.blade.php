@extends('employees.layout')
@section('content')
    <div class="row">
        <div>
            <div class="card">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                    <a href="{{ url('/employees/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
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
                                        <a href="{{ url('/employees/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
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