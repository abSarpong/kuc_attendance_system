@extends('layouts.app.app')

@section('title', 'Search')

@section('main-content')

	<div class="canvas">
		<div class="row" style="padding: 20px 0 20px 0;">
			<div class="columns large-4 no-padding">
				<h2 class="heading">Search</h2>
			</div>
			<div class="columns large-8 no-padding" style="display: flex; justify-content: flex-end;">
				<div class="ui mini input" style="width: 400px;">
				  <input type="text" name="" placeholder="Enter lecturer, student or course name or ID ...">
				</div>
				&nbsp;
				<button class="ui button">Search</button>
			</div>
		</div>

		<div class="spacer-20px"></div>
		<div class="spacer-20px"></div>

		<div class="row" style="background-color: #fff; padding: 20px; border: 1px solid #EFEFEF;">
			<div class="columns large-12 no-padding">
				
					<h4 class="heading">Student search</h4>
				  	<div class="spacer-5px"></div>
				    <table class="ui very basic padded stripe table body-text">
					  <thead>
					    <tr>
					      <th class="">Name</th>
					      <th>Number</th>
					      <th class="four wide">Course</th>
					      <th class="">Department</th>
					      <th class="center aligned">Level</th>
					      <th class="center aligned">Present</th>
					      <th class="center aligned">Absent</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td><b>Michael Sarpong</b> <br> <span>KUC001</span></td>
					      <td>0268706863 <br> <span>&nbsp;</span></td>
					      <td><b>Intro. to Computer Science</b> <br> <span>KUC01</span></td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					    <tr>
					      <td><b>Michael Sarpong</b> <br> <span>KUC001</span></td>
					      <td>0268706863 <br> <span>&nbsp;</span></td>
					      <td><b>Intro. to Computer Science</b> <br> <span>KUC01</span></td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					    <tr>
					      <td><b>Michael Sarpong</b> <br> <span>KUC001</span></td>
					      <td>0268706863 <br> <span>&nbsp;</span></td>
					      <td><b>Intro. to Computer Science</b> <br> <span>KUC01</span></td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					    <tr>
					      <td><b>Michael Sarpong</b> <br> <span>KUC001</span></td>
					      <td>0268706863 <br> <span>&nbsp;</span></td>
					      <td><b>Intro. to Computer Science</b> <br> <span>KUC01</span></td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					    <tr>
					      <td><b>Michael Sarpong</b> <br> <span>KUC001</span></td>
					      <td>0268706863 <br> <span>&nbsp;</span></td>
					      <td><b>Intro. to Computer Science</b> <br> <span>KUC01</span></td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					  </tbody>
					</table>

					<!-- Course Search table begins here -->
					<!-- <h4 class="heading">Course search</h4>
				  	<div class="spacer-5px"></div>
				    <table class="ui very basic padded stripe table body-text">
					  <thead>
					    <tr>
					      <th class="">ID</th>
					      <th>Course</th>
					      <th class="center aligned">Level</th>
					      <th class="">Department</th>
					      <th class="center aligned">No. On ROll</th>
					      <th class="center aligned">Present</th>
					      <th class="center aligned">Absent</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>KUC001</td>
					      <td>
					      	<b>Data Structures</b> <br> <span>Mr. Sosu</span>
					      </td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					    <tr>
					      <td>KUC001</td>
					      <td>
					      	<b>Data Structures</b> <br> <span>Mr. Sosu</span>
					      </td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					    <tr>
					      <td>KUC001</td>
					      <td>
					      	<b>Data Structures</b> <br> <span>Mr. Sosu</span>
					      </td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					    <tr>
					      <td>KUC001</td>
					      <td>
					      	<b>Data Structures</b> <br> <span>Mr. Sosu</span>
					      </td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					    <tr>
					      <td>KUC001</td>
					      <td>
					      	<b>Data Structures</b> <br> <span>Mr. Sosu</span>
					      </td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					    </tr>
					  </tbody>
					</table> -->
					<!-- Course Search table ends here -->

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