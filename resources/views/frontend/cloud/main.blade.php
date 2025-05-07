<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <meta name="description" content="handy-games">
    <meta name="author" content="handy-games">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="cloud-games">
    <meta content="" name="handy-games">
    <meta content="" name="handy-games">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css -->
     <link rel="stylesheet" href="{{ asset('public/anna2/assets/css/style.css')}}" type="text/css" media="all" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.8.3/dist/paper.min.css">
    
    @php
    $setting = App\Models\GeneralSetting::first();
@endphp
    <!-- Favicons -->
    <link href="{{ asset('images/handy_fav.png') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('images/handy_fav.png') }}" rel="apple-touch-icon" type="image/x-icon">
     <link rel="shortcut icon" href="{{ asset('images/handy_fav.png') }}" type="image/x-icon">
    <!-- Title Page-->
    <title>Handy Games</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Icons font CSS-->

    <!-- Font special for pages-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/ua-parser-js/0.7.28/ua-parser.min.js"></script>

    <!-- Vendor CSS-->
    <link href="{{ asset('/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <!-- Main CSS-->
     <script src="{{ asset('/js/app.js') }}" defer></script>
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet" media="all">
      <link href="{{ asset('/css/my.css') }}" rel="stylesheet" media="all">
       <link rel="stylesheet" href="{{ asset('/public/anna2/assets/css/style.css')}}" type="text/css" media="all" />
      {{-- font start --}}
      <link href="https://fonts.cdnfonts.com/css/patrick-hand-sc" rel="stylesheet">
      
      <link href="https://fonts.cdnfonts.com/css/bulughul-marom" rel="stylesheet">
{{-- font end --}}
      <link href="https://fonts.cdnfonts.com/css/bulughul-marom" rel="stylesheet">
<script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <!-- Vendor JS-->
    <script src="{{asset('/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{('/js/global.js')}}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/a26d9146a0.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
    .hidden{
        display:none;
    }
        @media screen and (max-width: 576px) {
          #myVideo {
                position: fixed;
                right: -5%;
                top: 0;
                height: 100vh;
            }
        }
           .input-group.border-custom {
               border:0;
           }
       .input-group.border-custom::after {
                 content:'';
                 height: 2px;
                width: 106px;
                background: #006aff;
        }
        #captcha_image {
                border: 2px solid #136266;

    animation: glowing 1300ms infinite;
        }


    </style>
  <!-- <link rel="stylesheet" href="./style.css"> -->
  <style>
    #stars-group-1 {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 1377px 634px #fff, 542px 706px #fff, 1696px 1385px #fff, 1400px 984px #fff, 422px 363px #fff, 1535px 775px #fff, 1513px 8px #fff, 581px 1544px #fff, 686px 927px #fff, 1070px 1217px #fff, 808px 343px #fff, 1144px 1697px #fff, 1237px 480px #fff, 1067px 1541px #fff, 244px 628px #fff, 180px 805px #fff, 1490px 1709px #fff, 1345px 535px #fff, 1001px 1360px #fff, 881px 19px #fff, 1060px 142px #fff, 1059px 84px #fff, 93px 843px #fff, 1089px 1059px #fff, 810px 533px #fff, 688px 1361px #fff, 1024px 559px #fff, 770px 1357px #fff, 558px 1069px #fff, 674px 36px #fff, 844px 621px #fff, 860px 345px #fff, 1521px 1069px #fff, 863px 387px #fff, 1178px 961px #fff, 1482px 1467px #fff, 1143px 582px #fff, 213px 1284px #fff, 700px 1521px #fff, 67px 1333px #fff, 1589px 1334px #fff, 563px 999px #fff, 799px 1560px #fff, 238px 1072px #fff, 463px 579px #fff, 544px 1292px #fff, 931px 293px #fff, 1677px 1147px #fff, 467px 1797px #fff, 1317px 450px #fff, 1542px 549px #fff, 361px 1552px #fff, 1687px 329px #fff, 1659px 937px #fff, 321px 495px #fff, 1795px 44px #fff, 1148px 539px #fff, 593px 264px #fff, 1663px 1365px #fff, 722px 1685px #fff, 1608px 1034px #fff, 450px 1615px #fff, 1508px 1348px #fff, 110px 1697px #fff, 1687px 1156px #fff, 673px 1416px #fff, 1792px 142px #fff, 1020px 1412px #fff, 464px 316px #fff, 651px 965px #fff, 1599px 1636px #fff, 1193px 273px #fff, 1587px 1724px #fff, 92px 1419px #fff, 132px 350px #fff, 1341px 1736px #fff, 706px 1487px #fff, 1375px 241px #fff, 787px 694px #fff, 319px 170px #fff, 914px 133px #fff, 527px 351px #fff, 1108px 1108px #fff, 345px 1730px #fff, 1661px 23px #fff, 199px 109px #fff, 1204px 257px #fff, 1357px 747px #fff, 725px 1589px #fff, 1578px 1006px #fff, 1242px 738px #fff, 641px 376px #fff, 1277px 853px #fff, 265px 824px #fff, 934px 1208px #fff, 884px 1439px #fff, 919px 1058px #fff, 729px 210px #fff, 250px 1336px #fff, 578px 1214px #fff, 209px 906px #fff, 844px 718px #fff, 248px 1287px #fff, 306px 1407px #fff, 949px 287px #fff, 960px 621px #fff, 716px 979px #fff, 1480px 1695px #fff, 58px 482px #fff, 286px 51px #fff, 662px 140px #fff, 447px 28px #fff, 734px 914px #fff, 1602px 706px #fff, 1207px 1750px #fff, 43px 32px #fff, 1212px 1262px #fff, 1058px 1780px #fff, 1717px 1093px #fff, 225px 1508px #fff, 494px 1795px #fff, 439px 1375px #fff, 878px 898px #fff, 902px 1062px #fff, 1719px 1289px #fff, 898px 641px #fff, 426px 35px #fff, 533px 1390px #fff, 486px 1703px #fff, 1588px 1441px #fff, 30px 228px #fff, 950px 996px #fff, 8px 1483px #fff, 934px 672px #fff, 727px 1578px #fff, 786px 260px #fff, 86px 1124px #fff, 1643px 1596px #fff, 729px 1216px #fff, 26px 1701px #fff, 1425px 909px #fff, 40px 1073px #fff, 1385px 1135px #fff, 1597px 730px #fff, 1510px 81px #fff, 1199px 1478px #fff, 230px 506px #fff, 534px 760px #fff, 224px 877px #fff, 1238px 1565px #fff, 750px 1794px #fff, 1444px 572px #fff, 341px 196px #fff, 836px 975px #fff, 310px 422px #fff, 1698px 1372px #fff, 870px 25px #fff, 1310px 151px #fff, 1168px 1160px #fff, 1306px 376px #fff, 1795px 1715px #fff, 1158px 852px #fff, 959px 605px #fff, 827px 1308px #fff, 1683px 1785px #fff, 1494px 478px #fff, 426px 1173px #fff, 878px 869px #fff, 1684px 1692px #fff, 246px 930px #fff, 1364px 1414px #fff, 1249px 1392px #fff, 1169px 1787px #fff, 465px 288px #fff, 397px 1069px #fff, 598px 1484px #fff, 586px 951px #fff, 1161px 1193px #fff, 1356px 1434px #fff, 1592px 1121px #fff, 390px 1078px #fff, 919px 186px #fff, 1431px 1038px #fff, 371px 900px #fff, 1319px 1312px #fff, 1288px 362px #fff, 1213px 1068px #fff, 1791px 337px #fff, 483px 1169px #fff, 1722px 1602px #fff, 1161px 1021px #fff, 1332px 835px #fff, 185px 4px #fff, 672px 724px #fff, 1206px 130px #fff, 140px 1465px #fff, 200px 735px #fff, 388px 1103px #fff, 1084px 525px #fff, 1494px 1750px #fff;
  animation-name: glowing-stars;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-timing-function: linear;
  animation-delay: 0s;
}

