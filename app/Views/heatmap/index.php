<?= \Config\Services::validation()->listErrors() ?>
<script type="text/javascript" src="//d3js.org/d3.v3.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/cal-heatmap/3.3.10/cal-heatmap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/cal-heatmap/3.3.10/cal-heatmap.css" />
<div class="row  border-bottom white-bg dashboard-header animated fadeIn">
	<div class="col-md-12">
		<button class="btn" id="animationDuration-previous">Previous</button>
					<button class="btn" id="animationDuration-next">Next</button>
		<center><div id="cal-heatmap"></div></center>
		<script type="text/javascript">

			var cal = new CalHeatMap();
			cal.init(
				{
					domain: "month", 
					start: new Date(2021, 0, 1),
					minDate: new Date(2020, 12),
					data: "/heatmap/api.json",
					previousSelector: "#animationDuration-previous",
					nextSelector: "#animationDuration-next",
					range: 4,
					legend: [0, 1, 2, 3, 4],
					domainLabelFormat: function(date) {
						return moment(date).format("MMM - YY"); // Use the moment library to format the Date
					},
					datatype: "json"
				}
			);
		</script>
<br>
<div class="ibox float-e-margins">
	<div class="ibox-title">
	    <h5>New Event <small>Click click!</small></h5>
	    <div class="ibox-tools">
	        <a class="collapse-link">
	            <i class="fa fa-chevron-up"></i>
	        </a>
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	            <i class="fa fa-wrench"></i>
	        </a>
	        <ul class="dropdown-menu dropdown-user">
	            <li><a href="#">Config option 1</a>
	            </li>
	            <li><a href="#">Config option 2</a>
	            </li>
	        </ul>
	        <a class="close-link">
	            <i class="fa fa-times"></i>
	        </a>
	    </div>
	</div>
	<div class="ibox-content">
	    <div class="text-center">
	    <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Add new event</a>
	    </div>
	    <div id="modal-form" class="modal fade" aria-hidden="true">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-body">
	                    <div class="row">
	                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Sign in</h3>

	                            <p>Sign in today for more expirience.</p>

	                           <form action="/heatmap" method="post" role="form">
	                           		<?= csrf_field() ?>
	                                <div class="form-group"><label>Type</label> <input name="type" type="input" placeholder="Enter type" class="form-control"></div>
	                                <div class="form-group"><label>Comment</label> <input name="comment" type="textarea" placeholder="Comment..." class="form-control"></div>
	                                <div>
	                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="submit"><strong>Submit</strong></button>
	                                </div>
	                            </form>
	                        </div>
	                        <div class="col-sm-6"><h4>Not a member?</h4>
	                            <p>You can create an account:</p>
	                            <p class="text-center">
	                                <a href=""><i class="fa fa-sign-in big-icon"></i></a>
	                            </p>
	                    </div>
	                </div>
	            </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>





<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Event Entries</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-wrench"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#">Config option 1</a>
                </li>
                <li><a href="#">Config option 2</a>
                </li>
            </ul>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">

        <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover dataTables-example" >
	    <thead>
		    <tr>
		    	<th>id</th>
		        <th>DateTime</th>
		        <th>Type</th>
		        <th>Comment(s)</th>
		    </tr>
	    </thead>
	    <tbody>
    		<?php
			foreach ($query->getResult() as $row){

				//echo $row->datetime;
				//$timezone  = -8; //(GMT -5:00) EST (U.S. & Canada)
				//$localTime = gmdate("Y/m/j h:i:s A", strtotime($row->datetime) + 3600*($timezone+date("I")));
				//$localTime = Time::createFromTimestamp($row->datetime, 'America/Los_Angeles', 'en_US');
				//$localTime = new Time(date('Y-m-d H:i:s', $row->datetime), 'America/Los_Angeles', 'en_US');
				$timestamp = gmdate(intval($row->datetime));
				$newDateString = date('Y-m-d h:i:s A', $timestamp);
				//echo $newDateString;
				//echo $dt->format('Y-m-d H:i:s');

			    echo "<tr>";
			    	echo "<td>" . $row->id . "</td>";
			    	echo "<td>" . $newDateString . "</td>";
			    	echo "<td>" . $row->type . "</td>";
			    	echo "<td>" . $row->comment . " </td>";
			    echo "</tr>";
			}
			?>
    	</tbody>
    <tfoot>
    <tr>
    	<th>id</th>
        <th>DateTime</th>
		<th>Type</th>
		<th>Comment(s)</th>
    </tr>
    </tfoot>
    </table>
        </div>

    </div>
</div>

<script>
	docReady(function() {
    	$(document).ready(function(){
	        $('.dataTables-example').DataTable({
	            pageLength: 100,
	            responsive: true,
	            "order": [[ 0, "desc" ]],
	            dom: '<"html5buttons"B>lTfgitp',
	            buttons: [
	                { extend: 'copy'},
	                {extend: 'csv'},
	                {extend: 'excel', title: 'EventData'},
	                {extend: 'pdf', title: 'EventData'},

	                {extend: 'print',
	                 customize: function (win){
	                        $(win.document.body).addClass('white-bg');
	                        $(win.document.body).css('font-size', '10px');

	                        $(win.document.body).find('table')
	                                .addClass('compact')
	                                .css('font-size', 'inherit');
	                }
	                }
	            ]
	        });
    	});
	});
    function docReady(fn) {
	    // see if DOM is already available
	    if (document.readyState === "complete" || document.readyState === "interactive") {
	        // call on next available tick
	        setTimeout(fn, 1);
	    } else {
	        document.addEventListener("DOMContentLoaded", fn);
	    }
	}    
</script>
</div></div>
