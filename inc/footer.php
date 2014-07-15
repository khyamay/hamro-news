</div>
			<br class="clear">
		</div>
		</div>
		<div class="wrapper">
		<div id="end">
			<p>&copy HamroNews <?php echo date('Y'); ?> All right Reserved</p>
			
		</div>
			<br class="clear">
	</div>
	</div>


	
	<script type="text/javascript">

   $(document).ready(function() {
   
   	//Default Action
   	$(".tab_content").hide(); //Hide all content
   	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
   	$(".tab_content:first").show(); //Show first tab content
   	
   	//On Click Event
   	$("ul.tabs li").click(function() {
   		$("ul.tabs li").removeClass("active"); //Remove any "active" class
   		$(this).addClass("active"); //Add "active" class to selected tab
   		$(".tab_content").hide(); //Hide all tab content
   		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
   		$(activeTab).fadeIn(); //Fade in the active content
   		return false;
   	});
   
   });
   </script>

     <script type="text/javascript">
        $(function() {
          $('#carousel').carouFredSel({
            width: 900,
            height: 500,
            align: false,
            padding: [0, 650, 0, 0],
            items: {
              width: 50,
              height: 500,
              visible: 5,
              minimum: 1
            },
            scroll: {
              items: 1,
              duration: 750,
              onBefore: function( data ) {
                data.items.old.add( data.items.visible ).find( 'span' ).stop().slideUp();
              },
              onAfter: function( data ) {
                data.items.visible.last().find( 'span' ).stop().slideDown();
              }
            },
            auto: false,
            onCreate: function() {
              $(this).children().each(function() {
                $(this).append( '<span>' + $('img', this).attr( 'alt' ) + '</span>' );
                $(this).find( 'span' ).hide();
              });
            }
          });
          $('#carousel').children().click(function() {
            $('#carousel').trigger( 'slideTo', [this, -4, 'prev'] );
          });
        });
      </script>

      <script type="text/javascript">
        $(function() {
          $('.carousel').each(function() {
            var $cfs = $(this);
            $cfs.carouFredSel({
              direction: 'up',
              circular: false,
              infinite: false,
              align: false,
              width: 319,
              height: 290,
              items: 1,
              auto: false,
              scroll: {
                queue: 'last'
              }
            });
            $cfs.hover(
              function() {
                $cfs.trigger('next');
              },
              function() {
                $cfs.trigger('prev');
              }
            );
          });
        });
      </script>

     
</body>
</html>