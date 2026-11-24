{{-- x-layout은 components/layout.blade.php가 있어야 사용가능 --}}
<x-layout title="게시글 목록">
	<h1>게시판 글 목록</h1>
	<ul>
		{{-- posts에서 받아서 post로 넘김 --}}
		@foreach ($posts as $post)
			<li>
				<a href="{{ route('posts.show', $post['id']) }}">
					{{ $post['title'] }}
				</a>
				<span>- {{ $post['author'] }}</span>
			</li>
		@endforeach
	</ul>
</x-layout>