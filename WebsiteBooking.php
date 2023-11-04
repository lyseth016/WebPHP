<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LotusBooking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        .h-font{
            font-family: 'Merienda', cursive;
        }
        
            @import url(https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap);
            @import url(https://necolas.github.io/normalize.css/8.0.1/normalize.css);
          .navbar{
              background-color: #e4659a;
          }
          .navbar-text,
          .navbar-brand,
          .nav-link{
            color:#fff
          }
    body {
      position: block;
      height: 100%;
    }

    body {
      background: #eee;
      margin: 0;
      padding: 0;
    }
        .swiper {
      width: 90%;
      height: 90%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fa83cc;
      display: flex;
      justify-content: center;
      align-items: center;
    }
        .costom-bg{
            background-color: #f069a1;
          }
        .costom-bg:hover{
            background-color: #279e8c;
          }
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
          }
          @media screen and (max-width: 420){
        .availability-form{
            margin-top: 0px;
          ;
          }
        }
        .accepted-payment {
            background: #f069a1;
            padding: 20px 0;
        }
        .accepted-payment ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }
        dl, ol, ul {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        .accepted-payment ul li {
          display: inline-block;
        }
        .accepted-payment ul {
          list-style: none;
          padding: 0;
          width: 100%;
        }
        dl, ol, ul {
          margin-right: 0;
          margin-bottom: 1rem;
        }
        .text-right {
          text-align: right !important;
        }
        .sub-title {
          font-size: 16px;
          color: #ffffff;
        }
        .sub-title {
          line-height: 17px;
          margin-bottom: 16px;
          font-size: 14px;
          font-weight: 700;
        }
        .accepted-payment ul li img {
          height: 26px;
          border: 0;
          vertical-align: middle;
          border-radius: 4px;
          box-shadow: 0 1px 6px 0 rgb(32 33 36 / 30%);
          margin-right: 4px;
        }
    </style>
    </head>
    <body>

    <div class="bg-light"></div>
    <nav class="navbar navbar-expand-lg fs-5 px-lg=3 py=lg-2 shadow-sm sticky=top">
    <div class="container-fluid">
                <a class="navbar-brand fs-3 mb-2" href="#">Lotus</a>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="WebsiteBooking.php" title="Booking ">Bookings</a></li>
                <li class="nav-item"><a class="nav-link active" href="WebsiteBranch.php" title="Branch">Branch</a></li>
                <li class="nav-item"><a class="nav-link active" href="WebsiteContactUs.php" title="Contact Us">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link active" href="WebsiteAboutUs.php" title="About Us">About Us</a></li>
                <li class="nav-item"><a class="nav-link active" href="WebsitePrintYourTikcket.php" title="Print Your Ticket">Print Your Ticket</a></li>
                <li class="nav-item"><a class="nav-link active" href="WebsiteAccount.php" title="Account">Account</a></li>

                <li class="nav-item dropdown language-dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Languge</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="divider"></li>
                <div class="width-auto width"><img src="img/cambodia .png" class=" mr-10" alt="khmer language" title="khmer language"></div>
                <li><a class="dropdown-item" href="#">ភាសាខ្មែរ</a></li>
                <span class="text-10 text-black-50">ប្តូរទៅភាសាខ្មែរ</span>
                <li class="divider"></li>
                <div class="width-auto width"><img src="img/united-kingdom.png" class=" mr-10" alt="united-kingdom language" title="united-kingdom language"></div>
                <li><a class="dropdown-item" href="#">English</a></li>
                <span class="text-10 text-black-50">Change to English</span>
                <li class="divider"></li>
                <div class="width-auto width"><img src="img/china.png" class=" mr-10" alt="china language" title="china language"></div>
                <li><a class="dropdown-item" href="#">中國人</a></li>
                <span class="text-10 text-black-50">改成中國人</span>
                </ul>
        </div>
        </div>
        </nav>

    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/01.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/02.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/03.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/05.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/06.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/07.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/09.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/010.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/011.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/012.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/013.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/014.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/015.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/016.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/017.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/018.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/020.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/021.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/024.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/025.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/026.jpg" width="1400" height="480"></div>
      <div class="swiper-slide"><img src="img/027.jpg" width="1400" height="480"></div>
    </div>
    </div>
    
  
        <div class="container-fliud px-lg-8 mt-8"></div>
        <div class="container availability-form">
        <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded" >
                <h3> RAISING THE STANDARDS OF LAND TRAVEL EXPERIENCE</h3>
                <h4> (Phnom Penh, Siem Reap, Sihanoukville, Kampot )</h4>
                <br><br>
                <form>
                <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                <label class="form-label h4" style="font-weight:500;"> Departure Date</h4></label>
                <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label h4" style="font-weight:500;"> Return Date</h4></label>
                <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label h4 " style="font-weight:500;"> Direction </h4></label>
                <select class="form-select" aria-label="Default select example">
                <option selected>Choose Direction      </option>
                <option value="1">PhnomPenh-Kampot     </option>
                <option value="2">PhnomPenh-Siem Reap  </option>
                <option value="3">PhnomPenh-Shihanouk  </option>
                <option value="4">PhnomPenh-Kampot     </option>
                <option value="5">PhnomPenh-Siem Reap  </option>
                <option value="6">PhnomPenh-Shihanouk  </option>
                </select>
                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label h4" style="font-weight:500;"> Nationality </h4></label>
                <select class="form-select" aria-label="Default select example">
                <option selected>Choose Nationality</option>
                <option value="1">Cambodia</option>
                <option value="1">None-Cambodia</option>
                </select>
                </div>
                <div class="mb-lg-6 " >
                <button type="search" class="btn white shadow-none costom-bg">Submit</button>
                </div>
        </div>
        </form>
        </div>
        </div>
        </div>

        <form>

        <div class="accepted-payment">
        <div class="container">
        <div class="row">
                <div class="col-mb-2">
                <h7 class="sub-title">We Accept Payments:</h7>
                <ul>
                <li><img src="img/abapay.png"     alt=" pay with abapay" title="aba pay"></li>
                <li><img src="img/acleda pay.jpg" alt=" pay with acleda " title="acleda"></li>
                <li><img src="img/pipay.png"      alt=" pay with wing" title="wing"></li>
                <li><img src="img/wing.png"       alt=" pay with pi pay" title="pi pay"></li>
                <li><img src="img/visa.png"       alt=" pay with visa card" title="visa card"></li>
                <li><img src="img/master.png"     alt=" pay with master card" title="master card"></li>                       
                </ul>
                </div> 
                <div class="row"></div>
                <div class="col-mb-2 text-right ">  
                <h4 class="sub-title">Ratings & Reviews</h4>
                <ul>
                <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="img/facebook.png"    alt=" facebook"    title=" facebook"></a></li>
                <li><a href="https://www.instagram.com/">           <img src="img/instagram.png"   alt=" instagram"   title=" instagram"></a></li>
                <li><a href="https://telegram.org/">                <img src="img/telegram.png"    alt=" telegram"    title=" telegram"></a></li>
                <li><a href="https://twitter.com/?lang=en">         <img src="img/twitter.png"     alt=" twitter"     title=" twitter"></a></li>
                <li><a href="https://www.tripadvisor.com/">         <img src="img/tripadvisor.png" alt=" tripadvisor" title=" tripadvisor"></a></li>
                </ul>
        </div>
        </div>
        </div>
        </div>
        </form>
        
        <br><br><br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });
  </script>
        </body>
        </html>