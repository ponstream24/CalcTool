<?php

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電卓</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="./img/logo.jpg" alt="" width="110px">
        </div>
        <div class="title">Calc Tool</div>
    </header>
    <main>
        <nav>
            <div class="box">
                <div class="box_title">
                    電卓の種類
                </div>
                <div class="content_title">
                    <button onclick="change('type1')">進数変換</button>
                </div>
                <div class="content_title">
                    <button onclick="change('type2')">通常電卓</button>
                </div>
                <div class="content_title">
                    <button onclick="change('type3')">ユーグリッド</button>
                </div>
                <div class="content_title">
                    <button onclick="change('type4')">一次不定方程式</button>
                </div>
                <div class="content_title">
                    <button onclick="change('type5')">素因数分解</button>
                </div>
                <div class="content_title">
                    <button onclick="change('type6')">暗号化/復号化</button>
                </div>
                <div class="content_title">
                    <button onclick="change('type7')">電子署名</button>
                </div>
            </div>
        </nav>
        <div class="core">
            <div class="box" id="type1">
                <div class="content_title">
                    進数変換
                </div>
                <div class="content_box">
                    <div class="content">
                        <div class="sub">変換前の進数</div>
                        <input type="number" name="type-1-before_key" id="type-1-before_key" placeholder="2" step="1" incremental>
                    </div>
                    <div class="content value">
                        <div class="sub">変換前の値</div>
                        <input type="text" name="type-1-before_value" id="type-1-before_value" placeholder="110" incremental>
                    </div>
                    <div class="content">
                        <div class="sub">変換後の進数</div>
                        <input type="number" name="type-1-after_key" id="type-1-after_key" placeholder="10" step="1" incremental>
                    </div>
                    <div class="content arow">
                        <button onclick="type1Run()">↓</button>
                    </div>
                    <div class="content value">
                        <div class="sub">変換後の値</div>
                        <input type="text" name="type-1-after_value" id="type-1-after_value" readonly placeholder="6" incremental>
                    </div>
                </div>
            </div>
            <div class="box hide" id="type2">
                <div class="content_title">
                    通常計算
                </div>
                <div class="content_box">
                    <p>絶対値計算や、冪乗も使用可能</p>
                    <table>
                        <thead>
                            <tr>
                                <th>名前</th>
                                <th>一般的な書き方</th>
                                <th>ここでの書き方</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>絶対値</td>
                                <td>|-1|</td>
                                <td>|-1|</td>
                            </tr>
                            <tr>
                                <td>べき乗</td>
                                <td>2<span class="smail up">2</span></td>
                                <td>2^2</td>
                            </tr>
                            <tr>
                                <td>log</td>
                                <td>log4</td>
                                <td>log(4)</td>
                            </tr>
                            <tr>
                                <td>log</td>
                                <td>log<span class="smail bottom">2</span>4</td>
                                <td>log(2,4)</td>
                            </tr>
                            <tr>
                                <td>あまり</td>
                                <td>4÷3のあまり( = 1 )</td>
                                <td>4%3</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="content">
                        <div class="sub">進数</div>
                        <input type="number" name="type-2-before_key" id="type-2-before_key" placeholder="2" step="1" incremental value="10">
                    </div>
                    <div class="content value">
                        <div class="sub">計算式</div>
                        <input type="text" name="type-2-before_value" id="type-2-before_value" placeholder="10+10^20" incremental>
                    </div>
                    <div class="content arow">
                        <button onclick="type2Run()">↓</button>
                    </div>
                    <div class="content value">
                        <div class="sub">計算後の値</div>
                        <input type="text" name="type-2-after_value" id="type-2-after_value" readonly placeholder="6" incremental>
                    </div>
                </div>
            </div>
            <div class="box hide" id="type3">
                <div class="content_title">
                    ユーグリッド
                </div>
                <div class="content_box">
                    <div class="content value">
                        <div class="sub">a</div>
                        <input type="number" name="type-3-before_a" id="type-3-before_a" placeholder="1234" step="1" incremental>
                    </div>
                    <div class="content value">
                        <div class="sub">b</div>
                        <input type="number" name="type-3-before_b" id="type-3-before_b" placeholder="13" incremental>
                    </div>
                    <div class="content arow">
                        <button onclick="type3Run()">↓</button>
                    </div>
                    <div class="content value">
                        <div class="sub">計算後の値</div>
                        <textarea name="type-3-after_value" id="type-3-after_value" readonly placeholder="-" incremental readonly></textarea>
                    </div>
                </div>
            </div>

            <div class="box hide" id="type4">
                <div class="content_title">
                    一次不定方程式
                </div>
                <div class="content_box">
                    <div class="content">
                        <div class="sub">式</div>
                        <div style="display: flex;">
                            <input type="number" name="type-4-before_a" id="type-4-before_a" placeholder="2" step="1" incremental>
                            <p>x + </p>
                            <input type="number" name="type-4-before_b" id="type-4-before_b" placeholder="2" step="1" incremental>
                            <p>y = 1</p>
                        </div>
                    </div>
                    <div class="content arow">
                        <button onclick="type4Run()">↓</button>
                    </div>
                    <div class="content value">
                        <div class="sub">計算後の値</div>
                        <textarea name="type-4-after_value" id="type-4-after_value" readonly placeholder="-" incremental readonly></textarea>
                    </div>
                </div>
            </div>

            <div class="box hide" id="type5">
                <div class="content_title">
                    素因数分解
                </div>
                <div class="content_box">
                    <div class="content value">
                        <div class="sub">値</div>
                        <input type="number" name="type-5-before_value" id="type-5-before_value" placeholder="1234" step="1" incremental>
                    </div>
                    <div class="content arow">
                        <button onclick="type5Run()">↓</button>
                    </div>
                    <div class="content value">
                        <div class="sub">計算後の値</div>
                        <textarea name="type-5-after_value" id="type-5-after_value" readonly placeholder="-" incremental readonly></textarea>
                    </div>
                </div>
            </div>
            <div class="box hide" id="type5">
                <div class="content_title">
                    暗号化/復号化
                </div>
                <div class="content_box">
                    <div class="content value">
                        <div class="sub">暗号前</div>
                        <input type="text" name="type-1-before_value" id="type-1-before_value" placeholder="110" incremental>
                    </div>
                    <div class="content">
                        <div class="sub">進数</div>
                        <input type="number" name="type-1-number" id="type-1-number" placeholder="10" step="1" incremental>
                    </div>
                    <div class="content">
                        <div class="sub">n</div>
                        <input type="number" name="type-1-number" id="type-1-number" placeholder="10" step="1" incremental>
                    </div>
                    <div class="content">
                        <div class="sub">e</div>
                        <input type="number" name="type-1-number" id="type-1-number" placeholder="10" step="1" incremental>
                    </div>
                    <div class="content arow">
                        <button onclick="type5Run()">↓</button>
                    </div>
                    <div class="content value">
                        <div class="sub">変換後の値</div>
                        <input type="text" name="type-1-after_value" id="type-1-after_value" readonly placeholder="6" incremental>
                    </div>
                </div>
            </div>

            <div class="box hide" id="type6">
                <div class="content_title">
                    6
                </div>
                <div class="content_box">
                </div>
            </div>

            <div class="box hide" id="type7">
                <div class="content_title">
                    7
                </div>
                <div class="content_box">
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

<script src="./js/math.js"></script>
<script src="./js/index.js"></script>

</html>