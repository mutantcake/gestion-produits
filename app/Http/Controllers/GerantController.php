<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class GerantController extends Controller
{
    public function index()
    {
        $gerants = User::where('level', 'Gerant')->get();

        return view('users.gerants', compact('gerants'));
    }

    public function delete($id)
    {
        $gerant = User::findOrFail($id);

        if ($gerant->level === 'Gerant') {
            $gerant->delete();
            return redirect()->route('gerants.index')->with('success', 'Le gestionnaire a été supprimé avec succès.');
        } else {
            return redirect()->route('gerants.index')->with('error', 'Cet utilisateur n\'est pas un gerant.');
        }
    }
}
