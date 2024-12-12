@extends('layouts.frontend_app')
@section('frontent_content')
    <div id="rec748345496" class="r t-rec t-rec_pt_45 t-rec_pb_75"
        style="padding-top:45px;padding-bottom:75px;background-color:#efefef; " data-animationappear="off"
        data-record-type="650" data-bg-color="#efefef"><!-- T650 -->
        <div class="t650">
            <div class="t-section__container t-container t-container_flex">
                <div class="t-col t-col_12 ">
                    <div class="t-section__title t-title t-title_xs t-align_center t-margin_auto" field="btitle">Отчеты</div>
                </div>
            </div>
            <style>
                .t-section__descr {
                    max-width: 560px;
                }

                #rec748345496 .t-section__title {
                    margin-bottom: 90px;
                }

                #rec748345496 .t-section__descr {}

                @media screen and (max-width: 960px) {
                    #rec748345496 .t-section__title {
                        margin-bottom: 75px;
                    }
                }
            </style>
            <div class="t650__container t-card__container t-container" data-columns-in-row="3">
                <div class="t-card__col t-col t-col_4 t-align_left" style="cursor: pointer;">
                    <div class="t650__inner-col" style="background-color: rgb(255, 255, 255); height: 196px;">
                        <div class="t650__text">
                            <div class="t-card__title t-name t-name_lg" field="li_title__4974161772310"><a
                                    href="{{route('frontend.balance')}}" class="t-card__link" id="cardtitle1_748345496"
                                    aria-labelledby="cardtitle1_748345496 cardbtn1_748345496">Бухгалтерский баланс&nbsp;— 1
                                    квартал 2024</a></div>
                        </div>
                        <div class="t650__btn-container">
                            <div class="t-card__btntext-wrapper">
                                <a href="{{route('frontend.balance')}}" class="t-card__btn-text t-btntext t-btntext_sm " id="cardbtn1_748345496"
                                    data-field="li_buttontitle__4974161772310" style="color:#193d88;font-weight:600;"
                                    aria-hidden="true" data-buttonfieldset="li_button" data-lid="4974161772310">Просмотреть
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-card__col t-col t-col_4 t-align_left" style="cursor: pointer;">
                    <div class="t650__inner-col" style="background-color: rgb(255, 255, 255); height: 196px;">
                        <div class="t650__text">
                            <div class="t-card__title t-name t-name_lg" field="li_title__1715705842941"><a
                                    href="{{route('frontend.income')}}" class="t-card__link" id="cardtitle2_748345496"
                                    aria-labelledby="cardtitle2_748345496 cardbtn2_748345496">Отчет о финансовых результатах
                                    – 1 квартал 2024</a></div>
                        </div>
                        <div class="t650__btn-container">
                            <div class="t-card__btntext-wrapper">
                                <a href="{{route('frontend.income')}}" class="t-card__btn-text t-btntext t-btntext_sm " id="cardbtn2_748345496"
                                    data-field="li_buttontitle__1715705842941" style="color:#193d88;font-weight:600;"
                                    aria-hidden="true" data-buttonfieldset="li_button" data-lid="1715705842941">Просмотреть
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            t_onReady(function() {
                t_onFuncLoad('t650_init', function() {
                    t650_init('748345496');
                });
                t_onFuncLoad('t650_unifyHeights', function() {
                    t650_unifyHeights('748345496');
                });
                if (typeof jQuery !== 'undefined') {
                    $('.t650').on('displayChanged', function() {
                        t650_unifyHeights('748345496');
                    });
                } else {
                    var rec = document.querySelector('#rec748345496');
                    if (!rec) return;
                    var wrapper = rec.querySelector('.t650');
                    if (wrapper) {
                        wrapper.addEventListener('displayChanged', function() {
                            t_onFuncLoad('t650_unifyHeights', function() {
                                t650_unifyHeights('748345496');
                            });
                        });
                    }
                }
            });
            window.addEventListener('resize', t_throttle(function() {
                t_onFuncLoad('t650_unifyHeights', function() {
                    t650_unifyHeights('748345496');
                });
            }));
            window.addEventListener('load', function() {
                t_onFuncLoad('t650_unifyHeights', function() {
                    t650_unifyHeights('748345496');
                });
            });
        </script>
        <style>
            #rec748345496 .t650__inner-col {
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }
        </style>
        <style>
            #rec748345496 .t650 .t650__inner-col:hover,
            #rec748345496 .t650 .t-focusable .t650__inner-col,
            #rec748345496 .t650 .t-card__col_btnfocusable .t650__inner-col {
                box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1) !important;
            }
        </style>
        <style>
            #rec748345496 .t650__inner-col {
                border-radius: 5px;
            }
        </style>
    </div>
@endsection
