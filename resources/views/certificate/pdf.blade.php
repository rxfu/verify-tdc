<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>高校教师资格证在线验证报告</title>

    <style>
	table {
		width: 970px;
		border: 5px double #000;
	}
	table caption {
		text-align: center;
		font-size: 2em;
		line-height: 3em;
	}
	table th {
		padding: 15px 8px;
		text-align: right;
		width: 220px;
	}
	table td {
		padding: 15px 8px;
		text-align: left;
	}
    </style>
</head>
<body>
	<div>
		<table align="center" border="1" cellpadding="0" cellspacing="0">
			<caption>高校教师资格证在线验证报告</caption>
			<tr>
				<th>证书编号</th>
				<td>{{ $certificate->gpzh }}</td>
				<th>证书批次</th>
				<td>{{ $certificate->time }}</td>
			</tr>
			<tr>
				<th>姓名</th>
				<td>{{ $certificate->xm }}</td>
				<th>身份证号</th>
				<td>{{ $certificate->sfz }}</td>
			</tr>
			<tr>
				<th>性别</th>
				<td>{{ $certificate->xb }}</td>
				<th>出生年月</th>
				<td>{{ $certificate->chn }}年{{ $certificate->chy }}月</td>
			</tr>
			<tr>
				<th>工作单位</th>
				<td colspan="3">{{ $certificate->gzdw }}</td>
			</tr>
			<tr>
				<th>高等教育学</th>
				<td>{{ $certificate->jyxgb }}</td>
				<th>高等教育心理学</th>
				<td>{{ $certificate->xlxgb }}</td>
			</tr>
			<tr>
				<th>高等教育法规概论</th>
				<td>{{ $certificate->fggb }}</td>
				<th>高等学校教师职业道德修养</th>
				<td>{{ $certificate->ddgb }}</td>
			</tr>
			<tr>
				<th rowspan="3">二维码验证</th>
				<td rowspan="3">
					{!! QrCode::size(120)->margin(0)->generate(route('verify', ['token' => $code->code])) !!}
				</td>
				<th>条码验证</th>
				<td>{{ number_format($code->code, 0, '.', ' ') }}</td>
			</tr>
			<tr>
				<th>生成日期</th>
				<td>{{ $code->created_at->format('Y年m月d日') }}</td>
			</tr>
			<tr>
				<th>有效日期</th>
				<td>{{ $code->valid_date->format('Y年m月d日') }}</td>
			</tr>
			<tr>
				<td colspan="4">说明</td>
			</tr>
		</table>
	</div>
</body>
</html>