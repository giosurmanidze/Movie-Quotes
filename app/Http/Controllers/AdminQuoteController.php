<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuoteRequest;
use App\Models\Quote;
use Illuminate\Http\Request;

class AdminQuoteController extends Controller
{
    public function index()
    {
        return view('components.update-quote', [
            'quotes' => Quote::all()
        ]);
    }

    public function edit(Quote $id)
    {
        return view('components.edit-quote', ['quote' => $id]);
    }


    public function update(CreateQuoteRequest $request, Quote $id)
    {
        $validatedData = $request->validated();


        if (isset($validatedData['image'])) {
            $validatedData['image'] = $request->file('image')->store('quotes_images');
        }

        $id->update($validatedData);

        return redirect('/');
    }

    public function destroy(Quote $id)
    {

        $id->delete();

        return back();
    }
}