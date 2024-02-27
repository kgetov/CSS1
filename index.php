<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "You don't have permission to access this resource.";
}

if (isset($_GET['search'])) {
    $filename = "list-1.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['search']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }    
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $url = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

$filename = "list-1.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$brand = "";
foreach ($lines as $item) {
    if (strtolower($_GET['search']) === strtolower($item)) {
        $brand = strtoupper($item);
        break;
    }
}

$url  = "http://ftp.drbaharav.com/?search=" . $brand;
$amp  = "https://daftarakungacorpro.shop/vvip/01.html";
$dftr = "https://tinyurl.com/vvipgacor1";
$kw   = "$brand, slot $brand, judi $brand, login $brand, $brand terpercaya, livechat $brand, situs $brand, agen $brand, online $brand, rtp $brand, bandar $brand, daftar $brand";
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="<?php echo $url ?>">
    <link rel="amphtml" href="<?php echo $amp ?>">
    <title><?php echo $brand ?> Link Login & Daftar Alternatif <?php echo $brand ?>: Situs Slot Maxwin Pasti Paling Beruntung di Asia!</title>
    <meta name="description" content="Daftarkan akun Anda segera di <?php echo $brand ?> dan nikmati bermain slot bersama orang lain di situs slot online paling gacor di Asia. Rasakan kemenangan yang tak tertandingi dengan <?php echo $brand ?>.">
    <meta name="keywords" content="<?php echo $kw ?>">
    <meta name="robots" content="index, follow">
    <meta name="page-locale" content="id,en">
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta property="og:title" content="<?php echo $brand ?> Link Login & Daftar Alternatif <?php echo $brand ?>: Situs Slot Maxwin Pasti Paling Beruntung di Asia!">
    <meta property="og:description" content="Daftarkan akun Anda segera di <?php echo $brand ?> dan nikmati bermain slot bersama orang lain di situs slot online paling gacor di Asia. Rasakan kemenangan yang tak tertandingi dengan <?php echo $brand ?>.">
    <meta property="og:url" content="<?php echo $url ?>">
    <meta property="og:site_name" content="<?php echo $brand ?>">
    <meta property="og:author" content="<?php echo $brand ?>">
    <meta property="og:image" content="https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp">
    <meta name="og:locale" content="ID_id">
    <meta name="og:type" content="website">
    <meta name="rating" content="general">
    <meta name="author" content="<?php echo $brand ?>">
    <meta name="distribution" content="global">
    <meta name="publisher" content="<?php echo $brand ?>">
  <link rel="apple-touch-icon" href="https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp" />
  <link rel="icon" type="image/x-icon" href="https://i.ibb.co/pzcpVZz/<?php echo $brand ?>-icon.png" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><title><?php echo $brand ?> Link Login & Daftar Alternatif <?php echo $brand ?>: Situs Slot Maxwin Pasti Paling Beruntung di Asia!
 &ndash; <?php echo $brand ?></title>    
      <meta name="description" content="Daftarkan akun Anda segera di <?php echo $brand ?> dan nikmati bermain slot bersama orang lain di situs slot online paling gacor di Asia. Rasakan kemenangan yang tak tertandingi dengan <?php echo $brand ?>.">  
  
<meta property="og:site_name" content="<?php echo $brand ?> Link Login & Daftar Alternatif <?php echo $brand ?>: Situs Slot Maxwin Pasti Paling Beruntung di Asia!">
<meta property="og:url" content="https://587b29.myshopify.com/">
<meta property="og:title" content="<?php echo $brand ?> Link Login & Daftar Alternatif <?php echo $brand ?>: Situs Slot Maxwin Pasti Paling Beruntung di Asia!">
<meta property="og:type" content="website">
<meta property="og:description" content="Daftarkan akun Anda segera di <?php echo $brand ?> dan nikmati bermain slot bersama orang lain di situs slot online paling gacor di Asia. Rasakan kemenangan yang tak tertandingi dengan <?php echo $brand ?>."><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $brand ?> Link Login & Daftar Alternatif <?php echo $brand ?>: Situs Slot Maxwin Pasti Paling Beruntung di Asia!">
<meta name="twitter:description" content="Daftarkan akun Anda segera di <?php echo $brand ?> dan nikmati bermain slot bersama orang lain di situs slot online paling gacor di Asia. Rasakan kemenangan yang tak tertandingi dengan <?php echo $brand ?>.">


    <script src="//587b29.myshopify.com/cdn/shop/t/2/assets/constants.js?v=58251544750838685771703082481" defer="defer"></script>
    <script src="//587b29.myshopify.com/cdn/shop/t/2/assets/pubsub.js?v=158357773527763999511703082482" defer="defer"></script>
    <script src="//587b29.myshopify.com/cdn/shop/t/2/assets/global.js?v=113367515774722599301703082481" defer="defer"></script><script src="//587b29.myshopify.com/cdn/shop/t/2/assets/animations.js?v=88693664871331136111703082478" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/62632460471/digital_wallets/dialog">
<meta name="shopify-checkout-api-token" content="1c5474933c4519e2617bc9d6ed464c56">
<meta id="in-context-paypal-metadata" data-shop-id="62632460471" data-venmo-supported="false" data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="THB">
<script async="async" src="/checkouts/internal/preloads.js?permanent-domain=587b29.myshopify.com&locale=en-TH"></script>
<script id="shopify-features" type="application/json">{"accessToken":"1c5474933c4519e2617bc9d6ed464c56","betas":["rich-media-storefront-analytics"],"domain":"587b29.myshopify.com","predictiveSearch":true,"shopId":62632460471,"smart_payment_buttons_url":"https:\/\/587b29.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/587b29.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en","optimusEnabled":true,"optimusHidden":false,"betterDynamicCheckoutRecommendationVariant":"control","shopPromisePDPV3Enabled":true}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "587b29.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"THB","rate":"1.0"};
Shopify.country = "TH";
Shopify.theme = {"name":"Sense","id":132785635511,"theme_store_id":1356,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "587b29.myshopify.com/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="__st">var __st={"a":62632460471,"offset":25200,"reqid":"26d6b4e7-fac4-4a0f-8864-a30c8eff1654","pageurl":"587b29.myshopify.com\/?_ab=0\u0026_fd=0\u0026_sc=1","u":"b72a2ea5fc2a","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
<script integrity="sha256-h4dvokWvGcvRSqiG7VnGqoonxF0k3NeoHPLSMjUGIz4=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//587b29.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-87876fa245af19cbd14aa886ed59c6aa8a27c45d24dcd7a81cf2d2323506233e.js" crossorigin="anonymous"></script>
<script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//587b29.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="header" defer="defer" src="//587b29.myshopify.com/cdn/shop/t/2/compiled_assets/scripts.js?10"></script>

<style id="shopify-dynamic-checkout-cart">@media screen and (min-width: 750px) {
  #dynamic-checkout-cart {
    min-height: 50px;
  }
}

@media screen and (max-width: 750px) {
  #dynamic-checkout-cart {
    min-height: 60px;
  }
}
</style><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <style data-shopify>
      @font-face {
  font-family: "Harmonia Sans";
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_n4.73cf0589f7839ec88463a09f5335a2885467ed0c.woff2?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=30bf2e768bfb358e0d81824c0b3caab3be11b200805d805b3b111b51ea2bc8a5") format("woff2"),
       url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_n4.1c5276ef69780b63aa8f0ba7897fb3bc87270bb0.woff?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=798ef13598d3780d5143a9a19f18d636f508e7517d1377b65ae15926861f4df8") format("woff");
}

      @font-face {
  font-family: "Harmonia Sans";
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_n7.db6a243cdeddb2eba0b2e8fccdce1e6910fd06d0.woff2?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=b27d21799d633eb5b502585607a15e384f493c692c2fad6bb0c408f621d8ea9c") format("woff2"),
       url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_n7.a069bd4d0320d5bc303f7f96d7bf28abc297b6aa.woff?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=090e15761c963b22d79489eedd8fdfee7d8dd1098ebab544a7be674ff6a2363a") format("woff");
}

      @font-face {
  font-family: "Harmonia Sans";
  font-weight: 400;
  font-style: italic;
  font-display: swap;
  src: url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_i4.ccbfea79fd847e76d49925a923aa89064359e629.woff2?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=050e3ab4e20f8c6d6a10a4614df47e7db6d62d000557cb27f53b0309ebc08e5b") format("woff2"),
       url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_i4.e5c05a10aacfb8cc7fdf892df8dba937a214e6e7.woff?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=af8815f650e0af739cb8e1d48eb5e108d2c76908a5b7f394d9634f53fa42f6c1") format("woff");
}

      @font-face {
  font-family: "Harmonia Sans";
  font-weight: 700;
  font-style: italic;
  font-display: swap;
  src: url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_i7.4a7dd579ac7cb56f507f74a6af51c429211c3385.woff2?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=0af36854836150d2cd469fd357cd64c4c2b0329f7b769d36d474d2658d52f903") format("woff2"),
       url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_i7.f513289b781582823a912d2e8125b8c109e5d61c.woff?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=82e462fa327b2807e31cabdbece97757d0883dac87b59c441f4bb44c23b98c37") format("woff");
}

      @font-face {
  font-family: "Harmonia Sans";
  font-weight: 600;
  font-style: normal;
  font-display: swap;
  src: url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_n6.dd3d6084d29e4754e80fe6aa1c0e37f511474ffa.woff2?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=617aecc4da80c5fb5273df60e4345846ab28aa5db828b28ce8fe9db8539c13f3") format("woff2"),
       url("//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_n6.b0d6879084373b473d0c7a4c3d54ece9c289cbb4.woff?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=82f8273d8a5e33b63ba6babe971945466ce305324c4e5a3ed7961721c34cfd5e") format("woff");
}


      
        :root,
        .color-background-1 {
          --color-background: 253,251,247;
        
          --gradient-background: linear-gradient(180deg, rgba(0 0 0), rgba(255 0 0) 100%);
        

        

        --color-foreground: 46,42,57;
        --color-background-contrast: 228,200,145;
        --color-shadow: 46,42,57;
        --color-button: 155,4,111;
        --color-button-text: 253,251,247;
        --color-secondary-button: 253,251,247;
        --color-secondary-button-text: 46,42,57;
        --color-link: 46,42,57;
        --color-badge-foreground: 46,42,57;
        --color-badge-background: 253,251,247;
        --color-badge-border: 46,42,57;
        --payment-terms-background-color: rgb(253 251 247);
      }
      
        
        .color-background-2 {
          --color-background: 237,255,167;
        
          --gradient-background: radial-gradient(rgba(255, 229, 229, 1), rgba(255 176 0) 25%, rgba(255 176 0) 100%);
        

        

        --color-foreground: 46,42,57;
        --color-background-contrast: 211,255,39;
        --color-shadow: 46,42,57;
        --color-button: 46,42,57;
        --color-button-text: 237,255,167;
        --color-secondary-button: 237,255,167;
        --color-secondary-button-text: 46,42,57;
        --color-link: 46,42,57;
        --color-badge-foreground: 46,42,57;
        --color-badge-background: 237,255,167;
        --color-badge-border: 46,42,57;
        --payment-terms-background-color: rgb(237 255 167);
      }
      
        
        .color-inverse {
          --color-background: 46,42,57;
        
          --gradient-background: #2e2a39;
        

        

        --color-foreground: 253,251,247;
        --color-background-contrast: 58,53,72;
        --color-shadow: 46,42,57;
        --color-button: 253,251,247;
        --color-button-text: 46,42,57;
        --color-secondary-button: 46,42,57;
        --color-secondary-button-text: 253,251,247;
        --color-link: 253,251,247;
        --color-badge-foreground: 253,251,247;
        --color-badge-background: 46,42,57;
        --color-badge-border: 253,251,247;
        --payment-terms-background-color: rgb(46 42 57);
      }
      
        
        .color-accent-1 {
          --color-background: 155,4,111;
        
          --gradient-background: #9b046f;
        

        

        --color-foreground: 253,251,247;
        --color-background-contrast: 180,5,129;
        --color-shadow: 46,42,57;
        --color-button: 253,251,247;
        --color-button-text: 155,4,111;
        --color-secondary-button: 155,4,111;
        --color-secondary-button-text: 253,251,247;
        --color-link: 253,251,247;
        --color-badge-foreground: 253,251,247;
        --color-badge-background: 155,4,111;
        --color-badge-border: 253,251,247;
        --payment-terms-background-color: rgb(155 4 111);
      }
      
        
        .color-accent-2 {
          --color-background: 94,54,83;
        
          --gradient-background: linear-gradient(320deg, rgba(134, 16, 106, 1), rgba(94, 54, 83, 1) 100%);
        

        

        --color-foreground: 253,251,247;
        --color-background-contrast: 13,7,11;
        --color-shadow: 46,42,57;
        --color-button: 253,251,247;
        --color-button-text: 94,54,83;
        --color-secondary-button: 94,54,83;
        --color-secondary-button-text: 253,251,247;
        --color-link: 253,251,247;
        --color-badge-foreground: 253,251,247;
        --color-badge-background: 94,54,83;
        --color-badge-border: 253,251,247;
        --payment-terms-background-color: rgb(94 54 83);
      }
      

      body, .color-background-1, .color-background-2, .color-inverse, .color-accent-1, .color-accent-2 {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }

      :root {
        --font-body-family: "Harmonia Sans", sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;

        --font-heading-family: "Harmonia Sans", sans-serif;
        --font-heading-style: normal;
        --font-heading-weight: 600;

        --font-body-scale: 1.0;
        --font-heading-scale: 1.3;

        --media-padding: px;
        --media-border-opacity: 0.1;
        --media-border-width: 0px;
        --media-radius: 12px;
        --media-shadow-opacity: 0.1;
        --media-shadow-horizontal-offset: 10px;
        --media-shadow-vertical-offset: 12px;
        --media-shadow-blur-radius: 20px;
        --media-shadow-visible: 1;

        --page-width: 120rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 1.2rem;
        --product-card-text-alignment: center;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.05;
        --product-card-shadow-visible: 1;
        --product-card-shadow-horizontal-offset: 1.0rem;
        --product-card-shadow-vertical-offset: 1.0rem;
        --product-card-shadow-blur-radius: 3.5rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 1.2rem;
        --collection-card-text-alignment: center;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.05;
        --collection-card-shadow-visible: 1;
        --collection-card-shadow-horizontal-offset: 1.0rem;
        --collection-card-shadow-vertical-offset: 1.0rem;
        --collection-card-shadow-blur-radius: 3.5rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 1.2rem;
        --blog-card-text-alignment: center;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.05;
        --blog-card-shadow-visible: 1;
        --blog-card-shadow-horizontal-offset: 1.0rem;
        --blog-card-shadow-vertical-offset: 1.0rem;
        --blog-card-shadow-blur-radius: 3.5rem;

        --badge-corner-radius: 2.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 22px;
        --popup-shadow-opacity: 0.1;
        --popup-shadow-horizontal-offset: 10px;
        --popup-shadow-vertical-offset: 12px;
        --popup-shadow-blur-radius: 20px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 5px;

        --spacing-sections-desktop: 36px;
        --spacing-sections-mobile: 25px;

        --grid-desktop-vertical-spacing: 40px;
        --grid-desktop-horizontal-spacing: 40px;
        --grid-mobile-vertical-spacing: 20px;
        --grid-mobile-horizontal-spacing: 20px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 24px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 10px;
        --text-boxes-shadow-vertical-offset: 12px;
        --text-boxes-shadow-blur-radius: 20px;

        --buttons-radius: 10px;
        --buttons-radius-outset: 11px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 0.55;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0.3px;

        --inputs-radius: 10px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 11px;

        --variant-pills-radius: 10px;
        --variant-pills-border-width: 0px;
        --variant-pills-border-opacity: 0.1;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>

    <link href="//587b29.myshopify.com/cdn/shop/t/2/assets/base.css?v=127867003511637661291703082478" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="font" href="//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_n4.73cf0589f7839ec88463a09f5335a2885467ed0c.woff2?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=30bf2e768bfb358e0d81824c0b3caab3be11b200805d805b3b111b51ea2bc8a5" type="font/woff2" crossorigin><link rel="preload" as="font" href="//587b29.myshopify.com/cdn/fonts/harmonia_sans/harmoniasans_n6.dd3d6084d29e4754e80fe6aa1c0e37f511474ffa.woff2?h1=NTg3YjI5LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=617aecc4da80c5fb5273df60e4345846ab28aa5db828b28ce8fe9db8539c13f3" type="font/woff2" crossorigin><link
        rel="stylesheet"
        href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-predictive-search.css?v=118923337488134913561703082480"
        media="print"
        onload="this.media='all'"
      ><script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 62632460471,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,t,o,r,i){var s=null!==e,l=("function"==typeof BigInt&&BigInt.toString().indexOf("[native code]")?"modern":"legacy").substring(0,1),c=t.substring(0,1);if(s){window.Shopify=window.Shopify||{};var d=window.Shopify;d.analytics=d.analytics||{};var u=d.analytics;u.replayQueue=[],u.publish=function(e,n,a){u.replayQueue.push([e,n,a])};try{self.performance.mark("wpm:start")}catch(e){}}var p,f,y,h,v,m,w,g,b,_=[a,"/wpm","/",c,r,l,".js"].join("");f=(p={src:_,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);null==n||n(a);var t=window.Shopify.analytics;t.replayQueue.forEach((function(e){var n=e[0],t=e[1],o=e[2];a.publishCustomEvent(n,t,o)})),t.replayQueue=[],t.publish=a.publishCustomEvent,t.visitor=a.visitor}},onerror:function(){var n=(null==e?void 0:e.storefrontBaseUrl)?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin,a="".concat(n,"/.well-known/shopify/monorail/unstable/produce_batch"),t=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:o||"latest",page_url:self.location.href,status:"failed",error_msg:"".concat(_," has failed to load")},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(a,t))return!0}catch(e){}var r=new XMLHttpRequest;try{return r.open("POST",a,!0),r.setRequestHeader("Content-Type","text/plain"),r.send(t),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}}).src,y=p.async,h=void 0===y||y,v=p.onload,m=p.onerror,w=document.createElement("script"),g=document.head,b=document.body,w.async=h,w.src=f,v&&w.addEventListener("load",v),m&&w.addEventListener("error",m),g?g.appendChild(w):b?b.appendChild(w):console.error("Did not find a head or body element to append the script")})({shopId: 62632460471,storefrontBaseUrl: "https://587b29.myshopify.com",cdnBaseUrl: "https://587b29.myshopify.com/cdn",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_async_pixel_refactor","web_pixels_manager_performance_improvement"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0570","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0570","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":null,"checkout":null,"customer":null,"productVariants":[]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");},"https://587b29.myshopify.com/cdn","browser","0.0.412","80cd6a5fw8efabb83pbabe92ddm0cb690ee",["web_pixels_async_pixel_refactor","web_pixels_manager_performance_improvement"]);</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'THB';
var meta = {"page":{"pageType":"home"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 62632460471,
      theme_id: 132785635511,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "//587b29.myshopify.com/cdn/s/trekkie.storefront.7a4225caf9379fe42103e492053220a7195df1ae.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = '//587b29.myshopify.com/cdn/s/trekkie.storefront.7a4225caf9379fe42103e492053220a7195df1ae.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = '//587b29.myshopify.com/cdn/s/trekkie.storefront.7a4225caf9379fe42103e492053220a7195df1ae.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":62632460471,"isMerchantRequest":null,"themeId":132785635511,"themeCityHash":"16860846742555116815","contentLanguage":"en","currency":"THB"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

  
      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"home"});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//587b29.myshopify.com/cdn/shopifycloud/shopify/assets/shop_events_listener-a7c63dba65ccddc484f77541dc8ca437e60e1e9e297fe1c3faebf6523a0ede9b.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Sense";
  window.BOOMR.themeVersion = "12.0.0";
  window.BOOMR.shopId = 62632460471;
  window.BOOMR.themeId = 132785635511;
  window.BOOMR.renderRegion = "gcp-us-central1";
  window.BOOMR.url =
    "https://587b29.myshopify.com/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
</head>

  <body class="gradient">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--16184061853879__announcement-bar" class="shopify-section shopify-section-group-header-group announcement-bar-section"><link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-slideshow.css?v=107725913939919748051703082481" rel="stylesheet" type="text/css" media="all" />
<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-slider.css?v=142503135496229589681703082481" rel="stylesheet" type="text/css" media="all" />


<div
  class="utility-bar color-background-2 gradient utility-bar--bottom-border"
  
>
  <div class="page-width utility-bar__grid"><div
        class="announcement-bar"
        role="region"
        aria-label="Announcement"
        
      ><p class="announcement-bar__message h5">
            <span>WELCOME TO SITUS SLOT TERKUAT DI BUMI</span></p></div><div class="localization-wrapper">
</div>
  </div>
</div>


</div><div id="shopify-section-sections--16184061853879__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991703082480" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-search.css?v=165164710990765432851703082480" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-menu-drawer.css?v=31331429079022630271703082480" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-cart-notification.css?v=54116361853792938221703082479" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-cart-items.css?v=145340746371385151771703082479" media="print" onload="this.media='all'"><link rel="stylesheet" href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101703082480" media="print" onload="this.media='all'"><noscript><link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991703082480" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-search.css?v=165164710990765432851703082480" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-menu-drawer.css?v=31331429079022630271703082480" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-cart-notification.css?v=54116361853792938221703082479" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-cart-items.css?v=145340746371385151771703082479" rel="stylesheet" type="text/css" media="all" /></noscript>

<style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }@media screen and (min-width: 990px) {
      header-drawer {
        display: none;
      }
    }.menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding: 10px 3rem 10px 3rem;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 18px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 24px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  }</style><script src="//587b29.myshopify.com/cdn/shop/t/2/assets/details-disclosure.js?v=13653116266235556501703082481" defer="defer"></script>