#stars-group-2 {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 1589px 1013px #fff, 1516px 900px #fff, 829px 829px #fff, 1461px 1179px #fff, 696px 989px #fff, 25px 1407px #fff, 734px 1713px #fff, 243px 1618px #fff, 1682px 1577px #fff, 711px 424px #fff, 843px 530px #fff, 696px 928px #fff, 43px 16px #fff, 1721px 1521px #fff, 134px 244px #fff, 1508px 147px #fff, 1513px 390px #fff, 742px 65px #fff, 206px 1196px #fff, 1580px 273px #fff, 1105px 509px #fff, 822px 1692px #fff, 952px 517px #fff, 326px 1300px #fff, 90px 970px #fff, 411px 1137px #fff, 216px 358px #fff, 314px 534px #fff, 254px 995px #fff, 1204px 548px #fff, 1617px 918px #fff, 1298px 329px #fff, 971px 361px #fff, 908px 585px #fff, 616px 89px #fff, 312px 164px #fff, 1470px 274px #fff, 139px 1203px #fff, 1601px 319px #fff, 408px 408px #fff, 1220px 1041px #fff, 143px 1020px #fff, 1334px 1745px #fff, 794px 1528px #fff, 1393px 1729px #fff, 940px 3px #fff, 292px 1787px #fff, 1389px 1730px #fff, 816px 379px #fff, 308px 1761px #fff, 708px 1690px #fff, 984px 1404px #fff, 1677px 1151px #fff, 1219px 78px #fff, 818px 668px #fff, 1337px 575px #fff, 889px 1503px #fff, 542px 1792px #fff, 1044px 755px #fff, 1076px 1028px #fff, 438px 353px #fff, 1410px 119px #fff, 284px 486px #fff, 211px 740px #fff, 1442px 1350px #fff, 426px 1322px #fff, 607px 65px #fff, 947px 208px #fff, 180px 1347px #fff, 1502px 1281px #fff, 652px 1564px #fff, 829px 283px #fff, 1160px 1028px #fff, 1100px 96px #fff, 863px 1716px #fff, 1461px 839px #fff, 1590px 657px #fff, 1557px 819px #fff, 1266px 1255px #fff, 878px 706px #fff, 7px 1151px #fff, 307px 276px #fff, 266px 1204px #fff, 1376px 129px #fff, 1160px 1756px #fff, 1010px 1706px #fff, 1143px 1527px #fff, 527px 1159px #fff, 965px 1574px #fff, 24px 743px #fff, 949px 1569px #fff, 429px 227px #fff, 979px 1327px #fff, 1644px 1243px #fff, 987px 484px #fff, 707px 1426px #fff, 689px 1278px #fff, 833px 1779px #fff, 170px 1668px #fff, 1635px 442px #fff, 394px 1322px #fff, 1564px 1087px #fff, 328px 898px #fff, 1181px 1626px #fff, 992px 1514px #fff, 566px 1166px #fff, 102px 511px #fff, 875px 1218px #fff, 432px 558px #fff, 1524px 1420px #fff, 329px 833px #fff, 976px 1038px #fff, 1406px 263px #fff, 248px 1798px #fff, 652px 531px #fff, 252px 1749px #fff, 1209px 553px #fff, 909px 1392px #fff, 902px 356px #fff, 225px 280px #fff, 1452px 1063px #fff, 1197px 682px #fff, 789px 60px #fff, 183px 491px #fff, 1787px 1198px #fff, 559px 625px #fff, 1009px 1656px #fff, 843px 1658px #fff, 1212px 134px #fff, 936px 877px #fff, 956px 1141px #fff, 637px 1659px #fff, 1029px 3px #fff, 1539px 1454px #fff, 467px 1689px #fff, 1605px 1495px #fff, 1513px 845px #fff, 42px 1033px #fff, 444px 143px #fff, 666px 1160px #fff, 659px 1643px #fff, 1699px 1359px #fff, 589px 564px #fff, 267px 969px #fff, 930px 144px #fff, 75px 478px #fff, 1158px 1729px #fff, 1051px 1418px #fff, 1102px 664px #fff, 533px 725px #fff, 1220px 1750px #fff, 341px 1775px #fff, 282px 1059px #fff, 23px 92px #fff, 132px 280px #fff, 1506px 1608px #fff, 987px 530px #fff, 1485px 1085px #fff, 1210px 427px #fff, 949px 1510px #fff, 400px 811px #fff, 1764px 101px #fff, 1322px 1774px #fff, 1349px 1625px #fff, 545px 144px #fff, 1515px 639px #fff, 259px 190px #fff, 1596px 1600px #fff, 4px 1734px #fff, 1094px 1486px #fff, 769px 1282px #fff, 1601px 469px #fff, 515px 887px #fff, 1258px 382px #fff, 924px 1530px #fff, 1217px 501px #fff, 470px 343px #fff, 1131px 636px #fff, 1499px 1152px #fff, 1754px 1602px #fff, 1676px 1565px #fff, 1403px 639px #fff, 1636px 1245px #fff, 1586px 1537px #fff, 162px 77px #fff, 1008px 534px #fff, 726px 399px #fff, 1054px 1297px #fff, 867px 98px #fff, 310px 1036px #fff, 443px 1288px #fff, 1739px 1250px #fff, 1365px 485px #fff, 503px 329px #fff, 156px 1102px #fff, 976px 1557px #fff, 145px 206px #fff, 846px 1221px #fff, 1769px 453px #fff, 1757px 1029px #fff;
  animation-name: glowing-stars;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-timing-function: linear;
  animation-delay: 0.1s;
}

