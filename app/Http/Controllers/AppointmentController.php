<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Clinic;
use App\Models\Healthinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $patients = Healthinfo::all();
        $clinics = Clinic::where('status', 'active');
        return view('appointment.index', compact(['patients', 'clinics']));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $attribute = request()->validate([
            'appointment_date' => 'required | date',
            'appointment_time' => 'required',
            'reason' => 'nullable',
            'doctor_id' => 'nullable',
            'healthinfo_id' => 'required',
            'clinic_id' => 'required',

        ]);

        $attribute['user_id'] = Auth::id();

        Appointment::create($attribute);
        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function show($id)
    {
        $patient = Healthinfo::findOrFail($id);
        $clinics = Clinic::where('status', 'active')->get();
        return view('appointment.create', compact(['patient', 'clinics']));
    }

    public function edit($id)
    {
        // Show form to edit appointment
    }

    public function update(Request $request, $id)
    {
        // Validate and update the appointment
    }

    public function destroy($id)
    {
        // Delete the appointment
    }
}
