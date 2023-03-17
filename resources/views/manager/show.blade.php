@extends('layouts.master')

@section('title', 'Manager View')

@section('breadcrumb-title', 'Manager View')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Manager</li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Manager</h4>
                        <a href="{{ route('managers.index') }}"
                           class="btn btn-primary pull-right">
                            <i class="fa fa-arrow-left">
                               Back to Index</i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Role</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$manager->name}}</td>
                                        <td>{{$manager->email}}</td>
                                        <td>{{$manager->phone}}</td>
                                        <td>{{$manager->role}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
