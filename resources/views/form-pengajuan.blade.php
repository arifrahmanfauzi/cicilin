@extends('layouts.frontpage')

@section('content')
    <div class="bg-black text-white">
      <div class="container mx-auto max-w-4xl px-3 py-4">
        <div class="text-base font-bold">Form Pengajuan</div>
      </div>
    </div>

    <div class="container mx-auto max-w-4xl px-3 py-4 pt-6">
      <form class="flex flex-col"  method="POST" action="{{ url('api/formPengajuan') }}">
          @csrf
        <input class="p-2 border-2 mb-4" type="text" name="nama" placeholder="Nama" />
        <textarea class="p-2 border-2 mb-4" type="text" name="alamat" placeholder="Alamat" ></textarea>
        <input class="p-2 border-2 mb-4" type="text" name="no_telp" placeholder="Nomor WA" />
        <input class="p-2 border-2 mb-4 w-1/3" type="number" name="jangka_waktu" placeholder="Jangka Waktu Pembayaran" />
        <button type="submit" class="mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
      </form>
    <div>
@endsection
