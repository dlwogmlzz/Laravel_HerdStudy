<x-layout title="게시글 상세">
	<h1>게시글 {{ $postId }}번 상세 내용</h1>
	<p>컨트롤러에서 전달받은 파라미터 ID: {{ $postId }}</p>
	<a href="{{ route('posts.index') }}" class="btn">목록으로 돌아가기</a>
</x-layout>