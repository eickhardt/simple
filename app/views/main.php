
<!DOCTYPE html>

<html>
<head>
    <title>Daniel Online</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/d.ico">
    
    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:300|Open+Sans:400italic,400,600' rel='stylesheet' type='text/css'>
    <link href='/css/main-styles.css' rel='stylesheet' type='text/css'>
    <link href='/css/font-awesome.css' rel='stylesheet' type='text/css'>
    
    <!-- Scripts -->
    <script language='JavaScript' src='/js/jquery-2.1.1.min.js'></script>
    <script language='JavaScript'>
        function registerEvents(args) {
            window.addEventListener('scroll',scroll,false);
            
            var elems = document.getElementById('menuItems').getElementsByTagName('li');
            for (var i=0; i<elems.length; i++) {
                elems[i].addEventListener('mouseover',function(){this.style.backgroundColor = 'rgb(64,64,96)';},false);
                elems[i].addEventListener('mouseout',function(){this.style.backgroundColor = 'rgb(128,128,148)';},false);
                elems[i].addEventListener('click',function(){
                    yoffset = (window.pageYOffset > 140) ? 75 : 141;
                    $('html, body').animate({
                            scrollTop: $('#'+this.id.substr(0,this.id.length-2)).offset().top - yoffset
                        }, 1000);
                },false);
            }
            
            elems = document.getElementsByTagName('a');
            for (var i=0; i<elems.length; i++){
                elems[i].addEventListener('mouseover',function(){this.style.color = 'rgb(64,64,96)';},false);
                elems[i].addEventListener('mouseout',function(){this.style.color = 'rgb(128,128,148)';},false);
            }
            
            elems = document.getElementById('publications').getElementsByTagName('a');
            for (var i=0; i<elems.length; i++){
                elems[i].addEventListener('mouseover',function(){this.style.backgroundColor = 'rgb(225,225,225)';},false);
                elems[i].addEventListener('mouseout',function(){this.style.backgroundColor = 'rgb(255,255,255)';},false);
            }
            
            elems = document.getElementById('education').getElementsByTagName('a');
            for (var i=0; i<elems.length; i++){
                elems[i].addEventListener('mouseover',function(){this.style.backgroundColor = 'rgb(225,225,225)';},false);
                elems[i].addEventListener('mouseout',function(){this.style.backgroundColor = 'rgb(255,255,255)';},false);
            }
            
            elems = document.getElementById('experience').getElementsByClassName('xpMoreLink');
            for (var i=0; i<elems.length; i++){
                elems[i].addEventListener('click',function(){
                    if (this.getElementsByTagName('i')[0].className == 'fa fa-arrow-circle-o-up') {
                        $(this).parent().children('.xpMore').slideUp();
                        this.getElementsByTagName('i')[0].className = 'fa fa-arrow-circle-o-down';
                    }
                    else{
                        $(this).parent().children('.xpMore').slideDown();
                        this.getElementsByTagName('i')[0].className = 'fa fa-arrow-circle-o-up';
                    }
                });
            }
        }
        
        function scroll(){
            if (window.pageYOffset > 140) {
                document.getElementById('panelTitleSmall').style.display = 'block';
                document.getElementById('menu').classList.add('sticky');
            }
            else {
                document.getElementById('panelTitleSmall').style.display = 'none';
                document.getElementById('menu').classList.remove('sticky');
                
            }
        }
    </script>
</head>

<body>

<div id='panelTitle' class='panel title'>Daniel Eickhardt<br /><span class='subtitle'>The central enemy of reliability is complexity.</span></div>
<div id='panelTitleSmall' class='panel title collapsed'>Daniel Eickhardt - Developer</div>

<div id='menu' class='panel menu'>
    <ul id='menuItems'>
        <li id='aboutID'>About me</li>
        <li id='experienceID'>Experience</li>
        <li id='educationID'>Education</li>
        <li id='publicationsID'>Projects</li>
        <li id='contactID'>Contact</li>
    </ul>
</div>

<div class='panel content' id='about'>

    <p></p>
    <p><b>Most good programmers do programming not because they expect to get paid or get adolation by the public, but because it is fun to program.</b></p>
    <p><b>- Linus Thorvalds</b></p>
    <p></p>
    <h1>About me</h1>
    <p>My work aims at bridging the gap between graphic designers and end users of digital products, in order to bring the best possible user experience to all audiences.</p> 
    <p>I see myself at the crossing of backend-development, OOP-design, human-computer interaction and media, and technology research.</p>
    <p>Well versed in both front and backend development, I prefer to work with established and proven technologies. I enjoy quickly creating small projects and testing ideas.</p>
    <!-- <img style="margin: 10px 0;" width="50%" src='http://static.tumblr.com/efa7ixv/dw0m5amek/rajanand-programming-quotes__1_.jpg' alt='Comic'> -->
    <p>I have been involved with numerous successful projects, doing a variety of tasks from restructuring and integrating different systems across platforms, maintaining legacy code, to developing brand new concepts from the ground up.</p>
    <p>In parallel I find working on the web a source of inspiration to my private life, and I undertake personal projects from time to time to diversify and increase my programming experience.</p>
    <p>And when not at work I'm either running, playing music with my guitar, or traveling around. I also like to play with Arduino, and whip out my soldering iron when I get the chance.</p>
