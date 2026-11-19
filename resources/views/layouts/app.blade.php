<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title', '나의 라라벨 사이트')</title>
	<style>
		body { font-family: sans-serif; margin:0; padding: 20px;}
		header { background: #f3f4f6; padding: 15px; margin-bottom: 20px; border-radius: 8px; }
		footer { margin-top: 40px; padding-top: 10px; border-top: 1px; solid: #e5e7eb; color: #6b7280; font-size: 14px; }
		nav a { margin-right: 15px; text-decoration: none; color: #3b82f6; font-weight: bold; }
	</style>
</head>
<body>
	{{-- 시멘틱 태그 header --}}
	<header>
		<h2>My Laravel App</h2>
		<nav>
			<a href="{{ route('home') }}"> 홈 </a>
			<a href="{{ route('about') }}"> 소개 </a>
			<a href="{{ route('posts.index') }}"> 게시판 </a>
		</nav>
		<main>
			@yield('content')
		</main>
		<footer>
			<p>2026 My Laravel App. All rights reserved.</p>
		</footer>
	</header>
</body>
</html>