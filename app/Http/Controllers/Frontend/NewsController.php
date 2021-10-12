<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use DB;
use App\Models\News; 

/**
 * Class NewsController.
 */
class NewsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $all_news = News::where('status','=','Enabled')->where('is_feature',0)->get();
        $featured_news = News::where('is_feature',1)->where('status','=','Enabled')->first();
        // dd($all_news);
        $all_news_count = News::where('status','=','Enabled')->get();
        // dd($all_news_count);


       
        return view('frontend.news',[
            'all_news' => $all_news,
            'featured_news' => $featured_news,
            'all_news_count' => $all_news_count
        ]);
    }
}
