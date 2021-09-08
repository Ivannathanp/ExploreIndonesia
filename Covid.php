<?php $map_data= include ('data.php');?>
<!DOCTYPE html>
<!-- Created By Ivan Nathan Parmenas_201869990239 -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COVID - Explore Indonesia</title>
  <link rel="shortcut icon" href="/img/Logo.png"/>
  <link id="theme" rel="stylesheet" type="text/css" href="/css/light-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar">
    <div class="navcontent">
      <div class="logo"><a href="Welcome.html"><img id="svg" src="/img/Logo.svg"></a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="Welcome.html">Home</a></li>
        <li><a href="Explore.html">Go Explore</a></li>
        <li><a href="Planning.html">Plan Your Trip</a></li>
        <li><a href="Covid.php">COVID-19</a></li>
        <li><a href="About.html">Contact Us</a></li>
        <li>
          <input type="checkbox" id="checkbox" class="checkbox"/>
          <label id="theme-toggle" for="checkbox" class="theme-toggle">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
          </label>
        </li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  <div class="imagecontainer">
    <ul class="first-text hidden">
      <li></li>
      <li>C</li>
      <li>O</li>
      <li>V</li>
      <li>I</li>
      <li>D</li>
      <li></li>
    </ul>   
    <div class="covidbanner">
      <div class="covidblurimg"></div>
    
    </div>
  </div>
  
  <div id="loader"></div>
  <div class="outer">
    <div class="wrap1">
      <div class="wrapcontent">
        <div class="panel-heading">COVID-19 Risk Zone Map</div>
        <div class="panel-body">
        <div class="imagecenter">
            <div class="chart">
              <div id="chartdiv" class='init_loading'>Map Loading</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="wrap2">
      <div class="wrapcontent1">
        <div class="panel-heading">COVID-19 Data</div>        
        <div class="panel-body">
          <div class="imagecenter">
            <div class="datarow">
              <div class="row1">
                <div class="header">In Hospital Care</div>
                  <div class="unit">207.685</div>
              </div>
              
              <div class="row2">
                <div class="column1">
                  <div class="header">Total Cases</div>
                  <div class="unit">2.115.304</div>
                </div>
              
                <div class="column2">
                  <div class="header">Recovered</div>
                    <div class="unit">1.850.481</div>
                </div>
              
                <div class="column3">
                  <div class="header">Died</div>
                    <div class="unit">57.138</div>
                </div>
              </div>
           
              <div class="row3">
                <div class="smalltext"><a href="https://covid19.go.id/peta-risiko">Source: www.covid19.go.id - Last update: 27-06-2021 18:25 WIB</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="wrap3">
      <div class="wrapcontent2">
        <div class="imageside">
          <a href="Prevent.html" aria-current="page">
            <img class="src" src="/img/covid.svg" width="100%" height="100%">
            <img class="src1" src="/img/covid1.svg" width="100%" height="100%">
          </a>
          
          <button class="btn">
            <a href="Prevent.html">
              <span>
                <i class="fas fa-book-open" style="margin-right:5px;"></i>
                Learn more
              </span>
            </a>
          </button>       
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="leftcolumn">
            <span class="copyright">© Experience Indonesia 2021</span>
          </div>
          <div class="centercolumn">
            <ul class="quicklinks">
              <li><a href="https://www.privacypolicygenerator.info/live.php?token=EhrJnCOtEcO8ZKAe6iHg7I94pRyz0MzT">Privacy Policy</a>
              </li>
              <li><a href="https://www.termsandconditionsgenerator.com/live.php?token=nuqgWid5a82v45ZRv8T2QTOp0BqROTLu">Terms of Use</a>
              </li>
            </ul>
          </div>
          <div class="rightcolumn">
            <ul class="social-buttons">
              <li><a href="https://twitter.com/indtravel?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
              </li>
              <li><a href="https://www.instagram.com/indtravel/?hl=en"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>                
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script type="text/javascript" src="myscript.js"></script>
  <script type="text/javascript">
  Highcharts.mapChart('chartdiv', {
    title: {
        text: ''
    },

    subtitle: {
        text: 'Source: <a href="https://covid19.go.id/peta-risiko"><span style="font-family: Mont;color:#cacaca">Covid19.go.id</span></a>'
    },

    credits: {
    enabled: false
    },

    mapNavigation: {
        enabled: true,
        enableMouseWheelZoom: false,
        buttonOptions: {
            verticalAlign: 'top'
        }
    },

    tooltip: {
            pointFormat: '{point.name}-{point.value}',
        },

    legend: {
      borderRadius: 10,
      title: {
        text: "Risk Of COVID-19 Exposure",
        style: {
          color:
          (Highcharts.theme && Highcharts.theme.textColor) ||
          "Black",
        },
      },
      align: "left",
      verticalAlign: "bottom",
      floating: true,
      layout: "vertical",
      valueDecimals: 0,
      symbolRadius: 0,
      symbolHeight: 14,
    },

    colorAxis: {
      dataClasses: [
        {
          name:"Very High Risk",
          from: 3,
          to: 50,
          color: "#b13f64"
        },
        {
          name:"High Risk",
          from: 2,
          to: 2.9,
          color: "#dd686c"
        },
        {
          name:"Medium Risk",
          from: 1,
          to:1.9,
          color: "#f19c7c"
        },
        {
          name:"Low Risk",
          from: 0,
          to:0.9,
          color: "#f6d2a9"
        },
      ]
    },

    tooltip: {
      backgroundColor: {
        linearGradient: [0, 0, 0, 60],
          stops: [
            [0, '#FFFFFF'],
            [1, '#FFFFFF']
          ]
      },
      style: {
        fontFamily:'Mont',
        fontSize: '10px'
      },
      borderWidth: 1,
      borderRadius: 30,
      pointFormat: '{point.code}: {point.data} cases'
    },

    series: [{
        data:<?=$map_data?>,
        mapData: Highcharts.maps['countries/id/id-all'],
        joinBy: ['hc-key','name'],
        name: '<span style="font-family:Montbold;font-size:10px"> Province</span>',
        animation: {
                duration: 1000
        },
        states: {
            hover: {
                color: '#b4d9cc'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.code}',
        }
    }]
    });
  </script>
</body>
</html>
