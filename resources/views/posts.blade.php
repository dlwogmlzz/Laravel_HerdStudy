<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>게시판</title>
</head>
<body>
		<h2>게시글 목록</h2>

		<ul>
			@forelse ($posts as $post)
				<li>
					<strong>{{ $post['title'] }}</strong> - 작성자 {{ $post['writer'] }}
				</li>	
			@empty
				<li style="color:gray">게시글이 존재하지 않습니다.</li>
			@endforelse
		</ul>
</body>
</html>