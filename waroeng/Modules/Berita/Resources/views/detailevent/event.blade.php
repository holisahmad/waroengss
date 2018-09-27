@extends('home::layouts.master')

@section('isi')

<!--==| Events Content Start|==-->
<section class="event-contents-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8">
				<div class="events-contents-wrap-three">
					<div class="event-content">
					<img src="http://placehold.it/770x293" alt="Event 01">
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
					<h1>{{ $title }}</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec eleifend lacus, ut convallis dui. Etiam ac ullamcorper dolor. Sed aliquam dolor eget diam efficitur, quis ullamcorper diam ornare. Etiam congue pretium eros et cursus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, nihil fugit et ratione officiis dolor nulla inventore quasi commodi labore, saepe blanditiis unde sed doloribus, optio earum corporis temporibus deserunt.</p><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate assumenda, obcaecati illum molestiae praesentium sequi dignissimos quos eius ratione fuga, officiis fugit alias necessitatibus pariatur. Ex illum doloremque aperiam numquam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate assumenda, obcaecati illum molestiae praesentium sequi dignissimos quos eius ratione fuga, officiis fugit alias necessitatibus pariatur. Ex illum doloremque aperiam numquam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate assumenda, obcaecati illum molestiae praesentium sequi dignissimos quos eius ratione fuga, officiis fugit alias necessitatibus pariatur. Ex illum doloremque aperiam numquam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate assumenda, obcaecati illum molestiae praesentium sequi dignissimos quos eius ratione fuga, officiis fugit alias necessitatibus pariatur. Ex illum doloremque aperiam numquam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate assumenda, obcaecati illum molestiae praesentium sequi dignissimos quos eius ratione fuga, officiis fugit alias necessitatibus pariatur. </p><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec eleifend lacus, ut convallis dui. Etiam ac ullamcorper dolor. Sed aliquam dolor eget diam efficitur, quis ullamcorper diam ornare. Etiam congue pretium eros et cursus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, nihil fugit et ratione officiis dolor nulla inventore quasi commodi labore, saepe blanditiis unde sed doloribus, optio earum corporis temporibus deserunt.</p>

          <blockquote class="blockquote-reverse">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Jhone Doe <cite title="Source Title">Area Director</cite></footer>
          </blockquote>


				</div>
        <div class="leave-comments">
                                <div class="row">
                                <div class="col-xs-12">
                                    <h2>Leave me a comment</h2>
                                    <form>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="yourName1"> Your Name*</label>
                                        <input type="text" class="form-control" id="yourName1" >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputEmail1">Email address*</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="yourWebsite">Your Website</label>
                                        <input type="text" class="form-control" id="yourWebsite">
                                    </div>
                                </div> <!-- row -->

                                <div class="form-group">
                                    <label for="textArea">Comment</label>
                                    <textarea class="form-control textarea" id="textArea" rows="6" ></textarea>
                                </div>
                                    <button id="comment-submit" type="submit" class="btn btn-imfo btn-read-more">Post A Comment</button>
                            </form>
                                </div>
                            </div>
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
			              <a href="#">
			                <img src="http://placehold.it/95x95" alt="Events Right 01">
			              </a>
			            </div><!-- media left-->
			            <div class="media-body">
			              <h3><a href="#">Important for breakfast</a></h3>
			              <p class="date-of-event">06</p>
			              <p class="month-of-event">AUG 2015<br><span>TUESDAY</span></p>
			            </div><!--/.media body-->
			        </div><!-- event-media -->

		          	<div class="media event-media">
			            <div class="media-left media-top">
			              <a href="#">
			                <img src="http://placehold.it/95x95" alt="Events Right 02">
			              </a>
			            </div><!-- media left-->
			            <div class="media-body">
			              <h3><a href="#">AUTUMN SPECIAL</a></h3>
			              <p class="date-of-event">17</p>
			              <p class="month-of-event">SEP 2015<br><span>WEDNESDAY</span></p>
			            </div><!--/.media body-->
			        </div><!-- event-media -->
		          	<div class="media event-media">
			            <div class="media-left media-top">
			              <a href="#">
			                <img src="http://placehold.it/95x95" alt="Events Right 03">
			              </a>
			            </div><!-- media left-->
			            <div class="media-body">
			              <h3><a href="#">SUMMER SPECIAL</a></h3>
			              <p class="date-of-event">24</p>
			              <p class="month-of-event">SEP 2015<br><span>FRIDAY</span></p>
			            </div><!--/.media body-->
			        </div><!-- event-media -->
		          	<div class="media event-media">
			            <div class="media-left media-top">
			              <a href="#">
			                <img src="http://placehold.it/95x95" alt="Events Right 04">
			              </a>
			            </div><!-- media left-->
			            <div class="media-body">
			              <h3><a href="#">COFEE</a></h3>
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
