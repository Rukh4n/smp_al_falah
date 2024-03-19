<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newss = News::all();
        foreach($newss as $news){
            $news->images = url('storage/', $news->images);
        }
        return response()->json($newss);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    // Pagination
    public function paginated()
    {
        $newss = News::paginate(10);

        foreach ($newss as $news) {
            $news->images = url('/storage/' . $news->images);
        }
    
        return response()->json($newss);
    }

    /**
     * Display the specified resource.
     */
    
    public function show(string $id)
    {
        $news = News::findOrFail($id);
        $news->images = url('/storage/' . $news->images);

        return response()->json($news);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
