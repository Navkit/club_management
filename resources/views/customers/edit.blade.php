@extends('layouts.master')

@section('content')

    <form class="form-horizontal" method="post" action="/customerupdate">
        @csrf
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
                    <input type="text" class="form-control" readonly value="{{$customer->id}}" id="id" name="id">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-3 m-t-15">Rank/Level</label>
                <div class="col-md-9">
                    <select class="select2 form-control custom-select" name="rank" id="rank"
                            style="width: 100%; height:36px;">
                        @foreach($ranks as $rank)
                            <option @if($rank->id==$customer->rank_id) selected
                                    @endif value="{{$rank->id}}">{{$rank->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="fname"
                       class="col-sm-3  control-label col-form-label">Product Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$customer->name}}" id="name" name="name">
                </div>
            </div>

        </div>
        <div class="border-top">
            <div class="card-body">
                <button type="button" onclick="submit()" class="btn btn-primary">Add Product</button>
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
