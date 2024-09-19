<?php

namespace App\Models; 

use Illuminate\Support\Arr;

class Post
{
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Shafa Kirana Mulia',
                'body' => 'Siapa yang gak sabar sama LBE 2024?🤩 Nah, sudah bisa dicek jadwal pelaksanaannya yaa temen-temen dan jangan lupa untuk join ke masing-masing group Lab. Harap membaca dengan teliti yaa☺☺Teknis Perizinan
                Perizinan LBE maksimal 12 jam sebelum waktu pelaksanaan LBE di hari berikutnya. Berikut beberapa jenis izin yang diterima:
                '
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Shafa Kirana Mulia',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus repellendus consectetur culpa iste amet! Tempore eaque sit magni, dolorum numquam omnis illum deleniti perferendis. Explicabo officiis incidunt facilis accusantium? Error sequi minus saepe deleniti quasi. Sunt rerum eligendi placeat porro repellendus est, accusamus nemo ullam? Earum tempora obcaecati sit et.'
            ]
            ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }

        return $post;

    }

}