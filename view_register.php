<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registreerimine</title>
    <link rel="stylesheet" href="ladu.css" type="text/css" charset="utf-8">
  </head>
  <body>
    <div id="div-lehe_sisu">
    <h1>Registreeri konto</h1>
    <div id="div-registreerimine">
      <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="action" value="registreeri">
          <table id="table-registreeri">
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
            <button type="submit">Registeeri konto</button> või
            <a href="view_login.php">Tagasi</a>
          </p>
      </form>
    </div>
  </div>
  </body>
</html>
