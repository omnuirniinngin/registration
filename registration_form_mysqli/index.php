<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="styles/style.css" type="text/css" rel="stylesheet">
</head>

<body>
  <div class="wrap">
    <h1>Sign up</h1>
    <h3>It's free and always will be.</h3>
    <div class="forms">
      <form action="includes/signup.php" method="post">
      <table>
        <tr>
          <td><label>First name:</label></td>
          <td><input type="text" name="first"></td>
        </tr>
        <tr>
          <td><label>Last name:</label></td>
          <td><input type="text" name="last"></td>
        </tr>
        <tr>
          <td><label>Your Email:</label></td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td><label>New Password:</label></td>
          <td><input type="password" name="pwd"></td>
        </tr>
        <tr>
          <td><label>I am:</label></td>
          <td>
            <select name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label>Birth:</label></td>
          <td><input type="date" name="birth"></td>
        </tr>
        <tr>
          <td><label></label></td>
          <td><button type="submit">Sign up</button></td>
        </tr>
      </table>
      </form>
    </div>

  </div>
</body>

</html>
