@extends('default.main')


	@section('content')
      @include('common.notification')
        <div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">Client Identification</h3>
				<p class="creating">Describe the owner of the property which you are going to valuate.</p>
				<div class="sign-up-row ">
					<h5>Client Information :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>First Name* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								<input type="text"  required>
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Last Name* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								<input type="text" required>
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Email Address* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								<input type="text" required>
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Telephone Number* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								<input type="text" required>
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					</div>
			</div>
		</div>

		@endsection