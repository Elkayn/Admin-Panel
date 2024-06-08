@extends('layouts.admin')
@section('content')
    <div>
        <div>{{$promo->id}}. {{$promo->title}}</div>
        <div>{{$promo->subtitle}}</div>
        <div>{!!$promo->text!!}</div>
        <div>{!!$promo->subtext!!}</div>
        <div>{{$promo->link}}</div>
        <div>{{$promo->sublink}}</div>
        <div>{{$promo->image}}</div>

        <div class="mt-3"><a href="{{ route('admin.promo.edit', $promo->id) }}" class="btn btn-primary mb-3">Редактировать</a></div>
{{--        <div><a href="{{ route('admin.promo.edit', $promo->id) }}" class="btn btn-danger mb-3">Удалить</a></div>--}}
        <div>
            <form action="{{ route('admin.promo.delete', $promo->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mb-3">Удалить</button>
            </form>
        </div>
        <div><a href="{{ route('admin.promo.index') }}" class="btn btn-primary mb-3">Назад</a></div>
    </div>
@endsection
