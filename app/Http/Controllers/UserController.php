<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\EventLog;
use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


    public function index()
    {
        $users = User::all()->sortBy('fullname');
        return view('users.index', ['users' => $users]);
    }

    public function show(User $user = null)
    {
        if (!$user) {
            $user = Auth::user();
        }
        $roles = User::$avRoles;

        return view('users.show', [
            'user' => $user,
            'avRoles' => $roles,
        ]);
    }

    public function edit(User $user)
    {
        $roles = User::$avRoles;
        return view('users.edit', [
            'user' => $user,
            'avRoles' => $roles,
        ]);
    }

    public function create()
    {
        $roles = User::$avRoles;
        return view('users.create', ['avRoles' => $roles]);
    }

    public function store(Request $request)
    {

        $employee = new Employee();
        $employee->department_id = $request->department_id ?? 0;
        $employee->firstname = $request->firstname;
        $employee->secondname = $request->secondname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->created_by_id = Auth::id();
        $employee->modified_by_id = Auth::id();
        $employee->save();

        $user = new User();
        $user->roles = implode(',', $request->roles);
        $user->user_name = $request->login;
        $user->email = $request->email;
        $user->status = $request->status ? 1 : 0;

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->userable()->associate($employee);
        $user->save();

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $path = Storage::disk('public')->putFileAs(
                'users/' . $user->id,
                $file,
                'avatar_' . date('Y-m-d') . '.' . $file->extension()
            );
            $user->userable->photo = $path;
            $user->userable->save();
        }


        return redirect()->route('users.edit', ['user' => $user])->with('success', 'Profile created successfully.');
    }


    public function update(Request $request, User $user = null)
    {
        if (!$user) {
            $user = Auth::user();
        }

        if ($request->onlypassword == 1) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('users.show', ['user' => $user])->with('success', 'Profile updated successfully.');
        } else {

            
            return redirect()->route('users.show', ['user' => $user])->with('success', 'Profile updated successfully.');
        }
    }


    function loginAs(User $user)
    {

        if (Auth::user()->isAdmin() && $user->id > 0) {
            Event::loginAs($user->id);
            Auth::loginUsingId($user->id);
            Session::put('localrole', null);
            return redirect()->route('home');
        } else
            return view('auth.login');
    }


    function getAvatar(User $user)
    {
        if ($user->userable->photo && Storage::disk('public')->exists($user->userable->photo)) {
            return Storage::disk('public')->download($user->userable->photo);
        }
        return Storage::disk('public')->download('system/np_m.jpg');
    }
}
