<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showContact()
    {
        return view('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $page = Page::where('slug', $slug)->first();

        return view('pages.show')->with('page', $page);
    }
}
