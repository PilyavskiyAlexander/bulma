<?php

namespace App\Http\Controllers;

use App\ClientRequest;
use App\Events\EmailEvent;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function request(Request $request)
    {
        $client_request = new ClientRequest();
        $client_request->product_name = $request->product_name;
        $client_request->quantity = $request->quantity;
        $client_request->unit_type_id = $request->unit_type;
        $client_request->email = $request->email;
        $client_request->phone = $request->phone;
        $client_request->comment = $request->comment;
        $client_request->ip = $request->ip();
        $client_request->save();

        if(!empty($request->file)){
            $original_name = $request->file->getClientOriginalName();
            $request->file('file')->storeAs('public/documents/' . $client_request->id, $original_name);

            $client_request->file = 'storage/documents/' . $client_request->id . '/' . $original_name;
            $client_request->save();
        }
        else{
            $client_request->file = 'images/logo.png';
            $client_request->save();
        }

        event(new EmailEvent($client_request));

        return redirect()->back();
    }
}
