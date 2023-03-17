@extends('layouts.master')

@section('title', 'To Do')

@section('breadcrumb-title', 'To Do')
@section('breadcrumb-item')
    <li class="breadcrumb-item">To Do</li>
{{--    <li class="breadcrumb-item active">List</li>--}}
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">To Do</h4>
                        <a href="{{route('todos.create')}}"
                           class="btn btn-primary pull-right">
                            <i class="fa fa-plus">
                                Add New To Do</i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>To Do</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($todos as $todo)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$todo->todo}}</td>
                                        <td>
                                            @if($todo->status==1)
                                                <a href="{{ route('todos.changeStatus', ['todo' => $todo->id]) }}"
                                                   class="btn btn-success btn-sm mb-1 px-2" title="Change Status">Done</a>
                                            @else
                                                <a href="{{ route('todos.changeStatus', ['todo' => $todo->id]) }}"
                                                   class="btn btn-danger btn-sm mb-1 px-2" title="Change Status">ToDo</a>

                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('todos.edit', ['todo' => $todo->id]) }}"
                                               class="btn btn-primary btn-sm m-1 p-2" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('todos.destroy', ['todo' => $todo->id]) }}"
                                                  method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                        class="btn btn-danger btn-sm m-1 p-2" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
{{--                        {{$modules->Links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
