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

<!--Predisposto un yield per aggiungere script per carosello-->
@section('scripts')

@endsection

@section('page-title', 'Our Products - Molisana')
