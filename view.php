<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ladu</title>
    <link rel="stylesheet" href="ladu.css" type="text/css" charset="utf-8">
  </head>
  <body>
    <div id="div-lehe_sisu">
    <div style="float: right;">
        <form method="post"  action="<?= $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="action" value="logout">
            <button type="submit">Logi välja</button>
        </form>
    </div>
    <h1>Lilleladu</h1>
    <div id="div-vorm">
      <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="action" value="lisa_toode">
        <table id="table-vorm">
          <tr>
            <td>Toode</td>
            <td><input type="text" name="toote_nimi"></td>
          </tr>
          <tr>
            <td>Toote kogus</td>
            <td><input type="number" name="toote_kogus"></td>
          </tr>
          <tr>
            <td><button type="submit"id="nupp-salvesta">Salvesta</button></td>
          </tr>
        </table>
      </form>
    </div>
    <div id="div-tabel">
      <table id="table-tabel">
        <thead>
          <tr>
            <th>Nimetus</th>
            <th>Kogus</th>
            <th>Tegevused</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
foreach (model_lae_tooted() as $rida):
?>
         <tr>
            <td>
              <?= $rida['Nimetus']; ?>
           </td>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
              <input type="hidden" name="action" value="muuda">
              <input type="hidden" name="id" value="<?= $rida['Id']; ?>">
              <td>
                <input class="tootekogus" type="number" name="kogus" value="<?= $rida['Kogus']; ?>">
              </td>
              <td>
                <button type="submit">Muuda</button>
              </td>
            </form>
            <td>
              <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="action" value="kustuta">
                <input type="hidden" name="id" value="<?= $rida['Id']; ?>">
                <button type="submit">Kustuta</button>
              </form>
            </td>
          </tr>
        <?php
endforeach;
?>
       </tbody>
      </table>
      </div>
    </div>
  <script src="ladu.js"></script>
  </body>
</html>
