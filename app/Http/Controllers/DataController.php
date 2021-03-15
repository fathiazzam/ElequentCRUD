<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Data;

class DataController extends Controller
{
    public function index()
    {
        // insert mass asigment
        // Data::create([
        //   'nama' => 'Fidia',
        //   'nik' => 1231,
        //   'jns_kl' => 'Perempuan',
        //   'tgl_lhr' => '2002-03-12',  
        //   'tmpt_lhr' => 'Madiun',
        //   'alamat' => 'Madiun utara',
        //   'nohp' => 3123131,
        //   'pekerjaan' => 'Koki',
        //   'angt_klg' => 6

        //  ]);
        // update biasa
        // $datas = Data::where('nama' ,'fidia')->first();
        // $datas->nama = 'fafa';
        // $datas->save();

        // update mass asigment cari id ke 16
        // Data::find(15)->update([
        //     'nama' => 'Rosianti',
        //     'pekerjaan' => 'Guru'
        // ]);

        //Delete id ke 16
        //  Data::find(16)
        //  ->delete();

        //Destroy id ke 17
        // Data::destroy(17);

        $datas = Data::all();
        //dd($datas);

        return view("blog/home", ['datas'=>$datas]);
    }
    public function show($id)
    {
        $apa = Data::findOrFail($id);
        if(!$apa)
        abort(404);
        return view("blog/single", ['apa'=>$apa]);
    }

    public function create()
    {
        return view("blog/create");
    }

    public function store(Request $request) 
    {
        $datas = new Data;

        $datas->nama      = $request->nama;
        $datas->nik       = $request->nik;
        $datas->jns_kl    = $request->jns_kl;
        $datas->tgl_lhr   = $request->tgl_lhr;  
        $datas->tmpt_lhr  = $request->tmpt_lhr;
        $datas->alamat    = $request->alamat;
        $datas->nohp      = $request->nohp;
        $datas->pekerjaan = $request->pekerjaan;
        $datas->angt_klg  = $request->angt_klg;
        $datas->save();

        return redirect('data');
    }

    public function edit($id)
    {
        $itu = Data::findOrFail($id);
        if(!$itu)
        abort(404);
        return view("blog/edit", ['itu'=>$itu]);
    }
    public function update(Request $request, $id)
    {
        
        $datas = Data::findOrFail($id);

        $datas->nama      = $request->nama;
        $datas->nik       = $request->nik;
        $datas->jns_kl    = $request->jns_kl;
        $datas->tgl_lhr   = $request->tgl_lhr;  
        $datas->tmpt_lhr  = $request->tmpt_lhr;
        $datas->alamat    = $request->alamat;
        $datas->nohp      = $request->nohp;
        $datas->pekerjaan = $request->pekerjaan;
        $datas->angt_klg  = $request->angt_klg;
        $datas->save();
        return redirect("data/".$id);
    }

    public function destroy($id)
    {
        Data::destroy($id);
        return redirect('data');
    }

}
