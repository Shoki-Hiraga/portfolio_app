<canvas id="ga4_resultChart" width="1000" height="500" class="chart-canvas"></canvas>
@include('components.chart.ga4_chart_temlpate')

// グラフ描画（新しいデータ）
createBarChart('ga4_resultChart', '/result ディレクトリ', [398.27, 533.33, 27.11]);
</script>
