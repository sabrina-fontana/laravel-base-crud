<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $beers = Beer::all();
      return view('beers.index', compact('beers'));
    }

    /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validazione dati
        $request->validate([
            'nome' => 'required|max:100',
            'birrificio' => 'required|max:100',
            'gradi' => 'numeric',
            'prezzo' => 'required|numeric|between:0,999.99',
            ]);

        // In store() vengono passate le coppie name-value inviate dal form tramite la classe Request $request. 
        //Usiamo il suo metodo all() per ottenere tutte le coppie in un array.
        $data = $request->all();
        // creo il nuovo oggetto Beer e faccio il fill dell'array inviato dal form (dopo aver creato l'array $fillable nel model Beer)
        $newBeer = new Beer();
        $newBeer->fill($data);
        // salvo i dati nel db
        $newBeer->save();

        // ritorno la root show mostrando l'ultimo oggetto aggiunto
        $beer = Beer::orderBy('id', 'desc')->first();
        return redirect()->route('beers.show', $beer);
    }

    /**
     * Display the specified resource.
     *
     * @param  Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
      // $beer = Beer::find($id);
        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request->all();
        $beer->update($data);
        return redirect()->route('beers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {   
        $beer->delete();
        return redirect()->route('beers.index');
    }
}
