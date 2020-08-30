<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Wink\WinkPost;

class SportController extends Controller
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
                    $query->where('slug', 'sport');
                })->orderBy('publish_date'),
                // ->simplePaginate(12),
            
            'series_title' => 'The Ultimate Revelation of Sport (Sport) ',
            'series_description' => 'Get you the lastest Sport Onboard'
        ];

        return view('sport', compact('data'));
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
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(Sport $sport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sport $sport)
    {
        //
    }
}
