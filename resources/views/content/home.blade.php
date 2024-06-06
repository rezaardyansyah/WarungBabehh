<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WaroengBabeh </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="png" href="../asset/img/babe.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
}
.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-image: url('../asset/img/cover2.jpg');
    opacity: 0.5;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
}

.hero::after {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 30%;
    bottom: 0;
    background: linear-gradient(0deg, rgba(1, 1, 3, 1) 8%,
    rgba(255, 255, 255, 0) 55%);
    line-height: 1.2;
}

.hero .content {
    background-color: rgba(157, 41, 41, 0.489);
    text-align: left;
    padding: 2rem 7%;

}

.hero .content h2 {
    font-size: 2.9rem;
    color: #FFFFFF;
    font-style: italic;
    text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
}

.hero .content h2 span{
    color: rgb(255, 238, 0);
    font-style: italic;
}

.hero .content h3 {
    font-family: Calibri;
    color: #FFFFFF;
    font-size: 1.5rem;
    text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
}

img {
    height: 25rem;
    width: 35rem;
    text-align: left;
    padding: 2rem 7%;
    max-width: 60rem;
}

.home {
    min-height: 100vh;
    align-items: center;
    opacity: 0.5;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
}

.home::after{
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 30%;
    bottom: 0;
    background: linear-gradient(0deg, rgba(1, 1, 3, 1) 8%,
    rgba(255, 255, 255, 0) 55%);
    line-height: 1.2;
}

.home .top-list-di-waroeng-babe {
    margin: 0 11px 87px 0;
    display: inline-block;
    text-align: center;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 48px;
    color: #fdfbfb;
  }

  .container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    transition: transform 0.3s ease;
    margin: 20px;
    margin-left: 30px; 
    margin-right: 30px; 
}

.container:hover {
    transform: translateY(-10px);
}

.container img {
    position: center;
    border-radius: 100%;
    width: 190px;
    height: 200px;
    object-fit: cover;
}

.container-1 {
    padding: 15px;
    text-align: center;
}

.dish-name {
    font-size: 1.5em;
    margin: 10px 0;
    color: #333;
}

.description {
    font-size: 1em;
    color: #666;
    margin-bottom: 15px;
}

.rating {
    font-size: 1em;
    color: #ffb400;
}

.rating i {
    margin-right: 5px;
}

  .home .container-1 {
    margin: 3px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 20px;
    color: #FAFF00;
  }
  .home .container-2 {
    margin-bottom: 5px;
    display: flex;
    flex-direction: row;
    align-self: flex-start;
    width: fit-content;
    box-sizing: border-box;
  }

  .home .container-11 {
    border-radius: 40px;
    background: #9F9090;
    position: relative;
    margin-right: 93px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-left: 25px;
    width: 300px;
    box-sizing: border-box;
  }

  .home .container-2 {
    margin: 3px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 20px;
    color: #FAFF00;
  }
  .home .container-16 {
    margin: 0 116.8px 4px 0;
    display: flex;
    flex-direction: row;
    width: fit-content;
    box-sizing: border-box;
  }

  .home .container-8 {
    border-radius: 40px;
    background: #9F9090;
    position: relative;
    margin: 48px 0 35px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 119px 0 78px 0;
    width: 300px;
    height: fit-content;
    box-sizing: border-box;
  }
  .home .container-4 {
    display: flex;
    flex-direction: row;
    width: fit-content;
    box-sizing: border-box;
  }
  .home .container-9 {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-sizing: border-box;
  }

.home .mask-group {
  border-radius: 85px;
  position: absolute;
  left: 252px;
  top: 229px;
  width: 170px;
  height: 170px;
}
.home .mask-group-1 {
  border-radius: 111px;
  position: absolute;
  left: 50%;
  top: 177px;
  translate: -50% 0;
  width: 222px;
  height: 222px;
}
.home .mask-group-2 {
  border-radius: 85px;
  position: absolute;
  top: 229px;
  right: 241px;
  display: flex;
  width: 170px;
  height: 170px;
  box-sizing: border-box;
}

.container-13 {
    background-color: #333;
    color: white;
    padding: 20px;
    margin: 20px;
    border-radius: 10px;
}

.sejarah-waroeng-babe {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 10px;
}

.waroeng-babe-berdiri-sejak-tahun-1995 {
    font-size: 18px;
    line-height: 1.6;
}

.jl-serayu-no-48-kota-madiun {
    font-size: 24px;
    margin-bottom: 10px;
}