<script src="//587b29.myshopify.com/cdn/shop/t/2/assets/details-modal.js?v=25581673532751508451703082481" defer="defer"></script>
<script src="//587b29.myshopify.com/cdn/shop/t/2/assets/cart-notification.js?v=133508293167896966491703082479" defer="defer"></script>
<script src="//587b29.myshopify.com/cdn/shop/t/2/assets/search-form.js?v=133129549252120666541703082482" defer="defer"></script><svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg><sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-background-1 gradient"><header class="header header--top-center header--mobile-center page-width header--has-menu">

<header-drawer data-breakpoint="tablet">
  <details id="Details-menu-drawer-container" class="menu-drawer-container">
    <summary
      class="header__icon header__icon--menu header__icon--summary link focus-inset"
      aria-label="Menu"
    >
      <span>
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
  viewBox="0 0 18 16"
>
  <path d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z" fill="currentColor">
</svg>

        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

      </span>
    </summary>
    <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-background-1">
      <div class="menu-drawer__inner-container">
        <div class="menu-drawer__navigation-container">
          <nav class="menu-drawer__navigation">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list"></ul>
          </nav>
          <div class="menu-drawer__utility-links"><div class="menu-drawer__localization header-localization">
</div><ul class="list list-social list-unstyled" role="list"></ul>
          </div>
        </div>
      </div>
    </div>
  </details>
