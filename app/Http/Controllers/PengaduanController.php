<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Masyarakat;
use App\User;
use App\response;
use App\Category;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::orderBy('created_at', 'desc')->whereNotIn('id', DB::table('responses')->pluck('pengaduan_id'))->paginate(5);
        $pengaduan_primary = Pengaduan::where('status', 'proses')->paginate(5);
        $pengaduan_selesai = Pengaduan::where('status', 'selesai')->paginate(5);

        return view('pengaduan.index', compact('pengaduan', 'pengaduan_primary', 'pengaduan_selesai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('pengaduan.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'isi_pengaduan' => 'required',
            'category_id' => 'required',
            'gambar' => 'required',
            'url' => 'required'
        ]);
        $user = DB::table('users')->where('id', Auth::id())->first();

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        $url = $request->url.'-'.$user->name.'-'.time();
        
        Pengaduan::create([
            'judul' => $request->url,
            'isi_pengaduan' => $request->isi_pengaduan,
            'gambar' => 'public/uploads/pengaduan/'.$new_gambar,
            'url' => Str::slug($url),
            'user_id' => Auth::id(),
            'category_id' => $request->category_id
        ]);
            
        $gambar->move('public/uploads/pengaduan/', $new_gambar);
        return redirect()->route('home.index')->with('success', 'pengaduan berhasil dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->get();
        $category = Category::get();
        return view('pengaduan.edit', compact('pengaduan', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id);

        $pengaduan->judul = $request->judul;
        $pengaduan->isi_pengaduan = $request->isi_pengaduan;
        $pengaduan->user_id = Auth::id();
        
        if ($request->has('category_id')) {
            $pengaduan->category_id = $request->category_id;
        }
        if ($request->has('gambar')) {
            $user = DB::table('users')->where('id', Auth::id())->first();

            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $url = $request->url.'-'.$user->name.'-'.time();

            $pengaduan->gambar = 'public/uploads/pengaduan/'.$new_gambar;

            $gambar->move('public/uploads/pengaduan/', $new_gambar);
        } 

        $pengaduan->save();

        return redirect()->route('pengaduan.index')->with('success', 'pengaduan berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::findorfail($id);
        $pengaduan->delete();

        return redirect()->back()->with('success', 'pengaduan berhasil dihapus dan masuk kedalam trash');
    }

    public function trashed()
    {
        $pengaduan = Pengaduan::onlyTrashed()->paginate(2);
        return view('pengaduan.trash', compact('pengaduan'));
    }

    public function restore($id)
    {
        $pengaduan = Pengaduan::withTrashed()->where('id', $id)->first();
        $pengaduan->restore();

        return redirect()->back()->with('success', 'pengaduan berhasil direstore');
    }

    public function kill($id)
    {
        $pengaduan = Pengaduan::withTrashed()->where('id', $id)->first();
        $pengaduan->forceDelete();
        Storage::delete(['file', $pengaduan->gambar]);

        return redirect()->back()->with('success', 'pengaduan berhasil dihapus');
    }

    public function detail($url) {
        $data = Pengaduan::where('url', $url)->get();
        
        return view('pengaduan.detail', compact('data'));
    }

    public function pengaduan_user()
    {
        $pengaduan = Pengaduan::orderBy('created_at', 'desc')->where('user_id', Auth::id())->get();
        return view('pengaduan.pengaduan_user', compact('pengaduan'));
    }
}
