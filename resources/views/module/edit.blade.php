@extends('layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Menu</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Menu')

@section('route', route('modules.update', ['module' => $module->id]))

@section('form-fields')
    @include('module.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update Menu')
