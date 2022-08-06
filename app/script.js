let a = 10;
for (i = 1; i <= a; i++) {
  if (i <= 6 && i !== 5) {
    console.log(`No .${i} Bekerja`);
  } else if (i % 2 == 0) {
    console.log(`No. ${i} lembur`);
  } else {
    console.log(`No. ${i} tidak bekerja`);
  }
}
