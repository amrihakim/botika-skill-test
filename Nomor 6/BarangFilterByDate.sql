SELECT barang.id_barang, barang.nama_barang, barang.harga, barang.stok, barang.id_supplier FROM barang 
INNER JOIN transaksi 
ON transaksi.id_barang=barang.id_barang
INNER JOIN pembeli
ON pembeli.id_pembeli = transaksi.id_pembeli
WHERE pembeli.alamat LIKE '%Sleman' 
WHERE transaksi.tanggal BETWEEN '2022-01-01' AND '2022-01-31';
