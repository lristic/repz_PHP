<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 stats-col">
         <br>
          <div class="row">
              <div class="col-md-6">
                   <?php echo "<h2>" . $_SESSION['name'] . "</h2>";?>          
              </div>
              <div class="col-md-6 stats-date">
                  <h5>since <?php foreach($this->signupDate as $key){echo date("d-M-Y",strtotime($key['signup_date']));}?></h5>
              </div>
          </div>
           
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Wide push ups: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_wide_pushups'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Narrow push ups: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_narrow_pushups'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Diamond push ups: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_diamond_pushups'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Wide pull ups: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_wide_pullups'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Narrow pull ups: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_narrow_pullups'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Wide chin ups: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_wide_chinups'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Basic chin ups: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_basic_chinups'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Dips: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_dips'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Biceps: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_biceps'] . "</h4>";
                }?>
               </div>
           </div>
           <br>
            <div class="row">
               <div class="col-md-6 pushup-label">
                    <h3>Abs: </h3>
               </div>
               <div class="col-md-6 pushup-number">
                <?php 
                   foreach($this->sums as $key){
                       echo "<h4>" . $key['sum_abs'] . "</h4>";
                }?>
               </div>
           </div>
           
        </div>
        
        <div class="col-md-5 chart-col ml-auto">
            <h2>Stats:</h2>
            <div class="row">
            <canvas id="canvas" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas2" class="chartjs-render-monitor2"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas3" class="chartjs-render-monitor3"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas4" class="chartjs-render-monitor4"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas5" class="chartjs-render-monitor5"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas6" class="chartjs-render-monitor6"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas7" class="chartjs-render-monitor7"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas8" class="chartjs-render-monitor8"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas9" class="chartjs-render-monitor9"></canvas>
            </div>
            <div class="row">
                <canvas id="canvas10" class="chartjs-render-monitor10"></canvas>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-6" style="text-align:right;padding-right: 0;">
        <a  href="<?php echo URL;?>exercises"><button class="add-training-button">Add a training</button></a>
    </div>
    </div>
    <br>
    
    
</div>


<script>
require(['https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js'], function(Chart){

        var today = new Date();
        var d = String(today.getDate()).padStart(2, '0');
        var m = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var y = today.getFullYear();
        
        var today = d + '/' + m + '/' + y;
        var yesterday = d-1 + '/' + m + '/' + y;
                
		var ctx = document.getElementsByClassName('chartjs-render-monitor')[0];
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Wide Push Ups',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_wide_pushups'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_wide_pushups'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_wide_pushups'];} ?>],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx2 = document.getElementsByClassName('chartjs-render-monitor2')[0];
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Narrow Push Ups',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_narrow_pushups'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_narrow_pushups'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_narrow_pushups'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(0, 230, 64, 0.2)',
                    'rgba(0, 230, 64, 0.2)',
                    'rgba(0, 230, 64, 0.2)',
                    'rgba(0, 230, 64, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(0, 230, 64, 1)',
                    'rgba(0, 230, 64, 1)',
                    'rgba(0, 230, 64, 1)',
                    'rgba(0, 230, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        
        
        
        var ctx3 = document.getElementsByClassName('chartjs-render-monitor3')[0];
        var myChart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Diamond Push Ups',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_diamond_pushups'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_diamond_pushups'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_diamond_pushups'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        
        var ctx4 = document.getElementsByClassName('chartjs-render-monitor4')[0];
        var myChart4 = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Wide Pull Ups',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_wide_pullups'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_wide_pullups'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_wide_pullups'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(153, 102, 255, 1)',
                    'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        
        var ctx5 = document.getElementsByClassName('chartjs-render-monitor5')[0];
        var myChart5 = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Narrow Pull Ups',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_narrow_pullups'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_narrow_pullups'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_narrow_pullups'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(15, 136, 250, 0.2)',
                    'rgba(15, 136, 250, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(15, 136, 250, 1)',
                    'rgba(15, 136, 250, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx6 = document.getElementsByClassName('chartjs-render-monitor6')[0];
        var myChart6 = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Wide Chin Ups',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_wide_chinups'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_wide_chinups'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_wide_chinups'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(94, 13, 49, 0.2)',
                    'rgba(94, 13, 49, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(94, 13, 49, 1)',
                    'rgba(94, 13, 49, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx7 = document.getElementsByClassName('chartjs-render-monitor7')[0];
        var myChart7 = new Chart(ctx7, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Basic Chin Ups',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_basic_chinups'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_basic_chinups'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_basic_chinups'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(138, 0, 115, 0.2)',
                    'rgba(138, 0, 115, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(138, 0, 115, 1)',
                    'rgba(138, 0, 115, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx8 = document.getElementsByClassName('chartjs-render-monitor8')[0];
        var myChart8 = new Chart(ctx8, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Dips',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_dips'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_dips'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_dips'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(193, 180, 192, 0.2)',
                    'rgba(193, 180, 192, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(193, 180, 192, 1)',
                    'rgba(193, 180, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx9 = document.getElementsByClassName('chartjs-render-monitor9')[0];
        var myChart9 = new Chart(ctx9, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Biceps',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_biceps'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_biceps'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_biceps'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(226, 113, 2, 0.2)',
                    'rgba(226, 113, 2, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(226, 113, 2, 1)',
                    'rgba(226, 113, 2, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx10 = document.getElementsByClassName('chartjs-render-monitor10')[0];
        var myChart10 = new Chart(ctx10, {
            type: 'bar',
            data: {
                labels: ['First training' , 'Yesterday', 'Today'],
                datasets: [{
                    label: '# of Abs',
                    legend: false,
                    data: [<?php foreach($this->firstTraining as $key){echo $key['first_abs'];break;} ?>,
                           <?php foreach($this->yesterdayStats as $key){echo $key['yesterday_abs'];} ?>, 
                           <?php foreach($this->todayStats as $key){echo $key['today_abs'];} ?>],
                    backgroundColor: [
                    
                    
                    'rgba(107, 15, 245, 0.2)',
                    'rgba(107, 15, 245, 0.2)'
                    ],
                    fill: false,
                    borderColor: [
                    
                    
                    'rgba(107, 15, 245, 1)',
                    'rgba(107, 15, 245, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    
    });
</script>