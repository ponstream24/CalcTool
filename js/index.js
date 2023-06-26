var type1 = {};
var type2 = {};
var type3 = {};
var type4 = {};
var type5 = {};
var now = "type1";

type1.before_key = document.querySelector("#type-1-before_key");
type1.before_value = document.querySelector("#type-1-before_value");
type1.after_key = document.querySelector("#type-1-after_key");
type1.after_value = document.querySelector("#type-1-after_value");

type2.before_key = document.querySelector("#type-2-before_key");
type2.before_value = document.querySelector("#type-2-before_value");
type2.after_value = document.querySelector("#type-2-after_value");

type3.before_a = document.querySelector("#type-3-before_a");
type3.before_b = document.querySelector("#type-3-before_b");
type3.after_value = document.querySelector("#type-3-after_value");

type4.before_a = document.querySelector("#type-4-before_a");
type4.before_b = document.querySelector("#type-4-before_b");
type4.after_value = document.querySelector("#type-4-after_value");

type5.before_value = document.querySelector("#type-5-before_value");
type5.after_value = document.querySelector("#type-5-after_value");

Object.values(type1).forEach(element => {
    element.addEventListener('input', e => {
        type1Run();
    })
});

Object.values(type2).forEach(element => {
    element.addEventListener('input', e => {
        type2Run();
    })
});

Object.values(type5).forEach(element => {
    element.addEventListener('input', e => {
        type5Run();
    })
});

function type1Run() {

    var b_key = parseInt(type1.before_key.value);
    var a_key = parseInt(type1.after_key.value);

    // いったん10真数に
    var ten = parseInt(type1.before_value.value, b_key);

    type1.after_value.value = ten.toString(a_key);
}

function replaceType2(expression, base = 10) {

    // 進数変換
    const numberRegex = new RegExp(`[0-9A-F]+(?=([^${base}]+|$))`, 'gi');
    const numbers = expression.match(numberRegex);

    if (numbers) {
        numbers.forEach((number) => {
            const decimal = parseInt(number, base);
            expression = expression.replace(number, decimal);
        });
    }

    // 冪乗
    var powerRegex = /(\d+)\^(\d+)/g;
    var replacedExpression = expression.replaceAll(powerRegex, "pow($1, $2)");

    // 絶対値
    var absRegex = /\|([^|]+)\|/g;
    replacedExpression = replacedExpression.replaceAll(absRegex, "Math.abs($1)");

    // log
    var logRegex = /log\((\d+)\)/g;
    replacedExpression = replacedExpression.replaceAll(logRegex, "Math.log($1)");

    // log
    var logRegex = /log\(([^,]+),([^)]+)\)/g;
    replacedExpression = replacedExpression.replaceAll(logRegex, "Math.log($2)/Math.log($1)");

    // × ÷
    replacedExpression = replacedExpression.replaceAll("×", "*");
    replacedExpression = replacedExpression.replaceAll("÷", "/");

    return replacedExpression;
}

function type2Run() {

    var b_key = parseInt(type2.before_key.value);

    var ten;

    try {
        ten = eval(replaceType2(type2.before_value.value, b_key));
    } catch (e) {
        ten = "無様な式です"
    }

    type2.after_value.value = ten.toString(b_key);
}

function change(next) {

    if (next == now) return;

    var _now = now;

    now = next;

    var _old = document.querySelector("#" + _now);
    var _next = document.querySelector("#" + next);

    try {
        _old.style.opacity = 0;
    } catch (e) {}

    setTimeout(() => {

        try {
            _old.classList.add("hide");
        } catch (e) {}

        try {
            _next.classList.remove("hide");
            _next.style.opacity = 1;
        } catch (e) {}
    }, 300);
}

