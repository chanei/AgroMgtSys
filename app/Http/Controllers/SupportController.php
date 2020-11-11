<?php

namespace App\Http\Controllers;

use App\Support;
use App\SupportReply;
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
        $ticketreplies = SupportReply::where('support_id', $id)->get();
        return view('supports.show', ['ticket' => $supportticket, 'ticketreplies' => $ticketreplies]);
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

    public function updateStatus($id)
    {
        $supportticket = Support::findOrFail($id);
        $supportticket->status = 'Solved';
        $supportticket->save();

        return redirect()->back()->with('success', 'Ticket has been resolved');
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
