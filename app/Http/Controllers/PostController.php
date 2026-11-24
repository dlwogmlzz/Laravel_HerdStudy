<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => '라라벨 13 시작하기', 'author' => '홍길동'],
            ['id' => 2, 'title' => '컨트롤러와 MVC 패턴', 'author' => '이순신'], 
        ];
        // 컨트롤러에서 바로 return 할수 있음.
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(int $id)
    {
        return view('posts.show', [
            'postId' => $id  
        ]);
    }
}
