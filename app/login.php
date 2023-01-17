<html>
    <head>

    </head>
    <body>
        <h1>Login</h1>
        <form action="#" method="post">
            <p><label>Username : </label><input name="username" type="text"></p>
            <p><label>Password : </label><input name="password" type="password"></p>
            <p><button name="submit">Submit</button></p>
        </form>

       <?php
       //tambahkan session
        include('koneksi.php');
        $koneksi = new koneksi;
        

       if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $password = $_POST['password'];
            $data=$koneksi->get_user($username, $password);
           if($data->num_rows>0){
               header("location:home.php");
            } else
                echo "Username Password salah";

         
            
        }


?>
    </body>
</html>