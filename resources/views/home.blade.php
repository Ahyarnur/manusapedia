@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">Selamat Datang, <strong>{{Auth::user()->name }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    {{ __('Kamu Berhasil Login!') }}

                   <p> <a href="/create" type="button" class="btn btn-primary mt-3 ">+ Buat postingan</a></p>
                </div>
            </div>
            <div class="row mt-5 gap-3">
                <div class="card col">
                    <div class="card-header bg-transparant">
                      Jumlah Postingan
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Jumlah</h5>
                      <h2 class="card-text">{{$jumlah}}</h2>
                      
                    </div>
                  </div>
                <div class="card col">
                    <div class="card-header bg-transparant">
                    Postingan
                    </div>
                    <div class="card-body">
                      
                      <a href="/tampil" class="btn btn-primary mt-3">Lihat Postingan</a>
                    </div>
                  </div>
        </div>
    </div>
</div>
@endsection
