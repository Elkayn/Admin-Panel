@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('admin.promo.store') }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title (Рус)</label>
                <input type="text" name="titler" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title (Тат)</label>
                <input type="text" name="titlet" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="Subtitle">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Subtitle (Рус)</label>
                <input type="text" name="subtitler" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Subtitle">Subtitle (Тат)</label>
                <input type="text" name="subtitlet" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ old('Subtitle') }}">
                @error('subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="Text">Text</label>
                <textarea class="summernote"  name="text"></textarea>
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Text (Рус)</label>
                <textarea class="summernote" name="textr"></textarea>
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Text (Тат)</label>
                <textarea name="textt" class="form-control summernote" id="text" placeholder="Text">{{ old('text') }}</textarea>
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="Text">Subtext</label>
                <textarea name="subtext" class="form-control summernote" id="Subtext" placeholder="Subtext">{{ old('Subtext') }}</textarea>
                @error('subtext')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Subtext (Рус)</label>
                <textarea name="subtextr" class="form-control summernote" id="Subtext" placeholder="Subtext">{{ old('Subtext') }}</textarea>
                @error('subtext')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Subtext (Тат)</label>
                <textarea name="subtextt" class="form-control summernote" id="Subtext" placeholder="Subtext">{{ old('Subtext') }}</textarea>
                @error('subtext')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="Text">Link</label>
                <input type="Text" name="link" class="form-control" id="Link" placeholder="Link" value="{{ old('link') }}">
                @error('link')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Link (Рус)</label>
                <input type="text" name="linkr" class="form-control" id="Link" placeholder="Link" value="{{ old('linkr') }}">
                @error('link')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Link (Тат)</label>
                <input type="text" name="linkt" class="form-control" id="Link" placeholder="Link" value="{{ old('linkt') }}">
                @error('link')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="Text">SubLink</label>
                <input type="text" name="sublink" class="form-control" id="sublink" placeholder="SubLink" value="{{ old('sublink') }}">
                @error('sublink')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">SubLink (Рус)</label>
                <input type="text" name="sublinkr" class="form-control" id="SubLink" placeholder="SubLink" value="{{ old('SubLink') }}">
                @error('sublink')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">SubLink (Тат)</label>
                <input type="text" name="sublinkt" class="form-control" id="SubLink" placeholder="SubLink" value="{{ old('SubLink') }}">
                @error('sublink')
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
                <label for="image">Image (Рус)</label>
            </div>
            <div class="form-group">
                <input name="imager" type="file" class="w-full h-12" placeholder="Обложка">
            </div>






            <div class="form-group">
                <label for="image">Image (Тат)</label>
            </div>
            <div class="form-group">
                <input name="imaget" type="file" class="w-full h-12" placeholder="Обложка">
            </div>


            <button type="submit" class="btn btn-primary mt-3">Создать</button>
        </form>
    </div>
@endsection
