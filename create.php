<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
   <form action="store.php" method="post">
    <div class="form-group">
      <label for="usr">RA:</label>
      <input type="number" class="form-control" name="id" id="usr">
    </div>

    <div class="form-group">
      <label for="usr">Nome:</label>
      <input type="text" class="form-control" name="nome" id="usr">
    </div>

    <div class="form-group">
      <label for="usr">CPF:</label>
      <input type="text" class="form-control" name="cpf" id="usr">
    </div>

    <div class="form-group">
      <label for="usr">Data de Nascimento:</label>
      <input type="text" class="form-control" name="nascimento" id="usr">
    </div>

    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" name="email" id="usr">
    </div>

     <div class="radio" checked="checked">
      <label><input type="radio" name="genero">Masculino</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="genero">Feminino</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="genero">Outro</label>
    </div>

     <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" name="observacao" rows="5" id="comment"></textarea>
     </div>

     <label for="sel1">Curso:</label>
      <select class="form-control" name="curso" id="sel1">
        <option value="PHP">PHP</option>
        <option value="Ruby">Ruby</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
      </select>
     <input type="submit" value="Enviar"/>
     <input type="reset" value="Limpar"/>
   </form>
</body>
</html>