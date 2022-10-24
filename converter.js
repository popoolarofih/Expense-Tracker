const from_currencyE1 = document.getElementById('from_currency');
const from_amountE1 = document.getElementById('from_amount');
const to_currencyE1 = document.getElementById('to_currency');
const to_amountE1 = document.getElementById('to_amount');
const rateE1 = document.getElementById('rate');
const exchange = document.getElementById('exchange');

from_currencyE1.addEventListener("change", calculate);
from_amountE1.addEventListener("input", calculate);
to_currencyE1.addEventListener("change", calculate);
to_amountE1.addEventListener("input", calculate);
exchange.addEventListener("click", () => {
  const aisha = from_currencyE1.value;
  from_currencyE1.value = to_currencyE1.value;
  to_currencyE1.value = aisha;
  calculate();
})

function calculate() {
  // console.log("im working")
  const from_currency = from_currencyE1.value;
  const to_currency = to_currencyE1.value;

  fetch(`https://v6.exchangerate-api.com/v6/2c99a8699ea0ff2ff89996a3/latest/${from_currencyE1.value.toUpperCase()}`)
    .then(res => res.json())
    .then(res => {
      const to = to_currencyE1.value.toUpperCase();
      const rate = res.conversion_rates[to];

      // console.log(rate)
      rateE1.innerText = `1 ${from_currency} = ${rate} ${to_currency}`
      to_amountE1.value = (from_amountE1.value * rate).toFixed(2);

    })
}

calculate();