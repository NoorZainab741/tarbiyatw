@extends('layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">To Do</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit TO Do')

@section('route', route('todos.update',['todo' => $todo->id]))

@section('form-fields')
    @include('todo.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update To Do')
