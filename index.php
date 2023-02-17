<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let url='http://localhost:8001/company/3';
    let option = {
    method: 'GET'/*
     body: JSON.stringify(data),
    headers: {
      'Content-Type': 'application/json',
    },
*/}
    fetch(url,option)
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error(error));
    </script>
</body>
</html>