@extends('layouts.frontend.master')

@section('title')
    Selamat Datang di Website TokoToku ID
@endsection

@section('content')
    <!-- header caraousel -->
    <header>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cdnb.artstation.com/p/assets/images/images/011/153/149/large/huy-hoang-banner-2.jpg"
                            class="d-block w-100 shadow-nih" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/11/25/51260e3b-fcba-46ff-8a42-f11dd6736d1f.jpg.webp?ect=4g"
                            class="d-block w-100 shadow-nih" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/11/25/51260e3b-fcba-46ff-8a42-f11dd6736d1f.jpg.webp?ect=4g"
                            class="d-block w-100 shadow-nih" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- start main -->
    <main>
        <div class="container">
            <!-- start section list product -->
            <section class="product">
                <div class="d-flex justify-content-between">
                    <div class="title">
                        <p class="text-success">Recomended Product</p>
                        <h2>Our Popular Product</h2>
                    </div>
                    <button class="btn btn-primary lihat d-none d-md-block">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>
                <div class="row justify-content-center" id="list-product">
                    {{-- @foreach ($data as $item)
                        <h1>ailsya</h1>
                    @endforeach --}}

                    @forelse ($data as $item)
                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <img class="rounded-20 mb-3" height="150" src="{{ asset('img/' . $item->image) }}" alt="">
                                <div class="topic">
                                    <h3>
                                        {{ $item->title }}
                                    </h3>
                                    <div class="d-flex justify-content-between">
                                        <div class="harga">
                                            <small>Price</small>
                                            <p>Rp. {{ number_format($item->harga) }}</p>
                                        </div>

                                        <a href="detail.html" class="btn btn-primary beli">
                                            <i class="fas fa-shopping-cart me-1"></i> Buy
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="text-center mt-4 d-md-none d-lg-none d-xl-none">
                    <button class="btn btn-primary lihat">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>
            </section>
            <!-- end section list product -->
        </div>
    </main>
    <!-- end main -->
@endsection
