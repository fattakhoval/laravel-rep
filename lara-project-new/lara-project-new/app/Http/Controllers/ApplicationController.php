<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function appl_all(){
        $application = Application::all();
        return view('admin', compact('application'));
    }

    public function appl(){
        $application = Application::all();
        return view('user', compact('application'));
    }

    public function create(Request $request){
        $request->validate([
            'service_type'=> 'required|string|max:255',
            'date_time'=>'required',
            'address'=>'required|string',
            
        ]);

        Application::create([
            'service_type'=> $request->service_type,
            'date_time'=> $request->date_time,
            'address'=> $request->address,
            'status'=> 'новая',
            'user_id'=>$request->user_id,
            
        ]);

        return redirect()->route('user');
    }

    public function reject($id){
        $application = Application::findOrFail($id);
        $application->status = 'отклонена';
        $application->save();

        return redirect()->route('appl_all');
    }

    public function accept($id){
        $application = Application::findOrFail($id);
        $application->status = 'подтверждена';
        $application->save();

        return redirect()->route('appl_all');
    }

    
}
