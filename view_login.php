<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sisselogimine</title>
    <link rel="stylesheet" href="ladu.css" type="text/css" charset="utf-8">
  </head>
  <body>
    <div id="div-lehe_sisu">
    <h1>Logi sisse</h1>
    <div id="div-logimine">
      <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="action" value="login">
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
          <a href="<?= $_SERVER ['PHP_SELF'];?>?view=registreeri">Registreeri konto</a>
        </p>
      </form>
    </div>
  </div>
  </body>
</html>
