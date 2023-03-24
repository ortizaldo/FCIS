<!DOCTYPE html>
<html>
<?php
error_reporting(0);
include 'action/check-login.php';
include 'action/alerts.php';




?>
<?php include('header.php');?>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
<?php include('search.php');?>

    <!-- #END# Search Bar -->
 <style>
            #chart {
            width       : 100%;
            height      : 100%;
            font-size   : 11px;
        } 
                #chart2 {
            width       : 100%;
            height      : 300px;
            font-size   : 11px;
        } 
      

      .amcharts-pie-slice:hover {
          transform: scale(1.1);
          filter: url(#shadow);
      }    
        
       
          
          </style>
      <script language="javascript">
    function Clickheretoprint()
    { 
      var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
      var content_vlue = document.getElementById("content").innerHTML; 

      var docprint=window.open("","",disp_setting); 
      docprint.document.open(); 
      docprint.document.write('</head><body onLoad="self.print()" style="width: 1000px; height:400; font-size: 20px; font-family: arial;">');          
      docprint.document.write(content_vlue); 
      docprint.document.close(); 
      docprint.focus(); 
  }
      function Clickheretoprint1()
    { 
      var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
      var content_vlue = document.getElementById("content1").innerHTML; 

      var docprint=window.open("","",disp_setting); 
      docprint.document.open(); 
      docprint.document.write('</head><body onLoad="self.print()" style="width: 1000px; height:400; font-size: 20px; font-family: arial;">');          
      docprint.document.write(content_vlue); 
      docprint.document.close(); 
      docprint.focus(); 
  }
      function Clickheretoprint2()
    { 
      var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
      var content_vlue = document.getElementById("content2").innerHTML; 

      var docprint=window.open("","",disp_setting); 
      docprint.document.open(); 
      docprint.document.write('</head><body onLoad="self.print()" style="width: 1000px; height:400; font-size: 20px; font-family: arial;">');          
      docprint.document.write(content_vlue); 
      docprint.document.close(); 
      docprint.focus(); 
      }
      
        function Clickheretoprint3()
    { 
      var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
      var content_vlue = document.getElementById("content3").innerHTML; 

      var docprint=window.open("","",disp_setting); 
      docprint.document.open(); 
      docprint.document.write('</head><body onLoad="self.print()" style="width: 1000px; height:400; font-size: 20px; font-family: arial;">');          
      docprint.document.write(content_vlue); 
      docprint.document.close(); 
      docprint.focus(); 
  }
</script>
  
    <!-- Top Bar -->
  <?php include('navigation_bar.php');                 ?>
      <!-- #Top Bar -->
    
    
    
    
    
    
    
    

    

  
  <?php include('sidebar.php');?>
  
  
  
  
  
  
  
  
  
  
  
  
  

    <section class="content">
        <div class="container-fluid">

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
            <a href = "pages/tables/chickens.php"> 
                        <div class="icon">
                            <i class="material-icons">menu</i>
                        </div>
                        <div class="content">
                            <div class="text"> Total Number of fowls</div>
                           
                            <div class="number" data-from="0"  data-speed="15"><?php echo number_format($mypr1); ?></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
            <a href = "pages/tables/breed.php"> 
                        <div class="icon">
                            <i class="material-icons">menu</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Number of Breed </div>
                            <div class="number" data-from="0"  data-speed="1000" data-fresh-interval="20">
                        <?php 
                        include '../config/db_config.php';

$sql = "SELECT * FROM breeders ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $breeders=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$breeders = "0";
}
$conn->close();
 ?>




                            <?php echo number_format($breeders); ?></div>
                        </div>
                    </div>
          </a>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple">
          <a href = "pages/tables/conditioning.php"> 
                       
                        <div class="icon">
              <i class="material-icons">menu</i>
                        </div>
                        <div class="content">
                            <div class="text">Total number of Conditioning</div>
                            <div class="number" data-speed="1000" data-fresh-interval="20"> <?php echo number_format($myus12); ?> 
                            </div>
                        </div>
                    </div>
                </div>
               </a>
            </div>
      
      
      
            
               <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
             
                    <div class="info-box-4 bg-orange">
        <a href = "pages/tables/losses.php"> 
                        <div class="icon">
                            <i class="material-icons col-red">trending_down</i>
                        </div>
                        <div class="content">
                            <div class="text">Losses</div>
        <div class="text" ><b style = "font-size:15px;"> <?php 
        $total =  $mysum234 + $mysum2345 + $mysum23456;

        echo $total;

         ?><b></div>
                           
                        </div>
                    </div>
          </a>
                </div>
        
               <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
             
                    <div class="info-box-4 bg-green">
        <a href = "pages/tables/father.php"> 
                        <div class="icon">
                            <i class="material-icons col-red">menu</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Number of Sire</div>
                 <div class="text" ><b style = "font-size:15px;"> <?php echo $mysum222; ?><b></div>
                           
                        </div>
                    </div>
          </a>
                </div>
                   <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
             
                    <div class="info-box-4 bg-blue">
        <a href = "pages/tables/mother.php"> 
                        <div class="icon">
                            <i class="material-icons col-red">menu</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Number of Dam</div>
                 <div class="text" ><b style = "font-size:15px;"> <?php echo $myus124; ?><b></div>
                           
                        </div>
                    </div>
          </a>
                </div>
             

            </div>
            
            
            <div class="row clearfix">

       
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                          <center>
                              <h2>Upcoming events</h2>
                          </center>
                          
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                          
                                            <th>Event Type</th>
                                            <th>Place</th>
                                            <th>Date</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                              <?php
                                 include '../config/db_config.php';
                         
                              $event_date = date("Y-m-d");      
                 $sql = "SELECT * FROM conditioning WHERE   event_date > '$event_date' order by event_date ASC limit 5 ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $event_date = $row['event_date'];
          $place = $row['place'];
            $event_type = $row['event_type'];
           
          ?>
                                            <td>  <?php echo $event_type ?></td>
                                             <td><span class="label bg-blue"><?php echo $place ?></span></td>
                                                 <td><?php echo $event_date ?></td>
                                             
                                        </tr>
                                          <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                          <center>
                              <h2>Top 5 Winning Fighting Cock</h2>
                          </center>
                          
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                          
                                            <th>Cock Id</th>
                                            <th>Wins</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                              <?php
                                 include '../config/db_config.php';
                         
                                
                 $sql = "SELECT * FROM battles WHERE result = 'win' GROUP BY chicken_id order by count(result) DESC limit 5 ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                       $exalert2=mysqli_num_rows($result);
 $ex2 = true;
        while($row = $result->fetch_assoc()) {
          $chicken_id = $row['chicken_id'];
        
           
          ?>
                                            <td>  <?php echo $chicken_id ?></td>
                                             <td><span class="label bg-blue"><?php echo $ex2; ?>
       </span></td>
                                                
                                             
                                        </tr>
                                          <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Best cock bloodline</h2>
                    
                        </div>
                        <div class="body">
                           <?php
include 'action/check-login.php';
include '../config/graph_connection.php';


                        $sql = "SELECT *, bloodline as bloodline, count(bloodline) as sqcount1 FROM battles where result = 'win'  GROUP BY bloodline order by count(result) ";
                        $query = $db->prepare($sql); 
                        $query->execute();
         $fetch = $query->fetchAll();
   foreach ($fetch as $key => $value) {
 $data[] = array('bloodline'=>$value['bloodline'], 'sqcount1'=>$value['sqcount1']);
                        }
                        $chart2 = json_encode($data);
                        ?>
    <div id="chart2"></div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
  <!-- Jquery CountTo Plugin Js -->
  <script type="text/javascript" src="jquery.min.js"></script>
          <script src="js/graph/plugins/amcharts/amstock.js"></script>    
         <script src="js/graph/plugins/amcharts/amcharts.js"></script>
        <script src="js/graph/plugins/amcharts/serial.js"></script>
    
        <script src="js/plugins/amcharts/themes/pattern.js"></script>
       <script src="js/plugins/amcharts/themes/dark.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
          <script src="js/graph/plugins/amcharts/amstock.js"></script>    
         <script src="js/graph/plugins/amcharts/amcharts.js"></script>
        <script src="js/graph/plugins/amcharts/serial.js"></script>
       <script src="js/graph/plugins/amcharts/funnel.js"></script>
        <script src="js/plugins/amcharts/themes/pattern.js"></script>
   
    <script src="js/graph/plugins/animate/animate.min.js"></script>
      <script>
     
       <script src ="bootstrap/js/bootstrap.min.js"></script>

                <script src="bootstrap/js/metisMenu.min.js"></script>

<script src="js/graph/plugins/amcharts/plugins/responsive/responsive.min.js"></script>
    <script src="js/graph/plugins/export/export.js"></script>
    <link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">
<link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">
         <script src="js/graph/plugins/export.js"></script>
    <script src="js/graph/plugins/exportexport.js"></script>
    <link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">

    <script src="js/graph/plugins/export/examples/export.config.default.js"></script>
      <script src="js/graph/plugins/amcharts/plugins/responsive/responsive.min.js"></script>
    <script src="js/graph/plugins/export/export.js"></script>
    <link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">
<link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">
         <script src="js/graph/plugins/export.js"></script>
            <script src="js/graph/plugins/amcharts/export/export.min.js"></script>
        <script src="js/graph/plugins/amcharts/themes/patterns.js"></script>
        <script type="js/graph/plugins/export/export.css" type="text/css" media="all"></script>
    
      <script src="js/graph/plugins/amcharts/export/export.min.js"></script>
        <script type="js/graph/plugins/export/export.css" type="text/css" media="all"></script>
    
    
    <script type="text/javascript" src="jquery.min.js"></script>
          <script src="js/graph/plugins/amcharts/amstock.js"></script>    
         <script src="js/graph/plugins/amcharts/amcharts.js"></script>
        <script src="js/graph/plugins/amcharts/serial.js"></script>
      
        <script src="js/plugins/amcharts/themes/pattern.js"></script>
    <script src="js/plugins/amcharts/themes/light.js"></script>
    <script src="js/graph/plugins/animate/animate.min.js"></script>
      <script src="js/graph/plugins/amcharts/pie.js"></script>
            <script src="js/sb-admin-2.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

        <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../scripts/common.js" type="text/javascript"></script>
       <script src="js/graph/plugins/amcharts/pie.js"></script>


        <script type="text/javascript">
                var raw = '<?php echo $chart2; ?>';
            var data = JSON.parse(raw);
            var chart = AmCharts.makeChart( "chart2", {
               "type": "pie",
                "dataProvider": data ,
                "titleField": "bloodline",
                "valueField": "sqcount1",
                "nameField": "bloodline",
                "titleField": "bloodline",
                "valueField": "sqcount1",
                "balloonText": "<span style='font-size:20px'>[[bloodline]]</span> :<br><span style='font-size:14px'><b>[[bloodline]]: [[sqcount1]]</b> ([[percents]]%)</span>",
                "innerRadius": "30%",
               "legend": {
        "position": "right"
      },
            
            } );
</script>





        <script type="text/javascript">
                  var raw = '<?php echo $chart; ?>';
            var data1 = JSON.parse(raw);
            var chart = AmCharts.makeChart( "chart", {
                
               "type": "pie",
                "dataProvider": data1 ,
                "titleField": "chicken_categories",
                "valueField": "sqcount",
                "nameField": "chicken_categories",
                "titleField": "chicken_categories",
                "valueField": "qcount",
                "balloonText": "<span style='font-size:20px'>[[chicken_categories]] :</span><span style='font-size:14px'>[[sqcount]]</span>   <br><span style='font-size:14px'><b>Total: [[qcount]]</b> ([[percents]]%)</span>",
                "innerRadius": "30%",
               "legend": {
        "position": "right"
               },
            
            } );
</script>
        <script>
        
        
        
        $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
          var raw = '<?php echo $month; ?>';
          var month = JSON.parse(raw);
          var month = AmCharts.makeChart( "month", {
            "type": "serial",
              "fontFamily": "Helvetica",
           "fontSize": 20,
       "dataProvider": month,
       "rotate": false,
       "marginTop": 10,
        "marginTop": 10,
       "categoryField": "title",
       "categoryAxis": {
         "gridAlpha": 0.07,
         "axisColor": "#DADADA",
         "startOnAxis": true,
         "title": "Monthly Sales",
         "guides": [{
           "category": "title",
           "lineColor": "#CC0000",
           "lineAlpha": 1,
           "dashLength": 2,
           "inside": true,
           "labelRotation": 90,
           "label": "title"
         }, {
           "category": "title",
           "lineColor": "#CC0000",
           "lineAlpha": 1,
           "dashLength": 2,
           "inside": true,
           "labelRotation": 90,
           "label": "Monthly sales"
         }]
       },
       "valueAxes": [{
         "stackType": "regular",
         "gridAlpha": 0.07,
         "title": "Monthly Sales Graph"
       }],
       "graphs": [{
         "type": "column",
         "title": "title",
         "valueField": "value",
         "lineAlpha": 0,
        
         "fillAlphas": 0.6,
        
        "balloonText": "[[title]]: <b>Total Sales [[value]]</b>",
       }],
       "legend": {
         "position": "bottom",
         "valueText": "[[value]]",
         "valueWidth": 100,
         "valueAlign": "left",
         "equalWidths": false,
         "periodValueText": "total: [[value]]"
       },
          "export": {
                    "enabled": true
                },
       "chartCursor": {
         "cursorAlpha": 0
       },
       "chartScrollbar": {
         "color": "FFFFFF"
       },
      "responsive": {
        "enabled": true
      }

     }






            );
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          var raw = '<?php echo $yearly; ?>';
          var data = JSON.parse(raw);
          var data = AmCharts.makeChart( "yearly", {
               "fontFamily": "Helvetica",
           "fontSize": 20,
            "type": "serial",
            "theme": "pattern",
            "dataProvider": data,
         "valueAxes": [{
          "gridAlpha": 0.2,
              "dashLength": 0,
         "title": "Yearly  Sales Graph"
       }],
          
            "gridAboveGraphs": true,
            "startDuration": 1,
            "graphs": [ {
              "balloonText": "[[title]]: <b>Total Sales [[value]]</b>",
                     
              "fillAlphas": 0.8,
              "lineAlpha": 0.2,
                "labelText": "[[value]]",
              "type": "column",
              "valueField": "value"
            } ],
            "chartCursor": {

              "categoryBalloonEnabled": false,
              "cursorAlpha": 0,
              "zoomable": false
              
            },
            
            "categoryField": "title",
            "categoryAxis": {
              "gridPosition": "start",
              "gridAlpha": 0,
              "tickPosition": "start",
              "tickLength": 20
             
            },
            "export": {
              "enabled": true
            }

          } );
          
          
          // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
        </script>      
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

 

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>


    <!-- Bootstrap Core JavaScript -->

  
  <!-- FullCalendar -->
  
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>