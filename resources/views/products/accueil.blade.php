@extends('layouts.app')

@section('title', 'Liste des Produits')

@section('contents')
    <div class="card shadow mb-4">
        <div  class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des produits</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('products.add') }}" class="btn btn-primary mb-3">Ajouter un produit</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Code du produit</th>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php( $no = 1)
                    @foreach ($data as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th> <img style="width:50px; height:auto;" src="{{ asset(''.$row->image) }}"/></th>
                            <td>{{ $row->item_code }}</td>
                            <td>{{ $row->productname }}</td>
                            <td>{{ $row->category->name }}</td>
                            <td>{{ $row->price }}</td>
                        
                            <td>                                
                                <a href="{{ route('products.details', $row->id) }}" class="btn btn-primary">Détails</a>
                                <a href="{{ route('products.edit', $row->id) }}" class="btn btn-warning">Modifier</a>
                                <a href="{{ route('products.delete', $row->id) }}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')" >Supprimer</a>
                            </td>
                                        
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection