<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HotelTravelia | Forex | Currency Converter</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css'>

    <link rel="stylesheet" href="css/style.css">


</head>

<body>

<div class="converter">
    <h2>Currency Converter</h2>
    <div class="converter-item">
        <input type="number" name="value" placeholder="Enter Amount" id="input_value">
        <button type="button" class="swap" title="Swap Currencies"><i class="fas fa-exchange-alt"
                                                                      aria-hidden="false" id="swap"></i></button>
        <a onclick="$('#setting').slideToggle('fast');" href="javascript://">
            <button type="button" class="setting" title="Converter Settings" hidden><i class="fa fa-cog"
                                                                                       aria-hidden="false"></i></button>
        </a>
        <button type="button" class="reset" title="Reset All"><i class="fas fa-times-circle"
                                                                 aria-hidden="false"></i></button>
        <input type="number" name="exchange_value" placeholder="Exchange Amount" id="exchange_value">
    </div>

    <div id="setting" style="display: none;">
        <span>Number of digits after comma</span>
        <input type="number" step="1" min="0" max="4" name="count-fixed" value="2" class="input-setting" name="value"
               placeholder="Number of digits after comma">
        <br>
        <span>Date of exchange rates</span>
        <input type="date" name="valute-history" class="input-setting">
        <br>
        <span>Show result details</span>
        <input type="checkbox" name="setting-detail" class="input-setting">
    </div>

    <div class="converter-item">
        <select name="from" data-size="10" data-style="btn btn-default btn-lg" class="selectpicker" id="from_select"
                data-live-search="true" title="From" data-width="100%" required>
            <option value="AUD"
                    data-content='<span class="flag-icon flag-icon-au flag-icon-squared"></span> <span class="valute">AUD</span> <small>Australian Dollar</small>'></option>
            <option value="BGN"
                    data-content='<span class="flag-icon flag-icon-bg flag-icon-squared"></span> <span class="valute">BGN</span> <small>Bulgarian Lev</small>'></option>
            <option value="BRL"
                    data-content='<span class="flag-icon flag-icon-br flag-icon-squared"></span> <span class="valute">BRL</span> <small>Brazilian Real</small>'></option>
            <option value="CAD"
                    data-content='<span class="flag-icon flag-icon-ca flag-icon-squared"></span> <span class="valute">CAD</span> <small>Canadian Dollar</small>'></option>
            <option value="CHF"
                    data-content='<span class="flag-icon flag-icon-ch flag-icon-squared"></span> <span class="valute">CHF</span> <small>Swiss Franc</small>'></option>
            <option value="CNY"
                    data-content='<span class="flag-icon flag-icon-cn flag-icon-squared"></span> <span class="valute">CNY</span> <small>Chinese Yuan</small>'></option>
            <option value="CZK"
                    data-content='<span class="flag-icon flag-icon-cz flag-icon-squared"></span> <span class="valute">CZK</span> <small>Czech Republic Koruna</small>'></option>
            <option value="DKK"
                    data-content='<span class="flag-icon flag-icon-dk flag-icon-squared"></span> <span class="valute">DKK</span> <small>Danish Krone</small>'></option>
            <option value="GBP"
                    data-content='<span class="flag-icon flag-icon-gb flag-icon-squared"></span> <span class="valute">GBP</span> <small>British Pound Sterling</small>'></option>
            <option value="HKD"
                    data-content='<span class="flag-icon flag-icon-hk flag-icon-squared"></span> <span class="valute">HKD</span> <small>Hong Kong Dollar</small>'></option>
            <option value="HRK"
                    data-content='<span class="flag-icon flag-icon-hr flag-icon-squared"></span> <span class="valute">HRK</span> <small>Croatian Kuna</small>'></option>
            <option value="HUF"
                    data-content='<span class="flag-icon flag-icon-hu flag-icon-squared"></span> <span class="valute">HUF</span> <small>Hungarian Forint</small>'></option>
            <option value="IDR"
                    data-content='<span class="flag-icon flag-icon-id flag-icon-squared"></span> <span class="valute">IDR</span> <small>Indonesian Rupiah</small>'></option>
            <option value="ILS"
                    data-content='<span class="flag-icon flag-icon-il flag-icon-squared"></span> <span class="valute">ILS</span> <small>Israeli New Sheqel</small>'></option>
            <option value="INR"
                    data-content='<span class="flag-icon flag-icon-in flag-icon-squared"></span> <span class="valute">INR</span> <small>Indian Rupee</small>'></option>
            <option value="JPY"
                    data-content='<span class="flag-icon flag-icon-jp flag-icon-squared"></span> <span class="valute">JPY</span> <small>Japanese Yen</small>'></option>
            <option value="KRW"
                    data-content='<span class="flag-icon flag-icon-kr flag-icon-squared"></span> <span class="valute">KRW</span> <small>South Korean Won</small>'></option>
            <option value="MXN"
                    data-content='<span class="flag-icon flag-icon-mx flag-icon-squared"></span> <span class="valute">MXN</span> <small>Mexican Peso</small>'></option>
            <option value="MYR"
                    data-content='<span class="flag-icon flag-icon-my flag-icon-squared"></span> <span class="valute">MYR</span> <small>Malaysian Ringgit</small>'></option>
            <option value="NOK"
                    data-content='<span class="flag-icon flag-icon-no flag-icon-squared"></span> <span class="valute">NOK</span> <small>Norwegian Krone</small>'></option>
            <option value="NZD"
                    data-content='<span class="flag-icon flag-icon-nz flag-icon-squared"></span> <span class="valute">NZD</span> <small>New Zealand Dollar</small>'></option>
            <option value="PHP"
                    data-content='<span class="flag-icon flag-icon-ph flag-icon-squared"></span> <span class="valute">PHP</span> <small>Philippine Peso</small>'></option>
            <option value="PLN"
                    data-content='<span class="flag-icon flag-icon-pl flag-icon-squared"></span> <span class="valute">PLN</span> <small>Polish Zloty</small>'></option>
            <option value="RON"
                    data-content='<span class="flag-icon flag-icon-ro flag-icon-squared"></span> <span class="valute">RON</span> <small>Romanian Leu</small>'></option>
            <option value="RUB"
                    data-content='<span class="flag-icon flag-icon-ru flag-icon-squared"></span> <span class="valute">RUB</span> <small>Russian Ruble</small>'></option>
            <option value="SEK"
                    data-content='<span class="flag-icon flag-icon-se flag-icon-squared"></span> <span class="valute">SEK</span> <small>Swedish Krona</small>'></option>
            <option value="SGD"
                    data-content='<span class="flag-icon flag-icon-sg flag-icon-squared"></span> <span class="valute">SGD</span> <small>Singapore Dollar</small>'></option>
            <option value="THB"
                    data-content='<span class="flag-icon flag-icon-th flag-icon-squared"></span> <span class="valute">THB</span> <small>Thai Baht</small>'></option>
            <option value="TRY"
                    data-content='<span class="flag-icon flag-icon-tr flag-icon-squared"></span> <span class="valute">TRY</span> <small>Turkish Lira</small>'></option>
            <option value="USD"
                    data-content='<span class="flag-icon flag-icon-us flag-icon-squared"></span> <span class="valute">USD</span> <small>United States Dollar</small>'></option>
            <option value="ZAR"
                    data-content='<span class="flag-icon flag-icon-za flag-icon-squared"></span> <span class="valute">ZAR</span> <small>South African Rand</small>'></option>
        </select>
    </div>
    <div class="converter-item">
        <select name="to" data-size="10" data-style="btn btn-default btn-lg" class="selectpicker" id="to_select"
                data-live-search="true" title="To" data-width="100%" required>
            <option value="AUD"
                    data-content='<span class="flag-icon flag-icon-au flag-icon-squared"></span> <span class="valute">AUD</span> <small>Australian Dollar</small>'></option>
            <option value="BGN"
                    data-content='<span class="flag-icon flag-icon-bg flag-icon-squared"></span> <span class="valute">BGN</span> <small>Bulgarian Lev</small>'></option>
            <option value="BRL"
                    data-content='<span class="flag-icon flag-icon-br flag-icon-squared"></span> <span class="valute">BRL</span> <small>Brazilian Real</small>'></option>
            <option value="CAD"
                    data-content='<span class="flag-icon flag-icon-ca flag-icon-squared"></span> <span class="valute">CAD</span> <small>Canadian Dollar</small>'></option>
            <option value="CHF"
                    data-content='<span class="flag-icon flag-icon-ch flag-icon-squared"></span> <span class="valute">CHF</span> <small>Swiss Franc</small>'></option>
            <option value="CNY"
                    data-content='<span class="flag-icon flag-icon-cn flag-icon-squared"></span> <span class="valute">CNY</span> <small>Chinese Yuan</small>'></option>
            <option value="CZK"
                    data-content='<span class="flag-icon flag-icon-cz flag-icon-squared"></span> <span class="valute">CZK</span> <small>Czech Republic Koruna</small>'></option>
            <option value="DKK"
                    data-content='<span class="flag-icon flag-icon-dk flag-icon-squared"></span> <span class="valute">DKK</span> <small>Danish Krone</small>'></option>
            <option value="GBP"
                    data-content='<span class="flag-icon flag-icon-gb flag-icon-squared"></span> <span class="valute">GBP</span> <small>British Pound Sterling</small>'></option>
            <option value="HKD"
                    data-content='<span class="flag-icon flag-icon-hk flag-icon-squared"></span> <span class="valute">HKD</span> <small>Hong Kong Dollar</small>'></option>
            <option value="HRK"
                    data-content='<span class="flag-icon flag-icon-hr flag-icon-squared"></span> <span class="valute">HRK</span> <small>Croatian Kuna</small>'></option>
            <option value="HUF"
                    data-content='<span class="flag-icon flag-icon-hu flag-icon-squared"></span> <span class="valute">HUF</span> <small>Hungarian Forint</small>'></option>
            <option value="IDR"
                    data-content='<span class="flag-icon flag-icon-id flag-icon-squared"></span> <span class="valute">IDR</span> <small>Indonesian Rupiah</small>'></option>
            <option value="ILS"
                    data-content='<span class="flag-icon flag-icon-il flag-icon-squared"></span> <span class="valute">ILS</span> <small>Israeli New Sheqel</small>'></option>
            <option value="INR"
                    data-content='<span class="flag-icon flag-icon-in flag-icon-squared"></span> <span class="valute">INR</span> <small>Indian Rupee</small>'></option>
            <option value="JPY"
                    data-content='<span class="flag-icon flag-icon-jp flag-icon-squared"></span> <span class="valute">JPY</span> <small>Japanese Yen</small>'></option>
            <option value="KRW"
                    data-content='<span class="flag-icon flag-icon-kr flag-icon-squared"></span> <span class="valute">KRW</span> <small>South Korean Won</small>'></option>
            <option value="MXN"
                    data-content='<span class="flag-icon flag-icon-mx flag-icon-squared"></span> <span class="valute">MXN</span> <small>Mexican Peso</small>'></option>
            <option value="MYR"
                    data-content='<span class="flag-icon flag-icon-my flag-icon-squared"></span> <span class="valute">MYR</span> <small>Malaysian Ringgit</small>'></option>
            <option value="NOK"
                    data-content='<span class="flag-icon flag-icon-no flag-icon-squared"></span> <span class="valute">NOK</span> <small>Norwegian Krone</small>'></option>
            <option value="NZD"
                    data-content='<span class="flag-icon flag-icon-nz flag-icon-squared"></span> <span class="valute">NZD</span> <small>New Zealand Dollar</small>'></option>
            <option value="PHP"
                    data-content='<span class="flag-icon flag-icon-ph flag-icon-squared"></span> <span class="valute">PHP</span> <small>Philippine Peso</small>'></option>
            <option value="PLN"
                    data-content='<span class="flag-icon flag-icon-pl flag-icon-squared"></span> <span class="valute">PLN</span> <small>Polish Zloty</small>'></option>
            <option value="RON"
                    data-content='<span class="flag-icon flag-icon-ro flag-icon-squared"></span> <span class="valute">RON</span> <small>Romanian Leu</small>'></option>
            <option value="RUB"
                    data-content='<span class="flag-icon flag-icon-ru flag-icon-squared"></span> <span class="valute">RUB</span> <small>Russian Ruble</small>'></option>
            <option value="SEK"
                    data-content='<span class="flag-icon flag-icon-se flag-icon-squared"></span> <span class="valute">SEK</span> <small>Swedish Krona</small>'></option>
            <option value="SGD"
                    data-content='<span class="flag-icon flag-icon-sg flag-icon-squared"></span> <span class="valute">SGD</span> <small>Singapore Dollar</small>'></option>
            <option value="THB"
                    data-content='<span class="flag-icon flag-icon-th flag-icon-squared"></span> <span class="valute">THB</span> <small>Thai Baht</small>'></option>
            <option value="TRY"
                    data-content='<span class="flag-icon flag-icon-tr flag-icon-squared"></span> <span class="valute">TRY</span> <small>Turkish Lira</small>'></option>
            <option value="USD"
                    data-content='<span class="flag-icon flag-icon-us flag-icon-squared"></span> <span class="valute">USD</span> <small>United States Dollar</small>'></option>
            <option value="ZAR"
                    data-content='<span class="flag-icon flag-icon-za flag-icon-squared"></span> <span class="valute">ZAR</span> <small>South African Rand</small>'></option>
        </select>
    </div>
    <div class="result-container">
        <button id="submit" type="submit" class="btn btn-warning" title="Convert"><i class="fas fa-money-bill-wave"
                                                                         aria-hidden="false"></i>Convert
        </button>
        <div id="converter-result"></div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js'></script>


<script src="js/index.js"></script>


</body>

</html>
