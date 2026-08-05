<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        h1 { margin-bottom: 30px; }
        
        .galeria {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }
        
        .galeria img {
            height: 250px; /* Mantém um tamanho uniforme */
            width: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            transition: transform 0.2s ease;
            object-fit: cover;
        }

        .galeria img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <h1>Minha Galeria</h1>
    
    <div class="galeria">
        <?php
        // Define a pasta onde as imagens estão
        $pasta = 'images/';
        
        // Busca todos os arquivos com essas extensões na pasta
        $imagens = glob($pasta . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
        
        // Se houver imagens, cria a tag <img> para cada uma
        if ($imagens) {
            foreach($imagens as $img) {
                // O loading="lazy" é essencial para galerias muito grandes
                echo "<img src='$img' alt='Foto da galeria' loading='lazy'>";
            }
        } else {
            echo "<p>Nenhuma imagem encontrada na pasta '$pasta'.</p>";
        }
        ?>
    </div>

</body>
</html>