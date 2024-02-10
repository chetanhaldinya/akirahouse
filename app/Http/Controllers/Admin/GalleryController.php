<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Services\FileService;
use App\Services\ManagerLanguageService;
use App\Services\UtilityService;

class GalleryController extends Controller
{
    protected $mls;
    protected $index_view, $detail_view;
    protected $utilityService;

    public function __construct()
    {
        //view files
        $this->index_view = 'admin.gallery.index';

        //service files
        $this->utilityService = new UtilityService();

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
        $items = Gallery::query();
        if (isset($request->date_range)) {
            list($startDate, $endDate) = explode(" - ", $request->date_range);
            $items = $items->whereDate('galleries.created_at', '>=', $startDate)
                ->whereDate('galleries.created_at', '<', $endDate);
        }
        $galleries = $items->paginate(25);
        return view($this->index_view, compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $input = $request->validated();
        $files = [];

        if ($request->hasFile('files')) {
            $images = FileService::multipleImageUploader($request, 'files', 'files/galleries');
            for ($i = 0; $i < count($images); $i++) {
                $files[$i]['file'] = $images[$i];
            }
            Gallery::insert($files);
        }
            return response()->json([
                'status' => true,
                'message' => 'Media uploaded successfully.',
            ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $result = $gallery->delete();
        if ($result) {
            return response()->json([
                'status' => 1,
                'message' =>  $this->mls->messageLanguage('deleted', 'media', 1),
                'status_name' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' =>  $this->mls->messageLanguage('deleted', 'media', 1),
                'status_name' => 'error'
            ]);
        }
    }
}
