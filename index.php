<!doctype html>
<!--[if lt IE 9]> <html class="ie"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Browserhacks</title>

    <meta charset="utf-8">
    <meta name="author" content="Hugo Giraudel, Tim Pietrusky">
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="1 days">
    <meta name="description" content="An extensive list of browser specific CSS and JavaScript hacks from all over the interwebs.">

    <meta property="og:title" content="Browserhacks">
    <meta property="og:description" content="An extensive list of browser specific CSS and JavaScript hacks from all over the interwebs.">
    <meta property="og:image" content="http://browserhacks.com/img/browserhacks_200.jpg">
    <meta property="og:url" content="http://browserhacks.com">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/browserhacks-test-page.css">
    <link rel="stylesheet" href="css/browserhacks.css">
    <link rel="shortcut icon" href="img/browserhacks.ico" type="image/x-icon">
    
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 7]>
       <link rel="stylesheet" href="css/browserhacks-ie.css">
       <script src="js/browserhacks-icons-IE7.js"></script>
    <![endif]-->
</head>

<?php
    // Load Browserhacks and run it
    include_once('code/Browserhacks.php');
    include_once('code/functions.php');
    include_once('code/db_browsers.php');
    include_once('code/db_hackTypes.php');
    include_once('code/db_hacks.php');
    Browserhacks::run();
?>

