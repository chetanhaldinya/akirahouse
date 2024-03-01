<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoomRequest;
use App\Models\Room;
use App\Models\RoomImage;
use App\Services\FileService;
use Illuminate\Support\Arr;
use App\Services\ManagerLanguageService;
use App\Services\UtilityService;

class RoomController extends Controller
{
    protected $mls, $image_directory;
    protected $index_view, $create_view, $edit_view, $detail_view;
    protected $index_route_name, $create_route_name, $detail_route_name, $edit_route_name;
    protected $bannerService, $utilityService;

    public function __construct()
    {

        $this->image_directory = 'files/rooms';
        //route
        $this->index_route_name = 'admin.rooms.index';
        $this->create_route_name = 'admin.rooms.create';
        $this->detail_route_name = 'admin.rooms.show';
        $this->edit_route_name = 'admin.rooms.edit';

        //view files
        $this->index_view = 'admin.room.index';
        $this->create_view = 'admin.room.create';
        $this->detail_view = 'admin.room.details';
        $this->edit_view = 'admin.room.edit';

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
            $items = Room::query();
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
    public function store(RoomRequest $request)
    {
        $input = $request->except('other_images');

        $image = FileService::imageUploader($request, 'image', $this->image_directory);
        if ($image != null) {
            $input['image'] = $image;
        }
        $room = Room::create($input);


        $other_images = [];

        if ($request->hasFile('other_images')) {
            $images = FileService::multipleImageUploader($request, 'other_images', $this->image_directory);

            for ($i = 0; $i < count($images); $i++) {
                $other_images[$i]['room_id'] = $room->id;
                $other_images[$i]['image'] = $images[$i];
            }
            RoomImage::insert($other_images);
        }


        return redirect()->route($this->index_route_name)
            ->with('success', $this->mls->messageLanguage('created', 'room', 1));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view($this->detail_view, compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view($this->edit_view, compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoomRequest $request, Room $room)
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
        $room->update($input);

        if ($request->hasFile('other_images')) {
            $other_images = [];
            RoomImage::where(['room_id' => $room->id])->delete();
            $images = FileService::multipleImageUploader($request, 'other_images', $this->image_directory);

            for ($i = 0; $i < count($images); $i++) {
                $other_images[$i]['room_id'] = $room->id;
                $other_images[$i]['image'] = $images[$i];
            }
            RoomImage::insert($other_images);
        }

        return redirect()->route($this->index_route_name)
            ->with('success', $this->mls->messageLanguage('updated', 'room', 1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $result = $room->delete();
        if ($result) {
            return response()->json([
                'status' => 1,
                'title' => $this->mls->onlyNameLanguage('deleted_title'),
                'message' => $this->mls->onlyNameLanguage('room'),
                'status_name' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'title' => $this->mls->onlyNameLanguage('deleted_title'),
                'message' => $this->mls->onlyNameLanguage('room'),
                'status_name' => 'error'
            ]);
        }
    }

    public function status(Room $room, $status)
    {
        $status = ($status == 1) ? 0 : 1;
        $result =$room->update(['is_active' => $status]);
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
