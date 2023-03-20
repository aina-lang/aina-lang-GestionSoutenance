<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion de soutenance') }}
        </h2>
    </x-slot>
    <div class="p-4 sm:ml-64">
        <div class="p-4   rounded-lg  mt-14">
            <div class="grid gap-4 mb-4 h-auto grid-cols-2">
                <div class="flex items-center justify-center h-auto rounded bg-gray-50 dark:bg-gray-800 p-4">
                  <canvas id="myChart" class="">

                  </canvas>
                </div>
                <div class="flex items-center justify-center h-auto rounded bg-gray-50 dark:bg-gray-800">
                    <canvas id="myDognut" style="width:100%;max-width:600px"></canvas>
                </div>

            </div>
            <div class="flex items-center justify-center h-auto rounded bg-gray-50 dark:bg-gray-800 mb-4">
                <canvas id="myBar" style="width:100%;max-width:600px"></canvas>
            </div>

            <div class="grid gap-4 mb-4 h-auto grid-cols-2">
                <div class="flex items-center justify-center h-auto mb-4 rounded bg-gray-50 dark:bg-gray-800 ">
                    <canvas id="myLine" style="width:100%;max-width:600px"></canvas>
                </div>
                <div class="flex items-center justify-center h-auto rounded bg-gray-50 dark:bg-gray-800">
                    <canvas id="myLine2" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
            <script>
                var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
                ];

                new Chart("myChart", {
                type: "pie",
                data: {
                    labels: xValues,
                    datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                    }]
                },
                options: {
                    title: {
                    display: true,
                    text: "World Wide Wine Production 2018"
                    }
                }
                });

                new Chart("myDognut", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                        }]
                    },
                    options: {
                        title: {
                        display: true,
                        text: "World Wide Wine Production 2018"
                        }
                    }
                });

                new Chart("myBar", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                        }]
                    },
                    options: {
                        legend: {display: false},
                        title: {
                        display: true,
                        text: "World Wine Production 2018"
                    }
                }
                });
                new Chart("myLine", {
                    type: "line",
                    data: {
                        labels: xValues,
                        datasets: [{
                        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                        borderColor: "red",
                        fill: false
                        },{
                        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                        borderColor: "green",
                        fill: false
                        },{
                        data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                        borderColor: "blue",
                        fill: false
                        }]
                    },
                    options: {
                        legend: {display: false}
                    }
                });
                new Chart("myLine2", {
                    type: "line",
                    data: {
                        labels: xValues,
                        datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgba(0,0,255,1.0)",
                        borderColor: "rgba(0,0,255,0.1)",
                        data: yValues
                        }]
                    },
                    options: {
                        legend: {display: false},
                        scales: {
                        yAxes: [{ticks: {min: 6, max:16}}],
                        }
                    }
                });
                </script>
            {{-- <div class="grid grid-cols-2 gap-4 mb-4">
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
               </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
               </div>
            </div>
         </div> --}}
        </div>

</x-app-layout>
