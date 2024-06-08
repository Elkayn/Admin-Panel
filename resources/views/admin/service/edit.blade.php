@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{ route('admin.service.update', $service->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$service->title}}">
            </div>
            <div class="form-group">
                <label for="title">Title (En)</label>
                <input type="text" name="titleEn" class="form-control" id="title" placeholder="title" value="@foreach($serviceEn as $serviceE){{$service->id === $serviceE->id ? $serviceE->titleEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="title">Title (Тат)</label>
                <input type="text" name="titleTt" class="form-control" id="title" placeholder="title" value="@foreach($serviceTt as $serviceT){{$service->id === $serviceT->id ? $serviceT->titleTt : ''}}@endforeach">
            </div>



            <div class="form-group">
                <label for="Subtitle">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ $service->subtitle}}">
            </div>
            <div class="form-group">
                <label for="SubtitleEn">Subtitle (En)</label>
                <input type="text" name="subtitleEn" class="form-control" id="Subtitle" placeholder="Subtitle" value="@foreach($serviceEn as $serviceE){{$service->id === $serviceE->id ? $serviceE->subtitleEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="SubtitleTt">Subtitle (Тат)</label>
                <input type="text" name="subtitleTt" class="form-control" id="Subtitle" placeholder="Subtitle" value="@foreach($serviceTt as $serviceT){{$service->id === $serviceT->id ? $serviceT->subtitleTt : ''}}@endforeach">
            </div>



            <div class="form-group">
                <label for="image">Image</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $service->image)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="image" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (En)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $serviceE->imageEn)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageEn" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (Тат)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $serviceT->imageTt)}}" alt="image" class="w-50">
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
