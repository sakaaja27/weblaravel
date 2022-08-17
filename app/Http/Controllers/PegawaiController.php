<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Keahlian;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use PDF;


class PegawaiController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Pegawai::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Pegawai::paginate(5);
        }

        if ($request->has('temukan')) {
            $data = Pegawai::where('agama');
        }
        return view('data',compact('data'));
    }

    public function tambah(){
        $Pegawai = Pegawai::all();
        $keahlian = Keahlian::all();
        $pendidikan = Pendidikan::all();
        return view('tambah',compact('keahlian'));
    }

    public function insertdata(Request $request){
        $data = $request->all();

        $Pegawai = new Pegawai;
        $Pegawai->nama = $data['nama'];
        $Pegawai->jeniskelamin = $data['jeniskelamin'];
        $Pegawai->notelpon = $data['notelpon'];
        $Pegawai->email = $data['email'];
        $Pegawai->tempat = $data['tempat'];
        $Pegawai->tgl_lahir = $data['tgl_lahir'];
        $Pegawai->alamat = $data['alamat'];
        $Pegawai->agama = $data['agama'];
        $Pegawai->statuspernikahan = $data['statuspernikahan'];
        $Pegawai->pekerjaan = $data['pekerjaan'];
        $Pegawai->kewarganegaraan = $data['kewarganegaraan'];
        $Pegawai->save();

        if (sizeof($data['namakeahlian']) > 0) {
            foreach ($data['namakeahlian'] as $item => $value) {
                $data2 = array(

                    'id'=> $Pegawai->id,
                    'namakeahlian' => $data['namakeahlian'][$item],
                    'keterangan' => $data['keterangan'][$item],
                );
                Keahlian::create($data2);
            }
        }

        if (sizeof($data['namapendidikan']) > 0) {
            foreach ($data['namapendidikan'] as $item => $value) {
                $data3 = array(

                    'id'=> $Pegawai->id,
                    'namapendidikan' => $data['namapendidikan'][$item],
                    'tahunajaran' => $data['tahunajaran'][$item],
                );
                Pendidikan::create($data3);
            }
        }

        return redirect()->route('pegawai')->with('success','Data uda masuk bro');
        
    }

    public function tampilkandata($id){
        $data = Pegawai::with('Keahlian','Pendidikan')->find($id);
        return view('tampil',compact('data'));

    }

    public function updatedata(Request $request, $id){
        $pegawai = Pegawai::with('Keahlian','Pendidikan')->find($id);
        Keahlian::where('id',$id)->delete();
        Pendidikan::where('id',$id)->delete();
        $data = $request->all();

        $pegawai->update([
            'nama' => $data['nama'],
            'jeniskelamin' => $data['jeniskelamin'],
            'notelpon' => $data['notelpon'],
            'email' => $data['email'],
            'tempat' => $data['tempat'],
            'tgl_lahir' => $data['tgl_lahir'],
            'alamat' => $data['alamat'],
            'agama' => $data['agama'],
            'statuspernikahan' => $data['statuspernikahan'],
            'pekerjaan' => $data['pekerjaan'],
            'kewarganegaraan' => $data['kewarganegaraan'],
        ]);

        if ($request->namakeahlian) {
            foreach ($data['namakeahlian'] as $item => $value) {
                $data2 = array(
                    'id'=> $id,
                    'namakeahlian' => $data['namakeahlian'][$item],
                    'keterangan' => $data['keterangan'][$item],
                );
                Keahlian::create($data2);
            }
        }

        if ($request->namapendidikan) {
            foreach ($data['namapendidikan'] as $item => $value) {
                $data3 = array(
                    'id'=> $id,
                    'namapendidikan' => $data['namapendidikan'][$item],
                    'tahunajaran' => $data['tahunajaran'][$item],
                );
                Pendidikan::create($data3);
            }
        }

        return redirect()->route('pegawai')->with('success','Data uda update bro');

    }

    public function deletedata($id){
        $pendidikan = Pendidikan::find($id);
        $keahlian = Keahlian::find($id);
        $data = Pegawai::find($id);
        $pendidikan->delete();
        $keahlian->delete();
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data uda di hapus bro');

    }

    public function detail($id){
        $data = Pegawai::with('Keahlian','Pendidikan')->find($id);
        return view('detail',compact('data'));

    }


}
