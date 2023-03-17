@extends('layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Data Management</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Data in Menu')

@section('route', route('data_uploadings.update', ['data_uploading' => $data_uploading->id]))

@section('form-fields')
    @include('data_uploading.fieldswithoutsubmenu')
    @method('PUT')
@endsection

@section('submit-text', 'Update Data')
