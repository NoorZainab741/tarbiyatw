@extends('layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Post</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Post')

@section('route', route('posts.update', ['post' => $post->id]))

@section('form-fields')
    @include('post.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update Post')
