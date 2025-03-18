@extends('layouts.app')

@section('title', 'Daftar Aktor')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Aktor</h2>
        <a href="{{ route('actors.create') }}" class="btn btn-primary">Tambah Aktor</a>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Data Aktor</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actors as $actor)
                    <tr>
                        <td>{{ $actor->actor_id }}</td>
                        <td>{{ $actor->first_name }}</td>
                        <td>{{ $actor->last_name }}</td>
                        <td>
                            <a href="{{ route('actors.edit', $actor->actor_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('actors.destroy', $actor->actor_id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return 
                                confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                {{ $actors->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
