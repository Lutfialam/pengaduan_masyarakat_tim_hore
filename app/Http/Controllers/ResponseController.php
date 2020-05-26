<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\response;
use App\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
                $this->sendEmailPengaduanProcess($update);
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
            $this->sendEmailPengaduanProcess($update);
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

    public function sendEmailPengaduanSuccess($update){
        //Menyiapkan Data
        $user_id = $update->user_id;
        $find = User::find($user_id);
        $email = 'lutfirailfana05@gmail.com';
        $data = [
            'name' => Auth::user()->name,
            'email_body' => 'Hello' . Auth::user()->name . ' saat ini pengaduan kamu telah selesai kami prosess '
        ];
        //Kirim email
        Mail::send('email_template', $data, function($mail) use($email){
            $mail -> to($email, 'no-reply')
            ->subject("Pengaduan Anda telah selesai - pengaduan masyarakat");
            $mail->from('cratacroto@gmail.com', 'pengaduan masyarakat');
        });
    
        //cek kegagalan
        if (Mail::failures()){
            return "Gagal mengirim Email";
        }
    }

    public function sendEmailPengaduanProcess($update){
        //Menyiapkan Data
        $user_id = $update->user_id;
        $find = User::find($user_id);
        $email = 'lutfirailfana05@gmail.com';
        $data = [
            'name' => Auth::user()->name,
            'email_body' => 'Hello' . Auth::user()->name . ' saat ini pengaduan kamu sedang kami prosess silahkan tunggu informasi lebih lanjut ya! '
        ];
        //Kirim email
        Mail::send('email_template', $data, function($mail) use($email){
            $mail -> to($email, 'no-reply')
            ->subject("Pengaduan Anda sedang di proses - pengaduan masyarakat");
            $mail->from('cratacroto@gmail.com', 'pengaduan masyarakat');
        });
    
        //cek kegagalan
        if (Mail::failures()){
            return "Gagal mengirim Email";
        }
    }
}
