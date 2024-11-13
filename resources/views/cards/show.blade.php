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
                            {{"Please enter the customer's name."}}
                            @enderror
                        </li>
                    </ul>
                </div>
            @endif
            <h4 class="card-title">Edit Product</h4>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Serial Number:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->id}}" id="id" name="id">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Guardian's Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->MainMemberName}}" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">National ID Number:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->NationalID}}" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Phone Number:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->Mobile}}" id="name" name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Address:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->Address}}" id="Address" name="Address">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Education Level:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->Certificate}}" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Job:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->Job}}" id="name" name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Status:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{($card->State)?'Active':'Suspended'}}" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Notes:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->Notes}}" id="name" name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="fname"
                       class="col-sm-6  control-label col-form-label">Husband's National ID Image:</label>
                <div class="col-sm-6">
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
                       class="col-sm-6  control-label col-form-label">Wife's National ID Image:</label>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{$path.$card->IDcardImg2}}" alt="user" height="100px" />
                               <a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{$path.$card->IDcardImg2}}"><i class="mdi mdi-magnify-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Registration Date:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" readonly value="{{$card->RegistrationDate}}" id="name" name="name">
                </div>
            </div>

        </div>
        <div class="border-top">
            <div class="card-body">
                <a href="/cardplayers/{{$card->id}}" class="btn btn-info">Players</a>
                <a href="/cardpartners/{{$card->id}}" class="btn btn-primary">Partners</a>
            </div>
        </div>

@endsection

@section('scripts')
    <script src="/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="/assets/libs/magnific-popup/meg.init.js"></script>

@endsection 
