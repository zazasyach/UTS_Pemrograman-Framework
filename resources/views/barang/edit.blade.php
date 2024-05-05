@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h4>{{ $pageTitle }}</h4>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}">
                        @error('kode_barang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}">
                        @error('nama_barang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input type="number" name="harga_barang" class="form-control" value="{{ $barang->harga_barang }}">
                        @error('harga_barang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Barang</label>
                        <textarea name="deskripsi_barang" class="form-control">{{ $barang->deskripsi_barang }}</textarea>
                        @error('deskripsi_barang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <select name="satuan_id" id="satuan_id" class="form-select">
                            @php
                                $selected = '';
                                if ($errors->any()) {
                                    $selected = old('satuan_id');
                                } else {
                                    $selected = $barang->satuan_id;
                                }
                            @endphp
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>
                                    {{ $satuan->kode_satuan . ' - ' . $satuan->nama_satuan }}</option>
                            @endforeach
                        </select>
                        @error('satuan_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="bi bi-box-arrow-down"></i>
                                Update</button>
                        </div>
                    </div>
                </form>
            </blockquote>
        </div>
    </div>
@endsection
