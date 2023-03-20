<!DOCTYPE html>
<html>
<head>
    <title>Chart Example</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">My Chart</h1>
        <canvas id="myChart">
            liùKSBDc
        </canvas>
    </div>
    <script src="{{ mix('js/chart.js') }}"></script>

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/Chart.js') }}"></script>
    
</body>
</html>
