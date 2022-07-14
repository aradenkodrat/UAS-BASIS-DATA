NAMA : Raden Kodrat

NIM : 312010271

KELAS : TI.20.D.1

Dari Tugas UTS sebelumnya saya membuat sebuah sistem informasi klinik sederhana dimana dalam sistem tersebut saya akan menampilkan

Modul data pasien

![1](https://user-images.githubusercontent.com/101814131/179012571-d5126d5e-f834-40fe-bb66-69719e24b724.JPG)


Dalam tabel pasien saya bisa menambahkan, menghapus dan mengedit data. Contohnya sebagai berikut :

EDIT

![2](https://user-images.githubusercontent.com/101814131/179012987-acd2a0ca-8fec-49d3-8562-49c4c3e68678.JPG)


Saya merubah ismi menjadi putri
![3](https://user-images.githubusercontent.com/101814131/179013274-987a1697-eae2-42a2-b67b-34f173666233.JPG)



Tambah Saya juga bisa Menambah data pasien sebagai berikut :

![4](https://user-images.githubusercontent.com/101814131/179013611-0bc18768-6d3b-4442-9c1e-ba911c431323.JPG)


disini saya menambahakan data baru yaitu forex :

![5](https://user-images.githubusercontent.com/101814131/179013667-1cc7e174-c5d6-45d3-ad49-919792b0c20c.JPG)


dan untul modul hapus disini saya menghapus data daud :

![6](https://user-images.githubusercontent.com/101814131/179014002-d22662ab-1d1d-45d8-8f1b-216aafde9959.JPG)


implementasi view // IMPLEMENTASI VIEW

ambilsemuadatadokter = mysqli_query($conn,"SELECT * from dokter");
										$i = 1;
										while($data=mysqli_fetch_array($ambilsemuadatadokter)){
											$nama = $data['nama_dokter'];
											$idd = $data['id_dokter'];
											![7](https://user-images.githubusercontent.com/101814131/179014476-b8498da3-8e69-4cf0-88cf-df69626c815e.JPG)
