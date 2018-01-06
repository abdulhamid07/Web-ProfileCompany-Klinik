-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2017 pada 00.17
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `isi` text,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `judul`, `isi`) VALUES
(1, 'About Us', 'Klinik Cepat Sembuh Ya adalah "Sahabat yang peduli kesehatan Anda." Klinik ini didukung oleh staf yang berorientasi pada keselamatan pasien dan teknologi medis modern.\r\n \r\n\r\nKlinik ini memiliki tujuan untuk menjadi klinik pilihan bagi masyarakat kita melalui kerjasama yang kuat kita dengan dokter terkenal kami, budaya yang berfokus pelayanan pasien, sistem komputer terpadu dan harga yang kompetitif.\r\n\r\nUntuk mencapai hasil maksimal, perencanaan gedung dan tata letak dirancang oleh arsitek Australia, dibawah pengawasan langsung Tim Konsultan Singapura yang juga mengelola Singapore General Hospital, salah satu rumah sakit terbesar di Singapura.\r\n\r\nUpaya untuk terus mempromosikan budaya kerja sama di klinik kami diantaranya dengan sering memberikan pelatihan kepada staf medis, perawat dan paramedis Klinik Cepat Sembuh Ya juga dikirim ke luar negeri untuk pendidikan khusus, antara lain ke Singapore General Hospital (SGH).'),
(2, 'VISI', 'Menjadi Klinik pilihan di Indonesia yang senantiasa berupaya meningkatkan standar mutu profesional dan memenuhi harapan pasien, dokter, karyawan serta masyarakat pada umumnya.'),
(3, 'MISI', 'Memberikan pelayanan kesehatan yang berkualitas tinggi sesuai dengan harapan pelanggan / pasien.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('a','u') NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` text NOT NULL,
  `logout` varchar(20) NOT NULL,
  `status` varchar(3) NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `level`, `ip`, `browser`, `logout`, `status`, `lastlogin`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'u', '::1', 'Mozilla/5.0 (Windows NT 10.0; rv:51.0) Gecko/20100101 Firefox/51.0', 'no', 'on', '2017-02-18 15:58:49'),
