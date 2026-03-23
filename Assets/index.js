const questions = document.querySelectorAll(".faq-question");

questions.forEach((question) => {

  question.addEventListener("click", () => {

    const answer = question.nextElementSibling;
    const icon = question.querySelector(".plus");

    if (answer.style.maxHeight) {
      answer.style.maxHeight = null;
      icon.textContent = "+";
    } else {
      answer.style.maxHeight = answer.scrollHeight + "px";
      icon.textContent = "-";
    }

  });

});