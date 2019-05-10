<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 12-03-2019
 * Time: 12:24
 */

?>

<!doctype html>
<html>

<head>
    <script type="text/javascript">
        (function (id) {
            function append(scriptid, url, async) {
                var d = document, sn = 'script', f = d.getElementsByTagName(sn)[0];
                if (!f) f = d.head;
                var s = d.createElement(sn);
                s.async = true;
                s.id = scriptid;
                s.src = url;
                f.parentNode.insertBefore(s, f);
            }
            function getRootDomain() {
                var parts = window.location.hostname.split('.');
                if (parts.length === 2) rootDomain = parts[0];
                else if (parts.length > 2) {
                    // see if the next to last value is a common tld
                    var part = parts[parts.length - 2];
                    if (part === 'com' || part === 'co') {
                        rootDomain = parts[parts.length - 3]; // go back one more
                    } else {
                        rootDomain = part;
                    }}
                return rootDomain; }
            window.evidon = {};
            window.evidon.id = id;
            var cdn = '//c.evidon.com/', rootDomain = getRootDomain(), noticecdn = cdn + 'sitenotice/';
            append('evidon-notice', noticecdn + 'evidon-sitenotice-tag.js', false);
            append('evidon-location', cdn + 'geo/country.js', true);
            append('evidon-themes', noticecdn + id + '/snthemes.js', true);
            if (rootDomain) append('evidon-settings', noticecdn + id + '/' + rootDomain + '/settings.js', true);
            window.evidon.priorConsentCallback = function () {
                // Add the tags which need to wait for prior consent here.
                // This should be all your advertising tags and probably most of your social and tracking tags.
            }
        })(4478);
    </script>

    <meta charset="utf-8">
    <title>VMware IT Excellence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.vmware.com/content/dam/vmwaredesigns/scraper/non-responsive.css"/>
    <!--<link rel="stylesheet" type="text/css" href="https://www.vmware.com/content/dam/vmwaredesigns/scraper/scrapper-footer.css"/>-->

    <script src="js/jquery.min.js"></script>
    <script src="js/serverjs.js"></script>
</head>

<body>
<div class="main-wrapper">
    <div class="bg-left">
        <img src="images/bottom-left.png">
    </div>
    <div class="bg-top">
        <img src="images/top-right.png">
    </div>
    <div class="wrapper">
        <div class="banner">
            <img src="images/banner.jpg" class="img-fluid">
        </div>
        <div class="container">

            <div class="new-registration-wrapper">

                <h2 style="text-align: center">Thank you for submitting your nomination form.</h2>

            </div>
        </div>
    </div>

    <div id="page-footer" class="non-responsive-width"></div>
</div>



<script type="text/javascript" src="https://www.vmware.com/bin/vmware/template/scrapper.us.js"></script>
<script type="text/javascript" src="https://www.vmware.com/content/dam/vmwaredesigns/scraper/non-responsive.js"></script>
</body>
</html>

