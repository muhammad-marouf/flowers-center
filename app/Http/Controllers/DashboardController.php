<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function home()
    {
        $branches = Branch::all();
        return view('about', compact('branches'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function contact(ContactRequest $request)
    {
        Mail::send(new ContactMail($request->validated()));
        return redirect('/');
    }
}
