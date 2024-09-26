<?php
$possible_core_route_a = "../utils/core.php";
$possible_core_route_b = "utils/core.php";

if (file_exists($possible_core_route_a)) {
  require $possible_core_route_a;
} else {
  if (file_exists($possible_core_route_b)) {
    require $possible_core_route_b;
  } else {
    exit("Fatal error.");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VacunaCol</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $r_static?>/css/menu.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/29d2b0da58.js" crossorigin="anonymous"></script>
</head>
<body class="flex font-[Quicksand]">
    <div id="wrapper" class="h-[100vh] w-[100vw] bg-gradient-to-b from-[#FFFFFF] from-[36%] to-[#025478] xl:to-[#3d0278d2] flex flex-col">
      <div class="h-fit w-[100%] bg-gradient-to-r from-[#00a2ff83] to-[#0300c26c] pl-[15px] pr-[20px] pt-[18px] pb-[18px] flex xl:bg-[#313131] xl:from-[#313131] xl:to-[#313131] xl:pb-[8px] xl:pt-[8px]">
        <a href="/"><span class="font-medium text-3xl"><span class="text-[#efff0c]">Vac</span><span class="text-[#240cff]">una</span><span class="text-[#ff0c0c]">Col</span></span></a>
        <button id="menu-btn" aria-expanded="false" aria-controls="menu" class="bg-zinc-700 rounded-2xl text-white font-medium p-2 ml-auto">☰</button>
        </div>
        <nav id="menu" class="fixed z-50 left-[45%] top-[7%] w-[50%] bg-zinc-700 p-2 rounded-xl text-white text-center menu-hidden">
          <ul class="text-black">
            <li class="rounded-2xl bg-gray-300 mb-[8px] p-1"><a href="<?php echo $r_base?>">Inicio</a></li>
            <li class="rounded-2xl bg-gray-300 mb-[8px] p-1"><a href="<?php echo $r_base?>tyc">Términos y condiciones</a></li>
            <li class="rounded-2xl bg-gray-300 mb-[8px] p-1"><a href="<?php echo $r_base?>faq">Preguntas frecuentes</a></li>
            <li class="rounded-2xl bg-gray-300 mb-[16px] p-1"><a href="<?php echo $r_base?>sobre_nosotros">Sobre nosotros</a></li>
            <li class="rounded-2xl bg-gradient-to-r from-[#C100BA] to-[#16009F] text-white font-semibold p-1"><a href="<?php echo $r_auth?>/login">Iniciar sesión</a></li>
          </ul>
        </nav>
        <main class="flex-grow xl:flex-grow-0 xl:bg-[#ffffff7e] xl:m-auto xl:w-[100%] xl:h-[85%] xl:rounded-3xl">