@extends('layouts.master')
@section('head')
    <link href="/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">

@endsection
@section('content')
    @php
    $path=asset('imgs').'/';
    $hasgame=false;
    @endphp



    <div class="card-body">

        <h4 class="card-title">عرض بيانات اللاعب {{ $player->name }} </h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3  control-label col-form-label">رقم المسلسل:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" readonly value="{{ $player->id }}" id="id" name="id">
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-3  control-label col-form-label">اسم :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" readonly value="{{ $player->Name }}" id="name" name="name">
            </div>
        </div>

        <div class="form-group row">
            <label for="fname" class="col-sm-3  control-label col-form-label">الصورة الشخصية :</label>
            <div class="col-sm-9">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="{{ $path . $player->Img }}" alt="user"
                                height="100px" />
                            <a class="btn default btn-outline image-popup-vertical-fit el-link"
                                href="{{ $path . $player->Img }}"><i class="mdi mdi-magnify-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="form-group row">
            <label for="fname" class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية العسكرية:</label>
            <div class="col-sm-9">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="{{ $path . $player->NIDImg }}" alt="user"
                                height="100px" />
                            <a class="btn default btn-outline image-popup-vertical-fit el-link"
                                href="{{ $path . $player->NIDImg }}"><i class="mdi mdi-magnify-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <div class="border-top">
        <div class="card-body">
            <form method="post" action="/playergamesstore">
                @csrf
                <input type="hidden" name="pid" value="{{ $player->id }}">
                <label class="col-md-3 m-t-15">الالعاب</label>
                <div class="col-md-9">
                    <select class="select2 form-control m-t-15" id="games" name="games[]" multiple="multiple"
                        style="height: 36px;width: 100%;">
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}">{{ $game->Name }}</option>

                        @endforeach
                    </select>
                </div>
                <br>
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="تحديث">.
                    <div>

            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="/assets/libs/magnific-popup/meg.init.js"></script>
    <script src="/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="/assets/libs/select2/dist/js/select2.min.js"></script>
    <script>
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });

    </script>
    <script>

        // console.log($('#games option[value="1"]'))
        let arr=[];
        @foreach($player->games as $g)
            arr.push('{{$g->id}}')
        @endforeach

        $("#games").val(arr).change();



    </script>
@endsection
