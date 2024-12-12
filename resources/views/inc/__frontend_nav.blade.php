@if (request()->path() === '/')
<div id="rec748107215" class="r t-rec" style="" data-animationappear="off" data-record-type="257">
    <!-- T228 -->
    <div id="nav748107215marker"></div>
    <div class="tmenu-mobile">  
        <div class="tmenu-mobile__container">
            <div class="tmenu-mobile__burgerlogo">
                <a href="{{route('frontend.board')}}"><img
                        src="{{ asset('assets/frontend/tild3636-3735-4861-a236-666663383164/TIC_white.png') }}"
                        class="tmenu-mobile__imglogo" imgfield="img" style="max-width: 100px; width: 100px"
                        alt="" /></a>
            </div>
            <button type="button" class="t-menuburger t-menuburger_third" aria-label="Навигационное меню"
                aria-expanded="false">
                <span style="background-color: #ffffff"></span><span
                    style="background-color: #ffffff"></span><span
                    style="background-color: #ffffff"></span><span style="background-color: #ffffff"></span>
            </button>
            <script>
                function t_menuburger_init(recid) {
                    var rec = document.querySelector("#rec" + recid);
                    if (!rec) return;
                    var burger = rec.querySelector(".t-menuburger");
                    if (!burger) return;
                    var isSecondStyle = burger.classList.contains(
                        "t-menuburger_second"
                    );
                    if (
                        isSecondStyle &&
                        !window.isMobile &&
                        !("ontouchend" in document)
                    ) {
                        burger.addEventListener("mouseenter", function() {
                            if (burger.classList.contains("t-menuburger-opened"))
                                return;
                            burger.classList.remove("t-menuburger-unhovered");
                            burger.classList.add("t-menuburger-hovered");
                        });
                        burger.addEventListener("mouseleave", function() {
                            if (burger.classList.contains("t-menuburger-opened"))
                                return;
                            burger.classList.remove("t-menuburger-hovered");
                            burger.classList.add("t-menuburger-unhovered");
                            setTimeout(function() {
                                burger.classList.remove("t-menuburger-unhovered");
                            }, 300);
                        });
                    }
                    burger.addEventListener("click", function() {
                        if (
                            !burger.closest(".tmenu-mobile") &&
                            !burger.closest(".t450__burger_container") &&
                            !burger.closest(".t466__container") &&
                            !burger.closest(".t204__burger") &&
                            !burger.closest(".t199__js__menu-toggler")
                        ) {
                            burger.classList.toggle("t-menuburger-opened");
                            burger.classList.remove("t-menuburger-unhovered");
                        }
                    });
                    var menu = rec.querySelector('[data-menu="yes"]');
                    if (!menu) return;
                    var menuLinks = menu.querySelectorAll(".t-menu__link-item");
                    var submenuClassList = [
                        "t978__menu-link_hook",
                        "t978__tm-link",
                        "t966__tm-link",
                        "t794__tm-link",
                        "t-menusub__target-link",
                    ];
                    Array.prototype.forEach.call(menuLinks, function(link) {
                        link.addEventListener("click", function() {
                            var isSubmenuHook = submenuClassList.some(function(
                                submenuClass
                            ) {
                                return link.classList.contains(submenuClass);
                            });
                            if (isSubmenuHook) return;
                            burger.classList.remove("t-menuburger-opened");
                        });
                    });
                    menu.addEventListener(
                        "clickedAnchorInTooltipMenu",
                        function() {
                            burger.classList.remove("t-menuburger-opened");
                        }
                    );
                }
                t_onReady(function() {
                    t_onFuncLoad("t_menuburger_init", function() {
                        t_menuburger_init("748107215");
                    });
                });
            </script>
            <style>
                .t-menuburger {
                    position: relative;
                    flex-shrink: 0;
                    width: 28px;
                    height: 20px;
                    padding: 0;
                    border: none;
                    background-color: transparent;
                    outline: none;
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                    transition: transform 0.5s ease-in-out;
                    cursor: pointer;
                    z-index: 999;
                }

                /*---menu burger lines---*/
                .t-menuburger span {
                    display: block;
                    position: absolute;
                    width: 100%;
                    opacity: 1;
                    left: 0;
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                    transition: 0.25s ease-in-out;
                    height: 3px;
                    background-color: #000;
                }

                .t-menuburger span:nth-child(1) {
                    top: 0px;
                }

                .t-menuburger span:nth-child(2),
                .t-menuburger span:nth-child(3) {
                    top: 8px;
                }

                .t-menuburger span:nth-child(4) {
                    top: 16px;
                }

                /*menu burger big*/
                .t-menuburger__big {
                    width: 42px;
                    height: 32px;
                }

                .t-menuburger__big span {
                    height: 5px;
                }

                .t-menuburger__big span:nth-child(2),
                .t-menuburger__big span:nth-child(3) {
                    top: 13px;
                }

                .t-menuburger__big span:nth-child(4) {
                    top: 26px;
                }

                /*menu burger small*/
                .t-menuburger__small {
                    width: 22px;
                    height: 14px;
                }

                .t-menuburger__small span {
                    height: 2px;
                }

                .t-menuburger__small span:nth-child(2),
                .t-menuburger__small span:nth-child(3) {
                    top: 6px;
                }

                .t-menuburger__small span:nth-child(4) {
                    top: 12px;
                }

                /*menu burger opened*/
                .t-menuburger-opened span:nth-child(1) {
                    top: 8px;
                    width: 0%;
                    left: 50%;
                }

                .t-menuburger-opened span:nth-child(2) {
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                }

                .t-menuburger-opened span:nth-child(3) {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }

                .t-menuburger-opened span:nth-child(4) {
                    top: 8px;
                    width: 0%;
                    left: 50%;
                }

                .t-menuburger-opened.t-menuburger__big span:nth-child(1) {
                    top: 6px;
                }

                .t-menuburger-opened.t-menuburger__big span:nth-child(4) {
                    top: 18px;
                }

                .t-menuburger-opened.t-menuburger__small span:nth-child(1),
                .t-menuburger-opened.t-menuburger__small span:nth-child(4) {
                    top: 6px;
                }

                /*---menu burger first style---*/
                @media (hover),
                (min-width: 0\0) {
                    .t-menuburger_first:hover span:nth-child(1) {
                        transform: translateY(1px);
                    }

                    .t-menuburger_first:hover span:nth-child(4) {
                        transform: translateY(-1px);
                    }

                    .t-menuburger_first.t-menuburger__big:hover span:nth-child(1) {
                        transform: translateY(3px);
                    }

                    .t-menuburger_first.t-menuburger__big:hover span:nth-child(4) {
                        transform: translateY(-3px);
                    }
                }

                /*---menu burger second style---*/
                .t-menuburger_second span:nth-child(2),
                .t-menuburger_second span:nth-child(3) {
                    width: 80%;
                    left: 20%;
                    right: 0;
                }

                @media (hover),
                (min-width: 0\0) {

                    .t-menuburger_second.t-menuburger-hovered span:nth-child(2),
                    .t-menuburger_second.t-menuburger-hovered span:nth-child(3) {
                        animation: t-menuburger-anim 0.3s ease-out normal forwards;
                    }

                    .t-menuburger_second.t-menuburger-unhovered span:nth-child(2),
                    .t-menuburger_second.t-menuburger-unhovered span:nth-child(3) {
                        animation: t-menuburger-anim2 0.3s ease-out normal forwards;
                    }
                }

                .t-menuburger_second.t-menuburger-opened span:nth-child(2),
                .t-menuburger_second.t-menuburger-opened span:nth-child(3) {
                    left: 0;
                    right: 0;
                    width: 100% !important;
                }

                /*---menu burger third style---*/
                .t-menuburger_third span:nth-child(4) {
                    width: 70%;
                    left: unset;
                    right: 0;
                }

                @media (hover),
                (min-width: 0\0) {
                    .t-menuburger_third:not(.t-menuburger-opened):hover span:nth-child(4) {
                        width: 100%;
                    }
                }

                .t-menuburger_third.t-menuburger-opened span:nth-child(4) {
                    width: 0 !important;
                    right: 50%;
                }

                /*---menu burger fourth style---*/
                .t-menuburger_fourth {
                    height: 12px;
                }

                .t-menuburger_fourth.t-menuburger__small {
                    height: 8px;
                }

                .t-menuburger_fourth.t-menuburger__big {
                    height: 18px;
                }

                .t-menuburger_fourth span:nth-child(2),
                .t-menuburger_fourth span:nth-child(3) {
                    top: 4px;
                    opacity: 0;
                }

                .t-menuburger_fourth span:nth-child(4) {
                    top: 8px;
                }

                .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
                .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                    top: 3px;
                }

                .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                    top: 6px;
                }

                .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
                .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                    top: 3px;
                }

                .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                    top: 6px;
                }

                .t-menuburger_fourth.t-menuburger__big span:nth-child(2),
                .t-menuburger_fourth.t-menuburger__big span:nth-child(3) {
                    top: 6px;
                }

                .t-menuburger_fourth.t-menuburger__big span:nth-child(4) {
                    top: 12px;
                }

                @media (hover),
                (min-width: 0\0) {
                    .t-menuburger_fourth:not(.t-menuburger-opened):hover span:nth-child(1) {
                        transform: translateY(1px);
                    }

                    .t-menuburger_fourth:not(.t-menuburger-opened):hover span:nth-child(4) {
                        transform: translateY(-1px);
                    }

                    .t-menuburger_fourth.t-menuburger__big:not(.t-menuburger-opened):hover span:nth-child(1) {
                        transform: translateY(3px);
                    }

                    .t-menuburger_fourth.t-menuburger__big:not(.t-menuburger-opened):hover span:nth-child(4) {
                        transform: translateY(-3px);
                    }
                }

                .t-menuburger_fourth.t-menuburger-opened span:nth-child(1),
                .t-menuburger_fourth.t-menuburger-opened span:nth-child(4) {
                    top: 4px;
                }

                .t-menuburger_fourth.t-menuburger-opened span:nth-child(2),
                .t-menuburger_fourth.t-menuburger-opened span:nth-child(3) {
                    opacity: 1;
                }

                /*---menu burger animations---*/
                @keyframes t-menuburger-anim {
                    0% {
                        width: 80%;
                        left: 20%;
                        right: 0;
                    }

                    50% {
                        width: 100%;
                        left: 0;
                        right: 0;
                    }

                    100% {
                        width: 80%;
                        left: 0;
                        right: 20%;
                    }
                }

                @keyframes t-menuburger-anim2 {
                    0% {
                        width: 80%;
                        left: 0;
                    }

                    50% {
                        width: 100%;
                        right: 0;
                        left: 0;
                    }

                    100% {
                        width: 80%;
                        left: 20%;
                        right: 0;
                    }
                }
            </style>
        </div>
    </div>
    <style>
        .tmenu-mobile {
            background-color: #111;
            display: none;
            width: 100%;
            top: 0;
            z-index: 990;
        }

        .tmenu-mobile_positionfixed {
            position: fixed;
        }

        .tmenu-mobile__text {
            color: #fff;
        }

        .tmenu-mobile__container {
            min-height: 64px;
            padding: 20px;
            position: relative;
            box-sizing: border-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .tmenu-mobile__list {
            display: block;
        }

        .tmenu-mobile__burgerlogo {
            display: inline-block;
            font-size: 24px;
            font-weight: 400;
            white-space: nowrap;
            vertical-align: middle;
        }

        .tmenu-mobile__imglogo {
            height: auto;
            display: block;
            max-width: 300px !important;
            box-sizing: border-box;
            padding: 0;
            margin: 0 auto;
        }

        @media screen and (max-width: 980px) {
            .tmenu-mobile__menucontent_hidden {
                display: none;
                height: 100%;
            }

            .tmenu-mobile {
                display: block;
            }
        }

        @media screen and (max-width: 980px) {
            #rec748107215 .tmenu-mobile {
                background-color: #193d88;
            }

            #rec748107215 .t-menuburger {
                -webkit-order: 1;
                -ms-flex-order: 1;
                order: 1;
            }
        }
    </style>

    <div id="nav748107215" class="t228 t228__positionabsolute tmenu-mobile__menucontent_hidden"
        style="background-color: rgba(25, 61, 136, 0); height: 70px" data-bgcolor-hex="#193d88"
        data-bgcolor-rgba="rgba(25,61,136,0.0)" data-navmarker="nav748107215marker" data-appearoffset=""
        data-bgopacity-two="100" data-menushadow="" data-menushadow-css="" data-bgopacity="0.0"
        data-bgcolor-rgba-afterscroll="rgba(25,61,136,1)" data-menu-items-align="center" data-menu="yes">
        <div class="t228__maincontainer" style="height: 70px">
            <div class="t228__padding40px"></div>
            <div class="t228__leftside">
                <div class="t228__leftcontainer">
                    <a href="{{route('frontend.board')}}" class="t228__imgwrapper"><img
                            class="t228__imglogo t228__imglogomobile"
                            src="{{ asset('assets/frontend/tild3636-3735-4861-a236-666663383164/TIC_white.png') }}"
                            imgfield="img"
                            style="
              max-width: 100px;
              width: 100px;
              min-width: 100px;
              height: auto;
              display: block;
            "
                            alt="" /></a>
                </div>
            </div>
            <div class="t228__centerside">
                <nav class="t228__centercontainer">
                    <ul role="list" class="t228__list t-menu__list t228__list_hidden">
                        <li class="t228__list_item" style="padding: 0 30px 0 0">
                            <a class="t-menu__link-item" href="" aria-expanded="false" role="button"
                                data-menu-submenu-hook="link_sub1_748107215" data-menu-item-number="1">О
                                компании</a>
                            <div class="t-menusub" data-submenu-hook="link_sub1_748107215"
                                data-submenu-margin="15px" data-add-submenu-arrow="">
                                <div class="t-menusub__menu">
                                    <div class="t-menusub__content">
                                        <ul role="list" class="t-menusub__list">
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs" href="  "
                                                    data-menu-item-number="1">Об обществе</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="./ru/error.html" data-menu-item-number="1">Миссия</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href{{route('frontend.ustav')}}-menu-item-number="1">Устав
                                                    компании</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.struktura')}}"
                                                    data-menu-item-number="1">Организационная структура</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.supervisory_board')}}"
                                                    data-menu-item-number="1">Наблюдательный совет</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.board')}}"
                                                    data-menu-item-number="1">Правление</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="ru/development-fund.html"
                                                    data-menu-item-number="1">Фонд
                                                    Развития</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="./ru/error.html"
                                                    data-menu-item-number="1">Внутренние документы</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="ru/material-facts.html"
                                                    data-menu-item-number="1">Существенные
                                                    факты</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.decision')}}"
                                                    data-menu-item-number="1">Решение о первичном выпуске
                                                    акций</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.reports')}}"
                                                    data-menu-item-number="1">Отчеты</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.spisok')}}"
                                                    data-menu-item-number="1">Список
                                                    аффилированных лиц</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="share-capital-structure.html"
                                                    data-menu-item-number="1">Структура акционерного
                                                    капитала</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.kodeks')}}"
                                                    data-menu-item-number="1">Кодекс и правила
                                                    поведения</a>
                                            </li>
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="./ru/error.html"
                                                    data-menu-item-number="1">Приоритетные направления
                                                    деятельности
                                                    Компании</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="t228__list_item" style="padding: 0 30px">
                            <a class="t-menu__link-item" href="" aria-expanded="false" role="button"
                                data-menu-submenu-hook="link_sub2_748107215"
                                data-menu-item-number="2">Инвесторам</a>
                            <div class="t-menusub" data-submenu-hook="link_sub2_748107215"
                                data-submenu-margin="15px" data-add-submenu-arrow="">
                                <div class="t-menusub__menu">
                                    <div class="t-menusub__content">
                                        <ul role="list" class="t-menusub__list">
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.investoram')}}"
                                                    data-menu-item-number="2">Строительные инвестиционные
                                                    проекты</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="t228__list_item" style="padding: 0 30px">
                            <a class="t-menu__link-item" href="" data-menu-submenu-hook=""
                                data-menu-item-number="3">Бизнесу</a>
                        </li>
                        <li class="t228__list_item" style="padding: 0 30px">
                            <a class="t-menu__link-item" href="{{route('frontend.zakupki')}}" data-menu-submenu-hook=""
                                data-menu-item-number="4">Закупки</a>
                        </li>
                        <li class="t228__list_item" style="padding: 0 30px">
                            <a class="t-menu__link-item" href="" aria-expanded="false" role="button"
                                data-menu-submenu-hook="link_sub5_748107215"
                                data-menu-item-number="5">Медиа-центр</a>
                            <div class="t-menusub" data-submenu-hook="link_sub5_748107215"
                                data-submenu-margin="15px" data-add-submenu-arrow="">
                                <div class="t-menusub__menu">
                                    <div class="t-menusub__content">
                                        <ul role="list" class="t-menusub__list">
                                            <li class="t-menusub__list-item t-name t-name_xs">
                                                <a class="t-menusub__link-item t-name t-name_xs"
                                                    href="{{route('frontend.media')}}" data-menu-item-number="5">Новости
                                                    компании</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="t228__list_item" style="padding: 0 0 0 30px">
                            <a class="t-menu__link-item" href="{{route('frontend.contact')}}" data-menu-submenu-hook=""
                                data-menu-item-number="6">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="t228__rightside">
                <div class="t228__rightcontainer">
                    <div class="t228__right_langs">
                        <div class="t228__right_buttons_wrap">
                            {{-- <div class="t228__right_langs_lang">
                                <a style="opacity: 0.5" href="">En</a>
                            </div> --}}
                            <div class="t228__right_langs_lang">
                                <a style="opacity: 0.5" href="">Uz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t228__padding40px"></div>
        </div>
    </div>
    <style>
        @media screen and (max-width: 980px) {
            #rec748107215 .t228__leftcontainer {
                display: none;
            }
        }
    </style>
    <style>
        @media screen and (max-width: 980px) {
            #rec748107215 .t228__leftcontainer {
                padding: 20px;
            }

            #rec748107215 .t228__imglogo {
                padding: 20px 0;
            }

            #rec748107215 .t228 {
                position: static;
            }
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            t_onFuncLoad("t228_setWidth", function() {
                t228_setWidth("748107215");
            });
        });
        window.addEventListener(
            "resize",
            t_throttle(function() {
                t_onFuncLoad("t228_setWidth", function() {
                    t228_setWidth("748107215");
                });
                t_onFuncLoad("t_menu__setBGcolor", function() {
                    t_menu__setBGcolor("748107215", ".t228");
                });
            })
        );
        t_onReady(function() {
            t_onFuncLoad("t_menu__highlightActiveLinks", function() {
                t_menu__highlightActiveLinks(".t228__list_item a");
            });
            t_onFuncLoad("t228__init", function() {
                t228__init("748107215");
            });
            t_onFuncLoad("t_menu__setBGcolor", function() {
                t_menu__setBGcolor("748107215", ".t228");
            });
            t_onFuncLoad("t_menu__interactFromKeyboard", function() {
                t_menu__interactFromKeyboard("748107215");
            });
            t_onFuncLoad("t228_setWidth", function() {
                t228_setWidth("748107215");
            });
            t_onFuncLoad("t_menu__createMobileMenu", function() {
                t_menu__createMobileMenu("748107215", ".t228");
            });
        });
    </script>

    <style>
        #rec748107215 .t-menu__link-item {}

        @supports (overflow: -webkit-marquee) and (justify-content: inherit) {

            #rec748107215 .t-menu__link-item,
            #rec748107215 .t-menu__link-item.t-active {
                opacity: 1 !important;
            }
        }
    </style>
    <script>
        t_onReady(function() {
            setTimeout(function() {
                t_onFuncLoad("t_menusub_init", function() {
                    t_menusub_init("748107215");
                });
            }, 500);
        });
    </script>
    <style>
        #rec748107215 .t-menusub__link-item {
            -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
            transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        #rec748107215 .t-menusub__link-item.t-active {
            color: #193d88 !important;
        }

        #rec748107215 .t-menusub__link-item:not(.t-active):not(.tooltipstered):hover {
            color: #193d88 !important;
        }

        @supports (overflow: -webkit-marquee) and (justify-content: inherit) {

            #rec748107215 .t-menusub__link-item,
            #rec748107215 .t-menusub__link-item.t-active {
                opacity: 1 !important;
            }
        }

        @media screen and (max-width: 980px) {
            #rec748107215 .t-menusub__menu .t-menusub__link-item {
                color: #ffffff !important;
            }

            #rec748107215 .t-menusub__menu .t-menusub__link-item.t-active {
                color: #193d88 !important;
            }
        }

        @media screen and (min-width: 981px) {
            #rec748107215 .t-menusub__menu {
                text-align: left;
            }
        }
    </style>
    <style>
        #rec748107215 a.t-menusub__link-item {
            font-size: 10px;
            text-transform: uppercase;
        }
    </style>
    <style>
        #rec748107215 a.t-menu__link-item {
            font-size: 14px;
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
        }

        #rec748107215 .t228__right_langs_lang a {
            font-size: 14px;
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
        }
    </style>

