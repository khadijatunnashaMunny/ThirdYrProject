<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js">

	<div class="">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="profile ">
                    <div class="thumb">
                        <!-- Profile Photo -->
                        <img  style="border-radius:50%;height:200px;width:200px;margin:40px;" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                    </div>
                    <div class="caption text-center">
                        <div class="lfwf-student-name">
                            <h6 class="text-semibold no-margin"><strong> {{ Auth::user()->name }}</strong> </h6>
                        </div>
                        <p class="course-name">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-6">
                    <canvas id="myChart"></canvas>
                    <script type="text/javascript">
                        let mychart = document.getElementById('myChart').getContext('2d');
                        let myChart = new Chart(mychart, {
                            type: 'bar',
                            data: {
                                labels: ['quiz 01', 'quiz 02', 'quiz 03', 'quiz 04', 'quiz 05', 'quiz 06','quiz 07','quiz 08','quiz 09','quiz 10'],
                                datasets: [{
                                    label: 'Quiz marks',
                                    data:[11,23,32,3,6,9,33],
                                    
                                   
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                       
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                      
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
                    </script>
                <style >
                    canvas#myChart {
                    float:right;
                    width: 1000px!important;
                    height: 400px!important;
                    }
                    .profile{    
                        padding: 4px;
                        margin: 20px;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 4px;
                    }
                </style>
            </div>
        </div> 
    </div>
</x-app-layout>

