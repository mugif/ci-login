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
        <form method="POST" action="<?= base_url('auth/register') ?>">
            <input type="text" name="name" id="" placeholder="Name" autofocus value="<?= set_value('name'); ?>">
            <?= form_error('name', '<br><small>', '</small>'); ?>
            <br>
            <input type="text" name="email" id="" placeholder="Email" value="<?= set_value('email'); ?>">
            <?= form_error('email', '<br><small>', '</small>'); ?>
            <br>
            <input type="password" name="password" id="" placeholder="Password">
            <?= form_error('password', '<br><small>', '</small>'); ?>
            <br>
            <input type="password" name="password2" id="" placeholder="Confirm Password">
            <br>
            <input type="submit" value="SUBMIT"><br>
        </form>
    </div>
</body>

</html>