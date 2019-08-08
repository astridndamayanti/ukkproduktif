<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;
use App\Exports\BarangExport;
use App\Exports\KeranjangExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade;
use App\Http\Controllers\Controller;
class PBPController extends Controller
{
  public function login(){
   	return view('login');
 //
}

public function postlogin(Request $request){
	if(Auth::attempt($request->only('name','password','role'))){
		return redirect('home');
	}
	return redirect ('login')->with('pesan_error','Login gagal! Masukan username dan password anda dengan benar');
	}

public function logout(){
	Auth::logout();
	return redirect('login');
	
	}

  public function index(){


  	$status = 0;
  	$barang = DB::table('barang')->paginate(10);	
  	return view('home',['barang' => $barang]);	
  
  	$user= DB::table('users')->all();
  	return view('home',['users' => $user]);	

  }

  public function cari(Request $request)
	{
			
		$cari = $request->cari;
 		
 		$katalog =  DB::table('katalog')->paginate(10);
		$barang = DB::table('barang')
		->where('barang','like',"%".$cari."%")
		->orWhere('kategori','like',"%".$cari."%")
		->orWhere('satuan','like',"%".$cari."%")
		->orWhere('updated_at','like',"%".$cari."%")
		->paginate(10);

		$barang->appends($request->only('cari'));
 
		return view('admin',['barang' => $barang,'katalog' => $katalog],compact('barang'));
 
	}

public function paginate(Request $request)
{
	$katalog =  DB::table('katalog')->paginate(10);
    $barang = \App\Barang::when($request->keyword, function ($query) use ($request) {	
	 $query->where('barang','like',"%{$request->keyword}%")
		->orWhere('kategori','like',"%{$request->keyword}%")
		->orWhere('id','like',"%{$request->keyword}%")
		->orWhere('satuan','like',"%{$request->keyword}%")
		->orWhere('updated_at','like',"%{$request->keyword}%");
		})->paginate(10);

		$barang->appends($request->only('keyword'));
 
		return view('admin',['barang' => $barang,'katalog' => $katalog],compact('barang'));
}

	public function cari_user(Request $request)
	{
		
		$cari = $request->cari;
 
		$user = DB::table('users')
		->where('name','like',"%".$cari."%")
		->paginate();

 		$user->appends($request->only('cari'));
 
		return view('user',['user' => $user],compact('user'));
 
	}



   public function admin(){


   	$barang = DB::table('barang')->paginate(10);
   	$kategori = DB::table('kategori')->paginate(10);
   	$satuan = DB::table('satuan')->paginate(20);
  	return view('admin',['barang' => $barang,'kategori' => $kategori, 'satuan' => $satuan]);
  }

  public function kategori(Request $request)
  {
  	$ambil = \App\Kategori::max('id');
	$id = $ambil;
	$nourut = (int) substr($id,2,3);
	$nourut++;
	$char = "KT";
	$id = $char.$nourut;
	DB::table('kategori')->insert([
		'id' => $id,
		'kategori' => $request->kategori,
	]);
	return redirect('/admin');
  }

   public function satuan(Request $request)
  {
  	$ambil = \App\Satuan::max('id');
	$id = $ambil;
	$nourut = (int) substr($id,2,3);
	$nourut++;
	$char = "ST";
	$id = $char.$nourut;
	DB::table('satuan')->insert([
		'id' => $id,
		'satuan' => $request->satuan,
	]);
	return redirect('/admin');
  }


