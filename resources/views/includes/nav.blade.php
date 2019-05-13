
	<div class="nav" style="border-bottom: 1px solid #F8F8F8;">
		<div class="row expanded">
			<div class="columns large-10 small-10">
				<div class="ui text menu " style="float: left;">
				  <a href="{{ route('dashboard') }}" class="active item">
				    Dashboard
				  </a>
				  <a href="{{ route('create') }}" class="item">
				    Create
				  </a>
				  <a href="{{ route('search') }}" class="item">
				    Search
				  </a>
				  <a href="{{ route('report') }}" class="item">
				    Report
				  </a>
			      <a href="{{ route('settings') }}" class="item">
			      	Settings
			  	  </a>
				</div>
			</div>
			<div class="columns large-2 no-padding">
				<div class="hide-for-small-onl" style="padding: 12px 0 0 0;">
					<div class="">
				  		<span class="very-very-small-text hide-for-small-only">Welcome <br> <b style="position: relative; bottom: 12px;">Administrator</b></span>&nbsp;&nbsp;
				  		<img src="{{ asset('/assets/images/no-image.png') }}" alt="Profile image" class="profile-image" style="margin: -40px 0 0 -10px;" />
				  		<span>
				  			<div class="ui pointing dropdown item">
						    <i class="dropdown icon" style="margin: -40px 0 0 0; position: relative; top: -20px"></i>
						    <div class="menu logout" style="position: absolute; left: -60px; top: 20px; z-index: 100">
						      <a href="" class="item">Logout</a>
						    </div>
						</div>
				  		</span>
					</div>
				</div>
			</div>
		</div>
	</div>