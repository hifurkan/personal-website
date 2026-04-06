<!doctype html>
<html lang="tr">
<head>
  <title>Google My Business Nedir? | Furkan ERTEK – Blog</title>
  <meta charset="utf-8">
  <meta name="description" content="Google My Business (Benim İşletmem), işletmenizin Google arama sonuçlarında ve Haritalar'da görünmesini sağlayan ücretsiz bir araçtır.">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
  <link rel="icon" href="favicon.png">
  <link rel="mask-icon" href="favicon.svg" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="css/main.css">

  <?php include 'php/og-responsive.php'; ?>

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
	  h2{font-size: 1.75rem;
        line-height: 2.25rem;}
	  
	  h3{font-size: 1.5rem;}
  </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#metin').on('input', function() {
            var metin = $(this).val();

            // Boşlukları temizle ve metni parçalara ayır
            var kelimeler = metin.trim().split(/\s+/);

            // Paragraf sayısını al (boş satır sayısı + 1)
            var paragraf_sayisi = metin.trim().split(/\n\s*\n/).length;

            // Kelime sayısını al
            var kelime_sayisi = kelimeler.length;

            // Karakter sayısını al (boşlukları dahil etme)
            var karakter_sayisi = metin.length;

            // Boşluklu karakter sayısını al
            var bosluklu_karakter_sayisi = metin.length;

            // Boşluksuz karakter sayısını al
            var bosluksuz_karakter_sayisi = metin.replace(/\s+/g, "").length;

            // Sonuçları güncelle
            $('#kelime_sayisi').text(kelime_sayisi);
            $('#karakter_sayisi').text(karakter_sayisi);
            $('#bosluklu_karakter_sayisi').text(bosluklu_karakter_sayisi);
            $('#bosluksuz_karakter_sayisi').text(bosluksuz_karakter_sayisi);
            $('#paragraf_sayisi').text(paragraf_sayisi);
        });
    });
</script>
</head>
<body class="page page-home preload">

  <header style="background: #1d1a3d" class="header-main dark">
  <?php include 'php/navbar.php';?>
  </header>

  <main>

</br>  </br>   
  <section class="bg-gradient-light center padding padding-top">
      <div class="max-width-m">
        <p class="muted">furkan ertek</p>
        <h1 class="hero">Google My Business Nedir?</h1>
      </div>
    </section>

    <section class="bg-gradient-light padding">
		<img style=" display: block; margin-left: auto; margin-right: auto;" class="margin-bottom margin-top rounded" src="media/content/google-my-business.jpg" srcset="media/content/google-my-business.jpg 1x, media/content/google-my-business.jpg 2x" alt="About">
      <div class="max-width-l">
        <div class="row reduce-spacing">
          <div class="col-one-half">
 <p class="paragraph serif">Öncelikle hoş geldiniz! Bu yazımda sizlere büyük veya küçük ölçekli fark etmeksizin her işletmenin kesinlikle kayıtlı olması gereken bir platform olan Google Benim İşletmem hakkında bilgi vereceğim. Yazıya geçmeden önce önemli bir bilgiyi paylaşmak isterim: Google Benim İşletmem tamamen ücretsiz bir hizmettir. Ayrıca kullanıcılarına ücretsiz bir web sitesi oluşturma imkanı da sunar.</p>
    </div>
    <div class="col-one-half">
      <p class="paragraph serif">Yakın çevremden sıkça duyduğum bir durumdan dolayı bu yazıyı hazırlamak istedim. Bazı kişilerin, işletmeleri arayarak "Google Haritalar'da görünmeniz için işlem yapalım, fiyatı 600 TL" gibi ifadelerle işletmeleri kandırmaya çalıştığını öğrendim. Bu dolandırıcılık girişimlerine karşı sizleri bilgilendirmek istiyorum.</p>
    </div>
  </div>
</br>
  <h2>Google Benim İşletmem Nedir?</h2>
  <p class="paragraph serif">Google Benim İşletmem, işletmenizin Google arama sonuçlarında ve Haritalar'da görünmesini sağlayan ücretsiz bir araçtır. Bu platform, kullanıcıların işletmenizin adıyla ilgili arama yaptığında, işletmenizin:</p>
		<ul>
		<li>Konumu</li>
				<li>Eklediğiniz görseller</li>
		<li>Telefon numarası</li>
		<li>Çalışma saatleri</li>
		<li>Kullanıcı yorumları gibi bilgileri içeren bir paneli görmesine olanak tanır.</li>
		</ul>
	<p class="paragraph serif">Bunun dışında, kullanıcılar sadece bir işletme türü aradığında (örneğin, "yakındaki kafeler") konumlarına en uygun seçenekleri listeleyen bir panelle karşılaşır. İşte bu noktada işletmenizin kaydı büyük önem taşır.</p>	

  <h2>Google Benim İşletmem Nasıl Kullanılır?</h2>
		  <h3>1. Google Benim İşletmem'e Kayıt Olun</h3>
<ul>
		<li>Google hesabınızla Google Benim İşletmem sayfasına giderek kaydolabilirsiniz.</li>
				<li>İşletmenizin adını, adresini, iletişim bilgilerini ve kategori bilgilerini doldurun.</li>
		</ul>
			  <h3>2. Doğrulama İşlemini Gerçekleştirin</h3>
					<li>Google, işletmenizi doğrulamak için size bir doğrulama kodu gönderir (genellikle posta yoluyla). Bu kodu platforma girerek kaydınızı tamamlayabilirsiniz.</li>
			  <h3>3. İşletme Profilinizi Tamamlayın</h3>
<li>Profilinizi eksiksiz doldurarak müşterilere daha fazla bilgi sağlayın. Görseller, çalışma saatleri ve özel kampanyalar eklemek işletmenizi daha çekici hale getirir.</li>

  <h2>Google Benim İşletmem'in Avantajları</h2>
		
	<ul>
		<li>Daha Fazla Görünürlük: İşletmenizin arama motoru sonuçlarında görünmesi, daha fazla müşteriye ulaşmanızı sağlar.</li>
				<li>Müşteri Etkileşimi: Kullanıcı yorumlarını yanıtlayabilir, müşteri geri bildirimlerini değerlendirebilirsiniz.</li>
						<li>Yerel SEO: Konum tabanlı aramalarda işletmenizin üst sıralarda çıkmasını kolaylaştırır.</li>
						<li>Ücretsiz Web Sitesi: Google Benim İşletmem ile basit ve etkili bir web sitesi oluşturabilirsiniz.</li>
		</ul>	
		
  <h2>Son Olarak; Google Benim İşletmem</h2>
  <p class="paragraph serif">Google Benim İşletmem, işletmenizi dijital dünyada öne çıkarmak için güçlü bir araçtır. Özellikle dolandırıcılara karşı dikkatli olmanızı ve bu ücretsiz hizmetten tam anlamıyla faydalanmanızı öneriyorum.
      </div>
    </section>

    <section class="bg-image-07 dark overlay padding padding-bottom padding-top">
      <div class="center max-width-m">
        <h2>umarım beğenmişsinizdir</h2>
        <p class="paragraph">Sorularınız varsa benimle iletişime geçebilirsiniz.</p>
      </div>
    </section>


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








  </main>

 
  <?php include 'php/footer.php';?>
  <script src="js/main.js"></script>
</body>
</html>