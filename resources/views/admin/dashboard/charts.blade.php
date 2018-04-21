<div class="box box-default" style="margin-top: 20px">
    <div class="box-header with-border">
        <h3 class="box-title">概览表</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            {{--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>--}}
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="pv" style="width: 600px;height:400px;float: left;"></div>
        <script type="text/javascript">
            // 基于准备好的dom，初始化echarts实例
            var myChart = echarts.init(document.getElementById('pv'));

            // 指定图表的配置项和数据
            var option = {
                title: {
                    text: '网站访问量UV(一周内)',
                    left: 'center'
                },
                xAxis: {
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                    data: [4523, 4963, 6542, 5693, 6452, 6214, 6985],
                    type: 'line'
                }]
            };
            // 使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
        </script>

        <div id="users" style="width: 600px;height:400px;float: right"></div>
        <script type="text/javascript">
            // 基于准备好的dom，初始化echarts实例
            var myChart = echarts.init(document.getElementById('users'));

            // 指定图表的配置项和数据
            var option = {
                title: {
                    text: '用户增量(一周内)',
                    left: 'center'
                },
                xAxis: {
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                    data: [632, 684, 732, 726, 654, 631, 602],
                    type: 'line'
                }]
            };
            // 使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
        </script>
        <!-- /.table-responsive -->
        <!-- /.box-body -->
    </div>
</div>
