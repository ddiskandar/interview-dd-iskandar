<?php

namespace Modules\Contact\Http\Controllers;

use Modules\Contact\Entities\Contact;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact::Index', [
            'filters' => Request::all('search'),
            'contacts' => Contact::query()
                ->orderByName()
                ->filter(Request::only('search'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($contact) => [
                    'id' => $contact->id,
                    'name' => $contact->name,
                    'phone' => $contact->phone,
                    'email' => $contact->email,
                    'city' => $contact->city,
                ]),
        ]);
    }

    public function create()
    {
        return Inertia::render('Contact::Create');
    }

    public function store()
    {
        Contact::create(
            Request::validate([
                'first_name' => ['required', 'max:50'],
                'last_name' => ['required', 'max:50'],
                'email' => ['nullable', 'max:50', 'email'],
                'phone' => ['nullable', 'max:50'],
                'address' => ['nullable', 'max:150'],
                'city' => ['nullable', 'max:50'],
                'region' => ['nullable', 'max:50'],
                'country' => ['nullable', 'max:50'],
                'postal_code' => ['nullable', 'max:25'],
            ])
        );

        return Redirect::route('contact')->with('success', 'Contact created.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Contact $contact)
    {
        return Inertia::render('Contact::Edit', [
            'contact' => [
                'id' => $contact->id,
                'first_name' => $contact->first_name,
                'last_name' => $contact->last_name,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'address' => $contact->address,
                'city' => $contact->city,
                'region' => $contact->region,
                'country' => $contact->country,
                'postal_code' => $contact->postal_code,
            ],
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Contact $contact)
    {
        $contact->update(
            Request::validate([
                'first_name' => ['required', 'max:50'],
                'last_name' => ['required', 'max:50'],
                'email' => ['nullable', 'max:50', 'email'],
                'phone' => ['nullable', 'max:50'],
                'address' => ['nullable', 'max:150'],
                'city' => ['nullable', 'max:50'],
                'region' => ['nullable', 'max:50'],
                'country' => ['nullable', 'max:2'],
                'postal_code' => ['nullable', 'max:25'],
            ])
        );

        return Redirect::route('contact')->with('success', 'Contact updated.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return Redirect::route('contact')->with('success', 'Contact deleted.');
    }
}
