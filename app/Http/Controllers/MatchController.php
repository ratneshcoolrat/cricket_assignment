<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Contracts\MatchContract;

class MatchController extends Controller
{
    protected $match;
    
    public function __construct(MatchContract $match) {
        $this->match = $match;
    }
    /**
     * Display a listing of the Matches.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->match->getMatchList();
        $data = ['response'=>$response];
        return view('match', $data);
    }

    /**
     * Show the form for creating a new Matches.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Matches in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified Matches.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified Matches.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified Matches in storage.
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
     * Remove the specified Matches from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
