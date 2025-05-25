<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
function createBarChart(canvasId, label, dataSet) {
    new Chart(document.getElementById(canvasId).getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['セッション', 'キーイベント', 'セッション キーイベント率'],
            datasets: [{
                label: label,
                data: dataSet,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
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
                            size: 18
                        }
                    },
                    ticks: {
                        font: {
                            size: 14
                        }
                    }
                },
                x: {
                    ticks: {
                        font: {
                            size: 14
                        }
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: label,
                    font: {
                        size: 20
                    }
                },
                legend: {
                    labels: {
                        font: {
                            size: 14
                        }
                    }
                },
                tooltip: {
                    bodyFont: {
                        size: 14
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