@extends('website.layouts.website') 

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $product->title }}</h1>

                <p><b>Descripcion: </b> {{ $product->description }}</p>

                <p><b>Stock: </b>{{ $product->stock }}</p>

                <a href="/products" class="btn btn-primary">Volver al listado</a>
            </div>
        </div>
    </div>
@endsection
