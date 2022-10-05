<?php

$con = mysqli_connect('localhost','root','','projemdb') or die('connection failed');

if(isset($_POST['gonder'])){

   $name = mysqli_real_escape_string($con, $_POST['adsoyad']);
   $phone = mysqli_real_escape_string($con, $_POST['telefon']); 
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $knu = mysqli_real_escape_string($con, $_POST['konu']);
   $msg = mysqli_real_escape_string($con, $_POST['mesaj']);

   $select_mesaj = mysqli_query($con, "SELECT * FROM `iletisim` WHERE adsoyad = '$name' AND telefon = '$phone' AND email = '$email' AND konu = '$knu' AND mesaj = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_mesaj) > 0){
      $mesaj[] = 'Mesaj zaten gönderildi';
   }else{
      mysqli_query($con, "INSERT INTO `iletisim`(adsoyad, telefon, email, konu, mesaj) VALUES('$name', '$phone', '$email', '$knu', '$msg')") or die('query failed');
    
      
      echo "<script>alert('Mesaj başarıyla yollandı')</script>";
   }

}

?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferhattoson.com</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    

<header>

    <a href="#" class="logo">c<span class="fas fa-virus"></span>vid-19</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a class="active" href="#home">Anasayfa</a>
        <a href="#prevent">Korunma</a>
        <a href="#symptoms">Semptom</a>
        <a href="#precautions">Önlemler</a>
        <a href="#doctor">Doktorlarımız</a>
        <a href="#hand-wash">Hijyen</a>
    </nav>

</header>


<section style="background:url(alk.jpg) no-repeat;background-size: cover;
    background-position: center;
    background-attachment: fixed;" class="home" id="home">

    <div class="content">

        <h1>Virüse karşı elimizde büyük bir koz var:
            Yakalanmamak.</h1>
        <h3>Evde Kal, Güvende Kal</h3>
       
        
        <a href="#prevent" class="btn">Nasıl korunmalıyız</a>
    </div>

</section>



<section class="prevent" id="prevent">

    <h1 class="heading"> Virüsten Nasıl korunmalıyız </h1>

    <div class="box-container">

        <div class="box">
            <img src="pre-1.png" alt="">
            <h3>Bulunduğumuz alanı sık sık havalandırmak ve temiz tutmak.</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="pre-2.png" alt="">
            <h3> Sosyal mesafe kurallarına uymak</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="pre-3.png" alt="">
            <h3>Ağız ve burnumuza olabildiğince temas etmekten kaçınmak.</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

       

    </div>

</section>


<section class="symptoms" id="symptoms">

    <h1 class="heading">covid-19 Semptomları</h1>

    <div class="column">

        <div class="main-image">
            <img src="main-symp-img.png" alt="">
        </div>

        <div class="box-container">

            <div class="box">
                <img src="symp-a.png" alt="">
                <h3>Kuru öksürük</h3>
            </div>

            <div class="box">
                <img src="symp-b.png" alt="">
                <h3>
                    Boğaz Ağrısı</h3>
            </div>

            <div class="box">
                <img src="symp-c.png" alt="">
                <h3>Burun Akıntısı</h3>
            </div>

            <div class="box">
                <img src="symp-d.png" alt="">
                <h3>Yüksek Ateş</h3>
            </div>

            <div class="box">
                <img src="symp-e.png" alt="">
                <h3>Baş Ağrısı</h3>
            </div>

            <div class="box">
                <img src="symp-f.png" alt="">
                <h3>Mide Bulantısı ve ishal</h3>
            </div>

        </div>

    </div>

</section>


<section class="precautions" id="precautions">

    <h1 class="heading"> Covid-19 Önlemlerİ</h1>

    <div class="column">

        <div class="box-container">

            <h3 class="title">Ne yapmalıyız?</h3>

            <div class="box">
                <img src="do-img1.png" alt="">
                <div class="info">
                    <h3>Elleerimizi sık sık yıkamak</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

            <div class="box">
                <img src="do-img2.png" alt="">
                <div class="info">
                    <h3>Maske takmak</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

            <div class="box">
                <img src="do-img3.png" alt="">
                <div class="info">
                    <h3>Evde dinlenmek</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

        </div>

        <div class="box-container">

            <h3 class="title">Ne yapmamalıyız?</h3>

            <div class="box">
                <img src="dont-img1.png" alt="">
                <div class="info">
                    <h3>Hayvanlarla Yakın Temasta Bulunmaktan Kaçının</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

            <div class="box">
                <img src="dont-img2.png" alt="">
                <div class="info">
                    <h3>insanlarla yakın temastan kaçının</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

            <div class="box">
                <img src="dont-img3.png" alt="">
                <div class="info">
                    <h3>
                        kalabalık alandan kaçının</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel odit quo saepe illum tempora corrupti sint distinctio, perferendis maxime illo!</p>
                </div>
            </div>

        </div>

    </div>

