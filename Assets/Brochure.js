const loanAmount = document.getElementById("loanAmount");
const loanRange = document.getElementById("loanRange");

const interestRate = document.getElementById("interestRate");
const interestRange = document.getElementById("interestRange");

const loanTenure = document.getElementById("loanTenure");
const tenureRange = document.getElementById("tenureRange");

const emiAmount = document.getElementById("emiAmount");
const totalInterest = document.getElementById("totalInterest");
const totalPayment = document.getElementById("totalPayment");

// Default values
loanAmount.value = loanRange.value = 5000000;
interestRate.value = interestRange.value = 10.5;
loanTenure.value = tenureRange.value = 20;

// Sync
function sync(input, range) {
  input.addEventListener("input", () => {
    range.value = input.value;
    calculateEMI();
  });

  range.addEventListener("input", () => {
    input.value = range.value;
    calculateEMI();
  });
}

sync(loanAmount, loanRange);
sync(interestRate, interestRange);
sync(loanTenure, tenureRange);

// Chart
let chart = new Chart(document.getElementById("emiChart"), {
  type: "doughnut",
  data: {
    labels: ["Principal", "Interest"],
    datasets: [{
      data: [0, 0],
      backgroundColor: ["#4CAF50", "#FF5733"]
    }]
  },
  options: {
    plugins: {
      legend: {
        labels: { color: "#fff" }
      }
    }
  }
});

// EMI Calculation
function calculateEMI() {
  let P = parseFloat(loanAmount.value);
  let r = parseFloat(interestRate.value) / 12 / 100;
  let n = parseFloat(loanTenure.value) * 12;

  let emi = (P * r * Math.pow(1 + r, n)) /
            (Math.pow(1 + r, n) - 1);

  let total = emi * n;
  let interest = total - P;

  emiAmount.innerText = "₹ " + Math.round(emi);
  totalInterest.innerText = "₹ " + Math.round(interest);
  totalPayment.innerText = "₹ " + Math.round(total);

  chart.data.datasets[0].data = [P, interest];
  chart.update();
}

calculateEMI();