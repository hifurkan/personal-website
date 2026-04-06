<!doctype html>
<html lang="tr">
<head>
  <title>Karakter Sayacı | Furkan ERTEK – Kişisel Web Sitem</title>
  <meta charset="utf-8">
  <meta name="description" content="Karakter sayacı, metinlerinizin veya içeriklerinizin belirli bir karakter sınırlamasına uygun olup olmadığını belirlemek için kullanılan bir online araçtır.">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
  <link rel="icon" href="favicon.png">
  <link rel="mask-icon" href="favicon.svg" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="css/main.css">

  <?php include 'php/og-responsive.php'; ?>

  <style>
	  a{
		  color: #110f24;
	  }
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
	  
	  h2{
		  font-size: 1.75rem;
    line-height: 2.25rem;
	  }
	  h3{
		      font-size: 1.5rem;
	  }
	  h1{
		  font-size:3rem;
	  }
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

  <header class="header-main dark">
  <?php include 'php/navbar.php';?>
  </header>

  <main>

    <section style="background-color:#1d1a3d">
  

      <h1 style="top: 90px; position: relative; text-align: center; font-weight: 300; color:white;">Karakter Sayacı</span></h1>

<div style="width: 75%; margin: 0 auto;" class="container">
<div style="    margin-top: 6rem;" class="arac-alan">

    <div class="form-container">
        <textarea placeholder="Buraya metin girin" style="width: 100%;
height: 30rem; padding:1rem; border-radius:35px" id="metin"></textarea>
    </div>
</br>
    <div style="    text-align: center; display: flex; justify-content: space-around; padding-top:1rem; border-color: white; background-color: white; border-radius: 10px;" class="result-container">
        <div><p style="color:#1d1a3d"><span id="karakter_sayisi" style="color:#1d1a3d">0</span></br> Karakter</p></div>
        <div><p style="color:1d1a3d"><span id="kelime_sayisi" style="color:1d1a3d">0</span></br> Kelime</p></div>
        <p style="color:1d1a3d"><span id="bosluksuz_karakter_sayisi" style="color:1d1a3d">0</span></br> Boşluksuz Karakter Sayısı</p>
  <p style="color:1d1a3d"><span id="paragraf_sayisi" style="color:1d1a3d">0</span></br> Paragraf</p>
</div> 

</div> </br>  </br>   

<div style="color: #1d1a3e;background-color: #ffffff;text-align: center;border-radius: 20px;padding: 1rem;" class="karakter-sayaci-aciklama">
				<h2>Karakter Sayacı Nedir?</h2>
				<p>Karakter sayacı, yazdığınız metinlerin kaç karakterden ve kelimeden oluştuğunu ölçebilen bir araçtır. Belirli karakter ve kelime sınırlamalarına uymanız gereken metinleri kolayca ölçmenizi sağlar.</p><p>Bu kullanışlı araç, yazılı içeriklerinizi, özellikle SEO açısından optimize etmek ve metinlerinizi daha etkili hale getirmek için kullanılır. Karakter sayacı, başlıklar, meta açıklamalar, sosyal medya gönderileri ve daha fazlası gibi çeşitli metinleri hızlı ve kolay bir şekilde analiz etmenizi sağlar.</p>
				<h2>Karakter Sayacı Kimler Tarafından Kullanılır?</h2>
				<p>Karakter sayacı, yazdığı metnin karakter sayısını, kelime sayısını ve paragraf sayısını ölçmek isteyen herkes tarafından kolayca kullanılabilir. Blog yazarları, dijital pazarlamacılar, SEO uzmanları, içerik üreticileri, öğrenciler ve işletme sahipleri, karakter sayacının sunduğu avantajlardan faydalanabilirler. İnternet üzerindeki metinlerin sınırlı karakterler içinde kalmak zorunda olduğu durumlarda, karakter sayacı bu kişilere metinlerini optimize etme ve daha etkili hale getirme konusunda yardımcı olur.</p>
				<h2>Dijital Araç: Karakter Sayacı</h2>
				<p style="    margin-bottom: 3rem;">Dijital Araç tarafından sunulan karakter sayacı, kullanıcılara metinlerinin karakter sayılarını, kelime sayılarını, paragraf sayılarını ve boşluksuz karakter sayılarını kolayca ölçme imkanı sunar. Dijital Araç tarafından sunulan bütün araçlar ücretsizdir ve sonsuza kadar ücretsiz kalacaktır!</p>
		<h2>Sosyal Medya Platformlarındaki Karakter Sınırlamaları<h2>
<h3>Twitter Karakter Sınırı</h3>
<p>Twitter kurulduktan sonra yıllarca 140 karakter sınırına sahip bir sosyal medyaydı. 2017 yılından itibaren bu sınır iki katı çıkarıldı. Twitter'ın paylaşımlarda karakter sınırı şu anda 280 karakter.</p>

<h3>İnstagram Açıklama Karakter Sınırı</h3>
<p>İnstagram açıklamalarında 2200 karakterlik bir sınır bulunuyor. Ayrıca platform açıklamalarda 30 adet #hastag kullanımına izin veriyor.</p>

<h3>Youtube Başlık - Açıklama Karakter Sınırı</h3>
<p>Youtube'da paylaştığınız bir video için kullanacağınız başlıkta 70, açıklamada ise 5000 karakterlik bir sınır bulunuyor.</p>

<h3>Twitch Biyografi Karakter Sınırı</h3>
<p>Twitch'de bulunan biyografi yazısı alanlarında 150 karakterlik bir karakter sınırı bulunuyor.</p>
			<h2>Etkileyici bir blog yazısı nasıl yazıllr?</h2>
<p>Etkileyici bir blog yazmanın ilk adımı etkileyici bir konu bulmaktır. Kullanıcıların araştırmaktan ve öğrenmekten keyif alacağı konular hakkında blog yazısı oluşturmak sizi diğer blog yazarlarlarından bir adım öne taşıyacaktır.</p>
<ul>
<h3>Blog Yazarken Dikkat Edilmesi Gerekenler Nelerdir?</h3>
<li style="list-style: none;">Giriş, Gelişme ve Sonuç Bölümlerini Atlamayın</li>
<li style="list-style: none;">Alt Başlıklar Kullanın</li>
<li style="list-style: none;">Kullanacağınız Kelime Sayılarına Dikkat Edin</li>
<li style="list-style: none;">Yazım Kurallarına Dikkat Edin</li>
<li style="list-style: none;">Noktalama İşaretleri Kullanımına Dikkat Edin</li></ul>
		</div>		</div>

<p>diğer popüler araçlar</p>
<p>diğer popüler bloglar</p>

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






  </main>

 
  <?php include 'php/footer.php';?>
  <script src="js/main.js"></script>
</body>
</html>