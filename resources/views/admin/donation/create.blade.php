@extends('admin.layout.index')
@section('content')
@php
use Stichoza\GoogleTranslate\GoogleTranslate;
@endphp
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ GoogleTranslate::trans(request()->id ? 'Update donation' : 'Add donation', session()->get('lang_code'), 'en'); }}</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('admin.create_donation') }}" method="post" id="Adddonation" enctype='multipart/form-data'>
                @csrf()
                <input type="hidden" name="id" id="id" value="{{ $data['id'] ?? ''}}">
                <div class="form-group row">
                    <label for="file">Event Image</label>
                    <input class="form-control @error('file')  is-invalid @enderror" type="file" name="file" id="file" value="{{ $data['file'] ?? ''}}">
                    @error('file')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="name">{{ GoogleTranslate::trans('Donation Title', session()->get('lang_code'), 'en'); }}</label>
                    <input class="form-control @error('name')  is-invalid @enderror" type="text" name="name" id="name" value="{{ $data['name'] ?? ''}}">
                    @error('name')
                    <span class="is-invalid">{{ GoogleTranslate::trans($message, session()->get('lang_code'), 'en'); }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="name_mr">{{ GoogleTranslate::trans('Donation Title Marathi', session()->get('lang_code'), 'en') }}</label>
                    <input class="form-control @error('name_mr')  is-invalid @enderror" type="text" name="name_mr" id="name_mr" value="{{ $data['name_mr'] ?? ''}}">
                    @error('name_mr')
                    <span class="is-invalid">{{ GoogleTranslate::trans($message, session()->get('lang_code'), 'en'); }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="goal">{{ GoogleTranslate::trans('Donation Goal', session()->get('lang_code'), 'en'); }}</label>
                    <input class="form-control @error('goal')  is-invalid @enderror" type="number" name="goal" id="goal" value="{{ $data['goal'] ?? ''}}">
                    @error('goal')
                    <span class="is-invalid">{{ GoogleTranslate::trans($message, session()->get('lang_code'), 'en'); }}</span>
                    @enderror
                </div>
                <!-- <div class="form-group row">
                    <div class="col-md-4">
                        <label for="date">donation starting Date</label>
                        <input class="form-control  @error('name')  is-invalid @enderror" type="date" name="date" id="date" value="{{ $data['date'] ?? ''}}">
                        @error('date')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="time">donation time</label>
                        <input class="form-control  @error('time')  is-invalid @enderror" type="time" name="time" id="time" value="{{ $data['time'] ?? ''}}">
                        @error('time')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="duration">donation duration (in month's)</label>
                        <input class="form-control  @error('duration')  is-invalid @enderror" type="text" name="duration" id="duration" value="{{ $data['duration'] ?? ''}}">
                        @error('duration')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                </div> -->
                <!-- <div class="form-group row">
                    <label for="name">donation Days</label>
                    <select class="form-control  @error('days')  is-invalid @enderror" type="text" name="days" id="days" value="{{ $data['days'] ?? ''}}">
                        <option></option>
                        <option {{ isset($data) && ($data['days'] == 'Daily') ? 'selected' : '' }}>Daily</option>
                        <option {{ isset($data) && ($data['days'] == 'Weekday') ? 'selected' : '' }}>Weekday</option>
                        <option {{ isset($data) && ($data['days'] == 'Weekend') ? 'selected' : '' }}>Weekend</option>
                        <option {{ isset($data) && ($data['days'] == 'Only saturday') ? 'selected' : '' }}>Only saturday</option>
                        <option {{ isset($data) && ($data['days'] == 'Only sunday') ? 'selected' : '' }}>Only sunday</option>
                    </select>
                    @error('days')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div> -->
                <div class="form-group row">
                    <button class="btn btn-primary" type="submit">{{ GoogleTranslate::trans(request()->id ? 'Update Fund Raise' : 'Add Fund Raise', session()->get('lang_code'), 'en'); }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('model')
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jspage')
@endsection