<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="css/componentes.css">
    <title>Animação</title>
</head>
<body>
    
<div id="comp">
        <h1> {{ titulo }} </h1>
      <transition name="bounce">
            <div v-if="bounce">
                 <componente-dani></componente-dani>
            </div>
      </transition>
      <button @click="bounce =!bounce">Bounce</button>
</div>

    <script src="js/vue.js" ></script>
</body>
</html>