#stars-group-3 {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 258px 268px #fff, 829px 789px #fff, 302px 63px #fff, 773px 44px #fff, 515px 943px #fff, 1678px 1590px #fff, 69px 338px #fff, 1579px 1649px #fff, 155px 1524px #fff, 1172px 632px #fff, 1237px 1313px #fff, 1015px 1490px #fff, 153px 105px #fff, 333px 732px #fff, 886px 1511px #fff, 468px 1423px #fff, 1136px 971px #fff, 1322px 372px #fff, 1181px 754px #fff, 1380px 1547px #fff, 1152px 638px #fff, 1141px 1711px #fff, 1442px 688px #fff, 1311px 1198px #fff, 397px 1232px #fff, 1015px 343px #fff, 1702px 845px #fff, 760px 537px #fff, 1496px 539px #fff, 992px 765px #fff, 230px 1714px #fff, 966px 1368px #fff, 296px 1470px #fff, 111px 694px #fff, 1256px 712px #fff, 823px 1314px #fff, 1422px 504px #fff, 1220px 648px #fff, 1178px 1003px #fff, 1556px 722px #fff, 546px 1263px #fff, 776px 589px #fff, 949px 1273px #fff, 1173px 1575px #fff, 1186px 847px #fff, 506px 74px #fff, 595px 1510px #fff, 202px 707px #fff, 667px 1080px #fff, 1490px 367px #fff, 532px 413px #fff, 818px 1183px #fff, 149px 95px #fff, 662px 505px #fff, 1631px 433px #fff, 1778px 450px #fff, 1195px 1525px #fff, 464px 1415px #fff, 1716px 1399px #fff, 1536px 994px #fff, 1175px 77px #fff, 422px 1019px #fff, 874px 61px #fff, 1584px 383px #fff, 1099px 1469px #fff, 606px 1191px #fff, 1358px 1662px #fff, 1673px 952px #fff, 1023px 804px #fff, 1765px 493px #fff, 259px 478px #fff, 1735px 1109px #fff, 255px 310px #fff, 1414px 372px #fff, 1428px 1238px #fff, 214px 902px #fff, 860px 627px #fff, 697px 1428px #fff, 825px 1738px #fff, 960px 542px #fff, 78px 1167px #fff, 137px 652px #fff, 1566px 273px #fff, 960px 806px #fff, 565px 828px #fff, 761px 575px #fff, 220px 266px #fff, 1746px 1717px #fff, 105px 331px #fff, 73px 804px #fff, 1042px 1148px #fff, 107px 963px #fff, 1350px 284px #fff, 1111px 1394px #fff, 548px 1382px #fff, 1429px 1086px #fff, 478px 936px #fff, 1028px 53px #fff, 1085px 1202px #fff, 761px 522px #fff, 528px 1631px #fff, 1173px 1615px #fff, 177px 1561px #fff, 1784px 298px #fff, 1365px 434px #fff, 769px 677px #fff, 1513px 1502px #fff, 742px 305px #fff, 1508px 163px #fff, 1376px 163px #fff, 185px 1557px #fff, 456px 1605px #fff, 93px 1557px #fff, 1107px 1372px #fff, 1534px 457px #fff, 293px 915px #fff, 1339px 66px #fff, 747px 176px #fff, 1226px 240px #fff, 1381px 554px #fff, 1302px 113px #fff, 379px 1231px #fff, 1046px 1443px #fff, 944px 61px #fff, 1530px 1394px #fff, 14px 946px #fff, 1532px 689px #fff, 783px 1408px #fff, 1494px 675px #fff, 1124px 1602px #fff, 1518px 1093px #fff, 248px 1479px #fff, 363px 1252px #fff, 814px 921px #fff, 1679px 1099px #fff, 402px 1461px #fff, 636px 190px #fff, 1290px 1311px #fff, 83px 1214px #fff, 904px 1134px #fff, 229px 1478px #fff, 478px 1446px #fff, 1521px 1329px #fff, 890px 550px #fff, 866px 468px #fff, 1591px 735px #fff, 1499px 533px #fff, 798px 548px #fff, 1641px 176px #fff, 617px 316px #fff, 752px 944px #fff, 19px 885px #fff, 243px 370px #fff, 1637px 1522px #fff, 625px 1158px #fff, 1596px 1580px #fff, 1324px 386px #fff, 441px 1671px #fff, 1396px 463px #fff, 562px 1301px #fff, 1608px 901px #fff, 85px 1193px #fff, 1244px 1500px #fff, 219px 1025px #fff, 1054px 1416px #fff, 638px 1109px #fff, 5px 661px #fff, 1374px 723px #fff, 1786px 1714px #fff, 733px 876px #fff, 672px 1543px #fff, 1082px 818px #fff, 1754px 1486px #fff, 599px 611px #fff, 828px 343px #fff, 325px 1776px #fff, 526px 859px #fff, 428px 288px #fff, 576px 1532px #fff, 851px 1489px #fff, 214px 625px #fff, 727px 1047px #fff, 362px 1002px #fff, 238px 900px #fff, 481px 1780px #fff, 1330px 1009px #fff, 169px 555px #fff, 1625px 681px #fff, 1598px 1152px #fff, 1798px 1499px #fff, 1243px 916px #fff, 846px 860px #fff, 491px 399px #fff, 462px 808px #fff, 1252px 450px #fff, 1229px 1439px #fff, 1669px 575px #fff, 841px 794px #fff, 1307px 1445px #fff, 416px 1055px #fff;
  animation-name: glowing-stars;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-timing-function: linear;
  animation-delay: 0.2s;
}

#stars-group-4 {
  width: 2px;
  height: 2px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 798px 1275px #fff, 1389px 863px #fff, 1004px 210px #fff, 1189px 1270px #fff, 74px 1005px #fff, 21px 862px #fff, 742px 51px #fff, 1273px 973px #fff, 334px 1472px #fff, 1333px 151px #fff, 416px 1727px #fff, 1491px 998px #fff, 465px 327px #fff, 132px 213px #fff, 1239px 289px #fff, 106px 1243px #fff, 509px 906px #fff, 628px 142px #fff, 462px 642px #fff, 1636px 126px #fff, 1786px 1569px #fff, 1286px 624px #fff, 1777px 1798px #fff, 880px 332px #fff, 1567px 504px #fff, 1781px 213px #fff, 929px 1478px #fff, 824px 38px #fff, 1637px 1629px #fff, 123px 1760px #fff, 1020px 1040px #fff, 812px 1361px #fff, 75px 1272px #fff, 70px 313px #fff, 1692px 1511px #fff, 154px 1596px #fff, 1006px 535px #fff, 1586px 706px #fff, 1551px 737px #fff, 363px 1148px #fff, 320px 1385px #fff, 1624px 170px #fff, 1669px 924px #fff, 1434px 1228px #fff, 1779px 73px #fff, 542px 930px #fff, 1701px 1356px #fff, 1510px 999px #fff, 1779px 632px #fff, 64px 1500px #fff, 923px 531px #fff, 1406px 1375px #fff, 1499px 840px #fff, 1670px 40px #fff, 677px 538px #fff, 1151px 1157px #fff, 331px 747px #fff, 244px 1050px #fff, 1540px 456px #fff, 1447px 279px #fff, 1307px 1324px #fff, 671px 1081px #fff, 879px 1122px #fff, 1711px 51px #fff, 666px 1176px #fff, 202px 645px #fff, 204px 515px #fff, 546px 1683px #fff, 1118px 1166px #fff, 1266px 1061px #fff, 1491px 1275px #fff, 962px 1268px #fff, 1399px 284px #fff, 800px 1065px #fff, 1580px 1392px #fff, 993px 695px #fff, 390px 946px #fff, 6px 509px #fff, 580px 1531px #fff, 1123px 1451px #fff, 78px 1008px #fff, 1179px 163px #fff, 1248px 1511px #fff, 1192px 28px #fff, 789px 815px #fff, 1331px 7px #fff, 566px 1699px #fff, 1455px 758px #fff, 1250px 1091px #fff, 1451px 38px #fff, 190px 179px #fff, 1791px 429px #fff, 659px 1546px #fff, 1058px 1659px #fff, 1069px 1552px #fff, 1212px 427px #fff, 631px 882px #fff, 77px 964px #fff, 786px 1714px #fff, 1652px 985px #fff, 1529px 1110px #fff, 1702px 211px #fff, 97px 1292px #fff, 788px 904px #fff, 337px 509px #fff, 1110px 824px #fff, 1281px 1626px #fff, 634px 839px #fff, 1524px 1645px #fff, 1514px 490px #fff, 816px 1140px #fff, 1242px 1253px #fff, 1003px 791px #fff, 345px 371px #fff, 1089px 1636px #fff, 279px 66px #fff, 192px 676px #fff, 240px 1480px #fff, 1518px 143px #fff, 15px 787px #fff, 1019px 1129px #fff, 113px 266px #fff, 1552px 1189px #fff, 1354px 1528px #fff, 1093px 566px #fff, 413px 356px #fff, 127px 245px #fff, 1261px 343px #fff, 1463px 18px #fff, 969px 70px #fff, 22px 1790px #fff, 1014px 399px #fff, 1054px 895px #fff, 1199px 1464px #fff, 344px 1084px #fff, 416px 1416px #fff, 42px 19px #fff, 1530px 953px #fff, 442px 1px #fff, 551px 375px #fff, 1428px 102px #fff, 1064px 138px #fff, 576px 1140px #fff, 1285px 263px #fff, 647px 1281px #fff, 532px 467px #fff, 1465px 303px #fff, 137px 1094px #fff, 993px 322px #fff, 1577px 715px #fff, 1709px 880px #fff, 1463px 8px #fff, 469px 525px #fff, 185px 517px #fff, 1208px 699px #fff, 1777px 277px #fff, 3px 1331px #fff, 1763px 1319px #fff, 1435px 1433px #fff, 1107px 971px #fff, 1508px 926px #fff, 545px 1055px #fff, 99px 75px #fff, 680px 779px #fff, 1209px 1796px #fff, 1233px 1693px #fff, 671px 788px #fff, 1082px 1490px #fff, 969px 1269px #fff, 532px 1039px #fff, 78px 924px #fff, 375px 186px #fff, 1043px 185px #fff, 242px 1109px #fff, 1156px 100px #fff, 736px 1380px #fff, 1508px 953px #fff, 988px 110px #fff, 629px 1052px #fff, 1286px 135px #fff, 563px 419px #fff, 631px 49px #fff, 1272px 701px #fff, 471px 1355px #fff, 1271px 1517px #fff, 1076px 1330px #fff, 821px 451px #fff, 529px 1545px #fff, 749px 1456px #fff, 410px 457px #fff, 1182px 17px #fff, 1550px 830px #fff, 815px 1027px #fff, 1352px 839px #fff, 1200px 1212px #fff, 30px 739px #fff, 1304px 463px #fff, 1126px 1043px #fff, 333px 66px #fff, 800px 271px #fff;
  animation-name: glowing-stars;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-timing-function: linear;
  animation-delay: 0.3s;
}

