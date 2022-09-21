<?php 
    session_start();
    // $_SESSION['name'] = 'Jolomi';

    if($_SERVER['QEURY_STRING'] = 'noname'){
        unset($_SESSION['name']);
    }

    $name = $_SESSION['name'] ?? 'Guest';
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Box</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .pizza-img{
            padding-top: 10px;
            margin: 0 !important;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">Taiwo's Pizzeria</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="grey-text"><?php echo "Hello ". htmlspecialchars($name) ?></li>
                <li><a href="" class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>