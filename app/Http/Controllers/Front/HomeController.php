<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $home_view, $room_list, $blog_list, $contact_page,$about_page, $service_page, $gallery_page, $faq_page;

    public function __construct()
    {
        //view files
        $this->home_view = 'front.home';
        $this->room_list = 'front.room';
        $this->blog_list = 'front.blog';
        $this->contact_page = 'front.contact';
        $this->about_page = 'front.about';
        $this->service_page = 'front.service';
        $this->gallery_page = 'front.gallery';
        $this->faq_page = 'front.faq';
    }

    /**
     * Display a landing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view($this->home_view);
    }

    public function rooms()
    {
       
        return view($this->room_list);
    }

    public function blogs()
    {
       
        return view($this->blog_list);
    }

    public function contact()
    {
       
        return view($this->contact_page);
    }

    public function about()
    {
       
        return view($this->about_page);
    }

    public function service()
    {
        return view($this->service_page);
    }

    public function gallery()
    {
        return view($this->gallery);
    }

    public function faq()
    {
        return view($this->faq);
    }

}
