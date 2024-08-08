<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Page;
use App\Mail\SampleMail;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['slider'] = Page::where('section_name', 'Slider')
                                ->orderBy('key')
                                ->get(['value', 'value2'])
                                ->toArray();
        $data['features_block'] = Page::where('section_name', 'Features Block')
                                ->get(['key', 'value', 'value3'])
                                ->toArray();
        $data['recent_project'] = Page::where('section_name', 'Recent Project')
                                ->get(['key', 'value', 'value2', 'value3'])
                                ->toArray();
        $data['ceo'] = Page::where('section_name', 'CEO Say')
                                ->get(['key', 'value', 'value2', 'value3'])
                                ->toArray();
        $data['no_of_project'] = Page::where('section_name', 'No of Project')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['client_list'] = Page::where('section_name', 'Client List')
                                ->orderBy('key')
                                ->get(['value', 'value2', 'value3'])
                                ->toArray();
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        return view('welcome', compact('data'));
    }
    
    public function about(){
        $data = array();
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        return view('about', compact('data'));
    }
    
    public function products(){
        $data = array();
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        return view('products', compact('data'));
    }
    
    public function contact(){
        $data = array();
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        $data['map'] = Page::where('section_name', 'Map link')
                                ->get(['value'])
                                ->toArray();
        return view('contact', compact('data'));
    }
    
    public function send_email(Request $request){
        $name = "Funny Coder";
        if(isset($_POST["g-recaptcha-response"]) && !empty($_POST["g-recaptcha-response"]) ){
            $secret_key = "6LdvGSIqAAAAALqgdrvagCE5fNKZOG0LHE9sPxh9";
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST["g-recaptcha-response"]);
            $response = json_decode($verify_response);
            if($response->success){
                Mail::to('akramul@nascobd.com')->send(new SampleMail($request->all()));
                flash()->addSuccess('Email send successfully.');    
            }else{
                flash()->addSuccess('Recaptcha response false.');
            }
        }else{
            flash()->addSuccess('Recaptcha error.');
        }
        return redirect('contact');
    }
}