#stars-group-5 {
  width: 2px;
  height: 2px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 1081px 688px #fff, 1603px 407px #fff, 161px 1682px #fff, 69px 1676px #fff, 72px 1003px #fff, 1296px 803px #fff, 1673px 202px #fff, 194px 855px #fff, 1351px 400px #fff, 1366px 584px #fff, 777px 217px #fff, 1095px 1541px #fff, 1212px 1554px #fff, 1319px 1670px #fff, 294px 1237px #fff, 1552px 707px #fff, 1773px 575px #fff, 351px 652px #fff, 1372px 203px #fff, 1413px 1262px #fff, 934px 991px #fff, 1417px 35px #fff, 140px 1446px #fff, 1341px 686px #fff, 817px 1676px #fff, 1584px 429px #fff, 1084px 767px #fff, 451px 1227px #fff, 1260px 29px #fff, 1733px 617px #fff, 1615px 1680px #fff, 369px 585px #fff, 164px 1174px #fff, 191px 843px #fff, 647px 440px #fff, 1607px 26px #fff, 256px 580px #fff, 1466px 1618px #fff, 1192px 86px #fff, 1094px 188px #fff, 1262px 757px #fff, 175px 1163px #fff, 678px 49px #fff, 1088px 270px #fff, 1468px 189px #fff, 1228px 195px #fff, 476px 1391px #fff, 1595px 90px #fff, 1740px 1080px #fff, 784px 998px #fff, 764px 781px #fff, 516px 322px #fff, 1388px 1751px #fff, 1583px 1432px #fff, 1644px 1270px #fff, 633px 948px #fff, 1720px 533px #fff, 962px 1552px #fff, 910px 518px #fff, 1393px 668px #fff, 473px 152px #fff, 1294px 1232px #fff, 236px 1376px #fff, 538px 1137px #fff, 980px 261px #fff, 578px 406px #fff, 1715px 1648px #fff, 325px 1068px #fff, 623px 1607px #fff, 955px 659px #fff, 56px 177px #fff, 381px 1791px #fff, 1588px 687px #fff, 1731px 1780px #fff, 1214px 575px #fff, 1628px 11px #fff, 1365px 1615px #fff, 1503px 1449px #fff, 149px 569px #fff, 213px 148px #fff, 553px 561px #fff, 1453px 891px #fff, 1460px 1406px #fff, 478px 1667px #fff, 1722px 701px #fff, 532px 995px #fff, 1103px 1739px #fff, 349px 422px #fff, 1618px 428px #fff, 473px 1726px #fff, 952px 438px #fff, 942px 1116px #fff, 307px 120px #fff, 343px 1390px #fff, 549px 765px #fff, 530px 1726px #fff, 1235px 1738px #fff, 135px 1696px #fff, 880px 1770px #fff, 1587px 357px #fff, 1422px 182px #fff, 1324px 534px #fff, 1331px 514px #fff, 324px 1308px #fff, 367px 1203px #fff, 977px 774px #fff, 1182px 713px #fff, 1038px 794px #fff, 867px 1790px #fff, 347px 701px #fff, 673px 1142px #fff, 1017px 131px #fff, 1109px 403px #fff, 583px 403px #fff, 1041px 834px #fff, 1286px 1738px #fff, 1359px 191px #fff, 631px 688px #fff, 1215px 1184px #fff, 572px 548px #fff, 1396px 1409px #fff, 65px 828px #fff, 54px 774px #fff, 1682px 1752px #fff, 1639px 356px #fff, 637px 1121px #fff, 1209px 888px #fff, 413px 190px #fff, 229px 465px #fff, 442px 565px #fff, 891px 1735px #fff, 1406px 786px #fff, 1618px 287px #fff, 1185px 776px #fff, 787px 816px #fff, 1239px 320px #fff, 38px 1198px #fff, 1781px 1728px #fff, 622px 438px #fff, 1176px 456px #fff, 1700px 694px #fff, 1539px 510px #fff, 1213px 588px #fff, 1330px 264px #fff, 124px 629px #fff, 72px 1335px #fff, 1379px 14px #fff, 259px 58px #fff, 211px 1769px #fff, 1015px 1536px #fff, 1276px 1115px #fff, 1017px 871px #fff, 1098px 1587px #fff, 1040px 1303px #fff, 1709px 984px #fff, 711px 678px #fff, 1161px 1015px #fff, 766px 345px #fff, 481px 193px #fff, 1347px 750px #fff, 1452px 462px #fff, 1106px 452px #fff, 657px 450px #fff, 925px 1512px #fff, 792px 527px #fff, 1664px 363px #fff, 1064px 692px #fff, 562px 256px #fff, 1067px 921px #fff, 1622px 404px #fff, 201px 728px #fff, 1411px 1203px #fff, 827px 445px #fff, 989px 33px #fff, 368px 1510px #fff, 239px 335px #fff, 1192px 362px #fff, 927px 1338px #fff, 1095px 1587px #fff, 1525px 441px #fff, 967px 1565px #fff, 1378px 275px #fff, 1598px 1532px #fff, 1306px 286px #fff, 588px 741px #fff, 112px 295px #fff, 589px 1609px #fff, 1354px 696px #fff, 1178px 774px #fff, 1432px 1715px #fff, 1767px 1297px #fff, 1304px 757px #fff, 143px 1421px #fff, 352px 513px #fff, 474px 398px #fff, 417px 977px #fff, 883px 1039px #fff, 16px 589px #fff, 1282px 1771px #fff, 1459px 1078px #fff;
  animation-name: glowing-stars;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-timing-function: linear;
  animation-delay: 0.4s;
}

