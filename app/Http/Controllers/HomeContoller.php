<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\DelevaryOrder;
use App\Models\JobApply;
use App\Models\Seller;
use App\Models\SellerOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class  HomeContoller extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        if($role=='1'){
            $buyers = Buyer::where('buyer_id',Auth::user()->id)->get();
            $sellerRequest= JobApply::all();
            $delivary_order = DelevaryOrder::leftjoin('seller_orders','seller_orders.id','delevary_orders.order_id')->leftJoin('users','seller_orders.buyer_id','users.id')->where('seller_orders.buyer_id',Auth::user()->id)->get();
            return view('buyerdashboard',compact('buyers','delivary_order','sellerRequest'));
        }else{
            $sellers = Seller::where('seller_id',Auth::user()->id)->get();
            $seller_order = SellerOrder::leftjoin('sellers','sellers.id','seller_orders.seller_gig_id')->leftJoin('users','seller_orders.seller_id','users.id')->select('seller_orders.*','sellers.*','sellers.image as order_image','seller_orders.id as id')->where('seller_orders.seller_id',Auth::user()->id)->get();

            return view('sellerdashboard',compact('sellers','seller_order'));
        }
    }
    public function profile(){
        return view('pages.profile');
    }
    public function home(){
        $sellers = Seller::all();
        $buyers = Buyer::all();
        return view('home',compact('sellers', 'buyers'));
    }

    public function buyer_gig($id){
        $sellers = Seller::find($id);
        $user  = User::where('id',$sellers->seller_id)->first();
        // $user_seller = User::find($id);
        return view('pages.buyer-request-gig', compact('sellers','user'));
    }

    public function buyer_gig_checkout($id)
    {
        $sellers = Seller::find($id);
        return view('pages.gig-checkout', compact('sellers'));
    }

    public function delivery_work($id)
    {
        $seller_order = SellerOrder::find($id);
        // $sellers = Seller::find($id);
        return view('pages.delivery-work', compact('seller_order'));
    }
    public function orderDelivery(Request $request)
    {
        if ($request->HasFile('file')){
            $file = $request->file('file');
            $img_full_name = time().'.'.$file->getClientOriginalExtension();
            $img_path = 'media/order/';
            $img_name = $img_path.$img_full_name;
            $file->move($img_path,$img_full_name);
        $row = new DelevaryOrder();
        $row->order_id = $request->order_id;
        $row->description = $request->description;
        $row->file = $img_name;
        $row->save();
    }
        return redirect(route('home'));

    }
    public function sellerOrderRequest(Request $request)
    {

        $row = new SellerOrder();
        $row->seller_gig_id = $request->seller_gig_id;
        $row->buyer_id = $request->buyer_id;
        $row->seller_id = $request->seller_id;
        $row->save();
        return redirect(route('home'));

    }

    public function applyWork($id){
        $buyerpost = Buyer::Where('id',$id)->first();
        return view( 'pages.apply-work',compact('buyerpost'));
    }
    public function applyWorkStore(Request $request){
        if ($request->HasFile('file')){
            $file = $request->file('file');
            $img_full_name = time().'.'.$file->getClientOriginalExtension();
            $img_path = 'media/jobApply/';
            $img_name = $img_path.$img_full_name;
            $file->move($img_path,$img_full_name);
        $row = new JobApply();
        $row->post_id = $request->post_id;
        $row->buyer_id = $request->buyer_id;
        $row->seller_id = $request->seller_id;
        $row->desc = $request->desc;
        $row->file = $img_name;
        $row->save();
        }
        return redirect(route('home'));
    }

    public function job(){
        $jobpost = Buyer::all();
        return view( 'pages.job',compact('jobpost'));
    }

    public function service(){
        $sellers = Seller::all();
        return view( 'pages.service',compact('sellers'));
    }
    public function buyerProfileEdit($id)
    {
        $users = User::find($id);
        return view('pages.buyerProfileEdit', compact('users'));
    }
    public function buyerProfileUpdate(Request $request ,$id)
    {
        $users = User::find($id);
        $oldImage = $users->image;
        if ($request->HasFile('image')){
            @unlink($oldImage);
            $image = $request->file('image');
            $img_full_name = time().'.'.$image->getClientOriginalExtension();
            $img_path = 'media/profile/';
            $img_name = $img_path.$img_full_name;
            $image->move($img_path,$img_full_name);

        $data= [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $img_name,
        ];
        $users->update($data);
        return redirect(route('profile'));

        }

        return view('pages.buyerProfileEdit', compact('users'));
    }
}
