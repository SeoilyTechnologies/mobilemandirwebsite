<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>MobileMandir — Aarti, Chalisa, Katha & Mantra App</title>
<meta name="description" content="Experience devotion on the go with MobileMandir: Aarti, Chalisa, Katha & Mantra videos with lyrics, horoscope, daily rashi & festival timings — all in one app.">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Font Awesome 4 (legacy) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="icon" href="images/favicon-color.png" type="image/gif" sizes="100x100">
</head>
<body>

<!-- <header class="header">
  <div class="header-left">
    <img class="mandir-logo" src="images/logo.png" alt="Logo" />
  </div>
  <button id="lang-toggle" class="btn-lang" aria-label="Toggle language">EN</button>
</header> -->

<header class="header">
  <div class="header-wrapper">
    <div class="header-left">
  <!-- <img id="logo-en" class="mandir-logo" src="images/logo-english-white.png" alt="English Logo" /> -->
  <!-- <img id="logo-hi" class="mandir-logo" src="images/logo-hindi-color.png" alt="Hindi Logo" /> -->
  <a href="/"><img id="logo-en" class="mandir-logo" src="images/logo-english-white.png" alt="English Logo"></a>
<a href="/"><img id="logo-hi" class="mandir-logo" src="images/logo-hindi-white.png" alt="Hindi Logo" style="display:none;">
</a>

</div>
    <!-- <button id="lang-toggle" class="btn-lang" aria-label="Toggle language">EN</button> -->
    <div id="lang-toggle" class="btn-lang" aria-label="Toggle language" role="switch" aria-checked="false">
  <span class="toggle-option" data-lang="hi">HN</span>
  <span class="toggle-option" data-lang="en">EN</span>
  <div class="toggle-slider"></div>
</div>

  </div>
</header>


<div class="container" id="slider-content">

  <div class="content-left">
    <h1 id="title">Aarti, Chalisa, Katha & Mantra</h1>
    <p id="desc">The Mandir App brings the divine experience straight to your phone with a rich collection of Aarti, Chalisa, Katha, and Mantra videos, each supported with easy-to-read lyrics for a deeper spiritual connection. With high-quality audio, clear videos, and synchronized lyrics, users can chant along effortlessly and understand the meaning behind every prayer.</p>

    <!-- NEW APP DOWNLOAD BUTTONS -->
    <div class="links" id="links">
      <a href="#" rel="noopener"><img src="images/app-store.webp" alt="App Store"></a>
      <a href="#" rel="noopener"><img src="images/google-play.webp" alt="Google Play"></a>
    </div>
  </div>

  <div class="content-right">
    <div class="banner-image-outer">
      <img id="banner-img" src="images/banner-image-1.png" alt="Banner Image">
    </div>
  </div>

</div>

<footer class="custom-footer">
  <div class="footer-wrapper">
  <div class="footer-top">
    <span class="follow-label">Follow us</span>

    <div class="social-icons">
      <a href="https://www.instagram.com/mobilemandirapp/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.youtube.com/@MobileMandirApp" target="_blank"><i class="fab fa-youtube"></i></a>
      <a href="https://www.facebook.com/MobileMandirApp" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.linkedin.com/company/mobilemandirapp" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      <!-- <a href="" target="_blank"><i class="fab fa-x-twitter"></i></a>
      <a href="" target="_blank"><i class="fab fa-tiktok"></i></a> -->
    </div>
  </div>

  <hr class="footer-line">

  <div class="footer-bottom">

    <ul class="footer-links">
      <li><a href="privacy-policy">Privacy Policy</a></li>
      <li><a href="terms-and-conditions">Terms & Conditions</a></li>
    </ul>

     <ul class="footer-links">
      <li><a>Copyright © 2025 MobileMandir</a></li>
    </ul>
   </div>
 </div>
</footer>


<div class="bottom-cards-container">
  <div class="bottom-cards" tabindex="0" aria-label="Feature tabs">
    <div class="card active" data-slide="0" role="button" tabindex="0" aria-pressed="true">
      <span id="card-text-0">Aarti, Chalisa, <br>Katha & Mantra</span>
      <img src="images/aarti.jpg" alt="Tab groups image">
    </div>
    <div class="card" data-slide="1" role="button" tabindex="0" aria-pressed="false">
      <span id="card-text-1">Horoscope</span>
      <img src="images/horoscope.jpg" alt="PDF copy">
    </div>
    <div class="card" data-slide="2" role="button" tabindex="0" aria-pressed="false">
      <span id="card-text-2">Astrology</span>
      <img src="images/astrology.jpg" alt="Google Lens">
    </div>
    <div class="card" data-slide="3" role="button" tabindex="0" aria-pressed="false">
      <span id="card-text-3">Today's Rashi <br>& Festival</span>
      <img src="images/rashi-and-festival.jpg" alt="Share passwords">
    </div>
    <div class="card" data-slide="4" role="button" tabindex="0" aria-pressed="false">
      <span id="card-text-4">Shubh Muhurat <br>& Special Pooja</span>
      <img src="images/shubh-muhurat.jpg" alt="More features">
    </div>
  </div>

  <div class="nav-buttons">
    <button id="prev" aria-label="Previous">&#10094;</button>
    <button id="next" aria-label="Next">&#10095;</button>
  </div>
