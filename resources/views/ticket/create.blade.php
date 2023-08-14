@extends('layouts.app')

    @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-white shadow border-light" >
                        <div class="card-header">{{ __('Send Ticket') }}</div>

                        <div class="card-body">
                            @include('partials.form-errors')
                            <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label type="title" name="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="title" class="form-control" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                                    <div class="col-md-6">
                                        <textarea name="description" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                                    <div class="col-md-6">
                                        <select name="departments" multiple class="form-control">
                                            @foreach($departments as $department)
                                                <option value="{{$id = $department}}">{{ $name = $department }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Attachment') }}</label>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input class="form-control" type="file" id="formFile" name="attachment">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