<body id="browserhacks" data-max-width="1024" data-theme="browserhacks" data-auto-extend="true">
    
    <!-- Social -->
    <article data-high="2" class="header">
        <section data-cols="3" class="btn-group">
            <div class="header__logo">
                <h1>
                    <a href="http://browserhacks.com" class="header__link">
                        Browser<span>hacks</span>
                    </a>
                </h1>
            </div>
            <div>
                <a href="https://github.com/4ae9b8/browserhacks" target="_blank">
                    <button data-type="2"><span class="browserhacks-github"></span> Add hacks / report bugs</button>
                </a>
            </div>

            <!--<div>
                <a href="http://test.browserhacks.<?php echo Browserhacks::getTLD(); ?>" target="_blank">
                    <button data-type="2"><span class="browserhacks-magic"></span> Almighty test page</button>
                </a>
            </div>-->

            <div>
                <a href="http://twitter.com/Browserhacks" target="_blank">
                    <button data-type="2"><span class="browserhacks-twitter"></span> @browserhacks</button>
                </a>
            </div>
        </section>

        <section data-cols="2">
            <div class="search" data-type="search">
                <label for="search" class='visually-hidden'>Find a hack</label>
                <input type="text" name="search" id="search" placeholder="Search e.g. IE 6" spellcheck="false">
            </div>
            <div class="options">
                <p class='option-wrapper'>
                    <input type="checkbox" name="show-legacy" id="show-legacy" title="Show / hide hacks for old browser">
                    <label for="show-legacy" title="Show / hide hacks for old browser">Legacy Hacks</label>
                </p>
                <p class='option-wrapper'>
                    <input type="checkbox" name="show-test" id="show-test" title="Show / hide tests for your browser">
                    <label for="show-test" title="Show / hide tests for your browser">Enable tests</label>
                </p>
            </div>
        </section>
    </article>

    <article class="ad">
        <section data-cols="1" data-valign="center">
            <div>
                <div id="carbonads-container">
                    <div class="carbonad" style="margin: .5em auto">
                        <div id="azcarbon"></div>
                    </div>
                </div>
            </div>
        </section>
    </article>
    
    <article data-high="1" data-type="description" class="description">
        <section data-cols="3">
            <div>
                <h2 data-type="1">What's this?</h2>
                <p>Browserhacks is an extensive list of <strong>browser specific CSS and JavaScript hacks</strong> from all over the interwebs.
                <!-- Special thanks to <a href="http://paulirish.com/2009/browser-specific-css-hacks/">Paul Irish' comprehensive post</a> and <a href="https://gist.github.com/983116">Nicolas Gallagher's additions</a>.-->
                <span class="desktop-only">Press the first letter of a browser to jump to the according section, like <span class="shortcut">F</span> for Firefox.</span></p>
            </div>
            <div>
                <h2 data-type="2">How to?</h2>
                <ol>
                    <li>Pick the hack you want</li>
                    <li>Copy it into your stylesheet</li>
                    <li>Add the style you want between the braces</li>
                    <li>Enjoy the new styles for the browser you targeted!</li>
                </ol>
            </div>
            <div>
                <h2 data-type="3">Reminder!</h2>
                <p>Please keep in mind using a hack is not always the perfect solution. It can be useful to fix some weird browser specific bug, but in most cases you should fix your CSS/JS or use <a href="http://modernizr.com">feature detection</a>.</p>
            </div>
        </section>
    </article>
        
    <?php
    // HTML for the hacks
    include_once('code/run.php');
    ?>

    <!-- Additional informations -->
    <article data-high="4" id="quotes">
        <section data-cols="2" class="quotes">
        <div>
            <h2>Additional informations</h2>
            <p>Browserhacks is mostly based on the <a href="http://www.paulirish.com/2009/browser-specific-css-hacks/">big list of CSS browser hacks</a> by Paul Irish. Other posts like <a href="http://blog.keithclark.co.uk/moving-ie-specific-css-into-media-blocks/">Moving IE specific CSS to media blocks</a> by Keith Clark, <a href="http://www.thespanner.co.uk/2009/01/29/detecting-browsers-javascript-hacks/">Detecting browsers with JS hacks</a> by Gareth Eyes and <a href="https://gist.github.com/necolas/983116">IE CSS hacks</a> by Nicolas Gallagher greatly helped.</p>
            <p>If you'd like to contribute, please hit us on <a href="https://github.com/4ae9b8/browserhacks">GitHub</a>.</p>
        </div>
        <div>
            <h2>Further reading</h2>
            <p>You may also want to have a look at these related resources:</p>
            <ul>
                <li><a href="http://csswizardry.com/2013/04/shame-css/">shame.css concept</a> by Harry Roberts</li>
                <li><a href="http://webaim.org/blog/user-agent-string-history/">history behind user-agent strings</a> by Aaron Andersen</li>
                <li><a href="http://mathiasbynens.be/demo/css-hacks">hunting a CSS hack for IE 8 only</a> by Mathias Bynens</li>
            </ul>
        </div>
      </section>
    </article>

    <!-- Quotes -->
    <article data-high="4" id="quotes">
      <section data-cols="1" class="quotes">
        <div>
          <blockquote class="quote"></blockquote>
          <ul class="quote-authors"></ul>
        </div>
      </section>
    </article>


    <!-- Social -->
    <article data-high="4">
        <section data-cols="3" class="btn-group">
            <div>
                <a href="https://github.com/4ae9b8/browserhacks" target="_blank">
                    <button data-type="2"><span class="browserhacks-github"></span> Add hacks / report bugs</button>
                </a>
            </div>
            <div>
                <a href="http://test.browserhacks.<?php echo Browserhacks::getTLD(); ?>" target="_blank">
                    <button data-type="2"><span class="browserhacks-magic"></span> Almighty test page</button>
                </a>
            </div>
            <div>
                <a href="http://twitter.com/share?text=An+extensive+list+of+CSS/JS+@Browserhacks+from+all+over+the+interwebs+curated+by+@HugoGiraudel+and+@TimPietrusky&url=http://browserhacks.com" target="_blank">
                    <button data-type="2"><span class="browserhacks-twitter"></span> Spread the word</button>
                </a>
            </div>
        </section>
    </article>

    <!-- Top & Handcrafted -->
    <article data-high="3">
        <section data-cols="1">
            <div>
                <footer>
                    <p>    
                        <a href="#browserhacks" title="top" class="btn-top"><span class="browserhacks-arrow-up"></span></a>
                        &copy; Handcrafted 2013 by <a href="https://twitter.com/HugoGiraudel" target="_blank" class="avatar avatar--hugo">Hugo Giraudel</a> 
                        and <a href="https://twitter.com/TimPietrusky" target="_blank" class="avatar avatar--tim">Tim Pietrusky</a> 
                        with contributions of the <a href="http://4ae9b8.com" target="_blank">#4ae9b8</a> Team.</p>
                    </p>
                </footer>
            </div>
        </section>
    </article>  
    
    <!-- Template: Quote -->
    <script id="template_quote" type="text/template">
       <p class="quote-content"><%= quote %></p> 
       &mdash; <a href="<%= from %>" class="quote-author" target="_blank"><%= author %></a>
    </script>
    
    <!-- Template: Author -->
    <script id="template_author" type="text/template">
        <div class="quote-authors__avatar">
          <div class="avatar-<%= twitter %>"></div>
        </div>

        <a href="<%= from %>" class="quote-authors__name" target="_blank"><%= author %></a>
    </script>

    <script src="js/libs.js"></script>
    <script src="js/main.min.js"></script> 
    <script src="js/browserhacks-test-page.js"></script>
    <script src="js/lib/prism.min.js" data-manual="true"></script>
    <script>    
        // Run Prism once
        Prism.highlightAll(false);
  
        // Split code blocks into lines
        $('pre > code').each(function() {
            var $code = $(this);
            var lines = $code.html().split('\n');
            var dump  = "";
            var id = $code.closest('.browser-wrapper__hack').attr('id').split('-')[1];

            for(var i = 0, len = lines.length; i < len; i++) {
                var hackClass = "hack_" + id + "_" + i;
                dump += "<span class='line " + hackClass + "'>" + lines[i] + "</span>";
            }

            $code.html(dump);

        }).on('click', '.line', function() {
          _select(this);
        });

        // ------------
        // Enable tests
        $el = $('#show-test');
        $el.on('click', function() {
            var state  = !!$(this).attr('checked');
            document.styleSheets[0].disabled = !state;
            console.log(state);
            tests(state); 
        });
        
        // Defaults
        $('#show-test').attr('checked', 'checked');
        document.styleSheets[0].disabled = false;
        tests(true);

        // Sticky searchbar
        // @TODO: rely on position: sticky if supporter
        var $header = $('.search');
        var origOffsetY = $header.offset().top;

        function onScroll(e) {
            window.scrollY >= origOffsetY ? $header.addClass('sticky') : $header.removeClass('sticky');
        }

        $(document).on('scroll', onScroll);
    </script>

    <?php if (Browserhacks::isLive()): ?>
        <script type="text/javascript">
            var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-38522111-1']);_gaq.push(['_setDomainName', 'browserhacks.com']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();
            </script>
    <?php endif; ?>
    </body>
</html>
