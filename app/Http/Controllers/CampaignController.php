<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function show($slug)
    {
        $campaign = Campaign::where('slug', $slug)->firstOrFail();

        $campaign->increment('visit_count');

        return view('campaigns.show', compact('campaign'));
    }

    public function propuesta()
    {
        $campaign = Campaign::firstOrCreate(
            ['slug' => 'propuesta'],
            ['name' => 'Propuesta']
        );

        $campaign->increment('visit_count');

        return redirect()->route('home');
    }
    public function qr()
    {
        $campaign = Campaign::firstOrCreate(
            ['slug' => 'qr'],
            ['name' => 'QR Campaign']
        );

        $campaign->increment('visit_count');

        return view('campaigns.qr', compact('campaign'));
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'activity_type' => 'required|string|in:ganadería,agricultura,mixto,otros',
            'activity_options' => 'nullable|array',
            'activity_options.*' => 'string',
            'source' => 'nullable|string|max:255',
            'campaign_id' => 'nullable|exists:campaigns,id',
        ]);

        $submission = ContactSubmission::create($validated);

        try {
            \Illuminate\Support\Facades\Mail::send(new \App\Mail\ContactCampaignSubmission($submission));
        } catch (\Exception $e) {
            // Log error or just continue, we don't want to break the user flow if mail fails
            \Illuminate\Support\Facades\Log::error('Failed to send contact email: '.$e->getMessage());
        }

        return back()->with('success', '¡Gracias por contactarnos! Tu mensaje ha sido recibido.');
    }
}
