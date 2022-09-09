<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Faker;


class ProdukController extends Controller
{
    function index()
    {
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('template-admin.produk.index', $data);
    }
    function create()
    {
        return view('template-admin.produk.create');
    }
    function store()
    {
        $produk = new Produk;
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->kondisi = request('kondisi');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('template-admin.produk.show', $data);
    }
    function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('template-admin.produk.edit', $data);
    }
    function update(Produk $produk)
    {
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->kondisi = request('kondisi');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('admin/produk')->with('warning', 'Data Berhasil Ditambahkan');
    }
    function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
    }

    function filter(){
        $nama = request('nama');
        $kondisi = explode(",", request ('kondisi'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        // $data['list_produk'] = Produk::where('nama', 'like',"%$nama%")->get();
        // $data['list_produk'] = Produk::whereIn('kondisi', $kondisi)->get();
        // $data['list_produk'] = Produk::WhereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::where('kondisi', '<>',"$kondisi")->get();
        // $data['list_produk'] = Produk::whereNotIn('kondisi', $kondisi)->get();
        $data['list_produk'] = Produk::WhereNotBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::WhereNotNull('kondisi')->get();
        // $data['list_produk'] = Produk::WhereDate('created_at', '2022-09-04', '2022-09-04')->get();
        // $data['list_produk'] = Produk::WhereBetween('harga', [$harga_min, $harga_max])->whereNotIn('kondisi', [baru])->whereYear('created_at', '2022')->get();
        $data['nama'] = $nama;
        $data['kondisi'] = request('kondisi');


        return view('template-admin.produk.index', $data);
    }
}
