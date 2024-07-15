<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/img/master-card.png') }}" sizes="32x32" type="image/png">
    <title>Master-card</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <table style="width: 100%; background-color: #000; padding: 10px; text-align: left;">
            <tr>
                <td style="width: 50px;">
                    <img src={{ asset('assets/img/master-card.png') }} alt="Mastercard Logo" style="height: 30px;">
                </td>
                <td>
                    <h1 style="color: white; font-size: 18px; margin: 0;">ID Theft Protection</h1>
                    <p style="color: white; font-size: 12px; margin: 0;">An Iris Powered by Generali service</p>
                </td>
            </tr>
        </table>
        <div style=" box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
            <div style=" border-radius: 5px; margin-top: 20px;">
                <div style="text-align: center; margin-bottom: 20px; border-bottom: 3px solid #e1eae8;">
                    <img src={{ asset('assets/img/master-card.png') }} alt="Mastercard Logo" style="height: 70px;">
                    <p style="font-size: 24px; color: #4a4a4a; padding-bottom:10px">ID Theft Protection</p>
                </div>

            </div>
            <div style=""><div>
            <div style="padding: 20px; border-radius: 5px; margin-top: 20px;">
                <p style="font-size: 14px; color: #4a4a4a;">
                    Please use the below code to validate your email. This code will be valid for 10 minutes:
                </p>
                <p style="font-size: 24px; font-weight: bold; color: #4a4a4a; text-align: center; margin: 20px 0;">
                    624267
                </p>
                <p style="font-size: 14px; color: #4a4a4a;">
                    If you have any questions or concerns, contact us. We're available to help.The ID Theft Protection Team
                </p>
            </div>
        </div>
    </div>
</body>
</html>
