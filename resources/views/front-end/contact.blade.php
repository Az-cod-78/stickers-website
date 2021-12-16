<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <script>
        var gform;
        gform || (document.addEventListener("gform_main_scripts_loaded", function() {
            gform.scriptsLoaded = !0
        }), window.addEventListener("DOMContentLoaded", function() {
            gform.domLoaded = !0
        }), gform = {
            domLoaded: !1,
            scriptsLoaded: !1,
            initializeOnLoaded: function(o) {
                gform.domLoaded && gform.scriptsLoaded ? o() : !gform.domLoaded && gform.scriptsLoaded ? window.addEventListener("DOMContentLoaded", o) : document.addEventListener("gform_main_scripts_loaded", o)
            },
            hooks: {
                action: {},
                filter: {}
            },
            addAction: function(o, n, r, t) {
                gform.addHook("action", o, n, r, t)
            },
            addFilter: function(o, n, r, t) {
                gform.addHook("filter", o, n, r, t)
            },
            doAction: function(o) {
                gform.doHook("action", o, arguments)
            },
            applyFilters: function(o) {
                return gform.doHook("filter", o, arguments)
            },
            removeAction: function(o, n) {
                gform.removeHook("action", o, n)
            },
            removeFilter: function(o, n, r) {
                gform.removeHook("filter", o, n, r)
            },
            addHook: function(o, n, r, t, i) {
                null == gform.hooks[o][n] && (gform.hooks[o][n] = []);
                var e = gform.hooks[o][n];
                null == i && (i = n + "_" + e.length), gform.hooks[o][n].push({
                    tag: i,
                    callable: r,
                    priority: t = null == t ? 10 : t
                })
            },
            doHook: function(n, o, r) {
                var t;
                if (r = Array.prototype.slice.call(r, 1), null != gform.hooks[n][o] && ((o = gform.hooks[n][o]).sort(function(o, n) {
                        return o.priority - n.priority
                    }), o.forEach(function(o) {
                        "function" != typeof(t = o.callable) && (t = window[t]), "action" == n ? t.apply(null, r) : r[0] = t.apply(null, r)
                    })), "filter" == n) return r[0]
            },
            removeHook: function(o, n, t, i) {
                var r;
                null != gform.hooks[o][n] && (r = (r = gform.hooks[o][n]).filter(function(o, n, r) {
                    return !!(null != i && i != o.tag || null != t && t != o.priority)
                }), gform.hooks[o][n] = r)
            }
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://www.sierrastickers.com/xmlrpc.php">

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <script>
        window._wca = window._wca || [];
    </script>

    <!-- This site is optimized with the Yoast SEO plugin v17.8 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Contact - Sierra Stickers</title>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Source%20Sans%20Pro%3A400%2C300%2C300italic%2C400italic%2C600%2C700%2C900&#038;subset=latin%2Clatin-ext&#038;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source%20Sans%20Pro%3A400%2C300%2C300italic%2C400italic%2C600%2C700%2C900&#038;subset=latin%2Clatin-ext&#038;display=swap" media="print" onload="this.media='all'" /><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source%20Sans%20Pro%3A400%2C300%2C300italic%2C400italic%2C600%2C700%2C900&#038;subset=latin%2Clatin-ext&#038;display=swap" /></noscript>
    <link rel="canonical" href="https://www.sierrastickers.com/contact/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Contact - Sierra Stickers" />
    <meta property="og:description" content="If you have any questions for us, please feel free to give us a call as we love talking to our customers live. Or if you prefer email complete the form below and we can get back to you just as fast. We love being able to actually call a company nowadays when we have[...]"
    />
    <meta property="og:url" content="https://www.sierrastickers.com/contact/" />
    <meta property="og:site_name" content="Sierra Stickers" />
    <meta property="article:modified_time" content="2021-06-28T15:11:33+00:00" />
    <meta property="og:image" content="https://www.sierrastickers.com/wp-content/uploads/2020/06/Sierra-stickers-fb.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />
    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "Organization",
                "@id": "https://www.sierrastickers.com/#organization",
                "name": "Sierra Stickers",
                "url": "https://www.sierrastickers.com/",
                "sameAs": [],
                "logo": {
                    "@type": "ImageObject",
                    "@id": "https://www.sierrastickers.com/#logo",
                    "inLanguage": "en-US",
                    "url": "https://www.sierrastickers.com/wp-content/uploads/2020/03/Group-171.svg",
                    "contentUrl": "https://www.sierrastickers.com/wp-content/uploads/2020/03/Group-171.svg",
                    "width": 348,
                    "height": 312,
                    "caption": "Sierra Stickers"
                },
                "image": {
                    "@id": "https://www.sierrastickers.com/#logo"
                }
            }, {
                "@type": "WebSite",
                "@id": "https://www.sierrastickers.com/#website",
                "url": "https://www.sierrastickers.com/",
                "name": "Sierra Stickers",
                "description": "Create custom stickers - Die Cut, Kiss Cut, Square Stickers, Round Stickers",
                "publisher": {
                    "@id": "https://www.sierrastickers.com/#organization"
                },
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https://www.sierrastickers.com/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }],
                "inLanguage": "en-US"
            }, {
                "@type": "WebPage",
                "@id": "https://www.sierrastickers.com/contact/#webpage",
                "url": "https://www.sierrastickers.com/contact/",
                "name": "Contact - Sierra Stickers",
                "isPartOf": {
                    "@id": "https://www.sierrastickers.com/#website"
                },
                "datePublished": "2020-05-06T09:25:33+00:00",
                "dateModified": "2021-06-28T15:11:33+00:00",
                "breadcrumb": {
                    "@id": "https://www.sierrastickers.com/contact/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://www.sierrastickers.com/contact/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://www.sierrastickers.com/contact/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://www.sierrastickers.com/"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Contact"
                }]
            }]
        }
    </script>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//stats.wp.com' />
    <link rel='dns-prefetch' href='//www.google.com' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//use.fontawesome.com' />
    <link rel='dns-prefetch' href='//c0.wp.com' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
    <link rel="alternate" type="application/rss+xml" title="Sierra Stickers &raquo; Feed" href="https://www.sierrastickers.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Sierra Stickers &raquo; Comments Feed" href="https://www.sierrastickers.com/comments/feed/" />
    <!-- This site uses the Google Analytics by ExactMetrics plugin v7.3.0 - Using Analytics tracking - https://www.exactmetrics.com/ -->
    <script src="//www.googletagmanager.com/gtag/js?id=UA-169423167-1" type="text/javascript" data-cfasync="false" data-wpfc-render="false" async></script>
    <script type="text/javascript" data-cfasync="false" data-wpfc-render="false">
        var em_version = '7.3.0';
        var em_track_user = true;
        var em_no_track_reason = '';

        var disableStrs = [
            'ga-disable-UA-169423167-1',
        ];

        /* Function to detect opted out users */
        function __gtagTrackerIsOptedOut() {
            for (var index = 0; index < disableStrs.length; index++) {
                if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
                    return true;
                }
            }

            return false;
        }

        /* Disable tracking if the opt-out cookie exists. */
        if (__gtagTrackerIsOptedOut()) {
            for (var index = 0; index < disableStrs.length; index++) {
                window[disableStrs[index]] = true;
            }
        }

        /* Opt-out function */
        function __gtagTrackerOptout() {
            for (var index = 0; index < disableStrs.length; index++) {
                document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                window[disableStrs[index]] = true;
            }
        }

        if ('undefined' === typeof gaOptout) {
            function gaOptout() {
                __gtagTrackerOptout();
            }
        }
        window.dataLayer = window.dataLayer || [];

        window.ExactMetricsDualTracker = {
            helpers: {},
            trackers: {},
        };
        if (em_track_user) {
            function __gtagDataLayer() {
                dataLayer.push(arguments);
            }

            function __gtagTracker(type, name, parameters) {
                if (!parameters) {
                    parameters = {};
                }

                if (parameters.send_to) {
                    __gtagDataLayer.apply(null, arguments);
                    return;
                }

                if (type === 'event') {

                    parameters.send_to = exactmetrics_frontend.ua;
                    __gtagDataLayer(type, name, parameters);
                } else {
                    __gtagDataLayer.apply(null, arguments);
                }
            }
            __gtagTracker('js', new Date());
            __gtagTracker('set', {
                'developer_id.dNDMyYj': true,
            });
            __gtagTracker('config', 'UA-169423167-1', {
                "forceSSL": "true",
                "link_attribution": "true"
            });
            __gtagTracker('config', 'AW-771198778');
            window.gtag = __gtagTracker;
            (function() {
                /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                /* ga and __gaTracker compatibility shim. */
                var noopfn = function() {
                    return null;
                };
                var newtracker = function() {
                    return new Tracker();
                };
                var Tracker = function() {
                    return null;
                };
                var p = Tracker.prototype;
                p.get = noopfn;
                p.set = noopfn;
                p.send = function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift('send');
                    __gaTracker.apply(null, args);
                };
                var __gaTracker = function() {
                    var len = arguments.length;
                    if (len === 0) {
                        return;
                    }
                    var f = arguments[len - 1];
                    if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                        if ('send' === arguments[0]) {
                            var hitConverted, hitObject = false,
                                action;
                            if ('event' === arguments[1]) {
                                if ('undefined' !== typeof arguments[3]) {
                                    hitObject = {
                                        'eventAction': arguments[3],
                                        'eventCategory': arguments[2],
                                        'eventLabel': arguments[4],
                                        'value': arguments[5] ? arguments[5] : 1,
                                    }
                                }
                            }
                            if ('pageview' === arguments[1]) {
                                if ('undefined' !== typeof arguments[2]) {
                                    hitObject = {
                                        'eventAction': 'page_view',
                                        'page_path': arguments[2],
                                    }
                                }
                            }
                            if (typeof arguments[2] === 'object') {
                                hitObject = arguments[2];
                            }
                            if (typeof arguments[5] === 'object') {
                                Object.assign(hitObject, arguments[5]);
                            }
                            if ('undefined' !== typeof arguments[1].hitType) {
                                hitObject = arguments[1];
                                if ('pageview' === hitObject.hitType) {
                                    hitObject.eventAction = 'page_view';
                                }
                            }
                            if (hitObject) {
                                action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
                                hitConverted = mapArgs(hitObject);
                                __gtagTracker('event', action, hitConverted);
                            }
                        }
                        return;
                    }

                    function mapArgs(args) {
                        var arg, hit = {};
                        var gaMap = {
                            'eventCategory': 'event_category',
                            'eventAction': 'event_action',
                            'eventLabel': 'event_label',
                            'eventValue': 'event_value',
                            'nonInteraction': 'non_interaction',
                            'timingCategory': 'event_category',
                            'timingVar': 'name',
                            'timingValue': 'value',
                            'timingLabel': 'event_label',
                            'page': 'page_path',
                            'location': 'page_location',
                            'title': 'page_title',
                        };
                        for (arg in args) {
                            if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
                                hit[gaMap[arg]] = args[arg];
                            } else {
                                hit[arg] = args[arg];
                            }
                        }
                        return hit;
                    }

                    try {
                        f.hitCallback();
                    } catch (ex) {}
                };
                __gaTracker.create = newtracker;
                __gaTracker.getByName = newtracker;
                __gaTracker.getAll = function() {
                    return [];
                };
                __gaTracker.remove = noopfn;
                __gaTracker.loaded = true;
                window['__gaTracker'] = __gaTracker;
            })();
        } else {
            console.log("");
            (function() {
                function __gtagTracker() {
                    return null;
                }
                window['__gtagTracker'] = __gtagTracker;
                window['gtag'] = __gtagTracker;
            })();
        }
    </script>
    <!-- / Google Analytics by ExactMetrics -->
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='https://c0.wp.com/c/5.8.2/wp-includes/css/dist/block-library/style.min.css' media='all' />
    <style id='wp-block-library-inline-css'>
        .has-text-align-justify {
            text-align: justify;
        }
    </style>
    <style id='wp-block-library-theme-inline-css'>
        #start-resizable-editor-section {
            display: none
        }

        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code {
            font-family: Menlo, Consolas, monaco, monospace;
            color: #1e1e1e;
            padding: .8em 1em;
            border: 1px solid #ddd;
            border-radius: 4px
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-group.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
            opacity: .4
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }

        #end-resizable-editor-section {
            display: none
        }
    </style>
    <link rel='stylesheet' id='mediaelement-css' href='https://c0.wp.com/c/5.8.2/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css' href='https://c0.wp.com/c/5.8.2/wp-includes/js/mediaelement/wp-mediaelement.min.css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='https://c0.wp.com/p/woocommerce/5.9.0/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css' href='https://c0.wp.com/p/woocommerce/5.9.0/packages/woocommerce-blocks/build/wc-blocks-style.css' media='all' />
    <link rel='stylesheet' id='storefront-gutenberg-blocks-css' href='https://www.sierrastickers.com/wp-content/themes/storefront/assets/css/base/gutenberg-blocks.css?ver=3.9.1' media='all' />
    <style id='storefront-gutenberg-blocks-inline-css'>
        .wp-block-button__link:not(.has-text-color) {
            color: #333333;
        }

        .wp-block-button__link:not(.has-text-color):hover,
        .wp-block-button__link:not(.has-text-color):focus,
        .wp-block-button__link:not(.has-text-color):active {
            color: #333333;
        }

        .wp-block-button__link:not(.has-background) {
            background-color: #eeeeee;
        }

        .wp-block-button__link:not(.has-background):hover,
        .wp-block-button__link:not(.has-background):focus,
        .wp-block-button__link:not(.has-background):active {
            border-color: #d5d5d5;
            background-color: #d5d5d5;
        }

        .wp-block-quote footer,
        .wp-block-quote cite,
        .wp-block-quote__citation {
            color: #1d1d1d;
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer,
        .wp-block-pullquote__citation {
            color: #1d1d1d;
        }

        .wp-block-image figcaption {
            color: #1d1d1d;
        }

        .wp-block-separator.is-style-dots::before {
            color: #1d1d1d;
        }

        .wp-block-file a.wp-block-file__button {
            color: #333333;
            background-color: #eeeeee;
            border-color: #eeeeee;
        }

        .wp-block-file a.wp-block-file__button:hover,
        .wp-block-file a.wp-block-file__button:focus,
        .wp-block-file a.wp-block-file__button:active {
            color: #333333;
            background-color: #d5d5d5;
        }

        .wp-block-code,
        .wp-block-preformatted pre {
            color: #1d1d1d;
        }

        .wp-block-table:not( .has-background):not( .is-style-stripes) tbody tr:nth-child(2n) td {
            background-color: #fdf3ee;
        }

        .wp-block-cover .wp-block-cover__inner-container h1:not(.has-text-color),
        .wp-block-cover .wp-block-cover__inner-container h2:not(.has-text-color),
        .wp-block-cover .wp-block-cover__inner-container h3:not(.has-text-color),
        .wp-block-cover .wp-block-cover__inner-container h4:not(.has-text-color),
        .wp-block-cover .wp-block-cover__inner-container h5:not(.has-text-color),
        .wp-block-cover .wp-block-cover__inner-container h6:not(.has-text-color) {
            color: #000000;
        }

        .wc-block-components-price-slider__range-input-progress,
        .rtl .wc-block-components-price-slider__range-input-progress {
            --range-color: #7b63a9;
        }

        /* Target only IE11 */

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .wc-block-components-price-slider__range-input-progress {
                background: #7b63a9;
            }
        }

        .wc-block-components-button:not(.is-link) {
            background-color: #333333;
            color: #ffffff;
        }

        .wc-block-components-button:not(.is-link):hover,
        .wc-block-components-button:not(.is-link):focus,
        .wc-block-components-button:not(.is-link):active {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .wc-block-components-button:not(.is-link):disabled {
            background-color: #333333;
            color: #ffffff;
        }

        .wc-block-cart__submit-container {
            background-color: #fff5f0;
        }

        .wc-block-cart__submit-container::before {
            color: rgba(220, 210, 205, 0.5);
        }

        .wc-block-components-order-summary-item__quantity {
            background-color: #fff5f0;
            border-color: #1d1d1d;
            box-shadow: 0 0 0 2px #fff5f0;
            color: #1d1d1d;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css' href='https://c0.wp.com/c/5.8.2/wp-includes/css/dashicons.min.css' media='all' />
    <link rel='stylesheet' id='pewc-style-css' href='https://www.sierrastickers.com/wp-content/plugins/product-extras-for-woocommerce/assets/css/style.css?ver=3.9.4' media='all' />
    <link rel='stylesheet' id='aftax-frontc-css' href='https://www.sierrastickers.com/wp-content/plugins/woocommerce-tax-exempt-plugin/assets/css/aftax_front.css?ver=1.0' media='' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wc-memberships-frontend-css' href='https://www.sierrastickers.com/wp-content/plugins/woocommerce-memberships/assets/css/frontend/wc-memberships-frontend.min.css?ver=1.22.7' media='all' />
    <link rel='stylesheet' id='aachen-css' href='https://www.sierrastickers.com/wp-content/themes/storefront-child/library/fonts/Neue_Aachen/Neue_Aachen.css?ver=5.8.2' media='all' />
    <link rel='stylesheet' id='bariol-css' href='https://www.sierrastickers.com/wp-content/themes/storefront-child/library/fonts/Bariol-Complete-Webfont/Bariol.css?ver=5.8.2' media='all' />
    <link rel='stylesheet' id='odometer-style-css' href='https://www.sierrastickers.com/wp-content/themes/storefront-child/js/odometer-master/themes/odometer-theme-minimal.css?ver=5.8.2' media='all' />
    <link rel='stylesheet' id='storefront-style-css' href='https://www.sierrastickers.com/wp-content/themes/storefront/style.css?ver=3.9.1' media='all' />
    <style id='storefront-style-inline-css'>
        .main-navigation ul li a,
        .site-title a,
        ul.menu li a,
        .site-branding h1 a,
        button.menu-toggle,
        button.menu-toggle:hover,
        .handheld-navigation .dropdown-toggle {
            color: #333333;
        }

        button.menu-toggle,
        button.menu-toggle:hover {
            border-color: #333333;
        }

        .main-navigation ul li a:hover,
        .main-navigation ul li:hover>a,
        .site-title a:hover,
        .site-header ul.menu li.current-menu-item>a {
            color: #747474;
        }

        table:not( .has-background) th {
            background-color: #f8eee9;
        }

        table:not( .has-background) tbody td {
            background-color: #fdf3ee;
        }

        table:not( .has-background) tbody tr:nth-child(2n) td,
        fieldset,
        fieldset legend {
            background-color: #fbf1ec;
        }

        .site-header,
        .secondary-navigation ul ul,
        .main-navigation ul.menu>li.menu-item-has-children:after,
        .secondary-navigation ul.menu ul,
        .storefront-handheld-footer-bar,
        .storefront-handheld-footer-bar ul li>a,
        .storefront-handheld-footer-bar ul li.search .site-search,
        button.menu-toggle,
        button.menu-toggle:hover {
            background-color: #fff;
        }

        p.site-description,
        .site-header,
        .storefront-handheld-footer-bar {
            color: #404040;
        }

        button.menu-toggle:after,
        button.menu-toggle:before,
        button.menu-toggle span:before {
            background-color: #333333;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .wc-block-grid__product-title {
            color: #1d1d1d;
        }

        .widget h1 {
            border-bottom-color: #1d1d1d;
        }

        body,
        .secondary-navigation a {
            color: #1d1d1d;
        }

        .widget-area .widget a,
        .hentry .entry-header .posted-on a,
        .hentry .entry-header .post-author a,
        .hentry .entry-header .post-comments a,
        .hentry .entry-header .byline a {
            color: #222222;
        }

        a {
            color: #7b63a9;
        }

        a:focus,
        button:focus,
        .button.alt:focus,
        input:focus,
        textarea:focus,
        input[type="button"]:focus,
        input[type="reset"]:focus,
        input[type="submit"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="search"]:focus {
            outline-color: #7b63a9;
        }

        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .button,
        .widget a.button {
            background-color: #eeeeee;
            border-color: #eeeeee;
            color: #333333;
        }

        button:hover,
        input[type="button"]:hover,
        input[type="reset"]:hover,
        input[type="submit"]:hover,
        .button:hover,
        .widget a.button:hover {
            background-color: #d5d5d5;
            border-color: #d5d5d5;
            color: #333333;
        }

        button.alt,
        input[type="button"].alt,
        input[type="reset"].alt,
        input[type="submit"].alt,
        .button.alt,
        .widget-area .widget a.button.alt {
            background-color: #333333;
            border-color: #333333;
            color: #ffffff;
        }

        button.alt:hover,
        input[type="button"].alt:hover,
        input[type="reset"].alt:hover,
        input[type="submit"].alt:hover,
        .button.alt:hover,
        .widget-area .widget a.button.alt:hover {
            background-color: #1a1a1a;
            border-color: #1a1a1a;
            color: #ffffff;
        }

        .pagination .page-numbers li .page-numbers.current {
            background-color: #e6dcd7;
            color: #131313;
        }

        #comments .comment-list .comment-content .comment-text {
            background-color: #f8eee9;
        }

        .site-footer {
            background-color: #f0f0f0;
            color: #6d6d6d;
        }

        .site-footer a:not(.button):not(.components-button) {
            color: #333333;
        }

        .site-footer .storefront-handheld-footer-bar a:not(.button):not(.components-button) {
            color: #333333;
        }

        .site-footer h1,
        .site-footer h2,
        .site-footer h3,
        .site-footer h4,
        .site-footer h5,
        .site-footer h6,
        .site-footer .widget .widget-title,
        .site-footer .widget .widgettitle {
            color: #333333;
        }

        .page-template-template-homepage.has-post-thumbnail .type-page.has-post-thumbnail .entry-title {
            color: #000000;
        }

        .page-template-template-homepage.has-post-thumbnail .type-page.has-post-thumbnail .entry-content {
            color: #000000;
        }

        @media screen and ( min-width: 768px) {
            .secondary-navigation ul.menu a:hover {
                color: #595959;
            }
            .secondary-navigation ul.menu a {
                color: #404040;
            }
            .main-navigation ul.menu ul.sub-menu,
            .main-navigation ul.nav-menu ul.children {
                background-color: #f0f0f0;
            }
            .site-header {
                border-bottom-color: #f0f0f0;
            }
        }
    </style>
    <link rel='stylesheet' id='storefront-icons-css' href='https://www.sierrastickers.com/wp-content/themes/storefront/assets/css/base/icons.css?ver=3.9.1' media='all' />

    <link rel='stylesheet' id='storefront-jetpack-widgets-css' href='https://www.sierrastickers.com/wp-content/themes/storefront/assets/css/jetpack/widgets.css?ver=3.9.1' media='all' />
    <link rel='stylesheet' id='wpmenucart-css' href='https://www.sierrastickers.com/wp-content/plugins/wp-menu-cart-pro/assets/css/wpmenucart-main.css?ver=3.3.0' media='all' />
    <style id='wpmenucart-inline-css'>
        .et-cart-info {
            display: none !important;
        }

        .site-header-cart {
            display: none !important;
        }
    </style>
    <link rel='stylesheet' id='ppc-styles-css' href='https://www.sierrastickers.com/wp-content/plugins/storefront-pro-premium/includes/page-customizer/includes/../assets/css/style.css?ver=5.8.2' media='all' />
    <style id='ppc-styles-inline-css'>
        /* Storefront Page Customizer */

        #main-header,
        #masthead,
        #header,
        #site-header,
        .site-header,
        .tc-header {}

        .colophon,
        .pootle-page-customizer-active #footer,
        .pootle-page-customizer-active #main-footer,
        .pootle-page-customizer-active #site-footer,
        .pootle-page-customizer-active .site-footer {}

        @media only screen and (max-width:768px) {
            body.pootle-page-customizer-active {
                background:  !important;
            }
        }
    </style>
    <link rel='stylesheet' id='gforms_reset_css-css' href='https://www.sierrastickers.com/wp-content/plugins/gravityforms/legacy/css/formreset.min.css?ver=2.5.15' media='all' />
    <link rel='stylesheet' id='gforms_formsmain_css-css' href='https://www.sierrastickers.com/wp-content/plugins/gravityforms/legacy/css/formsmain.min.css?ver=2.5.15' media='all' />
    <link rel='stylesheet' id='gforms_ready_class_css-css' href='https://www.sierrastickers.com/wp-content/plugins/gravityforms/legacy/css/readyclass.min.css?ver=2.5.15' media='all' />
    <link rel='stylesheet' id='gforms_browsers_css-css' href='https://www.sierrastickers.com/wp-content/plugins/gravityforms/legacy/css/browsers.min.css?ver=2.5.15' media='all' />
    <link rel='stylesheet' id='storefront-woocommerce-style-css' href='https://www.sierrastickers.com/wp-content/themes/storefront/assets/css/woocommerce/woocommerce.css?ver=3.9.1' media='all' />
    <style id='storefront-woocommerce-style-inline-css'>
        @font-face {
            font-family: star;
            src: url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/star.eot);
            src: url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/star.eot?#iefix) format("embedded-opentype"), url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/star.woff) format("woff"), url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/star.ttf) format("truetype"), url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/star.svg#star) format("svg");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: WooCommerce;
            src: url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.eot);
            src: url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.eot?#iefix) format("embedded-opentype"), url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.woff) format("woff"), url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.ttf) format("truetype"), url(https://www.sierrastickers.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.svg#WooCommerce) format("svg");
            font-weight: 400;
            font-style: normal;
        }

        a.cart-contents,
        .site-header-cart .widget_shopping_cart a {
            color: #333333;
        }

        a.cart-contents:hover,
        .site-header-cart .widget_shopping_cart a:hover,
        .site-header-cart:hover>li>a {
            color: #747474;
        }

        table.cart td.product-remove,
        table.cart td.actions {
            border-top-color: #fff5f0;
        }

        .storefront-handheld-footer-bar ul li.cart .count {
            background-color: #333333;
            color: #fff;
            border-color: #fff;
        }

        .woocommerce-tabs ul.tabs li.active a,
        ul.products li.product .price,
        .onsale,
        .wc-block-grid__product-onsale,
        .widget_search form:before,
        .widget_product_search form:before {
            color: #1d1d1d;
        }

        .woocommerce-breadcrumb a,
        a.woocommerce-review-link,
        .product_meta a {
            color: #222222;
        }

        .wc-block-grid__product-onsale,
        .onsale {
            border-color: #1d1d1d;
        }

        .star-rating span:before,
        .quantity .plus,
        .quantity .minus,
        p.stars a:hover:after,
        p.stars a:after,
        .star-rating span:before,
        #payment .payment_methods li input[type=radio]:first-child:checked+label:before {
            color: #7b63a9;
        }

        .widget_price_filter .ui-slider .ui-slider-range,
        .widget_price_filter .ui-slider .ui-slider-handle {
            background-color: #7b63a9;
        }

        .order_details {
            background-color: #f8eee9;
        }

        .order_details>li {
            border-bottom: 1px dotted #e3d9d4;
        }

        .order_details:before,
        .order_details:after {
            background: -webkit-linear-gradient(transparent 0, transparent 0), -webkit-linear-gradient(135deg, #f8eee9 33.33%, transparent 33.33%), -webkit-linear-gradient(45deg, #f8eee9 33.33%, transparent 33.33%)
        }

        #order_review {
            background-color: #fff5f0;
        }

        #payment .payment_methods>li .payment_box,
        #payment .place-order {
            background-color: #faf0eb;
        }

        #payment .payment_methods>li:not(.woocommerce-notice) {
            background-color: #f5ebe6;
        }

        #payment .payment_methods>li:not(.woocommerce-notice):hover {
            background-color: #f0e6e1;
        }

        .woocommerce-pagination .page-numbers li .page-numbers.current {
            background-color: #e6dcd7;
            color: #131313;
        }

        .wc-block-grid__product-onsale,
        .onsale,
        .woocommerce-pagination .page-numbers li .page-numbers:not(.current) {
            color: #1d1d1d;
        }

        p.stars a:before,
        p.stars a:hover~a:before,
        p.stars.selected a.active~a:before {
            color: #1d1d1d;
        }

        p.stars.selected a.active:before,
        p.stars:hover a:before,
        p.stars.selected a:not(.active):before,
        p.stars.selected a.active:before {
            color: #7b63a9;
        }

        .single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger {
            background-color: #eeeeee;
            color: #333333;
        }

        .single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger:hover {
            background-color: #d5d5d5;
            border-color: #d5d5d5;
            color: #333333;
        }

        .button.added_to_cart:focus,
        .button.wc-forward:focus {
            outline-color: #7b63a9;
        }

        .added_to_cart,
        .site-header-cart .widget_shopping_cart a.button,
        .wc-block-grid__products .wc-block-grid__product .wp-block-button__link {
            background-color: #eeeeee;
            border-color: #eeeeee;
            color: #333333;
        }

        .added_to_cart:hover,
        .site-header-cart .widget_shopping_cart a.button:hover,
        .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover {
            background-color: #d5d5d5;
            border-color: #d5d5d5;
            color: #333333;
        }

        .added_to_cart.alt,
        .added_to_cart,
        .widget a.button.checkout {
            background-color: #333333;
            border-color: #333333;
            color: #ffffff;
        }

        .added_to_cart.alt:hover,
        .added_to_cart:hover,
        .widget a.button.checkout:hover {
            background-color: #1a1a1a;
            border-color: #1a1a1a;
            color: #ffffff;
        }

        .button.loading {
            color: #eeeeee;
        }

        .button.loading:hover {
            background-color: #eeeeee;
        }

        .button.loading:after {
            color: #333333;
        }

        @media screen and ( min-width: 768px) {
            .site-header-cart .widget_shopping_cart,
            .site-header .product_list_widget li .quantity {
                color: #404040;
            }
            .site-header-cart .widget_shopping_cart .buttons,
            .site-header-cart .widget_shopping_cart .total {
                background-color: #f5f5f5;
            }
            .site-header-cart .widget_shopping_cart {
                background-color: #f0f0f0;
            }
        }

        .storefront-product-pagination a {
            color: #1d1d1d;
            background-color: #fff5f0;
        }

        .storefront-sticky-add-to-cart {
            color: #1d1d1d;
            background-color: #fff5f0;
        }

        .storefront-sticky-add-to-cart a:not(.button) {
            color: #333333;
        }
    </style>
    <link rel='stylesheet' id='storefront-child-style-css' href='https://www.sierrastickers.com/wp-content/themes/storefront-child/style.css?ver=3.1' media='all' />
    <link rel='stylesheet' id='storefront-woocommerce-memberships-style-css' href='https://www.sierrastickers.com/wp-content/themes/storefront/assets/css/woocommerce/extensions/memberships.css?ver=3.9.1' media='all' />
    <link rel='stylesheet' id='sfb-styles-css' href='https://www.sierrastickers.com/wp-content/plugins/storefront-footer-bar/assets/css/style.css?ver=5.8.2' media='all' />
    <style id='sfb-styles-inline-css'>
        .sfb-footer-bar {
            background-color: #fff5f0;
        }

        .sfb-footer-bar .widget {
            color: #1d1d1d;
        }

        .sfb-footer-bar .widget h1,
        .sfb-footer-bar .widget h2,
        .sfb-footer-bar .widget h3,
        .sfb-footer-bar .widget h4,
        .sfb-footer-bar .widget h5,
        .sfb-footer-bar .widget h6 {
            color: #1d1d1d;
        }

        .sfb-footer-bar .widget a {
            color: #4f4176;
        }

        .shb-header-bar {
            background-color: #2c2d33;
        }

        .shb-header-bar .widget {
            color: #9aa0a7;
        }

        .shb-header-bar .widget h1,
        .shb-header-bar .widget h2,
        .shb-header-bar .widget h3,
        .shb-header-bar .widget h4,
        .shb-header-bar .widget h5,
        .shb-header-bar .widget h6 {
            color: #ffffff;
        }

        .shb-header-bar .widget a {
            color: #ffffff;
        }
    </style>
    <link rel='stylesheet' id='sfp-styles-css' href='https://www.sierrastickers.com/wp-content/plugins/storefront-pro-premium//assets/css/style.css?ver=5.14.0' media='all' />
    <style id='sfp-styles-inline-css'>
        /*-----STOREFRONT PRO-----*/

        /*Primary navigation*/

        #site-navigation .primary-navigation .menu>li>ul {
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transition: height 500ms, -webkit-transform 0.5s;
            transition: height 500ms, transform 0.5s;
        }

        .storefront-pro-active #masthead {
            background-color: rgba(61, 48, 85, 0.95);
        }

        /*Secondary navigation*/

        .storefront-pro-active nav.secondary-navigation {
            background-color: ;
        }

        .storefront-pro-active nav.secondary-navigation a {
            font-family: ;
        }

        .storefront-pro-active nav.secondary-navigation ul,
        .storefront-pro-active nav.secondary-navigation a,
        .storefront-pro-active nav.secondary-navigation a:hover {
            font-size: 15px;
            letter-spacing: 4px;
            color: #fff;
            font-weight: normal;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
        }

        .storefront-pro-active nav.secondary-navigation ul li.current_page_item a,
        .storefront-pro-active nav.secondary-navigation ul li.current_page_item a:hover {
            color: ;
        }

        .storefront-pro-active nav.secondary-navigation ul ul li a,
        .storefront-pro-active nav.secondary-navigation ul ul li a:hover {
            color: ;
        }

        .storefront-pro-active nav.secondary-navigation ul.menu ul {
            background-color: ;
        }

        /*Main Content Styles*/

        .storefront-pro-active h1,
        .storefront-pro-active h2,
        .storefront-pro-active h3,
        .storefront-pro-active h4,
        .storefront-pro-active h5,
        .storefront-pro-active h6 {
            font-family: ;
            letter-spacing: px;
            line-height: ;
            font-weight: normal;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
        }

        .blog.storefront-pro-active .entry-title,
        .archive.storefront-pro-active .entry-title {
            font-size: 88px !important;
        }

        .blog.storefront-pro-active .entry-title,
        .archive.storefront-pro-active .entry-title,
        .blog.storefront-pro-active .entry-title a,
        .archive.storefront-pro-active .entry-title a {
            color: ;
        }

        .single-post.storefront-pro-active .entry-title {
            color: ;
        }

        .single-post #kickass-feat .entry-title {
            font-size: 189.2px !important;
        }

        .single-post.storefront-pro-active .entry-title {
            font-size: 110px !important;
        }

        body.storefront-pro-active,
        .storefront-pro-active .panel-grid-cell {
            font-family: ;
            line-height:
        }

        .storefront-pro-active .panel-grid-cell,
        #primary,
        #secondary {
            font-size: px;
        }

        .eighteen-tags-pro-active .entry-title,
        .storefront-pro-active .hentry .entry-header,
        .storefront-pro-active .widget h3.widget-title,
        .storefront-pro-active .widget h2.widgettitle {
            border-color:
        }

        /* WooCommerce Pages */

        .storefront-pro-active #site-navigation>div {
            width: 100%;
        }

        .storefront-pro-active ul.products li.product {
            text-align: center;
        }

        .woocommerce-message {
            background-color: #0f834d !important;
            color: #ffffff !important;
        }

        .woocommerce-message * {
            color: #ffffff !important;
        }

        .woocommerce-info {
            background-color: #3D9CD2 !important;
            color: #ffffff !important;
        }

        .woocommerce-info * {
            color: #ffffff !important;
        }

        .woocommerce-error {
            background-color: #e2401c !important;
            color: #ffffff !important;
        }

        .woocommerce-error * {
            color: #ffffff !important;
        }

        .storefront-pro-active .site-header-cart .cart-contents {
            color: ;
        }

        .storefront-pro-active .site-header-cart .widget_shopping_cart *:not(.button) {
            color: #000000;
        }

        .storefront-pro-active .site-footer {}

        .storefront-pro-active .site-footer * {
            font-size: 15px;
            font-weight: normal;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            color: ;
        }

        .storefront-pro-active .site-footer .widget-title,
        .storefront-pro-active .site-footer h3 {
            font-size: 22px;
            font-weight: normal;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            color: ;
        }

        .storefront-pro-active .site-footer a {
            color: ;
        }

        .storefront-pro-active .site-footer .footer-widgets li:before {
            color: ;
        }

        .storefront-handheld-footer-bar ul li.search .site-search,
        .storefront-pro-active .site-footer .storefront-handheld-footer-bar ul li>a {
            background-color: ;
            color:  !important;
        }

        .storefront-pro-active .storefront-handheld-footer-bar ul li.cart .count {
            color: ;
            border-color: ;
            background: ;
        }

        .storefront-pro-active .storefront-handheld-footer-bar .my-account {
            display: none;
        }

        .storefront-pro-active .storefront-handheld-footer-bar .search {
            display: none;
        }

        .storefront-pro-active .storefront-handheld-footer-bar .cart {
            display: none;
        }

        @media only screen and (min-width: 768px) {
            #site-navigation.main-navigation .site-header-cart {
                display: none !important;
            }
            #masthead>.col-full {
                display: flex;
                align-items: center
            }
            #site-navigation {
                margin-bottom: 1em;
            }
            #site-navigation>div {
                width: 70%;
            }
            .woocommerce-active .site-header .site-header-cart {
                width: 30%;
            }
            .sfp-nav-search .sfp-nav-search-close .fa {
                background: #eeeeee;
                border: 2px solid #eeeeee;
                color: #333333
            }
            .main-navigation ul.nav-menu>li>a,
            .main-navigation ul.menu>li>a,
            .main-navigation .sfp-nav-search a {
                padding-top: 0em;
                padding-bottom: 0em;
            }
            .storefront-pro-active .main-navigation .site-header-cart li:first-child {
                padding-top: 0em;
            }
            .storefront-pro-active .main-navigation .site-header-cart .cart-contents {
                padding-top: 0;
                padding-bottom: 0em;
            }
            #site-navigation.main-navigation .primary-navigation ul li .logo-in-nav-anchor,
            .site-header .site-logo-link img {
                max-height: 35px;
                width: auto;
            }
            #site-navigation {
                background-color: ;
            }
            #site-navigation.main-navigation ul,
            #site-navigation.main-navigation ul li a,
            .handheld-navigation-container a {
                font-family: ;
                font-size: 15px;
            }
            #site-navigation.main-navigation ul,
            #site-navigation.main-navigation ul li li a {
                font-size: 15px;
            }
            .sfp-nav-styleleft-vertical .site-header .header-toggle,
            #site-navigation.main-navigation .primary-navigation ul li a {
                letter-spacing: 0px;
                color: #ffffff;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-transform: none;
            }
            #site-navigation.main-navigation ul li.current-menu-parent a,
            #site-navigation.main-navigation ul li.current-menu-item a {
                color: ;
            }
            #site-navigation.main-navigation .primary-navigation ul ul li a,
            #site-navigation.main-navigation .site-header-cart .widget_shopping_cart {
                color: ;
            }
            #site-navigation.main-navigation .site-header-cart .widget_shopping_cart,
            #site-navigation.main-navigation ul.menu ul {
                background-color: ;
            }
            #site-navigation.main-navigation .primary-navigation ul li.menu-item [class*="fa-"] {
                color: inherit;
                font-size: 34px;
            }
            #site-navigation.main-navigation .primary-navigation ul li.menu-item [class*="fa-"]+span {
                margin-top: 34px;
            }
            #site-navigation.main-navigation .primary-navigation ul ul li.menu-item [class*="fa-"] {
                color: inherit;
                font-size: 15px;
            }
        }

        @media only screen and (max-width: 768px) {
            /* Mobile styles */
            #site-navigation a.menu-toggle,
            .storefront-pro-active .site-header-cart .cart-contents {
                color: #ffffff;
            }
            .menu-toggle:after,
            .menu-toggle:before,
            .menu-toggle span:before {
                background-color: #ffffff;
            }
            .storefront-pro-active .menu-toggle {
                color: #ffffff;
            }
            #site-navigation .handheld-navigation {
                background-color: #3d3055;
            }
            #site-navigation .handheld-navigation li a,
            button.dropdown-toggle {
                color: #ffffff;
            }
        }
    </style>
    <link rel='stylesheet' id='fontawesome-css' href='//use.fontawesome.com/releases/v5.5.0/css/all.css?ver=5.5.0' media='all' />
    <link rel='stylesheet' id='sr-styles-css' href='https://www.sierrastickers.com/wp-content/plugins/storefront-reviews/assets/css/style.css?ver=5.8.2' media='all' />
    <style id='sr-styles-inline-css'>
        .style-2 .sr-review-content {
            background-color: #fffffa;
        }

        .style-2 .sr-review-content:after {
            border-top-color: #fffffa !important;
        }

        .star-rating span:before,
        .star-rating:before {
            color: #96588a;
        }

        .star-rating:before {
            opacity: 0.25;
        }

        .sr-carousel .owl-prev:before,
        .sr-carousel .owl-next:before {
            color: #7b63a9;
        }

        ul.product-reviews li.product-review.style-3 .inner {
            background-color: rgba( 255, 245, 240, 0.8);
        }
    </style>
    <link rel='stylesheet' id='jetpack_css-css' href='https://c0.wp.com/p/jetpack/10.4/css/jetpack.css' media='all' />
    <script id='exactmetrics-frontend-script-js-extra'>
        var exactmetrics_frontend = {
            "js_events_tracking": "true",
            "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
            "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]",
            "home_url": "https:\/\/www.sierrastickers.com",
            "hash_tracking": "false",
            "ua": "UA-169423167-1",
            "v4_id": ""
        };
    </script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/exactmetrics-premium/assets/js/frontend-gtag.min.js?ver=7.3.0' id='exactmetrics-frontend-script-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
    <script id='aftax-frontj-js-extra'>
        var aftax_phpvars = {
            "admin_url": "https:\/\/www.sierrastickers.com\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/woocommerce-tax-exempt-plugin/assets/js/aftax_front.js?ver=1.0' id='aftax-frontj-js'></script>
    <script defer src='https://stats.wp.com/s-202150.js' id='woocommerce-analytics-js'></script>
    <script src='https://www.sierrastickers.com/wp-content/themes/storefront-child/js/odometer-master/odometer.min.js?ver=5.8.2' id='odometer-script-js'></script>
    <script id='wpmenucart-ajax-assist-js-extra'>
        var wpmenucart_ajax_assist = {
            "shop_plugin": "WooCommerce",
            "always_display": ""
        };
    </script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/wp-menu-cart-pro/assets/js/wpmenucart-ajax-assist.js?ver=3.3.0' id='wpmenucart-ajax-assist-js'></script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/storefront-pro-premium/includes/page-customizer/includes/../assets/js/public.js?ver=5.8.2' id='page-custo-script-js'></script>
    <script defer='defer' src='https://www.sierrastickers.com/wp-content/plugins/gravityforms/js/jquery.json.min.js?ver=2.5.15' id='gform_json-js'></script>
    <script id='gform_gravityforms-js-extra'>
        var gform_i18n = {
            "datepicker": {
                "days": {
                    "monday": "Mon",
                    "tuesday": "Tue",
                    "wednesday": "Wed",
                    "thursday": "Thu",
                    "friday": "Fri",
                    "saturday": "Sat",
                    "sunday": "Sun"
                },
                "months": {
                    "january": "January",
                    "february": "February",
                    "march": "March",
                    "april": "April",
                    "may": "May",
                    "june": "June",
                    "july": "July",
                    "august": "August",
                    "september": "September",
                    "october": "October",
                    "november": "November",
                    "december": "December"
                },
                "firstDay": 0,
                "iconText": "Select date"
            }
        };
        var gf_global = {
            "gf_currency_config": {
                "name": "U.S. Dollar",
                "symbol_left": "$",
                "symbol_right": "",
                "symbol_padding": "",
                "thousand_separator": ",",
                "decimal_separator": ".",
                "decimals": 2,
                "code": "USD"
            },
            "base_url": "https:\/\/www.sierrastickers.com\/wp-content\/plugins\/gravityforms",
            "number_formats": [],
            "spinnerUrl": "https:\/\/www.sierrastickers.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
            "strings": {
                "newRowAdded": "New row added.",
                "rowRemoved": "Row removed",
                "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
            }
        };
        var gf_legacy_multi = {
            "1": "1"
        };
    </script>
    <script id='gform_gravityforms-js-before'>
    </script>
    <script defer='defer' src='https://www.sierrastickers.com/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=2.5.15' id='gform_gravityforms-js'></script>
    <script defer='defer' src='https://www.google.com/recaptcha/api.js?hl=en&#038;ver=5.8.2#038;render=explicit' id='gform_recaptcha-js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js?ver=5.8.2' id='sfp-skrollr-js'></script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/storefront-pro-premium//assets/js/sticky-header.js?ver=5.14.0' id='sfp-sticky-header-js'></script>
    <link rel="https://api.w.org/" href="https://www.sierrastickers.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://www.sierrastickers.com/wp-json/wp/v2/pages/541" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.sierrastickers.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.sierrastickers.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8.2" />
    <meta name="generator" content="WooCommerce 5.9.0" />
    <link rel='shortlink' href='https://www.sierrastickers.com/?p=541' />
    <link rel="alternate" type="application/json+oembed" href="https://www.sierrastickers.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.sierrastickers.com%2Fcontact%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://www.sierrastickers.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.sierrastickers.com%2Fcontact%2F&#038;format=xml" />
    <style type="text/css">
        .pewc-group-content-wrapper {
            background-color: 0 !important;
        }

        ul.pewc-product-extra-groups {
            margin-left: px;
            margin-bottom: px;
            padding: px;
            background-color: ;
        }

        .pewc-product-extra-groups>li {
            margin-left: px;
            margin-bottom: px;
            padding-top: px;
            padding-bottom: px;
            padding-left: px;
            padding-right: px;
            background-color: ;
            color: 0;
        }

        textarea.pewc-form-field {
            height: em;
        }

        .pewc-radio-image-wrapper label input:checked+img,
        .pewc-checkbox-image-wrapper label input:checked+img {
            border-color: 0
        }
    </style>
    <style type='text/css'>
        img#wpstats {
            display: none
        }
    </style>
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style id="custom-background-css">
        body.custom-background {
            background-color: #fff5f0;
        }
    </style>
    <link rel="icon" href="https://www.sierrastickers.com/wp-content/uploads/2020/03/Group-171.svg" sizes="32x32" />
    <link rel="icon" href="https://www.sierrastickers.com/wp-content/uploads/2020/03/Group-171.svg" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.sierrastickers.com/wp-content/uploads/2020/03/Group-171.svg" />
    <meta name="msapplication-TileImage" content="https://www.sierrastickers.com/wp-content/uploads/2020/03/Group-171.svg" />
    <noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript></head>

