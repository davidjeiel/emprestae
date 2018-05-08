
            	Highcharts.chart('container', 
            	{
                    chart: {
                        type: 'area'
                    },
                    title: {
                        text: 'Evolução histórica daos investimentos'
                    },
                    subtitle: {
                        text: 'Investidor: David Jeiel'
                    },
                    xAxis: {
                        categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul'],
                        tickmarkPlacement: 'on',
                        title: {
                            enabled: false
                        }
                    },
                    yAxis: {
                        title: {
                            text: 'R$ Mil'
                        },
                        labels: {
                            formatter: function () {
                                return this.value / 1000;
                            }
                        }
                    },
                    tooltip: {
                        split: true,
                        valueSuffix: 'Milhões'
                    },
                    plotOptions: {
                        area: {
                            stacking: 'normal',
                            lineColor: '#666666',
                            lineWidth: 1,
                            marker: {
                                lineWidth: 1,
                                lineColor: '#666666'
                            }
                        }
                    },
                    series: [{
                        name: 'Faturamento',
                        data: [502, 635, 809, 947, 1402, 3634, 5268]
                    }, {
                        name: 'Gastos',
                        data: [106, 107, 111, 133, 221, 767, 1766]
                    }, {
                        name: 'Receita',
                        data: [163, 203, 276, 408, 547, 729, 628]
                    }, {
                        name: 'Resgates',
                        data: [18, 31, 54, 156, 339, 818, 1201]
                    }, {
                        name: 'Sua carteira',
                        data: [2, 2, 2, 6, 13, 30, 46]
                    }]
                });