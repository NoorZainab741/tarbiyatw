@extends('layouts.master')

@section('title', 'Editor')

@section('breadcrumb-title', 'Editor')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Editor</li>
    <li class="breadcrumb-item active">List</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Editor List</h4>
                        <a href="{{ route('editors.create') }}"
                           class="btn btn-primary pull-right">
                            <i class="fa fa-plus">
                                Add New Editor</i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($editors as $editor)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$editor->name}}</td>
                                        <td>{{$editor->email}}</td>
                                        <td>{{$editor->phone}}</td>
                                        <td>{{$editor->role}}</td>
                                        <td>
                                            <a href="{{ route('editors.edit', ['editor' => $editor->id]) }}"
                                                class="btn btn-primary btn-sm m-1 p-2" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('editors.show', ['editor' => $editor->id]) }}"
                                                class="btn btn-success btn-sm m-1 p-2" title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <form action="{{ route('editors.destroy', ['editor' => $editor->id]) }}"
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
{{--                        {{$editors->Links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
