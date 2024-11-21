<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(): View|Factory|Application
    {
        return view('login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if (!Auth::attempt($request->validated()))
            return back()->withErrors(['email' => 'email or password invalid']);

        return redirect()->route('home');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function users(): View|Factory|Application
    {
        $users = User::paginate();
        return view('dashboard.users', compact('users'));
    }

    public function storeUser(Request $request): RedirectResponse
    {
        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($valid);

        return back()->with('msg', 'User has been created');
    }

    public function updateUser(Request $request, User $user): RedirectResponse
    {
        $valid = array_filter($request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable',
        ]));

        $user->update($valid);

        return back()->with('msg', 'User has been updated');
    }

    public function destroyUser(User $user): RedirectResponse
    {
        $user->delete();

        return back()->with('msg', 'User has been deleted');
    }
}
