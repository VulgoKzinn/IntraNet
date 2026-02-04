<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 20px;
    }

    h2 {
      margin-bottom: 15px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 10px 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
      font-size: 14px;
    }

    th {
      background: #f0f0f0;
      font-weight: bold;
    }

    tr:hover {
      background: #f9f9f9;
    }

    .actions a {
      margin-right: 8px;
      text-decoration: none;
      color: #0073e6;
      font-weight: bold;
    }

    .actions a:hover {
      text-decoration: underline;
    }

    .footer {
      margin-top: 10px;
      font-size: 13px;
      color: #555;
    }
  </style>
</head>
<body>
    <?php include 'templates\TemplatesPaginas\header.php'; ?>
    <main>

  <h2>Lista de Arquivos</h2>

  <table>
    <thead>
      <tr>
        <th>Nome do Arquivo</th>
        <th>Proteção</th>
        <th>Dono</th>
        <th>Tamanho</th>
        <th>Modificado em</th>
        <th>Operações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>db_pet_2026-01-22_22_27_23.sql</td>
        <td>Não protegido</td>
        <td>www</td>
        <td>2.72 KB</td>
        <td>03/02/2026 22:05</td>
        <td class="actions">
          <a href="#">Baixar</a>
          <a href="#">Excluir</a>
        </td>
      </tr>
      <tr>
        <td>db_pet_2026-01-22_22_26_09.sql</td>
        <td>Não protegido</td>
        <td>www</td>
        <td>643.34 KB</td>
        <td>03/02/2026 22:05</td>
        <td class="actions">
          <a href="#">Baixar</a>
          <a href="#">Excluir</a>
        </td>
      </tr>
      <tr>
        <td>db_pet_2026-01-21_18_49_10.sql</td>
        <td>Não protegido</td>
        <td>www</td>
        <td>2.76 KB</td>
        <td>03/02/2026 22:05</td>
        <td class="actions">
          <a href="#">Baixar</a>
          <a href="#">Excluir</a>
        </td>
      </tr>
      <tr>
        <td>db_pet_2026-01-22_22_14_14.sql</td>
        <td>Não protegido</td>
        <td>www</td>
        <td>3.49 KB</td>
        <td>03/02/2026 22:05</td>
        <td class="actions">
          <a href="#">Baixar</a>
          <a href="#">Excluir</a>
        </td>
      </tr>
      <tr>
        <td>db_pet_2026-01-22_22_25_12.sql</td>
        <td>Não protegido</td>
        <td>www</td>
        <td>4.01 KB</td>
        <td>03/02/2026 22:05</td>
        <td class="actions">
          <a href="#">Baixar</a>
          <a href="#">Excluir</a>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="footer">
    Total: 5 arquivos, 0 diretórios.
  </div>
    </main>
    <?php include 'templates\TemplatesPaginas\footer.php'; ?>

</body>
</html>