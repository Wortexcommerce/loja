<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th><input type="checkbox"></th>
                    <th>Pedido</th>
                    <th>Cliente</th>
                    <th>Data Pedido</th>
                    <th>Data Aprovação</th>
                    <th>Pagamento/Envio</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr>';
								echo '<td><input type="checkbox"></td>';
								echo '<td>1445787'.$x.'</td>';
								echo '<td>Diogo Mastrangelo de Moura</td>';
								echo '<td>01/05/2018</td>';
								echo '<td>03/05/2018</td>';
								echo '<td>PAGSEGURO/ <i class="fa fa-truck fa-fw" aria-hidden="true"></i> PAC</td>';
								echo '<td>R$ 399,99</td>';
								echo '<td><span class="badge badge-success">Entregue</span></td>';
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>


<nav>
	<ul class="pagination justify-content-center">
		<li class="page-item">
        	<a class="page-link" href="#" aria-label="Previous">
            	<span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
        	<a class="page-link" href="#" aria-label="Next">
            	<span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
   </ul>
</nav>