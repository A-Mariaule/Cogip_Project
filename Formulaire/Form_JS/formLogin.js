submit = document.querySelector("#form");

submit.addEventListener("submit", function (event) {
  event.preventDefault();
  const formData = new FormData(form);
  const email = formData.get("email");
  const password = formData.get("password");
  data = { email: email, password: password };
  let url = 'http://localhost:8001/connexion';
  let option = {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
      'Content-Type': 'application/json',
    },
  }
  fetch(url, option)
  .then(response => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error('Erreur lors de la récupération des données.');
    }
  })
  .then(data => console.log(data.message))
  .catch(error => console.error(error));
});

