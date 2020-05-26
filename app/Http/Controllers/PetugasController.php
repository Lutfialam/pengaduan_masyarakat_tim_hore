<?php

namespace App\Http\Controllers;

use App\Petugas;
use App\User;
use App\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        
        return redirect()->route('petugas.management_user')->with('done', 'Data berhasil ditambah');
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
        $petugas = Petugas::where('id', $id)->get();
        return view('petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $user_id)
    {
        $petugas = Petugas::find($id);
        $user = User::find($user_id);

        $user->name = $request->nama_petugas;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->password = Hash::make($request->password);

        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->email = $request->email;
        $petugas->level = $request->level;
        $petugas->telp = $request->telp;
        $petugas->password = Hash::make($request->password);

        $petugas->save();
        $user->save();

        return redirect()->route('petugas.management_user')->with('done', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findorfail($id);
        $petugas = Petugas::where('user_id', $user->id);
        $petugas->delete();
        $user->delete();
        
        return redirect()->route('petugas.management_user')->with('done', 'data berhasil di hapus');
    }
}
