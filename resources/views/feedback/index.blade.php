@extends('layouts.master')

@section('title', 'Feedback')

@section('breadcrumb-title', 'Feedback')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Feedback</li>
{{--    <li class="breadcrumb-item active">List</li>--}}
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Feedback</h4>
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
                                    <th>Sr#</th>
                                    <th>Feedback</th>
                                    <th>Attachment</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($feedbacks as $feedback)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$feedback->detail}}</td>
                                        <td>
                                            @if($feedback->attachment == null)
                                        No attachment
                                            @else
                                            <img height="70px" width="70px" src="{{asset('storage/'.$feedback->attachment)}}" alt="">
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
                                        <td>
                                                <a href="{{ route('feedbacks.show', ['feedback' => $feedback->id]) }}"
                                                    class="btn btn-success btn-sm m-1 p-2" title="View">
                                                    <i class="fa fa-eye"></i>
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
