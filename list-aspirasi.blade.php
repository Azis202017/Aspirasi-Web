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
            <p class="text-center">{{$mytime->toFormattedDateString(    )}}</p>
        </div>

    </div>
    </section>
      
        <table class="table table-responsive-sm ">
            <thead>
                <tr>
                    <th>
                       No
                    </th>
                    <th>
                       Nama Penduduk
                    </th>
                    <th>
                       Lokasi
                    </th>
                    <th>
                        Laporan
                    </th>
                    <th>
                        Bukti laporan
                    </th>
                   
                    <th>
                        Feedback
                    </th>
                </tr>

            </thead>
            <tbody>
              
                @foreach ($getAspirasi as $aspirasi )
               
                <tr>
                    <td>
                        {{$no++}}
                    </td>
                    <td>
                        {{ $aspirasi->penduduk->nama }}
                    </td>
                    <td>{{$aspirasi->lokasi}}</td>
                    <td>{{$aspirasi->isi_laporan}}</td>
                    <td><a href="{{url("images/$aspirasi->bukti_laporan")}}">Bukti laporan</a></td>
                    <td><a href="{{url("/admin/feedback/$aspirasi->id")}}">Feedback</a></td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
 
@endsection