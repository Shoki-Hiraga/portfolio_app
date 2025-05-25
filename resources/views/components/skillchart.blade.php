<style>
.center-wrapper {
    display: flex;
    justify-content: center; /* 横方向中央 */
    align-items: center;     /* 縦方向中央 */
    height: 65vh;           /* ビューポート高さ */
}
</style>

<div class="center-wrapper">
    <canvas id="radarChart" width="600" height="600"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('radarChart').getContext('2d');
    const radarChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: [
                'Webディレクター',
                'PdM',
                'コンテンツSEO',
                'テクニカルSEO',
                'システム理解',
            ],
            datasets: [{
                label: 'スキルレベル',
                data: [5, 3, 4, 3, 4],
                backgroundColor: 'rgba(54, 162, 235, 0.4)',
                borderColor: 'rgba(54, 162, 235, 1)',
                pointBackgroundColor: 'rgba(54, 162, 235, 1)'
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            scales: {
                r: {
                    beginAtZero: true,
                    max: 5,
                    ticks: {
                        stepSize: 1
                    },
                    pointLabels: {
                        font: {
                            size: 20  // ← ★ここでラベルの文字サイズを大きく
                        }
                    }
                }
            }
        }
    });
</script>
