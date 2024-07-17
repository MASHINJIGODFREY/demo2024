@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('Add Todo') }}</h5>
                    <a href="{{route('todo.home')}}" class="btn btn-primary btn-sm">{{ __('Back') }}</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('todo.store') }}" method="post">
                        @csrf
                        <label for="" class="form-label mt-4">{{ __('Task Name') }}</label><!-- mt-4 = margin 4 -->
                        <input type="text" name="name" class = "form-control" id="">
                            <div class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </div>
                        <label for="" class="form-label mt-4">{{ __('Description') }}</label>
                        <input type="text" name="work" class = "form-control" id="">
                        <div class="text-danger">
                                @error('work')
                                    {{$message}}
                                @enderror
                            </div>
                        <label for="" class="form-label mt-4">{{ __('Due Date') }}</label>
                        <input type="date" name="duedate" class = "form-control" id="">
                        <div class="text-danger">
                                @error('duedate')
                                    {{$message}}
                                @enderror
                            </div>
                        <button class="btn btn-primary btn-md mt-4">{{ __('Add Todo') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection