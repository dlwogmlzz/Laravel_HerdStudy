<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "안녕하세요! 첫 번째 라우트입니다.";
});

Route::get('/about', function () {
    return '<h1>회사 소개 페이지</h1><p>라라벨을 공부하는 초보 개발자의 공간입니다.';
});

// 배열을 json으로 변환하는 Route 생성
Route::get('/api-test', function () {
    return[
        'name' => '이재희',
        'role' => '초보 개발자',
        'framework' => 'Laravel 13'
    ];
});
