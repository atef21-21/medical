<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PatientController extends Controller
{
    public function patientProfileForm()
    {
        $doctor = null;
        if (Auth::user()->doctor_id != null)
        {
            $doctor_id = Auth::user()->doctor_id;
            $doctor = Admin::query()->where('id',$doctor_id)->first();
            // return $doctor;
        }

        return view('patient.profile',['doctor' => $doctor]);
    }

    public function logout()
    {
        Auth::logout();
        return view('patient.auth.login');
    }

    public function uploadBiopsyImage(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'biopsy' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        if ($validator->fails() ) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $user = auth()->user();
        $biopsy_name = Str::random(4) . time() . '.' . $request->file('biopsy')->guessClientExtension();
        $request->file('biopsy')->storeAs('psa',$biopsy_name,'public');
        $user->psa = $biopsy_name;
        $user->psa_result = random_int(0,5);
        $user->save();
        return redirect()->route('patient.profile');
    }
}
