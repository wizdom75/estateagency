<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Image;
use App\Listing;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($listing_id='')
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($listing_id)
    {
        $listing = Listing::find($listing_id);

        return view('admin.images.create')->with('listing',$listing);
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
            'image' => 'image|required|max:1999'
        ]);
        //Handle image upload
        if($request->hasFile('image')){
            //Get image extension
            $ext = $request->file('image')->getClientOriginalExtension();

            $filename_save = 'property_'.$request->listing.'_'.time().'.'.$ext;

            $file = $request->file('image')->storeAs('public/listing_images', $filename_save);

        }else{
            $filename_save = 'noimage.png';
        }

        if($file){
            $image = new Image;
            $image->listing_id = $request->input('listing');
            $image->path = $filename_save;
            $image->is_default = $request->input('is_default');
            $image->save();
        
        }

        return redirect('/admin/images/'.$image->listing_id.'/create')->with('success', 'Image uploaded successfully');
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
