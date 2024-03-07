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
    public function blockUser($id)
    {
        $user = User::find($id);
    
        if ($user) {
            if ($user->blocked) {
                $user->blocked = false;
                $message = 'Utilisateur débloqué avec succès.';
            } else {
                $user->blocked = true;
                $message = 'Utilisateur bloqué avec succès.';
            }
            $user->save();
            return redirect()->back()->with('success', $message);
        }
    
        return redirect()->back()->with('error', 'Utilisateur non trouvé.');
    }
    

}
