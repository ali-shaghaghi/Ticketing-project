@extends('layouts.app')

    @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-white shadow border-light text-center" >
                            <div class="card-header">show Ticket {{$ticket->title}}</div>

                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col text-center">Title</th>
                                    <th scope="col text-center">Department</th>
                                    <th scope="col text-center">Description</th>
                                    <th scope="col text-center">Attachment</th>
                                    <th scope="col text-center">Status</th>
                                    <th scope="col text-center">Date add</th>
                                    <th scope="col text-center"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>{{$ticket->title}}</td>
                                            <td>Department</td>
                                            <td>{{$ticket->description}}</td>
                                            @if ($ticket->attachment)
                                            <td><a href="{{'/storage/' . $ticket->attachment}}">Atachment</a></td>
                                            @else
                                            <td>Not Atachment</td>
                                            @endif
                                            @if($ticket->status == 0)
                                                <td><span class="label btn btn-warning">waiting</span></td>
                                            @else
                                                <td><span class="label btn btn-danger">Answered</span></td>
                                            @endif
                                            <td>{{$ticket->created_at->diffForHumans()}}</td>

                                            <td>
                                                <form method="post" action="{{route('ticket.destroy', $ticket->id)}}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>


                                </tbody>
                              </table>

                </div>
            </div>
        </div>

    @endsection
