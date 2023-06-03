<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = "Home || World Of Mekhla";
        $data['pageDesc'] = "Home || World Of Mekhla";
        $data['pageKeyWords'] = "Home || World Of Mekhla";
        return view('home', $data);
    }
    public function about()
    {
        $data['pageTitle'] = "About || World Of Mekhla";
        $data['pageDesc'] = "Home || World Of Mekhla";
        
        $data['pageKeyWords'] = "Home || World Of Mekhla";
        return view('about', $data);
    }
    public function music()
    {
        $data['pageTitle'] = "Music || World Of Mekhla";
        $data['pageDesc'] = "Home || World Of Mekhla";
        
        $data['pageKeyWords'] = "Home || World Of Mekhla";
        return view('music', $data);
    }
    public function news()
    {
        $data['pageTitle'] = "News || World Of Mekhla";
        $data['pageDesc'] = "Home || World Of Mekhla";
        
        $data['pageKeyWords'] = "Home || World Of Mekhla";
        return view('news', $data);
    }
    public function gallery()
    {
        $data['pageTitle'] = "Gallery || World Of Mekhla";
        $data['pageDesc'] = "Home || World Of Mekhla";
        
        $data['pageKeyWords'] = "Home || World Of Mekhla";
        return view('gallery', $data);
    }
    public function contact_us()
    {
        $data['pageTitle'] = "Contact Us || World Of Mekhla";
        $data['pageDesc'] = "Home || World Of Mekhla";
        
        $data['pageKeyWords'] = "Home || World Of Mekhla";
        return view('contact-us', $data);
    }
}
