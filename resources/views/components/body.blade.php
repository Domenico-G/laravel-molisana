@extends('layouts.main_layout')


@section('content')
  <div class="container-pasta">
    <div class="row">
      <h2>le lunghe</h2>
      <div class="content">
        @foreach ($arrayPasta as $key => $pasta)
        @if ($pasta['tipo'] === 'lunga')
        <div class="col">
              <a href="/prodotti/{{ $key + 1 }}">
                <div class="content"
                   style="background: url('{{ $pasta['src'] }}') no-repeat center center; 
                   background-size: cover;">
                </div>
              </a>
            </div>
            @endif
        @endforeach
      </div>
    </div>
    <div class="row">
      <h2>le corte</h2>
      <div class="content">
        @foreach ($arrayPasta as $key => $pasta)
          @if ($pasta['tipo'] === 'corta')
            <div class="col">
              <a href="/prodotti/{{ $key + 1 }}">
                <div class="content"
                   style="background: url('{{ $pasta['src'] }}') no-repeat center center; 
                   background-size: cover;">
                </div>
              </a>
            </div>
            @endif
        @endforeach
      </div>
    </div>
    <div class="row">
      <h2>le cortissime</h2>
      <div class="content">
        @foreach ($arrayPasta as $key => $pasta)
          @if ($pasta['tipo'] === 'cortissima')
            <div class="col">
              <a href="/prodotti/{{ $key + 1 }}">
                <div class="content"
                   style="background: url('{{ $pasta['src'] }}') no-repeat center center; 
                   background-size: cover;">
                </div>
              </a>
            </div>
            @endif
        @endforeach
      </div>
    </div>
  </div>
@endsection
