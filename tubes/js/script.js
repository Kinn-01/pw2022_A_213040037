// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

//tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat objext ajax
  var ajax = new XMLHttpRequest();

  //cek kesiapan ajax
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      container.innerHTML = ajax.responseText;
    }
  };

  //eksekusi ajax
  ajax.open("GET", "ajax/jerseay.php?keyword=" + keyword.value, true);
  ajax.send();
});
