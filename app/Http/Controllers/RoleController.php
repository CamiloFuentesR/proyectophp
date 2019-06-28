<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use PhpParser\Node\Stmt\Catch_;

class RoleController extends Controller
{

    protected $redirectTo = '/roles.index';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();

        return view('roles.index', compact('roles'));
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $permissions = Permission::get();
        return view::make('roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
     /*   return  Validator::make($request, [

            'slug' => ['required', 'string', 'slug', 'max:255', 'unique:roles,slug'],

        ]);*/

        $role = Role::create($request->all());
        /*$role = Role::create([
            'name'=> $request['name'],
            'slug'=> $request['slug'],
            'description'=> $request['description']   son lo mismo
        ]);*/

        $role->permissions()->sync($request->get('permissions')); //codigo preparado desde shinobi retrait

        return redirect()->route('roles.index',$role->id)
        ->with('info','Role guardado con éxito');

    }

    public function show(Role $role)
    {
        //$role = Role::find($id); estoesta delarado en el metodo, por lo tanto no es necesario incluirlo
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions= Permission::get(); //aqui obtengo los roles delsistema y los envio a la variable $rol
        return view('roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {



        //actualizar Role /solo 1 rol

        $role->update($request->all());

        //actualizar permisos
        $role->permissions()->sync($request->get('permissions')); //codigo preparado desde shinobi retrait

        return redirect()->route('roles.index',$role->id)
        ->with('info','Role actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('info','Rol eliminado correctamente');
    }
}
