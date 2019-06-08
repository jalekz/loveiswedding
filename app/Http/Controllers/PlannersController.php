<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planner;
use App\Http\Resources\PlannersCollection;

class PlannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $planners = Planner::paginate(10);

        if($request->wantsJson()) {
            $data = array(
                'fields' => ['ID', 'Name', 'Last Name', 'Email', 'PhoneNumber'], 
                'data' => new PlannersCollection($planners)
            );
            return $data;
        }

        return view('planners.index', ['planners' => $planners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planner = new Planner();
        return view('planners.create', ['planner' => $planner]);
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
            'Email' => $request->Email,
            'Name' => $request->Name,
            'LastName' => $request->LastName,
            'PhoneNumber' => $request->PhoneNumber
        ];

        if (Planner::create($options)){
            return $this->index();
        } 
        else {
            return view('planners.create');
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
        $planner = Planner::find($id);
        return view('planners.edit', ['planner' => $planner]);
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
        $planner = Planner::find($id);

        $planner->Email = $request->Email;
        $planner->Name = $request->Name;
        $planner->LastName = $request->LastName;
        $planner->PhoneNumber = $request->PhoneNumber;

        if ($planner->save()){
            return $this->index();
        } 
        else {
            return view('planners.edit', ['planner' => $planner]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/productos');
    }
}
