<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\FileUploadTrait;

class CategoryController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if($request->hasFile('image'))
        {
            //Upload the Category Image  to the directory files/categories in public folder
            $request = $this->saveFiles($request , "files/categories");
            $image= $request->hasFile('image');
        }
        else{
            $image = 'category.jpg';
        }
        $slug = Str::slug($request->name, '-');
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'icon'=> $request->icon,
            'slug'=> $slug,
            'image'=> $image,
        ]);

        return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // check if currently authenticated user is the owner of the book
//        if ($request->user()->id !== $category->user_id) {
//            return response()->json(['error' => 'You can only edit your own books.'], 403);
//        }

        $category->update($request->only(['name', 'description']));

        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json(null, 204);
    }
}
