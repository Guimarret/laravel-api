<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAll()
    {
        return 'Open API';
    }
    
    public function getByID(Request $request)
    {
        
    }
}
