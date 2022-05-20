<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return response()->json('API online');
    }

    public function allBands()
    {
        $bands = $this->getBands();
        
        return response()->json($bands);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'id'   => 'numeric',
            'name' => 'required|min:3'
        ]);
    }

    public function getBandsByGender($gender)
    {
        foreach($this->getBands() as $_bands)
        {
        if ($_bands['gender'] == $gender)
        $bands[] = $_bands;
        }
        return response()->json($bands);
    }

    public function getById($id)
    {
        $bands = [];

        foreach($this->getBands() as $_bands)
        {
        if ($_bands['id'] == $id)
        $bands[] = $_bands;
        }
        return response()->json($bands);
    }

    protected function getBands()
    {
        return [
            [
                'id' => 1, 'name' => 'A7x', 'gender' => 'heavy metal'
            ],
            [
                'id' => 2, 'name' => 'Lil Peep', 'gender' => 'emo-rap'
            ],
            [
                'id' => 3, 'name' => 'Capital Inicial', 'gender' => 'rock'
            ],
            [
                'id' => 4, 'name' => 'Slipknot', 'gender' => 'metal'
            ]
        ];
    }
    
}
