<?php

namespace App\Models;

class Post
{
      private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "author" => "MRM",
            "slug" => "judul-pertama",
            "body" => "Artikel merupakan salah satu jenis karya tulis. Teks artikel ada yang berisikan persuasi atau berbagai informasi tambahan untuk pembaca.

            Teks artikel biasanya ditulis secara singkat, padat dan jelas agar pembaca lebih mudah mengerti. Tidak hanya itu, biasanya dalam artikel ada opini yang turut didukung dengan fakta.

            Selain itu, artikel juga bersifat faktual dan informatif. Artinya sesuai dengan fakta di lapangan serta untuk memberi informasi atau pengetahuan kepada pembaca."
        ],
        [
            "title" => "Judul Kedua",
            "author" => "MRM",
            "slug" => "judul-kedua",
            "body" => "Artikel merupakan salah satu jenis karya tulis. Teks artikel ada yang berisikan persuasi atau berbagai informasi tambahan untuk pembaca.

            Teks artikel biasanya ditulis secara singkat, padat dan jelas agar pembaca lebih mudah mengerti. Tidak hanya itu, biasanya dalam artikel ada opini yang turut didukung dengan fakta.

            Selain itu, artikel juga bersifat faktual dan informatif. Artinya sesuai dengan fakta di lapangan serta untuk memberi informasi atau pengetahuan kepada pembaca."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
     return $posts->firstWhere('slug', $slug);

    }
}
