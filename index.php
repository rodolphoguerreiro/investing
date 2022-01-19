<!DOCTYPE HTML>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:og='http://ogp.me/ns#'>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Language" content="pt-br" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <meta name="language" content="pt-br"/>

    <title>Investing</title>

    <!--Bootstrap4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!--DataTable Bootstrap4-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.min.css">

    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--Bootstrap4-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.min.js"></script>
    <!--Font Awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>

</head>
<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-6 text-center">
                <iframe frameborder="0" width="706" height="1200" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" src="https://sslecal2.forexprostools.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&countries=25,6,5,35,43,4,12,72&calType=day&timeZone=12&lang=12"></iframe>
            </div>
            <div class="col-6 text-center">
                <div class="row">
                    <div class="col-6">
                        EUR/USD<br/>
                        0% < 2,5% => Sell
                    </div>
                    <div class="col-6">
                        USD/JPY<br/>
                        2,5% > -0,1% => Buy
                    </div>
                </div>
                <br/>
                <iframe frameborder="0" scrolling="no" height=50 width="545" allowtransparency="true" marginwidth="0" marginheight="0" src="https://sslirates.forexprostools.com/index.php?rows=4&bg1=FFFFFF&bg2=F1F5F8&text_color=333333&enable_border=show&border_color=0452A1&header_bg=0452A1&header_text=FFFFFF&force_lang=12"></iframe>
                <iframe frameborder="0" scrolling="auto" height="195" width="555" allowtransparency="true" marginwidth="0" marginheight="0" src="https://sslfxrates.forexprostools.com/index_exchange.php?params&inner-border-color=%23CBCBCB&border-color=%23cbcbcb&bg1=%23F6F6F6&bg2=%23ffffff&inner-text-color=%23000000&currency-name-color=%23000000&header-text-color=%23FFFFFF&force_lang=12" align="center"></iframe>
                <iframe frameborder="0" scrolling="no" height="274" width="505" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/technical_summary.php?pairs=&curr-name-color=%230059B0&fields=5m,15m,1h,1d&force_lang=12"></iframe>
                <iframe frameborder="0" scrolling="no" height="425" width="430" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/margin-calculator/index.php?force_lang=12&acc=3&pair=1"></iframe>
            </div>
        </div>

        <hr>

        <?php $groups = [
                'majors' => [
                    'CAD/JPY' => 51,
                    'CAD/CHF' => 14,
                    'CHF/JPY' => 13,
                    'EUR/CAD' => 16,
                    'EUR/CHF' => 10,
                    'EUR/GBP' => 6,
                    'EUR/JPY' => 9,
                    'EUR/USD' => 1,
                    'GBP/CAD' => 54,
                    'GBP/CHF' => 12,
                    'GBP/USD' => 2,
                    'USD/JPY' => 3,
                    'USD/CAD' => 7,
                    'USD/CHF' => 4,
                ],
                'minors' => [
                    'AUD/NZD' => 50,
                    'AUD/CAD' => 47,
                    'AUD/CHF' => 48,
                    'AUD/JPY' => 49,
                    'EUR/AUD' => 15,
                    'AUD/USD' => 5,
                    'EUR/NZD' => 52,
                    'NZD/USD' => 8,
                    'GBP/AUD' => 53,
                    'GBP/NZD' => 55,
                    'NZD/CAD' => 56,
                    'NZD/CHF' => 57,
                    'NZD/JPY' => 58,
                ],
                'exotics' => [
                    'EUR/HUF' => 117,
                    'EUR/PLN' => 46,
                    'EUR/SGD' => 102,
                    'EUR/TRY' => 66,
                    'GBP/SGD' => 60,
                    'NZD/SGD' => 149,
                    'SGD/JPY' => 145,
                    'USD/SGD' => 42,
                    'USD/TRY' => 18,
                    'USD/HUF' => 91,
                    'USD/PLN' => 40,
                    'EUR/DKK' => 44,
                    'EUR/HKD' => 148,
                    'CHF/SGD' => 107,
                    'EUR/NOK' => 37,
                    'USD/CNH' => 961728,
                    'EUR/SEK' => 61,
                    'EUR/ZAR' => 100,
                    'GBP/DKK' => 134,
                    'USD/RUB' => 962711,
                    'GBP/SEK' => 105,
                    'USD/DKK' => 43,
                    'USD/HKD' => 155,
                    'USD/MXN' => 39,
                    'USD/NOK' => 59,
                    'USD/SEK' => 41,
                    'USD/ZAR' => 17,
                    'EUR/RUB' => 1691,
                ]
            ];

        foreach ($groups as $key => $group) : ?>

            <h4><?php echo ucfirst($key); ?></h4>

            <div class="row">
                <?php foreach ($group as $par) : ?>
                    <div class="col-3 my-2">
                        <?php $url = "https://sslcharts.forexprostools.com/index.php?force_lang=12&pair_ID={$par}&timescale=900&candles=25&style=candles"; ?>
                        <iframe frameborder="0" marginwidth="0" marginheight="0" scrolling="no" height="300" width="348" src="<?php echo $url; ?>"></iframe>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endforeach; ?>

    </div>

</body>
</html>
