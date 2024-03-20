document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const button = document.querySelector('#submitButton');

  const select = document.querySelector('#form-service-choice');

  const inputs = form.querySelectorAll('input, select');

  const regexEmail = /^[a-zA-Z0-9.-|(\+)]+@(\w+)(\.(\w{2,})){1,2}$/;

  inputs.forEach(input => {
    input.addEventListener('input', function () {
      let allAreValid = true;
      const email = (document.querySelector('input[type="email"]').value).trim();

      if (select.value === 'default') {
        allAreValid = false;
      }

      if (!regexEmail.test(email)) {
        allAreValid = false;
      }


      inputs.forEach(input => {
        if (!input.value) {
          allAreValid = false;
        }

      });
      button.disabled = !allAreValid;


    });

  });

});