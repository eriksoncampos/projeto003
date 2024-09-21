<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dogs</title>
</head>
<body class="home">
    <header>
        <div class="topo">
            <img src="wordpress_logo_transparent_512x512.png" alt="logo" srcset="">
        </div>
    </header>
    <section>
        <p><a href="index.php">Exibir</a></p>
    </section>
    <footer class="rodape">
        <p>Erikson Campos - 2024</p>
    </footer>
    <script>
        async function populate() {
            
            const requestURL = "https://dog.ceo/api/breeds/image/random";
            const request = new Request(requestURL);

            const response = await fetch(request);
            const resultadoText = await response.text();

            const resultado = JSON.parse(resultadoText);
            populateHeader(resultado);
        }

        function populateHeader(obj) {
            const section = document.querySelector('section');
            const myH1 = document.createElement('h1');
            const myImg1 = document.createElement('img');
            const nome = obj.message.split('/');
            myH1.textContent = nome[4];
            myImg1.src = obj.message;
            section.appendChild(myH1);
            section.appendChild(myImg1);
        }

        populate();
    </script>
</body>
</html>