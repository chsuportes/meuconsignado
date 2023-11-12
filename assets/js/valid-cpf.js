$("#form-login").submit(function() {
    var numcpf = $("#username").val();
    numcpf = numcpf.replace(/[^0-9]/g, '');

    if (numcpf == "") {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 11111111111) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 22222222222) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 33333333333) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 44444444444) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 55555555555) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 66666666666) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 77777777777) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 88888888888) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == 99999999999) {
        alert('CPF inválido, verifique!');
        return false;
    }

    if (numcpf == '00000000000') {
        alert('CPF inválido, verifique!');
        return false;
    }

    var digitoA = 0;
    var digitoB = 0;

    for (var i = 0, x = 10; i <= 8; i++, x--) {
        digitoA += numcpf[i] * x;
    }

    for (var i = 0, x = 11; i <= 9; i++, x--) {
        digitoB += numcpf[i] * x;
    }

    var somaA = ((digitoA % 11) < 2) ? 0 : 11 - (digitoA % 11);
    var somaB = ((digitoB % 11) < 2) ? 0 : 11 - (digitoB % 11);

    if (somaA != numcpf[9] || somaB != numcpf[10]) {
        alert('CPF inválido, verifique!');
        return false;
    }
});