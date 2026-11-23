@props([
	'type' => 'info'	// type이 전달되지 않았을 때 기본 값
])
{{-- 템플릿 안에서 php를 사용하려면 --}}
@php
	$classes = match($type) {
		'success' => 'background-color: #d1fae5; color: #065f46; border: 1px solid #34d399;',
		'danger'  => 'background-color: #fee2e2; color: #991b1b; border: 1px solid #f87171;',
		'warning' => 'background-color: #fef3c7; color: #92400e; border: 1px solid #fbbf24;',
		default   => 'background-color: #e0f2fe; color: #075985; border: 1px solid #38bdf8;',
	};
@endphp

<div style="padding: 12px; 16px; border-radius: 6px; margin: 10px 0; {{ $classes }}">
	{{ $slot }}
</div>