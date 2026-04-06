<!doctype html>
<html lang="tr">
<head>
  <title>SEO Nedir? | Furkan ERTEK – Blog</title>
  <meta charset="utf-8">
  <meta name="description" content="SEO, bir web sitesinin arama motorlarında görünürlüğünü artırmak ve üst sıralarda yer almasını sağlamak için yapılan çalışmaları ifade eder.">
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
        <h1 class="hero">SEO Nedir?</h1>
      </div>
    </section>

    <section class="bg-gradient-light padding">
		<img style=" display: block; margin-left: auto; margin-right: auto;" class="margin-bottom margin-top rounded" src="media/content/seo-nedir.jpg" srcset="media/content/seo-nedir.jpg 1x, media/content/seo-nedir.jpg 2x" alt="About">
      <div class="max-width-l">
        <div class="row reduce-spacing">
          <div class="col-one-half">
 <p class="paragraph serif">Öncelikle hoş geldiniz! Bu yazımda sizlere dijital dünyada bulunan işletmeler için vazgeçilmez bir yapı olan SEO'dan (Search Engine Optimization – Arama Motoru Optimizasyonu) bahsedeceğim. Arama motorlarının internet dünyasındaki önemi artarken, SEO da bu dünyanın ayrılmaz bir parçası haline geldi. </p>
    </div>
    <div class="col-one-half">
      <p class="paragraph serif"> Ancak, SEO sadece web sitenizin kaynak kodlarına "meta name='keywords' content='anahtar kelime'" gibi basit ifadeler eklemekten ibaret değildir (Bu arada, bu etiket Google tarafından uzun süredir kullanılmıyor). Haydi, SEO'nun nasıl işlediğini birlikte inceleyelim.</p>
    </div>
  </div>
</br>
  <h2>SEO Nedir ve Nasıl Çalışır?</h2>
  <p class="paragraph serif">Kullanıcılar arama motorlarında bir şey aradıklarında, arama motoru onlara en uygun sonucu göstermek ister. Bunu yapmak için, web sitelerini tarar ve dizine ekler. Google, bu işlem için GoogleBot adı verilen bir bot kullanır. Bu bot, internette bulunan tüm siteleri gezerek içeriklerini inceler ve kullanıcı sorgularıyla eşleştirir.
Biraz kafa karışıcı gibi gözükse de uygulama şekillerine bakınca her şey daha net olacak!</p>
		

  <h2>Google Arama Sonuçlarında Üst Sıralarda Yer Almak İçin Neler Yapabilirsiniz?</h2>
		  <h3>1. GoogleBot'un Sitenizi Nasıl Gördüğünü Anlayın</h3>

  <p class="paragraph serif">GoogleBot, web sitenizi bir dizi yazıdan ibaret olarak görür. Sitenizin bu bot tarafından nasıl algılandığını görmek için tarayıcınızda sağ tıklayıp "Sayfa Kaynağını Görüntüle" seçeneğine tıklayabilirsiniz. Bu nedenle, sitenizde kullandığınız görsel öğelerin isimlerini özenle belirlemek, SEO puanınızı yükseltir.</p>

  <h3>2. Anahtar Kelimeleri Etkin Kullanın</h3>
  <p class="paragraph serif">Anahtar kelimeler, belirli bir konuda yapılan aramalarda sıkça kullanılan kelime veya kelime gruplarıdır. Sayfalarınızda konuşunuzla ilgili anahtar kelimeler kullanmak sizi arama motorlarında öne taşır.

Örnek:
Eğer temizlik hizmeti sunan bir firmaysanız, "profesyonel temizlik hizmeti" veya "ev temizleme" gibi anahtar kelimelerle kullanıcılarınıza ulaşabilirsiniz. Anahtar kelimeleri belirlemek için Google'ın ürettiği Google Keyword Planner aracından faydalanabilirsiniz.</p>
<h3>3. Hızlı Yüklenebilir Bir Web Sitesi Oluşturun</h3>
		  <p class="paragraph serif">Google, web sitelerinin yüklenme hızını önemser. Büyük boyutlu görseller veya videolar içeren siteler yavaş yüklenir ve bu durum SEO puanınızı olumsuz etkiler.
İpucu:
Görsel boyutlarını optimize ederek .webp gibi formatlar kullanabilirsiniz. Bu, görsellerin boyutunu küçültürken kalitesini korur.</p>

  <h2>Google Arama Sonuçlarında Üst Sıralarda Yer Almamak İçin Nelerden Kaçınmalısınız?</h2>
	<h3>1. Spam Davranışlardan Kaçının</h3>	
  <p class="paragraph serif">Google, arama motorlarını manipüle etmeye çalışan içeriklere izin vermez. Anahtar kelimeleri gereksiz yere tekrar etmek, arama motorları tarafından spam olarak algılanır ve sitenizi olumsuz etkiler.
Örnek:
Bir sayfada aynı kelimeyi tekrar tekrar kullanmak yerine, anahtar kelimelerle anlam bütünlüğü olan alternatif ifadeler kullanın.</p>
	<h3>2. Kullanıcı Dostu Olmayan Tasarımlardan Kaçının</h3>	
  <p class="paragraph serif">Web sitenizin hem kullanıcı dostu hem de mobil uyumlu olması gerekir. Google, mobil uyumlu sitelere öncelik verir.</p>
<h2>Google'ın Sitenizi İndekslemesi İçin Ne Yapmalısınız?</h2>
		  <h3>1. Bağlantılar Oluşturun</h3>
  <p class="paragraph serif">Google, yeni sayfaları indekslerken başka bir siteden gelen bağlantıları kullanır. Daha önce indekslenmiş bir siteniz varsa, bu siteyi kullanarak yeni sitenize bağlantı verebilirsiniz. Alternatif olarak, başka bir siteden bağlantı almak da etkili bir yöntemdir.</p>
		  <h3>2. Google Search Console'u Kullanın</h3>
 <p class="paragraph serif">Google'ın önemli aracı Google Search Console, sitenizi indekslemek için harika bir seçenektir. Search Console'a kaydolduktan sonra sitenizin sahipliğini doğrulamanız ve "dizine eklenmesini iste" seçeneğini kullanmanız gerekir.</p>
		
	<h2>Son Olarak SEO</h2>
	 <p class="paragraph serif">SEO, bir uzmanlık dalı olarak uzun bir yolculuk gerektirir. Ancak temel adımları doğru attığınızda dijital dünyada fark yaratabilirsiniz.

Kendinize dikkat edin ve unutmayın: Doğru uygulamalarla her zaman bir adım önde olabilirsiniz!</p>
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