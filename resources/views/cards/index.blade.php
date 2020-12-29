@extends('layouts.master')
@section('styles')


@endsection
@section('content')
    <div class="card-body">
        <h5 class="card-title">العضويات</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>اسم ولي الأمر</th>
                    <th>الجهة</th>
                    <th>رقم التليفون</th>
                    <th>رقم تحقيق الشخصية</th>
                    <th>الحالة</th>
                    <th>عرض البيانات</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>

                @foreach($cards as $card)
                    <tr id="card_id_{{$card->id}}">
                        <td>{{$card->MainMemberName}}</td>
                        <td>{{$card->Type}}</td>
                        <td>{{$card->Mobile}}</td>
                        <td>{{$card->NationalID}}</td>
                        <td>@if($card->State==1) <a class="fas fa-check-circle fa-lg" style="color: green"></a>
                            @else  <a class=" fas fa-times-circle fa-lg" style="color: red"></a> @endif</td>
                        <td><a href="showcard/{{$card->id}}" class="btn btn-cyan">عرض البيانات</a></td>
                        <td><a href="editcard/{{$card->id}}" class="btn btn-info">تعديل</a></td>
                        <td><a href="javascript:void(0)" data-id="{{ $card->id }}"
                               class="btn btn-danger delete-card">حذف </a></td>


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
                    "sProcessing": "جاري التحميل...",
                    "sLengthMenu": "إظهار _MENU_ المدخلات",
                    "sZeroRecords": "لا يوجد سجلات مطابقة",
                    "sEmptyTable": "لا يوجد بيانات متاحة في الجدول",
                    "sInfo": "إظهار _START_ من _END_ اجمالي _TOTAL_ مدخلات",
                    "sInfoEmpty": "إظهار 0 to 0 of 0 المدخلات",
                    "sInfoFiltered": '(مصفاه من _MAX_ جميع المدخلات)',
                    "sInfoPostFix": "",
                    "sSearch": 'بحث:',
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "جاري التحميل...",
                    "oPaginate": {
                        "sFirst": "الأول",
                        "sLast": "الأخير",
                        "sNext": "التالى",
                        "sPrevious": "السابق"
                    },
                    "oAria": {
                        "sSortAscending": ": تنشيط ليتم الترتيب تصاعدياً",
                        "sSortDescending": ": تنشيط حتي يتم الترتيب تنازلي"
                    }
                }
            }
        );
    </script>
@endsection