<body class="page-template-default page page-id-541 custom-background wp-custom-logo wp-embed-responsive theme-storefront woocommerce-no-js storefront-full-width-content storefront-align-wide right-sidebar woocommerce-active layout- storefront-pro-active sfp-nav-styleright nav-items-right sfp-shop-layout pootle-page-customizer-active">



    <div id="page" class="hfeed site">
        <nav class="secondary-navigation " role="navigation" aria-label="Secondary Navigation">
            <div class="col-full">
                <div style='float:left;' class='social-info'></div>
            </div>
        </nav>
        <!-- #site-navigation -->

        <header id="masthead" class="site-header" role="banner" style="">

            <div class="col-full"> <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
                <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
                <a href="https://www.sierrastickers.com/" class="site-logo-desktop site-logo-link" rel="home">
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Sierra Stickers" data-lazy-src="https://www.sierrastickers.com/wp-content/uploads/2020/10/header-logo-1.svg"/><noscript><img src="https://www.sierrastickers.com/wp-content/uploads/2020/10/header-logo-1.svg" alt="Sierra Stickers"/></noscript>
			</a>
                <a href="https://www.sierrastickers.com/" class="site-logo-mobile site-logo-link" rel="home">
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Sierra Stickers" data-lazy-src="https://www.sierrastickers.com/wp-content/uploads/2020/10/header-logo-1.svg"/><noscript><img src="https://www.sierrastickers.com/wp-content/uploads/2020/10/header-logo-1.svg" alt="Sierra Stickers"/></noscript>

			</a>
                <a class="menu-toggle" aria-controls="primary-navigation" aria-expanded="false">
			<span></span>
		</a>
                <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                    <div class="sfp-nav-search" style="display: none;">

                        <form role='search' class='search-form' action='https://www.sierrastickers.com/'>
                            <label class='screen-reader-text' for='s'>Search for:</label>
                            <input type='search' class='search-field' placeholder='Search&hellip;' value='' name='s' title='Search for:' />
                            <input type='submit' value='Search' />
                            <input type='hidden' name='post_type[]' value='post' /><input type='hidden' name='post_type[]' value='page' />
                        </form>
                        <a class='sfp-nav-search-close'><i class='fas fa-times'></i></a>
                    </div>
                    <!-- .sfp-nav-search -->
                    <div class="primary-navigation">
                        <ul id="menu-primary" class="menu">
                            <li id="menu-item-540" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-540"><a href="https://www.sierrastickers.com/create/">Create</a></li>
                            <li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107"><a href="https://www.sierrastickers.com/store/">Store</a></li>
                            <li id="menu-item-371" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-371"><a href="https://www.sierrastickers.com/about/">About</a></li>
                            <li id="menu-item-544" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-541 current_page_item menu-item-544"><a href="https://www.sierrastickers.com/contact/" aria-current="page">Contact</a></li>
                            <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="https://www.sierrastickers.com/my-account/">Login/Register</a></li>
                            <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="https://www.sierrastickers.com/cart/">Cart</a></li>
                            <li class="menu-item wpmenucart wpmenucartli wpmenucart-display-standard menu-item menu-item-type-post_type menu-item-object-page empty-wpmenucart empty" style="">


                                <a class="wpmenucart-contents empty-wpmenucart-visible" href="https://www.sierrastickers.com/store/" title="Start shopping">
		<span class="amount">&#36;0.00</span>
	</a>



                            </li>
                        </ul>
                    </div>
                    <div class="handheld-navigation-container">
                        <div class="handheld-navigation">
                            <ul id="menu-mobile" class="menu">
                                <li id="menu-item-720" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-720"><a href="https://www.sierrastickers.com/create/">Create</a></li>
                                <li id="menu-item-721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721"><a href="https://www.sierrastickers.com/store/">Store</a></li>
                                <li id="menu-item-722" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722"><a href="https://www.sierrastickers.com/about/">About</a></li>
                                <li id="menu-item-723" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-541 current_page_item menu-item-723"><a href="https://www.sierrastickers.com/contact/" aria-current="page">Contact</a></li>
                                <li id="menu-item-724" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-724"><a href="https://www.sierrastickers.com/my-account/">Login/Register</a></li>
                                <li id="menu-item-725" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-725"><a href="https://www.sierrastickers.com/cart/">Cart</a></li>
                                <li class="menu-item wpmenucart wpmenucartli wpmenucart-display-standard menu-item menu-item-type-post_type menu-item-object-page empty-wpmenucart empty" style="">


                                    <a class="wpmenucart-contents empty-wpmenucart-visible" href="https://www.sierrastickers.com/store/" title="Start shopping">
		<span class="amount">&#36;0.00</span>
	</a>



                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul id="site-header-cart" class="site-header-cart menu">
                        <li class="">
                            <a class="cart-contents" href="https://www.sierrastickers.com/cart/" title="View your shopping cart">
								<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span> <span class="count">0 items</span>
			</a>
                        </li>
                        <li>
                            <div class="widget woocommerce widget_shopping_cart">
                                <div class="widget_shopping_cart_content"></div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- #site-navigation -->
            </div>
            <div class="storefront-primary-navigation">
                <div class="col-full"></div>
            </div>
        </header>
        <!-- #masthead -->


        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">

                <div class="woocommerce"></div>
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">


                        <article id="post-541" class="post-541 page type-page status-publish hentry">
                            <div class="entry-content">

                                <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>



                                <div class="wp-block-columns">
                                    <div class="wp-block-column">
                                        <p>If you have any questions for us, please feel free to give us a call as we love talking to our customers live. Or if you prefer email complete the form below and we can get back to you just as fast. </p>



                                        <p>We love being able to actually call a company nowadays when we have questions, so we think offering direct communication is a must when every one else is only email 🙂</p>
                                    </div>



                                    <div class="wp-block-column">
                                        <p><strong>Sierra Stickers</strong><br>3156 Fitzgerald Rd STE B<br>Rancho Cordova, CA 95742<br>(<a rel="noreferrer noopener" href="https://www.google.com/maps/place/11274+Sunrise+Gold+Cir+Suite+R,+Rancho+Cordova,+CA+95742"
                                                target="_blank">map</a>)</p>



                                        <p><strong>Phone:</strong><br>New Number Coming Soon</p>
                                    </div>
                                </div>



                                <h1>Contact Us</h1>



                                <div class='gf_browser_chrome gform_wrapper gform_legacy_markup_wrapper' id='gform_wrapper_1'>
                                    <div class='gform_heading'>
                                        <span class='gform_description'></span>
                                    </div>
                                    <form method='post' enctype='multipart/form-data' id='gform_1' action='/contact/'>
                                        <div class='gform_body gform-body'>
                                            <ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'>
                                                <li id="field_1_1" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class='gfield_label gfield_label_before_complex'>Name</label>
                                                    <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name'
                                                        id='input_1_1'>

                                                        <span id='input_1_1_3_container' class='name_first'>
                                                    <input type='text' name='input_1.3' id='input_1_1_3' value=''   aria-required='false'     />
                                                    <label for='input_1_1_3' >First</label>
                                                </span>

                                                        <span id='input_1_1_6_container' class='name_last'>
                                                    <input type='text' name='input_1.6' id='input_1_1_6' value=''   aria-required='false'     />
                                                    <label for='input_1_1_6' >Last</label>
                                                </span>

                                                    </div>
                                                </li>
                                                <li id="field_1_2" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class='gfield_label' for='input_1_2'>Email</label>
                                                    <div class='ginput_container ginput_container_email'>
                                                        <input name='input_2' id='input_1_2' type='text' value='' class='medium' aria-invalid="false" />
                                                    </div>
                                                </li>
                                                <li id="field_1_3" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class='gfield_label' for='input_1_3'>Phone</label>
                                                    <div class='ginput_container ginput_container_phone'><input name='input_3' id='input_1_3' type='text' value='' class='medium' aria-invalid="false" /></div>
                                                </li>
                                                <li id="field_1_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class='gfield_label' for='input_1_4'>Message</label>
                                                    <div class='ginput_container ginput_container_textarea'><textarea name='input_4' id='input_1_4' class='textarea medium' aria-invalid="false" rows='10' cols='50'></textarea></div>
                                                </li>
                                                <li id="field_1_5" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class='gfield_label' for='input_1_5'>CAPTCHA</label>
                                                    <div id='input_1_5' class='ginput_container ginput_recaptcha' data-sitekey='6LdZ_eUUAAAAAI8c7hz7aoD_YcaetujHm-xYcHXK' data-theme='light' data-tabindex='0'
                                                        data-badge=''></div>
                                                </li>
                                                <li id="field_1_6" class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible"><label class='gfield_label' for='input_1_6'>Email</label>
                                                    <div class='ginput_container'><input name='input_6' id='input_1_6' type='text' value='' /></div>
                                                    <div class='gfield_description' id='gfield_description_1_6'>This field is for validation purposes and should be left unchanged.</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_1' class='gform_button button' value='Submit' onclick='if(window["gf_submitting_1"]){return false;}  window["gf_submitting_1"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_1"]){return false;} window["gf_submitting_1"]=true;  jQuery("#gform_1").trigger("submit",[true]); }'
                                            />
                                            <input type='hidden' class='gform_hidden' name='is_submit_1' value='1' />
                                            <input type='hidden' class='gform_hidden' name='gform_submit' value='1' />

                                            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                                            <input type='hidden' class='gform_hidden' name='state_1' value='WyJbXSIsIjU2NmJjNmVkZDM1MDVlYTZmZmQ2NzIzNTIzNWEwYzI3Il0=' />
                                            <input type='hidden' class='gform_hidden' name='gform_target_page_number_1' id='gform_target_page_number_1' value='0' />
                                            <input type='hidden' class='gform_hidden' name='gform_source_page_number_1' id='gform_source_page_number_1' value='1' />
                                            <input type='hidden' name='gform_field_values' value='' />

                                        </div>
                                        <p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js" name="ak_js" value="61" />
                                            <script>
                                                document.getElementById("ak_js").setAttribute("value", (new Date()).getTime());
                                            </script>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-## -->

                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->


            </div>
            <!-- .col-full -->
        </div>
        <!-- #content -->

        <div class="sfb-footer-bar">
            <div class="col-full">
                <section id="custom_html-2" class="widget_text widget-odd widget-first widget-1 footer-reviews col-full widget widget_custom_html">
                    <h2 class="widget-title">Nothing But Love From Our Customers</h2>
                    <div class="textwidget custom-html-widget">
                        <div class="ovals">
                            <div class="purple"></div>
                            <div class="green"></div>
                        </div>
                        <div class="curated-reviews-container">
                            <div class="curated-review">
                                <div class="title-star-container">
                                    <h3 class="curated-review-title">Kathy</h3>
                                    <div class="curated-star-rating"><span class="stars rating-5"></span></div>
                                </div>
                                <p>Perfect! and Quick! Thanks a bunch!</p>
                            </div>
                            <div class="curated-review">
                                <div class="title-star-container">
                                    <h3 class="curated-review-title">Cindy</h3>
                                    <div class="curated-star-rating"><span class="stars rating-5"></span></div>
                                </div>
                                <p>Great purchase. Order completed the same day and mailed out the next morning. Stickers are perfect.</p>
                            </div>
                            <div class="curated-review">
                                <div class="title-star-container">
                                    <h3 class="curated-review-title">Beth Anne</h3>
                                    <div class="curated-star-rating"><span class="stars rating-5"></span></div>
                                </div>
                                <p>Excellent quality, great communication and FAST! Thank you!!!</p>
                            </div>
                            <div class="curated-review">
                                <div class="title-star-container">
                                    <h3 class="curated-review-title">Daphne</h3>
                                    <div class="curated-star-rating"><span class="stars rating-5"></span></div>
                                </div>
                                <p>My stickers turned out perfect! Thank you!</p>
                            </div>
                            <div class="curated-review">
                                <div class="title-star-container">
                                    <h3 class="curated-review-title">Shea</h3>
                                    <div class="curated-star-rating"><span class="stars rating-5"></span></div>
                                </div>
                                <p>They were super quick and gave me exactly what I asked for!!</p>
                            </div>
                            <div class="curated-review">
                                <div class="title-star-container">
                                    <h3 class="curated-review-title">Sue</h3>
                                    <div class="curated-star-rating"><span class="stars rating-5"></span></div>
                                </div>
                                <p>Great quality & service! Ordering more stickers now! Thanks for doing beautiful work.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="custom_html-3" class="widget_text widget-even widget-last widget-2 contact-us widget widget_custom_html">
                    <h2 class="widget-title">Contact Us</h2>
                    <div class="textwidget custom-html-widget">
                        <div class="wp-block-button aligncenter button-circle"><a href="/contact/" class="wp-block-button__link"><span class="button-text">Contact Us</span></a></div>
                    </div>
                </section>
            </div>
        </div>
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="col-full">

                <div class="site-info">
                    <div class="site-logo"><a href="https://www.sierrastickers.com"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Sierra Stickers Home" data-lazy-src="https://www.sierrastickers.com/wp-content/uploads/2020/03/Group-171.svg"><noscript><img src="https://www.sierrastickers.com/wp-content/uploads/2020/03/Group-171.svg" alt="Sierra Stickers Home"></noscript></a></div>
                    <div class="site-copyright">Sierra Stickers copyright © 2021</div>
                    <div class="privacy-policy"><a href="/contact">Contact Us</a> | <a href="/privacy-policy">Privacy Policy</a></div>
                </div>
                <!-- .site-info -->
                <div class="storefront-handheld-footer-bar">
                    <ul class="columns-3">
                        <li class="my-account">
                            <a href="https://www.sierrastickers.com/my-account/">My Account</a> </li>
                        <li class="search">
                            <a href="">Search</a>
                            <div class="site-search">
                                <div class="widget woocommerce widget_product_search">
                                    <form role="search" method="get" class="woocommerce-product-search" action="https://www.sierrastickers.com/">
                                        <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                        <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                                        <button type="submit" value="Search">Search</button>
                                        <input type="hidden" name="post_type" value="product" />
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="cart">
                            <a class="footer-cart-contents" href="https://www.sierrastickers.com/cart/">Cart				<span class="count">0</span>
			</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- .col-full -->
        </footer>
        <!-- #colophon -->


    </div>
    <!-- #page -->

    <script type="text/javascript">
        (function(e, t, o, n, p, r, i) {
            e.visitorGlobalObjectAlias = n;
            e[e.visitorGlobalObjectAlias] = e[e.visitorGlobalObjectAlias] || function() {
                (e[e.visitorGlobalObjectAlias].q = e[e.visitorGlobalObjectAlias].q || []).push(arguments)
            };
            e[e.visitorGlobalObjectAlias].l = (new Date).getTime();
            r = t.createElement("script");
            r.src = o;
            r.async = true;
            i = t.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(r, i)
        })(window, document, "https://diffuser-cdn.app-us1.com/diffuser/diffuser.js", "vgo");
        vgo('setAccount', '91211654');
        vgo('setTrackByDefault', true);
        vgo('process');
    </script>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script type="text/javascript">
        /* ExactMetrics Scroll Tracking */
        if (typeof(jQuery) !== 'undefined') {
            jQuery(document).ready(function() {
                function exactmetrics_scroll_tracking_load() {
                    if ((typeof(__gaTracker) !== 'undefined' && __gaTracker && __gaTracker.hasOwnProperty("loaded") && __gaTracker.loaded == true) || (typeof(__gtagTracker) !== 'undefined' && __gtagTracker)) {
                        (function(factory) {
                            factory(jQuery);
                        }(function($) {

                            /* Scroll Depth */
                            "use strict";
                            var defaults = {
                                percentage: true
                            };

                            var $window = $(window),
                                cache = [],
                                scrollEventBound = false,
                                lastPixelDepth = 0;

                            /*
                             * Plugin
                             */

                            $.scrollDepth = function(options) {

                                var startTime = +new Date();

                                options = $.extend({}, defaults, options);

                                /*
                                 * Functions
                                 */

                                function sendEvent(action, label, scrollDistance, timing) {
                                    if ('undefined' === typeof ExactMetricsObject || 'undefined' === typeof ExactMetricsObject.sendEvent) {
                                        return;
                                    }
                                    var type = 'event';
                                    var eventName = action;
                                    var fieldsArray = {
                                        event_category: 'Scroll Depth',
                                        event_label: label,
                                        value: 1,
                                        non_interaction: true,
                                        send_to: 'UA-169423167-1'
                                    };

                                    ExactMetricsObject.sendEvent(type, eventName, fieldsArray);

                                    if (arguments.length > 3) {
                                        var type = 'event';
                                        var eventName = 'timing_complete';
                                        fieldsArray = {
                                            event_category: 'Scroll Depth',
                                            name: action,
                                            event_label: label,
                                            value: timing,
                                            non_interaction: 1,
                                            send_to: 'UA-169423167-1'
                                        };

                                        ExactMetricsObject.sendEvent(type, eventName, fieldsArray);
                                    }
                                }

                                function calculateMarks(docHeight) {
                                    return {
                                        '25%': parseInt(docHeight * 0.25, 10),
                                        '50%': parseInt(docHeight * 0.50, 10),
                                        '75%': parseInt(docHeight * 0.75, 10),
                                        /* Cushion to trigger 100% event in iOS */
                                        '100%': docHeight - 5
                                    };
                                }

                                function checkMarks(marks, scrollDistance, timing) {
                                    /* Check each active mark */
                                    $.each(marks, function(key, val) {
                                        if ($.inArray(key, cache) === -1 && scrollDistance >= val) {
                                            sendEvent('Percentage', key, scrollDistance, timing);
                                            cache.push(key);
                                        }
                                    });
                                }

                                function rounded(scrollDistance) {
                                    /* Returns String */
                                    return (Math.floor(scrollDistance / 250) * 250).toString();
                                }

                                function init() {
                                    bindScrollDepth();
                                }

                                /*
                                 * Public Methods
                                 */

                                /* Reset Scroll Depth with the originally initialized options */
                                $.scrollDepth.reset = function() {
                                    cache = [];
                                    lastPixelDepth = 0;
                                    $window.off('scroll.scrollDepth');
                                    bindScrollDepth();
                                };

                                /* Add DOM elements to be tracked */
                                $.scrollDepth.addElements = function(elems) {

                                    if (typeof elems == "undefined" || !$.isArray(elems)) {
                                        return;
                                    }

                                    $.merge(options.elements, elems);

                                    /* If scroll event has been unbound from window, rebind */
                                    if (!scrollEventBound) {
                                        bindScrollDepth();
                                    }

                                };

                                /* Remove DOM elements currently tracked */
                                $.scrollDepth.removeElements = function(elems) {

                                    if (typeof elems == "undefined" || !$.isArray(elems)) {
                                        return;
                                    }

                                    $.each(elems, function(index, elem) {

                                        var inElementsArray = $.inArray(elem, options.elements);
                                        var inCacheArray = $.inArray(elem, cache);

                                        if (inElementsArray != -1) {
                                            options.elements.splice(inElementsArray, 1);
                                        }

                                        if (inCacheArray != -1) {
                                            cache.splice(inCacheArray, 1);
                                        }

                                    });

                                };

                                /*
                                 * Throttle function borrowed from:
                                 * Underscore.js 1.5.2
                                 * http://underscorejs.org
                                 * (c) 2009-2013 Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
                                 * Underscore may be freely distributed under the MIT license.
                                 */

                                function throttle(func, wait) {
                                    var context, args, result;
                                    var timeout = null;
                                    var previous = 0;
                                    var later = function() {
                                        previous = new Date;
                                        timeout = null;
                                        result = func.apply(context, args);
                                    };
                                    return function() {
                                        var now = new Date;
                                        if (!previous) previous = now;
                                        var remaining = wait - (now - previous);
                                        context = this;
                                        args = arguments;
                                        if (remaining <= 0) {
                                            clearTimeout(timeout);
                                            timeout = null;
                                            previous = now;
                                            result = func.apply(context, args);
                                        } else if (!timeout) {
                                            timeout = setTimeout(later, remaining);
                                        }
                                        return result;
                                    };
                                }

                                /*
                                 * Scroll Event
                                 */

                                function bindScrollDepth() {

                                    scrollEventBound = true;

                                    $window.on('scroll.scrollDepth', throttle(function() {
                                        /*
                                         * We calculate document and window height on each scroll event to
                                         * account for dynamic DOM changes.
                                         */

                                        var docHeight = $(document).height(),
                                            winHeight = window.innerHeight ? window.innerHeight : $window.height(),
                                            scrollDistance = $window.scrollTop() + winHeight,

                                            /* Recalculate percentage marks */
                                            marks = calculateMarks(docHeight),

                                            /* Timing */
                                            timing = +new Date - startTime;

                                        checkMarks(marks, scrollDistance, timing);
                                    }, 500));

                                }

                                init();
                            };

                            /* UMD export */
                            return $.scrollDepth;

                        }));

                        jQuery.scrollDepth();
                    } else {
                        setTimeout(exactmetrics_scroll_tracking_load, 200);
                    }
                }
                exactmetrics_scroll_tracking_load();
            });
        }
        /* End ExactMetrics Scroll Tracking */
    </script>
    <script src='https://c0.wp.com/p/woocommerce/5.9.0/assets/js/jquery-blockui/jquery.blockUI.min.js' id='jquery-blockui-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/jquery/ui/core.min.js' id='jquery-ui-core-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/jquery/ui/datepicker.min.js' id='jquery-ui-datepicker-js'></script>
    <script id='jquery-ui-datepicker-js-after'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 0,
                "isRTL": false
            });
        });
    </script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/product-extras-for-woocommerce/assets/js/conditions.js?ver=3.9.4' id='pewc-conditions-js'></script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/product-extras-for-woocommerce/assets/js/select-box.js?ver=3.9.4' id='dd-slick-js'></script>
    <script id='wc-single-product-js-extra'>
        var wc_single_product_params = {
            "i18n_required_rating_text": "Please select a rating",
            "review_rating_required": "yes",
            "flexslider": {
                "rtl": false,
                "animation": "slide",
                "smoothHeight": true,
                "directionNav": false,
                "controlNav": "thumbnails",
                "slideshow": false,
                "animationSpeed": 500,
                "animationLoop": false,
                "allowOneSlide": false
            },
            "zoom_enabled": "1",
            "zoom_options": [],
            "photoswipe_enabled": "1",
            "photoswipe_options": {
                "shareEl": false,
                "closeOnScroll": false,
                "history": false,
                "hideAnimationDuration": 0,
                "showAnimationDuration": 0
            },
            "flexslider_enabled": "1"
        };
    </script>
    <script src='https://c0.wp.com/p/woocommerce/5.9.0/assets/js/frontend/single-product.min.js' id='wc-single-product-js'></script>
    <script id='pewc-script-js-extra'>
        var pewc_vars = {
            "ajaxurl": "https:\/\/www.sierrastickers.com\/wp-admin\/admin-ajax.php",
            "currency_symbol": "$",
            "decimal_separator": ".",
            "thousand_separator": ",",
            "decimals": "2",
            "price_format": "%1$s%2$s",
            "currency_pos": "left",
            "variable_1": "",
            "variable_2": "",
            "variable_3": "",
            "replace_image": "",
            "enable_tooltips": "no",
            "dequeue_tooltips": "",
            "separator": "  ",
            "update_price": "no",
            "disable_qty": "1",
            "product_gallery": ".images",
            "product_img_wrap": ".woocommerce-product-gallery__image, .woocommerce-product-gallery__image--placeholder",
            "calculations_timer": "0",
            "conditions_timer": "0",
            "remove_spaces": "no",
            "math_round": "no",
            "disable_button_calcs": "no",
            "disable_button_uploads": "no",
            "null_signifier": "*",
            "disable_wcfad_label": "no",
            "zero_missing_field": "no",
            "multiply_independent": "no",
            "post_id": "541",
            "accordion_toggle": "",
            "close_accordion": "no",
            "reset_fields": "no"
        };
    </script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/product-extras-for-woocommerce/assets/js/pewc.js?ver=3.9.4' id='pewc-script-js'></script>
    <script id='wc-add-to-cart-js-extra'>
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/www.sierrastickers.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "yes"
        };
    </script>
    <script src='https://c0.wp.com/p/woocommerce/5.9.0/assets/js/frontend/add-to-cart.min.js' id='wc-add-to-cart-js'></script>
    <script src='https://c0.wp.com/p/woocommerce/5.9.0/assets/js/js-cookie/js.cookie.min.js' id='js-cookie-js'></script>
    <script id='woocommerce-js-extra'>
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script src='https://c0.wp.com/p/woocommerce/5.9.0/assets/js/frontend/woocommerce.min.js' id='woocommerce-js'></script>
    <script id='wc-cart-fragments-js-extra'>
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_8ca82c90a738c1d0bab11adf8cd819c4",
            "fragment_name": "wc_fragments_8ca82c90a738c1d0bab11adf8cd819c4",
            "request_timeout": "5000"
        };
    </script>
    <script src='https://c0.wp.com/p/woocommerce/5.9.0/assets/js/frontend/cart-fragments.min.js' id='wc-cart-fragments-js'></script>
    <script id='wc-cart-fragments-js-after'>
        jQuery('body').bind('wc_fragments_refreshed', function() {
            var jetpackLazyImagesLoadEvent;
            try {
                jetpackLazyImagesLoadEvent = new Event('jetpack-lazy-images-load', {
                    bubbles: true,
                    cancelable: true
                });
            } catch (e) {
                jetpackLazyImagesLoadEvent = document.createEvent('Event')
                jetpackLazyImagesLoadEvent.initEvent('jetpack-lazy-images-load', true, true);
            }
            jQuery('body').get(0).dispatchEvent(jetpackLazyImagesLoadEvent);
        });
    </script>
    <script src='https://www.sierrastickers.com/wp-content/themes/storefront-child/js/custom-scripts.js?ver=1635427445' id='custom-scripts-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/dist/vendor/regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/dist/vendor/wp-polyfill.min.js' id='wp-polyfill-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/dist/dom-ready.min.js' id='wp-dom-ready-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/dist/hooks.min.js' id='wp-hooks-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/dist/i18n.min.js' id='wp-i18n-js'></script>
    <script id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id='wp-a11y-js-translations'>
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "locale_data": {
                "messages": {
                    "": {}
                }
            }
        });
    </script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/dist/a11y.min.js' id='wp-a11y-js'></script>
    <script defer='defer' src='https://www.sierrastickers.com/wp-content/plugins/gravityforms/js/jquery.maskedinput.min.js?ver=2.5.15' id='gform_masked_input-js'></script>
    <script src='https://www.sierrastickers.com/wp-content/themes/storefront/assets/js/woocommerce/header-cart.min.js?ver=3.9.1' id='storefront-header-cart-js'></script>
    <script src='https://www.sierrastickers.com/wp-content/themes/storefront/assets/js/footer.min.js?ver=3.9.1' id='storefront-handheld-footer-bar-js'></script>
    <script id='sfp-script-js-extra'>
        var sfpPublicL10n = {
            "loading": "Loading",
            "more": "More"
        };
        var sfpSettings = {
            "shopLayout": "",
            "wcQuickView": "",
            "mobStore": "",
            "infiniteScroll": "",
            "i18n": {
                "expand": "Expand",
                "collapse": "Collapse"
            }
        };
    </script>
    <script src='https://www.sierrastickers.com/wp-content/plugins/storefront-pro-premium//assets/js/public.js?ver=5.14.0' id='sfp-script-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/imagesloaded.min.js' id='imagesloaded-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/masonry.min.js' id='masonry-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/jquery/jquery.masonry.min.js' id='jquery-masonry-js'></script>
    <script src='https://c0.wp.com/c/5.8.2/wp-includes/js/wp-embed.min.js' id='wp-embed-js'></script>
    <script src='https://stats.wp.com/e-202150.js' defer></script>
    <script>
        _stq = window._stq || [];
        _stq.push(['view', {
            v: 'ext',
            j: '1:10.4',
            blog: '179643038',
            post: '541',
            tz: '-8',
            srv: 'www.sierrastickers.com'
        }]);
        _stq.push(['clickTrackerInit', '179643038', '541']);
    </script>
    <script>
        gform.initializeOnLoaded(function() {
            jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
                if (formId == 1) {
                    jQuery('#input_1_3').mask('(999) 999-9999').bind('keypress', function(e) {
                        if (e.which == 13) {
                            jQuery(this).blur();
                        }
                    });
                }
            });
            jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
        });
    </script>
    <script>
        gform.initializeOnLoaded(function() {
            jQuery(document).trigger('gform_post_render', [1, 1])
        });
    </script>
    <script>
        window.lazyLoadOptions = {
            elements_selector: "img[data-lazy-src],.rocket-lazyload",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids()
                            }
                        }
                    }
                }
            }
        };
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function(mutation) {
                        for (i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                continue
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                                continue
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                });
                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: !0,
                    subtree: !0
                };
                observer.observe(b, config)
            }
        }, !1)
    </script>
    <script data-no-minify="1" async src="https://www.sierrastickers.com/wp-content/plugins/wp-rocket/assets/js/lazyload/16.1/lazyload.min.js"></script>
</body>

</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->