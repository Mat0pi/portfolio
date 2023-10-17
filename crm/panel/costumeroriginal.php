<?php
include_once('../conection.php');

if (isset($_FILES['proposta'])) {
  $file = $_FILES['proposta'];

  if ($file['error'])
    die("Falha ao enviar arquivo");

  if ($file['size'] > 10000000)
    die("Arquivo muito grande! Max: 10MB");

  $path = "proposals/";
  $fileName = $file['name'];
  $newNameOfFile = uniqid();
  $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

  if ($ext != 'pdf' && $ext != 'rar' && $ext != 'zip' && $ext != 'docx' && $ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
    // Tipo de arquivo não aceito
    echo "Tipo de arquivo não aceito. Os tipos permitidos são PDF, RAR, ZIP, DOCX, JPG, PNG e JPEG.";
    die("Arquivo muito grande! Max: 10MB");
  } else {
    // Tudo está ok, faça o upload do arquivo
    $pathComplete = $path . $newNameOfFile . "." . $ext;

    if (move_uploaded_file($file["tmp_name"], $pathComplete)) {
      // O upload foi bem-sucedido
    } else {
      // O upload falhou
      echo "Falha ao fazer upload do arquivo. Por favor, tente novamente.";
    }
  }
}

if (isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $social = $_POST['social'];
  $cnpj = $_POST['cnpj'];
  $contatoOne = $_POST['contatoOne'];
  $telContatoOne = $_POST['telContatoOne'];
  $emailContatoOne = $_POST['emailContatoOne'];
  $cargoContatoOne = $_POST['cargoContatoOne'];
  $contatoTwo = $_POST['contatoTwo'];
  $telContatoTwo = $_POST['telContatoTwo'];
  $emailContatoTwo = $_POST['emailContatoTwo'];
  $cargoContatoTwo = $_POST['cargoContatoTwo'];
  $contatoThree = $_POST['contatoThree'];
  $telContatoThree = $_POST['telContatoThree'];
  $emailContatoThree = $_POST['emailContatoThree'];
  $cargoContatoThree = $_POST['cargoContatoThree'];
  $endereco = $_POST['endereco'];
  $cep = $_POST['cep'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];

  // Arrays para armazenar os dados dos produtos
  $produtos = isset($_POST['produto']) ? $_POST['produto'] : ['Nenhum produto cadastrado'];
  $quantidades = isset($_POST['quantidade']) ? $_POST['quantidade'] : ['0'];
  $valores = isset($_POST['valor']) ? $_POST['valor'] : ['0'];
  $datas_inicio = isset($_POST['data_inicio']) ? $_POST['data_inicio'] : ['01/01/2023'];
  $datas_fim = isset($_POST['data_fim']) ? $_POST['data_fim'] : ['01/01/2023'];


  $dadosProdutos = [
    'produto' => $produtos,
    'quantidade' => $quantidades,
    'valor' => $valores,
    'data_inicio' => $datas_inicio,
    'data_fim' => $datas_fim,
  ];

  $dadosProdutosJSON = json_encode($dadosProdutos);

  $conection->query("INSERT INTO costumer(nome, social, cnpj, contatoOne, telContatoOne, emailContatoOne, cargoContatoOne, contatoTwo, telContatoTwo, emailContatoTwo, cargoContatoTwo, contatoThree, telContatoThree, emailContatoThree, cargoContatoThree, endereco, cep, estado, cidade, produtos_json, proposta) 
    VALUES ('$nome', '$social', '$cnpj', '$contatoOne', '$telContatoOne', '$emailContatoOne', '$cargoContatoOne', '$contatoTwo', '$telContatoTwo', '$emailContatoTwo', '$cargoContatoTwo', '$contatoThree', '$telContatoThree', '$emailContatoThree', '$cargoContatoThree', '$endereco', '$cep', '$estado', '$cidade', '$dadosProdutosJSON', '$newNameOfFile.$ext')");

  $filePath = 'proposals/dados.txt';

  $dados = "Nome: " . $_POST['nome'] . "\n";
  $dados .= "Social: " . $_POST['social'] . "\n";
  $dados .= "CNPJ: " . $_POST['cnpj'] . "\n";

  $arquivo = fopen($filePath, "w");

  if ($arquivo) {
    // Escreva os dados no arquivo
    fwrite($arquivo, $dados);

    // Feche o arquivo
    fclose($arquivo);

    // Exiba uma mensagem de sucesso
    echo "Os dados foram salvos no arquivo $filePath.";
} else {
    // Se não for possível abrir o arquivo, exiba uma mensagem de erro
    echo "Erro ao criar o arquivo.";
}

  //header("Location: system.php");
  //exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Meta tags  -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

  <title>Lineone - From Layout v1</title>
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
    rel="stylesheet" />
  <script>
    /**
     * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
     */
    localStorage.getItem("_x_darkMode_on") === "true" &&
      document.documentElement.classList.add("dark");
  </script>
</head>

<main class="main-content w-full px-[var(--margin-x)] pb-8 d-flex align-items-center">
  <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
    <div class="col-span-12 sm:col-span-8">
      <div class="card p-4 sm:p-5">
        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
          Cadastrar Cliente
        </p>
        <form enctype="multipart/form-data" action="system.php" method="POST">
          <div class="mt-4 space-y-4">
            <label class="block">
              <span>Nome da Empresa</span>
              <span class="relative mt-1.5 flex">
                <input
                  class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                  placeholder="Empresa" type="text" name="nome" id="nome" required/>
                <span
                  class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                  <i class="fa-regular fa-building text-base"></i>
                </span>
              </span>
            </label>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Razão social</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Razão social" type="text" name="social" id="social" required/>
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="far fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>CPF/CNPJ</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="CPF/CNPJ" type="text" name="cnpj" id="cnpj" required/>
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-suitcase"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Primeiro Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Nome Contato" type="text" name="contatoOne" id="contatoOne" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-atom text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Telefone Primeiro Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="(00) 0000-0000" type="text" name="telContatoOne" id="telContatoOne" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-phone"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Email Primeiro Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Email" type="text" name="emailContatoOne" id="emailContatoOne" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-atom text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Cargo Primeiro Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Cargo" type="text" name="cargoContatoOne" id="cargoContatoOne" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-phone"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Segundo Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Nome Contato" type="text" name="contatoTwo" id="contatoTwo" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-atom text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Telefone Segundo Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="(00) 0000-0000" type="text" name="telContatoTwo" id="telContatoTwo" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-phone"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Email Segundo Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Email" type="text" name="emailContatoTwo" id="emailContatoTwo" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-atom text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Cargo Segundo Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Cargo" type="text" name="cargoContatoTwo" id="cargoContatoTwo" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-phone"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Terceiro Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Nome Contato" type="text" name="contatoThree" id="contatoThree" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-atom text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Telefone Terceiro Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="(00) 0000-0000" type="text" name="telContatoThree" id="telContatoThree" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-phone"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Email Terceiro Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Email" type="text" name="emailContatoThree" id="emailContatoThree" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-atom text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Cargo Terceiro Contato</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Cargo" type="text" name="cargoContatoThree" id="cargoContatoThree" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-phone"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Endereço</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Endereço" type="text" name="endereco" id="endereco" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-road text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>CEP</span>
                <span class="relative mt-1.5 flex">
                  <input x-input-mask="{
                                        delimiters: ['-'],
                                        blocks: [5, 3],
                                        numeric:true,
                                        }"
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="CEP" type="text" name="cep" id="cep" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-home"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Estado</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Estado" type="text" name="estado" id="estado" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-solid fa-city text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Cidade</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Cidade" type="text" name="cidade" id="cidade" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-solid fa-building"></i>
                  </span>
                </span>
              </label>
            </div>
            <!--<div class="grid grid-cols-1 gap-4 sm:grid-cols-12">-->
            <!--<div class="mt-4 space-y-4">
              <label class="block">
                  <span>Foto</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input foto peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="file" onChange="carregarImg2();" name="proposal" id="proposal"/>
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa fa-image"></i>
                    </span>
                  </span>
                </label>
            </div>-->
            <label
              class="btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >
              <input
                tabindex="-1"
                type="file"
                class="pointer-events-none absolute inset-0 h-full w-full opacity-0"
                name="proposta" id="proposta" required/>
              <div class="flex items-center space-x-2">
                <span>Adicionar Arquivo</span>
              </div>
            </label><br>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <div class="block">
                <button
                  class="btn bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                  id="addProductBtn">Adicionar Produto</button>
              </div>
            </div>

            <div id="productFieldsContainer">
              <!-- Os campos de produtos adicionados dinamicamente aparecerão aqui -->
            </div>

            <script>
              // Código JavaScript/jQuery para adicionar/remover campos de produtos
              $(document).ready(function () {
                var productCount = 0;

                $("#addProductBtn").click(function () {
                  productCount++;
                  var productFields = `
                <div id="product${productCount}">
                  <div class="mt-4 space-y-4">
                    <label class="block">
                      <span>Produto</span>
                      <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" 
                      type="text" name="produto[]" placeholder="Nome do Produto" required>
                    </label>
                  </div>
                  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <label class="block">
                      <span>Quantidade</span>
                      <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="number" name="quantidade[]" placeholder="Quantidade" required>
                    </label>
                    <label class="block">
                      <span>Valor</span>
                      <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="text" name="valor[]" placeholder="Valor" required>
                    </label>
                    <label class="block">
                      <span>Data de Início</span>
                      <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="date" name="data_inicio[]" required>
                    </label>
                    <label class="block">
                      <span>Data de Fim</span>
                      <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="date" name="data_fim[]" required>
                    </label>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                      <button class="btn bg-secondary text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                      id="a" data-product="${productCount}">Remover Produto</button>
                    </div>
                  </div>
                </div>
                `;

                  $("#productFieldsContainer").append(productFields);
                });

                $(document).on("click", "#a", function () {
                  var productNumber = $(this).data("product");
                  $("#product" + productNumber).remove();
                });
              });
            </script>

        </form>
        <div class="flex justify-end space-x-2">
          <button type="submit" name="submit" id="submit"
            class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <span>Cadastrar</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>


  </div>
</main>

</html>