-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2023 pada 08.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_barang`
--

CREATE TABLE `akun_barang` (
  `id_akun` int(11) NOT NULL,
  `kategori_akun` int(11) NOT NULL,
  `penjualan` int(11) NOT NULL,
  `inv_po` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barcode`
--

CREATE TABLE `barcode` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkk`
--

CREATE TABLE `bkk` (
  `id_bkk` int(11) NOT NULL,
  `referensi_bkk` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nominal_bkk` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkm`
--

CREATE TABLE `bkm` (
  `id_bkm` int(11) NOT NULL,
  `referensi_bkm` varchar(50) NOT NULL DEFAULT '0',
  `keterangan_bkm` varchar(50) NOT NULL DEFAULT '0',
  `nominal_bkm` varchar(18) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `no_telp_costumer` int(16) NOT NULL,
  `provinsi_costumer` varchar(30) NOT NULL,
  `kota_customer` varchar(30) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_balik_barang`
--

CREATE TABLE `data_balik_barang` (
  `id_balik` int(11) NOT NULL,
  `kode_retur` varchar(20) NOT NULL,
  `kode_po` varchar(20) NOT NULL,
  `nama_gudang` varchar(20) NOT NULL,
  `tangggal` date NOT NULL,
  `dibuat` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_brand`
--

CREATE TABLE `data_brand` (
  `id_brand` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_faktur`
--

CREATE TABLE `data_faktur` (
  `id_faktur` int(11) NOT NULL,
  `kode_tagihan` varchar(20) NOT NULL,
  `kode_po` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `supplier` varchar(20) NOT NULL DEFAULT '',
  `no_tagihan` varchar(20) NOT NULL DEFAULT '',
  `nominal` varchar(10) NOT NULL DEFAULT '',
  `retur` varchar(10) NOT NULL DEFAULT '',
  `dibayar` varchar(10) NOT NULL DEFAULT '',
  `status` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_outlet`
--

CREATE TABLE `data_outlet` (
  `id_outlet` int(11) NOT NULL,
  `kode_outlet` varchar(20) NOT NULL DEFAULT '0',
  `nama_outlet` varchar(20) NOT NULL DEFAULT '0',
  `no_telp` int(18) NOT NULL DEFAULT 0,
  `alamat` varchar(100) NOT NULL DEFAULT '0',
  `deskripsi` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permintaan`
--

CREATE TABLE `data_permintaan` (
  `id_req` int(11) NOT NULL,
  `code_pr` varchar(20) NOT NULL,
  `nama_gudang` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `dibuat` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pesanan`
--

CREATE TABLE `data_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `kode_po` varchar(20) NOT NULL,
  `nama_gudang` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `dibuat` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produk`
--

CREATE TABLE `data_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL DEFAULT '0',
  `tipe_produk` varchar(10) NOT NULL DEFAULT '0',
  `brand` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_role`
--

CREATE TABLE `data_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_terima`
--

CREATE TABLE `data_terima` (
  `id` int(11) NOT NULL,
  `kode_pn` varchar(20) NOT NULL,
  `nama_gudang` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `dibuat` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tipe_diskon` varchar(50) NOT NULL DEFAULT '',
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `harga_ori` decimal(10,2) NOT NULL DEFAULT 0.00,
  `jumlah_produk` int(11) NOT NULL DEFAULT 0,
  `harga_diskon` decimal(10,2) NOT NULL DEFAULT 0.00,
  `nilai_diskon` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktur_bayar`
--

CREATE TABLE `faktur_bayar` (
  `id_fakyar` int(11) NOT NULL,
  `kode_supplier` varchar(20) NOT NULL,
  `supplier` varchar(20) NOT NULL,
  `hutang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_bertingkat`
--

CREATE TABLE `harga_bertingkat` (
  `id_harber` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL DEFAULT '',
  `min_qty` varchar(10) NOT NULL DEFAULT '',
  `max_qty` varchar(10) NOT NULL DEFAULT '',
  `harga` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_penjualan`
--

CREATE TABLE `harga_penjualan` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_data_stok`
--

CREATE TABLE `histori_data_stok` (
  `id_histori` int(11) NOT NULL,
  `no_dokumen` int(11) NOT NULL,
  `produk` int(11) NOT NULL,
  `outlet` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `masuk` int(11) NOT NULL,
  `keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal_akun`
--

CREATE TABLE `jurnal_akun` (
  `id_akun` int(11) NOT NULL,
  `kode_akun` varchar(10) NOT NULL,
  `nama_akun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal_closing`
--

CREATE TABLE `jurnal_closing` (
  `id_jurnal` int(11) NOT NULL,
  `nomor_jurnal` int(11) NOT NULL,
  `tipe_jurnal` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `akun` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_bkk/bkm`
--

CREATE TABLE `master_bkk/bkm` (
  `id_master` int(11) NOT NULL,
  `nama_item_bk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin_kasir`
--

CREATE TABLE `mesin_kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_hadiah`
--

CREATE TABLE `mutasi_hadiah` (
  `id` int(11) NOT NULL,
  `kode_mutasi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `tipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `nama_payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `outlet` varchar(20) NOT NULL,
  `customer` varchar(20) NOT NULL,
  `total_transaksi` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pergudangan`
--

CREATE TABLE `pergudangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL DEFAULT '0',
  `tipe` varchar(25) NOT NULL DEFAULT '0',
  `deskripsi` varchar(50) NOT NULL DEFAULT '0',
  `gudang_induk` varchar(15) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `kd_procat` int(5) NOT NULL,
  `code_procat` varchar(5) NOT NULL DEFAULT '',
  `nama_produk` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_perusahaan`
--

CREATE TABLE `profil_perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL DEFAULT '0',
  `about` varchar(100) NOT NULL DEFAULT '0',
  `no_telp` int(16) NOT NULL DEFAULT 0,
  `email` varchar(20) NOT NULL DEFAULT '0',
  `alamat` varchar(100) NOT NULL DEFAULT '0',
  `status` varchar(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan_produk`
--

CREATE TABLE `satuan_produk` (
  `id_satuan` int(11) NOT NULL,
  `nama` varchar(5) NOT NULL,
  `desc` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_adjustment`
--

CREATE TABLE `stock_adjustment` (
  `id_stok_adj` int(11) NOT NULL,
  `kode_adj` varchar(20) NOT NULL DEFAULT '',
  `kode_opname` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `nama_gudang` varchar(20) NOT NULL DEFAULT '',
  `nama_outlet` varchar(20) NOT NULL DEFAULT '',
  `status_adj` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_opname`
--

CREATE TABLE `stock_opname` (
  `id_opname` int(11) NOT NULL,
  `kode_opname` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `nama_gudang` varchar(20) NOT NULL DEFAULT '',
  `nama_outlet` varchar(20) NOT NULL DEFAULT '',
  `status_opname` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_gudang`
--

CREATE TABLE `stok_gudang` (
  `id_stgd` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `satuan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_mutasi`
--

CREATE TABLE `stok_mutasi` (
  `id_stmt` int(11) NOT NULL,
  `kode_stmt` varchar(20) NOT NULL,
  `tanggal_stmt` date NOT NULL,
  `dari` varchar(20) NOT NULL DEFAULT '',
  `ke` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_mutasigdout`
--

CREATE TABLE `stok_mutasigdout` (
  `id_mtgdout` int(11) NOT NULL,
  `kode_mtgdout` varchar(20) NOT NULL,
  `dari` varchar(20) NOT NULL,
  `ke` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kd_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_telp_sup` varchar(50) NOT NULL,
  `alamat_supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_jurnal`
--

CREATE TABLE `tipe_jurnal` (
  `id_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_jurnal_akun`
--

CREATE TABLE `tipe_jurnal_akun` (
  `id_tipe_jurkun` int(11) NOT NULL,
  `nama_tipe_jurkun` varchar(50) NOT NULL,
  `jenis_transaksi` varchar(10) NOT NULL,
  `posisi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_barang`
--
ALTER TABLE `akun_barang`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bkk`
--
ALTER TABLE `bkk`
  ADD PRIMARY KEY (`id_bkk`);

--
-- Indeks untuk tabel `bkm`
--
ALTER TABLE `bkm`
  ADD PRIMARY KEY (`id_bkm`) USING BTREE;

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `data_balik_barang`
--
ALTER TABLE `data_balik_barang`
  ADD PRIMARY KEY (`id_balik`);

--
-- Indeks untuk tabel `data_brand`
--
ALTER TABLE `data_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indeks untuk tabel `data_faktur`
--
ALTER TABLE `data_faktur`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indeks untuk tabel `data_outlet`
--
ALTER TABLE `data_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `data_permintaan`
--
ALTER TABLE `data_permintaan`
  ADD PRIMARY KEY (`id_req`);

--
-- Indeks untuk tabel `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `data_role`
--
ALTER TABLE `data_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `data_terima`
--
ALTER TABLE `data_terima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `faktur_bayar`
--
ALTER TABLE `faktur_bayar`
  ADD PRIMARY KEY (`id_fakyar`);

--
-- Indeks untuk tabel `harga_bertingkat`
--
ALTER TABLE `harga_bertingkat`
  ADD PRIMARY KEY (`id_harber`);

--
-- Indeks untuk tabel `harga_penjualan`
--
ALTER TABLE `harga_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `histori_data_stok`
--
ALTER TABLE `histori_data_stok`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indeks untuk tabel `jurnal_akun`
--
ALTER TABLE `jurnal_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `jurnal_closing`
--
ALTER TABLE `jurnal_closing`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indeks untuk tabel `master_bkk/bkm`
--
ALTER TABLE `master_bkk/bkm`
  ADD PRIMARY KEY (`id_master`);

--
-- Indeks untuk tabel `mesin_kasir`
--
ALTER TABLE `mesin_kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `mutasi_hadiah`
--
ALTER TABLE `mutasi_hadiah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pergudangan`
--
ALTER TABLE `pergudangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`kd_procat`);

--
-- Indeks untuk tabel `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `satuan_produk`
--
ALTER TABLE `satuan_produk`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indeks untuk tabel `stock_adjustment`
--
ALTER TABLE `stock_adjustment`
  ADD PRIMARY KEY (`id_stok_adj`);

--
-- Indeks untuk tabel `stock_opname`
--
ALTER TABLE `stock_opname`
  ADD PRIMARY KEY (`id_opname`);

--
-- Indeks untuk tabel `stok_gudang`
--
ALTER TABLE `stok_gudang`
  ADD PRIMARY KEY (`id_stgd`);

--
-- Indeks untuk tabel `stok_mutasi`
--
ALTER TABLE `stok_mutasi`
  ADD PRIMARY KEY (`id_stmt`);

--
-- Indeks untuk tabel `stok_mutasigdout`
--
ALTER TABLE `stok_mutasigdout`
  ADD PRIMARY KEY (`id_mtgdout`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kd_supplier`);

--
-- Indeks untuk tabel `tipe_jurnal`
--
ALTER TABLE `tipe_jurnal`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indeks untuk tabel `tipe_jurnal_akun`
--
ALTER TABLE `tipe_jurnal_akun`
  ADD PRIMARY KEY (`id_tipe_jurkun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun_barang`
--
ALTER TABLE `akun_barang`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `barcode`
--
ALTER TABLE `barcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bkk`
--
ALTER TABLE `bkk`
  MODIFY `id_bkk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bkm`
--
ALTER TABLE `bkm`
  MODIFY `id_bkm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_balik_barang`
--
ALTER TABLE `data_balik_barang`
  MODIFY `id_balik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_brand`
--
ALTER TABLE `data_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_faktur`
--
ALTER TABLE `data_faktur`
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_outlet`
--
ALTER TABLE `data_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_permintaan`
--
ALTER TABLE `data_permintaan`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pesanan`
--
ALTER TABLE `data_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_role`
--
ALTER TABLE `data_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_terima`
--
ALTER TABLE `data_terima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faktur_bayar`
--
ALTER TABLE `faktur_bayar`
  MODIFY `id_fakyar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `harga_penjualan`
--
ALTER TABLE `harga_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histori_data_stok`
--
ALTER TABLE `histori_data_stok`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurnal_akun`
--
ALTER TABLE `jurnal_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurnal_closing`
--
ALTER TABLE `jurnal_closing`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_bkk/bkm`
--
ALTER TABLE `master_bkk/bkm`
  MODIFY `id_master` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mesin_kasir`
--
ALTER TABLE `mesin_kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mutasi_hadiah`
--
ALTER TABLE `mutasi_hadiah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pergudangan`
--
ALTER TABLE `pergudangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `kd_procat` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `satuan_produk`
--
ALTER TABLE `satuan_produk`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stok_gudang`
--
ALTER TABLE `stok_gudang`
  MODIFY `id_stgd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stok_mutasi`
--
ALTER TABLE `stok_mutasi`
  MODIFY `id_stmt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stok_mutasigdout`
--
ALTER TABLE `stok_mutasigdout`
  MODIFY `id_mtgdout` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `kd_supplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tipe_jurnal`
--
ALTER TABLE `tipe_jurnal`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tipe_jurnal_akun`
--
ALTER TABLE `tipe_jurnal_akun`
  MODIFY `id_tipe_jurkun` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
