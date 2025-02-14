
@extends('layouts.app')

@section('title', 'Add Item')

@section('content')
    <h1>Add New Item</h1>
    <form action="{{ route('items.store') }}" method="POST">

        @csrf

        <label for="name">Product Name</label>
        <input name="name" id="name" type="text" required>
        <br>

        <label for="description">Description</label>
        <textarea name="description" id="description" type="textarea"></textarea>
        <br>

        <label for="category">Category:</label>
        <select name="category_id" id="category" required>
            @foreach ($categories as $category)
                <option value=" {{ $category->id }} "> {{ $category->name }} </option>
            @endforeach
        </select>
        <br>

        <button type="submit">Add</button>

    </form>
@endsection