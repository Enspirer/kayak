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

    public function create()
    {
        return view('backend.news.create');
    }


    public function getdetails(Request $request)
    {
        if($request->ajax())
        {
            $data = News::get();

            return DataTables::of($data)

                ->addColumn('action', function($data){
                    
                    $button = '<a href="'.route('admin.news.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
                    $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>';
                    return $button;
                })
               
                ->editColumn('is_feature', function($data){
                    if($data->is_feature == '1'){
                        $is_feature = '<span class="badge bg-success">Yes</span>';
                    }else {
                        $is_feature = '<span class="badge bg-warning text-dark">No</span>';
                    }
                    return $is_feature;
                })

                ->editColumn('status', function($data){
                    if($data->status == 'Enabled'){
                        $status = '<span class="badge bg-success">Enabled</span>';
                    }else {
                        $status = '<span class="badge bg-danger">Disabled</span>';
                    }
                    return $status;
                })
                
                ->rawColumns(['action','is_feature', 'status'])
                ->make(true);
        }
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);

        if($request->image1 == null){
            return back()->withErrors('Please Select Feature Image');
        }else{

                 
                    $json_images_one = ['image1' => $request->image1];
                    $json_images_two = ['image2' => $request->image2];
                    $json_images_three = ['image3' => $request->image3];

                    $json_images = [
                        $json_images_one,$json_images_two,$json_images_three
                    ];                  


                    if($request->featured_news == 1)
                    {            
                        $featured_news = DB::table('news')->where('is_feature', '=', 1)->update(array('is_feature' => 0));           
                    } 

                    $add = new News;

                    $add->title=$request->title; 

                    
                    $add->description=$request->description;
                    $add->status=$request->status;
                    $add->is_feature=$request->featured_news;
                    $add->order=$request->order;
                    $add->images=json_encode($json_images);
                    $add->save();

                    return redirect()->route('admin.news.index')->withFlashSuccess('Added Successfully');  
                // }
            // }
        }
    }

    public function edit($id)
    {
        $news = News::where('id',$id)->first(); 

        return view('backend.news.edit',[
            'news' => $news
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);

        if($request->image1 == null){
            return back()->withErrors('Please Select Feature Image');
        }else{         
        
            $json_images_one = ['image1' => $request->image1];
            $json_images_two = ['image2' => $request->image2];
            $json_images_three = ['image3' => $request->image3];

            $json_images = [
                $json_images_one,$json_images_two,$json_images_three
            ];                  


            if($request->featured_news == 1)
            {            
                $featured_news = DB::table('news')->where('is_feature','=', 1)->update(array('is_feature' => 0));           
            } 

            $update = new News;

            $update->title=$request->title; 

            $update->description=$request->description;
            $update->status=$request->status;
            $update->is_feature=$request->featured_news;
            $update->order=$request->order;
            $update->images=json_encode($json_images);
                    
            News::whereId($request->hidden_id)->update($update->toArray());

            return redirect()->route('admin.news.index')->withFlashSuccess('Updated Successfully');  
                
        }
    }

    public function destroy($id)
    {
        $news = News::where('id', $id)->delete();
    }
}
