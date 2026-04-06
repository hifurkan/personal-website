<!doctype html>
<html lang="tr">
<head>
  <title>Furkan ERTEK | Kişisel Web Sitem</title>
  <meta charset="utf-8">
  <meta name="description" content="Ben Furkan. Burada yaptığım web araçlarını test ediyorum ve yayınlıyorum. Bazen de blog yazıyorum.">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
  <link rel="icon" href="favicon.png">
  <link rel="mask-icon" href="favicon.svg" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="css/main.css">

  <?php include 'php/og-responsive.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=match_word" />
  <style>
html {
    scroll-behavior: smooth;
}

.bounce-image:hover {
    animation: bounce 0.6s ease;
  }

  @keyframes bounce {
    0%, 100% {
      transform: translateY(0);
    }
    30% {
      transform: translateY(-10px);
    }
    60% {
      transform: translateY(5px);
    }
    90% {
      transform: translateY(-3px);
    }
  }
	  a{
		  color: #110f24;
	  }
  </style>

</head>
<body class="page page-home preload">
  <!-- Banner kodu -->
  <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: flex; justify-content: center; align-items: center; z-index: 9999;" id="gameBanner">
    <div style="background: white; padding: 2rem; border-radius: 10px; max-width: 500px; width: 90%; position: relative; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
      <button style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 1.5rem; cursor: pointer; color: #333;" onclick="document.getElementById('gameBanner').style.display='none'; localStorage.setItem('bannerLastShown', new Date().getTime());">&times;</button>
      <img src="media/content/tavuk-oyun.png" alt="Tavuk Oyunu" style="max-width: 100px; margin-bottom: 1rem; border-radius: 10px;">
      <h2 style="font-size: 1.5rem; margin-bottom: 1rem; color: #333;">Tavuk Oyunu Yayında! 🎮</h2>
      <p style="margin-bottom: 1.5rem; color: #666;">Eğlenceli mobil oyunumuz artık Google Play Store'da!</p>
      <a href="https://play.google.com/store/apps/details?id=com.justfurkan.tavuk" target="_blank" style="background: #575bde; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; transition: background 0.3s ease;">Hemen İndir</a>
    </div>
  </div>
  <!-- Banner kodu sonu -->

  <header class="header-main dark">
  <?php include 'php/navbar.php';?>
  </header>

  <main>

    <section id="selam" class="bg-image-hero center-tablet dark overlay-hero">
      <div class="full-screen -margin-bottom middle padding padding-top-tablet">
        <div class="row max-width-l">
          <div class="col-one-half middle">
            <div>
              <h1 class="hero">Merhaba</h1>
              <p class="lead">Ben Furkan. Burada yaptığım web araçlarını test ediyorum ve yayınlıyorum. Bazen de blog yazıyorum.</p>
              <a href="#hizmetler" class="button button-primary space-top" role="button">Yani?</a>
            </div>
          </div>
          <div class="col-one-half middle">
            <img src="media/content/hero-illustration.png" srcset="media/content/hero-illustration.png 1x, media/content/hero-illustration@2x.png 2x" alt="Hero Illustration">
          </div>
        </div>
      </div>
      <div id="hizmetler" class="padding hizmetler">
        <div class="row margin-bottom max-width-l">
          <div class="col-one-half middle">
            <h3>Online Araçlar</h3>
            <p class="paragraph">Kullanıcıların işlerini yaparken kullanabileceği karakter sayacı, şifre üretici, seo sayacı gibi araçlar. İçerik üreticileri, dijital pazarlamacılar, web tasarımcılar, ofis çalışanları ve öğrenciler için uygun.</p>
          </div>
          <div class="col-one-half">
            <img class="rounded shadow-l bounce-image" src="media/content/editor.png" srcset="media/content/editor.png 1x, media/content/editor@2x.png 2x" alt="Editor">
          </div>
        </div>
        <div class="row max-width-l reverse-order">
          <div class="col-one-half">
            <img class="rounded shadow-l bounce-image" src="media/content/sketch.png" srcset="media/content/sketch.png 1x, media/content/sketch@2x.png 2x" alt="Sketch">
          </div>
          <div class="col-one-half middle">
            <h3>Blog Yazıları</h3>
            <p class="paragraph">Dijital pazarlama, yapay zeka, teknoloji ve iş dünyası hakkında yazdığım bloglar. Genelde objektif bilgiler içerir.</p>
          </div>
        </div>
      </div>
    </section>
