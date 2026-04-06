<!doctype html>
<html lang="tr">
<head>
  <title>Başlık - Meta Açıklama Uzunluk Testi | Furkan ERTEK</title>
  <meta charset="utf-8">
  <meta name="description" content="Meta title ve description ölçüm aracı, web sayfalarınızın meta başlık ve açıklama etiketlerinin uzunluğunu piksel cinsinden ölçmenize yardımcı olur.">
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
	  <-- -->
	     #container {
        max-width: 75%;
        min-width: 200px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
      }

      h1 {
    margin: 3rem 0 2rem;
        text-align: center;
		  
		  position: relative;
    top: 15px;
    font-size: 28px;
    text-align: center;
    padding: 15px;
		  
      }

      label {
        display: block;
        color: #333;
        margin-bottom: 10px;
      }

      input[type="text"] {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }

      #metin-uzunlugu {
      color: #4caf50;
        font-weight: bold;
        margin-bottom: 20px;
        display: block;
      }

      #metin-uzunlugu.warning {
        color: red;
        font-weight: bold;
      }
	 #metin-uzunlugu-2 {
      color: #4caf50;
        font-weight: bold;
        margin-bottom: 20px;
        display: block;
      }

      #metin-uzunlugu-2.warning {
        color: red;
        font-weight: bold;
      }
	h2{
		
		margin-bottom: 1rem;
    margin-top: 1rem;
		color: #1d1a3d;
	}
	 </-- --/>
	  .container {
  max-width: 1000px;
  margin: 0 auto;
  padding: 20px;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.input-group input {
  width: 100%;
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

.pixel-count {
  margin-top: 5px;
  font-weight: bold;
}

.warning { color: red; }
.success { color: green; }




h2 { margin-bottom: 20px; }
h3 { margin-bottom: 10px; }

	  .preview-box {
  border: 1px solid #ddd;
  padding: 15px;
  margin-bottom: 20px;
  border-radius: 4px;
  width: 45%;
}

.preview-title {
  color: #1a0dab;
  font-size: 20px;
  margin-bottom: 5px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 580px;
}

.preview-description {
  color: #4d5156;
  font-size: 14px;
  line-height: 1.58;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  max-width: 920px;
}

.mobile-preview .preview-title {
  font-size: 16px;
  max-width: 580px;
}

.mobile-preview .preview-description {
  font-size: 13px;
  max-width: 920px;
}
	  .preview-box {
  border: 1px solid #ddd;
  padding: 15px;
  margin-bottom: 20px;
  border-radius: 4px;
  width: 45%;
  background: white;
}

.preview-title {
  color: #1a0dab;
  font-size: 20px;
  margin-bottom: 5px;
  line-height: 1.2;
  word-wrap: break-word;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.preview-description {
  color: #4d5156;
  font-size: 14px;
  line-height: 1.58;
  word-wrap: break-word;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.mobile-preview .preview-title {
  font-size: 16px;
}

.mobile-preview .preview-description {
  font-size: 13px;
}

.pixel-count {
  margin-top: 5px;
  font-size: 14px;
}

.pixel-count.warning {
  color: #dc3545;
}

.pixel-count.success {
  color: #28a745;
}
	  .preview-box {
  border: 1px solid #ddd;
  padding: 15px;
  margin-bottom: 20px;
  border-radius: 4px;
  width: 45%;
  min-width: 200px;
}

.preview-title {
  color: #1a0dab;
  font-size: 20px;
  margin-bottom: 5px;
  white-space: normal;
  word-wrap: break-word;
  overflow-wrap: break-word;
  line-height: 1.2;
}

.preview-description {
  color: #4d5156;
  font-size: 14px;
  line-height: 1.58;
  white-space: normal;
  word-wrap: break-word;
  overflow-wrap: break-word;
}

.mobile-preview .preview-title {
  font-size: 16px;
}

.mobile-preview .preview-description {
  font-size: 13px;
}
  </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="page page-home preload">

  <header style="background-color: #1d1a3d;" class="header-main dark">
  <?php include 'php/navbar.php';?>
  </header>

  <main>

    <section>
  

      <h1 style="top: 90px; position: relative; text-align: center; font-weight: 300; color: #1d1a3d;">Başlık &amp; Meta Açıklama Uzunluk Testi</span></h1>

<div style="width: 75%; margin: 0 auto;" class="container">
<div style="    margin-top: 6rem;" class="arac-alan">
<div id="container">
		<h2>Title </h2>
      <p>Meta Title'ınızı buradan ölçün!</p>
    
	<input type="text" id="titleInput" placeholder="Başlığınız">
    <div id="titlePixels" class="pixel-count">0 pixels</div>
	  
	       <h2>Description</h2>
	  <p>Meta Description'unu buradan ölçün!</p>
   <input type="text" id="descInput" placeholder="Meta açıklamanız">
    <div id="descPixels" class="pixel-count">0 pixels</div>
</div>

</br>
     <div style="display: flex; justify-content: space-around;" class="preview-container">
   <div style="border-radius: 25px; width: 45%;" class="preview-box desktop-preview"> <div> <h3>Masaüstü Görünümq</h3>
   
      <div id="desktopTitle" class="preview-title">Başlık</div>
      <div id="desktopDesc" class="preview-description">Meta Açıklama</div>
		
    </div></div>
    <div style=" border-radius: 25px; height: 250px; width: 45%;" class="preview-box mobile-preview">

   <div> <h3>Mobil Görünüm</h3>
      <div id="mobileTitle" class="preview-title">Başlık</div>
      <div id="mobileDesc" class="preview-description">Meta Açıklama</div>
    </div></div>
  </div>

</div> </br>  </br>   

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

<script>
function measureText(text, fontSize, fontFamily = 'Arial') {
  const canvas = document.createElement('canvas');
  const ctx = canvas.getContext('2d');
  ctx.font = `${fontSize}px ${fontFamily}`;
  return ctx.measureText(text).width;
}

function truncateToPixels(text, maxPixels, fontSize) {
  if (!text) return '';
  
  let width = measureText(text, fontSize);
  if (width <= maxPixels) return text;
  
  let words = text.split(' ');
  let result = '';
  let currentLine = '';
  let currentWidth = 0;
  
  for (let word of words) {
    let testLine = currentLine + (currentLine ? ' ' : '') + word;
    let testWidth = measureText(testLine, fontSize);
    
    if (testWidth > maxPixels) {
      if (currentLine) {
        result += currentLine + '\n';
        currentLine = word;
        currentWidth = measureText(word, fontSize);
      } else {
        // If single word is too long, truncate it
        let truncated = '';
        for (let i = 0; i < word.length; i++) {
          let test = truncated + word[i];
          if (measureText(test + '...', fontSize) > maxPixels) break;
          truncated = test;
        }
        currentLine = truncated + '...';
        break;
      }
    } else {
      currentLine = testLine;
      currentWidth = testWidth;
    }
  }
  
  result += currentLine;
  return result;
}

function updatePreviews(input, isTitle) {
  const text = input.value;
  const fontSize = isTitle ? 20 : 14;
  const pixels = measureText(text, fontSize);
  
  const pixelDisplay = document.getElementById(isTitle ? 'titlePixels' : 'descPixels');
  pixelDisplay.textContent = `${Math.round(pixels)} pixels`;
  
  if (isTitle) {
    const maxWidth = 580;
    pixelDisplay.className = 'pixel-count ' + 
      (pixels < 250 || pixels > maxWidth ? 'warning' : 'success');
    
    const truncated = truncateToPixels(text, maxWidth, fontSize);
    document.getElementById('desktopTitle').textContent = truncated || 'Title Preview';
    document.getElementById('mobileTitle').textContent = truncated || 'Title Preview';
  } else {
    const maxWidth = 920;
    pixelDisplay.className = 'pixel-count ' + 
      (pixels < 400 || pixels > maxWidth ? 'warning' : 'success');
    
    const truncated = truncateToPixels(text, maxWidth, fontSize);
    document.getElementById('desktopDesc').textContent = truncated || 'Description Preview';
    document.getElementById('mobileDesc').textContent = truncated || 'Description Preview';
  }
}

// Event listeners
document.getElementById('titleInput').addEventListener('input', 
  (e) => updatePreviews(e.target, true));
document.getElementById('descInput').addEventListener('input', 
  (e) => updatePreviews(e.target, false));
</script>

  </main>

 
  <?php include 'php/footer.php';?>
  <script src="js/main.js"></script>
</body>
</html>