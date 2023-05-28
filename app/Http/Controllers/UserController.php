<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\User;

class UserController extends Controller
{
    public function showProfile()
    {
        return view('profile');
    }
    public function showOrders()
    {
        return view('orders');
    }

    public function showSettings()
    {
        return view('settings');
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        $users = Cache::get('users', []);
        $users[] = $data;
        Cache::put('users', $users);

        return redirect()->back()->with('success', 'User was added.');
    }

    public function index()
    {
        $users = Cache::get('users', []);
        return view('users.index', ['users' => $users]);
    }
}
