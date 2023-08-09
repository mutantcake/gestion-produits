@extends('layouts.app')

@section('title', 'Formulaire catégorie')

@section('contents')
    <form action="{{ isset($category) ? route('category.update', $category->id) : route('category.add') }}" method="post">
     @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ isset($category) ? 'Modification de catégorie' : 'Ajout de catégorie' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nom de la catégorie</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ isset($category) ? $category->name : ''}}"> 
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a type="submit" class="btn btn-warning" href="{{ route('category') }}">Annuler</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection