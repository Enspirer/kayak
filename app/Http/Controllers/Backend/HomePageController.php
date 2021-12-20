<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\HomePageNews;
use App\Models\News;


class HomePageController extends Controller
{
    
    public function create()
    {
        $news = News::where('status','Enabled')->get();

        return view('backend.homepage_news.create',[
            'news' => $news
        ]);
    }

    public function store(Request $request)
    {        
        // dd($request);                   

        $add = new HomePageNews;

        $add->news_1 = $request->news_1;   
        $add->news_2 = $request->news_2;  
        $add->news_3 = $request->news_3;  

        $add->save();

        return redirect()->route('admin.homepage_news.edit',$add->id)->withFlashSuccess('Added Successfully'); 
    }

    public function edit($id)
    {
        $homepage_news = HomePageNews::where('id',$id)->first(); 
        $news = News::where('status','Enabled')->get();

        return view('backend.homepage_news.edit',[
            'homepage_news' => $homepage_news,
            'news' => $news
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);  
        $update = new HomePageNews;

        $update->news_1 = $request->news_1;   
        $update->news_2 = $request->news_2; 
        $update->news_3 = $request->news_3;  

        HomePageNews::whereId($request->hidden_id)->update($update->toArray());

        return back()->withFlashSuccess('Updated Successfully');
    }



}
