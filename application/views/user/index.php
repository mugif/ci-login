<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    selamat datang user <?= $user['name']; ?>
    <br>
    <a href="<?= base_url('auth/logout'); ?>">Logout</a>
</body>

</html>