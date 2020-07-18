<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\AboutUs;
use App\model\Slider;
use Illuminate\Http\Request;
use Auth ;

class AboutController extends Controller
{
    public function view(){
        $data = AboutUs::all();
        $count = AboutUs::count() ;
        return view('backend.AboutUs.view-abouts',[
            'data'=>$data ,
            'count'=>$count ,
        ]);
    }

    public function add(){
        return view('backend.AboutUs.add-abouts') ;
    }


    public function store(Request $request){

        $about = new AboutUs() ;



        $about->created_by = Auth::user()->id ;
        $about->title =$request->title ;


        $about->save() ;

        if ($about){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect()->route('about.view')->with($notification);

        }

    }


    public function edit($id){

        $editdata = AboutUs::find($id) ;
        return view('backend.AboutUs.edit_about',[
            'editdata'=>$editdata,
        ]);
    }


    public function update(Request $request){

        $update = AboutUs::find($request->id );





            $update->updated_by = Auth::user()->id ;

        $update->title = $request->title ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->route('about.view')->with($notification);
            }
        }



    public function  delete($id){

        $delete = AboutUs::find($id) ;

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