.container-12 {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.line-1 {
    flex: 1;
    height: 1px;
    background-color: white;
    margin-right: 10px;
}

.sosial-media-waroeng-babe {
    font-size: 24px;
    text-align: right;
    margin-right: 20px;
}

.whats-app-logo {
    width: 100px;
    height: 100px;
    background: url('../asset/img/wa.png') no-repeat center center;
    background-size: contain;
    float: right; 
    margin-top: 5px; 
    margin-right: 20px;
}

.container-13, .container-6 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
  .container-6 {
    margin: 0 93px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-self: flex-start;
    width: 1245px;
  }
  .container-6  .container-3 {
    position: relative;
    display: flex;
    flex-direction: column;
  }

  .menu-1 .logo-babe-2 {
    background: url('../assets/images/logo_babe_2.png') 50% / cover no-repeat;
    width: 205px;
    height: 80px;
  }
  .menu-1 .home {
    margin: 17px 0 34px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 500;
    font-size: 24px;
    color: #FFFFFF;
  }
  .menu-1 .menu {
    margin: 17px 0 34px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 500;
    font-size: 24px;
    color: #FFFFFF;
  }
  .menu-1 .logout {
    margin: 17px 0 34px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 500;
    font-size: 24px;
    color: #FFFFFF;
  }
  .menu-1 .container-1 {
    margin-bottom: 68px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 1550px;
    box-sizing: border-box;
  }
  .menu-1 .home-1 {
    margin-right: 11.4px;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 500;
    font-size: 24px;
    color: #9F9090;
  }
  .menu-1 .box {
    border-radius: 1px;
    margin: 5px 10px 0 0;
    width: 16px;
    height: 24px;
  }
  .menu-1 .menu-1 {
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 500;
    font-size: 24px;
    color: #FFFFFF;
  }
  .menu-1 .container-9 {
    margin-bottom: 34px;
    display: flex;
    flex-direction: row;
    align-self: flex-start;
    width: fit-content;
    box-sizing: border-box;
  }
  .menu-1 .pilih-pesananmu-disini {
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 48px;
    color: #FFFFFF;
  }
  .menu-1 .container-16 {
    background: #000000;
    position: relative;
    margin: 0 22px 34px 0;
    display: flex;
    flex-direction: column;
    padding: 44px 96.5px 58px 93px;
    width: fit-content;
    box-sizing: border-box;
  }
  .menu-1 .makanan-berat {
    margin: 0 93px 109px 93px;
    display: inline-block;
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 40px;
    color: #000000;
  }
  .menu-1 .star-2 {
    margin-right: 12.9px;
    width: 28px;
    height: 28px;
  }
  .menu-1 .container-7 {
    margin: 3px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 20px;
    color: #FAFF00;
  }
  .menu-1 .container-6 {
    margin: 0 156.7px 4px 0;
    display: flex;
    flex-direction: row;
    align-self: center;
    width: fit-content;
    box-sizing: border-box;
  }
  .menu-1 .rendang-daging-sapi {
    margin: 0 0.4px 14px 0.4px;
    display: inline-block;
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 20px;
    color: #FFFFFF;
  }
  .menu-1 .dimasak-dengan-matang-hingga-menciptakan-daging-dengan-tekstur-yang-empuk {
    margin: 0 0.2px 11px 0.2px;
    display: inline-block;
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 15px;
    color: #FFFFFF;
  }
  .menu-1 .rp-20000 {
    margin: 1px 9.5px 4px 0;
    display: inline-block;
    width: 197.7px;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 16px;
    color: #FFFFFF;
  }
  .menu-1 .container {
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 16px;
    color: #FFFFFF;
  }
  .menu-1 .container-3 {
    border-radius: 80px;
    background: #FFA800;
    position: relative;
    display: flex;
    padding: 2px 8.2px 3px 8.2px;
    box-sizing: border-box;
  }
  .menu-1 .container-7 {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 257.2px;
    box-sizing: border-box;
  }
  .menu-1 .container-5 {
    border-radius: 40px;
    background: #9F9090;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 0 17px 23px 25.8px;
    box-sizing: border-box;
  }
  .menu-1 .star-1 {
    margin-right: 13.1px;
    width: 28px;
    height: 28px;
  }
  .menu-1 .container-4 {
    margin: 3px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 20px;
    color: #FAFF00;
  }
  .menu-1 .container-8 {
    margin: 0 158.1px 7px 0;
    display: flex;
    flex-direction: row;
    align-self: center;
    width: fit-content;
    box-sizing: border-box;
  }
  .menu-1 .sop-iga {
    margin: 0 174px 11px 0;
    display: inline-block;
    align-self: center;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 20px;
    color: #FFFFFF;
  }
  .menu-1 .dagingnya-empuk-tambahan-topping-tomat-kentang-dan-jeruk-sebagai-penyedap-rasa {
    margin: 0 13.1px 15px 13.1px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 15px;
    color: #FFFFFF;
  }
  .menu-1 .rp-25000 {
    margin: 1px 9.5px 4px 0;
    display: inline-block;
    width: 188.4px;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 16px;
    color: #FFFFFF;
  }
  .menu-1 .container-1 {
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 16px;
    color: #FFFFFF;
  }
  .menu-1 .container-19 {
    border-radius: 80px;
    background: #FFA800;
    position: relative;
    display: flex;
    padding: 2px 12.1px 3px 12.1px;
    box-sizing: border-box;
  }
  .menu-1 .container-18 {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 247.9px;
    box-sizing: border-box;
  }
  .menu-1 .container-17 {
    border-radius: 40px;
    background: #9F9090;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: flex-end;
    padding: 0 15px 22px 0;
    width: 300px;
    box-sizing: border-box;
  }
  .menu-1 .star-3 {
    margin-right: 13.1px;
    width: 28px;
    height: 28px;
  }
  .menu-1 .container-5 {
    margin: 3px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 20px;
    color: #FAFF00;
  }
  .menu-1 .container-15 {
    margin: 0 124.1px 4px 0;
    display: flex;
    flex-direction: row;
    width: fit-content;
    box-sizing: border-box;
  }
  .menu-1 .ikan-nila-bakar {
    margin: 0 72px 12px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 20px;
    color: #FFFFFF;
  }
  .menu-1 .ikan-pilihan-bumbu-meresap-dengan-sambal-yang-lezat {
    margin: 0 7.3px 31px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 15px;
    color: #FFFFFF;
  }
  .menu-1 .rp-19000 {
    margin: 0 9.5px 5px 0;
    display: inline-block;
    width: 182.3px;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 16px;
    color: #FFFFFF;
  }
  .menu-1 .container-2 {
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 16px;
    color: #FFFFFF;
  }
  .menu-1 .container-14 {
    border-radius: 80px;
    background: #FFA800;
    position: relative;
    display: flex;
    padding: 2px 7.1px 3px 7.1px;
    box-sizing: border-box;
  }
  .menu-1 .container-11 {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-self: flex-end;
    width: 241.8px;
    box-sizing: border-box;
  }
  .menu-1 .container-20 {
    border-radius: 40px;
    background: #9F9090;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    padding: 0 14px 23px 14px;
    width: 300px;
    box-sizing: border-box;
  }
  .menu-1 .star-4 {
    margin-right: 13.1px;
    width: 28px;
    height: 28px;
  }
  .menu-1 .container-6 {
    margin: 3px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 20px;
    color: #FAFF00;
  }
  .menu-1 .container-10 {
    margin: 0 124.1px 4px 0;
    display: flex;
    flex-direction: row;
    width: fit-content;
    box-sizing: border-box;
  }
  .menu-1 .telor-balado {
    margin: 0 92px 12px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 20px;
    color: #FFFFFF;
  }
  .menu-1 .dimasak-dengan-kematangan-sempurna-menggunakan-bumbu-sambal-rahasia {
    margin: 0 4.9px 11px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 15px;
    color: #FFFFFF;
  }
  .menu-1 .rp-18000 {
    margin: 0 9.5px 6px 0;
    display: inline-block;
    width: 174.4px;
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 16px;
    color: #FFFFFF;
  }
  .menu-1 .container-3 {
    overflow-wrap: break-word;
    font-family: 'Inter';
    font-weight: 700;
    font-size: 16px;
    color: #FFFFFF;
  }
  .menu-1 .container-4 {
    border-radius: 80px;
    background: #FFA800;
    position: relative;
    margin-top: 1px;
    display: flex;
    padding: 2px 12.1px 3px 12.1px;
    box-sizing: border-box;
  }
  .menu-1 .container-12 {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-self: flex-end;
    width: 233.9px;
    box-sizing: border-box;
  }
  .menu-1 .container {
    border-radius: 40px;
    background: #9F9090;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    padding: 0 22px 24px 22px;
    width: 300px;
    box-sizing: border-box;
  }
  .menu-1 .container-13 {
    margin-left: 88px;
    display: flex;
    flex-direction: row;
    column-gap: 58px;
    width: fit-content;
    box-sizing: border-box;
  }
  .menu-1 .container-2 {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 1462px;
    height: fit-content;
    box-sizing: border-box;
  }
  .menu-1 .download-11 {
    background: url('../assets/images/download_11.jpeg') 50% / cover no-repeat;
    position: absolute;
    left: -5px;
    bottom: 0px;
    width: 179px;
    height: 170px;
  }
  .menu-1 .mask-group-1 {
    border-radius: 85px;
    position: absolute;
    left: 511px;
    bottom: 245px;
    width: 170px;
    height: 170px;
  }
  .menu-1 .mask-group-2 {
    position: absolute;
    left: 157px;
    bottom: 245px;
    width: 163px;
    height: 170px;
  }
  .menu-1 .resep-ikan-nila-bakar-pedas-manis-yang-mantap-bumbunya-1 {
    background: url('../assets/images/resep_ikan_nila_bakar_pedas_manis_yang_mantap_bumbunya_1.jpeg') 50% / cover no-repeat;
    width: 170px;
    height: 170px;
  }
  .menu-1 .mask-group-3 {
    border-radius: 85px;
    position: absolute;
    right: 400px;
    bottom: 245px;
    display: flex;
    width: 170px;
    height: 170px;
    box-sizing: border-box;
  }
  .menu-1 .telur-balado-recipe-indonesian-hard-boiled-eggs-in-sambal-balado-1 {
    background: url('../assets/images/telur_balado_recipe_indonesian_hard_boiled_eggs_in_sambal_balado_1.jpeg') 50% / cover no-repeat;
    position: absolute;
    right: -2px;
    bottom: -4px;
    width: 177px;
    height: 177px;
  }
  .menu-1 .mask-group {
    border-radius: 86.5px;
    position: absolute;
    right: 43px;
    bottom: 242px;
    width: 173px;
    height: 173px;
  }
  .menu-1 {
    background: #FFFFFF;
    display: flex;
    padding-bottom: 44px;
    width: 1440px;
    box-sizing: border-box;
  }
  
  

/* Laptop */
@media (max-width: 1366px){
  html {
      font-size: 75%;
  }
}

/* Hape */
@media (max-width: 450px){
  html {
      font-size: 55%;
  }
  #menu {
      display: inline-block;
  }
  .navbar .navbar-nav {
      position: absolute;
      top: 100%;
      right: -100%;
      background-color: #FFFFFF;
      width: 30rem;
      height: 100vh;
      transition: 0.5s;
  }
  .navbar .navbar-nav.active {
      right: 0;
  }
  .navbar .navbar-nav a {
      color: var(--background);
      display: block;
      margin: 1.5rem;
      padding: 0.5rem;
      font-size: 2rem;
  }
  .navbar .navbar-nav a::after {
      transform-origin: 0 0;
  }
  .navbar .navbar-nav a:hover::after {
      transform: scaleX(0.2);
  }
}

    </style>
