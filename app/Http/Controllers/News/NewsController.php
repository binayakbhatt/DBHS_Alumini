<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsPostRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsPostRequest $request)
    {
        if($request->hasFile('image')){
        $extension = $request->file('image')->extension();
        $image_name = date('dmYHis').'.'.$extension;
        $request->file('image')->move(public_path('images/news/'),$image_name);
        $request->image = $image_name;
        }
      

        News::create([
            'date' => $request->input('date'),
            'headline' =>$request->input('headline'),
            'slug'=> Str::slug($request->input('headline'), '-'),
            'body' =>    $request->input('body'),
            'image' => $request->image,
            'reporter'=> Str::ucfirst($request->input('reporter')),
        ]);

        return redirect()->route('news.index')->with('success', 'News added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news_single = News::where('id', $id)->first();
        return view ('news.show',compact('news_single'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_single = News::where('id', $id)->first();
        return view ('news.edit',compact('news_single'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdateRequest $request, $id)
    {
       
        $news = News::findorFail($id);
        if($request->hasFile('image'))
        {
        if(file_exists(public_path('images/news/'.$news->image)) AND !empty($news->image)){

            unlink(public_path('images/news/'.$news->image));
        }
        
        $extension = $request->file('image')->extension();
        $image_name = date('dmYHis').'.'.$extension;
        $request->file('image')->move(public_path('images/news/'),$image_name);
        $news->image =$image_name;

        }

        $news->date = $request->date;
        $news->headline = $request->headline;
        $news->slug = Str::slug($news->headline, '-');
        $news->body = $request->body;
        $news->reporter = Str::ucfirst($request->reporter);
        $news->update();


 
        //$news = News::findorFail($id);
        // $validated = $request->validated();
        // $news->fill($validated);
        // $news->save();
        return redirect()->route('news.index')->with('success', 'News updated Successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findorFail($id);
          if(file_exists(public_path('images/news/'.$news->image)) AND !empty($news->image)){
            
            unlink(public_path('images/news/'.$news->image));
        }

        $news->delete();
        
        return redirect()->back()->with('success', 'News deleted Successfully');
    }
}
