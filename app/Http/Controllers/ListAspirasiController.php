<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Status;
use Illuminate\Http\Request;

class ListAspirasiController extends Controller
{
    public function index() {
        $no = 1;
        $getAspirasi = Input::all();
        return view('admin.listaspirasi',compact('getAspirasi','no'));
    }
    public function create(Request $request ) {
        $file  = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $tujuan_upload = 'images';
        $file->move($tujuan_upload,$nama_file);
        Status::create([
            'id_inputs'         => $request->id_inputs,
            'feedback'           => $request->feedback,
            'status'            => $request->status,
            'bukti_feedback'    => $nama_file,
        ]);
        return redirect('admin/list-aspirasi')->with('success','Berhasil mengirim feedback');
    }
    public function update(Request $request, $id) {
        $getId = Input::find($id);
       
        return view('admin.form-feedback',compact('getId'));
    }
    public function drop($id) {
        Input::destroy($id);
        return redirect(route('admin.list-aspirasi'))->with('success','Data berhasil dihapus');
    }
    public function history() {
        $no = 1;
        $getAspirasi = Status::all();
        return view('admin.history',compact('getAspirasi','no'));
    }
}
