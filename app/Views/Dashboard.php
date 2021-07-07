<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="dashboard">

        <h1>Welcome To my Blog <?= session()->get("username"); ?></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sit ducimus reprehenderit, sed ipsum tempora quo velit molestiae temporibus voluptatum ad harum delectus eaque culpa officiis modi eum ratione excepturi?</p>


        <button id="btn">Logout</button>
    </div>



    <script>
        const button = document.getElementById("btn");



        const href = "<?= base_url(); ?>/Auth/logout";

        button.addEventListener('click', function() {
            document.location.href = href;
        })

        // button.addEventListener("click", function() {
        //     document.location.href = location;
        // })
    </script>
</body>

</html>