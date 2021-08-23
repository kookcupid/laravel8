<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionDate(Request $request)
    {
        if($request->session()->has('name'))
        {
            echo $request->session()->get('name');
        }
        else
        {
            echo 'No data in the sesstion';
        }
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('name','kook');
        echo "Data has been added to the session";
    }

    public function deleteSessionDate(Request $request)
    {
        $request->session()->forget('name');
        echo "Data has been removed from the session";
    }

}
