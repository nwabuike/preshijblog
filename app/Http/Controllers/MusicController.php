<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Wink\WinkPost;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class MusicController extends Controller
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
                    $query->where('slug', 'music');
                })->orderBy('publish_date'),
                // ->simplePaginate(12),
            
            'series_title' => 'The Ultimate Revelation of Music (Music) ',
            'series_description' => 'Get you the lastest Music Onboard'
        ];

        return view('music', compact('data'));
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
//     public function showUploadFile(Request $request) {
//         $file = $request->file('image');
     
//         //Display File Name
//         echo 'File Name: '.$file->getClientOriginalName();
//         echo '<br>';
     
//         //Display File Extension
//         echo 'File Extension: '.$file->getClientOriginalExtension();
//         echo '<br>';
     
//         //Display File Real Path
//         echo 'File Real Path: '.$file->getRealPath();
//         echo '<br>';
     
//         //Display File Size
//         echo 'File Size: '.$file->getSize();
//         echo '<br>';
     
//         //Display File Mime Type
//         echo 'File Mime Type: '.$file->getMimeType();
     
//         //Move Uploaded File
//         $destinationPath = 'uploads';
//         $file->move($destinationPath,$file->getClientOriginalName());
//      }
//   }
// }
    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'title' => 'required',
            'description' => 'nullable',
            'file' => 'required|file|mimes:jpeg,jpg,png,gif|max:2048',
            'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
        ]); 

         // code for upload 'file'

          if($request->hasFile('file')){
            $uniqueid=uniqid();
            $original_name=$request->file('file')->getClientOriginalName();
            $size=$request->file('file')->getSize();
            $extension=$request->file('file')->getClientOriginalExtension();
            $name=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $imagepath=url('/storage/uploads/files/'.$name);
            $path=$request->file('file')->storeAs('public/uploads/files/',$name);  
           }


        // code for upload 'audio'
        // handle multiple files 
       if(is_array($request->file('audio')))
        {
         $audios=array();
         foreach($request->file('audio') as $file) {
            $uniqueid=uniqid();
            $original_name=$file->getClientOriginalName();
            $size=$file->getSize();
            $extension=$file->getClientOriginalExtension();
            $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $audiopath=url('/storage/upload/files/audio/'.$filename);
            $path=$file->storeAs('/upload/files/audio',$filename);
            array_push($audios,$audiopath);
         }
         $all_audios=implode(",",$audios);
     }else{ 
         // handle single file 
         if($request->hasFile('audio')){
         $uniqueid=uniqid();
         $original_name=$request->file('audio')->getClientOriginalName();
         $size=$request->file('audio')->getSize();
         $extension=$request->file('audio')->getClientOriginalExtension();
         $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
         $audiopath=url('/storage/upload/files/audio/'.$filename);
         $path=$file->storeAs('public/upload/files/audio/',$filename);
         $all_audios=$audiopath;
        }
    }

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        //
    }
}
