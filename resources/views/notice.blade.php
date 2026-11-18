<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>공지사항</title>
</head>
<body>
	<h2>공지사항 목록</h2>
	{{-- notices에 아무것도 없으면 아래 p태그가 표시된다. --}}
	@empty($notices)
		<p>현재 등록된 새로운 공지사항이 없습니다.</p>
	@endempty
</body>
</html>