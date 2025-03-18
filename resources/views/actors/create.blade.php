@extends('layouts.app')

@section('title', 'Tambah Aktor')

@section('header')
    <h2>Tambah Aktor</h2>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('actors.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">Nama Depan</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Nama Belakang</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('actors.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
