<x-layout title="소개 및 알림창 예제">
	<h1>알림창 컴포넌트 테스트</h1>

	<x-alert>
		기본 안내 메시지입니다.
	</x-alert>

	<x-alert type="success">
		<strong>성공</strong> 게시글이 정상적으로 등록되었습니다.
	</x-alert>

	@php
		$dynamicType = 'danger';
		$pendingCount = 3;
	@endphp

	<x-alert :type="$dynamicType">
		<strong>경고</strong> 처리 대기 중인 항목이 {{ $pendingCount }} 개 입니다.
	</x-alert>

</x-layout>