<!doctype html>
<html lang='pt-BR'>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<!-- O seu HTML vem aqui! -->
		<table class="table table-hover">
			<thead >
				<th class="span1"><input type="checkbox" name="check_root" id="check_root" />Todos</th>
				<th class="span3">Nome</th>
			</thead>
			<tbody>
				<div>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="1" value="1"/></td><td>1Ivan</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="2" value="2"/></td><td>2Cleide</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="3" value="3"/></td><td>3Kelve</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="4" value="4"/></td><td>4Pedro</td></tr>
				</div>
			</tbody>
		</table>

		<button href="" id="botao_deletar" role="button" class="btn btn-danger" data-toggle="modal" disabled="true">Deletar</button>

		<div id="myResponse">

		</div>

		<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Collapsible Group Item #1
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
       		<table class="table table-hover">
			<thead >
				<th class="span1"><input type="checkbox" name="check_root" id="check_root" />Todos</th>
				<th class="span3">Nome</th>
			</thead>
			<tbody>
				<div>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="1" value="1"/></td><td>1Ivan</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="2" value="2"/></td><td>2Cleide</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="3" value="3"/></td><td>3Kelve</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="4" value="4"/></td><td>4Pedro</td></tr>
				</div>
			</tbody>
		</table>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
       		<table class="table table-hover">
			<thead >
				<th class="span1"><input type="checkbox" name="check_root" id="check_root" />Todos</th>
				<th class="span3">Nome</th>
			</thead>
			<tbody>
				<div>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="1" value="1"/></td><td>1Ivan</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="2" value="2"/></td><td>2Cleide</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="3" value="3"/></td><td>3Kelve</td></tr>
					<tr><td><input type="checkbox" class="chkmark" name="checkbox[]" data-id="4" value="4"/></td><td>4Pedro</td></tr>
				</div>
			</tbody>
		</table>
      </div>
    </div>
  </div>
</div>

     
	    <!-- Modal -->
	    <div id="myModal" class="modal hide fade" tabindex="-1" 
	    	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-header">
		    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    	<h3 id="myModalLabel">Modal header</h3>
		    </div>
		    <div class="modal-body">
		    	<p>One fine body…</p>
		    </div>
		    <div class="modal-footer">
		    	<button class="btn" data-dismiss="modal" aria-hidden="false">Close</button>
		    	<button class="btn btn-primary" data-dismiss="modal" id="deletar">Deletar</button>
		    </div>
	    </div>


		<script src="jquery-1.11.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="lista.js"></script>
		
	</body>
</html>