<footer>
	<section id="company">
		<div class="company-detail">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-company">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 address">
					<h1 class="name">Hulas Remittance Pvt. Ltd.</h1>
					<h2><i class="fa fa-map-marker" aria="hidden"></i>Bagh Durbar, Sundhara, Kathamndu</h2>
					<h2><i class="fa fa-phone" aria="hidden"></i>977-1-4261313</h2>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 follow">
						<h1 class="name">Follow Us</h1>
						<div class="social-icon">
							<a href="#">
								<img src="{{url('assets/front/images/fb.png')}}">
							</a>
						</div>
						<div class="social-icon">
							<a href="#">
								<img src="{{url('assets/front/images/tw.png')}}" class="tw-img">
							</a>
						</div>
						<div class="social-icon">
							<a href="#">
								<img src="{{url('assets/front/images/fb.png')}}">
							</a>
						</div>
						<div class="social-icon">
							<a href="#">
								<img src="{{url('assets/front/images/tw.png')}}" class="tw-img">
							</a>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section id="footer">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-footer">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 copy">
				Copyright &copy; 2016 Hulas Remittance
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 our-company">
				design: <a href="http://theinboxit.com/" target="_blank" style="color: #fff;">InBoxIT</a>
			</div>
		</div>
	</section>		
</footer>																						
<!--Scripts-->
<script src="{{url('assets/front/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{url('assets/front/js/jquery-1.11.1.js')}}"></script>
<script src="{{url('assets/front/js/parallax.js')}}"></script>
<script src="{{url('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/front/js/jquery.fancybox.pack.js')}}"></script>
<script type="text/javascript" src="{{url('assets/front/js/jquery.mousewheel-3.0.6.pack.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
<!-- Animated NavMenu -->
<script type="text/javascript">
	$(document).ready(function () {
			  $(".navbar-toggle").on("click", function () {
				    $(this).toggleClass("active");
			  });
		});
</script>
<script type="text/javascript">
	$(document).ready(function() {
    var navOffset = jQuery("#navigation").offset().top;
        jQuery(window).scroll(function(){
         var scrollPos= jQuery(window).scrollTop();
       /*alert(scrollPos);*/
        if(scrollPos>navOffset){
             jQuery(".navbar-default").addClass("nav-fixed");
         }
         else{
             jQuery(".navbar-default").removeClass("nav-fixed");
         }
     });
    });
</script>
<script type="text/javascript">
	//material contact form animation
	$('.contact-form').find('.form-control').each(function() {
	  var targetItem = $(this).parent();
	  if ($(this).val()) {
	    $(targetItem).find('label').css({
	      'top': '10px',
	      'fontSize': '14px'
	    });
	  }
	})
	$('.contact-form').find('.form-control').focus(function() {
	  $(this).parent('.input-block').addClass('focus');
	  $(this).parent().find('label').animate({
	    'top': '10px',
	    'fontSize': '14px'
	  }, 300);
	})
	$('.contact-form').find('.form-control').blur(function() {
	  if ($(this).val().length == 0) {
	    $(this).parent('.input-block').removeClass('focus');
	    $(this).parent().find('label').animate({
	      'top': '25px',
	      'fontSize': '18px'
	    }, 300);
	  }
	})
</script>
<script type="text/javascript">
    $(document).ready(function() {

    $(".single_image").fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        helpers : {
            title : {
                type : 'over'
            }
        }
    });
    
});
</script>
<script type="text/javascript">
  $(function(){
  $('#Container').mixItUp();
});
</script>
<<<<<<< HEAD
<script>
	$('#zone').on('change',function(e){
		console.log(e);

		var zone_id = e.target.value;

		//ajax
		$.get('/ajax-district?zone_id='+zone_id,function(data){
			//success data
			/*console.log(data);*/
			$('#district').empty();
			$('#map').empty();
			$('#district').append('<option value="0">'+"Select District"+'</option>');
			$.each(data,function(index,districtObj){
				$('#district').append('<option value="'+districtObj.dis_id+'">'+districtObj.dis_name+'</option>');
			});
		});

	});
</script>
<script>
	$('#district').on('change',function(e){
		console.log(e);

		var dis_id = e.target.value;

		//ajax
		$.get('/ajax-region?dis_id='+dis_id,function(data){
			//success data
			/*console.log(data);*/
			$('#region').empty();
			$('#map').empty();
			$('#region').append('<option value="0">'+"Select Region"+'</option>');
			$.each(data,function(index,regionObj){
				$('#region').append('<option value="'+regionObj.p_id+'">'+regionObj.p_name+'</option>');
			});
		});

	});
</script>
<script>
	$('#region').on('change',function(e){
		console.log(e);

		var p_id = e.target.value;

		//ajax
		$.get('/agent-fetch?p_id='+p_id,function(data){
			//success data
			/*console.log(data);*/
			$('#agent-section').empty();

			$.each(data,function(index,agentObj){
				/*$('#map').append(agentObj.agent_name+"<br/> "+agentObj.agent_address);*/
				
			});
		});

	});
</script>
<script type="text/javascript">
	$('.parallax-window').parallax({imageSrc:'{{url('assets/front/images/back-banner.png')}}'})
</script>
<script type="text/javascript">
	$('.parallax-win-2').parallax({imageSrc:'{{url('assets/front/images/wu5.png')}}'})
</script>
=======
>>>>>>> a02be301d35b8528f79a85647ef65d1ae806da76
