<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Checkin $checkin)
    {
        return $checkin;
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function edit(Checkin $checkin)
    {
        return $checkin;
    }

    public function update(Checkin $checkin)
    {
        return $checkin;
    }

    public function destroy(Checkin $checkin)
    {
        return $checkin;
    }
}
