<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthinfoController extends Controller
{
    public function create()
    {
        return view('healthinfo.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
        ]); 
    }

    public function index()
    {
        // This method will display a list of health information records
    }

    public function show($id)
    {
        // This method will display a specific health information record
    }

    public function edit($id)
    {
        // This method will show a form to edit a specific health information record
    }
    public function update(Request $request, $id)
    {
        // This method will handle the update of a specific health information record
    }
    public function destroy($id)
    {
        // This method will handle the deletion of a specific health information record
    }
    
}
