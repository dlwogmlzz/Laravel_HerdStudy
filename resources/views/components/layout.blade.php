<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ $title ?? '나의 라라벨 사이트' }}</title>
	<style>
		body {font-family:  sans-serif; margin: 0; padding: 20px;}
		header {background: #e5e7eb; padding: 15px; margin-bottom: 20px; border-radius: 8px;}
		nav a {margin-right: 15px; text-decoration: none; color: #2563eb; font-weight: bold;}
	</style>
</head>
<body>
	<header>
		<h2>My Laravel App (Component Base)</h2>
		<nav>
			<a href="/">홈</a>
			<a href="/about">소개</a>
		</nav>
	</header>

	<main>
		{{ $slot }}
	</main>
</body>
</html>