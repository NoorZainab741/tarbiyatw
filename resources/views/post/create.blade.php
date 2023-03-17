
@extends('layouts.master')

@section('title', 'Create')

@section('breadcrumb-title', 'Create')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Post</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New Post')

@section('route', route('posts.store'))

@section('form-fields')
    @include('post.fields')
@endsection

@section('submit-text', 'Create Post')
