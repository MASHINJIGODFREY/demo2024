@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('Todo List') }}</h5>
                    <a href="{{route('todo.create')}}" class="btn btn-primary btn-sm">Create</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-stripped table-dark">
                        <tr>
                            <th>Task Name</th>
                            <th>Description</th>
                            <th>Due date</th>
                            <th>Action</th>
                        </tr>
                        @foreach($todos as $todo)
                            <tr valign="middle">
                                <td>{{$todo->name}}</td>
                                <td>{{$todo->work}}</td>
                                <td>{{$todo->duedate}}</td>
                                <td>
                                    <a href="{{route('todo.edit',$todo->id)}}" class="btn btn-success btn-sm">Update</a>
                                    <a href="{{route('todo.delete',$todo->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
