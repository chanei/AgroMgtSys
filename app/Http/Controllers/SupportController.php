<?php

namespace App\Http\Controllers;

use App\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supporttickets = Support::all();
        return view('supports.index', ['supporttickets' => $supporttickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supportticket = new Support;
        $supportticket->user_id = Auth::user()->id;
        $supportticket->subject = $request->get('subject');
        $supportticket->message = $request->get('message');
        $supportticket->status = 'Pending';
        $supportticket->save();

        return redirect()->back()->with('success', 'A new support ticket has been generated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supportticket = Support::findOrFail($id);
        return view('supports.show', ['supportticket' => $supportticket]);
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
        $supportticket = Support::findOrFail($id);
        $supportticket->delete();

        return redirect()->back()->with('success', 'Ticket has been deleted');
    }
}
