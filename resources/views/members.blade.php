<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>회원 목록</title>
</head>
<body>
	<h2>전체 회원 목록</h2>

	<ul>
		{{-- 반복문 사용하기 --}}
		@foreach ($members as $member)
			<li>
				<strong>{{ $loop->iteration }}번</strong>
				{{ $member['name'] }} ({{ $member['email'] }})
				@if ($loop->first)
					<span style="color:greenyellow">[첫번째]</span>
				@endif
				@if ($loop->last)
					<span style="color:darkorchid">[마지막]</span>
				@endif
			</li>
		@endforeach
	</ul>
</body>
</html>