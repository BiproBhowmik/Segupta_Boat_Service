<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
     public function index()
    {
        $packages = Package::all();
        return view('users.packages', compact('packages'));
    }

    public function details(Package $package)
    {
        return view('users.details', compact('package'));
    }

    public function booking(Package $package)
    {
        return view('users.booking', compact('package'));
    }
}
