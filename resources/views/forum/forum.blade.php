@extends('layouts.forum')
@section('content')
<!-- Begin Blog Grid -->
<div class="blog-wrap">
	<!-- Begin Blog -->
	<div class="blog-grid">
		<!-- Begin Image Format -->
		<div class="post format-image box"> 
			<div class="frame">
				<a href="post.html">
					<img src="/images/art/post1.jpg" alt="" />
				</a>
			</div>
			<h2 class="title"><a href="post.html">Morning Glory</a></h2>
			<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of autumn which I enjoy with my whole heart.</p>
			<div class="details">
				<span class="icon-image"><a href="#">September 26, 2012</a></span>
				<span class="likes"><a href="#" class="likeThis">44</a></span>
				<span class="comments"><a href="#">3</a></span>
			</div>
		</div>
		<!-- End Image Format -->
 	</div>
	<!-- End Blog -->
</div>
<!-- End Blog Grid -->

<!-- Begin Page-navi -->
    <div id="navigation">
      <div class="nav-previous"><a href="#" ><span class="meta-nav-prev">&larr; Older posts</span></a></div>
      
	  <div class="nav-next"><a href="#" ><span class="meta-nav-next">Newer posts &rarr;</span></a></div>
			 
    </div>
<!-- End Page-navi --> 
@stop