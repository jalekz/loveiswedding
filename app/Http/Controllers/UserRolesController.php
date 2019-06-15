<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRole;
use App\Http\Resources\UserRolesCollection;

class UserRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userroles = UserRole::paginate(10);

        if($request->wantsJson()) {
            $data = array(
                'fields' => ['ID', 'Role'], 
                'data' => new UserRolesCollection($userroles)
            );
            return $data;
        }

        return view('userroles.index', ['userroles' => $userroles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userrole = new UserRole();
        return view('userroles.create', ['userrole' => $userrole]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $options = [
          'Role' => $request->Role
        ];

        if (UserRole::create($options)){
            return redirect('userroles');
        } 
        else {
            return $this->create();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
