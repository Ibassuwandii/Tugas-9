@extends('template-admin.beranda')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/produk/filter') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $nama ?? '' }}">
                            </div>
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Kondisi</label>
                                <input type="text" class="form-control" name="kondisi" value="{{ $kondisi ?? '' }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga Min</label>
                                        <input type="text" class="form-control" name="harga_min"
                                            value="{{ $harga_min ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga Max</label>
                                        <input type="text" class="form-control" name="harga_max"
                                            value="{{ $harga_max ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{ url('admin/produk/create') }}" class="btn btn-dark float-right"><i
                                class="fa fa-flus"></i>Tambah
                            Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Kondisi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_produk as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/produk', $produk->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('admin/produk', $produk->id) }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include ('template-admin.utils.delete', [
                                                    'url' => url('admin/produk', $produk->id),
                                                ])

                                            </div>
                                        </td>
                                        <td>{{ $produk->nama }}</td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->kondisi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
