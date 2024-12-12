@extends('layouts.frontend_app')
@section('frontent_content')
     <!--allrecords-->
     <div
     id="allrecords"
     class="t-records"
     data-hook="blocks-collection-content-node"
     data-tilda-project-id="9433043"
     data-tilda-page-id="48997707"
     data-tilda-page-alias="ru/contacts"
     data-tilda-formskey="44fd03c9779dc2a2069765d219433043"
     data-tilda-cookie="no"
     data-tilda-lazy="yes"
     data-tilda-root-zone="one"
   >
  
     <!--/header-->
     <div
       id="rec748776125"
       class="r t-rec t-rec_pt_0 t-rec_pb_0"
       style="padding-top: 0px; padding-bottom: 0px"
       data-animationappear="off"
       data-record-type="554"
     >
       <!-- T554 -->
       <div class="t554" data-display-changed="true">
         <div
           class="t554__general-wrapper t554__general-wrapper_padding t-width t-width_100 t-margin_auto"
           style="background-color: #193d88"
         >
           <div class="t554__card-wrapper">
             <div
               class="t554__card t-width_5 t-align_left"
               style="background-color: #193d88; top: 100px"
             >
               <div class="t554__title t-heading t-heading_sm" field="title">
                 Контакты
               </div>
               <div class="t-text t-descr_sm" field="text">
                 <div style="font-size: 16px" data-customstyle="yes">
                   <a
                     href="mailto:info@tashkentinvest.com"
                     style="color: rgb(254, 254, 254); font-weight: 500"
                     >info@tashkentinvest.com</a
                   ><br /><br /><span
                     style="color: rgb(254, 254, 254); font-weight: 500"
                     >Узбекистан, город Ташкент, </span
                   ><br /><span
                     style="color: rgb(254, 254, 254); font-weight: 500"
                     >улица Ислама Каримова, 51</span
                   >
                 </div>
               </div>
             </div>
           </div>
           <div
             class="t-map-lazyload t554_map"
             style="width: 100%; height: 100%"
             data-maplazy-load="false"
           >
             <div
               class="t-map"
               id="separateMap748776125"
               data-map-language=""
               data-map-x="-74.005941"
               data-map-y="40.7127837"
               data-map-zoom="16"
               data-map-title="Контакты"
               data-map-mode="bw_light"
               style="width: 100%; position: relative; height: 80vh"
               data-map-style='[{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]'
             ></div>
             <script type="text/javascript">
               var arMapMarkers748776125 = [
                 {
                   title: "Tashkent",
                   descr: "",
                   lat: "41.310425",
                   lng: "69.248169",
                   color: null,
                   url: null,
                   isOpen: false,
                   isHidden: false,
                   offset: null,
                 },
               ];
               t_onReady(function () {
                 t_map_lazyload_add_map();
                 window.addEventListener(
                   "scroll",
                   t_throttle(t_map_lazyload_add_map, 300)
                 );
                 function t_map_lazyload_add_map() {
                   var windowHeight = window.innerHeight;
                   var scrollDiffHeigth = 700;
                   var rec = document.getElementById("rec" + 748776125);
                   if (!rec) return;
                   var map = rec.querySelector(".t-map-lazyload");
                   if (!map) return;
                   var blockTop =
                     map.getBoundingClientRect().top + window.pageYOffset;
                   if (
                     window.pageYOffset >
                     blockTop - windowHeight - scrollDiffHeigth
                   ) {
                     if (map.getAttribute("data-maplazy-load") === "false") {
                       map.setAttribute("data-maplazy-load", "true");
                       t_onFuncLoad("t_appendYandexMap", function () {
                         t_appendYandexMap(
                           "748776125",
                           "a3c154a0-e8ad-438e-ada8-ac2260414d09"
                         );
                       });
                     }
                   }
                 }
               });
             </script>
           </div>
         </div>
       </div>
       <script>
         t_onReady(function () {
           t_onFuncLoad("t554__init", function () {
             t554__init("748776125");
           });
         });
       </script>
       <style>
         #rec748776125 .t554__title {
           color: #ffffff;
         }
       </style>
     </div>
   
   </div>
   <!--/allrecords--><!-- Stat --><!-- Yandex.Metrika counter 97295680 -->
   <script type="text/javascript" data-tilda-cookie-type="analytics">
     setTimeout(function () {
       (function (m, e, t, r, i, k, a) {
         m[i] =
           m[i] ||
           function () {
             (m[i].a = m[i].a || []).push(arguments);
           };
         m[i].l = 1 * new Date();
         (k = e.createElement(t)),
           (a = e.getElementsByTagName(t)[0]),
           (k.async = 1),
           (k.src = r),
           a.parentNode.insertBefore(k, a);
       })(
         window,
         document,
         "script",
         "https://mc.yandex.ru/metrika/tag.js",
         "ym"
       );
       window.mainMetrikaId = "97295680";
       ym(window.mainMetrikaId, "init", {
         clickmap: true,
         trackLinks: true,
         accurateTrackBounce: true,
         webvisor: true,
         ecommerce: "dataLayer",
       });
     }, 2000);
   </script>
   <noscript
     ><div>
       <img
         src="../watch/97295680"
         style="position: absolute; left: -9999px"
         alt=""
       /></div
   ></noscript>
   <!-- /Yandex.Metrika counter -->
   <script type="text/javascript">
     if (!window.mainTracker) {
       window.mainTracker = "tilda";
     }
     window.tildastatcookie = "no";
     setTimeout(function () {
       (function (d, w, k, o, g) {
         var n = d.getElementsByTagName(o)[0],
           s = d.createElement(o),
           f = function () {
             n.parentNode.insertBefore(s, n);
           };
         s.type = "text/javascript";
         s.async = true;
         s.key = k;
         s.id = "tildastatscript";
         s.src = g;
         if (w.opera == "[object Opera]") {
           d.addEventListener("DOMContentLoaded", f, false);
         } else {
           f();
         }
       })(
         document,
         window,
         "0495b384fe8563fa3b2d2d1dd1ce0cc0",
         "script",
         "https://static.tildacdn.one/js/tilda-stat-1.0.min.js"
       );
     }, 2000);
   </script>
@endsection
