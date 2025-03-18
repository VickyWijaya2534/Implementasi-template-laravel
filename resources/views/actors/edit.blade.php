@extends('layouts.app')

@section('title', 'Edit Aktor')

@section('header')
    <h2>Edit Aktor</h2>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('actors.update', $actor->actor_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="first_name" class="form-label">Nama Depan</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $actor->first_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Nama Belakang</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $actor->last_name }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('actors.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
