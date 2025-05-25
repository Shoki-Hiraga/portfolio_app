<canvas id="resultChart" width="1000" height="500" class="chart-canvas"></canvas>
@include('components.chart.ma_re_us_chart_temlpate')

// グラフの作成呼び出し
createLineChart('resultChart', '/result ディレクトリ', [513.59, 315.26, 168.71, 6.77]);
</script>
