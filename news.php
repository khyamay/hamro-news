<?php 
$pageTitle="Hamro News: News from Newspaper of Nepal.";
$section="news";
include ('inc/header.php');
 ?>
	<div class="container">
	<div id="category">
		<div class="fl_left">
			<h2><span>Nepali Patra&raquo;</span></h2>
			<div id="divRss11"></div></div>
		<div class="fl_right">
			<h2><span>Himalayan Times&raquo;</span></h2>
			<div id="divRss12"></div></div>		
			<br class="clear">
		<div class="fl_left">
			<h2><span>E-Kantipur&raquo;</span></h2>
			<div id="divRss13"></div></div>
		<div class="fl_right">
			<h2><span>My Republica&raquo;</span></h2>
			<div id="divRss14"></div></div>
		<br class="clear">
	</div>
	<?php 
	include('inc/add.php');
	?>
	</div>
	<br class="clear">
	</div>
	</div>	
	<div class="wrapper">
		<div class="container">
			<br class="clear">
		<h2 class="hide">Newspapers</h2>
		       <div id="wrapper" class="bodo">
		       			<div id="carosel">
		       				<img src="images/ktmpost.png" alt="ktmpost" width="250" height="150" />
		       				<img src="images/kantipur.png" alt="kantipur" width="250" height="150" />
		       				<img src="images/nari.png" alt="nari" width="250" height="150" />
		       				<img src="images/saptahik.png" alt="saptahik" width="250" height="150" />
		       				<img src="images/nepal.png" alt="nepalmag" width="250" height="150" />
		       				<img src="images/wave.png" alt="wave" width="250" height="150" />
		       				<img src="images/nepalitimes.png" alt="ntimes" width="250" height="150" />
		       			</div>
		       		</div>
		       		<a id="prev" href="#"></a>
		       		<a id="next" href="#"></a>
		       		<br class="clear">
				</div>
	</div>
	<div class="wrapper">
		<div id="footer">
		<div class="content">
		<div id="pnote"><p class="note">"This website is purely for educational purpose. All the content belongs to the rightful onwers."</p>
			<ul class="subnav">
				<li><a href="index.html" class="">Home</a></li>
				<li><a href="sports.html" class="">Sports</a></li>
				<li><a href="music.html" class="">Entertainment</a></li>
				<li><a href="news.html" class="">News</a></li>
				<li><a href="others.html" class="">Others</a></li>
			</ul>
			</div>
				</div>
		<div class="column">
		<h2>Contact Form</h2>
		<div id="contact_form">
		  <form name="contact" method="post" action="">
		    <fieldset>
		      <label for="name" id="name_label">Name</label>
		      <input type="text" name="name" id="name" size="30" value="" class="text-input" />
		      <label class="error" for="name" id="name_error">This field is required.</label>
		      
		      <label for="email" id="email_label">Return Email</label>
		      <input type="text" name="email" id="email" size="30" value="" class="text-input" />
		      <label class="error" for="email" id="email_error">This field is required.</label>
		      
		      <label for="phone" id="phone_label">Return Phone</label>
		      <input type="text" name="phone" id="phone" size="30" value="" class="text-input" />
		      <label class="error" for="phone" id="phone_error">This field is required.</label>
		      
		    	<br />
		      <input type="submit" name="submit" class="button" id="submit_btn" value="Send" />
		    </fieldset>
		  </form>
		</div>
		<script type="text/javascript">
		 $(function() {

        //  create carousel
        $('#carosel').carouFredSel({
          responsive: true,
          items: {
            width: 200,
            height: '60%',
            visible: 5
          },
          auto: {
            items: 1
          },
          prev: '#prev',
          next: '#next'
        });

        //  re-position the carousel, vertically centered
        var $elems = $('#wrapper, #prev, #next'),
          $image = $('#carosel img:first')

        $(window).bind( 'resize.example', function() {
          var height = $image.outerHeight( true );

          $elems
            .height( height )
            .css( 'marginTop', -( height/2 ) );

        }).trigger( 'resize.example' );

      });
    </script>
		<?php 
		include('inc/footer.php');
		?>