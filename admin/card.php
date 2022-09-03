<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .c-left{
        height: 93vh;
        
    }
    .c-body{
        font-size: 12px;
    }
    .c-right{
        padding-left: 0.001%;
    }
    .table-condensed{
    font-size: 7px;
    }
    .course-b {
    font-size: 9px;
    }
    
</style>
<body>

    
        <div class="containe-fluid" id="general_container">
            <div class="card shadow bord-er">
                    <div class="card-header"><center><b>Scheduler</b></center></div>
                    <div class="card-body" style="margin: 2px;">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="card c-left shadow bord-er">
                                        <div class="card-header">Calendar</div>
                                            <div class="card-body c-body">
                                                
                                                <div id="calendar"></div>
                                            </div>
                                    </div>
                                </div>
                    
                                <div class=" col c-right col-md-6">
                                    <div style="padding-bottom: 10px">
                                        <div class="card shadow bord-erb " style=" width: auto; height: 30vh">
                                            <div class="card-header">Courses</div>
                                            <div class="card-body course-b" style="overflow-y: scroll; height:100%">
                                                <table class="table table-condensed table-bordered table-hover table-responsive" style="height: auto;" >
                                                <colgroup>
                                                            <col width="1%">
                                                            <col width="1%">
                                                            <col width="5%">
                                                            <col width="40%">
                                                            <col width="1%">
                                                            <col width="1%">
                                                            <col width="1%">
                                                            <col width="1%">
                                                        
                                                    </colgroup>
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No.</th>
                                                            <th class="text-center">Course No.</th>
                                                            <th class="text-center">Course Code</th>
                                                            <th class="text-center">Description</th>
                                                            <th class="text-center">Units</th>
                                                            <th class="text-center">Lec</th>
                                                            <th class="text-center">Lab</th>
                                                            <th class="text-center">Sec</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        $i = 1;
                                                        $subject = $conn->query("SELECT * FROM subject_global order by id asc");
                                                        while($row=$subject->fetch_assoc()):
                                                        ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $i++ ?></td>
                                                            <td class="text-center"><?php echo $row['CPE1_Code'] ?></b></td>
                                                            <td class="text-center"><?php echo $row['CPE1_SUBJ_Code'] ?></b></td>
                                                            <td class="text-center"><?php echo $row['CPE1_SUBJ_Descript'] ?></b></td>
                                                            <td class="text-center"><?php echo $row['CPE1_Units'] ?></b></td>
                                                            <td class="text-center"><?php echo $row['CPE1_Lec'] ?></b></td>
                                                            <td class="text-center"><?php echo $row['CPE1_Lab'] ?></b></td>
                                                            <td class="text-center"><?php echo $row['CPE1_Sec'] ?></b></td>
                                                            
                                                        </tr>
                                                        <?php endwhile; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer"></div>
                                        </div>
                                    </div>
                                    <div style="padding-bottom: 10px">
                                        <div class="card shadow bord-err" style=" width: auto; height: 30vh">
                                            <div class="card-header">Rooms</div>
                                            <div class="card-body course-b" style="overflow-y: scroll; height:100%">
                                                <table class="table table-condensed table-bordered table-hover table-responsive" style="height: auto;" >
                                                    <colgroup>
                                                                <col width="1%">
                                                                <col width="1%">
                                                        </colgroup>
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Room</th>
                                                                <th class="text-center">Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $i = 1;
                                                            $rooms = $conn->query("SELECT * FROM rooms_org order by id asc");
                                                            while($row=$rooms->fetch_assoc()):
                                                            ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $row['room'] ?></b></td>
                                                                <td class="text-center"><?php echo $row['descript'] ?></b></td>
                                                                
                                                            </tr>
                                                            <?php endwhile; ?>
                                                        </tbody>
                                                    </table>
                                            </div>
                                            <div class="card-footer"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card shadow bord-erg" style=" width: auto; height: 30vh">
                                            <div class="card-header">Faculty</div>
                                            <div class="card-body">Content</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>  
            </div>
        </div>
    
    
</body>
</html>
        <script>
                $('table').DataTable( {
                "bPaginate": false
                } );
        </script>
<script>
	
	
	var calendarEl = document.getElementById('calendar');
    var calendar;
	document.addEventListener('DOMContentLoaded', function() {
   

        calendar = new FullCalendar.Calendar(calendarEl, {
          views: {
            dayGrid: {
                weekday: 'long' 
            },
            timeGrid: {
                weekday: 'long' 
            },
            day: {
                weekday: 'long' 
            },
            week: {
                weekday: 'long' 
            }
          },
          slotMinTime: "07:00:00",
          slotMaxTime: "22:00:00",
          firstDay: 1,
          initialView: 'timeGridWeek',
          weekNumbers: false,
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          selectable: true,
          nowIndicator: false,
          allDaySlot: false,
          dayMaxEvents: true, // allow "more" link when too many events
          showNonCurrentDates: false,
          minTime:"07:00:00",
          maxTime:"21:00:00",
          events: []
        });
        calendar.render();
     

  });
	$('#faculty_id').change(function(){
		 calendar.destroy()
		 start_load()
		 $.ajax({
		 	url:'ajax.php?action=get_schecdule',
		 	method:'POST',
		 	data:{faculty_id: $(this).val()},
		 	success:function(resp){
		 		if(resp){
		 			resp = JSON.parse(resp)
		 					var evt = [] ;
		 			if(resp.length > 0){
		 					Object.keys(resp).map(k=>{
		 						var obj = {};
		 							obj['title']=resp[k].CPE1_SUBJ_Descript
		 							obj['data_id']=resp[k].id
		 							obj['data_location']=resp[k].location
		 							obj['data_description']=resp[k].description
		 							if(resp[k].is_repeating == 1){
		 							obj['daysOfWeek']=resp[k].D_counter //can be change here
		 							obj['startRecur']=resp[k].start
		 							obj['endRecur']=resp[k].end
									obj['startTime']=resp[k].time_from
		 							obj['endTime']=resp[k].time_to
		 							}else{

		 							obj['start']=resp[k].schedule_date+'T'+resp[k].time_from;
		 							obj['end']=resp[k].schedule_date+'T'+resp[k].time_to;
		 							}
		 							
		 							evt.push(obj)
		 					})
							 console.log(evt)

		 		}
		 				  calendar = new FullCalendar.Calendar(calendarEl, {
                            views: {
            dayGrid: {
                weekday: 'long' 
            },
            timeGrid: {
                weekday: 'long' 
            },
            day: {
                weekday: 'long' 
            },
            week: {
                weekday: 'long' 
            }
          },
          slotMinTime: "07:00:00",
          slotMaxTime: "22:00:00",
          firstDay: 1,
          initialView: 'timeGridWeek',
          weekNumbers: false,
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          selectable: true,
          nowIndicator: false,
          allDaySlot: false,
          dayMaxEvents: true, // allow "more" link when too many events
          showNonCurrentDates: false,
				          events: evt,
				          eventClick: function(e,el) {
							   var data =  e.event.extendedProps;
								uni_modal('View Schedule Details','view_schedule.php?id='+data.data_id,'mid-large')

							  }
				        });
		 	}
		 	},complete:function(){
		 		calendar.render()
		 		end_load()
		 	}
		 })
	})
</script>
<script src="condition.js"></script>