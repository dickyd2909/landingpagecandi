
<!-- boxdashboard -->
<div id="bgdash">
    <div id="bodash" class="clearfix">
        <div class="dashbox">
            <div class="dashimg">
                <i class="fa fa-user"></i>
            </div>
            <div class="dashnum">
                <h2>20</h2>
            </div>
            <div class="dashtit">
                <h3>Admin</h3>  
            </div>
        </div>
        <div class="dashbox">
            <div class="dashimg2">
                <i class="fa fa-users"></i>
            </div>
            <div class="dashnum">
            <h2>20</h2>
            </div>
            <div class="dashtit">
                <h3>Customer</h3>  
            </div>
        </div>
        <div class="dashbox">
            <div class="dashimg3">
            <i class="fa-regular fa-credit-card"></i>
            </div>
            <div class="dashnum">
            <h2>20</h2>
            </div>
            <div class="dashtit">
                <h3>Penjualan</h3>  
            </div>
        </div>
    </div>
</div>

<!-- chart -->
<div id="chart" class="clearfix">
    <div class="chartkiri">
        <div class="charttit">
            Penjualan
        </div>
        <div class="chartjs">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <div class="chartkanan">
        <div class="charttit">
            Pembayaran
        </div>
        <div class="chartjs">
        <canvas id="myChart2"></canvas>
        </div>
    </div>
</div>
<script>
//deklarasi chartjs untuk membuat grafik 2d di id mychart 
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
 //chart akan ditampilkan sebagai bar chart
    type: 'bar',
    data: {
     //membuat label chart
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: '# Of Sell',
            //isi chart
            data: [80,100,200,300,400,500,600,120,200,500,800,1000],
            //membuat warna pada bar chart
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
				'rgba(255, 70, 64, 0.2)',
				'rgba(125, 159, 230, 0.2)',
				'rgba(155, 159, 85, 0.2)',
				'rgba(85, 70, 85, 0.2)',
				'rgba(200, 132, 125, 0.2)',
				'rgba(120, 122, 70, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
				'rgba(255, 70, 64, 1)',
				'rgba(125, 159, 230, 1)',
				'rgba(155, 159, 85, 1)',
				'rgba(85, 70, 85, 1)',
				'rgba(200, 132, 125, 12)',
				'rgba(120, 122, 70, 1)'
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

var ctx = document.getElementById('myChart2').getContext('2d');

var myChart = new Chart(ctx, {
 //chart akan ditampilkan sebagai bar chart
    type: 'bar',
    data: {
     //membuat label chart
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            //isi chart
            data: [12, 19, 3, 5, 2, 3],
            //membuat warna pada bar chart
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
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
</script>