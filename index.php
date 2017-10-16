<?php include('header.php')?>

<div class="container">
<div class="row"> 
<div class="col-sm-12 py-5">

<?php
$csv = array_map('str_getcsv', file('data/eleccion_presidencial.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<pre><code><?php print_r($csv);?></code></pre>



      <table class="table table-bordered table-striped table-responsive">
    		<thead>
    			<tr>
    				<th>Nombre</th>
    				<th>Partido/Pacto</th>
    			</tr>
    		</thead>
    		<tbody>

    			<?php for($a = 0; $a < $total = count($csv); $a++){?>

    			<tr>
    				<td>
    				<?php echo($csv[$a]["Candidato Nombre"])?> 
    				<?php echo($csv[$a]["Candidato Apellido Paterno"])?>
    				<?php echo($csv[$a]["Candidato Apellido Materno"])?>
    				</td>
    				<td><?php echo($csv[$a]["Partido Politico"])?></td>
    			</tr>


    			<?php };?>

    		</tbody>
    	</table>



</div>
</div>
</div>
<?php include('footer.php')?>