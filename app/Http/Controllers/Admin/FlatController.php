<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FlatRequest;
use App\Models\Flat;
use App\Models\FlatImage;
use App\Services\FileService;
use Illuminate\Support\Arr;
use App\Services\ManagerLanguageService;
use App\Services\UtilityService;

class FlatController extends Controller
{
    protected $mls, $image_directory;
    protected $index_view, $create_view, $edit_view, $detail_view;
    protected $index_route_name, $create_route_name, $detail_route_name, $edit_route_name;
    protected $bannerService, $utilityService;

    public function __construct()
    {

        $this->image_directory = 'files/flats';
        //route
        $this->index_route_name = 'admin.flats.index';
        $this->create_route_name = 'admin.flats.create';
        $this->detail_route_name = 'admin.flats.show';
        $this->edit_route_name = 'admin.flats.edit';

        //view files
        $this->index_view = 'admin.flat.index';
        $this->create_view = 'admin.flat.create';
        $this->detail_view = 'admin.flat.details';
        $this->edit_view = 'admin.flat.edit';

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
            $items = Flat::query();
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
    public function store(FlatRequest $request)
    {
        $input = $request->except('other_images');

        $image = FileService::imageUploader($request, 'image', $this->image_directory);
        if ($image != null) {
            $input['image'] = $image;
        }
        $flat = Flat::create($input);


        $other_images = [];

        if ($request->hasFile('other_images')) {
            $images = FileService::multipleImageUploader($request, 'other_images', $this->image_directory);

            for ($i = 0; $i < count($images); $i++) {
                $other_images[$i]['flat_id'] = $flat->id;
                $other_images[$i]['image'] = $images[$i];
            }
            FlatImage::insert($other_images);
        }


        return redirect()->route($this->index_route_name)
            ->with('success', $this->mls->messageLanguage('created', 'flat', 1));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Flat $flat)
    {
        return view($this->detail_view, compact('flat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat $flat)
    {
        return view($this->edit_view, compact('flat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FlatRequest $request, Flat $flat)
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
        $flat->update($input);

        if ($request->hasFile('other_images')) {
            $other_images = [];
            FlatImage::where(['flat_id' => $flat->id])->delete();
            $images = FileService::multipleImageUploader($request, 'other_images', $this->image_directory);

            for ($i = 0; $i < count($images); $i++) {
                $other_images[$i]['flat_id'] = $flat->id;
                $other_images[$i]['image'] = $images[$i];
            }
            FlatImage::insert($other_images);
        }

        return redirect()->route($this->index_route_name)
            ->with('success', $this->mls->messageLanguage('updated', 'flat', 1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        $result = $flat->delete();
        if ($result) {
            return response()->json([
                'status' => 1,
                'title' => $this->mls->onlyNameLanguage('deleted_title'),
                'message' => $this->mls->onlyNameLanguage('flat'),
                'status_name' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'title' => $this->mls->onlyNameLanguage('deleted_title'),
                'message' => $this->mls->onlyNameLanguage('flat'),
                'status_name' => 'error'
            ]);
        }
    }

    public function status(Flat $flat, $status)
    {
        $status = ($status == 1) ? 0 : 1;
        $result =$flat->update(['is_active' => $status]);
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
