    <!DOCTYPE html>
    <html lang="en" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(98293013, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/98293013" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->        
        <meta name="Author" content="VideoLAN" />
        <meta name="Keywords" content=
        "VideoLAN, VLC, VLC player, VLC media player, download, media player, player download, codec, encoder, media converter, video, video player,
        multimedia, multicast, x262, x264, x265, DVBlast, Windows, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, Android, Streaming,
        DVD, Matroska, Blu-Ray, FLV, Xvid, MPEG, MPEG2, MPEG4, H264, DivX, MKV, m2ts, open source, free software, floss, free" />

        <meta name="Description" content="VLC media player - Skins" />
        <meta name="apple-itunes-app" content="app-id=650377962"/>
        <title>VLC media player - Skins - VideoLAN</title>

        
                <link rel="shortcut icon" type="image/x-icon" href="http://images.videolan.org/images/favicon.ico" />

                <link rel="alternate" type="application/rss+xml" title="RSS - VideoLAN News" href="http://images.videolan.org/videolan-news.rss" />
        <link rel="alternate" type="application/rss+xml" title="RSS - Developers Blog" href="http://planet.videolan.org/rss20.xml" />

        <!-- /vlc/skins -->

        <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="../style/style.css" />

                <link rel="dns-prefetch" href="http://get.videolan.org/" />
                <link rel="stylesheet" type="text/css" href="skins.css" />
        <link rel="stylesheet" type="text/css" href="../style/panels.css" />

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--[if lte IE 7]>
            * {
                behavior: url("/style/box-sizing.htc");
            }
        <![endif]-->
        <!--[if lt IE 7]>
           <style type="text/css">
              @media screen{ body{behavior:url("/width.htc");} }
                /* PNG support for IE */
                img {  behavior: url("/png.htc");}
                .DXImageTransformed { display: inline-block; }
              </style>
        <![endif]-->


                        <script src="../js/jquery.min.js" type='text/javascript'></script>
        <script async="async" src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script defer src="../js/skins.js" type="text/javascript"></script>
                <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-38853043-1"></script>
            <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-38853043-1', { 'anonymize_ip': true })

            function isTouchDevice() {
                return 'ontouchstart' in window || navigator.maxTouchPoints;
            };

            $(document).ready(function() {
                //Early return if touch device
                if (isTouchDevice()) {
                    return;
                }
                //Open dropdown menu on hover if not touch device & navbar-toggle not visible
                $('#nav ul.nav li.dropdown').hover(function() {
                    if (!$('.navbar-toggle').is(':visible') && !$(this).hasClass('open')) {
                        $('.dropdown-toggle', this).trigger('click');
                    }
                }, function() {
                    if (!$('.navbar-toggle').is(':visible') && $(this).hasClass('open')) {
                        $('.dropdown-toggle', this).trigger('click');
                    }
                });
            });

        </script>
    </head>
<body class=''><div id='bodyInner' class='orange'>    <nav id="nav" class="navbar navbar-default navbar-fixed-top">
 <div class="container">
    <div class="navbar-header">
        <a class="navbar-brand" href="../index.html">
        <img src='../images/logoOrange.png' alt='VideoLAN association' />
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div id="main-navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown ">
          <a href="../videolan.2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VideoLAN <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../videolan.2">Team &amp; Organization</a></li>
            <li><a href="partners.html">Consulting Services &amp; Partners</a></li>
            <li><a href="../videolan/events.2">Events</a></li>
            <li><a href="../legal.html">Legal</a></li>
            <li><a href="../press/index.html">Press center</a></li>
            <li><a href="../contact.html">Contact us</a></li>
          </ul>
        </li>
        <li class="dropdown  active ">
          <a href="download-linux.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VLC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="download-linux.html">Download</a></li>
            <li><a href="todo.html">Features</a></li>
            <li><a href="skins.html">Customize</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../goodies.html">Get Goodies</a></li>
          </ul>
        </li>
        <li class="dropdown ">
          <a href="../projects.2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../projects/dvblast.html">DVBlast</a></li>
            <li><a href="../developers/x264.html">x264</a></li>
            <li><a href="../developers/x262.html">x262</a></li>
            <li><a href="../developers/x265.html">x265</a></li>
            <li><a href="../projects/multicat.html">multicat</a></li>
            <li><a href="../projects/dav1d.html">dav1d</a></li>
            <li><a href="skineditor.html">VLC Skin Editor</a></li>
            <li><a href="download-linux.html">VLC media player</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="libvlc.html">libVLC</a></li>
            <li><a href="../libdvdcss/index.html">libdvdcss</a></li>
            <li><a href="../developers/libdvdnav.html">libdvdnav</a></li>
            <li><a href="../developers/libdvdnav.html">libdvdread</a></li>
            <li><a href="../developers/libbluray.html">libbluray</a></li>
            <li><a href="../developers/libdvbpsi.html">libdvbpsi</a></li>
            <li><a href="../developers/libaacs.html">libaacs</a></li>
            <li><a href="../developers/libdvbcsa.html">libdvbcsa</a></li>
            <li><a href="../developers/bitstream.html">biTStream</a></li>
            <li><a href="../developers/unity.html">vlc-unity</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../projects.2">All Projects</a></li>
          </ul>
        </li>
        <li class="dropdown ">
          <a href="../contribute.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contribute <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../contribute.html">Getting started</a></li>
            <li><a href="../contribute.html#money">Donate</a></li>
            <li><a href="../support.2#bugs">Report a bug</a></li>
          </ul>
        </li>
        <li>
          <a href="../support.2">Support</a>
        </li>
      </ul>
               <ul class="nav navbar-nav pull-right donate-box">
            <li class="hidden-sm">
                <form class="donate2" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <fieldset>
        <input name="cmd" value="_xclick" type="hidden"/>
        <input name="business" value="sponsor@videolan.org" type="hidden"/>
        <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
        <input name="currency_code" value="EUR" type="hidden"/>
        <input name="tax" value="0" type="hidden"/>
        <input name="lc" value="GB" type="hidden"/>
        <input name="no_shipping" value="1" type="hidden"/>
                <input name="return" value="https://www.videolan.org/thank_you.html" type="hidden"/>
        <input class="euros" type='text' name="amount" value="4.00" />
        <button type='submit'>donate</button>
    </fieldset>
</form>
            </li>
            <li class="hidden-sm">
                <form class="donate2" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <fieldset>
        <input name="cmd" value="_xclick" type="hidden"/>
        <input name="business" value="sponsor@videolan.org" type="hidden"/>
        <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
        <input name="currency_code" value="USD" type="hidden"/>
        <input name="tax" value="0" type="hidden"/>
        <input name="lc" value="US" type="hidden"/>
        <input name="no_shipping" value="1" type="hidden"/>
                <input name="return" value="https://www.videolan.org/thank_you.html" type="hidden"/>
        <input class="dollars" type='text' name="amount" value="5.00" />
        <button type='submit'>donate</button>
    </fieldset>
</form>
            </li>
            <li class="dropdown visible-sm donate2">
                <a href="../contribute.html#money" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Donate <span class="caret"></span>
                </a>
                <ul class="dropdown-menu donate-dropdown pull-right">
                    <li>
                        <form class="donate2" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <fieldset>
        <input name="cmd" value="_xclick" type="hidden"/>
        <input name="business" value="sponsor@videolan.org" type="hidden"/>
        <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
        <input name="currency_code" value="EUR" type="hidden"/>
        <input name="tax" value="0" type="hidden"/>
        <input name="lc" value="GB" type="hidden"/>
        <input name="no_shipping" value="1" type="hidden"/>
                <input name="return" value="https://www.videolan.org/thank_you.html" type="hidden"/>
        <input class="euros" type='text' name="amount" value="4.00" />
        <button type='submit'>donate</button>
    </fieldset>
</form>
                    </li>
                    <li>
                        <form class="donate2" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <fieldset>
        <input name="cmd" value="_xclick" type="hidden"/>
        <input name="business" value="sponsor@videolan.org" type="hidden"/>
        <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
        <input name="currency_code" value="USD" type="hidden"/>
        <input name="tax" value="0" type="hidden"/>
        <input name="lc" value="US" type="hidden"/>
        <input name="no_shipping" value="1" type="hidden"/>
                <input name="return" value="https://www.videolan.org/thank_you.html" type="hidden"/>
        <input class="dollars" type='text' name="amount" value="5.00" />
        <button type='submit'>donate</button>
    </fieldset>
</form>
                    </li>
                </ul>
            </li>
        </ul>
                    </div>
 </div>
</nav>

<!-- header -->

    <div class="header container">
        <div id="nonprofitOrganizationDiv2" class="center-block">
                VideoLAN, a project and a <a href="../videolan.2" class="noUnderline">non-profit organization.</a>         </div>
            </div>
<script type='text/javascript'>
   $(document).ready(function () { initSkinBox(); });
</script>

<h1>Skins</h1>
<table>
<tr>
  <td style="border:0px;padding:5px;">
      <div class="panel-orange"> <!-- begin panel -->
    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
    <h1>How to use these skins?</h1>
    <i>Skins do not work on Mac OS X!</i><br />
      Put the downloaded VLT files in the following folder:<br/>
      <ul class="panel-orange-bullet">
        <li>On Windows: the <i>skins</i> folder in the VLC installation directory (e.g. <i>C:\Program Files\VideoLAN\VLC\skins</i>)</li>
        <li>On Linux/Unix: <i>~/.local/share/vlc/skins2</i></li>
      </ul>
      <br />
      Then open your VLC settings and change your interface from native to skins.
      You can choose your desired skin already there or change it when you are in the skins mode by rightclicking somewhere on the skin and going to <i>Interface&gt;Choose Skin</i>.<br/>
      VLC needs to be restarted to change to skins mode.
          </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->
  </td>
  <td style="border:0px;padding: 5px">
      <div class="panel-blue"> <!-- begin panel -->
    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
    <h1>Create your own skin!</h1>
    If you wish to create your own skin, check out these links:<br/>
      <ul class="panel-blue-bullet">
        <li><a href="skineditor.html">The VLC Skin Editor</a></li>
        <li><a href="skins2-create.html">How skins are made up</a></li>
        <li><a href="https://forum.videolan.org/viewforum.php?f=15">The skins forum</a></li>
      </ul>    
    <p>
    You have made a new skin and want to share it?<br />
    Please use <a href="https://api.addons.videolan.org/">VLC Addons</a> website to upload and share them.
    </p>
          </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->
  </td>
</tr>
</table>
<h2>Downloads</h2>
<p><i>Download all the skins at once <a href='download-skins2-go.php@url=vlc-skins.zip'>here</a> (37MiB).</i><br />Downloaded 3494077 times since January 2007. (This pack is updated daily)</p>
<p>Sort by <a href="skins.php@sort=date_mod">last update date</a>, <a href="skins.php@sort=date_added">creation date</a>, <a href="skins.php@sort=downloads">downloads</a> or <a href="skins.php@sort=rating">rating</a>.</p>

<div class="skin-container" onclick="showSkinBox(267,'eDark Vlc','Aaron A','2010-12-19','1193107','eDark Vlc.vlt','271.2KiB',9.0883084577114428,22512,'http://images.videolan.org/vlc/skins2/Preview.jpg','1','0.9.0')">
  <div class="skin-container-title">eDark Vlc</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Preview.jpg" alt="eDark Vlc"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(266,'Nice','Demian H','2010-12-13','93702','MyVLCtheme.vlt','39.5KiB',4.0535358565737052,4016,'http://images.videolan.org/vlc/skins2/ThemeScreenShot.jpg','1','0.9.0')">
  <div class="skin-container-title">Nice</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_ThemeScreenShot.jpg" alt="Nice"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(265,'Debian Red Coast','Mateusz Jagiełło','2010-10-11','619597','redcoast.vlt','342.7KiB',4.4478204912987522,17871,'http://images.videolan.org/vlc/skins2/music.png','1','0.8.5')">
  <div class="skin-container-title">Debian Red Coast</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_music.png" alt="Debian Red Coast"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(264,'darklounge','Gizmoms','2010-09-26','646428','darklounge_vlc_1.0.vlt','495.7KiB',4.6780669144981413,6725,'http://images.videolan.org/vlc/skins2/darklounge_preview.jpg','1','0.9.0')">
  <div class="skin-container-title">darklounge</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_darklounge_preview.jpg" alt="darklounge"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-7.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(263,'Darkvoodoo2','Voodoomonkey','2010-09-25','48377','darkvoodoo2.vlt','84.9KiB',4.1666666666666667,600,'http://images.videolan.org/vlc/skins2/darkvoodoo2.png','1','0.9.0')">
  <div class="skin-container-title">Darkvoodoo2</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_darkvoodoo2.png" alt="Darkvoodoo2"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(260,'Darkvoodoo','Voodoomonkey','2010-09-10','614177','darkvoodoo.vlt','139.3KiB',4.4873446024505858,11181,'http://images.videolan.org/vlc/skins2/darkvoodoo_voodoolanplayer_by_monkeyb07-d2ybxcj.jpg','1','0.9.0')">
  <div class="skin-container-title">Darkvoodoo</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_darkvoodoo_voodoolanplayer_by_monkeyb07-d2ybxcj.jpg" alt="Darkvoodoo"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(255,'sony_psp_go XL','terireme HELLAS','2010-09-08','199316','sony_psp_XL.vlt','1.3MiB',4.3307132459970888,6870,'http://images.videolan.org/vlc/skins2/sony_psp_XL2d.jpg','1','0.9.0')">
  <div class="skin-container-title">sony_psp_go XL</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_sony_psp_XL2d.jpg" alt="sony_psp_go XL"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(256,'Sleek Touch','Nomsalis','2010-09-04','39540','sleektouch.vlt','26KiB',4.1167608286252354,531,'http://images.videolan.org/vlc/skins2/sleektouch.png','1','0.9.0')">
  <div class="skin-container-title">Sleek Touch</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_sleektouch.png" alt="Sleek Touch"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(253,'Advantage.VLC','Spyme','2010-08-17','161377','avs_0_95_beta.vlt','292.8KiB',4.5808151791988756,2846,'http://images.videolan.org/vlc/skins2/vlc_skin.png','1','0.9.0')">
  <div class="skin-container-title">Advantage.VLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_vlc_skin.png" alt="Advantage.VLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(252,'Media Player 12','sebweber','2010-07-10','342945','windows_media_player_12.vlt','446.6KiB',4.5691635657660573,6181,'http://images.videolan.org/vlc/skins2/windows_media_player_12.jpg','1','0.9.0')">
  <div class="skin-container-title">Media Player 12</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_windows_media_player_12.jpg" alt="Media Player 12"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(251,'Black v 2.0','Letis','2010-07-06','79971','black v2.0.vlt','56.6KiB',4.2014814814814815,2025,'http://images.videolan.org/vlc/skins2/VLC.jpg','1','0.9.0')">
  <div class="skin-container-title">Black v 2.0</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_VLC.jpg" alt="Black v 2.0"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(234,'Slick Iphone Skin','Maunil Patel','2010-06-29','166985','Slick Iphone Skin.vlt','188.8KiB',4.4336406817546801,3579,'http://images.videolan.org/vlc/skins2/Slick iphone skin preview.jpg','1','0.9.0')">
  <div class="skin-container-title">Slick Iphone Skin</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Slick iphone skin preview.jpg" alt="Slick Iphone Skin"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(248,'pardus white','gölge','2010-06-20','47723','pardus_white.vlt','288.1KiB',4.4935622317596567,932,'http://images.videolan.org/vlc/skins2/pardus_white.png','1','0.9.0')">
  <div class="skin-container-title">pardus white</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_pardus_white.png" alt="pardus white"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(246,'pardus','gölge','2010-06-02','51120','pardus.vlt','244.5KiB',4.4384017758046615,901,'http://images.videolan.org/vlc/skins2/caps.png','1','0.9.0')">
  <div class="skin-container-title">pardus</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_caps.png" alt="pardus"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(243,'WMP 12','gerilla','2010-05-29','169877','wmp12.vlt','433.1KiB',4.5444500251130085,1991,'http://images.videolan.org/vlc/skins2/cap.png','1','0.9.0')">
  <div class="skin-container-title">WMP 12</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_cap.png" alt="WMP 12"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(220,'DestroyVLC','Erik Teichmann','2010-04-29','229495','DestroyVLC.vlt','70.1KiB',4.5618798955613577,1915,'http://images.videolan.org/vlc/skins2/destroyvlc.png','1','0.9.0')">
  <div class="skin-container-title">DestroyVLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_destroyvlc.png" alt="DestroyVLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(239,'Alienware Darkstar','Universematrix','2010-04-23','344203','Alienware Darkstar.vlt','534.4KiB',4.5701204002034933,11794,'http://images.videolan.org/vlc/skins2/Alienware Darkstar.PNG','1','0.9.0')">
  <div class="skin-container-title">Alienware Darkstar</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Alienware Darkstar.PNG" alt="Alienware Darkstar"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(208,'WMP11_B - resizable and with total time','ANGEL_B','2010-04-22','488772','WMP_B_2.vlt','186.6KiB',4.4922940879231935,7916,'http://images.videolan.org/vlc/skins2/WMP_B_2.png','1','0.9.0')">
  <div class="skin-container-title">WMP11_B - resizable and with total time</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_WMP_B_2.png" alt="WMP11_B - resizable and with total time"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(236,'Nintendo Black Style','Universematrix','2010-04-09','37456','Nintendo Black Style.vlt','269KiB',4.3250950570342205,526,'http://images.videolan.org/vlc/skins2/Nintendo Style Black.PNG','1','0.9.0')">
  <div class="skin-container-title">Nintendo Black Style</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Nintendo Style Black.PNG" alt="Nintendo Black Style"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(225,'Nintendo Style','Guilherme DLA','2010-04-09','27571','Nintendo Style.vlt','270.3KiB',4.2676518883415435,609,'http://images.videolan.org/vlc/skins2/Nintendo Style.PNG','1','0.9.0')">
  <div class="skin-container-title">Nintendo Style</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Nintendo Style.PNG" alt="Nintendo Style"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(233,'BLUE STEEL','RTJWILDE','2010-03-29','127975','BlueSteel.vlt','280.1KiB',4.4166239096972807,1949,'http://images.videolan.org/vlc/skins2/vlc-bluesteel-screenshot.jpg','1','0.8.5')">
  <div class="skin-container-title">BLUE STEEL</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_vlc-bluesteel-screenshot.jpg" alt="BLUE STEEL"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(232,'esperanto gnewsense','anonima artistino de gimp','2010-03-25','24893','GNS.vlt','1.1MiB',3.8869955156950673,1115,'http://images.videolan.org/vlc/skins2/skin gnewsense.jpg','1','0.9.0')">
  <div class="skin-container-title">esperanto gnewsense</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_skin gnewsense.jpg" alt="esperanto gnewsense"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(230,'earth_changed','i changed it','2010-03-17','44964','earth_red.vlt','517.4KiB',4.0871003307607497,1814,'http://images.videolan.org/vlc/skins2/piel.jpg','1','0.9.0')">
  <div class="skin-container-title">earth_changed</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_piel.jpg" alt="earth_changed"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(229,'QuickTime','Guilherme DLA','2010-02-27','45399','QuickTime.vlt','119KiB',4.4004106776180698,487,'http://images.videolan.org/vlc/skins2/QuickTime.PNG','1','0.8.5')">
  <div class="skin-container-title">QuickTime</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_QuickTime.PNG" alt="QuickTime"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(226,'QuickTime UMX.vlt','Guilherme DLA','2010-02-23','63289','QuickTime UMX.vlt','428.3KiB',4.3756097560975610,1025,'http://images.videolan.org/vlc/skins2/QuickTime UMX.PNG','1','0.8.5')">
  <div class="skin-container-title">QuickTime UMX.vlt</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_QuickTime UMX.PNG" alt="QuickTime UMX.vlt"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(224,'VLC Darkness','Universematrix','2010-02-22','135527','VLC Darkness.vlt','225.5KiB',4.3780918727915194,1415,'http://images.videolan.org/vlc/skins2/VLC Darkness.PNG','1','0.8.5')">
  <div class="skin-container-title">VLC Darkness</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_VLC Darkness.PNG" alt="VLC Darkness"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(223,'itunes graphite','Guilherme DLA','2010-02-20','199232','itunes graphite.vlt','284.4KiB',4.6075388026607539,4059,'http://images.videolan.org/vlc/skins2/itunes graphite.PNG','1','0.9.0')">
  <div class="skin-container-title">itunes graphite</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_itunes graphite.PNG" alt="itunes graphite"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(222,'ftouch 1.00','Klaus Adrian','2010-02-08','118686','ftouch100.vlt','270.9KiB',4.3651761517615176,2952,'http://images.videolan.org/vlc/skins2/screen.jpg','1','0.9.0')">
  <div class="skin-container-title">ftouch 1.00</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_screen.jpg" alt="ftouch 1.00"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(221,'LCARSx32_Standard','Sara Miller','2009-12-08','56179','LCARSx32.vlt','68.1KiB',4.5353440150801131,1061,'http://images.videolan.org/vlc/skins2/LCARS.jpg','1','0.9.0')">
  <div class="skin-container-title">LCARSx32_Standard</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_LCARS.jpg" alt="LCARSx32_Standard"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(218,'Bblue','Ptitlu','2009-11-29','195430','Bblue.vlt','166.9KiB',4.5223991114402073,2701,'http://images.videolan.org/vlc/skins2/Bblue by ptitlu.jpg','1','0.9.0')">
  <div class="skin-container-title">Bblue</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Bblue by ptitlu.jpg" alt="Bblue"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(215,'Default_Dark_Mod','mentalrey','2009-10-29','170526','default_mod_mentalrey.vlt','202.9KiB',4.5209080047789725,1674,'http://images.videolan.org/vlc/skins2/screen_vlc_def_mod.jpg','1','0.9.0')">
  <div class="skin-container-title">Default_Dark_Mod</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_screen_vlc_def_mod.jpg" alt="Default_Dark_Mod"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(212,'Crux','Tamas Pataky','2009-10-22','115652','crux.vlt','90.1KiB',4.4175767030681227,1923,'http://images.videolan.org/vlc/skins2/crux.jpg','1','0.9.0')">
  <div class="skin-container-title">Crux</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_crux.jpg" alt="Crux"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(214,'universe','Universematrix','2009-10-22','106514','universe.vlt','304.1KiB',4.4325842696629213,1246,'http://images.videolan.org/vlc/skins2/Universe.PNG','1','0.9.0')">
  <div class="skin-container-title">universe</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Universe.PNG" alt="universe"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(213,'GIGA Fuck Reality!','modercol','2009-10-22','74289','giga08.vlt','160.7KiB',4.3047965998785671,1647,'http://images.videolan.org/vlc/skins2/2009-10-22_153136.png','1','0.9.0')">
  <div class="skin-container-title">GIGA Fuck Reality!</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_2009-10-22_153136.png" alt="GIGA Fuck Reality!"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(211,'The New Look','Computer600','2009-10-18','17678','THE NEW LOOK.vlt','36.2KiB',2.9499341238471673,759,'http://images.videolan.org/vlc/skins2/imp.JPG','1','0.8.5')">
  <div class="skin-container-title">The New Look</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_imp.JPG" alt="The New Look"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(205,'iphone_3g','terireme','2009-09-27','211343','iphone3g.vlt','1.7MiB',4.3800675675675676,3552,'http://images.videolan.org/vlc/skins2/iphone3g_skin4vlc_2.jpg','1','0.9.0')">
  <div class="skin-container-title">iphone_3g</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_iphone3g_skin4vlc_2.jpg" alt="iphone_3g"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(209,'blackpearl','megazord.de','2009-09-23','93437','blackpearl.vlt','345KiB',4.5131467345207803,1179,'http://images.videolan.org/vlc/skins2/blackpeal_preview.jpg','1','0.9.0')">
  <div class="skin-container-title">blackpearl</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_blackpeal_preview.jpg" alt="blackpearl"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(207,'sony_psp_go_blue','terireme (Hellas)','2009-09-10','40334','sony_psp_go_black_blue.vlt','1.4MiB',4.2761437908496732,612,'http://images.videolan.org/vlc/skins2/sony_psp_go_black_blue.jpg','1','0.9.0')">
  <div class="skin-container-title">sony_psp_go_blue</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_sony_psp_go_black_blue.jpg" alt="sony_psp_go_blue"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(181,'sony_psp_go','terireme (Hellas)','2009-09-10','47829','sony_psp_go.vlt','1.4MiB',4.1106094808126411,886,'http://images.videolan.org/vlc/skins2/sony_psp_go115.jpg','1','0.9.0')">
  <div class="skin-container-title">sony_psp_go</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_sony_psp_go115.jpg" alt="sony_psp_go"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(204,'Monster DSi','bob','2009-09-02','10472','MonsteR_DSi.vlt','210.5KiB',3.5000000000000000,164,'http://images.videolan.org/vlc/skins2/MonsteR_DSi.jpg','1','0.8.0')">
  <div class="skin-container-title">Monster DSi</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_MonsteR_DSi.jpg" alt="Monster DSi"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(202,'sandkastenhaut','patrick amelung','2009-09-02','6403','sandkastenhaut.vlt','50.6KiB',3.3244680851063830,188,'http://images.videolan.org/vlc/skins2/sandkastenhaut_vorschau.jpg','1','0.9.0')">
  <div class="skin-container-title">sandkastenhaut</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_sandkastenhaut_vorschau.jpg" alt="sandkastenhaut"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(192,'kastenhaut','patrick amelung','2009-09-02','5471','kastenhaut.vlt','50.6KiB',3.7142857142857143,133,'http://images.videolan.org/vlc/skins2/kastenhaut2_vorschau.jpg','1','0.9.0')">
  <div class="skin-container-title">kastenhaut</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_kastenhaut2_vorschau.jpg" alt="kastenhaut"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-7.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(197,'Classic look','Vinh Van Bui','2009-08-25','34690','classic_look.vlt','175.3KiB',10.3090024330900243,822,'http://images.videolan.org/vlc/skins2/previous.png','1','0.9.0')">
  <div class="skin-container-title">Classic look</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_previous.png" alt="Classic look"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(155,'my_PSP-black','terireme (Hellas)','2009-08-18','117318','my_PSP-black.vlt','966.4KiB',4.4745222929936306,1884,'http://images.videolan.org/vlc/skins2/my_PSP-black5.jpg','1','0.9.0')">
  <div class="skin-container-title">my_PSP-black</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_my_PSP-black5.jpg" alt="my_PSP-black"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(151,'my_PSP-purple','terireme','2009-08-18','34516','my_PSP-purple.vlt','1.8MiB',4.2318435754189944,716,'http://images.videolan.org/vlc/skins2/my_PSP-purple5.jpg','1','0.9.0')">
  <div class="skin-container-title">my_PSP-purple</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_my_PSP-purple5.jpg" alt="my_PSP-purple"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(178,'STRYPER-VLC','Daniel Cruz','2009-08-15','21298','STRYPER-VLC.vlt','562.3KiB',4.2721774193548387,496,'http://images.videolan.org/vlc/skins2/Captura_da_tela.JPG','1','0.9.0')">
  <div class="skin-container-title">STRYPER-VLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Captura_da_tela.JPG" alt="STRYPER-VLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(148,'JVC-VLC','Daniel Cruz','2009-08-03','281950','JVC-VLC3.vlt','927KiB',4.4584239585076125,5977,'http://images.videolan.org/vlc/skins2/Captura_da_tela.png','1','0.9.0')">
  <div class="skin-container-title">JVC-VLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Captura_da_tela.png" alt="JVC-VLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(142,'Orangeade','Lars Ermert','2009-07-18','45844','Orangeade_1.1.vlt','239.5KiB',4.4610849056603774,848,'http://images.videolan.org/vlc/skins2/Orangeade_1.1-screenshot.png','1','0.9.0')">
  <div class="skin-container-title">Orangeade</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Orangeade_1.1-screenshot.png" alt="Orangeade"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(145,'serpentine','black','2009-07-16','53907','serpentine.vlt','61.1KiB',4.2450980392156863,1122,'http://images.videolan.org/vlc/skins2/serpentine.png','1','0.9.0')">
  <div class="skin-container-title">serpentine</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_serpentine.png" alt="serpentine"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(144,'Chelsea VLC','Anders Gill','2009-07-09','25682','chelseaVLC.vlt','174.4KiB',3.9215686274509804,663,'http://images.videolan.org/vlc/skins2/chelseaFCvlc.JPG','1','0.9.0')">
  <div class="skin-container-title">Chelsea VLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_chelseaFCvlc.JPG" alt="Chelsea VLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(143,'subX','Martin Pöhlmann','2009-06-26','182417','subX.vlt','175.2KiB',4.5618442849254555,3622,'http://images.videolan.org/vlc/skins2/subX.png','1','0.9.0')">
  <div class="skin-container-title">subX</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_subX.png" alt="subX"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(141,'SIMPLy','Lars Ermert','2009-06-26','29482','SIMPLy_1.0.vlt','82.1KiB',4.4267015706806283,382,'http://images.videolan.org/vlc/skins2/SIMPLy_1.0.png','1','0.9.0')">
  <div class="skin-container-title">SIMPLy</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_SIMPLy_1.0.png" alt="SIMPLy"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(140,'VLC 0.8.5 - 0.9.9 Default Skin','Daniel Dreibrodt','2009-06-25','58922','default_0.8.5.vlt','125.1KiB',4.3223234624145786,878,'http://images.videolan.org/vlc/skins2/default_27.png','1','0.8.5')">
  <div class="skin-container-title">VLC 0.8.5 - 0.9.9 Default Skin</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_default_27.png" alt="VLC 0.8.5 - 0.9.9 Default Skin"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(139,'Carbon','Daniel Dreibrodt','2009-06-25','23341','Carbon.vlt','111.2KiB',4.0673575129533679,386,'http://images.videolan.org/vlc/skins2/screenshot.jpg','1','0.9.0')">
  <div class="skin-container-title">Carbon</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_screenshot.jpg" alt="Carbon"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(137,'X-VLC','Yannik Pier','2009-06-22','34431','X-Vlc Origins.vlt','242.1KiB',4.4273301737756714,1266,'http://images.videolan.org/vlc/skins2/x-vlc pref copy.png','1','0.9.0')">
  <div class="skin-container-title">X-VLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_x-vlc pref copy.png" alt="X-VLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(138,'Dark Pepper','Rohit Yadav','2009-06-22','29891','Dark Pepper.vlt','238.3KiB',4.2050691244239631,434,'http://images.videolan.org/vlc/skins2/Screenshot-2.png','1','0.8.6')">
  <div class="skin-container-title">Dark Pepper</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Screenshot-2.png" alt="Dark Pepper"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(136,'MM615','MercuryMorning','2009-06-19','11397','MM616.vlt','288KiB',4.0367346938775510,245,'http://images.videolan.org/vlc/skins2/MM615.jpg','1','0.9.0')">
  <div class="skin-container-title">MM615</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_MM615.jpg" alt="MM615"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(133,'raptor','black','2009-05-29','18190','raptor.vlt','107.1KiB',3.9605122732123799,937,'http://images.videolan.org/vlc/skins2/raptor.png','1','0.9.0')">
  <div class="skin-container-title">raptor</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_raptor.png" alt="raptor"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(134,'Inspired','Blackthorn87','2009-05-26','71465','Inspired.vlt','143.4KiB',4.4131082423038729,1007,'http://images.videolan.org/vlc/skins2/Inspired.jpg','1','0.8.6')">
  <div class="skin-container-title">Inspired</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Inspired.jpg" alt="Inspired"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(132,'MM515','MercuryMorning','2009-05-15','30111','MM515.vlt','101.3KiB',4.1920768307322929,833,'http://images.videolan.org/vlc/skins2/MM515Vlc.jpg','1','0.9.0')">
  <div class="skin-container-title">MM515</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_MM515Vlc.jpg" alt="MM515"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(126,'Ps Technobase','Yannik Pier','2009-05-13','23445','Ps VS. Technobase.vlt','233.3KiB',4.1828571428571429,525,'http://images.videolan.org/vlc/skins2/desl.png','1','0.9.0')">
  <div class="skin-container-title">Ps Technobase</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_desl.png" alt="Ps Technobase"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(130,'MiniPlayer DD63','isi','2009-05-04','5194','DD63.vlt','327.6KiB',3.5750000000000000,240,'http://images.videolan.org/vlc/skins2/Entwurf DD63.png','1','0.9.0')">
  <div class="skin-container-title">MiniPlayer DD63</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Entwurf DD63.png" alt="MiniPlayer DD63"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(122,'Colibri 2','Luisma','2009-04-02','56083','colibri2.vlt','185KiB',4.2100917431192661,1090,'http://images.videolan.org/vlc/skins2/colibri2.png','1','0.9.0')">
  <div class="skin-container-title">Colibri 2</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_colibri2.png" alt="Colibri 2"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(114,'LCARS','Danny','2009-03-17','51708','vlc_lcars.vlt','47.5KiB',4.2414223331253899,1603,'http://images.videolan.org/vlc/skins2/lcars_main.png','1','0.9.0')">
  <div class="skin-container-title">LCARS</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_lcars_main.png" alt="LCARS"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(119,'CompactBlack','M.A.J.D.A','2009-02-25','73636','CompactBlack.vlt','237.8KiB',4.4290171606864275,1923,'http://images.videolan.org/vlc/skins2/CompactBlackFull.png','1','0.9.0')">
  <div class="skin-container-title">CompactBlack</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_CompactBlackFull.png" alt="CompactBlack"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(93,'FlatscreenVLC','pablopicasso','2009-02-25','116920','FlatScreen.vlt','1.3MiB',4.1538461538461538,1820,'http://images.videolan.org/vlc/skins2/flatcreen.jpg','1','0.9.0')">
  <div class="skin-container-title">FlatscreenVLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_flatcreen.jpg" alt="FlatscreenVLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(73,'hx milky','Alexander Wecker (crix/r34)','2009-02-20','74114','hx_milky_1.1_0.9.0.vlt','330.8KiB',4.3550340651021953,1321,'http://images.videolan.org/vlc/skins2/screenshot_milky1.jpg','1','0.9.0')">
  <div class="skin-container-title">hx milky</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_screenshot_milky1.jpg" alt="hx milky"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(67,'hx','Alexander Wecker (crix/r34)','2009-02-20','144495','hx_1.1_0.9.0.vlt','352.5KiB',4.4308724832214765,2235,'http://images.videolan.org/vlc/skins2/screenshot_hx.jpg','1','0.9.0')">
  <div class="skin-container-title">hx</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_screenshot_hx.jpg" alt="hx"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(112,'dno_black','Pixeez','2009-02-09','173360','dno_black.vlt','55.5KiB',4.4353991596638655,3808,'http://images.videolan.org/vlc/skins2/DNO - preview.jpg','1','0.9.0')">
  <div class="skin-container-title">dno_black</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_DNO - preview.jpg" alt="dno_black"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(109,'WinampModern','Sliper','2009-01-29','306258','Modern.vlt','123KiB',4.5239812754201519,13031,'http://images.videolan.org/vlc/skins2/WinampModern.jpg','1','0.9.0')">
  <div class="skin-container-title">WinampModern</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_WinampModern.jpg" alt="WinampModern"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(110,'Night','MercuryMorning','2009-01-29','301112','Night.vlt','111.2KiB',4.4840989399293286,6792,'http://images.videolan.org/vlc/skins2/Night.jpg','1','0.9.0')">
  <div class="skin-container-title">Night</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Night.jpg" alt="Night"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(111,'neXum','Sanyacid','2009-01-29','45562','neXum.vlt','274.8KiB',4.5742251223491028,613,'http://images.videolan.org/vlc/skins2/neXum.jpg','1','0.9.0')">
  <div class="skin-container-title">neXum</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_neXum.jpg" alt="neXum"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(107,'earth ox','skin rodent','2009-01-27','67871','earth ox.vlt','621.5KiB',4.1177296993537511,3559,'http://images.videolan.org/vlc/skins2/earth ox.png','1','0.8.6')">
  <div class="skin-container-title">earth ox</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_earth ox.png" alt="earth ox"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(106,'Glow','MercuryMorning','2009-01-24','50061','Glow.vlt','603.1KiB',4.1433724075743913,1109,'http://images.videolan.org/vlc/skins2/Glow.jpg','1','0.9.0')">
  <div class="skin-container-title">Glow</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Glow.jpg" alt="Glow"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(102,'dark melody','skin rodent','2009-01-11','36950','dark melody.vlt','551.7KiB',4.1393775372124493,1478,'http://images.videolan.org/vlc/skins2/dark melody.png','1','0.8.6')">
  <div class="skin-container-title">dark melody</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_dark melody.png" alt="dark melody"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(104,'wmp11 deskband (still in development)','the_Bug','2009-01-06','55900','wmp11deskband.vlt','302KiB',3.9060402684563758,2980,'http://images.videolan.org/vlc/skins2/wmp11deskband.jpg','1','0.9.0')">
  <div class="skin-container-title">wmp11 deskband (still in development)</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_wmp11deskband.jpg" alt="wmp11 deskband (still in development)"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(101,'Marmor','Wolfgang Erler','2008-12-06','21697','marmor.vlt','411.1KiB',3.6816479400749064,534,'http://images.videolan.org/vlc/skins2/vlc_marmor_preview.jpg','1','0.9.0')">
  <div class="skin-container-title">Marmor</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_vlc_marmor_preview.jpg" alt="Marmor"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-7.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(100,'argenta','black','2008-12-04','8080','argenta.vlt','81.7KiB',3.5760869565217391,276,'http://images.videolan.org/vlc/skins2/argenta.png','1','0.9.0')">
  <div class="skin-container-title">argenta</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_argenta.png" alt="argenta"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(99,'indigo-deep','black','2008-11-21','35015','indigo-deep.vlt','88.5KiB',4.0412201154163232,1213,'http://images.videolan.org/vlc/skins2/indigo-deep.png','1','0.9.0')">
  <div class="skin-container-title">indigo-deep</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_indigo-deep.png" alt="indigo-deep"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(98,'bone-deep','black','2008-11-05','60856','bone-deep.vlt','163KiB',4.1373015873015873,2520,'http://images.videolan.org/vlc/skins2/bone-deep.png','1','0.9.0')">
  <div class="skin-container-title">bone-deep</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_bone-deep.png" alt="bone-deep"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(97,'Crossover Leopard','Daniel Dreibrodt','2008-11-04','137459','crossover_leopard.vlt','280.5KiB',4.4953173777315297,2883,'http://images.videolan.org/vlc/skins2/screenshot_cross.png','1','0.9.0')">
  <div class="skin-container-title">Crossover Leopard</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_screenshot_cross.png" alt="Crossover Leopard"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(94,'skin-deep','black','2008-10-30','53381','skin-deep.vlt','43.5KiB',4.1278195488721805,1729,'http://images.videolan.org/vlc/skins2/skin-deep.png','1','0.9.0')">
  <div class="skin-container-title">skin-deep</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_skin-deep.png" alt="skin-deep"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(87,'Win VLC 11','Diefholtz, Jendrik','2008-10-22','842385','Win_VLC_11.vlt','214.5KiB',4.7070685629378051,14133,'http://images.videolan.org/vlc/skins2/Win_VLC_11.JPG','1','0.9.0')">
  <div class="skin-container-title">Win VLC 11</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Win_VLC_11.JPG" alt="Win VLC 11"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-7.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(92,'Console 1.0','Ric D','2008-10-16','47765','Console 1.0.vlt','550KiB',4.2975420439844761,1546,'http://images.videolan.org/vlc/skins2/Console 1.0 Screenshot.png','1','0.9.0')">
  <div class="skin-container-title">Console 1.0</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Console 1.0 Screenshot.png" alt="Console 1.0"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(90,'Mirror, mirror...','black','2008-10-08','15476','mirror.vlt','110KiB',3.1435079726651481,439,'http://images.videolan.org/vlc/skins2/mirror.png','1','0.8.6')">
  <div class="skin-container-title">Mirror, mirror...</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_mirror.png" alt="Mirror, mirror..."/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(82,'electrix','black','2008-10-07','116756','electrix.vlt','180.5KiB',4.2606238224827297,4777,'http://images.videolan.org/vlc/skins2/electrix.png','1','0.8.6')">
  <div class="skin-container-title">electrix</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_electrix.png" alt="electrix"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(83,'void-r1','black','2008-10-07','11474','void-r1.vlt','49.9KiB',3.0325203252032520,246,'http://images.videolan.org/vlc/skins2/void-r1.png','1','0.8.6')">
  <div class="skin-container-title">void-r1</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_void-r1.png" alt="void-r1"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(80,'ShiftieVLC','Homelessbrian','2008-09-18','45742','shiftieVLC.vlt','299KiB',4.2018209408194234,659,'http://images.videolan.org/vlc/skins2/shiftievlc.jpg','1','0.8.6')">
  <div class="skin-container-title">ShiftieVLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_shiftievlc.jpg" alt="ShiftieVLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(79,'relaxed','sara','2008-09-08','46451','relaxed.vlt','1.1MiB',4.0694444444444444,1152,'http://images.videolan.org/vlc/skins2/background copy2.jpg','1','0.8.6')">
  <div class="skin-container-title">relaxed</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_background copy2.jpg" alt="relaxed"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(76,'default_dark wood','Apostrophe','2008-08-31','56398','default_dark wood.vlt','353.3KiB',4.3724137931034483,580,'http://images.videolan.org/vlc/skins2/dark wood.jpg','1','0.9.0')">
  <div class="skin-container-title">default_dark wood</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_dark wood.jpg" alt="default_dark wood"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(75,'default_ebony_0.1','Apostrophe','2008-08-30','52394','default_ebony.vlt','231.1KiB',4.0503282275711160,457,'http://images.videolan.org/vlc/skins2/default_ebony.jpg','1','0.9.0')">
  <div class="skin-container-title">default_ebony_0.1</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_default_ebony.jpg" alt="default_ebony_0.1"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(71,'SimplyWhite','Dänu','2008-06-24','65465','SimplyWhite.vlt','329.1KiB',3.9800531914893617,752,'http://images.videolan.org/vlc/skins2/SimplyWhite.png','1','0.8.6')">
  <div class="skin-container-title">SimplyWhite</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_SimplyWhite.png" alt="SimplyWhite"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(69,'Colibri','Panana','2008-06-09','103419','Colibri_1.0.vlt','460KiB',4.2174439733494852,1651,'http://images.videolan.org/vlc/skins2/Pantallazo.png','1','0.8.6')">
  <div class="skin-container-title">Colibri</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Pantallazo.png" alt="Colibri"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(70,'Simple Glass','Sam McCollum','2008-06-09','31322','Sam s Glass.vlt','453.9KiB',3.3098290598290598,936,'http://images.videolan.org/vlc/skins2/Simple Glass.png','1','0.8.0')">
  <div class="skin-container-title">Simple Glass</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Simple Glass.png" alt="Simple Glass"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-3.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(68,'Dark','Jamin','2008-06-06','44710','Dark.vlt','10.6KiB',4.1111111111111111,639,'http://images.videolan.org/vlc/skins2/Dark.png','1','0.8.6')">
  <div class="skin-container-title">Dark</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Dark.png" alt="Dark"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(64,'vlctch','Stephen M','2008-05-10','72008','vlctch.vlt','128.5KiB',3.9259259259259259,1242,'http://images.videolan.org/vlc/skins2/VLCTCH.png','1','0.8.6')">
  <div class="skin-container-title">vlctch</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_VLCTCH.png" alt="vlctch"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(63,'Eminence','Jamin','2008-05-05','111336','Eminence.vlt','79.2KiB',4.4073728418105460,2143,'http://images.videolan.org/vlc/skins2/Eminence.png','1','0.8.6')">
  <div class="skin-container-title">Eminence</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Eminence.png" alt="Eminence"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(61,'Blended','Slythfox','2008-04-15','43332','Blended-e.vlt','138KiB',4.1022927689594356,567,'http://images.videolan.org/vlc/skins2/blended-small.png','1','0.8.6')">
  <div class="skin-container-title">Blended</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_blended-small.png" alt="Blended"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(60,'Blend','Slythfox','2008-04-07','107230','Blend_0-1-4.vlt','57.2KiB',4.1241886629164864,2311,'http://images.videolan.org/vlc/skins2/Blend_0-1-4.png','1','0.8.6')">
  <div class="skin-container-title">Blend</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Blend_0-1-4.png" alt="Blend"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(58,'Home Cinema','74street','2008-03-12','189907','homecinema.vlt','844.3KiB',4.2331115660184237,3908,'http://images.videolan.org/vlc/skins2/Sans titre.JPG','1','0.8.6')">
  <div class="skin-container-title">Home Cinema</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Sans titre.JPG" alt="Home Cinema"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(57,'Presume','Tobias','2008-03-01','277190','Presume.vlt','102.5KiB',4.3727414677671202,4483,'http://images.videolan.org/vlc/skins2/Presume_screenshot.jpg','1','0.8.6')">
  <div class="skin-container-title">Presume</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Presume_screenshot.jpg" alt="Presume"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(56,'Heaven - The Better Blissta','VLC Fan','2008-02-25','232098','Heaven.vlt','193.4KiB',4.4541262135922330,4120,'http://images.videolan.org/vlc/skins2/Heaven.Preview.png','1','0.8.6')">
  <div class="skin-container-title">Heaven - The Better Blissta</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Heaven.Preview.png" alt="Heaven - The Better Blissta"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(55,'Neon2','Viboss','2008-01-31','44460','dzfn-neon.vlt','353.1KiB',3.9278445883441258,1081,'http://images.videolan.org/vlc/skins2/dzfn-neon.JPG','1','0.9.0')">
  <div class="skin-container-title">Neon2</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_dzfn-neon.JPG" alt="Neon2"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(53,'OL média Player 2','74street','2008-01-29','12296','ol bleu.vlt','109.6KiB',3.3549295774647887,355,'http://images.videolan.org/vlc/skins2/OL média player 2.jpg','1','0.8.6')">
  <div class="skin-container-title">OL média Player 2</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_OL média player 2.jpg" alt="OL média Player 2"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(52,'OL Média Player','74street','2008-01-27','14736','OL.vlt','289.3KiB',2.9486803519061584,682,'http://images.videolan.org/vlc/skins2/OL skin.JPG','1','0.8.6')">
  <div class="skin-container-title">OL Média Player</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_OL skin.JPG" alt="OL Média Player"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(51,'MySimpleSkin','Nikos','2008-01-22','69062','MySimpleSkin.vlt','126.4KiB',4.1977309562398703,617,'http://images.videolan.org/vlc/skins2/MySimpleSkin.PNG','1','0.9.0')">
  <div class="skin-container-title">MySimpleSkin</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_MySimpleSkin.PNG" alt="MySimpleSkin"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(50,'Keagens BlackRed Skin 1.0','Keagen','2008-01-06','36858','BlackRed Official.vlt','608.3KiB',4.2101010101010101,495,'http://images.videolan.org/vlc/skins2/blackredofficial.jpg','1','0.8.6')">
  <div class="skin-container-title">Keagens BlackRed Skin 1.0</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_blackredofficial.jpg" alt="Keagens BlackRed Skin 1.0"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(48,'Ecco - ColdBlue &amp; FreshGreen','Alexander Wecker (crix)','2008-01-04','23814','Ecco_1.0_(ColdBlue_and_FreshGreen)_0.8.6.vlt','675.5KiB',3.8816326530612245,245,'http://images.videolan.org/vlc/skins2/fg_and_cb.jpg','1','0.8.6')">
  <div class="skin-container-title">Ecco - ColdBlue &amp; FreshGreen</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_fg_and_cb.jpg" alt="Ecco - ColdBlue &amp; FreshGreen"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(47,'Ecco - SilverEdition','Alexander Wecker (crix)','2007-12-28','31141','Ecco_1.0_(SilverEdition)_0.8.6.vlt','298.2KiB',3.8840579710144928,276,'http://images.videolan.org/vlc/skins2/silvered.jpg','1','0.8.6')">
  <div class="skin-container-title">Ecco - SilverEdition</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_silvered.jpg" alt="Ecco - SilverEdition"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(46,'Ecco - UbuntuEdition','Alexander Wecker (crix)','2007-12-28','25984','Ecco_1.0_(UbuntuEdition)_0.8.6.vlt','352.2KiB',3.8904109589041096,365,'http://images.videolan.org/vlc/skins2/ubued.jpg','1','0.8.6')">
  <div class="skin-container-title">Ecco - UbuntuEdition</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_ubued.jpg" alt="Ecco - UbuntuEdition"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(45,'Keagens VLC-Skin','Keagen','2007-10-02','41698','Keagens Deluxe Official.vlt','670.2KiB',4.0876897133220911,593,'http://images.videolan.org/vlc/skins2/screenshotdo.jpg','1','0.8.6')">
  <div class="skin-container-title">Keagens VLC-Skin</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_screenshotdo.jpg" alt="Keagens VLC-Skin"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(43,'Whiteout','Phoboslab','2007-09-13','33112','Whiteout.vlt','250.3KiB',4.2173913043478261,345,'http://images.videolan.org/vlc/skins2/Whiteout.png','1','0.9.0')">
  <div class="skin-container-title">Whiteout</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Whiteout.png" alt="Whiteout"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(40,'miniMatrix','Felix Hummel','2007-07-30','40190','miniMatrix.vlt','221.6KiB',3.6040100250626566,798,'http://images.videolan.org/vlc/skins2/miniMatrix.png','1','0.8.6')">
  <div class="skin-container-title">miniMatrix</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_miniMatrix.png" alt="miniMatrix"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-6.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(38,'MPUI','Timo','2007-06-18','62490','mpui.vlt','288.9KiB',3.9876404494382022,890,'http://images.videolan.org/vlc/skins2/mpui.jpg','1','0.9.0')">
  <div class="skin-container-title">MPUI</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_mpui.jpg" alt="MPUI"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(36,'ASNO3','Alexander Wecker (crix)','2007-05-23','45595','ASNO3.vlt','98.1KiB',3.7896825396825397,504,'http://images.videolan.org/vlc/skins2/asno3.jpg','1','0.8.6')">
  <div class="skin-container-title">ASNO3</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_asno3.jpg" alt="ASNO3"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-8.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(33,'Neon','Viboss','2007-05-01','108985','neon.vlt','379.6KiB',4.1102074013826759,2459,'http://images.videolan.org/vlc/skins2/skin.JPG','1','0.9.0')">
  <div class="skin-container-title">Neon</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_skin.JPG" alt="Neon"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(24,'Default Remix','aLtgLasS','2007-02-26','146979','DefaultRemix.vlt','148.3KiB',4.1232456140350877,2280,'http://images.videolan.org/vlc/skins2/defaultremix.png','1','0.8.6')">
  <div class="skin-container-title">Default Remix</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_defaultremix.png" alt="Default Remix"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(23,'WMP11','JoeTheZombie','2007-01-28','954001','WMP11.vlt','280.7KiB',4.4899777282850780,11674,'http://images.videolan.org/vlc/skins2/WMP11.jpg','1','0.8.6')">
  <div class="skin-container-title">WMP11</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_WMP11.jpg" alt="WMP11"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(22,'Airflow','Daniel Dreibrodt','2007-01-23','73016','Airflow.vlt','90.3KiB',3.9509703779366701,979,'http://images.videolan.org/vlc/skins2/airflow.jpg','1','0.8.6')">
  <div class="skin-container-title">Airflow</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_airflow.jpg" alt="Airflow"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(16,'Blissta','Asim Siddiqui','2007-01-22','573897','Blissta.vlt','205.4KiB',4.3720040795512494,7844,'http://images.videolan.org/vlc/skins2/blissta_1.jpg','1','0.8.6')">
  <div class="skin-container-title">Blissta</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_blissta_1.jpg" alt="Blissta"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(20,'GGGrey','Alexander Wecker','2007-01-17','112552','GGGrey.vlt','142.3KiB',4.1830624465355004,1169,'http://images.videolan.org/vlc/skins2/GGGrey.png','1','0.8.6')">
  <div class="skin-container-title">GGGrey</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_GGGrey.png" alt="GGGrey"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(19,'uDeluxe','Alexander Wecker','2006-12-30','59665','uDeluxe.vlt','120.5KiB',3.9560557341907824,933,'http://images.videolan.org/vlc/skins2/uDeluxe.png','1','0.8.6')">
  <div class="skin-container-title">uDeluxe</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_uDeluxe.png" alt="uDeluxe"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(18,'Askin','Anton Boskovski','2006-12-10','634204','ASkin.vlt','267.2KiB',4.5302970297029703,10100,'http://images.videolan.org/vlc/skins2/ASkin.png','1','0.8.6')">
  <div class="skin-container-title">Askin</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_ASkin.png" alt="Askin"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-5.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(17,'Dalin Media Player','Mesut Alptekin','2006-09-09','745134','Dalin_Media_Player.vlt','366.4KiB',4.4250000000000000,14000,'http://images.videolan.org/vlc/skins2/Dalin_Media_Player.jpg','1','0.8.5')">
  <div class="skin-container-title">Dalin Media Player</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_Dalin_Media_Player.jpg" alt="Dalin Media Player"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-4.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(15,'Mac OSX Interface (VLC 0.8.4 and older default skin)','BigBen','2006-05-07','165422','vlcosx.vlt','197KiB',3.9835234474017744,3156,'http://images.videolan.org/vlc/skins2/vlcosx.png','1','0.8.4')">
  <div class="skin-container-title">Mac OSX Interface (VLC 0.8.4 and older default skin)</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_vlcosx.png" alt="Mac OSX Interface (VLC 0.8.4 and older default skin)"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(14,'VLC for kids','Antoine Cellerier (dionoea)','2006-04-16','32566','vlcforkids.vlt','175.7KiB',2.8958333333333333,960,'http://images.videolan.org/vlc/skins2/vlcforkids.png','1','0.8.4')">
  <div class="skin-container-title">VLC for kids</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_vlcforkids.png" alt="VLC for kids"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(13,'iPod','aLtgLasS','2006-03-31','155821','iPod.vlt','289.3KiB',3.9237199582027168,2871,'http://images.videolan.org/vlc/skins2/ipod.jpg','1','0.8.2')">
  <div class="skin-container-title">iPod</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_ipod.jpg" alt="iPod"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(12,'PsVLC','jix','2006-03-30','289664','psvlc.vlt','539.3KiB',4.2456081081081081,5920,'http://images.videolan.org/vlc/skins2/psvlc.jpg','1','0.8.2')">
  <div class="skin-container-title">PsVLC</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_psvlc.jpg" alt="PsVLC"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(11,'MediaPlayer','Asim Siddiqui','2006-03-30','282360','MediaPlayer.vlt','225.2KiB',4.0681451612903226,4960,'http://images.videolan.org/vlc/skins2/MediaPlayer.png','1','0.8.2')">
  <div class="skin-container-title">MediaPlayer</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_MediaPlayer.png" alt="MediaPlayer"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(1,'D-GFX Dark Skin','aLtgLasS','2006-03-30','245074','D-GFX_Dark_Skin.vlt','46.2KiB',4.1831668180442022,3303,'http://images.videolan.org/vlc/skins2/D-GFX_Dark_Skin.png','1','0.8.2')">
  <div class="skin-container-title">D-GFX Dark Skin</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_D-GFX_Dark_Skin.png" alt="D-GFX Dark Skin"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-2.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(10,'Vplayer','scahoo','2006-03-30','196572','vplayer.vlt','38.8KiB',3.9610745614035088,3648,'http://images.videolan.org/vlc/skins2/vplayer.jpg','1','0.8.1')">
  <div class="skin-container-title">Vplayer</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_vplayer.jpg" alt="Vplayer"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(8,'iTunes','mdi, improved and ported to skins2 by Steven Sheehy','2006-03-30','168400','itunes.vlt','243.6KiB',4.0973365617433414,2065,'http://images.videolan.org/vlc/skins2/itunes.jpg','1','0.8.1')">
  <div class="skin-container-title">iTunes</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_itunes.jpg" alt="iTunes"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(5,'Winamp5','kty0ne, improved by JÃ©rÃŽme Guilbaud and ported to skins2 by Olivier TeuliÃšre','2006-03-30','152468','winamp5.vlt','69KiB',4.1028183716075157,1916,'http://images.videolan.org/vlc/skins2/winamp5.jpg','1','0.8.1')">
  <div class="skin-container-title">Winamp5</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_winamp5.jpg" alt="Winamp5"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-1.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(6,'Chaos','Cyril Deguet, based on xmms Chaos skin by Omar Hussain','2006-03-30','109765','chaos.vlt','165.3KiB',3.9860968074150360,1942,'http://images.videolan.org/vlc/skins2/chaos.jpg','1','0.8.1')">
  <div class="skin-container-title">Chaos</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_chaos.jpg" alt="Chaos"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(2,'WB Kids','Petrol Designs, ported by Mohammed AdnÃšne Trojette','2006-03-30','88761','WB.vlt','876.5KiB',3.8741064336775218,2518,'http://images.videolan.org/vlc/skins2/WB.png','1','0.8.1')">
  <div class="skin-container-title">WB Kids</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_WB.png" alt="WB Kids"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(7,'Void','Black','2006-03-30','86362','void.vlt','50.5KiB',4.0276119402985075,1340,'http://images.videolan.org/vlc/skins2/void.jpg','1','0.8.1')">
  <div class="skin-container-title">Void</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_void.jpg" alt="Void"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(3,'DPlayer','Mazlum Alptekin','2006-03-30','80443','DPlayer.vlt','466.1KiB',3.7219279661016949,1888,'http://images.videolan.org/vlc/skins2/DPlayer.png','1','0.8.1')">
  <div class="skin-container-title">DPlayer</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_DPlayer.png" alt="DPlayer"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-7.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>
<div class="skin-container" onclick="showSkinBox(9,'Solar','Piers Cornwell, icons by Jakub Steiner','2006-03-30','48411','solar.vlt','472.1KiB',2.9307637401855817,1401,'http://images.videolan.org/vlc/skins2/solar.png','1','0.8.1')">
  <div class="skin-container-title">Solar</div>
  <img src="http://images.videolan.org/vlc/skins2/tm_solar.png" alt="Solar"/>
  <div class="skin-container-rating"><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-10.png' /><img alt='+' src='http://images.videolan.org/images/skins/cone-9.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' /><img alt='-' src='http://images.videolan.org/images/skins/cone-0.png' />  </div>
</div>


    </div> <!-- BodyInner -->
    <div class="clearfix"></div>
    <div id='footer' class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <a href="../index.html">
                        <img src='../images/logoGrey.png' alt='Association VideoLAN' class='center-xs center-sm' />
                    </a>
                    <div class="social-box">
                        <a class="social" href="https://www.facebook.com/vlc.media.player">
                            <i class="icon-facebook"></i>
                        </a>
                        <a class="social" href="https://www.twitter.com/videolan">
                            <i class="icon-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>VLC media player</div>
                    <ul>
                        <li><a href="download-linux.html">VLC</a></li>
                        <li><a href="download-windows.html">VLC for Windows</a></li>
                        <li><a href="download-macosx.html">VLC for Mac OS X</a></li>
                        <li><a href="download-ubuntu.html">VLC for Ubuntu</a></li>
                        <li><a href="download-android.html">VLC for Android</a></li>
                        <li><a href="download-ios.html">VLC for iOS</a></li>
                        <li><a href="skins.html">Skins</a></li>
                        <li><a href='https://addons.videolan.org/browse/cat/323/ord/latest/'>Extensions</a></li>
                        <li><a href="todo.html">Features</a></li>
                        <li><a href="screenshots.html">Screenshots</a></li>
                        <li><a href="skineditor.html">VLC Skin Editor</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>All Projects</div>
                    <ul>
                        <li><a href="../vlmc/index.html">VideoLan Movie Creator</a></li>
                        <li><a href="../projects/dvblast.html">DVBlast</a></li>
                        <li><a href="../developers/x264.html">x264</a></li>
                        <li><a href="../developers/x262.html">x262</a></li>
                        <li><a href="../developers/x265.html">x265</a></li>
                        <li><a href="../projects/multicat.html">multicat</a></li>
                        <li><a href="../projects/dav1d.html">dav1d</a></li>
                        <li><a href="../projects/vlma.2">VLMa</a></li>
                        <li><a href="libvlc.html">libVLC</a></li>
                        <li><a href="../libdvdcss/index.html">libdvdcss</a></li>
                        <li><a href="../developers/libdvdnav.html">libdvdnav</a></li>
                        <li><a href="../developers/libdvdnav.html">libdvdread</a></li>
                        <li><a href="../developers/libbluray.html">libbluray</a></li>
                        <li><a href="../developers/libdvbpsi.html">libdvbpsi</a></li>
                        <li><a href="../developers/libaacs.html">libaacs</a></li>
                        <li><a href="../developers/libdvbcsa.html">libdvbcsa</a></li>
                        <li><a href="../developers/bitstream.html">biTStream</a></li>
                        <li><a href="../developers/unity.html">vlc-unity</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>Community</div>
                    <ul>
                        <li><a href='https://wiki.videolan.org/'>Wiki</a></li>
                        <li><a href='https://forum.videolan.org/'>Forums</a></li>
                        <li><a href="../support/lists.php">Mailing-Lists</a></li>
                        <li><a href="../support/faq.html">FAQ</a></li>
                        <li><a href="../contribute.html#money">Donate money</a></li>
                        <li><a href="../contribute.html">Donate time</a></li>
                        <li><a href="../goodies.html">Get Goodies</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>VideoLAN</div>
                    <ul>
                        <li><a href="../videolan.2">Project and Organization</a></li>
                        <li><a href="../videolan/team.2">Team</a></li>
                        <li><a href="../legal.html">Legal</a></li>
                        <li><a href="../contact.html">Contact us</a></li>
                        <li><a href="partners.html">Partners</a></li>
                        <li><a href="../videolan/mirrors.html">Mirrors</a></li>
                        <li><a href="../press/index.html">Press center</a></li>
                        <li><a href="../videolan/events.2">Events</a></li>
                        <li><a href="../security.2">Security center</a></li>
                        <li><a href="../contribute.html">Get Involved</a></li>
                        <li><a href="../news.html">News</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div id='translation' class="col-md-12" style="font-size: 9px;">
                                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style='text-align: center; line-height: 14px; font-size: 9px; color: #999;'>
                    <p>
                        <a href='../legal.html'>Legal</a>
                        <span dir="ltr" lang="en">
                            | <a href='../contact.html'>Report Trademark Abuse</a><br />

                            VideoLAN, VLC, VLC media player and x264 are trademarks internationally registered by the <a href="../videolan.2">VideoLAN non-profit organization.</a><br />
                            VideoLAN software is licensed under various open-source licenses: use and distribution are defined by each software license.
                        </span>
                    </p>
                    <p>
                        <span dir="ltr" lang="en">
                            Design by <a href="https://www.madebyargon.com">Made By Argon</a>. Some icons are licensed under the <a href="https://creativecommons.org/licenses/by-sa/3.0/us/">CC BY-SA 3.0+</a>. <br />
                            The VLC cone icon was designed by Richard Øiestad. Icons for VLMC, DVBlast and x264 designed by <a href='http://cuberto.com/'>Roman Khramov</a>.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
