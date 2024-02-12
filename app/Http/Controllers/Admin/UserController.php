<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('admin.users', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.users-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return back()->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return back()->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success', 'User deleted successfully');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function roles()
    {
        return view('admin.roles');
    }

    public function permissions()
    {
        return view('admin.permissions');
    }
}