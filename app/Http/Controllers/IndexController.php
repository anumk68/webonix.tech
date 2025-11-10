<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about-us');
    }
    public function web_development()
    {
        return view('frontend.best-web-development-agency');
    }
    public function web_design()
    {
        return view('frontend.best-website-design-agency');
    }
    public function searchEngineOptimization()
    {
        return view('frontend.best-seo-agency');
    }

    public function seoService()
    {
        return view('frontend.seo-service');
    }


    public function localSeo()
    {
        return view('frontend.best-local-seo-agency');
    }
    public function e_commerce()
    {
        return view('frontend.ecommerce-seo-agency');
    }
    public function socialMediaMarketing()
    {
        return view('frontend.social-media-marketing-agency');
    }
    public function ppc()
    {
        return view('frontend.ppc-management-services');
    }
    public function digital_content_marketing()
    {
        return view('frontend.digital-content-marketing-creation');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function contact()
    {
        return view('frontend.contact-us');
    }
    public function privacy()
    {
        return view('frontend.privacy-policy');
    }
    public function terms()
    {
        return view('frontend.terms&conditions');
    }
    public function refund()
    {
        return view('frontend.refund-policy');
    }
    public function thanks()
    {
        return view('frontend.thank-you');
    }

    public function leadingPage()
    {
        return view('frontend.landing_page');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'emailInput' => 'required|email'
        ]);
        $otp = rand(100000, 999999);
        Session::put('contact_otp', $otp);
        Session::put('contact_email', $request->emailInput);
        try {
            // Mail::raw("Your OTP is: $otp", function ($message) use ($request) {
            //     $message->to($request->emailInput)
            //         ->subject('Your OTP Code');
            // });
            Mail::raw("Your OTP is: $otp", function ($message) use ($request) {
                $message->to($request->emailInput)
                    ->subject('Your OTP Code')
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to send OTP.']);
        }
        return response()->json(['success' => true, 'message' => 'OTP sent to your email']);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otpInput' => 'required|numeric'
        ]);
        if (Session::get('contact_otp') == $request->otpInput && Session::get('contact_email')) {
            return response()->json(['success' => true, 'message' => 'OTP verified']);
        }
        return response()->json(['success' => false, 'message' => 'Invalid OTP']);
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'serviceSelect' => 'required',
            'firstNameInput' => 'required',
            'lastNameInput' => 'required',
            'emailInput' => 'required|email',
            'phoneInput' => 'required',
            'countryCode' => 'required',
            'captchaInput' => 'required',
            'websiteInput' => 'nullable|url'
        ]);
        if (Session::get('contact_email') != $request->emailInput) {
            return response()->json(['success' => false, 'message' => 'Please verify OTP first']);
        }
        $submittedPhone = $request->countryCode . $request->phoneInput;
        $verifiedPhone = Session::get('verified_phone');
        if ($verifiedPhone && $submittedPhone !== $verifiedPhone) {
            return response()->json(['success' => false, 'message' => 'Phone number or country code has changed. Please verify again.']);
        }
        Contact::create([
            'service' => $request->serviceSelect,
            'first_name' => $request->firstNameInput,
            'last_name' => $request->lastNameInput,
            'email' => $request->emailInput,
            'phone' => $request->countryCode . $request->phoneInput,
            'website' => $request->websiteInput
        ]);


        // 📨 Send raw data email to info@webonix.tech
        $rawData = "New Contact Form Submission:\n"
            . "Service: {$request->serviceSelect}\n"
            . "First Name: {$request->firstNameInput}\n"
            . "Last Name: {$request->lastNameInput}\n"
            . "Email: {$request->emailInput}\n"
            . "Phone: {$submittedPhone}\n"
            . "Website: {$request->websiteInput}\n";

        Mail::raw($rawData, function ($message) {
            $message->to('info@webonix.tech')
                ->subject('New Contact Form Submission');
        });

        Session::forget(['contact_otp', 'contact_email', 'verified_phone']);
        return response()->json(['success' => true, 'message' => 'Message submitted successfully']);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'serviceSelect' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'project_brief' => 'nullable|string|max:1000',
        ]);

        Contact::create([
            'first_name' => $request->first_name,
            'service' => $request->serviceSelect,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->project_brief,
        ]);

        return response()->json(['success' => 'Your request has been sent successfully.']);
    }



    // public function submitContact(Request $request)
    // {
    //     $request->validate([
    //         'serviceSelect' => 'required',
    //         'firstNameInput' => 'required',
    //         'lastNameInput' => 'required',
    //         'emailInput' => 'required|email',
    //         'phoneInput' => 'required',
    //         'captchaInput' => 'required',
    //         'websiteInput' => 'nullable|url'
    //     ]);
    //     if (Session::get('contact_email') != $request->emailInput) {
    //         return response()->json(['success' => false, 'message' => 'Please verify OTP first']);
    //     }
    //     Contact::create([
    //         'service' => $request->serviceSelect,
    //         'first_name' => $request->firstNameInput,
    //         'last_name' => $request->lastNameInput,
    //         'email' => $request->emailInput,
    //         'phone' => $request->countryCode . $request->phoneInput,
    //         'website' => $request->websiteInput
    //     ]);
    //     Session::forget(['contact_otp', 'contact_email']);
    //     return response()->json(['success' => true, 'message' => 'Message submitted successfully']);
    // }

    public function landingsubmitContact(Request $request)
    {
        $request->validate([
            'service' => 'required',
            'website' => 'required|url',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $mailData = [
            'service' => $request->service,
            'website' => $request->website,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
         
        $contact = Contact::create($request->all());

        Mail::send('emails.landingpage-contact', $mailData, function ($message) use ($request) {
            $message->to('info@webonix.tech')
                ->subject('New Contact Form Submission');
        });

        return response()->json(['success' => true, 'message' => 'Thank you! Your details have been submitted successfully.']);
    }
}