</head>
</html>
@extends('layout/navbar')

@section('container')
<body>
<section class="hero" id="home">
        <main class="content">
            <h2> Makan Di <span>Waroeng Babe</span> Skuyy!!</h2>
                <h3>Waroeng Babe sedia kuliner Nusantara
                <br />
                dengan rempah pilihan <br />
                <br /></h3>
        </main>
        <img src="{{ asset('asset/img/babe.png')}}">
    </section>
    <section class="home">
<div class="container-7">
          <div class="container-9">
            <div class="top-list-di-waroeng-babe">
            TOP LIST<br>
            di Waroeng Babe
            </div>
            <div class="container-4">
                    @foreach($topDishes as $dish)
                    <div class="container">
                            <img class="star-1" src="{{ Storage::url('dishes/' . $dish->image) }}" alt="{{ $dish->name }}">
                        <div class="container-1">
                        <div class="rating"><i class="fas fa-star"></i>
                            {{ $dish->rating }}
                        </div>
                    </div>
                    <div class="dish-name">
                        {{ $dish->name }}
                    </div>
                        <span class="description">
                            {{ $dish->description }}
                        </span>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</section>
<section class="container-13">
    <div class="sejarah-waroeng-babe">
        Sejarah Waroeng Babe
    </div>
    <span class="waroeng-babe-berdiri-sejak-tahun-1995">
        Waroeng Babe berdiri sejak tahun 1995. Untuk namanya sendiri muncul dari julukan sang pemilik rumah makan ini yaitu Babe, lalu supaya lebih menarik diimbuhilah dengan kata “waroeng”. Babe dulunya hanyakah seorang penjual nasi keliling, lalu seiring berjalannya waktu, usaha Babe semakin meningkat dan terus ramai pengunjung hingga saat ini.
        <br>
        Konsep dari rumah makan Waroeng Babe ini mengusung tema makanan nusantara yang sudah terjamin rasanya namun dalam pelayanannya tetap dengan konsep modern melalui pemesanan secara online untuk lebih mempermudah dan cepat.
    </span>
</section>
<section class="container-6">
    <div class="jl-serayu-no-48-kota-madiun">
        Jl. Serayu, No. 48<br>
        Kota Madiun
    </div>
    <div class="container-12">
        <div class="line-1"></div>
        <span class="sosial-media-waroeng-babe">
            Sosial media :<br>
            @Waroeng Babe
        </span>
    </div>
    <a href="https://wa.me/082115668469" class="whats-app-link">
    <div class="whats-app-logo"></div>
</section>
<script src="js/script.js"></script>
</body>
@endsection