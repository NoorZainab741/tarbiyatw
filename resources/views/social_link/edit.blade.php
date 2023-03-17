@extends('layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Social Links</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Social Links')

@section('route', route('social_links.update',['social_link' => $social_link->id]))

@section('form-fields')
    @include('social_link.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update Social Links')