</div>
@else
<div
          id="rec748905478"
          class="r t-rec"
          style=""
          data-animationappear="off"
          data-record-type="257"
        >
          <!-- T228 -->
          <div id="nav748905478marker"></div>
          <div class="tmenu-mobile">
            <div class="tmenu-mobile__container">
              <div class="tmenu-mobile__burgerlogo">
                <a href="{{route('frontend.index')}}"
                  ><img
                    src="{{asset('assets/frontend/tild6238-3031-4265-a564-343037346231/tic_logo_blue.png')}}"
                    class="tmenu-mobile__imglogo"
                    imgfield="img"
                    style="max-width: 150px; width: 150px"
                    alt=""
                /></a>
              </div>
              <button
                type="button"
                class="t-menuburger t-menuburger_third"
                aria-label="Навигационное меню"
                aria-expanded="false"
              >
                <span style="background-color: #193d88"></span
                ><span style="background-color: #193d88"></span
                ><span style="background-color: #193d88"></span
                ><span style="background-color: #193d88"></span>
              </button>
              <script>
                function t_menuburger_init(recid) {
                  var rec = document.querySelector("#rec" + recid);
                  if (!rec) return;
                  var burger = rec.querySelector(".t-menuburger");
                  if (!burger) return;
                  var isSecondStyle = burger.classList.contains(
                    "t-menuburger_second"
                  );
                  if (
                    isSecondStyle &&
                    !window.isMobile &&
                    !("ontouchend" in document)
                  ) {
                    burger.addEventListener("mouseenter", function () {
                      if (burger.classList.contains("t-menuburger-opened"))
                        return;
                      burger.classList.remove("t-menuburger-unhovered");
                      burger.classList.add("t-menuburger-hovered");
                    });
                    burger.addEventListener("mouseleave", function () {
                      if (burger.classList.contains("t-menuburger-opened"))
                        return;
                      burger.classList.remove("t-menuburger-hovered");
                      burger.classList.add("t-menuburger-unhovered");
                      setTimeout(function () {
                        burger.classList.remove("t-menuburger-unhovered");
                      }, 300);
                    });
                  }
                  burger.addEventListener("click", function () {
                    if (
                      !burger.closest(".tmenu-mobile") &&
                      !burger.closest(".t450__burger_container") &&
                      !burger.closest(".t466__container") &&
                      !burger.closest(".t204__burger") &&
                      !burger.closest(".t199__js__menu-toggler")
                    ) {
                      burger.classList.toggle("t-menuburger-opened");
                      burger.classList.remove("t-menuburger-unhovered");
                    }
                  });
                  var menu = rec.querySelector('[data-menu="yes"]');
                  if (!menu) return;
                  var menuLinks = menu.querySelectorAll(".t-menu__link-item");
                  var submenuClassList = [
                    "t978__menu-link_hook",
                    "t978__tm-link",
                    "t966__tm-link",
                    "t794__tm-link",
                    "t-menusub__target-link",
                  ];
                  Array.prototype.forEach.call(menuLinks, function (link) {
                    link.addEventListener("click", function () {
                      var isSubmenuHook = submenuClassList.some(function (
                        submenuClass
                      ) {
                        return link.classList.contains(submenuClass);
                      });
                      if (isSubmenuHook) return;
                      burger.classList.remove("t-menuburger-opened");
                    });
                  });
                  menu.addEventListener(
                    "clickedAnchorInTooltipMenu",
                    function () {
                      burger.classList.remove("t-menuburger-opened");
                    }
                  );
                }
                t_onReady(function () {
                  t_onFuncLoad("t_menuburger_init", function () {
                    t_menuburger_init("748905478");
                  });
                });
              </script>
              <style>
                .t-menuburger {
                  position: relative;
                  flex-shrink: 0;
                  width: 28px;
                  height: 20px;
                  padding: 0;
                  border: none;
                  background-color: transparent;
                  outline: none;
                  -webkit-transform: rotate(0deg);
                  transform: rotate(0deg);
                  transition: transform 0.5s ease-in-out;
                  cursor: pointer;
                  z-index: 999;
                }
                /*---menu burger lines---*/
                .t-menuburger span {
                  display: block;
                  position: absolute;
                  width: 100%;
                  opacity: 1;
                  left: 0;
                  -webkit-transform: rotate(0deg);
                  transform: rotate(0deg);
                  transition: 0.25s ease-in-out;
                  height: 3px;
                  background-color: #000;
                }
                .t-menuburger span:nth-child(1) {
                  top: 0px;
                }
                .t-menuburger span:nth-child(2),
                .t-menuburger span:nth-child(3) {
                  top: 8px;
                }
                .t-menuburger span:nth-child(4) {
                  top: 16px;
                }
                /*menu burger big*/
                .t-menuburger__big {
                  width: 42px;
                  height: 32px;
                }
                .t-menuburger__big span {
                  height: 5px;
                }
                .t-menuburger__big span:nth-child(2),
                .t-menuburger__big span:nth-child(3) {
                  top: 13px;
                }
                .t-menuburger__big span:nth-child(4) {
                  top: 26px;
                }
                /*menu burger small*/
                .t-menuburger__small {
                  width: 22px;
                  height: 14px;
                }
                .t-menuburger__small span {
                  height: 2px;
                }
                .t-menuburger__small span:nth-child(2),
                .t-menuburger__small span:nth-child(3) {
                  top: 6px;
                }
                .t-menuburger__small span:nth-child(4) {
                  top: 12px;
                }
                /*menu burger opened*/
                .t-menuburger-opened span:nth-child(1) {
                  top: 8px;
                  width: 0%;
                  left: 50%;
                }
                .t-menuburger-opened span:nth-child(2) {
                  -webkit-transform: rotate(45deg);
                  transform: rotate(45deg);
                }
                .t-menuburger-opened span:nth-child(3) {
                  -webkit-transform: rotate(-45deg);
                  transform: rotate(-45deg);
                }
                .t-menuburger-opened span:nth-child(4) {
                  top: 8px;
                  width: 0%;
                  left: 50%;
                }
                .t-menuburger-opened.t-menuburger__big span:nth-child(1) {
                  top: 6px;
                }
                .t-menuburger-opened.t-menuburger__big span:nth-child(4) {
                  top: 18px;
                }
                .t-menuburger-opened.t-menuburger__small span:nth-child(1),
                .t-menuburger-opened.t-menuburger__small span:nth-child(4) {
                  top: 6px;
                }
                /*---menu burger first style---*/
                @media (hover), (min-width: 0\0) {
                  .t-menuburger_first:hover span:nth-child(1) {
                    transform: translateY(1px);
                  }
                  .t-menuburger_first:hover span:nth-child(4) {
                    transform: translateY(-1px);
                  }
                  .t-menuburger_first.t-menuburger__big:hover
                    span:nth-child(1) {
                    transform: translateY(3px);
                  }
                  .t-menuburger_first.t-menuburger__big:hover
                    span:nth-child(4) {
                    transform: translateY(-3px);
                  }
                }
                /*---menu burger second style---*/
                .t-menuburger_second span:nth-child(2),
                .t-menuburger_second span:nth-child(3) {
                  width: 80%;
                  left: 20%;
                  right: 0;
                }
                @media (hover), (min-width: 0\0) {
                  .t-menuburger_second.t-menuburger-hovered span:nth-child(2),
                  .t-menuburger_second.t-menuburger-hovered span:nth-child(3) {
                    animation: t-menuburger-anim 0.3s ease-out normal forwards;
                  }
                  .t-menuburger_second.t-menuburger-unhovered span:nth-child(2),
                  .t-menuburger_second.t-menuburger-unhovered
                    span:nth-child(3) {
                    animation: t-menuburger-anim2 0.3s ease-out normal forwards;
                  }
                }
                .t-menuburger_second.t-menuburger-opened span:nth-child(2),
                .t-menuburger_second.t-menuburger-opened span:nth-child(3) {
                  left: 0;
                  right: 0;
                  width: 100% !important;
                }
                /*---menu burger third style---*/
                .t-menuburger_third span:nth-child(4) {
                  width: 70%;
                  left: unset;
                  right: 0;
                }
                @media (hover), (min-width: 0\0) {
                  .t-menuburger_third:not(.t-menuburger-opened):hover
                    span:nth-child(4) {
                    width: 100%;
                  }
                }
                .t-menuburger_third.t-menuburger-opened span:nth-child(4) {
                  width: 0 !important;
                  right: 50%;
                }
                /*---menu burger fourth style---*/
                .t-menuburger_fourth {
                  height: 12px;
                }
                .t-menuburger_fourth.t-menuburger__small {
                  height: 8px;
                }
                .t-menuburger_fourth.t-menuburger__big {
                  height: 18px;
                }
                .t-menuburger_fourth span:nth-child(2),
                .t-menuburger_fourth span:nth-child(3) {
                  top: 4px;
                  opacity: 0;
                }
                .t-menuburger_fourth span:nth-child(4) {
                  top: 8px;
                }
                .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
                .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                  top: 3px;
                }
                .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                  top: 6px;
                }
                .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
                .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                  top: 3px;
                }
                .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                  top: 6px;
                }
                .t-menuburger_fourth.t-menuburger__big span:nth-child(2),
                .t-menuburger_fourth.t-menuburger__big span:nth-child(3) {
                  top: 6px;
                }
                .t-menuburger_fourth.t-menuburger__big span:nth-child(4) {
                  top: 12px;
                }
                @media (hover), (min-width: 0\0) {
                  .t-menuburger_fourth:not(.t-menuburger-opened):hover
                    span:nth-child(1) {
                    transform: translateY(1px);
                  }
                  .t-menuburger_fourth:not(.t-menuburger-opened):hover
                    span:nth-child(4) {
                    transform: translateY(-1px);
                  }
                  .t-menuburger_fourth.t-menuburger__big:not(
                      .t-menuburger-opened
                    ):hover
                    span:nth-child(1) {
                    transform: translateY(3px);
                  }
                  .t-menuburger_fourth.t-menuburger__big:not(
                      .t-menuburger-opened
                    ):hover
                    span:nth-child(4) {
                    transform: translateY(-3px);
                  }
                }
                .t-menuburger_fourth.t-menuburger-opened span:nth-child(1),
                .t-menuburger_fourth.t-menuburger-opened span:nth-child(4) {
                  top: 4px;
                }
                .t-menuburger_fourth.t-menuburger-opened span:nth-child(2),
                .t-menuburger_fourth.t-menuburger-opened span:nth-child(3) {
                  opacity: 1;
                }
                /*---menu burger animations---*/
                @keyframes t-menuburger-anim {
                  0% {
                    width: 80%;
                    left: 20%;
                    right: 0;
                  }
                  50% {
                    width: 100%;
                    left: 0;
                    right: 0;
                  }
                  100% {
                    width: 80%;
                    left: 0;
                    right: 20%;
                  }
                }
                @keyframes t-menuburger-anim2 {
                  0% {
                    width: 80%;
                    left: 0;
                  }
                  50% {
                    width: 100%;
                    right: 0;
                    left: 0;
                  }
                  100% {
                    width: 80%;
                    left: 20%;
                    right: 0;
                  }
                }
              </style>
            </div>
          </div>
          <style>
            .tmenu-mobile {
              background-color: #111;
              display: none;
              width: 100%;
              top: 0;
              z-index: 990;
            }
            .tmenu-mobile_positionfixed {
              position: fixed;
            }
            .tmenu-mobile__text {
              color: #fff;
            }
            .tmenu-mobile__container {
              min-height: 64px;
              padding: 20px;
              position: relative;
              box-sizing: border-box;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-align-items: center;
              -ms-flex-align: center;
              align-items: center;
              -webkit-justify-content: space-between;
              -ms-flex-pack: justify;
              justify-content: space-between;
            }
            .tmenu-mobile__list {
              display: block;
            }
            .tmenu-mobile__burgerlogo {
              display: inline-block;
              font-size: 24px;
              font-weight: 400;
              white-space: nowrap;
              vertical-align: middle;
            }
            .tmenu-mobile__imglogo {
              height: auto;
              display: block;
              max-width: 300px !important;
              box-sizing: border-box;
              padding: 0;
              margin: 0 auto;
            }
            @media screen and (max-width: 980px) {
              .tmenu-mobile__menucontent_hidden {
                display: none;
                height: 100%;
              }
              .tmenu-mobile {
                display: block;
              }
            }
            @media screen and (max-width: 980px) {
              #rec748905478 .tmenu-mobile {
                background-color: #ffffff;
              }
              #rec748905478 .t-menuburger {
                -webkit-order: 1;
                -ms-flex-order: 1;
                order: 1;
              }
            }
          </style>
          <div
            id="nav748905478"
            class="t228 t228__positionstatic tmenu-mobile__menucontent_hidden"
            style="height: 100px"
            data-bgcolor-hex=""
            data-bgcolor-rgba=""
            data-navmarker="nav748905478marker"
            data-appearoffset=""
            data-bgopacity-two="100"
            data-menushadow=""
            data-menushadow-css=""
            data-bgopacity="0.0"
            data-bgcolor-rgba-afterscroll=""
            data-menu-items-align="center"
            data-menu="yes"
          >
            <div class="t228__maincontainer" style="height: 100px">
              <div class="t228__padding40px"></div>
              <div class="t228__leftside">
                <div class="t228__leftcontainer">
                  <a href="{{route('frontend.index')}}" class="t228__imgwrapper"
                    ><img
                      class="t228__imglogo t228__imglogomobile"
                      src="{{asset('assets/frontend/tild6238-3031-4265-a564-343037346231/tic_logo_blue.png')}}"
                      imgfield="img"
                      style="
                        max-width: 150px;
                        width: 150px;
                        min-width: 150px;
                        height: auto;
                        display: block;
                      "
                      alt=""
                  /></a>
                </div>
              </div>
              <div class="t228__centerside">
                <nav class="t228__centercontainer">
                  <ul
                    role="list"
                    class="t228__list t-menu__list t228__list_hidden"
                  >
                    <li class="t228__list_item" style="padding: 0 30px 0 0">
                      <a
                        class="t-menu__link-item"
                        href=""
                        aria-expanded="false"
                        role="button"
                        data-menu-submenu-hook="link_sub1_748905478"
                        data-menu-item-number="1"
                        >О компании</a
                      >
                      <div
                        class="t-menusub"
                        data-submenu-hook="link_sub1_748905478"
                        data-submenu-margin="15px"
                        data-add-submenu-arrow=""
                      >
                        <div class="t-menusub__menu">
                          <div class="t-menusub__content">
                            <ul role="list" class="t-menusub__list">
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="error.html"
                                  data-menu-item-number="1"
                                  >Об обществе</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="error.html"
                                  data-menu-item-number="1"
                                  >Миссия</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.ustav')}}"
                                  data-menu-item-number="1"
                                  >Устав компании</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.struktura')}}"
                                  data-menu-item-number="1"
                                  >Организационная структура</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.supervisory_board')}}"
                                  data-menu-item-number="1"
                                  >Наблюдательный совет</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.board')}}"
                                  data-menu-item-number="1"
                                  >Правление</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="error.html"
                                  data-menu-item-number="1"
                                  >Фонд Развития</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="./error.html"
                                  data-menu-item-number="1"
                                  >Внутренние документы</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="error.html"
                                  data-menu-item-number="1"
                                  >Существенные факты</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.decision')}}"
                                  data-menu-item-number="1"
                                  >Решение о первичном выпуске акций</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.reports')}}"
                                  data-menu-item-number="1"
                                  >Отчеты</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.spisok')}}"
                                  data-menu-item-number="1"
                                  >Список аффилированных лиц</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.share_struktura')}}"
                                  data-menu-item-number="1"
                                  >Структура акционерного капитала</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.kodeks')}}"
                                  data-menu-item-number="1"
                                  >Кодекс и правила поведения</a
                                >
                              </li>
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="error.html"
                                  data-menu-item-number="1"
                                  >Приоритетные направления деятельности
                                  Компании</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="t228__list_item" style="padding: 0 30px">
                      <a
                        class="t-menu__link-item"
                        href=""
                        aria-expanded="false"
                        role="button"
                        data-menu-submenu-hook="link_sub2_748905478"
                        data-menu-item-number="2"
                        >Инвесторам</a
                      >
                      <div
                        class="t-menusub"
                        data-submenu-hook="link_sub2_748905478"
                        data-submenu-margin="15px"
                        data-add-submenu-arrow=""
                      >
                        <div class="t-menusub__menu">
                          <div class="t-menusub__content">
                            <ul role="list" class="t-menusub__list">
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.investoram')}}"
                                  data-menu-item-number="2"
                                  >Строительные инвестиционные проекты</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="t228__list_item" style="padding: 0 30px">
                      <a
                        class="t-menu__link-item"
                        href=""
                        data-menu-submenu-hook=""
                        data-menu-item-number="3"
                        >Бизнесу</a
                      >
                    </li>
                    <li class="t228__list_item" style="padding: 0 30px">
                      <a
                        class="t-menu__link-item"
                        href="{{route('frontend.zakupki')}}"
                        data-menu-submenu-hook=""
                        data-menu-item-number="4"
                        >Закупки</a
                      >
                    </li>
                    <li class="t228__list_item" style="padding: 0 30px">
                      <a
                        class="t-menu__link-item"
                        href=""
                        aria-expanded="false"
                        role="button"
                        data-menu-submenu-hook="link_sub5_748905478"
                        data-menu-item-number="5"
                        >Медиа-центр</a
                      >
                      <div
                        class="t-menusub"
                        data-submenu-hook="link_sub5_748905478"
                        data-submenu-margin="15px"
                        data-add-submenu-arrow=""
                      >
                        <div class="t-menusub__menu">
                          <div class="t-menusub__content">
                            <ul role="list" class="t-menusub__list">
                              <li class="t-menusub__list-item t-name t-name_xs">
                                <a
                                  class="t-menusub__link-item t-name t-name_xs"
                                  href="{{route('frontend.media')}}"
                                  data-menu-item-number="5"
                                  >Новости компании</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="t228__list_item" style="padding: 0 0 0 30px">
                      <a
                        class="t-menu__link-item"
                        href="{{route('frontend.contact')}}"
                        data-menu-submenu-hook=""
                        data-menu-item-number="6"
                        >Контакты</a
                      >
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="t228__rightside">
                <div class="t228__rightcontainer">
                  <div class="t228__right_langs">
                    <div class="t228__right_buttons_wrap">
                      {{-- <div class="t228__right_langs_lang">
                        <a style="opacity: 0.5" href="">En</a>
                      </div> --}}
                      <div class="t228__right_langs_lang">
                        <a style="opacity: 0.5" href="">Uz</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="t228__padding40px"></div>
            </div>
          </div>
          <style>
            @media screen and (max-width: 980px) {
              #rec748905478 .t228__leftcontainer {
                display: none;
              }
            }</style
          ><style>
            @media screen and (max-width: 980px) {
              #rec748905478 .t228__leftcontainer {
                padding: 20px;
              }
              #rec748905478 .t228__imglogo {
                padding: 20px 0;
              }
              #rec748905478 .t228 {
                position: static;
              }
            }
          </style>
          <script>
            window.addEventListener("load", function () {
              t_onFuncLoad("t228_setWidth", function () {
                t228_setWidth("748905478");
              });
            });
            window.addEventListener(
              "resize",
              t_throttle(function () {
                t_onFuncLoad("t228_setWidth", function () {
                  t228_setWidth("748905478");
                });
                t_onFuncLoad("t_menu__setBGcolor", function () {
                  t_menu__setBGcolor("748905478", ".t228");
                });
              })
            );
            t_onReady(function () {
              t_onFuncLoad("t_menu__highlightActiveLinks", function () {
                t_menu__highlightActiveLinks(".t228__list_item a");
              });
              t_onFuncLoad("t228__init", function () {
                t228__init("748905478");
              });
              t_onFuncLoad("t_menu__setBGcolor", function () {
                t_menu__setBGcolor("748905478", ".t228");
              });
              t_onFuncLoad("t_menu__interactFromKeyboard", function () {
                t_menu__interactFromKeyboard("748905478");
              });
              t_onFuncLoad("t228_setWidth", function () {
                t228_setWidth("748905478");
              });
              t_onFuncLoad("t_menu__createMobileMenu", function () {
                t_menu__createMobileMenu("748905478", ".t228");
              });
            });
          </script>
          <style>
            #rec748905478 .t-menu__link-item {
            }
            @supports (overflow: -webkit-marquee) and (justify-content: inherit) {
              #rec748905478 .t-menu__link-item,
              #rec748905478 .t-menu__link-item.t-active {
                opacity: 1 !important;
              }
            }
          </style>
          <script>
            t_onReady(function () {
              setTimeout(function () {
                t_onFuncLoad("t_menusub_init", function () {
                  t_menusub_init("748905478");
                });
              }, 500);
            });
          </script>
          <style>
            #rec748905478 .t-menusub__link-item {
              -webkit-transition: color 0.3s ease-in-out,
                opacity 0.3s ease-in-out;
              transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
            }
            #rec748905478 .t-menusub__link-item.t-active {
              color: #193d88 !important;
            }
            #rec748905478
              .t-menusub__link-item:not(.t-active):not(.tooltipstered):hover {
              color: #193d88 !important;
            }
            @supports (overflow: -webkit-marquee) and (justify-content: inherit) {
              #rec748905478 .t-menusub__link-item,
              #rec748905478 .t-menusub__link-item.t-active {
                opacity: 1 !important;
              }
            }
            @media screen and (max-width: 980px) {
              #rec748905478 .t-menusub__menu .t-menusub__link-item {
                color: #000000 !important;
              }
              #rec748905478 .t-menusub__menu .t-menusub__link-item.t-active {
                color: #193d88 !important;
              }
            }
            @media screen and (min-width: 981px) {
              #rec748905478 .t-menusub__menu {
                text-align: left;
              }
            }</style
          ><style>
            #rec748905478 a.t-menusub__link-item {
              font-size: 10px;
              text-transform: uppercase;
            }</style
          ><style>
            #rec748905478 a.t-menu__link-item {
              font-size: 14px;
              color: #000000;
              font-weight: 700;
              text-transform: uppercase;
            }
            #rec748905478 .t228__right_langs_lang a {
              font-size: 14px;
              color: #000000;
              font-weight: 700;
              text-transform: uppercase;
            }
          </style>
        </div>
@endif