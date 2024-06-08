@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{ route('admin.vacancy.update', $vacancyRu->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="titleRu" class="form-control" id="title" placeholder="title" value="{{$vacancyRu->titleRu}}">
            </div>
            <div class="form-group">
                <label for="title">Title (En)</label>
                <input type="text" name="titleEn" class="form-control" id="title" placeholder="title" value="@foreach($vacancyEn as $vacancyE){{$vacancyRu->id === $vacancyE->id ? $vacancyE->titleEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="title">Title (Тат)</label>
                <input type="text" name="titleTt" class="form-control" id="title" placeholder="title" value="@foreach($vacancyTt as $vacancyT){{$vacancyRu->id === $vacancyT->id ? $vacancyT->titleTt : ''}}@endforeach">
            </div>



            <div class="form-group">
                <label for="Subtitle">Subtitle</label>
                <input type="text" name="subtitleRu" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ $vacancyRu->subtitleRu}}">
            </div>
            <div class="form-group">
                <label for="SubtitleEn">Subtitle (En)</label>
                <input type="text" name="subtitleEn" class="form-control" id="Subtitle" placeholder="Subtitle" value="@foreach($vacancyEn as $vacancyE){{$vacancyRu->id === $vacancyE->id ? $vacancyE->subtitleEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="SubtitleTt">Subtitle (Тат)</label>
                <input type="text" name="subtitleTt" class="form-control" id="Subtitle" placeholder="Subtitle" value="@foreach($vacancyTt as $vacancyT){{$vacancyRu->id === $vacancyT->id ? $vacancyT->subtitleTt : ''}}@endforeach">
            </div>



            <div class="form-group">
                <label for="image">Image</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $vacancyRu->imageRu)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageRu" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (En)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $vacancyE->imageEn)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageEn" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (Тат)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $vacancyT->imageTt)}}" alt="image" class="w-50">
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