#stars-group-6 {
  width: 2px;
  height: 2px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 812px 125px #fff, 61px 750px #fff, 957px 20px #fff, 1669px 1121px #fff, 1588px 867px #fff, 1747px 434px #fff, 459px 1215px #fff, 1030px 552px #fff, 988px 790px #fff, 1500px 1460px #fff, 116px 760px #fff, 333px 1785px #fff, 1679px 1322px #fff, 1239px 1648px #fff, 1368px 1044px #fff, 962px 325px #fff, 1741px 841px #fff, 1263px 1764px #fff, 923px 60px #fff, 731px 1689px #fff, 1379px 1000px #fff, 1036px 209px #fff, 1184px 1740px #fff, 1674px 639px #fff, 1451px 1715px #fff, 773px 697px #fff, 354px 682px #fff, 1081px 236px #fff, 890px 637px #fff, 251px 1621px #fff, 1502px 562px #fff, 1250px 1244px #fff, 436px 829px #fff, 1133px 1793px #fff, 110px 1659px #fff, 256px 314px #fff, 961px 6px #fff, 351px 1418px #fff, 349px 325px #fff, 1567px 1304px #fff, 1466px 856px #fff, 1299px 74px #fff, 318px 341px #fff, 80px 188px #fff, 463px 1014px #fff, 516px 1249px #fff, 481px 1282px #fff, 584px 287px #fff, 976px 895px #fff, 174px 803px #fff, 1707px 1418px #fff, 1130px 1290px #fff, 412px 962px #fff, 683px 152px #fff, 1328px 959px #fff, 866px 726px #fff, 1362px 1167px #fff, 1303px 1053px #fff, 1702px 978px #fff, 1546px 271px #fff, 343px 1358px #fff, 755px 1445px #fff, 1638px 51px #fff, 1419px 618px #fff, 811px 1503px #fff, 1167px 815px #fff, 244px 764px #fff, 1160px 854px #fff, 448px 1510px #fff, 1595px 1311px #fff, 261px 275px #fff, 1502px 364px #fff, 1648px 1393px #fff, 1128px 514px #fff, 1327px 980px #fff, 1263px 1705px #fff, 1662px 228px #fff, 1322px 1043px #fff, 794px 731px #fff, 1155px 491px #fff, 84px 848px #fff, 633px 277px #fff, 167px 1341px #fff, 1713px 1479px #fff, 879px 1780px #fff, 629px 669px #fff, 1160px 1472px #fff, 229px 677px #fff, 1582px 656px #fff, 1144px 2px #fff, 1377px 402px #fff, 891px 1570px #fff, 1474px 1514px #fff, 1418px 888px #fff, 755px 307px #fff, 1287px 130px #fff, 699px 1331px #fff, 853px 721px #fff, 1735px 1655px #fff, 1377px 466px #fff, 97px 1618px #fff, 1525px 76px #fff, 883px 1139px #fff, 1542px 1075px #fff, 183px 219px #fff, 1068px 1179px #fff, 1336px 944px #fff, 538px 788px #fff, 157px 1443px #fff, 1741px 1658px #fff, 240px 409px #fff, 768px 543px #fff, 1467px 1740px #fff, 1377px 1328px #fff, 1470px 1493px #fff, 1355px 1547px #fff, 724px 796px #fff, 1773px 324px #fff, 424px 909px #fff, 367px 1694px #fff, 960px 331px #fff, 996px 415px #fff, 1312px 1290px #fff, 138px 699px #fff, 1460px 1119px #fff, 48px 890px #fff, 1576px 380px #fff, 605px 980px #fff, 13px 45px #fff, 66px 1098px #fff, 1167px 1531px #fff, 601px 1373px #fff, 205px 1364px #fff, 1210px 1474px #fff, 596px 1405px #fff, 1672px 256px #fff, 691px 686px #fff, 271px 1666px #fff, 1722px 683px #fff, 659px 493px #fff, 512px 1378px #fff, 1648px 458px #fff, 1300px 1034px #fff, 1770px 579px #fff, 1205px 1343px #fff, 1403px 1366px #fff, 949px 1501px #fff, 759px 445px #fff, 185px 768px #fff, 1397px 895px #fff, 898px 1557px #fff, 901px 885px #fff, 953px 361px #fff, 400px 1001px #fff, 694px 630px #fff, 1098px 1735px #fff, 1254px 163px #fff, 1177px 1454px #fff, 454px 1783px #fff, 1084px 599px #fff, 709px 1112px #fff, 1480px 1475px #fff, 898px 823px #fff, 696px 964px #fff, 744px 1197px #fff, 1618px 233px #fff, 1764px 467px #fff, 1094px 1535px #fff, 26px 179px #fff, 411px 44px #fff, 950px 667px #fff, 324px 1673px #fff, 366px 1319px #fff, 1709px 720px #fff, 1172px 275px #fff, 153px 648px #fff, 1158px 1578px #fff, 961px 420px #fff, 1012px 1120px #fff, 628px 646px #fff, 1558px 667px #fff, 1579px 1382px #fff, 1392px 1215px #fff, 387px 629px #fff, 1209px 1783px #fff, 993px 1029px #fff, 1790px 240px #fff, 38px 359px #fff, 1553px 493px #fff, 356px 613px #fff, 383px 1512px #fff, 364px 666px #fff, 1444px 1643px #fff, 1548px 544px #fff, 164px 429px #fff, 1661px 21px #fff, 473px 1167px #fff, 511px 1478px #fff, 1235px 662px #fff, 1361px 1576px #fff;
  animation-name: glowing-stars;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-timing-function: linear;
  animation-delay: 0.5s;
}

@keyframes glowing-stars {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
.form{
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;
}

.content{
  /* background-color: aqua; */
  /* width: 100rem; */
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;

  width: 330px;
  border-radius: 10px;
  padding: 40px 30px;
  margin-top: 100px;
  box-shadow: -3px -3px 9px #aaa9a9a2,
              3px 3px 7px rgba(147, 149, 151, 0.671);

}


.content .text{
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 35px;
  color: rgb(247, 233, 233);
}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: #e0d2d2;
  border: 1px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);

}


.field input::placeholder{
  color: #e0d2d2a6;
}
.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: #ffffff;
}



button{
  margin: 25px 0 0 0;
  width: 100%;
  height: 50px;
  color: rgb(238, 226, 226);
  font-size: 18px;
  font-weight: 600;
  border: 2px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
 margin-top: 40px;
  outline: none;
  cursor: pointer;
  border-radius: 8px;

}

.content .or{
  color: rgba(255, 255, 255, 0.733);
  margin-top: 9px;
}

.icon-button{
  margin-top: 15px;
}
.icon-button span{
  padding-left: 17px;
  padding-right: 17px;
  padding-top: 6px;
  padding-bottom: 6px;
   color: rgba(244, 247, 250, 0.795);
 border-radius: 5px;
  line-height: 30px;
  background: rgba(255, 255, 255, 0.164);
    backdrop-filter: blur(10px);
}
.icon-button span.facebook{
  margin-right: 17px;

}
button:hover,
.icon-button span:hover{
  background-color: #babecc8c;
}

/* chaur start */
/* body {
  position: relative;
  padding: 0;
  margin: 0 auto;
  min-height: 100vh;
  overflow: hidden;
} */

.earth {
  padding: 0;
  position: absolute;
  bottom: -53px;
  position: fixed;
  left: -20%;
  width: 150%;
  height: 243px;
  border-radius: 80% 80% 0 0;
  background: green;
  background-image: url("https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.virginiagreenlawncare.com%2Fwp-content%2Fuploads%2F2015%2F07%2Fgreen-lawn.jpg&f=1");
  /* 	, url('https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbriffly.com%2Fwp-content%2Fuploads%2FGoogle-Maps.jpg&f=1'); */
  background-blend-mode: lighten;
  /* 	animation: spin 20s; */
}

