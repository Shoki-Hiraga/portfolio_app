<canvas id="ga4_usersvoiceChart" width="1000" height="500" class="chart-canvas"></canvas>
@include('components.chart.ga4_chart_temlpate')

// グラフ描画（新しいデータ）
createBarChart('ga4_usersvoiceChart', '/usersvoice ディレクトリ', [-49.65, -50.00, -0.70]);
</script>
