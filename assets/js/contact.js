const form = document.getElementsByTagName("form")[0];

form.addEventListener("submit", function (event) {
   event.preventDefault();

   const name = document.getElementById("inputName").value;
   const email = document.getElementById("inputEmail").value;
   const phone = document.getElementById("inputPhoneNumber").value;
   const subject = document.getElementById("inputSubject").value;
   const message = document.getElementById("inputMessage").value;

   const mailReceiver = "m.ainurridho11@gmail.com";
   document.location.href = `mailto:${mailReceiver}?subject=${subject}&cc=${email}&body=Hello, my name is ${name}, ${message} and you can also call me to my number ${phone}`;
});
