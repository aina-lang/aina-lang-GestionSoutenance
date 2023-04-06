<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion de soutenance') }}
        </h2>
    </x-slot>
    <div class="p-4 sm:ml-64">
        <div class="p-4   rounded-lg  mt-14">
            <div class="p-4 ">
                <div class="grid xl:grid-cols-2 gap-4 grid-cols-1">
                   <div class="flex items-center justify-center   rounded flex-col bg-emerald-500 h-28 dark:bg-emerald-800 py-20">
                      <p class="text-2xl text-white dark:text-white">Nombre de etudiants:</p>
                      <h2 class="font-extrabold text-4xl  text-white dark:text-white">   {{ $etudiantsCount }}</h2>
                   </div>
                   <div class="flex items-center justify-center rounded flex-col bg-rose-500 h-28 dark:bg-rose-800 py-20">
                    <p class="text-2xl text-white dark:text-white">Nombre de professeurs: </p>
                    <h2 class="font-extrabold text-4xl  text-white dark:text-white">{{ $professeursCount }}</h2>
                   </div>
                   <div class="flex items-center justify-center rounded flex-col bg-sky-500 h-28 dark:bg-sky-800 py-20">
                    <p class="text-2xl text-white dark:text-white">Nombre de organismes: </p>
                    <h2 class="font-extrabold text-4xl  text-white dark:text-white">{{ $organismesCount }}</h2>
                   </div>
                   <div class="flex items-center justify-center rounded flex-col bg-teal-500 h-28 dark:bg-teal-800 py-20">
                    <p class="text-2xl text-white dark:text-white">Nombre de soutenances:</p>
                    <h2 class="font-extrabold text-4xl  text-white dark:text-white"> {{ $soutenirsCount }}</h2>
                   </div>
                </div>
             </div>

             {{-- use Dompdf\Dompdf;

public function generatePdf()
{
    // Récupérer les données des étudiants depuis la base de données
    $etudiants = Etudiant::all();

    // Passer les données des étudiants à la vue
    $pdf = PDF::loadView('etudiant.liste', compact('etudiants'));

    // Générer le PDF et le retourner à l'utilisateur
    return $pdf->download('liste_etudiants.pdf');
}
 --}}
            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
            <script>
                fetch('/soutenances/count')
                    .then(response => response.json())
                    .then(data => {
                        // Create the chartfetch('/soutenances/count')
                        .then(response => response.json())
                            .then(data => {
                                // Create the chart
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Soutenances'],
                                        datasets: [{
                                            label: 'Nombre de soutenances',
                                            data: [data.count],
                                            backgroundColor: '#1E40AF',
                                            borderColor: '#1E40AF',
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            })
                            .catch(error => {
                                console.error(error);
                            });
                        // var ctx = document.getElementById('myChart').getContext('2d');
                    //     var myChart = new Chart(ctx, {
                    //         type: 'bar',
                    //         data: {
                    //             labels: ['Soutenances'],
                    //             datasets: [{
                    //                 label: 'Nombre de soutenances',
                    //                 data: [data.count],
                    //                 backgroundColor: '#1E40AF',
                    //                 borderColor: '#1E40AF',
                    //                 borderWidth: 1
                    //             }]
                    //         },
                    //         options: {
                    //             scales: {
                    //                 y: {
                    //                     beginAtZero: true
                    //                 }
                    //             }
                    //         }
                    //     });
                    // })
                    // .catch(error => {
                    //     console.error(error);
                    // });

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
                        legend: {
                            display: false
                        },
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
                            data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                            borderColor: "red",
                            fill: false
                        }, {
                            data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                            borderColor: "green",
                            fill: false
                        }, {
                            data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                            borderColor: "blue",
                            fill: false
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        }
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
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    min: 6,
                                    max: 16
                                }
                            }],
                        }
                    }
                });
            </script> --}}
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
