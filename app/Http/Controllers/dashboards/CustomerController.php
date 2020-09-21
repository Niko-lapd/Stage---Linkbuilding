<?php

namespace App\Http\Controllers\dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Offer; 
use App\Briefing;
use App\Product;
use App\Order;
use App\Cart;
use Auth;
use DB;

class CustomerController extends Controller
{

    public function __construct()
    {
        # checkt bij alle functioes of hij/zij is ingelogd en een customer is
        $this->middleware(['auth', 'customer']);
    }

    public function index()
    {
        return view('customer.dashboard');
    }

    public function overzicht()
    {
        return view('customer.partners.partners');
    }


    public function offers()
    {
        $offers = Offer::where('online', 1)->get();

        return view('customer.partners.offers.offers', compact('offers'));
    }

        public function briefing()
    {

        return view('customer.briefings.overzicht');
    }

    public function opdrachten()
    {
        $briefings = Briefing::all();

        return view('customer.briefings.opdrachten', compact('briefings'));
    }



    public function cart()
    {
        $products = Product::all();

        $carts = Cart::all();

        $cart_total = DB::table("carts")->where('customer_id', auth()->id())->get()->sum('price');

        return view('customer.products.cart', compact('carts','products', 'cart_total'));
    }

    public function orders()
    {
        $products = Product::all();

        $orders =  Order::orderBy('created_at', 'desc')->get();

        return view('customer.products.order', compact('products', 'orders'));
    }

    public function producten()
    {
        $products = Product::all();

        return view('customer.products.product', compact('products'));
    }

    public function opdracht($id)
    {   
        $opdracht = Briefing::find($id);

        if ( Auth::id() == $opdracht->customer_id) {
            return view('customer.briefings.opdracht', compact('opdracht'));
        }

        else {
            return redirect('/klant/briefings/opdrachten');
        }

    }


    public function add_cart($id)
    {
        $ProductID = Product::find($id);

        $cart = new Cart();
        
        $cart->customer_id = auth()->id();

        $cart->product_id = $ProductID->id;

        $cart->price = $ProductID->price;

        $cart->save();
 
        return redirect('/klant/winkelwagen');
    }

 public function checkout()
    {

        $cardItems = DB::table("carts")->where('customer_id', auth()->id())->get();

        $order = new Order();

        $order->cart = serialize($cardItems);

        $totalPrice = DB::table("carts")->where('customer_id', auth()->id())->get()->sum("price");

        $first = $totalPrice / 100;

        $NewTax = $first * 21;

        if ( $totalPrice != 0 ) {
            $order->OrderTotal = $totalPrice;
        }

        $order->OrderTax = $totalPrice + $NewTax;

        $order->customer_id = auth()->id();

        $order->save();


        # Na de checkout zorgt dit er voor dat de cart weer leeg is
        foreach ($cardItems as $item) {
            if (auth()->id() == $item->customer_id) {
                Cart::destroy($item->id);
            }                   
        }

 
        return redirect('/klant/orders');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_opdracht()
    {
        $data = request()->validate([
            'price' => 'required',
            'PA' => 'required',
            'DA' => 'required',
            'spam' => 'required',
            'visitors' => 'required',
            'categorie' => 'required',
        ]);

        $briefing = new Briefing();
        
        $briefing->customer_id = auth()->id();
        
        $briefing->price  =  str_replace('.', '', request('price'));

        $briefing->DA  = request('DA');

        $briefing->PA  = request('PA');

        $briefing->spam = request('spam');

        $briefing->visitors = request('visitors');

        if (request('categorie') == 1) {
            $briefing->blog = 1;
            $briefing->link = 0;
        }

        if (request('categorie') == 2) {
            $briefing->blog = 0;
            $briefing->link = 1;
        }

        $briefing->save();
 
        return redirect('/klant/briefings/opdrachten');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $datas = Cart::where('customer_id', Auth::id())->find($id); 

        $datas->delete();

        return redirect('/klant/winkelwagen');
    }
}
