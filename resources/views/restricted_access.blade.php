@extends('layouts.website.app')

@section('title', 'Restricted Access')

@section('main-content')

<div class="row">

	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>

	<div class="columns large-centered large-10">
		<div class="columns large-4 small-10">
			<img src="{{ asset('/assets/images/lunch_break.svg') }}" alt="Profile image" class="404-image" />
		</div>
		<div class="columns large-8 small-10" style="padding: 5px 0 0 20px;">
			<h1 class="very-huge-text" style="margin-bottom: -20px;">Ristricted Access</h1>
			<h4 class="huge-text">Oooop! Lost i guess. This is because you are <br>not on the right network. Join the burger party or better yet...</h4>
			<div class="spacer-5px"></div>
			<button class="ui big button" type="submit"><i class="fa fa-long-arrow-left"></i> &nbsp; Go back home</button>
		</div>
	</div>

</div>

@endsection

@section('external-script')
<script language = "JavaScript">
</script>
@endsection