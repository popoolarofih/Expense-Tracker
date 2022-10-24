<!DOCTYPE html>
<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>JavaScript Currency Converter | Webdevtrick.com</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
</head>
<style>@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
    * {
    box-sizing: border-box;
    }
    body {
    background: linear-gradient(to bottom, #aff2ff 0%, #aff2ff 50%, #50dcff 50%, #50dcff 100%);
    font-family: 'Muli', sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    }
    .currency {
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .currency select {
    background: transparent;
        background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%20000002%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');
        background-repeat: no-repeat, repeat;
        background-position: right .2em top 50%, 0 0;
        background-size: .50em auto, 100%;
    border: 0;
    padding-right: 20px;
    font-size: 22px;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
    }
    .currency input {
    border: 0;
    background: transparent;
    font-size: 22px;
    text-align: right;
    }
    .middle {
    color: #f59300;
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .middle button {
    background-color: #fff;
    border: 2px solid #ecf0f1;
    border-radius: 50%;
    cursor: pointer;
    color: #f59300;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 30px;
    width: 30px;
    transform: rotate(90deg);
    }
    .middle button:active {
    transform: rotate(90deg) scale(0.9);
    }
    .middle .rate {
    background-color: #fff;
    border: 2px solid #ecf0f1;
    border-radius: 50px;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 30px;
    padding: 0 10px;
    margin: 30px 15px 30px 25px;
    }
    select:focus, input:focus, button:focus {
    outline: 0;
    }
    </style>
<body>
 
<div class="container">
<div class="currency">
<select id="from_currency">
<option value="AED">AED</option>
<option value="ARS">ARS</option>
<option value="AUD">AUD</option>
<option value="BGN">BGN</option>
<option value="BRL">BRL</option>
<option value="BSD">BSD</option>
<option value="CAD">CAD</option>
<option value="CHF">CHF</option>
<option value="CLP">CLP</option>
<option value="CNY">CNY</option>
<option value="COP">COP</option>
<option value="CZK">CZK</option>
<option value="DKK">DKK</option>
<option value="DOP">DOP</option>
<option value="EGP">EGP</option>
<option value="EUR">EUR</option>
<option value="FJD">FJD</option>
<option value="GBP">GBP</option>
<option value="GTQ">GTQ</option>
<option value="HKD">HKD</option>
<option value="HRK">HRK</option>
<option value="HUF">HUF</option>
<option value="IDR">IDR</option>
<option value="ILS">ILS</option>
<option value="INR">NIR</option>
<option value="ISK">ISK</option>
<option value="JPY">JPY</option>
<option value="KRW">KRW</option>
<option value="KZT">KZT</option>
<option value="MXN">MXN</option>
<option value="MYR">MYR</option>
<option value="NOK">NOK</option>
<option value="NZD">NZD</option>
<option value="PAB">PAB</option>
<option value="PEN">PEN</option>
<option value="PHP">PHP</option>
<option value="PKR">PKR</option>
<option value="PLN">PLN</option>
<option value="PYG">PYG</option>
<option value="RON">RON</option>
<option value="RUB">RUB</option>
<option value="SAR">SAR</option>
<option value="SEK">SEK</option>
<option value="SGD">SGD</option>
<option value="THB">THB</option>
<option value="TRY">TRY</option>
<option value="TWD">TWD</option>
<option value="UAH">UAH</option>
<option value="USD" selected>USD</option>
<option value="UYU">UYU</option>
<option value="VND">VND</option>
<option value="ZAR">ZAR</option>
</select>
<input type="number" id="from_ammount" placeholder="0" value=1 />
</div>
<div class="middle">
<button id="exchange">
<i class="fas fa-exchange-alt"></i>
</button>
<div class="rate" id="rate"></div>
</div>
<div class="currency">
<select id="to_currency"><option value="AED">AED</option>
<option value="ARS">ARS</option>
<option value="AUD">AUD</option>
<option value="BGN">BGN</option>
<option value="BRL">BRL</option>
<option value="BSD">BSD</option>
<option value="CAD">CAD</option>
<option value="CHF">CHF</option>
<option value="CLP">CLP</option>
<option value="CNY">CNY</option>
<option value="COP">COP</option>
<option value="CZK">CZK</option>
<option value="DKK">DKK</option>
<option value="DOP">DOP</option>
<option value="EGP">EGP</option>
<option value="EUR">EUR</option>
<option value="FJD">FJD</option>
<option value="GBP">GBP</option>
<option value="GTQ">GTQ</option>
<option value="HKD">HKD</option>
<option value="HRK">HRK</option>
<option value="HUF">HUF</option>
<option value="IDR">IDR</option>
<option value="ILS">ILS</option>
<option value="INR" selected>INR</option>
<option value="ISK">ISK</option>
<option value="JPY">JPY</option>
<option value="KRW">KRW</option>
<option value="KZT">KZT</option>
<option value="MXN">MXN</option>
<option value="MYR">MYR</option>
<option value="NOK">NOK</option>
<option value="NZD">NZD</option>
<option value="PAB">PAB</option>
<option value="PEN">PEN</option>
<option value="PHP">PHP</option>
<option value="PKR">PKR</option>
<option value="PLN">PLN</option>
<option value="PYG">PYG</option>
<option value="RON">RON</option>
<option value="RUB">RUB</option>
<option value="SAR">SAR</option>
<option value="SEK">SEK</option>
<option value="SGD">SGD</option>
<option value="THB">THB</option>
<option value="TRY">TRY</option>
<option value="TWD">TWD</option>
<option value="UAH">UAH</option>
<option value="USD">USD</option>
<option value="UYU">UYU</option>
<option value="VND">VND</option>
<option value="ZAR">ZAR</option>
</select>
<input type="number" id="to_ammount" placeholder="0" />
</div>
</div>
  <script>const from_currencyEl = document.getElementById('from_currency');
    const from_ammountEl = document.getElementById('from_ammount');
    const to_currencyEl = document.getElementById('to_currency');
    const to_ammountEl = document.getElementById('to_ammount');
    const rateEl = document.getElementById('rate');
    const exchange = document.getElementById('exchange');
     
    from_currencyEl.addEventListener('change', calculate);
    from_ammountEl.addEventListener('input', calculate);
    to_currencyEl.addEventListener('change', calculate);
    to_ammountEl.addEventListener('input', calculate);
     
    exchange.addEventListener('click', () => {
    const temp = from_currencyEl.value;
    from_currencyEl.value = to_currencyEl.value;
    to_currencyEl.value = temp;
    calculate();
    });
     
    function calculate() {
    const from_currency = from_currencyEl.value;
    const to_currency = to_currencyEl.value;
    fetch(`https://api.exchangerate-api.com/v4/latest/${from_currency}`)
    .then(res => res.json())
    .then(res => {
    const rate = res.rates[to_currency];
    rateEl.innerText = `1 ${from_currency} = ${rate} ${to_currency}`
    to_ammountEl.value = (from_ammountEl.value * rate).toFixed(2);
    })
    }
     
    calculate() 
    </script>
 
</body>
</html>