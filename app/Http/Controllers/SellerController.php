<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\SellerOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::where('seller_id',Auth::user()->id)->get();
        $seller_order = SellerOrder::leftjoin('sellers','sellers.id','seller_orders.seller_gig_id')->leftJoin('users','seller_orders.seller_id','users.id')->select('seller_orders.*','sellers.*','sellers.image as order_image','seller_orders.id as id')->where('seller_orders.seller_id',Auth::user()->id)->get();
        return view('sellerdashboard', compact('sellers','seller_order'));
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
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'image' => ['file','mimes:jpeg,png,jpg,gif,svg', 'max:3072'],
        ]);
        if ($request->HasFile('image')){
            $image = $request->file('image');
            $img_full_name = time().'.'.$image->getClientOriginalExtension();
            $img_path = 'media/seller/';
            $img_name = $img_path.$img_full_name;
            $image->move($img_path,$img_full_name);
        $post = new Seller();
        $post->name = $request->name;
        $post->seller_id = $request->seller_id;
        $post->title = $request->title;
        $post->price = $request->price;
        $post->desc = $request->desc;
        $post->image = $img_name;
        $post->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $sellers = Seller::find($id)->first();
        // dd($sellers);
        // return view('sellerdashboard', compact('sellers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
