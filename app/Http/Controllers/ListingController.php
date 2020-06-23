<?php

namespace App\Http\Controllers;

use App\Http\Resources\ListingResource;
use App\Listing;
use Illuminate\Http\Request;
use App\Services\Slug;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::all();

        return  ListingResource::collection($listings);
    }


    public function myListings()
    {
        $listings = Listing::where('user_id', Auth::user()->id)->get();

        return  ListingResource::collection($listings);
    }


    public function recentListings()
    {
        $listings = Listing::orderBy('id', 'desc')->take(3)->get();

        return  ListingResource::collection($listings);
    }

    public function allListings()
    {
        $listings = Listing::orderBy('created_at', 'desc')->get();

        return  ListingResource::collection($listings);
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
//            \Log::info('New file');
            //Upload the Listing Image  to the directory files/listings in public folder
            $request = $this->saveFiles($request , "files/listings");
            $image =  $request->input('file');
        }
        else{
            $image = 'listing.jpg';
        }

//        \Log::info($request);
        $saveslug = new Slug();
        $name = $request['listingName'];
        $slug = $saveslug->createLocationSlug($name);
        $location = Listing::create([
            'name' => $request->listingName,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category,
            'location_id' => $request->location,
            'status' => 'published',
            'condition' => $request->condition,
            'features' => $request->features,
            'video_url' => $request->video_url,
            'slug'=> $slug,
            'featuredImage'=> $image,
            'user_id' => Auth::user()->id,
        ]);

        return new ListingResource($location);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
//        $listing = Listing::findOrFail($listing);
        return new ListingResource($listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