<section id="araclar">
<div class="padding">
      <div class="center margin-bottom max-width-m">
        <h3>Dijital Araçlar</h3>
        <p class="paragraph">İçerik üreticileri, dijital pazarlamacılar, web tasarımcılar, ofis çalışanları ve öğrencilerin ihtiyaç duyabileceği karakter sayacı, şifre üretici, seo sayacı gibi araçlar!</p>
      </div>
      <div class="center margin-bottom max-width-l">
        <div class="row margin-bottom min-two-columns">
          <div class="col-one-fourth"><a href="/karakter-sayaci">
            <i class="feature-icons material-icons bg-gradient-pink">text_fields</i></a>
            <a href="/karakter-sayaci"><h6>Karakter Sayacı</h6></a>
          </div>
          <div class="col-one-fourth">
           <a href="/google-baslik-meta-aciklama-uzunluk-testi"> <i class="feature-icons material-icons bg-gradient-pink">fullscreen_exit</i></a>
           <a href="/google-baslik-meta-aciklama-uzunluk-testi"> <h6>Meta Piksel Ölçer</h6></a>
          </div>
          <div class="col-one-fourth">
           <a href="/qr-kod-uretici"> <i class="feature-icons material-icons bg-gradient-green">qr_code_2</i></a>
            <a href="/qr-kod-uretici"><h6>QR Kod Üretici</h6></a>
          </div>
          <div class="col-one-fourth">
            <a href="/sifre-uretici"><i class="feature-icons material-icons bg-gradient-indigo">lock</i></a>
            <a href="/sifre-uretici"><h6>Şifre Üretici</h6></a>
          </div>
        </div>
      </div>
      
    </div>


</section>

<section style="padding-top: 1rem" id="blog" class="bg-gradient-light padding padding-top">
      <div class="center max-width-l">
        <h1 class="hero">en popüler blog yazıları</h1>
      </div>
      <div class="row margin-top max-width-l">
        <div class="col-one-third card card-content">
          <img src="media/content/dijital-pazarlama-nedir.jpg"></br></br>
          <h4>
            <span class="pricing-price">Dijital Pazarlama Nedir?</span>
          </h4>
          <p class="paragraph">Dijital pazarlama, ürün veya hizmetlerin online platformlarda tanıtılmasıdır.</p>
      
          <a href="/dijital-pazarlama-nedir" class="button button-secondary full-width space-top" role="button">devamını okuyalım</a>
        </div>
        
        <div class="col-one-third card card-content">
          <img src="media/content/seo-nedir.jpg"></br></br>
          <h4>
            <span class="pricing-price">SEO Nedir?</span>
          </h4>
          <p class="paragraph">Arama motorlarında üst sıralarda görünmeyi sağlayan organik optimizasyon sürecidir.</p>
      
          <a href="/seo-nedir" class="button button-secondary full-width space-top" role="button">devamını okuyalım mı</a>
        </div>

        <div class="col-one-third card card-content">
          <img src="media/content/google-my-business.jpg"></br></br>
          <h4>
            <span class="pricing-price">Google My Business Nedir?</span>
          </h4>
          <p class="paragraph">Yerel işletmelerin Google arama sonuçlarında ve haritalarda görünmesini sağlar.</p>
      
          <a href="/google-my-business-nedir" class="button button-secondary full-width space-top" role="button">devamını okuyalım mı</a>
        </div>




      </div>
    </section>


   

  

    <section id="hakkimda" class="padding">
      <div class="max-width-l">
        <div class="center">
          <h2>merak edenler için</h2>
          <p class="paragraph">adım furkan. dijital pazarlama uzmanı title'ı ile ai ve web teknolojilerini kullanarak web tabanlı işler yapıyorum.</p>
        </div>
        <div class="row margin-top timeline">
          <div class="col-one-fourth">
            <h5>performans pazarlama</h5>
            <p>google, meta ve tiktok(meta'nın aynısı ama daha az gelişmişi) üzerinden business ve reklam hesabı kurulumları yapabilir, dönüşümler kurabilir ve reklam verebilirim.</p>
          </div>
          <div class="col-one-fourth">
            <h5>SEO</h5>
            <p>web sitelerinde on page ve off page seo çalışmaları yapabilirim. özellikle teknik seo alanında pek çok işlemi kolayca yapabilirim.</p>
          </div>
          <div class="col-one-fourth">
            <h5>ai</h5>
            <p>yapay zeka api'ları ile projeler geliştirebilir, fine tune çalışmaları yapabilir ve otonom sistemler kurabilirim.</p>
          </div>
          <div class="col-one-fourth">
            <h5>web tasarımı</h5>
            <p>sıfırdan web siteleri inşaa edebilir (html, css, js, php ile) ve çeşitli cms'ler ile istenilen yapıları kurabilirim.</p>
          </div>
        
        </div>
        <p style="text-align:center; font-size:10px;" class="paragraph">grafik tasarım tarafında da bir şeyler yapabilirim ama yapmak istemiyorum genelde.</p>

      </div>
    </section>





  </main>

 
  <?php include 'php/footer.php';?>
  <script src="js/main.js"></script>
</body>
</html>