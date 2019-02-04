<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Image;
use Illuminate\Http\Request;


class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Request()->is('for-sale')){
            $isBuy = 'Y';
        }elseif(Request()->is('to-rent')){
            $isBuy = 'N';
        }
        $listings = Listing::where('is_buy', $isBuy)->orderBy('created_at', 'desc')->get();
        $pcode = '';
        if(count($listings)>0){
            for($i=0; $i < count($listings); $i++){
                $pcode .= $listings[$i]->post_code.',';
            }
        }
        $pcodes = rtrim($pcode, ',');
        return view('listings.index')->with(compact('listings', 'pcodes', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
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
            'features' => 'required|min:100',
            'details' => 'required|min:200',
            'price' => 'required|numeric'
        ]);

        //Create a new rental listing
        $listing = new Listing;
        $listing->user_id = 1;
        $listing->title = $request->input('title');
        $listing->post_code = $request->input('post_code');
        $listing->features = $request->input('features');
        $listing->details = $request->input('details');
        $listing->price = $request->input('price');

        $listing->save();

        return redirect('/admin/listings/create')->with('success', 'Listing added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        $listing = Listing::find($id);
        $images = Listing::find($listing->id)->images;
        return view('listings.show')->with(compact('listing', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('listings.edit')->with('listing', $listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $id)
    {
        //return $id;
      $this->validate($request, [
            'title' => 'required|max:60|unique:listings',
            'post_code' => 'required|min:2|max:10',
            'features' => 'required|min:50',
            'details' => 'required|min:100',
            'price' => 'required|numeric'
        ]);

        //Create a new listing
        $listing = Listing::find($id);
        $listing->title = Input::get('title');
        $listing->post_code = Input::get('post_code');
        $listing->features = Input::get('features');
        $listing->details = Input::get('details');
        $listing->price = Input::get('price');

        $listing->update();

        return redirect("/listings/$id")->with('success', 'Listing updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }

    /**
     * 
     */
    public function brochure(){
        $id = Request()->get('prop_id');

        $listing = Listing::find($id);
        return view('brochure.brochure')->with('listing', $listing);
        
    }
}