</header-drawer>


<details-modal class="header__search">
  <details>
    <summary
      class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
      aria-haspopup="dialog"
      aria-label="Search"
    >
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div
      class="search-modal modal__content gradient"
      role="dialog"
      aria-modal="true"
      aria-label="Search"
    >
      <div class="modal-overlay"></div>
      <div
        class="search-modal__content search-modal__content-bottom"
        tabindex="-1"
      ><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form">
          <div class="field">
            <input
              class="search__input field__input"
              id="Search-In-Modal-1"
              type="search"
              name="q"
              value=""
              placeholder="Search"role="combobox"
                aria-expanded="false"
                aria-owns="predictive-search-results"
                aria-controls="predictive-search-results"
                aria-haspopup="listbox"
                aria-autocomplete="list"
                autocorrect="off"
                autocomplete="off"
                autocapitalize="off"
                spellcheck="false">
            <label class="field__label" for="Search-In-Modal-1">Search</label>
            <input type="hidden" name="options[prefix]" value="last">
            <button
              type="reset"
              class="reset__button field__button hidden"
              aria-label="Clear search term"
            >
              <svg class="icon icon-close" aria-hidden="true" focusable="false">
                <use xlink:href="#icon-reset">
              </svg>
            </button>
            <button class="search__button field__button" aria-label="Search">
              <svg class="icon icon-search" aria-hidden="true" focusable="false">
                <use href="#icon-search">
              </svg>
            </button>
          </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481703082480" rel="stylesheet" type="text/css" media="all" />

