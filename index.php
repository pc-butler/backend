<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>php-calendar</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/pfp2.png" style="max-width: 25%" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Royce Whitaker</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            RW
                        </div>
                    </li>
                    <li class="active">
                        <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="/start"><i class="fa fa-th-large"></i> <span class="nav-label">Startpage</span></a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">TODO list</span></a>
                    </li>
                    <li>
                        <a href="/heatmap"><i class="fa fa-th-large"></i> <span class="nav-label">Heatmap</span></a>
                    </li>
                    <li>
                        <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                    </li>
                    <li class="landing_link">
                        <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome Royce Whitaker.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>

        <h1>TITLE</h1>







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
		
		
		
		
		
		
    <div class="footer">
        <div class="pull-right">
            <!--10GB of <strong>250GB</strong> Free. -->
        </div>
        <div>
            <strong>Copyright</strong> Degenme © 2021
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/js/plugins/flot/jquery.flot.js"></script>
    <script src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="/js/plugins/toastr/toastr.min.js"></script>

    <!-- Datatables -->
    <script src="/js/plugins/dataTables/datatables.min.js"></script>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
</body>
</html>
