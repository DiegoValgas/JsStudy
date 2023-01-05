<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('json'))
            return response()->json(Contact::paginate(9));
        
        return view('home');
    }
}
