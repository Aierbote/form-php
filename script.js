document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const button = document.querySelector('#submitButton');
  const select = document.querySelector('#form-service-choice');

  const inputs = form.querySelectorAll('input, select');

  inputs.forEach(input => {
    input.addEventListener('input', function () {
      let allAreValid = true;

      if (select.value === 'default') {
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