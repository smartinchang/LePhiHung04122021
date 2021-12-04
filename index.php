<html>
	<head>
		<title>Đăng ký thành viên</title>
	</head>
	<body>
		<form name="signup_form" action="signup.php" method="POST">
			<table>
				<tr>
					<td>Tên đăng nhập</td>
					<td><input type="text" name="username"> (*)</td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" name ="password"> (*)</td>
				</tr>
				<tr>
					<td>Nhập lại mật khẩu</td>
					<td><input type="password" name ="password1"> (*)</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name ="email"><br></td>
				</tr>
				<tr>
					<td>Ngày sinh</td>
					<td><input type="date" name ="birthday"></td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>
						<select name="gender">
							<option value=0>Nam</option>
							<option value=1>Nữ</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Quốc tịch</td>
					<td><input type="text" name ="nationality"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button type="submit" value="Submit">Đăng nhập</button></td>
				</tr>
			
			<table>
		</form>
	</body>
</html>