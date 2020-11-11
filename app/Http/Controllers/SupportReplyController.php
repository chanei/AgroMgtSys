<?php

namespace App\Http\Controllers;

use App\SupportReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $supportreply = new SupportReply();
        $supportreply->support_id = $request->get('support_id');
        $supportreply->user_id = Auth::user()->id;
        $supportreply->reply = $request->get('reply');
        $supportreply->save();

        return redirect()->back()->with('success', 'Reply has been submitted');
    }
}
