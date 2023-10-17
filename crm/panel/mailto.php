<?php
include_once('../conection.php');

  if(isset($_FILES['img'])){
    $file = $_FILES['img'];

    if($file['error'])
      die("Falha ao enviar arquivo");

    if($file['size'] > 2097152)
      die("Arquivo muito grande! Max: 2MB");

      $path = "images/profile/";
      $fileName = $file['name'];
      $newNameOfFile = uniqid();
      $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

      if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png')
        die("Tipo de arquivo não aceito!");

      $pathComplete = $path . $newNameOfFile . "." . $ext;
    
      $good = move_uploaded_file($file["tmp_name"], $pathComplete);
  }

  if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $social = $_POST['social'];
    $seguimento = $_POST['seguimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $redesocial = $_POST['redesocial'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $descritivo = $_POST['descritivo'];
    $chave1 = $_POST['chave1'];
    $chave2 = $_POST['chave2'];
    $chave3 = $_POST['chave3'];

    $conection->query("INSERT INTO 
          fornecedores(nome,cnpj,social,seguimento,telefone,email,redesocial,cidade,estado,endereco,cep,descritivo,img,chave1,chave2,chave3) 
          VALUES ('$nome', '$cnpj', '$social', '$seguimento', '$telefone', '$email', '$redesocial', '$cidade', '$estado', '$endereco','$cep', '$descritivo', '$newNameOfFile.$ext', '$chave1', '$chave2', '$chave3')");
  }

  /*$filePath = 'proposals/dados.txt';

      $dados = "Nome: " . $_POST['nome'] . "\n";
$dados .= "Social: " . $_POST['social'] . "\n";
$dados .= "CNPJ: " . $_POST['cnpj'] . "\n";
$dados .= "Contato 1: " . $_POST['contatoOne'] . "\n";
$dados .= "Telefone Contato 1: " . $_POST['telContatoOne'] . "\n";
$dados .= "Email Contato 1: " . $_POST['emailContatoOne'] . "\n";
$dados .= "Cargo Contato 1: " . $_POST['cargoContatoOne'] . "\n";
$dados .= "Contato 2: " . $_POST['contatoTwo'] . "\n";
$dados .= "Telefone Contato 2: " . $_POST['telContatoTwo'] . "\n";
$dados .= "Email Contato 2: " . $_POST['emailContatoTwo'] . "\n";
$dados .= "Cargo Contato 2: " . $_POST['cargoContatoTwo'] . "\n";
$dados .= "Contato 3: " . $_POST['contatoThree'] . "\n";
$dados .= "Telefone Contato 3: " . $_POST['telContatoThree'] . "\n";
$dados .= "Email Contato 3: " . $_POST['emailContatoThree'] . "\n";
$dados .= "Cargo Contato 3: " . $_POST['cargoContatoThree'] . "\n";
$dados .= "Endereço: " . $_POST['endereco'] . "\n";
$dados .= "CEP: " . $_POST['cep'] . "\n";
$dados .= "Estado: " . $_POST['estado'] . "\n";
$dados .= "Cidade: " . $_POST['cidade'] . "\n";

// Acrescente os dados dos produtos (você pode adicionar um loop aqui, dependendo de quantos produtos forem)
$dados .= "Produtos: \n";
for ($i = 0; $i < count($produtos); $i++) {
    $dados .= "Produto " . ($i + 1) . ": " . $produtos[$i] . "\n";
    $dados .= "Quantidade: " . $quantidades[$i] . "\n";
    $dados .= "Valor: " . $valores[$i] . "\n";
    $dados .= "Data de Início: " . $datas_inicio[$i] . "\n";
    $dados .= "Data de Fim: " . $datas_fim[$i] . "\n";
}

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
      }*/


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

<main class="main-content w-full px-[var(--margin-x)] pb-8">

  <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
    <div class="col-span-12 sm:col-span-8">
      <div class="card p-4 sm:p-5">
        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
          Enviar Campanha
        </p>
        <form enctype="multipart/form-data" action="system.php?page=supplier" method="POST">
          <div class="mt-4 space-y-4">
            <label class="block">
              <span>Nome da Campanha</span>
              <span class="relative mt-1.5 flex">
                <input
                  class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                  placeholder="Campanha" type="text" name="campanha" id="campanha"/>
                <span
                  class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                  <i class="fa-regular fa-building text-base"></i>
                </span>
              </span>
            </label>
           
            <label class="block">
              <span>Mensagem</span>
              <textarea type="text" name="descritivo" id="descritivo" rows="4" placeholder="Mensagem"
                class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" required></textarea>

            </label>
            <div class="mt-4 space-y-4">
              <label class="block">
                  <span>Conteudo Mensagem</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input foto peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="file" onChange="carregarImg2();" name="cMsg" id="cMsg"/>
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa fa-image"></i>
                    </span>
                  </span>
                </label>
                <!--<div class="divImg">
                  <img src="images/profile/" width="100px" id="target"> 
                </div>-->
            </div>
            <div class="mt-4 space-y-4">
              <label class="block">
                  <span>Base</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input foto peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="file" onChange="carregarImg2();" name="base" id="base"/>
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa fa-image"></i>
                    </span>
                  </span>
                </label>
                <!--<div class="divImg">
                  <img src="images/profile/" width="100px" id="target"> 
                </div>-->
            </div>
            <div class="mt-4 space-y-4">
              <label class="block">
                  <span>Foto Perfil</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input foto peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      type="file" onChange="carregarImg2();" name="img" id="img"/>
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa fa-image"></i>
                    </span>
                  </span>
                </label>
                <div class="divImg">
                  <img src="images/profile/<?php echo $img ?>" width="100px" id="target"> 
                </div>
            </div>
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