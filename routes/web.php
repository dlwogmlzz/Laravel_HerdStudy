<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {Í›
    // return view('welcome');
    // url 받기
    $url = route('posts.show', 10);
    return "<a href='{$url}'>10번 게시물 보기</a>";
});
// ①greeting 경로를 브라우저에 요청을 함 -> view 템플릿 greeting.blade.php를 변수 name, role에 값을 전달해서 보낸다.
Route::get('/greeting', function() { // 여기 greeting은 브라우저에서 요청하는 경로를 의미한다. (http://localhost:8000/greeting)
    return view('member.greeting', [ // views 폴더 밑에 greeting.blade.php를 의미한다.
        // 'name' => '이재희',
        'name' => '<script>alert("해킹!")</script>', // XSS 공격 테스트
        'role' => '관리자'
    ]);
}); // resources/views/member/greeting.blade.php

// 파라미터 전달 & 파라미터 정 규 표현식(->whereNumber('id'))
Route::get('/posts/{id}', function($id) {
    return "요청하신 게시글 번호는 [ ".$id ." ] 번입니다.";
})->whereNumber('id')->name('posts.show');  // 오로지 숫자만 받음

Route::get('/mypage/settings', function() {
    return '설정 페이지 화면입니다.';
})->name('profile.settings');

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

// 여러개 파라미터 전달
Route::get('/posts/{postId}/comments/{commentId}', function($postId, $commentId) {
    return "게시글 번호: {$postId}, 댓글 번호: {$commentId}";
});

// 선택적 파라미터
Route::get('/user/{name?}', function($name = '마리나') { // 선택적 파라미터는 기본값 지정
    return "안녕하세요, {$name}님!";
// })->whereAlpha('name'); // 알파벳만 받음
})->where('name', '[a-zA-Z가-힣0-9]+'); // 알파벳 + 한글 + 숫자 다 받음



