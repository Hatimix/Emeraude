<div id="fetchTailors_page">
    <div class="container">
        <div class="page-header">
          <h2>La liste des tailleurs disponibles ! </h2>
            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>#</th>
            			<th>Le nom complet</th>
            			<th>Age</th>
            			<th>Etat</th>
            			<th>Phone</th>
            			<th>Email</th>
            		</tr>
            	</thead>
            	<tbody>
                <?php for ($i = 0; $i < 16;$i++): ?>
            		<tr>
            			<th><?= $i ?></th>
                        <td>Hatim LAGZAR</td>
                        <td>23</td>
                        <td class="text-success">En ligne</td>
                        <td>06 78 33 32 22</td>
                        <td><a href="#">PGeekC@gmail.com</a></td>
                    </tr>
                <?php endfor; ?>
            	</tbody>
            </table>
        </div>
    </div>
</div>