<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingsController extends Controller
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
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'contact_number' => 'required'
        ]);

        $booking = new Booking;
        $booking->listing_id = $request->input('listing_id')??0;
        $booking->user_id = 1;
        $booking->appointment_date = $request->input('appointment_date');
        $booking->appointment_time = $request->input('appointment_time');
        $booking->firstname = $request->input('firstname');
        $booking->lastname = $request->input('lastname');
        $booking->email = $request->input('email');
        $booking->contact_number = $request->input('contact_number');
        $booking->is_valuation = ($request->input('is_valuation') > 0)?'1':'0';

        $booking->save();
            if($booking->listing_id > 0){
                return redirect('/book-a-viewing-appoitment')->with('success', 'Booking request sent.');
            }else{
                return redirect('/book-a-visit')->with('success', 'Booking request sent.');
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
