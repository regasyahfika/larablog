@extends('user.app')

@section('title', 'Larablog - Post')


@section('main-content')
	<div class="col-md-9 technology-left">
		<div class="agileinfo">

		  <h2 class="w3">{{ $post->judul }}</h2>
			<div class="single">
			   <img src="images/sing-1.jpg" class="img-responsive" alt="">
			    <div class="b-bottom"> 
			      <h5 class="top">{{ $post->subjudul }}</h5>
				   <p class="sub">{!! htmlspecialchars_decode($post->konten) !!}</p>
			      <p>
			      	{{-- <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a> 
			      	<a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a> --}} 
			      	<a class="span_link" href="#"><span class="glyphicon glyphicon-user"></span> PostedBy </a> &nbsp;
			      	<a class="span_link" href="#"><span class="glyphicon glyphicon-calendar"></span>{{ $post->created_at->format('d M Y') }} </a> &nbsp;
			      	<a class="span_link" href="#"><span class="glyphicon glyphicon-time"></span> {{ $post->created_at->format('h:i a') }} </a> &nbsp;
			      	
			      	@foreach ($post->kategori as $kate)
				      	<a class="span_link" href="{{ route('kategori', $kate->slug) }}"><span class="glyphicon glyphicon-folder-open"></span> {{ $kate->nama }} </a> &nbsp;
			      	@endforeach


					<h5 class="top" style="margin-top: 70px;"><span class="glyphicon glyphicon-tags"></span> Tag</h5>
			      	@foreach ($post->tags as $tag)
			      	<a href="{{ route('tag', $tag->slug) }}" class="span_link"><small style="border-radius: 3px;border: 2px solid gray; padding: 5px;"> {{$tag->nama }} </small></a>&nbsp;
			      	@endforeach
			      	<br>

	
			      </p>
				 
				</div>
			 </div>

				<div class="response">
					<h4>Responses</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="images/sin1.jpg" class="img-responsive" alt="">
							</a>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Jun 21, 2016</li>
								<li><a href="#">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img src="images/sin2.jpg" class="img-responsive" alt="">
									</a>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>July 17, 2016</li>
										<li><a href="#">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="images/sin1.jpg" class="img-responsive" alt="">
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>	
				<div class="coment-form">
					<h4>Leave your comment</h4>
					<form action="#" method="post">
						<input type="text" value="Name " name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Website" name="websie" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="submit" value="Submit Comment">
					</form>
				</div>	
				<div class="clearfix"></div>
		</div>
	</div>
		<!-- technology-right -->
@endsection