<!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:700,800|Poppins&display=swap&subset=latin-ext');

        * {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            font-family: 'Poppins', sans-serif !important;
            font-weight: 400;
            color: #4b4b4b;
            line-height: 1.5;
        }

        p {
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 12px;
            line-height: 2;
        }

        strong {
            font-weight: 700;
            font-family: 'Open Sans', sans-serif !important;
        }

        /* Outlook link fix */
        #outlook a {
            padding:0;
        }
        /* Hotmail background & line height fixes */
        .ExternalClass {
            width:100% !important;
        }
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font,
        .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }
        .paddingWidth{
            padding-left: 40px;
            padding-right: 40px;
        }
        /* Image borders & formatting */
        img {
            outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;
        }
        a img {
            border:none;
        }
        /* Hotmail symbol fix for mobile devices */
        .ExternalClass img[class^=Emoji] {
            width: 10px !important; height: 10px !important; display: inline !important;
        }
        /* iPhone Minimum Font Size Fix */
        div, p, a, li, td {
            -webkit-text-size-adjust:none;
            -ms-text-size-adjust:100%;
        }
        a {
            color: #aa2525;
            text-decoration: underline;
        }
        /* Remove Blue Links on Apple Devices */
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration:none !important;
            font-size:inherit !important;
            font-family:inherit !important;
            font-weight:inherit !important;
            line-height:inherit !important;
        }
        /* Responsive styles */
        @media only screen and (max-width: 480px) {
            img{
                max-width: 100% !important;
                height: auto !important;
            }
        }

        .social a{
            margin-left: 5px;
            margin-right: 5px;
        }

        .displayScreen{
            display: table;
        }
        .displayMobile{
            display: none;
        }
        @media only screen and (max-width: 600px) {
            *.gmail-fix { display: none !important;}
        }
        td {
            padding: 0;
            border: 0;
        }
    </style>

    <style type="text/css">
        /* Responsive styles */
        @media only screen and (max-width: 480px) {
            body {
                width: 100% !important;
                min-width: 100% !important;
            }
            [id="emailContainer"] {
                width: 100% !important;
            }
            table.deviceWidth,
            td.deviceWidth,
            img.deviceWidth {
                width: 100% !important;
                padding: 0 !important;
            }
            .paddingWidth{
                padding-left: 20px;
                padding-right: 20px;
            }
            img {
                max-width: 100% !important;
                height: auto !important;
            }

            .displayScreen{
                display: none;
            }
            .displayMobile{
                display: table;
            }

        }
    </style>

    <meta name="x-apple-disable-message-reformatting">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="{!! URL::to('/assets/images/favicon/apple-touch-icon-120x120.png') !!}">
    <link rel="icon" href="{!! URL::to('/assets/images/favicon/apple-touch-icon-120x120.png') !!}" type="image/x-icon">
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background: #F8F8F8; padding:0; margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:100%;">
    <tr>
        <td align="center" style="padding: 20px 0;">
            <table class="deviceWidth" border="0" cellpadding="0" cellspacing="0" id="emailContainer" width="600">
                <tr>
                    <!-- Start main table cell -->
                    <td align="center" bgcolor="#ffffff">
                        <table width="480" style="width: 480px; margin-right: auto; margin-left: auto;">
                            <tr>
                                <td>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100% !important; padding: 45px 0 30px 0;">
                                        <tr>
                                            <td width="100%" style="display:none; visibility:hidden;opacity:0;color:transparent;height:0;width:0;line-height:0;overflow:hidden;"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%">
                                                <table align="center" cellpadding="0" cellspacing="0" border="0" width="200" style="width: 100% !important">
                                                    <tr>
                                                        <td style="text-align: center">
                                                            <img src="{{ url('/assets/images/logo.svg') }}" alt="MASSAQ" style="max-width: 100%;">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100% !important;">
                                        <tr>
                                            <td width="100%" style="display:none; visibility:hidden;opacity:0;color:transparent;height:0;width:0;line-height:0;overflow:hidden;"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
                                                    @foreach($data as $key => $value)
                                                        @if($value)
                                                            <tr>
                                                                <td style="padding-bottom: 10px; text-align: left; font-size: 16px; font-weight: 700; width: 120px; padding-right: 15px;">{!! \Lang::has('emails.fields.' . $key) ? __('emails.fields.' . $key) : $key !!}:</td>
                                                                <td style="padding-bottom: 10px; text-align: left; font-size: 16px">{!! $value !!}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100% !important;">
                                        <tr>
                                            <td width="100%" style="display:none; visibility:hidden;opacity:0;color:transparent;height:0;width:0;line-height:0;overflow:hidden;"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
                                                    <tr>
                                                        <td style="padding-bottom: 10px; padding-top: 20px;">
                                                            <table style="width: 100% !important;">
                                                                <tr>
                                                                    <td style="text-align: left; font-size: 12px">--------------------</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-bottom: 40px;">
                                                            <table style="width: 100% !important;">
                                                                <tr>
                                                                    <td style="text-align: left; font-size: 12px">{!! __('emails.copy') !!}</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
