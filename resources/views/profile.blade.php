<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>프로필</title>
</head>
<body>
	<h2>회원 등급 확인</h2>

	@if ($role === 'admin')
		<p style="color:red"><strong>관리자</strong> 권한으로 접속했음.</p>
	@elseif ($role === 'editor')
		<p style="color:blue"><strong>편집자</strong> 권한으로 접속했음.</p>
	@else
		<p><strong>일반회원</strong> 입니다.</p>
	@endif
	
	<h3>보유 포인트</h3>
	@if ($point >= 100)
		<p>VIP 회원입니다! (보유 포인트: {{ $point }}점)</p>
	@else
		<p>일반 회원입니다. (보유 포인트: {{ $point }}점)</p>
	@endif
</body>
</html>