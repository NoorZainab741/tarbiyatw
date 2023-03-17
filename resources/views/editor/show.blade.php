@extends('layouts.master')

@section('title', 'Editor View')

@section('breadcrumb-title', 'Editor View')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Editor</li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Editor</h4>
                        <a href="{{ route('editors.index') }}"
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
                                        <td>{{$editor->name}}</td>
                                        <td>{{$editor->email}}</td>
                                        <td>{{$editor->phone}}</td>
                                        <td>{{$editor->role}}</td>
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
