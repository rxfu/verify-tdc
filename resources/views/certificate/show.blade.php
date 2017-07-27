@extends('layouts.app', ['title' => '证书信息'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">证书信息</div>
                <div class="panel-body">
                    <dl class="row">
                        <dt class="col-sm-4 text-right">证书编号</dt>
                        <dd class="col-sm-8">{{ $certificate->gpzh }}</dd>
                        <dt class="col-sm-4 text-right">姓名</dt>
                        <dd class="col-sm-8">{{ $certificate->xm }}</dd>
                        <dt class="col-sm-4 text-right">性别</dt>
                        <dd class="col-sm-8">{{ $certificate->xb }}</dd>
                        <dt class="col-sm-4 text-right">身份证号</dt>
                        <dd class="col-sm-8">{{ $certificate->sfz }}</dd>
                        <dt class="col-sm-4 text-right">出生年月</dt>
                        <dd class="col-sm-8">{{ $certificate->chn . $certificate->chy }}</dd>
                        <dt class="col-sm-4 text-right">工作单位</dt>
                        <dd class="col-sm-8">{{ $certificate->gzdw }}</dd>
                        <dt class="col-sm-4 text-right">高等教育学</dt>
                        <dd class="col-sm-8">{{ $certificate->jyxgb }}</dd>
                        <dt class="col-sm-4 text-right">高等教育心理学</dt>
                        <dd class="col-sm-8">{{ $certificate->xlxgb }}</dd>
                        <dt class="col-sm-4 text-right">高等教育法规概论</dt>
                        <dd class="col-sm-8">{{ $certificate->fggb }}</dd>
                        <dt class="col-sm-4 text-right">高等学校教师职业道德修养</dt>
                        <dd class="col-sm-8">{{ $certificate->ddgb }}</dd>
                    </dl>

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-4">
                            <a href="{{ route('report') }}" class="btn btn-primary" role="button">生成验证报告</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
