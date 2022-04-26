<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class dataSiswaController extends Controller
{

    public function edit(Request $request)
    {
        $username = $request->username;
        if ($username) {            
            $dataSiswa  = DB::table('data_siswa')->where('nism', $username)->first();
            return view('editSiswa', compact('dataSiswa'));
        }else{
            return redirect()->route('index')->with('alert', '<h5>Silahkan isi username dan password terlebih dahulu!</h5> Menemukan kendala? Hubungi <a href="https://wa.me/6287779897434?text=Halo%20saya%20mengalami%20kendala%20dalam%20SiData%20Barzada" class="alert-link">Admin</a>');
        }
    }

    public function update(Request $request)
    {
        if($request){
            $this->validate($request, [
            'fullName'   => 'required',
            'arabicName' => 'required',
            'birthPlace' => 'required',
            'birthDate'  => 'required',
            'class10'    => 'required',
            'class11'    => 'required',
            'class12'    => 'required',
            'room10'     => 'required',
            'room11'     => 'required',
            'room12'     => 'required',
            'nism'       => 'required',
            'nik'        => 'required',
            'address'    => 'required',
            'province'   => 'required',
            'city'       => 'required',
            'district'   => 'required',
            'village'    => 'required',
            'zipCode'    => 'required',
            'fatherName' => 'required',
            'fatherPhone'=> 'required',
            'fatherStatus'=>'required',
            'fatherJob'   =>'required',
            'motherName' => 'required',
            'motherPhone'=> 'required',
            'motherStatus'=>'required',
            'motherJob'  => 'required',
            'maritalStatus'=>'required',
            'khidmahPlace'=>'required',
            'furtherStudy'=>'required',
            'myPhone'      => 'required',
            'myEmail'      => 'required',
            ]);
            $dataSiswa = DB::table('editing_requests')->insert([
            'photoLink'   => $request->photoLink,
            'fullName'   => $request->fullName,
            'arabicName' => $request->arabicName,
            'birthPlace' => $request->birthPlace,
            'birthDate'  => date("Y-m-d", strtotime($request->birthDate)),
            'class10'    => $request->class10,
            'class11'    => $request->class11,
            'class12'    => $request->class12,
            'room10'     => $request->room10,
            'room11'     => $request->room11,
            'room12'     => $request->room12,
            'SDName'     => $request->SDName,
            'SDYear'     => $request->SDYear,
            'SMPName'     => $request->SMPName,
            'SMPYear'     => $request->SMPYear,
            'nisn'       => $request->nisn,
            'nism'       => $request->nism,
            'nik'        => $request->nik,
            'address'    => $request->address,
            'province'   => $request->province,
            'city'       => $request->city,
            'district'   => $request->district,
            'village'    => $request->village,
            'zipCode'    => $request->zipCode,
            'fatherName' => $request->fatherName,
            'fatherPhone'=> $request->fatherPhone,
            'fatherStatus'=>$request->fatherStatus,
            'fatherJob'   =>$request->fatherJob,
            'motherName' => $request->motherName,
            'motherPhone'=> $request->motherPhone,
            'motherStatus'=>$request->motherStatus,
            'motherJob'  => $request->motherJob,
            'maritalStatus'=>$request->maritalStatus,
            'khidmahPlace'=>$request->khidmahPlace,
            'furtherStudy'=>$request->furtherStudy,
            'myPhone'      => $request->myPhone,
            'shEmail'      => $request->shEmail,
            'myEmail'      => $request->myEmail,
            'fileDriveLink'      => $request->fileDriveLink,
            'requestStatus'=> 'waiting'
            ]);
            if($dataSiswa){
                return redirect()->route('index')->with(['success' => 'Pembenaran berhasil diajukan!']);
            }else{
                return 'Gagal Menginput';
            }
        }else{
            return redirect()->route('index')->with('alert', '<h5>Silahkan isi username dan password terlebih dahulu!</h5> Menemukan kendala? Hubungi <a href="https://wa.me/6287779897434?text=Halo%20saya%20mengalami%20kendala%20dalam%20SiData%20Barzada" class="alert-link">Admin</a>');
        }
    }


    public function search(Request $request)
    {
        $username = $request->username;
        $password = date("Y-m-d", strtotime($request->password));
        if($username && $password){
            $dataSiswa  = DB::table('data_siswa')->where('nism', $username)->first();
            $passwordInDB = date("dmY", strtotime($dataSiswa->birthDate));
            if ($dataSiswa->password = $passwordInDB) {
                return view('detailSiswa', compact('dataSiswa'));
            }else {
                $usernameInDB = DB::table('data_siswa')->where('nism', $username)->first();
                if($usernameInDB){
                    return redirect(route('index'))->with('alert', '<h5>Password yang kamu masukkan tidak sesuai! Coba masukkan kembali!</h5> Menemukan kendala? Hubungi <a href="https://wa.me/6287779897434?text=Halo%20saya%20mengalami%20kendala%20dalam%20SiData%20Barzada" class="alert-link">Admin</a>');
                }
                return redirect(route('index'))->with('alert', '<h5>Data tidak ditemukan!</h5> Menemukan kendala? Hubungi <a href="https://wa.me/6287779897434?text=Halo%20saya%20mengalami%20kendala%20dalam%20SiData%20Barzada" class="alert-link">Admin</a>');
            }
        }{
            return redirect(route('index'))->with('alert', '<h5>Silahkan isi username dan password terlebih dahulu!</h5> Menemukan kendala? Hubungi <a href="https://wa.me/6287779897434?text=Halo%20saya%20mengalami%20kendala%20dalam%20SiData%20Barzada" class="alert-link">Admin</a>');
        }
    }

    
}
