@extends('layouts.frontpage')

@section('content')
    <div class="bg-black text-white">
      <div class="container mx-auto max-w-4xl px-3 py-4">
        <div class="text-base font-bold">Form Pembayaran</div>
      </div>
    </div>

    <div class="container mx-auto max-w-4xl px-3 py-4 pt-6">
      <form class="flex flex-col" method="POST" action="{{ url('api/postpembayaran') }}">
          @csrf
        <input class="p-2 border-2 mb-4" type="text" name="kode_cicilan" placeholder="Kode Cicilan" />
        <input class="p-2 border-2 mb-4" type="text" name="bank" placeholder="Bank" />
        <input class="p-2 border-2 mb-4" type="text" name="no_rek" placeholder="Nomor Rekening" />
        <input class="p-2 border-2 mb-4" type="text" name="atas_nama" placeholder="Atas Nama" />
        <input class="p-2 border-2 mb-4" type="number" name="nominal" placeholder="Nominal" />
        <button type="submit" class="mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
      </form>
    <div>
@endsection
