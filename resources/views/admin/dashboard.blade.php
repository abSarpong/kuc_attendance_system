@extends('layouts.app.app')

@section('title', 'Dashboard')

@section('main-content')

	<div class="canvas">
		<div class="row">
			<div class="columns large-12 small-12" style="padding: 20px 0 20px 0">
				<h2 class="heading">Dashboard</h2>
			</div>
		</div>

		<div class="spacer-20px"></div>
		<div class="spacer-20px"></div>

		<div class="row no-padding" style="background-color: #fff; border: 1px solid #EFEFEF; padding: 20px 0 !important">
			<div class="columns large-3 small-6" style="border-right: 1px solid #c4c4c4; padding-left: 30px">
				<div class="ui mini statistic">
				  <div class="statistic-label gray-text">
				    Total Lecturers
				  </div>
				  <div class="text-left statistic-value">
				    20
				  </div>
				</div>
			</div>
			<div class="columns large-3 small-6" style="border-right: 1px solid #c4c4c4; padding-left: 30px">
				<div class="ui mini statistic">
				  <div class="statistic-label gray-text">
				    Total Students
				  </div>
				  <div class="text-left statistic-value">
				    400
				  </div>
				</div>
			</div>
			<div class="columns large-3 small-6" style="border-right: 1px solid #c4c4c4; padding-left: 30px">
				<div class="ui mini statistic">
				  <div class="statistic-label gray-text">
				    Total Courses
				  </div>
				  <div class="text-left statistic-value">
				    28
				  </div>
				</div>
			</div>
			<div class="columns large-3 small-6" style="padding-left: 30px">
				<div class="ui mini statistic">
				  <div class="statistic-label gray-text">
				    Total Class
				  </div>
				  <div class="text-left statistic-value">
				    28
				  </div>
				</div>
			</div>
		</div>

		<div class="spacer-20px"></div>
		<div class="spacer-20px"></div>
		<div class="spacer-20px"></div>

		<div class="row" style="background-color: #fff; padding: 20px; border: 1px solid #EFEFEF;">
			<div class="columns large-12 small-11 no-padding">
			<h4 class="heading">Lectures in session</h4>
				  	<div class="spacer-5px"></div>
				    <table class="ui very basic padded stripe table body-text">
					  <thead>
					    <tr>
					      <th>ID</th>
					      <th class="three wide">COURSE</th>
					      <th class="three wide">DEPARTMENT</th>
					      <th class="center aligned">LEVEL</th>
					      <th class="center aligned">No. ON ROLL</th>
					      <th class="center aligned">PRESENT</th>
					      <th class="center aligned">ABSENT</th>
					      <th>VENUE</th>
					      <th>DATE - TIME</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>KUC001 <br> <span>&nbsp;</span></td>
					      <td>
					      	<b>Data Structures</b> <br> <span>Mr. Sosu</span>
					      </td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">200 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					      <td>F3 <br> <span>&nbsp;</span> </td>
					      <td><b>Jan-12-19</b> <br> <span>7:00 am</span></td>
					    </tr>
					    <tr>
					      <td>
					      	KUC001 <br> <span>&nbsp;</span>
					  	  </td>
					      <td>
					      	<b>System Analysis</b> <br> <span>Mr. K. Acheampong</span>
					      </td>
					      <td>Info. Tech <br> <span>&nbsp;</span></td>
					      <td class="center aligned">300 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">4 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">3 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">1 <br> <span>&nbsp;</span> </td>
					      <td>F3 <br> <span>&nbsp;</span> </td>
					      <td><b>Jan-12-19</b> <br> <span>7:00 am</span></td>
					    </tr>
					    <tr>
					      <td>
					      	KUC001 <br> <span>&nbsp;</span>
					  	  </td>
					      <td>
					      	<b>Database I</b> <br> <span>Mrs. Agor</span>
					      </td>
					      <td>Comp. Science & Info. Tech <br> <span>&nbsp;</span></td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">15 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">8 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">7 <br> <span>&nbsp;</span> </td>
					      <td>F3 <br> <span>&nbsp;</span> </td>
					      <td><b>Jan-12-19</b> <br> <span>7:00 am</span></td>
					    </tr>
					    <tr>
					      <td>
					      	KUC001 <br> <span>&nbsp;</span>
					  	  </td>
					      <td>
					      	<b>Intro to I.T</b> <br> <span>Mr. Sosu</span>
					      </td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">8 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">8 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					      <td>F3 <br> <span>&nbsp;</span> </td>
					      <td><b>Jan-12-19</b> <br> <span>7:00 am</span></td>
					    </tr>
					    <tr>
					      <td>
					      	KUC001 <br> <span>&nbsp;</span>
					  	  </td>
					      <td>
					      	<b>Intro to I.T</b> <br> <span>Mr. Sosu</span>
					      </td>
					      <td>Computer Science <br> <span>&nbsp;</span></td>
					      <td class="center aligned">100 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">8 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">8 <br> <span>&nbsp;</span> </td>
					      <td class="center aligned">0 <br> <span>&nbsp;</span> </td>
					      <td>F3 <br> <span>&nbsp;</span> </td>
					      <td><b>Jan-12-19</b> <br> <span>7:00 am</span></td>
					    </tr>
					  </tbody>
					</table>
			</div>
		</div>
	</div>

@endsection

@section('external-script')
<script language = "JavaScript">
</script>
@endsection