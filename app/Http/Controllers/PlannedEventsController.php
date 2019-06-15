<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlannedEvent;
use App\Http\Resources\PlannedEventsCollection;

class PlannedEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $plannedevents = PlannedEvent::paginate(10);
      if($request->wantsJson()) {
          $data = array(
              'fields' => ['ID', 'Name','HostName', 'Date', 'Time'], 
              'data' => new PlannedEventsCollection($plannedevents)
          );
          return $data;
      }
      return view('plannedevents.index', ['plannedevents' => $plannedevents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plannedevent = new PlannedEvent();
        return view('plannedevents.create', ['plannedevent' => $plannedevent]);
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
          'Name' => $request->Name,
          'HostName' => $request->HostName,
          'Date' => $request->Date,
          'Time' => $request->Time
        ];

        if (PlannedEvent::create($options)){
            return redirect('plannedevents/');
        } 
        else {
            return redirect('plannedevents/create');
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
