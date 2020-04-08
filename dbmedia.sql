-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 22, 2008 at 10:51 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `dbmedia`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `agenda`
-- 

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL auto_increment,
  `tema` varchar(100) collate latin1_general_ci NOT NULL,
  `isi_agenda` text collate latin1_general_ci NOT NULL,
  `tempat` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `hari` varchar(30) collate latin1_general_ci NOT NULL,
  `id_user` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_agenda`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `agenda`
-- 

INSERT INTO `agenda` (`id_agenda`, `tema`, `isi_agenda`, `tempat`, `tgl_mulai`, `tgl_selesai`, `tgl_posting`, `hari`, `id_user`) VALUES 
(4, 'Workshop Web Programming ''PHP''', 'Workshop ini meningkatkan kemampuan PHP.', 'Hotel Radisson Yogyakarta', '2008-05-06', '2008-05-09', '2008-05-02', 'Senin', 'joko'),
(22, 'Pameran Notebook', 'pameran notebook', 'Jogja Expo Center', '2008-02-09', '2008-02-12', '2008-02-08', 'Jumat', 'admin'),
(21, 'Pameran Buku Nasional di Yogyakarta', 'Banyak penerbit terlibat dalam pameran buku nasional yang akan diadakan di Yogyakarta.', 'Gedung Wanitatama', '2008-02-02', '2008-02-10', '2008-02-08', 'Jumat', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `banner`
-- 

CREATE TABLE `banner` (
  `id_banner` int(5) NOT NULL auto_increment,
  `judul` varchar(100) collate latin1_general_ci NOT NULL,
  `url` varchar(100) collate latin1_general_ci NOT NULL,
  `gambar` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  PRIMARY KEY  (`id_banner`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `banner`
-- 

INSERT INTO `banner` (`id_banner`, `judul`, `url`, `gambar`, `tgl_posting`) VALUES 
(2, 'Beasiswa', 'http://www.beasiswa.com', 'banner-bea-siswa.gif', '2008-02-09'),
(3, 'Lowongan Pekerjaan', 'http://www.jobsdb.com', 'banner-jobs.gif', '2008-02-09');

-- --------------------------------------------------------

-- 
-- Table structure for table `berita`
-- 

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL auto_increment,
  `id_kategori` int(5) NOT NULL,
  `id_user` varchar(50) collate latin1_general_ci NOT NULL,
  `judul` varchar(100) collate latin1_general_ci NOT NULL,
  `isi_berita` text collate latin1_general_ci NOT NULL,
  `gambar` varchar(100) collate latin1_general_ci NOT NULL,
  `hari` varchar(20) collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `counter` int(5) NOT NULL default '1',
  PRIMARY KEY  (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `berita`
-- 

INSERT INTO `berita` (`id_berita`, `id_kategori`, `id_user`, `judul`, `isi_berita`, `gambar`, `hari`, `tanggal`, `jam`, `counter`) VALUES 
(22, 3, 'admin', 'Launching Website Lokomedia Community Yogyakarta', 'Pembuatan Website Lokomedia Community bertujuan untuk memberikan informasi-informasi tentang Lokomedia di kalangan masyarakat luas.\r\n\r\nInformasi tersebut sangat mendukung terciptanya sharing ilmu pengetahuan khususnya yang berkenaan dengan aktivitas komunitas Lokomedia. Mereka bisa mengakses informasi yang diinginkan melalui internet, sehingga informasi dapat diketahui dimana dan kapan saja. ', 'gelas.jpg', 'Sabtu', '2008-02-09', '12:02:04', 43),
(21, 4, 'damar', 'Zidane, Tokoh Paling Populer di Perancis', 'Minggu kemarin, di Paris, Zinadine Zidane dinobatkan sebagai tokoh paling populer tahun ini oleh rakyat Perancis. Padahal sebelumnya, banyak pihak menduga, peristiwa tandukan Zidane ke dada pemain belakang Italia, Marco Materazzi akan mencoreng muka Zidane dengan arang hitam.\r\n\r\nTapi, fakta dan opini kadang tidak mesti sejalan. Journal du Dimanche, sebuah kantor berita yang mengadakan polling mendapatkan hasil yang cukup mengejutkan. Sebagian besar responden, rakyat Perancis, menyatakan bersedia memaafkan dan menerima kembali Zidane. Bahkan 48% responden memilih Zidane sebagai tokoh yang paling mereka gemari. Maka kapten tim nasional Perancis ini pun dinobatkan sebagai tokoh paling populer di Perancis untuk tahun ini.\r\n\r\nDalam polling, Zidane mengalahkan mantan petenis terkenal, Yannick Noah yang kini melambung namanya justru bukan sebagai olahragawan, melainkan sebagai penyayi. Yannick Noah menduduki peringkat kedua dalam pilihan responden dengan mengantongi suara 30%. Tokoh lain yang duduk di urutan ketiga adalah seorang ilmuwan ekologi, Nicolas Hulot dan penyanyi pop Johnny Hallyday. Bintang film Jean Reno yang bermain dalam film Mission Imposible II menduduki peringat keempat.\r\n\r\nHasil dari polling ini menunjukkan, bahwa ketulusan Zidane meminta maaf mendapat simpati yang luar biasa dari publik. Artinya, setelah penobatan ini Zidane akan semakin terkenal di masa pensiunnya.', 'zidane.jpg', 'Jumat', '2008-02-08', '13:16:46', 11),
(14, 5, 'joko', 'Pesawat Adam Air Hilang Mendadak', 'Pesawat Boeing 737 seri 400 Adam Air PK-KKW dengan nomor penerbangan DHI 574, Senin (1/1) sekitar pukul 15.07 kehilangan kontak dalam penerbangan dari Surabaya menuju Manado. \r\n\r\nPesawat dengan 96 penumpang, 4 orang di antaranya bayi dan 6 awak.itu berangkat dari Surabaya sekitar pukul 13.00 WIB, dan direncanakan tiba di Manado sekitar pukul 16.14 Wita.\r\n\r\nDirektur Jendral Perhubungan Udara Departemen Perhubungan, M Ichsan Tatang mengatakan, pada saat pesawat dengan kapten pilot Widodo itu diterbangkan dari Surabaya, cuaca buruk, hujan lebat, dengan kecepatan angin sekitar 40 knot. Pesawat kehilangan kontak ketika berada arah barat laut Makassar. Radar di Makassar tidak menangkap lagi pesawat tersebut sampai pukul 19.30. \r\n\r\nChief Executive Officer Adam Air Gunawan Suherman mengakui pesawat Adam Air yang kehilangan kontak tersevut. Namun, Gunawan mengatakan lokasi pesawat sudah ditemukan pukul 19.30. Hanya saja, keterangan mengenai hal tersebut akan disampaikan dalam jumpa pers yang.segera digelar Senin malam.\r\n\r\n<b>Sempat kontak Makassar</b>\r\nDari Makassar dilaporkan, Kantor Administrator Bandar Udara Hasanuddin, Makassar menyebutkan, pesawat sempat melakukan kontak dengan Bandara Hasanuddin sekitar pukul 15.00 Wita. Setelah melewati Makassar, keberadaan pesawat tidak diketahui lagi karena sudah tidak ada kontak sama sekali.\r\n\r\nKepala Hubungan Masyarakat Angkasa Pura I Bandara Sam Ratulangi Manado Herman, sudah mengecek ke sejumlah bandara terdekat antara lain Sepinggan Balikpapan, Mutiara Palu, dan Gorontalo namun tidak mendapat informasi mengenai pesawat tersebut. “Petugas bandara kami hubungi mengatakan tidak ada pesawat Adam Air yang melakukan pendaratan,” katanya. \r\n\r\nDalam beberapa hari ini, di Makassar, Manado dan sekitarnya diguyur hujan deras diselingi tiupan angin kencang. Suasana di sekitar bandara tampak gelap. \r\n\r\nAgus, petugas Adam Air di Manado mengatakan menerima informasi sekitar pukul 20.00 bahwa pesawat kembali ke Bandara Juanda Surabaya, sehingga dijadwalkan keberangkan kembali ke Manado Selasa pagi sekitar pukul 05.00.', 'pesawat.jpg', 'Kamis', '2008-01-03', '12:19:30', 9),
(15, 3, 'admin', 'Go PHP5, gerakan pengguna PHP 5', 'Go PHP5 yang beralamat di <a href=http://www.gophp5.org>http://www.gophp5.org</a> adalah sebuah gerakan untuk memprakarsai penyebaran dan penggunaan PHP5 baik di kalangan developer maupun penyedia hosting. \r\n\r\nPenggunaan PHP 5 dinilai sangat lambat karena beberap faktor utamanya adalah penyedia jasa web hosting yang masih enggan untuk menginstall PHP 5 di server. Go PHP5 menjadi sebuah wadah komunitas seluruh dunia untuk mengajak bersama-sama menggunakan PHP 5 serta memanfaatkan fitur-fitur barunya.\r\n', 'gophp5.png', 'Jumat', '2008-02-08', '17:21:28', 3),
(16, 3, 'joko', 'Google ''Panas'', Microsoft Beli Yahoo?', 'Google menolak keras atas tindakan Microsoft yang mau membeli Yahoo. "Ini bukan hanya sekedar transaksi jual beli yang sederhana, suatu perusahaan mengambil perusahaan lainnya. Ini mengenai esensi dari internet yaitu keterbukaan dan inovasi". Komentar David Drummond (Google''s senior vice president for corporate development and chief legal officer).\r\n\r\nYahoo adalah salah satu perusahaan terbesar di internet, belakangan ini Yahoo mulai kehabisan akal untuk mengalahkan pendapatan Google.\r\n\r\nGoogle memulai karir di Internet melalui search-engine nya, kesukseskan teknologi tersebut membuat Google terus melakukan inovasi dan mengajak para developer untuk memajukan teknologi Internet, sampai akhirnya Yahoo pun membuat halaman khusus untuk para developer.\r\n\r\nDavid Drummond juga menuding kalau Microsoft ingin mengambil keuntungan yang tidak pantas dan melakukan tindakan ilegal melalui Internet.\r\n\r\nMicrosoft mengumumkan pada hari jum''at kemarin (1 februari 2008) penawarannya kepada Yahoo sebesar USD 44.6 Milyar.\r\n\r\nKomite kongres akan melakukan sesi ''hearing'' pada minggu ini untuk menimbang apakah penawaran Microsoft terhadap Yahoo termasuk implikasi Antitrust.\r\n', 'yahoo.jpg', 'Jumat', '2008-02-01', '19:15:28', 14),
(17, 3, 'admin', 'Onno Melatih IT di Timor Leste', 'Atas undangan rekan-rekan dari forum ICT Timor Leste, seperti Ray da Silva dan Lemi. Pada 28 Januari 2008, Onno W. Purbo berangkat ke Dili dari Jakarta melalui Denpasar Bali menggunakan pesawat Merpati tipe Boing 737-200. \r\n\r\nPesawat Merpati tiba di Dili sekitar jam 1-2 siang di Airport Dili yang berbatasan secara langsung dengan pantai. Airport Dili sangat menarik, terlihat ada sekitar 8 helikopter tempur kelas black hawk Amerika Serikat parkir di apron, tempat parkiran pesawat di airport Dili, Di samping 8 helikopter tempur tersebut, terdapat beberapa heli lain yang ada dalam hanggar darurat.\r\n\r\nTidak jauh dari tempat helikopter tersebut terdapat ''kompleks'' militer kecil di lokasi airport. Instalasi dan peralatan militer tersebut tampaknya dioperasikan oleh kesatuan dari Australia dengan bendera PBB/UN. Tampaknya siaga militer masih cukup tinggi di Timor Leste. Belakangan saya ketahui dari rekan-rekan ICT-TL bahwa helikopter black hawk tersebut jarang digunakan untuk bertempur lebih banyak untuk show force saja, dan melakukan patroli.\r\n\r\nTurun dari pesawat, berjalan kaki melalui selasar ke gedung terminal. Langsung di hadapan kami ada tempat untuk memperoleh Visa on Arrival dengan membayar US$30. Tanpa diminta atau ditanya macam-macam. Oya, tampaknya mata uang di Timor Leste adalah mata uang US$ (dollar Amerika) semua. Belakangan saya ketahui dari rekan-rekan ICT-TL bahwa memang mata uang Timor Leste adalah US$, menarik untuk disimak bagi negara sekecil ini ternyata memang lebih menarik menggunakan mata uang US$ daripada membuat mata uang sendiri.\r\n\r\nImigrasi Timor Leste di Airport dapat dilalui dengan mudah dengan memperlihatkan surat undangan yang diperoleh dari ICT Timor Leste. Tanpa banyak menunggu lama, setelah memperoleh semua peralatan di bagasi saya keluar dari Airport langsung melihat wajah Ray dan Lemi yang berseri-seri di luar gedung bandara.\r\n\r\nKami langsung berangkat menuju hotel untuk cek-in dan meletakkan pakaian. Pada saat keluar dari Airport kami melihat banyak tenda-tenda pengungsi lokal Timor Leste di Airport. Menurut teman-teman ICT-TL mereka adalah pengungsi pada saat kerusuhan 2006 lalu. Sampai hari ini masih saja mengungsi padahal kerusuhan sudah tidak ada.\r\n\r\nSesudah cek-in dan meletakan pakaian di hotel, kami langsung menuju kantor ICT Timor Leste tempat Lemi bekerja dan tempat acara akan di lakukan esok harinya,\r\n\r\nPada sore itu, kami mempersiapkan semua peralatan yang ingin digunakan untuk workshop, terutama membangun LAN, membangun server repository Ubuntu dan membangun sedikit demo untuk acara pembukaan.\r\n\r\nLemi sempat bercerita sedih tentang ICT Timor Leste yang tempat training-nya sempat dijarah, dibakar pada masa kerusuhan tahun lalu. Sekarang mereka membangun kembali tempat training-nya dari bawah.\r\n\r\nYang akan menjadikan training ini menarik adalah kami harus berjuang dengan waktu karena listrik dapat mati sewaktu-waktu, beberapa kali dalam sehari. Di samping akses Internet yang relatif mahal.\r\n', 'onnopurbo.jpg', 'Jumat', '2008-02-08', '19:27:10', 2),
(18, 4, 'admin', 'Ujicoba Sepang, Rossi masih yang Terbaik', 'Tren kebangkitan Valentino Rossi masih bertahan pada hari kedua sesi ujicoba resmi di Sirkuit Sepang setelah jangoan Fiat Yamaha itu mencatatkan namanya sebagai yang tercepat.\r\n\r\nSama seperti saat mengukir waktu tercepat kemarin, di Sepang, Rabu (6/2/2008), Rossi mencatat waktu terbaiknya dengan menggunakan ban kualifikasi. Waktu yang ditorehkannya sebenarnya lebih lambat dibanding kemarin, namun catatan dua menit 0,472 detik sudah cukup menempatkannya sebagai yang tercepat.\r\n\r\n"Hari ini kami kembali menjalani hari yang baik saya juga mendapat laju serta ritme yang bagus sepanjang hari. Kami menguji beberapa jenis ban Bridgestone sebelum kemudian mencoba dengan ban pilihan saya, yang sekaligus mengkonfirmasi kalau inilah yang terbaik buat kami dan akan kami gunakan lagi besok," ungkap Rossi di Crash.\r\n\r\nMeski begitu Rossi belum mampu mengalahkan catatan waktu tercepat jika menggunakan ban balapan yang saat ini masih dipegang Casey Stoner. Saat menggunakan race tyre, Rossi mencatat waktu dua menit 1,371 detik, sementara Stoner membukukan dua menit 0,964 detik.\r\n\r\nPosisi dua masih menjadi milik Nicky Hayden. Beraksi tanpa ditemani Casey Stoner yang masih cedera, pembalap Repsol Honda membukukan waktu dua menit 0,900 detik. \r\n\r\nUrutan tiga daftar pembalap tercepat juga masih menjadi milik Shinya Nakano. Pembalap Honda Gresini itu mencatat waktu dua menit 2,049 detik. Sementara Jorge Lorenzo dan Alex De Angelis berada di posisi empat dan lima.\r\n', 'rossi.jpg', 'Jumat', '2008-02-08', '19:39:39', 4),
(19, 4, 'admin', 'Federer, Atlit Terbaik Swiss 2007', 'Manusia rekor dari lapangan tenis, Roger Federer, terpilih sebagai atlet Swiss terbaik tahun 2007. Titel yang disandangnya itu pun merupakan sebuah rekor tersendiri.\r\n\r\nTotal, petenis nomor satu dunia itu menyandang predikat tersebut sebanyak empat kali. Tiga sebelumnya ia raih di tahun 2003, 2004, dan 2006. Maka Federer pun menyamai eks pembalap sepeda Tony Roominger sebagai figur yang paling sering didaulat sebagai atlet terbaik tahunan di Swiss.\r\n\r\nDalam persaingan tahun ini Federer mengalahkan juara dunia balap sepeda nomor time trial, Fabian Cancellara, dan pelari matahon Viktor Roethlin. \r\n\r\n"Rasanya selalu mengagumkan bisa memenangi award-award ini dari negaraku, sekalipun orang selalu mengatakan saya sangat difavoritkan," ujar pemilik 12 titel Grand Slam itu lewat siaran video langsung dari kamp latihannya di Dubai, Sabtu (15/12/2007).\r\n\r\nFederer mengatakan, dia hampir menangis ketika diberi ucapan selamat melalui video message dari tiga petenis legendaris, Bjorn Borg, Roy Emerson, dan Pete Sampras. \r\n\r\n"Luar biasa mendengarkan pesan-pesan seperti itu," tukasnya seperti dilansir Yahoosport. "Dan tentu saja, (mematahkan) rekor Pete adalah mimpi buat saya."\r\n\r\nSampras masih tercatat sebagai pemegang rekor 14 gelar Grand Slam. "Semua orang mengatakan saya tinggal dua kemenangan lagi dan itu akan terjadi tahun (2008) ini. Well, itu akan menyenangkan, tapi saya hanya berkonsentrasi supaya tetap fit penuh dan selalu termotivasi," tambah Federer.\r\n\r\nBorg, yang rekor lima kemenangan berturut-turut di Wimbledon-nya telah disamai Federer di tahun ini, telah mengutarakan keyakinannya bahwa Federer akan menjadi petenis terbesar sepanjang masa. \r\n', 'federer.jpg', 'Jumat', '2008-02-08', '19:52:37', 3),
(13, 4, 'gadjah', 'Sharapova Juara Australia Terbuka', 'Petenis putri unggulan ke-5 asal Rusia, Maria Sharapova, tampil sebagai juara Australia Tebuka. Pada partai final di Rod Laver Arena, Sabtu (26/1), Sharapova mengalahkan unggulan keempat Ana Ivanovic dua set langsung, 7-5 6-3.\r\n\r\nIni gelar grand slam ketiga Sharapova yang tahun lalu kalah di final. Sebelumnya, Sharapova menjuarai seri grand slam di Wimbledon (2004) dan Amerika Terbuka (2006).\r\n\r\nSebuah forehand Ana Ivanovic yang melebar, mengakhiri partai final tenis putri itu.  Maria Sharapova pun langsung bersujut. Dan, derai air mata langsung menetes di pipinya.\r\n\r\nKegembiraan dan kebahagiaan petenis Rusia itu memang membuatnya berbunga-bunga. Akhirnya, dia juara Australia Terbuka juga. Tahun lalu, dia kalah di final. Kini, gelar grand slam Australia Terbuka pertama dia raih. Sukses yang melengkapi prestasinya meraih gelar grand slam Wimbledon (2004) dan Amerika Terbuka (2006).\r\n\r\n"AKu mencintai kalian semua. Terima kasih atas segalanya," katanya seusai pertandingan.\r\n\r\n"Ini prestasi yang luar biasa. Jika ada yang mengatakan bahwa aku bisa berdiri di depan kalian semua dengan gelar juara pada tahun lalu, aku tak akan percaya," tambahnya.\r\n\r\n"Pagi tadi aku menerima pesan dari Billie Jean King yang mengatakan, juara yang mengambil peluang dan tekanan merupakan sebuah kehormatan. Dan, aku telah mengambil kesempatan itu," ujarnya.\r\n\r\nSharapova butuh satu jam 31 menit untuk mengakhiri perlawanan Vianovic. Petenis Serbia itu sebenarnya bermain bagus. Namun, kemampuan servis menjadi pembeda. Sharapova punya servis lebih keras hingga sering menyulitkan Ivanovic.\r\n\r\nPertarungan sengit hanya terjadi di set pertama. Ivanovic yang tampil percaya diri, terus menekan Sharapova dengan pukulan-pukulan forehand.\r\n\r\nNamun, Sharapova terus meladeni permainan lawan. Petenis Rusia itu juga bermain lebih rapi dan akurat dalam menempatkan bola.\r\n\r\nSecara keseluruhan, Sharapova hanya melakukan 15 kesalahan. Sebaliknya, Ivanovic melakukan 33 kesalahan sendiri.\r\n', 'maria.jpg', 'Jumat', '2008-02-01', '20:01:44', 15),
(20, 4, 'joko', 'Super Champion, Sekali Lagi Chris John ', 'Melalui pertarungan tujuh ronde, Chris John berhasil mempertahankan gelar juara dunia kelas bulu versi WBA. Dia menang TKO atas penantangnya, Roinet Caballero. Bertarung di bawah dukungan ribuan pasang mata yang memadati arena Istora Senayan, Jakarta, Sabtu (26/1/2008) malam, Chris John mendominasi pertarungan semenjak ronde pertama.\r\n\r\nDi ronde pembuka, baik Chris John maupun Caballero sama-sama masih berhati-hati dan lebih banyak menjajaki kekuatan lawan.\r\n\r\nDominasi Chris John atas lawannya itu mulai terlihat di ronde kedua. Beberapa kali Chris John mampu memojokkan petinju Panama itu ke sudut ring melalui kombinasi pukulan-pukulan pendeknya.\r\n\r\nMemasuki ronde-ronde berikutnya, keunggulan Chris John masih belum tertahan meski Caballero beberapa kali melepaskan serangan balasan, terutama di ronde keempat.\r\n\r\nDi ronde keenam, Caballero makin tersudut oleh berondongan pukulan-pukulan jab Chris John dan bahkan sempat terjatuh. Namun wasit tidak memberikan hitungan karena menganggap Caballero jatuh karena dorongan.\r\n\r\nChris John terus mengendalikan pertandingan saat memasuki ronde ketujuh. Pukulan-pukulan petinju asal Banjarnegara itu beberapa kali menghantam telak kepala lawan. Namun pukulan Chris John terasa kurang berbobot sehingga tidak mampu menjatuhkan Caballero.\r\n\r\nPertarungan akhirnya dimenangi Chris John setelah Caballero menyerah di akhir ronde ketujuh dari 12 ronde yang direncanakan. Petinju berusia 24 tahun itu tak melanjutkan pertandingan dan dinyatakan kalah TKO.\r\n\r\nDengan hasil ini, Chris John kini mencatat rekor 40 kali menang (21 KO), satu kali seri dan belum pernah kalah. Sementara Caballero mengukir catatan 22-8-1.\r\n\r\nKhusus bagi Chris John, kemenangan ini membuatnya menorehkan sembilan kemenangan dalam pertarungan dunianya. Petinju 28 tahun ini hanya membutuhkan satu kali kemenangan dalam pertarungan dunia untuk mendapatkan gelar "Super Champ" dari WBA.\r\n', 'chrisjohn.jpg', 'Kamis', '2008-02-07', '20:06:47', 14),
(11, 3, 'damar', 'Sharapova Lelang Ponselnya 76 Juta', 'Sebuah ponsel pribadi milik Maria Sharapova, jagoan tenis asal Rusia, telah dilelang melalui Yahoo Jepang. Ponsel yang dilelang adalah Motorola seri M1000. Dalam pelelangan, ponsel itu terjual dengan harga akhir 905,000 yen (1 yen = Rp 84,9 sumber : xe.com) atau sekitar Rp 76 juta.\r\n\r\nSharapova pernah menggunakan ponsel tersebut dalam perjalanannya ke negeri sakura. Ponsel tersebut dipoles dengan warna pink, berbeda dengan warna M1000 pada umumnya - hitam. Ponsel tersebut juga dihiasi batu mulia.\r\n\r\nTidak disebutkan siapa yang membeli ponsel tersebut. Tapi yang jelas, hasil lelangnya ditujukan untuk keperluan amal. Demikian dikutip detikinet dari Engadget.com Jumat (16/12/2005).\r\n\r\nMotorola dan Maria Sharapova tampaknya memang akrab. Sebelumnya Motorola juga mengeluarkan ponsel RAZR V3 berwarna pink, yang terinspirasi Sharapova dan ditujukan khusus untuk wanita seksi itu.', 'handphone.jpg', 'Jumat', '2008-02-01', '20:15:02', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `hubungi`
-- 

CREATE TABLE `hubungi` (
  `id_hubungi` int(5) NOT NULL auto_increment,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `subjek` varchar(100) collate latin1_general_ci NOT NULL,
  `pesan` text collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY  (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `hubungi`
-- 

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES 
(1, 'Ariawan', 'ariawan@gmail.com', 'Mohon Informasi', 'Mohon informasi mengenai buku yang diterbitkan oleh Lokomedia.', '2008-02-10');

-- --------------------------------------------------------

-- 
-- Table structure for table `kategori`
-- 

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL auto_increment,
  `nama_kategori` varchar(50) collate latin1_general_ci NOT NULL,
  `keterangan` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `kategori`
-- 

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES 
(1, 'Politik', 'Berita-berita Mengenai Politik'),
(2, 'Ekonomi', 'Berita-berita Mengenai Ekonomi'),
(3, 'Teknologi', 'Berita-berita Mengenai Teknologi'),
(4, 'Olahraga', 'Berita-berita Mengenai Olahraga'),
(5, 'Kriminal', 'Berita-berita Mengenai Kriminal'),
(6, 'Kesehatan', 'Berita-berita Mengenai Kesehatan'),
(7, 'Hiburan', 'Berita-berita Mengenai Hiburan');

-- --------------------------------------------------------

-- 
-- Table structure for table `modul`
-- 

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL auto_increment,
  `nama_modul` varchar(50) collate latin1_general_ci NOT NULL,
  `link` varchar(100) collate latin1_general_ci NOT NULL,
  `static_content` text collate latin1_general_ci NOT NULL,
  `gambar` varchar(100) collate latin1_general_ci NOT NULL,
  `publish` enum('Y','N') collate latin1_general_ci NOT NULL,
  `status` enum('user','admin') collate latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') collate latin1_general_ci NOT NULL,
  `urutan` int(5) NOT NULL,
  PRIMARY KEY  (`id_modul`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=27 ;

-- 
-- Dumping data for table `modul`
-- 

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`) VALUES 
(2, 'Manajemen User', '?module=user', '', '', 'N', 'admin', 'Y', 1),
(18, 'Berita', '?module=berita', '', '', 'Y', 'user', 'Y', 4),
(19, 'Banner', '?module=banner', '', '', 'N', 'admin', 'Y', 7),
(12, 'Agenda', '?module=agenda', '', '', 'Y', 'user', 'Y', 5),
(10, 'Manajemen Modul', '?module=modul', '', '', 'N', 'admin', 'Y', 2),
(11, 'Profil Lembaga', '?module=profil', 'Berdasarkan Peraturan Pemerintah Nomor 152 tahun 2000, Universitas Islam Negeri (UIN) Sunan Kalijaga Yogyakarta ditetapkan sebagai Badan Hukum Milik Negara (BHMN). Penetapan tersebut menuntut UIN Sunan Kalijaga untuk memiliki struktur organisasi yang ramping, efektif dan efisien dalam mencapai tujuannya. Rektor dalam keputusannya Nomor 01/SK/MWA-UI/2003 tentang Anggaran Rumah Tangga UIN Sunan Kalijaga menetapkan "Direktorat" sebagai unit pelaksana manajemen Pimpinan Universitas.\r\n\r\nLembaga Pengabdian Masyarakat UIN Sunan Kalijaga merupakan unit pelaksana manajemen yang memfasilitasi dan mendukung pelaksanaan kegiatan riset dan pengabdian civitas akademik UIN Sunan Kalijaga kepada masyarakat. Dengan demikian, lembaga ini mendukung pencapaian visi UIN Sunan Kalijaga diakui sebagai universitas riset yang merupakan pusat unggulan ilmu pengetahuan, teknologi, seni, dan budaya.\r\n\r\n<b>Visi</b>\r\n\r\n\r\n<b>Misi</b>', 'gedung.jpg', 'Y', 'admin', 'Y', 3),
(25, 'Hubungi Kami', '?module=hubungi', '', '', 'Y', 'admin', 'Y', 8),
(26, 'Pengumuman', '?module=umum', '', '', 'Y', 'user', 'Y', 6);

