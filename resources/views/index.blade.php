@extends('layout/page')
@section('content')
    
<section class="section-box">
<div class="banner-hero hero-1">
    @if(session('error'))
    <div class="alert alert-danger">
        <b>Opps!</b> {{session('error')}}
    </div>
    @endif
    @if(Session::has('message'))
        <div class="alert alert-success">
                {{ Session::get('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="banner-inner">
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="block-banner">
                    <h1 class="heading-banner wow animate__animated animate__fadeInUp"><span class="color-brand-2">PG Trangkil</span><br class="d-none d-lg-block">Menembus Batas</h1>
                    <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">PG Trangkil merupakan Pabrik Gula Terbesar <br class="d-none d-lg-block">se Jawa Tengah yang memiliki visi menjadi perusahaan yang <br class="d-none d-lg-block"> berdaya saing tinggi di tingkat regional</div>
                    <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                        <form>
                            <div class="box-industry">
                                <select class="form-input mr-20 select-active input-industry">
                                    <option value="">Bagian</option>
                                    @foreach ($fungsi as $item)
                                    <option value="{{$item->id}}">{{$item->fungsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <select class="form-input mr-20 select-active">
                                <option value="">Lokasi</option>
                                @foreach ($lokasi as $item)
                                <option value="{{$item->id}}">{{$item->lokasi}}</option>
                                @endforeach
                            </select>
                            <input class="form-input input-keysearch mr-10" type="text" placeholder="Your keyword... ">
                            <button class="btn btn-default btn-find font-sm">Search</button>
                        </form>
                    </div>
                    <!-- <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><strong>Popular Searches:</strong><a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a></div> -->
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
                <div class="banner-imgs">
                    <div class="block-1 shape-1"><img class="img-responsive" alt="jobBox" src="{{asset('vendor/assets/imgs/page/homepage1/banner1.png')}}"></div>
                    <div class="block-2 shape-2"><img class="img-responsive" alt="jobBox" src="{{asset('vendor/assets/imgs/page/homepage1/banner2.png')}}"></div>
                    <div class="block-3 shape-3"><img class="img-responsive" alt="jobBox" src="{{asset('vendor/assets/imgs/page/homepage1/icon-top-banner.png')}}"></div>
                    <div class="block-4 shape-3"><img class="img-responsive" alt="jobBox" src="{{asset('vendor/assets/imgs/page/homepage1/icon-bottom-banner.png')}}"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div class="mt-100"></div>

{{-- @include('/section/browse')
@include('/section/hiring') --}}
@include('/section/job_list')
{{-- @include('/section/find_job')
@include('/section/total_rekruit')
@include('/section/top_rekruiter')
@include('/section/jobs_location')
@include('/section/news_blog')
@include('/section/send_email') --}}

@endSection
@section('modal')
    @include('/modal/register')
    @include('/modal/login')
@endsection