</div>

<script>
const slides = [
  {
    en: {
      title: "Aarti, Chalisa, Katha & Mantra",
      desc: "The Mandir App brings the divine experience straight to your phone with a rich collection of Aarti, Chalisa, Katha, and Mantra videos, each supported with easy-to-read lyrics for a deeper spiritual connection. With high-quality audio, clear videos, and synchronized lyrics, users can chant along effortlessly and understand the meaning behind every prayer.",
      img: "images/aarti.jpg",
      cardText: "Aarti, Chalisa, <br>Katha & Mantra"
    },
    hi: {
      title: "आरती, चालीसा, कथा और मंत्र",
      desc: "मंदिर ऐप आरती, चालीसा, कथा और मंत्र वीडियो के समृद्ध संग्रह के साथ सीधे आपके फोन पर दिव्य अनुभव लाता है, प्रत्येक एक गहरे आध्यात्मिक संबंध के लिए आसानी से पढ़े जाने वाले गीतों के साथ समर्थित है। उच्च गुणवत्ता वाले ऑडियो, स्पष्ट वीडियो और सिंक्रनाइज़ गीत के साथ, उपयोगकर्ता सहजता से जप कर सकते हैं और प्रत्येक प्रार्थना के पीछे के अर्थ को समझ सकते हैं।",
      img: "images/aarti.jpg",
      cardText: "आरती, चालीसा, <br>कथा और मंत्र"
    }
  },
  {
    en: {
      title: "Horoscope",
      desc: "Stay one step ahead with the Mandir App’s personalized Horoscope feature that offers daily astrological predictions. Users can easily check what the stars have in store for their career, love life, finances, health, and more. Designed for clarity and accuracy, this feature of the Mandir App ensures spiritual awareness meets practical life wisdom in one place.",
      img: "images/horoscope.jpg",
      cardText: "Horoscope"
    },
    hi: {
      title: "राशिफल",
      desc: "मंदिर ऐप के वैयक्तिकृत राशिफल फीचर के साथ एक कदम आगे रहें जो दैनिक ज्योतिषीय भविष्यवाणियां प्रदान करता है। उपयोगकर्ता आसानी से देख सकते हैं कि सितारों के पास उनके करियर, प्रेम जीवन, वित्त, स्वास्थ्य और बहुत कुछ के लिए क्या है। स्पष्टता और सटीकता के लिए डिज़ाइन किया गया, मंदिर ऐप की यह सुविधा सुनिश्चित करती है कि आध्यात्मिक जागरूकता एक ही स्थान पर व्यावहारिक जीवन ज्ञान से मिलती है।",
      img: "images/horoscope.jpg",
      cardText: "राशिफल"
    }
  },
  {
    en: {
      title: "Astrology",
      desc: "The Mandir App provides a dedicated Astrology section that helps users understand the deeper science behind planets, zodiac signs, doshas, and cosmic energies. This feature allows people to explore their kundli, learn about astrological remedies, understand planetary movements, and gain clarity on how celestial events impact daily life.",
      img: "images/astrology.jpg",
      cardText: "Astrology"
    },
    hi: {
      title: "ज्योतिष",
      desc: "मंदिर ऐप एक समर्पित ज्योतिष अनुभाग प्रदान करता है जो उपयोगकर्ताओं को ग्रहों, राशियों, दोषों और ब्रह्मांडीय ऊर्जाओं के पीछे के गहन विज्ञान को समझने में मदद करता है। यह सुविधा लोगों को अपनी कुंडली का पता लगाने, ज्योतिषीय उपायों के बारे में जानने, ग्रहों की चाल को समझने और यह स्पष्ट करने की अनुमति देती है कि खगोलीय घटनाएं दैनिक जीवन को कैसे प्रभावित करती हैं।",
      img: "images/astrology.jpg",
      cardText: "ज्योतिष"
    }
  },
  {
    en: {
      title: "Today's Rashi & Festival",
      desc: "With the Mandir App’s Today’s Rashi & Festival feature, users can instantly check their daily zodiac updates along with information on festivals, vrat, and auspicious events. It provides accurate Rashi predictions for the day along with important ongoing festivals. Whether it’s Ekadashi, Navratri, Makar Sankranti, or any regional celebration, the app ensures you stay aware and prepared.",
      img: "images/rashi-and-festival.jpg",
      cardText: "Today's Rashi <br>& Festival"
    },
    hi: {
      title: "आज की राशि एवं त्यौहार",
      desc: "मंदिर ऐप के आज की राशि और त्योहार सुविधा के साथ, उपयोगकर्ता त्योहारों, व्रत और शुभ घटनाओं की जानकारी के साथ-साथ अपने दैनिक राशि अपडेट को तुरंत देख सकते हैं। यह महत्वपूर्ण चल रहे त्योहारों के साथ-साथ दिन के लिए सटीक राशि भविष्यवाणियां प्रदान करता है। चाहे वह एकादशी, नवरात्रि, मकर संक्रांति, या कोई क्षेत्रीय उत्सव हो, ऐप यह सुनिश्चित करता है कि आप जागरूक और तैयार रहें।",
      img: "images/rashi-and-festival.jpg",
      cardText: "आज की <br>राशि एवं त्यौहार"
    }
  },
  {
    en: {
      title: "Shubh Muhurat & Special Pooja",
      desc: "The Mandir App guides users with daily Shubh Muhurat details perfect for planning important activities like pooja, travel, business, or new beginnings. Along with auspicious timings, the app also highlights Special Pooja of each day according to divine significance, for example, Monday for Lord Shiva, Tuesday for Hanuman Ji, Thursday for Guru Brihaspati, and so on.",
      img: "images/shubh-muhurat.jpg",
      cardText: "Muhurat <br>& Pooja"
    },
    hi: {
      title: "शुभ मुहूर्त एवं विशेष पूजा",
      desc: "मंदिर ऐप उपयोगकर्ताओं को पूजा, यात्रा, व्यवसाय या नई शुरुआत जैसी महत्वपूर्ण गतिविधियों की योजना बनाने के लिए दैनिक शुभ मुहूर्त विवरण के साथ मार्गदर्शन करता है। शुभ समय के साथ, ऐप दैवीय महत्व के अनुसार प्रत्येक दिन की विशेष पूजा पर भी प्रकाश डालता है, उदाहरण के लिए, भगवान शिव के लिए सोमवार, हनुमान जी के लिए मंगलवार, गुरु बृहस्पति के लिए गुरुवार, इत्यादि।",
      img: "images/shubh-muhurat.jpg",
      cardText: "मुहूर्त <br>एवं पूजा"
    }
  }
];