  public function tambah(){
   	return view('tambah');

   	$barang = DB::table('barang')->paginate(10);	
  	return view('home',['barang' => $barang]);	
 //
}

public function store(Request $request)
{	
	date_default_timezone_set("Asia/Jakarta");
	$date= date("Y-m-d");
	$ambil = \App\Barang::max('id');
	$id = $ambil;
	$nourut = (int) substr($id,3,3);
	$nourut++;
	$char = "BR";
	$tanggal=substr($date, 9, 1);
	$id = $char.$tanggal.sprintf("%03s",$nourut);
	$now = \Carbon\Carbon::now();
	DB::table('barang')->insert([
		'id' => $id,
		'barang' => $request->barang,
		'kategori' => $request->kategori,
		'stok' => $request->stok,
		'satuan' => $request->satuan,
		'harga' => $request->harga,
		'updated_at' => $now,	
	]);
	return redirect()->back()->with('tambah','Barang berhasil ditambahkan');
 
}


public function riwayatinput(){

	$barang = DB::table('inputbarang')->get();
  	return view('riwayatinput',['barang' => $barang]);

  }

public function input($id){

   	$barang = DB::table('barang')->where('id',$id)->get();
  	return view('input',['barang' => $barang]);
 //
}

public function inputbarang(Request $request,$id)
{	
	date_default_timezone_set("Asia/Jakarta");
	$date= date("Y-m-d");
	$ambil = \App\Input::max('id');
	$id = $ambil;
	$nourut = (int) substr($id,3,3);
	$nourut++;
	$char = "IN";
	$tanggal=substr($date, 9, 1);
	$id = $char.$tanggal.sprintf("%03s",$nourut);
	$now = \Carbon\Carbon::now();
	DB::table('inputbarang')->insert([
		'id' => $id,
		'barang' => $request->barang,
		'stok' => $request->stok,
		'satuan' => $request->satuan,
		'created_at' => $request->created_at,	
		'keterangan' => $request->keterangan,	
	]);
	return redirect('/admin')->with ('input', 'Data berhasil di input');
 
}

public function edit($id){

	$barang = DB::table('barang')->where('id',$id)->get();
	$kategori = DB::table('kategori')->paginate(10);
   	$satuan = DB::table('satuan')->paginate(20);
	return view('edit',['barang' => $barang,'kategori' => $kategori, 'satuan' => $satuan]);
}

public function update(Request $request,$id){

	$barang = \App\Barang::find($id);
	$barang->update($request->all());
	return redirect('/admin')->with ('update', 'Data berhasil di update');
}

public function hapus($id){

	DB::table('barang')->where('id',$id)->delete();
	return redirect()->back()->with('Sukses','Data berhasil dihapus');
}

public function order($id){

	$now = \Carbon\Carbon::now();
	$barang = DB::table('barang')->where('id',$id)->get();
	return view('order',['barang' => $barang]);
	
}

public function pembayaran(){

	$keranjang = DB::table('keranjang')->get();
	$transaksi = DB::table('transaksi')->get();
	return view('pembayaran',compact('keranjang','transaksi'));

}

public function checkout($nama){

	$now = \Carbon\Carbon::now();
	$keranjang = DB::table('keranjang')->where('nama',$nama)->get();
	$total=[];
	foreach($keranjang as $k){
		$total[]=$k->jumlah*$k->harga;
	}
	return view('checkout',compact('keranjang','total'));
	
}

public function updatetransaksi(Request $request,$nama){

	DB::table('transaksi')->where('nama',$nama)->update([
		'status' => "Waiting Approved",
		'total' => $request->total,
		'atas_nama' => $request->atas_nama,
		'alamat' => $request->alamat,
		'no_tlp' => $request->no_tlp
	]);
	DB::table('keranjang')->where('nama',$nama)->delete();
	return redirect('/pembayaran')->with ('Sukses, Data berhasil di update');
}

public function updatebayar(Request $request,$nama){

	DB::table('transaksi')->where('nama',$nama)->update([
		'status' => "Waiting",
	]);
	return redirect('keranjang')->with ('Sukses, Data berhasil di update');
}

public function pesan(Request $request)
{	
	date_default_timezone_set("Asia/Jakarta");
	$date= date("Y-m-d");
	$ambil = \App\Transaksi::max('id');
	$kd = $ambil;
	$nourut = (int) substr($kd,3,3);
	$nourut++;
	$char = "TR";
	$tanggal=substr($date, 9, 1);
	$kd = $char.$tanggal.sprintf("%03s",$nourut);
	$now = \Carbon\Carbon::now();
	$nama = auth()->user()->name;
	$barang = \App\Barang::all();
	DB::table('keranjang')->where('id',$request->id)->insert([
		'id' => $kd,
		'nama' => $nama,
		'barang' => $request->barang,
		'jumlah' => $request->jumlah,
		'jmlpenuhi' => '',
		'harga' => $request->harga,
		'satuan' => $request->satuan,
		'kategori' => $request->kategori,
		'tanggal' => $request->tanggal,
		'total_satuan' => $request->harga * $request->jumlah,
	]);
	DB::table('transaksi')->where('id',$request->id)->insert([
		'id' => $kd,
		'nama' => $nama,
		'barang' => $request->barang,
		'jumlah' => $request->jumlah,
		'jmlpenuhi' => '',
		'harga' => $request->harga,
		'satuan' => $request->satuan,
		'kategori' => $request->kategori,
		'tanggal' => $request->tanggal,
		'total_satuan' => $request->harga * $request->jumlah,
	]);
	return redirect('home')->with('pesan','Barang berhasil ditambahkan ke keranjang');
 
}




public function keranjang(){

	$cari = auth()->user()->name;

	  $keranjang = DB::table('keranjang')->paginate(10);	
	  $transaksi = DB::table('transaksi')->paginate(10);
	$total=[];
	foreach($keranjang as $k){
		$total[]=$k->jumlah*$k->harga;
	}
  	return view('keranjang',compact('keranjang','total','transaksi'));	
  }


public function user(){

  	$user = DB::table('users')->paginate(10);
  	return view('user',['user' => $user]);	
  }

