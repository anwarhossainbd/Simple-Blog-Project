<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\Contact;
use App\model\Services;
use App\model\Slider;
use Illuminate\Http\Request;

use Auth ;

class ContactController extends Controller
{
    public function view(){
        $data = Contact::all();
        $count = Contact::count() ;

        return view('backend.Contact.view-contact',[
            'data'=>$data ,
            'count'=>$count ,

        ]);
    }

    public function add(){
        return view('backend.Contact.add-contact') ;
    }

    public function store(Request $request){

        $contact = new Contact() ;



        $contact->created_by = Auth::user()->id ;

        $contact->address =$request->address ;
        $contact->mobile_no =$request->mobile_no ;
        $contact->email =$request->email ;
        $contact->facebook =$request->facebook ;
        $contact->twitter =$request->twitter ;
        $contact->youtube =$request->youtube ;
        $contact->google_play =$request->google_play ;


        $contact->save() ;

        if ($contact){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect()->route('contact.view')->with($notification);

        }

    }

    public function edit($id){

        $editdata = Contact::find($id) ;
        return view('backend.Contact.edit-contact',[
            'editdata'=>$editdata,
        ]);
    }

    public function update(Request $request){

        $contact = Contact::find($request->id );



        $contact->created_by = Auth::user()->id ;

        $contact->address =$request->address ;
        $contact->mobile_no =$request->mobile_no ;
        $contact->email =$request->email ;
        $contact->facebook =$request->facebook ;
        $contact->twitter =$request->twitter ;
        $contact->youtube =$request->youtube ;
        $contact->google_play =$request->google_play ;


        $contact->save() ;

        if ($contact){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );


            return redirect()->route('contact.view')->with($notification);

        }

    }

    public function  delete($id){

        $delete = Contact::find($id) ;

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
