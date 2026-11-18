<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>인사 페이지</title>
</head>
<body>
	<h1>안녕하세요. {{ $name }}님!</h1> {{-- XSS 공격 방지 --}}
	{{-- <h1>안녕하세요. {!! $name !!}님!</h1> --}}
	{{-- {!! !!}는 이스케이프 처리를 하지않는다? HTML 태그를 허용한다. --}}
	{{-- {{ }}는 HTML 태그를 허용하지 않는다. --}}
	<p>당신의 권한은 <strong>{{ $role }}</strong>입니다.</p>
</body>
</html>