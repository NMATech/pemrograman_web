// Deklarasi Variable
// var, let, const

// tipe data primitif :
// int, string, array, object, boolean, float

const mahasiswa = {
  Nama: "Nadindra Maulana Aziz",
  NPM: "2210631170139",
};

const mahasiswaPerjaka = ["Adam", "Chandra", "Hanip pake p"];

// document.write("<ul>");
// for (let i = 0; i < mahasiswaPerjaka.length; i++) {
//   document.write("<li>" + mahasiswaPerjaka[i] + "</li><br>");
// }
// document.write("</ul>");

document.write("<ul>");
let i = 0;
while (i < mahasiswaPerjaka.length) {
  document.write("<li>" + mahasiswaPerjaka[i] + "</li><br>");

  i++;
}
document.write("</ul>");
