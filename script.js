const contactForm = document.getElementById("contact-form");

contactForm.addEventListener("submit", function (event) {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    if (!isValidEmail(email.value)) {
        alert("Please enter a valid email address.");
        event.preventDefault();
        return;
    }

    if (name.value.trim() === "" || message.value.trim() === "") {
        alert("Name and message cannot be empty.");
        event.preventDefault();
        return;
    }
});

function isValidEmail(email) {
    // A simple regex for email validation
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(email);
}
