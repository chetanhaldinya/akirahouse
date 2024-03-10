<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Services\ManagerLanguageService;
use App\Services\WebUtilityService;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    protected $mls;
    protected $index_view, $detail_view;
    protected $index_route_name, $detail_route_name;
    protected $webUtilityService;

    public function __construct()
    {

        //route
        $this->index_route_name = 'admin.contact-us.index';
        $this->detail_route_name = 'admin.contact-us.show';

        //view files
        $this->index_view = 'admin.contact_us.index';
        $this->detail_view = 'admin.contact_us.details';

        $this->webUtilityService = new WebUtilityService();

        //mls is used for manage language content based on keys in messages.php
        $this->mls = new ManagerLanguageService('messages');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ContactUs::query();
            return datatables()->eloquent($data)->toJson();
        } else {
            return view($this->index_view);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contact_u)
    {
        return view($this->detail_view, compact('contact_u'));
    }

    public function status($id, $status)
    {
        $status = ($status == 1) ? 0 : 1;
        $contact_u = ContactUs::find($id);
        $result = $contact_u->update(['status' => $status]);
        return $this->webUtilityService->swalResponse($result, 'updated', 'contact_us');
    }
}
