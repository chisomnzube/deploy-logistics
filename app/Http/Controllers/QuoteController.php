<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'service' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        //dd($request);

        $item = implode(', ', array_filter($request->input('item')));
        //dd($item);
        $service = $request->input('service');
        if ($service == 'Procurement') 
            {
                $request->validate([
                    'procurementType' => 'required|string',
                    'quantity' => 'required|string',
                    'manufacturer' => 'required|string',
                    'origin' => 'required|string',
                ]);

                $quote = Quote::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'service' => $request->input('service'),
                    'procurementType' => $request->input('procurementType'),
                    'item' => $item,
                    'quantity' => $request->input('quantity'),
                    'manufacturer' => $request->input('manufacturer'),
                    'origin' => $request->input('origin'),
                ]);

            }else
                {
                    $request->validate([
                        'cityOfDeparture' => 'required|string',
                        'deliveryCity' => 'required|string',
                        'incoterms' => 'required|string',
                        'condition' => 'required|string',
                    ]);

                    $quote = Quote::create([
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'phone' => $request->input('phone'),
                        'service' => $request->input('service'),
                        'cityOfDeparture' => $request->input('cityOfDeparture'),
                        'deliveryCity' => $request->input('deliveryCity'),
                        'incoterms' => $request->input('incoterms'),
                        'condition' => $request->input('condition'),
                        'weight' => $request->input('weight'),
                        'height' => $request->input('height'),
                        'width' => $request->input('width'),
                        'length' => $request->input('length'),
                    ]);
                }

        // to insert main image
        if($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/quote', $fileNameToStore); 
            // resizing an uploaded file            
            //Image::make(Input::file('image'))->resize(890, 593)->save('storage/contact/' . $fileNameToStore); 
            Quote::where('id', $quote->id)->update([
                'document' => 'quote/'.$fileNameToStore,
            ]);

        }

        return back()->with('success_message', 'You have successfully submitted a Quote, we will get back to you ASAP!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
