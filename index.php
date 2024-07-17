<html class="no-js" dir="ltr" lang="sk">
<?php
    $cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
    $cms->landing( 1, 2 );

    $cms->thankspage = DIR . './success/success.php';
    define( 'THANKSPAGE', $_SERVER['DOCUMENT_ROOT'] . './success/success.php' );
?>

<head>
    <script async="" src="https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .ac_footer {
            position: relative;
            top: 10px;
            height: 0;
            text-align: center;
            margin-bottom: 30px;
            color: #a12000
        }

        .ac_footer a {
            color: #a12000
        }

        .ac_footer p {
            text-align: center
        }

        img[height="1"],
        img[width="1"] {
            display: none !important
        }
    </style>
    <meta content="HYPERTON FORTE" name="product">
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>Kúpte si HYPERTON FORTE za zľavnenú cenu. Cena, recenzie. Objednajte si HYPERTON FORTE teraz!</title>
    <script data-pagespeed-no-defer="">
        (function() {
            function d(b) {
                var a = window;
                if (a.addEventListener) a.addEventListener("load", b, !1);
                else if (a.attachEvent) a.attachEvent("onload", b);
                else {
                    var c = a.onload;
                    a.onload = function() {
                        b.call(this);
                        c && c.call(this)
                    }
                }
            }
            var p = Date.now || function() {
                return +new Date
            };
            window.pagespeed = window.pagespeed || {};
            var q = window.pagespeed;

            function r() {
                this.a = !0
            }
            r.prototype.c = function(b) {
                b = parseInt(b.substring(0, b.indexOf(" ")), 10);
                return !isNaN(b) && b <= p()
            };
            r.prototype.hasExpired = r.prototype.c;
            r.prototype.b = function(b) {
                return b.substring(b.indexOf(" ", b.indexOf(" ") + 1) + 1)
            };
            r.prototype.getData = r.prototype.b;
            r.prototype.f = function(b) {
                var a = document.getElementsByTagName("script"),
                    a = a[a.length - 1];
                a.parentNode.replaceChild(b, a)
            };
            r.prototype.replaceLastScript = r.prototype.f;
            r.prototype.g = function(b) {
                var a = window.localStorage.getItem("pagespeed_lsc_url:" + b),
                    c = document.createElement(a ? "style" : "link");
                a && !this.c(a) ? (c.type = "text/css", c.appendChild(document.createTextNode(this.b(a)))) : (c.rel = "stylesheet", c.href = b, this.a = !0);
                this.f(c)
            };
            r.prototype.inlineCss = r.prototype.g;
            r.prototype.h = function(b, a) {
                var c = window.localStorage.getItem("pagespeed_lsc_url:" + b + " pagespeed_lsc_hash:" + a),
                    f = document.createElement("img");
                c && !this.c(c) ? f.src = this.b(c) : (f.src = b, this.a = !0);
                for (var c = 2, k = arguments.length; c < k; ++c) {
                    var g = arguments[c].indexOf("=");
                    f.setAttribute(arguments[c].substring(0, g), arguments[c].substring(g + 1))
                }
                this.f(f)
            };
            r.prototype.inlineImg = r.prototype.h;

            function t(b, a, c, f) {
                a = document.getElementsByTagName(a);
                for (var k = 0, g = a.length; k < g; ++k) {
                    var e = a[k],
                        m = e.getAttribute("data-pagespeed-lsc-hash"),
                        h = e.getAttribute("data-pagespeed-lsc-url");
                    if (m && h) {
                        h = "pagespeed_lsc_url:" + h;
                        c && (h += " pagespeed_lsc_hash:" + m);
                        var l = e.getAttribute("data-pagespeed-lsc-expiry"),
                            l = l ? (new Date(l)).getTime() : "",
                            e = f(e);
                        if (!e) {
                            var n = window.localStorage.getItem(h);
                            n && (e = b.b(n))
                        }
                        e && (window.localStorage.setItem(h, l + " " + m + " " + e), b.a = !0)
                    }
                }
            }

            function u(b) {
                t(b, "img", !0, function(a) {
                    return a.src
                });
                t(b, "style", !1, function(a) {
                    return a.firstChild ? a.firstChild.nodeValue : null
                })
            }
            q.i = function() {
                if (window.localStorage) {
                    var b = new r;
                    q.localStorageCache = b;
                    d(function() {
                        u(b)
                    });
                    d(function() {
                        if (b.a) {
                            for (var a = [], c = [], f = 0, k = p(), g = 0, e = window.localStorage.length; g < e; ++g) {
                                var m = window.localStorage.key(g);
                                if (!m.indexOf("pagespeed_lsc_url:")) {
                                    var h = window.localStorage.getItem(m),
                                        l = h.indexOf(" "),
                                        n = parseInt(h.substring(0, l), 10);
                                    if (!isNaN(n))
                                        if (n <= k) {
                                            a.push(m);
                                            continue
                                        } else if (n < f || 0 == f) f = n;
                                    c.push(h.substring(l + 1, h.indexOf(" ", l + 1)))
                                }
                            }
                            k = "";
                            f && (k = "; expires=" + (new Date(f)).toUTCString());
                            document.cookie = "_GPSLSC=" + c.join("!") + k;
                            g = 0;
                            for (e = a.length; g < e; ++g) window.localStorage.removeItem(a[g]);
                            b.a = !1
                        }
                    })
                }
            };
            q.localStorageCacheInit = q.i;
        })();
        pagespeed.localStorageCacheInit();
    </script>
    <link rel="icon" href="images/DM_NormCaps_blister_box_3D.png" type="image/png">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
    <link href="https:/index_family_Roboto_300_400_500_700_amp_subset_cyrillic_greek_vietnamese_.html" rel="stylesheet">
    <link href="https:/index_family_Material_Icons_.html" rel="stylesheet">
    <style>
        .red {
            background-color: #f44336 !important
        }

        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        header,
        main,
        section {
            display: block
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        a {
            background-color: transparent
        }

        a:active,
        a:hover {
            outline: 0
        }

        b,
        strong {
            font-weight: bold
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        button,
        input,
        select {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        input {
            line-height: normal
        }

        html {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        *,
        *:before,
        *:after {
            -webkit-box-sizing: inherit;
            box-sizing: inherit
        }

        ul:not(.browser-default) {
            padding-left: 0;
            list-style-type: none
        }

        ul:not(.browser-default)>li {
            list-style-type: none
        }

        a {
            color: #039be5;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent
        }

        .valign-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .btn {
            -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12), 0 3px 1px -2px rgba(0, 0, 0, .2);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12), 0 3px 1px -2px rgba(0, 0, 0, .2)
        }

        .btn:hover {
            -webkit-box-shadow: 0 3px 3px 0 rgba(0, 0, 0, .14), 0 1px 7px 0 rgba(0, 0, 0, .12), 0 3px 1px -1px rgba(0, 0, 0, .2);
            box-shadow: 0 3px 3px 0 rgba(0, 0, 0, .14), 0 1px 7px 0 rgba(0, 0, 0, .12), 0 3px 1px -1px rgba(0, 0, 0, .2)
        }

        i {
            line-height: inherit
        }

        table.striped>tbody>tr:nth-child(odd) {
            background-color: #f2f2f2
        }

        .collection .collection-item.avatar:not(.circle-clipper)>.circle,
        .collection .collection-item.avatar :not(.circle-clipper)>.circle {
            position: absolute;
            width: 42px;
            height: 42px;
            overflow: hidden;
            left: 15px;
            display: inline-block;
            vertical-align: middle
        }

        .collection a.collection-item:not(.active):hover {
            background-color: #ddd
        }

        @-webkit-keyframes indeterminate {
            0% {
                left: -35%;
                right: 100%
            }

            60% {
                left: 100%;
                right: -90%
            }

            100% {
                left: 100%;
                right: -90%
            }
        }

        @keyframes indeterminate {
            0% {
                left: -35%;
                right: 100%
            }

            60% {
                left: 100%;
                right: -90%
            }

            100% {
                left: 100%;
                right: -90%
            }
        }

        @-webkit-keyframes indeterminate-short {
            0% {
                left: -200%;
                right: 100%
            }

            60% {
                left: 107%;
                right: -8%
            }

            100% {
                left: 107%;
                right: -8%
            }
        }

        @keyframes indeterminate-short {
            0% {
                left: -200%;
                right: 100%
            }

            60% {
                left: 107%;
                right: -8%
            }

            100% {
                left: 107%;
                right: -8%
            }
        }

        .center-align {
            text-align: center
        }

        .left {
            float: left !important
        }

        .right {
            float: right !important
        }

        .circle {
            border-radius: 50%
        }

        .container {
            margin: 0 auto;
            max-width: 1280px;
            width: 90%
        }

        @media only screen and (min-width:601px) {
            .container {
                width: 85%
            }
        }

        @media only screen and (min-width:993px) {
            .container {
                width: 70%
            }
        }

        .container .row {
            margin-left: -.75rem;
            margin-right: -.75rem
        }

        .row {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px
        }

        .row:after {
            content: "";
            display: table;
            clear: both
        }

        .row .col {
            float: left;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0 .75rem;
            min-height: 1px
        }

        .row .col.s12 {
            width: 100%;
            margin-left: auto;
            left: auto;
            right: auto
        }

        @media only screen and (min-width:601px) {
            .row .col.m6 {
                width: 50%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.m7 {
                width: 58.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.m12 {
                width: 100%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.offset-m4 {
                margin-left: 33.3333333333%
            }
        }

        @media only screen and (min-width:993px) {
            .row .col.l4 {
                width: 33.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.l8 {
                width: 66.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.l10 {
                width: 83.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.l12 {
                width: 100%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.offset-l2 {
                margin-left: 16.6666666667%
            }
        }

        @media only screen and (min-width:1201px) {
            .row .col.xl4 {
                width: 33.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.xl8 {
                width: 66.6666666667%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.xl10 {
                width: 83.3333333333%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.xl12 {
                width: 100%;
                margin-left: auto;
                left: auto;
                right: auto
            }

            .row .col.offset-xl1 {
                margin-left: 8.3333333333%
            }

            .row .col.offset-xl4 {
                margin-left: 33.3333333333%
            }
        }

        a {
            text-decoration: none
        }

        html {
            line-height: 1.5;
            font-family: "Roboto", sans-serif;
            font-weight: normal;
            color: rgba(0, 0, 0, .87)
        }

        @media only screen and (min-width:0) {
            html {
                font-size: 14px
            }
        }

        @media only screen and (min-width:992px) {
            html {
                font-size: 14.5px
            }
        }

        @media only screen and (min-width:1200px) {
            html {
                font-size: 15px
            }
        }

        strong {
            font-weight: 500
        }

        .card .card-action a:not(.btn):not(.btn-large):not(.btn-large):not(.btn-floating) {
            color: #ffab40;
            margin-right: 24px;
            -webkit-transition: color .3s ease;
            transition: color .3s ease;
            text-transform: uppercase
        }

        .card .card-action a:not(.btn):not(.btn-large):not(.btn-large):not(.btn-floating):hover {
            color: #ffd8a6
        }

        .btn {
            border: none;
            border-radius: 2px;
            display: inline-block;
            height: 36px;
            line-height: 36px;
            padding: 0 2rem;
            text-transform: uppercase;
            vertical-align: middle;
            -webkit-tap-highlight-color: transparent
        }

        .btn:disabled {
            pointer-events: none;
            background-color: #dfdfdf !important;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #9f9f9f !important;
            cursor: default
        }

        .btn:disabled:hover {
            background-color: #dfdfdf !important;
            color: #9f9f9f !important
        }

        .btn {
            font-size: 1rem;
            outline: 0
        }

        .btn:focus {
            background-color: #1d7d74
        }

        .btn {
            text-decoration: none;
            color: #fff;
            background-color: #26a69a;
            text-align: center;
            letter-spacing: .5px;
            -webkit-transition: .2s ease-out;
            transition: .2s ease-out;
            cursor: pointer
        }

        .btn:hover {
            background-color: #2bbbad
        }

        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            vertical-align: middle;
            z-index: 1;
            -webkit-transition: .3s ease-out;
            transition: .3s ease-out
        }

        .prefix~.chips {
            margin-left: 3rem;
            width: 92%;
            width: calc(100% - 3rem)
        }

        .chips:empty~label {
            font-size: .8rem;
            -webkit-transform: translateY(-140%);
            transform: translateY(-140%)
        }

        .materialboxed:hover:not(.active) {
            opacity: .8
        }

        button:focus {
            outline: none;
            background-color: #2ab7a9
        }

        ::-webkit-input-placeholder {
            color: #d1d1d1
        }

        ::-moz-placeholder {
            color: #d1d1d1
        }

        :-ms-input-placeholder {
            color: #d1d1d1
        }

        ::placeholder {
            color: #d1d1d1
        }

        input:not([type]),
        input[type=text]:not(.browser-default),
        input[type=password]:not(.browser-default),
        input[type=email]:not(.browser-default),
        input[type=url]:not(.browser-default),
        input[type=time]:not(.browser-default),
        input[type=date]:not(.browser-default),
        input[type=datetime]:not(.browser-default),
        input[type=datetime-local]:not(.browser-default),
        input[type=tel]:not(.browser-default),
        input[type=number]:not(.browser-default),
        input[type=search]:not(.browser-default),
        textarea.materialize-textarea {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #9e9e9e;
            border-radius: 0;
            outline: none;
            height: 3rem;
            width: 100%;
            font-size: 1rem;
            margin: 0 0 20px 0;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-transition: all .3s;
            transition: all .3s
        }

        input:not([type]):disabled,
        input:not([type])[readonly="readonly"],
        input[type=text]:not(.browser-default):disabled,
        input[type=text]:not(.browser-default)[readonly="readonly"],
        input[type=password]:not(.browser-default):disabled,
        input[type=password]:not(.browser-default)[readonly="readonly"],
        input[type=email]:not(.browser-default):disabled,
        input[type=email]:not(.browser-default)[readonly="readonly"],
        input[type=url]:not(.browser-default):disabled,
        input[type=url]:not(.browser-default)[readonly="readonly"],
        input[type=time]:not(.browser-default):disabled,
        input[type=time]:not(.browser-default)[readonly="readonly"],
        input[type=date]:not(.browser-default):disabled,
        input[type=date]:not(.browser-default)[readonly="readonly"],
        input[type=datetime]:not(.browser-default):disabled,
        input[type=datetime]:not(.browser-default)[readonly="readonly"],
        input[type=datetime-local]:not(.browser-default):disabled,
        input[type=datetime-local]:not(.browser-default)[readonly="readonly"],
        input[type=tel]:not(.browser-default):disabled,
        input[type=tel]:not(.browser-default)[readonly="readonly"],
        input[type=number]:not(.browser-default):disabled,
        input[type=number]:not(.browser-default)[readonly="readonly"],
        input[type=search]:not(.browser-default):disabled,
        input[type=search]:not(.browser-default)[readonly="readonly"],
        textarea.materialize-textarea:disabled,
        textarea.materialize-textarea[readonly="readonly"] {
            color: rgba(0, 0, 0, .42);
            border-bottom: 1px dotted rgba(0, 0, 0, .42)
        }

        input:not([type]):disabled+label,
        input:not([type])[readonly="readonly"]+label,
        input[type=text]:not(.browser-default):disabled+label,
        input[type=text]:not(.browser-default)[readonly="readonly"]+label,
        input[type=password]:not(.browser-default):disabled+label,
        input[type=password]:not(.browser-default)[readonly="readonly"]+label,
        input[type=email]:not(.browser-default):disabled+label,
        input[type=email]:not(.browser-default)[readonly="readonly"]+label,
        input[type=url]:not(.browser-default):disabled+label,
        input[type=url]:not(.browser-default)[readonly="readonly"]+label,
        input[type=time]:not(.browser-default):disabled+label,
        input[type=time]:not(.browser-default)[readonly="readonly"]+label,
        input[type=date]:not(.browser-default):disabled+label,
        input[type=date]:not(.browser-default)[readonly="readonly"]+label,
        input[type=datetime]:not(.browser-default):disabled+label,
        input[type=datetime]:not(.browser-default)[readonly="readonly"]+label,
        input[type=datetime-local]:not(.browser-default):disabled+label,
        input[type=datetime-local]:not(.browser-default)[readonly="readonly"]+label,
        input[type=tel]:not(.browser-default):disabled+label,
        input[type=tel]:not(.browser-default)[readonly="readonly"]+label,
        input[type=number]:not(.browser-default):disabled+label,
        input[type=number]:not(.browser-default)[readonly="readonly"]+label,
        input[type=search]:not(.browser-default):disabled+label,
        input[type=search]:not(.browser-default)[readonly="readonly"]+label,
        textarea.materialize-textarea:disabled+label,
        textarea.materialize-textarea[readonly="readonly"]+label {
            color: rgba(0, 0, 0, .42)
        }

        input:not([type]):focus:not([readonly]),
        input[type=text]:not(.browser-default):focus:not([readonly]),
        input[type=password]:not(.browser-default):focus:not([readonly]),
        input[type=email]:not(.browser-default):focus:not([readonly]),
        input[type=url]:not(.browser-default):focus:not([readonly]),
        input[type=time]:not(.browser-default):focus:not([readonly]),
        input[type=date]:not(.browser-default):focus:not([readonly]),
        input[type=datetime]:not(.browser-default):focus:not([readonly]),
        input[type=datetime-local]:not(.browser-default):focus:not([readonly]),
        input[type=tel]:not(.browser-default):focus:not([readonly]),
        input[type=number]:not(.browser-default):focus:not([readonly]),
        input[type=search]:not(.browser-default):focus:not([readonly]),
        textarea.materialize-textarea:focus:not([readonly]) {
            border-bottom: 1px solid #26a69a;
            -webkit-box-shadow: 0 1px 0 0 #26a69a;
            box-shadow: 0 1px 0 0 #26a69a
        }

        input:not([type]):focus:not([readonly])+label,
        input[type=text]:not(.browser-default):focus:not([readonly])+label,
        input[type=password]:not(.browser-default):focus:not([readonly])+label,
        input[type=email]:not(.browser-default):focus:not([readonly])+label,
        input[type=url]:not(.browser-default):focus:not([readonly])+label,
        input[type=time]:not(.browser-default):focus:not([readonly])+label,
        input[type=date]:not(.browser-default):focus:not([readonly])+label,
        input[type=datetime]:not(.browser-default):focus:not([readonly])+label,
        input[type=datetime-local]:not(.browser-default):focus:not([readonly])+label,
        input[type=tel]:not(.browser-default):focus:not([readonly])+label,
        input[type=number]:not(.browser-default):focus:not([readonly])+label,
        input[type=search]:not(.browser-default):focus:not([readonly])+label,
        textarea.materialize-textarea:focus:not([readonly])+label {
            color: #26a69a
        }

        input:not([type]).validate+label,
        input[type=text]:not(.browser-default).validate+label,
        input[type=password]:not(.browser-default).validate+label,
        input[type=email]:not(.browser-default).validate+label,
        input[type=url]:not(.browser-default).validate+label,
        input[type=time]:not(.browser-default).validate+label,
        input[type=date]:not(.browser-default).validate+label,
        input[type=datetime]:not(.browser-default).validate+label,
        input[type=datetime-local]:not(.browser-default).validate+label,
        input[type=tel]:not(.browser-default).validate+label,
        input[type=number]:not(.browser-default).validate+label,
        input[type=search]:not(.browser-default).validate+label,
        textarea.materialize-textarea.validate+label {
            width: 100%
        }

        input:not([type]).invalid+label:after,
        input:not([type]).valid+label:after,
        input[type=text]:not(.browser-default).invalid+label:after,
        input[type=text]:not(.browser-default).valid+label:after,
        input[type=password]:not(.browser-default).invalid+label:after,
        input[type=password]:not(.browser-default).valid+label:after,
        input[type=email]:not(.browser-default).invalid+label:after,
        input[type=email]:not(.browser-default).valid+label:after,
        input[type=url]:not(.browser-default).invalid+label:after,
        input[type=url]:not(.browser-default).valid+label:after,
        input[type=time]:not(.browser-default).invalid+label:after,
        input[type=time]:not(.browser-default).valid+label:after,
        input[type=date]:not(.browser-default).invalid+label:after,
        input[type=date]:not(.browser-default).valid+label:after,
        input[type=datetime]:not(.browser-default).invalid+label:after,
        input[type=datetime]:not(.browser-default).valid+label:after,
        input[type=datetime-local]:not(.browser-default).invalid+label:after,
        input[type=datetime-local]:not(.browser-default).valid+label:after,
        input[type=tel]:not(.browser-default).invalid+label:after,
        input[type=tel]:not(.browser-default).valid+label:after,
        input[type=number]:not(.browser-default).invalid+label:after,
        input[type=number]:not(.browser-default).valid+label:after,
        input[type=search]:not(.browser-default).invalid+label:after,
        input[type=search]:not(.browser-default).valid+label:after,
        textarea.materialize-textarea.invalid+label:after,
        textarea.materialize-textarea.valid+label:after {
            display: none
        }

        input:not([type]).invalid+label.active:after,
        input:not([type]).valid+label.active:after,
        input[type=text]:not(.browser-default).invalid+label.active:after,
        input[type=text]:not(.browser-default).valid+label.active:after,
        input[type=password]:not(.browser-default).invalid+label.active:after,
        input[type=password]:not(.browser-default).valid+label.active:after,
        input[type=email]:not(.browser-default).invalid+label.active:after,
        input[type=email]:not(.browser-default).valid+label.active:after,
        input[type=url]:not(.browser-default).invalid+label.active:after,
        input[type=url]:not(.browser-default).valid+label.active:after,
        input[type=time]:not(.browser-default).invalid+label.active:after,
        input[type=time]:not(.browser-default).valid+label.active:after,
        input[type=date]:not(.browser-default).invalid+label.active:after,
        input[type=date]:not(.browser-default).valid+label.active:after,
        input[type=datetime]:not(.browser-default).invalid+label.active:after,
        input[type=datetime]:not(.browser-default).valid+label.active:after,
        input[type=datetime-local]:not(.browser-default).invalid+label.active:after,
        input[type=datetime-local]:not(.browser-default).valid+label.active:after,
        input[type=tel]:not(.browser-default).invalid+label.active:after,
        input[type=tel]:not(.browser-default).valid+label.active:after,
        input[type=number]:not(.browser-default).invalid+label.active:after,
        input[type=number]:not(.browser-default).valid+label.active:after,
        input[type=search]:not(.browser-default).invalid+label.active:after,
        input[type=search]:not(.browser-default).valid+label.active:after,
        textarea.materialize-textarea.invalid+label.active:after,
        textarea.materialize-textarea.valid+label.active:after {
            display: block
        }

        input.valid:not([type]),
        input.valid:not([type]):focus,
        input[type=text].valid:not(.browser-default),
        input[type=text].valid:not(.browser-default):focus,
        input[type=password].valid:not(.browser-default),
        input[type=password].valid:not(.browser-default):focus,
        input[type=email].valid:not(.browser-default),
        input[type=email].valid:not(.browser-default):focus,
        input[type=url].valid:not(.browser-default),
        input[type=url].valid:not(.browser-default):focus,
        input[type=time].valid:not(.browser-default),
        input[type=time].valid:not(.browser-default):focus,
        input[type=date].valid:not(.browser-default),
        input[type=date].valid:not(.browser-default):focus,
        input[type=datetime].valid:not(.browser-default),
        input[type=datetime].valid:not(.browser-default):focus,
        input[type=datetime-local].valid:not(.browser-default),
        input[type=datetime-local].valid:not(.browser-default):focus,
        input[type=tel].valid:not(.browser-default),
        input[type=tel].valid:not(.browser-default):focus,
        input[type=number].valid:not(.browser-default),
        input[type=number].valid:not(.browser-default):focus,
        input[type=search].valid:not(.browser-default),
        input[type=search].valid:not(.browser-default):focus,
        textarea.materialize-textarea.valid,
        textarea.materialize-textarea.valid:focus,
        .select-wrapper.valid>input.select-dropdown {
            border-bottom: 1px solid #4caf50;
            -webkit-box-shadow: 0 1px 0 0 #4caf50;
            box-shadow: 0 1px 0 0 #4caf50
        }

        input.invalid:not([type]),
        input.invalid:not([type]):focus,
        input[type=text].invalid:not(.browser-default),
        input[type=text].invalid:not(.browser-default):focus,
        input[type=password].invalid:not(.browser-default),
        input[type=password].invalid:not(.browser-default):focus,
        input[type=email].invalid:not(.browser-default),
        input[type=email].invalid:not(.browser-default):focus,
        input[type=url].invalid:not(.browser-default),
        input[type=url].invalid:not(.browser-default):focus,
        input[type=time].invalid:not(.browser-default),
        input[type=time].invalid:not(.browser-default):focus,
        input[type=date].invalid:not(.browser-default),
        input[type=date].invalid:not(.browser-default):focus,
        input[type=datetime].invalid:not(.browser-default),
        input[type=datetime].invalid:not(.browser-default):focus,
        input[type=datetime-local].invalid:not(.browser-default),
        input[type=datetime-local].invalid:not(.browser-default):focus,
        input[type=tel].invalid:not(.browser-default),
        input[type=tel].invalid:not(.browser-default):focus,
        input[type=number].invalid:not(.browser-default),
        input[type=number].invalid:not(.browser-default):focus,
        input[type=search].invalid:not(.browser-default),
        input[type=search].invalid:not(.browser-default):focus,
        textarea.materialize-textarea.invalid,
        textarea.materialize-textarea.invalid:focus,
        .select-wrapper.invalid>input.select-dropdown {
            border-bottom: 1px solid #f44336;
            -webkit-box-shadow: 0 1px 0 0 #f44336;
            box-shadow: 0 1px 0 0 #f44336
        }

        input:not([type]).valid+label:after,
        input:not([type]):focus.valid+label:after,
        input[type=text]:not(.browser-default).valid+label:after,
        input[type=text]:not(.browser-default):focus.valid+label:after,
        input[type=password]:not(.browser-default).valid+label:after,
        input[type=password]:not(.browser-default):focus.valid+label:after,
        input[type=email]:not(.browser-default).valid+label:after,
        input[type=email]:not(.browser-default):focus.valid+label:after,
        input[type=url]:not(.browser-default).valid+label:after,
        input[type=url]:not(.browser-default):focus.valid+label:after,
        input[type=time]:not(.browser-default).valid+label:after,
        input[type=time]:not(.browser-default):focus.valid+label:after,
        input[type=date]:not(.browser-default).valid+label:after,
        input[type=date]:not(.browser-default):focus.valid+label:after,
        input[type=datetime]:not(.browser-default).valid+label:after,
        input[type=datetime]:not(.browser-default):focus.valid+label:after,
        input[type=datetime-local]:not(.browser-default).valid+label:after,
        input[type=datetime-local]:not(.browser-default):focus.valid+label:after,
        input[type=tel]:not(.browser-default).valid+label:after,
        input[type=tel]:not(.browser-default):focus.valid+label:after,
        input[type=number]:not(.browser-default).valid+label:after,
        input[type=number]:not(.browser-default):focus.valid+label:after,
        input[type=search]:not(.browser-default).valid+label:after,
        input[type=search]:not(.browser-default):focus.valid+label:after,
        textarea.materialize-textarea.valid+label:after,
        textarea.materialize-textarea:focus.valid+label:after,
        .select-wrapper.valid+label:after {
            content: attr(data-success);
            color: #4caf50;
            opacity: 1;
            -webkit-transform: translateY(9px);
            transform: translateY(9px)
        }

        input:not([type]).invalid+label:after,
        input:not([type]):focus.invalid+label:after,
        input[type=text]:not(.browser-default).invalid+label:after,
        input[type=text]:not(.browser-default):focus.invalid+label:after,
        input[type=password]:not(.browser-default).invalid+label:after,
        input[type=password]:not(.browser-default):focus.invalid+label:after,
        input[type=email]:not(.browser-default).invalid+label:after,
        input[type=email]:not(.browser-default):focus.invalid+label:after,
        input[type=url]:not(.browser-default).invalid+label:after,
        input[type=url]:not(.browser-default):focus.invalid+label:after,
        input[type=time]:not(.browser-default).invalid+label:after,
        input[type=time]:not(.browser-default):focus.invalid+label:after,
        input[type=date]:not(.browser-default).invalid+label:after,
        input[type=date]:not(.browser-default):focus.invalid+label:after,
        input[type=datetime]:not(.browser-default).invalid+label:after,
        input[type=datetime]:not(.browser-default):focus.invalid+label:after,
        input[type=datetime-local]:not(.browser-default).invalid+label:after,
        input[type=datetime-local]:not(.browser-default):focus.invalid+label:after,
        input[type=tel]:not(.browser-default).invalid+label:after,
        input[type=tel]:not(.browser-default):focus.invalid+label:after,
        input[type=number]:not(.browser-default).invalid+label:after,
        input[type=number]:not(.browser-default):focus.invalid+label:after,
        input[type=search]:not(.browser-default).invalid+label:after,
        input[type=search]:not(.browser-default):focus.invalid+label:after,
        textarea.materialize-textarea.invalid+label:after,
        textarea.materialize-textarea:focus.invalid+label:after,
        .select-wrapper.invalid+label:after {
            content: attr(data-error);
            color: #f44336;
            opacity: 1;
            -webkit-transform: translateY(9px);
            transform: translateY(9px)
        }

        input:not([type])+label:after,
        input[type=text]:not(.browser-default)+label:after,
        input[type=password]:not(.browser-default)+label:after,
        input[type=email]:not(.browser-default)+label:after,
        input[type=url]:not(.browser-default)+label:after,
        input[type=time]:not(.browser-default)+label:after,
        input[type=date]:not(.browser-default)+label:after,
        input[type=datetime]:not(.browser-default)+label:after,
        input[type=datetime-local]:not(.browser-default)+label:after,
        input[type=tel]:not(.browser-default)+label:after,
        input[type=number]:not(.browser-default)+label:after,
        input[type=search]:not(.browser-default)+label:after,
        textarea.materialize-textarea+label:after,
        .select-wrapper+label:after {
            display: block;
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            opacity: 0;
            -webkit-transition: .2s opacity ease-out, .2s color ease-out;
            transition: .2s opacity ease-out, .2s color ease-out
        }

        .input-field {
            position: relative;
            margin-top: 1rem
        }

        .input-field.col .prefix~label,
        .input-field.col .prefix~.validate~label {
            width: calc(100% - 3rem - 1.5rem)
        }

        .input-field label:not(.label-icon).active {
            -webkit-transform: translateY(-14px) scale(.8);
            transform: translateY(-14px) scale(.8);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0
        }

        .input-field .prefix~input,
        .input-field .prefix~textarea,
        .input-field .prefix~label,
        .input-field .prefix~.validate~label,
        .input-field .prefix~.autocomplete-content {
            margin-left: 3rem;
            width: 92%;
            width: calc(100% - 3rem)
        }

        .input-field .prefix~label {
            margin-left: 3rem
        }

        @media only screen and (max-width:992px) {
            .input-field .prefix~input {
                width: 86%;
                width: calc(100% - 3rem)
            }
        }

        @media only screen and (max-width:600px) {
            .input-field .prefix~input {
                width: 80%;
                width: calc(100% - 3rem)
            }
        }

        .input-field input[type=search]:focus+label i,
        .input-field input[type=search]:focus~.mdi-navigation-close,
        .input-field input[type=search]:focus~.material-icons {
            color: #444
        }

        .input-field input[type=search]~.mdi-navigation-close,
        .input-field input[type=search]~.material-icons {
            position: absolute;
            top: 0;
            right: 1rem;
            color: transparent;
            cursor: pointer;
            font-size: 2rem;
            -webkit-transition: .3s color;
            transition: .3s color
        }

        textarea.materialize-textarea.validate+label:not(.label-icon).active {
            -webkit-transform: translateY(-25px);
            transform: translateY(-25px)
        }

        [type="radio"]:not(:checked),
        [type="radio"]:checked {
            position: absolute;
            opacity: 0;
            pointer-events: none
        }

        [type="radio"]:not(:checked)+label,
        [type="radio"]:checked+label {
            position: relative;
            padding-left: 35px;
            cursor: pointer;
            display: inline-block;
            height: 25px;
            line-height: 25px;
            font-size: 1rem;
            -webkit-transition: .28s ease;
            transition: .28s ease;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        [type="radio"]:not(:checked)+label:before,
        [type="radio"]:not(:checked)+label:after,
        [type="radio"]:checked+label:before,
        [type="radio"]:checked+label:after,
        [type="radio"].with-gap:checked+label:before,
        [type="radio"].with-gap:checked+label:after {
            border-radius: 50%
        }

        [type="radio"]:not(:checked)+label:before,
        [type="radio"]:not(:checked)+label:after {
            border: 2px solid #5a5a5a
        }

        [type="radio"]:not(:checked)+label:after {
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        [type="radio"]:disabled:not(:checked)+label:before,
        [type="radio"]:disabled:checked+label:before {
            background-color: transparent;
            border-color: rgba(0, 0, 0, .42)
        }

        [type="radio"]:disabled:not(:checked)+label:before {
            border-color: rgba(0, 0, 0, .42)
        }

        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: absolute;
            opacity: 0;
            pointer-events: none
        }

        [type="checkbox"]+label:before,
        [type="checkbox"]:not(.filled-in)+label:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 18px;
            height: 18px;
            z-index: 0;
            border: 2px solid #5a5a5a;
            border-radius: 1px;
            margin-top: 2px;
            -webkit-transition: .2s;
            transition: .2s
        }

        [type="checkbox"]:not(.filled-in)+label:after {
            border: 0;
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        [type="checkbox"]:not(:checked):disabled+label:before {
            border: none;
            background-color: rgba(0, 0, 0, .42)
        }

        [type="checkbox"].filled-in:not(:checked)+label:before {
            width: 0;
            height: 0;
            border: 3px solid transparent;
            left: 6px;
            top: 10px;
            -webkit-transform: rotateZ(37deg);
            transform: rotateZ(37deg);
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%
        }

        [type="checkbox"].filled-in:not(:checked)+label:after {
            height: 20px;
            width: 20px;
            background-color: transparent;
            border: 2px solid #5a5a5a;
            top: 0;
            z-index: 0
        }

        [type="checkbox"].filled-in:disabled:not(:checked)+label:before {
            background-color: transparent;
            border: 2px solid transparent
        }

        [type="checkbox"].filled-in:disabled:not(:checked)+label:after {
            border-color: transparent;
            background-color: #949494
        }

        input[type=checkbox]:checked:not(:disabled)~.lever:active::before,
        input[type=checkbox]:checked:not(:disabled).tabbed:focus~.lever::before {
            -webkit-transform: scale(2.4);
            transform: scale(2.4);
            background-color: rgba(38, 166, 154, .15)
        }

        input[type=checkbox]:not(:disabled)~.lever:active:before,
        input[type=checkbox]:not(:disabled).tabbed:focus~.lever::before {
            -webkit-transform: scale(2.4);
            transform: scale(2.4);
            background-color: rgba(0, 0, 0, .08)
        }

        select {
            display: none
        }

        select {
            background-color: rgba(255, 255, 255, .9);
            width: 100%;
            padding: 5px;
            border: 1px solid #f2f2f2;
            border-radius: 2px;
            height: 3rem
        }

        .input-field>select {
            box-sizing: border-box;
            width: 100%;
            height: 2.5rem;
            height: 3rem;
            margin-bottom: 5px;
            padding: 5px;
            color: #a8788e;
            border: 1px solid #f2f2f2;
            border-radius: 2px
        }

        select:disabled {
            color: rgba(0, 0, 0, .42)
        }

        .prefix~.select-wrapper {
            margin-left: 3rem;
            width: 92%;
            width: calc(100% - 3rem)
        }

        .prefix~label {
            margin-left: 3rem
        }

        .select-dropdown li.optgroup~li.optgroup-option {
            padding-left: 1rem
        }

        .side-nav .collapsible-body>ul:not(.collapsible)>li.active,
        .side-nav.fixed .collapsible-body>ul:not(.collapsible)>li.active {
            background-color: #ee6e73
        }

        .side-nav .collapsible-body>ul:not(.collapsible)>li.active a,
        .side-nav.fixed .collapsible-body>ul:not(.collapsible)>li.active a {
            color: #fff
        }

        .preloader-wrapper {
            display: inline-block;
            position: relative;
            width: 50px;
            height: 50px
        }

        .preloader-wrapper.big {
            width: 64px;
            height: 64px
        }

        .preloader-wrapper.active {
            -webkit-animation: container-rotate 1568ms linear infinite;
            animation: container-rotate 1568ms linear infinite
        }

        @-webkit-keyframes container-rotate {
            to {
                -webkit-transform: rotate(360deg)
            }
        }

        @keyframes container-rotate {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .spinner-layer {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            border-color: #26a69a
        }

        .spinner-blue-only {
            border-color: #4285f4
        }

        .active .spinner-layer,
        .active .spinner-layer.spinner-blue-only {
            opacity: 1;
            -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both;
            animation: fill-unfill-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        @-webkit-keyframes fill-unfill-rotate {
            12.5% {
                -webkit-transform: rotate(135deg)
            }

            25% {
                -webkit-transform: rotate(270deg)
            }

            37.5% {
                -webkit-transform: rotate(405deg)
            }

            50% {
                -webkit-transform: rotate(540deg)
            }

            62.5% {
                -webkit-transform: rotate(675deg)
            }

            75% {
                -webkit-transform: rotate(810deg)
            }

            87.5% {
                -webkit-transform: rotate(945deg)
            }

            to {
                -webkit-transform: rotate(1080deg)
            }
        }

        @keyframes fill-unfill-rotate {
            12.5% {
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg)
            }

            25% {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg)
            }

            37.5% {
                -webkit-transform: rotate(405deg);
                transform: rotate(405deg)
            }

            50% {
                -webkit-transform: rotate(540deg);
                transform: rotate(540deg)
            }

            62.5% {
                -webkit-transform: rotate(675deg);
                transform: rotate(675deg)
            }

            75% {
                -webkit-transform: rotate(810deg);
                transform: rotate(810deg)
            }

            87.5% {
                -webkit-transform: rotate(945deg);
                transform: rotate(945deg)
            }

            to {
                -webkit-transform: rotate(1080deg);
                transform: rotate(1080deg)
            }
        }

        @-webkit-keyframes blue-fade-in-out {
            from {
                opacity: 1
            }

            25% {
                opacity: 1
            }

            26% {
                opacity: 0
            }

            89% {
                opacity: 0
            }

            90% {
                opacity: 1
            }

            100% {
                opacity: 1
            }
        }

        @keyframes blue-fade-in-out {
            from {
                opacity: 1
            }

            25% {
                opacity: 1
            }

            26% {
                opacity: 0
            }

            89% {
                opacity: 0
            }

            90% {
                opacity: 1
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes red-fade-in-out {
            from {
                opacity: 0
            }

            15% {
                opacity: 0
            }

            25% {
                opacity: 1
            }

            50% {
                opacity: 1
            }

            51% {
                opacity: 0
            }
        }

        @keyframes red-fade-in-out {
            from {
                opacity: 0
            }

            15% {
                opacity: 0
            }

            25% {
                opacity: 1
            }

            50% {
                opacity: 1
            }

            51% {
                opacity: 0
            }
        }

        @-webkit-keyframes yellow-fade-in-out {
            from {
                opacity: 0
            }

            40% {
                opacity: 0
            }

            50% {
                opacity: 1
            }

            75% {
                opacity: 1
            }

            76% {
                opacity: 0
            }
        }

        @keyframes yellow-fade-in-out {
            from {
                opacity: 0
            }

            40% {
                opacity: 0
            }

            50% {
                opacity: 1
            }

            75% {
                opacity: 1
            }

            76% {
                opacity: 0
            }
        }

        @-webkit-keyframes green-fade-in-out {
            from {
                opacity: 0
            }

            65% {
                opacity: 0
            }

            75% {
                opacity: 1
            }

            90% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes green-fade-in-out {
            from {
                opacity: 0
            }

            65% {
                opacity: 0
            }

            75% {
                opacity: 1
            }

            90% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .gap-patch {
            position: absolute;
            top: 0;
            left: 45%;
            width: 10%;
            height: 100%;
            overflow: hidden;
            border-color: inherit
        }

        .gap-patch .circle {
            width: 1000%;
            left: -450%
        }

        .circle-clipper {
            display: inline-block;
            position: relative;
            width: 50%;
            height: 100%;
            overflow: hidden;
            border-color: inherit
        }

        .circle-clipper .circle {
            width: 200%;
            height: 100%;
            border-width: 3px;
            border-style: solid;
            border-color: inherit;
            border-bottom-color: transparent !important;
            border-radius: 50%;
            -webkit-animation: none;
            animation: none;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0
        }

        .circle-clipper.left .circle {
            left: 0;
            border-right-color: transparent !important;
            -webkit-transform: rotate(129deg);
            transform: rotate(129deg)
        }

        .circle-clipper.right .circle {
            left: -100%;
            border-left-color: transparent !important;
            -webkit-transform: rotate(-129deg);
            transform: rotate(-129deg)
        }

        .active .circle-clipper.left .circle {
            -webkit-animation: left-spin 1333ms cubic-bezier(.4, 0, .2, 1) infinite both;
            animation: left-spin 1333ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .active .circle-clipper.right .circle {
            -webkit-animation: right-spin 1333ms cubic-bezier(.4, 0, .2, 1) infinite both;
            animation: right-spin 1333ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        @-webkit-keyframes left-spin {
            from {
                -webkit-transform: rotate(130deg)
            }

            50% {
                -webkit-transform: rotate(-5deg)
            }

            to {
                -webkit-transform: rotate(130deg)
            }
        }

        @keyframes left-spin {
            from {
                -webkit-transform: rotate(130deg);
                transform: rotate(130deg)
            }

            50% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg)
            }

            to {
                -webkit-transform: rotate(130deg);
                transform: rotate(130deg)
            }
        }

        @-webkit-keyframes right-spin {
            from {
                -webkit-transform: rotate(-130deg)
            }

            50% {
                -webkit-transform: rotate(5deg)
            }

            to {
                -webkit-transform: rotate(-130deg)
            }
        }

        @keyframes right-spin {
            from {
                -webkit-transform: rotate(-130deg);
                transform: rotate(-130deg)
            }

            50% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg)
            }

            to {
                -webkit-transform: rotate(-130deg);
                transform: rotate(-130deg)
            }
        }

        @-webkit-keyframes fade-out {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fade-out {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .carousel.scrolling .carousel-item .materialboxed,
        .carousel .carousel-item:not(.active) .materialboxed {
            pointer-events: none
        }

        .tap-target-origin:not(.btn):not(.btn-large),
        .tap-target-origin:not(.btn):not(.btn-large):hover {
            background: none
        }

        .pulse {
            overflow: initial;
            position: relative
        }

        .pulse::before {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: inherit;
            border-radius: inherit;
            -webkit-transition: opacity .3s, -webkit-transform .3s;
            transition: opacity .3s, -webkit-transform .3s;
            transition: opacity .3s, transform .3s;
            transition: opacity .3s, transform .3s, -webkit-transform .3s;
            -webkit-animation: pulse-animation 1s cubic-bezier(.24, 0, .38, 1) infinite;
            animation: pulse-animation 1s cubic-bezier(.24, 0, .38, 1) infinite;
            z-index: -1
        }

        @-webkit-keyframes pulse-animation {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                transform: scale(1.5)
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                transform: scale(1.5)
            }
        }

        @keyframes pulse-animation {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                transform: scale(1.5)
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                transform: scale(1.5)
            }
        }
    </style>
    <style>
        @keyframes bounce {

            from,
            20%,
            53%,
            80%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transform: translate3d(0, 0, 0);
            }

            40%,
            43% {
                animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                transform: translate3d(0, -30px, 0);
            }

            70% {
                animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                transform: translate3d(0, -15px, 0);
            }

            90% {
                transform: translate3d(0, -4px, 0);
            }
        }

        @keyframes flash {

            from,
            50%,
            to {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        @keyframes pulse {
            from {
                transform: scale3d(1, 1, 1);
            }

            50% {
                transform: scale3d(1.05, 1.05, 1.05);
            }

            to {
                transform: scale3d(1, 1, 1);
            }
        }

        .pulse {
            animation-name: pulse
        }

        @keyframes rubberBand {
            from {
                transform: scale3d(1, 1, 1);
            }

            30% {
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                transform: scale3d(.95, 1.05, 1);
            }

            75% {
                transform: scale3d(1.05, .95, 1);
            }

            to {
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes shake {

            from,
            to {
                transform: translate3d(0, 0, 0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translate3d(-10px, 0, 0);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translate3d(10px, 0, 0);
            }
        }

        @keyframes headShake {
            0% {
                transform: translateX(0);
            }

            6.5% {
                transform: translateX(-6px) rotateY(-9deg);
            }

            18.5% {
                transform: translateX(5px) rotateY(7deg);
            }

            31.5% {
                transform: translateX(-3px) rotateY(-5deg);
            }

            43.5% {
                transform: translateX(2px) rotateY(3deg);
            }

            50% {
                transform: translateX(0);
            }
        }

        @keyframes swing {
            20% {
                transform: rotate3d(0, 0, 1, 15deg);
            }

            40% {
                transform: rotate3d(0, 0, 1, -10deg);
            }

            60% {
                transform: rotate3d(0, 0, 1, 5deg);
            }

            80% {
                transform: rotate3d(0, 0, 1, -5deg);
            }

            to {
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        @keyframes tada {
            from {
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            }

            30%,
            50%,
            70%,
            90% {
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            }

            40%,
            60%,
            80% {
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            }

            to {
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes wobble {
            from {
                transform: none;
            }

            15% {
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            }

            30% {
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            }

            45% {
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            }

            60% {
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            }

            75% {
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            }

            to {
                transform: none;
            }
        }

        @keyframes jello {

            from,
            11.1%,
            to {
                transform: none;
            }

            22.2% {
                transform: skewX(-12.5deg) skewY(-12.5deg);
            }

            33.3% {
                transform: skewX(6.25deg) skewY(6.25deg);
            }

            44.4% {
                transform: skewX(-3.125deg) skewY(-3.125deg);
            }

            55.5% {
                transform: skewX(1.5625deg) skewY(1.5625deg);
            }

            66.6% {
                transform: skewX(-0.78125deg) skewY(-0.78125deg);
            }

            77.7% {
                transform: skewX(0.390625deg) skewY(0.390625deg);
            }

            88.8% {
                transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            }
        }

        @keyframes bounceIn {

            from,
            20%,
            40%,
            60%,
            80%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                transform: scale3d(.3, .3, .3);
            }

            20% {
                transform: scale3d(1.1, 1.1, 1.1);
            }

            40% {
                transform: scale3d(.9, .9, .9);
            }

            60% {
                opacity: 1;
                transform: scale3d(1.03, 1.03, 1.03);
            }

            80% {
                transform: scale3d(.97, .97, .97);
            }

            to {
                opacity: 1;
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes bounceInDown {

            from,
            60%,
            75%,
            90%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                transform: translate3d(0, -3000px, 0);
            }

            60% {
                opacity: 1;
                transform: translate3d(0, 25px, 0);
            }

            75% {
                transform: translate3d(0, -10px, 0);
            }

            90% {
                transform: translate3d(0, 5px, 0);
            }

            to {
                transform: none;
            }
        }

        @keyframes bounceInLeft {

            from,
            60%,
            75%,
            90%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                transform: translate3d(-3000px, 0, 0);
            }

            60% {
                opacity: 1;
                transform: translate3d(25px, 0, 0);
            }

            75% {
                transform: translate3d(-10px, 0, 0);
            }

            90% {
                transform: translate3d(5px, 0, 0);
            }

            to {
                transform: none;
            }
        }

        @keyframes bounceInRight {

            from,
            60%,
            75%,
            90%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            from {
                opacity: 0;
                transform: translate3d(3000px, 0, 0);
            }

            60% {
                opacity: 1;
                transform: translate3d(-25px, 0, 0);
            }

            75% {
                transform: translate3d(10px, 0, 0);
            }

            90% {
                transform: translate3d(-5px, 0, 0);
            }

            to {
                transform: none;
            }
        }

        @keyframes bounceInUp {

            from,
            60%,
            75%,
            90%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            from {
                opacity: 0;
                transform: translate3d(0, 3000px, 0);
            }

            60% {
                opacity: 1;
                transform: translate3d(0, -20px, 0);
            }

            75% {
                transform: translate3d(0, 10px, 0);
            }

            90% {
                transform: translate3d(0, -5px, 0);
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes bounceOut {
            20% {
                transform: scale3d(.9, .9, .9);
            }

            50%,
            55% {
                opacity: 1;
                transform: scale3d(1.1, 1.1, 1.1);
            }

            to {
                opacity: 0;
                transform: scale3d(.3, .3, .3);
            }
        }

        @keyframes bounceOutDown {
            20% {
                transform: translate3d(0, 10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                transform: translate3d(0, -20px, 0);
            }

            to {
                opacity: 0;
                transform: translate3d(0, 2000px, 0);
            }
        }

        @keyframes bounceOutLeft {
            20% {
                opacity: 1;
                transform: translate3d(20px, 0, 0);
            }

            to {
                opacity: 0;
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @keyframes bounceOutRight {
            20% {
                opacity: 1;
                transform: translate3d(-20px, 0, 0);
            }

            to {
                opacity: 0;
                transform: translate3d(2000px, 0, 0);
            }
        }

        @keyframes bounceOutUp {
            20% {
                transform: translate3d(0, -10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                transform: translate3d(0, 20px, 0);
            }

            to {
                opacity: 0;
                transform: translate3d(0, -2000px, 0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -100%, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInDownBig {
            from {
                opacity: 0;
                transform: translate3d(0, -2000px, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInLeftBig {
            from {
                opacity: 0;
                transform: translate3d(-2000px, 0, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translate3d(100%, 0, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInRightBig {
            from {
                opacity: 0;
                transform: translate3d(2000px, 0, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeInUpBig {
            from {
                opacity: 0;
                transform: translate3d(0, 2000px, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @keyframes fadeOutDown {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(0, 100%, 0);
            }
        }

        @keyframes fadeOutDownBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(0, 2000px, 0);
            }
        }

        @keyframes fadeOutLeft {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes fadeOutLeftBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @keyframes fadeOutRight {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(100%, 0, 0);
            }
        }

        @keyframes fadeOutRightBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(2000px, 0, 0);
            }
        }

        @keyframes fadeOutUp {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(0, -100%, 0);
            }
        }

        @keyframes fadeOutUpBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(0, -2000px, 0);
            }
        }

        @keyframes flip {
            from {
                transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
                animation-timing-function: ease-out;
            }

            40% {
                transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                animation-timing-function: ease-out;
            }

            50% {
                transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                animation-timing-function: ease-in;
            }

            80% {
                transform: perspective(400px) scale3d(.95, .95, .95);
                animation-timing-function: ease-in;
            }

            to {
                transform: perspective(400px);
                animation-timing-function: ease-in;
            }
        }

        @keyframes flipInX {
            from {
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                animation-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                animation-timing-function: ease-in;
            }

            60% {
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }

            80% {
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            }

            to {
                transform: perspective(400px);
            }
        }

        @keyframes flipInY {
            from {
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                animation-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                animation-timing-function: ease-in;
            }

            60% {
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                opacity: 1;
            }

            80% {
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            }

            to {
                transform: perspective(400px);
            }
        }

        @keyframes flipOutX {
            from {
                transform: perspective(400px);
            }

            30% {
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                opacity: 1;
            }

            to {
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                opacity: 0;
            }
        }

        @keyframes flipOutY {
            from {
                transform: perspective(400px);
            }

            30% {
                transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                opacity: 1;
            }

            to {
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                opacity: 0;
            }
        }

        @keyframes lightSpeedIn {
            from {
                transform: translate3d(100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }

            60% {
                transform: skewX(20deg);
                opacity: 1;
            }

            80% {
                transform: skewX(-5deg);
                opacity: 1;
            }

            to {
                transform: none;
                opacity: 1;
            }
        }

        @keyframes lightSpeedOut {
            from {
                opacity: 1;
            }

            to {
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
        }

        @keyframes rotateIn {
            from {
                transform-origin: center;
                transform: rotate3d(0, 0, 1, -200deg);
                opacity: 0;
            }

            to {
                transform-origin: center;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateInDownLeft {
            from {
                transform-origin: left bottom;
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }

            to {
                transform-origin: left bottom;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateInDownRight {
            from {
                transform-origin: right bottom;
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            to {
                transform-origin: right bottom;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateInUpLeft {
            from {
                transform-origin: left bottom;
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            to {
                transform-origin: left bottom;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateInUpRight {
            from {
                transform-origin: right bottom;
                transform: rotate3d(0, 0, 1, -90deg);
                opacity: 0;
            }

            to {
                transform-origin: right bottom;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateOut {
            from {
                transform-origin: center;
                opacity: 1;
            }

            to {
                transform-origin: center;
                transform: rotate3d(0, 0, 1, 200deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownLeft {
            from {
                transform-origin: left bottom;
                opacity: 1;
            }

            to {
                transform-origin: left bottom;
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownRight {
            from {
                transform-origin: right bottom;
                opacity: 1;
            }

            to {
                transform-origin: right bottom;
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpLeft {
            from {
                transform-origin: left bottom;
                opacity: 1;
            }

            to {
                transform-origin: left bottom;
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpRight {
            from {
                transform-origin: right bottom;
                opacity: 1;
            }

            to {
                transform-origin: right bottom;
                transform: rotate3d(0, 0, 1, 90deg);
                opacity: 0;
            }
        }

        @keyframes hinge {
            0% {
                transform-origin: top left;
                animation-timing-function: ease-in-out;
            }

            20%,
            60% {
                transform: rotate3d(0, 0, 1, 80deg);
                transform-origin: top left;
                animation-timing-function: ease-in-out;
            }

            40%,
            80% {
                transform: rotate3d(0, 0, 1, 60deg);
                transform-origin: top left;
                animation-timing-function: ease-in-out;
                opacity: 1;
            }

            to {
                transform: translate3d(0, 700px, 0);
                opacity: 0;
            }
        }

        @keyframes jackInTheBox {
            from {
                opacity: 0;
                transform: scale(0.1) rotate(30deg);
                transform-origin: center bottom;
            }

            50% {
                transform: rotate(-10deg);
            }

            70% {
                transform: rotate(3deg);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes rollIn {
            from {
                opacity: 0;
                transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes rollOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale3d(.3, .3, .3);
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes zoomInDown {
            from {
                opacity: 0;
                transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomInLeft {
            from {
                opacity: 0;
                transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomInRight {
            from {
                opacity: 0;
                transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomInUp {
            from {
                opacity: 0;
                transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomOut {
            from {
                opacity: 1;
            }

            50% {
                opacity: 0;
                transform: scale3d(.3, .3, .3);
            }

            to {
                opacity: 0;
            }
        }

        @keyframes zoomOutDown {
            40% {
                opacity: 1;
                transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            to {
                opacity: 0;
                transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
                transform-origin: center bottom;
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomOutLeft {
            40% {
                opacity: 1;
                transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            }

            to {
                opacity: 0;
                transform: scale(.1) translate3d(-2000px, 0, 0);
                transform-origin: left center;
            }
        }

        @keyframes zoomOutRight {
            40% {
                opacity: 1;
                transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            }

            to {
                opacity: 0;
                transform: scale(.1) translate3d(2000px, 0, 0);
                transform-origin: right center;
            }
        }

        @keyframes zoomOutUp {
            40% {
                opacity: 1;
                transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            to {
                opacity: 0;
                transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
                transform-origin: center bottom;
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes slideInDown {
            from {
                transform: translate3d(0, -100%, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInRight {
            from {
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInUp {
            from {
                transform: translate3d(0, 100%, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideOutDown {
            from {
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                transform: translate3d(0, 100%, 0);
            }
        }

        @keyframes slideOutLeft {
            from {
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes slideOutRight {
            from {
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                transform: translate3d(100%, 0, 0);
            }
        }

        @keyframes slideOutUp {
            from {
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                transform: translate3d(0, -100%, 0);
            }
        }
    </style>
    <link href="css/A.style.css_qv4.pagespeed.cf.4T96sv0Hx2.css" rel="stylesheet" data-pagespeed-lsc-url="https://c.cardiotensive-new.com/css/style.css?v4">
    <script>
        if (!window.jQuery) {
            document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><\/script>');
        }
    </script>
    <script>
        var country = 'SK',
            user_country = 'RU',
            lang = 'sk',
            host = 'c.cardiotensive-new.com',
            tmp_data_to_server = '/',
            tmp_data_request_id = '86c08b324f49bb3bff7f6db415a71fdb',
            country_list = {
                "BG": {
                    "s1": 69,
                    "s2": 0,
                    "s3": 69,
                    "s4": 138,
                    "discount": "50",
                    "curr": "BGN",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "CZ": {
                    "s1": 920,
                    "s2": 0,
                    "s3": 920,
                    "s4": 1840,
                    "discount": "50",
                    "curr": "CZK",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "DE": {
                    "s1": 39,
                    "s2": 0,
                    "s3": 39,
                    "s4": 78,
                    "discount": "50",
                    "curr": "Euro",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "ES": {
                    "s1": 39,
                    "s2": 0,
                    "s3": 39,
                    "s4": 78,
                    "discount": "50",
                    "curr": "Euro",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "GR": {
                    "s1": 39,
                    "s2": 0,
                    "s3": 39,
                    "s4": 78,
                    "discount": "50",
                    "curr": "Euro",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "HU": {
                    "s1": 11400,
                    "s2": 0,
                    "s3": 11400,
                    "s4": 22800,
                    "discount": "50",
                    "curr": "HUF",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "IT": {
                    "s1": 39,
                    "s2": 0,
                    "s3": 39,
                    "s4": 78,
                    "discount": "50",
                    "curr": "Euro",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "PL": {
                    "s1": 155,
                    "s2": 0,
                    "s3": 155,
                    "s4": 310,
                    "discount": "50",
                    "curr": "PLN",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "RO": {
                    "s1": 159,
                    "s2": 0,
                    "s3": 159,
                    "s4": 318,
                    "discount": "50",
                    "curr": "RON",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                },
                "SK": {
                    "s1": 39,
                    "s2": 0,
                    "s3": 39,
                    "s4": 78,
                    "discount": "50",
                    "curr": "Euro",
                    "specialfields": [],
                    "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E",
                    "campaign": "6678",
                    "company": "249"
                }
            };
        var list_of_parameters = {
            "language": "sk",
            "offer_id": "7865",
            "landing": "20749",
            "campaign": "6678",
            "order_source": "1",
            "request_id": "86c08b324f49bb3bff7f6db415a71fdb",
            "return_url": "https:\/\/c.cardiotensive-new.com"
        };
        var action_url = 'https://trackerlead.biz/';
        var source_popup_operator = '13';
        var source_popup_out = '12';
        var isJsonEnable = false;
        var text_item_is_free = 'zadarmo';
        var KMAText = {
            'validation_name': 'Určite správny názov.',
            'validation_phone1': 'Toto telefónne číslo môže obsahovať len číslice, \"+\", \"-\", \"(\", \")\" a medzery.',
            'validation_phone2': 'Váš telefón je príliš malá čísla.',
            'validation_phone3': 'Váš telefón príliš veľa číslic.',
            'comebacker_text': 'POZOR'
        };
    </script>
    <script src="shared_files/js/custom-functions2.min_28.js" defer=""></script>
    <script>
        $(function() {
            KMA.initCallback(30000);
            KMA.initComebacker(0);
            KMA.checkAndSetCountryField(country);
            KMA.changeDataCountry(country);
            KMA.changeDataNotCountry(country);
            KMA.validateAndSendForm(isJsonEnable, KMAText);
        });
    </script>
    <link rel="dns-prefetch" href="//nothingimportant.pro">
    <link rel="dns-prefetch" href="//cdnkma.biz">
    <script data-pagespeed-no-defer="">
        (function() {
            function f(a, b, d) {
                if (a.addEventListener) a.addEventListener(b, d, !1);
                else if (a.attachEvent) a.attachEvent("on" + b, d);
                else {
                    var c = a["on" + b];
                    a["on" + b] = function() {
                        d.call(this);
                        c && c.call(this)
                    }
                }
            };
            window.pagespeed = window.pagespeed || {};
            var g = window.pagespeed;

            function k(a) {
                this.g = [];
                this.f = 0;
                this.h = !1;
                this.j = a;
                this.i = null;
                this.l = 0;
                this.b = !1;
                this.a = 0
            }

            function l(a, b) {
                var d = b.getAttribute("data-pagespeed-lazy-position");
                if (d) return parseInt(d, 0);
                var d = b.offsetTop,
                    c = b.offsetParent;
                c && (d += l(a, c));
                d = Math.max(d, 0);
                b.setAttribute("data-pagespeed-lazy-position", d);
                return d
            }

            function m(a, b) {
                var d, c, e;
                if (!a.b && (0 == b.offsetHeight || 0 == b.offsetWidth)) return !1;
                a: if (b.currentStyle) c = b.currentStyle.position;
                    else {
                        if (document.defaultView && document.defaultView.getComputedStyle && (c = document.defaultView.getComputedStyle(b, null))) {
                            c = c.getPropertyValue("position");
                            break a
                        }
                        c = b.style && b.style.position ? b.style.position : ""
                    }
                if ("relative" == c) return !0;
                e = 0;
                "number" == typeof window.pageYOffset ? e = window.pageYOffset : document.body && document.body.scrollTop ? e = document.body.scrollTop : document.documentElement &&
                    document.documentElement.scrollTop && (e = document.documentElement.scrollTop);
                d = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                c = e;
                e = e + d;
                var h = b.getBoundingClientRect();
                h ? (e = h.top - d, c = h.bottom) : (h = l(a, b), d = h + b.offsetHeight, e = h - e, c = d - c);
                return e <= a.f && 0 <= c + a.f
            }
            k.prototype.m = function(a) {
                p(a);
                var b = this;
                window.setTimeout(function() {
                    var d = a.getAttribute("data-pagespeed-lazy-src");
                    if (d)
                        if ((b.h || m(b, a)) && -1 != a.src.indexOf(b.j)) {
                            var c = a.parentNode,
                                e = a.nextSibling;
                            c && c.removeChild(a);
                            a.c && (a.getAttribute = a.c);
                            a.removeAttribute("onload");
                            a.tagName && "IMG" == a.tagName && g.CriticalImages && f(a, "load", function() {
                                g.CriticalImages.checkImageForCriticality(this);
                                b.b && (b.a--, 0 == b.a && g.CriticalImages.checkCriticalImages())
                            });
                            a.removeAttribute("data-pagespeed-lazy-src");
                            a.removeAttribute("data-pagespeed-lazy-replaced-functions");
                            c && c.insertBefore(a, e);
                            if (c = a.getAttribute("data-pagespeed-lazy-srcset")) a.srcset = c, a.removeAttribute("data-pagespeed-lazy-srcset");
                            a.src = d
                        } else b.g.push(a)
                }, 0)
            };
            k.prototype.loadIfVisibleAndMaybeBeacon = k.prototype.m;
            k.prototype.s = function() {
                this.h = !0;
                q(this)
            };
            k.prototype.loadAllImages = k.prototype.s;

            function q(a) {
                var b = a.g,
                    d = b.length;
                a.g = [];
                for (var c = 0; c < d; ++c) a.m(b[c])
            }

            function t(a, b) {
                return a.a ? null != a.a(b) : null != a.getAttribute(b)
            }
            k.prototype.u = function() {
                for (var a = document.getElementsByTagName("img"), b = 0, d; d = a[b]; b++) t(d, "data-pagespeed-lazy-src") && p(d)
            };
            k.prototype.overrideAttributeFunctions = k.prototype.u;

            function p(a) {
                t(a, "data-pagespeed-lazy-replaced-functions") || (a.c = a.getAttribute, a.getAttribute = function(a) {
                    "src" == a.toLowerCase() && t(this, "data-pagespeed-lazy-src") && (a = "data-pagespeed-lazy-src");
                    return this.c(a)
                }, a.setAttribute("data-pagespeed-lazy-replaced-functions", "1"))
            }
            g.o = function(a, b) {
                function d() {
                    if (!(c.b && a || c.i)) {
                        var b = 200;
                        200 < (new Date).getTime() - c.l && (b = 0);
                        c.i = window.setTimeout(function() {
                            c.l = (new Date).getTime();
                            q(c);
                            c.i = null
                        }, b)
                    }
                }
                var c = new k(b);
                g.lazyLoadImages = c;
                f(window, "load", function() {
                    c.b = !0;
                    c.h = a;
                    c.f = 200;
                    if (g.CriticalImages) {
                        for (var b = 0, d = document.getElementsByTagName("img"), r = 0, n; n = d[r]; r++) - 1 != n.src.indexOf(c.j) && t(n, "data-pagespeed-lazy-src") && b++;
                        c.a = b;
                        0 == c.a && g.CriticalImages.checkCriticalImages()
                    }
                    q(c)
                });
                0 != b.indexOf("data") && ((new Image).src =
                    b);
                f(window, "scroll", d);
                f(window, "resize", d)
            };
            g.lazyLoadInit = g.o;
        })();

        pagespeed.lazyLoadInit(true, "/pagespeed_static/1.JiBnMqyl6S.gif");
    </script>
     <?php $cms->header(); ?>
</head>

<body style="outline: none;" spellcheck="true">
    <div class="preloader-background" style="display: none;">
        <div class="preloader-wrapper big active" style="display: none;">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"><br></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"><br></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"><br></div>
                </div>
            </div>
        </div>
    </div>
    <p>
        <main>
            <header>
                <br>
                <br>
                <div class="container">
                    <div class="row m-0">
                        <div class="col xl12 l12 m12 s12">
                            <div class="headerContent">
                                <div class="logoBox img_box"><img alt="" src="images/xlogo.png.pagespeed.ic.N0b4Qp4Kgp.webp"><span style="font-size: 12px;">&nbsp;HYPERTON FORTE&nbsp;</span></div>
                                <div class="headerContent-items">
                                    <div class="headerItem">
                                        <div class="headerItem-icon"><img alt="" src="images/xheaderIcon_01.png.pagespeed.ic.GC3CoKtfc_.webp"></div>
                                        <div class="headerItem-text"> 100 % organické </div>
                                    </div>
                                    <div class="headerItem">
                                        <div class="headerItem-icon"><img alt="" src="images/xheaderIcon_02.png.pagespeed.ic.JnMfl4Gt2G.webp"></div>
                                        <div class="headerItem-text"> Dnes si objednalo 3 567 ľudí </div>
                                    </div>
                                </div><a class="headerButton obutton" href="#"> Zarezervujte si hovor </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="block_01">
                <div class="container">
                    <div class="row">
                        <div class="col xl10 offset-xl1 l12 m12 s12">
                            <div class="block_01-title">&nbsp;HYPERTON FORTE&nbsp;– normálny krvný tlak od prvého použitia. Trvalé výsledky.
                            </div>
                            <div class="block_01-subtitle"> Ovplyvňuje príčinu ochorenia tým, že znižuje riziko mŕtvice a srdcového
                                infarktu na nulu! </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col xl4 l4 m12 s12">
                            <div class="plusesItem dflex">
                                <div class="img_box plusesItem-icon"><img alt="" src="images/xplusIco_01.png.pagespeed.ic._4Gdn2KhzV.webp"></div>
                                <div class="plusesItem-text"> Normalizuje krvný tlak vďaka tiosulfinátom z medvedieho cesnaku </div>
                            </div>
                            <div class="plusesItem dflex">
                                <div class="img_box plusesItem-icon"><img alt="" src="images/xplusIco_02.png.pagespeed.ic._BPRe-pK4U.webp"></div>
                                <div class="plusesItem-text"> Obnovuje tonus a elasticitu krvných ciev v 1 ošetrení </div>
                            </div>
                            <div class="plusesItem dflex">
                                <div class="img_box plusesItem-icon"><img alt="" src="images/xplusIco_7.png.pagespeed.ic.W7YGYvi-P6.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                <div class="plusesItem-text"> Bezpečný pre všetky vekové kategórie, účinný v prvom, druhom a treťom štádiu
                                    hypertenzie </div>
                            </div>
                        </div>
                        <div class="col xl4 l4 m6 s12">
                            <div class="img_box productBox">
                                <script type="text/javascript" data-pagespeed-no-defer="">
                                    pagespeed.lazyLoadImages.overrideAttributeFunctions();
                                </script>
                                <script data-pagespeed-no-defer="">
                                    window['pagespeed'] = window['pagespeed'] || {};
                                    var pagespeed = window['pagespeed'];
                                    pagespeed.switchToHighResAndMaybeBeacon = function(elem) {
                                        setTimeout(function() {
                                            elem.onload = null;
                                            var srcset = elem.getAttribute('data-pagespeed-high-res-srcset');
                                            if (srcset) {
                                                elem.srcset = srcset;
                                            }
                                            elem.src = elem.getAttribute('data-pagespeed-high-res-src');
                                            if (pagespeed.CriticalImages) {
                                                elem.onload = pagespeed.CriticalImages.checkImageForCriticality(elem);
                                            }
                                        }, 0);
                                    };
                                </script><img alt="" data-pagespeed-high-res-src="images/DM_NormCaps_blister_box_3D.png" src="images/DM_NormCaps_blister_box_3D.png" onload="pagespeed.switchToHighResAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);">﻿
                                <div class="obj saleBox">
                                    <span><?=$cms->discount;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col xl4 l4 m6 s12">
                            <div class="formBox">
                                <div class="dflex formBox-header">
                                    <div class="formBox-header__text"> Počet balíčkov je obmedzený: </div>
                                    <div class="valign-wrapper formBox-header__count">
                                        <div><span class="countBox"> 18 </span><br><b> ks </b></div>
                                    </div>
                                </div>
                                <div class="formBox-content">
                                    <div class="dflex priceBox">
                                        <div class="priceBox-item">
                                            <div class="oldPrice">
                                                <div class="priceBox-title"> Plná cena: </div>
                                                <div class="priceBox-info"><span class="old old_1"><?=$cms->oldpr;?> </span></div>
                                            </div>
                                        </div>
                                        <div class="priceBox-item">
                                            <div class="newPrice">
                                                <div class="priceBox-title"> Znížená cena: </div>
                                                <div class="priceBox-info"><span class="new new_1"><?=$cms->price;?> eur </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orderForm">
                                        <form action="" method="POST">
                                            <?=$cms->params();?>
                                            <div class="input-field"><select name="country" class="country_select" style="display: block;">
                                                    <option value="BG">Bulharsko</option>
                                                    <option value="CZ">Česká republika</option>
                                                    <option value="DE">Nemecko</option>
                                                    <option value="ES">Španielsko</option>
                                                    <option value="GR">Grécko</option>
                                                    <option value="HU">Maďarsko</option>
                                                    <option value="IT">Taliansko</option>
                                                    <option value="PL">Poľsko</option>
                                                    <option value="RO">Rumunsko</option>
                                                    <option value="SK" selected="">Slovensko</option>
                                                </select>
                                            </div>
                                            <div class="input-field"><input id="name" name="name" required="" placeholder="Zadajte svoje meno" type="text" oldvalue="">
                                            </div>
                                            <input type="hidden" name="country" value="<?=$cms->country;?>" />
                                            <div class="input-field"><input class="only_number" required="" id="phone" name="phone" placeholder="Zadajte svoje telefónne číslo" type="tel" oldvalue=""></div>
                                            <div class="buttonBox"><button class="waves-effect btn red js_submit button__text customBtn pulse" type="submit"> Objednať </button></div>
                                            <div class="nw"><img style="max-width:45px; width:100%" src="images/xnw.png.pagespeed.ic.Lx1PLjgKqB.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"> <span> Overte si cenu doručenia u operátora</span></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_02">
                <div class="container">
                    <div class="obj objBox1"><img alt="" class="lazy" src="images/xmen.png.pagespeed.ic.D_RJm_aAG7.webp"></div>
                    <div class="row m-0">
                        <div class="col xl8 l8 m12 s12">
                            <div class="block_02-title"><span> Skontrolujte si svoj zdravotný stav! </span> Máte aspoň jeden z
                                nasledujúcich príznakov? </div>
                            <div class="dflex symptomBox">
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Bolesť hlavy </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Zvýšená srdcová frekvencia </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Tmavé škvrny vo vašom zornom poli (plávajúce) </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Chronická únava </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Apatia, podráždenie, ospalosť </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Edém tváre </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Rozmazané videnie </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Necitlivé a studené prsty </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Nadmerné potenie </div>
                                </div>
                                <div class="dflex symptomBox-item">
                                    <div class="symptomItem-icon"><img alt="" src="images/xattantion.png.pagespeed.ic.X--Vt4-2I2.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="symptomItem-text"> Náhle zmeny krvného tlaku </div>
                                </div>
                            </div>
                            <div class="bannerBox">
                                <div class="bannerBox-title"> JE TO HYPERTENZIA! </div>
                                <div class="bannerBox-text"><span> Dôležité! </span> 67% pacientov s hypertenziou na Slovensku si vôbec
                                    neuvedomuje, že sú chorí. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_03">
                <div class="container">
                    <div class="row">
                        <div class="col xl10 offset-xl1 l12 m12 s12">
                            <div class="block_03-title"> Prečo je hypertenzia nebezpečná? </div>
                            <div class="block_03-subtitle center-align"><i> Následky vysokého krvného tlaku sú nebezpečnejšie ako
                                    onkologické ochorenia a tuberkulóza dohromady. 89% prípadov hypertenzie končí srdcovým infarktom.
                                    Trombóza sa vyskytuje v krvných cievach. Riziko krvácania do mozgu a mŕtvice je vysoké. </i></div>
                            <div class="block_03-subtitle"> Obzvlášť nebezpečné sú následky fajčenia, alkoholu, zlej výživy, sedavého
                                spôsobu života, stresu a vysokého cholesterolu. Ľudia s nadváhou trpia hypertenziou 3-4 krát častejšie ako
                                ľudia s normálnou hmotnosťou. </div>
                            <div class="bannerBox">
                                <div class="bannerBox-title"> DÔLEŽITÉ! </div>
                                <div class="bannerBox-text"> Hypertenzia postupuje rýchlo; jeden z piatich pacientov je vystavený riziku
                                    smrti. Okamžite začnite s liečbou a buďte úplne zdraví.&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_05">
                <div class="container">
                    <div class="row">
                        <div class="col xl12 l12 m12 s12">
                            <div class="block_05-title">&nbsp;HYPERTON FORTE&nbsp; odstraňuje 5 základných príčin hypertenzie </div>
                            <div class="dflex causesBox">
                                <div class="causesBox-item">
                                    <div class="causesBox-icon img_box"><img alt="" src="images/xcause_01.png.pagespeed.ic.OefuQ50lj_.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="causesBox-title"> Preťažený nervový systém (stres, nespavosť atď.) </div>
                                    <div class="causesBox-text">&nbsp;HYPERTON FORTE&nbsp; upokojuje a znižuje pocit napätia vďaka horčíku v zložení
                                    </div>
                                </div>
                                <div class="causesBox-item">
                                    <div class="causesBox-icon img_box"><img alt="" src="images/xcause_02.png.pagespeed.ic.YUwMqduBbE.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="causesBox-title"> Cholesterol v cievach </div>
                                    <div class="causesBox-text">&nbsp;HYPERTON FORTE&nbsp; posilňuje krvné cievy a znižuje hladinu cholesterolu vďaka
                                        alicínu – aktívnemu tiosulfinátu z medvedieho cesnaku. </div>
                                </div>
                                <div class="causesBox-item">
                                    <div class="causesBox-icon img_box"><img alt="" src="images/xcause_03.png.pagespeed.ic.u_YxfBv8-b.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="causesBox-title"> Kŕčové žily a trombóza </div>
                                    <div class="causesBox-text"> Vitamín E v &nbsp;HYPERTON FORTE&nbsp; CAPS zlepšuje venózny obeh a rozpúšťa krvné zrazeniny.
                                    </div>
                                </div>
                                <div class="causesBox-item">
                                    <div class="causesBox-icon img_box"><img alt="" src="images/xcause_04.png.pagespeed.ic.Z_aC-S3oHs.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="causesBox-title"> Vysoká hladina cukru v krvi </div>
                                    <div class="causesBox-text">&nbsp;HYPERTON FORTE&nbsp; mierne znižuje hladinu cukru v krvi vďaka monohydrátu laktózy
                                    </div>
                                </div>
                                <div class="causesBox-item">
                                    <div class="causesBox-icon img_box"><img alt="" src="images/xcause_05.png.pagespeed.ic.WrDI4PoS28.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="causesBox-title"> Obezita </div>
                                    <div class="causesBox-text"> Doplnkové zložky v &nbsp;HYPERTON FORTE&nbsp; zlepšujú metabolizmus a umožňujú
                                        normalizáciu
                                        telesnej hmotnosti. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_06">
                <div class="container">
                    <div class="obj objBox2"><img alt="" class="lazy" src="images/xexpert.png.pagespeed.ic.denAEeqcpj.webp"></div>
                    <div class="row m-0">
                        <div class="col xl8 offset-xl4 l10 offset-l2 m12 s12">
                            <div class="block_06-title"> Odborný názor </div>
                            <div class="block_06-text"> Potvrdzujem! </div>
                            <div class="block_06-text"> Hlavným bojovníkom proti hypertenzii je alicín, ktorý sa nachádza v medvediem
                                cesnaku (ramsons). Pridáva sa takmer do všetkých produktov na podporu kardiovaskulárneho systému. </div>
                            <div class="block_06-text"> Jeho koncentrácia v nich je ale taká malá, že na výsledok môžete čakať aj
                                niekoľko rokov. </div>
                            <div class="block_06-text"> Najväčšie množstvo alicínu sa nachádza v kapsulách   &nbsp;HYPERTON FORTE&nbsp; . Videl som
                                receptúru tohto produktu a prečítal som si recenzie nezávislých odborníkov a vplyvných vedcov. Preto
                                odporúčam tento doplnok stravy všetkým pacientom a varujem ich pred všetkými nebezpečenstvami samoliečby,
                                pretože užívajú podozrivé lieky, „ktoré im poradil kamarát“, „ktoré našli na internete“ alebo „videli v
                                televíznej reklame“. </div>
                            <div class="block_06-text"> To je zle! S hypertenziou by ste mali bojovať iba bezpečnými metódami! Takými,
                                ktorým lekári veria a vďaka ktorým vaša choroba navždy zmizne. </div>
                            <div class="expertName"><span> Juraj Kovalík </span> M.D. </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_07">
                <div class="container">
                    <div class="row">
                        <div class="col xl10 offset-xl1 l12 m6 offset-m4 s12">
                            <div class="dflex customForm">
                                <div class="customForm-item">
                                    <div class="saleBox">
                                        <span><?=$cms->discount;?></span>
                                    </div>
                                    <div class="dflex customForm-header">
                                        <div class="formBox-header__text"> Počet balíčkov je obmedzený: </div>
                                        <div class="valign-wrapper formBox-header__count">
                                            <div><span class="countBox"> 18 </span><br><b> ks </b></div>
                                        </div>
                                    </div>
                                    <div class="dflex priceBox">
                                        <div class="priceBox-item">
                                            <div class="oldPrice">
                                                <div class="priceBox-title"> Plná cena: </div>
                                                <div class="priceBox-info"><span class="old old_1"><span class="price_land_s4"><?=$cms->oldpr;?></span> <span class="price_land_curr">Euro</span> </span></div>
                                            </div>
                                        </div>
                                        <div class="priceBox-item">
                                            <div class="newPrice">
                                                <div class="priceBox-title"> Znížená cena: </div>
                                                <div class="priceBox-info"><span class="new new_1"><span class="price_land_s1"><?=$cms->price;?></span> <span class="price_land_curr">Euro</span> </span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="customForm-item">
                                    <div class="img_box productBox"><img alt="" data-pagespeed-high-res-src="images/DM_NormCaps_blister_box_3D.png" src="images/DM_NormCaps_blister_box_3D.png" onload="pagespeed.switchToHighResAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);"><img alt="" class="obj objArrow" src="images/xarrow.png.pagespeed.ic.OYqX0_bBly.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                </div>
                                <div class="customForm-item">
                                    <div class="customForm-title"> Zadajte svoje údaje do formulára nižšie: </div>
                                    <form action="" method="POST">
                                        <?=$cms->params();?>
                                        <div class="input-field"><select name="country" class="country_select" style="display: block;">
                                                <option value="BG">Bulharsko</option>
                                                <option value="CZ">Česká republika</option>
                                                <option value="DE">Nemecko</option>
                                                <option value="ES">Španielsko</option>
                                                <option value="GR">Grécko</option>
                                                <option value="HU">Maďarsko</option>
                                                <option value="IT">Taliansko</option>
                                                <option value="PL">Poľsko</option>
                                                <option value="RO">Rumunsko</option>
                                                <option value="SK" selected="">Slovensko</option>
                                            </select>
                                        </div>
                                        <div class="input-field"><input id="name" name="name" required="" placeholder="Zadajte svoje meno" type="text" oldvalue="">
                                        </div>
                                        <div class="input-field"><input class="only_number" required="" id="phone" name="phone" placeholder="Zadajte svoje telefónne číslo" type="tel" oldvalue=""></div>
                                        <input type="hidden" name="country" value="<?=$cms->country;?>" />
                                        <div class="buttonBox"><button class="waves-effect btn red js_submit button__text customBtn pulse" type="submit"> Objednať </button></div>
                                        <div class="nw"><img style="max-width:45px; width:100%" src="images/xnw.png.pagespeed.ic.Lx1PLjgKqB.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"> <span> Overte si cenu
                                                doručenia u operátora</span></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_08">
                <div class="container">
                    <div class="row">
                        <div class="col xl10 offset-xl1 l12 m12 s12">
                            <div class="block_08-title"> Účinnosť &nbsp;HYPERTON FORTE&nbsp; © bola preukázaná klinickými skúškami </div>
                            <div class="bannerBox-text">
                                <div> Klinické testy boli vykonané v nemocnici v Newcastli v roku 2022. </div>
                                <div> Na klinických skúškach, ktoré trvali 25 dní, sa zúčastnili dve skupiny dobrovoľníkov. </div>
                                <div> Prvá skupina – muži a ženy vo veku 28 – 80 rokov s hypertenziou, ktorí užívali &nbsp;HYPERTON FORTE&nbsp; a druhá
                                    skupina – muži a ženy s podobným stavom, ktorí užívali placebo. </div>
                            </div>
                            <div class="block_08-title"> Výsledky výskumu </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col xl12 l12 m12 s12">
                            <div class="dflex resultBox">
                                <div class="resultBox-item">
                                    <div class="resultBox-title"> PLACEBO </div>
                                    <div class="resultBox-image img_box"><img alt="" src="images/xpeaple_left.png.pagespeed.ic.rMa62kqNdQ.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="dflex resultBox-info">
                                        <div class="resultBox-text"> Normalizácia arteriálneho tlaku </div>
                                        <div class="resultBox-percent"> 1% </div>
                                    </div>
                                    <div class="dflex resultBox-info">
                                        <div class="resultBox-text"> Zmiznutie žilovej trombózy </div>
                                        <div class="resultBox-percent"> 0% </div>
                                    </div>
                                    <div class="dflex resultBox-info">
                                        <div class="resultBox-text"> Vymiznutie arytmie </div>
                                        <div class="resultBox-percent"> 2% </div>
                                    </div>
                                </div>
                                <div class="resultBox-item">
                                    <div class="resultBox-title">  &nbsp;HYPERTON FORTE&nbsp; © </div>
                                    <div class="resultBox-image img_box"><img alt="" src="images/xpeople_right.png.pagespeed.ic.egr0fShjfx.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="dflex resultBox-info">
                                        <div class="resultBox-text"> Zmiznutie žilovej trombózy </div>
                                        <div class="resultBox-percent"> 100% </div>
                                    </div>
                                    <div class="dflex resultBox-info">
                                        <div class="resultBox-text"> Odstránenie žilovej trombózy </div>
                                        <div class="resultBox-percent"> 90% </div>
                                    </div>
                                    <div class="dflex resultBox-info">
                                        <div class="resultBox-text"> Vymiznutie arytmie </div>
                                        <div class="resultBox-percent"> 99% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_09">
                <div class="container">
                    <div class="row">
                        <div class="col xl12 l12 m12 s12">
                            <div class="block_09-title"> Ľudia spokojní s efektom &nbsp;HYPERTON FORTE&nbsp; © zdieľajú komentáre </div>
                            <div class="reviewsBox">
                                <div class="dflex reviewItem">
                                    <div class="reviewItem-avatar img_box"><img alt="" src="images/xreview_01.png.pagespeed.ic.yx1dRdHbBH.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="reviewItem-text"> Uvedomila som si, že vysoký krvný tlak vedie k ischemickej cievnej
                                        mozgovej príhode – infarktu – potom, čo som videla, ako sa to stalo mojej sestre. Lekári jej
                                        zachránili život, no nikdy sa úplne nezotavila. Keď som prvýkrát čelila tejto chorobe, už som si bola
                                        vedomá niektorých trikov a vedela som, že by som mala hľadať bylinné prípravky. Moja lekárka, múdra
                                        žena, mi predpísala   &nbsp;HYPERTON FORTE&nbsp; . Som jej vďačná. Sú to 4 roky a už nemám hypertenziu. Teraz som
                                        úplne
                                        zdravý človek, ktorý sa nebojí infarktu alebo mŕtvice. Starajte sa o svoje zdravie! <span class="authorName"> Andrea Galbavá, 61, Galanta </span></div>
                                </div>
                                <div class="dflex reviewItem">
                                    <div class="reviewItem-avatar img_box"><img alt="" src="images/xreview_02.png.pagespeed.ic.MkqRwSfSiO.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="reviewItem-text"> Pred pár rokmi som išla na liečenie do Banskej Bystrice. Tam uskutočňovali
                                        výskum nového produktu na liečbu hypertenzie. Samozrejme, mala som strach. Ale čo iné som mohla robiť?
                                        Žiadne iné lieky mi nepomohli, tak som sa rozhodla to skúsiť. Našťastie som bola v skupine, ktorá
                                        dostávala   &nbsp;HYPERTON FORTE&nbsp; , nie placebo. Po dvoch hodinách sa mi tlak vrátil do normálu. Postupne som sa
                                        začala cítiť oveľa lepšie! Som veľmi rada, že som sa zúčastnila výskumu tohto produktu. Tlak mám už v
                                        poriadku. <span class="authorName"> Júlia Niková, 47, Lučenec </span></div>
                                </div>
                                <div class="dflex reviewItem">
                                    <div class="reviewItem-avatar img_box"><img alt="" src="images/xreview_03.png.pagespeed.ic.yJcWkuE0tQ.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="reviewItem-text"> Mám 51 rokov. Pred tromi rokmi mi v našej nemocnici diagnostikovali
                                        hypertenziu. Srdcový šelest a podobne. Trpel som, ale nič som s tým nerobil. Pred šiestimi mesiacmi
                                        som mal podľa všetkých indícií mikromŕtvicu. Potom som spanikáril, ale odmietol som brať tabletky,
                                        ktoré mi predpísali. Našťastie som natrafil na starého priateľa, ktorý mi navrhol   &nbsp;HYPERTON FORTE&nbsp; .
                                        Teraz,
                                        ako môžete hádať, ma nič netrápi. Môj krvný tlak je normálny, som zdravý ako kôň! <span class="authorName"> Vlado Martinský, 51, Tŕstená </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_10">
                <div class="container">
                    <div class="row">
                        <div class="col xl10 offset-xl1 l12 m12 s12">
                            <div class="block_10-title"> Výhody &nbsp;HYPERTON FORTE&nbsp; © </div>
                            <div class="dflex productBonus">
                                <div class="bonusItem center-align">
                                    <div class="bonusItem-icon img_box"><img alt="" src="images/xbonus_01.png.pagespeed.ic.CQYmc2IK0_.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="bonusItem-title"> Rýchla pomoc </div>
                                    <div class="bonusItem-text"> V prvých 6 hodinách po užití sa tlak normalizuje! </div>
                                </div>
                                <div class="bonusItem center-align">
                                    <div class="bonusItem-icon img_box"><img alt="" src="images/xbonus_02.png.pagespeed.ic.BLnvrRzaQz.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="bonusItem-title"> Nespôsobuje náhle zmeny hodnôt krvného tlaku. </div>
                                    <div class="bonusItem-text"> Reguluje správne fungovanie srdca. </div>
                                </div>
                                <div class="bonusItem center-align">
                                    <div class="bonusItem-icon img_box"><img alt="" src="images/xbonus_03.png.pagespeed.ic.-XQBAWz3eQ.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="bonusItem-title"> Komplexné zlepšenie zdravia. </div>
                                    <div class="bonusItem-text"> Odstránenie angíny pectoris, arytmie, neurózy, zlepšenie pamäti, obnovenie
                                        schopnosti hovoriť a pohybovať sa po mŕtvici. </div>
                                </div>
                                <div class="bonusItem center-align">
                                    <div class="bonusItem-icon img_box"><img alt="" src="images/xbonus_04.png.pagespeed.ic.IFt8ipwkQS.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                    <div class="bonusItem-title"> Efektívne výsledky bez vedľajších účinkov. </div>
                                    <div class="bonusItem-text"> Bylinné zložky sú biologicky kompatibilné s ľudským telom a nespôsobujú
                                        negatívne reakcie </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_11">
                <div class="container">
                    <div class="row">
                        <div class="col xl12 l12 m12 s12">
                            <div class="howToUse valign-wrapper">
                                <div class="obj objBox3 img_box"><img alt="" class="lazy" src="images/xwomen.png.pagespeed.ic.cPKQRYZuoH.webp"></div>
                                <div class="howToUse-content">
                                    <div class="howToUse-title"> Spôsob použitia: </div>
                                    <div class="howToUse-text"> Užívajte 2 kapsulu denne 1 mesiaca. V prípade potreby kúru po 14
                                        dňoch zopakujte </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_12">
                <div class="container">
                    <div class="row">
                        <div class="col xl10 offset-xl1 l12 m7 offset-m4 s12">
                            <div class="dflex customForm">
                                <div class="customForm-item">
                                    <div class="saleBox">
                                        <span><?=$cms->discount;?></span>
                                    </div>
                                    <div class="dflex customForm-header">
                                        <div class="formBox-header__text"> Počet balíčkov je obmedzený: </div>
                                        <div class="valign-wrapper formBox-header__count">
                                            <div><span class="countBox"> 18 </span><br><b> ks </b></div>
                                        </div>
                                    </div>
                                    <div class="dflex priceBox">
                                        <div class="priceBox-item">
                                            <div class="oldPrice">
                                                <div class="priceBox-title"> Plná cena: </div>
                                                <div class="priceBox-info"><span class="old old_1"><span class="price_land_s4"><?=$cms->oldpr;?></span> <span class="price_land_curr">Euro</span> </span></div>
                                            </div>
                                        </div>
                                        <div class="priceBox-item">
                                            <div class="newPrice">
                                                <div class="priceBox-title"> Znížená cena: </div>
                                                <div class="priceBox-info"><span class="new new_1"><span class="price_land_s1"><?=$cms->price;?></span> <span class="price_land_curr">Euro</span> </span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="customForm-item">
                                    <div class="img_box productBox"><img alt="" data-pagespeed-high-res-src="images/DM_NormCaps_blister_box_3D.png" src="images/DM_NormCaps_blister_box_3D.png" onload="pagespeed.switchToHighResAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);"><img alt="" class="obj objArrow" src="images/xarrow.png.pagespeed.ic.OYqX0_bBly.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"></div>
                                </div>
                                <div class="customForm-item">
                                    <div class="customForm-title"> Zadajte svoje údaje do formulára nižšie: </div>
                                    <form action="" class="toscroll" id="order_form" method="POST">
                                        <?=$cms->params();?>
                                        <div class="input-field"><select name="country" class="country_select" style="display: block;">
                                                <option value="BG">Bulharsko</option>
                                                <option value="CZ">Česká republika</option>
                                                <option value="DE">Nemecko</option>
                                                <option value="ES">Španielsko</option>
                                                <option value="GR">Grécko</option>
                                                <option value="HU">Maďarsko</option>
                                                <option value="IT">Taliansko</option>
                                                <option value="PL">Poľsko</option>
                                                <option value="RO">Rumunsko</option>
                                                <option value="SK" selected="">Slovensko</option>
                                            </select>
                                        </div>
                                        <div class="input-field"><input id="name" name="name" required="" placeholder="Zadajte svoje meno" type="text" oldvalue="">
                                        </div>
                                        <div class="input-field"><input class="only_number" required="" id="phone" name="phone" placeholder="Zadajte svoje telefónne číslo" type="tel" oldvalue=""></div>
                                        <input type="hidden" name="country" value="<?=$cms->country;?>" />
                                        <div class="buttonBox"><button class="waves-effect btn red js_submit button__text customBtn pulse" type="submit"> Objednať </button></div>
                                        <div class="nw"><img style="max-width:45px; width:100%" src="images/xnw.png.pagespeed.ic.Lx1PLjgKqB.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1"> <span> Overte si cenu
                                                doručenia u operátora</span></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <script type="text/javascript" data-pagespeed-no-defer="">
        pagespeed.lazyLoadImages.overrideAttributeFunctions();
    </script>
    <script src="js/jquery.lazyload.min.js_jquery.easeScroll.js_main.js_qv1.pagespeed.jc.XTLZyY8lgF.js"></script>
    <script>
        $(document).ready(function() {
            try {
                moment.locale("");
                $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));
                $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));
            } catch (e) {
                console.log('moment problems!');
            }
        });
    </script>
    <div class="ac_footer">
        <span>
            <p>
                <rekv>© All rights reserved<br>2024.</rekv><br>
                <a href="#" modal="polit">Privacy Policy</a><br>
                <a href="#" modal="agreement">User Agreement</a>
            </p>
            <p><br></p>
        </span>
    </div>
    <script>
        $(document).on("click", "a:not([modal='kmacb-form'], [modal=polit], [modal=agreement], .icon-close ), .scroll, .pop-up-button", function(e) {
            $("html,body").animate({
                scrollTop: $("#order_form").offset().top - ($(window).height() - $("#order_form").outerHeight(true))
            }, 1000)
            return e.preventDefault(), !1
        });
    </script>
    <style>
        * {
            outline: 0
        }

        [class*="price_land_"] {
            font-weight: inherit;
            font-size: inherit;
            font-style: inherit;
            color: inherit
        }

        .padding {
            padding: 10px
        }

        .modal {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAeSURBVHjaYmRgYNBmIAIwMRAJRhVSRyEAAAD//wMAVdAAP0SGoHgAAAAASUVORK5CYII=);
            background-repeat: repeat;
            width: 100%;
            height: 100%;
            position: fixed;
            display: none;
            left: 0;
            top: 0
        }

        .modal {
            z-index: 900001;
            overflow: auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: #000;
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            background-color: transparent
        }

        .modal-block {
            position: relative;
            width: 600px;
            background: #fff;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, .35);
            border: 1px solid #3a87ad
        }

        .modal-block .icon-close {
            position: absolute;
            right: 0;
            margin: 15px 20px;
            z-index: 1000
        }

        .modal-block .title {
            background: #4d83c0;
            text-align: center;
            line-height: 50px;
            text-shadow: 1px 1px 0 #3a87ad;
            border-bottom: 1px solid #3a87ad;
            padding: 0 100px;
            font-size: 18px;
            color: #fff;
            width: auto;
            height: auto;
            margin: 0 !important;
            letter-spacing: 0
        }

        .modal-block .icon-close,
        .icon-close {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAlCAYAAABPsblCAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAE2SURBVHjanNPNSkNBDAXg01sYkC60m6Ir9xYURNcuWxHf/wnyHHHRpKRz8zNjIKs2HzOTc8HMkNoD2GCuFgAPAACBHgH8APiYwBYAnzJ3UOgI4Fd6BFNEZ15grvY6iPXI0V5tFPMRB8qwGAkgD9umSAL12ClFCqjHYqSA+jfJtxlAPfJVYg4UbSePRgctxXZizEBLueIME2gUiTGB3icQD3tTaA/gewKx2BnAvX2jHf5Xu5Fkj5dCRMTycc5UIyImogtERMzMPIm1mzkLTWBtNSPQDLZCrlfTHsBWiB6khzLMRbRv1p+c7C5F+hxlJ0uRKJAeZh92hRTJbh4EYOvOBFDLruZGw4HcnJRYB4UrLjEDpTkpMYHayIpTzAugm5MKU0g7QzxM2w49yY+Xj7Ao879nIsLfAI7+/zeB1j7HAAAAAElFTkSuQmCC) no-repeat;
            width: 20px;
            height: 19px;
            background-position: 0 0;
            cursor: pointer
        }

        .modal-block .icon-close:hover,
        .icon-close:hover {
            background-position: 0 -19px
        }

        .modal p {
            font-weight: normal;
            width: auto
        }

        .modal .content {
            background: #fff repeat;
            width: auto;
            overflow: hidden;
            margin: 0;
            box-shadow: none
        }

        @media screen and (max-width:767px) {
            .modal-block {
                width: 380px
            }

            .modal-block .title {
                padding: 0 50px;
                line-height: 39px
            }
        }

        @media screen and (max-width:405px) {
            .modal-block {
                width: 300px
            }

            .modal-block .title {
                padding: 0
            }
        }

        #kmacb {
            position: fixed;
            *visibility: hidden;
            display: none;
            background-color: transparent;
            width: 160px;
            height: 160px;
            z-index: 200000 !important;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            -webkit-transition: visibility .5s;
            -moz-transition: visibility .5s;
            -o-transition: visibility .5s;
            transition: visibility .5s;
            right: 15px;
            bottom: 15px
        }

        @media screen and (max-width:991px) {
            #kmacb {
                display: none !important
            }
        }

        #kmacb a {
            text-decoration: none
        }

        @-moz-keyframes kmacb__phone-circle-anim {
            0% {
                -moz-transform: rotate(0deg) scale(0.5) skew(1deg);
                opacity: .1;
                -moz-opacity: .1;
                -webkit-opacity: .1;
                -o-opacity: .1
            }

            30% {
                -moz-transform: rotate(0deg) scale(.7) skew(1deg);
                opacity: .5;
                -moz-opacity: .5;
                -webkit-opacity: .5;
                -o-opacity: .5
            }

            100% {
                -moz-transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .6;
                -moz-opacity: .6;
                -webkit-opacity: .6;
                -o-opacity: .1
            }
        }

        @-webkit-keyframes kmacb__phone-circle-anim {
            0% {
                -webkit-transform: rotate(0deg) scale(0.5) skew(1deg);
                -webkit-opacity: .1
            }

            30% {
                -webkit-transform: rotate(0deg) scale(.7) skew(1deg);
                -webkit-opacity: .5
            }

            100% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg);
                -webkit-opacity: .1
            }
        }

        @-o-keyframes kmacb__phone-circle-anim {
            0% {
                -o-transform: rotate(0deg) kscale(0.5) skew(1deg);
                -o-opacity: .1
            }

            30% {
                -o-transform: rotate(0deg) scale(.7) skew(1deg);
                -o-opacity: .5
            }

            100% {
                -o-transform: rotate(0deg) scale(1) skew(1deg);
                -o-opacity: .1
            }
        }

        @keyframes kmacb__phone-circle-anim {
            0% {
                transform: rotate(0deg) scale(0.5) skew(1deg);
                opacity: .1
            }

            30% {
                transform: rotate(0deg) scale(.7) skew(1deg);
                opacity: .5
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .1
            }
        }

        @-moz-keyframes kmacb__phone-circle-fill-anim {
            0% {
                -moz-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }

            50% {
                -moz-transform: rotate(0deg) -moz-scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -moz-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }
        }

        @-webkit-keyframes kmacb__phone-circle-fill-anim {
            0% {
                -webkit-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }

            50% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -webkit-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }
        }

        @-o-keyframes kmacb__phone-circle-fill-anim {
            0% {
                -o-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }

            50% {
                -o-transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -o-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }
        }

        @keyframes kmacb__phone-circle-fill-anim {
            0% {
                transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }
        }

        @keyframes kmacb__phone-circle-img-anim {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-moz-keyframes kmacb__phone-circle-img-anim {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                -moz-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -moz-transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -moz-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -moz-transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -moz-transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                -moz-transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-webkit-keyframes kmacb__phone-circle-img-anim {
            0% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-o-keyframes kmacb__phone-circle-img-anim {
            0% {
                -o-transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                -o-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -o-transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -o-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -o-transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -o-transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                -o-transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @keyframes kmacb__phone-circle-img-anim-hover {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-moz-keyframes kmacb__phone-circle-img-anim-hover {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-webkit-keyframes kmacb__phone-circle-img-anim-hover {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-o-keyframes kmacb__phone-circle-img-anim-hover {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        .kmacb__manager {
            width: 150px !important;
            height: 150px !important
        }

        .kmacb__manager-circle {
            background: #52aff7;
            position: absolute;
            width: 120px;
            height: 120px;
            top: 50%;
            left: 50%;
            margin-top: -60px;
            margin-left: -60px;
            border-radius: 100%
        }

        .kmacb__manager-img {
            background: center bottom no-repeat;
            position: absolute;
            width: 120px;
            height: 120px;
            top: 50%;
            left: 50%;
            margin-top: -60px;
            margin-left: -60px;
            border-radius: 100%
        }

        .kmacb__manager-man3 .kmacb__manager-img {
            background-position: 20px 100%;
            background-image: url(data:image/png;base64,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)
        }

        .kmacb__manager-woman1 .kmacb__manager-img {
            background-position: 16px 100%;
            background-image: url(data:image/png;base64,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)
        }

        .kmacb__manager-woman2 .kmacb__manager-img {
            background-position: 9px 100%;
            background-image: url(data:image/png;base64,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)
        }

        .kmacb__manager-woman3 .kmacb__manager-img {
            background-position: 17px 100%;
            background-image: url(data:image/png;base64,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)
        }

        .kmacb__manager-border {
            position: absolute;
            width: 75px;
            height: 75px;
            top: 50%;
            left: 50%;
            margin-top: -39.5px;
            margin-left: -39.5px;
            border-radius: 100%;
            border: 2px solid #ffe787;
            -webkit-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            -moz-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            -ms-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            -o-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            opacity: .8;
            transform-origin: center
        }

        @-webkit-keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        @-moz-keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        @-ms-keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        @-o-keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        @keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        .kmacb__manager-fill {
            background: #52aff7 center bottom no-repeat;
            position: absolute;
            width: 75px;
            height: 75px;
            top: 50%;
            left: 50%;
            margin-top: -37.5px;
            margin-left: -37.5px;
            border-radius: 100%;
            opacity: .5;
            -webkit-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            -moz-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            -ms-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            -o-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            transform-origin: center
        }

        @-webkit-keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        @-moz-keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        @-ms-keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        @-o-keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        @keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        .kmacb-form .modal-block {
            border: 0;
            box-shadow: none;
            font-family: Arial;
            border-radius: 10px;
            overflow: hidden;
            color: #222;
            line-height: 1.5 !important;
            width: 570px
        }

        .kmacb-form .modal-block .title {
            background: transparent;
            text-shadow: none;
            color: #222;
            font-weight: bold;
            font-size: 22px;
            border-bottom: 0;
            text-transform: none
        }

        .kmacb-form .modal-block .icon-close {
            margin: 10px
        }

        .kmacb-form .modal-block .padding {
            padding: 20px 40px 40px
        }

        .kmacb-form .modal-block p {
            font-size: 16px;
            text-align: left;
            line-height: 1.5
        }

        .kmacb-form form {
            margin: 10px 0;
            text-align: center;
            width: 100%;
            height: auto;
            background: 0;
            position: static;
            padding: 0;
            border: 0
        }

        .kmacb-form form input[type="text"],
        .kmacb-form form input[type="tel"] {
            height: 36px;
            line-height: 36px;
            color: #222;
            border: 1px solid #aaa;
            padding: 0 10px;
            width: 200px;
            display: inline-block;
            text-indent: 0;
            border-radius: 3px;
            background: #fff;
            font-size: 14px;
            font-style: normal;
            box-shadow: none;
            position: static;
            margin: 0 0 10px 0
        }

        .kmacb-form form ::-webkit-input-placeholder {
            color: #888
        }

        .kmacb-form form ::-moz-placeholder {
            color: #888
        }

        .kmacb-form form :-moz-placeholder {
            color: #888
        }

        .kmacb-form form :-ms-input-placeholder {
            color: #888
        }

        .kmacb-form form input {
            float: none
        }

        .kmacb-form form input[name="name"] {
            padding-right: 10px
        }

        .kmacb-form form input[type="submit"] {
            position: static;
            cursor: pointer;
            border: 0;
            background: #c4191c;
            color: #fff;
            font-size: 16px;
            padding: 0 10px;
            color: #fff;
            text-transform: uppercase;
            line-height: 38px;
            height: 38px;
            vertical-align: top;
            margin: 0;
            display: inline-block;
            text-indent: 0;
            text-align: center !important;
            border-radius: 3px;
            font-style: normal;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            width: auto;
            opacity: 1
        }

        .kmacb-form form input[type="submit"]:hover {
            background: #dd070b;
            text-decoration: none
        }

        .kmacb-form2 .modal-block {
            font-family: sans-serif
        }

        .kmacb-form2 .modal-block {
            width: 300px;
            border-radius: 5px
        }

        .kmacb-form2 .modal-block .title {
            padding: 0;
            text-align: center;
            line-height: 100px;
            position: relative;
            color: #fff;
            text-transform: uppercase;
            background: #1c70d8;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px
        }

        .kmacb-form2 .modal-block .padding {
            padding: 30px
        }

        .kmacb-form2 .modal-block p {
            color: rgba(0, 0, 0, .75);
            line-height: 1.5;
            font-size: 16px
        }

        .kmacb-form2 form {
            margin: 30px 0
        }

        .kmacb-form2 form * {
            box-sizing: border-box
        }

        .kmacb-form form input[type="text"],
        .kmacb-form form input[type="tel"] {
            border: 2px solid #bdbdbd;
            height: 56px;
            line-height: 56px;
            width: 100%;
            padding: 0 15px;
            font-size: 20px
        }

        .kmacb-form form input[type="submit"] {
            width: 100%;
            background: #f13650;
            height: 80px;
            line-height: 80px;
            border-radius: 40px;
            color: #fff;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: bold;
            margin-top: 10px
        }

        .kmacb-form .kmacb-form-clock {
            line-height: 33px !important;
            padding-left: 46px;
            background: left center no-repeat url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB1FBMVEUAAAAccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgccNgAAABYvV2EAAAAmnRSTlMASOTypROmDB19exxQqqhTRc/ClHRebO7LSXzFEJNbDx96YUIWQLWJugUCs/pad9tkPPDZ+P2rBLLVJmrfKNQ1h+EOVtf+OQgqwXNYvulrnOsnhX5vA12KHnLs0bdiKbS5TGfImkpcTYblvGai9ffobsNHixsiJCUguFKXVfMJ9jOvC/T8B7144OYyf4HJRjA4Bg3KLWDYxIg7O/klpgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAHGSURBVCjPdZJnWxNBFIUvgQQ7xSyKYkBKNBEDGNSgAlJCMTYUBdRgRBEVCdYYG1iwNxTr+2ud7C67IWzOh9kz552997nPjEiWClyFha4CyacilIryYrcHPO58tHjNWli3vtgRbtiIqU0lq2BpmcrLN3u1Cs8W2Fopsm17lUV3qMhXLVKzs7auvsEPu2Q3roABg3to3Ku7kKrR1Bxs2Ue4df+BgwaO0HbIcIf15kfapQM6zcpH6eqWbAw90kuzEbUTrZEcTF8/DOjRIMdkFUZiHM8kA5yw5ztp4VNymiGVnOGsjYctzLnzjIiMhvVDpobGLixjX5CL9VJHq01Dl+Ljl9uUOsIkVPUrMsFVi2rqp2uT1zVNi0/duBm8xbR48Vv4dqbozEwymWycHS0JRLgj09y18D1F7z94mEqlHqXV9jFe8dFk937ytCLrFrt4Jp3PqRJHzTH/QgIvqXTGkyReicSJOGM/MbX2vybtRNMsvDGewFsnPMg7/Rt4b5oVGuOD6cZhIpfWwsdlH4NPK+ln1MyWpuBLg739Wp55Tln6poKy4UX397kfi6ElWPqZ0+xXr34f0cz62+cwSctIYpao68/ff3b2H7s/pj40Vyv4AAAAAElFTkSuQmCC)
        }

        .kmacb-form .kmacb-form-rectangle {
            position: absolute;
            width: 48px;
            height: 24px;
            bottom: -12px;
            left: 50%;
            margin-left: -24px;
            background: center bottom no-repeat url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAD1BMVEUAAAAccNgccNgccNgAAADkVgQwAAAAA3RSTlMAf4C/aSLHAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAKVJREFUOMt10dENwyAMRVGHCSp5gUqdwLD/biWEgG3e8ydXRwIssuf6CB41fH61hom2ZgRgoncwAhDRJxgBJ9E3GAGZ6A5GQCTqgxHgicZgBGyiORgBL9EzGAEPURSMgJsoDiY/HKoUHL6CSe23KgRAUsfLCwGA1Pm7hYCD1LXBQkAiGyTiQCAeBBKAIxE4ksAiGSxygElOMAkAgyAwCASdYNCJB38O5XLBE8oM+gAAAABJRU5ErkJggg==)
        }

        #agreement .title {
            line-height: 1.3;
            padding-top: 15px;
            padding-bottom: 15px
        }

        #agreement .content {
            line-height: 1.5;
            font-size: 12px
        }

        #agreement .content p {
            margin-bottom: 20px;
            font-size: 12px
        }

        #agreement .content p.no-margin {
            margin: 0
        }

        rekv {
            display: inline-block;
            font-size: 12px
        }

        select,
        button,
        input[type="submit"] {
            -webkit-appearance: none;
            -moz-appearance: none
        }

        @media screen and (min-width:470px) {
            .kmacb-form2 .modal-block {
                width: 460px
            }
        }

        #polit.modal .content ul,
        #polit.modal .content ol {
            list-style-position: inside;
            display: block;
            padding: 0;
            margin: 0
        }

        #polit.modal .content ul {
            list-style-type: disc
        }

        #polit.modal .content rekv {
            display: inline
        }

        #polit.modal .content rekv br {
            dislay: none
        }

        #polit.modal .content {
            font-size: 12px
        }

        #polit.modal .content p b:before {
            content: ' ';
            display: block;
            height: 12px
        }

        #polit.modal .content p:first-child b:before {
            display: none
        }

        @media screen and (max-width:500px) {
            .kmacb-form2 .modal-block .title {
                line-height: 30px;
                padding: 35px 0
            }

            .modal-block .icon-close {
                top: 0;
                margin: 5px;
                width: 10px;
                height: 10px;
                background-size: cover
            }
        }

        .kmacb-form2 form {
            max-width: 100% !important
        }

        .kmacb-form2 form {
            max-width: 100% !important
        }

        .kmacb-form form input[type="text"],
        .kmacb-form form input[type="tel"] {
            max-width: 100% !important
        }

        .modal {
            max-height: 100% !important
        }

        #agreement.modal .content p,
        #polit.modal .content li,
        #polit.modal .content p {
            font-size: 12px !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }
    </style>
    <div id="polit" class="modal">
        <div class="modal-block">
            <div class="icon-close"><br></div>
            <div class="title">PRIVACY POLICY</div>
            <div class="content">
                <div class="padding">
                    <p><b>OUR PRIVACY PRINCIPLES</b></p>
                    <p>We have 5 Privacy Promises which explain how we use and look after your information. We will:</p>
                    <ol>
                        <li>ALWAYS use your personal data in line with data protection law.</li>
                        <li>ALWAYS tell you what information we collect, what we do with it, who we share it with and who to contact if you have any concerns.</li>
                        <li>ALWAYS provide options to say "STOP" if you don’t want marketing communications.</li>
                        <li>ALWAYS take steps to protect your information and make sure no unauthorised person accesses it.</li>
                        <li>ALWAYS respond to questions about your personal data without delay.</li>
                    </ol>
                    <p><br></p>
                    <p><b>OUR PRIVACY POLICY</b></p>
                    <p>We are committed to safeguarding your privacy rights and ensuring that your personal data is protected.</p>
                    <p>This Privacy Policy explains the types of personal data we collect and how we process and protect that data in connection with the services we offer. This includes information collected offline in our stores or through our customer services, and online through our websites, applications (including mobile apps) and third party platforms ("Sites").</p>
                    <p><b>1. WHO IS RESPONSIBLE FOR WHAT HAPPENS WITH YOUR DATA?</b></p>
                    <p>Company (<rekv>© All rights reserved<br>2024.</rekv>) are responsible for processing your personal data on our Sites.</p>
                    <p><b>2. HOW DO I CONTACT THE DATA PROTECTION OFFICER?</b></p>
                    <p>If you have a question in relation to how we process your personal data you can contact our Data Protection Officer via email info@abcloudgroup.com.</p>
                    <p><b>3. WHAT IS PERSONAL DATA?</b></p>
                    <p>Personal Data means information that can directly or indirectly identify you ("Personal Data"). This typically includes information such as your name, address, email address, and telephone number, but can also include other information such as IP address, shopping habits, and information about your lifestyle or preferences such as your hobbies and interests.</p>
                    <p><b>4. WHAT HAPPENS WHEN YOU PROVIDE US WITH YOUR PERSONAL DATA OR WHEN WE OTHERWISE RECEIVE YOUR PERSONAL DATA?</b></p>
                    <p>We collect your Personal Data directly in a number of ways, for example when you provide us with your information to register as a customer for our Sites, register for prize draws or competitions, subscribe to our newsletter, receive information or mailings, use our applications, buy a product or service from us, complete a survey, make a comment or enquiry or contact our Customer Services Team.</p>
                    <p>When you provide us with your Personal Data, we will process it in accordance with this Privacy Policy. If you do not wish us to process your Personal Data in this way, please do not provide us with your personal information.</p>
                    <p>We may also receive your Personal Data from other sources, including information from commercially available sources, such as public databases and data aggregators, and information from third parties. If you do not want us to receive your Personal Data from other sources, please communicate your preferences directly with the relevant sources.</p>
                    <p>We process your Personal Data to provide you with our services as further explained below. In certain instances, we only process your Personal Data if you have given us permission to do so, for example in most cases where we process your Personal Data for marketing purposes, use cookies or location data or where we process your sensitive personal information. In other instances we may rely on other legal grounds for processing your personal data, such as performance of the contract with you or legitimate interests, like fraud prevention.</p>
                    <p>You can always opt out of marketing communications without detriment to your loyalty benefits.</p>
                    <p>Where we process your Personal Data on the basis of your consent, we will ask for your consent explicitly and only for a particular purpose. We will also ask you to provide additional consent if we need to use your Personal Data for purposes not covered by this Privacy Policy.</p>
                    <p><b>5. FOR WHICH PURPOSES DO WE PROCESS YOUR PERSONAL DATA?</b></p>
                    <p><b>5.1 WE PROCESS THE FOLLOWING CATEGORIES OF PERSONAL DATA FOR THE FOLLOWING PURPOSES:</b></p>
                    <p><br></p>
                    <ul>
                        <li>Browsing on our Sites</li>
                        <li>Purchase/Agreeing to a Service</li>
                        <li>Customer Service</li>
                        <li>Suggesting products &amp; services which may interest you</li>
                        <li>Competitions and prize draws</li>
                        <li>Online Shopping</li>
                    </ul>
                    <p><br></p>
                    <p><b>WHAT PERSONAL DATA MAY WE COLLECT?</b></p>
                    <p>Information about the type of browser you use when visiting our Sites, your IP and device address, hyperlinks that you have clicked, websites you visited before arriving at our Sites and information collected by cookies or similar tracking devices. Your user name, profile picture, gender, networks and any other information you choose to share when using Third Party Sites (such as when you use the "Like" functionality on Facebook).</p>
                    <p>WHAT IS THE PURPOSE OF THE PROCESSING?</p>
                    <p>We (and third party service providers acting on our behalf) use cookies and similar technologies to process data about you when you visit our Sites. We would like to know whether you have visited us before and your preferences to provide you with a tailored experience of our Sites.</p>
                    <p>See Section 5.2. below for more information about cookies.</p>
                    <p><b>HOW LONG DO WE STORE YOUR PERSONAL DATA?</b></p>
                    <p>Please check the Cookie Consent Tool to learn about the storage periods for each cookie.</p>
                    <p><b>WHAT IS OUR LEGAL BASIS FOR THE PROCESSING?</b></p>
                    <p>Your consent when you click “agree and proceed” in our Cookie Consent Tool in our Sites. In some cases, and always when permitted by law, we will infer from your actions that you agree to Cookies. Please note that we need to process certain basic surfing data in order to provide core Sites functionalities such as secure log-in or remember how far you are through an order.</p>
                    <p>You can always revisit your cookie preferences via our Cookie Consent Tool or by changing your browser settings.</p>
                    <p><b>5.2 COOKIES AND SIMILAR TECHNOLOGIES</b></p>
                    <p>We use cookies and similar technologies (“Cookies”) to improve our products and your experience on our Sites by collecting information on how you use our Sites. Some of the Cookies we use are required to enable core site functionality, for example to provide secure log-in or to remember how far you are through an order, but we also use Cookies that allow us to analyse site usage (so we can measure and improve performance), and advertisement Cookies which are used by advertising companies to serve ads that are relevant to your interests.</p>
                    <p>We may also tailor our Sites and our products to your interests and needs, by collecting information about your device and linking this to your Personal Data so as to ensure that our Sites present the best web experience for you.</p>
                    <p>Where we use Google Analytics, we have set up the service to anonymise your IP address as soon as data is received by the Analytics Collection Network, before any storage or processing takes place.</p>
                    <p>You can view more information on the Cookies we use and adjust your preferences via the Cookie Consent Tool on our Sites. Please note, however, that without cookies you may not be able to use all of the features of our Sites or online services.</p>
                    <p><b>6. WHO WE SHARE YOUR PERSONAL DATA WITH?</b></p>
                    <p><b>6.1 OUR SERVICE PROVIDERS</b></p>
                    <p>We share your Personal Data with with the following data processors (i.e. service providers that help us to perform the above tasks):</p>
                    <ul>
                        <li>Trusted third parties to help us process and analyse your Personal Data for us, to support us when suggesting products &amp; services which may interest you in line with Section 5.1 above.</li>
                        <li>If you order a product or service from us, trusted third parties to allow payment and delivery of the products and services you have ordered. Unless you provided consent, any such trusted third parties are not authorised by us to use your Personal Data in any other way and will be required by us to implement adequate technical and organizational measures to protect your Personal Data.</li>
                    </ul>
                    <p><br></p>
                    <p>These processors are bound by us to strict requirements as required under applicable data protection laws to only handle your Personal Data for us and to comply with high IT security standards.</p>
                    <p><b>6.2 OTHER RECIPIENTS</b></p>
                    <p>We share your Personal Data with the following third parties that process your Personal Data for their own purposes (i.e. these third parties are no processors; they rather use your Personal Data because they have their own interest or because you had consented):</p>
                    <p>Law enforcement or other agencies if we are required to do so by law, or by a warrant, subpoena or court order to disclose your Personal Data.</p>
                    <p>Please note that we never share your Personal Data with social media platforms. When we engage in audience building or customer matching activities with social media platforms like Facebook or Google, your Personal Data is always anonymised before the transfer. If there are any changes in the future and we have to share your Personal Data with a social media platform, we will ask for your consent.</p>
                    <p><b>6.3 SHARING YOUR SITE USAGE INFORMATION</b></p>
                    <p>With your consent, we will share Site usage information with trusted third parties (e.g. advertisers, advertising agencies, advertising networks, data exchanges, etc.) in order to offer you tailored content which may be of interest to you based on your prior activity on our Site. These trusted third parties may set and access their own Cookies, web beacons and similar tracking technologies on your device in order to help us deliver customised content and advertising to you when you visit our relevant Sites. Please see Section 5.2 for more information about Cookies and how to opt out.</p>
                    <p>Please note that even if you opt out, you may still receive advertisements from us that are not customised based on your Site usage information.</p>
                    <p><b>7. HOW LONG DO WE PROCESS YOUR PERSONAL DATA?</b></p>
                    <p>We will store your Personal Data only until the aforementioned purposes for which we have collected or received your Personal Data are fulfilled and once our statutory obligations to preserve records have expired as further described in Section 5.1.</p>
                    <p><b>8. WHAT ARE YOUR RIGHTS?</b></p>
                    <p>If certain requirements are fulfilled, you have the right to:</p>
                    <ul>
                        <li>Obtain from us confirmation as to whether or not we process Personal Data from you and, where that is the case, access to your Personal Data;</li>
                        <li>Rectification of inaccurate Personal Data;</li>
                        <li>Erasure of Personal Data;</li>
                        <li>Objection to the processing of Personal Data;</li>
                        <li>Restriction of processing of Personal Data;</li>
                        <li>Portability of Personal Data - receive the Personal Data you have provided to us in a structured, commonly used and machine-readable form and transmit it to another data controller.</li>
                    </ul>
                    <p><br></p>
                    <p> You can learn more about these rights from the GDPR provides the following rights for individuals:</p>
                    <ol>
                        <li>The right to be informed</li>
                        <li>The right of access</li>
                        <li>The right to rectification</li>
                        <li>The right to erasure</li>
                        <li>The right to restrict processing</li>
                        <li>The right to data portability</li>
                        <li>The right to object</li>
                        <li>Rights in relation to automated decision making and profiling.</li>
                    </ol>
                    <p><br></p>
                    <p>To exercise your rights, please contact the Data Protection Officer (see Section 1 for contact details) or get in touch with our Customer Services Team on the details set out below.</p>
                    <p><strong>Note that you do not need to contact our Data Protection Officer to excerise your rights to stop receiving marketing communications from us. You can opt out of receiving such communications by going to the Marketing Preferences of your ‘My Account’ if you have an account with us, directly from the communications we send you or by contacting our Customer Services Team or by sending an email to.</strong></p>
                    <p><b>9. CAN YOU WITHDRAW YOUR CONSENT TO THE PROCESSING OF PERSONAL DATA?</b></p>
                    <p>Where your consent is the legal basis for the processing of your Personal Data, you can withdraw your consent for:</p>
                    <ul>
                        <li>Marketing communications: by logging into your account under Marketing Preferences or using the unsubscribe link in any of our marketing communications.</li>
                        <li>Use of Cookies: via our Cookie Consent Tool at the bottom of our Sites.</li>
                        <li>Other purposes: by sending us an emai or by contacting our Customer Services as listed in Section 8</li>
                    </ul>
                    <p><br></p>
                    <p>Please note that withdrawing your consent will not affect the lawfulness of the processing before the withdrawal.</p>
                    <p><b>10. CAN YOU COMPLAIN WITH THE DATA PROTECTION AUTHORITIES?</b></p>
                    <p>If you think that the processing of Personal Data by us violates data protection laws, you can lodge a complaint with the Information Commissioner.</p>
                    <p><b>11. HOW DO WE PROTECT YOUR PERSONAL DATA?</b></p>
                    <p>We maintain appropriate technical and organisational measures to protect the Personal Data you provide to us against accidental or unlawful destruction, loss, alteration, unauthorised disclosure of, or access to your Personal Data.</p>
                    <p><b>12. CAN WE CHANGE OUR PRIVACY POLICY?</b></p>
                    <p>We may change this Privacy Policy from time to time by posting the updated version of the Privacy Policy here. We encourage you to visit this area frequently to stay informed.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="agreement" class="modal">
        <div class="modal-block">
            <div class="icon-close"><br></div>
            <div class="title">End User License Agreement</div>
            <div class="content">
                <div class="padding">
                    <p>This End User License Agreement is concluded between you, the User, the Advertiser and the CPA network.</p>
                    <p><b>User</b> is a person who through the activities of the CPA network is attracted by promotion methods to purchase/sell the offers for goods and/or services provided by an Advertiser, with the intention to order or acquire, or use the goods exclusively for personal, family, home and other needs not related to the implementation of entrepreneurial activities.</p>
                    <p><b>Advertiser</b> is a person who wants to place an offer in a CPA network to sell a particular product and/or service.</p>
                    <p><b>CPA network</b> (abbreviation from Cost Per Action, that means payment for the action) is an electronic business environment in the course of which a relationship is established between an Advertiser and a CPA network, by virtue of which an Advertiser offers the product and/or services, and a CPA network, in turn, attracts users interested in acquiring offers, allowed by the Advertiser methods. The end result of such activity is the purchase of the goods and/or services by users through the CPA network.</p>
                    <p><b>Parties</b> are a User, an Advertiser, and a CPA network.</p>
                    <p><b>Website</b> is an internet resource of the web store that has the domain name c.HYPERTON FORTE-new.com, which is under organizational management and belongs to the Advertiser under the terms of private property rights.</p>
                    <p><b>Public offer</b> is a proposal addressed to an undefined circle of persons or to several specific persons, which specifically expresses the intention of the person who made the offer to consider himself/herself to have entered into this End User License Agreement with the addressee that will accept the offer.</p>
                    <p><b>Acceptance</b> – full acceptance by one of the Parties of the conditions of the public offer of the CPA network for the conclusion of this end user license agreement. Acceptance of a public offer occurs when the site is launched (including for informational purposes) and its services are used.</p>
                    <p class="no-margin"><b>1. General provisions</b></p>
                    <p class="no-margin">1.1. This End User License Agreement (hereinafter referred to as the “Agreement”) defines the general rules for visiting, using the services and the general rules of conduct on the Website of the User and regulates the civil and legal relations that are formed between the User and the Advertiser, as well as the User, the Advertiser and the CPA network in the process of their interaction.</p>
                    <p class="no-margin">1.2. This Agreement may be amended by a decision of the CPA network and/or the Advertiser unilaterally. The CPA-network and/or the Advertiser does not bear the obligation of personal notification of the User about such changes. The new version of the Agreement shall enter into force from the time of purchase of the goods/services of the Advertiser by the User.</p>
                    <p class="no-margin">1.3. The terms of the Agreement are applicable to all website clients without exception.</p>
                    <p>1.4. The User starting using the Website confirms the fact that he has familiarized himself with the provisions of this Agreement in his right mind and with clear memory, understands them fully and accepts the conditions for using the website to full extent. If there is a disagreement with the provisions of this Agreement (partially or in whole), the person expressing such will is not entitled to use the information field of the Website.</p>
                    <p class="no-margin"><b>2. Regulation of the interaction of the parties</b></p>
                    <p class="no-margin">2.1. The implementation of services and/or capabilities provided by the Website does not give the User any exclusive rights and privileges.</p>
                    <p class="no-margin">2.2. The Parties to this Agreement have agreed that the CPA network is entitled to post advertisement units and banners in any of its fields, including the places where information is published by the User without the additional consent of the User.</p>
                    <p class="no-margin">2.3. The information posted on the Website by the CPA network is the result of the intellectual activity of the CPA network and all proprietary and personal non-property rights to such information are owned by the CPA network until it is determined otherwise. At the same time, the User does not have any exclusive rights to the result of intellectual activity of the CPA network expressed in graphic, text, audio-video form placed by the CPA network on the Website.</p>
                    <p class="no-margin">2.4. The CPA network is not obligated to protect the violated rights of the User in the context of settlement of disputes arising on this ground, including judicial manner.</p>
                    <p class="no-margin">2.5. The CPA network is not the owner/manufacturer of the goods and/or services posted on the Website and is not responsible for the violation of the User's rights. The purpose of the CPA network under this agreement is to attract potential users interested in acquiring goods and/or services authorized by the Advertiser by methods. The end result of such activity is the purchase of the goods and/or services by the User through the CPA network.</p>
                    <p class="no-margin">2.6. Violation by the User or the Advertiser of copyrights belonging to the CPA network and (or) other persons, entails for the offender liability provided for by the provisions of the current legislation of the Russian Federation.</p>
                    <p class="no-margin">2.7. In case of revealing infringement of copyrights by the User, by illegal placement of materials not belonging to the User, the CPA network withdraws such materials from free access at the first request of the legal right holder.</p>
                    <p class="no-margin">2.8. The User is prohibited from posting on the Website information that directly or indirectly contains the generally accepted signs of pornography, insulting, prejudicing, damaging someone else's dignity, containing calls for violence, brutality and other actions that lead to violations of the laws in force, certain territorial jurisdictions, containing malicious software and (or) other information that may harm third parties.</p>
                    <p class="no-margin">2.9. In the event of violation of the conditions of 2.8. of this Agreement and the failure to comply with the requirements of the CPA network, including the withdrawal of such information from public access, the Website's users are liable under the provisions of this Agreement and (or) the current legislation of the Russian Federation. The CPA network is then entitled to remove the information mentioned in paragraph 2.8.</p>
                    <p class="no-margin">2.10. The CPA network is not responsible for the results of a User's visit to third-party (external) resources that can be posted on the Website. Results mean any results, regardless of its nature, as well as the one from which the User incurred any material losses, moral damage and other negative manifestations.</p>
                    <p>2.11. The procedure for remote trading, the rights and obligations of the Parties to the agreement, as well as third parties, specific requirements for the processes of interaction between the Parties and the design of advertising sites, are subject to the regulatory order by the Federal Law “On Advertising”, the Rules for Remote Trading approved by the Resolution of the Government of the Russian Federation No 612 as of 27.09.2007, as well as other normative acts and this Agreement.</p>
                    <p class="no-margin"><b>3. Rights and obligations of the Advertiser</b></p>
                    <p class="no-margin">3.1. The Advertiser is obliged to offer the User a service to deliver the goods by mail or transport, indicating the mode of delivery and mode of transport used.</p>
                    <p class="no-margin">3.2. The Advertiser is obliged to inform the User about the need to call for help of the qualified specialists for connecting, setting up and commissioning technically complex products, which cannot be put into operation without the participation of competent specialists in accordance with technical requirements.</p>
                    <p class="no-margin">3.3. The Advertiser is not entitled to perform additional works (services) for payment without the consent of the User.</p>
                    <p class="no-margin">3.4. Before the conclusion of the contract of retail sale (hereinafter referred to as the “Contract”) the Advertiser is obliged to provide the User with information about the basic consumer properties of the goods and the address (location) of the Advertiser, about the place of manufacture of the goods, the full name of the Advertiser, the price and conditions of the purchase contract of goods, its delivery, service life, shelf life and warranty period, the procedure for payment for the goods, as well as the period during which the proposal to enter into the contract is valid.</p>
                    <p class="no-margin">3.5. The Advertiser at the time of delivery of the goods is obliged to inform the User in writing the following information (for imported goods - in Russian):</p>
                    <p class="no-margin">3.5.1. the name of the technical regulation or other symbol established by the legislation of the Russian Federation on technical regulation and indicating the mandatory confirmation of the conformity of the goods;</p>
                    <p class="no-margin">3.5.2. information on the main consumer properties of the goods (works, services), and with respect to foodstuffs - information on the composition (including the names of food additives used in the process of food production, biologically active additives, information on the presence in food products of components obtained with application of genetically engineered organisms), nutritional value, purpose, conditions of application and storage of food products, methods of making ready meals, weight (volume), date and place of manufacture and packaging of food, as well as information on contraindications for their use in certain diseases;</p>
                    <p class="no-margin">3.5.3. price in rubles and conditions for the acquisition of the goods (work performance, services);</p>
                    <p class="no-margin">3.5.4. information on warranty period, if any;</p>
                    <p class="no-margin">3.5.5. rules and conditions for the efficient and safe use of goods;</p>
                    <p class="no-margin">3.5.6. information on the service life or the expiration date of the goods, as well as information about the necessary actions of the User after the expiration of the specified terms and possible consequences if such actions are not performed, if the goods after the expiration of the indicated periods pose a danger to the life, health and property of the Client or become unsuitable for intended use;</p>
                    <p class="no-margin">3.5.7. location (address), company name of the manufacturer (the Advertiser), location (address) of the company(s) authorized by the manufacturer (the Advertiser) to accept claims from the User and perform repair and maintenance of the goods, for the imported goods - country name of the origin of the goods; (see the text in the previous wording)</p>
                    <p class="no-margin">3.5.8. information on mandatory confirmation of the conformity of goods (services) with compulsive requirements ensuring their safety for life, health of the User, the environment and prevention of damage to the User's property in accordance with the legislation of the Russian Federation;</p>
                    <p class="no-margin">3.5.9. information on the rules for the sale of the goods (performance of work, provision of services);</p>
                    <p class="no-margin">3.5.10. information about the specific person who will perform the work (provide the service) and information about him, if relevant, it is based on the nature of the work (services);</p>
                    <p class="no-margin">3.5.11 information on the energy efficiency of the goods for which the requirement for the availability of such information is determined in accordance with the legislation of the Russian Federation on energy conservation and on improving energy efficiency.</p>
                    <p class="no-margin">3.6. The Advertiser is obliged to provide information to the User if the goods purchased by the User were in use or in which the deficiency was eliminated.</p>
                    <p class="no-margin">3.7. The Advertiser is obliged to inform the User about the goods, including the maintenance conditions and the storage rules, which are communicated to the Customer by placing on the product, on electronic carriers, attached to the goods, in the product itself (on the electronic board inside the goods in the menu section), on the packaging, label, marking, in technical documentation or in any other way established by the legislation of the Russian Federation.</p>
                    <p class="no-margin">3.8. The Advertiser is obliged to inform the User about the period during which the offer to sell the goods/services on the website is in effect.</p>
                    <p class="no-margin">3.9. The Advertiser has the both right to accept and to reject the User's offer to forward the goods by postal mail way “to be called for”.</p>
                    <p class="no-margin">3.10. The Advertiser shall ensure the confidentiality of personal data about the User in accordance with the legislation of the Russian Federation in the field of confidentiality.</p>
                    <p class="no-margin">3.11. The Advertiser provides the User with catalogs, booklets, pamphlets, photographs or other information materials containing full, reliable and accessible information characterizing the offered goods.</p>
                    <p class="no-margin">3.12. If the User refuses the goods, the Advertiser is obliged to return to him the amount paid by the User in accordance with the Contract, with the exception of the Advertiser's expenses for the delivery of the returned goods from the User not later than 10 days from the date of presentation of the relevant demand by the User.</p>
                    <p class="no-margin">3.13. In the event that the Agreement is concluded on the condition that the goods are delivered to the User, the Advertiser shall deliver the goods to the place specified by the User within the period established by the Contract, and if the place of delivery of the goods is not specified by the User, then to the place of his residence.</p>
                    <p class="no-margin">3.14. The Advertiser shall deliver the goods to the User in the order and time specified in the Contract.</p>
                    <p class="no-margin">3.15. The Advertiser is obliged to deliver to the User the goods, the quality of which corresponds to the Contract and the information provided to the User at the conclusion of the Contract, as well as information brought to its attention when transferring the goods (in technical documentation attached to the product, on labels, by marking or by other means provided for certain types of the goods).</p>
                    <p class="no-margin">3.16. If the Advertiser when concluding the Contract was informed by the User of the specific purposes for the purchase of the goods, the Advertiser is obliged to transfer to the User the goods suitable for use in accordance with these purposes.</p>
                    <p class="no-margin">3.17. The costs of the refund of the amount paid by the User in accordance with the Contract shall be borne by the Advertiser.</p>
                    <p>3.18. Payment for the goods by the User by transferring funds to the account of a third party indicated by the Advertiser does not relieve the Advertiser of the obligation to return the amount paid by the User when the goods are returned by the User both of proper and improper quality.</p>
                    <p class="no-margin"><b>4. Rights and obligations of the User</b></p>
                    <p class="no-margin">4.1. The User has the right to refuse the goods at any time prior to its transfer and after the transfer of the goods - within 7 days.</p>
                    <p class="no-margin">4.2. The User has the right to refuse the goods within 3 months from the moment of transfer of the goods, in the event that information on the procedure and terms for returning the goods of the proper quality were not provided in writing at the time of delivery of the goods.</p>
                    <p class="no-margin">4.3. Return of good quality goods is possible in the event that marketable condition, consumer properties are preserved, as well as a document confirming the fact and conditions for the purchase of the said goods. The User's lack of this document does not deprive him of the opportunity to refer to other evidence of the purchase of goods from this Advertiser.</p>
                    <p class="no-margin">4.4. The User shall not be entitled to refuse from the goods of proper quality, having individually defined properties, if the specified goods can only be used by the User who acquires them.</p>
                    <p class="no-margin">4.5. The User is obliged to re-pay the cost of delivery services, if the delivery of the goods is made within the terms established by the Contract, but the goods were not transferred to the User through his fault, the subsequent delivery is made in a new time agreed with the Advertiser.</p>
                    <p class="no-margin">4.6. In the event that the goods are transferred to the User in violation of the terms of the Contract concerning the quantity, assortment, quality, completeness, boxes and (or) packaging of the goods, the User may notify the Advertiser of such violations within 20 days after receipt of the goods.</p>
                    <p class="no-margin">4.7. If deficiencies in the goods are found in respect of which the warranty terms or expiration dates are not established, the User shall be entitled to present claims in respect of defects of the goods within a reasonable time, but within 2 years from the date of its transfer to the User, longer periods are not established by regulatory acts or the Contract.</p>
                    <p class="no-margin">4.8. The User has the right to present requirements to the Advertiser in respect of defects of the goods, if they are revealed during the warranty period or the expiration date.</p>
                    <p class="no-margin">4.9. The User who is sold the goods of inadequate quality, if this was not agreed by the Advertiser, has the right at his choice to demand:</p>
                    <p class="no-margin">a) free elimination of defects of the goods or compensation of expenses for their correction by the User or the third party;</p>
                    <p class="no-margin">b) a proportionate reduction in the purchase price;</p>
                    <p class="no-margin">c) the replacement of a similar brand (model, item) or other brand (model, item) with the corresponding recalculation of the purchase price. However, in the case of technically complex and expensive goods, these requirements of the User are to be met if significant deficiencies are discovered.</p>
                    <p class="no-margin">4.10. The User instead of claiming the requirements specified in clause 4.9 of this Agreement, has the right to refuse to perform the Contract and demand the return of the amount paid for the purchased goods. At the request of the Advertiser and at its expense, the User shall return the item with defects.</p>
                    <p class="no-margin">4.11. The User has the right to demand full compensation for losses caused to him by the sale of the goods of inadequate quality. The losses are reimbursed within the time limits established by the Law of the Russian Federation “On Protection of Consumer Rights” to meet the relevant requirements of the User.</p>
                    <p class="no-margin">4.12. The User has the right to refuse to execute the Contract and demand compensation for the losses caused, if the Advertiser fails to transfer the goods.</p>
                    <p class="no-margin">4.13. When returning goods of inadequate quality, the User's lack of a document confirming the fact and conditions for the purchase of the goods does not deprive him of the opportunity to refer to other evidence of the purchase of the goods from the Advertiser.</p>
                    <p class="no-margin">4.14. Refusal or evasion of the Advertiser from drawing up the waybill or the certificate does not deprive the User of the right to demand the return of the goods and (or) return of the amount paid by the User in accordance with the Contract.</p>
                    <p class="no-margin">4.15. The User has the right to refuse to pay for additional works (services) that are not stipulated by the Contract, and if they are paid, the User has the right to demand from the Advertiser a refund paid above the specified amount.</p>
                    <p class="no-margin">4.16. In case of using the results of the intellectual property of the CPA network; the materials of the Website, for any purpose, the User shall obtain the permission of the CPA network before placing such materials. Given the permission of the CPA network, the User shall display the full name and domain name of the source in the following format: web store c.HYPERTON FORTE-new.com. The hyperlink is to be active and direct, when clicked on a transition a particular page of the Website is opened from which the material is borrowed.</p>
                    <p>4.17. By analogy with the instructions set out in p. 4.16. of this Agreement, the User undertakes to act, in the case of using the results of intellectual property, that it belongs to third parties. The method and procedure of implementation are specified in the process of negotiations with the owner of the materials.</p>
                    <p class="no-margin"><b>5. Liability of the partiesLiability of the parties</b></p>
                    <p class="no-margin">5.1. The CPA network is not responsible for the actions of the User that have violated the rights of the third parties, except in the case of certain existing legislation of the Russian Federation.The CPA network is not responsible for the actions of the User that have violated the rights of the third parties, except in the case of certain existing legislation of the Russian Federation.</p>
                    <p class="no-margin">5.2. The CPA network is not responsible for the content of the information placed by the Advertiser and/or the User.The CPA network is not responsible for the content of the information placed by the Advertiser and/or the User.</p>
                    <p class="no-margin">5.3. The CPA network is not responsible for the content of Website feedback. The feedback of users from the website is subjective opinion of their authors, which is in no way intended to be objective. They may not coincide with public opinion and do not correspond to reality.The CPA network is not responsible for the content of Website feedback. The feedback of users from the website is subjective opinion of their authors, which is in no way intended to be objective. They may not coincide with public opinion and do not correspond to reality.</p>
                    <p class="no-margin">5.4. The decision on the issue/non-issuance of personal data is accepted by the CPA network only on the basis of a request sent by the person of the CPA network in accordance with the procedure established by applicable law.The decision on the issue/non-issuance of personal data is accepted by the CPA network only on the basis of a request sent by the person of the CPA network in accordance with the procedure established by applicable law.</p>
                    <p class="no-margin">5.5. CPA network has the right not to respond to inquiries, appeals and letters that do not contain requisites of the contacting person (full name, contact details).CPA network has the right not to respond to inquiries, appeals and letters that do not contain requisites of the contacting person (full name, contact details).</p>
                    <p class="no-margin">5.6. CPA network is not responsible for the registration data, which was indicated by the User when interacting with the information field of the Website.CPA network is not responsible for the registration data, which was indicated by the User when interacting with the information field of the Website.</p>
                    <p>5.7. CPA network has the right to limit without explanation of reasons, to block the User's access (including unregistered one) to the Website, with partial or complete removal of information that was posted by the User on the Website. CPA network undertakes to review the claim, executed in accordance with the procedure provided for by section 5 of the Agreement within 30 (thirty) calendar days from the date of receipt.CPA network has the right to limit without explanation of reasons, to block the User's access (including unregistered one) to the Website, with partial or complete removal of information that was posted by the User on the Website. CPA network undertakes to review the claim, executed in accordance with the procedure provided for by section 5 of the Agreement within 30 (thirty) calendar days from the date of receipt.</p>
                    <p class="no-margin"><b>6. Dispute settlement procedureDispute settlement procedure</b></p>
                    <p class="no-margin">6.1. In case of posted information on the Website containing the results of intellectual property owned by the third parties, the copyright owner is obliged to:In case of posted information on the Website containing the results of intellectual property owned by the third parties, the copyright owner is obliged to:</p>
                    <p class="no-margin">6.1.1. Draw up a claim indicating the actual and regulatory grounds that enable the CPA network to withdraw information from public access.Draw up a claim indicating the actual and regulatory grounds that enable the CPA network to withdraw information from public access.</p>
                    <p class="no-margin">6.1.2. Attach to the claim evidence for the originality of the result of intellectual property (original copy, other documents confirming the right of ownership of the copyright object).Attach to the claim evidence for the originality of the result of intellectual property (original copy, other documents confirming the right of ownership of the copyright object).</p>
                    <p class="no-margin">6.1.3. Send the package of documents mentioned in the provisions of subparagraphs 6.1.1., 6.1.2. of this Agreement to the electronic mail of the CPA network: info@abcloudgroup.comSend the package of documents mentioned in the provisions of subparagraphs 6.1.1., 6.1.2. of this Agreement to the electronic mail of the CPA network: info@abcloudgroup.com</p>
                    <p>6.2. The claims of the User on the quality of service, products, as well as other comments, should be sent to the Advertiser on the electronic mail: info@slaviya-org.comThe claims of the User on the quality of service, products, as well as other comments, should be sent to the Advertiser on the electronic mail: info@slaviya-org.com</p>
                    <p class="no-margin"><b>7. MiscellaneousMiscellaneous</b></p>
                    <p class="no-margin">7.1. All possible situations, disputes arising out of the relationship between the User and the Advertiser, as well as the User, the Advertiser and the CPA network, which are not settled by this Agreement, shall be resolved in accordance with the rules of the current legislation of the Russian Federation.All possible situations, disputes arising out of the relationship between the User and the Advertiser, as well as the User, the Advertiser and the CPA network, which are not settled by this Agreement, shall be resolved in accordance with the rules of the current legislation of the Russian Federation.</p>
                    <p class="no-margin">7.2. The Parties to this Agreement are aware of the scope of the rights and obligations generated by the relationships of the persons mentioned in this Agreement and realize their actions, understand the legal nature of the consequences of such actions to full extent.The Parties to this Agreement are aware of the scope of the rights and obligations generated by the relationships of the persons mentioned in this Agreement and realize their actions, understand the legal nature of the consequences of such actions to full extent.</p>
                    <p class="no-margin">7.3. Omission to act on the part of the CPA network in case of violation of the provisions of the Agreement by any of the Users does not deprive the CPA network of the right to take later appropriate actions in defense of its interests and protection of the rights protected by the law.Omission to act on the part of the CPA network in case of violation of the provisions of the Agreement by any of the Users does not deprive the CPA network of the right to take later appropriate actions in defense of its interests and protection of the rights protected by the law.</p>
                    <p class="no-margin">7.4. The Advertiser's contact information:The Advertiser's contact information:</p>
                    <p class="js-agreement-rekv">© All rights reserved<br>2024.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="kmacb" class="kmacb__manager kmacb__manager-man1" style="display: block;">
        <a href="#" modal="kmacb-form">
            <div class="kmacb__manager-circle"><br></div>
            <div class="kmacb__manager-fill"><br></div>
            <div class="kmacb__manager-border"><br></div>
            <div class="kmacb__manager-img"><br></div>
        </a>
    </div>
    <div id="kmacb-form" class="modal kmacb-form kmacb-form2" style="display: none;">
        <div class="modal-block modal-top modal-left" style="margin-top: -277.5px; margin-left: -230px;">
            <div class="title"><a class="icon-close"></a>PÁČI SA VÁM TÁTO PONUKA?<div class="kmacb-form-rectangle"><br></div>
            </div>
            <div class="content">
                <div class="padding">
                    <p>Povieme vám všetko o produkte, ponúkame tie najlepšie podmienky!</p>
                    <form method="POST" action="https://trackerlead.biz/">
                        <?=$cms->params();?>
                        <input type="text" name="name" value="" placeholder="Vaše meno" oldvalue="">
                        <input type="tel" name="phone" value="" placeholder="Vaše telefónne číslo" oldvalue="">
                        <input type="hidden" name="country" value="<?=$cms->country;?>" />
                        <input type="submit" value="ZAVOLÁME VÁM SPÄŤ"></form>
                    <p class="kmacb-form-clock">Operátor Vám zavolá do 15-30 minút</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        try {
            if (country === 'RU' && country_list['RU'] && parseInt(country_list['RU'] ? .company) === 43) {
                let agreementText = [...document.querySelector('#agreement.modal .content .padding').children],
                    removedText = agreementText.slice(89, 95);
                removedText.forEach(item => item.remove())
            }
        } catch (e) {
            console.log("can't delete paragraph: " + e.toString());
        }
    </script>
    <script>
        ! function(e, t, a, n, c) {
            e.ym = e.ym || function() {
                (e.ym.a = e.ym.a || []).push(arguments)
            }, e.ym.l = +new Date, n = t.createElement(a), c = t.getElementsByTagName(a)[0], n.async = 1, n.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js", c.parentNode.insertBefore(n, c)
        }(window, document, "script"), ym(93522193, "init", {
            clickmap: !0,
            trackLinks: !0,
            accurateTrackBounce: !0,
            webvisor: false
        });
    </script>
    <script>
        function sendMetrics(id, mark) {
            if (typeof ym == 'function') {
                ym(id, 'reachGoal', mark)
            }
        }
        document.addEventListener('DOMContentLoaded', () => {
            try {
                let targetMarkYM = 'closes-win-tab';

                window.addEventListener('beforeunload', (event) => {
                    targetMarkYM = 'closes-win-tab';
                });
                window.addEventListener('popstate', (event) => {
                    targetMarkYM = 'bb-click';
                });
                window.addEventListener('unload', (event) => {
                    sendMetrics(93522193, targetMarkYM);
                });
            } catch (e) {
                console.log(e.toString())
            }
        })
    </script>
    <script data-pagespeed-no-defer="">
        (function() {
            function b() {
                var a = window,
                    c = e;
                if (a.addEventListener) a.addEventListener("load", c, !1);
                else if (a.attachEvent) a.attachEvent("onload", c);
                else {
                    var d = a.onload;
                    a.onload = function() {
                        c.call(this);
                        d && d.call(this)
                    }
                }
            };
            var f = !1;

            function e() {
                if (!f) {
                    f = !0;
                    for (var a = document.getElementsByClassName("psa_add_styles"), c = 0, d; d = a[c]; ++c)
                        if ("NOSCRIPT" == d.nodeName) {
                            var k = document.createElement("div");
                            k.innerHTML = d.textContent;
                            document.body.appendChild(k)
                        }
                }
            }

            function g() {
                var a = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || null;
                a ? a(function() {
                    window.setTimeout(e, 0)
                }) : b()
            }
            var h = ["pagespeed", "CriticalCssLoader", "Run"],
                l = this;
            h[0] in l || !l.execScript || l.execScript("var " + h[0]);
            for (var m; h.length && (m = h.shift());) h.length || void 0 === g ? l[m] ? l = l[m] : l = l[m] = {} : l[m] = g;
        })();
        pagespeed.CriticalCssLoader.Run();
    </script>
    <div>
        <style>
            .ac_footer {
                position: relative;
                top: 10px;
                height: 0;
                text-align: center;
                margin-bottom: 30px;
                color: #a12000
            }

            .ac_footer a {
                color: #a12000
            }

            .ac_footer p {
                text-align: center
            }

            img[height="1"],
            img[width="1"] {
                display: none !important
            }
        </style>
        <link href="https:/index_family_Roboto_300_400_500_700_amp_subset_cyrillic_greek_vietnamese_.html" rel="stylesheet">
        <link href="https:/index_family_Material_Icons_.html" rel="stylesheet">
        <link href="css/A.materialize.min.css_qv1.pagespeed.cf.bGVwm1k8rb.css" rel="stylesheet" data-pagespeed-lsc-url="https://c.cardiotensive-new.com/css/materialize.min.css?v1">
        <link href="css/A.animate.css.pagespeed.cf.DnRU1-wrYV.css" rel="stylesheet" data-pagespeed-lsc-url="https://c.cardiotensive-new.com/css/animate.css">
        <link href="css/A.style.css_qv4.pagespeed.cf.4T96sv0Hx2.css" rel="stylesheet" data-pagespeed-lsc-url="https://c.cardiotensive-new.com/css/style.css?v4">
        <link href="shared_files/css/A.custom-styles2.min.css_q9.pagespeed.cf.ZPHLtDtC_9.css" type="text/css" rel="stylesheet" data-pagespeed-lsc-url="https://c.cardiotensive-new.com/shared_files/css/custom-styles2.min.css?9">
    </div><div id="gtx-trans" style="position: absolute; left: 1431px; top: 6038.25px;">
        <div class="gtx-trans-icon"><br></div>
    </div>
    <?php $cms->footer(); ?>
</body>

</html>