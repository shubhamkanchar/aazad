@extends('admin.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ request()->id ? 'Update work' : 'Add work' }}</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('admin.create_work') }}" method="post" id="Addwork" enctype='multipart/form-data'>
                @csrf()
                <input type="hidden" name="id" id="id" value="{{ $data['id'] ?? ''}}">
                <div class="form-group row">
                    <label for="name">Work Title</label>
                    <input class="form-control @error('name')  is-invalid @enderror" type="text" name="name" id="name" value="{{ $data['name'] ?? ''}}">
                    @error('name')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="name">Work image</label>
                    <input class="form-control @error('file')  is-invalid @enderror" type="file" name="file" id="file" value="{{ $data['file'] ?? ''}}">
                    @error('file')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="description">Work Description</label>
                    <textarea class="form-control  @error('description')  is-invalid @enderror" name="description" id="description">{{ $data['description'] ?? ''}}</textarea>
                    @error('description')
                    <span class="is-invalid">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <button class="btn btn-primary" type="submit">{{ request()->id ? 'Update work' : 'Add work' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('jspage')
@endsection