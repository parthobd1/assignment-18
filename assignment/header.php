<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

<?php
function is_active($check){
    $requested_uri = $_SERVER['REQUEST_URI'];
    $search = strpos($requested_uri, $check);

    if ($search !== false) {
        return 'active';
    }
    return ''; 
}


$menus = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'services.php' => 'Services',
    'gallery.php' => 'gallery',
    'blog.php' => 'Blog',
    'contact.php' => 'Contact',
];
?>

<div class="site-main-wrapper">
    <header>
        <div class="container">
            <nav id="main-nav" class="flex items-center justify-between">
                <div class="branding">
                    <a href="index.php"> <img src="asset/img/logo.svg" alt=""> </a>
                </div>
                <div class="menu-itmes">
                    <ul>
                        <?php foreach($menus as $key => $value) : ?>
                            <li>
                                <a class="<?php echo is_active($key); ?>" href="<?php echo $key; ?>">
                                    <?php echo $value; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul> 
                </div>
            </nav>
        </div>
    </header>
</div>
