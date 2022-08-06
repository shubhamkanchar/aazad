@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ request()->id ? 'Update event' : 'Add event' }}</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('admin.create_event') }}" method="post" id="Addevent" enctype='multipart/form-data'>
                @csrf()
                <input type="hidden" name="id" id="id" value="{{ $data['id'] ?? ''}}">
                <div class="form-group row">
                    <label for="name">Event Title</label>
                    <input class="form-control @error('name')  is-invalid @enderror" type="text" name="name" id="name" value="{{ $data['name'] ?? ''}}">
                    @error('name')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="file">Event Image</label>
                    <input class="form-control @error('file')  is-invalid @enderror" type="file" name="file" id="file" value="{{ $data['file'] ?? ''}}">
                    @error('file')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="from">Time From</label>
                        <input class="form-control  @error('from')  is-invalid @enderror" type="time" name="from" id="from" value="{{ $data['from'] ?? ''}}">
                        @error('from')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="to">Time To</label>
                        <input class="form-control  @error('to')  is-invalid @enderror" type="time" name="to" id="to" value="{{ $data['to'] ?? ''}}">
                        @error('to')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="date">Date</label>
                        <input class="form-control  @error('date')  is-invalid @enderror" type="date" name="date" id="date" value="{{ $data['date'] ?? ''}}">
                        @error('date')
                        <span class="is-invalid">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc">Event Description</label>
                    <textarea class="form-control  @error('desc')  is-invalid @enderror" name="desc" id="desc">{{ $data['desc'] ?? ''}}</textarea>
                    @error('desc')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="location">Event Location</label>
                    <textarea class="form-control  @error('location')  is-invalid @enderror" name="location" id="location">{{ $data['location'] ?? ''}}</textarea>
                    @error('location')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="Link">location Link</label>
                    <input type="url" class="form-control  @error('link')  is-invalid @enderror" name="link" id="link" value="{{ $data['link'] ?? ''}}">
                    @error('link')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <button class="btn btn-primary" type="submit">{{ request()->id ? 'Update event' : 'Add event' }}</button>
                </div>
            </form>
             
        </div>
    </div>
</div>
@endsection

@section('jspage')
@endsection