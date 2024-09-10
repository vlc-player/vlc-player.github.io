    <!DOCTYPE html>
    <html lang="en" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(98293013, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/98293013" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->        
        <meta name="Author" content="VideoLAN" />
        <meta name="Keywords" content=
        "VideoLAN, VLC, VLC player, VLC media player, download, media player, player download, codec, encoder, media converter, video, video player,
        multimedia, multicast, x262, x264, x265, DVBlast, Windows, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, Android, Streaming,
        DVD, Matroska, Blu-Ray, FLV, Xvid, MPEG, MPEG2, MPEG4, H264, DivX, MKV, m2ts, open source, free software, floss, free" />

        <meta name="Description" content="Mailing-lists" />
        <meta name="apple-itunes-app" content="app-id=650377962"/>
        <title>Mailing-lists - VideoLAN</title>

        
                <link rel="shortcut icon" type="image/x-icon" href="http://images.videolan.org/images/favicon.ico" />

                <link rel="alternate" type="application/rss+xml" title="RSS - VideoLAN News" href="http://images.videolan.org/videolan-news.rss" />
        <link rel="alternate" type="application/rss+xml" title="RSS - Developers Blog" href="http://planet.videolan.org/rss20.xml" />

        <!-- /support/lists -->

        <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="../style/style.css" />

                <link rel="dns-prefetch" href="http://get.videolan.org/" />
        
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
<body class='new-design'><div id='bodyInner' class='red'>    <nav id="nav" class="navbar navbar-default navbar-fixed-top">
 <div class="container">
    <div class="navbar-header">
        <a class="navbar-brand" href="../index.html">
        <img src='../images/logoRed.png' alt='VideoLAN association' />
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
            <li><a href="../vlc/partners.html">Consulting Services &amp; Partners</a></li>
            <li><a href="../videolan/events.2">Events</a></li>
            <li><a href="../legal.html">Legal</a></li>
            <li><a href="../press/index.html">Press center</a></li>
            <li><a href="../contact.html">Contact us</a></li>
          </ul>
        </li>
        <li class="dropdown ">
          <a href="../vlc/download-linux.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VLC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../vlc/download-linux.html">Download</a></li>
            <li><a href="../vlc/todo.html">Features</a></li>
            <li><a href="../vlc/skins.html">Customize</a></li>
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
            <li><a href="../vlc/skineditor.html">VLC Skin Editor</a></li>
            <li><a href="../vlc/download-linux.html">VLC media player</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../vlc/libvlc.html">libVLC</a></li>
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

<div class="container">
    <h1 class="bigtitle"> User mailing-lists </h1>

    <p>The VideoLAN user mailing-lists are dedicated to:</p>
    <ul class="bullets">
        <li>user support for VideoLAN software,</li>
        <li>announces for VideoLAN releases and events.</li>
    </ul>

    <p>They are <b>English-speaking</b> <strong>public</strong> mailing-lists.</p>

    <h2>Important mailing lists</h2>
    <p>The most important mailing-lists are:</p>
    <ul class="bullets">
        <li><a href="https://mailman.videolan.org/listinfo/videolan-announce">Mailing list for announces of new software releases</a></li>
        <li><a href="https://mailman.videolan.org/listinfo/vlc">Mailing list for VLC users</a></li>
        <li><a href="https://mailman.videolan.org/listinfo/vlc-devel">Mailing list for VLC development</a> (for mobile ports: <a href="https://mailman.videolan.org/listinfo/android">Android</a>, <a href="https://mailman.videolan.org/listinfo/ios">iOS</a>)</li>
        <li><a href="https://mailman.videolan.org/listinfo/x264-devel">Mailing list for x264 development</a></li>
        <li><a href="https://mailman.videolan.org/listinfo/vlmc-devel">Mailing list for VLMC development</a></li>
        <li><a href="https://mailman.videolan.org/listinfo/dvblast-devel">Mailing list for DVBlast development</a></li>
        <li><a href="https://mailman.videolan.org/listinfo/libdvdcss-devel">Mailing list for libdvdcss development</a></li>
    </ul>

    <h2>Web interface for subscription, archives, ...</h2>
    <p>You can use our <a href="https://mailman.videolan.org/">Mailing-lists management</a> to:</p>
    <ul class="bullets">
        <li>subscribe,</li>
        <li>unsubscribe,</li>
        <li>see online archives,</li>
        <li>view the list of mailing-lists.</li>
    </ul>

    <h2>Nota Bene</h2>
    <p>
        All the mailing-lists are in "closed-post" mode, which mean
        that messages from people who are not subscribed to the list
        need to go through a moderation process, which can take many
        hours or days, but is a necessary evil to avoid spam.
        The exception is the <code><b>videolan-announce</b></code> list,
        which is fully moderated.
    </p>

    <h2>Nota Bene 2</h2>
    <p>
        All the mailing-lists are in <strong>PUBLICLY archived</strong>
        which mean that your messages <strong>WILL be PUBLIC</strong>
        and mirrored in a way that <strong>we CANNOT remove</strong> the posts.
    </p>
    <p>
        If you want to stay anonymous, use <a href="https://forum.videolan.org">our forum</a> for user questions,
        or <a href="../contact.html">contact us</a> for any other topic.
    </p>

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
                        <li><a href="../vlc/download-linux.html">VLC</a></li>
                        <li><a href="../vlc/download-windows.html">VLC for Windows</a></li>
                        <li><a href="../vlc/download-macosx.html">VLC for Mac OS X</a></li>
                        <li><a href="../vlc/download-ubuntu.html">VLC for Ubuntu</a></li>
                        <li><a href="../vlc/download-android.html">VLC for Android</a></li>
                        <li><a href="../vlc/download-ios.html">VLC for iOS</a></li>
                        <li><a href="../vlc/skins.html">Skins</a></li>
                        <li><a href='https://addons.videolan.org/browse/cat/323/ord/latest/'>Extensions</a></li>
                        <li><a href="../vlc/todo.html">Features</a></li>
                        <li><a href="../vlc/screenshots.html">Screenshots</a></li>
                        <li><a href="../vlc/skineditor.html">VLC Skin Editor</a></li>
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
                        <li><a href="../vlc/libvlc.html">libVLC</a></li>
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
                        <li><a href="lists.php">Mailing-Lists</a></li>
                        <li><a href="faq.html">FAQ</a></li>
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
                        <li><a href="../vlc/partners.html">Partners</a></li>
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
