<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel
{

    public static function get_all()
    {
        $artikels = DB::table('artikels')->get();
        return $artikels;
    }
    public static function find_by_id($id)
    {
        $artikels = DB::table('artikels')->where('id', '=', $id)->first();
        return $artikels;
    }

    public static function update($id, $request)
    {
        $artikels = DB::table('artikels')
            ->where('id', '=', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"],
                'slug' => $request["slug"],
                'tag' => $request["tag"]
            ]);
        return $artikels;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('artikels')
            ->where('id', '=', $id)
            ->delete();
        return $deleted;
    }

    public static function save($data)
    {

        $new_pertanyaan = DB::table('artikels')->insert($data);
        return $new_pertanyaan;
    }
}
