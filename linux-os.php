<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/prism.css">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Textpad: Linux-os</title>
</head>
<body id="linux-os-body">
    <script src="scripts/prism.js"></script>
    <div id="linux-os-page">
        <h3>Korak 1: Instalacija Docker-a</h3>
        <p>Idite na stranicu <a href="https://www.docker.com">www.docker.com</a>, i pratite instrukcije<br>za instalaciju linux-os verzije Docker-a,<br>ne zaboravite takodje pokupiti i docker compose</p>
        <h3>Korak 2: Testiranje instalacije</h3>
        <pre class="command"><span>$ </span><code class="language-bash">docker run -d hello-world</code></pre>
        <p>Ako dobijete ispisan id container-a, znaci da ste uradili dobar posao,<br> ako dobijete neku gresku, pokusajte prethodnu komandu pokrenuti sa sudo</p>
        <pre class="command"><span>$ </span><code class="language-bash">sudo docker run -d hello-world</code></pre>
        <p>Sad bi trebalo da sve funkcionise kako treba</p>
        <h3>Korak 4: Konfiguracija systemd servisa</h3>
        <p>Konfiguracija systemd servisa je sastavljena od vise koraka:</p>
        <h4>Korak A:</h4> 
        <a href="/files/docker-compose.yml" download><button class="link-button">Preuzmite docker-compose.yml</button></a>
        <h4>Korak B: Napisite systemd unit fajl</h4>
        <p>Kreirajte fajl po imenu <b>textpad-sync-server.service</b><br>na lokaciji <b><i>/etc/systemd/system/</i></b> u vasem omiljenom tekstualnom editoru,<br>sa slijedecim sadrzajem:</p>
        <pre class="command" ><code class="language-systemd">[Unit]
Description = Textpad Sinhronizacioni server daemon
After = network.target network-online.target dbus.service docker.service
Wants = network-online.target
Requires = dbus.service docker.service

[Service]
ExecStart = docker compose up
Restart = on-abort
StartLimitInterval = 60
StartLimitBurst = 10

[Install]
WantedBy = multi-user.target</code></pre>
        <h4>Korak C: Installirajte servis <b>textpad-sync-server:</b></h4>
        <pre class="command"><span># </span><code class="language-bash">systemctl enable textpad-sync-server</code></pre>
        <h4>Korak D: Kopirajte docker-compose.yml na pravu lokaciju</h4>
        <p>$HOME/Downloads/docker-compose.yml zamjenite sa vasom lokaciom preuzetog fajla</p>
        <pre class="command"><span># </span><code class="language-bash">cp -r $HOME/Downloads/docker-compose.yml .</code></pre>
        <h4>Korak E: Pokrenite servis <b>textpad-sync-server:</b></h4>
        <pre class="command"><span># </span><code class="language-bash">systemctl start textpad-sync-server</code></pre>
        <h3>Korak 5:</h3>
        <a href="in-app-config.html"><button class="link-button">Konfiguracija u aplikaciji</button></a>
    </div>
</body>
</html>