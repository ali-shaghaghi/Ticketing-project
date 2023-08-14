@extends('admin.layout.master')

@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30 m-t-30">
                    <div class="card-body">
                        <div class="justify-content-between m-b-10" style="display: flex;">
                            <h4 class="mt-0 header-title">جدول تیکت ها</h4>
                            <div class="text-left">

                            </div>
                        </div>


            <!-- /.box-header -->
            <div class="box-body">
                @if(Session::has('delete_department'))
                    <div class="alert alert-danger">
                        <div>{{session('delete_department')}}</div>
                    </div>
                @endif
                @if(Session::has('add_department'))
                    <div class="alert alert-success">
                        <div>{{session('add_department')}}</div>
                    </div>
                @endif


                <div class="table-responsive">
                    <table id="mainTable" class="table table-striped mb-0" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th>عنوان</th>
                                <th>وضعیت</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    {{-- ID department --}}
                                    <td class="text-center">{{$ticket->id}}</td>
                                    {{-- NAME department --}}
                                    <td >{{$ticket->title}}</td>
                                    {{-- NAME department --}}
                                    <td>{{$ticket->status}}</td>
                                    {{-- EDIT department --}}
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('tickets.show', $ticket->id)}}">پاسخ</a>
                                    </td>
                                </tr>


                            @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>



                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->

</div>
@endsection


