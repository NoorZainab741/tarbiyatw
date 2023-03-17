@extends('layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Sub Menu</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Sub Menu')

@section('route', route('sub_menus.update', ['sub_menu' => $sub_menu->id]))

@section('form-fields')
    @include('sub_menu.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update Sub Menu')
