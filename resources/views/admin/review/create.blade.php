@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('admin.review.store') }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Фио</label>
                <input type="text" name="full_nameRu" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Фио (En)</label>
                <input type="text" name="full_nameEn" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Фио (Тат)</label>
                <input type="text" name="full_nameTt" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="title">Должность</label>
                <input type="text" name="titleRu" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Должность (En)</label>
                <input type="text" name="titleEn" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Должность (Тат)</label>
                <input type="text" name="titleTt" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label for="Text">Текст</label>
                <textarea class="summernote"  name="textRu"></textarea>
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Текст (Рус)</label>
                <textarea class="summernote" name="textEn"></textarea>
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Текст (Тат)</label>
                <textarea name="textTt" class="form-control summernote" id="text" placeholder="Text">{{ old('text') }}</textarea>
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>





            <div class="form-group">
                <label for="image">Изображение</label>
            </div>
            <div class="form-group">
                <input name="imageRu" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Изображение (En)</label>
            </div>
            <div class="form-group">
                <input name="imageEn" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Изображение (Тат)</label>
            </div>
            <div class="form-group">
                <input name="imageTt" type="file" class="w-full h-12" placeholder="Обложка">
            </div>


            <button type="submit" class="btn btn-primary mt-3">Создать</button>
        </form>
    </div>
@endsection