@-webkit-keyframes spin {
  0% {
    -moz-transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
    -ms-transform: rotateZ(0deg);
  }
  100% {
    -moz-transform: rotateZ(360deg);
    -webkit-transform: rotateZ(360deg);
    -o-transform: rotateZ(360deg);
    -ms-transform: rotateZ(360deg);
  }
}
@-moz-keyframes spin {
  0% {
    -moz-transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
    -ms-transform: rotateZ(0deg);
  }
  100% {
    -moz-transform: rotateZ(360deg);
    -webkit-transform: rotateZ(360deg);
    -o-transform: rotateZ(360deg);
    -ms-transform: rotateZ(360deg);
  }
}
@-o-keyframes spin {
  0% {
    -moz-transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
    -ms-transform: rotateZ(0deg);
  }
  100% {
    -moz-transform: rotateZ(360deg);
    -webkit-transform: rotateZ(360deg);
    -o-transform: rotateZ(360deg);
    -ms-transform: rotateZ(360deg);
  }
}
@-ms-keyframes spin {
  0% {
    -moz-transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
    -ms-transform: rotateZ(0deg);
  }
  100% {
    -moz-transform: rotateZ(360deg);
    -webkit-transform: rotateZ(360deg);
    -o-transform: rotateZ(360deg);
    -ms-transform: rotateZ(360deg);
  }
}
.form-data{
  height: 260px;
  overflow-y: scroll;
}
/* Hide scrollbar for Chrome, Safari and Opera */
.form-data::-webkit-scrollbar{
  display: none;
}
/* Hide scrollbar for IE, Edge and Firefox */
.form-data{
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
*::-webkit-scrollbar{
    display: none!important;
}
*{
    -ms-overflow-style: none!important;  /* IE and Edge */
  scrollbar-width: none!important;  /* Firefox */
}

/* easter start  */
.bunny-icon {
  height: 294px;
  width: 260px;
  margin: auto;
  position: relative;
}
.bunny-icon .egg {
  position: absolute;
  right: 0;
  bottom: 49px;
  height: 199px;
  width: 165px;
}
.bunny-icon .egg:before {
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 30px;
  background-color: #81c3bf;
  border-radius: 50%;
}
.bunny-icon .egg:after {
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 11px;
  width: 126px;
  height: 188px;
  background: #FBCED3;
  border-top-left-radius: 50% 58%;
  border-top-right-radius: 50% 58%;
  border-bottom-left-radius: 50% 40%;
  border-bottom-right-radius: 50% 40%;
  background-image: radial-gradient(#ef4154 3px, transparent 0), radial-gradient(#ef4154 5px, transparent 0);
  background-size: 30px 30px;
  background-position: 0 0, 15px 15px;
  z-index: 5;
}
#egg-1{
  position: absolute;
  right: 503px;
  bottom: 160px;
  height: 199px;
  width: 165px;
}
#egg-1::before{
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 30px;
  background-color: #81c3bf;
  border-radius: 50%;
}
#egg-1::after{
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 11px;
  width: 65px;
  height: 118px;
  background: #FBCED3;
  border-top-left-radius: 50% 58%;
  border-top-right-radius: 50% 58%;
  border-bottom-left-radius: 50% 40%;
  border-bottom-right-radius: 50% 40%;
  background-image: radial-gradient(#ef4154 3px, transparent 0), radial-gradient(#ef4154 5px, transparent 0);
  background-size: 30px 30px;
  background-position: 0 0, 15px 15px;
  z-index: 5;
}
#egg-2{
  position: absolute;
  right: -293px;
  bottom: 49px;
  height: 199px;
  width: 165px;
}
#egg-2::before{
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 30px;
  background-color: #81c3bf;
  border-radius: 50%;
}
#egg-2::after{
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 49px;
  width: 126px;
  height: 188px;
  background: #FBCED3;
  border-top-left-radius: 50% 58%;
  border-top-right-radius: 50% 58%;
  border-bottom-left-radius: 50% 40%;
  border-bottom-right-radius: 50% 40%;
  background-image: radial-gradient(#ef4154 3px, transparent 0), radial-gradient(#ef4154 5px, transparent 0);
  background-size: 30px 30px;
  background-position: 0 0, 15px 15px;
  z-index: 5;
}
#egg-3{
  position: absolute;
  right: 247px;
  bottom: 49px;
  height: 199px;
  width: 165px;
}
#egg-3::before{
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 30px;
  background-color: #81c3bf;
  border-radius: 50%;
}
#egg-3::after{
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: 11px;
  width: 42px;
  height: 67px;
  background: #FBCED3;
  border-top-left-radius: 50% 58%;
  border-top-right-radius: 50% 58%;
  border-bottom-left-radius: 50% 40%;
  border-bottom-right-radius: 50% 40%;
  background-image: radial-gradient(#ef4154 3px, transparent 0), radial-gradient(#ef4154 5px, transparent 0);
  background-size: 30px 30px;
  background-position: 0 0, 15px 15px;
  z-index: 5;
}
.bunny-icon .bunny {
  position: absolute;
  top: -44px;
  left: 0;
  height: 195px;
  width: 204px;
}
.bunny-icon .bunny .head {
  width: 88px;
  height: 80px;
  transform: rotate(-45deg);
  position: absolute;
  top: 70px;
  right: 20px;
}
.bunny-icon .bunny .head:before {
  content: "";
  display: block;
  position: absolute;
  top: 0px;
  left: 0px;
  background-color: #fff;
  border-radius: 50%;
  width: 100%;
  height: 100%;
  z-index: 3;
}
.bunny-icon .bunny .head .ears {
  position: absolute;
  top: -80px;
  left: 0px;
  width: 90px;
  height: 100px;
  z-index: 1;
}
@keyframes ear-left-animation {
  0% {
    transform: rotate(-30deg);
  }
  100% {
    transform: rotate(-25deg);
  }
}
@keyframes ear-right-animation {
  0% {
    transform: rotate(30deg);
  }
  100% {
    transform: rotate(25deg);
  }
}
.bunny-icon .bunny .head .ears .ear {
  height: 100%;
  width: 45px;
  background-color: #fff;
  border-radius: 50%;
}
.bunny-icon .bunny .head .ears .ear:before {
  content: "";
  display: block;
  height: 70px;
  width: 30px;
  background-color: #FBCED3;
  border-radius: 50%;
}
.bunny-icon .bunny .head .ears .ear-left {
  position: absolute;
  top: 11px;
  left: 0px;
  transform: rotate(-30deg);
  animation: ear-left-animation 0.7s linear 0s infinite alternate;
  transform-origin: center bottom;
}
.bunny-icon .bunny .head .ears .ear-left:before {
  position: absolute;
  top: 20px;
  left: 7px;
}
.bunny-icon .bunny .head .ears .ear-right {
  position: absolute;
  top: 11px;
  right: 0px;
  transform: rotate(30deg);
  animation: ear-right-animation 0.7s linear 0s infinite alternate;
  transform-origin: center bottom;
}
.bunny-icon .bunny .head .ears .ear-right:before {
  position: absolute;
  top: 20px;
  left: 7px;
}
.bunny-icon .bunny .head .face {
  position: absolute;
  top: 20px;
  left: 0;
  right: 0;
  width: 50px;
  height: 60px;
  margin: auto;
  z-index: 4;
}
.bunny-icon .bunny .head .face .eyes {
  width: 30px;
  position: absolute;
  top: 0px;
  left: 0;
  right: 0;
  margin: auto;
  height: 16px;
}
.bunny-icon .bunny .head .face .eyes:before, .bunny-icon .bunny .head .face .eyes:after {
  content: "";
  display: block;
  width: 6px;
  height: 100%;
  background-color: #4B4B4B;
  border-radius: 50%;
  border: 1px solid black;
  box-sizing: border-box;
}
.bunny-icon .bunny .head .face .eyes:before {
  position: absolute;
  top: 0px;
  left: 0;
}
.bunny-icon .bunny .head .face .eyes:after {
  position: absolute;
  top: 0px;
  right: 0;
}
.bunny-icon .bunny .head .face .nose {
  width: 14px;
  height: 7px;
  position: absolute;
  top: 21px;
  left: 0;
  right: 0;
  margin: auto;
}
.bunny-icon .bunny .head .face .nose:before, .bunny-icon .bunny .head .face .nose:after {
  content: "";
  display: block;
  height: 0;
  width: 0;
}
.bunny-icon .bunny .head .face .nose:before {
  position: absolute;
  top: 0px;
  left: 0;
  border: 7px solid transparent;
  border-top: 7px solid black;
}
.bunny-icon .bunny .head .face .nose:after {
  position: absolute;
  top: 1px;
  left: 2px;
  border: 5px solid transparent;
  border-top: 5px solid #4B4B4B;
}
.bunny-icon .bunny .head .face .mouth {
  position: absolute;
  top: 2px;
  left: 0;
  right: 0;
  width: 2px;
  height: 32px;
  margin: auto;
  width: 15px;
  height: 32px;
  margin: auto;
  border-bottom: 2px solid black;
  border-radius: 10px;
}
.bunny-icon .bunny .head .face .mouth:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0px;
  width: 2px;
  height: 7px;
  margin: auto;
  background-color: black;
}
.bunny-icon .bunny .head .face .blush {
  position: absolute;
  top: 19px;
  left: 0;
  width: 100%;
  height: 6px;
}
.bunny-icon .bunny .head .face .blush:before, .bunny-icon .bunny .head .face .blush:after {
  content: "";
  display: block;
  width: 13px;
  height: 100%;
  background-color: #FBCED3;
  border-radius: 50%;
}
.bunny-icon .bunny .head .face .blush:before {
  position: absolute;
  top: 0;
  left: 0;
}
.bunny-icon .bunny .head .face .blush:after {
  position: absolute;
  top: 0;
  right: 0;
}
.bunny-icon .bunny .paws {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 6;
}
.bunny-icon .bunny .paws:before, .bunny-icon .bunny .paws:after {
  content: "";
  display: block;
  width: 20px;
  height: 14px;
  border-radius: 50%;
  background-color: #fff;
}
.bunny-icon .bunny .paws:before {
  position: absolute;
  top: 87px;
  right: 0;
}
.bunny-icon .bunny .paws:after {
  position: absolute;
  right: 58px;
  bottom: 10px;
  transform: rotate(90deg);
}

