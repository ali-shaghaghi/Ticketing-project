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
                                                <h2>جزئیات تیکت</h2>
                                                <p>موضوع: {{ $ticket->title }}</p>
                                                <p>توضیحات: {{ $ticket->description }}</p>
                                                <p>فایل:
                                                    @if ($ticket->attachment)
                                                        <a href="{{'/storage/' . $ticket->attachment}}">فایل : کلیک کن</a>
                                                    @else
                                                         فایلی موجود نیست
                                                    @endif
                                                </p>
                                                <!-- نمایش اطلاعات دیگر تیکت -->

                                                <hr>

                                                <h2>پاسخ دهی به تیکت</h2>
                                                <form method="POST" action="{{ route('tickets.reply', ['ticket' => $ticket->id]) }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="description">پیام:</label>
                                                        <textarea name="description" id="description" rows="5" class="form-control" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">ارسال پاسخ</button>
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
