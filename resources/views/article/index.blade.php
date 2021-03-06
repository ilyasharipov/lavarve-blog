@if (Session::has('status'))
	{{ Session::get('status') }}
@endif
@extends('layouts.app')
@section('title', 'статьи')
@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article) 
        <div>
            <a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->name }}</a>
            <a href="{{ route('articles.edit', ['id' => $article->id]) }}">Обновить</a>
            <a href="{{route('articles.destroy', $article->id)}}" data-confirm="Вы уверены?" data-method="delete">Удалить</a>
        </div>
    @endforeach
    {{ $articles->links() }}
@endsection