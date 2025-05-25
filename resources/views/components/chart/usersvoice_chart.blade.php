<canvas id="usersvoiceChart" width="1000" height="500" class="chart-canvas"></canvas>
@include('components.chart.gsc_chart_temlpate')

// グラフの作成呼び出し
createLineChart('usersvoiceChart', '/usersvoice ディレクトリ', [35.65, -47.01, -13.31, -47.20]);
</script>
