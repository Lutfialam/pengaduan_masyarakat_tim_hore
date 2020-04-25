<?php

namespace App\Http\Controllers;

use Auth;
use App\response;
use App\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::paginate();
        return view('response.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $pengaduan = DB::table('pengaduan')->where('id', $id)->first();
        return view('response.create', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'tanggapan' => 'required',
        ]);

        $avaiable = response::get('pengaduan_id');

        if ($id != null) {
            if ($avaiable == $id) {
                return redirect()->back();
            } else {
                response::create([
                    'pengaduan_id' => $id,
                    'tanggapan' => $request->tanggapan,
                    'petugas_id' => Auth::id()
                ]);
    
                $update = Pengaduan::find($id);
                $update->status = 'proses';
                $update->save();
            }
        } else {
            return redirect()->back();
        }
        
        return redirect()->route('pengaduan.index')->with('success', 'tanggapan berhasil dikirim');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit(response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, response $response, $id)
    {
        if ($id != null) {
            $update = Pengaduan::find($id);
            $update->status = 'selesai';
            $update->save();
        } else {
            return redirect()->back();
        }
        
        return redirect()->route('pengaduan.index')->with('success', 'tanggapan berhasil dikirim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(response $response)
    {
        //
    }
}