  public function tambah_user(){
   	return view('tambah_user');
 
}

public function store_user(Request $request)
{
	$user = new \App\User;
	$user->name = $request->name;
	$user->dept = $request->dept;
	$user->password = bcrypt($request->password);
	$user->role = $request->role;
	$user->remember_token = str_random(60);
	$user ->save();
			
	return redirect('/user');
 
}

public function hapus_user($name){

	DB::table('users')->where('name',$name)->delete();
	return redirect('user')->with('Sukses','Data berhasil dihapus');
}

public function cari_home(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
		$barang = DB::table('barang')
		->where('barang','like',"%".$cari."%")
		->orWhere('kategori','like',"%".$cari."%")
		->paginate(10);

		$barang->appends($request->only('cari'));
    	
		return view('home', compact('barang'));
 
	}

public function cari_input(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
		$barang = DB::table('inputbarang')
		->where('id','like',"%".$cari."%")
		->orWhere('barang','like',"%".$cari."%")
		->orWhere('stok','like',"%".$cari."%")
		->orWhere('satuan','like',"%".$cari."%")
		->orWhere('keterangan','like',"%".$cari."%")
		->orWhere('created_at','like',"%".$cari."%")
		->paginate(10);

		$barang->appends($request->only('cari'));
    	
		return view('riwayatinput',['barang' => $barang],compact('barang'));
 
	}




public function hapusinput($id){

	DB::table('inputbarang')->where('id',$id)->delete();
	return redirect()->back()->with('Sukses','Data berhasil dihapus');
}

public function hapuskeranjang($id){

	DB::table('keranjang')->where('id',$id)->delete();
	DB::table('transaksi')->where('id',$id)->delete();
	return redirect('keranjang')->with('Sukses','Data berhasil dihapus');
}

public function hapuspesanan($id){

	DB::table('transaksi')->where('id',$id)->delete();
	return redirect('pesanan')->with('Sukses','Data berhasil dihapus');
}


public function hapustransaksi($id){

	DB::table('transaksi')->where('id',$id)->delete();
	return redirect('transaksi')->with('Sukses','Data berhasil dihapus');
}

public function hapussatuan($id){

	DB::table('satuan')->where('id',$id)->delete();
	return redirect('admin')->with('Sukses','Data berhasil dihapus');
}

public function hapuskategori($id){

	DB::table('kategori')->where('id',$id)->delete();
	return redirect('admin')->with('Sukses','Data berhasil dihapus');
}

public function editpesanan($id){

	$transaksi = DB::table('transaksi')->where('id',$id)->get();
	return view('edittransaksi',['transaksi' => $transaksi]);
}

public function updatepesanan(Request $request,$id){

	$transaksi = \App\Transaksi::find($id);
	$transaksi->update($request->all());
	return redirect('/pesanan')->with ('Sukses, Data berhasil di update');
}



public function pesanan(){

	$keranjang = DB::table('keranjang')->paginate(20);
	$transaksi = DB::table('transaksi')->paginate(20);
  	return view('pesanan',['keranjang' => $keranjang,'transaksi' => $transaksi]);		
  }


public function cari_pesanan(Request $request)
	{
		
		$cari = $request->cari;
 
		$transaksi = DB::table('transaksi')
		->where('id','like',"%".$cari."%")
		->orWhere('nama','like',"%".$cari."%")
		->orWhere('barang','like',"%".$cari."%")
		->orWhere('jumlah','like',"%".$cari."%")
		->orWhere('satuan','like',"%".$cari."%")
		->orWhere('tanggal','like',"%".$cari."%")
		->orWhere('atas_nama','like',"%".$cari."%")
		->orWhere('alamat','like',"%".$cari."%")
		->orWhere('no_tlp','like',"%".$cari."%")
		->paginate(10);

		$transaksi->appends($request->only('cari'));
 
		return view('pesanan',['transaksi' => $transaksi],compact('keranjang'));
 
	}


  public function serahkan($id){

	$now = \Carbon\Carbon::now();
  	DB::table('transaksi')->where('id',$id)->update([
		'status' => "Approved",
	]);
	return redirect('/pesanan')->with('pesan','Pesanan Dikirimkan ');	
	

  }

public function transaksi(){

	$transaksi = DB::table('transaksi')->paginate(5);	
  	return view('transaksi',['transaksi' => $transaksi]);
}

public function struk($id){

	
	$transaksi = DB::table('transaksi')->where('id',$id)->get();
   return view('struk',['transaksi' => $transaksi]);
//
}

}