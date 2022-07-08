module.exports = ({ qr, text, receiptId }) => {
    const today = new Date();
    return `
    <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDF Result Template</title>
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica',
            color: #555;
        }
        .margin-top {
            margin-top: 50px;
        }
        .justify-center {
            text-align: center;
        }
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div class="invoice-box">
    ${text}
    <!--             <img src="./1/1.svg">-->
    <svg viewBox="0 0 1624 1255" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <clipPath id="c0_1"><path d="M0,1255.8V0H1624V1255.8Z"/></clipPath>
        </defs>
        <g clip-path="url(#c0_1)">
            <image preserveAspectRatio="none" x="860" y="102" width="66" height="66" xlink:href="1/img/1.jpg"/>
            <g clip-path="url(#c0_1)">
                <image preserveAspectRatio="none" x="926" y="102" width="66" height="66" xlink:href="1/img/2.jpg"/>
                <image preserveAspectRatio="none" x="992" y="102" width="65" height="66" xlink:href="1/img/3.jpg"/>
                <image preserveAspectRatio="none" x="1057" y="102" width="66" height="66" xlink:href="1/img/4.jpg"/>
                <image preserveAspectRatio="none" x="1123" y="102" width="66" height="66" xlink:href="1/img/5.jpg"/>
                <image preserveAspectRatio="none" x="1189" y="102" width="65" height="66" xlink:href="1/img/6.jpg"/>
                <image preserveAspectRatio="none" x="1254" y="102" width="66" height="66" xlink:href="1/img/7.jpg"/>
                <image preserveAspectRatio="none" x="1320" y="102" width="66" height="66" xlink:href="1/img/8.jpg"/>
                <image preserveAspectRatio="none" x="1386" y="102" width="65" height="66" xlink:href="1/img/9.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="102" width="66" height="66" xlink:href="1/img/10.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="168" width="66" height="66" xlink:href="1/img/11.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="234" width="66" height="65" xlink:href="1/img/12.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="299" width="66" height="66" xlink:href="1/img/13.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="365" width="66" height="66" xlink:href="1/img/14.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="431" width="66" height="66" xlink:href="1/img/15.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="497" width="66" height="65" xlink:href="1/img/16.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="562" width="66" height="66" xlink:href="1/img/17.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="628" width="66" height="66" xlink:href="1/img/18.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="694" width="66" height="65" xlink:href="1/img/19.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="759" width="66" height="66" xlink:href="1/img/20.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="825" width="66" height="66" xlink:href="1/img/21.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="891" width="66" height="65" xlink:href="1/img/22.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="956" width="66" height="66" xlink:href="1/img/23.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="1022" width="66" height="66" xlink:href="1/img/24.jpg"/>
                <image preserveAspectRatio="none" x="1451" y="1088" width="66" height="65" xlink:href="1/img/25.jpg"/>
                <image preserveAspectRatio="none" x="1386" y="1088" width="65" height="65" xlink:href="1/img/26.jpg"/>
                <image preserveAspectRatio="none" x="1320" y="1088" width="66" height="65" xlink:href="1/img/27.jpg"/>
                <image preserveAspectRatio="none" x="1254" y="1088" width="66" height="65" xlink:href="1/img/28.jpg"/>
                <image preserveAspectRatio="none" x="1189" y="1088" width="65" height="65" xlink:href="1/img/29.jpg"/>
                <image preserveAspectRatio="none" x="1123" y="1088" width="66" height="65" xlink:href="1/img/30.jpg"/>
                <image preserveAspectRatio="none" x="1057" y="1088" width="66" height="65" xlink:href="1/img/31.jpg"/>
                <image preserveAspectRatio="none" x="992" y="1088" width="65" height="65" xlink:href="1/img/32.jpg"/>
                <image preserveAspectRatio="none" x="926" y="1088" width="66" height="65" xlink:href="1/img/33.jpg"/>
                <image preserveAspectRatio="none" x="860" y="1088" width="66" height="65" xlink:href="1/img/34.jpg"/>
                <image preserveAspectRatio="none" x="794" y="1088" width="66" height="65" xlink:href="1/img/35.jpg"/>
                <image preserveAspectRatio="none" x="729" y="1088" width="65" height="65" xlink:href="1/img/36.jpg"/>
                <image preserveAspectRatio="none" x="663" y="1088" width="66" height="65" xlink:href="1/img/37.jpg"/>
                <image preserveAspectRatio="none" x="597" y="1088" width="66" height="65" xlink:href="1/img/38.jpg"/>
                <image preserveAspectRatio="none" x="532" y="1088" width="65" height="65" xlink:href="1/img/39.jpg"/>
                <image preserveAspectRatio="none" x="466" y="1088" width="66" height="65" xlink:href="1/img/40.jpg"/>
                <image preserveAspectRatio="none" x="400" y="1088" width="66" height="65" xlink:href="1/img/41.jpg"/>
                <image preserveAspectRatio="none" x="335" y="1088" width="65" height="65" xlink:href="1/img/42.jpg"/>
                <image preserveAspectRatio="none" x="269" y="1088" width="66" height="65" xlink:href="1/img/43.jpg"/>
                <image preserveAspectRatio="none" x="203" y="1088" width="66" height="65" xlink:href="1/img/44.jpg"/>
                <image preserveAspectRatio="none" x="203" y="1022" width="66" height="66" xlink:href="1/img/45.jpg"/>
                <image preserveAspectRatio="none" x="203" y="956" width="66" height="66" xlink:href="1/mg/46.jpg"/>
                <image preserveAspectRatio="none" x="203" y="891" width="66" height="65" xlink:href="1/img/47.jpg"/>
                <image preserveAspectRatio="none" x="203" y="825" width="66" height="66" xlink:href="1/img/48.jpg"/>
                <image preserveAspectRatio="none" x="203" y="759" width="66" height="66" xlink:href="1/img/49.jpg"/>
                <image preserveAspectRatio="none" x="203" y="694" width="66" height="65" xlink:href="1/img/50.jpg"/>
                <image preserveAspectRatio="none" x="203" y="628" width="66" height="66" xlink:href="1/img/51.jpg"/>
                <image preserveAspectRatio="none" x="203" y="562" width="66" height="66" xlink:href="1/img/52.jpg"/>
                <image preserveAspectRatio="none" x="203" y="497" width="66" height="65" xlink:href="1/img/53.jpg"/>
                <image preserveAspectRatio="none" x="203" y="431" width="66" height="66" xlink:href="1/img/54.jpg"/>
                <image preserveAspectRatio="none" x="203" y="365" width="66" height="66" xlink:href="1/img/55.jpg"/>
                <image preserveAspectRatio="none" x="203" y="299" width="66" height="66" xlink:href="1/img/56.jpg"/>
                <image preserveAspectRatio="none" x="203" y="234" width="66" height="65" xlink:href="1/img/57.jpg"/>
                <image preserveAspectRatio="none" x="203" y="168" width="66" height="66" xlink:href="1/img/58.jpg"/>
                <image preserveAspectRatio="none" x="203" y="102" width="66" height="66" xlink:href="1/img/59.jpg"/>
                <image preserveAspectRatio="none" x="269" y="102" width="66" height="66" xlink:href="1/img/60.jpg"/>
                <image preserveAspectRatio="none" x="335" y="102" width="65" height="66" xlink:href="1/img/61.jpg"/>
                <image preserveAspectRatio="none" x="400" y="102" width="66" height="66" xlink:href="1/img/62.jpg"/>
                <image preserveAspectRatio="none" x="466" y="102" width="66" height="66" xlink:href="1/img/63.jpg"/>
                <image preserveAspectRatio="none" x="532" y="102" width="65" height="66" xlink:href="1/img/64.jpg"/>
                <image preserveAspectRatio="none" x="597" y="102" width="66" height="66" xlink:href="1/img/65.jpg"/>
                <image preserveAspectRatio="none" x="663" y="102" width="66" height="66" xlink:href="1/img/66.jpg"/>
                <image preserveAspectRatio="none" x="729" y="102" width="65" height="66" xlink:href="1/img/67.jpg"/>
                <image preserveAspectRatio="none" x="794" y="102" width="66" height="66" xlink:href="1/img/68.jpg"/>
            </g>
        </g>
    </svg>
</div>
</body>
</html>
    `;
};