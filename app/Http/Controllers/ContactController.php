<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreContactRequest $contact)
    { 
        $finalyNanme = Contact::create($contact->validated());


        // copy chatgpt
        // Send an email with the submitted data
        // $recipientEmail = 'your_email@example.com';
        // Mail::to($recipientEmail)->send($contact->validated());
        // copy chatgpt

        return Response()->json([
            'email'=> 'send email',
            'data'=> ContactResource::make( $finalyNanme )
        ]);
    }
}