let index = 0;
let lang = 'en';

function updateSlide() {
  // Update main content based on current language
  document.getElementById("title").innerText = slides[index][lang].title;
  document.getElementById("desc").innerText = slides[index][lang].desc;
  document.getElementById("banner-img").src = slides[index][lang].img;

  // Update all card texts based on current language
  slides.forEach((slide, i) => {
    document.getElementById(`card-text-${i}`).innerHTML = slide[lang].cardText;
  });

  // Remove active and aria-pressed from all cards
  document.querySelectorAll(".card").forEach(card => {
    card.classList.remove("active");
    card.setAttribute("aria-pressed", "false");
  });

  // Add active class and aria-pressed = true to the current card
  const activeCard = document.querySelector(`.card[data-slide="${index}"]`);
  if(activeCard) {
    activeCard.classList.add("active");
    activeCard.setAttribute("aria-pressed", "true");
    // Scroll active card into view smoothly within the scroll container
    activeCard.scrollIntoView({behavior:"smooth", inline:"center"});
  }
  
  // Update language toggle slider position and text colors
  const langToggle = document.getElementById("lang-toggle");
  langToggle.setAttribute("data-lang", lang);

  // Toggle logos
  if(lang === 'hi') {
    document.getElementById("logo-en").style.display = 'none';
    document.getElementById("logo-hi").style.display = 'block';
  } else {
    document.getElementById("logo-en").style.display = 'block';
    document.getElementById("logo-hi").style.display = 'none';
  }
}

document.getElementById("next").onclick = () => {
  index = (index + 1) % slides.length;
  updateSlide();
};

document.getElementById("prev").onclick = () => {
  index = (index - 1 + slides.length) % slides.length;
  updateSlide();
};

document.querySelectorAll(".card").forEach(card => {
  card.onclick = () => {
    index = parseInt(card.getAttribute("data-slide"));
    updateSlide();
  };
});

// Improved Language toggle
const langToggle = document.getElementById("lang-toggle");
langToggle.addEventListener("click", () => {
  lang = (lang === 'en') ? 'hi' : 'en';
  updateSlide();
});

// Drag to scroll functionality
const slider = document.querySelector('.bottom-cards');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('dragging');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
  slider.style.cursor = 'grabbing';
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('dragging');
  slider.style.cursor = 'grab';
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('dragging');
  slider.style.cursor = 'grab';
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 2; // scroll-fast multiplier
  slider.scrollLeft = scrollLeft - walk;
});
slider.style.cursor = 'grab';

updateSlide();

</script>

</body>
</html>
