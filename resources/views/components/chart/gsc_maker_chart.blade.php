<canvas id="gsc_makerChart" width="1000" height="500" class="chart-canvas"></canvas>
@include('components.chart.gsc_chart_temlpate')

// グラフの作成呼び出し
createLineChart('gsc_makerChart', '/maker ディレクトリ', [25.98, -1.44, -16.39, -33.72]);
</script>
