pow = (a, b) => {

    a = BigInt(a);
    b = BigInt(b);

    if (a == BigInt(0)) return 0;

    var result = BigInt(1);

    for (let index = BigInt(0); index < b; index++) {
        result *= a;
    }

    return result;
}

gcd = (a, b) => {

    var q = Math.floor(a / b);;
    var r = a % b;

    while (r != 0) {

        a = b;
        b = r;
        q = Math.floor(a / b);
        r = a % b;
    }

    return b;
}

calcD = (a, b) => {
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

    while (r != 0) {

        i++;

        a = b;
        b = r;
        q = Math.floor(a / b);
        r = a % b;

        stackX[i] = a;
        stackY[i] = b;
        stackQ[i] = q;
        stackR[i] = r;
    }

    i--;

    var kx = 1;
    var ky = -stackQ[i];

    // 逆にする
    while (i != 0) {

        i--;

        kx = ky;
        ky = Math.floor((1 - kx * stackX[i]) / stackY[i]);
    }

    return kx;
}