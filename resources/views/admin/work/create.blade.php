@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('admin.work.store') }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Название работы</label>
                <input type="text" name="name_workRu" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Название работы (En)</label>
                <input type="text" name="name_workEn" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Название работы (Тат)</label>
                <input type="text" name="name_workTt" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label for="Subtitle">Ссылка</label>
                <input type="text" name="linkRu" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Ссылка (En)</label>
                <input type="text" name="linkEn" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Ссылка (Тат)</label>
                <input type="text" name="linkTt" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>




            <div class="form-group">
                <label for="image">Image</label>
            </div>
            <div class="form-group">
                <input name="imageRu" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (En)</label>
            </div>
            <div class="form-group">
                <input name="imageEn" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (Тат</label>
            </div>
            <div class="form-group">
                <input name="imageTt" type="file" class="w-full h-12" placeholder="Обложка">
            </div>


            <button type="submit" class="btn btn-primary mt-3">Создать</button>
        </form>
    </div>
@endsection
