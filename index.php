<?php

require("src/sidebar.php");

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電卓</title>
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/common.css">
</head>

<body>

    <?= html_sidebar(); ?>

    <div class="home-section">
        <header class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text"><img src="./img/logo.jpg" alt="" width="110px"> Calc Tool</span>
        </header>
        <main>
            <div class="content_section">
                <div class="content_section">
                    <div class="row flex" id="type1">
                        <div class="row_box flex bg-fff col-10">
                            <div class="row_head flex-start col-12 inline">
                                <p>進数変換</p>
                            </div>
                            <div class="row_body flex col-12 inline">
                                <div class="content_list">
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
                        </div>
                    </div>
                    <div class="row flex hide" id="type2">
                        <div class="row_box flex bg-fff col-10">
                            <div class="row_head flex-start col-12 inline">
                                <p>通常計算</p>
                            </div>
                            <div class="row_body flex col-12 inline">
                                <div class="content_list">
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
                        </div>
                    </div>
                    <div class="row flex hide" id="type3">
                        <div class="row_box flex bg-fff col-10">
                            <div class="row_head flex-start col-12 inline">
                                <p>ユーグリッド</p>
                            </div>
                            <div class="row_body flex col-12 inline">
                                <div class="content_list">
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
                        </div>
                    </div>
                    <div class="row flex hide" id="type4">
                        <div class="row_box flex bg-fff col-10">
                            <div class="row_head flex-start col-12 inline">
                                <p>一次不定方程式</p>
                            </div>
                            <div class="row_body flex col-12 inline">
                                <div class="content_list">
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
                        </div>
                    </div>
                    <div class="row flex hide" id="type5">
                        <div class="row_box flex bg-fff col-10">
                            <div class="row_head flex-start col-12 inline">
                                <p>素因数分解</p>
                            </div>
                            <div class="row_body flex col-12 inline">
                                <div class="content_list">
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
                        </div>
                    </div>
                    <div class="row flex hide" id="type6">
                        <div class="row_box flex bg-fff col-10">
                            <div class="row_head flex-start col-12 inline">
                                <p>暗号化</p>
                            </div>
                            <div class="row_body flex col-12 inline">
                                <div class="content_list">
                                    <div class="content value">
                                        <div class="sub">暗号前</div>
                                        <p>文字から数字に変換してください。([,]で区切って)</p>
                                        <input type="text" name="type-6-before_value" id="type-6-before_value" placeholder="3,14,6" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">進数(全文字数)</div>
                                        <input type="number" name="type-6-number" id="type-6-number" placeholder="26" step="1" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">n</div>
                                        <input type="number" name="type-6-n" id="type-6-n" placeholder="89711" step="1" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">e</div>
                                        <input type="number" name="type-6-e" id="type-6-e" placeholder="3251" step="1" incremental>
                                    </div>
                                    <div class="content arow">
                                        <button onclick="type6Run()">↓</button>
                                    </div>
                                    <div class="content value">
                                        <div class="sub">変換後の値</div>
                                        <textarea name="type-6-after_value" id="type-6-after_value" readonly placeholder="-" incremental readonly></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flex hide" id="type7">
                        <div class="row_box flex bg-fff col-10">
                            <div class="row_head flex-start col-12 inline">
                                <p>復号化</p>
                            </div>
                            <div class="row_body flex col-12 inline">
                                <div class="content_list">
                                    <div class="content value">
                                        <div class="sub">復号前</div>
                                        <p>nから入力すると楽です！！！！</p>
                                        <p>文字から数字に変換してください。([,]で区切って)</p>
                                        <input type="text" name="type-7-before_value" id="type-7-before_value" placeholder="1,3,8,2" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">p</div>
                                        <input type="number" name="type-7-p" id="type-7-p" placeholder="283" step="1" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">q</div>
                                        <input type="number" name="type-7-q" id="type-7-q" placeholder="317" step="1" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">n</div>
                                        <input type="number" name="type-7-n" id="type-7-n" placeholder="89711" step="1" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">L</div>
                                        <input type="number" name="type-7-L" id="type-7-L" placeholder="44556" step="1" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">e</div>
                                        <input type="number" name="type-7-e" id="type-7-e" placeholder="65537" step="1" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">d(復号化鍵)</div>
                                        <input type="number" name="type-7-d" id="type-7-d" placeholder="11285" step="1" incremental>
                                    </div>
                                    <div class="content">
                                        <div class="sub">進数(全文字数)</div>
                                        <input type="number" name="type-7-number" id="type-7-number" placeholder="26" step="1" incremental>
                                    </div>
                                    <div class="content arow">
                                        <button onclick="type7Run()">↓</button>
                                    </div>
                                    <div class="content value">
                                        <div class="sub">変換後の値</div>
                                        <textarea name="type-7-after_value" id="type-7-after_value" readonly placeholder="3e6<?= "\n" ?>[3, 14, 6, ]" incremental readonly></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<script src="./js/math.js"></script>
<script src="./js/index.js"></script>
<script src="./js/sidebar.js"></script>

</html>