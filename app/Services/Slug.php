<?php
namespace App\Services;

use App\Location;
use App\Category;
use Illuminate\Support\Str;

class Slug
{


    // For Categories
    public function createSlug($name, $id = 0)
    {
        // Normalize the title
        $slug = str_slug($name);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Cannot create a unique slug');
    }
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Category::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    // For Categories
    public function createLocationSlug($name, $id = 0)
    {
//        \Log::info('I came here again');
        // Normalize the title
        $slug = str_slug($name);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedLocations($slug, $id);
        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {

                \Log::info('I can return now');
                return $newSlug;


            }
        }
        throw new \Exception('Cannot create a unique slug');
    }
    protected function getRelatedLocations($slug, $id = 0)
    {
        return Location::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }



    //For Users

    public function createUsername($name, $id = 0)
    {
        // Normalize the title
        $slug = str_slug($name);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedUsers($slug, $id);
        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('username', $slug)){
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'.'.$i;
            if (! $allSlugs->contains('username', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }
    protected function getRelatedUsers($slug, $id = 0)
    {
        return User::select('username')->where('username', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

}
