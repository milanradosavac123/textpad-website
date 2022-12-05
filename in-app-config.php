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
        <p>Idite nazad u vasu aplikaciju na vasem telefonu, pa pratite slijedece korake da dodate server:</p>
        <h3>Korak 1: <i>Nadjite ponovo ekran za onlajn sinhronizaciju</i></h3>
        <h3>Korak 2: <i>Prikazite dijalog za dodavanje servera</i></h3>
        <p>klik na dugme ispod teksta vam ostvaruje zeljeni rezultat</p>
        <img src="button.png" alt="slika ekrana za dodavanje servera" width=400>
        <h3>Korak 3: <i>Odredite link za server</i></h3>
        <p>
            Ako vam je server licni laptop/desktop racunar, link vam je<br><b>http://"ip adresa laptopa/desktop racunara(bez navodnika)":8080/</b>,<br>
            u slucaju da posjedujete hostname za vas laptop/desktop racunar, link vam je <b>http://hostname:8080/</b>.<br> Za one koji koriste VPS servere,
            ip adresu laptopa/desktop racunara zamjenite sa ip adresom VPS servera.<br>Da bi koristili domainn VPS servera kao link,<br>ne zaboravite u konfiguracionom panelu dodati port 8080
            nakon ip adrese prema kojoj domain salje saobracaj.
        </p>
        <h3>Korak 4: <i>Konfiguracija porta(samo za VPS server korisnike)</i></h3>
        <p>U podesavanjima za VPS server nadjite firewall podesavanja,<br>i uvjerite se da firewall dopusta saobracaj preko porta 8080</p>
        <h3>Korak 5: <i>Upisite prethodno odredjeni link u dialog i potvrdite unos</i></h3>
    </div>
</body>
</html>