@extends('user.layouts.users')

@section('content')
    {{-- Canvas --}}
    <div class="container clearfix">
        <div class="row align-items-center col-mb-50">
            <div class="col-md-5 center">
                <img data-animate="fadeInLeft"
                    src="https://im.uniqlo.com/global-cms/spa/resed6e80a95f6df2fda0fba1ed69c53297fr.jpg" class="rounded"
                    style="width: 700px" alt="Iphone">
            </div>

            <div class="col-md-7 text-center text-md-start">
                <div class="heading-block border-bottom-0">
                    <h3>Tentang florentis</h3>
                </div>
                <p class="fs-5" style="margin-top: -50px">Florentis adalah aplikasi asal Indonesia yang mendukung kelestarian lingkungan dan pertumbuhan tanaman.</p>
                <p class="fs-5">Dengan teknologi modern, kami mendorong penggunaan pupuk alami secara efisien untuk pertanian organik dan urban farming. Mari bersama Florentis, wujudkan lingkungan yang lebih hijau dan subur!</p>

                <a href="/produk" class="button button-black button-rounded button-large" style="margin-top: -100px">Belanja
                    Sekarang</a>
            </div>
        </div>
    </div>
    {{-- EndCanvas --}}
@endsection
