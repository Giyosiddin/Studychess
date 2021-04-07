@extends('layouts.front')

@section('content')
 <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
 </section>
 <section>
	 <div class="container">	 	
		<div class="wrapper">
			<h2>Profile</h2>
			<div class="row">
				<div class="col-4">
					<aside>
						<ul>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-8">			
					<form>
						<div class="form-group">
							<input type="text" name="username" placeholder="Username">
						</div>
						<div class="form-group">
							<input type="phone" name="phone" placeholder="Phone">
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="E-mail">
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="E-mail">
						</div>
					</form>
				</div>
			</div>
		</div>
	 </div>	
</section>
@endsection