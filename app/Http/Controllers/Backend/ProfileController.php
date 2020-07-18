<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function view(){

        $id= Auth::user()->id ;
        $user = User::find($id) ;


          return view('backend.user.view-profile',[
              'user'=>$user ,
          ]);

    }

    public function edit(){
        $id= Auth::user()->id ;
        $user = User::find($id) ;
        return view('backend.user.edit-profile',[
            'user'=>$user ,
        ]) ;

    }

    public function update(Request $request){



        $user = User::find(Auth::user()->id);


       /* $image= $request->file('image');
        $img = $image->getClientOriginalName() ;
        $directory='public/upload/user_images/' ;
        $imageUrl=$directory.$img ;
        $image->move($directory,$img );*/

       /* $user->name = $request->name ;
        $user->email = $request->email ;
        $user->mobile = $request->mobile ;
        $user->address = $request->address ;
        $user->gender = $request->gender ;
        $user->image = $imageUrl  ;
        $user->save() ;*/




        $image = $request->file('image') ;
        if ($image){

            unlink($user->image) ;

             $image= $request->file('image');
             $img = $image->getClientOriginalName() ;
             $directory='public/upload/user_images/' ;
             $imageUrl=$directory.$img ;
             $image->move($directory,$img );


            $user->name = $request->name ;
            $user->email = $request->email ;
            $user->mobile = $request->mobile ;
            $user->address = $request->address ;
            $user->gender = $request->gender ;
            $user->image = $imageUrl  ;
            $user->save() ;

            if ($user){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'info'
                );


                return redirect('Profile/view')->with($notification);

            }

        }

        else{


            $user->name = $request->name ;
            $user->email = $request->email ;
            $user->mobile = $request->mobile ;
            $user->address = $request->address ;
            $user->gender = $request->gender ;

            $user->save() ;

            if ($user){
                $notification = array(
                    'message' => 'Data save successfully!',
                    'alert-type' => 'info'
                );


                return redirect('Profile/view')->with($notification);

            }

        }


    }


    public function passwordChange(){

        return view('backend.user.edit-password') ;
    }


    public function passwordUpdate(Request $request){
        if (Auth::attempt(['id'=>Auth::user()->id,'password'=>$request-> current_password]) ){

            $user = User::find(Auth::user()->id) ;
            $user->password = bcrypt( $request->new_password );
            $user->save();

            if ($user){
                $notification = array(
                    'message' => 'Password Change  successfully!',
                    'alert-type' => 'info'
                );


                return redirect('Profile/view')->with($notification);

            }


        }
        else{


                $notification = array(
                    'message' => 'Password is not curret!',
                    'alert-type' => 'error'
                );


            return redirect()->back()->with($notification);



        }

    }

}
