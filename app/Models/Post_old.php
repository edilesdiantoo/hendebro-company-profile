<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title"  => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "author" => "Edi lesdianto",
            "body"   => "Repudiandae perspiciatis voluptatem veritatis debitis alias sint voluptates culpa dolorem possimus ea facere, vero omnis, suscipit quae nihil dignissimos necessitatibus est nam temporibus pariatur aut vitae voluptate reiciendis tempore! Nisi rem natus temporibus illo beatae odit repellendus eius eveniet rerum eaque pariatur eum assumenda velit at voluptas iure ullam, possimus architecto neque reiciendis, deleniti nostrum fuga non. Quo veniam sit aperiam nam dolorem temporibus officiis similique, natus ipsa cumque molestiae veritatis obcaecati libero odio! Nam dolorum laborum alias delectus maiores doloremque est, in totam eligendi. Sit aliquid sunt hic dolor delectus tempora doloribus similique adipisci ab ad!"
        ],
        [
            "title"  => "Judul Post Kedua",
            "slug"  => "judul-post-kedua",
            "author" => "Rifki",
            "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores possimus aut fuga dolor ad laborum optio distinctio, pariatur doloremque sequi aspernatur, harum iste quasi, assumenda in quibusdam voluptates? Aperiam accusamus esse hic sequi odio eius beatae sed ipsa porro, quisquam ab molestiae? Reprehenderit nam, similique molestiae nemo odit fugiat iste enim dolorem. Architecto, deleniti suscipit? Assumenda sint quo repellat fugiat quos in natus totam veritatis dolorem ipsam, dicta harum exercitationem soluta? Ab provident architecto soluta aliquid, rerum quidem iste ipsum eveniet cupiditate fugit eos magni voluptatibus error! Vero qui cum iusto hic excepturi eos accusamus, commodi ab, obcaecati nulla porro."
        ]
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
