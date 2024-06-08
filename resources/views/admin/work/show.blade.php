@extends('layouts.admin')
@section('content')
    <div>
        <div>{{$workRu->id}}. {{$workRu->name_workRu}}</div>
        <div>{{$workRu->linkRu}}</div>
        <div>{{$workRu->imageRu}}</div>
        <div class="mt-3"><a href="{{ route('admin.work.edit', $workRu->id) }}" class="btn btn-primary mb-3">Редактировать</a></div>
{{--        <div><a href="{{ route('admin.promo.edit', $promo->id) }}" class="btn btn-danger mb-3">Удалить</a></div>--}}
        <div>
            <form action="{{ route('admin.work.delete', $workRu->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mb-3">Удалить</button>
            </form>
        </div>
        <div><a href="{{ route('admin.work.index') }}" class="btn btn-primary mb-3">Назад</a></div>
    </div>
@endsection
