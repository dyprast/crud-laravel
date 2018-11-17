<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use \App\Jurusan;
use \App\Kelas;
use DB;

class SiswaController extends Controller
{
    public function __construct(){
         $this->middleware('auth');
    }
    function index(){
    	$data['siswa'] = \App\Siswa::all();
    	return view('siswa.index')->with($data);
    }
    function add(){
    	$data['jurusan'] = Jurusan::all();
    	$data['kelas'] = Kelas::all();
    	return view('siswa.add')->with($data);
    }
    function save(Request $r){
    	$siswa = new Siswa;
    	$siswa->nama = $r->input('nama');
    	$siswa->kelas_id = $r->input('kelas_id');
    	$siswa->jurusan_id = $r->input('jurusan_id');
    	$siswa->save();

    	return redirect(url('siswa/count_jurusan/'.$r->input('jurusan_id')));
    }
    function countJurusan($jurusan_id){
    	DB::update("UPDATE jurusans SET jumlah_siswa = jumlah_siswa + 1 WHERE id = '$jurusan_id'");
    	return redirect(url('siswa'));
    }
    function edit($id){
    	$data['siswa'] = Siswa::find($id);
    	$data['jurusan'] = Jurusan::all();
    	$data['kelas'] = Kelas::all();
    	return view('siswa.edit')->with($data);
    }
    function update(Request $r, $id){
    	$siswa = Siswa::find($id);
    	$siswa->nama = $r->input('nama');
    	$siswa->jurusan_id = $r->input('kelas_id');
    	$siswa->kelas_id = $r->input('jurusan_id');

    	$siswa->save();

    	return redirect(url('siswa'));
    }
    function delete($id){
    	Siswa::find($id)->delete();
    	return redirect(url('siswa'));
    }
    function minCountJurusan($id, $jurusan_id){
    	DB::update("UPDATE jurusans SET jumlah_siswa = jumlah_siswa - 1 WHERE id = '$jurusan_id'");
    	return redirect(url('siswa/delete/'.$id));
    }
}
