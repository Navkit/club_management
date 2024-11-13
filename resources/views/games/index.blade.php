@extends('layouts.master')
@section('styles')


@endsection
@section('content')
    <div class="card-body">
        <h5 class="card-title">Games</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Game Name</th>
                    <th>Players</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($games as $game)
                <tr id="game_id_{{$game->id}}">
                    <td>{{$game->Name}}</td>
                    <td><a href="viewplayers/{{$game->id}}" class="btn btn-dribbble">Players</a></td>
                    <td><a href="editgame/{{$game->id}}" class="btn btn-info">Edit</a></td>
                    <td><a href="javascript:void(0)" data-id="{{ $game->id }}" class="btn btn-danger delete-game"  >Delete</a></td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{asset("assets/extra-libs/DataTables/datatables.min.js")}}"></script>
    <script>
        $('body').on('click', '.delete-game', function () {
            var user_id = $(this).data("id");
            $.ajax({
                type: "GET",
                url: "{{ url('deletegame')}}"+'/'+user_id,
                success: function (data) {
                    $("#game_id_" + user_id).fadeOut(500);
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
                "sProcessing":    "Loading...",
                "sLengthMenu":    "Show _MENU_ entries",
                "sZeroRecords":   "No matching records found",
                "sEmptyTable":    "No data available in table",
                "sInfo":          "Showing _START_ to _END_ of _TOTAL_ entries",
                "sInfoEmpty":     "Showing 0 to 0 of 0 entries",
                "sInfoFiltered": '(filtered from _MAX_ total entries)',
                "sInfoPostFix":   "",
                "sSearch":        'Search:',
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Loading...",
                "oPaginate": {
                    "sFirst":    "First",
                    "sLast":    "Last",
                    "sNext":    "Next",
                    "sPrevious": "Previous"
                },
                "oAria": {
                    "sSortAscending":  ": activate to sort column ascending",
                    "sSortDescending": ": activate to sort column descending"
                }
            }
        }
        );
    </script>
@endsection
