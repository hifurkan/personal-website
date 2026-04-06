<!doctype html>
<html lang="tr">
<head>
  <title>QR Kod Üretici | Furkan ERTEK</title>
  <meta charset="utf-8">
  <meta name="description" content="QR Kod Üretici ile metin, bağlantılar, iletişim bilgileri ve daha fazlasını içeren Qr Kodları ücretsiz olarak üretebilirsiniz!">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
  <link rel="icon" href="favicon.png">
  <link rel="mask-icon" href="favicon.svg" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="css/main.css">

  <?php include 'php/og-responsive.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

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



h2 { margin-bottom: 20px; }
h3 { margin-bottom: 10px; }
     .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        .input-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .qr-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            margin: 20px 0;
        }
        
        #qrcode {
            padding: 20px;
            background: white;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .controls {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px 0;
        }
        
        select, button {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        #download-options {
            display: none;
            text-align: center;
            margin-top: 20px;
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
  


<div style="width: 75%; margin: 0 auto;" class="container">
<div style="    margin-top: 6rem;" class="arac-alan">

    <div class="container">
        <h1>QR Kod Üretici</h1>
        
        <div class="input-group">
            <input type="text" id="qr-input" placeholder="Metin veya URL girin" />
        </div>
        
        <div class="controls">
            <select id="qr-size">
                <option value="128">128x128</option>
                <option value="256" selected>256x256</option>
                <option value="512">512x512</option>
            </select>
            
            <button onclick="generateQR()">QR Kod Oluştur</button>
        </div>
        
        <div class="qr-container">
            <div id="qrcode"></div>
            
            <div id="download-options">
                <select id="image-format">
                    <option value="png">PNG</option>
                    <option value="jpeg">JPEG</option>
                </select>
                
                <button onclick="downloadQR()">İndir</button>
            </div>
        </div>
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



  </main>
 <script>
        let qrcode = null;
        
        function generateQR() {
            const text = document.getElementById('qr-input').value;
            const size = parseInt(document.getElementById('qr-size').value);
            
            if (!text) {
                alert('Lütfen bir metin veya URL girin');
                return;
            }
            
            // Clear previous QR code
            document.getElementById('qrcode').innerHTML = '';
            
            // Generate new QR code
            qrcode = new QRCode(document.getElementById('qrcode'), {
                text: text,
                width: size,
                height: size
            });
            
            // Show download options
            document.getElementById('download-options').style.display = 'block';
        }
        
        function downloadQR() {
            const format = document.getElementById('image-format').value;
            const canvas = document.querySelector('#qrcode canvas');
            
            // Create temporary canvas for JPEG conversion if needed
            let downloadCanvas = canvas;
            if (format === 'jpeg') {
                const tempCanvas = document.createElement('canvas');
                tempCanvas.width = canvas.width;
                tempCanvas.height = canvas.height;
                const ctx = tempCanvas.getContext('2d');
                ctx.fillStyle = '#ffffff';
                ctx.fillRect(0, 0, tempCanvas.width, tempCanvas.height);
                ctx.drawImage(canvas, 0, 0);
                downloadCanvas = tempCanvas;
            }
            
            // Convert to data URL and download
            const dataURL = downloadCanvas.toDataURL(`image/${format}`);
            const link = document.createElement('a');
            link.download = `qr-code.${format}`;
            link.href = dataURL;
            link.click();
        }
        
        // Generate QR code when Enter key is pressed
        document.getElementById('qr-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                generateQR();
            }
        });
    </script>
 
  <?php include 'php/footer.php';?>
  <script src="js/main.js"></script>
</body>
</html>