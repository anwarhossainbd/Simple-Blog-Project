<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\News_events;
use App\model\Services;
use Illuminate\Http\Request;
use Auth ;

class ServicesController extends Controller
{
    public function view(){
        $data = Services::all();

        return view('backend.services.view-services',[
            'data'=>$data ,

        ]);
    }

    public function add(){
        return view('backend.services.add-services') ;
    }

    public function store(Request $request){

        $newsandevents = new Services() ;



        $newsandevents->created_by = Auth::user()->id ;

        $newsandevents->short_title =$request->short_title ;
        $newsandevents->long_title =$request->long_title ;


        $newsandevents->save() ;

        if ($newsandevents){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect()->route('services.view')->with($notification);

        }

    }

    public function edit($id){

        $editdata = Services::find($id) ;
        return view('backend.services.edit-services',[
            'editdata'=>$editdata,
        ]);
    }

    public function update(Request $request){

        $update = Services::find($request->id );





            $update->created_by = Auth::user()->id ;

            $update->short_title =$request->short_title ;
            $update->long_title =$request->long_title ;


            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );


                return redirect()->route('services.view')->with($notification);

            }
        }

    public function  delete($id){

        $delete = Services::find($id) ;

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
