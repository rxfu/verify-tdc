@extends('layouts.app', ['title' => '验证证书'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">验证证书</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="GET" action="{{ route('verify') }}">
                        <div class="form-group{{ $errors->has('token') ? ' has-error' : '' }}">
                            <label for="token" class="col-md-4 control-label">验证码</label>

                            <div class="col-md-6">
                                <input id="token" type="text" class="form-control" name="token" value="{{ old('token') }}" required autofocus>

                                @if ($errors->has('token'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('token') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    验证
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
