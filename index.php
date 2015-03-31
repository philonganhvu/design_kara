<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Design bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific/magnific-popup.css">

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="js/magnific/jquery.magnific-popup.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $('.popup-youtube').magnificPopup({
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                '<div class="mfp-close"></div>'+
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

                patterns: {
                    youtube: {
                        index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                        id: 'v=', // String that splits URL in a two parts, second part should be %id%
                        // Or null - full URL will be returned
                        // Or a function that should return %id%, for example:
                        // id: function(url) { return 'parsed id'; }

                        src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: '%id%&output=embed'
                    }

                    // you may add here more sources

                },
                srcAction: 'iframe_src' // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
            }
        });
    });
</script>
<body>

    <h5>Features:</h5>
    <ul>
        <li>Responsive design with hover effect</li>
        <li>Compatible with bootstrap 3.0.0 and Up</li>
        <li>No Javascript</li>
    </ul>
    <hr>

    <div class="container">
        <ul class="list-unstyled video-list-thumbs row">
            <li class="col-lg-3 col-sm-4 col-xs-6">
                <a class="popup-youtube" href="http://www.youtube.com/watch?v=1dqg9zL0JA8" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                    <img src="http://img.youtube.com/vi/1dqg9zL0JA8/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                    <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">03:15</span>
                </a>
                <h5>Nhạc tiếng Anh</h5>
            </li>
            <li class="col-lg-3 col-sm-4 col-xs-6">
                <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                    <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                    <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">03:15</span>
                </a>
                <h5>Nhạc tiếng Anh</h5>
            </li>
            <li class="col-lg-3 col-sm-4 col-xs-6">
                <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                    <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                    <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">03:15</span>
                </a>
                <h5>Nhạc tiếng Anh</h5>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                    <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                    <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">03:15</span>
                </a>
                <h5>Nhạc tiếng Anh</h5>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                    <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                    <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration">03:15</span>
                </a>
                <h5>Nhạc tiếng Anh</h5>
            </li>
        </ul>
    </div>
</body>
</html>