<div class="predictive-search__loading-state">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
</div>

            <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button
          type="button"
          class="search-modal__close-button modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>
<h1 class="header__heading"><a href="/" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                
                <img src="https://i.ibb.co/pvWKQXJ/<?php echo $brand ?>-logo.png?v=1703106551&amp;width=600" alt="<?php echo $brand ?>" srcset="https://i.ibb.co/pvWKQXJ/<?php echo $brand ?>-logo.png?v=1703106551&amp;width=270 270w, https://i.ibb.co/pvWKQXJ/<?php echo $brand ?>-logo.png?v=1703106551&amp;width=405 405w, https://i.ibb.co/pvWKQXJ/<?php echo $brand ?>-logo.png?v=1703106551&amp;width=540 540w" width="270" height="75.0" loading="eager" class="header__heading-logo motion-reduce" sizes="(max-width: 540px) 50vw, 270px">
              </div></a></h1>

<nav class="header__inline-menu">
  <ul class="list-menu list-menu--inline" role="list"></ul>
</nav>

<div class="header__icons header__icons--localization header-localization">
      <div class="desktop-localization-wrapper">
</div>
      

<details-modal class="header__search">
  <details>
    <summary
      class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
      aria-haspopup="dialog"
      aria-label="Search"
    >
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div
      class="search-modal modal__content gradient"
      role="dialog"
      aria-modal="true"
      aria-label="Search"
    >
      <div class="modal-overlay"></div>
      <div
        class="search-modal__content search-modal__content-bottom"
        tabindex="-1"
      ><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form">
          <div class="field">
            <input
              class="search__input field__input"
              id="Search-In-Modal"
              type="search"
              name="q"
              value=""
              placeholder="Search"role="combobox"
                aria-expanded="false"
                aria-owns="predictive-search-results"
                aria-controls="predictive-search-results"
                aria-haspopup="listbox"
                aria-autocomplete="list"
                autocorrect="off"
                autocomplete="off"
                autocapitalize="off"
                spellcheck="false">
            <label class="field__label" for="Search-In-Modal">Search</label>
            <input type="hidden" name="options[prefix]" value="last">
            <button
              type="reset"
              class="reset__button field__button hidden"
              aria-label="Clear search term"
            >
              <svg class="icon icon-close" aria-hidden="true" focusable="false">
                <use xlink:href="#icon-reset">
              </svg>
            </button>
            <button class="search__button field__button" aria-label="Search">
              <svg class="icon icon-search" aria-hidden="true" focusable="false">
                <use href="#icon-search">
              </svg>
            </button>
          </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481703082480" rel="stylesheet" type="text/css" media="all" />

