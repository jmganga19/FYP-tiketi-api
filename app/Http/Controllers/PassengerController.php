<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save passenger details
        // $passenger = new  Passenger();
        // $passenger ->firstName= $request->firstName;
        // $passenger ->lastName= $request->lastName;
        // $passenger ->phoneNumber= $request->phoneNumber;
        // $passenger ->email= $request->email;

        $attrs = $request-> validate(
            [
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'phoneNumber' => 'required|string',
                'email' => 'required|email'
            ]
        );
        $passenger = Passenger::create([
            'user_id' => auth()->user()->id,
            'firstName' =>$attrs['firstName'],
            'lastName' =>$attrs['lastName'],
            'phoneNumber' =>$attrs['phoneNumber'],
            'email' =>$attrs['email'],
        ]);
        return response([
            'message' => $attrs['firstName'].' '.'Created',
            'passenger' => $passenger,
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function show(Passenger $passenger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function edit(Passenger $passenger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passenger $passenger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passenger $passenger)
    {
        //
    }
}
