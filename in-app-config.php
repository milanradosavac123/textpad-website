<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Textpad: Mac OS X</title>
</head>
<body>
    <div id="linux-os-page">
        <p>Idite nazad u vašu aplikaciju na vašem telefonu, pa pratite slijedeće korake da dodate server:</p>
        <h3>Korak 1: <i>Nađite ponovo ekran za onlajn sinhronizaciju</i></h3>
        <h3>Korak 2: <i>Prikažite dijalog za dodavanje servera</i></h3>
        <p>klik na dugme ispod teksta vam ostvaruje željeni rezultat</p>
        <img src="button.png" alt="slika ekrana za dodavanje servera" width=400>
        <h3>Korak 3: <i>Odredite link za server</i></h3>
        <p>
            Ako vam je server lični laptop/desktop računar, link vam je<br><b>http://"ip adresa laptopa/desktop računara(bez navodnika)":8080/</b>,<br>
            u slučaju da posjedujete hostname za vaš laptop/desktop računar, link vam je <b>http://hostname:8080/</b>.<br> Za one koji koriste VPS servere,
            ip adresu laptopa/desktop računara zamjenite sa ip adresom VPS servera.<br>Da bi koristili domain VPS servera kao link,<br>ne zaboravite u konfiguracionom panelu dodati port 8080
            nakon ip adrese prema kojoj domain šalje saobraćaj.
        </p>
        <h3>Korak 4: <i>Konfiguracija porta(samo za VPS server korisnike)</i></h3>
        <p>U podešavanjima za VPS server nađite firewall podešavanja,<br>i uvjerite se da firewall dopušta saobracaj preko porta 8080</p>
        <h3>Korak 5: <i>Upišite prethodno određeni link u dialog i potvrdite unos</i></h3>
    </div>
</body>
</html>
