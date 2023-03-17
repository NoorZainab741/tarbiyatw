
@extends('layouts.master')

@section('title', 'Create')

@section('breadcrumb-title', 'Create')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Menu</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New Menu')

@section('route', route('modules.store'))

@section('form-fields')
    @include('module.fields')
@endsection

@section('submit-text', 'Create Menu')
