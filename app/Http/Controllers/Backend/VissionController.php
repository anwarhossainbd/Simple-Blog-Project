<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\Mission;
use App\model\vission;
use Illuminate\Http\Request;
use Auth ;

class VissionController extends Controller
{
    public function view(){
        $data = vission::all();
        $count = vission::count() ;
        return view('backend.vission.view-vission',[
            'data'=>$data ,
            'count'=>$count ,
        ]);
    }

    public function add(){
        return view('backend.vission.add-vission') ;
    }

    public function store(Request $request){

        $vission = new vission() ;

        $image = $request->file('image') ;
        $img = $image->getClientOriginalName();
        $directory='public/upload/vission_images/' ;
        $imageUrl = $directory.$img ;
        $image->move($directory,$img );

        $vission->created_by = Auth::user()->id ;
        $vission->title =$request->title ;

        $vission->image = $imageUrl ;
        $vission->save() ;

        if ($vission){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect()->route('vission.view')->with($notification);

        }

    }

    public function edit($id){

        $editdata = vission::find($id) ;
        return view('backend.vission.edit_vission',[
            'editdata'=>$editdata,
        ]);
    }

    public function update(Request $request){

        $update = vission::find($request->id );

        $vission = $request->file('image') ;
        if ($vission){

            unlink($update->image) ;

            $image = $request->file('image') ;
            $img = $image->getClientOriginalName();
            $directory='public/upload/mission_images/' ;
            $imageUrl = $directory.$img ;
            $image->move($directory,$img );

            $update->title =$request->title ;

            $update->image = $imageUrl ;


            $update->updated_by = Auth::user()->id ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->route('vission.view')->with($notification);
            }
        }

        else{

            $update->title =$request->title ;


            $update->updated_by = Auth::user()->id ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->route('vission.view')->with($notification);
            }
        }
    }


    public function  delete($id){

        $delete = vission::find($id) ;

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
