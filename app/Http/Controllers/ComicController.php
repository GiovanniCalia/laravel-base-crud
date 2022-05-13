<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    protected $validationData = [
        'title'    => 'required|unique:comics|min:5|max:80',
        'thumb'    => 'nullable|url|max:250',
        'price'    => 'numeric|max:999.99',
        'series'   => 'max:60',
        'type'     => 'required|max:20',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(4);

        return view('Comics.index', compact('comics'));
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
        $request->validate($this->validationData, [
            'thumb.url' => 'insert a valid URL'
        ]);
        $formComic = $request->all();

        $save = Comic::create($formComic);
        return redirect()->route('comics.show', $save->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show',[
           'title' => $comic->title,
           'comic' => $comic,
        ]);
    }

    /*public function show($id)
    {
        $comic = Comic::findOrFail($id);
        dd($comic);
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validationData = [
            'title'    => 'required|min:5|max:80',
            'thumb'    => 'nullable|url|max:250',
            'price'    => 'numeric|max:999.99',
            'series'   => 'max:60',
            'type'     => 'required|max:20',
        ];
        $request->validate($this->validationData);
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
