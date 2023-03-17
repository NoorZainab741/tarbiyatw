@extends('layouts.master')

@section('title', 'Menu View')

@section('breadcrumb-title', 'Menu View')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Menu</li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Menu</h4>
                        <a href="{{route('modules.index')}}"
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
                                    <th>App Menu</th>
                                    <th>Icon</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$module->name}}</td>
                                        <td>{{$module->menu->name}}</td>
                                        <td>@if($module->icon == null)
                                                No Icon
                                            @else
                                                <img height="70px" width="70px" class="img-fluid" src="{{asset('storage/'.$module->icon)}}" alt="">
                                            @endif</td>
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
