@extends('layouts.master')
@section('styles')


@endsection
@section('content')
    <div class="card-body">
        <h5 class="card-title">المنتجات</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>اسم اللعبة</th>
                    <th>اللاعبين</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>

                @foreach($games as $game)
                <tr id="game_id_{{$game->id}}">
                    <td>{{$game->Name}}</td>
                    <td><a href="viewplayers/{{$game->id}}" class="btn btn-dribbble">اللاعبين</a></td>
                    <td><a href="editgame/{{$game->id}}" class="btn btn-info">تعديل</a></td>
                    <td><a href="javascript:void(0)" data-id="{{ $game->id }}" class="btn btn-danger delete-game"  >حذف </a> </td>


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
                "sProcessing":    "جاري التحميل...",
                "sLengthMenu":    "إظهار _MENU_ المدخلات",
                "sZeroRecords":   "لا يوجد سجلات مطابقة",
                "sEmptyTable":    "لا يوجد بيانات متاحة في الجدول",
                "sInfo":          "إظهار _START_ من _END_ اجمالي _TOTAL_ مدخلات",
                "sInfoEmpty":     "إظهار 0 to 0 of 0 المدخلات",
                "sInfoFiltered": '(مصفاه من _MAX_ جميع المدخلات)',
                "sInfoPostFix":   "",
                "sSearch":        'بحث:',
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "جاري التحميل...",
                "oPaginate": {
                    "sFirst":    "الأول",
                    "sLast":    "الأخير",
                    "sNext":    "التالى",
                    "sPrevious": "السابق"
                },
                "oAria": {
                    "sSortAscending":  ": تنشيط ليتم الترتيب تصاعدياً",
                    "sSortDescending": ": تنشيط حتي يتم الترتيب تنازلي"
                }
            }
        }
        );
    </script>
@endsection