function type3Run() {

    type3.after_value.value = "";

    var a = parseInt(type3.before_a.value);
    var b = parseInt(type3.before_b.value);

    var q = Math.floor(a / b);;
    var r = a % b;

    type3.after_value.value += `a = ${a}\n`;
    type3.after_value.value += `b = ${b}\n`;
    type3.after_value.value += `q = ${q}\n`;
    type3.after_value.value += `r = ${r}\n`;
    type3.after_value.value += `${a} = ${q} × ${b} + ${r}\n\n`;

    type3.after_value.style.height = 'auto';
    type3.after_value.style.height = type3.after_value.scrollHeight + 'px';

    while (r != 0) {

        a = b;
        b = r;
        q = Math.floor(a / b);
        r = a % b;

        type3.after_value.value += `${a} = ${q} × ${b} + ${r}\n`;

        type3.after_value.style.height = 'auto';
        type3.after_value.style.height = type3.after_value.scrollHeight + 'px';
    }

    type3.after_value.value += `\n最大公約数 : ${b}\n`;

    type3.after_value.style.height = 'auto';
    type3.after_value.style.height = type3.after_value.scrollHeight + 'px';
}


function type4Run() {

    type4.after_value.value = "";

    var a = parseInt(type4.before_a.value);
    var b = parseInt(type4.before_b.value);

    var q = Math.floor(a / b);;
    var r = a % b;
    var i = 0;

    var stackX = [];
    var stackY = [];
    var stackQ = [];
    var stackR = [];

    stackX[i] = a;
    stackY[i] = b;
    stackQ[i] = q;
    stackR[i] = r;

    type4.after_value.value += `a = ${a}\n`;
    type4.after_value.value += `b = ${b}\n`;
    type4.after_value.value += `q = ${q}\n`;
    type4.after_value.value += `r = ${r}\n\n`;
    type4.after_value.value += `( ${i} ) ${a} = ${q} × ${b} + ${r}\n`;

    type4.after_value.style.height = 'auto';
    type4.after_value.style.height = type4.after_value.scrollHeight + 'px';

    while (r != 0) {

        i++;

        a = b;
        b = r;
        q = Math.floor(a / b);
        r = a % b;

        type4.after_value.value += `( ${i} ) ${a} = ${q} × ${b} + ${r}\n`;

        type4.after_value.style.height = 'auto';
        type4.after_value.style.height = type4.after_value.scrollHeight + 'px';

        stackX[i] = a;
        stackY[i] = b;
        stackQ[i] = q;
        stackR[i] = r;
    }

    type4.after_value.value += `\n最大公約数 : ${b}\n\n`;

    type4.after_value.style.height = 'auto';
    type4.after_value.style.height = type4.after_value.scrollHeight + 'px';

    i--;

    var kx = 1;
    var ky = -stackQ[i];

    type4.after_value.value += `( ${i} ) 1 = ${kx} × ${stackX[i]} + ${ky} × ${stackY[i]}\n`;

    type4.after_value.style.height = 'auto';
    type4.after_value.style.height = type4.after_value.scrollHeight + 'px';

    // 逆にする
    while (i != 0) {

        i--;

        kx = ky;
        ky = Math.floor((1 - kx * stackX[i]) / stackY[i]);

        type4.after_value.value += `( ${i} )    = ( ${kx} ) × ${stackX[i]} + ( ${ky} ) × ${stackY[i]}\n`;

        type4.after_value.style.height = 'auto';
        type4.after_value.style.height = type4.after_value.scrollHeight + 'px';
    }

    type4.after_value.value += `\n${parseInt(type4.before_a.value)}x + ${parseInt(type4.before_b.value)}y = 1 の解は\n`;
    type4.after_value.value += `特殊解 x0 = ${kx}, y0 = ${ky}\n`;
    type4.after_value.value += `x = ${kx} + ${stackY[i]} *t\n`;
    type4.after_value.value += `y = ${ky} - ${stackX[i]} *t\n`;
}

function type5Run() {

    var b_key = parseInt(type5.before_value.value);

    type5.after_value.value = "";

    for (var i = 2; i < i + 1; i++) {

        if (b_key % i == 0) {
            for (var n = 1; n < n + 1; n++) {
                if (b_key % i == 0) {

                    type5.after_value.value = +`${i},\n`;

                    var b_key = b_key / i;
                } else {
                    break;
                }
            }
        }

        if (b_key == 1) {
            break;
        }
    }
}