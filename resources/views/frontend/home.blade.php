@extends('Layouts.frontend.header')
<!-- Topbar Start -->

@section('content')
    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
                <div class="d-flex">
                    <img src="img/news-100x100-1.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px; width: 100%;">
                        <a class="text-secondary font-weight-semi-bold" href="becdex.com">Becdex.com</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="img/news-100x100-2.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec
                            adipis elit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="img/news-100x100-3.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec
                            adipis elit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="img/news-100x100-4.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec
                            adipis elit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">Sanctus amet sed amet ipsum
                                    lorem. Dolores et erat et elitr sea sed</a>
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">Sanctus amet sed amet ipsum
                                    lorem. Dolores et erat et elitr sea sed</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2"
                                style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2"
                                style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2"
                                style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2"
                                style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2"
                                style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2"
                                style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Berita</h3>
                            </div>
                        </div>
                        <div class="col-lg-12" id="card-container">
                            <!-- Data akan ditampilkan di sini -->
                        </div>
                    </div>
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid w-100" src="img/ads-700x70.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('getData.artikel') }}", // Ganti dengan URL yang sesuai
                dataType: "json",
                success: function(data) {
                    var cardContainer = $("#card-container");
                    for (var i = 0; i < data.length; i += 2) {
                        var cardHtml = '<div class="row mb-3">' +
                            '<div class="col-md-6">' +
                            '<div class="position-relative">' +
                            '<img class="img-fluid img-thumbnail" style="width: 400px; height: 200px;" src="/uploads/artikel/img/' +
                            data[i].gambar +
                            '" style="object-fit: cover;">' +
                            '<div class="overlay position-relative bg-light">' +
                            '<div class="mb-2" style="font-size: 14px;">' +
                            '<span>' + data[i].tanggal + '</span>' +
                            '</div>' +
                            '<a class="h4 article-title" href="/detail-artikel/' + data[i].id + '">' +
                            data[i].judul + '</a>' +

                            '<p class="m-0">' + data[i].deskripsi + '</p>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        if (i + 1 < data.length) {
                            cardHtml += '<div class="col-md-6">' +
                                '<div class="position-relative">' +
                                '<img class="img-fluid img-thumbnail" style="width: 400px; height: 200px;" src="/uploads/artikel/img/' +
                                data[i + 1].gambar +
                                '" style="object-fit: cover;">' +
                                '<div class="overlay position-relative bg-light">' +
                                '<div class="mb-2" style="font-size: 14px;">' +
                                '<span>' + data[i + 1].tanggal + '</span>' +
                                '</div>' +
                                '<a class="h4 article-title" href="/detail-artikel/' + data[i + 1].id +
                                '">' + data[i + 1].judul + '</a>' +

                                '<p class="m-0">' + data[i + 1].deskripsi + '</p>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                        }
                        cardHtml += '</div>';
                        cardContainer.append(cardHtml);
                    }
                }
            });
        });
    </script>
@endsection
<!-- News With Sidebar End -->
