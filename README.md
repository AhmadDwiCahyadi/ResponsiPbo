# AHMAD DWI CAHYADI
# G1F022007

# Print numbers 1 to 101 each on a new line
for i in range(1, 101):
    if i % 10 == 0:
        print("NAMA SAYA AHMAD")
        print("NAMA SAYA AHMAD")
        print("NAMA SAYA AHMAD")
    else:
        print(i)
Penjelasannya kode Python di atas menggunakan loop for untuk iterasi dari 1 hingga 100. Pada setiap iterasi, dilakukan pengecekan apakah nilai `i` merupakan kelipatan 10 atau tidak dengan menggunakan operasi modulo (`i % 10 == 0`). Jika nilai `i` merupakan kelipatan 10, maka program akan mencetak string "NAMA SAYA AHMAD" sebanyak tiga kali. Jika tidak, program akan mencetak nilai `i`. Dengan demikian, output dari program ini akan berupa deretan angka dari 1 hingga 100, dengan pengecualian pada kelipatan 10 di mana akan mencetak "NAMA SAYA AHMAD" sebanyak tiga kali. Jadi, hasil akhirnya akan menciptakan pola di mana setiap kelipatan 10 diisi dengan string "NAMA SAYA AHMAD". 

# Contoh program untuk for loop dengan if else
for i in range(1, 6):
    if i % 2 == 0:
        print(f"{i} adalah bilangan genap")
    else:
        print(f"{i} adalah bilangan ganjil")
Penjelasannya Program tersebut menggunakan loop `for` dalam Python untuk mengiterasi nilai dari 1 hingga 5. Saat loop berjalan, setiap nilai yang sedang diiterasi dicek menggunakan pernyataan `if-else`. Pernyataan `if i % 2 == 0` memeriksa apakah nilai `i` habis dibagi dua. Jika sisa bagi dari `i` dengan 2 adalah 0, maka pesan dicetak bahwa nilai `i` adalah bilangan genap. Namun, jika sisa bagi tidak sama dengan 0, maka pesan yang dicetak adalah bahwa nilai `i` adalah bilangan ganjil. Dengan demikian, hasilnya adalah mencetak nilai dari 1 hingga 5 beserta informasi apakah nilai tersebut genap atau ganjil sesuai dengan kondisi yang diberikan.

# Contoh program untuk while loop dengan if else
counter = 1
while counter <= 5:
    if counter % 2 == 0:
        print(f"{counter} adalah bilangan genap")
    else:
        print(f"{counter} adalah bilangan ganjil")
    counter += 1
Penjelasanya Program ini menggunakan sebuah loop `while` untuk mengiterasi nilai dari 1 hingga 5. Pertama, program menetapkan nilai awal `counter` menjadi 1. Selama nilai `counter` kurang dari atau sama dengan 5, program akan menjalankan loop. Di dalam loop, setiap nilai `counter` dicek menggunakan pernyataan `if-else`. Pernyataan `if counter % 2 == 0` mengevaluasi apakah nilai `counter` habis dibagi dua. Jika hasil sisa bagi dari `counter` dengan 2 adalah 0, maka program mencetak bahwa nilai `counter` adalah bilangan genap. Namun, jika hasil sisa bagi tidak sama dengan 0, program mencetak bahwa nilai `counter` adalah bilangan ganjil. Setiap iterasi, nilai `counter` ditambah 1 (`counter += 1`), sehingga loop akan berhenti ketika nilai `counter` mencapai 6. Akhirnya, program memberikan informasi apakah nilai-nilai dari 1 hingga 5 merupakan bilangan genap atau ganjil berdasarkan kondisi yang diberikan.

# Mendefinisikan variabel array (list) dengan beberapa nilai
nilai_array = [10, 20, 30, 40, 50]

# Menampilkan semua nilai dalam variabel array menggunakan perulangan for
for nilai in nilai_array:
    print(nilai)
penjelsanya Program ini menggunakan konsep array atau dalam Python disebut sebagai list, yang merupakan kumpulan nilai yang disimpan dalam satu variabel. Di sini, variabel `nilai_array` telah dibuat dan berisi beberapa nilai. Selanjutnya, perulangan `for` digunakan untuk mengambil setiap nilai yang ada dalam `nilai_array`. Pada setiap iterasi, nilai yang diambil disimpan dalam variabel sementara `nilai`, kemudian nilai tersebut dicetak menggunakan pernyataan `print(nilai)`. Akibatnya, semua nilai dalam variabel array `nilai_array` akan ditampilkan secara berurutan sesuai dengan urutan mereka dalam perulangan `for`, memudahkan untuk melihat setiap elemen yang ada dalam array tersebut.
