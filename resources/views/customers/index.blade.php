@extends('layouts.master')
@section('styles')


@endsection
@section('content')
    <div class="card-body">
        <h5 class="card-title">Customers</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Rank/Level</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr id="customer_id_{{$customer->id}}">
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->rank->name}}</td>
                        <td>{{$customer->name}}</td>
                        <td><a href="editcustomer/{{$customer->id}}" class="btn btn-info">Edit</a></td>
                        <td><a href="javascript:void(0)" data-id="{{ $customer->id }}"
                               class="btn btn-danger delete-customer">Delete </a></td>

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
        $('body').on('click', '.delete-customer', function () {
            var user_id = $(this).data("id");
            $.ajax({
                type: "GET",
                url: "{{ url('deletecustomer')}}" + '/' + user_id,
                success: function (data) {
                    $("#customer_id_" + user_id).fadeOut(500);
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
                        "sSortAscending": ": Activate to sort column ascending",
                        "sSortDescending": ": Activate to sort column descending"
                    }
                }
            }
        );
    </script>
@endsection
