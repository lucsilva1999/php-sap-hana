<?php
$nome = 'Lucas';

ini_set( 'default_charset', 'utf-8');

$driver         = "HDBODBC";
$host           = "xxxxxxxxxxxxxx";
$db_name        = "xxxxxxxxxxxxxx";
$username       = "xxxxxxxxxxxx";
$password       = "xxxxxxxxxxx";

$conn = odbc_connect("Driver=$driver;ServerNode=$host;Database=$db_name;UID=$username;PWD=$password", $username, $password, SQL_CUR_USE_ODBC);

?>

<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Sticky Footer Template · Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="sticky-footer.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
    <div class="container">
      <h1 class="mt-5">SELECT PHP HANA</h1>
      <h4 class="mt-5"><?php

                        $sql = 'SELECT "ItemCode", "ItemName", "CardCode" from SBO_VALIDACAO_MB.OITM';
                        $result = odbc_exec($conn, $sql);
                        if (!$result) {
                          echo "OCORREU UM ERRO.\n";
                          echo "CÓDIGO DE ERRO: " . odbc_error() . ". MENSAGEM: " . odbc_errormsg();
                        } else {
                          while ($row = odbc_fetch_object($result)) {
                            // Should output one row containing the string 'X'

                            $ITCODE = $row->ItemCode;
                            $ITNAME = $row->ItemName;

                            //var_dump($row);

                            $tabela = "
              <table border = '1' align = 'justify' widht = '600px'>
              <tr>
              <td><b>&nbsp;Código do Item: &nbsp;</br></td>&nbsp;
              <td><b>&nbsp;Nome do Item: &nbsp;</b> </td>
              </tr>   
              <tr>
              <td>&nbsp; $ITCODE &nbsp; </td>
              <td>&nbsp; $ITNAME &nbsp; </td>
              </tr>    
              </table>";

                          echo $tabela;
                          }
                        }


                        ?></h4>
    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">xxxxxxxxxxxxxxxxxx</span>
    </div>
  </footer>
</body>

</html>