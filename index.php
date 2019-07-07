<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jakub0301's portfolio">
    <meta name="keywords" content="jakub0301,portfolio,programmer,programista,html5,css3,java,c++,c#,swift,android,ios,nauka,kanal">
    <meta name="author" content="JAKUB0301">
    <meta name="google-site-verification" content="6VEoGmtLHfEbbTCKg6Dzk9r5c1YK8HHLf0VRFQqD2x0" />


    <!-- -->
    <link rel="icon" href="logo.png_256x256.png">
    <title>Jakub0301's portfolio</title>
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Rammetto+One" rel="stylesheet">
    <!--LOGO-->
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rammetto+One" rel="stylesheet">
    <!--WWW-->
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css" type="text/css" />

    <!--toxprogress bar-->
    <script src="js/tox-progress.js"></script>
    <!-- SCROLL -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script>
        jQuery(function($) {
            //zresetuj scrolla
            $.scrollTo(0);
            $('#logo').click(function() {
                $.scrollTo($('#top'), 500);
            });
            $('#link1').click(function() {
                $.scrollTo($('#skills'), 500);
            });
            $('#link2').click(function() {
                $.scrollTo($('#projects'), 500);
            });
            $('#link3').click(function() {
                $.scrollTo($('#e-mail'), 500);
            });
        });

    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65054333-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-65054333-1');

    </script>
    <!--Adsense-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8454677878029111",
            enable_page_level_ads: true
        });

    </script>
</head>

<body onload="ToxProgress.create();ToxProgress.animate()">
    <div class="top" id="myTop">
        <header class="logo">
            <div style="float: left">
                <h1 class="center"><a id="logo" href="#"><img src="img/logo.png_256x256.png" alt="JAKUB0301" width="150px" height="150px"></a></h1>
            </div>
        </header>
        <nav>
            <div><a id="link1" href="#">SKILLS</a></div>
            <div><a id="link2" href="#">PROJECTS</a></div>
            <div><a id="link3" href="#">CONTACT</a></div>
            <div><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></div>
            <script>
function myFunction() {
    var x = document.getElementById("myTop");
    if (x.className === "top") {
        x.className += " responsive";
    } else {
        x.className = "top";
    }
}
</script>
        </nav>
    </div>
    <div id="top"></div>
    <main>
        <!--About me-->
        <div id="about">
            <div class="text">
                <br><br>
                <h3>Hey</h3>
                <hr id="dotted" />
                <p>I'm Jakub. I'm 17 years old developer from Poland who has been in filed for 2 years and counting. My passion is about creating useful functionaly and intresting apps. If you would like to contact me, then be sure to find me on socialmedia.</p>
            </div>
        </div>
        <!--Skills-->
        <div id="background">
            <div id="skills">

                <div>
                    <h1 class="header">My Skills</h1>
                    <hr class="line" />
                    <div class="margin">
                        <!--HTML-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="66" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/html.png" alt="HTML" class="pr"></div>
                        </div>
                        <!--CSS-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="49" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/css.png" alt="CSS" class="pr"></div>
                        </div>
                        <!--JS-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="13" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/js.png" alt="JavaScript" class="pr"></div>
                        </div>
                        <!--PHP-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="20" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/php.png" alt="PHP" class="pr"></div>
                        </div>
                        <!--SQL-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="30" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/sql.png" alt="SQL" class="pr"></div>
                        </div>
                        <!--C#-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="24" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/csharp.png" alt="C#" class="pr"></div>
                        </div>
                        <!--C++-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="74" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/c++.png" alt="C++" class="pr"></div>
                        </div>
                        <!--C-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="47" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/c.png" alt="C" class="pr"></div>
                        </div>
                        <!--Swift-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="68" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/swift.png" alt="Swift" class="pr"></div>
                        </div>
                        <!--Java-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="83" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/java.png" alt="Java" class="pr"></div>
                        </div>
                        <!--Python-->
                        <div class="tox-progress" data-size="200" data-thickness="12" data-color="#229922" data-background="#364148" data-progress="78" data-speed="500">
                            <div class="tox-progress-content" data-vcenter="true"><img src="img/python.png" alt="Python" class="pr"></div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Projects-->
        <div id="projects">
            <div class="size">
                <div class="flexcontainer">
                    <p><a href="https://play.google.com/store/apps/details?id=com.jakub0301.spacedodge" target="_blank"><img src="img/spacedodge.png" alt="Space Dodge" class="projimg"></a></p>
                    <p><a href="https://play.google.com/store/apps/details?id=net.jakub0301.basketshots" target="_blank"><img src="img/basketshots.png" alt="Basket Shots" class="projimg"></a></p>
                    <p><a href="https://play.google.com/store/apps/details?id=net.jakub0301.threesixty" target="_blank"><img src="img/360.png" alt="360" class="projimg"></a></p>

                </div>
                <div>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Elastyczna JAKUB0301.NET -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8454677878029111" data-ad-slot="5366465222" data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
            </div>

        </div>

        <!--Send email-->
        <div id="e-mail">
            <div>
                <h1 class="header">Contact me!</h1>
                <hr class="line" />
            </div>
            <div class="space"></div>
            <form method="post">
                <input type="email" name="from" placeholder="Your&lsquo;s email" required/>
                <input type="text" name="subject" placeholder="Topic" required/>
                <textarea name="message" placeholder="Messsage" style="height: 200px;" required></textarea>
                <input type="submit" value="Send" />
            </form>
        </div>
        <?php
if($_POST){
    // Function to get the user IP address
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

$to      = 'kontakt@jakub0301.net';
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars(($_POST['message'])."\r\n ".$ipaddress);
$mail = htmlspecialchars($_POST["from"]);
$headers = 'From:form@jakub0301.net' . "\r\n " .
    'Reply-To: ' .$mail. "\r\n " .
    'X-Mailer: PHP/' . phpversion();
$send=mail($to, $subject, $message, $headers);
if($send==1){
   echo '<script language="javascript">';
  echo 'alert("Thank you! Your message has been sent successfully.")';  
  echo '</script>';
}
}
?>

            <!--Find me on-->
            <div id="socialmedia">
                <div class="space"></div>
                <div><a href="http://facebook.com/jakub0301" target="_blank" class="sociallink"><i class="icon-facebook"></i></a></div>
                <div><a href="https://www.youtube.com/jakub0301" target="_blank" class="sociallink"><i class="icon-youtube"></i></a></div>
                <div><a href="https://github.com/jakub0301" target="_blank" class="sociallink"><i class="icon-github"></i></a></div>
                <div><a href="https://stackoverflow.com/users/7413446/jakub0301" target="_blank" class="sociallink"><i class="icon-stackoverflow"></i></a></div>
                <div><a href="http://steamcommunity.com/id/jakub0301" target="_blank" class="sociallink"><i class="icon-steam"></i></a></div>
                <div><a href="https://play.google.com/store/apps/dev?id=9004068368798185657" target="_blank" class="sociallink"><i class="icon-android"></i></a>
                </div>
                <div class="clear"></div>
                <div class="space"></div>
            </div>



    </main>
    <!--Footer-->
    <footer>
        <p class="center">&copy; JAKUB0301, 2018. All rights reserved</p>
    </footer>

</body>

</html>
