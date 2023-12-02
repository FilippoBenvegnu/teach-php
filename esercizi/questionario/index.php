<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    body {
      background-color: <?php echo isset($_GET['bgColor']) ? $_GET['bgColor'] : '#f8f9fa'; ?>;
    }

    .container {
      margin-top: 50px;
      max-width: 400px;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #007bff;
    }

    label {
      margin-top: 10px;
      color: #343a40;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #ffffff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container">

    <h1>😴CHILL FORM😴</h1>

    <form action="./action-register.php" method="GET">
      <label for="fname">First name:</label>
      <input type="text" id="fname" name="fname">

      <label for="lname">Last name:</label>
      <input type="text" id="lname" name="lname">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age">

      <label for="bgColor">Background Color:</label>
      <input type="color" id="bgColor" name="bgColor">

      <input type="submit">
    </form>
  </div>
</body>

</html>
