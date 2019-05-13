@extends('layouts.app.app')

@section('title', 'Settings')

@section('main-content')

	<div class="canvas">
		<div class="row">
			<div class="columns large-12 small-10" style="padding: 20px 0 20px 0">
				<h2 class="heading">Settings</h2>
			</div>
		</div>

		<div class="spacer-20px"></div>
		<div class="spacer-20px"></div>

		<div class="row" style="background-color: #fff; border: 1px solid #EFEFEF;">
			<div class="columns large-centered large-6 small-11 no-padding">

				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>
				
				<div class="ui container">
					<div class="ui big form">
						<h4 class="heading">Reset your password</h4>
						<div class="spacer-20px"></div>

						<div class="spacer-20px"></div>
					    <div class="field">
					      <label class="form-label">Email - <span class="very-very-small-text pale">required</span></label>
					      <div class="spacer-5px"></div>
					      <input type="text" placeholder="me@mail.com">
					    </div>
					    <div class="spacer-5px"></div>
					    <div class="spacer-5px"></div>
					    <div class="field">
					      <label class="form-label">Old password - <span class="very-very-small-text pale">required</span></label>
					      <div class="spacer-5px"></div>
					      <input type="text" placeholder="Enter old password">
					    </div>
					    <div class="spacer-5px"></div>
					    <div class="spacer-5px"></div>
					    <div class="field">
					      <label class="form-label">New password - <span class="very-very-small-text pale">required</span></label>
					      <div class="spacer-5px"></div>
					      <input type="text" placeholder="Enter new password">
					    </div>
					    <div class="spacer-20px"></div>
					    <div style="float: right;">
					    	<a href="" class="secondary-button">Cancel</a>&nbsp;
					    	<button class="ui big button primary-button">Reset</button>
					    </div>
					</div>
				</div>

				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>

			</div>
		</div>
	</div>

@endsection

@section('external-script')
<script language = "JavaScript">
</script>
@endsection