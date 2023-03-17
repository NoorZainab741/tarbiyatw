@extends('layouts.master')

@section('title', 'Sub Menus View')

@section('breadcrumb-title', 'Sub Menus View')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Sub Menus</li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Sub Menus</h4>
                        <a href="{{route('sub_menus.index')}}"
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
                                    <th>Menu</th>
{{--                                    <th>Icon</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$sub_menu->name}}</td>
                                        <td>{{$sub_menu->module->name}}</td>
{{--                                        <td>{{$sub_menu->icon}}</td>--}}
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
