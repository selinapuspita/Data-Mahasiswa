// AJAX
// ambil elemen elemen yg kita butuh tadi
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

//tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    
    //buat objek ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
    	if (xhr.readyState == 4 && xhr.status == 200) {
    		container.innerHTML = xhr.responseText;
    	}
    }

   // eksekusi ajax
   //butuh 3 parameter. 'yg pertama method nya', 'yg kedua sumber filenya dari mana', yg ketiga true atau false(kalo asyncronus make true)
   xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
   xhr.send();


});