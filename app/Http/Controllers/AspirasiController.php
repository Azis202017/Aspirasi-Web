<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Input;
use App\Models\Penduduk;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index() {
       
        $aspirasi       = Aspirasi::all();
        $mytime         = Carbon::now();
        
        $penduduk       = Penduduk::all();
        $inputs         = Input::all();
        $takeAspirasi   = Input::where('id_aspirasi',1)->count();
        $pembangunan    = Input::where('id_aspirasi',3)->count();
        $perekonomian   = Input::where('id_aspirasi',2)->count();
        $status     = Status::all();
        return view('index',compact('aspirasi','penduduk','inputs','status','takeAspirasi','perekonomian','pembangunan','mytime'));
    }
    public function store(Request $request) {
        $file = $request->file('bukti_laporan');
        $nama_file = $file->getClientOriginalName();
        $tujuan_upload = 'images';
        $file->move($tujuan_upload,$nama_file);

        Input::create([
            'id_penduduk'   => $request->penduduk,
            'id_aspirasi'   => $request->jenis_aspirasi,
            'lokasi'        => $request->lokasi,
            'isi_laporan'   => $request->isi_laporan,
            'bukti_laporan' => $nama_file
        ]);
        return redirect('/')->with('success','Success, terimakasih yaa sudah mau aspirasi! silahkan ditunggu feedbacknya');
    }
    public function aspirasi($id) {
        $mytime         = Carbon::now();
        $getAspirasi = Input::where('id_aspirasi',$id )->get();
        $no          = 1;
        return view('list-aspirasi',compact('getAspirasi','no','mytime'));
    }
    public function feedback($id) {
        $mytime         = Carbon::now();
        $feedback = Status::where('id_inputs',$id)->get();
        $count = $feedback->count();
        return view('feedback',compact('feedback','mytime','count'));
    }
}
