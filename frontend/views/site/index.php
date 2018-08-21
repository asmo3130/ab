<?php

/* @var $this yii\web\View */
use frontend\models\News;
use frontend\models\MarketsNews;
use frontend\models\GasS;
use frontend\models\GasP;
use frontend\models\Fuel92;
use frontend\models\Fuel95;
use frontend\models\Diesel;
use frontend\models\Mazut;
use frontend\models\Bitum;

$gas_s = GasS::find()->all();


foreach ($gas_s as $val){
    $values[] = $val['value'];
}

$persent = (end($values) -$values[0]) / $values[0] * 100;


$news = News::find()->all();
$markets = MarketsNews::find()->all();


$this->title = 'Биржа Столица';
?>
<div class="page__main">
            <div class="main">
                    <div class="row blocks-list">
                        <div class="_layout blocks-list__item col-lg-39 col-lg-push-9">
                            <div class="blocks-list">

                            </div>
                            <div class="blocks-list__item">
                                <div class="row">
                                    <div class="col-lg-18 col-lg-push-30">
                                        <div class="container1" style="
    padding-left: 10px;
">
                                            <table class="cal">
                                                <caption>
                                                    <span class="prev"><a href="#">←</a></span>
                                                    <span class="next"><a href="#">→</a></span>
                                                    January 2012
                                                </caption>
                                                <thead>
                                                <tr>
                                                    <th>Mon</th>
                                                    <th>Tue</th>
                                                    <th>Wed</th>
                                                    <th>Thu</th>
                                                    <th>Fri</th>
                                                    <th>Sat</th>
                                                    <th>Sun</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="off"><a href="#">26</a></td>
                                                    <td class="off"><a href="#">27</a></td>
                                                    <td class="off"><a href="#">28</a></td>
                                                    <td class="off"><a href="#">29</a></td>
                                                    <td class="off"><a href="#">30</a></td>
                                                    <td class="off"><a href="#">31</a></td>
                                                    <td><a href="#">1</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">2</a></td>
                                                    <td><a href="#">3</a></td>
                                                    <td><a href="#">4</a></td>
                                                    <td><a href="#">5</a></td>
                                                    <td><a href="#">6</a></td>
                                                    <td><a href="#">7</a></td>
                                                    <td><a href="#">8</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">9</a></td>
                                                    <td><a href="#">10</a></td>
                                                    <td><a href="#">11</a></td>
                                                    <td><a href="#">12</a></td>
                                                    <td><a href="#">13</a></td>
                                                    <td><a href="#">14</a></td>
                                                    <td><a href="#">15</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">16</a></td>
                                                    <td><a href="#">17</a></td>
                                                    <td><a href="#">18</a></td>
                                                    <td><a href="#">19</a></td>
                                                    <td><a href="#">20</a></td>
                                                    <td><a href="#">21</a></td>
                                                    <td><a href="#">22</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">23</a></td>
                                                    <td><a href="#">24</a></td>
                                                    <td><a href="#">25</a></td>
                                                    <td><a href="#">26</a></td>
                                                    <td><a href="#">27</a></td>
                                                    <td class="active"><a href="#">28</a></td>
                                                    <td><a href="#">29</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">30</a></td>
                                                    <td><a href="#">31</a></td>
                                                    <td class="off"><a href="#">1</a></td>
                                                    <td class="off"><a href="#">2</a></td>
                                                    <td class="off"><a href="#">3</a></td>
                                                    <td class="off"><a href="#">4</a></td>
                                                    <td class="off"><a href="#">5</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="blocks-list">
                                            <div class="blocks-list__item" style="padding-top: 10px;">
                                                <div class="blocks-list _columns">
                                                    <div class="blocks-list__item _content visible-lg-block" style="background: none;">
                                                        <div class="sidebar-list _gray _border" style="background: white;
                                                             border: 1px solid;
                                                             border-radius: 8px;">
                                                    <div class="stat_">
                                                            <div id="head" style="margin-top: 5px">
                                                              <span style="float: left; padding: 5px"><img src="/img/lg_black.png" alt=""></span>  Результаты торгов
                                                            </div>
                                                        <hr>
                                                        <table style="width: 100%; padding: 5px;">

                                                            <tr>
                                                                <td>Газ сжиженый:</td>
                                                                <td>-
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Природный газ:</td>
                                                                <td>-
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Бензин а-95:</td>
                                                                <td>-
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Бензин а-92:</td>
                                                                <td>-
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Дизельное топливо:</td>
                                                                <td>-
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Мазут:</td>
                                                                <td>-
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Битум:</td>
                                                                <td>-
                                                                </td>
                                                            </tr>

                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="blocks-list">
                                            <div class="blocks-list__item" style="padding-top: 10px;">
                                                <div class="blocks-list _columns">
                                                    <div class="blocks-list__item _content visible-lg-block" style="background: none;">
                                                        <div class="sidebar-list _gray _border" style="background: white;
                                                             border: 1px solid;
                                                             border-radius: 8px;">
                                                            <div class="stat_">
                                                                <div id="head" style="margin-top: 5px">
                                                                    <span style="float: left; padding: 5px"><img src="/img/lg_black.png" alt=""></span>  Результаты торгов
                                                                </div>
                                                                <hr>
                                                                <table style="width: 100%; padding: 5px;">

                                                                    <tr>
                                                                        <td>Зерно:</td>
                                                                        <td>-
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Мука:</td>
                                                                        <td>-
                                                                        </td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blocks-list">
                                            <div class="blocks-list__item" style="padding-top: 10px;">
                                                <div class="blocks-list _columns">
                                                    <div class="blocks-list__item _content visible-lg-block" style="background: none;">
                                                        <div class="sidebar-list _gray _border">
                                                            <div class="tabs">
                                                                <input id="tab1" type="radio" name="tabs" checked>
                                                                <label for="tab1" title="Вкладка 1">Мука</label>

                                                                <input id="tab2" type="radio" name="tabs">
                                                                <label for="tab2" title="Вкладка 2">Зерно</label>

                                                                <section id="content-tab1">
                                                                    <iframe src="/monitoring/flour/index.php" frameborder="0"  height="300"></iframe>
                                                                </section>
                                                                <section id="content-tab2">
                                                                    <iframe src="/monitoring/grain/index.php" frameborder="0" ></iframe>
                                                                </section>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div style="clear: both;">
                                        
                                    </div> -->
                                    <!-- <div class="col-lg-18 col-lg-push-12">
                                    <script type="text/javascript" src="https://ueex.com.ua/informer_ugd2.js?width=300&width_type=px&lang=rus&n=1&encoding=utf&noborder=0&currency=uah&pluscolor=green&showcurrencies=1"></script>
                                    </div> -->
                                    <div class="col-lg-30 col-lg-pull-18">
                                        <div class="blocks-list__item">
                                            <div class="slide-news">
                                                <?
                                                foreach ($news as $item) {
                                                    ?>
                                                    <div>
                                                        <img src="<?=$item['image']?>" alt="">
                                                        <div class="slick-text">

                                                            <div class="slick-inlone">
                                                                <div class="col-md-45">
                                                                    <div class="col-lg-30">
                                                                        <h2><?=$item['name']?></h2>
                                                                        <p><?=$item['prev_text']?></p>
                                                                    </div>
                                                                    <div class="col-lg-15">
                                                                        <div class="header-links"  style="float: right" >
                                                                <span class="header-links__item">
                                                                    <a href="/press/newsbirga/<?=$item['url']?>" >Перейти</a>
                                                                </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <?
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="blocks-list__item _content">
                                            <div class="blocks-list__item">
                                                <div class="title-block js-tabs">
                                                    <div class="title-block__header">
                                                        <div class="title-block__header-inner">
                                                            <div class="title-block__title">
                                                                <div class="market-indicators small-boxes" style="padding-left: 75px;">

                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-6 columns">

                                                                            <div class="chart-box">

                                                                                <h3 class="title text-center"><a href="/exchange-quotations/">Бензин А-92 - EXW, автотранспорт</a></h3>

                                                                                <!-- Chart -->
                                                                                <div id="chart2" class="chart-container" data-highcharts-chart="1"><div id="highcharts-rbe8o5y-4" class="highcharts-container " style="position: relative; overflow: hidden; width: 360px; height: 120px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="360" height="120" viewBox="0 0 360 120"><desc>Created with Highcharts 5.0.12</desc><defs><clipPath id="highcharts-rbe8o5y-5"><rect x="0" y="0" width="293" height="85" fill="none"></rect></clipPath></defs><rect fill="rgba(255, 255, 255, 0)" class="highcharts-background" x="0" y="0" width="360" height="120" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="57" y="10" width="293" height="85"></rect><g class="highcharts-grid highcharts-xaxis-grid "><path fill="none" class="highcharts-grid-line" d="M 115.5 10 L 115.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 173.5 10 L 173.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 232.5 10 L 232.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 290.5 10 L 290.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 349.5 10 L 349.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 56.5 10 L 56.5 95" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid "><path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 57 95.5 L 350 95.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 57 9.5 L 350 9.5" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" x="57" y="10" width="293" height="85"></rect><g class="highcharts-axis highcharts-xaxis "><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 115.5 95 L 115.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 173.5 95 L 173.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 232.5 95 L 232.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 290.5 95 L 290.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 350.5 95 L 350.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 56.5 95 L 56.5 105" opacity="1"></path><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" d="M 57 95.5 L 350 95.5"></path></g><g class="highcharts-axis highcharts-yaxis "><path fill="none" class="highcharts-axis-line" d="M 57 10 L 57 95"></path></g><g class="highcharts-series-group"><g class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-undefined " transform="translate(57,10) scale(1 1)" clip-path="url(#highcharts-rbe8o5y-5)"><path fill="none" d="M 29.3 77.51192500000005 L 87.9 70.125 L 146.5 51.94435000000005 L 205.1 29.749999999999993 L 263.7 8.5" class="highcharts-graph" stroke="#819aa6" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M 19.3 77.51192500000005 L 29.3 77.51192500000005 L 87.9 70.125 L 146.5 51.94435000000005 L 205.1 29.749999999999993 L 263.7 8.5 L 273.7 8.5" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path></g><g class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-undefined highcharts-tracker " transform="translate(57,10) scale(1 1)"><path fill="#819aa6" d="M 146 51.94435000000005 A 0 0 0 1 1 146 51.94435000000005 Z" class="highcharts-halo highcharts-color-undefined" fill-opacity="0.25"></path><path fill="#819aa6" d="M 33 78 A 4 4 0 1 1 32.99999800000017 77.99600000066667 Z" class="highcharts-point"></path><path fill="#819aa6" d="M 91 70 A 4 4 0 1 1 90.99999800000016 69.99600000066667 Z" class="highcharts-point"></path><path fill="#819aa6" d="M 150 51.94435000000005 A 4 4 0 1 1 149.99999800000018 51.94035000066671 Z" class="highcharts-point " stroke-width="1"></path><path fill="#819aa6" d="M 209 30 A 4 4 0 1 1 208.99999800000018 29.996000000666665 Z" class="highcharts-point"></path><path fill="#819aa6" d="M 267 9 A 4 4 0 1 1 266.9999980000002 8.996000000666664 Z" class="highcharts-point"></path></g></g><g class="highcharts-legend"><rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="8" height="8" visibility="hidden"></rect><g><g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels "></g><g class="highcharts-axis-labels highcharts-yaxis-labels "><text x="42" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="100" opacity="1"><tspan>32000</tspan></text><text x="42" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="15" opacity="1"><tspan>34000</tspan></text></g><text x="350" class="highcharts-credits" text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="115">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(156,-9999)" opacity="0" visibility="visible"><path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 92.5 0.5 C 95.5 0.5 95.5 0.5 95.5 3.5 L 95.5 40.5 C 95.5 43.5 95.5 43.5 92.5 43.5 L 53.5 43.5 47.5 49.5 41.5 43.5 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 92.5 0.5 C 95.5 0.5 95.5 0.5 95.5 3.5 L 95.5 40.5 C 95.5 43.5 95.5 43.5 92.5 43.5 L 53.5 43.5 47.5 49.5 41.5 43.5 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 92.5 0.5 C 95.5 0.5 95.5 0.5 95.5 3.5 L 95.5 40.5 C 95.5 43.5 95.5 43.5 92.5 43.5 L 53.5 43.5 47.5 49.5 41.5 43.5 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 92.5 0.5 C 95.5 0.5 95.5 0.5 95.5 3.5 L 95.5 40.5 C 95.5 43.5 95.5 43.5 92.5 43.5 L 53.5 43.5 47.5 49.5 41.5 43.5 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#819aa6" stroke-width="1"></path><text x="8" style="font-size:12px;color:#333333;fill:#333333;" y="20"><tspan style="font-size: 10px">31.07.2018</tspan><tspan x="8" dy="15">32 777,78 грн.</tspan></text></g></svg></div></div>


                                                                                <script>
                                                                                    // Chart options
                                                                                    var chart2Options = {
                                                                                        chart: {
                                                                                            backgroundColor: 'rgba(255, 255, 255, 0)'
                                                                                        },
                                                                                        title: { text: '' },
                                                                                        subtitle: { text: '' },
                                                                                        xAxis: {
                                                                                            labels: {
                                                                                                enabled: false
                                                                                            },
                                                                                            categories: ['24.07.2018', '26.07.2018', '31.07.2018', '02.08.2018', '09.08.2018']
                                                                                        },
                                                                                        yAxis: {
                                                                                            title: { text: '' },
                                                                                            labels: {
                                                                                                formatter: function () {
                                                                                                    //return this.value.toFixed(2);
                                                                                                    return this.value;
                                                                                                }
                                                                                            }
                                                                                        },
                                                                                        legend: {
                                                                                            layout: 'vertical',
                                                                                            align: 'right',
                                                                                            verticalAlign: 'middle'
                                                                                        },
                                                                                        plotOptions: { },
                                                                                        series: [{
                                                                                            showInLegend: false,
                                                                                            color: '#819aa6',
                                                                                            name: 'Ціна',
                                                                                            data: [32176.19, 32350.00, 32777.78, 33300.00, 33800.00]
                                                                                        }],
                                                                                        tooltip: {
                                                                                            pointFormat: '{point.y:,.2f} грн.'
                                                                                        }
                                                                                    };
                                                                                </script>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <div class="row">




                                                                        <div class="col-xs-12 col-sm-6 columns">

                                                                            <div class="chart-box">

                                                                                <h3 class="title text-center"><a href="/exchange-quotations/">Газ нафтовий скраплений - EXW, автотранспорт</a></h3>

                                                                                <!-- Chart -->
                                                                                <div id="chart4" class="chart-container" data-highcharts-chart="3"><div id="highcharts-rbe8o5y-12" class="highcharts-container " style="position: relative; overflow: hidden; width: 360px; height: 120px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="360" height="120" viewBox="0 0 360 120"><desc>Created with Highcharts 5.0.12</desc><defs><clipPath id="highcharts-rbe8o5y-13"><rect x="0" y="0" width="293" height="85" fill="none"></rect></clipPath></defs><rect fill="rgba(255, 255, 255, 0)" class="highcharts-background" x="0" y="0" width="360" height="120" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="57" y="10" width="293" height="85"></rect><g class="highcharts-grid highcharts-xaxis-grid "><path fill="none" class="highcharts-grid-line" d="M 115.5 10 L 115.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 173.5 10 L 173.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 232.5 10 L 232.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 290.5 10 L 290.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 349.5 10 L 349.5 95" opacity="1"></path><path fill="none" class="highcharts-grid-line" d="M 56.5 10 L 56.5 95" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid "><path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 57 95.5 L 350 95.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 57 53.5 L 350 53.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 57 9.5 L 350 9.5" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" x="57" y="10" width="293" height="85"></rect><g class="highcharts-axis highcharts-xaxis "><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 115.5 95 L 115.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 173.5 95 L 173.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 232.5 95 L 232.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 290.5 95 L 290.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 350.5 95 L 350.5 105" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 56.5 95 L 56.5 105" opacity="1"></path><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" d="M 57 95.5 L 350 95.5"></path></g><g class="highcharts-axis highcharts-yaxis "><path fill="none" class="highcharts-axis-line" d="M 57 10 L 57 95"></path></g><g class="highcharts-series-group"><g class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-undefined " transform="translate(57,10) scale(1 1)" clip-path="url(#highcharts-rbe8o5y-13)"><path fill="none" d="M 29.3 48.88222499999992 L 87.9 48.432999999999936 L 146.5 29.61952500000001 L 205.1 66.74030000000002 L 263.7 67.71609999999998" class="highcharts-graph" stroke="#819aa6" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M 19.3 48.88222499999992 L 29.3 48.88222499999992 L 87.9 48.432999999999936 L 146.5 29.61952500000001 L 205.1 66.74030000000002 L 263.7 67.71609999999998 L 273.7 67.71609999999998" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path></g><g class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-undefined highcharts-tracker" transform="translate(57,10) scale(1 1)"><path fill="#819aa6" d="M 33 49 A 4 4 0 1 1 32.99999800000017 48.99600000066666 Z" class="highcharts-point"></path><path fill="#819aa6" d="M 91 48 A 4 4 0 1 1 90.99999800000016 47.99600000066666 Z" class="highcharts-point"></path><path fill="#819aa6" d="M 150 30 A 4 4 0 1 1 149.99999800000018 29.996000000666665 Z" class="highcharts-point"></path><path fill="#819aa6" d="M 209 67 A 4 4 0 1 1 208.99999800000018 66.99600000066667 Z" class="highcharts-point"></path><path fill="#819aa6" d="M 267 68 A 4 4 0 1 1 266.9999980000002 67.99600000066667 Z" class="highcharts-point"></path></g></g><g class="highcharts-legend"><rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="8" height="8" visibility="hidden"></rect><g><g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels "></g><g class="highcharts-axis-labels highcharts-yaxis-labels "><text x="42" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="100" opacity="1"><tspan>22000</tspan></text><text x="42" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="58" opacity="1"><tspan>23000</tspan></text><text x="42" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="15" opacity="1"><tspan>24000</tspan></text></g><text x="350" class="highcharts-credits" text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="115">Highcharts.com</text></svg></div></div>


                                                                                <script>
                                                                                    // Chart options
                                                                                    var chart4Options = {
                                                                                        chart: {
                                                                                            backgroundColor: 'rgba(255, 255, 255, 0)'
                                                                                        },
                                                                                        title: { text: '' },
                                                                                        subtitle: { text: '' },
                                                                                        xAxis: {
                                                                                            labels: {
                                                                                                enabled: false
                                                                                            },
                                                                                            categories: ['05.07.2018', '11.07.2018', '18.07.2018', '25.07.2018', '01.08.2018']
                                                                                        },
                                                                                        yAxis: {
                                                                                            title: { text: '' },
                                                                                            labels: {
                                                                                                formatter: function () {
                                                                                                    //return this.value.toFixed(2);
                                                                                                    return this.value;
                                                                                                }
                                                                                            }
                                                                                        },
                                                                                        legend: {
                                                                                            layout: 'vertical',
                                                                                            align: 'right',
                                                                                            verticalAlign: 'middle'
                                                                                        },
                                                                                        plotOptions: { },
                                                                                        series: [{
                                                                                            showInLegend: false,
                                                                                            color: '#819aa6',
                                                                                            name: 'Ціна',
                                                                                            data: [22849.83, 22860.40, 23303.07, 22429.64, 22406.68]
                                                                                        }],
                                                                                        tooltip: {
                                                                                            pointFormat: '{point.y:,.2f} грн.'
                                                                                        }
                                                                                    };
                                                                                </script>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="blocks-list__item _content" style="margin-top: 10px;">
                                            <div class="blocks-list__item">
                                                <div class="title-block js-tabs">
                                                    <div class="title-block__header">
                                                        <div class="title-block__header-inner">
                                                            <div class="title-block__title">НОВОСТИ / ПРЕСС-РЕЛИЗЫ</div>
                                                            <div class="title-block__controls">
                                                                <div class="socials">
                                                                    <a href="https://www.facebook.com/MSKExchange" target="_blank" class="_fb socials__item"></a>
                                                                    <a href="https://vk.com/moscow_exchange" target="_blank" class="_vk socials__item"></a>
                                                                    <a href="https://twitter.com/moscow_exchange" target="_blank" class="_tw socials__item"></a>
                                                                    <a href="https://www.youtube.com/user/RTSexchange" target="_blank" class="_yt socials__item"></a>
                                                                    <a href="https://instagram.com/moscow_exchange/" target="_blank" class="_ig socials__item"></a>
                                                                    <a href="http://habrahabr.ru/company/moex/blog/" target="_blank" class="_hb socials__item"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="title-block__content js-tabs-content">
                                                        <div class="tabs_box visible"><div class="news-list">

                                                                <?
                                                                foreach ($news as $new) {
                                                                    ?>
                                                                    <div class="news-list__item">
                                                                        <div class="news-list__date">
                                                                            <b><?=$new['date']?></b>
                                                                        </div>
                                                                        <div class="news-list__content"><a href="<?="/press/newsbirga/".$new['url']?>" class="news-list__link"><?=$new['name']?></a></div>
                                                                    </div>
                                                                    <?
                                                                }
                                                                ?>

                                                            </div></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="blocks-list__item _content"  style="margin-top: 10px;">
                                            <div class="blocks-list__item">
                                                <div class="title-block js-tabs">
                                                    <div class="title-block__header">
                                                        <div class="title-block__header-inner">
                                                            <div class="title-block__title">НОВОСТИ РЫНКОВ</div>
                                                            <div class="title-block__controls">
                                                                <div class="socials">
                                                                    <a href="https://www.facebook.com/MSKExchange" target="_blank" class="_fb socials__item"></a>
                                                                    <a href="https://vk.com/moscow_exchange" target="_blank" class="_vk socials__item"></a>
                                                                    <a href="https://twitter.com/moscow_exchange" target="_blank" class="_tw socials__item"></a>
                                                                    <a href="https://www.youtube.com/user/RTSexchange" target="_blank" class="_yt socials__item"></a>
                                                                    <a href="https://instagram.com/moscow_exchange/" target="_blank" class="_ig socials__item"></a>
                                                                    <a href="http://habrahabr.ru/company/moex/blog/" target="_blank" class="_hb socials__item"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="title-block__content js-tabs-content">
                                                        <div class="tabs_box visible"><div class="news-list">
                                                                <?
                                                                foreach ($markets as $market) {
                                                                    ?>
                                                                    <div class="news-list__item">
                                                                        <div class="news-list__date">
                                                                            <b><?=$market['date']?></b>
                                                                        </div>
                                                                        <div class="news-list__content"><a href="<?=$market['href']?>" class="news-list__link" target="_blank"><?=$market['name']?></a></div>
                                                                    </div>
                                                                    <?
                                                                }
                                                                ?>

                                                            </div></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-lg-pull-39">
                            <div class="blocks-list">
                                <div class="blocks-list__item">
                                    <div class="blocks-list _columns">
                                        <div class="blocks-list__item _content visible-lg-block">
                                            <div class="sidebar-list _gray _border">
                                                <a href="/markets/birgsale" class="sidebar-list__item">
                                                    <div class="sidebar-list__item-inner">
                                                        <span class="sidebar-list__text">
                                                            <div class="sidebar-list__link">Биржевые торги</div>
                                                        </span>
                                                    </div>
                                                </a>


                                                <a href="/markets/land" class="sidebar-list__item">
                                                    <div class="sidebar-list__item-inner">
                                                        <span class="sidebar-list__text">
                                                            <div class="sidebar-list__link">Земельные торги</div>
                                                        </span>
                                                    </div>
                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="blocks-list">
                                    <div class="blocks-list__item" style="padding-top: 10px;">
                                        <div class="blocks-list _columns">
                                            <div class="blocks-list__item _content visible-lg-block">
                                                <div class="sidebar-list _gray _border">
                                                    <a href="/calc" class="sidebar-list__item">
                                                        <div class="sidebar-list__item-inner">
                                                        <span class="sidebar-list__text">
                                                            <div class="sidebar-list__link">Логистический калькулятор</div>
                                                        </span>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                            <div class="blocks-list">
                                                <div class="blocks-list__item" style="padding-top: 10px;">
                                                    <div class="blocks-list _columns">
                                                        <div class="blocks-list__item _content visible-lg-block">
                                                <div class="sidebar-list _gray _border">
                                                <a href="/markets/spravka" class="sidebar-list__item">
                                                    <div class="sidebar-list__item-inner">
                                                        <span class="sidebar-list__text">
                                                            <div class="sidebar-list__link">Справочник</div>
                                                        </span>
                                                    </div>
                                                </a>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="blocks-list">
                                    <div class="blocks-list__item" style="padding-top: 10px;">
                                        <div class="blocks-list _columns">
                                            <div class="blocks-list__item _content visible-lg-block">
                                                <div class="sidebar-list _gray _border">
                                                    <a role="button" class="sidebar-list__item" data-toggle="modal" data-target="#exampleModal">
                                                        <div class="sidebar-list__item-inner">
                                                        <span class="sidebar-list__text">
                                                            <div class="sidebar-list__link">Подписаться</div>
                                                        </span>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blocks-list">
                                    <div class="blocks-list__item" style="padding-top: 10px;">
                                        <div class="blocks-list _columns">
                                            <div class="blocks-list__item _content visible-lg-block" style="background: none;">
                                                <!--Kurs.com.ua main-ukraine 200x130 blue-->
                                                <div id='kurs-com-ua-informer-main-ukraine-200x130-blue-container'><a href="//old.kurs.com.ua/informer" id="kurs-com-ua-informer-main-ukraine-200x130-blue" title="Курс валют информер Украина" rel="nofollow" target="_blank">Информер курса валют</a></div>
                                                <script type='text/javascript'>
                                                    (function() {var iframe = '<ifr'+'ame src="//old.kurs.com.ua/informer/inf2?color=blue" width="200" height="130" frameborder="0" vspace="0" scrolling="no" hspace="0"></ifr'+'ame>';var container = document.getElementById('kurs-com-ua-informer-main-ukraine-200x130-blue');container.parentNode.innerHTML = iframe;})();
                                                </script>
                                                <noscript><img src='//old.kurs.com.ua/static/images/informer/kurs.png' width='52' height='26' alt='kurs.com.ua: курс валют в Украине!' title='Курс валют' border='0' /></noscript>
                                                <!--//Kurs.com.ua main-ukraine 200x130 blue-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>

            </div>

        </div>


        <!-- slider partners -->
        <div class="\" style="padding-top: 10px; display: none;" >
            <div>
                <div>
                    <div class="slick-partners">
                        <div><p style="text-align: center; height: 100px;"><img  src="img/Partner+icon.png" style="width: 30%;" alt=""></p></div>
                        <div><p style="text-align: center; height: 100px;"><img src="img/images.png" style="width: 30%" alt=""></p></div>
                        <div><p style="text-align: center; height: 100px;">partner 3</p></div>
                        <div><p style="text-align: center; height: 100px;">partner 4</p></div>
                        <div><p style="text-align: center; height: 100px;">partner 5</p></div>
                    </div>
                </div>
            </div>
        </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<?php
$script = <<< JS
$(document).ready(function() {
   $('.slide-news').slick({
        speed: 300,
        //  autoplay: true,
      //   adaptiveHeight: true,
        autoplaySpeed: 3000,
    });

    $('.slick-partners').slick({
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    var table = $('.dataTables-example').DataTable({
				"ajax": {
					url: '/modules/flourtrade/dom_sale.php',
					type: "post",
					data: {
						breed_type: ''
					}
				},
				"language": {
					"url": "/js/plugins/dataTables/Ukranian.json"
				},
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

var table1 = $('.dataTables-example1').DataTable({
				"ajax": {
					url: '/modules/flourtrade/dom_byu.php',
					type: "post",
					data: {
						breed_type: ''
					}
				},
				"language": {
					"url": "/js/plugins/dataTables/Ukranian.json"
				},
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

$('#breed_type').change(function(){
	table1.ajax.reload();
});

function getContent(timestamp)
{
    var queryString = {'timestamp' : timestamp};

    $.ajax(
        {
            type: 'POST',
            url: 'https://oil/1/server/server.php',
            data: queryString,
            success: function(data){
				var obj = jQuery.parseJSON(data);
                getContent(obj.timestamp);
				table.ajax.reload();
				table1.ajax.reload();
            }
        }
    );
}

// initialize jQuery
$(function() {
    getContent();
});
});
     
JS;
$this->registerJs($script);
