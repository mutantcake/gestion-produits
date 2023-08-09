@extends('layouts.app')

@section('title', 'Liste des gerants')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des gerants</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('register') }}" class="btn btn-primary mb-3">Ajouter un gerant</a>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nom complet</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($gerants as $gerant)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $gerant->name }}</td>
                        <td>{{ $gerant->email }}</td>
                        <td>
                            <a href="{{ route('gerant.delete', $gerant->id) }}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce gestionnaire ?')">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
