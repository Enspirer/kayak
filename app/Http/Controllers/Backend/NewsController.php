<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
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
        return view('backend.news.index');
    }


    public function getNews(Request $request)
    {
        if($request->ajax())
        {
            $data = News::get();

            return DataTables::of($data)

                ->addColumn('action', function($data){
                    
                    $button = '<a href="" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="far fa-edit"></i> Edit </a>';
                    $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>';
                    return $button;
                })

                ->addColumn('image', function($data){
                    $img = '<img src="'.url('images/news', $data->image).'" style="width: 70%">';
                 
                    return $img;
                })

                ->editColumn('is_feature', function($data){
                    if($data->status == '1'){
                        $is_feature = '<span class="badge bg-success">Yes</span>';
                    }else {
                        $is_feature = '<span class="badge bg-warning text-dark">No</span>';
                    }
                    return $is_feature;
                })

                ->editColumn('status', function($data){
                    if($data->status == 'Approved'){
                        $status = '<span class="badge bg-success">Approved</span>';
                    }elseif($data->status == 'Pending'){
                        $status = '<span class="badge bg-warning text-dark">Pending</span>';
                    }else {
                        $status = '<span class="badge bg-danger text-dark">Rejected</span>';
                    }
                    return $status;
                })
                
                ->rawColumns(['action','image', 'is_feature', 'status'])
                ->make(true);
        }
        
        return back();
    }


    public function deleteNews($id)
    {
        $news = News::where('id', $id)->delete();
    }
}
