@extends('layouts.master')
@section('styles')


@endsection
@section('content')
    <div class="card-body">
        <h5 class="card-title">Players for the Game {{$game->Name}}</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Player Name</th>
                    <th>Player Image</th>
                    <th>ID Verification Image</th>
                    <th>Games</th>
                    <th>Player Membership</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($game->players as $player)
                    <tr id="player_id_{{$player->id}}">
                        <td>{{$player->Name}}</td>
                        <td><img src='{{asset("imgs/$player->Img")}}' height="100px" alt=""></td>
                        <td><img src='{{asset("imgs/$player->NIDImg")}}' height="100px" alt=""></td>
                        <td><a href="/showplayer/{{$player->id}}" class="btn btn-info">Games</a></td>
                        <td><a href="/showcard/{{$player->Card_ID}}" class="btn btn-info">Player Membership</a></td>
                        <td><a href="javascript:void(0)" data-id="{{ $player->id }}" class="btn btn-danger delete-game">Delete</a></td>
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
            var player_id = $(this).data("id");
            var game_id = {{$game->id}};
            $.ajax({
                type: "GET",
                url: "{{ url('/deleteplayergame') }}" + '/' + player_id + '/' + game_id,
                success: function (data) {
                    $("#player_id_" + player_id).fadeOut(500);
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
        });
    </script>
@endsection
