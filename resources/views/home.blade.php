@extends('welcome')

@section('content')
    <div class="p-4">
        <h1>Pizza Hub</h1>
        @foreach ($products as $product)
            <div class="d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="{{ $product->figure }}" style="width: 286px; height: 180px"/>
                    <div class="card-body p-4">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <h6 class="card-subtitle">Detalhes: {{ $product->caption }}</h6>
                        <br>
                        <p class="card-text">Sabor: {{ $product->flavors[0]->name }}<br>Tamanho: {{ $product->sizes[0]->name }}</p>
                        <p class="card-text float-right">{{$product->price . "R$"}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection