const form = document.getElementById('form');
const error = document.getElementById('error');
const login = document.getElementById('login');

form.onsubmit = submit;
login.oninvalid = invalid;

function invalid(event) {
  error.removeAttribute('hidden');
}

function submit(event) {
  error.removeAttribute('hidden');

  // For this example, don't actually submit the form
  event.preventDefault();
}