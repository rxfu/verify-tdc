@extends('layouts.app', ['title' => '证书列表'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">证书列表</div>

                <div class="panel-body">

                </div>

                <table id="certificates-table" class="table table-hover">
                    <thead>
                        <tr>
                            <th>证书编号</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>身份证号</th>
                            <th>出生年</th>
                            <th>出生月</th>
                            <th>工作单位</th>
                            <th>教育学</th>
                            <th>心理学</th>
                            <th>教育法规</th>
                            <th>教师道德</th>
                            <th>证书时间</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>证书编号</td>
                            <td>姓名</td>
                            <td>性别</td>
                            <td>身份证号</td>
                            <td>出生年</td>
                            <td>出生月</td>
                            <td>工作单位</td>
                            <td>教育学</td>
                            <td>心理学</td>
                            <td>教育法规</td>
                            <td>教师道德</td>
                            <td>证书时间</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#certificates-table').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Chinese.json"
                },
                ajax: "{{ route('certificates.list') }}",
                columns: [
                    { data: "gpzh" },
                    { data: "xm" },
                    { data: "xb" },
                    { data: "sfz" },
                    { data: "chn" },
                    { data: "chy" },
                    { data: "gzdw" },
                    { data: "jyxgb" },
                    { data: "xlxgb" },
                    { data: "fggb" },
                    { data: "ddgb" },
                    { data: "time" }
                ]
            });
        });
    </script>
@endpush
