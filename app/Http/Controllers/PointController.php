<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Contracts\PointContract;

class PointController extends Controller
{
    protected $point;
    
    public function __construct(PointContract $point) {
        $this->point = $point;
    }
    /**
     * Display a listing of the Points.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->point->getPointList();
        $data = ['response'=>$response];
        return view('point', $data);
    }

    /**
     * Show the form for creating a new Points.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Points in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified Points.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified Points.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified Points in storage.
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
     * Remove the specified Points from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
