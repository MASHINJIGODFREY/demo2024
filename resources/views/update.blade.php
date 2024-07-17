@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('Update Todo') }}</h5>
                    <a href="{{route('todo.home')}}" class="btn btn-primary btn-sm">{{ _('Back') }}</a>
                </div>

                <div class="card-body">
                    <form action="{{route('todo.updateData')}}" method="post">
                        @csrf
                        <label for="" class="form-label mt-4">{{ __('Task Name') }}</label><!-- mt-4 = margin 4 -->
                        <input type="text" name="name" class = "form-control" id="" value="{{$todo->name}}">
                        <label for="" class="form-label mt-4">{{ __('Description') }}</label>
                        <input type="text" name="work" class = "form-control" id="" value="{{$todo->work}}">
                        <label for="" class="form-label mt-4">{{ __('Due Date') }}</label>
                        <input type="date" name="duedate" class = "form-control" id="" value="{{$todo->duedate}}">
                        <input type="number" name="id" value="{{$todo->id}}" hidden>
                        <button class="btn btn-primary btn-md mt-4">{{ __('Update Todo') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection