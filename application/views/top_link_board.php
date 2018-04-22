	<style>
	.table td{
		padding:0.15rem !important;
	}
	</style>
			<section class="generic-banner relative">	
				<div class="col-lg-12">
				<h3>TOP 100 HIT COUNTS</h3>
				 <table class="table table-striped">
					<thead>
						<tr>
							<th>SN.</th>
							<th>USER LINK</th>
							<th>SHORT LINK</th>
							<th>COUNT</th>
							
						</tr>
					</thead>
					<tbody>
					<?php
					$c=count($all_counts);
						for($i=0;$i<$c;$i++){
					?>
						<tr>
							<td><?php echo ($i+1)?></td>
							<td><?php echo $all_counts[$i]->user_link?></td>
							<td><?php echo base_url().$all_counts[$i]->short_url?></td>
							<td><?php echo $all_counts[$i]->counter?></td>
						</tr>
					<?php
					}
					?>
					
					</tbody>
				 
				 </table>
				 
				</div>
			</section>		
			<!-- End banner Area -->
		

			<!-- End footer Area -->
			<script src="<?php echo base_url();?>public/js/vendor/jquery-2.2.4.min.js"></script>
			
			<script src="<?php echo base_url();?>public/js/main.js"></script>	
		</body>
	</html>
