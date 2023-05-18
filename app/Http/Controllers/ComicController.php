<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $request->validate([
           'title'=>'required|max:255', 
           'src'=>'required|max:255|url', 
           'description'=>'nullable|max:2500', 
           'price'=>'required|max:10', 
           'series'=>'required|max:255', 
           'sale_date'=>'nullable|max:100', 
           'type'=>'required|max:100', 
        ]);


        $form_data = $request->all();

        $newComic = new Comic();

        $newComic->title = $form_data['title'];
        $newComic->description = $form_data['description'];
        $newComic->src = $form_data['src'];
        $newComic->price = $form_data['price'];
        $newComic->series = $form_data['series'];
        $newComic->sale_date = $form_data['sale_date'];
        $newComic->type = $form_data['type'];
        $newComic->save();

        return redirect()->route('comics.index', compact('newComic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|max:2', 
            'src'=>'required|max:255|url', 
            'description'=>'nullable|max:2500', 
            'price'=>'required|max:10', 
            'series'=>'required|max:255', 
            'sale_date'=>'nullable|max:100', 
            'type'=>'required|max:100', 
         ]);


        $comic = Comic::findOrFail($id);
        $form_data = $request->all();
       
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->src = $form_data['src'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect(route('comics.index'));
    }
}
