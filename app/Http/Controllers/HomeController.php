<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $countryName = 'Canada';

    public function index()
    {
        $employee = Employee::all()->where('company.country.country', '=', $this->countryName);
        return view('home', ['employees' => $employee]);
    }
}
