

			<!-- start banner Area -->
			<section class="banner-area- relative-" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-end">
						<div class="banner-content col-lg-12 col-md-12">
							<h4 class="text-uppercase">Discover the Colorful World</h4>
							<h1>
								Share links and track clicks				
							</h1>
							
									    <div class="input-group add-on">
									      	<input class="form-control get-url"  placeholder="Your original URL here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your original URL here'" required="">
											
									      
									    </div>
									      <div class="info mt-20"></div>									    
							
							<a href="#" class="primary-btn header-btn text-uppercase url-short">Shorten URL</a>
							<div class="col-lg-12 col-md-12 mt-30 short-url d-none">
							<h3 class="url-head">Your Short Link</h3>
								<div class="col-lg-12">
									<blockquote class="generic-blockquote get-link">
										
									</blockquote>
								</div>						
							</div>
						</div>
						
						
					</div>
				</div>
			</section>
			
			

			<script src="<?php echo base_url();?>public/js/vendor/jquery-2.2.4.min.js"></script>
			
			<script src="<?php echo base_url();?>public/js/main.js"></script>
			<script>
				$(".url-short").click(function(){
					var user_url=$(".get-url").val();
					if(ValidURL(user_url)){
					var pathname = window.location.pathname;
						$.ajax({
						url: pathname+'/welcome/setlink',
						type: 'post',
						data: 'user_url=' + user_url,
						success: function(result){
								if(result=="invalid-url"){
									$(".url-head").text("Invalid URL");
								}else{
									$(".url-head").text("Your Short URL");
								}
								$('.short-url').removeClass('d-none');
								$('.short-url').addClass('d-block');
								$(".get-link").html(result);
						}});
					}
				});
				function ValidURL(str) {
				  return true;
				}
			
			</script>
		</body>
	</html>



