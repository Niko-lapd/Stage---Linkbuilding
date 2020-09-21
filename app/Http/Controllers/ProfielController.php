<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer; 
use App\Briefing;
use App\Product;
use App\Order;
use App\Cart;
use App\User;
use App\Betaling;
use Auth;
use DB;
use Image;

class ProfielController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'partner']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check  = Betaling::where('user_id', auth()->id())->get();
        
        return view('partner.profiel.profile', compact('check'));
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
            'straat' => 'required',
            'huisnummer' => 'required',
            'postcode' => 'required',
            'stad' => 'required',
            'land' => 'required',
            'bedrijfsnaam' => 'required',
            'KVK' => 'required',
            'BTW' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users|email',
        ]);

        $betaling = new Betaling();

        $betaling->user_id = auth()->user()->id;

        $betaling->straat = request('straat');
        
        $betaling->huisnummer = request('huisnummer');

        $betaling->postcode = request('postcode');

        $betaling->stad = request('stad');

        $betaling->land = request('land');

        $betaling->bedrijfsnaam = request('bedrijfsnaam');

        $betaling->KVK = request('KVK');

        $betaling->BTW = request('BTW');

        $betaling->firstname = request('firstname');

        $betaling->lastname = request('lastname');

        $betaling->email = request('email');

        $betaling->save();

        return redirect('/partner/profiel');


        # code voor als je een image wil opslaan
        
        // if ($request->hasFile('image')) {
        //     $BlogImage = $request->file('image');
        //     $imgname = time() . '.' . $BlogImage->getClientOriginalExtension();
        //     Image::make($BlogImage)->save( public_path('/uploads/blog/' . $imgname) );
        //     Image::make($BlogImage)->resize(150, 150)->save( public_path('/uploads/small/' . $imgname) );

        //     $MakeBlog->image = $imgname;
        // }
    }

    public function image(Request $request, $id)
    {
        $edit = User::where('id', Auth::id())->find($id); 

        if ($request->hasFile('image')) {
            $ProfielImage = $request->file('image');
            $imgname = time() . '.' . $ProfielImage->getClientOriginalExtension();
            Image::make($ProfielImage)->save( public_path('/uploads/profiel/' . $imgname) );
            Image::make($ProfielImage)->resize(150, 150)->save( public_path('/uploads/small/' . $imgname) );

            $edit->PFimg = $imgname;
        }

        $edit->save();

        return redirect('/partner/profiel')->with('edit', $edit);
    }

    public function updaten(Request $request, $id)
    {
        $data = request()->validate([
            'straat' => 'required',
            'huisnummer' => 'required',
            'postcode' => 'required',
            'stad' => 'required',
            'land' => 'required',
            'bedrijfsnaam' => 'required',
            'KVK' => 'required',
            'BTW' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|email,',
        ]);

        $edit = Betaling::where('user_id', Auth::id())->find($id); 

        $edit->firstname = $request->input('firstname');

        $edit->lastname = $request->input('lastname');

        $edit->email = $request->input('email');

        $edit->straat = $request->input('straat');

        $edit->huisnummer = $request->input('huisnummer');

        $edit->postcode = $request->input('postcode');

        $edit->postcode = $request->input('postcode');

        $edit->land = $request->input('land');

        $edit->bedrijfsnaam = $request->input('bedrijfsnaam');

        $edit->KVK = $request->input('KVK');

        $edit->BTW = $request->input('BTW');

        $edit->save();

        return redirect('/partner/profiel')->with('edit', $edit);
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

        $user = Auth::user();

        $data = request()->validate([
            'phonenumber' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        ]);

        $edit = User::where('id', Auth::id())->find($id); 

        $edit->firstname = $request->input('firstname');
        $edit->lastname = $request->input('lastname');
        $edit->email = $request->input('email');
        $edit->phonenumber = $request->input('phonenumber');

        $edit->save();

        return redirect('/partner/profiel')->with('edit', $edit);
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