</div>

<div class='panel content' id='experience'>

    <h1>Technologies</h1>

    <div class='xpBlock'>
        <div class='techLineA'>Responsive web design and implementation (CSS, SCSS, SASS)</div><div class='techLineB'>4 years</div>
        <div class='techLineA'>JavaScript (jQuery, Angular 1&2, Vue, vanilla)</div><div class='techLineB'>3 years</div>
        <div class='techLineA'>Angular 2 (Version 5 and above)</div><div class='techLineB'>6 months</div>
        <div class='techLineA'>Java (Maven, Spring)</div><div class='techLineB'>6 months</div>
        <div class='techLineA'>Linux webservers CLI</div><div class='techLineB'>3 years</div>
        <div class='techLineA'>PHP (REST API's, Laravel)</div><div class='techLineB'>2½ years</div>
        <div class='techLineA'>General scripting (.cmd, bat, powershell)</div><div class='techLineB'>6 months</div>
        <div class='techLineA'>Vue JS</div><div class='techLineB'>Small side projects I do on my own time</div>
    </div>

    <h1>Experience</h1>

    <div class='xpBlock'>
        <div class='xpYears'>2016 - Now</div>
        <div class='xpEntry'>
            <div class='xpExperience'>Developer</div>
            <div class='xpCompany'>Intelligent Systems</div>    
        </div>
        <div class='xpMoreLink'>
            <a>My role <i class='fa fa-arrow-circle-o-down'></i></a>
        </div>
        <div class='xpMore'>
            <ul>
                <li>Worked on high level controls for industry grade automated logistics systems</li>
                <li>Project sizes ranging from small package sortig facilities to large distribution centers</li>
                <li>Onsite commissioning outside the country</li>
            </ul>
        </div>
    </div>

    <div class='xpBlock'>
        <div class='xpYears'>2014 - 2016</div>
        <div class='xpEntry'>
            <div class='xpExperience'>Developer</div>
            <div class='xpCompany'>Web Artisans I/S</div>    
        </div>
        <div class='xpMoreLink'>
            <a>My role <i class='fa fa-arrow-circle-o-down'></i></a>
        </div>
        <div class='xpMore'>
            <ul>
                <li>Started the company Web Artisans I/S</li>
                <li>Developed an image processing website for SUMOpix A/S</li>
                <li>Maintained Garant website and other tasks related to Garant & SUMOpix collaborations</li>
            </ul>
        </div>
    </div>

    <div class='xpBlock'>
        <div class='xpYears'>2014 - 2014</div>
        <div class='xpEntry'>
            <div class='xpExperience'>Developer</div>
            <div class='xpCompany'>Vindstød A/S</div>    
        </div>
        <div class='xpMoreLink'>
            <a>My role <i class='fa fa-arrow-circle-o-down'></i></a>
        </div>
        <div class='xpMore'>
            <ul>
                <li>Website maintenance in Drupal (PHP)</li>
                <li>Developing backend system in PHP, Zend Framework</li>
            </ul>
        </div>
    </div>
    
    <div class='xpBlock'>
        <div class='xpYears'>2013 - 2014</div>
        <div class='xpEntry'>
            <div class='xpExperience'>Developer</div>
            <div class='xpCompany'>Plusservice & Expantic A/S, Aalborg DK</div>    
        </div>
        <div class='xpMoreLink'>
            <a>My role <i class='fa fa-arrow-circle-o-down'></i></a>
        </div>
        <div class='xpMore'>
            <ul>
                <li>Initially developed a new concept, named libido24 using the PHP framework Laravel</li>
                <li>Maintenance and expansion of public sites in "pure" PHP</li>
                <li>Restructuring and performance-enhancing core components of internal legacy systems</li>
            </ul>
        </div>
    </div>
    
    <div class='xpBlock'>
        <div class='xpYears'>2012</div>
        <div class='xpEntry'>
            <div class='xpExperience'>Developer - 6 month internship</div>
            <div class='xpCompany'>Techtwo Internetdiensten, Netherlands</div>    
        </div>
        <div class='xpMoreLink'>
            <a>My role <i class='fa fa-arrow-circle-o-down'></i></a>
        </div>
        <div class='xpMore'>
            <ul>
                <li>Database restructuring project (thesis)</li>
                <li>Development of Wordpress websites</li>
                <li>Elaboration of internal systems using Zend-Framework</li>
                <li>Getting heavily involved with PHP and web-development in general</li>
            </ul>
        </div>
    </div>
    
    <div class='xpBlock'>
        <div class='xpYears'>2010 - 2013</div>
        <div class='xpEntry'>
            <div class='xpExperience'>Degree in Computer Science</div>
            <div class='xpCompany'>Datamatiker Skive Handelsskole, Denmark</div>    
        </div>
        <div class='xpMoreLink'>
            <a>My role <i class='fa fa-arrow-circle-o-down'></i></a>
        </div>
        <div class='xpMore'>
            <ul>
                <li>Studying computer science with a 10 as the final thesis score</li>
                <li>OOP</li>
                <li>HTML/CSS</li>
                <li>C#, .NET MVC, and other Microsoft technologies</li>
                <li>Java</li>
                <li>Javascript/jQuery/HTML5 and other styling tools</li>
                <li>Agile development/SCRUM/UML and other development frameworks</li>
            </ul>
        </div>
    </div>
    
    <!-- <div class='xpBlock'>
        <div class='xpYears'>2002 - 2010</div>
        <div class='xpEntry'>
            <div class='xpExperience'>Various untrained jobs</div>
            <div class='xpCompany'>Skive, Denmark</div>    
        </div>
        <div class='xpMoreLink'>
            <a>My role <i class='fa fa-arrow-circle-o-down'></i></a>
        </div>
        <div class='xpMore'>
            <ul>
                <li>Mailman for Post Danmark - Part time during studies</li>
                <li>Production worker at Flextronics A/S, Skive</li>
                <li>Production worker at Kaj Toft Elektronik A/S, Skive</li>
                <li>Farming</li>
                <li>Blockbuster</li>
                <li>Grocery store employee</li>
                <li>And many others :)</li>
            </ul>
        </div>
    </div> -->
