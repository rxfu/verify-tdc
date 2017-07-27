@extends('layouts.app', ['title' => '查询证书'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">查询证书</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('query') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('cert_id') ? ' has-error' : '' }}">
                            <label for="cert_id" class="col-md-4 control-label">证书编号</label>

                            <div class="col-md-6">
                                <input id="cert_id" type="text" class="form-control" name="cert_id" value="{{ old('cert_id') }}" required autofocus>

                                @if ($errors->has('cert_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cert_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('card_id') ? ' has-error' : '' }}">
                            <label for="card_id" class="col-md-4 control-label">身份证号</label>

                            <div class="col-md-6">
                                <input id="card_id" type="text" class="form-control" name="card_id" required>

                                @if ($errors->has('card_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('card_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    查询
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
