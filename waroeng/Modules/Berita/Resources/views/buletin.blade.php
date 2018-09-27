@extends('home::layouts.master')

@section('isi')

<!--==| Events Content Start|==-->
<section class="event-contents-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8">
				<div class="events-contents-wrap-one">
					<div class="event-content">
					<img src="http://placehold.it/770x294" alt="Event 01">
					<div class="date-image">
						<div class="date-text">
							<p>Jun</p>
							<span>06</span>
						</div>
						<div class="date-icon">
							<i class="flaticon-food50"></i>
						</div>
					</div>
				</div>
				<div class="event-heading">
					<h1><a href="events-details.html">New year special</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec eleifend lacus, ut convallis dui. Etiam ac ullamcorper dolor. Sed aliquam dolor eget diam efficitur, quis ullamcorper diam ornare. Etiam congue pretium eros et cursus. </p>
					<address>
					  <strong>Place: </strong> 1612 Collins Street West, Victoria 8007 Australia.<br>
					  <strong>Date & Time: </strong> 24 Sept 2015 T07:30:29
					</address>
					<a class="btn btn-imfo btn-read-more" href="{{ url('berita/berita-nikmat-waroeng-ss/detail-buletin-waroeng-ss') }}" >Read more</a>
				</div>
				</div>
				<div class="events-contents-wrap-two">
					<div class="event-content">
					<img src="http://placehold.it/770x294" alt="Event 02">
					<div class="date-image">
						<div class="date-text">
							<p>Apr</p>
							<span>16</span>
						</div>
						<div class="date-icon">
							<i class="flaticon-restaurant36"></i>
						</div>
					</div>
				</div>
				<div class="event-heading">
					<h1><a href="events-details.html">Summer special</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec eleifend lacus, ut convallis dui. Etiam ac ullamcorper dolor. Sed aliquam dolor eget diam efficitur, quis ullamcorper diam ornare. Etiam congue pretium eros et cursus. </p>
					<address>
					  <strong>Place: </strong> 1612 Collins Street West, Victoria 8007 Australia.<br>
					  <strong>Date & Time: </strong> 28 Sept 2015 T07:30:29
					</address>
					<a class="btn btn-imfo btn-read-more" href="events-details.html" >Read more</a>
				</div>
				</div>
				<div class="events-contents-wrap-three">
					<div class="event-content">
					<img src="http://placehold.it/770x294" alt="Event 03">
					<div class="date-image">
						<div class="date-text">
							<p>Mar</p>
							<span>25</span>
						</div>
						<div class="date-icon">
							<i class="flaticon-restaurant29"></i>
						</div>
					</div>
				</div>
				<div class="event-heading">
					<h1><a href="events-details.html">20% off this weekend</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec eleifend lacus, ut convallis dui. Etiam ac ullamcorper dolor. Sed aliquam dolor eget diam efficitur, quis ullamcorper diam ornare. Etiam congue pretium eros et cursus. </p>
					<address>
					  <strong>Place: </strong> 1612 Collins Street West, Victoria 8007 Australia.<br>
					  <strong>Date & Time: </strong> 30 Sept 2015 T07:30:29
					</address>
					<a class="btn btn-imfo btn-read-more" href="events-details.html" >Read more</a>
				</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div id="custom-search-input">
            <form>
		            <div class="input-group col-md-12">
		              <input class="search-query form-control" type="text" placeholder="Enter Your Search">
		              <span class="input-group-btn">
		                <button class="btn btn-danger btn-search" type="button">
		                  <span class="flaticon-search74"></span>
		                </button>
		              </span><!-- /.input-group-btn -->
		            </div><!-- /.input-group -->
              </form>
		          </div>
		          <div class="right-side-image">
		          	<div class="media event-media">
			            <div class="media-left media-top">
			              <a href="events-details.html">
			                <img src="http://placehold.it/95x95" alt="Events Right 01">
			              </a>
			            </div><!-- media left-->
			            <div class="media-body">
			              <h3><a href="events-details.html">Important for breakfast</a></h3>
			              <p class="date-of-event">06</p>
			              <p class="month-of-event">AUG 2015<br><span>TUESDAY</span></p>
			            </div><!--/.media body-->
			        </div><!-- event-media -->

		          	<div class="media event-media">
			            <div class="media-left media-top">
			              <a href="events-details.html">
			                <img src="http://placehold.it/95x95" alt="Events Right 02">
			              </a>
			            </div><!-- media left-->
			            <div class="media-body">
			              <h3><a href="events-details.html">AUTUMN SPECIAL</a></h3>
			              <p class="date-of-event">17</p>
			              <p class="month-of-event">SEP 2015<br><span>WEDNESDAY</span></p>
			            </div><!--/.media body-->
			        </div><!-- event-media -->
		          	<div class="media event-media">
			            <div class="media-left media-top">
			              <a href="events-details.html">
			                <img src="http://placehold.it/95x95" alt="Events Right 03">
			              </a>
			            </div><!-- media left-->
			            <div class="media-body">
			              <h3><a href="events-details.html">SUMMER SPECIAL</a></h3>
			              <p class="date-of-event">24</p>
			              <p class="month-of-event">SEP 2015<br><span>FRIDAY</span></p>
			            </div><!--/.media body-->
			        </div><!-- event-media -->
		          	<div class="media event-media">
			            <div class="media-left media-top">
			              <a href="events-details.html">
			                <img src="http://placehold.it/95x95" alt="Events Right 04">
			              </a>
			            </div><!-- media left-->
			            <div class="media-body">
			              <h3><a href="events-details.html">COFEE</a></h3>
			              <p class="date-of-event">30</p>
			              <p class="month-of-event">OCT 2015<br><span>MONDAY</span></p>
			            </div><!--/.media body-->
			        </div><!-- event-media -->
			        <div class="categories archive">
			          <h3 class="h3">Archives</h3>
			          <ul class="list-unstyled">
			            <li><a href="#">january 2015</a></li>
			            <li><a href="#">february 2015</a></li>
			            <li><a href="#">march 2015</a></li>
			          </ul>
			        </div>
		          </div><!-- /.right-side-image -->
			</div><!-- /.col-md-4 -->
		</div>
	</div>
</section>
<!--==| Events Content End|==-->

@endsection
