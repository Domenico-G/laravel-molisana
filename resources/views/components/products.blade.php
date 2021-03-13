@extends('layouts.main_layout')


@section('content')
<div class="container-prodotto">
    <div class="row">
        <div class="angle left">
            @if ($idProduct === "1")
            <a href="/prodotti/12">
            @else 
            <a href="/prodotti/{{$idProduct - 1}}">
            @endif
            <i class="fas fa-angle-left"></i>
        </div>
        <div class="prodotto">
            <h2>{{ $array[$idProduct - 1]['titolo'] }}</h2>
            <div class="img-title">
                <img src="{{ $array[$idProduct - 1]['src-h'] }}" alt="">
            </div>
            <div class="img-package">
                <img src="{{ $array[$idProduct - 1]['src-p'] }}" alt="">
            </div>

            <div class="descrizione">
                {!! $array[$idProduct - 1]['descrizione'] !!}
            </div>
        </div>
        <div class="angle right">
            @if ($idProduct == count($array))
            <a href="/prodotti/1">
            @else 
            <a href="/prodotti/{{$idProduct + 1}}">
            @endif
            <i class="fas fa-angle-right"></i>
        </div>
 
    </div>
</div>

@endsection

    
