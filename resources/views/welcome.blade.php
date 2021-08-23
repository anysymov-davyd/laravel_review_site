@extends('main')
@section('main_content')
<section class="p-3 px-md-4 mb-3 w-75">
	<h1>Добро пожаловать!</h1>
	<p>Вы посещаете страницу, созданная при помощи Laravel и Bootstrap. Это первая успешно созданная страница с участием бэкенд фреймворка. Надеюсь в дальнейшем он также будет иметь место среди моих проектов.</p>

	<div class="mt-5">
		@if ($reviews->count() == 0)
			<h5 class="text-muted">< отзывов пока нет ></h5>
		@else
			<h2 class="mb-4 mt-2">Отзывы</h2>
			@foreach($reviews as $el)
				<div class="mb-5 w-75">
					<h5 class="font-italic mb-3">— {{ $el->email }}</h5>
					<b class="ml-3">{{ $el->subject }}</b>
					<p class="ml-3">{{ $el->message }}</p>
				</div>
			@endforeach
		@endif
	</div>
</section>
@endsection