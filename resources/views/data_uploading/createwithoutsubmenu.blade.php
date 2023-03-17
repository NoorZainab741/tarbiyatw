
@extends('layouts.master')

@section('title', 'Create')

@section('breadcrumb-title', 'Create')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Data Management</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New Data in Menu')

@section('route', route('data_uploadings.store'))

@section('form-fields')
    @include('data_uploading.fieldswithoutsubmenu')
@endsection

@section('submit-text', 'Create Data')
