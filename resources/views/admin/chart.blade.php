<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Batang Dinamis</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div style="width: 80%; margin: auto; padding: 20px;">
        <h3 class="text-center">Grafik Realisasi dan Target per Bulan Tahun 2024</h3>
        <canvas id="barChart"></canvas>
    </div>

    <script>
        // Data dari backend
        const labels = @json($devisipohoninduk->pluck('bulan')); // Ambil kolom bulan
        const targetData = @json($devisipohoninduk->pluck('target')); // Ambil kolom target
        const realisasiData = @json($devisipohoninduk->pluck('realisasi')); // Ambil kolom realisasi


        // Konfigurasi Chart.js
        const data = {
            labels: labels,
            datasets: [{
                    label: 'Target',
                    data: targetData,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Realisasi',
                    data: realisasiData,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }
            ]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Grafik Batang Target dan Realisasi'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan'
                        }
                    }
                }
            }
        };

        // Render Chart
        const ctx = document.getElementById('barChart').getContext('2d');
        new Chart(ctx, config);
    </script>
</body>

</html>
