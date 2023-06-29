const input = document.getElementById('input');
const satuanAwal = document.getElementById('satuanAwal');
const hasil = document.getElementById('hasil');
const satuanHasil = document.getElementById('satuanHasil');
const convertButton = document.getElementById('convertButton');
let satuanAwalvalue, satuanHasilvalue;

convertButton.addEventListener("click", myhasil);
satuanAwal.addEventListener("keyup", myhasil);
satuanHasil.addEventListener("keyup", myhasil);
function myhasil() {
satuanAwalvalue = satuanAwal.value;
satuanHasilvalue = satuanHasil.value;

// formula satuan awal miligram konversi ke satuan tujuan
if (satuanAwalvalue === "miligram" && satuanHasilvalue === "gram") {
  hasil.value = Number(input.value) / 1000;
} else if (satuanAwalvalue === "miligram" && satuanHasilvalue === "kilogram") {
  hasil.value = Number(input.value) / 1000000;
} else if (satuanAwalvalue === "miligram" && satuanHasilvalue === "miligram") {
  hasil.value = Number(input.value);
}
// formula satuan awal gram konversi ke satuan tujuan
if (satuanAwalvalue === "gram" && satuanHasilvalue === "miligram") {
  hasil.value = Number(input.value) * 1000;
} else if (satuanAwalvalue === "gram" && satuanHasilvalue === "kilogram") {
  hasil.value = Number(input.value) / 1000;
} else if (satuanAwalvalue === "gram" && satuanHasilvalue === "gram") {
  hasil.value = Number(input.value);
}

// formula satuan awal kilogram konversi ke satuan tujuan
if (satuanAwalvalue === "kilogram" && satuanHasilvalue === "gram") {
  hasil.value = Number(input.value) * 1000;
} else if (satuanAwalvalue === "kilogram" && satuanHasilvalue === "miligram") {
  hasil.value = Number(input.value) * 1000000;
} else if (satuanAwalvalue === "kilogram" && satuanHasilvalue === "gram") {
  hasil.value = Number(input.value);
}
}