-- --------------------------------------------------------

-- 
-- Table structure for table `pengumuman`
-- 

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(5) NOT NULL auto_increment,
  `judul` varchar(100) collate latin1_general_ci NOT NULL,
  `isi` text collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `id_user` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_pengumuman`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `pengumuman`
-- 

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi`, `tanggal`, `tgl_posting`, `id_user`) VALUES 
(1, 'Bedah Buku ''Laskar Pelangi''', 'Bedah buku diadakan di Toko Buku Togamas, jam 09.00 WIB s/d selesai.', '2008-02-23', '2008-02-09', 'admin'),
(2, 'Seminar Menjadi Penulis Best Seller', 'Seminar tentang kiat-kiat menjadi penulis best seller.', '2008-02-25', '2008-02-10', 'joko'),
(3, 'Talk Show dengan Pengusaha Yogyakarta', 'Talkshow diadakan di radio geronimo.', '2008-02-28', '2008-02-11', 'gadjah');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id_user` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(50) collate latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `level` varchar(50) collate latin1_general_ci NOT NULL default 'user',
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` (`id_user`, `password`, `nama_lengkap`, `email`, `level`) VALUES 
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@lokomedia.com', 'admin'),
('damar', 'aae79912250d18756900f742270de7e1', 'Damar Wulan', 'damar@yahoo.com', 'user'),
('joko', '4e5ad0dc4d478726661c8c2b3ea31777', 'Joko Sembung', 'joko@gmail.com', 'user'),
('gadjah', '2e456fdbaadea50686a5809d9c540243', 'Gadjah Mada', 'gadjah@ugm.ac.id', 'user'),
('tingkir', '4075fa58572a92829c0955d6d1adbf5f', 'Joko Tingkir', 'tingkir@hotmail.com', 'user'),
('hayam', 'd44ee182fa3a9d48d99411d7add35571', 'Hayam Wuruk', 'wuruk@lycos.com', 'user');
