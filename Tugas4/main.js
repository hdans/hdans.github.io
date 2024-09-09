function hitung(operator) {
    const bil1 = parseFloat(document.getElementById('bil1').value);
    const bil2 = parseFloat(document.getElementById('bil2').value);
    let hasil = 0;
    
    if (isNaN(bil1) || isNaN(bil2)) {
        alert("Masukkan kedua bilangan!");
        return;
    }

    switch (operator) {
        case '+':
            hasil = bil1 + bil2;
            break;
        case '-':
            hasil = bil1 - bil2;
            break;
        case '*':
            hasil = bil1 * bil2;
            break;
        case '/':
            hasil = bil1 / bil2;
            break;
    }
    
    document.getElementById('hasil').value = hasil;
}