@extends('layouts.master')
@section('head')
    <link href="/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
@endsection
@section('content')
    <form id="example-form" method="post" action="/editcard/{{$card->id}}"  enctype="multipart/form-data" class="m-t-40">
        @csrf
        <div style="padding-right: 2%;padding-left: 2%">
            <h3>العضوية</h3>
            <section>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">اسم ولي الأمر:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->MainMemberName}}" id="MainMemberName" name="MainMemberName">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">رقم تحقيق الشخصية:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->NationalID}}" id="NationalID" name="NationalID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">رقم التليفون:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  value="{{$card->Mobile}}" id="Mobile" name="Mobile">
                    </div>
                </div>

                <div class="form-group row">


                    <label class="col-3 m-t-15">الجهة</label>
                    <div class="col-md-9">
                        <select class=" form-control custom-select" name="Type" id="Type"
                                style="width: 100%; height:36px;">
                            <option value="عسكري">عسكري</option>
                            <option value="مدني">مدني</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">المؤهل الدراسي:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->Certificate}}"  id="Certificate" name="Certificate">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">الوظيفة:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->Job}}"  id="Job" name="Job">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">العنوان:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->Address}}"  id="Address" name="Address">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">الحالة:</label>
                    <div class="custom-control custom-checkbox col-sm-9">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing1"  name="State" @if($card->State) checked @endif >
                        <label class="custom-control-label" for="customControlAutosizing1" ></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">الملاحظات:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  value="{{$card->Notes}}" id="Notes" name="Notes">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية العسكرية:</label>
                    <div class="col-sm-3 ">
                        <input type="file" class="form-control"    id="MilCardImg" name="MilCardImg">

                    </div>
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">صورة البطاقة العلاجية:</label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control"   id="MedCardImg" name="MedCardImg">

                    </div>
                </div>


                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">صورة البطاقة العائلية:</label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control"   id="FamCardImg" name="FamCardImg">

                    </div>
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية للزوج:</label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control"   id="IDcardImg1" name="IDcardImg1">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية للزوجة:</label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control"   id="IDcardImg2" name="IDcardImg2">

                    </div>
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">صورة استمارة الكشف الطبي:</label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control"   id="MedRevImg" name="MedRevImg">
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="button" onclick="submit()" class="btn btn-primary">حفظ البيانات</button>
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="/assets/libs/magnific-popup/meg.init.js"></script>
    <script >
        $('#Type option:contains("{{$card->Type}}")').prop('selected', true)
    </script>
@endsection
