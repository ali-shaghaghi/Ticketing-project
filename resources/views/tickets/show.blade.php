@extends('admin.layout.master')

@section('content')
    <div class="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30 m-t-30">
                        <div class="card-body">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6" style="margin: 0 auto;">
                                        <div class="form-group">


                                            <div class="ticket-details">
                                                <h4>جزئیات تیکت</h4>
                                                <p>موضوع: {{ $ticket->title }}</p>
                                                <p>توضیحات: {{ $ticket->description }}</p>
                                                <p>وضعیت: {{$ticket->status}}</p>
                                                <p>دپارتمان: {{$ticket->department->name}}</p>
                                                <p>فایل:
                                                    @if ($ticket->attachment)
                                                        <a href="{{'/storage/' . $ticket->attachment}}">فایل : کلیک کن</a>
                                                    @else
                                                         فایلی موجود نیست
                                                    @endif
                                                </p>
                                                <!-- نمایش اطلاعات دیگر تیکت -->
                                                <hr>

                                                @foreach($replies as $reply)
                                                    <h4>پاسخ مسئول به تیکت شما</h4>
                                                    <p>{{ $reply->description }}</p>
                                                @endforeach

                                                <hr>
                                                <form method="POST" action="{{ route('tickets.reply', ['tickets' => $ticket->id]) }}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>










                                            </div>






                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container fluid -->
    </div>









@endsection
