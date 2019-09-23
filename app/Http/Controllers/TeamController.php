<?php

namespace App\Http\Controllers;

use App\Helpers\Contracts\TeamContract;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    protected $team;
    
    public function __construct(TeamContract $team) {
        $this->team = $team;
    }
    /**
     * Display a listing of the Team.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->team->getTeamList();
        $data = ['response'=>$response];
        return view('team', $data);
    }

    /**
     * Show the form for creating a new Team.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Team in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified Team.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $response = $this->team->getTeamDetails($id);
        $data = ['response'=>$response];
        return view('teamDetails', $data);
    }

    /**
     * Show the form for editing the specified Team.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified Team in storage.
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
     * Remove the specified Team from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
