<?php

namespace App\Http\Controllers;
use App\Listing;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $term = Request()->get('q');
        $buy = Request()->get('buy');

        // $listings = Listing::where('title', 'like', '%'.$term.'%')->orWhere(function($listings){
        //     $listings->where('post_code', 'like', '%'.$term.'%')->where('is_buy', $buy);
        // })->get();

        if($buy == 'Y'){
            $listings = Listing::where('title', 'like', '%'.$term.'%')->orWhere('post_code', 'like', '%'.$term.'%')->where('is_buy', $buy)->get();
        }elseif($buy == 'N'){
            $listings = Listing::where('title', 'like', '%'.$term.'%')->orWhere('post_code', 'like', '%'.$term.'%')->where('is_buy', $buy)->get();
        }

        $pcodes = $term;
        return view('listings.index')->with(compact('listings', 'pcodes'));
    }

    
}
