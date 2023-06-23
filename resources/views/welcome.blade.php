<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio website</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
<div class="py-12">
    <div class="logo">
        <name="" id="btnajax" class="btn btn-primary" role="button"
                onclick="change_message()">
        <img src="./img/walterswagger.jpg"
                width="50px";
                height="55px";
        border-top-left-radius: 0%;>
    </div>
    <nav>
        <li><a href="./"><strong>Dashboard</strong></a></li>
        <li><a href="./profile"><strong>Profile</strong></a></li>
        <li><a href="./dashboard"><strong>Dashboard</strong></a></li>
        <li><a href="./faq"><strong>FAQ</strong></a></li>
        <li><a href="./blog"><strong>Blog</strong></a></li>
        <marquee  behavior="scroll" direction="left">
            <img src="./img/glitchlogo"
                 alt="hz logo"
                 width: 50px;
                 height: 55px;
                 border-top-left-radius: 0%;>
        </marquee>
    </nav>
</div>
<nav class="sidenav">
    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/EN/6.-Regulations-Study-Programmes/CER-HZ-Bachelor-full-time-2022-2023-DEF-June-13.pdf" target="_blank">HZ course and examination regulations</a>
    <br><br>
    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2020-2021/9.-Implementation-Regulations-ICT-Fulltime-2020-2021.pdf" target="_blank">Implementation Regulations HBO-ICT</a>
    <br><br>
    <a href="https://learn.hz.nl/my/" target="_blank">HZ Learn</a>
    <br><br>
    <a href="https://teams.microsoft.com/_?culture=nl-nl&amp;country=NL&amp;lm=deeplink&amp;lmsrc=homePageWeb&amp;cmpid=WebSignIn#/school/conversations/Algemeen?threadId=19:827654897ab746089c081f24aff1c984@thread.skype&amp;ctx=channel" target="_blank">Teams environment</a>
    <br><br>
    <a href="https://hz.osiris-student.nl/#/voortgang/" target="_blank">Study progress</a>
    <br><br>
    <a href="https://github.com/HZ-HBO-ICT" target="_blank">Github environment</a>
    <br>
</nav>
<div class='popup'>
    <span class='popuptext' id='popup'>hi</span>
    <style>

    </style>
    </div>
<div class="container">
    <div class="modal">
        <br><br>
        <h1>Alwyn Voorhoeve's Portfolio website</h1>
        <p>Ik ben Alwyn en ik ben student op de <a href="https://hz.nl/">HZ University of Applied Sciences</a> in Middelburg. Dit is de Dashboardpagina van mijn portfoliowebsite</p>
        <img src="./img/hz-university-of-applied-sciences-logo-png-transparent.png" alt="hz logo met tekst" width="300px">
        <p>Ik heb deze opleiding gekozen omdat ik erg van videogames hou en ik later een game designer wil worden.
            Dat zou veel makkelijker worden als ik al ervaring heb met programmeren en Software engineering.
            Na deze opleiding wil ik misschien ook nog een game design opleiding volgen.
            Dat was niet mijn eerste keus was omdat ik nog geen ervaring heb met programmeren en coderen en omdat er bij dat soort opleidingen vaak maar weinig mensen per jaar binnengelaten worden.</p>
        <p><a href="https://www.buas.nl/opleidingen/bachelor-creative-media-and-game-technologies">Hier</a> vind je de opleiding die ik waarschijnlijk ga volgen nadat ik mijn diploma heb.</p>
        <img src="./img/jimcarreytyping.gif" alt="me when code">
        <p>Tot nu toe heb ik het erg naar mijn zin op deze opleiding en ben ik overtuigd dat ik een goede studiekeuze heb gemaakt. Ik heb vaak last van uitselgedrag en word vaak afgeleid van dingen als ik ze niet interresant vind, maar dat heb ik bij deze opleiding niet. De stof is lastig, maar het lukt bijna altijd om eruit te komen. En ik hou ook zelf wel van een uitdaging.</p>
        <h3>Waarom is ICT de juiste opleiding voor mij?</h3>
        <ul>-Ik vind het leuk om met computers te werken</ul>
        <ul>-Ik heb ervaring nodig met programmeren als ik ooit een gamedesigner wil worden</ul>
        <ul>-Ik hou van games spelen en ik wil meer leren over hoe ze gemaakt worden.</ul>
    </div>
</div>
</div>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>
<script src="./JS/breakingbad.js" defer></script>
</body>
</html>
