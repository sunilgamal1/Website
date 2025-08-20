<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontend\contactRequest;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }

    public function store(contactRequest $request)
    {
        try {
            $contact = Contact::create($request->all());
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Message sent successfully!'
                ]);
            }
            
            return redirect()->back()->with('success', 'Message sent successfully');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while sending your message. Please try again.'
                ], 500);
            }
            
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again.');
        }
    }
}

