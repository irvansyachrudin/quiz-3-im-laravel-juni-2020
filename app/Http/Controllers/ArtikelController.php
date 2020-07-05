<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = ArtikelModel::get_all();
        return view('artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('artikel.form');
    }

    public function show($id)
    {
        $artikels = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('artikels'));
    }

    public function edit($id)
    {
        $artikels = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikels'));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $user_id = 1;
        $judul   = $request->input('judul');
        $isi     = $request->input('isi');
        $slug    = str_replace(" ", "-", strtolower($judul));
        $tag     = $request->input('tag');
        $tag     = strtolower($tag);

        $data = [
            'judul' => $judul,
            'isi'   => $isi,
            'slug'  => $slug,
            'tag'  => $tag,
            'user_id'  => $user_id
        ];

        $artikels = ArtikelModel::update($id, $data);
        return redirect('/artikel');
    }

    public function destroy($id)
    {
        // dd($request);
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }

    public function store(Request $request)
    {
        $user_id = 1;
        $judul   = $request->input('judul');
        $isi     = $request->input('isi');
        $slug    = str_replace(" ", "-", strtolower($judul));
        $tag     = $request->input('tag');
        $tag     = strtolower($tag);

        $data = [
            'judul' => $judul,
            'isi'   => $isi,
            'slug'  => $slug,
            'tag'  => $tag,
            'user_id'  => $user_id
        ];
        // dd($data);

        $artikel = ArtikelModel::save($data);
        if ($artikel) {
            return redirect('/artikel');
        }
    }
}
