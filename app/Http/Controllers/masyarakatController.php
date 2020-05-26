<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class masyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masyarakat.create');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'NIK' => 'required|unique:users',
            'alamat' => 'required',
            'telp' => 'required|integer',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $masyarakat = Masyarakat::create([
            'users_id' => $user->id,
            'NIK' => $request->NIK,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'ip' => \Request::ip(),
        ]);

        return redirect()->route('petugas.management_user')->with('success', 'Data berhasil ditambah');
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
        if ( $id != Auth::id() ) {
            return redirect()->route('user.index');
        }
        $masyarakat = Masyarakat::where('user_id', $id)->with('user')->get();
        return view('user.edit', compact('masyarakat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $masyarakat = Masyarakat::find('user_id', $id);
        $user = User::find($id);

        $user->name = $request->name;
        if($user->password) {
            $user->password = Hash::make($request->password);
        }

        $masyarakat->NIK = $request->NIK;
        $masyarakat->name = $request->name;
        $masyarakat->alamat = $request->alamat;
        $masyarakat->telp = $request->telp;

        $user->save();
        $masyarakat->save();

        return redirect()->route('user.index')->with('success', 'data berhasil di edit');
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
        $masyarakat = Masyarakat::where('user_id', $user->id);
        $masyarakat->delete();
        $user->delete();

        return redirect()->back()->with('success', 'user berhasil dihapus');
    }
}
