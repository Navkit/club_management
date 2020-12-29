@extends('layouts.master')
@section('styles')


@endsection
@section('content')
    <div class="card-body">
        <h5 class="card-title">الذبائن</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>رقم مسلسل</th>
                    <th>رتبه/درجه</th>
                    <th>الاسم</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr id="customer_id_{{$customer->id}}">
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->rank->name}}</td>
                        <td>{{$customer->name}}</td>
                        <td><a href="editcustomer/{{$customer->id}}" class="btn btn-info">تعديل</a></td>
                        <td><a href="javascript:void(0)" data-id="{{ $customer->id }}"
                               class="btn btn-danger delete-customer">حذف </a></td>

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
