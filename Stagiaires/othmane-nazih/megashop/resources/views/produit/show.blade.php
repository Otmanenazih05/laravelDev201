@extends('layouts.app')

@section('title', $product['name'] . ' - MegaShop')

@section('content')
    <div class="breadcrumb">
        <a href="{{ route('accueil') }}">Accueil</a>
        <span>/</span>
        @if($category)
            <a href="{{ route('categorie', $category['slug']) }}">{{ $category['name'] }}</a>
            <span>/</span>
        @endif
        <strong>{{ $product['name'] }}</strong>
    </div>

    <h1 class="page-title">Détail du Produit</h1>

    <div class="product-detail">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
            <div>
                <div class="product-detail-img">Image - {{ $product['name'] }}</div>
            </div>
            <div class="product-detail-info">
                <h2>{{ $product['name'] }}</h2>
                <div class="product-detail-price">{{ number_format($product['price'], 2, ',', ' ') }} €</div>

                <div style="margin-bottom: 30px;">
                    <h3 style="color: #2c3e50; margin-bottom: 10px;">Disponibilité</h3>
                    @if($product['stock'] > 0)
                        <p style="color: #27ae60; font-weight: bold; font-size: 18px;">
                            ✓ En stock ({{ $product['stock'] }} unités disponibles)
                        </p>
                    @else
                        <p style="color: #e74c3c; font-weight: bold; font-size: 18px;">✗ Rupture de stock</p>
                    @endif
                </div>

                <div style="margin-bottom: 30px;">
                    <h3 style="color: #2c3e50; margin-bottom: 10px;">Évaluation</h3>
                    <p style="color: #f39c12; font-size: 18px;">
                        ⭐ {{ $product['rating'] }}/5 — {{ $product['reviews'] }} avis
                    </p>
                </div>

                <button class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 18px; margin-bottom: 10px;">
                    Ajouter au panier
                </button>
                <button class="btn" style="width: 100%; padding: 15px; font-size: 18px;">
                    Acheter maintenant
                </button>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            @if(!empty($product['specs']))
                <div>
                    <div class="product-specs">
                        <h3>Caractéristiques Principales</h3>
                        <ul>
                            @foreach($product['specs'] as $label => $value)
                                <li><strong>{{ $label }} :</strong> {{ $value }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if(!empty($product['ports']))
                <div>
                    <div class="product-specs">
                        <h3>Connexions &amp; Ports</h3>
                        <ul>
                            @foreach($product['ports'] as $port)
                                <li>{{ $port }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>

        @if(!empty($product['details']))
            <div style="margin-top: 40px; background: #ecf0f1; padding: 25px; border-radius: 8px;">
                <h3 style="color: #2c3e50; margin-bottom: 15px;">Description Détaillée</h3>
                <p>{{ $product['details'] }}</p>
            </div>
        @endif

        @if(!empty($similarProducts))
            <div style="margin-top: 40px;">
                <h3 style="color: #2c3e50; margin-bottom: 20px;">Produits Similaires</h3>
                <div class="products-grid">
                    @foreach($similarProducts as $similar)
                        <div class="product-card">
                            <div class="product-image">{{ $similar['name'] }}</div>
                            <div class="product-info">
                                <div class="product-name">{{ $similar['name'] }}</div>
                                <div class="product-price">{{ number_format($similar['price'], 2, ',', ' ') }} €</div>
                                <div class="product-description">{{ $similar['description'] }}</div>
                                <a href="{{ route('produit', $similar['id']) }}" class="btn">Détails</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div
            style="margin-top: 40px; background: #fff3cd; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
            <h4 style="color: #856404; margin-bottom: 10px;">📦 Livraison et Service</h4>
            <ul style="color: #856404; margin-left: 20px;">
                <li>Livraison gratuite en France métropolitaine</li>
                <li>Garantie 2 ans pièces et main d'œuvre</li>
                <li>Service client disponible 7j/7</li>
                <li>Retour gratuit sous 30 jours</li>
                <li>Installation et configuration gratuites</li>
            </ul>
        </div>
    </div>
@endsection