@media screen and (max-width: 480px) {
    .main-header-text{
        font-size: 1.1rem !important;
    }
  }

</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="cloudPane" style="position: fixed!important;">
  <!-- <div style="width: 900px; height: 900px;"> -->
      <!-- partial:index.partial.html -->
      <div id="stars-group-1"></div>
      <div id="stars-group-2"></div>
      <div id="stars-group-3"></div>
      <div id="stars-group-4"></div>
      <div id="stars-group-5"></div>
      <div id="stars-group-6"></div>
      <!-- </div> -->
          <!-- <div class="stars">
              <div class="star fa fa-star checked" id="star1"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked" id="star2"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked" id="star3"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star" id="star4"></div>
              <div class="star fa fa-star checked" id="star5"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked" id="star6"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked" id="star7"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked" id="star8"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked" id="star9"></div>
              <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked" id="star10"></div>
               <div class="star fa fa-star checked"></div>
              <div class="star fa fa-star checked" id="star11"></div>
               <div class="star fa fa-star checked"></div>
            </div> -->
            <div class="earth">
              <!-- easter start  -->
<div class="bunny-icon">
  <div class="egg" ></div>
  <div class="egg" id="egg-1"></div>
  <div class="egg" id="egg-2"></div>
  <div class="egg" id="agg-3"></div>
  <div class="bunny">
    <div class="head">
      <div class="ears">
        <div class="ear ear-left"></div>
        <div class="ear ear-right"></div>
      </div>
      <div class="face">
        <div class="eyes"></div>
        <div class="nose"></div>
        <div class="mouth"></div>
        <div class="blush"></div>
      </div>
    </div>
    <div class="paws"></div>
  </div>
</div>
              <!-- <img src="easter.png" alt=""> -->
            </div>
            <!-- <div style="z-index: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ab est eaque, corporis corrupti nihil cum, illum, aliquid eos alias amet. Id velit minima magnam quas, accusantium quibusdam architecto doloribus?</div> -->
        {{-- <div class="form">
            <div class="content">
            <div class="text">Login Form</div>
            <form action="#" class="form-data">
                <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" placeholder="Email Id" required>

                </div>
                <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" placeholder="Password">

                </div>

                <button>Log in</button>
                <div class="or">Or</div>
                <div class="icon-button">

                <span class="facebook"><i class="fa fa-facebook"></i>  Facebook</span>

                <span><i class="fa fa-google"></i>  Google</span>


                </div>
            </form>
            </div>
        </div> --}}
          <div class="bigCloud" id="cloud1">
              <div class="largeCircle" id="circ1">

                  <div class="largeCircle" id="circ1shadow"></div>
              </div>
              <div class="middleCircle" id="circ2">
                  <div class="middleCircle" id="circ2shadow"></div>
              </div>
              <div class="middleCircle" id="circ3">
                  <div class="middleCircle" id="circ3shadow"></div>
              </div>
              <div class="smallCircle" id="circ4"></div>
              <div class="smallCircle" id="circ5">
                  <div class="smallCircle" id="circ5shadow"></div>
              </div>
              <div class="smallCircle" id="circ6">
                  <div class="smallCircle" id="circ6shadow"></div>
              </div>
          </div>
          <div class="bigCloud" id="cloud2">
              <div class="largeCircle" id="circ1">
                  <div class="largeCircle" id="circ1shadow"></div>
              </div>
              <div class="middleCircle" id="circ2">
                  <div class="middleCircle" id="circ2shadow"></div>
              </div>
              <div class="middleCircle" id="circ3">
                  <div class="middleCircle" id="circ3shadow"></div>
              </div>
              <div class="smallCircle" id="circ4"></div>
              <div class="smallCircle" id="circ5">
                  <div class="smallCircle" id="circ5shadow"></div>
              </div>
              <div class="smallCircle" id="circ6">
                  <div class="smallCircle" id="circ6shadow"></div>
              </div>
          </div>

          <div class="bigCloud" id="cloud3">
              <div class="largeCircle" id="circ1">
                  <div class="largeCircle" id="circ1shadow"></div>
              </div>
              <div class="middleCircle" id="circ2">
                  <div class="middleCircle" id="circ2shadow"></div>
              </div>
              <div class="middleCircle" id="circ3">
                  <div class="middleCircle" id="circ3shadow"></div>
              </div>
              <div class="smallCircle" id="circ4"></div>
              <div class="smallCircle" id="circ5">
                  <div class="smallCircle" id="circ5shadow"></div>
              </div>
              <div class="smallCircle" id="circ6">
                  <div class="smallCircle" id="circ6shadow"></div>
              </div>
          </div>

          <div class="bigCloud" id="cloud4">
              <div class="largeCircle" id="circ1">
                  <div class="largeCircle" id="circ1shadow"></div>
              </div>
              <div class="middleCircle" id="circ2">
                  <div class="middleCircle" id="circ2shadow"></div>
              </div>
              <div class="middleCircle" id="circ3">
                  <div class="middleCircle" id="circ3shadow"></div>
              </div>
              <div class="smallCircle" id="circ4"></div>
              <div class="smallCircle" id="circ5">
                  <div class="smallCircle" id="circ5shadow"></div>
              </div>
              <div class="smallCircle" id="circ6">
                  <div class="smallCircle" id="circ6shadow"></div>
              </div>
          </div>

          <div class="bigCloud" id="cloud5">
              <div class="largeCircle" id="circ1">
                  <div class="largeCircle" id="circ1shadow"></div>
              </div>
              <div class="middleCircle" id="circ2">
                  <div class="middleCircle" id="circ2shadow"></div>
              </div>
              <div class="middleCircle" id="circ3">
                  <div class="middleCircle" id="circ3shadow"></div>
              </div>
              <div class="smallCircle" id="circ4"></div>
              <div class="smallCircle" id="circ5">
                  <div class="smallCircle" id="circ5shadow"></div>
              </div>
              <div class="smallCircle" id="circ6">
                  <div class="smallCircle" id="circ6shadow"></div>
              </div>
          </div>

          <div class="bigCloud" id="cloud6">
              <div class="largeCircle" id="circ1">
                  <div class="largeCircle" id="circ1shadow"></div>
              </div>
              <div class="middleCircle" id="circ2">
                  <div class="middleCircle" id="circ2shadow"></div>
              </div>
              <div class="middleCircle" id="circ3">
                  <div class="middleCircle" id="circ3shadow"></div>
              </div>
              <div class="smallCircle" id="circ4"></div>
              <div class="smallCircle" id="circ5">
                  <div class="smallCircle" id="circ5shadow"></div>
              </div>
              <div class="smallCircle" id="circ6">
                  <div class="smallCircle" id="circ6shadow"></div>
              </div>
          </div>

          <div class="bigCloud" id="cloud7">
              <div class="largeCircle" id="circ1">
                  <div class="largeCircle" id="circ1shadow"></div>
              </div>
              <div class="middleCircle" id="circ2">
                  <div class="middleCircle" id="circ2shadow"></div>
              </div>
              <div class="middleCircle" id="circ3">
                  <div class="middleCircle" id="circ3shadow"></div>
              </div>
              <div class="smallCircle" id="circ4"></div>
              <div class="smallCircle" id="circ5">
                  <div class="smallCircle" id="circ5shadow"></div>
              </div>
              <div class="smallCircle" id="circ6">
                  <div class="smallCircle" id="circ6shadow"></div>
              </div>
          </div>

