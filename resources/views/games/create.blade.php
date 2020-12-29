@extends('layouts.master')

@section('content')

    <form class="form-horizontal" method="post" action="/gamesave">
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
            <h4 class="card-title">اضافه سلعه جديده</h4>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">اسم اللعبة:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
        </div>
        <div class="border-top">
            <div class="card-body">
                <button type="button" onclick="submit()" class="btn btn-primary">اضافه لعبة</button>
            </div>
        </div>
    </form>

@endsection

@section('scripts')
@endsection
