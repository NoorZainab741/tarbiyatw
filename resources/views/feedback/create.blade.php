
@extends('layouts.master')

@section('title', 'Create')

@section('breadcrumb-title', 'Create')

@section('breadcrumb-item')
    <li class="breadcrumb-item">About Us</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New About Us')

@section('route', route('about_us.store'))

@section('form-fields')
    @include('about_us.fields')
@endsection

@section('submit-text', 'Create Sub Menu')
