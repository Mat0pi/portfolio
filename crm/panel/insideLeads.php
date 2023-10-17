<?php
@session_start();
require_once("../conection.php");
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM costumer WHERE id = ?";
  $stmt = $conection->prepare($sql);
  $stmt->bindParam(1, $id, PDO::PARAM_INT);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


};

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <title><?php echo $system_name?></title>
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="css/app.css" />

    <!-- Javascript Assets -->
    <script src="js/app.js" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <script>
      /**
       * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
       */
      localStorage.getItem("_x_darkMode_on") === "true" &&
        document.documentElement.classList.add("dark");
    </script>
  </head>

  <body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div
      class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
    >
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div
      id="root"
      class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
      x-cloak
    >
      <!-- Sidebar -->
      <div class="sidebar print:hidden">
        <!-- Main Sidebar -->
        <div class="main-sidebar">
          <div
            class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800"
          >
            <!-- Application Logo -->
            <div class="flex pt-4">
              <a href="system.php">
                <img
                  class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                  src="images/app-logo.svg"
                  alt="logo"
                />
              </a>
            </div>
            <div
              class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6"
            >
            <?php 
              if ($_SESSION['nivel'] == 1){
            ?>
            <!-- Cadastrar Fornecedores -->
            <a
                href="system.php?page=supplier"
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip.placement.right="'Fornecedor'"
              >
                <svg
                  class="h-7 w-7"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-opacity="0.5"
                    d="M14.2498 16C14.2498 17.5487 13.576 18.9487 12.4998 19.9025C11.5723 20.7425 10.3473 21.25 8.99976 21.25C6.10351 21.25 3.74976 18.8962 3.74976 16C3.74976 13.585 5.39476 11.5375 7.61726 10.9337C8.22101 12.4562 9.51601 13.6287 11.1173 14.0662C11.5548 14.1887 12.0185 14.25 12.4998 14.25C12.981 14.25 13.4448 14.1887 13.8823 14.0662C14.1185 14.6612 14.2498 15.3175 14.2498 16Z"
                    fill="currentColor"
                  />
                  <path
                    d="M17.75 9.00012C17.75 9.68262 17.6187 10.3389 17.3825 10.9339C16.7787 12.4564 15.4837 13.6289 13.8825 14.0664C13.445 14.1889 12.9813 14.2501 12.5 14.2501C12.0187 14.2501 11.555 14.1889 11.1175 14.0664C9.51625 13.6289 8.22125 12.4564 7.6175 10.9339C7.38125 10.3389 7.25 9.68262 7.25 9.00012C7.25 6.10387 9.60375 3.75012 12.5 3.75012C15.3962 3.75012 17.75 6.10387 17.75 9.00012Z"
                    fill="currentColor"
                  />
                  <path
                    fill-opacity="0.3"
                    d="M21.25 16C21.25 18.8962 18.8962 21.25 16 21.25C14.6525 21.25 13.4275 20.7425 12.5 19.9025C13.5763 18.9487 14.25 17.5487 14.25 16C14.25 15.3175 14.1187 14.6612 13.8825 14.0662C15.4837 13.6287 16.7787 12.4562 17.3825 10.9337C19.605 11.5375 21.25 13.585 21.25 16Z"
                    fill="currentColor"
                  />
                </svg>
              </a>

              <!-- Cadastrar Clientes -->
              <a
                href="system.php?page=clients"
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip.placement.right="'Clientes'"
              >
                <svg
                  class="h-7 w-7"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.3111 14.75H5.03356C3.36523 14.75 2.30189 12.9625 3.10856 11.4958L5.24439 7.60911L7.24273 3.96995C8.07689 2.45745 10.2586 2.45745 11.0927 3.96995L13.1002 7.60911L14.0627 9.35995L15.2361 11.4958C16.0427 12.9625 14.9794 14.75 13.3111 14.75Z"
                    fill="currentColor"
                  />
                  <path
                    fill-opacity="0.3"
                    d="M21.1667 15.2083C21.1667 18.4992 18.4992 21.1667 15.2083 21.1667C11.9175 21.1667 9.25 18.4992 9.25 15.2083C9.25 15.0525 9.25917 14.9058 9.26833 14.75H13.3108C14.9792 14.75 16.0425 12.9625 15.2358 11.4958L14.0625 9.36C14.4292 9.28666 14.8142 9.25 15.2083 9.25C18.4992 9.25 21.1667 11.9175 21.1667 15.2083Z"
                    fill="currentColor"
                  />
                </svg>
              </a>
              <?php 
              }
              ?>
            </div>

            <!-- Bottom Links -->
            <div class="flex flex-col items-center space-y-3 py-3">
              <!-- Settings -->

              <!-- Profile -->
              <div
                x-data="usePopper({placement:'right-end',offset:12})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="flex"
              >
                <button
                  @click="isShowPopper = !isShowPopper"
                  x-ref="popperRef"
                  class="avatar h-12 w-12"
                >
                  <img
                    class="rounded-full"
                    src="images/200x200.png"
                    alt="avatar"
                  />
                  <span
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"
                  ></span>
                </button>

                <div
                  :class="isShowPopper && 'show'"
                  class="popper-root fixed"
                  x-ref="popperRoot"
                >
                  <div
                    class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700"
                  >
                    <div
                      class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4 dark:bg-navy-800"
                    >
                      <div class="avatar h-14 w-14">
                        <img
                          class="rounded-full"
                          src="images/200x200.png"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <a
                          href="#"
                          class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"
                        >
                        <?php echo $_SESSION['nome']; ?>
                        </a>
                        <p class="text-xs text-slate-400 dark:text-navy-300">
                        <?php 
                          if ($_SESSION['nivel'] == 1){
                            echo 'ADM';
                          }else{
                            echo 'Cliente';
                          }
                        ?>
                        </p>
                      </div>
                    </div>
                    <div class="flex flex-col pt-2 pb-5">
                      <!--<a
                        href="#"
                        class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                      >
                        <div
                          class="flex h-8 w-8 items-center justify-center rounded-lg bg-warning text-white"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                            />
                          </svg>
                        </div>

                        <div>
                          <h2
                            class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light"
                          >
                            Perfil
                          </h2>
                          <div
                            class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                          >
                            Configurações de Perfil
                          </div>
                        </div>
                      </a>-->
                      <div class="mt-3 px-4">
                        <a href="../logout.php"
                          class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="1.5"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                            />
                          </svg>
                          <span>Sair</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        </div>

      <!-- App Header Wrapper-->
      <nav class="header print:hidden">
        <!-- App Header  -->
        <div
          class="header-container relative flex w-full bg-white dark:bg-navy-700 print:hidden"
        >
          <!-- Header Items -->
          <div class="flex w-full items-center justify-between">
          <div class="h-7 w-7">
              <button
                class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
                :class="$store.global.isSidebarExpanded && 'active'"
                @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded"
              >
               
              </button>
            </div>

            <!-- Right: Header buttons -->
            <div class="-mr-1.5 flex items-center space-x-2">
              <!-- Mobile Search Toggle -->
              <!--<button
                @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5.5 w-5.5 text-slate-500 dark:text-navy-100"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="1.5"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                  />
                </svg>
              </button>-->

              <!-- Main Searchbar -->


              <!-- Dark Mode Toggle -->
              <button
                @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  x-show="$store.global.isDarkModeEnabled"
                  x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                  x-transition:enter-start="scale-75"
                  x-transition:enter-end="scale-100 static"
                  class="h-6 w-6 text-amber-400"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z"
                  />
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  x-show="!$store.global.isDarkModeEnabled"
                  x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                  x-transition:enter-start="scale-75"
                  x-transition:enter-end="scale-100 static"
                  class="h-6 w-6 text-amber-400"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    clip-rule="evenodd"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>
      
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
      <?php
        foreach ($result as $rowLeads) {
      ?>
      <div class="flex items-center justify-between py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl"
          >
            <?php echo $rowLeads["nome"]; ?>  
          </h2>

          <div class="flex">
            <button
              @click="window.print()"
              class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"
                />
              </svg>
            </button>
            <button
              class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9"
              onclick="downloadFile()"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="1.5"
                  d="M12 14l-2-2m0 0l-2-2m2 2l2-2m-2 2l2 2M3 21a2 2 0 01-2-2V5a2 2 0 012-2h6.29a1 1 0 01.7.29l4.83 4.83a1 1 0 01.29.7V19a2 2 0 01-2 2H3z"
                />
              </svg>
            </button>
          </div>
        </div>
        
        <div class="grid grid-cols-1">
          <div class="card px-5 py-12 sm:px-18">
            <div class="flex flex-col justify-between sm:flex-row">
              <div class="text-center sm:text-left">
                <h2
                  class="text-2xl font-semibold uppercase text-primary dark:text-accent-light"
                >
                  <?php echo $rowLeads["social"]; ?>
                </h2><br>
                <!--<p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                  </?php echo $rowLeads["social"]; ?>
                </p><br>-->
                <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                  <?php echo $rowLeads["endereco"]; ?>, <?php echo $rowLeads["cidade"]; ?> - <?php echo $rowLeads["estado"]; ?>
                </p><br>
                <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                  <?php echo $rowLeads["cep"]; ?>
                </p>
              </div>
              <div class="text-center sm:text-center">
                <!--<h2
                  class="text-2xl font-semibold uppercase text-primary dark:text-accent-light"
                >
                    Ciclo
                </h2><br>
                <p
                  class="text-lg font-medium text-slate-600 dark:text-navy-100"
                >
                  <//?php 
                    echo date('d/m/Y', strtotime($rowLeads["data_inicio"]));
                    echo " - ";
                    echo date('d/m/Y', strtotime($rowLeads["data_fim"]));                 
                  ?>
                </p>-->
              </div>
              <div class="mt-4 text-center sm:m-0 sm:text-center">
                <h2
                  class="text-2xl font-semibold uppercase text-primary dark:text-accent-light"
                >
                    CPF/CNPJ
                </h2><br>
                <p
                  class="text-lg font-medium text-slate-600 dark:text-navy-100"
                >
                  <?php echo $rowLeads["cnpj"]; ?>
                </p>
              </div>
            </div>
            <!--<div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
              <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>-->
              <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                <table class="w-full text-left">
                  <thead>
                    <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                      <th
                        class="whitespace-nowrap  px-4 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Contato
                      </th>
                      <th
                        class="whitespace-nowrap  px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Telefone
                      </th>
                      <th
                        class="whitespace-nowrap  px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Email
                      </th>
                      <th
                        class="whitespace-nowrap rounded-r-lg  px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Cargo
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                      <td class="whitespace-nowrap px-4 py-3 text-center font-semibold sm:px-5">
                          <?php echo $rowLeads["contatoOne"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["telContatoOne"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["emailContatoOne"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["cargoContatoOne"]; ?>
                      </td>
                    </tr>
                    <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                      <td class="whitespace-nowrap px-4 py-3 text-center font-semibold sm:px-5">
                          <?php echo $rowLeads["contatoTwo"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["telContatoTwo"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["emailContatoTwo"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["cargoContatoTwo"]; ?>
                      </td>
                    </tr>
                    <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                      <td class="whitespace-nowrap px-4 py-3 text-center font-semibold sm:px-5">
                          <?php echo $rowLeads["contatoThree"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["telContatoThree"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["emailContatoThree"]; ?>
                      </td>
                      <td class="w-3/12 whitespace-nowrap px-4 py-3 text-center sm:px-5">
                          <?php echo $rowLeads["cargoContatoThree"]; ?>
                      </td>
                    </tr><br>
                  </tbody>
                </table>
              </div>
            <div class="my-7 h-px "></div>
              <div class="is-scrollbar-hidden min-w-full overflow-x-auto">                  
                <?php
                  $dadosProdutosJSON = $rowLeads['produtos_json'];
                  $dadosProdutos = json_decode($dadosProdutosJSON, true);
                  
                  if (!empty($dadosProdutos)) {
                      // Abra a tabela
                      echo '<table class="is-zebra w-full text-left">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<th class="whitespace-nowrap bg-slate-200 px-4 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-3">Produto</th>';
                      echo '<th class="whitespace-nowrap bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-3">Quantidade</th>';
                      echo '<th class="whitespace-nowrap bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-3">Valor</th>';
                      echo '<th class="whitespace-nowrap bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-3">Data inicio</th>';
                      echo '<th class="whitespace-nowrap bg-slate-200 px-3 py-3 text-center font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-3">Data fim</th>';
                      echo '</tr>';
                      echo '</thead>';
                      echo '<tbody>';
                  
                      // Iterar sobre os dados dos produtos
                      $numProdutos = count($dadosProdutos['produto']);
                      for ($i = 0; $i < $numProdutos; $i++) {
                          echo '<tr>';
                          echo '<td class="w-3/12 whitespace-nowrap px-3 py-3 text-center sm:px-5">' . ucfirst($dadosProdutos['produto'][$i]) . '</td>';
                          echo '<td class="w-3/12 whitespace-nowrap px-3 py-3 text-center sm:px-5">' . ucfirst($dadosProdutos['quantidade'][$i]) . ' x</td>';
                          echo '<td class="w-3/12 whitespace-nowrap px-3 py-3 text-center sm:px-5">R$ ' . ucfirst($dadosProdutos['valor'][$i]) . '</td>';
                          echo '<td class="w-3/12 whitespace-nowrap px-3 py-3 text-center sm:px-5">' . date('d/m/Y', strtotime($dadosProdutos['data_inicio'][$i])) . '</td>';
                          echo '<td class="w-3/12 whitespace-nowrap px-3 py-3 text-center sm:px-5">' . date('d/m/Y', strtotime($dadosProdutos['data_fim'][$i])) . '</td>';
                          echo '</tr>';
                      }
                  
                      // Feche a tabela
                      echo '</tbody>';
                      echo '</table>';
                  } else {
                      echo 'Nenhum dado de produtos disponível.';
                  }
                ?>
                <?php } ?>
              </div>
            <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
            
          </div>
        </div>
      </main>
    </div>
    <!-- 
        This is a place for Alpine.js Teleport feature 
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
            window.addEventListener("DOMContentLoaded", () => Alpine.start());

            var search = document.getElementById('search');

            search.addEventListener("keydown", function(event){
                if(event.key === "Enter"){
                    searchData();
                }
            });

            function searchData(){
              window.location = 'system.php?search='+search.value;
            }

            function downloadFile() {
              window.open('proposals/<?php echo $rowLeads["proposta"]; ?>', '_blank');
            }
    </script>
  </body>
</html>