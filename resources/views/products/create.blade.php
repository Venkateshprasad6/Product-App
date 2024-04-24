@extends('products.layout')
    
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Add New Product</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input 
                type="text" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror" 
                id="inputName" 
                placeholder="Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Product Name:</strong></label>
            <input 
                type="text" 
                name="product_name" 
                class="form-control @error('product_name') is-invalid @enderror" 
                id="inputProductName" 
                placeholder="product_name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputDetail" class="form-label"><strong>Product Description:</strong></label>
            <textarea 
                class="form-control @error('product_description') is-invalid @enderror" 
                style="height:150px" 
                name="product_description" 
                id="inputProductDescription" 
                placeholder="product_description"></textarea>
            @error('product_description')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputQuantity" class="form-label"><strong>Quantity:</strong></label>
            <input 
                type="text" 
                name="quantity" 
                class="form-control @error('quantity') is-invalid @enderror" 
                id="inputName" 
                placeholder="quantity">
            @error('quantity')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Address:</strong></label>
            <input 
                type="text" 
                name="address" 
                class="form-control @error('address') is-invalid @enderror" 
                id="inputAddress" 
                placeholder="address">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>
  
  </div>
</div>
@endsection
        
  
  