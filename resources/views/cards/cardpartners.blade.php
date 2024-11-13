@extends('layouts.master')
@section('styles')
@endsection

@section('content')
    <div class="card-body">
        <h5 class="card-title">Players for Membership Number {{$card->id}}</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Partner Name</th>
                    <th>Partner Image</th>
                    <th>ID Image</th>
                    <th>Partner Membership</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($card->partners as $partner)
                    <tr id="partner_id_{{$partner->id}}">
                        <td>{{$partner->Name}}</td>
                        <td><img src='{{asset("imgs/$partner->Img")}}' height="100px" alt="Partner Image"></td>
                        <td><img src='{{asset("imgs/$partner->NIDImg")}}' height="100px" alt="ID Image"></td>
                        <td><a href="/showcard/{{$partner->Card_ID}}" class="btn btn-info">Player Membership</a></td>
                        <td><a href="javascript:void(0)" data-id="{{ $partner->id }}" class="btn btn-danger delete-game">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $('body').on('click', '.delete-game', function () {
            var partner_id = $(this).data("id");

            $.ajax({
                type: "GET",
                url: "{{ url('/deletepartner')}}"+'/'+partner_id,
                success: function (data) {
                    $("#partner_id_" + partner_id).fadeOut(500);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    </script>
    <script>
        $('#zero_config').DataTable({
            "language": {
                "sProcessing":    "Loading...",
                "sLengthMenu":    "Show _MENU_ entries",
                "sZeroRecords":   "No matching records found",
                "sEmptyTable":    "No data available in table",
                "sInfo":          "Showing _START_ to _END_ of _TOTAL_ entries",
                "sInfoEmpty":     "Showing 0 to 0 of 0 entries",
                "sInfoFiltered": "(filtered from _MAX_ total entries)",
                "sInfoPostFix":   "",
                "sSearch":        "Search:",
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Loading...",
                "oPaginate": {
                    "sFirst":    "First",
                    "sLast":     "Last",
                    "sNext":     "Next",
                    "sPrevious": "Previous"
                },
                "oAria": {
                    "sSortAscending":  ": activate to sort column ascending",
                    "sSortDescending": ": activate to sort column descending"
                }
            }
        });
    </script>
@endsection
