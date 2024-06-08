@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{ route('admin.review.update', $reviewRu->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">ФИО</label>
                <input type="text" name="full_nameRu" class="form-control" id="title" placeholder="title" value="{{$reviewRu->titleRu}}">
            </div>
            <div class="form-group">
                <label for="title">ФИО (En)</label>
                <input type="text" name="full_nameEn" class="form-control" id="title" placeholder="title" value="@foreach($reviewEn as $reviewE){{$reviewRu->id === $reviewE->id ? $reviewE->full_nameEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="title">ФИО (Тат)</label>
                <input type="text" name="full_nameTt" class="form-control" id="title" placeholder="title" value="@foreach($reviewTt as $reviewT){{$reviewRu->id === $reviewT->id ? $reviewT->full_nameTt : ''}}@endforeach">
            </div>



            <div class="form-group">
                <label for="title">Должность</label>
                <input type="text" name="titleRu" class="form-control" id="title" placeholder="title" value="{{$reviewRu->titleRu}}">
            </div>
            <div class="form-group">
                <label for="title">Должность (En)</label>
                <input type="text" name="titleEn" class="form-control" id="title" placeholder="title" value="@foreach($reviewEn as $reviewE){{$reviewRu->id === $reviewE->id ? $reviewE->titleEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="title">Должность (Тат)</label>
                <input type="text" name="titleTt" class="form-control" id="title" placeholder="title" value="@foreach($reviewTt as $reviewT){{$reviewRu->id === $reviewT->id ? $reviewT->titleTt : ''}}@endforeach">
            </div>


            <div class="form-group">
                <label for="Text">Текст</label>
                <textarea class="summernote" name="textRu">{{ $reviewRu->textRu}}</textarea>
            </div>
            <div class="form-group">
                <label for="Text">Текст (En)</label>
                <textarea name="textEn" class="form-control summernote" id="text" placeholder="Text">
                    @foreach($reviewEn as $reviewE){{$reviewRu->id === $reviewE->id ? $reviewE->textEn : ''}}@endforeach
                </textarea>
            </div>
            <div class="form-group">
                <label for="Text">Текст (Тат)</label>
                <textarea name="textTt" class="form-control summernote" id="text" placeholder="Text">
                    @foreach($reviewTt as $reviewT){{$reviewRu->id === $reviewT->id ? $reviewT->textTt : ''}}@endforeach
                </textarea>
            </div>



            <div class="form-group">
                <label for="image">Изображение</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $reviewRu->imageRu)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageRu" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Изображение (En)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $reviewE->imageEn)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageEn" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Изображение (Тат)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $reviewT->imageTt)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageTt" type="file" class="w-full h-12" placeholder="Обложка">
            </div>



            <div class="form-group">
            <input type="submit" class="btn btn-primary mt-3" value="Обновить">
            </div>
        </form>
    </div>
@endsection
