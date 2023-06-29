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
    
 // formula satuan awal centimeter konversi ke satuan tujuan
    if (satuanAwalvalue === "centimeter" && satuanHasilvalue === "meter") {
      hasil.value = Number(input.value) / 100;
    } else if (satuanAwalvalue === "centimeter" && satuanHasilvalue === "kilometer") {
      hasil.value = Number(input.value) / 100000;
    } else if (satuanAwalvalue === "centimetermeter" && satuanHasilvalue === "milimeter") {
      hasil.value = Number(input.value) * 10;
    } else if (satuanAwalvalue === "centimetermeter" && satuanHasilvalue === "centimetermeter") {
      hasil.value = Number(input.value);
    }
  // formula satuan awal meter konversi ke satuan tujuan
    if (satuanAwalvalue === "meter" && satuanHasilvalue === "kilometer") {
      hasil.value = Number(input.value) * 0.001;
    } else if (satuanAwalvalue === "meter" && satuanHasilvalue === "centimeter") {
      hasil.value = Number(input.value) * 100;
    } else if (satuanAwalvalue === "meter" && satuanHasilvalue === "milimeter") {
      hasil.value = Number(input.value) * 1000;
    } else if (satuanAwalvalue === "meter" && satuanHasilvalue === "meter") {
      hasil.value = Number(input.value);
    }
   
  // formula satuan awal kilometer konversi ke satuan tujuan
    if (satuanAwalvalue === "kilometer" && satuanHasilvalue === "meter") {
      hasil.value = Number(input.value) * 1000;
    } else if (satuanAwalvalue === "kilometer" && satuanHasilvalue === "centimeter") {
      hasil.value = Number(input.value) * 100000;
    } else if (satuanAwalvalue === "kilometer" && satuanHasilvalue === "milimeter") {
      hasil.value = Number(input.value) * 1000000;
    } else if (satuanAwalvalue === "kilometer" && satuanHasilvalue === "kilometer") {
      hasil.value = Number(input.value);
    }

  // formula satuan awal milimeter konversi ke satuan tujuan
    if (satuanAwalvalue === "milimeter" && satuanHasilvalue === "meter") {
      hasil.value = Number(input.value) / 1000;
    } else if (satuanAwalvalue === "milimeter" && satuanHasilvalue === "centimeter") {
      hasil.value = Number(input.value) / 10;
    } else if (satuanAwalvalue === "milimeter" && satuanHasilvalue === "kilometer") {
      hasil.value = Number(input.value) / 10000000;
    } else if (satuanAwalvalue === "milimeter" && satuanHasilvalue === "milimeter") {
      hasil.value = Number(input.value);
    }
  }