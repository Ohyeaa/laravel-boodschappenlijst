
@extends('layouts.app')

@section('title', 'Edit Item')

@section('content')
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">New Product Name</label>
        <input name="name" id="name" type="text" value=" {{ $item->name }}" required>
        <br>

        <label for="description">Description</label>
        <textarea name="description" id="description">{{ $item->description }}</textarea>
        <br>

        <button type="submit">Save Changes</button>
    </form>
@endsection