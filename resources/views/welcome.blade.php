@extends('layouts.main')
@section('content')

    @foreach ($products as $product)
        <div class="card mb-3" style="width: 15rem; float:left; margin-left:10px">
            <h5 class="card-header" style="height:4rem">{{ $product->name }}</h5>
            <div class="card-body">
                <h6 class="text-muted" style="display: inline;">Price: {{ $product->price }}$</h6>
            </div>
            @if($product->image)
            <div class="image-container" style="height: 150px;">
                <a href="{{ asset('storage/images/'.$product->image) }}" target="_blank">
                    <img src="{{ asset('storage/images/'.$product->image) }}" class="img">
                </a>
            </div>
            @else
                <div class="image-container" style="height: 150px;">
                    <img src="{{ asset('storage/images/noimage.jpg') }}" class="img">
                </div>
            @endif
        </div>
    @endforeach

@endsection
