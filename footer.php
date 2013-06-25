

		
		<div class="sixteen columns padded footer">
			footer area
		</div>
		</div>
	<script>
				$(document).ready(function(){
					
						$(".nav-menu ul li:first-child a").addClass('selected');
					
						$('a[href^="#"]').on('click',function (e) {
							e.preventDefault();
							var target = this.hash;
							$target = $(target);
							$('html, body').stop().animate({
								'scrollTop': $target.offset().top
							}, 900, 'swing', function () {
								window.location.hash = target;
							});
						});
						
						
						$('.nav-menu ul li a').click(function() {
							var hrf = $(this).attr('href');
							$(".nav-menu ul li a").removeClass('selected');
							$(this).addClass('selected');
							
						});
						
						$('#contactlink').on('click',function (e) {
							e.preventDefault();
							$('#contactform').fadeIn('slow');
						});
						$('#closebtn').on('click',function (e) {
							e.preventDefault();
							$('#contactform').fadeOut('slow');
						});
						
				});
		</script>
	</body>
</html>
