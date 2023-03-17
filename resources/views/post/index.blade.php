@extends('layouts.master')

@section('title', 'Post')

@section('breadcrumb-title', 'Post')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Post</li>
    <li class="breadcrumb-item active">List</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Post List</h4>
                        <a href="{{route('posts.create')}}"
                           class="btn btn-primary pull-right">
                            <i class="fa fa-plus">
                                Add New Post</i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$post->type}}</td>
                                        @if($post->arabic == null)

                                            <td>{{$post->title}}</td>

                                        @else

                                            <td>{{$post->arabic}}</td>

                                        @endif
                                        <td>
                                            <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                                               class="btn btn-primary btn-sm m-1 p-2" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('posts.show', ['post' => $post->id]) }}"
                                               class="btn btn-success btn-sm m-1 p-2" title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}"
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
