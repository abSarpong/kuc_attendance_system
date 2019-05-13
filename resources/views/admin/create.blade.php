@extends('layouts.app.app')

@section('title', 'Create')

@section('main-content')

	<div class="canvas">
		<div class="row">
			<div class="columns large-12 small-12" style="padding: 20px 0 20px 0">
				<h2 class="heading">Create</h2>
			</div>
		</div>

		<div class="spacer-20px"></div>
		<div class="spacer-20px"></div>

		<div class="row" style="background-color: #fff; border: 1px solid #EFEFEF;">
			<div class="columns large-centered large-6 no-padding">

				<div class="spacer-20px"></div>
				<div class="spacer-20px"></div>
				
				<div class="ui container">
					<div class="ui big fluid form">
						
						<div class="field">
						  <label class="form-label">Department - <span class="very-very-small-text pale">required</span></label>
					      <div class="spacer-5px"></div>
					      <select class="ui dropdown">
							  <option value="">Select department</option>
							  <option value="1">Comp. Sci. / Info. Tech.</option>
							  <option value="0">Information Technology</option>
							  <option value="0">Computer Science</option>
						  </select>
						</div>
						<div class="spacer-20px"></div>
						<div class="field">
						  <label class="form-label">Level - <span class="very-very-small-text pale">required</span></label>
					      <div class="spacer-5px"></div>
					      <select class="ui dropdown">
					      	  <option value="">Select level</option>
							  <option value="7">100 Lower</option>
							  <option value="6">100 Upper</option>
							  <option value="5">200 Lower</option>
							  <option value="4">200 Upper</option>
							  <option value="3">300 Lower</option>
							  <option value="2">300 Upper</option>
							  <option value="1">400 Lower</option>
							  <option value="0">400 Upper</option>
						  </select>
						</div>
						<div class="spacer-20px"></div>

						<!-- List of courses begins here -->
						<div style="display: none;">
							<h4 class="heading">Select all courses that apply</h4>
							<div class="ui form">
								<div class="row">
									<div class="columns large-6 no-padding">
			 							<div class="grouped fields">
											<div class="field">
												<div class="ui checkbox">
												  <input type="checkbox" name="example">
												  <label>Intro. to I.T</label>
												</div>
											</div>
											<div class="field">
												<div class="ui checkbox">
												  <input type="checkbox" name="example">
												  <label>Intro. to C.S</label>
												</div>
											</div>
											<div class="field">
												<div class="ui checkbox">
												  <input type="checkbox" name="example">
												  <label>Literature</label>
												</div>
											</div>
										</div>
									</div>

									<div class="columns large-6">
			 							<div class="grouped fields">
											<div class="field">
												<div class="ui checkbox">
												  <input type="checkbox" name="example">
												  <label>Intro. to I.T</label>
												</div>
											</div>
											<div class="field">
												<div class="ui checkbox">
												  <input type="checkbox" name="example">
												  <label>Intro. to C.S</label>
												</div>
											</div>
											<div class="field">
												<div class="ui checkbox">
												  <input type="checkbox" name="example">
												  <label>Literature</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="spacer-20px"></div>
							<div class="spacer-20px"></div>
						</div>
						<!-- List of courses ends here -->

						<div class="field">
						  <label class="form-label">Lecturer - <span class="very-very-small-text pale">required</span></label>
					      <div class="spacer-5px"></div>
					      <select class="ui dropdown">
							  <option value="">Select lecturer</option>
							  <option value="1">Mr. Sosu</option>
							  <option value="0">Mr. K. Acheampong</option>
							  <option value="0">Mr. Bryan Laryea</option>
						  </select>
						</div>
						<div class="spacer-20px"></div>
						<div class="equal width fields">
							<div class="field">
							  <label class="form-label">Day - <span class="very-very-small-text pale">required</span></label>
						      <div class="spacer-5px"></div>
						      <select class="ui dropdown">
								  <option value="">Select day</option>
								  <option value="4">Monday</option>
								  <option value="3">Tuesday</option>
								  <option value="2">Wednesday</option>
								  <option value="1">Thursday</option>
								  <option value="0">Friday</option>
							  </select>
							</div>
							<div class="field">
							  <label class="form-label">Time - <span class="very-very-small-text pale">required</span></label>
						      <div class="spacer-5px"></div>
						      <input type="time">
							</div>
						</div>
						<div class="spacer-20px"></div>

						<!-- List of available halls begins here -->
						<div style="display: none;">
							<h4 class="heading">Select a hall</h4>
							<div class="ui form">
								<div class="row">
									<div class="columns large-6 no-padding">
			 							<div class="grouped fields">
											<div class="field">
												<div class="ui radio checkbox">
												  <input type="radio" name="example">
												  <label>K. Hall</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
												  <input type="radio" name="example">
												  <label>R 1</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
												  <input type="radio" name="example">
												  <label>R 2</label>
												</div>
											</div>
										</div>
									</div>

									<div class="columns large-6">
			 							<div class="grouped fields">
											<div class="field">
												<div class="ui radio checkbox">
												  <input type="radio" name="example">
												  <label>R 3</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
												  <input type="radio" name="example">
												  <label>L 1</label>
												</div>
											</div>
											<div class="field">
												<div class="ui radio checkbox">
												  <input type="radio" name="example">
												  <label>L 2</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="spacer-20px"></div>
							<div class="spacer-20px"></div>
						</div>
						<!-- List of available halls ends here -->

					    <div class="spacer-20px"></div>
					    <div style="float: right;">
					    	<a href="" class="secondary-button">Cancel</a>&nbsp;
					    	<button class="ui big button primary-button">Create</button>
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