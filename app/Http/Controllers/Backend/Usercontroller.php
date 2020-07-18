<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function view(){

        $data = User::all() ;
        return view('backend.user.view-user',[
            'data' => $data,
        ]);
    }

    public function add(){

        return view('backend.user.add-user');

    }

    public function store(Request $request){

        $this->validate($request,[

            'usertype'=>'required',
            'name'=>'required |min:5',
            'email'=>'required | unique:users,email'

        ]);



       $user = new User() ;

        $user->usertype =$request->usertype ;
        $user->name =$request->name ;
        $user->email =$request->email ;
        $user->password =  bcrypt($request->password) ;
        $user->save() ;

      //  return redirect('users/view')->with('message','Your Data save successfully ') ;

        if ($user ){

        $notification = array(
            'message' => 'Data Save successfully!',
            'alert-type' => 'success'
        );

        return redirect('users/view')->with($notification);}

    }

    public function edit($id){

        $edituser = User::find($id) ;

        return view('backend.user.edit-user',[

            'edituser'=>$edituser ,
            ]);


    }


    public function update(Request $request){

        $user = User::find($request->id) ;

        $user->usertype =$request->usertype ;
        $user->name =$request->name ;
        $user->email =$request->email ;
        $user->save() ;


        if ($user){
            $notification = array(
                'message' => 'Data Update successfully!',
                'alert-type' => 'success'
            );

            return redirect('users/view')->with($notification);
        }

    }

    public function delete($id){

        $delete = User::find($id) ;
        $delete->delete() ;

        if ($delete){
            $notification = array(
                'message' => 'Data delete successfully!',
                'alert-type' => 'success'
            );


            return redirect('users/view')->with($notification);

        }


    }


}
