<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\Admin;
use App\Models\Department;
use App\Models\Reply;
use App\Models\SupportTicket;
use App\Models\Ticket;
use Illuminate\Support\Facades\Request;


class TicketController extends Controller
{
     /**
     * constructor method
     */
    public function __construct()
    {
        $this->middleware('auth');
    } //end of the constructor method

    public function index()
    {
        $userId = auth()->user()->id;
        $tickets = Ticket::where('user_id', $userId)->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('tickets.create', compact(['departments']));
    }

    public function store(StoreTicketRequest $request)
    {

        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('attachments');
        } else {
            $attachmentPath = null;
        }
        $departmentId = $request->input('department');
        $admin = Admin::where('department_id', $departmentId)->first();


        $ticket = new Ticket;
        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->status = SupportTicket::STATUS_PENDING;
        $ticket->user_id = auth()->user()->id;
        $ticket->admin_id = $request->admin_id;
        $ticket->attachment = $attachmentPath;
        $ticket->department_id = $request->input('department');
        if($admin->department_id == $ticket->department_id){
            $ticket->admin_id = $admin->id;
        }
        $ticket->save();
        return redirect()->route('tickets.index')->with('success', 'تیکت با موفقیت ایجاد شد.');
    }

    public function show(Ticket $ticket)
    {
        $replies = Reply::all();
        return view('tickets.show', compact('ticket', 'replies'));
    }


    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'تیکت با موفقیت حذف شد.');
    }


}
