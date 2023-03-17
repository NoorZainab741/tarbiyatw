@extends('layouts.master')

@section('title', 'Social links')

@section('breadcrumb-title', 'Social Links')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Social Links</li>
{{--    <li class="breadcrumb-item active">List</li>--}}
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Social Links</h4>
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
                                    <th>Facebook</th>
                                    <th>YouTube</th>
                                    <th>Website</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($social_links as $social_link)
                                    <tr>
                                        <td>{{$social_link->facebook}}</td>
                                        <td>{{$social_link->youtube}}</td>
                                        <td>{{$social_link->website}}</td>
                                        <td>
                                            <a href="{{ route('social_links.edit', ['social_link' => $social_link->id]) }}"
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
