<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\Address;

class PatientController extends Controller
{
    
    static function getPhoto($req)
    {

        if ($req->hasFile('photo') && $req->file('photo')->isValid()) {
            $reqImage = $req->photo;
            $extension = $reqImage->extension();
            $imageName = md5($reqImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $reqImage->move(public_path('img/patients'), $imageName);
            return $imageName;
        }

    }

    public function store(Request $request)
    {

        $patient = new Patient;

        $patient->name = $request->name;
        $patient->birth = $request->birth;
        $patient->register_user = Auth::user()->name;
        $patient->cpf = $request->cpf;
        $patient->rg = $request->rg;
        $patient->gender = $request->gender;
        $patient->height = $request->height;
        $patient->weight = $request->weight;
        $patient->marital_status = $request->marital_status;
        $patient->schooling = $request->schooling;
        $patient->profession = $request->profession;
        $patient->nationality = $request->nationality;
        $patient->naturalness = $request->naturalness;
        $patient->phone = $request->phone;
        $patient->cellphone = $request->cellphone;
        $patient->whatsapp = $request->whatsapp;
        $patient->email = $request->email;
        $patient->notes = $request->notes;

        $imageName = PatientController::getPhoto($request);
        $patient->photo = $imageName;

        $patient->save();

        $address = new Address;

        $address->id_patient = $patient->id;
        $address->cep = $request->cep;
        $address->street = $request->street;
        $address->home_number = $request->home_number;
        $address->complement = $request->complement;
        $address->district = $request->district;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->country = $request->country;

        $address->save();

        $patient_page = '/patient' . '/' . $patient->id;

        return redirect($patient_page);

    }

    public function show_one($id)
    {
        $patient = Patient::findOrFail($id);
        $address = Address::findOrFail($id);
        return view('patient.infos', ['patient' => $patient, 'address' => $address]);
    }

}
