@extends('layouts.master')
@section('styles')


@endsection
@section('content')
    <div class="card-body">
        <h5 class="card-title">Memberships</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Guardian's Name</th>
                    <th>Phone Number</th>
                    <th>National ID Number</th>
                    <th>Status</th>
                    <th>View Data</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($cards as $card)
                    <tr id="card_id_{{$card->id}}">
                        <td>{{$card->MainMemberName}}</td>
                        <td>{{$card->Mobile}}</td>
                        <td>{{$card->NationalID}}</td>
                        <td>@if($card->State==1) <a class="fas fa-check-circle fa-lg" style="color: green"></a>
                            @else  <a class=" fas fa-times-circle fa-lg" style="color: red"></a> @endif</td>
                        <td><a href="showcard/{{$card->id}}" class="btn btn-cyan">View Data</a></td>
                        <td><a href="editcard/{{$card->id}}" class="btn btn-info">Edit</a></td>
                        <td><a href="javascript:void(0)" data-id="{{ $card->id }}"
                               class="btn btn-danger delete-card">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        $('body').on('click', '.delete-card', function () {
            var user_id = $(this).data("id");
            $.ajax({
                type: "GET",
                url: "{{ url('deletecard')}}" + '/' + user_id,
                success: function (data) {
                    $("#card_id_" + user_id).fadeOut(500);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    </script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable({
                "language": {
                    "sProcessing": "Loading...",
                    "sLengthMenu": "Show _MENU_ entries",
                    "sZeroRecords": "No matching records found",
                    "sEmptyTable": "No data available in table",
                    "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "sInfoEmpty": "Showing 0 to 0 of 0 entries",
                    "sInfoFiltered": "(filtered from _MAX_ total entries)",
                    "sInfoPostFix": "",
                    "sSearch": 'Search:',
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Loading...",
                    "oPaginate": {
                        "sFirst": "First",
                        "sLast": "Last",
                        "sNext": "Next",
                        "sPrevious": "Previous"
                    },
                    "oAria": {
                        "sSortAscending": ": activate to sort column ascending",
                        "sSortDescending": ": activate to sort column descending"
                    }
                }
            }
        );
    </script>
@endsection
