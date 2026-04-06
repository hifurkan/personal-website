<!doctype html>
<html lang="tr">
<head>
  <title>Şifre Üretici | Furkan ERTEK - Kişisel Web Sitem</title>
  <meta charset="utf-8">
  <meta name="description" content="Şifre üretici, web siteleri, e-posta hesapları, banka hesapları güçlü ve güvenli şifreler oluşturmanıza yardımcı olan kullanışlı bir dijital araçtır.">
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
/**/
	          .container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 500px;
        }

        h2 {
            color: #1a73e8;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .password-display {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 6px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        /* Şifre input alanı için stil */
        #password {
            font-family: 'Courier New', monospace;
            font-size: 1.2rem;
            color: #343a40;
            background: transparent;
            border: none;
            outline: none;
            width: 100%;
            padding: 0;
        }

        .options {
            margin-bottom: 1.5rem;
        }

        .option-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid #e9ecef;
        }

        .option-row:last-child {
            border-bottom: none;
        }

        .option-row label {
            color: #495057;
            font-size: 0.95rem;
        }

        input[type="number"] {
            width: 70px;
            padding: 0.3rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
            text-align: center;
        }

        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #1a73e8;
        }

        button {
            width: auto;
            padding: 0.8rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.2s, transform 0.1s;
        }

        .generate-btn {
            background: #110f24;
            color: white;
            width: 100%;
        }

        .generate-btn:hover {
            background: #1557b0;
        }

        .copy-btn {
            background: #6c757d;
            color: white;
            padding: 0.5rem 1rem;
        }

        .copy-btn:hover {
            background: #5a6268;
        }

        button:active {
            transform: scale(0.98);
        }

        .alert {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            background: #28a745;
            color: white;
            border-radius: 6px;
            display: none;
            animation: slideIn 0.3s ease-out;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.5rem;
            }
            #password {
                font-size: 1rem;
            }
            .option-row label {
                font-size: 0.9rem;
            }
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
  
<h1 style="top: 90px; position: relative; text-align: center; font-weight: 300; color:#110f24;">Şifre Üretici</h1>

<div style="width: 75%; margin: 0 auto;" class="container">        

<div style="    margin-top: 1rem;" class="arac-alan">

      <div class="container">
        
        <div class="password-display">
            <input type="text" id="password" readonly>
            <button class="copy-btn" onclick="copyPassword()">
                <i class="fas fa-copy"></i> Kopyala
            </button>
        </div>

        <div class="options">
            <div class="option-row">
                <label>Şifre Uzunluğu:</label>
                <input type="number" id="length" value="12" min="6" max="32">
            </div>
            <div class="option-row">
                <label>Büyük Harfler (A-Z)</label>
                <input type="checkbox" id="uppercase" checked>
            </div>
            <div class="option-row">
                <label>Küçük Harfler (a-z)</label>
                <input type="checkbox" id="lowercase" checked>
            </div>
            <div class="option-row">
                <label>Sayılar (0-9)</label>
                <input type="checkbox" id="numbers" checked>
            </div>
            <div class="option-row">
                <label>Özel Karakterler (!@#$...)</label>
                <input type="checkbox" id="special">
            </div>
        </div>

        <button class="generate-btn" onclick="generatePassword()">Şifre Oluştur</button>
    </div>

    <div class="alert" id="alert">Şifre kopyalandı!</div>

	
	
	
	
	
	

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
        function generatePassword() {
            const length = document.getElementById('length').value;
            const uppercase = document.getElementById('uppercase').checked;
            const lowercase = document.getElementById('lowercase').checked;
            const numbers = document.getElementById('numbers').checked;
            const special = document.getElementById('special').checked;

            let chars = '';
            if (uppercase) chars += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            if (lowercase) chars += 'abcdefghijklmnopqrstuvwxyz';
            if (numbers) chars += '0123456789';
            if (special) chars += '!@#$%^&*()_+-=[]{}|;:,.<>?';

            if (!chars) {
                document.getElementById('password').value = 'Lütfen en az bir seçenek seçin';
                return;
            }

            let password = '';
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * chars.length);
                password += chars[randomIndex];
            }

            document.getElementById('password').value = password;
        }

        function copyPassword() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.value && passwordInput.value !== 'Lütfen en az bir seçenek seçin') {
                passwordInput.select();
                document.execCommand('copy');
                
                const alert = document.getElementById('alert');
                alert.style.display = 'block';
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 2000);
            }
        }

        // Şifre uzunluğu kontrolü
        document.getElementById('length').addEventListener('input', function() {
            if (this.value < 6) this.value = 6;
            if (this.value > 32) this.value = 32;
        });

        // Sayfa yüklendiğinde ilk şifreyi oluştur
        document.addEventListener('DOMContentLoaded', generatePassword);
    </script>
 
  <?php include 'php/footer.php';?>
  <script src="js/main.js"></script>
</body>
</html>