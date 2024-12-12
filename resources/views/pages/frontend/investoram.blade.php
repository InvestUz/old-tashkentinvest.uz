@extends('layouts.frontend_app')

@section('frontent_content')
<div class="t004">
    <div class="t-container">
        <div class="t-col t-col_12">
            <div field="text" class="t-text t-text_md">
                <p style="text-align: center">
                    <strong style="font-size: 34px">Строительные инвестиционные проекты</strong>
                </p>
                <br />
                <p style="text-align: center"><strong> </strong></p>
                <p style="text-align: center">
                    АО «Компания Ташкент Инвест» объявляет конкурс для отбора
                    наилучшего предложения
                </p>
                <p style="text-align: center"></p>
            </div>
        </div>
    </div>
</div>

<div id="rec748721930" class="r t-rec t-rec_pt_0 t-rec_pb_45"
    style="padding-top: 0px; padding-bottom: 45px; background-color: #ffffff;"
    data-animationappear="off" data-record-type="668" data-bg-color="#ffffff">
    <!-- T668 -->
    <script>
        t_onReady(function() {
            t_onFuncLoad("t668_init", function() {
                t668_init("748721930");
            });
        });
    </script>
    <style>
        #rec748721930 .t668__title {
            color: #ffffff;
            font-weight: 500;
            font-family: "Montserrat";
        }

        #rec748721930 .t668__text {
            color: #ffffff;
        }
    </style>
</div>

<div class="view-toggle-container" style="text-align:center; margin:20px;">
    <button id="toggleViewBtn" class="btn btn-primary" style="background-color:#193d88; border:none;">
        Переключить вид (Список/Карточки)
    </button>
</div>

<div id="rec748690821" class="r t-rec t-rec_pt_0 t-rec_pb_60"
    style="padding-top: 0px; padding-bottom: 60px"
    data-animationappear="off" data-record-type="772">
    <!-- T772 -->
    <div class="t772">
        <div class="t772__wrapper t-card__container t772__container t772__container_mobile-grid projects-container card-view">
            @forelse($projects as $project)
                <div class="t-card__col t772__col t-col t-col_4 t-align_left t-item t772__col_mobile-grid project-item"
                    style="margin-bottom: 20px;">
                    <div class="t772__content"
                        style="box-shadow: 0 4px 8px rgba(0,0,0,0.2); border-radius: 10px; overflow: hidden;">
                        <div class="t772__imgwrapper" style="padding-bottom: 94.444444444444%;">
                            <div class="t772__bgimg t-bgimg"
                                style="background-image: url('{{ asset('assets/images/flats.png') }}');"
                                itemscope itemtype="http://schema.org/ImageObject">
                                <meta itemprop="image" content="{{ asset('assets/images/flats.png') }}" data-load="lazy" />
                            </div>
                        </div>
                        <div class="t772__textwrapper" style="padding: 15px;">
                            <div class="t-card__title t-name t-name_md">
                                {{ $project->district }} район
                            </div>
                            @if($project->mahalla)
                                <p><strong>Махалла:</strong> {{ $project->mahalla }}</p>
                            @endif
                            @if($project->land)
                                <p><strong>Площадь:</strong> {{ $project->land }} га</p>
                            @endif
                        </div>
                        <div class="t-card__btn-wrapper" style="padding: 15px;">
                            @if($project->land)
                                <a class="t-card__btn t-card__btn_first t-btn t-btn_xs"
                                    style="color: #ffffff; background-color: #193d88; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                                    Площадь: {{ $project->land }} га
                                </a>
                            @endif
                            @if($project->srok_realizatsi)
                                <div class="t-card__btn t-card__btn_second t-btn t-btn_xs"
                                    style="color: #193d88; border: 2px solid #193d88; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                                    Срок реализации: {{ $project->srok_realizatsi }} месяцев
                                </div>
                            @endif

                            <br>
                            <a class="rubric_sub" style="display:block; margin-top:10px;">
                                Первый этап: {{ $project->start_date ?? 'Не указано' }} -
                                {{ $project->end_date ?? 'Не указано' }}<br>
                                Второй этап: {{ $project->second_stage_start_date ?? 'Не указано' }} -
                                {{ $project->second_stage_end_date ?? 'Не указано' }}
                            </a>

                            <div class="mt-2">
                                @if($project->elon_fayl)
                                    <a class="download-button" target="_blank"
                                        href="{{ asset('storage/' . $project->elon_fayl) }}" 
                                        style="display:inline-block; margin-right:10px; text-decoration:none; color:#193d88;">
                                        <i class="fas fa-file-download download-icon"></i> Объявление 1 этапа
                                    </a>
                                @endif

                                @if($project->pratakol_fayl)
                                    <a class="download-button" target="_blank"
                                        href="{{ asset('storage/' . $project->pratakol_fayl) }}"
                                        style="text-decoration:none; color:#193d88;">
                                        <i class="fas fa-file-download download-icon"></i> Протокол 1 этапа
                                    </a>
                                @endif
                            </div>

                            @if (Route::has('bidding.show'))
                                <a href="{{ route('bidding.show', $project->id) }}" class="t-card__btn t-card__btn_first t-btn t-btn_xs"
                                    style="margin-top:15px; display:inline-block; color: #ffffff; background-color: #193d88; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                                    Далее
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="t-col t-col_12">
                    <p style="text-align: center">Нет доступных проектов.</p>
                </div>
            @endforelse
        </div>
    </div>

    <script type="text/javascript">
        t_onReady(function() {
            t_onFuncLoad("t772_init", function() {
                t772_init("748690821");
            });
        });

        // Toggle between card-view and list-view
        document.getElementById('toggleViewBtn').addEventListener('click', function() {
            var container = document.querySelector('.projects-container');
            if (container.classList.contains('card-view')) {
                container.classList.remove('card-view');
                container.classList.add('list-view');
            } else {
                container.classList.remove('list-view');
                container.classList.add('card-view');
            }
        });
    </script>

    <style>
        /* Styles for switching between card and list view */
        .projects-container.card-view .project-item {
            width: 31%;
            display: inline-block;
            vertical-align: top;
        }

        .projects-container.list-view .project-item {
            width: 100%;
            display: block;
        }

        .projects-container.list-view .t772__imgwrapper {
            float: left;
            width: 20%;
            padding-bottom: 0;
            height: 120px;
            overflow: hidden;
        }

        .projects-container.list-view .t772__textwrapper, 
        .projects-container.list-view .t-card__btn-wrapper {
            float: left;
            width: 75%;
            margin-left: 5%;
        }

        .projects-container.list-view .t772__imgwrapper .t772__bgimg {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
        }

        .projects-container.list-view .t772__content {
            overflow: auto;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .projects-container.card-view .project-item {
                width: 100% !important;
            }

            .projects-container.list-view .t772__imgwrapper,
            .projects-container.list-view .t772__textwrapper, 
            .projects-container.list-view .t-card__btn-wrapper {
                float: none;
                width: 100%;
                margin: 0;
            }
        }
    </style>
</div>
@endsection
