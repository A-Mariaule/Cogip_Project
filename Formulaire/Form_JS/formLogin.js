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
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error('Erreur lors de la récupération des données:', error);
  });


  let option2 = {
    method: 'GET'
  }
  fetch(url, option2)
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error('Erreur lors de la récupération des données:', error);
  });
});

