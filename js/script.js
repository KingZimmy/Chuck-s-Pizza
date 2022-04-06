// JavaScript Document
const formSubmit = document.getElementById("contact-form");
formSubmit.addEventListener("submit", (event) => {
    event.preventDefault();
    Swal.fire("Success!", "Your message was sent!", "success");
});