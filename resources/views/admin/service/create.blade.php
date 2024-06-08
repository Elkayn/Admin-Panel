@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('admin.service.store') }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title (En)</label>
                <input type="text" name="titleEn" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title (Тат)</label>
                <input type="text" name="titleTt" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label for="Subtitle">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Subtitle (En)</label>
                <input type="text" name="subtitleEn" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Subtitle (Тат)</label>
                <input type="text" name="subtitleTt" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>




            <div class="form-group">
                <label for="image">Image</label>
            </div>
            <div class="form-group">
                <input name="image" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (En)</label>
            </div>
            <div class="form-group">
                <input name="imageEn" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (Тат)</label>
            </div>
            <div class="form-group">
                <input name="imageTt" type="file" class="w-full h-12" placeholder="Обложка">
            </div>


            <button type="submit" class="btn btn-primary mt-3">Создать</button>
        </form>
    </div>
@endsection
