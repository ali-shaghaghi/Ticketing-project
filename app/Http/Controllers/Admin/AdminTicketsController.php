<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Ticket;
use App\Models\Admin;
use App\Models\SupportTicket;
use Illuminate\Http\Request;

class AdminTicketsController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $tickets = Ticket::where('department_id', $userId)->get();
        return view('admin.tickets.index', compact('tickets'));
    }

    public function show(Ticket $ticket)
    {
        $ticket->status = SupportTicket::STATUS_IN_PROGRESS;
        $ticket->save();
        return view('admin.tickets.show', compact('ticket'));
    }

    public function reply(Request $request, Ticket $ticket)
    {
        $reply = new Reply();
        $reply->description = $request->description;
        $reply->ticket_id = $ticket->id;
        $reply->admin_id = $ticket->admin_id;
        $reply->save();

        $ticket->status = SupportTicket::STATUS_ANSWERED;
        $ticket->save();

        return redirect()->route('tickets.index', $ticket)->with('success', 'پاسخ با موفقیت ارسال شد.');
    }




}
