@extends('layouts.master')
@section('styles')


@endsection
@section('content')
    <div class="card-body">
        <h5 class="card-title">اللاعبين الخاصيين بالعضوية رقم  {{$card->id}}</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>اسم المرافق</th>
                    <th>صورة المرافق</th>
                    <th>صورة تحقيق الشخصية</th>
                    <th>عضوية المرافق</th>
                    <th>حذف</th>

                </tr>
                </thead>
                <tbody>
                @foreach($card->partners as $partner)
                    <tr id="partner_id_{{$partner->id}}">
                        <td>{{$partner->Name}}</td>
                        <td><img src='{{asset("imgs/$partner->Img")}}' height="100px" alt=""></td>
                        <td><img src='{{asset("imgs/$partner->NIDImg")}}' height="100px" alt=""></td>
                        <td><a href="/showcard/{{$partner->Card_ID}}" class="btn btn-info">عضوية اللاعب</a></td>
                        <td><a href="javascript:void(0)" data-id="{{ $partner->id }}" class="btn btn-danger delete-game"  >حذف </a> </td>

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
            debugger
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
