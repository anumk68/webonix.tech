<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackagesQuery;
use Illuminate\Support\Facades\Mail;

class PackagesQueryController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'package' => 'required|string|max:255',
            'price' => 'required|string|max:50',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|digits_between:10,11',
            'message' => 'nullable|string',
        ]);

        $contactQuery = new PackagesQuery();
        $contactQuery->category = $validated['category'];
        $contactQuery->package = $validated['package'];
        $contactQuery->price = $validated['price'];
        $contactQuery->name = $validated['name'];
        $contactQuery->email = $validated['email'];
        $contactQuery->number = $validated['number'];
        $contactQuery->message = $validated['message'];
        $contactQuery->save();

        $adminEmail = 'myjejo@denipl.net';

        // Send email to admin
        Mail::send('emails.contact_query', ['query' => $contactQuery], function ($mail) use ($adminEmail, $contactQuery) {
            $mail->to($adminEmail)
                ->subject('New Contact Message: ' . $contactQuery->subject);
        });

        // Return response for AJAX
        return response()->json(['success' => true, 'message' => 'Your query has been submitted successfully!']);
    
    }
}
