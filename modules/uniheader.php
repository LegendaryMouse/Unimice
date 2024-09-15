<meta charset="UTF-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta http-equiv="Cache-Control" content="public, max-age=31536000" />
<meta http-equiv="Pragma" content="cache" />
<meta http-equiv="Expires" content="Wed, 1 Jul 2025 00:00:00 GMT" />

<link rel="icon" type="image/webp" href="https://unimice.ru/images/favicon.webp" />
<link rel="apple-touch-icon" href="https://unimice.ru/images/favicon.webp" />

<link id="theme-link" rel="stylesheet" href="https://unimice.ru/css/style.css">

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  function isPC() {
    const userAgent = navigator.userAgent.toLowerCase();
    const isMobile = /iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(userAgent);
    const isTablet = /ipad|tablet|playbook|silk/i.test(userAgent);

    return !(isMobile || isTablet); // Возвращает true, если это не мобильное устройство и не планшет
  }

  if (isPC()) {
    (function(m,e,t,r,i,k,a){
      m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();
      for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
      k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(97355570, "init", {
      clickmap: false,
      trackLinks: false,
      accurateTrackBounce: false
    });
  }
</script>

<noscript><div><img src="https://mc.yandex.ru/watch/97355570" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php
    // Создание подключения
    session_start();

    if(!empty($_SESSION)){ 
      session_regenerate_id();
    }

    // Конфиг
    require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) { die("Connection died! Take that: " . $conn->connect_error); } 
?>