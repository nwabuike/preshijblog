<?php

namespace App\Http\Controllers;

use App\Models\Politic;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Wink\WinkPost;

class PoliticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'posts' => WinkPost::with('tags')
                ->live()
                ->whereHas('tags', function (Builder $query) {
                    $query->where('slug', 'politics');
                })->orderBy('publish_date'),
                // ->simplePaginate(12),
            
            'series_title' => 'The Ultimate Revelation of Travel (Politics) ',
            'series_description' => 'Get you the lastest Travel Onboard'
        ];

        return view('politics', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function show(Politic $politic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function edit(Politic $politic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Politic $politic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Politic $politic)
    {
        //
    }
}
