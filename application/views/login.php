<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            padding: 40px;
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            background: #d1d1d1;
        }

        .box input {
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="">
            <input type="text" name="email" id="" placeholder="Email" autofocus>
            <input type="password" name="password" id="" placeholder="Password">
            <input type="submit" value="SUBMIT"><br>
            <a href="<?= base_url('auth/register') ?>">Register</a>
        </form>
    </div>
</body>

</html>