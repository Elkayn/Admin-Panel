@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{ route('admin.price.update', $priceRu->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="titleRu" class="form-control" id="title" placeholder="title" value="{{$priceRu->titleRu}}">
            </div>
            <div class="form-group">
                <label for="title">Title (En)</label>
                <input type="text" name="titleEn" class="form-control" id="title" placeholder="title" value="@foreach($priceEn as $priceE){{$priceRu->id === $priceE->id ? $priceE->titleEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="title">Title (Тат)</label>
                <input type="text" name="titleTt" class="form-control" id="title" placeholder="title" value="@foreach($priceTt as $priceT){{$priceRu->id === $priceT->id ? $priceT->titleTt : ''}}@endforeach">
            </div>


            <div class="form-group">
                <label for="Text">Text</label>
                <textarea class="summernote" name="textRu">{{ $priceRu->textRu}}</textarea>
            </div>
            <div class="form-group">
                <label for="Text">Text (En)</label>
                <textarea name="textEn" class="form-control summernote" id="text" placeholder="Text">
                    @foreach($priceEn as $priceE){{$priceRu->id === $priceE->id ? $priceE->textEn : ''}}@endforeach
                </textarea>
            </div>
            <div class="form-group">
                <label for="Text">Text (Тат)</label>
                <textarea name="textTt" class="form-control summernote" id="text" placeholder="Text">
                    @foreach($priceTt as $priceT){{$priceRu->id === $priceT->id ? $priceT->textTt : ''}}@endforeach
                </textarea>
            </div>

            <div class="form-group">
                <label for="title">Цена</label>
                <input type="text" name="sumRu" class="form-control" id="title" placeholder="title" value="{{$priceRu->sumRu}}">
            </div>
            <div class="form-group">
                <label for="title">Цена (En)</label>
                <input type="text" name="sumEn" class="form-control" id="title" placeholder="title" value="@foreach($priceEn as $priceE){{$priceRu->id === $priceE->id ? $priceE->sumEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="title">Цена (Тат)</label>
                <input type="text" name="sumTt" class="form-control" id="title" placeholder="title" value="@foreach($priceTt as $priceT){{$priceRu->id === $priceT->id ? $priceT->sumTt : ''}}@endforeach">
            </div>


            <div class="form-group">
                <label for="title">Ссылка</label>
                <input type="text" name="linkRu" class="form-control" id="title" placeholder="title" value="{{$priceRu->linkRu}}">
            </div>
            <div class="form-group">
                <label for="title">Ссылка (En)</label>
                <input type="text" name="linkEn" class="form-control" id="title" placeholder="title" value="@foreach($priceEn as $priceE){{$priceRu->id === $priceE->id ? $priceE->linkEn : ''}}@endforeach">
            </div>
            <div class="form-group">
                <label for="title">Ссылка (Тат)</label>
                <input type="text" name="linkTt" class="form-control" id="title" placeholder="title" value="@foreach($priceTt as $priceT){{$priceRu->id === $priceT->id ? $priceT->linkTt : ''}}@endforeach">
            </div>


            <div class="form-group">
                <label for="image">Image</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $priceRu->imageRu)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageRu" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (En)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $priceE->imageEn)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imageEn" type="file" class="w-full h-12" placeholder="Обложка">
            </div>
            <div class="form-group">
                <label for="image">Image (Тат)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $priceT->imageTt)}}" alt="image" class="w-50">
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
