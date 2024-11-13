@extends('layouts.master')
@section('head')
    <link href="/assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
@endsection
@section('content')
    <div class="card-body wizard-content">
        <h4 class="card-title">Membership Registration</h4>
        <h6 class="card-subtitle"></h6>
        <form id="example-form" method="post" action="/cardsave" enctype="multipart/form-data" class="m-t-40">
            @csrf
            <div>
                <h3>Membership</h3>
                <section>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Guardian's Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="MainMemberName" name="MainMemberName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">National ID Number:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="NationalID" name="NationalID">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Phone Number:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Mobile" name="Mobile">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Academic Qualification:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Certificate" name="Certificate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Job:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Job" name="Job">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Address:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Address" name="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Number of Players:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="plcount" name="plcount">
                        </div>
                        <label for="fname" class="col-sm-3 control-label col-form-label">Number of Companions:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="pacount" name="pacount">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">ID Image of Husband:</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control" id="IDcardImg1" name="IDcardImg1">
                        </div>
                        <label for="fname" class="col-sm-3 control-label col-form-label">ID Image of Wife:</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control" id="IDcardImg2" name="IDcardImg2">
                        </div>
                    </div>
                </section>
                <h3>Players</h3>
                <section>
                    <div id="players">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 control-label col-form-label">Player Name No. num:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="MainMemberName" name="MainMemberName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 control-label col-form-label">Player Image No. num:</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" id="PlayerImg_num" name="PlayerImg_num">
                            </div>
                            <label for="fname" class="col-sm-3 control-label col-form-label">Player ID Image No. num:</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" id="PlayerIDImg_num" name="PlayerIDImg_num">
                            </div>
                        </div>
                    </div>
                </section>
                <h3>Companions</h3>
                <section>
                    <div id="partners"></div>
                </section>
                <h3>Finish</h3>
                <section>
                    <input id="acceptTerms" name="acceptTerms" type="checkbox">
                    <label for="acceptTerms">I confirm that all information is correct.</label>
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
        function drawPlayers(num) {
            var pdiv = $('#players');
            pdiv.empty();
            for (var i = 1; i <= num; i++) {
                pdiv.append('<div id="players">\n' +
                    '                        <div class="form-group row">\n' +
                    '                            <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">Player Name No. ' + i + ':</label>\n' +
                    '                            <div class="col-sm-9">\n' +
                    '                                <input type="text" class="form-control" id="PlayerName_' + i + '" name="PlayerName_' + i + '">\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                        <div class="form-group row">\n' +
                    '                        <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">Player Image No. ' + i + ':</label>\n' +
                    '                            <div class="col-sm-3">\n' +
                    '                                <input type="file" class="form-control" id="PlayerImg_' + i + '" name="PlayerImg_' + i + '">\n' +
                    '                            </div>\n' +
                    '                            <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">Player ID Image No. ' + i + ':</label>\n' +
                    '                            <div class="col-sm-3">\n' +
                    '                                <input type="file" class="form-control" id="PlayerNIDImg_' + i + '" name="PlayerNIDImg_' + i + '">\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>');
            }
        }

        function drawPartners(num) {
            var pdiv = $('#partners');
            pdiv.empty();
            for (var i = 1; i <= num; i++) {
                pdiv.append(' <div id="players">\n' +
                    '                        <div class="form-group row">\n' +
                    '                            <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">Companion Name No. ' + i + ':</label>\n' +
                    '                            <div class="col-sm-9">\n' +
                    '                                <input type="text" class="form-control" id="PartnerName_' + i + '" name="PartnerName_' + i + '">\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                        <div class="form-group row">\n' +
                    '                        <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">Companion Image No. ' + i + ':</label>\n' +
                    '                            <div class="col-sm-3">\n' +
                    '                                <input type="file" class="form-control" id="PartnerImg_' + i + '" name="PartnerImg_' + i + '">\n' +
                    '                            </div>\n' +
                    '                            <label for="fname"\n' +
                    '                                   class="col-sm-3  control-label col-form-label">Companion ID Image No. ' + i + ':</label>\n' +
                    '                            <div class="col-sm-3">\n' +
                    '                                <input type="file" class="form-control" id="PartnerIDImg_' + i + '" name="PartnerIDImg_' + i + '">\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>');
            }
        }

        $(document).ready(function () {
            $(".js-example-basic-single").select2();
            var form = $("#example-form");
            form.validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                }
            });
            form.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "fade",
                autoFocus: true,
                onStepChanging: function (event, currentIndex, newIndex) {
                    if (currentIndex > newIndex) {
                        return true;
                    }
                    var num = $('#plcount').val();
                    if (currentIndex == 0) {
                        if ($("#plcount").val() != '') {
                            drawPlayers(num);
                        } else {
                            return false;
                        }
                    }
                    return true;
                },
                onFinished: function (event, currentIndex) {
                    $("#saveform").submit();
                }
            });
        });
    </script>
@endsection
