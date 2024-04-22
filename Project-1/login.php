<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="email"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<?php

if (isset($_POST['submit'])){
    require_once 'dbkoneksi.php';

    $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $user-> execute([
        $_POST['email'], $_POST['password']
    ]);

    $count = $user->rowCount(); 

    if ($count > 0) {
        session_start();

        $_SESSION['user'] = $user -> fetch();
        // echo "<script>window.location='index.php'</script"; cara JS
        header("location:index.php");
    } else { //jika gagal login
        // echo "script>window.location='login.php'</script>"; Cara JS
        header("location:login.php");
    }
}


    
?>

<body>
    <div class="container">
        <h1>Login Form</h1>
        <form action="" method="POST">
            <div>
                
                <input type="email" name="email" placeholder="Email address" required>
            </div>
            <br>
            <div>
                
                <input type="password" name="password" placeholder="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>