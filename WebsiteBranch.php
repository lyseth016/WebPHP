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
          .navbar{
              background-color: #e4659a;
          }
          .navbar-text,
          .navbar-brand,
          .nav-link{
            color:#fff
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
    <h2>Branch</h2>
    <div class="card card-body bg-grey">
    <br><br>
    <form >
    <div class="branch-item">
        <div class="row">
            <div class="col-md-6">
              <br>
                <h3>Phnom Penh</h3>
                <p>No.47, France St.(88), Sangkat Srah Chork, Khan Daun Penh, Phnom Penh.</p>
                <p><i class="bi bi-envelope text-muted"></i> info@Lotus.com</p>
            <p><i class="bi bi-telephone"></i><a href="tel:(+855) 16 20 20 20">(+855) 89 89 89 89</a></p>
            <p><i class="bi bi-telephone"></i><a href="tel:(+855) 11 20 20 20">(+855) 87 87 87 87</a></p>
                <p><i class="bi bi-geo-alt-fill text-muted"></i> <a href="https://www.google.com/maps/d/viewer?mid=1x9-ZhEGFU4yTY_OI1WsaA1BEQdA&hl=en&ll=11.529920770676297%2C104.8883825&z=13" target="_blank">View on map</a></p>
            </div>
            <div class="col-md-6 text-right"><img src="img/127.jpg" style="width: 460px; height: 230px;"></div>
        </div>
    </div>
    <br><br>
        <div class="branch-item">
        <div class="row">
            <div class="col-md-6">
                <h3>Siem Reap</h3>
                <p>No. 752, National Road No 6, Chong Kaosou Village.</p>
                <p><i class="bi bi-envelope text-muted"></i> info@Lotus.com</p>
            <p><i class="bi bi-telephone"></i><a href="tel:(+855) 16 20 20 20">(+855) 89 89 89 89</a></p>
            <p><i class="bi bi-telephone"></i><a href="tel:(+855) 11 20 20 20">(+855) 87 87 87 87</a></p>
                <p><i class="bi bi-geo-alt-fill text-muted"></i> <a href="https://www.google.com/maps/d/viewer?mid=1d_UScNILxqWLen2A6X7zsqP28wo&hl=en&ll=13.36440200000001%2C103.85993999999998&z=17" target="_blank">View on map</a></p>
            </div>
            <div class="col-md-6 text-right"><img src="img/121.jpg" style="width: 460px; height: 230px;"></div>
        </div>
    </div>
    <br><br>
        <div class="branch-item">
        <div class="row">
            <div class="col-md-6">
                <h3>Sihanouk Ville</h3>
                <p>No. 49, Street Borey Kamkor, Sangkat 2, Khan Mittapheap</p>
                <p><i class="bi bi-envelope text-muted"></i> info@Lotus.com</p>
            <p><i class="bi bi-telephone"></i><a href="tel:(+855) 16 20 20 20">(+855) 89 89 89 89</a></p>
            <p><i class="bi bi-telephone"></i><a href="tel:(+855) 11 20 20 20">(+855) 87 87 87 87</a></p>
                <p><i class="bi bi-geo-alt-fill text-muted"></i> <a href="https://www.google.com/maps/d/viewer?mid=1JkwGNOk7nKPPeMI_PzpSaGJdcGw&hl=en&ll=10.618556977910801%2C103.564328&z=12" target="_blank">View on map</a></p>
            </div>
            <div class="col-md-6 text-right"><img src="img/123.jpg" style="width: 460px; height: 230px;"></div>
        </div>
    </div>
    <br><br>
        <div class="branch-item">
        <div class="row">
            <div class="col-md-6">
                <h3>Kampot</h3>
                <p>No. 84, National Road 33, Sangkat Kampong Kandal, Kampot</p>
                <p><i class="bi bi-envelope text-muted"></i> info@Lotus.com</p>
            <p><i class="bi bi-telephone"></i><a href="tel:(+855) 16 20 20 20">(+855) 89 89 89 89</a></p>
            <p><i class="bi bi-telephone"></i><a href="tel:(+855) 11 20 20 20">(+855) 87 87 87 87</a></p>
                <p><i class="bi bi-geo-alt-fill text-muted"></i> <a href="https://www.google.com/maps/d/viewer?mid=1JkwGNOk7nKPPeMI_PzpSaGJdcGw&hl=en&ll=10.590938055879976%2C104.16815760000001&z=13" target="_blank">View on map</a></p>
            </div>
            <div class="col-md-6 text-right"><img src="img/126.jpg" style="width: 460px; height: 230px;"></div>
        </div>
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