<div class="predictive-search__loading-state">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
</div>

            <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button
          type="button"
          class="search-modal__close-button modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>

<a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
  class="icon icon-cart-empty"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 40 40"
  fill="none"
>
  <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"/>
</svg>
<span class="visually-hidden">Cart</span></a>
    </div>
  </header>
</sticky-header>

<cart-notification>
  <div class="cart-notification-wrapper page-width">
    <div
      id="cart-notification"
      class="cart-notification focus-inset color-background-1 gradient"
      aria-modal="true"
      aria-label="Item added to your cart"
      role="dialog"
      tabindex="-1"
    >
      <div class="cart-notification__header">
        <h2 class="cart-notification__heading caption-large text-body"><svg
  class="icon icon-checkmark"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 12 9"
  fill="none"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z" fill="currentColor"/>
</svg>
Item added to your cart
        </h2>
        <button
          type="button"
          class="cart-notification__close modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
      <div id="cart-notification-product" class="cart-notification-product"></div>
      <div class="cart-notification__links">
        <a
          href="/cart"
          id="cart-notification-button"
          class="button button--secondary button--full-width"
        >View cart</a>
        <form action="/cart" method="post" id="cart-notification-form">
          <button class="button button--primary button--full-width" name="checkout">
            Check out
          </button>
        </form>
        <button type="button" class="link button-label">Continue shopping</button>
      </div>
    </div>
  </div>
