<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    
    <title>Vue- Primeiro Projeto</title>
</head>
<body>
    <h1>Ciclo de vida da Instânia Vue</h1>
    <div id="app">
        <p>{{ nome }} </p>
        <button @click="alterarNome">Clique para criar Instância</button>
        <button @click="destruirIntancia">Clique para Destruir Instância</button>
    </div>    
    <script src="js/vue.js" ></script>
</body>
</html>
