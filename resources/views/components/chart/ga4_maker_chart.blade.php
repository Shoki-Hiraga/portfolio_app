<canvas id="ga4_makerChart" width="1000" height="500" class="chart-canvas"></canvas>
@include('components.chart.ga4_chart_temlpate')

// グラフ描画（新しいデータ）
createBarChart('ga4_makerChart', '/maker ディレクトリ', [-4.10, -1.09, 3.13]);
</script>
