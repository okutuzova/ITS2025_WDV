document.addEventListener("DOMContentLoaded", function () {
    let seconds = 10;
    const timer = document.getElementById("timer");
    const form = document.getElementById("flags-form");
    const expiredInput = document.getElementById("expired");
    const buttons = document.querySelectorAll(".quiz-btn");

    const interval = setInterval(() => {
        seconds--;
        if (timer) timer.textContent = seconds;
        if (seconds <= 0) {
            clearInterval(interval);
            buttons.forEach((button) => (button.disabled = true));
            expiredInput.value = 1;
            form.submit();
        }
    }, 1000);
});
