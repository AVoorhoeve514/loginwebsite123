<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio website</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
<div class="topnavbar">
    <div class="logo"><a href="https://www.youtube.com/watch?v=OjNpRbNdR7E"><img src="./img/samurai.png"
                                                                                 width="50px";
                                                                                 height="55px";
                                                                                 border-top-left-radius: 0%;></a>
    </div>
    <nav>
        <li><a href="./"><strong>Home</strong></a></li>
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
<div>
    <h2 style="text-align: center">Blog page</h2>
</div>
@forelse($articles as $article)
    <div class="main">
        <article class="profile-text">
            <br>
            <h2>{{ $article->title }}</h2>
            <p class="blogText">{{ Str::limit($article->content, 200) }}</p>
        </article>
    </div>
@empty
    <div class="main">
        <article class="profile-text">
            <br>
            <p>Geen posts gevonden...</p>
        </article>
    </div>
@endforelse
@endsection
