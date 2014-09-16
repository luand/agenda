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
          <a class="navbar-brand" href="#">Concorrência</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=BASE_URL?>usuario/login">Sair</a></li>
          </ul>
          <form class="navbar-form navbar-right" action="<?=BASE_URL?>concorrencias" method="post">
            <input type="text" name="busca" class="form-control" placeholder="Número...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="pregoes">Pregoes</a></li>
			<li class="active"><a href="concorrencias">Concorrência</a></li>          
           
          </ul>
        
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Concorrência</h1>
          <div class="table-responsive">
            <table class="table table-striped">
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
			<?php foreach ($concorrencias as $concorrencia) { ?>
          
        		  <tr>
						  <td><?=$concorrencia['modalidade']?></td>
		          <td><?=$concorrencia['numero']?></td>
						  <td><?=$concorrencia['comissao']?></td>
		          <td><?=$concorrencia['processo']?></td>
		          <td><?=$concorrencia['nsistema']?></td>
		          <td><?=$concorrencia['dataentrada']?></td>
		          <td><?=$concorrencia['dataenviada']?></td>
						  <td><?=$concorrencia['diaspendentes']?></td>
						  <td><?=$concorrencia['datapossivel']?></td>
						  <td><?=$concorrencia['periodoretirada']?></td>
						  <td><?=$concorrencia['dataabertura']?></td>
						  <td><?=$concorrencia['horaabertura']?></td>
						  <td><?=$concorrencia['qntdias']?></td>
						  <td><?=$concorrencia['numerooficio']?></td>
						  <td><?=$concorrencia['orgaorequisitante']?></td>
						  <td><?=$concorrencia['recurso']?></td>
						  <td><?=$concorrencia['objeto']?></td>
						  <td><?=$concorrencia['status']?></td>
						  <td><?=$concorrencia['estimadaprojetado']?></td>
						  <td><?=$concorrencia['estimadoreal']?></td>
						  <td><?=$concorrencia['adjudicado']?></td>
						  <td><?=$concorrencia['valoresexpurgados']?></td>
						  <td><?=$concorrencia['tipo']?></td>
						  <td><?=$concorrencia['bens']?></td>
						  <td><?=$concorrencia['observacao']?></td>
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
