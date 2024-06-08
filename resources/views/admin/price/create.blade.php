@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('admin.price.store') }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="titleRu" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
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
                <label for="Subtitle">Text</label>
                <input type="text" name="textRu" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Text (En)</label>
                <input type="text" name="textEn" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Text (Тат)</label>
                <input type="text" name="textTt" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
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
                <label for="Subtitle">Цена</label>
                <input type="text" name="sumRu" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Цена (En)</label>
                <input type="text" name="sumEn" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('Subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Цена (Тат)</label>
                <input type="text" name="sumTt" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
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
