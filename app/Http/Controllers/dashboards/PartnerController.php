<?php

namespace App\Http\Controllers\dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Offer; 
use Auth;
use App\CampagneT;

class PartnerController extends Controller
{

    public function __construct()
    {
        # checkt bij alle functioes of hij/zij is ingelogd en een partner is
        $this->middleware(['auth', 'partner']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('partner.dashboard');
    }

    public function OfferOverzicht()
    {
        $offers = Offer::orderBy('created_at', 'desc')->get();

        return view('partner.offers.overzicht', compact('offers'));
    }

    public function OfferCreate()
    {
        return view('partner.offers.create');
    }

    public function OfferCampagneOverzicht()
    {
        return view('partner.klant.CampagnesOverzicht');
    }

    public function OfferCampagneAanmaken()
    {
        $users = CampagneT::get();

        return view('partner.klant.campagneaanmaken', compact('users'));
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
        $data = request()->validate([
            'description' => 'required',
            'categorie' => 'required|in:1,2',
        ]);

        $Offer = new Offer();

        $Offer->partner_id = auth()->user()->id;

        $Offer->title = request('title');
        
        $Offer->description = request('description');

        $Offer->site = request('site');

        $Offer->page = request('page');

        $Offer->PA  = rand(10,30);

        $Offer->DA  = rand(10,30);

        $Offer->spam = rand(1,5);

        $Offer->visitors = rand(1000,50000);

        $Offer->price = request('price');

        if (request('categorie') == 1) {
            $Offer->blog = 1;
            $Offer->link = 0;
        }

        if (request('categorie') == 2) {
            $Offer->blog = 0;
            $Offer->link = 1;
        }

        $Offer->save();

        return redirect('/partner/offers/overzicht');


        # code voor als je een image wil opslaan
        
        // if ($request->hasFile('image')) {
        //     $BlogImage = $request->file('image');
        //     $imgname = time() . '.' . $BlogImage->getClientOriginalExtension();
        //     Image::make($BlogImage)->save( public_path('/uploads/blog/' . $imgname) );
        //     Image::make($BlogImage)->resize(150, 150)->save( public_path('/uploads/small/' . $imgname) );

        //     $MakeBlog->image = $imgname;
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::where('partner_id', Auth::id())->find($id); 


        return view('partner.offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::where('partner_id', Auth::id())->find($id);

        return view('partner.offers.edit', compact('offer'));
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
        $edit = Offer::where('partner_id', Auth::id())->find($id); 

        $edit->title = $request->input('title');
        $edit->description = $request->input('description');
        $edit->price = $request->input('price');

        $edit->save();

        return redirect('/admin/products/offline/')->with('edit', $edit);
    }



    public function online(Request $request, $id)
    {
        $status = Offer::where('partner_id', Auth::id())->find($id); 

        $status->online = 1;

        $status->save();

        return redirect('/partner/offers/overzicht/'.$status->id);
    }

    public function offline(Request $request, $id)
    {
        $status = Offer::where('partner_id', Auth::id())->find($id); 

        $status->online = 0;

        $status->save();

        return redirect('/partner/offers/overzicht/'.$status->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Offer::where('partner_id', Auth::id())->find($id); 

        $destroy->delete();

        return redirect('/partner/offers/overzicht/');    
    }
}
