<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Aplikasi Presensi Premium By Keyrie Eleison">
    <meta name="author" content="Keyrie Eleison">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/template/presensi-abdul/img/logo.jpg" />

    <!-- Title -->
    <title>Login</title>

    <style>
        @media (max-width: 992px) {
            #gambar-login {
                display: none;
            }
        }
    </style>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/presensi-abdul/css/bootstrap.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/presensi-abdul/css/main.css">

    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/vendor/swal/sweetalert2.all.js"></script>


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- IMG Animation -->
    <style>
        svg#freepik_stories-computer-login:not(.animated) .animable {
            opacity: 0;
        }

        svg#freepik_stories-computer-login.animated #freepik--background-complete--inject-23 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
            animation-delay: 0s;
        }

        svg#freepik_stories-computer-login.animated #freepik--Shadow--inject-23 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
            animation-delay: 0s;
        }

        svg#freepik_stories-computer-login.animated #freepik--Plant--inject-23 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
            animation-delay: 0s;
        }

        svg#freepik_stories-computer-login.animated #freepik--trash-bin--inject-23 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
            animation-delay: 0s;
        }

        svg#freepik_stories-computer-login.animated #freepik--Screen--inject-23 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight, 1.5s Infinite linear floating;
            animation-delay: 0s, 1s;
        }

        svg#freepik_stories-computer-login.animated #freepik--speech-bubble--inject-23 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut, 1.5s Infinite linear heartbeat;
            animation-delay: 0s, 1s;
        }

        svg#freepik_stories-computer-login.animated #freepik--Character--inject-23 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
            animation-delay: 0s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes zoomOut {
            0% {
                opacity: 0;
                transform: scale(1.5);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideLeft {
            0% {
                opacity: 0;
                transform: translateX(-30px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideRight {
            0% {
                opacity: 0;
                transform: translateX(30px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes floating {
            0% {
                opacity: 1;
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @keyframes heartbeat {
            0% {
                transform: scale(1);
            }

            10% {
                transform: scale(1.1);
            }

            30% {
                transform: scale(1);
            }

            40% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            60% {
                transform: scale(1);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: inherit;
            }
        }
    </style>
    <!-- END IMG Animation -->

</head>

<body class="authentication" style="background: none;">

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

    <!-- *************
			************ Login container start *************
		************* -->
    <div class="login-container">

        <div class="container-fluid h-100">
            <!-- Row start -->
            <div class="row g-0 h-100">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 gambar-login" id="gambar-login">
                    <div class="login-about" style="padding: 10px;">
                        <svg class="animated" id="freepik_stories-computer-login" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                            <g id="freepik--background-complete--inject-23" class="animable" style="transform-origin: 250px 228.23px;">
                                <rect y="382.4" width="500" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 250px 382.525px;" id="elg3odlgg6ua5" class="animable"></rect>
                                <rect x="416.78" y="398.49" width="33.12" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 433.34px 398.615px;" id="elbq31hr2mhrm" class="animable">
                                </rect>
                                <rect x="322.53" y="401.21" width="8.69" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 326.875px 401.335px;" id="el6a4u5o76ppw" class="animable"></rect>
                                <rect x="396.59" y="389.21" width="19.19" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 406.185px 389.335px;" id="elmtznwer134h" class="animable"></rect>
                                <rect x="52.46" y="390.89" width="43.19" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 74.055px 391.015px;" id="ely0mukz1u57" class="animable">
                                </rect>
                                <rect x="104.56" y="390.89" width="6.33" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 107.725px 391.015px;" id="elaqvzjtvwihl" class="animable"></rect>
                                <rect x="131.47" y="395.11" width="93.68" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 178.31px 395.235px;" id="elcfxu59et0hc" class="animable">
                                </rect>
                                <path d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z" style="fill: rgb(235, 235, 235); transform-origin: 140.46px 196.4px;" id="eldomwzqbu8j8" class="animable">
                                </path>
                                <path d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z" style="fill: rgb(235, 235, 235); transform-origin: 356.75px 196.4px;" id="elembm0iz1t4" class="animable">
                                </path>
                                <rect x="79.34" y="102.67" width="169.52" height="189.92" style="fill: rgb(235, 235, 235); transform-origin: 164.1px 197.63px;" id="elq7gkfhgzk6e" class="animable">
                                </rect>
                                <rect x="82.67" y="105.74" width="166.19" height="183.49" style="fill: rgb(250, 250, 250); transform-origin: 165.765px 197.485px;" id="elszy4dt0wg7p" class="animable"></rect>
                                <polygon points="88.81 203.13 88.81 190.24 92.49 190.24 92.49 181.64 97.4 181.64 97.4 168.75 98.63 168.75 98.63 181.64 103.54 181.64 103.54 190.24 107.22 190.24 107.22 203.13 113.98 203.13 113.98 206.81 117.05 206.81 117.05 220.93 117.66 220.93 117.66 200.67 119.5 200.67 119.5 213.56 121.34 213.56 121.34 182.87 122.57 182.87 122.57 195.76 127.48 195.76 127.48 191.47 129.32 191.47 129.32 173.66 133.01 173.66 133.01 155.86 134.24 155.86 134.24 158.31 159.41 158.31 159.41 150.95 163.7 150.95 163.7 122.71 165.55 122.71 165.55 150.95 171.69 150.95 171.69 158.31 174.14 158.31 174.14 195.15 187.03 195.15 187.03 184.1 182.74 184.1 182.74 182.26 187.03 182.26 187.03 179.19 199.31 179.19 199.31 150.95 202.38 150.95 202.38 146.65 217.11 146.65 217.11 150.95 218.96 150.95 218.96 190.24 225.71 190.24 225.71 208.04 229.39 208.04 229.39 193.92 232.46 193.92 232.46 190.24 239.22 190.24 239.22 177.34 242.9 177.34 242.9 168.75 247.19 168.75 247.19 155.86 248.86 155.86 248.86 289.23 82.67 289.23 82.67 203.13 88.81 203.13" style="fill: rgb(240, 240, 240); transform-origin: 165.765px 205.97px;" id="elei1wbbk5w3w" class="animable">
                                </polygon>
                                <rect x="148.27" y="160.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 149.14px 161.11px;" id="eljp3ty7casxd" class="animable">
                                </rect>
                                <rect x="148.27" y="163.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 149.14px 164.02px;" id="elkntk5qwsvyr" class="animable">
                                </rect>
                                <rect x="148.27" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 149.14px 175.69px;" id="els5fzqxhkmd" class="animable">
                                </rect>
                                <rect x="148.27" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 149.14px 178.6px;" id="elqxhlwpxm7ga" class="animable">
                                </rect>
                                <rect x="148.27" y="180.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 149.14px 181.52px;" id="elxtf51lfpec" class="animable">
                                </rect>
                                <rect x="148.27" y="189.4" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 149.14px 190.27px;" id="elip1ajyf9g18" class="animable">
                                </rect>
                                <rect x="148.27" y="192.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 149.14px 193.18px;" id="elnmfva15m4y" class="animable">
                                </rect>
                                <rect x="151.03" y="171.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 151.9px 172.77px;" id="elri1b514uqit" class="animable">
                                </rect>
                                <rect x="151.03" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 151.9px 175.69px;" id="el4flfky40h7k" class="animable">
                                </rect>
                                <rect x="151.03" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 151.9px 178.6px;" id="el1o0ui8ownve" class="animable">
                                </rect>
                                <rect x="151.03" y="180.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 151.9px 181.52px;" id="el2dok1pshi02" class="animable">
                                </rect>
                                <rect x="151.03" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 151.9px 184.44px;" id="elkrexmgy5l3r" class="animable">
                                </rect>
                                <rect x="151.03" y="189.4" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 151.9px 190.27px;" id="elq7y2myyg3re" class="animable">
                                </rect>
                                <rect x="151.03" y="192.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 151.9px 193.18px;" id="eli5m4qlxgx5q" class="animable">
                                </rect>
                                <rect x="153.79" y="160.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 161.11px;" id="el5jsg26y1dzt" class="animable">
                                </rect>
                                <rect x="153.79" y="163.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 164.02px;" id="elwwcknqa5s9e" class="animable">
                                </rect>
                                <rect x="153.79" y="166.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 166.94px;" id="el1ut17ermufy" class="animable">
                                </rect>
                                <rect x="153.79" y="168.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 169.86px;" id="elae885lu24g7" class="animable">
                                </rect>
                                <rect x="153.79" y="171.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 172.77px;" id="elfc0fxafd20p" class="animable">
                                </rect>
                                <rect x="153.79" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 175.69px;" id="el2homqhdf1z2" class="animable">
                                </rect>
                                <rect x="153.79" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 178.6px;" id="eljlrg0ycyj5s" class="animable">
                                </rect>
                                <rect x="153.79" y="180.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 181.52px;" id="el09dimio9jc0f" class="animable">
                                </rect>
                                <rect x="153.79" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 184.44px;" id="elxwbsa7vtlr" class="animable">
                                </rect>
                                <rect x="153.79" y="186.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 187.35px;" id="elwfp42oadr8" class="animable">
                                </rect>
                                <rect x="153.79" y="192.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 154.66px 193.18px;" id="elpwqn5e7xuhk" class="animable">
                                </rect>
                                <rect x="156.56" y="160.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 157.43px 161.11px;" id="el8fhspeegj4" class="animable">
                                </rect>
                                <rect x="156.56" y="163.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 157.43px 164.02px;" id="elfcc7pr6apz" class="animable">
                                </rect>
                                <rect x="156.56" y="166.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 157.43px 166.94px;" id="elr0ajrextoed" class="animable">
                                </rect>
                                <rect x="156.56" y="168.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 157.43px 169.86px;" id="el6ljhiv34jum" class="animable">
                                </rect>
                                <rect x="156.56" y="171.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 157.43px 172.77px;" id="el7wpdxgnhkze" class="animable">
                                </rect>
                                <rect x="156.56" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 157.43px 175.69px;" id="elm83x1r5cfu" class="animable">
                                </rect>
                                <rect x="156.56" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 157.43px 178.6px;" id="elhm0dq08qvvp" class="animable">
                                </rect>
                                <rect x="156.56" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 157.43px 204.85px;" id="el749kye45jgi" class="animable">
                                </rect>
                                <rect x="159.32" y="160.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 161.11px;" id="elkd6rw9y448t" class="animable">
                                </rect>
                                <rect x="159.32" y="163.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 164.02px;" id="el5swh2egd6hj" class="animable">
                                </rect>
                                <rect x="159.32" y="166.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 166.94px;" id="el7ibxv0nxfkm" class="animable">
                                </rect>
                                <rect x="159.32" y="168.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 169.86px;" id="el39el0tv23e2" class="animable">
                                </rect>
                                <rect x="159.32" y="171.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 172.77px;" id="el9up2y5e7v8t" class="animable">
                                </rect>
                                <rect x="159.32" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 175.69px;" id="elnujqk42cwy" class="animable">
                                </rect>
                                <rect x="159.32" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 178.6px;" id="elizs6zj4vazp" class="animable">
                                </rect>
                                <rect x="159.32" y="180.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 181.52px;" id="el8ju3scbf229" class="animable">
                                </rect>
                                <rect x="159.32" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 199.02px;" id="eljas30pcscwi" class="animable">
                                </rect>
                                <rect x="159.32" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 201.93px;" id="el01w2i7iqlate" class="animable">
                                </rect>
                                <rect x="159.32" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 204.85px;" id="el7hm7njd904m" class="animable">
                                </rect>
                                <rect x="159.32" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 207.77px;" id="elqzwvzcw70vm" class="animable">
                                </rect>
                                <rect x="159.32" y="218.56" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 160.19px 219.43px;" id="elcq9xmyencef" class="animable">
                                </rect>
                                <rect x="162.08" y="160.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 161.11px;" id="el2t4m7q5old" class="animable">
                                </rect>
                                <rect x="162.08" y="163.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 164.02px;" id="el58qzsa1zn5m" class="animable">
                                </rect>
                                <rect x="162.08" y="166.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 166.94px;" id="ell6yorqkuz7k" class="animable">
                                </rect>
                                <rect x="162.08" y="168.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 169.86px;" id="el0bowmncijw6" class="animable">
                                </rect>
                                <rect x="162.08" y="171.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 172.77px;" id="eltbb0826otaa" class="animable">
                                </rect>
                                <rect x="162.08" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 175.69px;" id="eloueu9j68mch" class="animable">
                                </rect>
                                <rect x="162.08" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 178.6px;" id="el9hlqcy2q23o" class="animable">
                                </rect>
                                <rect x="162.08" y="180.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 181.52px;" id="elpo4uhkhhkx" class="animable">
                                </rect>
                                <rect x="162.08" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 184.44px;" id="elzba8vubzdh" class="animable">
                                </rect>
                                <rect x="162.08" y="186.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 187.35px;" id="elskcrhaf7yni" class="animable">
                                </rect>
                                <rect x="162.08" y="195.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 196.1px;" id="el44wzb6872la" class="animable">
                                </rect>
                                <rect x="162.08" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 199.02px;" id="el9tzky7i31dc" class="animable">
                                </rect>
                                <rect x="162.08" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 201.93px;" id="el3bq4o2bfqqh" class="animable">
                                </rect>
                                <rect x="162.08" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 204.85px;" id="eluu47lh44rnd" class="animable">
                                </rect>
                                <rect x="162.08" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 207.77px;" id="el2mv0fo862m8" class="animable">
                                </rect>
                                <rect x="162.08" y="218.56" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 162.95px 219.43px;" id="el1lstn2lkjg7" class="animable">
                                </rect>
                                <rect x="164.84" y="160.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 161.11px;" id="el2h5dio2cjh8" class="animable">
                                </rect>
                                <rect x="164.84" y="163.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 164.02px;" id="el6y3z0zkuqot" class="animable">
                                </rect>
                                <rect x="164.84" y="166.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 166.94px;" id="el5ay94ftjuks" class="animable">
                                </rect>
                                <rect x="164.84" y="168.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 169.86px;" id="elemuo7mtnyro" class="animable">
                                </rect>
                                <rect x="164.84" y="171.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 172.77px;" id="eldbr9w24mthe" class="animable">
                                </rect>
                                <rect x="164.84" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 175.69px;" id="elopihqwft4n" class="animable">
                                </rect>
                                <rect x="164.84" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 178.6px;" id="elyit2nets0r" class="animable">
                                </rect>
                                <rect x="164.84" y="180.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 181.52px;" id="elh5i2nbicybw" class="animable">
                                </rect>
                                <rect x="164.84" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 184.44px;" id="elohe2dpn1kd" class="animable">
                                </rect>
                                <rect x="164.84" y="186.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 187.35px;" id="elechw481ml9j" class="animable">
                                </rect>
                                <rect x="164.84" y="189.4" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 190.27px;" id="elqb3bojetmq" class="animable">
                                </rect>
                                <rect x="164.84" y="192.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 193.18px;" id="el7epf8g31bip" class="animable">
                                </rect>
                                <rect x="164.84" y="195.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 196.1px;" id="elkxt9w3elfs" class="animable">
                                </rect>
                                <rect x="164.84" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 199.02px;" id="elupsfgjowp1g" class="animable">
                                </rect>
                                <rect x="164.84" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 201.93px;" id="el6a1qp4ngugu" class="animable">
                                </rect>
                                <rect x="164.84" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 204.85px;" id="el3y1ztvhye7u" class="animable">
                                </rect>
                                <rect x="164.84" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 207.77px;" id="el792aemx2322" class="animable">
                                </rect>
                                <rect x="164.84" y="209.81" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 165.71px 210.68px;" id="elrczmdei1en" class="animable">
                                </rect>
                                <rect x="167.61" y="160.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 161.11px;" id="el3lm3n44lz93" class="animable">
                                </rect>
                                <rect x="167.61" y="163.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 164.02px;" id="elhxszbix168v" class="animable">
                                </rect>
                                <rect x="167.61" y="166.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 166.94px;" id="elryl1a10q27f" class="animable">
                                </rect>
                                <rect x="167.61" y="168.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 169.86px;" id="el8q1u5vb0idn" class="animable">
                                </rect>
                                <rect x="167.61" y="171.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 172.77px;" id="elw63in9lebc" class="animable">
                                </rect>
                                <rect x="167.61" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 175.69px;" id="eldau7fp5ywg4" class="animable">
                                </rect>
                                <rect x="167.61" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 178.6px;" id="elmmq4q8jsu1e" class="animable">
                                </rect>
                                <rect x="167.61" y="180.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 181.52px;" id="elx8pqoponf1r" class="animable">
                                </rect>
                                <rect x="167.61" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 184.44px;" id="el2eoedeomwaw" class="animable">
                                </rect>
                                <rect x="167.61" y="186.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 187.35px;" id="elvim0x0s6ove" class="animable">
                                </rect>
                                <rect x="167.61" y="195.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 196.1px;" id="elo680z34gla7" class="animable">
                                </rect>
                                <rect x="167.61" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 199.02px;" id="elc3h9u87dywq" class="animable">
                                </rect>
                                <rect x="167.61" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 201.93px;" id="el9pcl75n8ocd" class="animable">
                                </rect>
                                <rect x="167.61" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 168.48px 204.85px;" id="elp515u5qcpmc" class="animable">
                                </rect>
                                <rect x="170.37" y="160.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 161.11px;" id="eldk950gxnnul" class="animable">
                                </rect>
                                <rect x="170.37" y="163.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 164.02px;" id="elv8eve9uhxwj" class="animable">
                                </rect>
                                <rect x="170.37" y="166.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 166.94px;" id="elnrbp9qnxtqf" class="animable">
                                </rect>
                                <rect x="170.37" y="168.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 169.86px;" id="ely6ug9lwklca" class="animable">
                                </rect>
                                <rect x="170.37" y="171.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 172.77px;" id="elsgub5k0yeek" class="animable">
                                </rect>
                                <rect x="170.37" y="174.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 175.69px;" id="elcavdue9nams" class="animable">
                                </rect>
                                <rect x="170.37" y="177.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 178.6px;" id="elkz7dplg6bj" class="animable">
                                </rect>
                                <rect x="170.37" y="180.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 181.52px;" id="elrrpcwgvxatg" class="animable">
                                </rect>
                                <rect x="170.37" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 184.44px;" id="elzpta1myjo1" class="animable">
                                </rect>
                                <rect x="170.37" y="186.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 187.35px;" id="elzuo3d2e4hdf" class="animable">
                                </rect>
                                <rect x="170.37" y="195.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 196.1px;" id="elcn2nnyafscj" class="animable">
                                </rect>
                                <rect x="170.37" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 199.02px;" id="els80cf0st4c" class="animable">
                                </rect>
                                <rect x="170.37" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 171.24px 201.93px;" id="ely3ntsaxjk4" class="animable">
                                </rect>
                                <rect x="201.47" y="152.67" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 153.54px;" id="elkzeaisidkgd" class="animable">
                                </rect>
                                <rect x="201.47" y="155.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 156.45px;" id="elzpnvt7ejlt" class="animable">
                                </rect>
                                <rect x="201.47" y="158.5" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 159.37px;" id="elqll2ao6v3hg" class="animable">
                                </rect>
                                <rect x="201.47" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 162.28px;" id="elgu450oc5t7" class="animable">
                                </rect>
                                <rect x="201.47" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 165.2px;" id="elirw3mqx6q9" class="animable">
                                </rect>
                                <rect x="201.47" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 168.12px;" id="el1uhslg9koal" class="animable">
                                </rect>
                                <rect x="201.47" y="170.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 171.03px;" id="elzrc411r76cc" class="animable">
                                </rect>
                                <rect x="201.47" y="173.08" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 173.95px;" id="el393aj8et6dh" class="animable">
                                </rect>
                                <rect x="201.47" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 182.7px;" id="elvqk9q20nqhc" class="animable">
                                </rect>
                                <rect x="201.47" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 202.34px 185.61px;" id="elng5plcwp7ij" class="animable">
                                </rect>
                                <rect x="204.24" y="152.67" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 153.54px;" id="elo6phx9o34oi" class="animable">
                                </rect>
                                <rect x="204.24" y="155.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 156.45px;" id="elxg27l3pxna9" class="animable">
                                </rect>
                                <rect x="204.24" y="158.5" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 159.37px;" id="elv324hc36wz" class="animable">
                                </rect>
                                <rect x="204.24" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 162.28px;" id="elmyqp6qf1h5" class="animable">
                                </rect>
                                <rect x="204.24" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 165.2px;" id="eld8fz98uaht8" class="animable">
                                </rect>
                                <rect x="204.24" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 168.12px;" id="el403clmn3tc" class="animable">
                                </rect>
                                <rect x="204.24" y="170.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 171.03px;" id="el2pirev1qthp" class="animable">
                                </rect>
                                <rect x="204.24" y="173.08" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 173.95px;" id="elps1ca62uad" class="animable">
                                </rect>
                                <rect x="204.24" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 205.11px 185.61px;" id="el2qw73lsgscs" class="animable">
                                </rect>
                                <rect x="207" y="152.67" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 207.87px 153.54px;" id="elw5o89528p3" class="animable">
                                </rect>
                                <rect x="207" y="155.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 207.87px 156.45px;" id="elxanbbhhd2e" class="animable">
                                </rect>
                                <rect x="207" y="158.5" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 207.87px 159.37px;" id="ell3wmi0fgx7" class="animable">
                                </rect>
                                <rect x="207" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 207.87px 162.28px;" id="elcni6nhb7yf" class="animable">
                                </rect>
                                <rect x="207" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 207.87px 165.2px;" id="elwzp147xby" class="animable">
                                </rect>
                                <rect x="207" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 207.87px 168.12px;" id="elti6lp86nuus" class="animable">
                                </rect>
                                <rect x="207" y="170.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 207.87px 171.03px;" id="elm37tiryk3ui" class="animable">
                                </rect>
                                <rect x="207" y="173.08" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 207.87px 173.95px;" id="elryao8mzm68m" class="animable">
                                </rect>
                                <rect x="209.76" y="152.67" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 153.54px;" id="el27i3oe13c4i" class="animable">
                                </rect>
                                <rect x="209.76" y="155.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 156.45px;" id="elup2ujgk6yih" class="animable">
                                </rect>
                                <rect x="209.76" y="158.5" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 159.37px;" id="elomdl508tufr" class="animable">
                                </rect>
                                <rect x="209.76" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 162.28px;" id="eljpb17hsgpd" class="animable">
                                </rect>
                                <rect x="209.76" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 165.2px;" id="elxf5a19ebbn" class="animable">
                                </rect>
                                <rect x="209.76" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 168.12px;" id="el6hrcyeq732b" class="animable">
                                </rect>
                                <rect x="209.76" y="173.08" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 173.95px;" id="el9qko5drgo4r" class="animable">
                                </rect>
                                <rect x="209.76" y="176" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 176.87px;" id="el13583rdfl5t" class="animable">
                                </rect>
                                <rect x="209.76" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 185.61px;" id="elqra61yzvuvk" class="animable">
                                </rect>
                                <rect x="209.76" y="187.66" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 188.53px;" id="el16ciftgybdr" class="animable">
                                </rect>
                                <rect x="209.76" y="190.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 191.45px;" id="elxnbypighak" class="animable">
                                </rect>
                                <rect x="209.76" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 194.36px;" id="elh2e1smsmi7a" class="animable">
                                </rect>
                                <rect x="209.76" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 197.28px;" id="elkrb66324yi" class="animable">
                                </rect>
                                <rect x="209.76" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 200.19px;" id="elwh630m3ihjq" class="animable">
                                </rect>
                                <rect x="209.76" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 210.63px 203.11px;" id="el5bqxjodsgke" class="animable">
                                </rect>
                                <rect x="212.52" y="152.67" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 153.54px;" id="ellptzp419ga" class="animable">
                                </rect>
                                <rect x="212.52" y="155.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 156.45px;" id="el9brcsdbv0wa" class="animable">
                                </rect>
                                <rect x="212.52" y="158.5" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 159.37px;" id="elwrqpi0vfbl" class="animable">
                                </rect>
                                <rect x="212.52" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 162.28px;" id="eltbxgdmmtbb" class="animable">
                                </rect>
                                <rect x="212.52" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 165.2px;" id="el12daj7wcwjj" class="animable">
                                </rect>
                                <rect x="212.52" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 168.12px;" id="ellp1qqeyyku8" class="animable">
                                </rect>
                                <rect x="212.52" y="176" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 176.87px;" id="elcu2uq3civck" class="animable">
                                </rect>
                                <rect x="212.52" y="178.91" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 179.78px;" id="elut89t9r2l6p" class="animable">
                                </rect>
                                <rect x="212.52" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 182.7px;" id="elav18jo9btrg" class="animable">
                                </rect>
                                <rect x="212.52" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 185.61px;" id="elb4viqo16mh" class="animable">
                                </rect>
                                <rect x="212.52" y="187.66" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 188.53px;" id="el27ttp52dawp" class="animable">
                                </rect>
                                <rect x="212.52" y="190.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 191.45px;" id="ele7j9yebqjp5" class="animable">
                                </rect>
                                <rect x="212.52" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 194.36px;" id="el3jro1xcxwng" class="animable">
                                </rect>
                                <rect x="212.52" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 197.28px;" id="elxyjqcddvm5" class="animable">
                                </rect>
                                <rect x="212.52" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 200.19px;" id="el1z30oo1jcw2" class="animable">
                                </rect>
                                <rect x="212.52" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 203.11px;" id="elp8qfkza8un" class="animable">
                                </rect>
                                <rect x="212.52" y="205.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 206.03px;" id="ell1ytknhgpdn" class="animable">
                                </rect>
                                <rect x="212.52" y="210.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 213.39px 211.86px;" id="elsjjps3mao5l" class="animable">
                                </rect>
                                <rect x="215.29" y="152.67" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 153.54px;" id="el13mylx5xp25r" class="animable">
                                </rect>
                                <rect x="215.29" y="155.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 156.45px;" id="elznbipb3vz8p" class="animable">
                                </rect>
                                <rect x="215.29" y="158.5" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 159.37px;" id="el1rw5zjjl69" class="animable">
                                </rect>
                                <rect x="215.29" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 162.28px;" id="el1wlgnzenv44" class="animable">
                                </rect>
                                <rect x="215.29" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 165.2px;" id="elr3r0u0ixfki" class="animable">
                                </rect>
                                <rect x="215.29" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 168.12px;" id="elkubo1fbpr5" class="animable">
                                </rect>
                                <rect x="215.29" y="176" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 176.87px;" id="elhy1qkwpb5p" class="animable">
                                </rect>
                                <rect x="215.29" y="178.91" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 179.78px;" id="elw4vvv4fp9i" class="animable">
                                </rect>
                                <rect x="215.29" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 182.7px;" id="elbeugwjcps" class="animable">
                                </rect>
                                <rect x="215.29" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 185.61px;" id="eldqmtzinpx1c" class="animable">
                                </rect>
                                <rect x="215.29" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 194.36px;" id="el6jdhvmc32q6" class="animable">
                                </rect>
                                <rect x="215.29" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 197.28px;" id="elwwxt6sn3sxt" class="animable">
                                </rect>
                                <rect x="215.29" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 200.19px;" id="elhs5vhn2pn37" class="animable">
                                </rect>
                                <rect x="215.29" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 203.11px;" id="ellcwgq80wv2r" class="animable">
                                </rect>
                                <rect x="215.29" y="205.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 206.03px;" id="eltlhtwtchnld" class="animable">
                                </rect>
                                <rect x="215.29" y="210.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 211.86px;" id="eltr1jw374qgo" class="animable">
                                </rect>
                                <rect x="215.29" y="213.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 216.16px 214.77px;" id="el10lmpet28bn" class="animable">
                                </rect>
                                <rect x="240.35" y="179.78" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 180.65px;" id="ell0etpx4nkqg" class="animable">
                                </rect>
                                <rect x="240.35" y="182.7" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 183.57px;" id="elk67nqy68ovj" class="animable">
                                </rect>
                                <rect x="240.35" y="185.61" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 186.48px;" id="elrp9r42wuco" class="animable">
                                </rect>
                                <rect x="240.35" y="188.53" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 189.4px;" id="eluuxg6u7jjzi" class="animable">
                                </rect>
                                <rect x="240.35" y="191.45" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 192.32px;" id="el6s3emxzr7hf" class="animable">
                                </rect>
                                <rect x="240.35" y="194.36" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 195.23px;" id="el4k8btj7jjlj" class="animable">
                                </rect>
                                <rect x="240.35" y="197.28" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 198.15px;" id="elus3iw9v9gnl" class="animable">
                                </rect>
                                <rect x="240.35" y="206.03" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 206.9px;" id="elqqjxugg134" class="animable">
                                </rect>
                                <rect x="240.35" y="208.94" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 209.81px;" id="el7cxmxau1cp4" class="animable">
                                </rect>
                                <rect x="240.35" y="211.86" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 241.22px 212.73px;" id="el2w9ojbzlrvq" class="animable">
                                </rect>
                                <rect x="243.12" y="179.78" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 243.99px 180.65px;" id="ela1esys118k" class="animable">
                                </rect>
                                <rect x="243.12" y="182.7" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 243.99px 183.57px;" id="elwdzvifrzsqm" class="animable">
                                </rect>
                                <rect x="243.12" y="185.61" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 243.99px 186.48px;" id="eldupqc6la0fd" class="animable">
                                </rect>
                                <rect x="243.12" y="188.53" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 243.99px 189.4px;" id="elt4f8ywsdtm" class="animable">
                                </rect>
                                <rect x="243.12" y="191.45" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 243.99px 192.32px;" id="elkjz6amo1hp" class="animable">
                                </rect>
                                <rect x="243.12" y="194.36" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 243.99px 195.23px;" id="eleqdzxcucz9e" class="animable">
                                </rect>
                                <rect x="243.12" y="197.28" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 243.99px 198.15px;" id="eluxtm4x0fko" class="animable">
                                </rect>
                                <rect x="245.88" y="179.78" width="2.5" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 247.13px 180.65px;" id="elmhttkzewhn" class="animable">
                                </rect>
                                <rect x="245.88" y="182.7" width="2.5" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 247.13px 183.57px;" id="els92k6uruvyq" class="animable">
                                </rect>
                                <rect x="245.88" y="185.61" width="2.5" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 247.13px 186.48px;" id="elf1wr66vy4nf" class="animable">
                                </rect>
                                <rect x="245.88" y="188.53" width="2.5" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 247.13px 189.4px;" id="elg5d3cxn3k6" class="animable">
                                </rect>
                                <rect x="245.88" y="191.45" width="2.5" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 247.13px 192.32px;" id="el6haiuq9eyhm" class="animable">
                                </rect>
                                <rect x="245.88" y="194.36" width="2.5" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 247.13px 195.23px;" id="elvka934ydjro" class="animable">
                                </rect>
                                <rect x="245.88" y="197.28" width="2.5" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 247.13px 198.15px;" id="el5tt49i99ku5" class="animable">
                                </rect>
                                <rect x="93.94" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 184.44px;" id="elnq9u6wovsf" class="animable">
                                </rect>
                                <rect x="93.94" y="186.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 187.35px;" id="el0rezz97h4njc" class="animable">
                                </rect>
                                <rect x="93.94" y="189.4" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 190.27px;" id="elgde0wb9lgj8" class="animable">
                                </rect>
                                <rect x="93.94" y="192.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 193.18px;" id="elu9kqe6jx4md" class="animable">
                                </rect>
                                <rect x="93.94" y="195.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 196.1px;" id="elznyqok4towl" class="animable">
                                </rect>
                                <rect x="93.94" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 199.02px;" id="el5xhguvs19nh" class="animable">
                                </rect>
                                <rect x="93.94" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 201.93px;" id="elacjnoncqfnv" class="animable">
                                </rect>
                                <rect x="93.94" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 204.85px;" id="elqwq5sd3oan" class="animable">
                                </rect>
                                <rect x="93.94" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 207.77px;" id="eli64mnh2mumi" class="animable">
                                </rect>
                                <rect x="93.94" y="209.81" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 210.68px;" id="elkpmwgaubbvq" class="animable">
                                </rect>
                                <rect x="93.94" y="212.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 213.6px;" id="el1dfv54o2iqv" class="animable">
                                </rect>
                                <rect x="93.94" y="215.64" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 216.51px;" id="elsvsy91ds4j" class="animable">
                                </rect>
                                <rect x="93.94" y="218.56" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 219.43px;" id="el1dj2cxn968wj" class="animable">
                                </rect>
                                <rect x="93.94" y="221.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 222.35px;" id="eljkm20iqjfdn" class="animable">
                                </rect>
                                <rect x="93.94" y="224.39" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 225.26px;" id="elnwc10ayxw2q" class="animable">
                                </rect>
                                <rect x="93.94" y="227.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 228.18px;" id="elsaifz0ms4up" class="animable">
                                </rect>
                                <rect x="93.94" y="230.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 231.09px;" id="elq08ca9tgosp" class="animable">
                                </rect>
                                <rect x="93.94" y="233.14" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 234.01px;" id="eln9g7agrsu4" class="animable">
                                </rect>
                                <rect x="93.94" y="236.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 236.93px;" id="elk9ftcp6xld" class="animable">
                                </rect>
                                <rect x="93.94" y="238.97" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 94.81px 239.84px;" id="elaakvdtrc2ha" class="animable">
                                </rect>
                                <rect x="96.7" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 184.44px;" id="ellbs1y27b19l" class="animable">
                                </rect>
                                <rect x="96.7" y="186.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 187.35px;" id="elpgklnw8t6xq" class="animable">
                                </rect>
                                <rect x="96.7" y="189.4" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 190.27px;" id="el7h0h8qmhkre" class="animable">
                                </rect>
                                <rect x="96.7" y="192.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 193.18px;" id="elvh4u7jto6pi" class="animable">
                                </rect>
                                <rect x="96.7" y="195.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 196.1px;" id="elmbm4culmotf" class="animable">
                                </rect>
                                <rect x="96.7" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 199.02px;" id="elkczczg7d9c" class="animable">
                                </rect>
                                <rect x="96.7" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 201.93px;" id="elb8t8z6anvfw" class="animable">
                                </rect>
                                <rect x="96.7" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 204.85px;" id="ell0uyzdhevm" class="animable">
                                </rect>
                                <rect x="96.7" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 207.77px;" id="el91ng4tyw5pd" class="animable">
                                </rect>
                                <rect x="96.7" y="209.81" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 210.68px;" id="elhy2yqa1bkio" class="animable">
                                </rect>
                                <rect x="96.7" y="212.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 213.6px;" id="elowbxpdg7cb" class="animable">
                                </rect>
                                <rect x="96.7" y="215.64" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 216.51px;" id="el5uursjscv8b" class="animable">
                                </rect>
                                <rect x="96.7" y="218.56" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 219.43px;" id="eluvzna2w78w" class="animable">
                                </rect>
                                <rect x="96.7" y="221.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 222.35px;" id="elbkv72jz66ng" class="animable">
                                </rect>
                                <rect x="96.7" y="224.39" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 225.26px;" id="el502fcc8gx76" class="animable">
                                </rect>
                                <rect x="96.7" y="227.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 228.18px;" id="elp4gk86y08na" class="animable">
                                </rect>
                                <rect x="96.7" y="230.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 231.09px;" id="el84k4rva9uab" class="animable">
                                </rect>
                                <rect x="96.7" y="233.14" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 97.57px 234.01px;" id="elnv00gaazyk" class="animable">
                                </rect>
                                <rect x="99.46" y="183.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 184.44px;" id="el5ii7pdo7qna" class="animable">
                                </rect>
                                <rect x="99.46" y="186.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 187.35px;" id="elk4b1jh1vfg" class="animable">
                                </rect>
                                <rect x="99.46" y="189.4" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 190.27px;" id="el94td7yq0en6" class="animable">
                                </rect>
                                <rect x="99.46" y="192.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 193.18px;" id="elqyroad165q" class="animable">
                                </rect>
                                <rect x="99.46" y="195.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 196.1px;" id="elq9pr8f0x7a" class="animable">
                                </rect>
                                <rect x="99.46" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 199.02px;" id="eltwzgtnhplx" class="animable">
                                </rect>
                                <rect x="99.46" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 201.93px;" id="el9vzckw085to" class="animable">
                                </rect>
                                <rect x="99.46" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 204.85px;" id="elzwigzlfqp39" class="animable">
                                </rect>
                                <rect x="99.46" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 207.77px;" id="el0s0foyolvued" class="animable">
                                </rect>
                                <rect x="99.46" y="209.81" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 210.68px;" id="el8y4x13fsi9f" class="animable">
                                </rect>
                                <rect x="99.46" y="212.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 213.6px;" id="eliv8tm9tz7hn" class="animable">
                                </rect>
                                <rect x="99.46" y="215.64" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 216.51px;" id="eleeeyk2r1cmd" class="animable">
                                </rect>
                                <rect x="99.46" y="218.56" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 219.43px;" id="elz5d4n0xpr8r" class="animable">
                                </rect>
                                <rect x="99.46" y="221.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 222.35px;" id="elg121opwfslq" class="animable">
                                </rect>
                                <rect x="99.46" y="224.39" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 225.26px;" id="eliiug5mxzgp" class="animable">
                                </rect>
                                <rect x="99.46" y="227.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 228.18px;" id="elhtgpctq310a" class="animable">
                                </rect>
                                <rect x="99.46" y="230.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 231.09px;" id="el0rdk7lxmuote" class="animable">
                                </rect>
                                <rect x="99.46" y="233.14" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 100.33px 234.01px;" id="elvihzuop59o" class="animable">
                                </rect>
                                <rect x="83.6" y="204.85" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 205.72px;" id="eldy5ipssxv2w" class="animable">
                                </rect>
                                <rect x="83.6" y="207.77" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 208.64px;" id="elftvezmd7jn" class="animable">
                                </rect>
                                <rect x="83.6" y="210.68" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 211.55px;" id="eltdf8m9gu5el" class="animable">
                                </rect>
                                <rect x="83.6" y="213.6" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 214.47px;" id="ele8i43ep8aow" class="animable">
                                </rect>
                                <rect x="83.6" y="216.51" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 217.38px;" id="eln7etrax7mv" class="animable">
                                </rect>
                                <rect x="83.6" y="219.43" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 220.3px;" id="el66n5ttjiyqj" class="animable">
                                </rect>
                                <rect x="83.6" y="222.35" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 223.22px;" id="eldd4z22bgyi" class="animable">
                                </rect>
                                <rect x="83.6" y="225.26" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 226.13px;" id="elwyiswawq0ho" class="animable">
                                </rect>
                                <rect x="83.6" y="228.18" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 229.05px;" id="elhrg2utdh8ck" class="animable">
                                </rect>
                                <rect x="83.6" y="231.09" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 231.96px;" id="elme6f80i5cqg" class="animable">
                                </rect>
                                <rect x="83.6" y="234.01" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 234.88px;" id="el4cemmfr8n0i" class="animable">
                                </rect>
                                <rect x="83.6" y="236.93" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 237.8px;" id="elh2807xqlx46" class="animable">
                                </rect>
                                <rect x="83.6" y="239.84" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 84.47px 240.71px;" id="el354187l4sjh" class="animable">
                                </rect>
                                <rect x="86.36" y="204.85" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 205.72px;" id="el23sdnpec6ke" class="animable">
                                </rect>
                                <rect x="86.36" y="207.77" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 208.64px;" id="elcxpcl2wwnq7" class="animable">
                                </rect>
                                <rect x="86.36" y="210.68" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 211.55px;" id="elo9tdod6e3hm" class="animable">
                                </rect>
                                <rect x="86.36" y="213.6" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 214.47px;" id="elfbrn98ch97i" class="animable">
                                </rect>
                                <rect x="86.36" y="216.51" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 217.38px;" id="elp4wntgm20y" class="animable">
                                </rect>
                                <rect x="86.36" y="219.43" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 220.3px;" id="eltfe5isj2ds" class="animable">
                                </rect>
                                <rect x="86.36" y="222.35" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 223.22px;" id="el3bhrnqwkroi" class="animable">
                                </rect>
                                <rect x="86.36" y="225.26" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 226.13px;" id="els8c57xdqno" class="animable">
                                </rect>
                                <rect x="86.36" y="228.18" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 229.05px;" id="elk3ge5q7zsws" class="animable">
                                </rect>
                                <rect x="86.36" y="231.09" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 231.96px;" id="elef8w0ui20vj" class="animable">
                                </rect>
                                <rect x="86.36" y="234.01" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 234.88px;" id="elpmk709d7zkd" class="animable">
                                </rect>
                                <rect x="86.36" y="236.93" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 237.8px;" id="ele9dcr15ras" class="animable">
                                </rect>
                                <rect x="86.36" y="239.84" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 87.23px 240.71px;" id="elop1q1l251wn" class="animable">
                                </rect>
                                <rect x="89.13" y="204.85" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 205.72px;" id="elxvco08n8ul" class="animable">
                                </rect>
                                <rect x="89.13" y="207.77" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 208.64px;" id="elx8i8ph9me5" class="animable">
                                </rect>
                                <rect x="89.13" y="210.68" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 211.55px;" id="elzldq7h7lt0m" class="animable">
                                </rect>
                                <rect x="89.13" y="213.6" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 214.47px;" id="elcbdqrbpdj4l" class="animable">
                                </rect>
                                <rect x="89.13" y="216.51" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 217.38px;" id="elf0mx0i7kfov" class="animable">
                                </rect>
                                <rect x="89.13" y="219.43" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 220.3px;" id="elv1hwurbc2ul" class="animable">
                                </rect>
                                <rect x="89.13" y="222.35" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 223.22px;" id="el0bgoaoq94768" class="animable">
                                </rect>
                                <rect x="89.13" y="225.26" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 226.13px;" id="el6ox3jpcek28" class="animable">
                                </rect>
                                <rect x="89.13" y="228.18" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 229.05px;" id="ely2trv1vncng" class="animable">
                                </rect>
                                <rect x="89.13" y="231.09" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 231.96px;" id="elbvycgjyrtt6" class="animable">
                                </rect>
                                <rect x="89.13" y="234.01" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 234.88px;" id="el9ya2hdk5zzh" class="animable">
                                </rect>
                                <rect x="89.13" y="236.93" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 237.8px;" id="elmj5w1g8onsh" class="animable">
                                </rect>
                                <rect x="89.13" y="239.84" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 240.71px;" id="el9th20d4u73e" class="animable">
                                </rect>
                                <rect x="89.13" y="242.76" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 90px 243.63px;" id="elqjy6t3uyg1p" class="animable">
                                </rect>
                                <rect x="104.48" y="205.72" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 206.59px;" id="elufvlp9q22ye" class="animable">
                                </rect>
                                <rect x="104.48" y="208.63" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 209.5px;" id="elermswx0ewtj" class="animable">
                                </rect>
                                <rect x="104.48" y="211.55" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 212.42px;" id="eln358ix6fm6" class="animable">
                                </rect>
                                <rect x="104.48" y="214.47" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 215.34px;" id="eltpl5o4xytf" class="animable">
                                </rect>
                                <rect x="104.48" y="217.38" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 218.25px;" id="elidc8ah8siri" class="animable">
                                </rect>
                                <rect x="104.48" y="220.3" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 221.17px;" id="elxzi45kd3mm" class="animable">
                                </rect>
                                <rect x="104.48" y="223.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 224.09px;" id="el5xwaxgpnhq8" class="animable">
                                </rect>
                                <rect x="104.48" y="226.13" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 227px;" id="eljn9mhu8ehw" class="animable">
                                </rect>
                                <rect x="104.48" y="229.05" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 229.92px;" id="eldlv8050lldt" class="animable">
                                </rect>
                                <rect x="104.48" y="231.96" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 232.83px;" id="elkmktqraexdi" class="animable">
                                </rect>
                                <rect x="104.48" y="240.71" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 105.35px 241.58px;" id="el1frgnns82u2" class="animable">
                                </rect>
                                <rect x="107.24" y="205.72" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 206.59px;" id="el373cy2c4wpt" class="animable">
                                </rect>
                                <rect x="107.24" y="208.63" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 209.5px;" id="elnmskdblk30m" class="animable">
                                </rect>
                                <rect x="107.24" y="211.55" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 212.42px;" id="el996s8arvr5g" class="animable">
                                </rect>
                                <rect x="107.24" y="214.47" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 215.34px;" id="elf4u3axs1fy" class="animable">
                                </rect>
                                <rect x="107.24" y="217.38" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 218.25px;" id="elqyux8yob1dk" class="animable">
                                </rect>
                                <rect x="107.24" y="220.3" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 221.17px;" id="elawugydiuwcd" class="animable">
                                </rect>
                                <rect x="107.24" y="223.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 224.09px;" id="elmpzgxrds67c" class="animable">
                                </rect>
                                <rect x="107.24" y="226.13" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 227px;" id="ell3roo635lq" class="animable">
                                </rect>
                                <rect x="107.24" y="229.05" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 229.92px;" id="eliepbmtu19ws" class="animable">
                                </rect>
                                <rect x="107.24" y="237.8" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 238.67px;" id="elwdbl69ad9eg" class="animable">
                                </rect>
                                <rect x="107.24" y="240.71" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 108.11px 241.58px;" id="el7nv4axbmpl4" class="animable">
                                </rect>
                                <rect x="110" y="205.72" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 206.59px;" id="elxfzz61uyi5l" class="animable">
                                </rect>
                                <rect x="110" y="208.63" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 209.5px;" id="el6ys9d1sey8d" class="animable">
                                </rect>
                                <rect x="110" y="211.55" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 212.42px;" id="ellgb6ynif65i" class="animable">
                                </rect>
                                <rect x="110" y="214.47" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 215.34px;" id="elwo1t47or54" class="animable">
                                </rect>
                                <rect x="110" y="217.38" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 218.25px;" id="el1qx5gxytdtgj" class="animable">
                                </rect>
                                <rect x="110" y="220.3" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 221.17px;" id="elfx7i6wb953n" class="animable">
                                </rect>
                                <rect x="110" y="223.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 224.09px;" id="elo8ka0hyfvgd" class="animable">
                                </rect>
                                <rect x="110" y="226.13" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 227px;" id="elaan2hpqle7l" class="animable">
                                </rect>
                                <rect x="110" y="234.88" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 235.75px;" id="elph1mqf501zn" class="animable">
                                </rect>
                                <rect x="110" y="237.8" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 238.67px;" id="eljk0ed6aub" class="animable">
                                </rect>
                                <rect x="110" y="240.71" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 110.87px 241.58px;" id="elg6u87opyexa" class="animable">
                                </rect>
                                <rect x="135.68" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 162.28px;" id="el6q7jevc9l3d" class="animable">
                                </rect>
                                <rect x="135.68" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 165.2px;" id="ely3jtojwes0f" class="animable">
                                </rect>
                                <rect x="135.68" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 168.12px;" id="el9df6qre8gy" class="animable">
                                </rect>
                                <rect x="135.68" y="170.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 171.03px;" id="elvsbijs88ex" class="animable">
                                </rect>
                                <rect x="135.68" y="173.08" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 173.95px;" id="elo5lrc1diuco" class="animable">
                                </rect>
                                <rect x="135.68" y="176" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 176.87px;" id="el7ic1upzw0ng" class="animable">
                                </rect>
                                <rect x="135.68" y="178.91" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 179.78px;" id="eli0gw3ye52l" class="animable">
                                </rect>
                                <rect x="135.68" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 182.7px;" id="el4pnjay4z70g" class="animable">
                                </rect>
                                <rect x="135.68" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 185.61px;" id="elgntejd4oki" class="animable">
                                </rect>
                                <rect x="135.68" y="187.66" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 188.53px;" id="elwuowb3ya2p" class="animable">
                                </rect>
                                <rect x="135.68" y="190.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 191.45px;" id="elfwzdf4vorq" class="animable">
                                </rect>
                                <rect x="135.68" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 194.36px;" id="el1fldbw3027e" class="animable">
                                </rect>
                                <rect x="135.68" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 197.28px;" id="el7c5xlkefzfb" class="animable">
                                </rect>
                                <rect x="135.68" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 200.19px;" id="elf6ex6d0w65" class="animable">
                                </rect>
                                <rect x="135.68" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 203.11px;" id="elq2udij79aq8" class="animable">
                                </rect>
                                <rect x="135.68" y="205.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 206.03px;" id="elqovdf4ey19h" class="animable">
                                </rect>
                                <rect x="135.68" y="208.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 208.94px;" id="elmvxo3l4x0nk" class="animable">
                                </rect>
                                <rect x="135.68" y="213.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 214.77px;" id="el6eiedts1ilq" class="animable">
                                </rect>
                                <rect x="135.68" y="216.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 217.69px;" id="elaf7wtnc81hr" class="animable">
                                </rect>
                                <rect x="135.68" y="219.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 220.61px;" id="el6qbg254a7uf" class="animable">
                                </rect>
                                <rect x="135.68" y="222.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 223.52px;" id="eldt5nwy4vio8" class="animable">
                                </rect>
                                <rect x="135.68" y="225.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 136.55px 226.44px;" id="elzxn4oykxnz" class="animable">
                                </rect>
                                <rect x="138.44" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 162.28px;" id="elwoqaco6i8" class="animable">
                                </rect>
                                <rect x="138.44" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 165.2px;" id="elaz8y0kxwgva" class="animable">
                                </rect>
                                <rect x="138.44" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 168.12px;" id="eln0mjtxcyygc" class="animable">
                                </rect>
                                <rect x="138.44" y="170.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 171.03px;" id="eljqp8q87cpbf" class="animable">
                                </rect>
                                <rect x="138.44" y="173.08" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 173.95px;" id="eletpolkmv4iq" class="animable">
                                </rect>
                                <rect x="138.44" y="176" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 176.87px;" id="el7t9cou2zn0f" class="animable">
                                </rect>
                                <rect x="138.44" y="178.91" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 179.78px;" id="elw3b138tb3hn" class="animable">
                                </rect>
                                <rect x="138.44" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 182.7px;" id="elcnpq8ldm96m" class="animable">
                                </rect>
                                <rect x="138.44" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 185.61px;" id="el1cqbrwupmg1" class="animable">
                                </rect>
                                <rect x="138.44" y="187.66" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 188.53px;" id="elsq7w9tgm6d" class="animable">
                                </rect>
                                <rect x="138.44" y="190.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 191.45px;" id="elsns8sslvayj" class="animable">
                                </rect>
                                <rect x="138.44" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 194.36px;" id="elz3q8mkiempn" class="animable">
                                </rect>
                                <rect x="138.44" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 197.28px;" id="elgdj9zu7z60i" class="animable">
                                </rect>
                                <rect x="138.44" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 200.19px;" id="elbog3cq43g8" class="animable">
                                </rect>
                                <rect x="138.44" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 203.11px;" id="elztq4756685" class="animable">
                                </rect>
                                <rect x="138.44" y="205.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 206.03px;" id="elrp6d30l5rh" class="animable">
                                </rect>
                                <rect x="138.44" y="222.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 223.52px;" id="el3seg7gstyn9" class="animable">
                                </rect>
                                <rect x="138.44" y="225.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 139.31px 226.44px;" id="elp21gmf80o2p" class="animable">
                                </rect>
                                <rect x="141.21" y="161.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 162.28px;" id="elz4fcpm1h6us" class="animable">
                                </rect>
                                <rect x="141.21" y="164.33" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 165.2px;" id="el2a15kw6bzqp" class="animable">
                                </rect>
                                <rect x="141.21" y="167.25" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 168.12px;" id="elf4lzrwl1j4r" class="animable">
                                </rect>
                                <rect x="141.21" y="170.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 171.03px;" id="el6dcxbts889a" class="animable">
                                </rect>
                                <rect x="141.21" y="173.08" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 173.95px;" id="ele1xwz8s6j2s" class="animable">
                                </rect>
                                <rect x="141.21" y="176" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 176.87px;" id="elcx2v1bge2op" class="animable">
                                </rect>
                                <rect x="141.21" y="178.91" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 179.78px;" id="el5iivt9zj6wg" class="animable">
                                </rect>
                                <rect x="141.21" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 182.7px;" id="el1ky2xms8dfr" class="animable">
                                </rect>
                                <rect x="141.21" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 185.61px;" id="el3xb97cvhkfx" class="animable">
                                </rect>
                                <rect x="141.21" y="187.66" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 188.53px;" id="elwsvnbi2rjsq" class="animable">
                                </rect>
                                <rect x="141.21" y="190.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 191.45px;" id="el048xsrwm4e4d" class="animable">
                                </rect>
                                <rect x="141.21" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 194.36px;" id="el0b3zfan3sdt" class="animable">
                                </rect>
                                <rect x="141.21" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 197.28px;" id="elrxjtsmwoz6a" class="animable">
                                </rect>
                                <rect x="141.21" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 200.19px;" id="elkh6xn3tybyj" class="animable">
                                </rect>
                                <rect x="141.21" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 203.11px;" id="elidpt7todd4n" class="animable">
                                </rect>
                                <rect x="141.21" y="205.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 206.03px;" id="el5ch96zgp9b" class="animable">
                                </rect>
                                <rect x="141.21" y="210.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 211.86px;" id="elxi226pim24" class="animable">
                                </rect>
                                <rect x="141.21" y="213.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 214.77px;" id="elpsrr3ywuc3" class="animable">
                                </rect>
                                <rect x="141.21" y="216.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 217.69px;" id="elhh43f7eaqq" class="animable">
                                </rect>
                                <rect x="141.21" y="219.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 220.61px;" id="el31yz4elxvsp" class="animable">
                                </rect>
                                <rect x="141.21" y="225.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 142.08px 226.44px;" id="el3d22ngry6un" class="animable">
                                </rect>
                                <rect x="125.65" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 199.02px;" id="el370oqqxsfc4" class="animable">
                                </rect>
                                <rect x="125.65" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 201.93px;" id="elkipipdfq3s" class="animable">
                                </rect>
                                <rect x="125.65" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 204.85px;" id="eloeal264b4cj" class="animable">
                                </rect>
                                <rect x="125.65" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 207.77px;" id="el03a3fx047qlc" class="animable">
                                </rect>
                                <rect x="125.65" y="209.81" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 210.68px;" id="el88yzeruqyoa" class="animable">
                                </rect>
                                <rect x="125.65" y="212.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 213.6px;" id="elb8nuzyzawt6" class="animable">
                                </rect>
                                <rect x="125.65" y="215.64" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 216.51px;" id="elwnltxumxbuq" class="animable">
                                </rect>
                                <rect x="125.65" y="221.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 222.35px;" id="el3q74ibgwvs8" class="animable">
                                </rect>
                                <rect x="125.65" y="224.39" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 225.26px;" id="elu1p26cqtxcd" class="animable">
                                </rect>
                                <rect x="125.65" y="227.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 228.18px;" id="elm1e9lfcimfk" class="animable">
                                </rect>
                                <rect x="125.65" y="230.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 231.09px;" id="el0hh0ljk6crrh" class="animable">
                                </rect>
                                <rect x="125.65" y="233.14" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 234.01px;" id="el6ujkilvk7eb" class="animable">
                                </rect>
                                <rect x="125.65" y="236.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 236.93px;" id="elkjil2gzgfh" class="animable">
                                </rect>
                                <rect x="125.65" y="238.97" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 239.84px;" id="elem9n9pfsgb" class="animable">
                                </rect>
                                <rect x="125.65" y="241.89" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 126.52px 242.76px;" id="el6zg03hngi4g" class="animable">
                                </rect>
                                <rect x="128.42" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 199.02px;" id="el2rreh7yikty" class="animable">
                                </rect>
                                <rect x="128.42" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 201.93px;" id="ellnq4ovu9p7" class="animable">
                                </rect>
                                <rect x="128.42" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 204.85px;" id="eljcmq336s5k8" class="animable">
                                </rect>
                                <rect x="128.42" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 207.77px;" id="el4myca4qrpuc" class="animable">
                                </rect>
                                <rect x="128.42" y="209.81" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 210.68px;" id="eltxx4bodlv" class="animable">
                                </rect>
                                <rect x="128.42" y="212.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 213.6px;" id="elu3bl5cwhl9" class="animable">
                                </rect>
                                <rect x="128.42" y="221.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 222.35px;" id="elrlg3wk3usr" class="animable">
                                </rect>
                                <rect x="128.42" y="224.39" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 225.26px;" id="elzzv66uc4v1" class="animable">
                                </rect>
                                <rect x="128.42" y="227.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 228.18px;" id="el9yketpkdgb" class="animable">
                                </rect>
                                <rect x="128.42" y="230.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 231.09px;" id="elabol350lqsr" class="animable">
                                </rect>
                                <rect x="128.42" y="233.14" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 234.01px;" id="elxtyvxtey58" class="animable">
                                </rect>
                                <rect x="128.42" y="236.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 236.93px;" id="elua0osqqanc" class="animable">
                                </rect>
                                <rect x="128.42" y="238.97" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 239.84px;" id="el4y925qjg4nr" class="animable">
                                </rect>
                                <rect x="128.42" y="241.89" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 129.29px 242.76px;" id="elu4gz89s5htf" class="animable">
                                </rect>
                                <rect x="131.18" y="198.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 199.02px;" id="eltlv8fu1wdv" class="animable">
                                </rect>
                                <rect x="131.18" y="201.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 201.93px;" id="el028moe6nz8dn" class="animable">
                                </rect>
                                <rect x="131.18" y="203.98" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 204.85px;" id="elf5enkxz5ujj" class="animable">
                                </rect>
                                <rect x="131.18" y="206.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 207.77px;" id="elnfq0uqzgjw" class="animable">
                                </rect>
                                <rect x="131.18" y="209.81" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 210.68px;" id="elkz7qzl4nnea" class="animable">
                                </rect>
                                <rect x="131.18" y="212.73" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 213.6px;" id="elhfzdlom4eet" class="animable">
                                </rect>
                                <rect x="131.18" y="218.56" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 219.43px;" id="elsbs3o14h0gi" class="animable">
                                </rect>
                                <rect x="131.18" y="221.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 222.35px;" id="eleir130u6i7" class="animable">
                                </rect>
                                <rect x="131.18" y="224.39" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 225.26px;" id="elau7o5v9ip15" class="animable">
                                </rect>
                                <rect x="131.18" y="227.31" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 228.18px;" id="elqin255al5h7" class="animable">
                                </rect>
                                <rect x="131.18" y="230.22" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 231.09px;" id="el3a7ck99yw32" class="animable">
                                </rect>
                                <rect x="131.18" y="233.14" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 234.01px;" id="elnj75l18vmwl" class="animable">
                                </rect>
                                <rect x="131.18" y="236.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 236.93px;" id="elk3sefjvibxn" class="animable">
                                </rect>
                                <rect x="131.18" y="238.97" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 239.84px;" id="el2ruasbns5i5" class="animable">
                                </rect>
                                <rect x="131.18" y="241.89" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 132.05px 242.76px;" id="elc8xfvjtatpr" class="animable">
                                </rect>
                                <rect x="189.4" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 182.7px;" id="eladzevfl2vsg" class="animable">
                                </rect>
                                <rect x="189.4" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 185.61px;" id="elxv9g7squj7e" class="animable">
                                </rect>
                                <rect x="189.4" y="187.66" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 188.53px;" id="el69nhk51v624" class="animable">
                                </rect>
                                <rect x="189.4" y="190.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 191.45px;" id="elk1o8jz98xe" class="animable">
                                </rect>
                                <rect x="189.4" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 194.36px;" id="elqywfm7cpw8" class="animable">
                                </rect>
                                <rect x="189.4" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 197.28px;" id="elx9sk7zm3u7p" class="animable">
                                </rect>
                                <rect x="189.4" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 200.19px;" id="elwbl5sico6xn" class="animable">
                                </rect>
                                <rect x="189.4" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 203.11px;" id="elpj6hqmftt5c" class="animable">
                                </rect>
                                <rect x="189.4" y="205.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 206.03px;" id="eliw1h7ak35fg" class="animable">
                                </rect>
                                <rect x="189.4" y="208.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 208.94px;" id="eltl074i1ca5k" class="animable">
                                </rect>
                                <rect x="189.4" y="210.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 211.86px;" id="elgmt0x2vnc" class="animable">
                                </rect>
                                <rect x="189.4" y="213.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 214.77px;" id="el827lbyrrcxs" class="animable">
                                </rect>
                                <rect x="189.4" y="216.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 217.69px;" id="eldii7kqo6m9k" class="animable">
                                </rect>
                                <rect x="189.4" y="222.65" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 223.52px;" id="elslvgpkhf4le" class="animable">
                                </rect>
                                <rect x="189.4" y="225.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 226.44px;" id="elj68u6fwxq0m" class="animable">
                                </rect>
                                <rect x="189.4" y="228.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 229.35px;" id="el4r75x95mp6v" class="animable">
                                </rect>
                                <rect x="189.4" y="231.4" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 232.27px;" id="elz0hf5cspba" class="animable">
                                </rect>
                                <rect x="189.4" y="237.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 238.1px;" id="elcq0pei3pkqe" class="animable">
                                </rect>
                                <rect x="189.4" y="240.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 241.02px;" id="el7qosomo483p" class="animable">
                                </rect>
                                <rect x="189.4" y="243.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 190.27px 243.93px;" id="el6ge254f4qli" class="animable">
                                </rect>
                                <rect x="192.16" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 182.7px;" id="el0dekta5a2ice" class="animable">
                                </rect>
                                <rect x="192.16" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 185.61px;" id="el43emb1wosng" class="animable">
                                </rect>
                                <rect x="192.16" y="187.66" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 188.53px;" id="elj4c7omhz5l9" class="animable">
                                </rect>
                                <rect x="192.16" y="190.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 191.45px;" id="elolidtegmtcf" class="animable">
                                </rect>
                                <rect x="192.16" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 194.36px;" id="eln3yv8095sw" class="animable">
                                </rect>
                                <rect x="192.16" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 197.28px;" id="eliyl9o6z0a" class="animable">
                                </rect>
                                <rect x="192.16" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 200.19px;" id="elv1jcj95pes" class="animable">
                                </rect>
                                <rect x="192.16" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 203.11px;" id="elxonyqa1ehwr" class="animable">
                                </rect>
                                <rect x="192.16" y="205.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 206.03px;" id="el3qpixv1gtfq" class="animable">
                                </rect>
                                <rect x="192.16" y="208.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 208.94px;" id="elhzf72aqhp9c" class="animable">
                                </rect>
                                <rect x="192.16" y="210.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 211.86px;" id="elqph9laabumr" class="animable">
                                </rect>
                                <rect x="192.16" y="213.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 214.77px;" id="elyw3c40rsxgc" class="animable">
                                </rect>
                                <rect x="192.16" y="216.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 217.69px;" id="elk8mcbpue8ao" class="animable">
                                </rect>
                                <rect x="192.16" y="225.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 226.44px;" id="elp5eappqh7n" class="animable">
                                </rect>
                                <rect x="192.16" y="228.48" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 229.35px;" id="elk8aw4bx1lue" class="animable">
                                </rect>
                                <rect x="192.16" y="234.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 235.19px;" id="el7diliqmxt24" class="animable">
                                </rect>
                                <rect x="192.16" y="237.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 238.1px;" id="elsku2ys6tqth" class="animable">
                                </rect>
                                <rect x="192.16" y="240.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 241.02px;" id="elldqi84z02es" class="animable">
                                </rect>
                                <rect x="192.16" y="243.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 193.03px 243.93px;" id="elf81dj68jo55" class="animable">
                                </rect>
                                <rect x="194.92" y="181.83" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 182.7px;" id="el2maymlu9zt9" class="animable">
                                </rect>
                                <rect x="194.92" y="184.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 185.61px;" id="elumdlph1dn6" class="animable">
                                </rect>
                                <rect x="194.92" y="187.66" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 188.53px;" id="eldi56qswxhgn" class="animable">
                                </rect>
                                <rect x="194.92" y="190.58" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 191.45px;" id="elv8aphy7qj5" class="animable">
                                </rect>
                                <rect x="194.92" y="193.49" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 194.36px;" id="elwk4v7ofphj" class="animable">
                                </rect>
                                <rect x="194.92" y="196.41" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 197.28px;" id="elpt0hh5g0qzj" class="animable">
                                </rect>
                                <rect x="194.92" y="199.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 200.19px;" id="elmcrm41we0g8" class="animable">
                                </rect>
                                <rect x="194.92" y="202.24" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 203.11px;" id="ele4adu8himk" class="animable">
                                </rect>
                                <rect x="194.92" y="205.16" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 206.03px;" id="el20kpvki35n3j" class="animable">
                                </rect>
                                <rect x="194.92" y="208.07" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 208.94px;" id="el7n6rq0810ch" class="animable">
                                </rect>
                                <rect x="194.92" y="210.99" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 211.86px;" id="elpbqx1bwt4t" class="animable">
                                </rect>
                                <rect x="194.92" y="213.9" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 214.77px;" id="elqyb1681hj0r" class="animable">
                                </rect>
                                <rect x="194.92" y="216.82" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 217.69px;" id="elh13k9usilav" class="animable">
                                </rect>
                                <rect x="194.92" y="219.74" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 220.61px;" id="elhq4f3u0qdl5" class="animable">
                                </rect>
                                <rect x="194.92" y="225.57" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 226.44px;" id="el2qyrodofe3s" class="animable">
                                </rect>
                                <rect x="194.92" y="231.4" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 232.27px;" id="ellet9plveca" class="animable">
                                </rect>
                                <rect x="194.92" y="234.32" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 235.19px;" id="eljf90protd3h" class="animable">
                                </rect>
                                <rect x="194.92" y="237.23" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 238.1px;" id="ely77nh2x07xc" class="animable">
                                </rect>
                                <rect x="194.92" y="240.15" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 241.02px;" id="elfxcqhsbp8oe" class="animable">
                                </rect>
                                <rect x="194.92" y="243.06" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 195.79px 243.93px;" id="elxxjouyfcypp" class="animable">
                                </rect>
                                <rect x="178.14" y="198.45" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 199.32px;" id="elmt4ghiu4qad" class="animable">
                                </rect>
                                <rect x="178.14" y="201.37" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 202.24px;" id="elf1r7560zqir" class="animable">
                                </rect>
                                <rect x="178.14" y="204.29" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 205.16px;" id="elmseahbt3bbf" class="animable">
                                </rect>
                                <rect x="178.14" y="207.2" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 208.07px;" id="elhxcxa5nhmk" class="animable">
                                </rect>
                                <rect x="178.14" y="210.12" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 210.99px;" id="el738lod5zrh" class="animable">
                                </rect>
                                <rect x="178.14" y="213.03" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 213.9px;" id="el3u0mesyq578" class="animable">
                                </rect>
                                <rect x="178.14" y="221.78" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 222.65px;" id="el1obmehzn4qa" class="animable">
                                </rect>
                                <rect x="178.14" y="224.7" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 225.57px;" id="elcrtu7b7ree7" class="animable">
                                </rect>
                                <rect x="178.14" y="227.61" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 228.48px;" id="elwm3dck3kfb" class="animable">
                                </rect>
                                <rect x="178.14" y="230.53" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 231.4px;" id="el9t9rdppapc" class="animable">
                                </rect>
                                <rect x="178.14" y="233.45" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 234.32px;" id="elwpji3rjt75g" class="animable">
                                </rect>
                                <rect x="178.14" y="236.36" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 237.23px;" id="el98uoxazpkvi" class="animable">
                                </rect>
                                <rect x="178.14" y="239.28" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 179.01px 240.15px;" id="elcqqs5dpcfhj" class="animable">
                                </rect>
                                <rect x="180.91" y="198.45" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 199.32px;" id="ellnx2xi08g3i" class="animable">
                                </rect>
                                <rect x="180.91" y="201.37" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 202.24px;" id="elck85r3hj1jk" class="animable">
                                </rect>
                                <rect x="180.91" y="204.29" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 205.16px;" id="eloeukq4b3fg" class="animable">
                                </rect>
                                <rect x="180.91" y="207.2" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 208.07px;" id="el6kjiqbl72nc" class="animable">
                                </rect>
                                <rect x="180.91" y="210.12" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 210.99px;" id="el2oqcb3ei732" class="animable">
                                </rect>
                                <rect x="180.91" y="213.03" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 213.9px;" id="elj6owcfvtosb" class="animable">
                                </rect>
                                <rect x="180.91" y="221.78" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 222.65px;" id="elca4wucdk18" class="animable">
                                </rect>
                                <rect x="180.91" y="224.7" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 225.57px;" id="el8wuss1hv17i" class="animable">
                                </rect>
                                <rect x="180.91" y="227.61" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 228.48px;" id="eld3gpslepn7g" class="animable">
                                </rect>
                                <rect x="180.91" y="230.53" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 231.4px;" id="elqn52ksvmffq" class="animable">
                                </rect>
                                <rect x="180.91" y="233.45" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 234.32px;" id="eldp7s8yw0kew" class="animable">
                                </rect>
                                <rect x="180.91" y="236.36" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 237.23px;" id="elzdvm3f034bd" class="animable">
                                </rect>
                                <rect x="180.91" y="242.2" width="1.74" height="1.74" style="fill: rgb(250, 250, 250); transform-origin: 181.78px 243.07px;" id="elo7voaln707" class="animable">
                                </rect>
                                <rect x="245.4" y="103.1" width="3.45" height="189.49" style="fill: rgb(235, 235, 235); transform-origin: 247.125px 197.845px;" id="elf5opoxkc0yv" class="animable"></rect>
                                <rect x="190.48" y="103.1" width="2.92" height="189.49" style="fill: rgb(235, 235, 235); transform-origin: 191.94px 197.845px;" id="elln5k6op7dql" class="animable">
                                </rect>
                                <rect x="135.56" y="103.1" width="2.92" height="189.49" style="fill: rgb(235, 235, 235); transform-origin: 137.02px 197.845px;" id="el9913xvqzfjf" class="animable">
                                </rect>
                                <circle cx="344.9" cy="96.43" r="14.17" style="fill: rgb(224, 224, 224); transform-origin: 344.9px 96.43px;" id="el2hh2ce2lozj" class="animable"></circle>
                                <path d="M356.94,96.43a12,12,0,1,1-12-12A12,12,0,0,1,356.94,96.43Z" style="fill: rgb(240, 240, 240); transform-origin: 344.94px 96.43px;" id="el74w5sa22dxg" class="animable">
                                </path>
                                <polyline points="344.33 88.17 344.33 96.59 338.75 93.43" style="fill: rgb(240, 240, 240); transform-origin: 341.54px 92.38px;" id="elvln0h0b8d3" class="animable">
                                </polyline>
                                <path d="M344.33,97.59a1,1,0,0,1-.49-.13l-5.58-3.16a1,1,0,0,1,1-1.74l4.09,2.32V88.17a1,1,0,0,1,2,0v8.42a1,1,0,0,1-.5.87A1,1,0,0,1,344.33,97.59Z" style="fill: rgb(224, 224, 224); transform-origin: 341.554px 92.3802px;" id="el195lkqppi2t" class="animable"></path>
                                <rect x="352.98" y="119.3" width="62.64" height="82.68" style="fill: rgb(245, 245, 245); transform-origin: 384.3px 160.64px;" id="el7es6c3xdgq" class="animable">
                                </rect>
                                <polygon points="374.29 128.1 374.29 164.45 388.77 163.63 390.43 128.1 374.29 128.1" style="fill: rgb(235, 235, 235); transform-origin: 382.36px 146.275px;" id="elm0vzww6979" class="animable">
                                </polygon>
                                <polygon points="386.01 135.13 408.29 135.13 408.1 166.95 396.56 167.13 386.01 135.13" style="fill: rgb(224, 224, 224); transform-origin: 397.15px 151.13px;" id="el3akggpdrml6" class="animable">
                                </polygon>
                                <polygon points="364.32 130.44 370.18 130.44 368.13 158.83 360.8 160.65 364.32 130.44" style="fill: rgb(230, 230, 230); transform-origin: 365.49px 145.545px;" id="elztc5r4anzhf" class="animable">
                                </polygon>
                                <g id="elj1w7lq477s">
                                    <rect x="281.36" y="136.09" width="62.44" height="75.98" style="fill: rgb(230, 230, 230); transform-origin: 312.58px 174.08px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <polygon points="295.65 193.25 328.46 161 292.96 155.14 295.65 193.25" style="fill: rgb(224, 224, 224); transform-origin: 310.71px 174.195px;" id="elawkl92urhjr" class="animable">
                                </polygon>
                                <polygon points="327.67 185.6 329.29 160.87 304.59 166.94 302.79 185.86 327.67 185.6" style="fill: rgb(240, 240, 240); transform-origin: 316.04px 173.365px;" id="elsi5dya6i85" class="animable">
                                </polygon>
                                <g id="elk5uvm2xffnp">
                                    <circle cx="295.35" cy="150.8" r="9.97" style="fill: rgb(250, 250, 250); transform-origin: 295.35px 150.8px; transform: rotate(-45deg);" class="animable"></circle>
                                </g>
                                <path d="M324.44,194.42a4.84,4.84,0,1,1,4.84,4.84A4.84,4.84,0,0,1,324.44,194.42Z" style="fill: rgb(224, 224, 224); transform-origin: 329.28px 194.42px;" id="elmj7dqogaot" class="animable">
                                </path>
                                <polygon points="328.13 202.92 314.16 194.42 325.9 184.75 328.13 202.92" style="fill: rgb(245, 245, 245); transform-origin: 321.145px 193.835px;" id="el24gqlgppe48h" class="animable"></polygon>
                                <rect x="308.89" y="145.75" width="2.75" height="60.67" style="fill: rgb(224, 224, 224); transform-origin: 310.265px 176.085px;" id="elkoga17xzta" class="animable">
                                </rect>
                                <rect x="334.39" y="145.75" width="3.55" height="57.99" style="fill: rgb(235, 235, 235); transform-origin: 336.165px 174.745px;" id="elgdi12kvd0ok" class="animable"></rect>
                                <rect x="287.63" y="185.86" width="18.15" height="18.15" style="fill: rgb(235, 235, 235); transform-origin: 296.705px 194.935px;" id="elbewldhddeov" class="animable"></rect>
                                <rect x="345.77" y="313.38" width="65.62" height="59.63" style="fill: rgb(230, 230, 230); transform-origin: 378.58px 343.195px;" id="el70p0l5d4qh9" class="animable">
                                </rect>
                                <rect x="413.17" y="308.13" width="8.25" height="74.05" style="fill: rgb(230, 230, 230); transform-origin: 417.295px 345.155px;" id="elf215po50il" class="animable">
                                </rect>
                                <rect x="356.22" y="318.94" width="5.38" height="21.39" style="fill: rgb(250, 250, 250); transform-origin: 358.91px 329.635px;" id="elojx28mg4qig" class="animable">
                                </rect>
                                <rect x="378.51" y="318.94" width="5.38" height="21.39" style="fill: rgb(245, 245, 245); transform-origin: 381.2px 329.635px;" id="elrbkz4x99a5" class="animable">
                                </rect>
                                <rect x="361.59" y="320.8" width="5.38" height="19.54" style="fill: rgb(245, 245, 245); transform-origin: 364.28px 330.57px;" id="elyvza0n294ao" class="animable">
                                </rect>
                                <rect x="373.13" y="320.8" width="5.38" height="19.54" style="fill: rgb(250, 250, 250); transform-origin: 375.82px 330.57px;" id="elnojkauc6pfi" class="animable">
                                </rect>
                                <rect x="369.66" y="318.94" width="3.47" height="21.39" style="fill: rgb(235, 235, 235); transform-origin: 371.395px 329.635px;" id="elr1zrmk2jz1f" class="animable"></rect>
                                <rect x="366.97" y="320.8" width="2.69" height="19.54" style="fill: rgb(250, 250, 250); transform-origin: 368.315px 330.57px;" id="el53g1lv3vee" class="animable">
                                </rect>
                                <rect x="383.89" y="318.94" width="5.38" height="21.39" style="fill: rgb(235, 235, 235); transform-origin: 386.58px 329.635px;" id="el6fvri8ebjck" class="animable">
                                </rect>
                                <rect x="389.27" y="320.8" width="5.38" height="19.54" style="fill: rgb(230, 230, 230); transform-origin: 391.96px 330.57px;" id="eldu6nalxfscc" class="animable">
                                </rect>
                                <rect x="400.81" y="320.8" width="5.38" height="19.54" style="fill: rgb(230, 230, 230); transform-origin: 403.5px 330.57px;" id="el83y4ua5zglh" class="animable">
                                </rect>
                                <rect x="397.33" y="318.94" width="3.47" height="21.39" style="fill: rgb(250, 250, 250); transform-origin: 399.065px 329.635px;" id="elre4vky0658" class="animable">
                                </rect>
                                <rect x="394.64" y="320.8" width="2.69" height="19.54" style="fill: rgb(235, 235, 235); transform-origin: 395.985px 330.57px;" id="eljjhzm41nhnl" class="animable">
                                </rect>
                                <rect x="406.18" y="319.57" width="2.69" height="20.77" style="fill: rgb(250, 250, 250); transform-origin: 407.525px 329.955px;" id="el64j8ft3t51" class="animable">
                                </rect>
                                <g id="el5qcebrv18s">
                                    <rect x="403.49" y="349.32" width="5.38" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 406.18px 359.515px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="el0y8en77kiudp">
                                    <rect x="381.2" y="349.32" width="5.38" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 383.89px 359.515px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="el37inp864r5k">
                                    <rect x="398.12" y="351.17" width="5.38" height="18.54" style="fill: rgb(240, 240, 240); transform-origin: 400.81px 360.44px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elnu891jp0xfd">
                                    <rect x="386.58" y="351.17" width="5.38" height="18.54" style="fill: rgb(235, 235, 235); transform-origin: 389.27px 360.44px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elp26nk5bng5">
                                    <rect x="391.95" y="349.32" width="3.47" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 393.685px 359.515px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elie8fbqsa2jh">
                                    <rect x="395.43" y="351.17" width="2.69" height="18.54" style="fill: rgb(245, 245, 245); transform-origin: 396.775px 360.44px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="el7tqs1e7x6ej">
                                    <rect x="375.82" y="349.32" width="5.38" height="20.39" style="fill: rgb(235, 235, 235); transform-origin: 378.51px 359.515px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elidqujazhnh">
                                    <rect x="370.45" y="351.17" width="5.38" height="18.54" style="fill: rgb(245, 245, 245); transform-origin: 373.14px 360.44px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="el6elwltndjx9">
                                    <rect x="358.91" y="351.17" width="5.38" height="18.54" style="fill: rgb(230, 230, 230); transform-origin: 361.6px 360.44px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elxmslwib2jdi">
                                    <rect x="364.28" y="349.32" width="3.47" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 366.015px 359.515px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elr7rvd6o9te">
                                    <rect x="352.74" y="349.32" width="3.47" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 354.475px 359.515px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elgakyp3ezm54">
                                    <rect x="367.76" y="351.17" width="2.69" height="18.54" style="fill: rgb(235, 235, 235); transform-origin: 369.105px 360.44px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="el0gyujh29xszv">
                                    <rect x="356.22" y="349.94" width="2.69" height="19.77" style="fill: rgb(240, 240, 240); transform-origin: 357.565px 359.825px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <path d="M411.06,308.13H343.69v69.28h65.17v4.76h4.4v-74Zm-2.2,61.58h-61V344.76h61Zm0-29.35h-61V315.82h61Z" style="fill: rgb(240, 240, 240); transform-origin: 378.475px 345.15px;" id="elpv5v9h4bivj" class="animable">
                                </path>
                                <g id="elp9bckshgs1r">
                                    <rect x="280.04" y="313.38" width="65.62" height="59.63" style="fill: rgb(230, 230, 230); transform-origin: 312.85px 343.195px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elonhu7lpyx4m">
                                    <rect x="282.56" y="376.54" width="8.25" height="5.63" style="fill: rgb(230, 230, 230); transform-origin: 286.685px 379.355px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="eld9ivv2pxuw">
                                    <rect x="338.08" y="318.94" width="5.38" height="21.39" style="fill: rgb(250, 250, 250); transform-origin: 340.77px 329.635px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="el2lim9vlhdqa">
                                    <rect x="315.78" y="318.94" width="5.38" height="21.39" style="fill: rgb(245, 245, 245); transform-origin: 318.47px 329.635px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="el99zy0xia9cr">
                                    <rect x="332.7" y="320.8" width="5.38" height="19.54" style="fill: rgb(245, 245, 245); transform-origin: 335.39px 330.57px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elmjtnnmqjgr">
                                    <rect x="321.16" y="320.8" width="5.38" height="19.54" style="fill: rgb(250, 250, 250); transform-origin: 323.85px 330.57px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elfx7dzeeuznh">
                                    <rect x="326.54" y="318.94" width="3.47" height="21.39" style="fill: rgb(235, 235, 235); transform-origin: 328.275px 329.635px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elkgw4scmx6r">
                                    <rect x="330.01" y="320.8" width="2.69" height="19.54" style="fill: rgb(250, 250, 250); transform-origin: 331.355px 330.57px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elcwimy0y4it">
                                    <rect x="313.95" y="318.94" width="5.38" height="21.39" style="fill: rgb(235, 235, 235); transform-origin: 316.64px 329.635px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elnwngwxclyk">
                                    <rect x="308.57" y="320.8" width="5.38" height="19.54" style="fill: rgb(230, 230, 230); transform-origin: 311.26px 330.57px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="el9ctuoy15s1">
                                    <rect x="297.03" y="320.8" width="5.38" height="19.54" style="fill: rgb(230, 230, 230); transform-origin: 299.72px 330.57px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="eln7j9l3iimm">
                                    <rect x="302.41" y="318.94" width="3.47" height="21.39" style="fill: rgb(250, 250, 250); transform-origin: 304.145px 329.635px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elvdgz83jqhs">
                                    <rect x="305.89" y="320.8" width="2.69" height="19.54" style="fill: rgb(235, 235, 235); transform-origin: 307.235px 330.57px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <g id="elj8r77kcov0h">
                                    <rect x="294.34" y="319.57" width="2.69" height="20.77" style="fill: rgb(245, 245, 245); transform-origin: 295.685px 329.955px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <rect x="291.82" y="349.32" width="5.38" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 294.51px 359.515px;" id="elctjaumcgpm" class="animable">
                                </rect>
                                <rect x="314.11" y="349.32" width="5.38" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 316.8px 359.515px;" id="elt32nrdi53ra" class="animable">
                                </rect>
                                <rect x="297.2" y="351.17" width="5.38" height="18.54" style="fill: rgb(245, 245, 245); transform-origin: 299.89px 360.44px;" id="elgxzxfqbp0qw" class="animable">
                                </rect>
                                <rect x="308.74" y="351.17" width="5.38" height="18.54" style="fill: rgb(235, 235, 235); transform-origin: 311.43px 360.44px;" id="el8welnj5v3dh" class="animable">
                                </rect>
                                <rect x="305.26" y="349.32" width="3.47" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 306.995px 359.515px;" id="eluijfhp1ztjn" class="animable"></rect>
                                <rect x="302.57" y="351.17" width="2.69" height="18.54" style="fill: rgb(245, 245, 245); transform-origin: 303.915px 360.44px;" id="elhpgkpq4yoz" class="animable">
                                </rect>
                                <rect x="315.95" y="349.32" width="5.38" height="20.39" style="fill: rgb(235, 235, 235); transform-origin: 318.64px 359.515px;" id="elvj5ojo8n1ps" class="animable">
                                </rect>
                                <rect x="321.32" y="351.17" width="5.38" height="18.54" style="fill: rgb(245, 245, 245); transform-origin: 324.01px 360.44px;" id="elbosv9ciaz8a" class="animable">
                                </rect>
                                <rect x="332.86" y="351.17" width="5.38" height="18.54" style="fill: rgb(230, 230, 230); transform-origin: 335.55px 360.44px;" id="eloduztg25vk" class="animable">
                                </rect>
                                <rect x="329.39" y="349.32" width="3.47" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 331.125px 359.515px;" id="el6i69glzn7mn" class="animable"></rect>
                                <rect x="340.22" y="349.32" width="3.47" height="20.39" style="fill: rgb(250, 250, 250); transform-origin: 341.955px 359.515px;" id="el6g1sxifpgh6" class="animable"></rect>
                                <rect x="326.7" y="351.17" width="2.69" height="18.54" style="fill: rgb(235, 235, 235); transform-origin: 328.045px 360.44px;" id="eljx08s382uol" class="animable">
                                </rect>
                                <rect x="338.24" y="349.94" width="2.69" height="19.77" style="fill: rgb(235, 235, 235); transform-origin: 339.585px 359.825px;" id="ele3d5s83ydi9" class="animable"></rect>
                                <path d="M278.17,308.13v74h4.4v-4.76h65.17V308.13H278.17Zm4.4,36.63h61v24.95h-61Zm0-28.94h61v24.54h-61Z" style="fill: rgb(240, 240, 240); transform-origin: 312.955px 345.13px;" id="elp8aox38o9xh" class="animable">
                                </path>
                            </g>
                            <g id="freepik--Shadow--inject-23" class="animable" style="transform-origin: 250px 416.24px;">
                                <ellipse id="freepik--path--inject-23" cx="250" cy="416.24" rx="193.89" ry="11.32" style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px;" class="animable"></ellipse>
                            </g>
                            <g id="freepik--Plant--inject-23" class="animable" style="transform-origin: 396.584px 363.68px;">
                                <path d="M382.05,372.62s-7.76-9.22-12.72-4.92-2.45,13.43,3.27,13.73a14.38,14.38,0,0,0,9.45-2.89Z" style="fill: rgb(64, 123, 255); transform-origin: 374.363px 374.004px;" id="elk0m9xyznln9" class="animable">
                                </path>
                                <g id="elud55v1hletg">
                                    <path d="M382.05,372.62s-7.76-9.22-12.72-4.92-2.45,13.43,3.27,13.73a14.38,14.38,0,0,0,9.45-2.89Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.2; transform-origin: 374.363px 374.004px;" class="animable"></path>
                                </g>
                                <path d="M413.68,349.22s6.51-6.82,10.54-5.66,3.62,17.45-8.89,10.85Z" style="fill: rgb(64, 123, 255); transform-origin: 420.086px 349.703px;" id="elwfhkp76m06" class="animable">
                                </path>
                                <g id="el1jogfn9ciym">
                                    <path d="M413.68,349.22s6.51-6.82,10.54-5.66,3.62,17.45-8.89,10.85Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.3; transform-origin: 420.086px 349.703px;" class="animable"></path>
                                </g>
                                <path d="M390.42,400.11s-21.4-29.27-4-35.2,20.47,23.55,15.51,31.76S390.42,400.11,390.42,400.11Z" style="fill: rgb(64, 123, 255); transform-origin: 391.836px 382.808px;" id="elphfnb5vis9e" class="animable">
                                </path>
                                <path d="M400.34,340.18s13.28-30.82-6.38-31.75-21.81,30.56.82,35.13Z" style="fill: rgb(64, 123, 255); transform-origin: 391.616px 325.985px;" id="elba23qg1v54" class="animable">
                                </path>
                                <g id="el34ytx1p21bh">
                                    <path d="M390.42,400.11s-21.4-29.27-4-35.2,20.47,23.55,15.51,31.76S390.42,400.11,390.42,400.11Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.3; transform-origin: 391.836px 382.808px;" class="animable"></path>
                                </g>
                                <g id="el2lr1pe1ayyz">
                                    <path d="M400.34,340.18s13.28-30.82-6.38-31.75-21.81,30.56.82,35.13Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.3; transform-origin: 391.616px 325.985px;" class="animable"></path>
                                </g>
                                <path d="M395.63,365.41s-6.45-27.21,6-29.38,24.65,22.42-1,34.78C400.57,370.81,396.17,368.08,395.63,365.41Z" style="fill: rgb(64, 123, 255); transform-origin: 404.836px 353.353px;" id="elm9adzj6a9a" class="animable">
                                </path>
                                <g id="elcrkbix6ol1u">
                                    <path d="M395.63,365.41s-6.45-27.21,6-29.38,24.65,22.42-1,34.78C400.57,370.81,396.17,368.08,395.63,365.41Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.2; transform-origin: 404.836px 353.353px;" class="animable"></path>
                                </g>
                                <polygon points="375.02 395.96 410.94 395.96 407.94 418.95 378.02 418.95 375.02 395.96" style="fill: rgb(38, 50, 56); transform-origin: 392.98px 407.455px;" id="el83sc4086bsr" class="animable">
                                </polygon>
                                <path d="M393.7,338c-7.4-5.41-12.53-15.87-8.16-24.68-.18.82-.4,1.71-.6,2.53-1.46,8.35,3.12,16.32,8.76,22.15Z" style="fill: rgb(64, 123, 255); transform-origin: 388.815px 325.66px;" id="eljpm490lrtuc" class="animable">
                                </path>
                                <path d="M389,311.53c8.53,1.73,12.3,10.78,11.31,18.75-.19,1.13-.35,2.24-.58,3.35a55.41,55.41,0,0,0-.07-6.7c-.53-6.57-4.15-13-10.66-15.4Z" style="fill: rgb(64, 123, 255); transform-origin: 394.732px 322.58px;" id="elhncd2188ut" class="animable">
                                </path>
                                <path d="M404,338c4.79,1.69,7.79,6.95,7.8,11.93,0,4.34-2.4,8.28-5.08,11.52a37.61,37.61,0,0,1-6.65,6.27,56.86,56.86,0,0,0,6-6.75c2.23-3,4.19-6.25,4.68-9.95.42-5.14-2.09-10.62-6.8-13Z" style="fill: rgb(64, 123, 255); transform-origin: 405.935px 352.86px;" id="elr2va15y1mi" class="animable">
                                </path>
                                <path d="M400.34,340.18c1.28,4,2.42,8.75.34,12.67-1.74,2.54-1.92,5.86-2,8.89,0,1.06,0,2.11.07,3.17a24.11,24.11,0,0,1-.69-6.35,11.48,11.48,0,0,1,1.73-6.24c1.92-3.66,1-8.19.51-12.14Z" style="fill: rgb(64, 123, 255); transform-origin: 399.94px 352.545px;" id="ela3oqt2nzswd" class="animable">
                                </path>
                                <path d="M391.62,367.7c5,2.57,7,19.83,6.81,25.26-.15-1.1-.32-2.19-.53-3.28-.95-5.44-1.94-10.9-3.38-16.23-.67-2-1.1-4.46-2.9-5.75Z" style="fill: rgb(64, 123, 255); transform-origin: 395.031px 380.33px;" id="elhfx48t6s99" class="animable">
                                </path>
                                <path d="M385.54,368.65a24.07,24.07,0,0,0,4.88,22.91,25.73,25.73,0,0,1-2.25-2.18,19,19,0,0,1-2.63-20.73Z" style="fill: rgb(64, 123, 255); transform-origin: 387.009px 380.105px;" id="elfoqsyvwitit" class="animable">
                                </path>
                                <path d="M418.73,352.54c2.28-.61,4.22-1.16,5.88-2.84-.41,2.55-3.65,3.75-5.88,2.84Z" style="fill: rgb(64, 123, 255); transform-origin: 421.67px 351.271px;" id="eltrkchjop37" class="animable">
                                </path>
                                <path d="M417.4,348.05c1.07-2.18,4.73-3.54,6.28-1.17-2.19-.95-4.32.24-6.28,1.17Z" style="fill: rgb(64, 123, 255); transform-origin: 420.54px 346.842px;" id="el8159k2dkdng" class="animable">
                                </path>
                                <path d="M378.51,374c-2.5-1.76-5.09-4.76-8.32-3.19,2.63-3.12,7.05.37,8.32,3.19Z" style="fill: rgb(64, 123, 255); transform-origin: 374.35px 371.792px;" id="el61ld7nvpo3e" class="animable">
                                </path>
                                <path d="M378.51,378.54c-3.27,1.2-9.8,1.29-10.2-3.28,1.87,3.73,6.64,2.91,10.2,3.28Z" style="fill: rgb(64, 123, 255); transform-origin: 373.41px 377.25px;" id="el49uaa8zpq7s" class="animable">
                                </path>
                            </g>
                            <g id="freepik--trash-bin--inject-23" class="animable" style="transform-origin: 301.71px 396.535px;">
                                <path d="M315.65,399a2.4,2.4,0,0,0-1.92-3.45,5.13,5.13,0,0,0-1.63-5.61,1.16,1.16,0,0,0-.71-.32,1.35,1.35,0,0,0-.76.34l-4.49,3.23a2.71,2.71,0,0,0-.9.88c-.92,1.78,2.4,4.06,1,5.53-.39.43-1,.51-1.51.82-1.07.67-1.2,2.14-1.7,3.3s-2.24,2.05-2.91,1c.5-1.11-1-2.07-2.2-2.21s-2.47-.21-3.13-1.34c-1.72,1.5-5.55-2.68-5.47-4.36a3.29,3.29,0,0,0-2.67,2.74,20.29,20.29,0,0,0-.15,4.2c0,2.73-.92,5.4-.87,8.13,0,2.12.86,4.47,2.8,5.33a7.26,7.26,0,0,0,3,.4l22.13-.14a3.3,3.3,0,0,0,1.56-.26c1-.52,1.21-1.83,1.3-2.95q.58-7.21,1.19-14.42Z" style="fill: rgb(64, 123, 255); transform-origin: 301.619px 403.626px;" id="elmyzkjth623" class="animable">
                                </path>
                                <g id="elf9m5r36ecde">
                                    <path d="M315.65,399a2.4,2.4,0,0,0-1.92-3.45,5.13,5.13,0,0,0-1.63-5.61,1.16,1.16,0,0,0-.71-.32,1.35,1.35,0,0,0-.76.34l-4.49,3.23a2.71,2.71,0,0,0-.9.88c-.92,1.78,2.4,4.06,1,5.53-.39.43-1,.51-1.51.82-1.07.67-1.2,2.14-1.7,3.3s-2.24,2.05-2.91,1c.5-1.11-1-2.07-2.2-2.21s-2.47-.21-3.13-1.34c-1.72,1.5-5.55-2.68-5.47-4.36a3.29,3.29,0,0,0-2.67,2.74,20.29,20.29,0,0,0-.15,4.2c0,2.73-.92,5.4-.87,8.13,0,2.12.86,4.47,2.8,5.33a7.26,7.26,0,0,0,3,.4l22.13-.14a3.3,3.3,0,0,0,1.56-.26c1-.52,1.21-1.83,1.3-2.95q.58-7.21,1.19-14.42Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.3; transform-origin: 301.619px 403.626px;" class="animable"></path>
                                </g>
                                <path d="M317,375.56H282.61l.28,3.47.21,2.48.52,6.44.3,3.71.39,4.92.17,2.12.06.63.2,2.48.28,3.41.17,2.11.17,2.15.2,2.48.16,1.88.17,2.11.07.92h31.51l.07-.92.17-2.1.16-1.9.2-2.48.17-2.14.17-2.11.28-3.42.2-2.47.05-.63.17-2.12.4-4.92.3-3.7.52-6.45.2-2.48.28-3.47Zm2.06,2.28h0l-.66-.67h.72Zm-.17,2.1-.06.84-3.08,3.07-3.52-3.52,3.15-3.16h.74Zm-.89,11-2.25,2.25-3.52-3.53,3.52-3.51,2.44,2.43Zm-32.67-2.36h0l2.44-2.43,3.52,3.51-3.52,3.53-2.24-2.25ZM314.57,385,311,388.52,307.52,385l3.52-3.52ZM309,377.17h4l-2,2Zm.88,12.48-3.52,3.53-3.53-3.53,3.53-3.51Zm-11.71,4.67,3.53-3.52,3.51,3.52-3.51,3.52Zm2.38,4.66L297,402.51,293.53,399l3.52-3.53Zm5.81-3.52L309.9,399l-3.52,3.52L302.85,399Zm-4.66-6.94L298.19,385l3.53-3.52,3.51,3.52Zm-1.15,1.13-3.52,3.53-3.52-3.53,3.52-3.51Zm-8.19-1.13L288.86,385l3.52-3.52,3.53,3.52Zm0,2.28,3.53,3.52-3.53,3.52-3.52-3.52Zm3.53,12.85-3.53,3.52-3.52-3.52,3.52-3.52Zm1.13,1.14,3.53,3.52-3.52,3.53-3.52-3.53Zm1.15-1.14,3.53-3.52,3.51,3.52-3.51,3.52Zm8.19,1.14,3.52,3.52-3.52,3.53-3.53-3.53Zm4.66,4.66,3.53,3.53-2.29,2.28H309.8L307.52,413Zm-3.52-5.8,3.52-3.52,3.53,3.52L311,407.17Zm0-9.33L311,390.8l3.53,3.52L311,397.84Zm2.38-14-3.52,3.52-3.53-3.52,3.16-3.16h.74Zm-8.18-1.14-2-2h4Zm-1.15,1.14-3.52,3.52-3.52-3.52,3.15-3.16h.74Zm-6.17-3.16-2,2-2-2Zm-6.31,0,3.15,3.16-3.52,3.52-3.07-3.07-.06-.84,2.76-2.77Zm-3,0-.65.66h0l-.06-.66Zm-.22,6.1,1.73,1.72-1.47,1.47Zm1,11.81-.13-1.67h0l.9.91-.77.76Zm.17,2.13,1.74-1.75,3.52,3.53-3.52,3.52-1.42-1.42Zm.53,6.51v-.15l.08.08-.07.07Zm.61,7.51-.44-5.4,1-1,3.52,3.52-3.52,3.52-.6-.6Zm.32,4-.06-.81.34-.34,1.14,1.15Zm1.42-2.28,3.52-3.53,3.53,3.53-2.29,2.28h-2.48Zm7.05,2.28,1.14-1.15,1.15,1.15Zm4.56,0L298.19,413l3.53-3.53,3.51,3.53L303,415.26Zm4.76,0,1.15-1.15,1.14,1.15Zm10.75,0h-1.42l1.14-1.15.34.34Zm.33-4-.61.6-3.52-3.52,3.52-3.52,1,1Zm.62-7.67,0,.16-.07-.07.09-.09Zm.2-2.47-1.43,1.42L312.18,399l3.52-3.53,1.75,1.75Zm.49-6-.78-.77.91-.91Zm1-11.83-.26,3.21L316.84,385l1.74-1.73Z" style="fill: rgb(64, 123, 255); transform-origin: 301.71px 396.215px;" id="el52iaymqvg1c" class="animable">
                                </path>
                                <g id="elewcvfo2jga">
                                    <g style="isolation: isolate; opacity: 0.6; transform-origin: 301.71px 396.215px;" class="animable">
                                        <path d="M317,375.56H282.61l.28,3.47.21,2.48.52,6.44.3,3.71.39,4.92.17,2.12.06.63.2,2.48.28,3.41.17,2.11.17,2.15.2,2.48.16,1.88.17,2.11.07.92h31.51l.07-.92.17-2.1.16-1.9.2-2.48.17-2.14.17-2.11.28-3.42.2-2.47.05-.63.17-2.12.4-4.92.3-3.7.52-6.45.2-2.48.28-3.47Zm2.06,2.28h0l-.66-.67h.72Zm-.17,2.1-.06.84-3.08,3.07-3.52-3.52,3.15-3.16h.74Zm-.89,11-2.25,2.25-3.52-3.53,3.52-3.51,2.44,2.43Zm-32.67-2.36h0l2.44-2.43,3.52,3.51-3.52,3.53-2.24-2.25ZM314.57,385,311,388.52,307.52,385l3.52-3.52ZM309,377.17h4l-2,2Zm.88,12.48-3.52,3.53-3.53-3.53,3.53-3.51Zm-11.71,4.67,3.53-3.52,3.51,3.52-3.51,3.52Zm2.38,4.66L297,402.51,293.53,399l3.52-3.53Zm5.81-3.52L309.9,399l-3.52,3.52L302.85,399Zm-4.66-6.94L298.19,385l3.53-3.52,3.51,3.52Zm-1.15,1.13-3.52,3.53-3.52-3.53,3.52-3.51Zm-8.19-1.13L288.86,385l3.52-3.52,3.53,3.52Zm0,2.28,3.53,3.52-3.53,3.52-3.52-3.52Zm3.53,12.85-3.53,3.52-3.52-3.52,3.52-3.52Zm1.13,1.14,3.53,3.52-3.52,3.53-3.52-3.53Zm1.15-1.14,3.53-3.52,3.51,3.52-3.51,3.52Zm8.19,1.14,3.52,3.52-3.52,3.53-3.53-3.53Zm4.66,4.66,3.53,3.53-2.29,2.28H309.8L307.52,413Zm-3.52-5.8,3.52-3.52,3.53,3.52L311,407.17Zm0-9.33L311,390.8l3.53,3.52L311,397.84Zm2.38-14-3.52,3.52-3.53-3.52,3.16-3.16h.74Zm-8.18-1.14-2-2h4Zm-1.15,1.14-3.52,3.52-3.52-3.52,3.15-3.16h.74Zm-6.17-3.16-2,2-2-2Zm-6.31,0,3.15,3.16-3.52,3.52-3.07-3.07-.06-.84,2.76-2.77Zm-3,0-.65.66h0l-.06-.66Zm-.22,6.1,1.73,1.72-1.47,1.47Zm1,11.81-.13-1.67h0l.9.91-.77.76Zm.17,2.13,1.74-1.75,3.52,3.53-3.52,3.52-1.42-1.42Zm.53,6.51v-.15l.08.08-.07.07Zm.61,7.51-.44-5.4,1-1,3.52,3.52-3.52,3.52-.6-.6Zm.32,4-.06-.81.34-.34,1.14,1.15Zm1.42-2.28,3.52-3.53,3.53,3.53-2.29,2.28h-2.48Zm7.05,2.28,1.14-1.15,1.15,1.15Zm4.56,0L298.19,413l3.53-3.53,3.51,3.53L303,415.26Zm4.76,0,1.15-1.15,1.14,1.15Zm10.75,0h-1.42l1.14-1.15.34.34Zm.33-4-.61.6-3.52-3.52,3.52-3.52,1,1Zm.62-7.67,0,.16-.07-.07.09-.09Zm.2-2.47-1.43,1.42L312.18,399l3.52-3.53,1.75,1.75Zm.49-6-.78-.77.91-.91Zm1-11.83-.26,3.21L316.84,385l1.74-1.73Z" style="fill: rgb(255, 255, 255); transform-origin: 301.71px 396.215px;" id="el609flhruglm" class="animable"></path>
                                    </g>
                                </g>
                                <g id="el43lef03q7d">
                                    <rect x="280.41" y="374.12" width="42.6" height="4.49" rx="1.64" style="fill: rgb(64, 123, 255); transform-origin: 301.71px 376.365px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <rect x="283.49" y="414.46" width="36.45" height="4.49" rx="1.64" style="fill: rgb(64, 123, 255); transform-origin: 301.715px 416.705px;" id="elyjglr5ftri" class="animable">
                                </rect>
                            </g>
                            <g id="freepik--Screen--inject-23" class="animable" style="transform-origin: 333.715px 216.585px;">
                                <rect x="233.89" y="148.62" width="199.65" height="135.93" style="fill: rgb(64, 123, 255); transform-origin: 333.715px 216.585px;" id="el7r5f7td149u" class="animable">
                                </rect>
                                <g id="eljn7hlpmw42">
                                    <rect x="233.89" y="148.62" width="199.65" height="135.93" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.6; transform-origin: 333.715px 216.585px;" class="animable"></rect>
                                </g>
                                <g id="eleadv26usogh">
                                    <path d="M362.44,148.62S305,202.4,233.89,203.68V148.62Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.1; transform-origin: 298.165px 176.15px;" class="animable"></path>
                                </g>
                                <g id="el8awgvoe14z">
                                    <path d="M433.53,219.58s-39.45-4.11-78.48,18.56-78,44-121.16,34v12.4H433.53Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.1; transform-origin: 333.71px 251.914px;" class="animable"></path>
                                </g>
                                <rect x="285.97" y="179.35" width="95.47" height="16.35" style="fill: rgb(255, 255, 255); transform-origin: 333.705px 187.525px;" id="elz6fl3y68z0i" class="animable"></rect>
                                <rect x="285.97" y="202.54" width="95.47" height="16.35" style="fill: rgb(255, 255, 255); transform-origin: 333.705px 210.715px;" id="el1hj2ekru94ri" class="animable"></rect>
                                <g id="elho9vkje6zle">
                                    <g style="opacity: 0.4; transform-origin: 301.26px 187.067px;" class="animable">
                                        <path d="M294.52,189.12v.43H291.2v-4.69h3.22v.43H291.7V187h2.42v.42H291.7v1.74Z" style="fill: rgb(38, 50, 56); transform-origin: 292.86px 187.205px;" id="elq39rbjmke4" class="animable"></path>
                                        <path d="M295.18,187.52h1.76v.42h-1.76Z" style="fill: rgb(38, 50, 56); transform-origin: 296.06px 187.73px;" id="el7y0fgvpmkev" class="animable"></path>
                                        <path d="M303.81,187.5v2.05h-.47v-2c0-.74-.38-1.12-1-1.12a1.12,1.12,0,0,0-1.18,1.27v1.85h-.48v-2c0-.74-.37-1.12-1-1.12a1.13,1.13,0,0,0-1.17,1.27v1.85H298V186h.46v.65a1.41,1.41,0,0,1,1.29-.67,1.27,1.27,0,0,1,1.25.74,1.54,1.54,0,0,1,1.39-.74A1.32,1.32,0,0,1,303.81,187.5Z" style="fill: rgb(38, 50, 56); transform-origin: 300.913px 187.762px;" id="elhgrc9uvqi7k" class="animable"></path>
                                        <path d="M307.76,187.36v2.19h-.46V189a1.32,1.32,0,0,1-1.21.58c-.8,0-1.28-.41-1.28-1s.34-1,1.35-1h1.12v-.22a.86.86,0,0,0-1-.93,1.79,1.79,0,0,0-1.18.42l-.21-.36a2.23,2.23,0,0,1,1.43-.47A1.25,1.25,0,0,1,307.76,187.36Zm-.48,1.13v-.58h-1.1c-.68,0-.91.27-.91.63s.33.67.89.67A1.12,1.12,0,0,0,307.28,188.49Z" style="fill: rgb(38, 50, 56); transform-origin: 306.287px 187.795px;" id="elpn0c6ey3bcm" class="animable"></path>
                                        <path d="M308.94,184.91a.35.35,0,1,1,.35.34A.34.34,0,0,1,308.94,184.91Zm.11,1.11h.47v3.53h-.47Z" style="fill: rgb(38, 50, 56); transform-origin: 309.29px 187.05px;" id="el39b7g7el1lq" class="animable"></path>
                                        <path d="M310.85,184.58h.47v5h-.47Z" style="fill: rgb(38, 50, 56); transform-origin: 311.085px 187.08px;" id="el3x6x4p3v36f" class="animable"></path>
                                    </g>
                                </g>
                                <g id="eloe3hnyna2z">
                                    <g style="opacity: 0.4; transform-origin: 306.6px 210.305px;" class="animable">
                                        <path d="M294.87,209.67c0,1-.72,1.61-1.91,1.61H291.7v1.48h-.5v-4.69H293C294.15,208.07,294.87,208.67,294.87,209.67Zm-.49,0c0-.75-.5-1.17-1.44-1.17H291.7v2.34h1.24C293.88,210.84,294.38,210.41,294.38,209.67Z" style="fill: rgb(38, 50, 56); transform-origin: 293.035px 210.415px;" id="eltxa8z2xgtnc" class="animable"></path>
                                        <path d="M298.46,210.57v2.19H298v-.55a1.33,1.33,0,0,1-1.21.58c-.8,0-1.29-.42-1.29-1s.35-1,1.36-1H298v-.22c0-.6-.34-.93-1-.93a1.76,1.76,0,0,0-1.17.42l-.22-.36a2.26,2.26,0,0,1,1.44-.47A1.24,1.24,0,0,1,298.46,210.57ZM298,211.7v-.58h-1.11c-.68,0-.9.27-.9.63s.33.66.89.66A1.13,1.13,0,0,0,298,211.7Z" style="fill: rgb(38, 50, 56); transform-origin: 296.983px 211.006px;" id="el7zrn37z51pj" class="animable"></path>
                                        <path d="M299.26,212.35l.22-.37a2.11,2.11,0,0,0,1.25.39c.67,0,.94-.22.94-.57,0-.92-2.28-.2-2.28-1.59,0-.58.5-1,1.39-1a2.39,2.39,0,0,1,1.25.32l-.21.39a1.76,1.76,0,0,0-1-.31c-.63,0-.91.25-.91.59,0,1,2.28.23,2.28,1.58,0,.61-.54,1-1.45,1A2.35,2.35,0,0,1,299.26,212.35Z" style="fill: rgb(38, 50, 56); transform-origin: 300.725px 210.996px;" id="ela6zodb1yf3q" class="animable"></path>
                                        <path d="M302.54,212.35l.21-.37a2.14,2.14,0,0,0,1.25.39c.67,0,.95-.22.95-.57,0-.92-2.29-.2-2.29-1.59,0-.58.5-1,1.4-1a2.38,2.38,0,0,1,1.24.32l-.21.39a1.73,1.73,0,0,0-1-.31c-.64,0-.92.25-.92.59,0,1,2.28.23,2.28,1.58,0,.61-.53,1-1.45,1A2.32,2.32,0,0,1,302.54,212.35Z" style="fill: rgb(38, 50, 56); transform-origin: 303.995px 210.996px;" id="el2l662gn2s5q" class="animable"></path>
                                        <path d="M311.4,209.23l-1.33,3.53h-.45l-1.11-2.89-1.11,2.89H307l-1.33-3.53h.46l1.1,3,1.13-3h.41l1.13,3,1.12-3Z" style="fill: rgb(38, 50, 56); transform-origin: 308.535px 210.995px;" id="el0pseyypcwjs" class="animable"></path>
                                        <path d="M311.66,211a1.79,1.79,0,1,1,1.79,1.8A1.73,1.73,0,0,1,311.66,211Zm3.1,0a1.31,1.31,0,1,0-1.31,1.38A1.29,1.29,0,0,0,314.76,211Z" style="fill: rgb(38, 50, 56); transform-origin: 313.449px 211.011px;" id="el60i1wxavv9" class="animable"></path>
                                        <path d="M318,209.21v.46h-.11a1.14,1.14,0,0,0-1.19,1.3v1.8h-.47v-3.53h.45v.69A1.33,1.33,0,0,1,318,209.21Z" style="fill: rgb(38, 50, 56); transform-origin: 317.115px 210.987px;" id="el4toshv4qecf" class="animable"></path>
                                        <path d="M322,207.79v5h-.46v-.7a1.52,1.52,0,0,1-1.35.73,1.79,1.79,0,0,1,0-3.58,1.53,1.53,0,0,1,1.33.69v-2.11Zm-.47,3.2a1.31,1.31,0,1,0-1.3,1.38A1.29,1.29,0,0,0,321.55,211Z" style="fill: rgb(38, 50, 56); transform-origin: 320.2px 210.305px;" id="eltvwm1y5fum" class="animable"></path>
                                    </g>
                                </g>
                                <g id="elbkak1bbgbk">
                                    <rect x="286.97" y="235.56" width="95.47" height="16.35" style="opacity: 0.2; transform-origin: 334.705px 243.735px;" class="animable"></rect>
                                </g>
                                <g id="el0zxj81i1qum">
                                    <g style="opacity: 0.5; transform-origin: 312px 227.315px;" class="animable">
                                        <path d="M298.89,228.79l-.64-.89h-1v.88H297V226h1c.71,0,1.14.36,1.14,1a.87.87,0,0,1-.64.88l.68.95Zm0-1.83c0-.45-.3-.71-.86-.71h-.74v1.41H298C298.58,227.66,298.88,227.4,298.88,227Z" id="elcgphp73rjou" class="animable" style="transform-origin: 298.09px 227.415px;"></path>
                                        <path d="M301.64,227.83h-1.76a.78.78,0,0,0,.83.73.85.85,0,0,0,.65-.27l.16.18a1.05,1.05,0,0,1-.82.34,1,1,0,0,1-1.1-1.07,1,1,0,0,1,1-1.06,1,1,0,0,1,1,1.06S301.64,227.8,301.64,227.83Zm-1.76-.21h1.5a.75.75,0,0,0-1.5,0Z" id="else3gqszuztc" class="animable" style="transform-origin: 300.619px 227.748px;"></path>
                                        <path d="M305.7,227.58v1.21h-.29V227.6c0-.44-.22-.67-.6-.67a.67.67,0,0,0-.7.76v1.1h-.29V227.6c0-.44-.22-.67-.6-.67a.68.68,0,0,0-.71.76v1.1h-.28v-2.1h.27v.39a.84.84,0,0,1,.77-.4.75.75,0,0,1,.75.44.91.91,0,0,1,.83-.44A.79.79,0,0,1,305.7,227.58Z" id="el52p4e9kenuo" class="animable" style="transform-origin: 303.969px 227.734px;"></path>
                                        <path d="M308.31,227.83h-1.76a.78.78,0,0,0,.83.73.82.82,0,0,0,.64-.27l.16.18a1.11,1.11,0,0,1-1.91-.73,1,1,0,1,1,2.05,0S308.31,227.8,308.31,227.83Zm-1.76-.21H308a.72.72,0,0,0-.74-.7A.74.74,0,0,0,306.55,227.62Z" id="eln0jtkrzgiep" class="animable" style="transform-origin: 307.295px 227.763px;"></path>
                                        <path d="M312.37,227.58v1.21h-.29V227.6c0-.44-.22-.67-.6-.67a.67.67,0,0,0-.7.76v1.1h-.29V227.6c0-.44-.22-.67-.61-.67a.68.68,0,0,0-.7.76v1.1h-.28v-2.1h.27v.39a.84.84,0,0,1,.77-.4.75.75,0,0,1,.75.44.91.91,0,0,1,.83-.44A.79.79,0,0,1,312.37,227.58Z" id="elxdbzb0br5z" class="animable" style="transform-origin: 310.639px 227.734px;"></path>
                                        <path d="M315.27,227.74a1,1,0,0,1-1,1.07.92.92,0,0,1-.81-.43v.41h-.27v-3h.28v1.26a.93.93,0,0,1,.8-.41A1,1,0,0,1,315.27,227.74Zm-.28,0a.79.79,0,1,0-.79.82A.78.78,0,0,0,315,227.74Z" id="elkj35pwwvcd" class="animable" style="transform-origin: 314.232px 227.3px;"></path>
                                        <path d="M317.68,227.83h-1.76a.78.78,0,0,0,.83.73.86.86,0,0,0,.65-.27l.15.18a1,1,0,0,1-.81.34,1,1,0,0,1-1.1-1.07,1,1,0,0,1,1-1.06,1,1,0,0,1,1,1.06S317.68,227.8,317.68,227.83Zm-1.76-.21h1.49a.72.72,0,0,0-.74-.7A.74.74,0,0,0,315.92,227.62Z" id="elr4dky1hw73h" class="animable" style="transform-origin: 316.659px 227.748px;"></path>
                                        <path d="M319.33,226.68V227h-.07a.68.68,0,0,0-.71.77v1.07h-.28v-2.1h.27v.41A.79.79,0,0,1,319.33,226.68Z" id="elfsct0a3amtw" class="animable" style="transform-origin: 318.8px 227.759px;"></path>
                                        <path d="M324.39,227.58v1.21h-.28V227.6c0-.44-.23-.67-.61-.67a.67.67,0,0,0-.7.76v1.1h-.29V227.6c0-.44-.22-.67-.6-.67a.68.68,0,0,0-.71.76v1.1h-.28v-2.1h.27v.39a.84.84,0,0,1,.77-.4.75.75,0,0,1,.75.44.91.91,0,0,1,.83-.44A.79.79,0,0,1,324.39,227.58Z" id="elm1lt9r5x9co" class="animable" style="transform-origin: 322.659px 227.734px;"></path>
                                        <path d="M327,227.83h-1.76a.78.78,0,0,0,.83.73.82.82,0,0,0,.64-.27l.16.18a1,1,0,0,1-.81.34,1,1,0,0,1-1.1-1.07,1,1,0,0,1,1-1.06,1,1,0,0,1,1,1.06S327,227.8,327,227.83Zm-1.76-.21h1.49a.72.72,0,0,0-.74-.7A.74.74,0,0,0,325.24,227.62Z" id="elbwtk5wf2hok" class="animable" style="transform-origin: 325.979px 227.748px;"></path>
                                    </g>
                                </g>
                                <rect x="285.97" y="234.56" width="95.47" height="16.35" style="fill: rgb(64, 123, 255); transform-origin: 333.705px 242.735px;" id="elv3qvkycv8sq" class="animable">
                                </rect>
                                <g id="elua4mc5rdm1i">
                                    <g style="opacity: 0.5; transform-origin: 333.79px 262.755px;" class="animable">
                                        <path d="M316.47,261.3v1.09h1.45v.26h-1.45v1.19h-.3V261h1.92v.26Z" id="elv3u9tklskha" class="animable" style="transform-origin: 317.13px 262.42px;"></path>
                                        <path d="M318.36,262.79a1.07,1.07,0,1,1,1.07,1.07A1,1,0,0,1,318.36,262.79Zm1.85,0a.78.78,0,1,0-1.56,0,.78.78,0,1,0,1.56,0Z" id="el2bo5q450kpg" class="animable" style="transform-origin: 319.429px 262.791px;"></path>
                                        <path d="M322.14,261.72V262h-.07c-.44,0-.7.28-.7.78v1.07h-.29v-2.1h.27v.41A.8.8,0,0,1,322.14,261.72Z" id="elu2k813a8j2" class="animable" style="transform-origin: 321.61px 262.783px;"></path>
                                        <path d="M324.58,261.74v1.84a.92.92,0,0,1-1.05,1.05,1.46,1.46,0,0,1-1-.32l.14-.22a1.27,1.27,0,0,0,.83.29c.53,0,.78-.24.78-.76v-.27a1,1,0,0,1-.82.41,1,1,0,0,1-1.06-1,1,1,0,0,1,1.06-1,.94.94,0,0,1,.83.42v-.4Zm-.27,1a.8.8,0,1,0-.8.78A.76.76,0,0,0,324.31,262.73Z" id="el8jxopohgnai" class="animable" style="transform-origin: 323.495px 263.19px;"></path>
                                        <path d="M325.17,262.79a1.07,1.07,0,1,1,2.14,0,1.07,1.07,0,1,1-2.14,0Zm1.85,0a.79.79,0,1,0-1.57,0,.78.78,0,0,0,.79.82A.77.77,0,0,0,327,262.79Z" id="elbqoylwqgyea" class="animable" style="transform-origin: 326.24px 262.79px;"></path>
                                        <path d="M329,263.71a.67.67,0,0,1-.44.15.56.56,0,0,1-.62-.61V262h-.37v-.24h.37v-.46h.29v.46h.64V262h-.64v1.25a.33.33,0,0,0,.36.38.46.46,0,0,0,.31-.1Z" id="elnal5jmj4zf" class="animable" style="transform-origin: 328.285px 262.582px;"></path>
                                        <path d="M332.81,262c0,.59-.43,1-1.15,1h-.75v.88h-.29V261h1C332.38,261,332.81,261.4,332.81,262Zm-.3,0c0-.45-.29-.7-.85-.7h-.75v1.39h.75C332.22,262.69,332.51,262.44,332.51,262Z" id="el1tfvga8xqieh" class="animable" style="transform-origin: 331.715px 262.44px;"></path>
                                        <path d="M335,262.54v1.3h-.27v-.33a.79.79,0,0,1-.73.35c-.47,0-.77-.25-.77-.61s.21-.6.82-.6h.66v-.13c0-.36-.2-.55-.59-.55a1.08,1.08,0,0,0-.7.24l-.13-.21a1.33,1.33,0,0,1,.86-.28A.75.75,0,0,1,335,262.54Zm-.29.67v-.35H334c-.4,0-.54.16-.54.38s.2.39.54.39A.66.66,0,0,0,334.67,263.21Z" id="el73e6fraeyic" class="animable" style="transform-origin: 334.117px 262.788px;"></path>
                                        <path d="M335.44,263.6l.13-.23a1.19,1.19,0,0,0,.74.24c.4,0,.57-.14.57-.34,0-.55-1.37-.12-1.37-.95,0-.34.3-.6.84-.6a1.34,1.34,0,0,1,.74.2l-.13.22a1,1,0,0,0-.61-.18c-.38,0-.55.15-.55.35,0,.57,1.36.14,1.36.95,0,.36-.32.6-.87.6A1.39,1.39,0,0,1,335.44,263.6Z" id="elpczu9cxas2" class="animable" style="transform-origin: 336.3px 262.79px;"></path>
                                        <path d="M337.39,263.6l.13-.23a1.22,1.22,0,0,0,.75.24c.4,0,.56-.14.56-.34,0-.55-1.36-.12-1.36-.95,0-.34.3-.6.83-.6a1.32,1.32,0,0,1,.74.2l-.12.22a1,1,0,0,0-.62-.18c-.38,0-.55.15-.55.35,0,.57,1.37.14,1.37.95,0,.36-.32.6-.87.6A1.42,1.42,0,0,1,337.39,263.6Z" id="elm8et7b3e2yh" class="animable" style="transform-origin: 338.255px 262.79px;"></path>
                                        <path d="M342.69,261.74l-.8,2.1h-.27l-.66-1.72-.66,1.72H340l-.79-2.1h.27l.66,1.78.68-1.78h.24l.67,1.78.67-1.78Z" id="elm4yjvqw73qa" class="animable" style="transform-origin: 340.95px 262.79px;"></path>
                                        <path d="M342.85,262.79a1.07,1.07,0,1,1,1.07,1.07A1,1,0,0,1,342.85,262.79Zm1.85,0a.79.79,0,1,0-1.57,0,.78.78,0,0,0,.79.82A.77.77,0,0,0,344.7,262.79Z" id="elbaoab9dtw4" class="animable" style="transform-origin: 343.919px 262.791px;"></path>
                                        <path d="M346.62,261.72V262h-.06a.68.68,0,0,0-.71.78v1.07h-.28v-2.1h.27v.41A.79.79,0,0,1,346.62,261.72Z" id="el3c37iavkmga" class="animable" style="transform-origin: 346.095px 262.783px;"></path>
                                        <path d="M349,260.87v3h-.27v-.42a.92.92,0,0,1-.82.44,1.07,1.07,0,0,1,0-2.14.91.91,0,0,1,.8.41v-1.26Zm-.28,1.92a.79.79,0,1,0-1.57,0,.79.79,0,1,0,1.57,0Z" id="el2rat0kj7jzj" class="animable" style="transform-origin: 347.92px 262.38px;"></path>
                                        <path d="M351.1,261.75c0-.28-.23-.48-.64-.48a.92.92,0,0,0-.76.32l-.21-.16a1.21,1.21,0,0,1,1-.41c.56,0,.92.26.92.69,0,.68-.73.72-.73,1.29h-.3C350.37,262.34,351.1,262.28,351.1,261.75Zm-.79,1.9a.2.2,0,0,1,.21-.2.2.2,0,0,1,.21.2.21.21,0,0,1-.21.21A.22.22,0,0,1,350.31,263.65Z" id="elsb6ixd0quji" class="animable" style="transform-origin: 350.45px 262.438px;"></path>
                                    </g>
                                </g>
                                <rect x="286.7" y="224.4" width="4.85" height="4.85" style="fill: rgb(255, 255, 255); transform-origin: 289.125px 226.825px;" id="elz5w1ev54r6q" class="animable"></rect>
                                <path d="M323.17,239.68h.8v4.9h3v.69h-3.83Z" style="fill: rgb(255, 255, 255); transform-origin: 325.055px 242.475px;" id="eldafu8grkewl" class="animable"></path>
                                <path d="M327.36,243.15a2.21,2.21,0,1,1,2.21,2.17A2.11,2.11,0,0,1,327.36,243.15Zm3.63,0a1.43,1.43,0,1,0-1.42,1.5A1.39,1.39,0,0,0,331,243.15Z" style="fill: rgb(255, 255, 255); transform-origin: 329.569px 243.111px;" id="elo7ktf0zyiyc" class="animable"></path>
                                <path d="M336.89,241v3.67a1.92,1.92,0,0,1-2.2,2.17,3.14,3.14,0,0,1-2-.63l.37-.59a2.62,2.62,0,0,0,1.63.55c1,0,1.46-.46,1.46-1.42v-.34a2,2,0,0,1-1.53.66,2.06,2.06,0,1,1,0-4.11,2,2,0,0,1,1.57.7V241Zm-.75,2a1.46,1.46,0,1,0-1.46,1.38A1.35,1.35,0,0,0,336.14,243Z" style="fill: rgb(255, 255, 255); transform-origin: 334.663px 243.909px;" id="elkhg0tl08my8" class="animable"></path>
                                <path d="M338.22,239.72a.52.52,0,1,1,.52.5A.5.5,0,0,1,338.22,239.72Zm.13,1.31h.77v4.24h-.77Z" style="fill: rgb(255, 255, 255); transform-origin: 338.74px 242.225px;" id="elgu4s251ukcs" class="animable">
                                </path>
                                <path d="M344.61,242.83v2.44h-.77v-2.35c0-.83-.42-1.24-1.14-1.24a1.26,1.26,0,0,0-1.35,1.41v2.18h-.76V241h.73v.64a1.83,1.83,0,0,1,1.53-.68A1.65,1.65,0,0,1,344.61,242.83Z" style="fill: rgb(255, 255, 255); transform-origin: 342.608px 243.113px;" id="elk4x9xaa3ktk" class="animable"></path>
                                <polygon points="288.69 228.16 287.62 227 287.98 226.66 288.69 227.43 290.29 225.78 290.65 226.12 288.69 228.16" style="fill: rgb(38, 50, 56); transform-origin: 289.135px 226.97px;" id="el3cy56icu0bc" class="animable">
                                </polygon>
                                <g id="elu7jurkleatf">
                                    <g style="opacity: 0.4; transform-origin: 372.385px 211.02px;" class="animable">
                                        <path d="M372.38,213.74h0a5.4,5.4,0,0,1-4.37-2.58l-.1-.14.1-.14a5,5,0,0,1,8.75,0l.1.14-.1.14A5.41,5.41,0,0,1,372.38,213.74ZM368.52,211a4.47,4.47,0,0,0,7.73,0,4.47,4.47,0,0,0-7.73,0Z" style="fill: rgb(38, 50, 56); transform-origin: 372.385px 211.02px;" id="eliww4c2f4q8" class="animable"></path>
                                        <path d="M372.38,212.87a1.86,1.86,0,1,1,1.86-1.85A1.85,1.85,0,0,1,372.38,212.87Zm0-3.21a1.36,1.36,0,1,0,1.36,1.36A1.36,1.36,0,0,0,372.38,209.66Z" style="fill: rgb(38, 50, 56); transform-origin: 372.38px 211.01px;" id="el4piz3aj6ua" class="animable"></path>
                                        <g id="el8wffhy6cg9g">
                                            <rect x="368.21" y="210.77" width="8.34" height="0.5" style="fill: rgb(38, 50, 56); transform-origin: 372.38px 211.02px; transform: rotate(-45deg);" class="animable"></rect>
                                        </g>
                                    </g>
                                </g>
                                <g id="els0hnb3klsiq">
                                    <g style="opacity: 0.5; transform-origin: 333.656px 170.621px;" class="animable">
                                        <path d="M322.05,171.92l.21-.4a2.37,2.37,0,0,0,1.62.6c.91,0,1.31-.39,1.31-.87,0-1.34-3-.52-3-2.33,0-.72.56-1.35,1.81-1.35a2.72,2.72,0,0,1,1.52.44l-.17.41A2.6,2.6,0,0,0,324,168c-.9,0-1.3.39-1.3.88,0,1.35,3,.54,3,2.32,0,.72-.57,1.34-1.82,1.34A2.68,2.68,0,0,1,322.05,171.92Z" id="eld1k8wg9e9bo" class="animable" style="transform-origin: 323.875px 170.056px;"></path>
                                        <path d="M326.61,167.67a.36.36,0,0,1,.37-.35.36.36,0,1,1,0,.71A.36.36,0,0,1,326.61,167.67Zm.11,1.16h.5v3.69h-.5Z" id="el22r0kxiz1su" class="animable" style="transform-origin: 327.005px 169.917px;"></path>
                                        <path d="M332,168.83v3.24a1.62,1.62,0,0,1-1.84,1.84,2.58,2.58,0,0,1-1.72-.56l.25-.38a2.21,2.21,0,0,0,1.45.5c.93,0,1.36-.43,1.36-1.34v-.47a1.66,1.66,0,0,1-1.44.72,1.79,1.79,0,1,1,0-3.57,1.67,1.67,0,0,1,1.46.73v-.71Zm-.49,1.76a1.4,1.4,0,1,0-1.4,1.35A1.32,1.32,0,0,0,331.53,170.59Z" id="elntwntnqjsji" class="animable" style="transform-origin: 330.077px 171.366px;"></path>
                                        <path d="M336.8,170.38v2.14h-.5v-2.09a1,1,0,0,0-1.11-1.18,1.21,1.21,0,0,0-1.28,1.34v1.93h-.5v-3.69h.47v.68a1.58,1.58,0,0,1,1.41-.7A1.41,1.41,0,0,1,336.8,170.38Z" id="ely93ix4bmwi7" class="animable" style="transform-origin: 335.11px 170.663px;"></path>
                                        <path d="M339.87,167.67a.37.37,0,0,1,.73,0,.36.36,0,0,1-.37.37A.36.36,0,0,1,339.87,167.67Zm.11,1.16h.5v3.69H340Z" id="el03r7re0ow9pu" class="animable" style="transform-origin: 340.235px 169.94px;"></path>
                                        <path d="M345.25,170.38v2.14h-.49v-2.09a1,1,0,0,0-1.11-1.18,1.22,1.22,0,0,0-1.29,1.34v1.93h-.5v-3.69h.48v.68a1.56,1.56,0,0,1,1.4-.7A1.4,1.4,0,0,1,345.25,170.38Z" id="el8i3xlzc81m3" class="animable" style="transform-origin: 343.561px 170.662px;"></path>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--speech-bubble--inject-23" class="animable" style="transform-origin: 166.93px 176.555px;">
                                <path d="M181.28,148.26H152.55a8.85,8.85,0,0,0-8.85,8.85v25a8.85,8.85,0,0,0,8.85,8.85h8.38l-7,13.89,13-13.89h14.39a8.84,8.84,0,0,0,8.84-8.85v-25A8.84,8.84,0,0,0,181.28,148.26Z" style="fill: rgb(64, 123, 255); transform-origin: 166.93px 176.555px;" id="el314qcp6wfbj" class="animable">
                                </path>
                                <g id="el9ifjmiilge">
                                    <path d="M181.28,148.26H152.55a8.85,8.85,0,0,0-8.85,8.85v25a8.85,8.85,0,0,0,8.85,8.85h8.38l-7,13.89,13-13.89h14.39a8.84,8.84,0,0,0,8.84-8.85v-25A8.84,8.84,0,0,0,181.28,148.26Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 166.93px 176.555px;" class="animable">
                                    </path>
                                </g>
                                <path d="M165.42,175.87a1.31,1.31,0,0,1-1-.46l-5.6-6.59a1.31,1.31,0,1,1,2-1.7l4.6,5.42,7.58-8.95a1.31,1.31,0,1,1,2,1.7l-8.59,10.12A1.29,1.29,0,0,1,165.42,175.87Z" style="fill: rgb(255, 255, 255); transform-origin: 166.91px 169.499px;" id="elg3qquskoefd" class="animable">
                                </path>
                                <g id="el5ipm2va9j9">
                                    <circle cx="166.91" cy="169.5" r="14.26" style="fill: rgb(64, 123, 255); transform-origin: 166.91px 169.5px; transform: rotate(-45deg);" class="animable"></circle>
                                </g>
                            </g>
                            <g id="freepik--Character--inject-23" class="animable" style="transform-origin: 174.738px 309.193px;">
                                <path d="M205,417.12h58.2a1.15,1.15,0,0,0,1.15-1.15v-3.71a1.15,1.15,0,0,0-1.15-1.14H208V292.3h54.26a2.09,2.09,0,0,0,2.09-2.08V286.3H205a3,3,0,0,0-3,3V414.12A3,3,0,0,0,205,417.12Z" style="fill: rgb(38, 50, 56); transform-origin: 233.175px 351.71px;" id="elvk7mkpaotab" class="animable">
                                </path>
                                <g id="elrpu968pmjyj">
                                    <g style="isolation: isolate; opacity: 0.3; transform-origin: 233.17px 351.705px;" class="animable">
                                        <path d="M202,289.3V414.11a3,3,0,0,0,3,3h58.2a1.14,1.14,0,0,0,1.14-1.14v-3.71a1.15,1.15,0,0,0-1.14-1.15H208V292.3h54.26a2.09,2.09,0,0,0,2.08-2.09V286.3H205A3,3,0,0,0,202,289.3Z" style="fill: rgb(255, 255, 255); transform-origin: 233.17px 351.705px;" id="elx2xn6mhp38g" class="animable"></path>
                                    </g>
                                </g>
                                <g id="elujbmpdc2p4">
                                    <path d="M202,289.3v31.83q3,.76,6,1.47V292.3h54.26a2.09,2.09,0,0,0,2.08-2.09V286.3H205A3,3,0,0,0,202,289.3Z" style="opacity: 0.2; transform-origin: 233.17px 304.45px;" class="animable"></path>
                                </g>
                                <path d="M96.75,400.37l23.86-2.08V367H129v31.33L153,400.37a4.12,4.12,0,0,1,3.72,4.1v3.18H93v-3.18A4.12,4.12,0,0,1,96.75,400.37Z" style="fill: rgb(38, 50, 56); transform-origin: 124.86px 387.325px;" id="elc8b6oyrnn8q" class="animable">
                                </path>
                                <g id="elcaua2z5u2jm">
                                    <path d="M96.75,400.37l23.86-2.08V367H129v31.33L153,400.37a4.12,4.12,0,0,1,3.72,4.1v3.18H93v-3.18A4.12,4.12,0,0,1,96.75,400.37Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.1; transform-origin: 124.86px 387.325px;" class="animable"></path>
                                </g>
                                <path d="M148.94,411.6a5.49,5.49,0,1,0,5.49-5.49A5.48,5.48,0,0,0,148.94,411.6Z" style="fill: rgb(38, 50, 56); transform-origin: 154.43px 411.6px;" id="elox91obsju1" class="animable">
                                </path>
                                <path d="M100.75,411.6a5.49,5.49,0,1,1-5.48-5.49A5.48,5.48,0,0,1,100.75,411.6Z" style="fill: rgb(38, 50, 56); transform-origin: 95.26px 411.6px;" id="elv96hcneuqva" class="animable">
                                </path>
                                <g id="elgdcvpa1aups">
                                    <path d="M122.88,342.66h3.85a3.71,3.71,0,0,1,3.71,3.71v27a0,0,0,0,1,0,0H119.17a0,0,0,0,1,0,0v-27A3.71,3.71,0,0,1,122.88,342.66Z" style="fill: rgb(38, 50, 56); transform-origin: 124.805px 358.015px; transform: rotate(180deg);" class="animable"></path>
                                </g>
                                <g id="el866jbqsu0yn">
                                    <path d="M122.88,342.66h3.85a3.71,3.71,0,0,1,3.71,3.71v27a0,0,0,0,1,0,0H119.17a0,0,0,0,1,0,0v-27A3.71,3.71,0,0,1,122.88,342.66Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.2; transform-origin: 124.805px 358.015px; transform: rotate(180deg);" class="animable"></path>
                                </g>
                                <path d="M100.06,280.66s2.58,51.83,13.74,60.75H101.86s-10.64-17.66-11.43-60.75Z" style="fill: rgb(38, 50, 56); transform-origin: 102.115px 311.035px;" id="el403q3r1zjwz" class="animable">
                                </path>
                                <g id="elztclg5huv5i">
                                    <path d="M100.06,280.66s2.58,51.83,13.74,60.75H101.86s-10.64-17.66-11.43-60.75Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.1; transform-origin: 102.115px 311.035px;" class="animable"></path>
                                </g>
                                <path d="M99.09,337.11H152a4.49,4.49,0,0,1,4.49,4.49v4.1a0,0,0,0,1,0,0H94.59a0,0,0,0,1,0,0v-4.1A4.49,4.49,0,0,1,99.09,337.11Z" style="fill: rgb(64, 123, 255); transform-origin: 125.54px 341.405px;" id="elp5sb2qtdr9i" class="animable">
                                </path>
                                <rect x="92.24" y="341.41" width="66.62" height="4.29" rx="1.81" style="fill: rgb(38, 50, 56); transform-origin: 125.55px 343.555px;" id="eloyyh8ajutfe" class="animable">
                                </rect>
                                <g id="elfv7jfyp598k">
                                    <rect x="92.24" y="341.41" width="66.62" height="4.29" rx="1.81" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.6; transform-origin: 125.55px 343.555px;" class="animable"></rect>
                                </g>
                                <path d="M88.33,292h19.13c5.6,0,9.64-5,9-11.25l-.81-8.28c-.62-6.21-5.65-11.25-11.25-11.25H85.3c-5.6,0-9.64,5-9,11.25l.81,8.28C77.69,287,82.73,292,88.33,292Z" style="fill: rgb(64, 123, 255); transform-origin: 96.38px 276.61px;" id="elt5jc5dfzlt" class="animable">
                                </path>
                                <g id="freepik--group--inject-23" class="animable" style="transform-origin: 187.749px 309.193px;">
                                    <path d="M151.46,247.29c1.19,3.77,2.59,7.7,4.13,11.3,1.3,3,3.15,6.82,5.26,8.83,1.92,1.71,6.49,2.36,9.46,2.75,4,.51,8.26.7,12.41.87l.74,5.6A64.85,64.85,0,0,1,170,278.77c-5.08.18-11,0-15.4-3.12-6.39-5-9.17-11.66-12-18.69-.8-2.23-1.52-4.27-2.13-6.61l11-3.06Z" style="fill: rgb(182, 91, 82); transform-origin: 161.965px 263.054px;" id="elvmy6pjne1hr" class="animable"></path>
                                    <path d="M146.55,242c3.15,1.08,6,5.61,13.93,23.78,0,0,1.29,2.22,7.72,3.61l-.59,10.2s-9.18-.4-11.31-1.87-14.9-22.48-14.9-22.48Z" style="fill: rgb(38, 50, 56); transform-origin: 154.8px 260.795px;" id="elt9tolrwyx9" class="animable">
                                    </path>
                                    <g id="elmzm4294uc8o">
                                        <path d="M168.2,269.41l-.59,10.2s-7.36-.32-10.43-1.45a4,4,0,0,1-.88-.42c-1.23-.86-6-8.25-9.85-14.33-2.79-4.42-5-8.15-5-8.15L146.55,242c3.15,1.08,6,5.61,13.94,23.77C160.49,265.79,161.77,268,168.2,269.41Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.2; transform-origin: 154.825px 260.805px;" class="animable"></path>
                                    </g>
                                    <g id="elsj7xv1wnfxm">
                                        <path d="M157.18,278.16a4,4,0,0,1-.88-.42c-1.23-.86-6-8.25-9.85-14.33A101.11,101.11,0,0,1,150,253.25S157.32,267.92,157.18,278.16Z" style="isolation: isolate; opacity: 0.2; transform-origin: 151.816px 265.705px;" class="animable">
                                        </path>
                                    </g>
                                    <path d="M180.54,271.55l7.17-2.58-.88,9.6s-6.58.84-7.39-2.62Z" style="fill: rgb(181, 91, 82); transform-origin: 183.575px 273.815px;" id="elzfrxjyw78d" class="animable"></path>
                                    <polygon points="193.65 270.91 192.55 278.82 186.83 278.57 187.71 268.97 193.65 270.91" style="fill: rgb(181, 91, 82); transform-origin: 190.24px 273.895px;" id="elw0lukc2zn8" class="animable"></polygon>
                                    <polygon points="168.25 268.97 171.91 270.07 170.57 279.99 166.91 280.62 168.25 268.97" style="fill: rgb(38, 50, 56); transform-origin: 169.41px 274.795px;" id="eld9vhkodtxc" class="animable">
                                    </polygon>
                                    <path d="M151.74,305.09s48.39,19.09,59.64,27.07S251,393.94,251,393.94l-11.73,9s-33.84-49.14-38-52.47-58-19.86-58-19.86Z" style="fill: rgb(64, 123, 255); transform-origin: 197.135px 354.015px;" id="elcggo3z0yisk" class="animable"></path>
                                    <g id="elcqba02aafxf">
                                        <path d="M251,393.94l-11.73,9s-7.9-11.47-16.53-23.7c-9.23-13.09-19.3-27-21.44-28.77-3-2.44-32.65-11.94-48.36-16.86-5.78-1.82-9.67-3-9.67-3l8.46-25.55s48.38,19.09,59.64,27.07S251,393.94,251,393.94Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.4; transform-origin: 197.135px 354px;" class="animable"></path>
                                    </g>
                                    <polygon points="253.15 413.19 258.8 407.51 249.56 393.22 243.92 398.9 253.15 413.19" style="fill: rgb(181, 91, 82); transform-origin: 251.36px 403.205px;" id="elrmij2cq4d1" class="animable"></polygon>
                                    <g id="eldp4uqc50bmu">
                                        <polygon points="243.92 398.9 249.56 393.23 254.84 401.4 249 406.78 243.92 398.9" style="isolation: isolate; opacity: 0.2; transform-origin: 249.38px 400.005px;" class="animable">
                                        </polygon>
                                    </g>
                                    <path d="M259.78,406.89s0,0,.07,0,0,0,0,0a9.88,9.88,0,0,0,1.9-.94,2.13,2.13,0,0,0,1-1.16,1,1,0,0,0-.39-1,.7.7,0,0,0-.65-.2c-.55.13-1.09.91-1.5,1.66a3,3,0,0,0-.46-2,.7.7,0,0,0-.87-.1.88.88,0,0,0-.49.63c-.23,1.08,1.22,2.82,1.29,2.92l.1-.1h0l-.09.11s-.07.11-.07.12A.13.13,0,0,0,259.78,406.89Zm.05-.74c0,.06-.05.12-.07.17-.44-.62-1.09-1.71-.95-2.35a.54.54,0,0,1,.24-.37l.07,0c.24-.12.37-.05.45,0A3.76,3.76,0,0,1,259.83,406.15Zm.34.24c.44-1,1.17-2.3,1.72-2.42a.32.32,0,0,1,.32.1.68.68,0,0,1,.26.62C262.36,405.21,261.51,405.83,260.17,406.39Z" style="fill: rgb(64, 123, 255); transform-origin: 260.567px 404.97px;" id="el6ul8ye3qz0a" class="animable"></path>
                                    <path d="M258.69,406.38l-7.46,5a.56.56,0,0,0-.19.78h0l3.6,6.15a1.41,1.41,0,0,0,1.95.4c2.57-1.79,3.71-2.77,7-5a75.85,75.85,0,0,0,8.57-6.13c2.46-2.29.13-4.66-1.11-3.91-3,1.77-8.08,2.53-10.94,2.32A2.17,2.17,0,0,0,258.69,406.38Z" style="fill: rgb(38, 50, 56); transform-origin: 262.099px 411.235px;" id="eln6g1q2z48qj" class="animable"></path>
                                    <polygon points="239.82 406.91 254.47 397.16 251.09 390.27 235.22 401.28 239.82 406.91" style="fill: rgb(64, 123, 255); transform-origin: 244.845px 398.59px;" id="elu114tqeprbl" class="animable"></polygon>
                                    <g id="elm74dvtggson">
                                        <polygon points="239.82 406.91 254.47 397.16 251.09 390.27 235.22 401.28 239.82 406.91" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 244.845px 398.59px;" class="animable"></polygon>
                                    </g>
                                    <g id="elw82vggggrzh">
                                        <path d="M222.76,379.28c-9.23-13.09-19.3-27-21.44-28.77-3-2.44-32.65-11.94-48.36-16.86l-1.83-19,5.74-1,.65,1.46s35.86,8.13,46,13.21C210.05,331.53,218.82,363.61,222.76,379.28Z" style="isolation: isolate; opacity: 0.2; transform-origin: 186.945px 346.465px;" class="animable">
                                        </path>
                                    </g>
                                    <path d="M220.61,408.79l0,0a.09.09,0,0,0,.07,0,10,10,0,0,0,2.11-.25,2.13,2.13,0,0,0,1.35-.76,1,1,0,0,0,0-1.06.71.71,0,0,0-.55-.41c-.56-.07-1.33.5-2,1.07a2.9,2.9,0,0,0,.21-2,.7.7,0,0,0-.78-.39,1,1,0,0,0-.68.43c-.57.95.22,3.07.26,3.19l.12-.07h0l-.12.08s-.11.08-.1.09Zm.3-.69-.13.14a4.07,4.07,0,0,1-.12-2.54.55.55,0,0,1,.35-.26l.09,0c.26,0,.36.08.4.18A3.73,3.73,0,0,1,220.91,408.1Zm.23.34c.75-.8,1.87-1.78,2.43-1.71a.33.33,0,0,1,.27.2.7.7,0,0,1,0,.67C223.6,408.05,222.6,408.36,221.14,408.44Z" style="fill: rgb(64, 123, 255); transform-origin: 222.213px 406.886px;" id="elh4ihdjfpk9t" class="animable"></path>
                                    <polygon points="212.27 412.53 219.48 409.04 215.19 391.86 207.99 395.35 212.27 412.53" style="fill: rgb(181, 91, 82); transform-origin: 213.735px 402.195px;" id="el1ify3j6faev" class="animable"></polygon>
                                    <g id="elnfcqir9l3yg">
                                        <polygon points="207.99 395.35 215.19 391.87 217.64 401.69 210.34 404.82 207.99 395.35" style="isolation: isolate; opacity: 0.2; transform-origin: 212.815px 398.345px;" class="animable">
                                        </polygon>
                                    </g>
                                    <path d="M219.75,407.94l-8.7,2.25a.56.56,0,0,0-.44.67h0l1.36,7a1.42,1.42,0,0,0,1.71,1c3-.84,4.42-1.39,8.24-2.41A74.22,74.22,0,0,0,232,413.54c3.08-1.34,1.67-4.35.25-4.05-3.38.69-8.47-.3-11.09-1.45A2.26,2.26,0,0,0,219.75,407.94Z" style="fill: rgb(38, 50, 56); transform-origin: 222.218px 413.386px;" id="elv6sdaspcmjn" class="animable"></path>
                                    <path d="M218.7,395.12S206.5,333.91,204,330.27c-4.06-6-52.88-15.67-52.88-15.67l5.73-1L150.23,296l-43.47,1.71s.91,28.72,5.33,36.42,69.81,11.24,74.06,13,17.22,49.77,17.22,49.77Z" style="fill: rgb(64, 123, 255); transform-origin: 162.73px 346.45px;" id="el80i8kk7jup" class="animable"></path>
                                    <g id="el90bgleb1wjm">
                                        <path d="M218.7,395.12S206.5,333.91,204,330.27c-4.06-6-52.88-15.67-52.88-15.67l5.73-1L150.23,296l-43.47,1.71s.91,28.72,5.33,36.42,69.81,11.24,74.06,13,17.22,49.77,17.22,49.77Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.4; transform-origin: 162.73px 346.45px;" class="animable"></path>
                                    </g>
                                    <polygon points="203.63 402.32 220.69 397.98 219.78 390.36 201.16 395.49 203.63 402.32" style="fill: rgb(64, 123, 255); transform-origin: 210.925px 396.34px;" id="elqtvq7lfmcvj" class="animable"></polygon>
                                    <g id="el2p7agwjnaav">
                                        <polygon points="203.63 402.32 220.69 397.98 219.78 390.36 201.16 395.49 203.63 402.32" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 210.925px 396.34px;" class="animable"></polygon>
                                    </g>
                                    <polygon points="120.52 298.38 107.92 298.17 107.65 301.98 121.06 302.3 120.52 298.38" style="fill: rgb(38, 50, 56); transform-origin: 114.355px 300.235px;" id="el18ssm41hpd6" class="animable"></polygon>
                                    <polygon points="122.46 298.31 123.01 302.27 151.13 301.87 150.22 298.26 122.46 298.31" style="fill: rgb(38, 50, 56); transform-origin: 136.795px 300.265px;" id="elc8b72pmkjcb" class="animable"></polygon>
                                    <path d="M136,299l.36,2.61a1.35,1.35,0,0,0,1.35,1.13l4.5-.14a1,1,0,0,0,1-1.19l-.37-2.62a1.34,1.34,0,0,0-1.35-1.12l-4.49.14A1,1,0,0,0,136,299Z" style="fill: rgb(255, 255, 255); transform-origin: 139.605px 300.205px;" id="el5iz4qrnlfog" class="animable"></path>
                                    <path d="M107.86,297.61h41.3a2,2,0,0,0,2-1.78c5.1-40-4.64-53.81-4.64-53.81a75.23,75.23,0,0,0-11.32-2.31,147.3,147.3,0,0,0-16.81-.36A79.59,79.59,0,0,0,107,240.48c-2,.87-4.07,9.78-2,37.54.54,7.27.62,13.55.57,17.23A2.33,2.33,0,0,0,107.86,297.61Z" style="fill: rgb(38, 50, 56); transform-origin: 128.389px 268.433px;" id="el1x332xlb0jp" class="animable"></path>
                                    <polygon points="140.76 256.17 148.72 256.17 149.32 265.67 145.05 268.44 140.76 266.32 140.76 256.17" style="fill: rgb(38, 50, 56); transform-origin: 145.04px 262.305px;" id="eld91izx2sjhe" class="animable"></polygon>
                                    <g id="elz0x9ntqlbsa">
                                        <path d="M151.19,295.83a2,2,0,0,1-2,1.78h-41.3a2.33,2.33,0,0,1-2.34-2.36c0-3.68,0-10-.56-17.23q-.43-6-.63-10.84a145.73,145.73,0,0,1,.1-17.72c.5-6,1.53-8.53,2.57-9a79.73,79.73,0,0,1,11.43-1.13,147.17,147.17,0,0,1,16.8.36A75.23,75.23,0,0,1,146.55,242S156.29,255.87,151.19,295.83Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.2; transform-origin: 128.403px 268.423px;" class="animable"></path>
                                    </g>
                                    <path d="M118.8,238.94l13.34,4.55.54-3.82c-1.3-2.28-1.63-3.72-.53-6.37l-8.9-10.23C123.48,228.31,122.53,235.47,118.8,238.94Z" style="fill: rgb(181, 91, 82); transform-origin: 125.74px 233.28px;" id="elg75dddep14a" class="animable"></path>
                                    <path d="M127.24,245.47l2.62,1.09,2.28,1.43s3.05,17.46,2.2,32.2l2.56,2.1,2.7-2.17s-3.36-27.07-4.57-32.34l.53-1.27,1.23-2.62-2.27-1.19-3.61.79h-2.52Z" style="fill: rgb(255, 255, 255); transform-origin: 133.42px 262.495px;" id="elxqs2cv6fqur" class="animable"></path>
                                    <g id="elmml9k2d06bq">
                                        <path d="M126.87,227.24l5.27,6.06a18.21,18.21,0,0,0-.95,2.87c-2.23-.67-5-3.64-4.87-6.06A8.08,8.08,0,0,1,126.87,227.24Z" style="isolation: isolate; opacity: 0.2; transform-origin: 129.228px 231.705px;" class="animable">
                                        </path>
                                    </g>
                                    <path d="M119.63,236.52a63.2,63.2,0,0,0,12,6.25,11.82,11.82,0,0,0,0-5.67l5.89,2.94s.49,4.57-.86,7l-4.33-3.17-4.86,4s-9.2-3.55-10.64-8.37Z" style="fill: rgb(38, 50, 56); transform-origin: 127.218px 242.195px;" id="el1hseh8yuk1i" class="animable"></path>
                                    <g id="elk0jg28ox3u9">
                                        <path d="M149.64,272,136,283c-19.58,4.36-28.19-7.85-31.65-15.85a145.73,145.73,0,0,1,.1-17.72c4.7-.22,10.55-.22,12.13,1,2.75,2.11,12.33,16.9,13.76,18S149.64,272,149.64,272Z" style="isolation: isolate; opacity: 0.2; transform-origin: 126.884px 266.617px;" class="animable">
                                        </path>
                                    </g>
                                    <path d="M157.4,271.48l7.17-2.59-.88,9.6s-6.58.84-7.39-2.62Z" style="fill: rgb(181, 91, 82); transform-origin: 160.435px 273.735px;" id="el6k6vzb17hk7" class="animable"></path>
                                    <polygon points="170.5 270.83 169.41 278.74 163.69 278.49 164.57 268.89 170.5 270.83" style="fill: rgb(181, 91, 82); transform-origin: 167.095px 273.815px;" id="eltc87embncz9" class="animable"></polygon>
                                    <path d="M115.69,252.11a131.5,131.5,0,0,0,7,12.17,28.53,28.53,0,0,0,5.82,6.83,1.77,1.77,0,0,0,.59.34,27.35,27.35,0,0,0,7.68.9c7.26.07,14.65-.6,21.94-1.22l1.19,5.52A121.18,121.18,0,0,1,145,280.48c-5.47,1-10.46,1.75-16.28,1.19a14.82,14.82,0,0,1-5.37-1.63c-6.48-3.79-10.45-9.92-14.21-16-1.35-2.36-2.58-4.56-3.72-7.08l10.3-4.87Z" style="fill: rgb(182, 91, 82); transform-origin: 132.665px 266.976px;" id="elhdc2rwandu9" class="animable"></path>
                                    <path d="M107,240.48c-12.9,4.65,3.83,36.79,10.87,40.39S136.79,283,136.79,283l.84-11.17s-6.16-.75-8-1.19c-2.93-.7-8.85-13.64-12.84-20.67A22.48,22.48,0,0,0,107,240.48Z" style="fill: rgb(38, 50, 56); transform-origin: 119.942px 261.889px;" id="el66b7gjd93c7" class="animable"></path>
                                    <g id="elvntxgn9ldue">
                                        <path d="M107,240.48c-12.9,4.65,3.83,36.79,10.87,40.39S136.79,283,136.79,283l.84-11.17s-6.16-.75-8-1.19c-2.93-.7-8.85-13.64-12.84-20.67A22.48,22.48,0,0,0,107,240.48Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.2; transform-origin: 119.942px 261.889px;" class="animable"></path>
                                    </g>
                                    <polygon points="135.97 270.99 134.93 283.96 138.63 283.27 139.6 271.68 135.97 270.99" style="fill: rgb(38, 50, 56); transform-origin: 137.265px 277.475px;" id="elrv9sx6iqcri" class="animable"></polygon>
                                    <path d="M146.18,212.53c.51,3-.78,8.82-4.53,6.36S145.29,207.39,146.18,212.53Z" style="fill: rgb(38, 50, 56); transform-origin: 143.441px 215.228px;" id="ellva7jijd3ri" class="animable"></path>
                                    <path d="M125,213.6c-1.44,7.32-2.66,11.53,0,16.15,4,6.94,13.83,5.88,17.44-.87,3.25-6.09,5.06-17-1.27-21.67A10.29,10.29,0,0,0,125,213.6Z" style="fill: rgb(181, 91, 82); transform-origin: 134.415px 219.855px;" id="elju1pwnci4dp" class="animable"></path>
                                    <path d="M121.48,205.53l8.29-.38.22,4.76-.49-.27s-.52,7-4.49,9.33C119.64,214.87,118.06,208.16,121.48,205.53Z" style="fill: rgb(38, 50, 56); transform-origin: 124.832px 212.06px;" id="elq3ca756eop" class="animable">
                                    </path>
                                    <path d="M120.62,218.88a7,7,0,0,0,2.35,4.85c1.87,1.63,3.89.22,4.28-2.1.35-2.09-.2-5.46-2.51-6.2A3.23,3.23,0,0,0,120.62,218.88Z" style="fill: rgb(181, 91, 82); transform-origin: 123.974px 219.867px;" id="elg8ayr11hags" class="animable"></path>
                                    <path d="M135.42,218.37c-.16.59,0,1.14.42,1.24s.82-.3,1-.89,0-1.14-.42-1.23S135.57,217.79,135.42,218.37Z" style="fill: rgb(38, 50, 56); transform-origin: 136.134px 218.551px;" id="elv0ybp77k5fl" class="animable"></path>
                                    <path d="M142.07,220.05c-.15.58,0,1.14.42,1.23s.83-.3,1-.88,0-1.14-.42-1.24S142.23,219.46,142.07,220.05Z" style="fill: rgb(38, 50, 56); transform-origin: 142.784px 220.219px;" id="elld59xdnzqok" class="animable"></path>
                                    <path d="M139.88,219.81a20.68,20.68,0,0,0,1.6,5.55,3.61,3.61,0,0,1-2.93-.23Z" style="fill: rgb(160, 39, 36); transform-origin: 140.015px 222.689px;" id="elp534sb413bb" class="animable"></path>
                                    <path d="M134.81,226.58a5.07,5.07,0,0,0,.75.25.19.19,0,0,0,.22-.13.18.18,0,0,0-.13-.22,4.72,4.72,0,0,1-3.32-2.77.19.19,0,0,0-.23-.11.17.17,0,0,0-.11.23A4.9,4.9,0,0,0,134.81,226.58Z" style="fill: rgb(38, 50, 56); transform-origin: 133.881px 225.213px;" id="el5x5qzrljqit" class="animable"></path>
                                    <path d="M133.93,215.72a.35.35,0,0,0,.35-.06,2.89,2.89,0,0,1,2.52-.59.35.35,0,0,0,.45-.23.34.34,0,0,0-.22-.44,3.54,3.54,0,0,0-3.19.71.35.35,0,0,0-.06.5A.42.42,0,0,0,133.93,215.72Z" style="fill: rgb(38, 50, 56); transform-origin: 135.486px 215.012px;" id="elpm12sl1dulk" class="animable"></path>
                                    <path d="M145.54,218.49a.37.37,0,0,0,.49-.41,3.55,3.55,0,0,0-2-2.56.37.37,0,0,0-.47.2.36.36,0,0,0,.2.46,2.74,2.74,0,0,1,1.54,2A.38.38,0,0,0,145.54,218.49Z" style="fill: rgb(38, 50, 56); transform-origin: 144.786px 217.004px;" id="eldg3hrrjaltv" class="animable"></path>
                                    <path d="M126.94,211.42a3.56,3.56,0,0,0,.51.36,3.35,3.35,0,0,0,3.2.13c2.06-1,2.71-6.88,8.57-3.89a3.43,3.43,0,0,1,3.52,1.24c1.51,1.85.47,8.6,3.69,7.67s2.66-1.93,2.66-1.93-.9.57-1.43.12a3,3,0,0,0,.87-3.37s-.78.93-1.3.75a13.65,13.65,0,0,0-.89-8.11c-1.87-4.66-13.31-3.62-13.31-3.62s-1.44-2.41-6.61-.73-7.53,7.91-6.71,10.62" style="fill: rgb(38, 50, 56); transform-origin: 134.339px 208.231px;" id="eleqsirwoss6b" class="animable"></path>
                                </g>
                                <polygon points="195.2 277.74 194.46 274.95 164.13 274.95 150.17 276.34 149.64 277.74 195.2 277.74" style="fill: rgb(38, 50, 56); transform-origin: 172.42px 276.345px;" id="el29p3g6vy2uh" class="animable">
                                </polygon>
                                <g id="elxy5gk7ezme">
                                    <polygon points="195.2 277.74 194.46 274.95 164.13 274.95 150.17 276.34 149.64 277.74 195.2 277.74" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 172.42px 276.345px;" class="animable"></polygon>
                                </g>
                                <g id="elek4gfjslzn6">
                                    <polygon points="164.13 274.95 164.13 277.74 195.2 277.74 194.46 274.95 164.13 274.95" style="isolation: isolate; opacity: 0.2; transform-origin: 179.665px 276.345px;" class="animable">
                                    </polygon>
                                </g>
                                <path d="M174.39,261.59a2.39,2.39,0,0,0,2.41,2.67h46.46a3,3,0,0,0,2.91-2.67l2.76-29.74a2.69,2.69,0,0,0-.06-.86,2.37,2.37,0,0,0-2.35-1.81H180.06a3,3,0,0,0-2.91,2.67Z" style="fill: rgb(38, 50, 56); transform-origin: 201.657px 246.72px;" id="el4q8w74ud4v2" class="animable">
                                </path>
                                <g id="el0r2qtwt1p3un">
                                    <path d="M174.39,261.59a2.39,2.39,0,0,0,2.41,2.67h46.46a3,3,0,0,0,2.91-2.67l2.76-29.74a2.69,2.69,0,0,0-.06-.86,2.37,2.37,0,0,0-2.35-1.81H180.06a3,3,0,0,0-2.91,2.67Z" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 201.657px 246.72px;" class="animable"></path>
                                </g>
                                <g id="elp2pv8w67r7">
                                    <path d="M177,264.26h46.29a3,3,0,0,0,2.91-2.67l2.76-29.74a2.69,2.69,0,0,0-.06-.86h-46.3a3,3,0,0,0-2.9,2.67l-2.76,29.74A2.43,2.43,0,0,0,177,264.26Z" style="isolation: isolate; opacity: 0.1; transform-origin: 202.948px 247.625px;" class="animable">
                                    </path>
                                </g>
                                <polygon points="208.88 246.02 199.27 246.02 201.83 273.54 186.64 275.82 186.64 277.74 218.65 277.74 218.65 275.82 212.09 273.54 208.88 246.02" style="fill: rgb(38, 50, 56); transform-origin: 202.645px 261.88px;" id="el8ywxiqkl3hw" class="animable">
                                </polygon>
                                <g id="el6lh8nnx0cx6">
                                    <polygon points="208.88 246.02 199.27 246.02 201.83 273.54 186.64 275.82 186.64 277.74 218.65 277.74 218.65 275.82 212.09 273.54 208.88 246.02" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 202.645px 261.88px;" class="animable"></polygon>
                                </g>
                                <g id="elbapg59fx0ce">
                                    <polygon points="199.27 246.02 206.39 277.3 212.09 277.13 208.88 246.02 199.27 246.02" style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.2; transform-origin: 205.68px 261.66px;" class="animable"></polygon>
                                </g>
                                <path d="M119.94,417.12h58.2a1.14,1.14,0,0,0,1.14-1.15v-3.71a1.14,1.14,0,0,0-1.14-1.14h-55.2V292.3H177.2a2.08,2.08,0,0,0,2.08-2.08V286.3H119.94a3,3,0,0,0-3,3V414.12A3,3,0,0,0,119.94,417.12Z" style="fill: rgb(38, 50, 56); transform-origin: 148.11px 351.71px;" id="el51cm5ougaq6" class="animable">
                                </path>
                                <g id="elsf2tlvm2dc">
                                    <g style="isolation: isolate; opacity: 0.4; transform-origin: 148.11px 351.71px;" class="animable">
                                        <path d="M119.94,417.12h58.2a1.14,1.14,0,0,0,1.14-1.15v-3.71a1.14,1.14,0,0,0-1.14-1.14h-55.2V292.3H177.2a2.08,2.08,0,0,0,2.08-2.08V286.3H119.94a3,3,0,0,0-3,3V414.12A3,3,0,0,0,119.94,417.12Z" style="fill: rgb(255, 255, 255); transform-origin: 148.11px 351.71px;" id="elry88vbyiu2b" class="animable"></path>
                                    </g>
                                </g>
                                <g id="elre8wsbw9c2">
                                    <path d="M112.49,280.62H265.91a1.94,1.94,0,0,1,1.94,1.94v4.72a0,0,0,0,1,0,0H110.55a0,0,0,0,1,0,0v-4.73A1.94,1.94,0,0,1,112.49,280.62Z" style="fill: rgb(64, 123, 255); transform-origin: 189.2px 283.95px; transform: rotate(180deg);" class="animable"></path>
                                </g>
                                <g id="el5w37gahwu5g">
                                    <rect x="110.55" y="280.62" width="157.3" height="3.33" style="isolation: isolate; opacity: 0.2; transform-origin: 189.2px 282.285px; transform: rotate(180deg);" class="animable"></rect>
                                </g>
                                <path d="M107.25,281.49h163.9a1.88,1.88,0,0,0,1.88-1.87h0a1.88,1.88,0,0,0-1.88-1.88H107.25a1.88,1.88,0,0,0-1.88,1.88h0A1.88,1.88,0,0,0,107.25,281.49Z" style="fill: rgb(64, 123, 255); transform-origin: 189.2px 279.615px;" id="elzp7182xy74c" class="animable">
                                </path>
                            </g>
                            <defs>
                                <filter id="active" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter id="hover" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                    <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                    </feColorMatrix>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-wrapper">
                        <form action="<?= base_url(); ?>/auth/login" method="POST">
                            <div class="login-screen">
                                <div class="login-body">
                                    <a href="<?= base_url() ?>" class="login-logo">
                                        <img src="<?= base_url() ?>/assets/template/presensi-abdul/img/logo.jpg" alt="Keyrie Eleison">
                                    </a>
                                    <h6>Welcome To SMKN 3 SAMPIT,<br>Please login to your account.</h6>
                                    <div class="field-wrapper">
                                        <input type="email" name="email" value="<?= old('email'); ?>" autofocus required>
                                        <div class="field-placeholder">Email ID</div>
                                    </div>
                                    <div class="field-wrapper mb-3">
                                        <input type="password" name="password" required>
                                        <div class="field-placeholder">Password</div>
                                    </div>
                                    <div class="actions">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                <div class="login-footer">
                                    <span class="additional-link">Illustration By<a href="https://freepik.com" target="_blank" class="text-light">Freepik</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
    </div>
    <!-- *************
			************ Login container end *************
		************* -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="<?= base_url() ?>/assets/template/presensi-abdul/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/presensi-abdul/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/presensi-abdul/js/modernizr.js"></script>
    <script src="<?= base_url() ?>/assets/template/presensi-abdul/js/moment.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Main Js Required -->
    <script src="<?= base_url() ?>/assets/template/presensi-abdul/js/main.js"></script>
    <?= session()->getFlashdata('pesan'); ?>

</body>

</html>