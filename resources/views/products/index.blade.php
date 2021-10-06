@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>

            </div>
        </div>
    </section>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <Style>

            /*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
/*===== VARIABLES CSS =====*/
:root {
  /*===== Colores =====*/
  --first-color: #F2A20C;
  --white-color: #E9EAEC;
  --dark-color: #272D40;
  --dark-color-lighten: #F2F5FF;
  /*===== Fuente y tipografia =====*/
  --body-font: 'Poppins', sans-serif;
  --h1-font-size: 1.5rem;
  --h2-font-size: 1.25rem;
  --normal-font-size: 1rem;
  --small-font-size: .875rem;
}

/*===== BASE =====*/
*, ::before, ::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
}

h1, p {
  margin: 0;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*===== CARD =====*/
.container {
  height: 80vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: var(--dark-color-lighten);
}

.card {
  width: 320px;
  height: 400px;
  background-color: var(--dark-color);
  border-radius: 1rem;
  padding: 4rem 2rem 0;
  color: var(--white-color);
  overflow-y: hidden;
  margin: 2px 2px 2px 2px;
}

.card__img {
  position: absolute;
  width: 220px;
  height: 301px;
  filter: drop-shadow(5px 10px 15px rgba(8,9,13,.4));
}

.card__data {
  transform: translateY(13.2rem);
  text-align: center;
}

.card__title {
  font-size: var(--h1-font-size);
  color: var(--first-color);
  margin-bottom: .5rem;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
}

.card__preci {
  display: inline-block;
  font-size: var(--h2-font-size);
  font-weight: 500;
  margin-bottom: 1.25rem;
}

.card__description {
  font-size: var(--small-font-size);
  text-align: initial;
  margin-bottom: 1.25rem;
  opacity: 0;
}

.card__button {
  display: block;
  width: max-content;
  padding: 1.125rem 2rem;
  background-color: var(--first-color);
  color: var(--white-color);
  border-radius: .5rem;
  font-weight: 600;
  transition: .2s;
  opacity: 0;
}

.card__button:hover {
  box-shadow: 0 18px 40px -12px rgba(242,162,12,.35);
}

.card__img, 
.card__data, 
.card__title, 
.card__preci, 
.card__description {
  transition: .5s;
}

/* Hover card effect */
.card:hover .card__img {
  transform: translate(-1.5rem, -9.5rem) rotate(-20deg);
  opacity: 40%;
}

.card:hover .card__data {
  transform: translateY(4.8rem);
  
}

.card:hover .card__title {
  transform: translateX(-2.3rem);
  margin-bottom: 0;
}

.card:hover .card__preci {
  transform: translateX(-3.8rem);
}

.card:hover .card__description, 
.card:hover .card__button {
  transition-delay: .2s;
  opacity: 1;
}

        </Style>

        <title>Responsive product card</title>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <img src="images/Halo_Infinite.png" alt="" class="card__img"> 

                <!-- <div class="card__content">  -->
                     <div class="card__data">
                         <h1 class="card__title">Halo Infinite</h1>
                         <span class="card__preci">&#8369; 2,399.75</span>
                         <p class="card__description">Pre-Order Halo Infinite<br> Developer: 343 Industries</p>
                         <a href="#" class="card__button">Pre-Order Now</a>
                     </div>


                <!-- </div> -->
            </div>

            <div class="card">
                <img src="images/b4b.jpg" alt="" class="card__img"> 

                <!-- <div class="card__content">  -->
                     <div class="card__data">
                         <h1 class="card__title">Back 4 Blood</h1>
                         <span class="card__preci">&#8369; 3,036.25 </span>
                         <p class="card__description">Buy Back 4 Blood<br> Developer: Turtle Rock Studios</p>
                         <a href="#" class="card__button">Buy Now</a>
                     </div>


                <!-- </div> -->
            </div>

            <div class="card">
                <img src="images/deathloop.jpg" alt="" class="card__img"> 

                <!-- <div class="card__content">  -->
                     <div class="card__data">
                         <h1 class="card__title">Deathloop</h1>
                         <span class="card__preci">&#8369; 2,599.25 </span>
                         <p class="card__description">Buy Deathloop<br> Developer: Arkane Studios</p>
                         <a href="#" class="card__button">Buy Now</a>
                     </div>


                <!-- </div> -->
            </div>
            <div class="card">
                <img src="images/monsterhunter.jpg" alt="" class="card__img"> 

                <!-- <div class="card__content">  -->
                     <div class="card__data">
                         <h2 class="card__title">MH: Rise</h2>
                         <span class="card__preci">&#8369; 2,700.</span>
                         <p class="card__description">Buy Monster Hunter Rise <br> Developer: Capcom</p>
                         <a href="#" class="card__button">Buy Now</a>
                     </div>


                <!-- </div> -->
            </div>

        </div>
    </body>
</html>

@endsection

