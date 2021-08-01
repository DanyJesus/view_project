<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet"  href="css/componentes.css">
    <title>Introdução a Componentes</title>
</head>
<body>
     <div id="comp">
        <h1> {{ titulo }} </h1>
        <!-- <div class="jogo" v-for="item in jogos">
            <p> {{ item.nome }} </p>
        </div> -->
        <componente-dani></componente-dani>
        <componente-dani></componente-dani>
        <componente-dani></componente-dani>
     </div>

     <script src="js/vue.js" ></script>
</body>
</html>