<?php

    // 
    function html_sidebar($member = "Guest"){

        //書き込む
        echo <<<HTML

            <!-- Boxicons CSS -->
            <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

            <div class="sidebar">
                <div class="logo-details">
                    <img src="https://itsystem-lab.com/i-lab_contents/icon_bg_white.png" alt="Calc Tool">
                    <span class="logo_name">Calc Tool</span>
                </div>
                <ul class="nav-links">
                    <li>
                        <a onclick="change('type1')">
                            <i class='bx bx-tachometer' ></i>
                            <span class="link_name">進数変換</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li>
                                <a class="link_name" onclick="change('type1')">進数変換</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="change('type2')">
                            <i class='bx bx-tachometer' ></i>
                            <span class="link_name">通常電卓</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li>
                                <a class="link_name" onclick="change('type2')">通常電卓</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="change('type3')">
                            <i class='bx bx-tachometer' ></i>
                            <span class="link_name">ユーグリッド</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li>
                                <a class="link_name" onclick="change('type3')">ユーグリッド</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="change('type4')">
                            <i class='bx bx-tachometer' ></i>
                            <span class="link_name">一次不定方程式</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li>
                                <a class="link_name" onclick="change('type4')">一次不定方程式</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="change('type5')">
                            <i class='bx bx-tachometer' ></i>
                            <span class="link_name">素因数分解</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li>
                                <a class="link_name" onclick="change('type5')">素因数分解</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="change('type6')">
                            <i class='bx bx-tachometer' ></i>
                            <span class="link_name">暗号化</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li>
                                <a class="link_name" onclick="change('type6')">暗号化</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="change('type7')">
                            <i class='bx bx-tachometer' ></i>
                            <span class="link_name">復号化</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li>
                                <a class="link_name" onclick="change('type7')">復号化</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        HTML;
    };

?>