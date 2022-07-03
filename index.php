<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/drop.css">

  <title>Currículo app</title>
</head>

<body>
  <div class="container caixadefora mx-auto">
   
  <!--Menu superior -->
  <nav class="row" id="home">
    <div class="col-lg-12">
      <h2 class="text-dark"><i class="fas fa-file-pen"> Curriculo app</i></h2>
    </div>
  </nav>
  
  <hr/>
  <!-- Nome -->
  <div class="container responsive mx-auto">
    <div class="text-left mt-4">
      <input type="text" placeholder="Seu nome:"/>
    </div>
  </div>

  <!-- Foto de perfil -->
  <div>
    <div class="image-container variable-size">
      <div class="l-position-absolute"
          onmousedown="event.preventDefault(); event.stopPropagation(); interactionStart(event)"
          onmousemove="event.preventDefault(); event.stopPropagation(); interactionMove(event)"
          onmouseup="interactionEnd(event)"
          onmouseleave="interactionCancel(event)"
          ontouchstart="event.preventDefault(); event.stopPropagation(); interactionStart(event)"
          ontouchmove="event.preventDefault(); event.stopPropagation(); interactionMove(event)"
          ontouchend="interactionEnd(event)"
          ontouchcancel="interactionCancel(event)">
        <canvas id="canvas-image" class="l-position-absolute canvas-image variable-size"></canvas>
        <canvas id="canvas-overlay" class="l-position-absolute canvas-overlay variable-size"></canvas>
      </div>
      <div id="image-drop-zone" class="drop-zone l-position-absolute variable-size"
        ondragenter="event.stopPropagation(); event.preventDefault();"
        ondragover="event.stopPropagation(); event.preventDefault();"
        ondrop="event.preventDefault(); event.stopPropagation(); onDrop(event);">
        <p class="text-drop">Arraste uma foto</p>
        <p id="px-warning" class="__warning __hide">Tamanho de imagem minimo: 440px por 440px</p>
      </div>

    </div>

    <div class="l-centered">
      <span id="file-select">
        <label for="file-select-input"></label>
        <input type="file" id="file-select-input" name="file-select-input" onchange="onChange(this.files)"></input>
      </span>
      <button id="file-clear" class="__hide" type="button" onclick="clearImage()"></button>
      <button id="file-submit" class="__hide" type="submit" onclick="submitRequest()"></button>
    </div>

    <div id="target" class="l-centered">
    </div>
  </div>

  <!-- Sobre -->
  <div class="row" id="sobre">
    <div class="row">
      <div class="col-lg-9 col-md-12 col-xs-12">
        <input class="text-white" type="text" placeholder="Quem eu sou?:"/>
        <div class="rectangle"></div>
        <p><textarea type="text" placeholder="Minhas descrissão"></textarea></p>
      </div>

      <!-- Botões de midia -->
      <div class="container row">
        <div class="col">
          <p class="text-midia " ><i class="fab fa-linkedin"></i><input type="text" name="linkdin" placeholder="/in/nome"/></p>
          <p class="text-midia" ><i class="fab fa-behance-square"></i><input type="text" name="linkdin" placeholder="/in/nome"/></p>
          <p class="text-midia" ><i class="fab fa-github-square"></i><input type="text" name="linkdin" placeholder="/in/nome"/></p>
        </div>
      </div>
    </div>
  </div>

  <h4><input type="text" name="Dados" placeholder="Dados"></h4>
  <div class="rectangle2"></div>

  <!-- Endereço -->
  <div class="row" id="endereco">
    <div class="col">
      
      <h5>
        <input type="text" name="contato.nome" placeholder="Endereço"/>
      </h5>
      <div class="row">
        <div class="col-6">
          <div class="row">
            <div class="col-3">
              <p><input type="text" name="endereco.estado.label" placeholder="Estado:"/></p>
            </div>
            <div class="col-9">
              <p><input type="text" name="endereco.estado" placeholder="Seu estado"/></p>
            </div>

            <div class="col-3">
              <p><input type="text" name="endereco.cidade.label" placeholder="Cidade:"/></p>
            </div>
            <div class="col-9">
              <p><input type="text" name="endereco.cidade" placeholder="sua cidade"/></p>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <p><input type="text" name="endereco.bairro.label" placeholder="Bairro:"/></p>
            </div>
            <div class="col-9">
              <p><input type="text" name="endereco.bairro" placeholder="seu bairro"/></p>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="row">
            <div class="col-3">
              <p><input type="text" name="endereco.cep.label" placeholder="CEP:"/></p>
            </div>
            <div class="col-9">
              <p><input type="text" name="endereco.cep" placeholder="xxxxx-xxx"/></p>
            </div>

            <div class="col-3">
              <p><input type="text" name="endereco.rua.label" placeholder="Rua:"/></p>
            </div>
            <div class="col-9">
              <p><input type="text" name="endereco.rua" placeholder="Sua rua"/></p>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <p><input type="text" name="endereco.numero.label" placeholder="Nº:"/></p>
            </div>
            <div class="col-9">
              <p><input type="text" name="endereco.numero" placeholder="xxxx"/></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Contato -->
  <div class="row" id="contato">
    <div class="col">
      <h5>
        <input type="text" name="contato.nome" placeholder="Contato"/>
      </h5>
      <div class="row">
        <div class="col-6">
          <div class="row">
            <div class="col-3">
              <p><input type="text" name="contato.cell.label" placeholder="Cell:"/></p>
            </div>
            <div class="col-9">
              <p><input type="text" name="endereco.cell" placeholder="+xx (xx) xxxxxxxx"/></p>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="row">
            <div class="col-3">
              <p><input type="text" name="endereco.email.label" placeholder="E-mail:"/></p>
            </div>
            <div class="col-9">
              <p><input type="text" name="endereco.email" placeholder="Seu email"/></p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  </div>

  <script src="./js/drop.js"></script>
</html>