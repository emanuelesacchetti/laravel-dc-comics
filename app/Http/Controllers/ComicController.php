<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
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
    public function store(StoreComicRequest $request)    //Request
    {   
        //in $form_data inserisco i dati del fom validati
        $form_data = $request->validated();
                           //$form_data = $this->validation($request->all());
        
        //creo una nuova istanza di tipo Comic
        $newComic = new Comic();
        //dentro $newComic ci metto i dati del form validati
        $newComic->fill($form_data);
        //salvo
        $newComic->save();
        //vengo reindirizzato alla view index e passo la nuova istanza creata
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
    public function update(UpdateComicRequest $request, $id) //Request
    {
        //in &comic ci finisce l'id
        $comic = Comic::findOrFail($id);
        //in $form_data ci vanno i dati del form verificati
        $form_data = $request->validated();
                     //$form_data = $this->validation($request->all());

        //riempio $comic con i dati del form validati(e salvo)
        $comic->update($form_data);

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
