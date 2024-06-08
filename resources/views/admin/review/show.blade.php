@extends('layouts.admin')
@section('content')
    <div>
        <div>{{$reviewRu->id}}. {{$reviewRu->full_nameRu}}</div>
        <div>{{$reviewRu->titleRu}}</div>
        <div>{{$reviewRu->textRu}}</div>
        <div>{{$reviewRu->imageRu}}</div>
        <div class="mt-3"><a href="{{ route('admin.review.edit', $reviewRu->id) }}" class="btn btn-primary mb-3">Редактировать</a></div>
{{--        <div><a href="{{ route('admin.promo.edit', $promo->id) }}" class="btn btn-danger mb-3">Удалить</a></div>--}}
        <div>
            <form action="{{ route('admin.review.delete', $reviewRu->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mb-3">Удалить</button>
            </form>
        </div>
        <div><a href="{{ route('admin.review.index') }}" class="btn btn-primary mb-3">Назад</a></div>
    </div>
@endsection
