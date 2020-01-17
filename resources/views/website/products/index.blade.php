@extends('website.layouts.website')

@section('title', $title)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $title }}</h1>

                @foreach ($items as $product)
                    <div>
                        <a href="/products/{{ $product->id }}">
                            {{ $product->title }}
                        </a>
                    </div>
                @endforeach

                {{ $items->links() }}
            </div>
        </div>
    </div>
@endsection
