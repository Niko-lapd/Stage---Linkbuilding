@extends('layouts.sidebar2')
@section('content')

<h1> Campagne aanmaken</h1>

<div class="EditCampaignForm">
    Zet een marketingcampagne op voor je merk om influencers en publishers je product of dienst te laten promoten onder hun doelgroep. Bij aanmaken van deze  campagne is die terug te vinden  bij concepten. Hulp nodig? Bekijk dan Deze tutorial.
</div>
<div id="Box">
    <h3>Introductie</h3>
    <p><span id="dots"></span><span id="more">
        <b>Let's go: In 12 minuten een volledige influencer Campagne</b><br>
        Deel in <a href="">10 stappen</a> je doelstelling, voorwaarden en introduceer je bedrijf of product.<br><br>
        Optie 1:Ontvang pitches van onze influencers <br>
        Jij bepaalt welke influencers jouw campagne in hun mailbox krijgen. Influencers pitchen met een motivatie, vraagprijs en geverifieerde mediakit.<br>
        Set-up kosten: €100,-.<br><br>
        Upgrade: optie 2: Kies zelf de juist influencers uit <br>
        Kies zelf de juiste influencers uit onze <a href="">marktplaats</a>.Breng een bod uit en kom direct in contact met onze influencers.<br>
        Alleen mogelijk met een <a href="">Pro-abonnement.</a><br>
        Set-up kosten: €0,-.<br><br>
        <h2>What's next</h2>
        Na het aanmaken van de campagne dien je hem ter keuring in bij LinkBuilding.
        Bij een lite-abonnement ontvang je na het indienen een factuur voor de set-up kosten.
        Zodra de factuur voldaan is neemt onze campaign manager contact met je op om de campagne door te spreken.
        Zij kan tevens al je vragen beantwoorden en zal, indien wenselijk, samen met jou de campagne optimaliseren. 
        At last: Je campagne staat live. Influencers pitchen op jouw campagne of de door jouw uitgenodigde influencers ontvangen je berichten.
        Je sluit deals, ontvangt preview posts en na jouw goedkeuring gaan deze posts live.

        <a href=""> Start je Briefing</a>

    </span></p>
    <button type="button" id="read" onclick="read()">Verder lezen</button>
</div>
<div id="Box">
    <h3>Naam</h3>
    <p><span id="dots1"></span><span id="more1">
        Voer een naam in voor je campaign, deze naam zal getoond worden aan de publishers en influencers. Je kan tot 50 karakters gebruiken.
    <form>
        <label for="Naam">Naam van de campaign</label>
        <input type="text" id="Naam" name="Naam van de Campagne" required>
    </form>
    </span></p>
    <button type="button" id="read1" onclick="read1()">Start met "naam"</button>
</div>
<div id="Box">
    <h3>Marketingdoel</h3>
    <p><span id="dots2"></span><span id="more2">
        Bepaal met welk marketingdoel de campagne door de influencers en publishers ingezet gaat worden.
        <br><br>
        <h4><a href="">Brand awareness</a></h4>
        <br><br>
        <h4><a href="">Engagement</a></h4>
        <br><br>
        <h4><a href="">Vindbaarheid</a></h4>
        <br><br>
        <h4><a href="">Conversie</a></h4>
        <br><br>
    </span></p>
    <button type="button" id="read2" onclick="read2()">Start met "Marketingdoel"</button>
</div>
<div id="Box">
    <h3>Matching</h3>
    <p><span id="dots3"></span><span id="more3">
        Heb je nog geen specifieke influencers in gedachten? Laat onze influencers dan op jouw briefing pitchen. Wil je met specifieke influencers samenwerken? Neem dan een <a href=''> abonnement </a> en krijg toegang tot onze <a href="">martkplaats.
        <br><br>
        <h4><a href="">Ontvang pitches</a></h4>
        <br><br>
        <h4><a href="">Kies zelf</a></h4>
        <br><br>
        </a>
    </span></p>
    <button type="button" id="read3" onclick="read3()">Start met "Matching"</button>
</div>
<div id="Box">
    <h3>Kanalen</h3>
    <p><span id="dots4"></span><span id="more4">
        Kies op welke kanalen de campagne geplaats en gepromoot gaat worden.
        <br><br>
        <h4><a href="">Website</a></h4>
        <br><br>
        <h4><a href="">Instagram</a></h4>
        <br><br>
        <h4><a href="">Youtube</a></h4>
        <br><br>
        <h4><a href="">Facebook</a></h4>
        <br><br>
        <h4><a href="">Twitter</a></h4>
        <br><br>
        <h4><a href="">TikTok</a></h4>
        <br><br>
    </span></p>
    <button type="button" id="read4" onclick="read4()">Start met "Kanalen"</button>
