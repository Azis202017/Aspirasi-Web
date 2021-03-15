@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('body')
<section id="hero-image" style="">
    <div class="container">
        <div class="d-flex justify-content-center image">
            <div class="card mt-3 mb-3">
                <div class="card-body ">
                    <img height="50" src="{{asset('images/DPRD.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="text">
            <h1 class="title text-center">
                DPRD DKI JAKARTA</h1>
            <p class="text-center">{{$mytime->toFormattedDateString()}}</p>
        </div>

    </div>
    </section>
    <section id="feedback">
    
      @if($count == 0 ) 
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{asset('images/5283.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-12 mt-5">
                <div class="d-flex flex-column align-items-center">
                    <h4>Belum ada tanggapan nih </h4>
                    <p>Sabar ya kita proses dulu untuk tanggapannya terimakasih sudah mengisi aspirasi!</p>
                    <a class="btn btn-info" href="{{url('/')}}">Kembali</a>

                </div>
            </div>
        </div>
      </div>
      @else 
        @foreach ($feedback as $feed)
        
        <div class="mt-3 d-flex align-items-center flex-column">
            <img height="200" src="{{asset("images/$feed->bukti_feedback")}}" alt="">
        
        </div>
        <div class="container">
            <h4 class="mt-3">{{$feed->input->isi_laporan}}</h4>
            <div class="alert alert-success ">Status : {{$feed->status}}</div>
            <p>Lokasi : {{$feed->input->lokasi}}</p>
            <p>Aspirasi ke : {{$feed->input->aspirasi->jenis_aspirasi}}</p>
            <p>Jawaban dari pemerintah : {{$feed->feedback}}</p>
            <a class="btn btn-info" href="{{url('/')}}">Kembali</a>
        </div>
        
        
        @endforeach
      @endif
      
    </section>

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
    style="position: relative; top:-1px; z-index:-1;background-color: #00adb5; border-none ">
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
                    <div class="d-flex">
                        <input type="text" name="" id="" class="form-control w-50">
                        <button class="btn btn-dark ml-2">submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
@endsection