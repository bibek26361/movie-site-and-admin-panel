
@extends('user.layout.master')
@section('content')

<!-- page title -->
<section class="section section--first section--bg" data-bg="{{asset('frontend/main/img/section/section.jpg')}}">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
					<!-- section title -->
					<h1 class="section__title">Profile</h1>
					<!-- end section title -->

					<!-- breadcrumb -->
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{('dashboard')}}">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Profile</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end page title -->
  
<!-- content -->
<div class="content">
	<!-- profile -->
	<div class="profile">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="profile__content">
						<div class="profile__user">
							<div class="profile__avatar">
								<img src="img/user.svg" alt="">
							</div>
							<div class="profile__meta">
								<h3>Username</h3>
								<span>ID: 23562</span>
							</div>
						</div>

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Settings</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs content__mobile-tabs--profile" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Profile">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Settings</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end profile -->

	<div class="container">
		<!-- content tabs -->
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
				<div class="row row--grid">
					<!-- dashbox -->
					<div class="col-12 col-xl-6">
						<div class="dashbox">
							<div class="dashbox__title">
								<h3><img src="img/film.svg" alt=""> Movies for you</h3>

								<div class="dashbox__wrap">
									<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
									<a class="dashbox__more" href="catalog.html">View All</a>
								</div>
							</div>

							<div class="dashbox__table-wrap">
								<table class="main__table main__table--dash">
									<thead>
										<tr>
											<th>ID</th>
											<th>TITLE</th>
											<th>CATEGORY</th>
											<th>RATING</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="main__table-text">321</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">Movie</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">9.2</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">54</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">Movie</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">9.1</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">670</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">TV Series</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">9.0</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">241</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting 2</a></div>
											</td>
											<td>
												<div class="main__table-text">TV Series</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">8.9</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">22</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">TV Series</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">8.9</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- end dashbox -->

					<!-- dashbox -->
					<div class="col-12 col-xl-6">
						<div class="dashbox">
							<div class="dashbox__title">
								<h3><img src="img/star-half-alt.svg" alt=""> Latest reviews</h3>

								<div class="dashbox__wrap">
									<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
									<a class="dashbox__more" href="reviews.html">View All</a>
								</div>
							</div>

							<div class="dashbox__table-wrap">
								<table class="main__table main__table--dash">
									<thead>
										<tr>
											<th>ID</th>
											<th>ITEM</th>
											<th>AUTHOR</th>
											<th>RATING</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="main__table-text">23</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">7.2</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">24</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">6.3</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">25</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">8.4</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">26</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">9.0</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">27</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">7.7</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- end dashbox -->
				</div>
			</div>

			<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
				<div class="row row--grid">
					<!-- details form -->
					<div class="col-12 col-lg-6">
						<form action="#" class="profile__form">
							<div class="row">
								<div class="col-12">
									<h4 class="profile__title">Profile details</h4>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="username">Username</label>
										<input id="username" type="text" name="username" class="profile__input" placeholder="User 123">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="email">Email</label>
										<input id="email" type="text" name="email" class="profile__input" placeholder="email@email.com">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="firstname">First Name</label>
										<input id="firstname" type="text" name="firstname" class="profile__input" placeholder="John">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="lastname">Last Name</label>
										<input id="lastname" type="text" name="lastname" class="profile__input" placeholder="Doe">
									</div>
								</div>

								<div class="col-12">
									<button class="profile__btn" type="button">Save</button>
								</div>
							</div>
						</form>
					</div>
					<!-- end details form -->

					<!-- password form -->
					<div class="col-12 col-lg-6">
						<form action="#" class="profile__form">
							<div class="row">
								<div class="col-12">
									<h4 class="profile__title">Change password</h4>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="oldpass">Old Password</label>
										<input id="oldpass" type="password" name="oldpass" class="profile__input">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="newpass">New Password</label>
										<input id="newpass" type="password" name="newpass" class="profile__input">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="confirmpass">Confirm New Password</label>
										<input id="confirmpass" type="password" name="confirmpass" class="profile__input">
									</div>
								</div>

								<div class="col-12">
									<button class="profile__btn" type="button">Change</button>
								</div>
							</div>
						</form>
					</div>
					<!-- end password form -->
				</div>
			</div>
		</div>
		<!-- end content tabs -->
	</div>
</div>
<!-- end content -->

@endsection