<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Percobaan</title>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
</head>

<body>

    <!-- notif error -->
    <?php if (session()->getFlashdata("login")) : ?>

        <div class="notif-error">
            <p><?= session()->getFlashdata("login"); ?></p>
        </div>

    <?php endif; ?>

    <!-- Halaman Login -->
    <div class="halaman-login">
        <form action="<?= base_url(); ?>/Auth/verification" method="POST">
            <h1>Login</h1>
            <ul>
                <li>
                    <label for="Username">Username</label>
                    <input type="text" name="Username" id="Username">
                </li>
                <li>
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password">
                </li>

                <li>
                    <button type="submit">Login</button>
                </li>
            </ul>
        </form>

    </div>



</body>

</html>