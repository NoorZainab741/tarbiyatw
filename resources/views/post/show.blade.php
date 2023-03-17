@extends('layouts.master')

@section('title', 'Post View')

@section('breadcrumb-title', 'Post View')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Post</li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Post</h4>
                        <a href="{{route('posts.index')}}"
                           class="btn btn-primary pull-right">
                            <i class="fa fa-arrow-left">
                               Back to Index</i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div>
                            <tr>
                                <td><h5>Type</h5>
                                    <p>{{$post->type}}</p></td>
                                <br>
                                @if($post->type == 'Daily Quran' or $post->type == 'Daily Hadith')

                                <td><h5>Reference</h5>  <p>{{ $post->reference }}</p></td>
                                <br>
                                <td><h5>Arabic</h5>  <p>{{ $post->arabic }}</p></td>
                                <br>
                                <td><h5>Translation</h5>  <p>{{ $post->translation }}</p></td>
                                <br>

                                    @else
                                    <td><h5>Title</h5>  <p>{{ $post->title }}</p></td>
                                    <br>
                                    <td><h5>Link</h5>  <p><a href ="{!! $post->link !!}">{!! $post->link !!}</a></p></td>
                                    <br>

                                @endif
                                <td><h5>Images</h5>
                                    @if($post->images == null)
                                        No Images
                                    @else
                                        @foreach($post->images as $image)
                                            <div class="mb-2">
                                                <img height="200px" width="200px" class="img-fluid" src="{{asset('storage/'.$image)}}" alt="">
                                            </div>
                                        @endforeach
                                    @endif
                                <br>

                            </tr>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
