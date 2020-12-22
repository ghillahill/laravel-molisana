@extends('layouts.app')

@section('content')
    <h1>Prodotti</h1>
@endsection
@section('cards')
    @foreach ($pasta as $item)
        <div class="cards">
            <img src="{{$item['src']}}" alt="pasta">
        </div>
    @endforeach
@endsection

@section('page-title', 'Our Products - Molisana')
