<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Bouncer;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user_roles = $user->getRoles();
        $all_roles = Role::all();
        return view('admin.users.edit', compact('user', 'user_roles', 'all_roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $users = User::all();
        $assigned_roles = $request->all()['roles'];

        $all_role_names = [];
        foreach (Role::all() as $role) {
            $all_role_names[] = $role['name'];
        }
        $all_role_names = Arr::flatten($all_role_names);
        foreach ($all_role_names as $role) {
            Bouncer::retract("$role")->from($user->id);
        }

        foreach ($assigned_roles as $role) {
            Bouncer::assign("$role")->to($user->id);
        }

        return view('admin.users.index')->with('users', $users);
//        dd($request->all()['roles']);
//        dd($user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $all_role_names = [];
        foreach (Role::all() as $role) {
            $all_role_names[] = $role['name'];
        }
        $all_role_names = Arr::flatten($all_role_names);
        foreach ($all_role_names as $role) {
            Bouncer::retract("$role")->from($user->id);
        }

        $user->delete();

        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }
}
