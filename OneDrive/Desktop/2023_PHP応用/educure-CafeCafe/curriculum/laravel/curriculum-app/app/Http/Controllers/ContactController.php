<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:10',
            'kana' => 'required|string|max:10',
            'tel' => 'required|string|max:20|regex:/^[0-9]+$/',
            'email' => 'required|email',
            'body' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact.index')
                ->withErrors($validator)
                ->withInput();
        }

        Session::put('form_data', $request->all());

        return redirect()->route('contact.confirm');
    }

    public function confirm()
    {
        $formData = Session::get('form_data');

        if (!$formData) {
            return redirect()->route('contact.index');
        }

        return view('contact.confirm', compact('formData'));
    }

    public function send(Request $request)
    {
        $formData = Session::get('form_data');

        if (!$formData) {
            return redirect()->route('contact.index');
        }

        Contact::create($formData);
        Session::forget('form_data');

        return redirect()->route('contact.complete');
    }

    public function complete()
    {
        return view('contact.complete');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:10',
            'kana' => 'required|string|max:10',
            'tel' => 'required|string|max:20|regex:/^[0-9]+$/',
            'email' => 'required|email',
            'body' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contact.index')->with('success', 'お問い合わせが更新されました。');
    }

    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            return redirect()->route('contact.index')->with('success', 'お問い合わせが削除されました。');
        } catch (\Exception $e) {
            return redirect()->route('contact.index')->with('error', '削除中にエラーが発生しました。');
        }
    }
}
