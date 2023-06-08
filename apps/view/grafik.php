<div id="bggraf">
    <div id="bograf">
        <div class="chartjs">
            <div class="chart-top">
                <div class="charttit">GRAFIK</div>
                <?php
                    date_default_timezone_set("Asia/Jakarta");
                    $date = date('Y');
                    $date2 = date('F');
                ?>
                <div class="chartdesc">Data Pengunjung Perbulan Pada Tahun <?= $date; ?> </div>
            </div>
            <canvas id="myChart"></canvas>
        </div>
        
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

  <?php 
    $year = date('Y');
    $db = $koneksi->query("SELECT COUNT(*) as jan FROM absensi WHERE MONTH(updated) = '01' AND YEAR(updated) = '$year'");
    $dt = $db->fetch_array();
    $jan = $dt['jan'];

    $db2 = $koneksi->query("SELECT COUNT(*) as feb FROM absensi WHERE MONTH(updated) = '02' AND YEAR(updated) = '$year'");
    $dt2 = $db2->fetch_array();
    $feb = $dt2['feb'];

    $db3 = $koneksi->query("SELECT COUNT(*) as mar FROM absensi WHERE MONTH(updated) = '03' AND YEAR(updated) = '$year'");
    $dt3 = $db3->fetch_array();
    $mar = $dt3['mar'];
    $db4 = $koneksi->query("SELECT COUNT(*) as apr FROM absensi WHERE MONTH(updated) = '04' AND YEAR(updated) = '$year'");
    $dt4 = $db4->fetch_array();
    $apr = $dt4['apr'];
    $db5 = $koneksi->query("SELECT COUNT(*) as mei FROM absensi WHERE MONTH(updated) = '05' AND YEAR(updated) = '$year'");
    $dt5 = $db5->fetch_array();
    $mei = $dt5['mei'];

    $db6 = $koneksi->query("SELECT COUNT(*) as jun FROM absensi WHERE MONTH(updated) = '06' AND YEAR(updated) = '$year'");
    $dt6 = $db6->fetch_array();
    $jun = $dt6['jun'];
    $db7 = $koneksi->query("SELECT COUNT(*) as jul FROM absensi WHERE MONTH(updated) = '07' AND YEAR(updated) = '$year'");
    $dt7 = $db7->fetch_array();
    $jul = $dt7['jul'];

    $db8 = $koneksi->query("SELECT COUNT(*) as ags FROM absensi WHERE MONTH(updated) = '08' AND YEAR(updated) = '$year'");
    $dt8 = $db8->fetch_array();
    $ags = $dt8['ags'];
    $db9 = $koneksi->query("SELECT COUNT(*) as sep FROM absensi WHERE MONTH(updated) = '09' AND YEAR(updated) = '$year'");
    $dt9 = $db9->fetch_array();
    $sep = $dt9['sep'];
    $db10 = $koneksi->query("SELECT COUNT(*) as okt FROM absensi WHERE MONTH(updated) = '10' AND YEAR(updated) = '$year'");
    $dt10 = $db10->fetch_array();
    $okt = $dt10['okt'];
    $db11 = $koneksi->query("SELECT COUNT(*) as nov FROM absensi WHERE MONTH(updated) = '11' AND YEAR(updated) = '$year'");
    $dt11 = $db11->fetch_array();
    $nov = $dt11['nov'];
    $db12 = $koneksi->query("SELECT COUNT(*) as dese FROM absensi WHERE MONTH(updated) = '12' AND YEAR(updated) = '$year'");
    $dt12 = $db12->fetch_array();
    $des = $dt12['dese'];
  ?>
  const ctx = document.getElementById('myChart');
 
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November'],
      datasets: [{
        label: 'Data Pengunjung',
        data: [<?= $jan; ?>, <?= $feb; ?>, <?= $mar; ?>, <?= $apr; ?>, <?= $mei; ?>, <?= $jun; ?>, <?= $jul; ?>, <?= $ags; ?>, <?= $sep; ?>, <?= $okt; ?>, <?= $nov; ?>, <?= $des; ?> ],
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