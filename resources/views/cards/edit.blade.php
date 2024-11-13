@extends('layouts.master')
@section('head')
    <link href="/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
@endsection
@section('content')
    <form id="example-form" method="post" action="/editcard/{{$card->id}}"  enctype="multipart/form-data" class="m-t-40">
        @csrf
        <div style="padding-right: 2%;padding-left: 2%">
            <h3>Membership</h3>
            <section>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Guardian's Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->MainMemberName}}" id="MainMemberName" name="MainMemberName">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">National ID Number:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->NationalID}}" id="NationalID" name="NationalID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Phone Number:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  value="{{$card->Mobile}}" id="Mobile" name="Mobile">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Academic Qualification:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->Certificate}}"  id="Certificate" name="Certificate">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Job:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->Job}}"  id="Job" name="Job">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Address:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$card->Address}}"  id="Address" name="Address">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Status:</label>
                    <div class="custom-control custom-checkbox col-sm-9">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing1"  name="State" @if($card->State) checked @endif >
                        <label class="custom-control-label" for="customControlAutosizing1"></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Notes:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  value="{{$card->Notes}}" id="Notes" name="Notes">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Husband's ID Image:</label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control"   id="IDcardImg1" name="IDcardImg1">
                    </div>
                    <label for="fname"
                           class="col-sm-3  control-label col-form-label">Wife's ID Image:</label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control"   id="IDcardImg2" name="IDcardImg2">
                    </div>
                </div>

                <div class="border-top">
                    <div class="card-body">
                        <button type="button" onclick="submit()" class="btn btn-primary">Save Data</button>
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
