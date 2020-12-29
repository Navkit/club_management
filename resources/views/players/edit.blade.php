 @extends('layouts.master')

@section('content')

    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="/playerupdate">
        @csrf
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        <li>
                            @error('name')
                            {{"رجاء ادخال اسم الذبون "}}
                            @enderror
                        </li>


                    </ul>
                </div>
            @endif
            <h4 class="card-title">تعديل اللاعب</h4>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">رقم المسلسل:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$player->id}}" id="id" name="id">
                </div>
            </div>

            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">اسم اللاعب:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$player->Name}}" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">الصورة الشخصية :</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="img" name="img">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية العسكرية:</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control"  id="nidimg" name="nidimg">
                </div>
            </div>


        </div>
        <div class="border-top">
            <div class="card-body">
                <button type="button" onclick="submit()" class="btn btn-primary">تحديث</button>
            </div>
        </div>
    </form>

@endsection

@section('scripts')
    <script src="/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="/assets/libs/select2/dist/js/select2.min.js"></script>
    <script>
        $(".select2").select2();
    </script>
    <script>

    </script>
@endsection
