<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Clients Review UI </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ourser.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.container {
    width: 100%;
    height: 100vh;
    color: white;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    background-color: #090921;
}

h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
    text-align: center;
}

.description {
    text-align: center;
    width: 43%;
}

.clientImage {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.clientImage span {
    margin-left: 10px;
}

.clientImage img {
    width: 40px;
}

.reviewSection {
    padding: 1rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
}

.reviewItem {
    width: 300px;
    padding: 10px;
    margin: 1rem;
    cursor: pointer;
    border-radius: 10px;
    background-color: #10102a;
    border: 1px solid #10102a;
    transition: all .2s linear;
}

.reviewItem:hover {
    border-color: aqua;
    transform: scale(1.01);
    background-color: #090921;
    box-shadow: 0 0px 5px 0px #cbc0c0;
}

.top {
    margin-bottom: 1rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.top ul {
    display: flex;
    list-style: none;
}

.top ul li {
    padding-left: 4px;
}

article p {
    font-size: 15px;
    font-weight: 100;
    margin-bottom: 1rem;
    font-family: system-ui;
}


@media screen and (max-width:700px) {
    .container {
        height: auto;
    }

    .description {
        width: 90%;
    }
}

@media screen and (max-width:375px) {
    .reviewSection {
        padding: 0;
    }

    .reviewItem {
        width: 100%;
    }

    .clientImage {
        margin-bottom: 0.6rem;
    }

    .top {
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }
}
    </style>
</head>

<body>
    <div class="container">
        <h2> Our Services </h2>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, atque? Repudiandae
            possimus asperiores hic nemo id a molestiae minus impedit!</p>
    
        <!-- Clients Review Section -->
        <div class="reviewSection">

        <!-- Clients Review-1 Section Starts from Here  -->
            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="home4.jpg" alt="">
                        <span>Ekta</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p>view</p>
                </article>
            </div>

            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="room4.jpg" alt="">
                        <span> Ekta</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p> journey</p>
                </article>
            </div>

            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="home.jpg" alt="">
                        <span>Ekta</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p>journey</p>
                </article>
            </div>
        </div>
    </div>
</body>

</html>