</div>
<div id="Box">
    <h3>Producten</h3>
    <p><span id="dots5"></span><span id="more5">
Vormen van content op kanaal van influencers en publishers. Denk aan een blogspot of artikel, Instagram post, promotie hashtag of You-tube Video.
        <br><br>
<h4><a href="">Post</a></h4>
        <br><br>
        <br><br>
<h4><a href="">Review</a></h4>
        <br><br>
        <br><br>
<h4><a href="">Link</a></h4>
        <br><br>
    </span></p>
    <button type="button" id="read5" onclick="read5()">Start met "Producten"</button>
</div>
<div id="Box">
    <h3>Briefing</h3>
    <p><span id="dots6"></span><span id="more6">
        Geef in de briefing aan wat je wil waar de influencers & publishers over schrijft.<br><br>
        <b>Geef de influencers aan wat meer informatie over je product of merk en waar je bekend voor wilt zijn.</b><br>
        &nbsp;&nbsp;<input type="text" id="Meer informatie" name="Meer informatie" required>
        <b><br>Wat verwacht je van de influencers?</b><br>
        &nbsp;&nbsp;<input type="text" id="Meer informatie" name="Meer informatie" required>
    </span></p>
    <button type="button" id="read6" onclick="read6()">Start met "Briefing"</button>
</div>
<div id="Box">
    <h3>Voorwarden</h3>
    <p><span id="dots7"></span><span id="more7">
        Wat zijn de voorwaarden waar de influencers aan moeten voldoen om aan je campagne mee te doen?
        <br><br>
        Kanaal
        <br><br>
        Content
        <br><br>
        Overige voorwaarden <br>
        &nbsp;&nbsp;<input type="text" id="Meer informatie" name="Meer informatie" required>
    </span></p>
    <button type="button" id="read7" onclick="read7()">Start met "Voorwarden"</button>
</div>
<div id="Box">
    <h3>Doelgroep</h3>
    <p><span id="dots8"></span><span id="more8">
        Welke doelgroep wil je bereiken?
        <br><br>
        Leeftijd van de doelgroep
        <br><br>
        Geslacht van de doelgroep
    </span></p>

    <button type="button" id="read8" onclick="read8()">Start met "Doelgroep"</button>
</div>
<div id="Box">
    <h3>Vergoedingsmodel</h3>
    <p><span id="dots9"></span><span id="more9">
        Kies een vergoedingsmodel voor deze campagne:
        <br><br>
<h4><a href="">Variabel bedrag</a></h4>
        <br><br>
        <br><br>
<h4><a href="">Barter</a></h4>
        <br><br>
        <br><br>
<h4><a href="">Variabel bedrag + Barter</a></h4>
        <br><br>
    </span></p>

    <button type="button" id="read9" onclick="read9()">Start met "Vergoedingsmodel"</button>
</div>
<div id="Box">
    <h3>Uitsluiten</h3>
    <p><span id="dots10"></span><span id="more10">
        Wil je niet meer met bepaalde kanalen samenwerken? Gebruik de dropdowns hieronder om ze uit te sluiten van deze campagne.
        <br><br>
        1. Opdrachten
        <br><br>
        2. Campagnes
        <br><br>
        3. Toevoegen aan uit te sluiten kanalen
    </span></p>

    <button type="button" id="read10" onclick="read10()">Start met "Uitsluiten"</button>
</div>
<div id="Box">
    <h3>Bevestigen</h3>
    <p><span id="dots11"></span><span id="more11">
        Staat alles goed? Preview je campagne zelf en klik daarna op indienen. Wij bekijken hem altijd eerst voor hij live gezet word. 
        Je betaalt €100 ,- set-up kosten bij het indienen van deze briefing.<br>
        Upgrade nu je abonnement en betaal €0,- set-up kosten. Bekijk hier <a href=""> Onze abonnementen. <a>
            <br><br>
            1. Wij controleren altijd alle campagnes<br>
            2. Wij zetten het live  met terugkoppeling en/of wijziging<br>
            3. De influencer en publishers krijgen bericht.<br>
            4. Accordeer de samenwerking en opdrachten en betaal.<br>
            5. Wij geven realtime resultaten per campagne en per opdracht.<br>
    </span></p>

    <button type="button" id="read11" onclick="read11()">Start met "Bevestigen"</button>
