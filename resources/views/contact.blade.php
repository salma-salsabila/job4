@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')

<div class="container my-5">
    <h1 class="text-center mb-4">Hubungi Kami</h1>
    <form action="a" method="POST" enctype="multipart/form-data">
        <!-- input text: nama lwngkap -->
        <div class="mb-3">
           <label for="name" class="form-label">Nama Lengkap</label>
           <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap Anda" required>
        </div>
        <div class="mb-3">
           <label for="name" class="form-label">Email</label>
           <input type="text" class="form-control" id="name" placeholder="Masukkan email Anda" required>
        </div>
        <div class="mb-3">
           <label for="name" class="form-label">Telepon</label>
           <input type="text" class="form-control" id="name" placeholder="Masukkan Nomer Telepon Anda" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Subjek</label>
            <select class="form-select" id="subject" name="subject" required>
                <option value="">Pilih pesan subjek</option>
                <option value="pertanyaan">Pertanyaan</option>
                <option value="masukkan">Masukkan</option>
                <option value="kerjaan">Kerjaan</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="pesan">Pesan</label>
            <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
        </div>
        <div class="mb-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lampiran">Lampiran</label>
            <input class="form-control" id="lampiran" type="file">
        </div>
        <div class="mb-3">
        <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</label>
                <div class="flex items-center mb-2">
                    <input class="mr-2 leading-tight" type="radio" id="pria" name="jenis_kelamin" value="pria" checked>
                    <label class="text-gray-700" for="pria">Pria</label>
                </div>
                <div class="flex items-center">
                    <input class="mr-2 leading-tight" type="radio" id="wanita" name="jenis_kelamin" value="wanita">
                    <label class="text-gray-700" for="wanita">Wanita</label>
                </div>
        </div>
        <div class="mb-3">
        <div class="flex items-center">
            <input class="mr-2 leading-tight" type="checkbox" id="syarat">
            <label class="text-gray-700" for="syarat">Saya menyetujui syarat dan ketentuan</label>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </div>
    </form>
</div>
@endsection