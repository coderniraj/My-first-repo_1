<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Flipping Cards </title>
    <link rel="stylesheet" href="view.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.card-main-container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}

.card-main {
    height: 200px;
    width: 22rem;
    border-radius: 1rem;
    position: relative;
    transform-style: preserve-3d;
    justify-content: center;
    transition: all .4s ease;
    align-items: center;
    margin: 1rem;
}

.card-main:hover {
    transform: rotateY(180deg);
}

.front-card {
    width: 100%;
    height: 100%;
    position: absolute;
    border-radius: 1rem;
    backface-visibility: hidden;
    background-image: linear-gradient(to top right, rgb(228, 4, 4), rgb(166, 0, 212));
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 5px;
}

.back-card {
    width: 100%;
    height: 100%;
    position: absolute;
    border-radius: 1rem;
    backface-visibility: hidden;
    transform: rotateY(180deg);
    background-color: rgb(239, 15, 15);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.front-card img {
    margin-bottom: 1.2rem;
    width: 15%;
}

.front-card p {
    margin-top: 1rem;
    font-size: .9rem;
    color: white;
}

h2 {
    color: white;
    font-weight: bold;
}

.btn {
    margin-top: 1rem;

}

a {
    text-decoration: none;
    text-transform: uppercase;
    color: white;
    font-size: 18px;
    font-weight: bold;
}

.back-light {
    color: #fff;
}
    </style>
</head>

<body style="background-color: aqua;">
    <h3 style="text-align: center; text-width: 300px;">Hotel Room</h3>
    <div class="card-main-container">
        <div class="card-main">
            <div class="front-card">
                <img src="home.jpg" alt="" style="height: 50%;width: 50%;">
                <h2>Ekta</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore repellat quis.</p>
            </div>
            <div class="back-card">
                <h2 class="back-light">Thank You!</h2>
                <p class="back-light"> Visited once again </p>
                <p class="btn"><a class="back-light" href="#">Know More</a></p>
            </div>
        </div>
        <div class="card-main">
            <div class="front-card">
                <img src="home.jpg" alt="" style="height: 50%;width: 50%;">
                <h2>Ekta</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore repellat quis.</p>
            </div>
            <div class="back-card">
                <h2 class="back-light">Thank You!</h2>
                <p class="back-light"> Visited once again </p>
                <p class="btn"><a class="back-light" href="#">Know More</a></p>
            </div>
        </div>
        <div class="card-main">
            <div class="front-card">
                <img src="home.jpg" alt="" style="height: 50%;width: 50%;">
                <h2>Ekta</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore repellat quis.</p>
            </div>
            <div class="back-card">
                <h2 class="back-light">Thank You!</h2>
                <p class="back-light"> visited once again </p>
                <p class="btn"><a class="back-light" href="#">Know More</a></p>
            </div>
        </div>
        <div class="card-main-container">
            <div class="card-main">
                <div class="front-card">
                    <img src="home.jpg" alt="" style="height: 50%;width: 50%;">
                    <h2>Ekta</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore repellat quis.</p>
                </div>
                <div class="back-card">
                    <h2 class="back-light">Thank You!</h2>
                    <p class="back-light"> Visited once again </p>
                    <p class="btn"><a class="back-light" href="#">Know More</a></p>
                </div>
            </div>
            <div class="card-main">
                <div class="front-card">
                    <img src="home.jpg" alt="" style="height: 50%;width: 50%;">
                    <h2>Ekta</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore repellat quis.</p>
                </div>
                <div class="back-card">
                    <h2 class="back-light">Thank You!</h2>
                    <p class="back-light"> Visited once again </p>
                    <p class="btn"><a class="back-light" href="#">Know More</a></p>
                </div>
            </div>
            <div class="card-main">
                <div class="front-card">
                    <img src="home.jpg" alt="" style="height: 50%;width: 50%;">
                    <h2>Ekta</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore repellat quis.</p>
                </div>
                <div class="back-card">
                    <h2 class="back-light">Thank You!</h2>
                    <p class="back-light"> visited once again </p>
                    <p class="btn"><a class="back-light" href="#">Know More</a></p>
                </div>
            </div>
    </div>
</body>
</html>