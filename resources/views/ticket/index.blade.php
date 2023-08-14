@extends('layouts.app')

    @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-white shadow border-light" >
                        <div class="card-header">{{ __('Dashboard Ticket') }}</div>

                        <div class="card-body">
                            @if(Session::has('create_ticket'))
                                <div dir="rtl" class="alert alert-success">
                                    <div>{{session('create_ticket')}}</div>
                                </div>
                            @endif
                            {{-- دکمه برای ارسال تیکت --}}
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <a class="btn btn-primary" href="{{ route('ticket.create') }}" role="button">{{ __('Send Ticket') }}</a>
                                </div>
                            </div>
                            {{-- پایان دکمه برای ارسال تیکت --}}

                            {{-- جدول نمایش تیکت ها --}}
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col text-center">#</th>
                                    <th scope="col text-center">Title</th>
                                    <th scope="col text-center">Status</th>
                                    <th scope="col text-center">Date add</th>

                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($tickets as $ticket)
                                        <tr>
                                            <td>{{$ticket->id}}</td>
                                            <td><a href="{{ route('ticket.show', $ticket->id) }}">{{$ticket->title}}</a></td>
                                            @if($ticket->status == 0)
                                                <td><span class="label bg-warning">waiting</span></td>
                                            @else
                                                <td><span class="label bg-success">Answered</span></td>
                                            @endif

                                            <td>{{$ticket->created_at->diffForHumans()}}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                              </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
