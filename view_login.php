<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sisselogimine</title>
  </head>
  <body>
    <h1>Logi sisse</h1>

    <div id="div-logimine">

      <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

        <input type="hidden" name="action" value="login">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

          <table id="table-login">
            <tr>
              <td>Kasutajanimi</td>
              <td>
                <input type="text" name="kasutajanimi" required>
              </td>
            </tr>
            <tr>
              <td>Parool</td>
              <td>
                <input type="password" name="parool" required>
              </td>
            </tr>
          </table>
        <p>
          <button type="submit">Logi sisse</button> või
          <a href="view_register.php">Registreeri konto</a>
        </p>
      </form>
    </div>
  </body>
</html>
