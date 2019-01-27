<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Listing;

class ListingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::all()->sortByDesc('created_at');

        return view('admin.listings.index')->with('listings', $listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:listings|max:60',
            'post_code' => 'required|min:2|max:10',
            'features' => 'required|min:10',
            'details' => 'required|min:100',
            'price' => 'numeric',
            'rent' => 'numeric'
        ]);

        //Create a new rental listing
        $listing = new Listing;
        $listing->user_id = 1;
        $listing->title = $request->input('title');
        $listing->post_code = $request->input('post_code');
        $listing->features = $request->input('features');
        $listing->details = $request->input('details');
        $listing->bedrooms = $request->input('bedrooms');
        $listing->bathrooms = $request->input('bathrooms');
        $listing->lounges = $request->input('lounges');
        $listing->type = $request->input('type');
        $listing->is_buy = $request->input('is_buy');
        $listing->price = $request->input('price');
        $listing->rent = $request->input('rent');

        $listing->save();

        return redirect('/admin/listings/create')->with('success', 'Listing added.');
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
        $listing = Listing::find($id);
        
        return view('admin.listings.edit')->with('listing', $listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $id)
    {
        //return $request->id;
        $this->validate($request, [
            //'title' => 'required|max:60|unique:listings',
            'post_code' => 'required|min:2|max:10',
            'features' => 'required|min:50',
            'details' => 'required|min:100',
            'price' => 'required|numeric',
            'type' => 'required',
        
        ]);

        //Update listing
        $listing = Listing::find($request->id);
        $listing->title = $request->title;
        $listing->post_code = $request->post_code;
        $listing->features = $request->features;
        $listing->details = $request->details;
        $listing->price = $request->price;

        $listing->update();

        return redirect("/admin/listings/$listing->id/edit")->with('success', 'Listing updated.');
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
