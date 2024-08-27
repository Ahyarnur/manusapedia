@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header bg-success text-white">{{ __('Buat Postingan') }}</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="row mb-3">
                          <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Judul') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Caption') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="caption" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Pilih Gambar') }}</label>

                          <div class="col-md-6">
                              <input id="nnn" type="file" class="form-control @error('password') is-invalid @enderror" accept="jpg.jpeg.image/png.image/jpeg" name="image" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Posting') }}
                            </button>
                          </form>
@endsection