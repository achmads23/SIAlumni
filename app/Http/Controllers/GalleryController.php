<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Gallery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $gallery = Gallery::paginate(15);

        return view('gallery.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('gallery.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'foto' => 'required', 'deskripsi' => 'required', ]);
        // dd($request->all());
        Gallery::create($request->all());

        Session::flash('flash_message', 'Gallery added!');

        return redirect('gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('gallery.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('gallery.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['title' => 'required', 'foto' => 'required', 'deskripsi' => 'required', ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->update($request->all());

        Session::flash('flash_message', 'Gallery updated!');

        return redirect('gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Gallery::destroy($id);

        Session::flash('flash_message', 'Gallery deleted!');

        return redirect('gallery');
    }

}
