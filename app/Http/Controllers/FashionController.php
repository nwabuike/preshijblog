<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Wink\WinkPost;

class FashionController extends Controller
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
                    $query->where('slug', 'fashion');
                })->orderBy('publish_date'),
                // ->simplePaginate(12),
            
            'series_title' => 'The Ultimate Revelation of Fashion (Fashion) ',
            'series_description' => 'Get you the lastest Fashion Onboard'
        ];

        return view('fashion', compact('data'));
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
     * @param  \App\Models\Fashion  $fashion
     * @return \Illuminate\Http\Response
     */
    public function show(Fashion $fashion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fashion  $fashion
     * @return \Illuminate\Http\Response
     */
    public function edit(Fashion $fashion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fashion  $fashion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fashion $fashion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fashion  $fashion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fashion $fashion)
    {
        //
    }
}
