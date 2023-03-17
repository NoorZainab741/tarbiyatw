@extends('layouts.master')

@section('title', 'Manager')

@section('breadcrumb-title', 'Manager')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Manager</li>
    <li class="breadcrumb-item active">List</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Manager List</h4>
                        <a href="{{ route('managers.create') }}"
                           class="btn btn-primary pull-right">
                            <i class="fa fa-plus">
                                Add New Manager</i>
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
                                @foreach($managers as $manager)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$manager->name}}</td>
                                        <td>{{$manager->email}}</td>
                                        <td>{{$manager->phone}}</td>
                                        <td>{{$manager->role}}</td>
                                        <td>
                                            <a href="{{ route('managers.edit', ['manager' => $manager->id]) }}"
                                                class="btn btn-primary btn-sm m-1 p-2" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('managers.show', ['manager' => $manager->id]) }}"
                                                class="btn btn-success btn-sm m-1 p-2" title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <form action="{{ route('managers.destroy', ['manager' => $manager->id]) }}"
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
{{--                        {{$managers->Links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
