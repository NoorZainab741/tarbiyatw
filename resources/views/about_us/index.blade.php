@extends('layouts.master')

@section('title', 'About Us')

@section('breadcrumb-title', 'About Us')
@section('breadcrumb-item')
    <li class="breadcrumb-item">About Us</li>
{{--    <li class="breadcrumb-item active">List</li>--}}
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">About Us</h4>
{{--                        <a href="{{route('sub_menus.create')}}"--}}
{{--                           class="btn btn-primary pull-right">--}}
{{--                            <i class="fa fa-plus">--}}
{{--                                Add New Sub Menu</i>--}}
{{--                        </a>--}}
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table">
                                <thead>
                                <tr>
{{--                                    <th>Sr#</th>--}}
                                    <th>About Us</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($about_us as $about_us)
                                    <tr>
{{--                                        <td>{{$loop->iteration}}</td>--}}
                                        <td>{{$about_us->about}}</td>
                                        <td>
                                            <a href="{{ route('about_us.edit', ['about_u' => $about_us->id]) }}"
                                                class="btn btn-primary btn-sm m-1 p-2" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
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
