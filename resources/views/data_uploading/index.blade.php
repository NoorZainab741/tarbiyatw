@extends('layouts.master')

@section('title', 'Data Management')

@section('breadcrumb-title', 'Data Management')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Data Management</li>
    <li class="breadcrumb-item active">List</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Data List</h4>
{{--                        <a href="{{route('data_uploadings.create')}}"--}}
{{--                           class="btn btn-primary pull-right">--}}
{{--                            <i class="fa fa-plus">--}}
{{--                                Add New Data</i>--}}
{{--                        </a>--}}
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Title</th>
                                    <th>Menu / Sub Menu Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data_uploadings as $data_uploading)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data_uploading->title}}</td>
                                        <td>
                                        @if($data_uploading->sub_menu_id == null)
                                            Menu: {{$data_uploading->module->name}}
                                        @else
                                            Submenu: {{$data_uploading->sub_menu->name}}
                                        @endif
                                        </td>
                                        <td>
                                            @if($data_uploading->sub_menu_id != null)
                                            <a href="{{ route('data_uploadings.edit', ['data_uploading' => $data_uploading->id]) }}"
                                               class="btn btn-primary btn-sm m-1 p-2" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @else
                                            <a href="{{ route('editwithoutsubmenu', ['data_uploading' => $data_uploading->id]) }}"
                                               class="btn btn-primary btn-sm m-1 p-2" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @endif
                                            <a href="{{ route('data_uploadings.show', ['data_uploading' => $data_uploading->id]) }}"
                                               class="btn btn-success btn-sm m-1 p-2" title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <form action="{{ route('data_uploadings.destroy', ['data_uploading' => $data_uploading->id]) }}"
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
