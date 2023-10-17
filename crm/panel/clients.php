<?php
  $sql = "SELECT * FROM usuarios ORDER BY id DESC";
  $result = $conection->prepare($sql);
  $result->execute();
  
?>

  <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
  <a href="system.php?page=registerClients"
    class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
  >Cadastrar Clientes</a><br><br>
    <table class="is-zebra w-full text-left">
      <thead>
        <tr>
          <th
            class="middle whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
            #
          </th>
          <th
            class="middle whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
            Nome
          </th>
          <th
            class="middle whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
            Email
          </th>
          <th
            class="middle whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
            Senha
          </th>
          <th
            class="middle whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
            Telefone
          </th>
          <th
            class="middle whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
            CPF
          </th>
          <th
            class="middle whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
            Nivel
          </th>
          <th
            class="middle whitespace-nowrap rounded-r-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
            Ações
          </th>
        </tr>
      </thead>
        <?php
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
      <tbody>
        <tr>
          <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5"><?php echo $row["id"]; ?></td>
          <td class="whitespace-nowrap px-4 py-3 sm:px-5"><?php echo $row["nome"]; ?></td>
          <td class="whitespace-nowrap px-4 py-3 sm:px-5"><?php echo $row["email"]; ?></td>
          <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5"><?php echo $row["senha"]; ?></td>
          <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5"><?php echo $row["telefone"]; ?></td>
          <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5"><?php echo $row["cpf"]; ?></td>
          <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5"><?php echo $row["nivel"]; ?></td>
          <td class="whitespace-nowrap rounded-r-lg px-4 py-3 sm:px-5">
            <a class='btn btn-sm btn-primary' href='editClients.php?id=<?php echo $row['id']; ?>'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
              </svg>
            </a>
            <a class='btn btn-sm btn-danger' href='deleteClients.php?id=<?php echo $row['id']; ?>'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
              <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
              <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
            </svg>
            </a>
          </td>
        </tr>
      </tbody>
      <?php
        }
      ?>
    </table>
  </div>
