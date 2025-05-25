<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
function createLineChart(canvasId, label, dataSet) {
    new Chart(document.getElementById(canvasId).getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['合計表示回数', '合計クリック数', '平均CTR', '平均掲載順位'],
            datasets: [{
                label: label,
                data: dataSet,
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: false,
                    title: {
                        display: true,
                        text: '成長率（％）',
                        font: {
                            size: 20  // Y軸タイトルのフォントサイズ
                        }
                    },
                    ticks: {
                        font: {
                            size: 20  // Y軸目盛りのフォントサイズ
                        }
                    }
                },
                x: {
                    ticks: {
                        font: {
                            size: 20  // X軸目盛り（指標ラベル）のフォントサイズ
                        }
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: label,
                    font: {
                        size: 20  // グラフタイトルのフォントサイズ
                    }
                },
                legend: {
                    labels: {
                        font: {
                            size: 14  // 凡例のフォントサイズ（今回は不要だけど一応）
                        }
                    }
                },
                tooltip: {
                    bodyFont: {
                        size: 14  // ツールチップのフォントサイズ
                    },
                    callbacks: {
                        label: function(context) {
                            return context.parsed.y.toFixed(2) + '%';
                        }
                    }
                }
            }
        }
    });
}
