<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta HTTP-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Profile Card </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="card.css">
</head>
<script>
    const toggleHeart = document.getElementById('heart');
    toggleHeart.addEventListener('click', () => {
        toggleHeart.classList.toggle('fa-solid')
        if (toggleHeart.classList == 'fa-regular fa-heart fa-solid') {
            toggleHeart.style.color = 'red'
        }
        else {
            toggleHeart.style.color = 'white'
        }
    })
</script>

<body>
    <div class="card-container">
        <div class="cart-top-navigation">
            <li>
                <i class="fa-solid fa-arrow-left"></i>
            </li>
            <ul>
                <i id="heart" class="fa-regular fa-heart"></i>
                <i class="fa-solid fa-bars"></i>
            </ul>
        </div>
        <div class="user-image">
            <!--  show on your profile card-->
            <img src="ekta.jpg" alt="">
        </div>
        <h2 class="user-name">Ekta Tiwari</h2>
        <p class="about-user">My name is Ekta Tiwari and here i show about my project . check to know more about room information.</p>
        <button class="hire-me">get</button>

        <div class="social-container">
            <div class="social-item">
                <li class="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </li>
                <span class="followers">Instagram</span>
            </div>
            <div class="social-item">
                <li class="youtube">
                    <i class="fa-brands fa-youtube"></i>
                </li>
                <span class="followers">You tube</span>
            </div>
            <div class="social-item">
                <li class="twitter">
                    <i class="fa-brands fa-twitter"></i>
                </li>
                <span class="followers">Twitter</span>
            </div>
        </div>
    </div>
</body>
</html>
