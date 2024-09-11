@extends('layout')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('store.product') }}" method="PUT">
        {{-- @csrf --}}
        {{-- <form action="/product/store" method="POST"> --}}
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="namee" id="name" placeholder="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="imag" id="image" placeholder="image">
                <label for="image">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="desc" id="description" placeholder="description">
                <label for="description">Description</label>
            </div>
            <button class="btn btn-success">Create Product</button>
        </div>
    </form>
@endsection
