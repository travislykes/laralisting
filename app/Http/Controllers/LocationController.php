<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocationResource;
use App\Location;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Services\Slug;

class LocationController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LocationResource::collection(Location::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('file'))
        {
//            \Log::info('I wass hr');
            //Upload the Category Image  to the directory files/categories in public folder
            $request = $this->saveFiles($request , "files/locations");
            $image =  $request->input('file');
        }
        else{
            $image = 'location.jpg';
        }

        $saveslug = new Slug();
        $name = $request['name'];
        $slug = $saveslug->createLocationSlug($name);
        $location = Location::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug'=> $slug,
            'image'=> $image,
        ]);

        return new LocationResource($location);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return new LocationResource($location);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
        $location->update($request->only(['name', 'description']));

        return new LocationResource($location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
//        \Log::info('Ready to delete');
        $location->delete();

        return response()->json(null, 204);
    }
}
