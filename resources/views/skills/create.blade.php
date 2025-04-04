@extends('layouts.app')

@section('content')
<div class="container" style="padding: 2rem;">
    <h2 class="mb-4">Tambah Skill</h2>
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Skill</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="percentage" class="form-label">Persentase</label>
            <input type="number" class="form-control" id="percentage" name="percentage" min="0" max="100" required>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('/#skills') }}" class="btn btn-secondary">Kembali</a>
        </div>        
    </form>
</div>
@endsection
