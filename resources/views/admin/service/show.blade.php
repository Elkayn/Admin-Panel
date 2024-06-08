@extends('layouts.admin')
@section('content')
    <div>
        <div>{{$service->id}}. {{$service->title}}</div>
        <div>{{$service->subtitle}}</div>
        <div>{{$service->image}}</div>
        <div class="mt-3"><a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-primary mb-3">Редактировать</a></div>
{{--        <div><a href="{{ route('admin.promo.edit', $promo->id) }}" class="btn btn-danger mb-3">Удалить</a></div>--}}
        <div>
            <form action="{{ route('admin.service.delete', $service->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mb-3">Удалить</button>
            </form>
        </div>
        <div><a href="{{ route('admin.service.index') }}" class="btn btn-primary mb-3">Назад</a></div>
    </div>
@endsection
