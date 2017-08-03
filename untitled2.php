<!DOCTYPE html>
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>jQuery custom scrollbar demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- stylesheet for demo and examples -->
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<!-- custom scrollbar stylesheet -->
	<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">
	
</head>

<body>
	<header>
		<a href="http://manos.malihu.gr/jquery-custom-content-scroller/" class="logo"><img src="logo.png" alt="jQuery custom scrollbar" /></a>
		<hr />
	</header>
	
	<div id="demo">
		<section id="examples">
			
			<!-- content -->
			<div class="content mCustomScrollbar">
				<h2>Ajax example</h2>
				<hr />
				<p><a href="Editar.php" rel="load-content">Load content via ajax</a></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> 
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> 
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p> 
				<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p> 
				<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p> 
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
				<hr />
				<p>End of content.</p>
			</div>
		</section>
	</div>
	
	<footer>
		<hr />
		<p><a href="http://manos.malihu.gr/jquery-custom-content-scroller">Plugin home</a> <a href="https://github.com/malihu/malihu-custom-scrollbar-plugin">Project on Github</a> <a href="http://opensource.org/licenses/MIT">MIT License</a></p>
	</footer>
	
	<!-- Google CDN jQuery with fallback to local -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>
	
	<!-- custom scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<script>
		(function($){
			$(window).load(function(){
				
				$("a[rel='load-content']").click(function(e){
					e.preventDefault();
					var url=$(this).attr("href");
					$.get(url,function(data){
						$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
						//scroll-to appended content 
						$(".content").mCustomScrollbar("scrollTo","h2:last");
					});
				});
				
				$(".content").delegate("a[href='top']","click",function(e){
					e.preventDefault();
					$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
				});
				
			});
		})(jQuery);
	</script>
</body>
</html>