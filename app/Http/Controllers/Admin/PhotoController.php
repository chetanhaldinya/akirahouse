<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PhotoRequest;
use App\Models\Photo;
use App\Models\PhotoImage;
use App\Services\FileService;
use Illuminate\Support\Arr;
use App\Services\ManagerLanguageService;
use App\Services\UtilityService;

class PhotoController extends Controller
{
    protected $mls, $image_directory;
    protected $index_view, $create_view, $edit_view, $detail_view;
    protected $index_route_name, $create_route_name, $detail_route_name, $edit_route_name;
    protected $bannerService, $utilityService;

    public function __construct()
    {

        $this->image_directory = 'files/photos';
        //route
        $this->index_route_name = 'admin.photos.index';
        $this->create_route_name = 'admin.photos.create';
        $this->detail_route_name = 'admin.photos.show';
        $this->edit_route_name = 'admin.photos.edit';

        //view files
        $this->index_view = 'admin.photo.index';
        $this->create_view = 'admin.photo.create';
        $this->detail_view = 'admin.photo.details';
        $this->edit_view = 'admin.photo.edit';

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
        if ($request->ajax()) {
            $items = Photo::query();
            return datatables()->eloquent($items)->toJson();
        } else {
            return view($this->index_view);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->create_view);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request)
    {
        $input = $request->except('other_images');

        $image = FileService::imageUploader($request, 'image', $this->image_directory);
        if ($image != null) {
            $input['image'] = $image;
        }
        $photo = Photo::create($input);


        $other_images = [];

        if ($request->hasFile('other_images')) {
            $images = FileService::multipleImageUploader($request, 'other_images', $this->image_directory);

            for ($i = 0; $i < count($images); $i++) {
                $other_images[$i]['photo_id'] = $photo->id;
                $other_images[$i]['image'] = $images[$i];
            }
            PhotoImage::insert($other_images);
        }


        return redirect()->route($this->index_route_name)
            ->with('success', $this->mls->messageLanguage('created', 'photo', 1));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view($this->detail_view, compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view($this->edit_view, compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhotoRequest $request, Photo $photo)
    {
        $input = $request->except('other_images');
        if (!empty($input['image'])) {
            $image = FileService::imageUploader($request, 'image', $this->image_directory);
            if ($image != null) {
                $input['image'] = $image;
            }
        } else {
            $input = Arr::except($input, array('image'));
        }
        $photo->update($input);

        if ($request->hasFile('other_images')) {
            $other_images = [];
            PhotoImage::where(['photo_id' => $photo->id])->delete();
            $images = FileService::multipleImageUploader($request, 'other_images', $this->image_directory);

            for ($i = 0; $i < count($images); $i++) {
                $other_images[$i]['photo_id'] = $photo->id;
                $other_images[$i]['image'] = $images[$i];
            }
            PhotoImage::insert($other_images);
        }

        return redirect()->route($this->index_route_name)
            ->with('success', $this->mls->messageLanguage('updated', 'photo', 1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $result = $photo->delete();
        if ($result) {
            return response()->json([
                'status' => 1,
                'title' => $this->mls->onlyNameLanguage('deleted_title'),
                'message' => $this->mls->onlyNameLanguage('photo'),
                'status_name' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'title' => $this->mls->onlyNameLanguage('deleted_title'),
                'message' => $this->mls->onlyNameLanguage('photo'),
                'status_name' => 'error'
            ]);
        }
    }

    public function status(Photo $photo, $status)
    {
        $status = ($status == 1) ? 0 : 1;
        $result =$photo->update(['is_active' => $status]);
        if ($result) {
            return response()->json([
                'status' => 1,
                'message' => $this->mls->messageLanguage('updated', 'status', 1),
                'status_name' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => $this->mls->messageLanguage('not_updated', 'status', 1),
                'status_name' => 'error'
            ]);
        }
    }
}