</div>

<div class='panel content' id='education'>
    <h1>Education</h1>
    
    <div class='xpBlock'>
        <div class='xpYears'>2010 - 2013</div>
        <div class='xpEntry'>
            <div class='xpDiploma'>Academy Profession (AP) Degree in Computer Science</div>
            Thesis: <div class='publiTitle'><a href='http://www.techtwo.nl' target='_blank'>Development of websites and database restructuring project.</a></div>
            <div class='xpSchool'>Datamatiker Uddannelsen, Dania Skive</div>    
        </div>
    </div>

    <div class='xpBlock'>
        <div class='xpYears'>2003 - 2006</div>
        <div class='xpEntry'>
            <div class='xpDiploma'>The Higher Commercial Examination</div>
            School: <div class='publiTitle'><a href='http://www.skivehs.dk' target='_blank'>
            Study of Business</a></div>
            <div class='xpSchool'>Skive Handelsskole, Denmark</div>    
        </div>
    </div>
    
</div>

<div class='panel content' id='publications'>
    <h1>Selected projects</h1>
    
    <h2>Solo projects</h2>
    <a target="_blank" href="http://sumopix.com">
        <div class='publiDIV'>
            <h3>SUMOpix.com</h3>
            <img class="site_image" src="/img/sumopix.png">
        </div>
    </a>
    
    <a target="_blank" href="http://www.molenaarenmolenaar.nl">
        <div class='publiDIV'>
            <h3>Molenaarenmolenaar.nl</h3>
            <img class="site_image" src="/img/molenaarenmolenaar.png">
        </div>
    </a>
    
    <a target="_blank" href="http://www.workmassage.nl">
        <div class='publiDIV'>
            <h3>Workmassage.nl</h3>
            <img class="site_image" src="/img/workmassage.png">
        </div>
    </a>

    <h2>Collaboration projects</h2>
    <a target="_blank" href="http://garant.nu">
        <div class='publiDIV'>
            <h3>garant.nu</h3>
            <img class="site_image" src="/img/garant.png">
        </div>
    </a>

    <a target="_blank" href="http://www.amordating.co.uk">
        <div class='publiDIV'>
            <h3>AmorDating.co.uk</h3>
            <img class="site_image" src="/img/datemig.png">
        </div>
    </a>
    
    <a target="_blank" href="http://www.lotto24.co.uk/">
        <div class='publiDIV'>
            <h3>Lotto24.co.uk</h3>
            <img class="site_image" src="/img/lotto24.png">
        </div>
    </a>
    
</div>

<div class='panel content' id='contact'>
    <h1>Contact</h1>
    <div class='contactDIV'>
        
        <img class="mail_image" src="/img/mail.svg">
         
        <div class="email"><myemail data-user="ddeickhardt" data-domain="gmail.com">@</myemail></div>
    </div>
</div>

<script language='JavaScript'>registerEvents();</script>
</body>
</html>
