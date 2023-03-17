@extends('layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">About Us</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit About Us')

@section('route', route('about_us.update',['about_u' => $about_u->id]))

@section('form-fields')
    @include('about_us.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update About Us')
