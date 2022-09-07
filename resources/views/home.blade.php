@extends('layouts.main')

@section('main-content')
<main>
    <div id="main">
        <div class="jumbotron">
            <div class="current-series">CURRENT SERIES</div>
        </div>

        <div class="container-content mt-5">
            <div class="d-flex flex-wrap px-3 mb-3">
                @forelse ($comics as $comic)
                    <div class="comics-container">
                        <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
                        <div class="title text-uppercase"> {{ $comic->title }} </div>
                    </div>
                @empty
                    <div class="text-white w-100 text-center">
                        <h2>There are no comics available.</h2>
                    </div>
                @endforelse
            </div>
            <div class="py-3">
                <div class="load">LOAD MORE</div>
            </div>
        </div>
    </div>
    
    <div id="bluebar">
        <div class="container-content d-flex justify-content-around py-5">
            <div>
                <img src="images/buy-comics-digital-comics.png" alt="DIGITAL COMICS">
                <span>DIGITAL COMICS</span>
            </div>
            <div>
                <img src="images/buy-comics-merchandise.png" alt="DC MERCHANDISE">
                <span>DC MERCHANDISE</span>
            </div>
            <div>
                <img src="images/buy-comics-subscriptions.png" alt="SUBSCRIPTION">
                <span>SUBSCRIPTION</span>
            </div>
            <div>
                <img src="images/buy-comics-shop-locator.png" alt="COMIC SHOP LOCATOR">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div>
                <img src="images/buy-dc-power-visa.svg" alt="DC POWER VISA">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</main>
@endsection