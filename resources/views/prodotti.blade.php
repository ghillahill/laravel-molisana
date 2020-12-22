@extends('layouts.app')

@section('cards')
    <h2>LE LUNGHE</h2>
    <div class="cards-box">
        @foreach ($pasta as $item)
            @if($item['tipo'] === 'lunga')
            <div class="card">
                <img src="{{$item['src']}}" alt="pasta">
            </div>
            @endif
        @endforeach
    </div>
    <h2>LE CORTE</h2>
    <div class="cards-box">
        @foreach ($pasta as $item)
            @if($item['tipo'] === 'corta')
            <div class="card">
                <img src="{{$item['src']}}" alt="pasta">
            </div>
            @endif
        @endforeach
    </div>
    <h2>LE CORTISSIME</h2>
    <div class="cards-box">
        @foreach ($pasta as $item)
            @if($item['tipo'] === 'cortissima')
            <div class="card">
                <img src="{{$item['src']}}" alt="pasta">
            </div>
            @endif
        @endforeach
    </div>
@endsection

@section('page-title', 'Our Products - Molisana')
