@extends('layouts.app')

@section('title', $category->name . ' - Products')

@section('content')
    <h2>{{ $category->name }}</h2>
    <p>{{ $category->description }}</p>
    <a href="{{ route('categories.index') }}">&larr; Back to Categories</a>

    <h3>Products</h3>

    @if($products->isEmpty())
        <p>No products in this category.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ number_format($product->price, 2) }} DH</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
