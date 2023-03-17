
@extends('layouts.master')

@section('title', 'Create')

@section('breadcrumb-title', 'Create')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Sub Menu</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New Sub Menu')

@section('route', route('sub_menus.store'))

@section('form-fields')
    @include('sub_menu.fields')
@endsection

@section('submit-text', 'Create Sub Menu')
