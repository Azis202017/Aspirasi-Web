@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection
@section('body')
<div class="jumbotron">
    <div class="container">
        <h1>DKI JAKARTA TIMUR</h1>
        <p>Sampaikan aspirasi mu disini dengan baik dan bijak supaya bisa kita sama sama membangun kota jakarta timur menjadi lebih baik lagi</p>
        <a href="{{url('/')}}"class="btn btn-info">Aspirasi</a>
       
    </div>
</div>
<div class="activities">
    <div class="container">
        <h3>Tanggapan Aspirasi</h3>
        <div class="row">
            @foreach ($aspirasi as $as)
                <div class="col-sm-4 mt-5">
                
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset("images/$as->bukti_laporan")}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{$as->aspirasi->jenis_aspirasi}}</h5>
                        <p class="card-text">{{$as->isi_laporan}}</p>
                        <a href="{{url("admin/feedback/$as->id")}}" class="btn btn-primary">Liat lebih lanjut</a>
                        </div>
                    </div>
                

                </div>
            @endforeach
        </div>
       
       
    </div>
</div>
<section>

    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
        <path
            fill="#00adb5"
            fill-opacity="1"
            d="M0,64L48,69.3C96,75,192,85,288,128C384,171,480,245,576,272C672,299,768,277,864,250.7C960,224,1056,192,1152,197.3C1248,203,1344,245,1392,266.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

</section>
<section
    id="footer"
    style="position: relative; top:-1px; z-index:-1;background-color: #00adb5; border-none;">
    <div class="container pb-5 pt-5">
        <div class="row">
            <div class="col-sm-6 mt-5 mb-5">
                <h4 class="  text-white" style="color: #222831">DPRD JAKARTA TIMUR</h4>
                <p class="w-50" style="color :#eee; opacity:0.8">Gunakan hak aspirasimu untuk
                    menyampaikan aspirasi sehingga menjadikan kota jakarta timur menjadi lebih baik
                    lagi</p>
                <div class="row">
                    <div class="col-sm-6 text-white">
                        <p>Social Media :
                        </p>
                        <div class="d-flex ">
                            <i class="fab fa-facebook mr-3"></i>
                            <i class="fab fa-whatsapp mr-3"></i>
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 mt-5 mb-5">
                <form action="">
                    <h6 class="text-white">Contact Me</h6>
                    <p class="text-white ">
                        <i class="fab fa-instagram text-white mr-1" aria-hidden="true"></i>
                        Abdul Azis Al Ayubbi</p>
                    <p class="text-white">
                        <i class="fab fa-github text-white mr-2" aria-hidden="true"></i>Azis202017</p>
                    
                </form>
            </div>
        </div>

    </div>
</section>
@endsection