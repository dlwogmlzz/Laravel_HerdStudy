<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home1');
})->name('home');
// 이름 부여 방법 -> name('home1');

Route::get('/about', function () {
    return view('about1');
})->name('about');
// 이름 부여 방법 -> name('about');

// 블레이드 제어문
Route::get('/profile', function() {
    $role = 'user';
    $point = 90;

    return view('profile', [
        'role' => $role,
        'point' => $point,
    ]);
});

Route::get('/notice', function() {
    // $notices = []; // 공지사항이 없는 경우
    $notices = [1]; // 공지사항이 있는 경우

    return view('notice', [
        'notices' => $notices,
    ]);
});

Route::get('/members', function() {
    $members = [
        ['name' => '홍길동', 'email' => 'honggd@email.com'],
        ['name' => '이순신', 'email' => 'leess@email.com'],
        ['name' => '강감찬', 'email' => 'kanggc@email.com'],
        ['name' => '을지문덕', 'email' => 'ejmd@email.com'],
    ];

    return view('members', [
        'members' => $members,
    ]);
});

Route::get('/posts', function() {
    $posts = [
        ['title' => '첫 번째 게시글', 'writer' => '홍길동'],
        ['title' => '두 번째 게시글', 'writer' => '김찰스'],
        ['title' => '세 번째 게시글', 'writer' => '강호동'],
    ];
    // $posts = []; // 게시글이 없는 경우

    // return view('posts', [
    //     'posts' => $posts,
    //     'posts' => $posts,
    //     'posts' => $posts,
    // ]);
    // 위 코드 처럼 줄이 많아질때 [컴팩트 함수]를 사용한다.
    return view('posts', compact('posts'));
})->name('posts.index'); // ⚠️name을 부여를 해줘야 route('posts.index')를 사용할 수 있다.
