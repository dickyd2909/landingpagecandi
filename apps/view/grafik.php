<div id="bggraf">
    <div id="bograf">
        <div class="chartjs">
            <div class="chart-top">
                <div class="charttit">GRAFIK</div>
                <?php
                    date_default_timezone_set("Asia/Jakarta");
                    $date = date('Y');
                ?>
                <div class="chartdesc">Data Pengunjung Perbulan Pada Tahun <?= $date; ?> </div>
            </div>
            <canvas id="myChart"></canvas>
        </div>

        
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November'],
      datasets: [{
        label: 'Data Pengunjung',
        data: [12, 19, 3, 5, 2, 3, 12, 4, 5, 6, 20, 23, 25 ],
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
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>