<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;
use App\Pembayaran;
class FormController extends Controller
{
    public function FormPengajuan(Request $req){

        $form = new Pengajuan;
        $form->nama = $req->input('nama');
        $form->alamat = $req->input('alamat');
        $form->no_telp = $req->input('no_telp');
        $form->jangka_waktu = $req->input('jangka_waktu');
        $form->save();
        return redirect('/')->with('success','Form Pengajuan Berhasil Kami Terima');

    /*
    return response()->json(['success' => 'data berhasil disimpan',
    'data' => $form
    ], 200);*/
    }

    public function postPembayaran(Request $req){
        $pembayaran = new Pembayaran;

        $pembayaran->kode_cicilan = $req->input('kode_cicilan');
        $pembayaran->no_rek = $req->input('no_rek');
        $pembayaran->atas_nama = $req->input('atas_nama');
        $pembayaran->bank = $req->input('bank');
        $pembayaran->nominal = $req->input('nominal');
        $pembayaran->save();
        return redirect('/')->with('success bayar', 'Pembayaran telah dilakukan');

    }

}
