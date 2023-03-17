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
                        <a href="{{route('feedbacks.index')}}"
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
                                    <th>Menu</th>
                                    <th>Feedback</th>
                                    <th>Attachment</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$feedback->menu->name}}</td>
                                        <td>{{$feedback->detail}}</td>
                                        <td>
                                            @if($feedback->attachment == null)
                                        No attachment
                                            @else
                                            <img height="120px" width="120px" class="img-fluid" src="{{asset('storage/'.$feedback->attachment)}}" alt="">
                                            @endif
                                        <td>

                                            @if($feedback->status==1)
                                                <a href="{{ route('feedbacks.changeStatus', ['feedback' => $feedback->id]) }}"
                                                   class="btn btn-success btn-sm mb-1 px-2" title="Change Status">Resolved</a>
                                            @else
                                                <a href="{{ route('feedbacks.changeStatus', ['feedback' => $feedback->id]) }}"
                                                   class="btn btn-danger btn-sm mb-1 px-2" title="Change Status">Unresolved</a>

                                            @endif
                                        </td>

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
