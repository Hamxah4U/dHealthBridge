<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Healthinfo;
use App\Models\Lga;
use App\Models\Relationship;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HealthinfoController extends Controller
{
    public function create()
    {
        $genders = Gender::all();
        $rships = Relationship::all();
        $states = State::all();
        return view('healthinfo.create', compact('genders', 'rships', 'states'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $attributes = request()->validate([
            'surname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'gender_id' => 'required|exists:genders,id',
            'dob' => 'nullable|date',
            'phonenumber' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'state_id' => 'nullable|string|max:255',
            'lga_id' => 'nullable|string|max:255',
            'email' => 'nullable | string | email',
            'othername' => 'nullable | string',
            'hospital_no' => 'required',

            // next of kin
            'nok_fullname' => 'nullable | string',
            'relationship_id' => 'nullable | string',
            'nok_phonenumber' => 'nullable | string',
            'nok_address' => 'nullable | string'
        ]); 

        if (empty($request->hospital_no)) {

            $num = Healthinfo::count() + 1;

            $hospitalNo = 'HSP-' . str_pad($num, 5, '0', STR_PAD_LEFT);

            while (Healthinfo::where('hospital_no', $hospitalNo)->exists()) {
                $num++;
                $hospitalNo = 'HSP-' . str_pad($num, 5, '0', STR_PAD_LEFT);
            }
        } else {
            $hospitalNo = $request->hospital_no;
        }

        $attributes['created_by'] = Auth::id();

        $patient = Healthinfo::create($attributes); 

         return back()->with('success', 'Patient registered successfully');
    }

    public function index()
    {
        $patients = Healthinfo::with('gender')->orderBy('created_at', 'desc')->get();
        return view('healthinfo.index', compact('patients'));
    }

    public function show($id)
    {
        // This method will display a specific health information record
    }

    public function edit($id)
    {
        return view('healthinfo.edit');
    }
    public function update(Request $request, $id)
    {
        // This method will handle the update of a specific health information record
    }
    public function destroy($id)
    {
        // This method will handle the deletion of a specific health information record
    }

    public function getLgas($state_id)
    {
        $lgas = Lga::where('state_id', $state_id)->get();

        return response()->json($lgas);
    }
    
}