</div>
</div>

<!-- easter end -->
<div class="background">
  <div class="canvas-container">
    <canvas id="fieldCanvas" style="width: 100%; height: 100%"> </canvas>
  </div>
</div>


@yield('content')



    <script>

         $(document).ready( function () {
               $('.captcha-input').on('keypress',function(e) {
                  if(!($('.captcha-error').hasClass('hidden'))){
                      $('.captcha-error').addClass('hidden');
                  }
                });
                $('.game-select').on('change',function(){
                    var gameId = $(this).find(':selected').data('title');
                    $('.game-id-text').val(gameId+'_');
                    console.log(gameId);
                });
                $('.game-id-text-display').hide();
                $('.game-id-text').on('keypress', function() {
                    // alert("hello");
                    $('.game-id-text-display').show();
                });
                $('.phone-text-display').hide();
                $('.phone-text').on('keypress', function() {
                    // alert("hello");
                    $('.phone-text-display').show();
                });

              $('.submit-btn').on('click',function(e) {
                    e.preventDefault();
                    var form = $('#regForm');

                    if($('input[name="full_name"]').val() == ''){
                        toastr.error('Error','Enter Full Name');
                        return;
                    }
                    if($('input[name="number"]').val() == ''){
                        toastr.error('Error','Enter your number');
                        return;
                    }
                    // if($('input[name="r_id"]')){
                    //     toastr.error('Error','Enter Full Name');
                    //     return;
                    // }
                    if($('input[name="email"]').val() == ''){
                        toastr.error('Error','Enter Email');
                        return;
                    }
                    if($('input[name="facebook_name"]').val() == ''){
                        toastr.error('Error','Enter your Facebook Name');
                        return;
                    }
                    if($('input[name="game_id"]').val() == ''){
                        toastr.error('Error','Enter your Game Id');
                        return;
                    }
                    // if($('input[name="full_name"]')){
                    //     toastr.error('Error','Enter Full Name');
                    //     return;
                    // }

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                            type: "POST",
                            url: '/checkCaptcha',
                            data: {
                               "_token": "{{ csrf_token() }}",'captcha': $('.captcha-input').val(),
                            },
                            dataType: 'json',
                            success: function (data) {
                                if(data == 'true'){
                                    form.submit();
                                }else{
                                    toastr.error('Error','Captcha Incorrect');
                                }
                                
                            },
                            error: function (data) {
                                toastr.error('Error','Something went wrong. Please Try again.');
                            }
                        });
                });
            } );

        var x, i, j, l, ll, selElmnt, a, b, c;
        /* Look for any elements with the class "custom-select-neon": */
        x = document.getElementsByClassName("custom-select-neon");
        l = x.length;
        for (i = 0; i < l; i++) {
          selElmnt = x[i].getElementsByTagName("select")[0];
          ll = selElmnt.length;
          /* For each element, create a new DIV that will act as the selected item: */
          a = document.createElement("DIV");
          a.setAttribute("class", "select-selected");
          a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        //   console.log(a);
          x[i].appendChild(a);

          console.log(x);
          /* For each element, create a new DIV that will contain the option list: */
          b = document.createElement("DIV");
          b.setAttribute("class", "select-items select-hide");
          for (j = 1; j < ll; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                console.log(s);
                sl = s.length;
                h = this.parentNode.previousSibling;
                console.log(h);
                for (i = 0; i < sl; i++) {
                  if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    console.log(i);
                    h.innerHTML = this.innerHTML;
                    console.log(h);
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                      y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                  }
                }
                h.click();
            });
            b.appendChild(c);
          }
          console.log(b);
          x[i].appendChild(b);
          a.addEventListener("click", function(e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
          });
        }

        function closeAllSelect(elmnt) {
          /* A function that will close all select boxes in the document,
          except the current select box: */
          var x, y, i, xl, yl, arrNo = [];
          x = document.getElementsByClassName("select-items");
          y = document.getElementsByClassName("select-selected");
          xl = x.length;
          yl = y.length;
          for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
              arrNo.push(i)
            } else {
              y[i].classList.remove("select-arrow-active");
            }
          }
          for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
              x[i].classList.add("select-hide");
            }
          }
        }

        /* If the user clicks anywhere outside the select box,
        then close all select boxes: */
        document.addEventListener("click", closeAllSelect);
    </script>
    
    <!--get device name start here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/UAParser.js/2.0.0-alpha.2/ua-parser.min.js" integrity="sha512-kHEj6vZYgiWSjmNdiztJ0XX0/DVx/dA2ER5Y0lvDBx/ZxUIYCOTq3NnVgl15sSfLTGvk6S+9oYWU3oY8S7ulqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
     $(document).ready( function () {
           
        //   var device= 
        //     var os= parser.getOS().name;
        //      alert("test");
            alert(parser.getDevice().model;);
        var parser = new UAParser();
        var deviceData = {
            device: parser.getDevice().model,
            os: parser.getOS().name
        };
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/save-device-info',
            method: 'POST',
            data: deviceData,
            success: function(response) {
                console.log('Device information sent successfully.');
            },
            error: function(xhr, status, error) {
                console.error('Error sending device information:', error);
            }
        });
    });
</script>

<!--get device name end hare -->
<!-- partial -->
  <script  src="{{ asset('js/script.js') }}"></script>

</body>
</html>
