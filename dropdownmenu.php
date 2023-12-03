<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DropDown Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="drop.css">
</head>
<script>
        const dropBtn = document.getElementById('dropdown')
dropBtn.addEventListener('click', function () {
    console.log('clicked');
    const open = document.querySelector('.toggle')
    open.classList.toggle('active')
})
</script>
<body>
    <div class="navbar">
        <div class="nav-left">
            <h2>Ekta</h2>
        </div>
        <div class="nav-right">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#pages">Pages</a></li>
                <label for="service"></label>
                <li class="services" id="dropdown">
                    <a href="#services">Services <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="toggle">
                        <li><a href="#"> room  </a></li>
                        <li><a href="#"> home</a></li>
                        <li><a href="#"> vila </a></li>
                        <li><a href="#"> apartment</a></li>
                    </ul>
                </li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </div>
</body>


</html>
