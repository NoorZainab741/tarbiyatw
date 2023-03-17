@extends('layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Editor</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('layouts.form')

@section('form-heading', 'Edit Editor')

@section('route', route('editors.update', ['editor' => $editor->id]))

@section('form-fields')
    @include('editor.fields')
    @method('PUT')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

@section('submit-text', 'Update Editor')
