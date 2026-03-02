@extends('layouts.app')

@section('title', $category['name'] . ' - MegaShop')

@section('content')
    <div class="breadcrumb">
        <a href="{{ route('accueil') }}">Accueil</a>
        <span>/</span>
        <strong>{{ $category['name'] }}</strong>
    </div>

    <h1 class="page-title">{{ $category['icon'] }} {{ $category['name'] }}</h1>

    <div class="products-grid">
        @forelse($products as $product)
            <div class="product-card">
                <div class="product-image">{{ $product['name'] }}</div>
                <div class="product-info">
                    <div class="product-name">{{ $product['name'] }}</div>
                    <div class="product-price">{{ number_format($product['price'], 2, ',', ' ') }} €</div>
                    <div class="product-description">{{ $product['description'] }}</div>
                    <a href="{{ route('produit', $product['id']) }}" class="btn">Détails</a>
                </div>
            </div>
        @empty
            <p>Aucun produit disponible dans cette catégorie.</p>
        @endforelse
    </div>
@endsection