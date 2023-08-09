@extends('layouts.app')

@section('title', 'Détails du produit')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $product->productname }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Code du produit:</strong> {{ $product->item_code }}</p>
                    <p><strong>Catégorie:</strong> {{ $product->category->name }}</p>
                    <p><strong>Prix:</strong> {{ $product->price }}</p>
                    <p><strong>Détails:</strong> {!! $product->details !!}</p>
                    <div class="mb-3">
                        <strong>Image :</strong><br>
                        <img src="{{ asset($product->image) }}" alt="{{ $product->productname }}" style="max-width: 300px;">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</a>
                    <a href="{{ route('products') }}" class="btn btn-primary">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
