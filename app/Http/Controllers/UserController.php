<?php

namespace App\Http\Controllers;

use DB;
use App\Events\UserRegistered;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Categoria;
use App\Models\Pais;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['pais','categoria'])->orderBy('id','ASC')->get();
        $pais = Pais::all();
        //dd(User::getEmailAdmin());
        return Inertia::render('User/Index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pais = Pais::all();
        $categorias = Categoria::all();

        return Inertia::render('User/Create',compact('pais','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        try {
            DB::beginTransaction();
                $user = User::create($request->all());
                event(new UserRegistered($user));
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }

        return Redirect::route('dashboard.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $dashboard)
    {
        $user = $dashboard;
        $pais = Pais::all();
        $categorias = Categoria::all();
        return Inertia::render('User/Edit',compact('user','pais','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $dashboard)
    {
        try {
            DB::beginTransaction();
                $dashboard->update($request->all());
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
        return Redirect::route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $dashboard)
    {
        try {
            DB::beginTransaction();
                $dashboard->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
        return Redirect::route('dashboard.index');
    }
}
