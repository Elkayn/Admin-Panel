@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{ route('admin.work.update', $workRu->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Название работы</label>
                <input type="text" name="name_workRu" class="form-control" id="title" placeholder="title" value="{{$workRu->name_workRu}}">
            </div>
            <div class="form-group">
                <label for="title">Название работы (En)</label>
                <input type="text" name="name_workEn" class="form-control" id="title" placeholder="title" value="@foreach($workEn as $workE){{$workRu->id === $workE->id ? $workE->name_workEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="title">Название работы (Тат)</label>
                <input type="text" name="name_workTt" class="form-control" id="title" placeholder="title" value="@foreach($workTt as $workT){{$workRu->id === $workT->id ? $workT->name_workTt : ''}}@endforeach">
            </div>



            <div class="form-group">
                <label for="Subtitle">Ссылка</label>
                <input type="text" name="linkRu" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ $workRu->linkRu}}">
            </div>
            <div class="form-group">
                <label for="SubtitleEn">Ссылка (En)</label>
                <input type="text" name="linkEn" class="form-control" id="Subtitle" placeholder="Subtitle" value="@foreach($workEn as $workE){{$workRu->id === $workE->id ? $workE->linkEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="SubtitleTt">Ссылка (Тат)</label>
                <input type="text" name="linkTt" class="form-control" id="Subtitle" placeholder="Subtitle" value="@foreach($workTt as $workT){{$workRu->id === $workT->id ? $workT->linkTt : ''}}@endforeach">
            </div>



            <div class="form-group">
                <label for="image">Image</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $workRu->imageRu)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageRu" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (En)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $workE->imageEn)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageEn" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (Тат)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $workT->imageTt)}}" alt="image" class="w-50">
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
