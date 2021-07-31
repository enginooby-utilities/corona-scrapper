<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8, shrink-to-fit=yes">
        <title>Corona Checker</title>

        <!-- OPTIONAL -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../../dynamic-ui-framework/css/dynamic-style.css" type="text/css">

        <!-- Override Dynamic Framework Style -->
        <style>
                /* TODO: Improve Dynamic Framework so that don't need to do this */
                .custom-background {
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
                        top: -2px;
                }
        </style>
</head>

<body class="glass-style custom-background">
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

                                <!-- RESULT -->
                                <br>
                                <div id="result-section">

                                </div>
                                <!-- <?php include "result.php" ?> -->
                        </div>
                </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script async src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.4.2/tinycolor.min.js" integrity="sha512-+aXA9mgbUvFe0ToTlbt8/3vT7+nOgUmFw29wfFCsGoh8AZMRSU0p4WtOvC1vkF2JBrndPN2TuNZsHPAKPPxe8Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script async src="../../dynamic-ui-framework/js/DynamicTheme.js" type="module"></script>

        <script>
                $countryInput = $("#country");
                $resultSection = $("#result-section");

                $('#check-button').on('click', () => {
                        const countryName = $countryInput.val();

                        $.ajax({
                                url: "scrap-data.php",
                                type: "get",
                                data: {
                                        country: countryName,
                                },
                                success: function(result) {
                                        $resultSection.html(result);
                                }
                        });
                })
        </script>
</body>

</html>