</div>
<script type="text/javascript">
    var i=0;
    function read(){
        if(!i){
            document.getElementById("more").style.
            display="inline";
            document.getElementById("dots").style.
            display="none";
            document.getElementById("read").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more").style.
            display="none";
            document.getElementById("dots").style.
            display="inline";
            document.getElementById("read").innerHTML="lees op nieuw";
            i=0;
        }
    }
    var i=0;
    function read1(){
        if(!i){
            document.getElementById("more1").style.
            display="inline";
            document.getElementById("dots1").style.
            display="none";
            document.getElementById("read1").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more1").style.
            display="none";
            document.getElementById("dots1").style.
            display="inline";
            document.getElementById("read1").innerHTML="Verder met Naam";
            i=0;
        }
    }
    var i=0;
    function read2(){
        if(!i){
            document.getElementById("more2").style.
            display="inline";
            document.getElementById("dots2").style.
            display="none";
            document.getElementById("read2").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more2").style.
            display="none";
            document.getElementById("dots2").style.
            display="inline";
            document.getElementById("read2").innerHTML="Verder met Marketingdoel";
            i=0;
        }
    }
    var i=0;
    function read3(){
        if(!i){
            document.getElementById("more3").style.
            display="inline";
            document.getElementById("dots3").style.
            display="none";
            document.getElementById("read3").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more3").style.
            display="none";
            document.getElementById("dots3").style.
            display="inline";
            document.getElementById("read3").innerHTML="Verder met Matching";
            i=0;
        }
    }
    var i=0;
    function read4(){
        if(!i){
            document.getElementById("more4").style.
            display="inline";
            document.getElementById("dots4").style.
            display="none";
            document.getElementById("read4").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more4").style.
            display="none";
            document.getElementById("dots4").style.
            display="inline";
            document.getElementById("read4").innerHTML="Verder met Kanalen";
            i=0;
        }
    }
    var i=0;
    function read5(){
        if(!i){
            document.getElementById("more5").style.
            display="inline";
            document.getElementById("dots5").style.
            display="none";
            document.getElementById("read5").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more5").style.
            display="none";
            document.getElementById("dots5").style.
            display="inline";
            document.getElementById("read5").innerHTML="Verder met Producten";
            i=0;
        }
    }
    var i=0;
    function read6(){
        if(!i){
            document.getElementById("more6").style.
            display="inline";
            document.getElementById("dots6").style.
            display="none";
            document.getElementById("read6").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more6").style.
            display="none";
            document.getElementById("dots6").style.
            display="inline";
            document.getElementById("read6").innerHTML="Verder met Briefing";
            i=0;
        }
    }
    var i=0;
    function read7(){
        if(!i){
            document.getElementById("more7").style.
            display="inline";
            document.getElementById("dots7").style.
            display="none";
            document.getElementById("read7").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more7").style.
            display="none";
            document.getElementById("dots7").style.
            display="inline";
            document.getElementById("read7").innerHTML="Verder met Voorwarden";
            i=0;
        }
    }
    var i=0;
    function read8(){
        if(!i){
            document.getElementById("more8").style.
            display="inline";
            document.getElementById("dots8").style.
            display="none";
            document.getElementById("read8").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more8").style.
            display="none";
            document.getElementById("dots8").style.
            display="inline";
            document.getElementById("read8").innerHTML="Verder met Doelgroep";
            i=0;
        }
    }
    var i=0;
    function read9(){
        if(!i){
            document.getElementById("more9").style.
            display="inline";
            document.getElementById("dots9").style.
            display="none";
            document.getElementById("read9").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more9").style.
            display="none";
            document.getElementById("dots9").style.
            display="inline";
            document.getElementById("read9").innerHTML="Verder met Vergoedingsmodel";
            i=0;
        }
    }
    var i=0;
    function read10(){
        if(!i){
            document.getElementById("more10").style.
            display="inline";
            document.getElementById("dots10").style.
            display="none";
            document.getElementById("read10").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more10").style.
            display="none";
            document.getElementById("dots10").style.
            display="inline";
            document.getElementById("read10").innerHTML="Verder met Uitsluiten";
            i=0;
        }
    }
    var i=0;
    function read11(){
        if(!i){
            document.getElementById("more11").style.
            display="inline";
            document.getElementById("dots11").style.
            display="none";
            document.getElementById("read11").innerHTML="Klaar";
            i=1;
        } else {
            document.getElementById("more11").style.
            display="none";
            document.getElementById("dots11").style.
            display="inline";
            document.getElementById("read11").innerHTML="Verder met Bevestigen";
            i=0;
        }
    }
</script>
</div>
@endsection
<link rel="stylesheet" type="text/css" href="{{ asset('css/Campaign.css')}}">
