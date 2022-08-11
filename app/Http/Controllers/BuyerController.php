<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\DelevaryOrder;
use App\Models\JobApply;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $buyers = Buyer::all();
        $seller = Seller::get();
        $sellerRequest= JobApply::all();
        $delivary_order = DelevaryOrder::all();
        return view('buyerdashboard', compact('buyers','delivary_order','seller', 'sellerRequest'));
    }
    public function sellerRequest()
    {

        $sellerRequest= JobApply::all();

        return view('buyerdashboard', compact('sellerRequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'title' => ['required', 'string', 'max:255'],
            'image' => ['file','mimes:jpeg,png,jpg,gif,svg', 'max:3072'],
        ]);
        if ($request->HasFile('image')){
            $image = $request->file('image');
            $img_full_name = time().'.'.$image->getClientOriginalExtension();
            $img_path = 'media/buyer/';
            $img_name = $img_path.$img_full_name;
            $image->move($img_path,$img_full_name);
        $post = new Buyer();
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->image = $img_name;
        $post->buyer_id =Auth::user()->id;
        $post->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        //
    }
}
