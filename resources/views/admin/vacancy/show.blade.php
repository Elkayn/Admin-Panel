@extends('layouts.admin')
@section('content')
    <div>
        <div>{{$vacancyRu->id}}. {{$vacancyRu->titleRu}}</div>
        <div>{{$vacancyRu->subtitleRu}}</div>
        <div>{{$vacancyRu->imageRu}}</div>
        <div class="mt-3"><a href="{{ route('admin.vacancy.edit', $vacancyRu->id) }}" class="btn btn-primary mb-3">Редактировать</a></div>
{{--        <div><a href="{{ route('admin.promo.edit', $promo->id) }}" class="btn btn-danger mb-3">Удалить</a></div>--}}
        <div>
            <form action="{{ route('admin.vacancy.delete', $vacancyRu->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mb-3">Удалить</button>
            </form>
        </div>
        <div><a href="{{ route('admin.vacancy.index') }}" class="btn btn-primary mb-3">Назад</a></div>
    </div>
@endsection
