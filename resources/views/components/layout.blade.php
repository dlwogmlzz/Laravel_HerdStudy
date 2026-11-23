<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ $title ?? '나의 라라벨 사이트' }}</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
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