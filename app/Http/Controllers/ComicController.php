<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $new_comic = new Comic;

        $new_comic->title = $request["title"];
        $new_comic->description = $request["thumb"];
        $new_comic->thumb = $request["description"];
        $new_comic->price = $request["price"];
        $new_comic->series = $request["serie"];
        $new_comic->sale_date = $request["date"];
        $new_comic->type = $request["type"];
        $new_comic->save();

        return to_route('index.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $index)
    {
        return view('comics.show', compact('index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $index)
    {
        return view('comics.edit', compact('index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $index)
    {

        $data = [
            'title' => $request['title'],
            'description' => $request['description'],
            'thumb' => $request['thumb'],
            'price' => $request['price'],
            'sale_date' => $request['date'],
            'type' => $request['type']
        ];

        $index->update($data);

        return to_route('index.show', compact('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
