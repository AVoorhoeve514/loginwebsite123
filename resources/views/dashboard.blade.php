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
<div class="container">
    <div class="modal">
        <br><br>
        <h1>Dashboard</h1>
        <h2>Study overview</h2>
        <style>table, th, td {
                border: 1px solid black;
            }
        </style>
        <table style="width: 78%;">
            <tr>
                <th>Blok</th>
                <th>Cursus</th>
                <th>EC</th>
                <th>Toets</th>
                <th>Cijfer</th>
            </tr>
            <tr>
                <td rowspan="3">1</td>
                <td>Program & Career Orientation</td>
                <td>2,5</td>
                <td>Assessment</td>
                <td class="toBeDetermined"></td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>5</td>
                <td>Written Exam</td>
                <td class="toBeDetermined"></td>
            </tr>
            <tr>
                <td>Programming Basics</td>
                <td>5</td>
                <td>Case Study Exam</td>
                <td class="toBeDetermined"></td>
            </tr>
            <tr>
                <td rowspan="2">2</td>
                <td rowspan="2">Object Oriented Programming</td>
                <td rowspan="2">10</td>
                <td>Case Study (50%)</td>
                <td rowspan="2" class="toBeDetermined"></td>
            <tr>
                <td>Project (50%)</td>
            </tr>
            <tr>
                <td rowspan="4">3</td>
                <td>Framework Development 1</td>
                <td>5</td>
                <td>Case Study</td>
                <td class="toBeDetermined"></td>
            </tr>
            <tr>
                <td rowspan="3">Framework Project 1</td>
                <td rowspan="3">7,5</td>
                <td>Project (33%)</td>
                <td rowspan="3" class="toBeDetermined"></td>
            </tr>
            <td>Case Study Exam (33%)</td>
            </tr>
            <tr>
                <td>Report (33%)</td>
            </tr>
            <tr>
                <td rowspan="3">4</td>
                <td rowspan="3">Framework Project 2</td>
                <td rowspan="3">10</td>
                <td>Portfolio (50%)</td>
                <td rowspan="3" class="toBeDetermined"></td>
            </tr>
            <tr>
                <td>Project (25%)</td>
            </tr>
            <tr>
                <td>Assignment (25%)</td>
            </tr>
            <tr>
                <td>Het hele Jaar</td>
                <td>PPD</td>
                <td>12,5</td>
                <td>Portfolio</td>
                <td class="toBeDetermined"></td>
            </tr>
            <tr>
                <td rowspan="2">Wanneer ik wil</td>
                <td>Personality 1</td>
                <td>1,25</td>
                <td>Portfolio</td>
                <td class="toBeDetermined"></td>
            </tr>
            <tr>
                <td>Personality 2</td>
                <td>1,25</td>
                <td>Portfolio</td>
                <td class="toBeDetermined"></td>
            </tr>
        </table>
        <br>
        <br>
        <table style="width: 78%;">
            <tr>
                <td class="toBeDetermined">To be determined</td>
                <td class="gradeNA">Grade not sufficient</td>
                <td class="gradeSufficient">Grade sufficient</td>
            </tr>
        </table>
        <p><strong>Progressbar EC's</strong></p>
        <div class="progress">
            <div class="skill html"><strong>0/60</strong></div>
        </div>
        <br>
        <h3>Informatie over bevordering en EC's</h3>
        <p><strong>60 EC</strong></p>
        <p>Je hebt 60 EC's nodig om je propedeuse te behalen</p>
        <br>
        <p><strong>Boven 45 EC</strong></p>
        <p>Als je meer dan 45 EC's behaald hebt mag je naar jaar 2, maar moet je wel de overige EC's inhalen</p>
        <br>
        <p><strong>Onder 45 EC</strong></p>
        <p>Als je minder dan 45 EC's behaald hebt word je niet naar jaar 2 bevorderd en krijg je een NBSA (Negatief Bindend Studie Advies). </p>
        <br>
        <br>
        <br>
    </div>
</div>

</body>
<script src="app.js"></script>
</html>
