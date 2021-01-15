@extends('layouts.master')
@section('head')
    <link href="/assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">

@endsection
@section('content')



    <div class="card-body wizard-content">
        <h4 class="card-title">تسجيل العضوية</h4>
        <h6 class="card-subtitle"></h6>
        <form id="example-form" method="post" action="/cardsave"  enctype="multipart/form-data" class="m-t-40">
            @csrf
            <div>
                <h3>العضوية</h3>
                <section>
                    <div class="form-group row">
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">اسم ولي الأمر:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"   id="MainMemberName" name="MainMemberName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">رقم تحقيق الشخصية:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  id="NationalID" name="NationalID">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">رقم التليفون:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  id="Mobile" name="Mobile">
                        </div>
                    </div>

                 
                    <div class="form-group row">
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">المؤهل الدراسي:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"   id="Certificate" name="Certificate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">الوظيفة:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"   id="Job" name="Job">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">العنوان:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"   id="Address" name="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">عدد اللاعبين:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control"   id="plcount" name="plcount">
                        </div>
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label"> عدد المرافقين:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control"   id="pacount" name="pacount">
                        </div>
                    </div>
                   


                    <div class="form-group row">
                       
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية للزوج:</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control"   id="IDcardImg1" name="IDcardImg1">

                        </div>
                        <label for="fname"
                               class="col-sm-3  control-label col-form-label">صورة تحقيق الشخصية للزوجة:</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control"   id="IDcardImg2" name="IDcardImg2">

                        </div>
                    </div>
                </section>
                <h3>اللاعبين</h3>
                <section>
                    <div id="players">
                        <div class="form-group row">
                            <label for="fname"
                                   class="col-sm-3  control-label col-form-label">اسم اللاعب رقم num:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  id="MainMemberName" name="MainMemberName">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="fname"
                                   class="col-sm-3  control-label col-form-label">صورةاللاعب رقم num:</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control"   id="PlayerImg_num" name="PlayerImg_num">

                            </div>
                            <label for="fname"
                                   class="col-sm-3  control-label col-form-label">صورةتحقيق شخصية اللاعب رقم num:</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control"   id="PlayerIDImg_num" name="PlayerIDImg_num">

                            </div>

                        </div>
                    </div>
                </section>
                <h3>المرافقين</h3>
                <section>
                    <div id="partners">
                    </div>
                </section>
                <h3>النهاية</h3>
                <section>
                    <input id="acceptTerms" name="acceptTerms" type="checkbox" >
                    <label for="acceptTerms">انا متاكد من ان كل المعلومات صحيحة.</label>
                </section>
            </div>
        </form>
    </div>




@endsection

@section('scripts')

    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script>
        $(".select2").select2();
    </script>
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>



    <script>
      
        function drawPlayers(num)
        {
            var pdiv=$('#players');
            pdiv.empty();
            for(var i=1;i<=num;i++)
            {
                pdiv.append('<div id="players">\n' +
                    '                        <div class="form-group row">\n' +
                    '                            <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">اسم اللاعب رقم '+i+':</label>\n' +
                    '                            <div class="col-sm-9">\n' +
                    '                                <input type="text" class="form-control"  id="PlayerName_'+i+'" name="PlayerName_'+i+'">\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                        <div class="form-group row">\n' +
                    '                        <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">صورةاللاعب رقم '+i+':</label>\n' +
                    '                            <div class="col-sm-3">\n' +
                    '                                <input type="file" class="form-control"   id="PlayerImg_'+i+'" name="PlayerImg_'+i+'">\n' +
                    '\n' +
                    '                            </div>\n' +
                    '                            <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">صورةتحقيق شخصية اللاعب رقم '+i+':</label>\n' +
                    '                            <div class="col-sm-3">\n' +
                    '                                <input type="file" class="form-control"   id="PlayerNIDImg_'+i+'" name="PlayerNIDImg_'+i+'">\n' +
                    '\n' +
                    '                            </div>\n' +
                    '\n' +
                    '                        </div>\n' +
                    '                    </div>');
            }
        }

         function drawPartners(num)
                {
                    var pdiv=$('#partners');
                    pdiv.empty();
                    for(var i=1;i<=num;i++)
                    {
                        pdiv.append(' <div id="players">\n' +
                            '                        <div class="form-group row">\n' +
                            '                            <label for="fname"\n' +
                            '                                   class="col-sm-3  control-label col-form-label">اسم المرافق رقم '+i+':</label>\n' +
                            '                            <div class="col-sm-9">\n' +
                            '                                <input type="text" class="form-control"  id="PartnerName_'+i+'" name="PartnerName_'+i+'">\n' +
                            '                            </div>\n' +
                            '                        </div>\n' +
                            '                        <div class="form-group row">\n' +
                            '                        <label for="fname"\n' +
                            '                                   class="col-sm-3  control-label col-form-label">صورةالمرافق رقم '+i+':</label>\n' +
                            '                            <div class="col-sm-3">\n' +
                            '                                <input type="file" class="form-control"   id="PartnerImg_'+i+'" name="PartnerImg_'+i+'">\n' +
                            '\n' +
                            '                            </div>\n' +
                            '                            <label for="fname"\n' +
                            '                                   class="col-sm-3  control-label col-form-label">صورةتحقيق شخصية المرافق رقم '+i+':</label>\n' +
                            '                            <div class="col-sm-3">\n' +
                            '                                <input type="file" class="form-control"   id="PartnerNIDImg_'+i+'" name="PartnerNIDImg_'+i+'">\n' +
                            '\n' +
                            '                            </div>\n' +
                            '\n' +
                            '                        </div>\n' +
                            '                    </div>');
                    }
                }



        // Basic Example with form
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                if(currentIndex==0){
                drawPlayers($('#plcount').val())
                drawPartners($('#pacount').val())
                }
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                form.submit();
            },
            labels:{
                next:"التالي",
                previous:"السابق",
                finish:"تسجيل العضوية",
                loading:"تحميل..."
            }
        });


    </script>
@endsection
