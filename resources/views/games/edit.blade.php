@extends('layouts.master')

@section('content')

    <form class="form-horizontal" method="post" action="/gameupdate">
        @csrf
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        <li>
                            @error('name')
                            {{"رجاء ادخال اسم اللعبة "}}
                            @enderror
                        </li>

                    </ul>
                </div>
            @endif
            <h4 class="card-title">تعديل بيانات لعبة</h4>
                <input type="hidden" class="form-control" readonly value="{{$game->id}}" id="id" name="id">
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">اسم اللعبة:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  value="{{$game->Name}}" id="name" name="name">
                </div>
            </div>
        <div class="border-top">
            <div class="card-body">
                <button type="button" onclick="submit()" class="btn btn-primary">تعديل اللعبة</button>
            </div>
        </div>
    </form>

@endsection

@section('scripts')

@endsection