(2, 'Abdul Hamid', 'hamid', '37fff357c237d67f2365eab6706bc898', 'a', '192.168.137.92', 'Mozilla/5.0 (Linux; U; Android 4.4.4; en-gb; MI 4LTE Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/42.0.0.0 Mobile Safari/537.36 XiaoMi/MiuiBrowser/2.1.1', '2016-10-11 17:51:37', 'off', '2016-10-11 17:51:32'),
(5, 'Endra Setiawan', 'endra', 'e5f35523181f285e31bb6d2538989156', 'a', '115.178.235.178', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 'no', 'on', '2016-09-04 09:04:38'),
(7, 'username', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'u', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_seo` varchar(150) NOT NULL,
  `desk` text NOT NULL,
  `tgl` date NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`no`, `img`, `judul`, `judul_seo`, `desk`, `tgl`, `admin`) VALUES
(2, '72fengho1.jpg', '[Artikel] Mengenal Metode Pencucian Dry Cleaning', 'artikel-mengenal-metode-pencucian-â€œdry-cleaningâ€', '<p>Anda yang sering melalukan pencucian di binatu tentu saja tak asing lagi dengan istilah&nbsp;<em>laundry</em>&nbsp;dan<em>dry clean.</em>&nbsp;Selama ini banyak orang mengira mencuci dengan cara&nbsp;<em>dry cleaning</em>&nbsp;adalah suatu teknologi mencuci kering tanpa cairan apa pun. Sepengetahuan mereka, mencuci dengan cara ini relatif lebih mahal dengan harapan hasil cuciannya jadi lebih bersih ketimbang&nbsp;<em>laundry</em>.</p>\n\n<p>Bagi mereka yang paham, semua kotoran yang disebabkan air sebaiknya juga dicuci dengan air. Hanya saja, tak semua material pakaian bisa dicuci dengan air sehingga harus dicuci melalui proses<em>dry cleaning</em>. Jika memaksakan menggunakan metode&nbsp;<em>laundry</em>, bisa saja pakaian tersebut menciut dan rusak.</p>\n\n<p>Sebenarnya pencucian secara &ldquo;kering&rdquo; ini tidak benar-benar kering karena tetap memerlukan cairan<em>solvent based</em>. Salah satu&nbsp;<em>solvent based</em>&nbsp;yang banyak digunakan di Indonesia adalah PCE (<em>perchloroethylene</em>). Sayangnya banyak pihak yang menganggap PCE kurang ramah lingkungan. Hal ini juga membuat banyak orang berasumsi&nbsp;<em>dry cleaning</em>&nbsp;adalah metode pencucian yang tidak ramah lingkungan.</p>\n\n<p>Pendapat ini tidak sepenuhnya benar karena ramah atau tidaknya proses pencucian<em>&nbsp;dry cleaning</em>terhadap lingkungan sangat bergantung dari teknologi dan detergen yang digunakan untuk menetralkannya. Di Eropa, misalnya, proses pencucian &ldquo;kering&rdquo; mayoritas menggunakan<em>&nbsp;hydrocarbon dry clean machine</em>&nbsp;yang dianggap ramah lingkungan dengan bau yang tidak menyengat karena menggunakan&nbsp;<em>solvent based</em>&nbsp;berupa hidrokarbon.</p>\n\n<p>Bukan hanya itu,<em>&nbsp;solvent based</em>&nbsp;jenis hidrokarbon juga lebih &ldquo;aman&rdquo; digunakan untuk mencuci pakaian yang banyak aksesorinya. Termasuk baju dengan payet yang berkualitas rendah atau baju dan kaos yang bersablon. Oleh karena itu, tak ada salahnya Anda mengenal lebih dekat proses pencucian<em>&nbsp;dry cleaning</em>&nbsp;agar tak ada lagi pakaian yang rusak karena pencucian yang salah. [AYA]</p>\n\n<p>Sumber :&nbsp;</p>\n\n<p><a href="http://infoklasika.print.kompas.com/mengenal-metode-pencucian-dry-cleaning/">http://infoklasika.print.kompas.com/mengenal-metode-pencucian-dry-cleaning/</a></p>\n\n<p><a href="http://suitsandskirtscleaners.com/media/dryclean.jpg">http://suitsandskirtscleaners.com/media/dryclean.jpg</a></p>\n', '2016-09-04', 2),
(3, '57ikat-pinggang-fashion.jpg', '[INFO] Spesial Promo September !', 'info-spesial-promo-september-', '<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus...</p>\n', '2016-09-04', 1),
(4, '43you.jpg', '[Artikel] Memilih Mesin Cuci yang bagus &amp; Awet', 'artikel-memilih-mesin-cuci-yang-bagus-amp-awet', '<p>Salah satu pertimbangan utama dalam memilih sebuah mesin cuci adalah segi keawetannya. Ibu tentu tidak ingin uang yang telah Ibu keluarkan untuk membeli sebuah mesin cuci terbuang begitu saja karena mesin cuci tersebut hanya bertahan dua atau tiga tahun.</p>\n\n<p>Berita baiknya adalah hampir semua merek mesin cuci maupun toko elektronik saat ini telah menawarkan garansi penuh bebas biaya selama satu tahun. Namun, setelah dua atau tiga tahun, garansi tersebut hanya mencakup beberapa komponen tertentu pada mesin cuci. Oleh karena itu, ketika membeli sebuah mesin cuci, pastikan Ibu memilih mesin cuci yang bagus dan awet.</p>\n\n<h2>Merek Mesin Cuci yang Awet</h2>\n\n<p>Walau tidak ada merek mesin cuci yang bisa memberikan jaminan ketahanan antara lima hingga delapan tahun, membeli mesin cuci buatan produsen merek yang tepercaya akan memperkecil kemungkinan mendapatkan mesin cuci berkualitas rendah.</p>\n\n<p>Jadi, sempatkan untuk membaca ulasan mengenai merek-merek mesin cuci tahan lama di berbagai forum diskusi yang dapat diakses online. Ibu juga perlu berhati-hati ketika membeli mesin cuci impor karena belum tentu semua merek memiliki pusat servis di Indonesia. Pastikan sebelum Ibu membelinya.</p>\n\n<p>Berikut ini&nbsp;<a href="https://www.rinso.co.id/perbandingan-mesin-cuci/" target="_blank">beberapa merek mesin cuci</a>&nbsp;yang dapat Ibu jadikan referensi dalam memilih mesin cuci yang bagus dan dapat diandalkan.</p>\n\n<h2>Fitur-Fitur Mesin Cuci Tahan Lama</h2>\n\n<p>Ketika sudah menemukan merek dan model mesin cuci yang Ibu inginkan, pastikan bahwa mesin cuci tersebut memiliki beberapa fitur di bawah ini:</p>\n\n<ul>\n	<li>Bahan tabung mesin cuci bisa terbuat dari plastik, enamel, atau&nbsp;<em>stainless steel</em>.&nbsp;<em>Stainless steel</em>&nbsp;tentu saja merupakan pilihan yang paling baik karena paling awet dan tahan terhadap putaran berkecepatan tinggi. Tabung berbahan plastik juga lebih tahan lama dibandingkan bahan enamel yang lebih mudah berkarat.</li>\n	<li>Banyaknya program yang ditawarkan mesin cuci modern sekarang ini perlu disikapi secara lebih hati-hati. Semakin kompleks pemrograman sebuah mesin cuci, semakin besar pula resiko kerusakannya. Oleh karena itu, pastikan bahwa&nbsp;<a href="https://www.rinso.co.id/tips-mesin-cuci/memahami-pilihan-program-pada-mesin-cuci/" target="_blank">pilihan-pilihan program</a>&nbsp;yang ditawarkan oleh sebuah mesin cuci memang sesuai dengan kebutuhan Ibu, tidak lebih dari itu.</li>\n	<li>Cek apakah mesin cuci pilihan Ibu sudah dilengkapi fitur&nbsp;<em>code error</em>. Jika mesin cuci Ibu rusak, fitur ini menampilkan kode pada layar digital di panel mesin cuci untuk memberitahu kerusakan apa yang terjadi. Misalnya, kode kerusakan pintu mesin cuci adalah E2 untuk merek Sharp, E40 untuk Elextrolux, dan dE untuk LG. Mengenali dan mengatasi kerusakan mesin cuci Ibu sejak awal merupakan langkah sederhana menjaga keawetan mesin cuci.</li>\n</ul>\n\n<p>Mudah-mudahan informasi di atas membantu Ibu dalam menentukan model dan merek mesin cuci yang bagus dan awet untuk keperluan di rumah. Namun, jangan lupa bahwa cara penggunaan dan perawatan mesin cuci di rumah juga penting untuk menjaga keawetan mesin cuci Ibu. Apabila Ibu memiliki saran merek dan model mesin cuci yang bagus dan awet, tuliskan saran tersebut di kotak komentar di bawah ini.</p>\n\n<p>Sumber :&nbsp;</p>\n\n<p><a href="https://www.rinso.co.id/tips-mesin-cuci/panduan-memilih-mesin-cuci-yang-bagus-dan-awet/">https://www.rinso.co.id/tips-mesin-cuci/panduan-memilih-mesin-cuci-yang-bagus-dan-awet/</a></p>\n\n<p><a href="http://www.drawhome.com/wp-content/uploads/2016/04/adorable-laundry-room-design-with-classy-wallpaper-and-elegant-washing-machine-including-purple-chair-beside-window-and-black-white-chess-pattern-floor.jpg">http://www.drawhome.com/wp-content/uploads/2016/04/adorable-laundry-room-design-with-classy-wallpaper-and-elegant-washing-machine-including-purple-chair-beside-window-and-black-white-chess-pattern-floor.jpg</a></p>\n\n<p>&nbsp;</p>\n', '2016-09-04', 2),
(5, '38harajuku.jpg', '[Info] Mengenal Jenis-Jenis Kain', 'info-mengenal-jenisjenis-kain', '<p>Ada banyak sekali jenis-jenis kain yang ada saat ini. Ketika Anda hendak belanja kain maka sebaiknya Anda mepelajari dulu beberapa jenis kain yang umum digunakan sebagai bahan pakaian berikut ini.</p>\n\n<p>Bahan dasar kain katun adalah serat kapas. Jenis kain katun ada 2 jenis yaitu cotton combed dan cotton carded. Cotton combed memiliki tekstur yang lebih halus jika dibandingkan dengan cotton carded. Kain katun biasanya dipakai untuk membuat jenis-jenis pakaian seperti kemeja, kaos, blus, celana dan lain-lain.<br />\nUntuk memahami kekurangan dan kelebihannya bisa kita lihat dari karakteristik kain katun.</p>\n\n<p>&nbsp;</p>\n', '2016-09-04', 1),
(6, '38harajuku.jpg', 'Style Harajuku ', 'Style-Harajuku ', 'Jepang adalah tempat di mana setiap orang adalah individu - tapi dalam kelompok. Jika Anda pergi ke taman pada jam tertentu setiap hari Sabtu, Anda akan melihat ratusan anak laki-laki berpakaian rocks and rollers, menari untuk musik rock and roll ... sangat serius. Maka tidak mengherankan bahwa ketika gadis-gadis ingin menampilkan mode inovatif bahwa tidak ada -seorangpun yang pernah melihat sebelumnya, mereka ingin melakukannya di tempat yang sama, pada waktu yang sama. Dan tempat itu adalah distrik Harajuku di Tokyo.<br />\n<br />\nIstilah &quot;Harajuku Girls&quot; telah digunakan oleh media berbahasa Inggris untuk menggambarkan remaja berpakaian dalam gaya busana yang berada di wilayah Harajuku. mode ini menanamkan beberapa terlihat dan gaya untuk membuat bentuk yang unik dari gaun. Salah satu gaya, Kawaii, menjadi terkenal pada 1990-an. Kawaii menjadi ungkapan populer yang berarti ada sesuatu yang manis atau cantik. Kawaii adalah bentuk resistensi dalam gaya dan budaya yang terkait dengan itu tidak dilihat sebagai menarik oleh generasi tua. Gagasan Kawaii adalah budaya pemuda yang berbeda yang terpisah dari yang tradisional di cyber-punk melihat existence.The mengambil pengaruh dari fashion gothic dan menggabungkan neon dan colors.However metalik, tidak sepopuler itu pada 1990-an.<br />\n<br />\n', '2016-08-07', 1),
(7, '72fengho1.jpg', 'Kejutan Koleksi Elegan ', 'Kejutan-Koleksi-Elegan ', 'Koleksi Hermes terbaru di Paris Fashion Week kental dengan kesan simpel, segar, dan mewah. Di tangan desainer barunya, Christophe Lemaire, koleksi Hermes mampu memukau ratusan tamu undangan yang hadir.<br />\n<br />\nSaat pergelaran, Lemaire mencetuskan ide dengan menyembunyikan para model dalam bilik-bilik ruangan yang hanya diterangi cahaya lampu redup. Setelah itu, model keluar dan berjalan mengitari kursi penonton, kemudian secara acak berhenti di hadapan mereka sembari berpose anggun, lalu kembali berlenggak lenggok di atas panggung.<br />\n<br />\n&ldquo;Saya ingin menciptakan sesuatu yang baru dan segar, menampilkan wajah Hermes yang lebih segar dan penuh kejutan,&rdquo; ucap Lemaire seperti dilansir WWD.<br />\n<br />\nIde pergelaran itu terinspirasi dari pelancong yang mengembara ke tempat-tempat berbeda sambil mendengarkan alunan musik, lalu ada seorang wanita yang datang tiba-tiba, memesona dan cantik.<br />\n<br />\nIbarat penonton, pemandangan seperti itulah yang tertangkap dalam imajinasi. Apa hanya pergelaran yang berbeda? Ternyata tidak.<br />\n<br />\nKejutan juga datang dari koleksi busana, tas, serta aksesori yang dirancang Lemaire. Koleksi busana Hermes lebih bermain pada warna-warna putih, pastel, dan kombinasi warna terang seperti merah, oranye, kuning, dan hijau.<br />\n<br />\nPergelaran dibuka dengan koleksi atasan berwarna putih yang dikombinasi dengan model celana harem dan jaket balon berukuran besar. Selanjutnya ditampilkan pula koleksi gaun tunik dan celana kulit berpotongan lebar dengan tiga strip garis di bagian betis. Ada juga rok dengan detail cutting dan siluet menyamping, serta atasan dari bahan kulit.<br />\n<br />\nAdapun yang menjadi inspirasi dari koleksi tersebut adalah gaun futuristik Yunani di era 1980-an ketika warna putih menjadi warna dominan yang berpadu dengan bahan kulit serta garis lipitan yang tegas memanjang. Sekilas, gaun tersebut terkesan klasik dan monoton. Tapi, perhatian penonton tak hentinya tertuju pada model-model yang berseliweran di depan dan sekeliling mereka.<br />\n<br />\nHanya ada beberapa gaun yang direpresentasikan dengan ekspresi ceria oleh sang model. Oh ya, satu lagi yang menarik, kebanyakan dari mereka mengenakan ikat kepala dari bahan kulit tepat di batas garis poni lurus yang tertata rapi. Lemaire tidak hanya menunjukkan warna putih pada rancangannya.<br />\n<br />\nDia kembali hadir membawa nuansa warna pelangi. Salah satunya koleksi two pieces yang penuh kombinasi dua warna, yakni merah dan biru berupa baju atasan dan rok mini berpadu dengan stocking warna senada.<br />\n<br />\nSelanjutnya, model memamerkan rok mini lipit, kemeja polos, dan jaket berkulit lembut yang bahannya diambil dari bulu domba.<br />\n<br />\nDiikuti oleh model yang mengenakan gaun pendek berwarna oranye berbahan linen dengan variasi sabuk kulit.Gaun ini cukup menarik perhatian karena menampilkan kesan yang unik. Pergelaran berlanjut pada model yang membawa koleksi setelan baju warna hijau berpadu dengan celana pendek warna karamel diikuti gaun cetak bergaya Amerika Indian yang memiliki kantung celana di bagian sisi kanan dan kiri pinggul.<br />\n<br />\nKemudian,ada dua model yang bergantian tampil, salah satunya mengenakan suede shirt warna hijau dengan lengan tiga perempat dipadu rok berbahan kulit warna ungu terong. Sebagian besar koleksi Hermes tersebut coba memadukan antara gaya Yunani klasik dan gaya modern Amerika yang dibalut dengan permainan warnawarni yang selaras.<br />\n<br />\nLemaire mengemas pergelaran Hermes dengan sentuhan yang &ldquo;berjiwa&rdquo; dan filosofi yang kuat. Tidak jauh berbeda dengan identitas Hermes sebelumnya, koleksi Spring/Summer 2012ini menampilkan kreasi yang lebih dinamis dan tentu saja elegan.\n', '2016-08-07', 1),
(8, '43you.jpg', 'Bebaskan Ekspresi Anda dalam Bergaya!', 'bebaskan-ekspresi-anda-dalam-bergaya', 'Perancang ternama dari kiblat fashion dunia, Paris, Yves Saint Laurent<br />\nFashion pernah mengatakan, &ldquo;Fashion come and go, but style is forever&rdquo;.<br />\n<br />\nSederhananya, fashion bisa saja terus berubah, apa pun model dan trennya. Namun soal gaya, akan menetap pada diri seseorang sesuai karakternya. Ketika seseorang merasa nyaman dengan gaya tertentu, yang menjadi ciri khasnya, itu adalah pilihannya.<br />\n<br />\nHal ini pula yang diyakini Melia Prawira, pemilik toko fashion Jabotabek Shopping &amp; Friends. Dalam sebuah talkshow pembukaan pusat belanja dan fashion remaja, Melia mengatakan tidak ada tren fashion tertentu, menjawab pertanyaan apakah tren fashion tahun ini untuk anak muda.<br />\n<br />\nMenurut perempuan yang berkecimpung di dunia fashion selama 9 tahun ini, kecenderungan anak muda saat ini adalah ekspresif dengan dirinya. Model fashion yang muncul di layar kaca dari kiblat mana pun tak lagi jadi acuan mutlak.<br />\n<br />\n&ldquo;Gaya busana anak muda sekarang lebih ekspresif dan senang mengombinasikan warna. Mereka cenderung melihat ke dirinya. Apa yang pantas dan tidak untuk dikenakan,&rdquo; papar Melia.<br />\n<br />\nIstilah korban mode sudah nyaris tak lagi ditemui sekarang ini. Fashion pada anak muda lebih berkarakter dan menunjukkan ciri khas personal, termasuk padupadan warna.<br />\n<br />\nSementara itu fashion stylist Karin Wijaya justru mengakui tren warna ini. Menurutnya, trashing warna pada gaya busana anak muda yang menjadi tren terkini.<br />\n<br />\n&ldquo;Warna cerah yang optimis merepresentasikan semangat optimisme anak muda,&rdquo; kata Karin dalam launching produk sportswear beberapa waktu lalu.<br />\n<br />\nMeski begitu, fashion etnik menjadi tren yang cenderung menonjol pada tahun ini seperti diakui oleh Melia. Batik, menjadi produk lokal yang fashionable dan digemari anak muda. Menurut Melia, batik sebagai fashion muncul sejak budaya lokal mulai diklaim negara tetangga. Jadi, tren etnik batik muncul sebagai bentuk kecintaan karakter khas negeri.<br />\n<br />\nVariasi model dan desain batik pun semakin banyak yang berkarakter khas anak muda. Padupadan batik juga lebih berani. Misalkan, kata Melia, batik tak hanya berpasangan dengan high heels, tapi juga bisa dengan sepatu kets. Aksesori etnik juga pantas dipadukan dengan motif batik yang cenderung kaya warna. Pilihan warna juga tak harus seragam. Jadi, berani mengkolaborasikan ragam model dan desain serta warna, itulah tren fashion saat ini.<br />', '2016-08-07', 1),
(9, '73mencapai-kesuksesan.jpg', 'Motivasi Diri Menjadi yang Terbaik', 'motivasi-diri-menjadi-yang-terbaik', 'Semua orang ingin memiliki kehidupan yang bersemangat dan penuh warna. Dan menurut saya untuk memiliki kehidupan yang kita inginkan, kita harus memiliki mimpi, dan berusaha mewujudkan mimpi itu hingga berhasil. Percayalah, saat yang paling menyenangkan adalah saat proses pencapaiannya. Nah berikut ada kumpulan Kata bijak yang akan memotivasi anda menjadi yang terbaik untuk memperoleh mimpimu.\n1. Jangan pernah memotong sesuatu yang dapat dibuka ikatannya.<br />\n2. Lihatlah masalah sebagai kesempatan untuk pertumbuhan dan penguasaan diri.\n3. Jadilah ahli dalam manajemen waktu.\n4. Nilailah keberhasilanmu dengan menggunakan tolok ukur seberapa banyak engkau menikmati kedamaian, kesehatan, dan kasih sayang.\n5. Jangan tunda pelaksanaan gagasan (ide-ide) yang baik. Kemungkinan ada orang lain yang baru saja memikirkannya juga. Sukses datang kepada orang yang bertindak terlebih dahulu.\n6. Berhati-hatilah terhadap orang yang mengatakan kepadamu betapa ia itu jujur.<br />\n7. Ingatlah bahwa pemenang melakukan apa yang tidak mau dilakukan oleh pecundang.<br />\n8. Carilah peluang, bukan rasa aman. Kapal di pelabuhan memang aman, tetapi pada waktunya bagian bawahnya akan rusak berkarat.<br />\n9. Jalanilah hidupmu sedemikian rupa sehingga tulisan di batu nisanmu dapat berbunyi: &ldquo;Tidak Ada Penyesalan&rdquo;.<br />\n10. Usahakan mencapai keunggulan, bukan kesempurnaan.<br />\n11. Beri orang kesempatan kedua, tetapi jangan kesempatan ketiga.<br />\n12. Belajarlah mengenali hal-hal yang tidak berkaitan, kemudian abaikan!<br />\n13. Jangan lupa, kebutuhan emosional terbesar seseorang adalah untuk merasa dihargai.<br />\n14. Habiskan lebih sedikit waktu untuk membahas siapa yang benar, dan lebih banyak waktu untuk membahas apa yang benar!<br />\n15. Pekerjakan orang yang lebih pandai darimu.<br />\n16. Jangan membakar jembatan, engkau akan heran betapa sering engkau harus menyeberangi sungai yang sama.<br />\n17. Jagalah agar ekspektasi (harapan-harapan) tetap tinggi.<br />\n18. Jangan gunakan waktu dan/atau kata dengan ceroboh, keduanya tidak dapat diperoleh kembali.<br />\n19. Jadilah orang yang berani dan tabah! Sewaktu mengingat kembali kehidupan yang telah lewat, engkau akan lebih menyesali hal-hal yang tidak dilakukan, daripada hal-hal yang telah dilakukan pada masa lalu.<br />\n20. Evaluasi prestasimu berdasarkan standarmu sendiri, bukan standar orang lain.<br />\n21. Berusahalah untuk tetap hidup lebih berarti, dari pada hidup lebih lama.<br />\n22. Jadilah orang yang tegas, walaupun itu berarti engkau kadang-kadang keliru.<br />\n23. Tentukanlah sikapmu, jangan biarkan orang lain menentukannya untukmu.<br />\n24. Lupakan Panitia! Gagasan baru yang mengubah dunia selalu datang dari satu orang yang mau bekerja sama dengan orang lain, bukan melalui upacara-upacara!<br />\n25. Berikanlah upah yang sama untuk pekerjaan yang sama, tanpa memandang hal-hal yang lain.<br />\n26. Jangan biarkan hartamu memilikimu!<br />\n27. Jagalah reputasimu! Reputasi adalah modal yang paling berharga.<br />\n28. Perbaiki prestasimu melalui memperbaiki sikap dan kemampuanmu.<br />\n29. Kerjakan dengan benar pada kesempatan pertama.<br />\n30. Jangan pernah meremehkan kekuatan kata atau perbuatan yang baik.<br />\n31. Jangan takut untuk mengatakan: &ldquo;Saya tidak tahu&rdquo;, &ldquo;Maafkan Saya&rdquo;, &ldquo;Saya yang membuat kesalahan itu&rdquo;, &ldquo;Saya memerlukan bantuan Anda&rdquo;.<br />\n32. Pikiranmu hanya dapat menyimpan satu pikiran pada satu kesempatan, oleh karena itu jadikanlah itu pikiran yang positif dan konstruktif.<br />\n33. Jangan pernah mencabut/mematikan harapan seseorang, mungkin hanya itulah yang dimilikinya!<br />\n34. Sesudah bekerja keras untuk mendapatkan apa yang engkau inginkan, luangkanlah waktu untuk menikmatinya!\n', '2016-08-07', 1),
(10, '57ikat-pinggang-fashion.jpg', 'Ikat Pinggang (Cara Pakai dan Gaya)', 'ikat-pinggang-cara-pakai-dan-gaya', 'Seperti aksesoris lainnya, ikat pinggang dipakai tidak hanya karena fungsinya, tapi juga karena alasan style dan fashion. Belt dapat mengubah pakaian biasa menjadi lebih stylish dalam sekejap. Kenakan belt dengan model berbeda2, maka anda mendapatkan pakaian yang sama dengan gaya yang berbeda untuk beberapa acara.\nAwalnya belt dikenakan di pinggang untuk membentuk pinggang dan menciptakan siluet feminin. Tapi kini ikat pinggang telah bermigrasi ke seluruh torso, di bawah garis dada, ke pinggang, dan bahkan di sekitar pinggul sebagai fashion belt.\nBelt Lebar\nKenakan Belt lebar di bagian terkecil dari torso ~ yaitu di pinggang anda ~ Belt akan memberi bentuk dan menonjolkan lekukan pada tubuh. Untuk pemakaian di pinggang dapat dipilih yang ukuran sedang maupun obi yang oversize. Untuk pemakaian di pinggul pilih yang berukuran tidak terlalu besar.\nAnda bisa mengenakan belt lebar dengan blazer, cardigan, atasan longgar, oversize dress, atau terusan\nTips: Agar lebih nyaman saat dikenakan, untuk pemakaian di pinggang, pilih bahan belt yang lentur dan tidak kaku. yang dapat tahan dan tetap pada tempatnya mengikuti gerakan membungkuk ataupun duduk bahkan apabila dikenakan selama seharian.\nSuka Oversized Belt? Usahakan agar aksesoris lainnya tetap simple.\nUntuk tubuh agak berisi, hindari belt yang terlalu ketat, karena akan membuat tonjolan di atas dan bawah belt. Anda dapat mengenakan jaket atau cardigan di luarnya untuk menutupi nya. Dan pilih belt yang tidak terlalu tebal.Skinny Belts\nIkat Pinggang Skinny adalah salah satu must have accessories saat ini. Dari artikel majalah sampai lookbook, selalu terlihat fashion photo dengan skinny belt.\nSkinny belt cocok digunakan dari di empire waist (bawah garis dada), pinggang, maupun di pinggul.&nbsp; Biasanya terbuat dari kulit, rantai ataupun jalinan tali atau kain, dan karena ukurannya yang kecil kita dapat memilih skinny belt dengan warna-warna terang ataupun shimmering tanpa mendominasi pakaian yang dikenakan.\nTips: Untuk penggunaan di empire waist, belt anda akan memerlukan sedikit bantuan agar tidak melorot. Pastikan ada celah untuk menyelipkan belt anda sehingga akan tetap pada tempatnya.\n\n', '2016-08-07', 1),
(11, '51all.png', 'clash of royale', 'clash-of-royale', '<p>Game strategi yang populer sejak tahun 2012, game yang <strong>asik</strong></p>\r\n', '2016-12-13', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bls_comment`
--

CREATE TABLE IF NOT EXISTS `bls_comment` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_comment` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `bls_comment`
--

INSERT INTO `bls_comment` (`no`, `id_comment`, `id_penulis`, `pesan`, `tgl`) VALUES
(1, 26, 1, 'terima kasih komentarnya', '2016-12-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bls_email`
--

CREATE TABLE IF NOT EXISTS `bls_email` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesan` int(11) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bls_email`
--

INSERT INTO `bls_email` (`no`, `id_pesan`, `subjek`, `pesan`, `tgl`) VALUES
(1, 5, 'testing', 'proses develop', '2016-08-11'),
(2, 3, 'good', 'bagus', '2016-08-14'),
(3, 8, 'Abdul Hamid', 'Sama sama bapak', '2016-09-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_blog`
--

CREATE TABLE IF NOT EXISTS `comment_blog` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `komentar` text,
  `id_article` int(11) DEFAULT NULL,
  `tanggal_komen` date DEFAULT NULL,
  `status` enum('D','R') NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `comment_blog`
--

INSERT INTO `comment_blog` (`id_comment`, `nama`, `email`, `komentar`, `id_article`, `tanggal_komen`, `status`) VALUES
(1, 'Abdul Hamid', 'hamyd.abdul6@gmail.com', 'Testing komentar', 3, '2016-12-04', 'D'),
(15, 'hamid', 'hamid@gmail.com', 'pesan', 7, '2016-12-04', 'D'),
(24, 'abdul', 'hamyd@gmail.com', 'kgjgvhj', 4, '2016-12-04', 'D'),
(25, 'Abdul Hamid', 'hamyd.abdul6@gmail.com', 'Testing terakhir', 6, '2016-12-04', 'D'),
(26, 'hamid', 'hamyd@gmail.com', 'pesan lagi', 3, '2016-12-12', 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) DEFAULT NULL,
  `ket` text,
  `icon` varchar(20) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `judul`, `ket`, `icon`) VALUES
(1, 'Head Office', '<p>STMIK AKAKOM YOGYAKARTA</p>\n<p>Jl. Raya Janti No. 143, Karang Jambe, Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55918</p>\n<p>Phone : +0123 456 70 90</p>\n<p>Email : info@akakom.ac.id</p>', ''),
(2, 'Facebook', 'facebook.com/STMIKAKAKOM', 'fa fa-facebook'),
(3, 'Twitter', 'twitter.com/therealakakom', 'fa fa-twitter'),
(4, 'Instagram', 'instagram.com/stmikakakom', 'fa fa-instagram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `foto` varchar(20) NOT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `alamat`, `no_telp`, `spesialis`, `foto`) VALUES
(155410032, 'Afrilla Chitra Adhitya', 'Yogyakarta', '088264143836', 'Anak', '4.png'),
(155410033, 'Devi Ariyana Putri', 'Wonosobo', '081543768575', 'Jantung', '3.jpg'),
(155410041, 'Thomas Prayudhi Triutomo', 'Solo', '089365423487', 'THT', '2.jpg'),
(155410060, 'Gisti Wulandari', 'Kalimantan', '085149763654', 'Umum', '1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(50) NOT NULL,
  `ket` text,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `gambar`, `ket`) VALUES
(1, 'DOKTER12.png', 'Kegiatan donor darah kami merupakan hasil kerja sama PMI Yogyakarta. '),
(2, 'DOKTER8.JPG', 'Kami siap melayani Konsultasi dan memberikan saran kepada masyarakat yang memiliki berbagai macam keluhan. Konsultasi ini tanpa dipungut biaya.'),
(3, 'DOKTER3.JPG', 'kami memiliki Tim kesehatan profesional yang terdiri dari dokter-dokter spesialis.'),
(4, 'DOKTER5.jpg', 'Siap melayani masyarakat dengan semaksimal mungkin, cepat dan teliti.'),
(5, 'DOKTER1.JPG', 'Bekerja sama dan mendiskusi masalah secara bersama. Saling memberi masukan dan melakukan kegiatan konsultasi klinik dengan dokter spesialis klinik.'),
(6, 'DOKTER7.JPG', 'Dokter yang ramah dan bisa membuat pasien anak-anak merasa lebih baik.'),
(7, 'DOKTER2.JPG', 'Sebagai seorang dokter, kami harus menghormati pasien yang lebih Tua dari kita.'),
(8, 'DOKTER10.JPG', 'Seorang dokter menyembuhkan dan alam yang menciptakan kesehatan.'),
(9, 'DOKTER9.JPG', 'Dokter kami diwajibkan menjalankan tugas nya dengan benar. Jika mengalami kesalahan diharuskan mengevaluasikan diri.'),
(10, 'DOKTER11.JPG', 'Lokasi klinik kami sangat strategis dan sangat dekat dengan masyarakat.'),
(11, 'DOKTER4.JPG', 'Kesehatan merupakan salah satu faktor penentu kualitas sumber daya manusia.'),
(12, 'DOKTER6.JPG', 'kami memiliki teknik menangani keluhan pasien. Komunikasi untuk menangani keluhan pasien sangat diperukan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam`) VALUES
(1, 'Senin - Kamis', '08.00 - 15.00'),
(5, 'Jum''at', '08.00 - 10.30'),
(6, 'Sabtu', '08.00 - 14.00'),
(7, 'Minggu', '10.00 - 14.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_praktek`
--

CREATE TABLE IF NOT EXISTS `jadwal_praktek` (
  `id_dokter` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_praktek`
--

INSERT INTO `jadwal_praktek` (`id_dokter`, `id_jadwal`) VALUES
(155410060, 1),
(155410032, 5),
(155410032, 6),
(155410033, 6),
(155410033, 7),
(155410041, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `our_team`
--

CREATE TABLE IF NOT EXISTS `our_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `ket` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `our_team`
--

INSERT INTO `our_team` (`id`, `nama`, `gambar`, `jabatan`, `ket`) VALUES
(1, 'AFRILA CITRA ADHITYA', 'man2.jpg', 'Direktur', 'Tugas Direktur Utama adalah sebagai koordinator, komunikator, pengambil keputusan, pemimpin, pengelola dan eksekutor dalam menjalankan dan memimpin.'),
(2, 'GISTI WULANDARI', 'team-member.jpg', 'CEO', 'CEO yang menjadi pemimpin sejati membuat anggota timnya ingin bekerja dengan semangat meluap yang sama untuk membantu mencapai tujuan perusahaan.'),
(3, 'THOMAS PRAYUDHI', 'client2.png', 'Manager PSDM', 'Merencanakan, mengembangkan dan mengimplementasikan strategi di bidang pengelolaan dan pengembangan SDM, yang menjadi kunci utama dalam sebuah usaha.'),
(4, 'ABDUL HAMID', 'man3.jpg', 'Operational Manager', 'Sesuai dengan nama jabatannya, pada jabatan Operational Manager memiliki tugas utama atas seluruh aktivitas operasional perusahaan, mulai dari pembuatan rencana produksi,memastikan kualitas produk yang dihasilkan.'),
(5, 'DEVI ARIYANA PUTRI', 'team-member.jpg', 'Apoteker', 'Dalam pengelolaan apotek, apoteker senantiasa harus memiliki kemampuan menyediakan dan memberikan pelayanan yang baik, mengambil keputusan yang tepat, kemampuan berkomunikasi antar profesi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL,
  `status` enum('D','R') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`no`, `nama`, `email`, `subjek`, `pesan`, `tgl`, `status`) VALUES
(11, 'abdul', 'abdul32@yahoo.com', 'TES', 'pesan', '2016-12-11', 'D'),
(12, 'hamid', 'hamyd@gmail.com', 'TES', '', '2016-12-12', 'R'),
(13, 'rifan', 'hamyd@gmail.com', 'aref', 'uiguyf', '2016-12-12', 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pel` varchar(30) DEFAULT NULL,
  `ket` text,
  `icon` varchar(20) NOT NULL,
  `aktif` enum('y','n') NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `nama_pel`, `ket`, `icon`, `aktif`) VALUES
(1, 'Antar Obat', 'Dengan langsung memesan melalui nomer yang tersedia, gratis layanan antar apabila pembelian obat lebih dari Rp. 200.000.', 'fa fa-truck', 'y'),
(2, 'Apotek 24 jam', '<p>Apotek buka selama <em><strong>24 jam</strong></em> untuk mengantisipasi apabila pasien membutuhkan obat dan penanganan darurat sewaktu-waktu.</p>\r\n', 'fa fa-clock-o', 'y'),
(3, 'Pelayanan Ramah', 'Dokter dan petugas kami dengan senang hati melayani keluhan Anda dengan seramah mungkin dan ikhlas', 'fa fa-heart', 'y'),
(4, 'Dokter Profesional', '<p>Dokter <strong>berpengalaman </strong>yang akan memeriksa Anda, sudah terjamin profesional dalam menangani keluhan pasien.</p>\r\n', 'fa fa-user-md', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('127.0.0.2', '2009-09-11', 1, '1252681630'),
('127.0.0.1', '2009-09-11', 17, '1252734209'),
('127.0.0.3', '2009-09-12', 8, '1252817594'),
('127.0.0.1', '2009-10-24', 8, '1256381921'),
('127.0.0.1', '2009-10-26', 108, '1256620074'),
('127.0.0.1', '2009-10-27', 52, '1256686769'),
('127.0.0.1', '2009-10-28', 124, '1256792223'),
('127.0.0.1', '2009-10-29', 9, '1256828032'),
('127.0.0.1', '2009-10-31', 3, '1257047101'),
('127.0.0.1', '2009-11-01', 85, '1257113554'),
('127.0.0.1', '2009-11-02', 11, '1257207543'),
('127.0.0.1', '2009-11-03', 165, '1257292312'),
('127.0.0.1', '2009-11-04', 59, '1257403499'),
('127.0.0.1', '2009-11-05', 10, '1257433172'),
('127.0.0.1', '2009-11-11', 13, '1258006911'),
('127.0.0.1', '2009-11-12', 10, '1258048069'),
('127.0.0.1', '2009-11-14', 14, '1258222519'),
('127.0.0.1', '2009-11-17', 2, '1258473856'),
('127.0.0.1', '2009-11-19', 16, '1258635469'),
('127.0.0.1', '2009-11-21', 4, '1258863505'),
('127.0.0.1', '2009-11-25', 3, '1259216216'),
('127.0.0.1', '2009-11-26', 1, '1259222467'),
('127.0.0.1', '2009-11-30', 11, '1259651841'),
('127.0.0.1', '2009-12-02', 9, '1259746407'),
('127.0.0.1', '2009-12-03', 17, '1259906128'),
('127.0.0.1', '2009-12-10', 69, '1260423794'),
('127.0.0.1', '2009-12-12', 26, '1260560082'),
('127.0.0.1', '2009-12-11', 5, '1260508621'),
('127.0.0.1', '2009-12-13', 8, '1260716786'),
('127.0.0.1', '2009-12-14', 9, '1260772698'),
('127.0.0.1', '2009-12-15', 9, '1260837158'),
('127.0.0.1', '2009-12-16', 7, '1260905627'),
('127.0.0.1', '2009-12-17', 48, '1261026791'),
('127.0.0.1', '2009-12-18', 11, '1261088534'),
('127.0.0.1', '2009-12-22', 3, '1261477278'),
('127.0.0.1', '2009-12-25', 2, '1261686043'),
('127.0.0.1', '2009-12-26', 29, '1261835507'),
('127.0.0.1', '2009-12-27', 7, '1261920445'),
('127.0.0.1', '2009-12-28', 3, '1261965611'),
('127.0.0.1', '2009-12-29', 21, '1262024011'),
('127.0.0.1', '2009-12-30', 24, '1262146708'),
('127.0.0.1', '2010-01-01', 12, '1262286131'),
('127.0.0.1', '2010-01-03', 38, '1262529325'),
('127.0.0.1', '2010-01-12', 89, '1263264291'),
('127.0.0.1', '2010-01-14', 54, '1263482540'),
('127.0.0.1', '2010-01-15', 57, '1263506901'),
('127.0.0.1', '2010-02-11', 30, '1265831568'),
('127.0.0.1', '2010-02-13', 2, '1266032303'),
('127.0.0.1', '2010-02-14', 3, '1266115347'),
('127.0.0.1', '2010-02-15', 15, '1266195235'),
('127.0.0.1', '2010-02-18', 1, '1266499945'),
('127.0.0.1', '2010-02-22', 5, '1266856332'),
('127.0.0.1', '2010-02-25', 46, '1267103145'),
('127.0.0.1', '2010-05-12', 10, '1273654648'),
('127.0.0.1', '2010-05-16', 195, '1274026185'),
('127.0.0.1', '2010-05-17', 2, '1274029517'),
('127.0.0.1', '2010-05-19', 1, '1274279374'),
('127.0.0.1', '2010-05-27', 16, '1274967085'),
('127.0.0.1', '2010-05-30', 4, '1275192045'),
('127.0.0.1', '2010-05-31', 13, '1275271939'),
('127.0.0.1', '2010-06-05', 1, '1275676869'),
('127.0.0.1', '2010-06-06', 2, '1275842170'),
('127.0.0.1', '2010-06-15', 3, '1276572924'),
('127.0.0.1', '2010-06-22', 206, '1277221605'),
('127.0.0.1', '2010-08-02', 17, '1280754660'),
('127.0.0.1', '2010-08-20', 7, '1282285305'),
('127.0.0.1', '2010-08-30', 21, '1283185430'),
('127.0.0.1', '2010-08-31', 53, '1283207455'),
('127.0.0.1', '2010-09-02', 133, '1283402651'),
('127.0.0.1', '2010-09-05', 35, '1283702206'),
('127.0.0.1', '2010-09-13', 10, '1284370291'),
('127.0.0.1', '2010-09-17', 12, '1284662303'),
('127.0.0.1', '2010-09-22', 2, '1285091212'),
('127.0.0.1', '2010-09-23', 47, '1285254071'),
('127.0.0.1', '2010-09-26', 32, '1285512806'),
('127.0.0.1', '2010-09-27', 51, '1285532379'),
('127.0.0.1', '2010-10-14', 10, '1287074605'),
('127.0.0.1', '2010-10-15', 6, '1287150179'),
('127.0.0.1', '2010-10-16', 2, '1287170167'),
('127.0.0.1', '2010-10-20', 145, '1287636778'),
('127.0.0.1', '2010-10-21', 177, '1287721183'),
('127.0.0.1', '2010-10-22', 63, '1287752692'),
('127.0.0.1', '2011-04-02', 7, '1301680774'),
('127.0.0.1', '2011-04-03', 8, '1301801389'),
('127.0.0.1', '2011-04-05', 16, '1301977471'),
('127.0.0.1', '2011-04-09', 44, '1302288659'),
('127.0.0.1', '2011-04-10', 129, '1302370890'),
('127.0.0.1', '2011-04-11', 34, '1302488765'),
('127.0.0.1', '2011-04-17', 8, '1302998534'),
('127.0.0.1', '2011-04-22', 5, '1303479879'),
('127.0.0.1', '2011-04-23', 36, '1303534207'),
('127.0.0.1', '2011-05-26', 144, '1306423419'),
('127.0.0.1', '2011-05-27', 59, '1306467737'),
('127.0.0.1', '2011-05-28', 57, '1306588828'),
('127.0.0.1', '2011-05-29', 8, '1306649171'),
('127.0.0.1', '2011-05-30', 18, '1306736260'),
('::1', '2015-12-20', 41, '1450620785'),
('::1', '2015-12-21', 23, '1450699723'),
('::1', '2016-01-01', 1, '1451650787'),
('::1', '2016-01-23', 2, '1453562200'),
('::1', '2016-07-30', 223, '1469898412'),
('::1', '2016-07-31', 27, '1469951848'),
('192.168.43.1', '2016-07-31', 3, '1469950617'),
('::1', '2016-08-03', 12, '1470232574'),
('::1', '2016-08-04', 49, '1470330394'),
('::1', '2016-08-05', 85, '1470401780'),
('192.168.43.1', '2016-08-05', 2, '1470393242'),
('::1', '2016-08-06', 47, '1470505502'),
('::1', '2016-08-07', 281, '1470590938'),
('::1', '2016-08-08', 35, '1470671356'),
('::1', '2016-08-09', 87, '1470762562'),
('192.168.43.1', '2016-08-09', 2, '1470713497'),
('::1', '2016-08-10', 60, '1470809175'),
('192.168.43.1', '2016-08-10', 5, '1470801184'),
('192.168.43.45', '2016-08-10', 2, '1470801326'),
('::1', '2016-08-11', 313, '1470921006'),
('192.168.43.1', '2016-08-11', 2, '1470922278'),
('::1', '2016-08-12', 19, '1471020973'),
('::1', '2016-08-13', 90, '1471102790'),
('::1', '2016-08-14', 10, '1471182738'),
('::1', '2016-08-15', 18, '1471257413'),
('::1', '2016-08-16', 42, '1471360910'),
('::1', '2016-09-03', 1, '1472908905'),
('115.178.253.47', '2016-09-03', 11, '1472919030'),
('115.178.235.166', '2016-09-04', 13, '1472955822'),
('114.121.238.247', '2016-09-04', 4, '1472970733'),
('115.178.235.178', '2016-09-04', 76, '1472978966'),
('110.76.151.52', '2016-09-06', 1, '1473130321'),
('63.141.231.211', '2016-09-28', 1, '1475064318'),
('::1', '2016-10-01', 3, '1475333851'),
('::1', '2016-10-03', 12, '1475516533'),
('::1', '2016-10-04', 8, '1475557674'),
('::1', '2016-10-06', 31, '1475729047'),
('::1', '2016-10-07', 7, '1475852566'),
('::1', '2016-10-08', 36, '1475937290'),
('::1', '2016-10-09', 1, '1476013511'),
('::1', '2016-10-10', 2, '1476113736'),
('192.168.137.92', '2016-10-11', 1, '1476182886'),
('::1', '2016-12-01', 1, '1480600316'),
('::1', '2016-12-03', 1, '1480761812'),
('::1', '2016-12-04', 37, '1480871316'),
('::1', '2016-12-11', 2, '1481465693'),
('::1', '2016-12-13', 57, '1481651131'),
('::1', '2017-02-19', 10, '1487500520');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`no`, `nama`, `email`, `pesan`, `tgl`) VALUES
(1, 'NGUDI PRAYITNO', 'hamyd.abdul6@gmail.com', 'CENTRAL LAUNDRY memberikan solsi dengan hasil harga & ketepatan waktu sesuai dengan komitmentnya.', '2016-12-04'),
(2, 'SUGENG', 'hamyd.abdul6@gmail.com', 'Service & Kualitas CENTRAL telah kami rasakan benar-benar berbeda dengan yang lain. Untuk itulah kami kembali mempercayakan semua urusan laundry hotel kepada CENTRAL', '2016-12-01'),
(3, 'BETA RUDYANTO', 'hamyd.abdul6@gmail.com', 'Kami telah menjalin kerjasama selama selama 8 Tahun dengan CENTRAL LAUNDRY dan sampai saat ini berjalan dengan baik, tepat waktu dengan hasil yang sesuai standar hotel kami.', '2016-11-23'),
(4, 'NY. LIPURSARI', 'hamyd.abdul6@gmail.com', 'Kami mengadalkan CENTRAL LAUNDRY untuk house linen & guest laundry ketika terjadi trouble pada operasional laundry kami.selama ini berjalan dengan baik dan terjada sesuai dengan standar kami.', '2016-11-30'),
(5, 'R.Aj.LUPITASARI HADIWINOTO', 'hamyd.abdul6@gmail.com', 'Saya selalu mempercayakan & menggunakan CETRAL untuk urusan dry cleaning & laundry.CENTRAL selalu menjadi pilihan utama saya.', '2016-11-10'),
(6, 'AMERICAN - HOLLAND CRUISE', 'hamyd.abdul6@gmail.com', 'Penujukan CENTRAL sebagai tempat pelatihan / Training tenaga ahli laundry untuk hotel & kapal Pesiar Internasional.', '2016-11-07'),
(7, 'abdul', 'abdul32@yahoo.com', 'iwugiwug', '2016-12-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
