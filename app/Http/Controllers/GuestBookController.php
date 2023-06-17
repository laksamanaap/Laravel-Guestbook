<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GuestBook;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function store(Request $request) {

        $formFields = $request([
            'nama' => 'required',
            'email' => 'required',
            'asal' => 'required',
            'no_hp' => 'required',
            'kesan_pesan' => 'required',
        ]);

        GuestBook::create($formFields);

        return redirect('/');

    }


    public function update(Request $id) {

    }

    public function destroy(Request $id) {

    }

    
}
