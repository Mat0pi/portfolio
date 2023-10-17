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
          Cadastrar Fornecedor
        </p>
        <form enctype="multipart/form-data" action="system.php?page=supplier" method="POST">
          <div class="mt-4 space-y-4">
            <label class="block">
              <span>Nome da Empresa</span>
              <span class="relative mt-1.5 flex">
                <input
                  class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                  placeholder="Empresa" type="text" name="nome" id="nome"/>
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
                    placeholder="Razão social" type="text" name="social" id="social" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="far fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>CNPJ</span>
                <span class="relative mt-1.5 flex">
                  <input x-input-mask="{
                                        delimiters: ['.', '.', '/','-'],
                                        blocks: [2, 3, 3, 4, 2],
                                        numeric:true,
                                        }"
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="00.000.000/0000-00" type="text" name="cnpj" id="cnpj"/>
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-suitcase"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Segmento</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Segmento" type="text" name="seguimento" id="seguimento"/>
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-atom text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Telefone</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="(00) 0000-0000" type="text" name="telefone" id="telefone" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-phone"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
              <label class="block sm:col-span-8">
                <span>Email</span>
                <div class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Email" type="text" name="email" id="email" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-envelope text-base"></i>
                  </span>
                </div>
              </label>
              <label class="block sm:col-span-4">
                <span>Rede Social</span>
                <div class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Rede Social" type="text" name="redesocial" id="redesocial" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-share-alt text-base"></i>
                  </span>
                </div>
              </label>
            </div>
            <label class="block">
              <span>Descrição</span>
              <textarea type="text" name="descritivo" id="descritivo" rows="4" placeholder="Descrição"
                class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" required></textarea>

            </label>
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

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
            <label class="block sm:col-span-4">
                <span>Palavra Chave 1</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Palavra Chave 1" type="text" name="chave1" id="chave1"/>
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-key"></i>
                  </span>
                </span>
              </label>
              <label class="block sm:col-span-4">
                <span>Palavra Chave 2</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Palavra Chave 2" type="text" name="chave2" id="chave2"/>
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-key"></i>
                  </span>
                </span>
              </label>
              <label class="block sm:col-span-4">
                <span>Palavra Chave 3</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Palavra Chave 3" type="text" name="chave3" id="chave3"/>
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-key"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="mt-4 space-y-4">
              <label class="block">
                  <span>Foto</span>
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