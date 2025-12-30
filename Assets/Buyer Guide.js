
const loanAmount = document.getElementById("loanAmount");
const interestRate = document.getElementById("interestRate");
const loanTenure = document.getElementById("loanTenure");

const loanRange = document.getElementById("loanRange");
const interestRange = document.getElementById("interestRange");
const tenureRange = document.getElementById("tenureRange");

const emiAmount = document.getElementById("emiAmount");
const totalInterest = document.getElementById("totalInterest");
const totalPayment = document.getElementById("totalPayment");

function calculateEMI() {
  let P = parseFloat(loanAmount.value);
  let R = parseFloat(interestRate.value) / 12 / 100;
  let N = parseInt(loanTenure.value) * 12;

  let EMI = (P * R * Math.pow(1 + R, N)) / (Math.pow(1 + R, N) - 1);
  let totalPay = EMI * N;
  let interest = totalPay - P;

  emiAmount.innerText = "₹ " + EMI.toFixed(0);
  totalInterest.innerText = "₹ " + interest.toFixed(0);
  totalPayment.innerText = "₹ " + totalPay.toFixed(0);

  updateChart(P, interest);
}

/* Sync range & input */
[loanAmount, interestRate, loanTenure].forEach(input => {
  input.addEventListener("input", calculateEMI);
});

loanRange.addEventListener("input", () => {
  loanAmount.value = loanRange.value;
  calculateEMI();
});

interestRange.addEventListener("input", () => {
  interestRate.value = interestRange.value;
  calculateEMI();
});

tenureRange.addEventListener("input", () => {
  loanTenure.value = tenureRange.value;
  calculateEMI();
});

/* Chart */
const ctx = document.getElementById("emiChart");
let emiChart = new Chart(ctx, {
  type: "pie",
  data: {
    labels: ["Principal Amount", "Total Interest"],
    datasets: [{
      data: [1, 1],
      backgroundColor: ["#222", "#888"]
    }]
  },
  options: {
    plugins: {
      legend: { position: "bottom" }
    }
  }
});

function updateChart(principal, interest) {
  emiChart.data.datasets[0].data = [principal, interest];
  emiChart.update();
}

calculateEMI();
