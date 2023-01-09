SELECT SUM(pembayaran.total_bayar)
FROM pembayaran
INNER JOIN transaksi
ON pembayaran.id_transaksi = transaksi.id_transaksi
INNER JOIN pembeli
ON transaksi.id_pembeli = pembeli.id_pembeli
WHERE pembeli.nama_pembeli LIKE '%Yanto Messi'