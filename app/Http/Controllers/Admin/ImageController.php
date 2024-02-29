<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageRequest;
use App\Models\Image;
use App\Models\ImageImage;
use App\Services\FileService;
use Illuminate\Support\Arr;
use App\Services\ManagerLanguageService;
use App\Services\UtilityService;

class ImageController extends Controller
{
    protected $mls, $image_directory;
    protected $index_view, $create_view, $edit_view, $detail_view;
    protected $index_route_name, $create_route_name, $detail_route_name, $edit_route_name;
    protected $bannerService, $utilityService;

    public function __construct()
    {

        $this->image_directory = 'files/images';
        //route
        $this->index_route_name = 'admin.images.index';
        $this->create_route_name = 'admin.images.create';
        $this->detail_route_name = 'admin.images.show';
        $this->edit_route_name = 'admin.images.edit';

        //view files
        $this->index_view = 'admin.image.index';
        $this->create_view = 'admin.image.create';
        $this->detail_view = 'admin.image.details';
        $this->edit_view = 'admin.image.edit';

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
            $items = Image::query();
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
    public function store(ImageRequest $request)
    {
        $input = $request->except('other_images');

        $image = FileService::imageUploader($request, 'image', $this->image_directory);
        if ($image != null) {
            $input['image'] = $image;
        }
        $image = Image::create($input);


        $other_images = [];

        if ($request->hasFile('other_images')) {
            $images = FileService::multipleImageUploader($request, 'other_images', $this->image_directory);

            for ($i = 0; $i < count($images); $i++) {
                $other_images[$i]['image_id'] = $image->id;
                $other_images[$i]['image'] = $images[$i];
            }
            ImageImage::insert($other_images);
        }


        return redirect()->route($this->index_route_name)
            ->with('success', $this->mls->messageLanguage('created', 'image', 1));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view($this->detail_view, compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view($this->edit_view, compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, Image $image)
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
        $image->update($input);

        if ($request->hasFile('other_images')) {
            $other_images = [];
            ImageImage::where(['image_id' => $image->id])->delete();
            $images = FileService::multipleImageUploader($request, 'other_images', $this->image_directory);

            for ($i = 0; $i < count($images); $i++) {
                $other_images[$i]['image_id'] = $image->id;
                $other_images[$i]['image'] = $images[$i];
            }
            ImageImage::insert($other_images);
        }

        return redirect()->route($this->index_route_name)
            ->with('success', $this->mls->messageLanguage('updated', 'image', 1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $result = $image->delete();
        if ($result) {
            return response()->json([
                'status' => 1,
                'title' => $this->mls->onlyNameLanguage('deleted_title'),
                'message' => $this->mls->onlyNameLanguage('image'),
                'status_name' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'title' => $this->mls->onlyNameLanguage('deleted_title'),
                'message' => $this->mls->onlyNameLanguage('image'),
                'status_name' => 'error'
            ]);
        }
    }

    public function status(Image $image, $status)
    {
        $status = ($status == 1) ? 0 : 1;
        $result =$image->update(['is_active' => $status]);
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
