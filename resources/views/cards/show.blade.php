@extends('layouts.master')
@section('head')
    <link href="/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
@endsection
@section('content')
    @php
    $path=asset('imgs').'/';
    @endphp
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
            <h4 class="card-title">تعديل منتج</h4>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">رقم المسلسل:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->id}}" id="id" name="id">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">اسم ولي الأمر:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->MainMemberName}}" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">رقم تحقيق الشخصية:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->NationalID}}" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">رقم التليفون:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->Mobile}}" id="name" name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">الجهة:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->Type}}" id="name" name="name">
                </div>
            </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">العنوان:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  readonly value="{{$card->Address}}"  id="Address" name="Address">
                    </div>
                </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">المؤهل الدراسي:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->Certificate}}" id="name" name="name">
                </div>
            </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">الوظيفة:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" readonly value="{{$card->Job}}" id="name" name="name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">الحالة:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" readonly value="{{($card->State)?'ساري':'موقوف'}}" id="name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">الملاحظات:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" readonly value="{{$card->Notes}}" id="name" name="name">
                    </div>
                </div>

            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية العسكرية:</label>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{$path.$card->MilCardImg}}" alt="user" height="100px" />
                               <a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{$path.$card->MilCardImg}}"><i class="mdi mdi-magnify-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">صورة البطاقة العلاجية:</label>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{$path.$card->MedCardImg}}" alt="user" height="100px" />
                                <a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{$path.$card->MedCardImg}}"><i class="mdi mdi-magnify-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">صورة البطاقة العائلية:</label>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{$path.$card->FamCardImg}}" alt="user" height="100px" />
                               <a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{$path.$card->FamCardImg}}"><i class="mdi mdi-magnify-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية للزوج:</label>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{$path.$card->IDcardImg1}}" alt="user" height="100px" />
                                <a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{$path.$card->IDcardImg1}}"><i class="mdi mdi-magnify-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية للزوجة:</label>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{$path.$card->IDcardImg2}}" alt="user" height="100px" />
                               <a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{$path.$card->IDcardImg2}}"><i class="mdi mdi-magnify-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">صورة استمارة الكشف الطبي:</label>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{$path.$card->MedRevImg}}" alt="user" height="100px" />
                                <a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{$path.$card->MedRevImg}}"><i class="mdi mdi-magnify-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">تاريخ التسجيل:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->RegistrationDate}}" id="name" name="name">
                </div>
            </div>

        </div>
        <div class="border-top">
            <div class="card-body">
                <a href="/cardplayers/{{$card->id}}" class="btn btn-info">اللاعبين</a>
                <a href="/cardpartners/{{$card->id}}" class="btn btn-primary">المرافقين</a>
            </div>
        </div>

@endsection

@section('scripts')
    <script src="/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="/assets/libs/magnific-popup/meg.init.js"></script>

@endsection
