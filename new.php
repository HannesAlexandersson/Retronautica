<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .poster {
            display: flex;
            padding: 10px;
            border-image-slice: 10 10 10 10;
            border-image-width: 20px 20px 20px 20px;
            border-image-outset: 0px 0px 0px 0px;
            border-image-repeat: stretch stretch;
            border-image-source: url("assets/new frames/poster-frame1.svg");
            border-style: solid;
            height: 312px;
            width: 214px;
        }

        img {
            object-fit: cover;
            overflow: hidden;
            border: 1px solid var(--secondary-color);
        }
    </style>
</head>

<body>
    <div class="current">
        <div class="headline">Nu på Retronautica</div>
        <div class="wrapper">
            <div class="poster">
                <img src="assets/posters/bigAlien.jpeg">
                <div class="button">
                    <svg width="161" height="55" viewBox="0 0 161 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.04754" y="1.00279" width="158.645" height="52.5474" rx="19.0531" fill="#0B0D0B" />
                        <rect x="1.04754" y="1.00279" width="158.645" height="52.5474" rx="19.0531" stroke="#04FCCF" stroke-width="2.00559" />
                        <path d="M45.9625 30.4687V18.9487H54.7945C55.1998 18.9487 55.5678 19.05 55.8985 19.2527C56.2398 19.4554 56.5118 19.7274 56.7145 20.0687C56.9172 20.3994 57.0185 20.7674 57.0185 21.1727V23.4287C57.0185 23.5674 57.0078 23.7007 56.9865 23.8287C56.9652 23.9567 56.9278 24.0794 56.8745 24.1967C57.0558 24.442 57.1998 24.698 57.3065 24.9647C57.4238 25.2314 57.4825 25.498 57.4825 25.7647V28.2447C57.4825 28.65 57.3812 29.0234 57.1785 29.3647C56.9758 29.6954 56.7038 29.962 56.3625 30.1647C56.0212 30.3674 55.6478 30.4687 55.2425 30.4687H45.9625ZM48.2665 28.3407H55.1465C55.1998 28.3407 55.2478 28.3247 55.2905 28.2927C55.3332 28.25 55.3545 28.202 55.3545 28.1487V25.8607C55.3545 25.8074 55.3332 25.7647 55.2905 25.7327C55.2478 25.69 55.1998 25.6687 55.1465 25.6687H48.2665C48.2132 25.6687 48.1652 25.69 48.1225 25.7327C48.0905 25.7647 48.0745 25.8074 48.0745 25.8607V28.1487C48.0745 28.202 48.0905 28.25 48.1225 28.2927C48.1652 28.3247 48.2132 28.3407 48.2665 28.3407ZM48.2665 23.5407H54.6985C54.7518 23.5407 54.7945 23.5247 54.8265 23.4927C54.8585 23.45 54.8745 23.402 54.8745 23.3487V21.2687C54.8745 21.2154 54.8585 21.1727 54.8265 21.1407C54.7945 21.098 54.7518 21.0767 54.6985 21.0767H48.2665C48.2132 21.0767 48.1652 21.098 48.1225 21.1407C48.0905 21.1727 48.0745 21.2154 48.0745 21.2687V23.3487C48.0745 23.402 48.0905 23.45 48.1225 23.4927C48.1652 23.5247 48.2132 23.5407 48.2665 23.5407ZM59.163 30.4687V21.1887H61.259V30.4687H59.163ZM59.163 20.2607V18.1487H61.259V20.2607H59.163ZM65.246 30.4687C64.8407 30.4687 64.4727 30.3674 64.142 30.1647C63.8113 29.962 63.5447 29.6954 63.342 29.3647C63.1393 29.034 63.038 28.666 63.038 28.2607V18.1327H65.15V28.1807C65.15 28.234 65.166 28.282 65.198 28.3247C65.2407 28.3567 65.2887 28.3727 65.342 28.3727H67.118V30.4687H65.246ZM64.4327 33.9727V31.8607H68.3527C68.4061 31.8607 68.4487 31.8394 68.4807 31.7967C68.5234 31.7647 68.5447 31.722 68.5447 31.6687V21.1887H70.6407V31.7647C70.6407 32.17 70.5394 32.538 70.3367 32.8687C70.1447 33.21 69.8781 33.4767 69.5367 33.6687C69.2061 33.8714 68.8381 33.9727 68.4327 33.9727H64.4327ZM68.5447 20.2607V18.1487H70.6407V20.2607H68.5447ZM74.1831 30.4687C73.7778 30.4687 73.4098 30.3674 73.0791 30.1647C72.7485 29.962 72.4818 29.6954 72.2791 29.3647C72.0765 29.034 71.9751 28.666 71.9751 28.2607V23.3967C71.9751 22.9914 72.0765 22.6234 72.2791 22.2927C72.4818 21.962 72.7485 21.6954 73.0791 21.4927C73.4098 21.29 73.7778 21.1887 74.1831 21.1887H79.1911C79.5965 21.1887 79.9645 21.29 80.2951 21.4927C80.6365 21.6954 80.9031 21.962 81.0951 22.2927C81.2978 22.6234 81.3991 22.9914 81.3991 23.3967V26.8847H74.0711V28.1807C74.0711 28.234 74.0871 28.282 74.1191 28.3247C74.1618 28.3567 74.2098 28.3727 74.2631 28.3727H81.3991V30.4687H74.1831ZM74.0711 24.9967H79.3031V23.4767C79.3031 23.4234 79.2818 23.3807 79.2391 23.3487C79.2071 23.306 79.1645 23.2847 79.1111 23.2847H74.2631C74.2098 23.2847 74.1618 23.306 74.1191 23.3487C74.0871 23.3807 74.0711 23.4234 74.0711 23.4767V24.9967ZM85.2932 30.4687C84.8879 30.4687 84.5199 30.3674 84.1892 30.1647C83.8586 29.962 83.5919 29.6954 83.3892 29.3647C83.1866 29.034 83.0852 28.666 83.0852 28.2607V18.3407H85.1812V21.1887H88.7972V23.2847H85.1812V28.1807C85.1812 28.234 85.1972 28.282 85.2292 28.3247C85.2719 28.3567 85.3199 28.3727 85.3732 28.3727H88.7972V30.4687H85.2932ZM92.4182 30.4687C92.0129 30.4687 91.6449 30.3674 91.3142 30.1647C90.9836 29.962 90.7169 29.6954 90.5142 29.3647C90.3116 29.034 90.2102 28.666 90.2102 28.2607V18.3407H92.3062V21.1887H95.9222V23.2847H92.3062V28.1807C92.3062 28.234 92.3222 28.282 92.3542 28.3247C92.3969 28.3567 92.4449 28.3727 92.4982 28.3727H95.9222V30.4687H92.4182ZM99.4019 30.4687C98.9965 30.4687 98.6285 30.3674 98.2979 30.1647C97.9672 29.962 97.7005 29.6954 97.4979 29.3647C97.2952 29.034 97.1939 28.666 97.1939 28.2607V23.3967C97.1939 22.9914 97.2952 22.6234 97.4979 22.2927C97.7005 21.962 97.9672 21.6954 98.2979 21.4927C98.6285 21.29 98.9965 21.1887 99.4019 21.1887H104.41C104.815 21.1887 105.183 21.29 105.514 21.4927C105.855 21.6954 106.122 21.962 106.314 22.2927C106.517 22.6234 106.618 22.9914 106.618 23.3967V26.8847H99.2899V28.1807C99.2899 28.234 99.3059 28.282 99.3379 28.3247C99.3805 28.3567 99.4285 28.3727 99.4819 28.3727H106.618V30.4687H99.4019ZM99.2899 24.9967H104.522V23.4767C104.522 23.4234 104.501 23.3807 104.458 23.3487C104.426 23.306 104.383 23.2847 104.33 23.2847H99.4819C99.4285 23.2847 99.3805 23.306 99.3379 23.3487C99.3059 23.3807 99.2899 23.4234 99.2899 23.4767V24.9967ZM108.194 30.4687V23.3967C108.194 22.9914 108.296 22.6234 108.498 22.2927C108.701 21.962 108.968 21.6954 109.298 21.4927C109.64 21.29 110.008 21.1887 110.402 21.1887H115.554V23.2847H110.482C110.429 23.2847 110.381 23.306 110.338 23.3487C110.306 23.3807 110.29 23.4234 110.29 23.4767V30.4687H108.194Z" fill="#04FCCF" />
                    </svg>
                </div>
            </div>
            <div class="poster">
                <img src="assets/posters/bigDune.jpg">
                <div class="button">
                    <svg width="161" height="55" viewBox="0 0 161 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.04754" y="1.00279" width="158.645" height="52.5474" rx="19.0531" fill="#0B0D0B" />
                        <rect x="1.04754" y="1.00279" width="158.645" height="52.5474" rx="19.0531" stroke="#04FCCF" stroke-width="2.00559" />
                        <path d="M45.9625 30.4687V18.9487H54.7945C55.1998 18.9487 55.5678 19.05 55.8985 19.2527C56.2398 19.4554 56.5118 19.7274 56.7145 20.0687C56.9172 20.3994 57.0185 20.7674 57.0185 21.1727V23.4287C57.0185 23.5674 57.0078 23.7007 56.9865 23.8287C56.9652 23.9567 56.9278 24.0794 56.8745 24.1967C57.0558 24.442 57.1998 24.698 57.3065 24.9647C57.4238 25.2314 57.4825 25.498 57.4825 25.7647V28.2447C57.4825 28.65 57.3812 29.0234 57.1785 29.3647C56.9758 29.6954 56.7038 29.962 56.3625 30.1647C56.0212 30.3674 55.6478 30.4687 55.2425 30.4687H45.9625ZM48.2665 28.3407H55.1465C55.1998 28.3407 55.2478 28.3247 55.2905 28.2927C55.3332 28.25 55.3545 28.202 55.3545 28.1487V25.8607C55.3545 25.8074 55.3332 25.7647 55.2905 25.7327C55.2478 25.69 55.1998 25.6687 55.1465 25.6687H48.2665C48.2132 25.6687 48.1652 25.69 48.1225 25.7327C48.0905 25.7647 48.0745 25.8074 48.0745 25.8607V28.1487C48.0745 28.202 48.0905 28.25 48.1225 28.2927C48.1652 28.3247 48.2132 28.3407 48.2665 28.3407ZM48.2665 23.5407H54.6985C54.7518 23.5407 54.7945 23.5247 54.8265 23.4927C54.8585 23.45 54.8745 23.402 54.8745 23.3487V21.2687C54.8745 21.2154 54.8585 21.1727 54.8265 21.1407C54.7945 21.098 54.7518 21.0767 54.6985 21.0767H48.2665C48.2132 21.0767 48.1652 21.098 48.1225 21.1407C48.0905 21.1727 48.0745 21.2154 48.0745 21.2687V23.3487C48.0745 23.402 48.0905 23.45 48.1225 23.4927C48.1652 23.5247 48.2132 23.5407 48.2665 23.5407ZM59.163 30.4687V21.1887H61.259V30.4687H59.163ZM59.163 20.2607V18.1487H61.259V20.2607H59.163ZM65.246 30.4687C64.8407 30.4687 64.4727 30.3674 64.142 30.1647C63.8113 29.962 63.5447 29.6954 63.342 29.3647C63.1393 29.034 63.038 28.666 63.038 28.2607V18.1327H65.15V28.1807C65.15 28.234 65.166 28.282 65.198 28.3247C65.2407 28.3567 65.2887 28.3727 65.342 28.3727H67.118V30.4687H65.246ZM64.4327 33.9727V31.8607H68.3527C68.4061 31.8607 68.4487 31.8394 68.4807 31.7967C68.5234 31.7647 68.5447 31.722 68.5447 31.6687V21.1887H70.6407V31.7647C70.6407 32.17 70.5394 32.538 70.3367 32.8687C70.1447 33.21 69.8781 33.4767 69.5367 33.6687C69.2061 33.8714 68.8381 33.9727 68.4327 33.9727H64.4327ZM68.5447 20.2607V18.1487H70.6407V20.2607H68.5447ZM74.1831 30.4687C73.7778 30.4687 73.4098 30.3674 73.0791 30.1647C72.7485 29.962 72.4818 29.6954 72.2791 29.3647C72.0765 29.034 71.9751 28.666 71.9751 28.2607V23.3967C71.9751 22.9914 72.0765 22.6234 72.2791 22.2927C72.4818 21.962 72.7485 21.6954 73.0791 21.4927C73.4098 21.29 73.7778 21.1887 74.1831 21.1887H79.1911C79.5965 21.1887 79.9645 21.29 80.2951 21.4927C80.6365 21.6954 80.9031 21.962 81.0951 22.2927C81.2978 22.6234 81.3991 22.9914 81.3991 23.3967V26.8847H74.0711V28.1807C74.0711 28.234 74.0871 28.282 74.1191 28.3247C74.1618 28.3567 74.2098 28.3727 74.2631 28.3727H81.3991V30.4687H74.1831ZM74.0711 24.9967H79.3031V23.4767C79.3031 23.4234 79.2818 23.3807 79.2391 23.3487C79.2071 23.306 79.1645 23.2847 79.1111 23.2847H74.2631C74.2098 23.2847 74.1618 23.306 74.1191 23.3487C74.0871 23.3807 74.0711 23.4234 74.0711 23.4767V24.9967ZM85.2932 30.4687C84.8879 30.4687 84.5199 30.3674 84.1892 30.1647C83.8586 29.962 83.5919 29.6954 83.3892 29.3647C83.1866 29.034 83.0852 28.666 83.0852 28.2607V18.3407H85.1812V21.1887H88.7972V23.2847H85.1812V28.1807C85.1812 28.234 85.1972 28.282 85.2292 28.3247C85.2719 28.3567 85.3199 28.3727 85.3732 28.3727H88.7972V30.4687H85.2932ZM92.4182 30.4687C92.0129 30.4687 91.6449 30.3674 91.3142 30.1647C90.9836 29.962 90.7169 29.6954 90.5142 29.3647C90.3116 29.034 90.2102 28.666 90.2102 28.2607V18.3407H92.3062V21.1887H95.9222V23.2847H92.3062V28.1807C92.3062 28.234 92.3222 28.282 92.3542 28.3247C92.3969 28.3567 92.4449 28.3727 92.4982 28.3727H95.9222V30.4687H92.4182ZM99.4019 30.4687C98.9965 30.4687 98.6285 30.3674 98.2979 30.1647C97.9672 29.962 97.7005 29.6954 97.4979 29.3647C97.2952 29.034 97.1939 28.666 97.1939 28.2607V23.3967C97.1939 22.9914 97.2952 22.6234 97.4979 22.2927C97.7005 21.962 97.9672 21.6954 98.2979 21.4927C98.6285 21.29 98.9965 21.1887 99.4019 21.1887H104.41C104.815 21.1887 105.183 21.29 105.514 21.4927C105.855 21.6954 106.122 21.962 106.314 22.2927C106.517 22.6234 106.618 22.9914 106.618 23.3967V26.8847H99.2899V28.1807C99.2899 28.234 99.3059 28.282 99.3379 28.3247C99.3805 28.3567 99.4285 28.3727 99.4819 28.3727H106.618V30.4687H99.4019ZM99.2899 24.9967H104.522V23.4767C104.522 23.4234 104.501 23.3807 104.458 23.3487C104.426 23.306 104.383 23.2847 104.33 23.2847H99.4819C99.4285 23.2847 99.3805 23.306 99.3379 23.3487C99.3059 23.3807 99.2899 23.4234 99.2899 23.4767V24.9967ZM108.194 30.4687V23.3967C108.194 22.9914 108.296 22.6234 108.498 22.2927C108.701 21.962 108.968 21.6954 109.298 21.4927C109.64 21.29 110.008 21.1887 110.402 21.1887H115.554V23.2847H110.482C110.429 23.2847 110.381 23.306 110.338 23.3487C110.306 23.3807 110.29 23.4234 110.29 23.4767V30.4687H108.194Z" fill="#04FCCF" />
                    </svg>
                </div>
            </div>
            <div class="poster">
                <img src="assets/posters/bigWrathOfKhan.jpg">
                <div class="button">
                    <svg width="161" height="55" viewBox="0 0 161 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.04754" y="1.00279" width="158.645" height="52.5474" rx="19.0531" fill="#0B0D0B" />
                        <rect x="1.04754" y="1.00279" width="158.645" height="52.5474" rx="19.0531" stroke="#04FCCF" stroke-width="2.00559" />
                        <path d="M45.9625 30.4687V18.9487H54.7945C55.1998 18.9487 55.5678 19.05 55.8985 19.2527C56.2398 19.4554 56.5118 19.7274 56.7145 20.0687C56.9172 20.3994 57.0185 20.7674 57.0185 21.1727V23.4287C57.0185 23.5674 57.0078 23.7007 56.9865 23.8287C56.9652 23.9567 56.9278 24.0794 56.8745 24.1967C57.0558 24.442 57.1998 24.698 57.3065 24.9647C57.4238 25.2314 57.4825 25.498 57.4825 25.7647V28.2447C57.4825 28.65 57.3812 29.0234 57.1785 29.3647C56.9758 29.6954 56.7038 29.962 56.3625 30.1647C56.0212 30.3674 55.6478 30.4687 55.2425 30.4687H45.9625ZM48.2665 28.3407H55.1465C55.1998 28.3407 55.2478 28.3247 55.2905 28.2927C55.3332 28.25 55.3545 28.202 55.3545 28.1487V25.8607C55.3545 25.8074 55.3332 25.7647 55.2905 25.7327C55.2478 25.69 55.1998 25.6687 55.1465 25.6687H48.2665C48.2132 25.6687 48.1652 25.69 48.1225 25.7327C48.0905 25.7647 48.0745 25.8074 48.0745 25.8607V28.1487C48.0745 28.202 48.0905 28.25 48.1225 28.2927C48.1652 28.3247 48.2132 28.3407 48.2665 28.3407ZM48.2665 23.5407H54.6985C54.7518 23.5407 54.7945 23.5247 54.8265 23.4927C54.8585 23.45 54.8745 23.402 54.8745 23.3487V21.2687C54.8745 21.2154 54.8585 21.1727 54.8265 21.1407C54.7945 21.098 54.7518 21.0767 54.6985 21.0767H48.2665C48.2132 21.0767 48.1652 21.098 48.1225 21.1407C48.0905 21.1727 48.0745 21.2154 48.0745 21.2687V23.3487C48.0745 23.402 48.0905 23.45 48.1225 23.4927C48.1652 23.5247 48.2132 23.5407 48.2665 23.5407ZM59.163 30.4687V21.1887H61.259V30.4687H59.163ZM59.163 20.2607V18.1487H61.259V20.2607H59.163ZM65.246 30.4687C64.8407 30.4687 64.4727 30.3674 64.142 30.1647C63.8113 29.962 63.5447 29.6954 63.342 29.3647C63.1393 29.034 63.038 28.666 63.038 28.2607V18.1327H65.15V28.1807C65.15 28.234 65.166 28.282 65.198 28.3247C65.2407 28.3567 65.2887 28.3727 65.342 28.3727H67.118V30.4687H65.246ZM64.4327 33.9727V31.8607H68.3527C68.4061 31.8607 68.4487 31.8394 68.4807 31.7967C68.5234 31.7647 68.5447 31.722 68.5447 31.6687V21.1887H70.6407V31.7647C70.6407 32.17 70.5394 32.538 70.3367 32.8687C70.1447 33.21 69.8781 33.4767 69.5367 33.6687C69.2061 33.8714 68.8381 33.9727 68.4327 33.9727H64.4327ZM68.5447 20.2607V18.1487H70.6407V20.2607H68.5447ZM74.1831 30.4687C73.7778 30.4687 73.4098 30.3674 73.0791 30.1647C72.7485 29.962 72.4818 29.6954 72.2791 29.3647C72.0765 29.034 71.9751 28.666 71.9751 28.2607V23.3967C71.9751 22.9914 72.0765 22.6234 72.2791 22.2927C72.4818 21.962 72.7485 21.6954 73.0791 21.4927C73.4098 21.29 73.7778 21.1887 74.1831 21.1887H79.1911C79.5965 21.1887 79.9645 21.29 80.2951 21.4927C80.6365 21.6954 80.9031 21.962 81.0951 22.2927C81.2978 22.6234 81.3991 22.9914 81.3991 23.3967V26.8847H74.0711V28.1807C74.0711 28.234 74.0871 28.282 74.1191 28.3247C74.1618 28.3567 74.2098 28.3727 74.2631 28.3727H81.3991V30.4687H74.1831ZM74.0711 24.9967H79.3031V23.4767C79.3031 23.4234 79.2818 23.3807 79.2391 23.3487C79.2071 23.306 79.1645 23.2847 79.1111 23.2847H74.2631C74.2098 23.2847 74.1618 23.306 74.1191 23.3487C74.0871 23.3807 74.0711 23.4234 74.0711 23.4767V24.9967ZM85.2932 30.4687C84.8879 30.4687 84.5199 30.3674 84.1892 30.1647C83.8586 29.962 83.5919 29.6954 83.3892 29.3647C83.1866 29.034 83.0852 28.666 83.0852 28.2607V18.3407H85.1812V21.1887H88.7972V23.2847H85.1812V28.1807C85.1812 28.234 85.1972 28.282 85.2292 28.3247C85.2719 28.3567 85.3199 28.3727 85.3732 28.3727H88.7972V30.4687H85.2932ZM92.4182 30.4687C92.0129 30.4687 91.6449 30.3674 91.3142 30.1647C90.9836 29.962 90.7169 29.6954 90.5142 29.3647C90.3116 29.034 90.2102 28.666 90.2102 28.2607V18.3407H92.3062V21.1887H95.9222V23.2847H92.3062V28.1807C92.3062 28.234 92.3222 28.282 92.3542 28.3247C92.3969 28.3567 92.4449 28.3727 92.4982 28.3727H95.9222V30.4687H92.4182ZM99.4019 30.4687C98.9965 30.4687 98.6285 30.3674 98.2979 30.1647C97.9672 29.962 97.7005 29.6954 97.4979 29.3647C97.2952 29.034 97.1939 28.666 97.1939 28.2607V23.3967C97.1939 22.9914 97.2952 22.6234 97.4979 22.2927C97.7005 21.962 97.9672 21.6954 98.2979 21.4927C98.6285 21.29 98.9965 21.1887 99.4019 21.1887H104.41C104.815 21.1887 105.183 21.29 105.514 21.4927C105.855 21.6954 106.122 21.962 106.314 22.2927C106.517 22.6234 106.618 22.9914 106.618 23.3967V26.8847H99.2899V28.1807C99.2899 28.234 99.3059 28.282 99.3379 28.3247C99.3805 28.3567 99.4285 28.3727 99.4819 28.3727H106.618V30.4687H99.4019ZM99.2899 24.9967H104.522V23.4767C104.522 23.4234 104.501 23.3807 104.458 23.3487C104.426 23.306 104.383 23.2847 104.33 23.2847H99.4819C99.4285 23.2847 99.3805 23.306 99.3379 23.3487C99.3059 23.3807 99.2899 23.4234 99.2899 23.4767V24.9967ZM108.194 30.4687V23.3967C108.194 22.9914 108.296 22.6234 108.498 22.2927C108.701 21.962 108.968 21.6954 109.298 21.4927C109.64 21.29 110.008 21.1887 110.402 21.1887H115.554V23.2847H110.482C110.429 23.2847 110.381 23.306 110.338 23.3487C110.306 23.3807 110.29 23.4234 110.29 23.4767V30.4687H108.194Z" fill="#04FCCF" />
                    </svg>
                </div>
            </div>
            <div class="poster">
                <img src="assets/posters/bigESB.jpeg">
                <div class="button">
                    <svg width="161" height="55" viewBox="0 0 161 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.04754" y="1.00279" width="158.645" height="52.5474" rx="19.0531" fill="#0B0D0B" />
                        <rect x="1.04754" y="1.00279" width="158.645" height="52.5474" rx="19.0531" stroke="#04FCCF" stroke-width="2.00559" />
                        <path d="M45.9625 30.4687V18.9487H54.7945C55.1998 18.9487 55.5678 19.05 55.8985 19.2527C56.2398 19.4554 56.5118 19.7274 56.7145 20.0687C56.9172 20.3994 57.0185 20.7674 57.0185 21.1727V23.4287C57.0185 23.5674 57.0078 23.7007 56.9865 23.8287C56.9652 23.9567 56.9278 24.0794 56.8745 24.1967C57.0558 24.442 57.1998 24.698 57.3065 24.9647C57.4238 25.2314 57.4825 25.498 57.4825 25.7647V28.2447C57.4825 28.65 57.3812 29.0234 57.1785 29.3647C56.9758 29.6954 56.7038 29.962 56.3625 30.1647C56.0212 30.3674 55.6478 30.4687 55.2425 30.4687H45.9625ZM48.2665 28.3407H55.1465C55.1998 28.3407 55.2478 28.3247 55.2905 28.2927C55.3332 28.25 55.3545 28.202 55.3545 28.1487V25.8607C55.3545 25.8074 55.3332 25.7647 55.2905 25.7327C55.2478 25.69 55.1998 25.6687 55.1465 25.6687H48.2665C48.2132 25.6687 48.1652 25.69 48.1225 25.7327C48.0905 25.7647 48.0745 25.8074 48.0745 25.8607V28.1487C48.0745 28.202 48.0905 28.25 48.1225 28.2927C48.1652 28.3247 48.2132 28.3407 48.2665 28.3407ZM48.2665 23.5407H54.6985C54.7518 23.5407 54.7945 23.5247 54.8265 23.4927C54.8585 23.45 54.8745 23.402 54.8745 23.3487V21.2687C54.8745 21.2154 54.8585 21.1727 54.8265 21.1407C54.7945 21.098 54.7518 21.0767 54.6985 21.0767H48.2665C48.2132 21.0767 48.1652 21.098 48.1225 21.1407C48.0905 21.1727 48.0745 21.2154 48.0745 21.2687V23.3487C48.0745 23.402 48.0905 23.45 48.1225 23.4927C48.1652 23.5247 48.2132 23.5407 48.2665 23.5407ZM59.163 30.4687V21.1887H61.259V30.4687H59.163ZM59.163 20.2607V18.1487H61.259V20.2607H59.163ZM65.246 30.4687C64.8407 30.4687 64.4727 30.3674 64.142 30.1647C63.8113 29.962 63.5447 29.6954 63.342 29.3647C63.1393 29.034 63.038 28.666 63.038 28.2607V18.1327H65.15V28.1807C65.15 28.234 65.166 28.282 65.198 28.3247C65.2407 28.3567 65.2887 28.3727 65.342 28.3727H67.118V30.4687H65.246ZM64.4327 33.9727V31.8607H68.3527C68.4061 31.8607 68.4487 31.8394 68.4807 31.7967C68.5234 31.7647 68.5447 31.722 68.5447 31.6687V21.1887H70.6407V31.7647C70.6407 32.17 70.5394 32.538 70.3367 32.8687C70.1447 33.21 69.8781 33.4767 69.5367 33.6687C69.2061 33.8714 68.8381 33.9727 68.4327 33.9727H64.4327ZM68.5447 20.2607V18.1487H70.6407V20.2607H68.5447ZM74.1831 30.4687C73.7778 30.4687 73.4098 30.3674 73.0791 30.1647C72.7485 29.962 72.4818 29.6954 72.2791 29.3647C72.0765 29.034 71.9751 28.666 71.9751 28.2607V23.3967C71.9751 22.9914 72.0765 22.6234 72.2791 22.2927C72.4818 21.962 72.7485 21.6954 73.0791 21.4927C73.4098 21.29 73.7778 21.1887 74.1831 21.1887H79.1911C79.5965 21.1887 79.9645 21.29 80.2951 21.4927C80.6365 21.6954 80.9031 21.962 81.0951 22.2927C81.2978 22.6234 81.3991 22.9914 81.3991 23.3967V26.8847H74.0711V28.1807C74.0711 28.234 74.0871 28.282 74.1191 28.3247C74.1618 28.3567 74.2098 28.3727 74.2631 28.3727H81.3991V30.4687H74.1831ZM74.0711 24.9967H79.3031V23.4767C79.3031 23.4234 79.2818 23.3807 79.2391 23.3487C79.2071 23.306 79.1645 23.2847 79.1111 23.2847H74.2631C74.2098 23.2847 74.1618 23.306 74.1191 23.3487C74.0871 23.3807 74.0711 23.4234 74.0711 23.4767V24.9967ZM85.2932 30.4687C84.8879 30.4687 84.5199 30.3674 84.1892 30.1647C83.8586 29.962 83.5919 29.6954 83.3892 29.3647C83.1866 29.034 83.0852 28.666 83.0852 28.2607V18.3407H85.1812V21.1887H88.7972V23.2847H85.1812V28.1807C85.1812 28.234 85.1972 28.282 85.2292 28.3247C85.2719 28.3567 85.3199 28.3727 85.3732 28.3727H88.7972V30.4687H85.2932ZM92.4182 30.4687C92.0129 30.4687 91.6449 30.3674 91.3142 30.1647C90.9836 29.962 90.7169 29.6954 90.5142 29.3647C90.3116 29.034 90.2102 28.666 90.2102 28.2607V18.3407H92.3062V21.1887H95.9222V23.2847H92.3062V28.1807C92.3062 28.234 92.3222 28.282 92.3542 28.3247C92.3969 28.3567 92.4449 28.3727 92.4982 28.3727H95.9222V30.4687H92.4182ZM99.4019 30.4687C98.9965 30.4687 98.6285 30.3674 98.2979 30.1647C97.9672 29.962 97.7005 29.6954 97.4979 29.3647C97.2952 29.034 97.1939 28.666 97.1939 28.2607V23.3967C97.1939 22.9914 97.2952 22.6234 97.4979 22.2927C97.7005 21.962 97.9672 21.6954 98.2979 21.4927C98.6285 21.29 98.9965 21.1887 99.4019 21.1887H104.41C104.815 21.1887 105.183 21.29 105.514 21.4927C105.855 21.6954 106.122 21.962 106.314 22.2927C106.517 22.6234 106.618 22.9914 106.618 23.3967V26.8847H99.2899V28.1807C99.2899 28.234 99.3059 28.282 99.3379 28.3247C99.3805 28.3567 99.4285 28.3727 99.4819 28.3727H106.618V30.4687H99.4019ZM99.2899 24.9967H104.522V23.4767C104.522 23.4234 104.501 23.3807 104.458 23.3487C104.426 23.306 104.383 23.2847 104.33 23.2847H99.4819C99.4285 23.2847 99.3805 23.306 99.3379 23.3487C99.3059 23.3807 99.2899 23.4234 99.2899 23.4767V24.9967ZM108.194 30.4687V23.3967C108.194 22.9914 108.296 22.6234 108.498 22.2927C108.701 21.962 108.968 21.6954 109.298 21.4927C109.64 21.29 110.008 21.1887 110.402 21.1887H115.554V23.2847H110.482C110.429 23.2847 110.381 23.306 110.338 23.3487C110.306 23.3807 110.29 23.4234 110.29 23.4767V30.4687H108.194Z" fill="#04FCCF" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</body>

</html>