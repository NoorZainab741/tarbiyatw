
@extends('layouts.master')

@section('title', 'Create')

@section('breadcrumb-title', 'Create')

@section('breadcrumb-item')
    <li class="breadcrumb-item">To Do</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Add New To Do')

@section('route', route('todos.store'))

@section('form-fields')
    @include('todo.fields')
@endsection

@section('submit-text', 'Create To Do')
