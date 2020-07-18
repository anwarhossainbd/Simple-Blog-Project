<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\News_events;
use App\model\vission;
use Illuminate\Http\Request;
use Auth ;

class NewsEventController extends Controller
{
    public function view(){
        $data = News_events::all();

        return view('backend.news-event.view-news-event',[
            'data'=>$data ,

        ]);
    }

    public function add(){
        return view('backend.news-event.add-news-event') ;
    }


    public function store(Request $request){

        $newsandevents = new News_events() ;

        $image = $request->file('image') ;
        $img = $image->getClientOriginalName();
        $directory='public/upload/newsevents_images/' ;
        $imageUrl = $directory.$img ;
        $image->move($directory,$img );

        $newsandevents->created_by = Auth::user()->id ;
        $newsandevents->date =date('Y-m-d',strtotime($request->date)) ;
        $newsandevents->short_title =$request->short_title ;
        $newsandevents->long_title =$request->long_title ;

        $newsandevents->image = $imageUrl ;
        $newsandevents->save() ;

        if ($newsandevents){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect()->route('news_events.view')->with($notification);

        }

    }

    public function edit($id){

        $editdata = News_events::find($id) ;
        return view('backend.news-event.edit-news-event',[
            'editdata'=>$editdata,
        ]);
    }

    public function update(Request $request){

        $update = News_events::find($request->id );

        $newsevents = $request->file('image') ;
        if ($newsevents){

            unlink($update->image) ;

            $image = $request->file('image') ;
            $img = $image->getClientOriginalName();
            $directory='public/upload/mission_images/' ;
            $imageUrl = $directory.$img ;
            $image->move($directory,$img );

            $update->created_by = Auth::user()->id ;
            $update->date =date('Y-m-d',strtotime($request->date)) ;
            $update->short_title =$request->short_title ;
            $update->long_title =$request->long_title ;

            $update->image = $imageUrl ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );


                return redirect()->route('news_events.view')->with($notification);

            }
        }

        else{

            $update->created_by = Auth::user()->id ;
            $update->date =date('Y-m-d',strtotime($request->date)) ;
            $update->short_title =$request->short_title ;
            $update->long_title =$request->long_title ;

            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );


                return redirect()->route('news_events.view')->with($notification);

            }
        }
    }


    public function  delete($id){

        $delete = News_events::find($id) ;

        $delete->delete() ;

        if ($delete){
            $notification = array(
                'message' => 'Data Delete successfully!',
                'alert-type' => 'success'
            );


            return redirect()->back(

            )->with($notification);

        }
    }


}
