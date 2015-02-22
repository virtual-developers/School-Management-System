<div class="row">
	<div class="col-sm-4">
	
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>
			
			<h3>Students</h3>
           <p>Total students</p>
		</div>
		
	</div>
	
	<div class="col-sm-4">
	
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-chart-bar"></i></div>
			<div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>
			
			<h3>Teachers</h3>
			<p>Total teachers</p>
		</div>
		
	</div>
	
	<div class="col-sm-4">
	
		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-mail"></i></div>
			<div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>
			
			<h3>Parents</h3>
			<p>Total parents</p>
		</div>
		
	</div>
	
</div>

<div style="margin:40px;"></div>
<div class="row">
	<!-- CALENDAR-->
	<div class="col-md-6 col-xs-12">    
    	<div class="panel panel-primary " data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					<i class="fa fa-calendar"></i>
					<?php echo get_phrase('event_schedule');?>
                </div>
            </div>
			<div class="panel-body" style="padding:0px;">
                <div class="calendar-env">
                    <div class="calendar-body">
                        <div id="notice_calendar"></div>
                    </div>
                </div>
			</div>
		</div>
    </div>
    
    
    <!-- TIMELINE -->
    <div class="col-md-6">
    	<div class="panel panel-primary " data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					<i class="fa fa-paperclip"></i>
					<?php echo get_phrase('noticeboard');?>
                </div>
            </div>
			<div class="panel-body" style="padding:0px;">
                <ul class="cbp_tmtimeline">
                    <li>
                        <time class="cbp_tmtime" datetime="2014-03-27T03:45"><span>03:45 AM</span> <span>Today</span></time>
                        
                        <div class="cbp_tmicon bg-success">
                            <i class="entypo-feather"></i>
                        </div>
                        
                        <div class="cbp_tmlabel">
                            <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                            
                        </div>
                    </li>
                    
                    <li>
                        <time class="cbp_tmtime" datetime="2014-03-26T13:22"><span>01:22 PM</span> <span>Yesterday</span></time>
                        
                        <div class="cbp_tmicon bg-secondary">
                            <i class="entypo-suitcase"></i>
                        </div>
                        
                        <div class="cbp_tmlabel">
                            <h2><a href="#">Job Meeting</a></h2>
                            <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                        </div>
                    </li>
                </ul>
			</div>
		</div>
    </div>
</div>



    <script>
  $(document).ready(function() {
	  
	  var calendar = $('#notice_calendar');
				
				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},
					
					//defaultView: 'basicWeek',
					
					editable: false,
					firstDay: 1,
					height: 600,
					droppable: false,
					
					events: [
						{
							title: 'Sports Tournament',
							start: '2014-08-01',
							end: '2014-08-03',
							allDay: true,
							className: 'color-blue'
						}
						
					]
				});
	});
  </script>

  
