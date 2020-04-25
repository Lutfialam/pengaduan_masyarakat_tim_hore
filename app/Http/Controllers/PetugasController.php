<?php

namespace App\Http\Controllers;

use App\Petugas;
use App\User;
use App\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('petugas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create');
    }

    public function management_user()
    {
        $masyarakat = Masyarakat::paginate(5);
        $petugas = Petugas::paginate(5);
        return view('petugas.management_user', compact('petugas', 'masyarakat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_petugas' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'telp' => 'required',
            'level' => 'required'
        ]);

        $user = User::create([
            'name' => $request->nama_petugas,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level
        ]);

        $petugas = Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telp' => $request->telp,
            'level' => $request->level,
            'user_id' => $user->id
            ]);
        
        return redirect()->route('petugas.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = Petugas::get()->where('id', $id)->first();
        $user = User::get()->where('id', $petugas);
        dd($user);
    }
}
