<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>TextPad: Mac OS X</title>
</head>
<body id="mac-os-x-body">
    <script src="scripts/prism.js"></script>
    <div id="mac-os-x-page">
        <h3>Korak 1: Instalacija Docker-a</h3>
        <p>Idite na stranicu <a href="https://docs.docker.com/desktop/install/mac-install/">docker.com</a>, i pratite instrukcije<br>za instalaciju linux-os verzije Docker-a,<br>ne zaboravite takođe pokupiti i docker compose</p>
        <h3>Korak 2: Testiranje instalacije</h3>
        <pre class="command"><span>$ </span><code class="language-bash">docker run -d hello-world</code></pre>
        <p>Ako dobijete ispisan id container-a, znači da ste uradili dobar posao,<br> ako dobijete neku grešku, pokušajte prethodnu komandu pokrenuti sa sudo</p>
        <pre class="command"><span>$ </span><code class="language-bash">sudo docker run -d hello-world</code></pre>
        <p>Sada bi trebalo da sve funkcioniše kako treba</p>
        <h3>Korak 4:</h3>
        <a href="in-app-config.html"><button class="link-button">Konfiguracija u aplikaciji</button></a>
</body>
</html>