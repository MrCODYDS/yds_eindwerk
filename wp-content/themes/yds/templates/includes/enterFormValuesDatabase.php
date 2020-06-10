<?php

    include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

    global $current_user;
    get_currentuserinfo();
    global $wpdb;

    $choice = $_POST['final-choice'];
    $people = $_POST['final-people'];
    $ground = $_POST['final-ground'];
    $date = $_POST['final-date'];
    $session = $_POST['sessions'];
    $userId = $current_user->ID;

    // Check which session is chosen and add length to database
    switch($session) {
        case 1:
            $timeslot = $_POST['radioTimeslots'];
        break;
        case 2:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . "," . ($value+1);
        break;
        case 3:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . "," . ($value+1) . "," . ($value+2);
        break;
        case 4:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . "," . ($value+1) . "," . ($value+2) . "," . ($value+3);
        break;
    }

    $table = $wpdb->prefix . "user_reservations";
    
    $success=$wpdb->insert($table, array(
        "user_id" => $userId,
        "reservation_choice" => $choice,
        "reservation_date" => $date,
        "reservation_ground" => $ground,
        "reservation_time" => $timeslot,
        "reservation_people" => $people
    ));

    // Fill timeslot value in again to show in mail
    switch($session) {
        case 1:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . ":00 - " . ($value+1) . ":00";
        break;
        case 2:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . ":00 - " . ($value+2) . ":00";
        break;
        case 3:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . ":00 - " . ($value+3) . ":00";
        break;
        case 4:
            $value = $_POST['radioTimeslots'];
            $timeslot = $value . ":00 - " . ($value+4) . ":00";
        break;
    }
    

    $to = $current_user->user_email;
    $subject = "Sporezo - Je registratie is voltooid!";
    

    $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html style="width:100%;font-family:raleway, oxygen, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
        <head> 
        <meta charset="UTF-8"> 
        <meta content="width=device-width, initial-scale=1" name="viewport"> 
        <meta name="x-apple-disable-message-reformatting"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta content="telephone=no" name="format-detection"> 
        <title>Sporezo</title> 
        <!--[if (mso 16)]>
            <style type="text/css">
            a {text-decoration: none;}
            </style>
            <![endif]--> 
        <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
        <!--[if !mso]><!-- --> 
        <link href="https://fonts.googleapis.com/css2?family=Oxygen&family=Raleway:wght@400;600;700&display=swap" rel="stylesheet"> 
        <!--<![endif]--> 
        <style type="text/css">
        @media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:30px!important } h2 a { font-size:26px!important } h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button { font-size:20px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } .es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
        #outlook a {
            padding:0;
        }
        .ExternalClass {
            width:100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height:100%;
        }
        .es-button {
            mso-style-priority:100!important;
            text-decoration:none!important;
        }
        a[x-apple-data-detectors] {
            color:inherit!important;
            text-decoration:none!important;
            font-size:inherit!important;
            font-family:inherit!important;
            font-weight:inherit!important;
            line-height:inherit!important;
        }
        .es-desk-hidden {
            display:none;
            float:left;
            overflow:hidden;
            width:0;
            max-height:0;
            line-height:0;
            mso-hide:all;
        }
        </style> 
        </head> 
        <body style="width:100%;font-family:raleway, oxygen, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> 
        <div class="es-wrapper-color" style="background-color:#F4F4F4;"> 
        <!--[if gte mso 9]>
                    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                        <v:fill type="tile" color="#f4f4f4"></v:fill>
                    </v:background>
                <![endif]--> 
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;"> 
            <tr class="gmail-fix" height="0" style="border-collapse:collapse;"> 
            <td style="padding:0;Margin:0;"> 
            <table width="600" cellspacing="0" cellpadding="0" border="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                <tr style="border-collapse:collapse;"> 
                <td cellpadding="0" cellspacing="0" border="0" style="padding:0;Margin:0;line-height:1px;min-width:600px;" height="0"><img src style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;max-height:0px;min-height:0px;min-width:600px;width:600px;" alt width="600" height="1"></td> 
                </tr> 
            </table></td> 
            </tr> 
            <tr style="border-collapse:collapse;"> 
            <td valign="top" style="padding:0;Margin:0;"> 
            <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#FFA73B;background-repeat:repeat;background-position:center top;"> 
                <tr style="border-collapse:collapse;"> 
                <td align="center" style="padding:0;Margin:0;background-color:#2660C3;" bgcolor="#2660c3"> 
                <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;"> 
                    <tr style="border-collapse:collapse;"> 
                    <td align="left" style="Margin:0;padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;"> 
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                        <tr style="border-collapse:collapse;"> 
                        <td width="580" valign="top" align="center" style="padding:0;Margin:0;"> 
                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                            <tr style="border-collapse:collapse;"> 
                            <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:25px;padding-bottom:25px;font-size:0px;"><a href="https://eindwerk.1819.yarne.desmet.nxtmediatech.eu/" target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:raleway, oxygen, arial, sans-serif;font-size:14px;text-decoration:underline;color:#111111;"><img src="https://eindwerk.1819.yarne.desmet.nxtmediatech.eu/wp-content/uploads/2020/06/sporezo-logo-white.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;" width="250"></a></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table> 
            <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
                <tr style="border-collapse:collapse;"> 
                <td style="padding:0;Margin:0;background-color:#2660C3;" bgcolor="#2660c3" align="center"> 
                <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center"> 
                    <tr style="border-collapse:collapse;"> 
                    <td align="left" style="padding:0;Margin:0;"> 
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                        <tr style="border-collapse:collapse;"> 
                        <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
                        <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#FFFFFF;border-radius:4px;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff" role="presentation"> 
                            <tr style="border-collapse:collapse;"> 
                            <td align="center" style="Margin:0;padding-bottom:5px;padding-left:30px;padding-right:30px;padding-top:35px;"><h1 style="Margin:0;line-height:34px;mso-line-height-rule:exactly;font-family:oxygen, arial, sans-serif;font-size:28px;font-style:normal;font-weight:normal;color:#000000;">Uw reservatie is voltooid!</h1></td> 
                            </tr> 
                            <tr style="border-collapse:collapse;"> 
                            <td bgcolor="#ffffff" align="center" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;font-size:0;"> 
                            <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                <tr style="border-collapse:collapse;"> 
                                <td style="padding:0;Margin:0px;border-bottom:1px solid #FFFFFF;background:#FFFFFFnone repeat scroll 0% 0%;height:1px;width:100%;margin:0px;"></td> 
                                </tr> 
                            </table></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table> 
            <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
                <tr style="border-collapse:collapse;"> 
                <td align="center" style="padding:0;Margin:0;"> 
                <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center"> 
                    <tr style="border-collapse:collapse;"> 
                    <td align="left" style="padding:0;Margin:0;"> 
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                        <tr style="border-collapse:collapse;"> 
                        <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
                        <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:4px;background-color:#FFFFFF;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff" role="presentation">  
                            <tr style="border-collapse:collapse;"> 
                            <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:30px;padding-right:30px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:raleway, oxygen, arial, sans-serif;line-height:27px;color:#666666;">Hi ' . $current_user->user_login . ', je reservatie is voltooid. Hieronder vind meer gegevens terug.</p></td> 
                            </tr> 
                            <tr style="border-collapse:collapse;"> 
                            <td style="padding:0;Margin:0;"> 
                            <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;" role="presentation"> 
                                <tr style="border-collapse:collapse;"> 
                                <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:30px;padding-right:30px;"> 
                                <table class="info-table" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;text-align:left;font-family:raleway, oxygen, arial, sans-serif;font-size:14px;" role="presentation"> 
                                    <thead style="background:#2660c3;border-bottom:3px solid #000000;"> 
                                    <tr style="border-collapse:collapse;"> 
                                    <th style="border:1px solid #000000;padding:8px 10px;font-size:14px;font-weight:bold;color:#ffffff;text-align:left;">Keuze</th> 
                                    <th style="border:1px solid #000000;padding:8px 10px;font-size:14px;font-weight:bold;color:#ffffff;text-align:left;">Datum</th> 
                                    <th style="border:1px solid #000000;padding:8px 10px;font-size:14px;font-weight:bold;color:#ffffff;text-align:left;">Speelveld</th> 
                                    <th style="border:1px solid #000000;padding:8px 10px;font-size:14px;font-weight:bold;color:#ffffff;text-align:left;">Tijd</th> 
                                    <th style="border:1px solid #000000;padding:8px 10px;font-size:14px;font-weight:bold;color:#ffffff;text-align:left;">Aantal personen</th> 
                                    </tr> 
                                    </thead> 
                                    <tr style="border-collapse:collapse;"> 
                                    <td style="padding:8px 10px;Margin:0;border:1px solid #000000;font-size:14px;">' . $choice . '</td> 
                                    <td style="padding:8px 10px;Margin:0;border:1px solid #000000;font-size:14px;">' . $date . '</td> 
                                    <td style="padding:8px 10px;Margin:0;border:1px solid #000000;font-size:14px;">' . $ground . '</td> 
                                    <td style="padding:8px 10px;Margin:0;border:1px solid #000000;font-size:14px;">' . $timeslot . '</td> 
                                    <td style="padding:8px 10px;Margin:0;border:1px solid #000000;font-size:14px;">' . $people . '</td> 
                                    </tr> 
                                    <tr style="border-collapse:collapse;"></tr> 
                                </table></td> 
                                </tr> 
                            </table></td> 
                            </tr>
                            <tr style="border-collapse:collapse;"> 
                            <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:30px;padding-right:30px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:raleway, oxygen, arial, sans-serif;line-height:27px;color:#666666;">Bekijk al jouw reservaties via onderstaande knop!</p></td> 
                            </tr> 
                            <tr style="border-collapse:collapse;"> 
                            <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:35px;padding-bottom:35px;"><span class="es-button-border" style="border-style:solid;border-color:#FFA73B;background:#2660C3;border-width:0px;display:inline-block;border-radius:8px;width:auto;"><a href="https://eindwerk.1819.yarne.desmet.nxtmediatech.eu/profiel" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:raleway, arial, verdana, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#2660C3;border-width:15px 30px;display:inline-block;background:#2660C3;border-radius:8px;font-weight:normal;font-style:normal;line-height:24px;width:auto;text-align:center;">Mijn reservaties</a></span></td> 
                            </tr> 
                            <tr style="border-collapse:collapse;"> 
                            <td class="es-m-txt-l" align="left" style="Margin:0;padding-top:20px;padding-left:30px;padding-right:30px;padding-bottom:40px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:raleway, oxygen, arial, sans-serif;line-height:27px;color:#666666;">Cheers,</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:raleway, oxygen, arial, sans-serif;line-height:27px;color:#666666;">Het Sporezo Team</p></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table> 
            <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
                <tr style="border-collapse:collapse;"> 
                <td align="center" style="padding:0;Margin:0;"> 
                <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center"> 
                    <tr style="border-collapse:collapse;"> 
                    <td align="left" style="padding:0;Margin:0;"> 
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                        <tr style="border-collapse:collapse;"> 
                        <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                            <tr style="border-collapse:collapse;"> 
                            <td align="center" style="Margin:0;padding-top:10px;padding-bottom:20px;padding-left:20px;padding-right:20px;font-size:0;"> 
                            <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                <tr style="border-collapse:collapse;"> 
                                <td style="padding:0;Margin:0px;border-bottom:1px solid #F4F4F4;background:#FFFFFFnone repeat scroll 0% 0%;height:1px;width:100%;margin:0px;"></td> 
                                </tr> 
                            </table></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table> 
            <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
                <tr style="border-collapse:collapse;"> 
                <td align="center" style="padding:0;Margin:0;"> 
                <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center"> 
                    <tr style="border-collapse:collapse;"> 
                    <td align="left" style="padding:0;Margin:0;"> 
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                        <tr style="border-collapse:collapse;"> 
                        <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
                        <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#2660C3;border-radius:4px;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#2660c3" role="presentation"> 
                            <tr style="border-collapse:collapse;"> 
                            <td align="center" style="padding:0;Margin:0;padding-top:30px;padding-left:30px;padding-right:30px;"><h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:oxygen, arial, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#FFFFFF;">Vragen?</h3></td> 
                            </tr> 
                            <tr style="border-collapse:collapse;"> 
                            <td esdev-links-color="#ffa73b" align="center" style="padding:0;Margin:0;padding-bottom:30px;padding-left:30px;padding-right:30px;"><a target="_blank" href="https://eindwerk.1819.yarne.desmet.nxtmediatech.eu/contact" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:raleway, oxygen, arial, sans-serif;font-size:18px;text-decoration:underline;color:#FFFFFF;">Neem contact met ons op</a></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table> 
            <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
                <tr style="border-collapse:collapse;"> 
                <td align="center" style="padding:0;Margin:0;"> 
                <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center"> 
                    <tr style="border-collapse:collapse;"> 
                    <td align="left" style="Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px;"> 
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                        <tr style="border-collapse:collapse;"> 
                        <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> 
                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                            <tr style="border-collapse:collapse;"> 
                            <td class="es-infoblock made_with" align="center" style="padding:0;Margin:0;line-height:0px;font-size:0px;color:#CCCCCC;"><a target="_blank" href="https://eindwerk.1819.yarne.desmet.nxtmediatech.eu/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:raleway, oxygen, arial, sans-serif;font-size:12px;text-decoration:underline;color:#CCCCCC;"><img src="https://eindwerk.1819.yarne.desmet.nxtmediatech.eu/wp-content/uploads/2020/06/sporezo-logo-normal.png" alt width="125" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"></a></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table></td> 
            </tr> 
        </table> 
        </div>  
        </body>
        </html>'
    ;

    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: Sporezo <info.sporezo@gmail.com
    >' . "\r\n";

    // send email
    wp_mail($to, $subject, $message, $headers);

    //header('Location: /reserveren');
?>