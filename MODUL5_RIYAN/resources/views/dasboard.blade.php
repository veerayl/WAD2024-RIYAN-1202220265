@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1>Dashboard</h1>
<div class="row">
    <div class="col-md-12">
        <canvas id="dashboardChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('dashboardChart').getContext('2d');
    const chartData = {
        labels: ['Total Dosen', 'Total Mahasiswa', 'Mahasiswa dengan Dosen'],
        datasets: [{
            label: 'Data Statistik',
            data: [{{ $totalDosen ?? 0 }}, {{ $totalMahasiswa ?? 0 }}, {{ $totalMahasiswaWithDosen ?? 0 }}],
            backgroundColor: ['#f44336', '#3f51b5', '#009688'],
            borderColor: ['#d32f2f', '#303f9f', '#00796b'],
            borderWidth: 2,
            hoverOffset: 5
        }]
    };

    const dashboardChart = new Chart(ctx, {
        type: 'pie',
        data: chartData,
        options: {
            responsive: true,
            maintainAspectRatio: false, // Memungkinkan fleksibilitas ukuran
            plugins: {
                legend: { 
                    display: true, 
                    position: 'top',
                    labels: {
                        font: { size: 20 },
                        color: '#333'
                    }
                },
                title: { 
                    display: true, 
                    text: 'Statistik Dashboard',
                    font: { size: 32 },
                    color: '#333'
                }
            }
        }
    });
</script>

@endsection