<!DOCTYPE html>
<html>
<head>
	<title>高校教师资格证在线验证报告</title>
</head>
<body>
	<table border="1" cellpadding="0" cellspacing="0" align="center">
		<caption>
			<h3>高校教师资格证在线验证报告</h3>
		</caption>
		<tr>
			<th>姓名</th>
			<td colspan="3">{{ $certificate->xm }}</td>
			<td rowspan="3">暂无照片数据</td>
		</tr>
		<tr>
			<th>性别</th>
			<td>{{ $certificate->xb }}</td>
			<th>身份证号</th>
			<td>{{ $certificate->sfz }}</td>
		</tr>
	</table>
</body>
</html>