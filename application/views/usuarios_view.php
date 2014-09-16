<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Pregoes - Governo do Estado do Acre</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/dashboard.css">
  </head>

  <body>          
    <table class="table table-striped">
                    <thead>
                    <form>
                        <th>Nome</th>
                        <th>Email</th>
                     </form>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?=$this->html($usuario['nome'])?></td>
                            <td><?=$this->html($usuario['email'])?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
        </table>
   </body>
</html>