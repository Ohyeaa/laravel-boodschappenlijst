
@extends('layouts.app')

@section('title', 'Add Item')

@section('content')
    <h1>Add New Item</h1>
    <form action="{{ route('items.store') }}" method="POST">

        @csrf

        <label for="name">Product Name</label>
        <input id="name" type="text" name="name" required>
        <br>

        <label for="description">Description</label>
        <textarea id="description" type="textarea" name="description"></textarea>
        <br>

        <button type="submit">Add</button>

    </form>
@endsection