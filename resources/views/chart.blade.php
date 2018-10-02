@extends('common')
@section('chart')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Question', '% Answer'],
          ['Question-1', {{$resultqsn1}}],
          ['Question-2', {{$resultqsn2}}],
          ['Question-3', {{$resultqsn3}}],
		  ['Question-4', {{$resultqsn4}}],
		  ['Question-5', {{$resultqsn5}}],
		  ['Question-6', {{$resultqsn6}}],
		  ['Question-7', {{$resultqsn7}}],
		  ['Question-8', {{$resultqsn8}}],
		  ['Question-9', {{$resultqsn9}}],
		  ['Question-11', {{$resultqsn11}}],
		 ['Question-12', {{$resultqsn12}}],
		  ['Question-13', {{$resultqsn13}}],
		  ['Question-14', {{$resultqsn14}}],
		  ['Question-15', {{$resultqsn15}}],
		  ['Question-16', {{$resultqsn16}}],
		  ['Question-17', {{$resultqsn17}}],
		  ['Question-18', {{$resultqsn18}}],
		   ['Question-19', {{$resultqsn19}}],
		    ['Question-20', {{$resultqsn20}}],
		   ['Question-21', {{$resultqsn21}}],
		   ['Question-22', {{$resultqsn22}}],
		   ['Question-23', {{$resultqsn23}}],
		   ['Question-24', {{$resultqsn24}}],
		   ['Question-25', {{$resultqsn25}}],
		   ['Question-26', {{$resultqsn26}}],
		   
		   
		           ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>

@endsection
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
   <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </div><!-- /.container-fluid -->
  
</section>
@endsection