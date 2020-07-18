<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\logo;
use Illuminate\Http\Request;
use Auth ;


class LogoController extends Controller
{

    public function view(){

        $data = logo::all() ;

        $count=logo::count() ;


        return view('backend.logo.view-logo',[
            'data'=>$data ,
            'count'=>$count,
        ]) ;
    }
    public function add(){

        return view('backend.logo.add-logo') ;

    }

    public function store(Request $request){

         $logo = new logo() ;

         $image = $request->file('image') ;
         $img = $image->getClientOriginalName();
         $directory='public/upload/logo_images/' ;
         $imageUrl = $directory.$img ;
         $image->move($directory,$img );

         $logo->created_by = Auth::user()->id ;
         $logo->image = $imageUrl ;
         $logo->save() ;

        if ($logo){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect('logos/view')->with($notification);

        }

    }

    public function edit($id){

        $editdata = logo::find($id) ;
        return view('backend.logo.edit_logo',[
            'editdata'=>$editdata,
        ]);
    }

    public function update(Request $request){

        $update = logo::find($request->id );


        $logo = $request->file('image') ;
        if ($logo){

            unlink($update->image) ;

            $image = $request->file('image') ;
            $img = $image->getClientOriginalName();
            $directory='public/upload/logo_images/' ;
            $imageUrl = $directory.$img ;
            $image->move($directory,$img );


            $update->image = $imageUrl ;
            $update->updated_by = Auth::user()->id ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );


                return redirect('logos/view')->with($notification);

            }
        }
    }

    public function  delete($id){

        $delete = logo::find($id) ;

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
