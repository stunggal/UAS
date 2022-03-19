<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreWishRequest;
use App\Http\Requests\UpdateWishRequest;
use Illuminate\Support\Facades\Redirect;

class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wish',[
            ""
        ]);
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
     * @param  \App\Http\Requests\StoreWishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWishRequest $request)
    {
        $ValidData = $request->validate([
            'nama' => 'required',
            'nama_makanan' => 'required',
            'bahan_dasar' => 'required',
        ]);

        Wish::create($ValidData);
        
        $request->session()->flash('success', 'Your Request has been Sent');

        return back();
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function show(Wish $wish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function edit(Wish $wish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWishRequest  $request
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWishRequest $request, Wish $wish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Wish::destroy($slug);

        return redirect('/dashboard#request')->with('success', 'yess');
    }
}
