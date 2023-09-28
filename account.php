<?php
    include('header.php');
?>
<link rel="stylesheet" href="styles/style.css">
<!----account-page--------->

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/login.jpg" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container ">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        
                        <hr id="Indicator">
                    </div>
                    <form id="RegForm" action="account.php" method="POST">
                        <input type="text" name="user_name" placeholder="Username"> 
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" name="register" class="btn">Register</button>
                     </form>
                     <form id="LoginForm" action="account.php" method="POST">
                       <input type="text" name="user_name"placeholder="Username"> 
                       <input type="password" name="password"placeholder="Password">
                       <button type="submit" name="login" class="btn">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-------js for toggle form------->
<script>
var LoginForm = document.getElementById("LoginForm");
var RegForm = document.getElementById("RegForm");
var Indicator = document.getElementById("Indicator");
   
   function register(){
       RegForm.style.transform = "translateX(0px)";
       LoginForm.style.transform = "translateX(0px)";
       Indicator.style.transform = "translateX(100px)";
   }

   function login(){
       RegForm.style.transform = "translateX(300px)";
       LoginForm.style.transform = "translateX(300px)";
       Indicator.style.transform = "translateX(0px)";
   }

</script>
<?php
    if(isset($_POST["register"])){
        $user_name = $_POST["user_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        if (!empty($user_name) && !empty($password) && !empty($email)) {
            $data = [
                'user_name' => $user_name,
                'password' => $password,
                'email' => $email,
            ];
    
            $user->register($data);
            echo '<div class="alert alert-success" role="alert">Registration Successfull</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">Please fill all the fields</div>';
        }
    
    }
    if(isset($_POST['login'])) {
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        $user = $user->login($_POST['user_name'], $_POST['password']);
        if (is_array($user) && $user) {
                $_SESSION['id'] = $user[0]['user_id'];
                $_SESSION['user_name'] = $user[0]['user_name'];
                $_SESSION['loggedin'] == true;
                echo '<div class="alert alert-success" role="alert">Login Successfull</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">Login Failed</div>';
        }
        
    }
    include('footer.php');
?>