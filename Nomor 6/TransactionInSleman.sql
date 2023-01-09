SELECT pembeli.nama_pembeli, barang.nama_barang, transaksi.tanggal, barang.harga_barang  FROM transaksi 
INNER JOIN pembeli 
ON transaksi.id_pembeli=pembeli.id_pembeli
INNER JOIN barang 
ON transaksi.id_barang=barang.id_barang
WHERE pembeli.alamat LIKE '%Sleman';
