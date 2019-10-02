<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormModel;
class FormController extends Controller
{
    public function FormPengajuan(Request $req){

        $form = new FormModel;
        $form->nama = $req->input('nama');
        $form->alamat = $req->input('alamat');
        $form->no_telp = $req->input('no_telp');
        $form->jangka_waktu = $req->input('jangka_waktu');
        $form->save();

        return response()->json(['success' => 'data berhasil disimpan',
    'data' => $form
    ], 200);

    }
}
