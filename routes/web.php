<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','PBPController@login')->name('login');
Route::post('postlogin','PBPController@postlogin');
Route::get('/dashboard','DashboardController@index');
Route::get('/logout','PBPController@logout');

Route::get('tambah_user','PBPController@tambah_user');

Route::post('store_user','PBPController@store_user');

Route::group(['middleware' => ['auth','checkRole:admin,user']],function(){

Route::get('admin','PBPController@admin');

Route::get('rtanggap','PBPController@rtanggap');

Route::get('tanggapi/{id}','PBPController@tanggapi');

Route::get('riwayatinput','PBPController@riwayatinput');

Route::get('tambah','PBPController@tambah');

Route::get('input','PBPController@input');

Route::get('print','PBPController@print');

Route::get('input/{id}','PBPController@input');

Route::post('inputbarang/{id}','PBPController@inputbarang');

Route::get('pesanan','PBPController@pesanan');

Route::post('move','PBPController@move');

Route::get('transaksi','PBPController@transaksi');

Route::get('serahkan/{id}','PBPController@serahkan');

Route::post('store','PBPController@store');

Route::post('store_transaksi','PBPController@store_transaksi');

Route::get('edit/{id}','PBPController@edit');

Route::post('update/{id}','PBPController@update');

Route::get('editgantungan/{id}','PBPController@editgantungan');

Route::post('updategantungan/{id}','PBPController@updategantungan');

Route::get('hapus/{id}','PBPController@hapus');

Route::get('user','PBPController@user');

Route::get('edit_user/{id}','PBPController@edit_user');

Route::post('update_user','PBPController@update_user');

Route::get('hapus_user/{name}','PBPController@hapus_user');

Route::get('hapuspesanan/{id}','PBPController@hapuspesanan');

Route::get('hapustransaksi/{id}','PBPController@hapustransaksi');

Route::get('hapustanggapan/{id}','PBPController@hapustanggapan');

Route::get('hapusinput/{id}','PBPController@hapusinput');

Route::get('editpe/{id}','PBPController@editpesanan');

Route::post('updatepe/{id}','PBPController@updatepesanan');

Route::get('sortir','PBPController@sortir');

Route::get('cari_user','PBPController@cari_user');

Route::get('cari_pesanan','PBPController@cari_pesanan');

Route::get('manager','PBPController@manager');

Route::get('cari_input','PBPController@cari_input');

Route::get('ambil/{id}','PBPController@ambil');

Route::post('gantung','PBPController@gantung');

Route::get('approve/{id}','PBPController@approve');

Route::post('permintaan','PBPController@permintaan');

Route::get('upapprove/{id}','PBPController@upapprove');


	});

Route::group(['middleware' => ['auth','checkRole:admin,user,manager']],function(){

Route::get('home','PBPController@index');

Route::get('panduan','PBPController@panduan');

Route::get('cari','PBPController@cari');

Route::get('order/{id}','PBPController@order');

Route::post('tanggap','PBPController@tanggap');

Route::post('pesan','PBPController@pesan');

Route::get('keranjang','PBPController@keranjang');

Route::get('cari_home','PBPController@cari_home');

Route::get('toiletris','PBPController@toiletris');

Route::get('chemical','PBPController@chemical');

Route::get('pkerja','PBPController@pkerja');

Route::get('embalage','PBPController@embalage');

Route::get('asl','PBPController@asl');

Route::get('hapuskeranjang/{id}','PBPController@hapuskeranjang');

Route::get('autonumber','PBPController@autonumber');

Route::get('/upload', 'PBPController@upload');

Route::post('/upload/proses', 'PBPController@proses_upload');

Route::get('selesai/{id}','PBPController@selesai');

Route::get('scrap/{id}','PBPController@scrap');

Route::post('upscrap','PBPController@upscrap');

Route::get('/admin/export_excel','PBPController@export_excel');

Route::get('/transaksi/export_excel','PBPController@export_excel2');

Route::get('/stokopname/cetak_pdf', 'PBPController@cetak_pdf');

Route::post('kategori','PBPController@kategori');

Route::post('satuan','PBPController@satuan');

Route::get('hapussatuan/{id}','PBPController@hapussatuan');

Route::get('hapuskategori/{id}','PBPController@hapuskategori');

Route::get('checkout/{nama}','PBPController@checkout');

Route::post('updatetransaksi/{nama}','PBPController@updatetransaksi');

Route::get('pembayaran','PBPController@pembayaran');

Route::post('updatebayar/{nama}','PBPController@updatebayar');

Route::get('struk/{id}','PBPController@struk');
	});