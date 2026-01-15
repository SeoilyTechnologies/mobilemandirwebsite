<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Privacy Policy | MobileMandir</title>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/favicon-color.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<!-- ================= HEADER (SAME AS HOMEPAGE) ================= -->
<header class="header">
  <div class="header-wrapper">
    <div class="header-left">
      <a href="/"><img id="logo-en" class="mandir-logo" src="images/logo-english-white.png" alt="MobileMandir Logo"></a>
      <a href="/"><img id="logo-hi" class="mandir-logo" src="images/logo-hindi-white.png" alt="मोबाइल मंदिर" style="display:none;"></a>
    </div>

    <div id="lang-toggle" class="btn-lang" data-lang="en">
      <span class="toggle-option" data-lang="hi">HN</span>
      <span class="toggle-option" data-lang="en">EN</span>
      <div class="toggle-slider"></div>
    </div>
  </div>
</header>

<!-- ================= BANNER ================= -->
<section class="legal-banner">
  <h1 id="page-title">Privacy Policy</h1>
</section>

<!-- ================= CONTENT ================= -->
<section class="legal-content">
  <div class="legal-wrapper" id="page-content">

    <p>
      MobileMandir (“we”, “our”, or “us”) respects your privacy and is committed
      to protecting the personal information of our users. This Privacy Policy
      explains how we collect, use, store, and safeguard your information when
      you use the MobileMandir mobile application and website.
    </p>

    <h2>Information We Collect</h2>
    <p>
      We may collect limited information such as device information, app usage
      data, IP address, and optional contact details provided by you. We do not
      collect sensitive personal information unless explicitly required.
    </p>

    <h2>How We Use Your Information</h2>
    <ul>
      <li>To provide and improve app features</li>
      <li>To personalize devotional and spiritual content</li>
      <li>To analyze usage and performance</li>
      <li>To ensure security and prevent misuse</li>
    </ul>

    <h2>Spiritual & Astrology Disclaimer</h2>
    <p>
      All devotional, horoscope, and astrology-related content available on
      MobileMandir is provided for informational and spiritual guidance purposes
      only. We do not guarantee outcomes or results.
    </p>

    <h2>Third-Party Services</h2>
    <p>
      MobileMandir may use third-party services such as analytics, video platforms,
      or notification tools. These services operate under their own privacy policies.
    </p>

    <h2>Data Security</h2>
    <p>
      We use reasonable technical and organizational safeguards to protect your
      information. However, no method of electronic transmission or storage is
      completely secure.
    </p>

    <h2>Your Consent</h2>
    <p>
      By accessing or using the MobileMandir app or website, you agree to this
      Privacy Policy.
    </p>

    <h2>Policy Updates</h2>
    <p>
      We may update this Privacy Policy from time to time. Any changes will be
      reflected on this page.
    </p>

    <h2>Contact Us</h2>
    <p>
      If you have any questions regarding this Privacy Policy, please contact us at:
      <br><strong><a href="mailto: mobilemandiapp@gmail.com">mobilemandiapp@gmail.com</a></strong>
    </p>

  </div>
</section>

<!-- ================= FOOTER (SAME AS HOMEPAGE) ================= -->
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
      <li><a href="privacy-policy.php">Privacy Policy</a></li>
      <li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
    </ul>

     <ul class="footer-links">
      <li><a>Copyright © 2025 MobileMandir</a></li>
    </ul>
   </div>
 </div>
</footer>

<!-- ================= LANGUAGE TOGGLE SCRIPT ================= -->
<script>
let lang = 'en';

const content = {
  en: {
    title: "Privacy Policy",
    body: document.getElementById("page-content").innerHTML
  },
  hi: {
    title: "गोपनीयता नीति",
    body: `
      <p>
        मोबाइल मंदिर (“हम”, “हमारा”) उपयोगकर्ताओं की गोपनीयता का सम्मान करता है
        और उनकी व्यक्तिगत जानकारी की सुरक्षा के लिए प्रतिबद्ध है।
      </p>

      <h2>हम कौन सी जानकारी एकत्र करते हैं</h2>
      <p>
        हम डिवाइस जानकारी, ऐप उपयोग डेटा और सीमित संपर्क विवरण एकत्र कर सकते हैं।
        हम संवेदनशील व्यक्तिगत जानकारी एकत्र नहीं करते।
      </p>

      <h2>जानकारी का उपयोग</h2>
      <ul>
        <li>ऐप सेवाओं में सुधार</li>
        <li>भक्ति सामग्री को व्यक्तिगत बनाने हेतु</li>
        <li>सुरक्षा एवं दुरुपयोग रोकने के लिए</li>
      </ul>

      <h2>भक्ति एवं ज्योतिष अस्वीकरण</h2>
      <p>
        सभी भक्ति, राशिफल एवं ज्योतिषीय सामग्री केवल सामान्य मार्गदर्शन के लिए है।
        मोबाइल मंदिर किसी भी परिणाम की गारंटी नहीं देता।
      </p>

      <h2>तृतीय-पक्ष सेवाएं</h2>
      <p>
        हम विश्लेषण और वीडियो सेवाओं हेतु तृतीय-पक्ष टूल का उपयोग कर सकते हैं।
      </p>

      <h2>डेटा सुरक्षा</h2>
      <p>
        आपकी जानकारी की सुरक्षा के लिए उचित उपाय किए जाते हैं,
        हालांकि पूर्ण सुरक्षा की गारंटी संभव नहीं है।
      </p>

      <h2>संपर्क करें</h2>
      <p>
        ईमेल: <strong>support@mobilemandirapp.com</strong>
      </p>
    `
  }
};

document.getElementById("lang-toggle").onclick = () => {
  lang = lang === 'en' ? 'hi' : 'en';

  document.getElementById("page-title").innerText = content[lang].title;
  document.getElementById("page-content").innerHTML = content[lang].body;

  document.getElementById("logo-en").style.display = lang === 'en' ? 'block' : 'none';
  document.getElementById("logo-hi").style.display = lang === 'hi' ? 'block' : 'none';

  document.getElementById("lang-toggle").setAttribute("data-lang", lang);
};
</script>

</body>
</html>
