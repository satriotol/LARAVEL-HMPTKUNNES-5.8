<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pesan;


class BeritaKitaController extends Controller
{
    public function home(){
        $berita = DB::table('berita')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','PRESS RELEASE')->get();
        return view('pages.index',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama]);    
    }

    public function cari(Request $request){
        $cari = $request->cari;
        $berita = DB::table('berita')
		->where('judul','like',"%".$cari."%")->orderBy('id','desc')
		->paginate();
        return view('pages.cari',['berita' => $berita]);
    }

    public function lihatberita($id) {
        $berita = DB::table('berita')->where('id', '=', $id)->get();
        return view('pages.lihat_berita', ['berita'=>$berita]);
    }

    public function kirimpesan(Request $request){
        $this->validate($request,[
            'nama_pengirim'=> 'required',
            'email_pengirim'=> 'required',
            'isi_pesan'=> 'required'
        ]);
        pesan::create([
            'nama_pengirim'=> $request->nama_pengirim ,
            'email_pengirim'=> $request->email_pengirim ,
            'isi_pesan'=> $request->isi_pesan
        ]);
            
        return redirect('/')->with('status', 'Pesan Berhasil Ditambahkan!');
    }

    // article
    public function article(){
        return view('pages.article');
    }
    public function event(){
        $berita = DB::table('berita')->where('kategori','=','EVENT')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','EVENT')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','EVENT')->get();
        return view('pages.menuarticle.event',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function chemist(){
        $berita = DB::table('berita')->where('kategori','=','CHEMIST')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','CHEMIST')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','CHEMIST')->get();
        return view('pages.menuarticle.chemist',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function advokasi(){
        $berita = DB::table('berita')->where('kategori','=','ADVOKASI')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','ADVOKASI')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','ADVOKASI')->get();
        return view('pages.menuarticle.advokasi',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function oprec(){
        $berita = DB::table('berita')->where('kategori','=','OPREC')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','OPREC')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','OPREC')->get();
        return view('pages.menuarticle.oprec',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function materi(){
        $berita = DB::table('berita')->where('kategori','=','MATERI')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','MATERI')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','MATERI')->get();
        return view('pages.menuarticle.materi',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function cerc(){
        $berita = DB::table('berita')->where('kategori','=','CERC')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','CERC')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','CERC')->get();
        return view('pages.menuarticle.cerc',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function store(){
        $berita = DB::table('berita')->where('kategori','=','STORE')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','STORE')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','STORE')->get();
        return view('pages.menuarticle.store',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    // end of article

    // chemengfair
    public function chemengfair(){
        return view('pages.chemengfair');
    }
    public function semnas(){
        $berita = DB::table('berita')->where('kategori','=','SEMINAR NASIONAL')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','SEMINAR NASIONAL')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','SEMINAR NASIONAL')->get();
        return view('pages.menuchemengfair.semnas',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function iso(){
        $berita = DB::table('berita')->where('kategori','=','ISO')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','ISO')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','ISO')->get();
        return view('pages.menuchemengfair.iso',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);    
    }
    public function cesa(){
        $berita = DB::table('berita')->where('kategori','=','CESA')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','CESA')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','CESA')->get();
        return view('pages.menuchemengfair.cesa',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);   
    }
    public function s2c(){
        $berita = DB::table('berita')->where('kategori','=','S2C')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','S2C')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','S2C')->get();
        return view('pages.menuchemengfair.s2c',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
        }
    public function ception(){
        $berita = DB::table('berita')->where('kategori','=','CEPTION')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','CEPTION')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','CEPTION')->get();
        return view('pages.menuchemengfair.ception',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);    
    }
    public function chemengawards(){
        $berita = DB::table('berita')->where('kategori','=','CHEMENG AWARDS')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','CHEMENG AWARDS')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','CHEMENG AWARDS')->get();
        return view('pages.menuchemengfair.chemengawards',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);  
    }
    // end of chemengfair

    // departement
    public function departemen(){
        return view('pages.departemen');
    }
    public function ga(){
        $berita = DB::table('berita')->where('kategori','=','GA')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','GA')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','GA')->get();
        return view('pages.menudepartemen.ga',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function hrd(){
        $berita = DB::table('berita')->where('kategori','=','HRD')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','HRD')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','HRD')->get();
        return view('pages.menudepartemen.hrd',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);
    }
    public function prc(){
        $berita = DB::table('berita')->where('kategori','=','PRC')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','PRC')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','PRC')->get();
        return view('pages.menudepartemen.prc',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);    
    }
    public function sed(){
        $berita = DB::table('berita')->where('kategori','=','SED')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','SED')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','SED')->get();
        return view('pages.menudepartemen.sed',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]); 
    }
    public function rnt(){
        $berita = DB::table('berita')->where('kategori','=','RNT')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','RNT')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','RNT')->get();
        return view('pages.menudepartemen.rnt',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]); 
    }
    public function std(){
        $berita = DB::table('berita')->where('kategori','=','STD')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','STD')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','STD')->get();
        return view('pages.menudepartemen.std',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]); 
    }
    public function socdev(){
        $berita = DB::table('berita')->where('kategori','=','SOCDEV')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','SOCDEV')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','SOCDEV')->get();
        return view('pages.menudepartemen.socdev',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,
        'keterangan'=>$keterangan]);     
    }
    public function techno(){
        $berita = DB::table('berita')->where('kategori','=','TECHNO')->orderBy('tanggal_berita','desc')->paginate(5);
        $subberita = DB::table('subberita')->orderBy('id_subberita','desc')->get();
        $video = DB::table('video')->orderBy('id_video','desc')->get();
        $slide_utama = DB::table('slide_utama')->where('kategori','=','TECHNO')->get();
        $keterangan = DB::table('keterangan')->where('kategori','=','TECHNO')->get();
        return view('pages.menudepartemen.techno',['berita' => $berita,'subberita'=>$subberita,'video'=>$video,'slide_utama'=>$slide_utama,'keterangan'=>$keterangan
        ]); 
    }
    
    // end of departemen

    // kabinet
    public function kabinet(){
        return view('pages.kabinet');
    }
    public function kontribusi(){
        return view('pages.menukabinet.kontribusi');
    }
    public function prestasi(){
        return view('pages.menukabinet.prestasi');
    }
    public function inovasi(){
        return view('pages.menukabinet.inovasi');
    }
    public function elaborasi(){
        return view('pages.menukabinet.elaborasi');
    }
    // end of kabinet

    public function alumni(){
        return view('pages.alumni');    
    }
    public function alumnistore(Request $request){
        DB::table('alumni')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nomer_telepon' => $request->nomer_telepon,
            'jenjang' => $request->jenjang,
            'alamat_sekarang' => $request->alamat_sekarang,
            'alamat_perusahaan' => $request->alamat_perusahaan
        ]);
        return redirect('/alumni')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function aboutus(){
        return view('pages.aboutus');
    }
    public function kontak(){
        return view('pages.kontak');
    }

}