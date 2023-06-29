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

// formula satuan awal celcius konversi ke satuan tujuan
if (satuanAwalvalue === "celcius" && satuanHasilvalue === "fahrenheit") {
  hasil.value = Number(input.value) * (9/5) + 32;
} else if (satuanAwalvalue === "celcius" && satuanHasilvalue === "reamur") {
  hasil.value = Number(input.value) * (4/5);
} else if (satuanAwalvalue === "celcius" && satuanHasilvalue === "kelvin") {
  hasil.value = Number(input.value) + 273;
} else if (satuanAwalvalue === "celcius" && satuanHasilvalue === "celcius") {
  hasil.value = Number(input.value);
}
// formula satuan awal fahrenheit konversi ke satuan tujuan
if (satuanAwalvalue === "fahrenheit" && satuanHasilvalue === "celcius") {
  hasil.value = Number(input.value - 32) * 5/9;
} else if (satuanAwalvalue === "fahrenheit" && satuanHasilvalue === "reamur") {
  hasil.value = Number(input.value - 32) * 4/9;
} else if (satuanAwalvalue === "fahrenheit" && satuanHasilvalue === "kelvin") {
  hasil.value = Number(input.value - 32) * (5/9) + 273;
} else if (satuanAwalvalue === "fahrenheit" && satuanHasilvalue === "fahrenheit") {
  hasil.value = Number(input.value);
}

// formula satuan awal reamur konversi ke satuan tujuan
if (satuanAwalvalue === "reamur" && satuanHasilvalue === "celcius") {
  hasil.value = Number(input.value) / 0.8;
} else if (satuanAwalvalue === "reamur" && satuanHasilvalue === "kelvin") {
  hasil.value = Number(input.value / 0.8) + 273,15;
} else if (satuanAwalvalue === "reamur" && satuanHasilvalue === "fahrenheit") {
  hasil.value = Number(input.value * 2.25) + 32;
} else if (satuanAwalvalue === "reamur" && satuanHasilvalue === "reamur") {
  hasil.value = Number(input.value);
}
// formula satuan awal kelvin konversi ke satuan tujuan
if (satuanAwalvalue === "kelvin" && satuanHasilvalue === "celcius") {
  hasil.value = Number(input.value) - 273.15;
} else if (satuanAwalvalue === "kelvin" && satuanHasilvalue === "reamur") {
  hasil.value = Number(input.value - 273) * 94/50;
} else if (satuanAwalvalue === "kelvin" && satuanHasilvalue === "fahrenheit") {
  hasil.value = Number(input.value * (9/5)) - 459.67;
} else if (satuanAwalvalue === "kelvin" && satuanHasilvalue === "kelvin") {
  hasil.value = Number(input.value);
}
}