<html>
	<head>
		<title>Kết quả đăng ký</title>
	</head>
	<body>
		<?php
			// Tạo kết nối với cơ sở dữ liệu
			$conn = new mysqli("localhost", "root", "", "myclass");
			// Đọc dữ liệu từ biểu mẫu
			$username = $_POST["username"];					// bắt buộc phải có
			$password = $_POST["password"];		// bắt buộc phải có
			$password1 = $_POST["password1"];	// bắt buộc phải có
			$email = $_POST["email"];
			$birthday = $_POST["birthday"];
			$gender = $_POST["gender"];
			$nationality = $_POST["nationality"];
			// Kiểm tra các dữ liệu bắt buộc phải có
			if (($username != "") && ($password != "") && ($password1 != "")) {
				// Kiểm tra 2 mật khẩu có trùng nhau hay không
				if ($password == $password1) {
					// Kiểm tra xem tên đăng nhập đã có trog cơ sở dữ liệu chưa
					$sql = "SELECT UserID FROM Users WHERE Username=" . $username;
					$result = $conn -> query($sql);
					if ($result -> num_rows == 0) {
						// Nếu tên đăng nhập chưa có thì lưu vào trong cơ sở dữ liệu
						$sql = "INSERT INTO `users` (`Username`, `Password`, `Birthday`, `Gender`, `Nationality`) VALUES (\"$username\", \"". md5($password) . "\", $birthday, $gender, \"$nationality\")";
						if ($conn -> query($sql) === TRUE) {
							echo "$username đã được lưu vào cơ sở dữ liệu!";	
						} else {
							echo "Lỗi " . $conn -> error;
						}
					} else {
						echo "$username đã có trong cơ sở dữ liệu!";
					}
				} else {
					echo "Hai mật khẩu chưa trùng nhau!";
				}
			} else {
				echo "Bạn chưa nhập các phần bắt buộc!";
			}
		?>
	</body>
</html>