<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomePageNews;
use App\Models\News;


/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $homepage_news = HomePageNews::first();
        
        if($homepage_news != null){

            if(News::where('id',$homepage_news->news_1)->first() == null){
                $news_1 = null;
            }else{
                $news_1 = News::where('id',$homepage_news->news_1)->first();
            }

            if(News::where('id',$homepage_news->news_2)->first() == null){
                $news_2 = null;
            }else{
                $news_2 = News::where('id',$homepage_news->news_2)->first();
            }

            return view('frontend.index',[
                'news_1' => $news_1,
                'news_2' => $news_2,
            ]);

        }else{

            $news_1 = null;
            $news_2 = null;

            return view('frontend.index',[
                'news_1' => $news_1,
                'news_2' => $news_2,
            ]);

        }    
    }
}
