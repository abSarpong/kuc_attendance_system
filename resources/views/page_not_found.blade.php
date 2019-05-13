@extends('layouts.website.app')

@section('title', '404')

@section('main-content')

<div class="row">

	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>
	<div class="spacer-20px"></div>

	<div class="columns large-centered large-9 small-10">
		<section style="">
			<div style="display: flex; justify-content: center;">
				<img src="{{ asset('/assets/images/404.png') }}" alt="404 image" class="404-image text-center" style="height: 80px; margin-bottom: -20px;" />
			</div>
			<h6 class="text-center pale" style=";">Page not found</h6>
			<h4 class="text-center huge-text">Oooop! The page you're trying to access is can not be found, this may be due to the fact that the file has been deleted or renamed. Kindly check and try again.</h4>
			<div class="spacer-20px"></div>
			<div class="text-center">
				<button class="ui big button text-center" type="submit"><i class="fa fa-long-arrow-left"></i> &nbsp; Go back home</button>
			</div>
		</section>
	</div>

</div>

@endsection

@section('external-script')
<script language = "JavaScript">
</script>
@endsection