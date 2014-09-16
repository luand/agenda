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

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pregões</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=BASE_URL?>usuario/login">Sair</a></li>
          </ul>
          <form class="navbar-form navbar-right" action="<?=BASE_URL?>pregoes" method="post">
            <input type="text" name="busca" class="form-control" placeholder="Número...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="pregoes">Pregoes</a></li>
			      <li><a href="concorrencias">Concorrência</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pregões</h1>
          <div class="table-responsive">
            <table class="table table-striped" cellspacing="10px">
              <thead>
                <tr>
                  <th>Modalidade</th>
                  <th>Numero</th>
				          <th>Comissao</th>
                  <th>Processo</th>
                  <th>Nº Sistema</th>
                  <th>Entrada</th>
                  <th>Enviada</th>
        				  <th>Dias Pendentes</th>
        				  <th>Data Possível</th>
        				  <th>Periodo Retirada</th>
        				  <th>Abertura</th>
        				  <th>Hora de Abertura</th>
        				  <th>Qnt. Dias</th>
        				  <th>Número oficio</th>
        				  <th>Orgão Requisitante</th>
        				  <th>Recurso</th>
        				  <th>Objeto</th>
        				  <th>Status</th>
        				  <th>Estimado Projetado</th>
        				  <th>Estimada Real</th>
        				  <th>Adjudicado</th>
        				  <th>Valores Expurgados</th>
        				  <th>Tipo</th>
        				  <th>Bens</th>
        				  <th>Observções</th>
                </tr>
              </thead>
              <tbody>		
			     <?php foreach ($pregoes as $pregao) { ?>
          
              <tr>
              <td><?=$pregao['modalidade']?></td>
              <td><?=$pregao['numero']?></td>
              <td><?=$pregao['comissao']?></td>
              <td><?=$pregao['processo']?></td>
              <td><?=$pregao['nsistema']?></td>
              <td><?=$pregao['dataentrada']?></td>
              <td><?=$pregao['dataenviada']?></td>
              <td><?=$pregao['diaspendentes']?></td>
              <td><?=$pregao['datapossivel']?></td>
              <td><?=$pregao['periodoretirada']?></td>
              <td><?=$pregao['dataabertura']?></td>
              <td><?=$pregao['horaabertura']?></td>
              <td><?=$pregao['qntdias']?></td>
              <td><?=$pregao['numerooficio']?></td>
              <td><?=$pregao['orgaorequisitante']?></td>
              <td><?=$pregao['recurso']?></td>
              <td><?=$pregao['objeto']?></td>
              <td><?=$pregao['status']?></td>
              <td><?=$pregao['estimadaprojetado']?></td>
              <td><?=$pregao['estimadoreal']?></td>
              <td><?=$pregao['adjudicado']?></td>
              <td><?=$pregao['valoresexpurgados']?></td>
              <td><?=$pregao['tipo']?></td>
              <td><?=$pregao['bens']?></td>
              <td><?=$pregao['observacao']?></td>
              </tr>
        
      
      <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   </body>
</html>
