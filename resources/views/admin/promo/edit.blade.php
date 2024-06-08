@extends('layouts.admin')
@section('content')
        <form action="{{ route('admin.promo.update', $promo->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$promo->title}}">
            </div>
            <div class="form-group">
                <label for="title">Title (Рус)</label>
                <input type="text" name="titler" class="form-control" id="title" placeholder="title"
                        value="@foreach($promor as $pro){{$promo->id === $pro->id ? $pro->titler : ''}}@endforeach" >
            </div>
            <div class="form-group">
                <label for="title">Title (Тат)</label>
                <input type="text" name="titlet" class="form-control" id="title" placeholder="title"
                        value="@foreach($promot as $prot){{$promo->id==$prot->id ? $prot->titlet : ''}}@endforeach" >
            </div>

            <div class="form-group">
                <label for="Subtitle">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="Subtitle" placeholder="Subtitle" value="{{ $promo->subtitle}}">
            </div>
            <div class="form-group">
                <label for="Subtitle">Subtitle (Рус)</label>
                <input type="text" name="subtitler" class="form-control" id="Subtitle" placeholder="Subtitle"
                        value="@foreach($promor as $pro){{$promo->id==$pro->id ? $pro->subtitler : ''}}@endforeach" >
            </div>
            <div class="form-group">
                <label for="Subtitle">Subtitle (Тат)</label>
                <input type="text" name="subtitlet" class="form-control" id="Subtitle" placeholder="Subtitle"
                        value="@foreach($promot as $prot){{$promo->id==$prot->id ? $prot->subtitlet : ''}}@endforeach" >
            </div>

            <div class="form-group">
                <label for="Text">Text</label>
                <textarea class="summernote" name="text">{{ $promo->text}}</textarea>
            </div>
            <div class="form-group">
                <label for="Text">Text (Рус)</label>
                <textarea name="textr" class="form-control summernote" id="text" placeholder="Text">
                    @foreach($promor as $pro) {{$promo->id==$pro->id ? $pro->textr : ''}} @endforeach
                </textarea>
            </div>
            <div class="form-group">
                <label for="Text">Text (Тат)</label>
                <textarea name="textt" class="form-control summernote" id="text" placeholder="Text">
                    @foreach($promot as $prot) {{$promo->id==$prot->id ? $prot->textt : ''}} @endforeach
                </textarea>
            </div>

            <div class="form-group">
                <label for="Text">Subtext</label>
                <textarea name="subtext" class="form-control summernote" id="Subtext" placeholder="Subtext">{{ $promo->subtext }}</textarea>
            </div>
            <div class="form-group">
                <label for="Text">Subtext (Рус)</label>
                <textarea name="subtextr" class="form-control summernote" id="Subtext" placeholder="Subtext">
                    @foreach($promor as $pro) {{$promo->id==$pro->id ? $pro->subtextr : ''}} @endforeach
                </textarea>
            </div>
            <div class="form-group">
                <label for="Text">Subtext (Тат)</label>
                <textarea name="subtextt" class="form-control summernote" id="Subtext" placeholder="Subtext">
                    @foreach($promot as $prot) {{$promo->id==$prot->id ? $prot->subtextt : ''}} @endforeach
                </textarea>
            </div>


            <div class="form-group">
                <label for="Text">Link</label>
                <input type="text" name="link" class="form-control" id="Link" placeholder="Link" value="{{$promo->link}}">
                @error('Link')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Link (Рус)</label>
                <input type="text" name="linkr" class="form-control" id="Link" placeholder="Link"
                       value="@foreach($promor as $pro){{$promo->id === $pro->id ? $pro->linkr : ''}}@endforeach">
                @error('Link')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">Link (Тат)</label>
                <input type="text" name="linkt" class="form-control" id="Link" placeholder="Link"
                       value="@foreach($promot as $prot){{$promo->id==$prot->id ? $prot->linkt : ''}}@endforeach" >
                @error('Link')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="Text">SubLink</label>
                <input type="text" name="sublink" class="form-control" id="SubLink" placeholder="SubLink" value="{{$promo->sublink}}">
                @error('SubLink')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">SubLink (Рус)</label>
                <input type="text" name="sublinkr" class="form-control" id="SubLink" placeholder="SubLink"
                       value="@foreach($promor as $pro){{$promo->id === $pro->id ? $pro->sublinkr : ''}}@endforeach">
                @error('SubLink')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Text">SubLink (Тат)</label>
                <input type="text" name="sublinkt" class="form-control" id="SubLink" placeholder="SubLink"
                       value="@foreach($promot as $prot){{$promo->id==$prot->id ? $prot->sublinkt : ''}}@endforeach" >
                @error('SubLink')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="image">Image</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{url('storage/' . $promo->image)}}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="image" type="file" class="w-full h-12" placeholder="Обложка">
            </div>






            <div class="form-group">
                <label for="image">Image (Рус)</label>
            </div>
            <div class="w-25 mb-2">
                <img src="{{ url('storage/' . $pro->imager) }}" alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imager" type="file" class="w-full h-12" placeholder="Обложка">
            </div>






            <div class="form-group">
                <label for="image">Image (Тат)</label>
            </div>
            <div class="w-25 mb-2">
                <img  src="{{url('storage/' .  $prot->imaget)}}"  alt="image" class="w-50">
            </div>
            <div class="form-group">
                <input name="imaget" type="file" class="w-full h-12" placeholder="Обложка">
            </div>


            <div class="form-group">
            <input type="submit" class="btn btn-primary mt-3" value="Обновить">
            </div>
        </form>
@endsection
