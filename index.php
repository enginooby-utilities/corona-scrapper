<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8, shrink-to-fit=yes">
        <title>Corona Checker</title>
        <link rel="stylesheet" href="../../dynamic-ui-framework/css/dynamic-style.css" type="text/css">
        <!-- Override Dynamic Framework Style -->
        <style>
                /* TODO: Improve Dynamic Framework so that don't need to do this */
                .custom-bg::before {
                        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/bg.jfif) no-repeat center center fixed;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
                }

                .display-content>.container {
                        max-width: 550px;
                }

                .alert {
                        opacity: 0.85;
                        margin-bottom: 0;
                }

                .neu-style .box-border {
                        padding: 4px;
                }

                .box-border {
                        padding: 0;
                        border-width: 0 !important;
                }

                .form-group label,
                .button {
                        font-size: 1.3rem;
                }

                .button i {
                        position: relative;
                        top: 1px;
                        left: 4px;
                }
        </style>
</head>

<body class="glass-style custom-bg">
        <div class="display-table">
                <div class="display-content ">
                        <div class="container text-center">
                                <h2>How many <span class="highlight-color">Corona</span> cases?</h2>
                                <form method="get">
                                        <div class="form-group">
                                                <label for="country" class="form-control"><i>Enter a country name</i></label>
                                                <input type="text" name="country" id="country" class="form-control my-4" placeholder="E.g. Viet Nam, Poland, US...">
                                        </div>
                                        <div class="button-border">
                                                <a href="javascript:;" class="btn button px-3 py-2" id="check-button">Check <i class="fas fa-search"></i></a>
                                        </div>
                                </form>
                                <br>
                                <div id="result-section"></div>
                        </div>
                </div>
        </div>

        <!-- SCENARIO: project script uses jQuery -->
        <!-- Option 1: defer to jQuery normally => framework skips loadding jQuery-->
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="./main.js"></script> -->
        <!-- Option 2:  use a placeholder script tag with data-src attr => framework async  loads jQuery then this script-->
        <script data-src="./main.js" data-dependency="jquery"></script>

        <script async src="../../dynamic-ui-framework/js/main.js" type="module"></script>
</body>

</html>