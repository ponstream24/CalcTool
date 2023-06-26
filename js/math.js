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