<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactUsRequest;
use App\Models\Banner;
use App\Models\ContactUs;
use App\Models\Flat;
use App\Models\PageContent;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $home_view, $room_list, $room_detail, $static , $blog_list, $connect_page, $contact_page,$about_page, $service_page, $gallery_page, $faq_page;

    public function __construct()
    {
        //view files
        $this->home_view = 'front.home';
        $this->room_list = 'front.room';
        $this->blog_list = 'front.blog';
        $this->contact_page = 'front.contact';
        $this->connect_page = 'front.connect_with_us';
        $this->about_page = 'front.about';
        $this->service_page = 'front.service';
        $this->gallery_page = 'front.gallery';
        $this->faq_page = 'front.faq';
        $this->room_detail = 'front.room_detail';
        $this->static = 'front.static';
    }

    /**
     * Display a landing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $banners = Banner::where('is_active', 1)->get();
       $flats = Flat::where('is_active', 1)->take(6)->get();
       $testimonials = Testimonial::where('is_active', 1)->take(5)->get();
        return view($this->home_view, compact('banners','flats','testimonials'));
    }

    public function rooms()
    {
        $flats = Flat::where('is_active', 1)->paginate(20);
        return view($this->room_list, compact("flats"));
    }

    public function static($slug){
        $page_content = PageContent::where('slug',$slug)->orderBy('id','asc')->first();
        // return view($this->static, compact("page_content"));
        // $page_content = PageContent::where('title', )->orderBy('id','asc')->first();
        return view($this->static, compact("page_content"));
    }

    public function flat_detail($slug)
    {
        $flat = Flat::where('slug', $slug)->orderBy('id', 'asc')->first();
        return view($this->room_detail, compact("flat"));
    }

    public function blogs()
    {
       
        return view($this->blog_list);
    }

    public function contact()
    {
       
        return view($this->contact_page);
    }

    public function connect()
    {
       
        return view($this->connect_page);
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

    public function contactUsStore(ContactUsRequest $request)
    {
        $input = $request->validated();
        $data = ContactUs::create($input);
        return redirect()->route('front.home');
    }

}
