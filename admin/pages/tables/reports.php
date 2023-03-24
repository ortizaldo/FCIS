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
    </div>
    <!-- #END# Search Bar -->
    <style>
            #chart {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
                #chart2 {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
        .amcharts-pie-slice {
          transform: scale(1);
          transform-origin: 50% 50%;
          transition-duration: 0.3s;
          transition: all .3s ease-out;
          -webkit-transition: all .3s ease-out;
          -moz-transition: all .3s ease-out;
          -o-transition: all .3s ease-out;
          cursor: pointer;
          box-shadow: 0 0 30px 0 #000;
      }

      .amcharts-pie-slice:hover {
          transform: scale(1.1);
          filter: url(#shadow);
      }    
          #month {
            width: 100%;
            height: 500px;
             margin-left: 5px;
          }   
              #chartdaily {
            width: 98%;
            height:150px;
             margin-left:15px;
          }  
                  #yearly {
            width: 98%;
           height: 500px;
             margin-left:15px;
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
  
  
  
  
  
  
  
  
  
  
  
  
  <body>

    <section class="content">
     
            
            
            
                  
        

             

            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
 
         
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                <a href="javascript:Clickheretoprint1()"; class="btn btn-lg btn-success pull-right" >Print</a>
                
                                   <center>  <h1>Chicken Racist</h1></center> 
                                </div>
                                <div class="col-xs-12 col-sm-12 align-right">
                                                                <?php
include 'action/check-login.php';
include '../config/graph_connection.php';


                        $sql = "SELECT *, bloodline as bloodline, count(bloodline) as sqcount1 FROM chickens  GROUP BY bloodline ";
                        $query = $db->prepare($sql); 
                        $query->execute();
         $fetch = $query->fetchAll();
   foreach ($fetch as $key => $value) {
 $data[] = array('bloodline'=>$value['bloodline'], 'sqcount1'=>$value['sqcount1']);
                        }
                        $chart2 = json_encode($data);
                        ?>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                      
                            </ul>
                        </div>
        
                        <div class="body" id = "content1">
            
                           <div id="chart2"></div>
             
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12"><a href="javascript:Clickheretoprint2()"; class="btn btn-lg btn-success pull-right" >Print</a>
                                
                                  <center>  <h1>Chicken categories</h1></center>
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 ">
                                                                              <?php
include 'action/check-login.php';
include '../config/graph_connection.php';


                        $sql = "SELECT *, chicken_categories as cock_categories, count(chicken_categories) as qcount FROM chickens  GROUP BY chicken_categories ";
                        $query = $db->prepare($sql); 
                        $query->execute();
         $fetch = $query->fetchAll();
   foreach ($fetch as $key => $current_stock) {
 $data7[] = array('chicken_categories'=>$current_stock['chicken_categories'], 'qcount'=>$current_stock['qcount']);
                        }
                        $chart = json_encode($data7);
                        ?>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                      
                            </ul>
                        </div>
                        
                        <div class="body" id = "content2">
                           <div id="chart" ></div>
                         
                        </div>
                    </div>
                </div>
            </div>








    </section>
  <!-- Jquery CountTo Plugin Js -->
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
                "balloonText": "<span style='font-size:20px'>[[bloodline]]</span> :<br><span style='font-size:14px'><b>Stocks: [[sqcount1]]</b> ([[percents]]%)</span>",
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
                            



                 <script src="bootstrap/js/bootstrap.min.js"></script>

                <script src="bootstrap/js/metisMenu.min.js"></script>


            <script src="js/sb-admin-2.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
            <script src="text/css" href="js/graph/plugins/export/export.js"></script>
        
        <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../scripts/common.js" type="text/javascript"></script>
      
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

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>