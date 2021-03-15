@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection @section('body')

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
<section id="data">
    <div
        class="card  ml-3 mr-3"
        style="border-radius: 10px; background-color:#F8F8FC; border:none">
        <div class="card-body ">
            <h1 class="ml-4">Data Aspirasi</h1>
            
            <div class="row mt-5">
                @foreach ($aspirasi as $as)
                <div class="col-sm-4 mt-4 mb-4">
                    <h1 class="text-center">Aspirasi di</h1>
                    <p class="text-center">{{$as->jenis_aspirasi}}</p>
                   
                    <div class="row">
                      
                       
                        <div class="col-12 ">

                            <div class="d-flex justify-content-center">
                                

                                <a href="{{url("list-aspirasi/$as->id")}}">Lihat Aspirasi</a>
                            </div>
                        </div>
                    </div>
                    <hr width="80%">
                </div>    
                @endforeach
                
              

            </div>

        </div>
    </div>

</section>
<section id="formaspirasi" class=" mt-5">

    <div class="container">
        <h1 class=" mb-5">Form Aspirasi</h1>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" src="{{asset('images/20943572.jpg')}}" alt="">

            </div>
            <div class="col-sm-6">

                <div class="card  h-100">
                    <div class="card-body">
                        <h3 class="">DPRD JAKARTA TIMUR</h3>
                        <p class="text-secondary">Gunakan hak aspirasimu dengan baik supaya bisa
                            menjadikan kota jakarta timur lebih baik lagi</p>
                        <form
                            method="POST"
                            action="{{route('aspirasi.store')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="">Penduduk</label>
                            <select name="penduduk" id="" class="form-control">
                                @foreach($penduduk as $pd)
                                <option value="{{$pd->id}}">{{$pd->nama}}</option>
                                @endforeach
                            </select>
                            <label for="jenis_aspirasi">Jenis Aspirasi</label>
                            <select name="jenis_aspirasi" class="form-control" id="">
                                @foreach ($aspirasi as $as)
                                <option value="{{$as->id}}">{{$as->jenis_aspirasi}}</option>
                                @endforeach
                            </select>

                            <label for="">Lokasi</label>
                            <input type="text" name="lokasi" id="" class="form-control">
                            <label for="">Isi Aspirasi</label>
                            <textarea name="isi_laporan" id="" class="form-control" cols="20" rows="5"></textarea>
                            <label for="">Bukti Laporan</label>
                            <input type="file" name="bukti_laporan" id="" class="form-control">
                            <div class=" mt-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-info">kirim</button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

{{-- <section id="kegiatan" class="ml-5 mr-3">
    <h1>Kegiatan baru</h1>
   <div class="row">
       <div class="col-sm-4 pb-5 mr-4 mt-3">
           <div class="d-flex pt-4  pl-3 ">
            <img height="80" width="80" src="{{asset('images/tamanasri.jpeg')}}" class="mt-4" alt="">
            <div class="caption ml-3  " >
                <p class="font-weight-bold title">Pemerintahan</p>
                <p class="text-secondary subtitle">Kelurahan Kayu Putih, Kecamatan Pulo Gadung, Jakarta Timur mempercantik Ruang Terbuka Hijau (RTH) di Jalan Pulomas Selatan yang dijadikan sebagai Taman Asri PPSU setelah dilakukan penataan fungsi lahan sejak Rabu (8/7/2020) lalu yang sempat menimbulkan keresahan bagi warga, sebab dijadikan lahan parkir.</p>
            </div>
           </div>
           <hr class="">
           <div class="d-flex justify-content-between ">
            <p><i class="far fa-eye pr-3 pl-3"></i>148 Dilihat</p>
            <a href="" class="text-info pr-3">Baca lebih lanjut</a>

           </div>
       </div>
        <div class="col-sm-4 pb-5 mr-4 mt-3">
           <div class="d-flex pt-4  pl-3 ">
            <img height="80" width="80" src="{{asset('images/tamanasri.jpeg')}}" class="mt-4" alt="">
            <div class="caption ml-3  " >
                <p class="font-weight-bold title">Pemerintahan</p>
                <p class="text-secondary subtitle">Kelurahan Kayu Putih, Kecamatan Pulo Gadung, Jakarta Timur mempercantik Ruang Terbuka Hijau (RTH) di Jalan Pulomas Selatan yang dijadikan sebagai Taman Asri PPSU setelah dilakukan penataan fungsi lahan sejak Rabu (8/7/2020) lalu yang sempat menimbulkan keresahan bagi warga, sebab dijadikan lahan parkir.</p>
            </div>
           </div>
           <hr class="">
           <div class="d-flex justify-content-between ">
            <p><i class="far fa-eye pr-3 pl-3"></i>148 Dilihat</p>
            <a href="" class="text-info pr-3">Baca lebih lanjut</a>

           </div>
       </div>
       <div class="col-sm-4 pb-5 mr-4 mt-3">
        <div class="d-flex pt-4  pl-3 ">
         <img height="80" width="80" src="{{asset('images/tamanasri.jpeg')}}" class="mt-4" alt="">
         <div class="caption ml-3  " >
             <p class="font-weight-bold title">Pemerintahan</p>
             <p class="text-secondary subtitle">Kelurahan Kayu Putih, Kecamatan Pulo Gadung, Jakarta Timur mempercantik Ruang Terbuka Hijau (RTH) di Jalan Pulomas Selatan yang dijadikan sebagai Taman Asri PPSU setelah dilakukan penataan fungsi lahan sejak Rabu (8/7/2020) lalu yang sempat menimbulkan keresahan bagi warga, sebab dijadikan lahan parkir.</p>
         </div>
        </div>
        <hr class="">
        <div class="d-flex justify-content-between ">
         <p><i class="far fa-eye pr-3 pl-3"></i>148 Dilihat</p>
         <a href="" class="text-info pr-3">Baca lebih lanjut</a>

        </div>
    </div>
     <div class="col-sm-4 pb-5 mr-4 mt-3">
        <div class="d-flex pt-4  pl-3 ">
         <img height="80" width="80" src="{{asset('images/tamanasri.jpeg')}}" class="mt-4" alt="">
         <div class="caption ml-3  " >
             <p class="font-weight-bold title">Pemerintahan</p>
             <p class="text-secondary subtitle">Kelurahan Kayu Putih, Kecamatan Pulo Gadung, Jakarta Timur mempercantik Ruang Terbuka Hijau (RTH) di Jalan Pulomas Selatan yang dijadikan sebagai Taman Asri PPSU setelah dilakukan penataan fungsi lahan sejak Rabu (8/7/2020) lalu yang sempat menimbulkan keresahan bagi warga, sebab dijadikan lahan parkir.</p>
         </div>
        </div>
        <hr class="">
        <div class="d-flex justify-content-between ">
         <p><i class="far fa-eye pr-3 pl-3"></i>148 Dilihat</p>
         <a href="" class="text-info pr-3">Baca lebih lanjut</a>

        </div>
    </div>

        
   
       

   
    </div>
    
    
    
    
</section> --}}
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
                    
                </form>
            </div>
        </div>

    </div>
</section>

@endsection @section('scripts')
<script src="{{asset('js/data.js')}}"></script>
@endsection