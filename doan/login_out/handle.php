<?php include('database.php');

if ($_SERVER['REQUEST_METHOD'] ===  'POST') {
    if (isset($_POST['mode'])){
        $mode = $_POST['mode'];
        if ($mode == 'sign-in'){
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
        
            $check_sql = "SELECT * FROM user_account where username =? or email=? ";
            $stmt = $conn->prepare($check_sql);
            $stmt->bind_param("ss",$username,$email);
            $stmt->execute();
            $result= $stmt->get_result();
        
            if ($result->num_rows > 0){
                echo "Username or Email already exists";
            }
            else{
                $insert_sql = "insert into user_account (name, username, password, email, phone_number) values (?,?,?,?,?)";
                $stmt = $conn->prepare($insert_sql);
                $stmt->bind_param("sssss",$name,$username,$password,$email,$phone_number);
                if($stmt->execute()){
                    echo "Đăng ký thành công!";
                }
                else{
                    echo "Lỗi: " . $stmt->error;
                }
            }
            $stmt->close();
        }
        elseif($mode == 'sign-up'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $check_sql = "SELECT * from user_account where username=?";
            $stmt = $conn->prepare($check_sql);
            $stmt->bind_param("s",$username);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0){
                $user = $result->fetch_assoc();
                if (password_verify( $password,$user['password'])){
                    echo "Đăng nhập thành công!";
                }
                else{
                    echo "Sai mật khẩu!";
                }
            }
            else{
                echo "Tài khoản không tồn tại!";
            }
            $stmt->close();
        }
        else{
            echo "Invalid mode";
        }
    }
    $conn->close();
}
else{
    echo "Phương thức không hợp lệ!";
}