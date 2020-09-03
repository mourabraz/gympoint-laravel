<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Registration $registration)
    {
        return $registration;
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function edit(Registration $registration)
    {
        return $registration;
    }

    public function update(Registration $registration)
    {
        return $registration;
    }

    public function destroy(Registration $registration)
    {
        return $registration;
    }
}
