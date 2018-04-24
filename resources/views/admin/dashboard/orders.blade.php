<!-- /.box-header -->
<div class="box box-default" style="margin-top: 20px">
    <div class="box-header with-border">
        <h3 class="box-title">网站交易表</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            {{--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>--}}
        </div>
    </div>
    <!-- /.box-header -->

    <div class="box-body" style="text-align: center">
        <div id="orders" style="width: 96%;height:400px;"></div>
        <script type="text/javascript">
            // 基于准备好的dom，初始化echarts实例
            var myChart = echarts.init(document.getElementById('orders'));

            // 指定图表的配置项和数据
            var colors = ['#5793f3', '#d14a61', '#675bba'];


            option = {
                color: colors,

                tooltip: {
                    trigger: 'none',
                    axisPointer: {
                        type: 'cross'
                    }
                },
                legend: {
                    data: ['集市成交量', '农场成交量']
                },
                grid: {
                    top: 70,
                    bottom: 50
                },
                xAxis: [
                    {
                        type: 'category',
                        axisTick: {
                            alignWithLabel: true
                        },
                        axisLine: {
                            onZero: false,
                            lineStyle: {
                                color: colors[1]
                            }
                        },
                        axisPointer: {
                            label: {
                                formatter: function (params) {
                                    return '成交量  ' + params.value
                                            + (params.seriesData.length ? '：' + params.seriesData[0].data : '');
                                }
                            }
                        },
                        data: ["2017-1", "2017-2", "2017-3", "2017-4", "2017-5", "2017-6", "2017-7", "2017-8", "2017-9", "2017-10", "2017-11", "2017-12"]
                    },
                    {
                        type: 'category',
                        axisTick: {
                            alignWithLabel: true
                        },
                        axisLine: {
                            onZero: false,
                            lineStyle: {
                                color: colors[0]
                            }
                        },
                        axisPointer: {
                            label: {
                                formatter: function (params) {
                                    return '成交量  ' + params.value
                                            + (params.seriesData.length ? '：' + params.seriesData[0].data : '');
                                }
                            }
                        },
                        data: ["2017-1", "2017-2", "2017-3", "2017-4", "2017-5", "2017-6", "2017-7", "2017-8", "2017-9", "2017-10", "2017-11", "2017-12"]
                    }
                ],
                yAxis: [
                    {
                        type: 'value'
                    }
                ],
                series: [
                    {
                        name: '集市成交量',
                        type: 'line',
                        xAxisIndex: 1,
                        smooth: true,
                        data: [5422, 4654, 4894, 5624, 6451, 5645, 6254, 5624, 6425, 7568, 7425, 8654]
                    },
                    {
                        name: '农场成交量',
                        type: 'line',
                        smooth: true,
                        data: [3215, 3452, 3654, 4256, 4856, 5526, 5365, 5123, 4584, 4321, 4052, 3952]
                    }
                ]
            };

            // 使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
        </script>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
</div>


</div>