</cart-notification>
<style data-shopify>
  .cart-notification {
    display: none;
  }
</style>


<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "<?php echo $brand ?>",
    
      "logo": "https:\/\/587b29.myshopify.com\/cdn\/shop\/files\/logoweb.png?v=1703106551\u0026width=500",
    
    "sameAs": [
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/587b29.myshopify.com"
  }
</script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "<?php echo $brand ?>",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https:\/\/587b29.myshopify.com\/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "url": "https:\/\/587b29.myshopify.com"
    }
  </script>
</div>
<!-- END sections: header-group -->

    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <div id="shopify-section-template--16184061362359__image-with-text" class="shopify-section section"><link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-image-with-text.css?v=132604768413025929601703082479" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--16184061362359__image-with-text-padding {
    padding-top: 0px;
    padding-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-template--16184061362359__image-with-text-padding {
      padding-top: 0px;
      padding-bottom: 0px;
    }
  }</style><div class="section-template--16184061362359__image-with-text-padding gradient color-background-1">
  <div class="page-width">
    <div class="image-with-text image-with-text--overlap isolate collapse-corners scroll-trigger animate--slide-in">
      <div class="image-with-text__grid grid grid--gapless grid--1-col grid--2-col-tablet">
        <div class="image-with-text__media-item image-with-text__media-item--medium image-with-text__media-item--middle grid__item">
          <div
            class="image-with-text__media image-with-text__media--adapt global-media-settings gradient color-background-2 media"
            
              style="padding-bottom: 100.0%;"
            
          ><img src="https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp?v=1703106593&amp;width=1500" alt="" srcset="https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp?v=1703106593&amp;width=165 165w, https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp?v=1703106593&amp;width=360 360w, https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp?v=1703106593&amp;width=535 535w, https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp?v=1703106593&amp;width=750 750w, https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp?v=1703106593&amp;width=1070 1070w, https://i.ibb.co/pd8087Q/<?php echo $brand ?>.webp?v=1703106593&amp;width=1500 1500w" width="1500" height="1500" sizes="(min-width: 1200px) 550px,
              (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" fetchpriority="high">
</div>
        </div>
        <div class="image-with-text__text-item grid__item">
          <div
            id="ImageWithText--template--16184061362359__image-with-text"
            class="image-with-text__content image-with-text__content--middle image-with-text__content--desktop-center image-with-text__content--mobile-left image-with-text__content--adapt content-container gradient color-background-2"
          ><h2
                    class="image-with-text__heading inline-richtext h1"
                    
                  >
                   <?php echo $brand ?> Link Login & Daftar Alternatif <?php echo $brand ?>: Situs Slot Maxwin Pasti Paling Beruntung di Asia!
                  </h2><a
                      
                        href="<?php echo $dftr ?>"
                      
                      class="button button--primary"
                      
                    >
                      KLIK DAFTAR
                    </a><div class="image-with-text__text rte body" >
                    <p>Daftarkan akun Anda segera di <?php echo $brand ?> dan nikmati bermain slot bersama orang lain di situs slot online paling gacor di Asia. Rasakan kemenangan yang tak tertandingi dengan <?php echo $brand ?>.</p>
                  </div></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    </main>

    <!-- BEGIN sections: footer-group -->
<section id="shopify-section-sections--16184061821111__newsletter" class="shopify-section shopify-section-group-footer-group section"><link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-newsletter.css?v=4727253280200485261703082480" rel="stylesheet" type="text/css" media="all" />
<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/newsletter-section.css?v=62410470717655853621703082481" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-sections--16184061821111__newsletter-padding {
    padding-top: 33px;
    padding-bottom: 6px;
  }

  @media screen and (min-width: 750px) {
    .section-sections--16184061821111__newsletter-padding {
      padding-top: 44px;
      padding-bottom: 8px;
    }
  }</style><div class="newsletter center ">
  <div class="newsletter__wrapper color-background-2 gradient content-container isolate content-container--full-width section-sections--16184061821111__newsletter-padding"><h2
            class="inline-richtext h1 scroll-trigger animate--slide-in"
            
            
              data-cascade
              style="--animation-order: 1;"
            
          >
            BLVCK SEO
          </h2><div
            class="newsletter__subheading rte scroll-trigger animate--slide-in"
            
            
              data-cascade
              style="--animation-order: 2;"
            
          >
            <p>AJARIN DONG SEPUHHH.... T-T</p>
          </div><div >
            <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="newsletter-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
              <input type="hidden" name="contact[tags]" value="newsletter">
              <div
                class="newsletter-form__field-wrapper scroll-trigger animate--slide-in"
                
                  data-cascade
                  style="--animation-order: 3;"
                
              >
                <div class="field">
                  <input
                    id="NewsletterForm--sections--16184061821111__newsletter"
                    type="email"
                    name="contact[email]"
                    class="field__input"
                    value=""
                    aria-required="true"
                    autocorrect="off"
                    autocapitalize="off"
                    autocomplete="email"
                    
                    placeholder="Email"
                    required
                  >
                  <label class="field__label" for="NewsletterForm--sections--16184061821111__newsletter">
                    Email
                  </label>
                  <button
                    type="submit"
                    class="newsletter-form__button field__button"
                    name="commit"
                    id="Subscribe"
                    aria-label="Subscribe"
                  >
                    <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

                  </button>
                </div></div></form>
          </div></div>
