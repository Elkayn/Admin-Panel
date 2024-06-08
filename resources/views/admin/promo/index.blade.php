@extends('layouts.admin')

@section('content')
    <div class=mb-2>
        <h2 class="">Список промо</h2>
    </div>
    <div><a type="submit" class="btn btn-primary mb-2 mt-2" href="{{route('admin.promo.create')}}">Создать</a></div>
    <input type="button" class="btn btn-primary select_all" value="Выделить все">
        <input type="button" class="btn btn-primary check_all" value="Снять все">
    <form action="{{ route('admin.promo.del') }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mt-2">Удалить выбранные</button>
        <div class="content-header">
        <div class="container-fluid">
            @foreach($promos as $promo)
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" name="promo_ids[]" value="{{$promo->id}}" class="selected">
                        </td>
                        <td class="w-50">
                            <div><a href="{{ route('admin.promo.show', $promo->id) }}">{{$promo->id}} . {{$promo->title}}</a></div>
                            <div>{!!$promo->text!!}</div>
                        </td>
                        <td class="w-25">
                            <img src="{{url('storage/' . $promo->image)}}" alt="image" class="w-50">
                        </td>
                        <td class="w-10">
                            <form action="{{ route('admin.promo.delete', $promo->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            @endforeach
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-5">--}}
{{--                        <div><a href="{{ route('admin.promo.show', $promo->id) }}">{{$promo->id}} . {{$promo->title}}</a></div>--}}
{{--                        <div>{!!$promo->text!!}</div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <img src="{{url('storage/' . $promo->image)}}" alt="image" class="w-100">--}}
{{--                    </div>--}}
{{--                </div>--}}
        </div>
    </div>
    </form>
    <div>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script>
        $(".select_all").on("click", function(){
            $(".selected").each(function(){
                $(this).attr("checked", true);
            });
        });
    </script>
    <script>
        $(".check_all").on("click", function(){
            $(".selected").each(function(){
                $(this).attr("checked", false);
            });
        });
    </script>
@endsection
