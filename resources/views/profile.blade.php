@extends('layout.template')

@section('title', 'Profil saya')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <h3 class="text-capitalize mt-2 mb-4">Halo, {{ $account->username }}</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="content p-3 rounded-4 mb-3">
        <form method="POST" action="/profil">
            {{ csrf_field() }}
            @method('PUT')
            <h4>Informasi umum</h4>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ $account->email }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="farmName">Nama Ternak</label>
                <input class="form-control" type="text" id="farmName" name="farmName" value="{{ $farm->farmName }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="location">Lokasi</label>
                <input class="form-control" type="text" id="location" name="location" value="{{ $farm->location }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Update">
        </form>
    </div>
    <div class="content p-3 rounded-4">
        <form method="POST" action="/profil">
            {{ csrf_field() }}
            @method('PUT')
            <h4>Ubah kata sandi</h4>
            <div class="mb-3">
                <label class="form-label" for="oldPassword">Kata sandi lama</label>
                <input class="form-control" type="password" id="oldPassword" name="oldPassword"
                    value="{{ $account->password }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Kata sandi baru</label>
                <input class="form-control" type="password" id="password" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label" for="password_confirmation">Konfirmasi kata sandi baru</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <input class="btn btn-primary" type="submit" value="Update">
        </form>
    </div>
@endsection
