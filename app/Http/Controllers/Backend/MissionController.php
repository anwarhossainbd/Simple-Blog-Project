<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\Mission;
use App\model\Slider;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Auth ;

class MissionController extends Controller
{
    public function view(){
        $data = Mission::all();
        $count = Mission::count() ;
        return view('backend.mission.view-mission',[
            'data'=>$data ,
            'count'=>$count ,
        ]);
    }

    public function add(){
        return view('backend.mission.add-mission') ;
    }

    public function store(Request $request){

        $mission = new Mission() ;

        $image = $request->file('image') ;
        $img = $image->getClientOriginalName();
        $directory='public/upload/mission_images/' ;
        $imageUrl = $directory.$img ;
        $image->move($directory,$img );

        $mission->created_by = Auth::user()->id ;
        $mission->short_title =$request->short_title ;

        $mission->image = $imageUrl ;
        $mission->save() ;

        if ($mission){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect()->route('missions.view')->with($notification);

        }

    }

    public function edit($id){

        $editdata = Mission::find($id) ;
        return view('backend.mission.edit_mission',[
            'editdata'=>$editdata,
        ]);
    }

    public function update(Request $request){

        $update = Mission::find($request->id );

        $mission = $request->file('image') ;
        if ($mission){

            unlink($update->image) ;

            $image = $request->file('image') ;
            $img = $image->getClientOriginalName();
            $directory='public/upload/mission_images/' ;
            $imageUrl = $directory.$img ;
            $image->move($directory,$img );

            $update->short_title =$request->short_title ;

            $update->image = $imageUrl ;


            $update->updated_by = Auth::user()->id ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->route('missions.view')->with($notification);
            }
        }

        else{

            $update->short_title =$request->short_title ;


            $update->updated_by = Auth::user()->id ;
            $update->save() ;

            if ($update){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->route('missions.view')->with($notification);
            }
        }
    }


    public function  delete($id){

        $delete = Mission::find($id) ;

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
