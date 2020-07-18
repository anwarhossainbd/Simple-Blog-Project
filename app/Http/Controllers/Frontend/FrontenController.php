<?php

namespace App\Http\Controllers\Frontend;

use App\contactadmin;
use App\Http\Controllers\Controller;
use App\model\AboutUs;
use App\model\Contact;
use App\model\logo;
use App\model\Mission;
use App\model\News_events;
use App\model\Services;
use App\model\Slider;
use App\model\vission;
use Illuminate\Http\Request;

class FrontenController extends Controller
{
    public function index(){

        $logos = logo::first() ;
        $sliders =Slider::all() ;
        $mission = Mission::all() ;
        $vission = vission::all() ;
        $contact = Contact::all() ;
        $news_events = News_events::all() ;
        $services = Services::all() ;
        return view('frontend.layouts.home',[
            'logos'=>$logos,
            'sliders'=>$sliders,
            'mission'=>$mission,
            'vission'=>$vission,
            'contact'=>$contact,
            'news_events'=>$news_events,
            'services'=>$services,
        ]);
    }

    public function aboutUs(){

        $logos = logo::first() ;
        $contact = Contact::all() ;
        $about =AboutUs::all() ;

        return view('frontend.single-pages.about-us',[
            'logos'=>$logos ,
            'contact'=>$contact,
            'about'=>$about,
        ]);
    }

    public function contactUs(){

        $logos = logo::first() ;
        $contact = Contact::all() ;



        return view('frontend.single-pages.contact-us',[

            'logos'=>$logos,
            'contact'=>$contact,
        ]);
    }

    public function details($id){

        $front = News_events::find($id) ;

        $logos = logo::first() ;
        $contact = Contact::all() ;

        return view('frontend.layouts.details',[
            'logos'=>$logos ,
            'contact'=>$contact ,
            'front'=>$front ,
        ]);
    }

    public function frontpage_mission(){


        $logos = logo::first() ;
        $contact = Contact::all() ;
        $mission = Mission::all() ;

        return view('frontend.single-pages.mission',[
            'logos'=>$logos ,
            'contact'=>$contact ,
            'mission'=>$mission ,

        ]);

    }


    public function frontpage_vision(){


        $logos = logo::first() ;
        $contact = Contact::all() ;
        $vission = vission::all() ;

        return view('frontend.single-pages.vission',[
            'logos'=>$logos ,
            'contact'=>$contact ,
            'vission'=>$vission ,

        ]);

    }




    public function frontpage_news(){


        $logos = logo::first() ;
        $contact = Contact::all() ;
        $news =News_events::all();


        return view('frontend.single-pages.news',[
            'logos'=>$logos ,
            'contact'=>$contact ,
            'news'=>$news ,


        ]);

    }


    public function contact_form(Request $request){

        $contact = new contactadmin() ;

        $contact->name = $request->name ;
        $contact->email = $request->email ;
        $contact->mobile_no = $request->mobile_no ;
        $contact->address = $request->address ;
        $contact->message = $request->message ;

        $contact->save();

        if ($contact){
            $notification = array(
                'message' => 'Data save successfully!',
                'alert-type' => 'success'
            );

            return redirect('/contact-us')->with('message','Your data save Successfully');
        }

    }



}
