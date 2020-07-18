<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\logo;
use App\model\Slider;
use Illuminate\Http\Request;
use Auth ;

class SliderController extends Controller
{
    public function view(){
        $data = Slider::all();
        return view('backend.slider.view-slider',[
            'data'=>$data ,
        ]);
    }

    public function add(){
        return view('backend.slider.add-slider') ;
    }


    public function store(Request $request){

        $slider = new Slider() ;

        $image = $request->file('image') ;
        $img = $image->getClientOriginalName();
        $directory='public/upload/slider_images/' ;
        $imageUrl = $directory.$img ;
        $image->move($directory,$img );

        $slider->created_by = Auth::user()->id ;
        $slider->short_title =$request->short_title ;
        $slider->long_title =$request->long_title ;
        $slider->image = $imageUrl ;
        $slider->save() ;

        if ($slider){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect()->route('sliders.view')->with($notification);

        }

    }


    public function edit($id){

        $editdata = Slider::find($id) ;
        return view('backend.slider.edit_slider',[
            'editdata'=>$editdata,
        ]);
    }


    public function update(Request $request){

        $update = Slider::find($request->id );

        $slider = $request->file('image') ;
        if ($slider){

            unlink($update->image) ;

            $image = $request->file('image') ;
            $img = $image->getClientOriginalName();
            $directory='public/upload/slider_images/' ;
            $imageUrl = $directory.$img ;
            $image->move($directory,$img );

            $update->short_title =$request->short_title ;
            $update->long_title =$request->long_title ;
            $update->image = $imageUrl ;


            $update->updated_by = Auth::user()->id ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->route('sliders.view')->with($notification);
            }
        }

        else{

            $update->short_title =$request->short_title ;
            $update->long_title =$request->long_title ;

            $update->updated_by = Auth::user()->id ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->route('sliders.view')->with($notification);
            }
        }
    }


    public function  delete($id){

        $delete = Slider::find($id) ;

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
