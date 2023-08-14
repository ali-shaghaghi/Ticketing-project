@extends('admin.layout.master')

@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30 m-t-30">
                    <div class="card-body">
                        <div class="justify-content-between m-b-10" style="display: flex;">
                            <h4 class="mt-0 header-title">ارسال تیکت جدید</h4>
                        </div>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6" style="margin: 0 auto;">
                                        <form method="POST" action="{{ route('tickets.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">عنوان</label>
                                                <input type="text" name="title" class="form-control" placeholder="عنوان تیکت خود را وارد کنید...">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">توضیحات</label>
                                                <textarea name="description" class="form-control" rows="5" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">ضمیمه</label>
                                                <input class="form-control" type="file" id="formFile" name="attachment">
                                            </div>

                                            <div class="form-group">
                                                <label for="meta_title">نوع</label>
                                                <select  name="department" id="" class="form-control">
                                                    <option value="">انتخاب کنید</option>
                                                    @foreach($departments as $department)
                                                        <option value="{{$department->id}}">{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success pull-left">ارسال</button>
                                        </form>
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


