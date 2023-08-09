@extends('layouts.app')

@section('title', isset($product) ? 'Modifier le produit' : 'Ajouter un produit')

@section('contents')
<form action="{{ isset($product) ? route('products.update', $product->id) : route('products.save') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($product) ? 'Modifier le produit' : 'Ajouter un produit' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="item_code">Code du produit</label>
                        <input type="text" class="form-control" id="item_code" name="item_code" value="{{ isset($product) ? $product->item_code : '' }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <div class="form-group">
                        <label for="productname">Nom du produit</label>
                        <input type="text" class="form-control" id="productname" name="productname" value="{{ isset($product) ? $product->productname : '' }}">
                    </div>

                    <div class="form-group">
                        <label for="categoryId">Catégorie du produit</label>
                        <select name="categoryId" id="categoryId" class="custom-select">
                            <option value="" disabled>-- Choisir une catégorie --</option>
                            @php
                                $selectedCategoryId = isset($product) ? $product->category_id : null;
                            @endphp
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ ($selectedCategoryId == $category->id) ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="price">Prix du produit</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ isset($product) ? $product->price : '' }}">
                    </div>

                    <div class="form-group">
                        <label for="details">Détails du produit</label>
                        <textarea id="details" name="details">{{ isset($product) ? $product->details : '' }}</textarea>
                    </div>

                    <input type="hidden" name="id" value="{{ isset($product) ? $product->id : ''}}">

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Mettre à jour' : 'Enregistrer' }}</button>
                    <a type="submit" class="btn btn-warning" href="{{ route('products') }}">Annuler</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
