<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::whereIn('role', ['organizer', 'user'])->get();
        return view('user.index', compact('users'));
    }
    public function block(User $user)
    {
        // Mettez ici la logique pour bloquer l'utilisateur, par exemple :
        $user->update(['blocked' => true]);

        // Rediriger ou renvoyer une réponse appropriée
        return redirect()->route('users.index')->with('success', 'User blocked successfully');
    }
}
