@extends('main')

@section('main_content')
<form class="ml-auto mr-auto p-3 px-md-4 mb-3 w-50" method="post" action="/review/check">
    @csrf
    <h1 class="mb-4">Отзыв</h1>
    @if($errors->any())
        <div class="alert alert-danger text-danger bg-dark border border-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input value="{{ old('email') }}" autocomplete="off" type="email" name="email" id="email" placeholder="Введите Email" class="form-control bg-dark text-light border border-secondary"><br>
    <input value="{{ old('subject') }}" autocomplete="off" type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control bg-dark text-light border border-secondary"><br>
    <textarea value="{{ old('message') }}" autocomplete="off" name="message" id="message" class="form-control bg-dark text-light border border-secondary" placeholder="Введите сообщение"></textarea><br>
    <button type="sumbit" class="btn btn-success w-100">Отправить</button>
</form>
@endsection