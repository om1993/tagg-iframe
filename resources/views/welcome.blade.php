<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo Iframe page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">

                    Demo iFrame page
                    <h5>Enter Donation Request here</h5>
                </div>
                <div id="my-div" style="height: 500px">
                    <script
                            id="tagg-embedded-donation-request"
                            type="text/javascript"
                            data-organization="1"
                            data-form_config="true"
                            src="{!! getenv('APP_DR_URL') ?? 'https://secondins.herokuapp.com' !!}/js/embedded-iframe.js"
                    ></script>

                {{--<iframe src="{!! getenv('APP_DR_URL') ?? 'https://secondins.herokuapp.com' !!}/donationrequests/create?orgId=1&newrequest=2" onload="resizeIframe(this)"
                        id="my-iframe-identifier" name="ifr" scrolling="no"
                        style="min-width: 100%; width: 1px; border: hidden; position: absolute; top: 0; bottom: 0; left: 0; right: 0; overflow-y: hidden" > </iframe>--}}
                    <div style="position: relative; height: 50%; width: 50%">
                        {{--<iframe src="{!! getenv('APP_DR_URL') ?? 'https://secondins.herokuapp.com' !!}/donationrequests/create?orgId=1&newrequest=2"
                                style="padding: 0px; width: 100%; height: 100%">

                        </iframe>--}}
                    </div>
                    <div id="testFrame">

                    </div>

                </div>
                <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
                <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
                {{--<script type="text/javascript" src="https://unpkg.com/iframe-resizer@3.5.15/js/iframeResizer.min.js"></script>--}}
                <{{--script type="text/javascript">
                    $('#testFrame-div').load("{!! getenv('APP_DR_URL') ?? 'https://secondins.herokuapp.com' !!}/donationrequests/create?orgId=1&newrequest=2 #divRequestForm");
                    /*$('#my-iframe-identifier').iFrameResize({
                        log: true,
                        inPageLinks: true,
                        heightCalculationMethod: 'lowestElement'
                    })*/
                    // Find all iframes
                    var $iframes = $('iframe');

                    // Find &#x26; save the aspect ratio for all iframes
                    $iframes.each(function () {
                        $( this ).data( "ratio", this.height / this.width )
                        // Remove the hardcoded width &#x26; height attributes
                            .removeAttr( "width" )
                            .removeAttr( "height" );
                    });

                    // Resize the iframes when the window is resized
                    $( window ).resize( function () {
                        $iframes.each( function() {
                            // Get the parent container&#x27;s width
                            var width = $( this ).parent().width();
                            var height = $( this ).parent().height();
                            $( this ).width( width )
                                .height(  height );
                        });
// Resize to fix all iframes on page load.
                    }).resize();

                    function resizeIframe(iframe) {
                        iframe.height = (iframe.contentWindow.document.body.scrollHeight + 100) + "px";
                    }
                </script>--}}

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>

                </div>
            </div>
        </div>
    </body>
</html>