</section>


<section class="doctor" id="doctor">

    <h1 class="heading">Doktor ekibimiz</h1>

    <div class="box-container">

        <div class="box">
            <img src="data:image/jpeg;base64,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" alt="">
            <h3>Fatih Terim</h3>
            <span>Başhekim</span>
            <br>

            <span>Profesör Doktor</span>
            <div class="share">
                <a href="#" class="fab fa-whatsapp"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="data:image/jpeg;base64,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" alt="">
            <h3>Fahrettin Koca</h3>
            <span>Profesör Doktor</span>
            <div class="share">
                <a href="#" class="fab fa-whatsapp"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="data:image/jpeg;base64,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" alt="">
            <h3>Anna deniz</h3>
            <span>Uzman Doktor</span>
            <div class="share">
                <a href="#" class="fab fa-whatsapp"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

     

    </div>

</section>



<section class="hand-wash" id="hand-wash">

    <h1 class="heading">Ellerimizi nasıl yıkamalıyız?</h1>

    <div class="column">

        <div class="box-container">

            <div class="box">
                <img src="wash-a.png" alt="">
                <h3>sabun ve bol su</h3>
            </div>

            <div class="box">
                <img src="wash-b.png" alt="">
                <h3>avuç içi</h3>
            </div>

            <div class="box">
                <img src="wash-c.png" alt="">
                <h3>parmaklar arası</h3>
            </div>

            <div class="box">
                <img src="wash-d.png" alt="">
                <h3>
                    Başparmaklara dikkat</h3>
            </div>

            <div class="box">
                <img src="wash-e.png" alt="">
                <h3>ellerin arkası</h3>
            </div>

            <div class="box">
                <img src="wash-f.png" alt="">
                <h3>bileklere kadar</h3>
            </div>

        </div>

        <div class="main-image">
            <img src="main-wash-img.png" alt="">
        </div>

    </div>

</section>
<section id="iletisim">
    <div id="ahak">
        <h3 id="ibas">İletişim</h3>
    
        <form action="" method="post">
        <div id="ilopak">
    
            <div id="iform">
                 <div id="solf">
                     <input type="text" name="adsoyad" placeholder="ad soyad" required class="form-control">
                     <input type="text" name="telefon" placeholder="telefon" id="" required class="form-control">
                 </div>
                 <div id="sagf">
                 <input type="email" name="email" placeholder="email" required class="form-control">
                     <input type="text" name="konu" placeholder="konu " id="" required class="form-control">
                 </div>
                 <textarea name="mesaj" placeholder="mesaj " cols="30" rows="10" required class="form-control"></textarea>
             <input type="submit" name="gonder" value="gonder">
                </div>
            <div id="adres">
                <h4 id="adr">Adres : </h4>
                <p style="color: white; font-size: 20px; margin-bottom: 15px">Güneşli mahallesi</p>
                <p style="color: white; font-size: 20px; margin-bottom: 15px">Kirazli Caddesi</p>
                <p style="color: white; font-size: 20px; margin-bottom: 15px">katip sokak no:11</p>
                <p style="color: white; font-size: 20px; margin-bottom: 15px">0545 427 6875</p>
                <p style="color: white; font-size: 20px; margin-bottom: 15px">Email: ferhattoson@hotmail.com</p>
            </div>
        </div>
       </form>
       </section>
<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Hakkımızda</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate minima soluta distinctio eaque magni veritatis dicta dolore dignissimos totam quis!</p>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">TÜRKİYE</a>
            <a href="#">USA</a>
            <a href="#">france</a>
            <a href="#">russia</a>
            <a href="#">japan</a>
        </div>

        <div class="box">
            <h3>Hızlı erişim</h3>
            <a class="active" href="#home">Anasayfa</a>
            <a href="#prevent">Korunma</a>
            <a href="#symptoms">Semptom</a>
            <a href="#precautions">Önlemler</a>
            <a href="#doctor">Doktorlarımız</a>
            <a href="#hand-wash">Hijyen</a>
        
        </div>

        <div class="box">
            <h3>sosyal medya</h3>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
            <a href="#">youtube</a>
        </div>

    </div>

    <h1 class="credit"> created by <a href="#">Ferhat Toson</a> &copy; copyright @ 2022 </h1>

</div>



<a href="#home" class="scroll-top">
    <img src="images/scroll-img.png" alt="">
</a>
















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>