</div>


</section><div id="shopify-section-sections--16184061821111__footer" class="shopify-section shopify-section-group-footer-group">
<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/section-footer.css?v=125160298726032154631703082483" rel="stylesheet" type="text/css" media="all" />
<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-newsletter.css?v=4727253280200485261703082480" rel="stylesheet" type="text/css" media="all" />
<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991703082480" rel="stylesheet" type="text/css" media="all" />
<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-list-payment.css?v=69253961410771838501703082480" rel="stylesheet" type="text/css" media="all" />
<link href="//587b29.myshopify.com/cdn/shop/t/2/assets/component-list-social.css?v=35792976012981934991703082480" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 0px;
  }

  .section-sections--16184061821111__footer-padding {
    padding-top: 33px;
    padding-bottom: 36px;
  }

  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 0px;
    }

    .section-sections--16184061821111__footer-padding {
      padding-top: 44px;
      padding-bottom: 48px;
    }
  }</style><footer class="footer color-background-2 gradient section-sections--16184061821111__footer-padding"><div class="footer__content-top page-width"><div
          class="footer-block--newsletter scroll-trigger animate--slide-in"
          
            data-cascade
          
        ></div>
      </div><div
    class="footer__content-bottom scroll-trigger animate--slide-in"
    
      data-cascade
    
  >
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__column footer__localization isolate"></div>
      <div class="footer__column footer__column--info"></div>
    </div>
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__copyright caption">
        <small class="copyright__content"
          >&copy; 2024, <a href="/" title=""><?php echo $brand ?></a></small>
        <small class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a></small></div>
    </div>
  </div>
</footer>


</div>
<!-- END sections: footer-group -->

    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
      <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul>

    <script>
      window.shopUrl = 'https://587b29.myshopify.com';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };

      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
      };

      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
      };

      window.quickOrderListStrings = {
        itemsAdded: `[quantity] items added`,
        itemAdded: `[quantity] item added`,
        itemsRemoved: `[quantity] items removed`,
        itemRemoved: `[quantity] item removed`,
        viewCart: `View cart`,
        each: `[money]/ea`,
      };

      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
        recipientFormExpanded: `Gift card recipient form expanded`,
        recipientFormCollapsed: `Gift card recipient form collapsed`,
      };
    </script><script src="//587b29.myshopify.com/cdn/shop/t/2/assets/predictive-search.js?v=162273246065392412141703082482" defer="defer"></script></body>
</html>
