-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 10:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `telepon`) VALUES
(1, 'arya', 'admin', 'Arya Aditiya', '089650576665'),
(6, 'deni', 'admin', 'Den-El', '02102010201');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jml_hlm` varchar(10) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `berat` varchar(10) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`isbn`, `judul`, `jml_hlm`, `penerbit`, `tgl_terbit`, `berat`, `deskripsi`, `harga`, `kategori`, `gambar`) VALUES
('  9786020613819', 'Ayo Mewarnai Tsum Tsum', '24', 'Gramedia Pustaka Utama', '2018-11-26', '0.77', 'Disney Tsum Tsum yang imut dan lucu kini berkumpul lagi ! Ayo mewarnai semua teman lucumu yang bisa ditumpuk-tumpuk ini. Dengan bonus stiker-stiker lucu, kamu pasti suka !', '38000', 'Anak-anak', '01122018160010img342__w200_hauto.jpg'),
('  9786024074548', 'Cara Cepat Dan Mudah Belajar Bahasa Arab', '548', 'Laksana', '2018-11-30', '0.564', 'Sudah mencoba beragam metode, namun tetap saja tidak bisa berbahasa Arab? Atau, Anda tidak kunjung pintar, padahal sudah berbulan bulan mengikuti kursus arab? Pengen mahir bahasa Arab secepat kilat ? Tenang, jangan kawatir. Segera saja pelajari buku ini hingga tuntas. Di dalamnya, di kupas secara mendalam ihwal metode dan trik cepat dan mudah belajar bahasa Arab secara autodidak. Alhasil, bersama buku ini, Anda dapat belajar bahasa Arab sendiri dirumah tanpa kursus, bahkan tidak perlu mendatangi guru privat. Buku ini sengaja disusun dan disajikan dengan sangat sistematis agar mudah dipahami serta jauh dari kesan rumit dan ruwet. Plusnya lagi, buku ini sudah dilengkapi dengan kamus pintar tiga bahasa, yakni Arab, Inggris,dan Indonesia. Tak pelak, bahasa Arab bisa Anda tebas secepat kilat. Selamat belajar !', '120000', 'Kamus', '011220181526019786024074548_cepat_dan_mudah_belajar_bahasa_arab__w200_hauto.jpg'),
('  9786025454387', 'Kamus Jepang: Master Pocket Update Terlengkap', '784', '  Solusibuku.Com', '2018-11-20', '0.45', 'Buku ini merupakan seri kamus saku Bahasa Jepang yang terlengkap dan terbaru. Sudah memuat kosakata serapan terbaru sehingga isinya sangat lengkap. Dilengkapi aplikasi kamus hafalan kosakata play on android. dilengkapi juga video tutorial belajar bahasa asing.', '85000', 'Kamus', '011220181529009786025454387_Kamus-Jepng_Master-Pocket-Update-Terlengkap__w200_hauto.jpg'),
(' 9786020280035', 'Marvel Avenger : Serangan Android', '32', 'Elex Media Komputindo', '2016-04-20', '0.1', 'Buku aktivitas avengers kali ini menyajikan komik pertarungan para avengers dengan master of evil yang menggunakan robot ultimo untuk mengalahkan para avenger. Kisah dalam komik ini merupakan kelanjutan komik dari buku aktivitas yang terbit sebelumnya.', '25000', 'Komik', '28112018070754marvel avenger.jpg'),
(' 9786020291079', 'One Punch Man', '177', 'Elex Media Komputind', '2016-08-10', '0.2', '1 pukulan mematikan! Saitama pun menjadi hero yang bisa mengalahkan monster mengerikan hanya dengan 1 pukulan. Karena tidak puas, ia terus mencari lawan terkuat yang bisa dihadapinya dengan tidak hanya oleh 1 pukulan. Berhasilkah ia menemukannya? Mari kita ikuti petualangan Saitama yang seru dan kocak!', '25000', 'Komik', '19112018055609one-punch-man-1.jpg'),
('9786020385310', 'Metode Praktis Belajar Bahasa Prancis', '268', 'Gramedia Pustaka Utama', '2018-05-14', '0.3', 'dengan buku ini kali dapa belajar bahasa perancis dengan mudah, karena terdapat metode-metode yang mudah dimengerti', '115000', 'Kamus', '01122018154037ID_MPBBP2018MTH05MPBBP__w200_hauto.jpg'),
('9786020386485', 'Kamus Pelajar: Inggris - Indonesia, Indonesia - Inggris', '584', 'Gramedia Pustaka Utama', '2018-07-09', '0.83', 'Kamus Pelajar Inggris - Indonesia, Indonesia - Inggris ini disusun sesuai dengan kebutuhan pelajar sekolah dasar dan sekolah menengah - bermanfaat untuk belajar di sekolah, membaca buku, sampai berwisata ke luar negeri.\r\n\r\n-Mencangkup ribuan entri\r\n-Dilengkapi dengan kelas kata & turunan\r\n-Memuat definisi arti yang singkat, jelas dan cukup lengkap\r\n-Diberikan contoh penggunaan dalam bentuk frasa dan kalimat\r\n-Dilengkapi dengan ulasan tentang tenses, irregular verbs, writting letters, dan sebagainya.', '128000', 'Kamus', '011220181537389786020386485_Kamus-Pelajar__w200_hauto.jpg'),
('9786020444963', 'Asean Journey', '224', 'Elex Media Komputindo', '2017-08-28', '0.13', 'Bagi penggemar belanja, ASEAN tak kalah menarik. Beberapa kota di ASEAN seperti Bangkok, Singapura, Kuala Lumpur, dan Chiang Mai banyak menawarkan tempat belanja yang menyenangkan. ASEAN sangat memungkinkan ditempuh melalui jalur darat dan udara. Hanya dalam beberapa jam, pengunjung bisa menginjakkan kaki ke Malaysia dengan bus antarkota dari Singapura. Buku ini menyajikan destinasi wisata, belanja, aneka kuliner, dan tentunya perjalanan keliling ASEAN melalui jalur darat maupun udara beserta tip praktis dan ekonomis saat menjelajahi ASEAN.', '48000', 'Travel', '291120180403439786020444963_asean-journey__w200_hauto.jpg'),
('9786020446592', '50 Best of Sumatera', '178', 'Elex Media Komputindo', '2017-09-11', '0.13', 'Pulau Sumatera yang terletak di bagian barat kepulauan Indonesia, merupakan pulau keenam terbesar di dunia. Pulau ini juga pernah dikenal pula dengan nama lain seperti Pulau Perca, Andalas, atau Swarnadwipa (bahasa Sanskerta, berarti "pulau emas"). Seperti pulau-pulau lainnya di Indonesia, pulau ini menyimpan kekayaan yang sangat luar biasa. 50 destinasi terbaik di Sumatera ini adalah destinasi pilihan yang wajib Anda ketahui dan eksplor jika suatu saat Anda mengunjungi pulau terbarat Indonesia ini.', '44000', 'Travel', '291120180400329786020446592_50-best-of-sumatera__w200_hauto.jpg'),
('9786020449227', 'Cerdas Keliling Eropa', '200', 'Elex Media Komputindo', '2017-12-18', '0.12', 'Meliputi pembahasan dari berbagai destinasi di Eropa dari yang sering diknjungi oleh turis seperti Amsterdam, Berlin, dan Roma sampai dengan yang cukup eksotis seperti Riga dan Ljubjana, buku ini harus Anda miliki apabila Anda ingin menjelajahi banyak negara di benua Eropa. Dilengkapi dengan panduan tempat yang harus Anda kunjungi, kuliner yang sebaiknya Anda coba, dan tip-tip yang berguna untuk mengindari jebakan turis yang ada di berbagai kota. Anda, seperti layaknya penulis, akan bisa berkeliling Eropa dengan bujet yang sangat terbatas.', '48000', 'Travel', '291120180405299786020449227_Cerdas-Keliling-Eropa__w200_hauto.jpg'),
('9786020449524', 'Melancong Irit ke Iran', '312', 'Elex Media Komputindo', '2017-12-12', '0.125', 'Rangkuman cerita perjalanan penuh warna di Iran tersaji di buku ini. Mulia dari menapak-tilas jejak revolusi Islam Iran di tahun 1979, mengunjungi artefak peninggalan penganut Zoroaster, melongok sisa-sia kejayaan Persepolis, bahkan juga sempat berziarah ke makam Hafez sang penyair Pesia legendaris. ', '78000', 'Travel', '291120180359049786020449524_MELANCONG-IRIT-KE-IRAN__w200_hauto.jpg'),
('9786020451473', 'Journey in Berlin', '128', 'Elex Media Komputindo', '2017-12-27', '0.11', 'Berlin memiliki destinasi wisata yang menarik untuk dikunjungi. Beberapa faktor yang membuat wisatawan tertarik untuk berkunjung di antaranya adalah wisata sejarah dan budaya, pemandangan alam, serta kecanggihan teknologi. Sistem transportasi yang maju dan terintegrasi juga merupakan salah satu alasan wisatawan untuk berkunjung. Buku ini berisi panduan untuk berwisata ke Berlin mulai dari contoh itinerary, maskapai penerbangan, sistem transportasi dan penginapan serta kosakata dan percakapan sederhana bahasa Jerman. Semua dibahas dengan jelas sehingga memudahkan pembaca yang ingin berkunjung ke Berlin. ', '38000', 'Travel', '29112018040730ID_JIB2018MTH06JIB__w200_hauto.jpg'),
('9786020483467', 'Belajar Sendiri Desain 3D Rumah dengan Google Sketchup', '212', 'Elex Media Komputindo', '2018-09-24', '0.3', 'Buku ini akan memandu Anda langkah demi langkah dalam membuat desain 3 dimensi rumah yang cantik, mulai dari mendesain denah rumah, membuat dinding, mendesain bukaan pintu dan jendela, serta mendesain atap rumah. Setiap tahapan akan dijelaskan secara sederhana dan berurutan sehingga mudah dipahami dan dapat langsung diaplikasikan di rumah. Setelah proses membuat desain selesai, tahapan untuk menyempurnakan desain adalah proses rendering menggunakan Vray for SketchUp. Tahapan ini sangat penting karena tahapan ini bertujuan untuk menjadikan tampilan desain rumah terlihat nyata dan realistik. ', '54000', 'Teknologi', '281120181635279786020483467_Belajar-Sendi__w200_hauto.jpg'),
('9786020483559', '12 Jurus Edit Foto Digital dengan Photoshop CC 2018', '208', 'Elex Media Komputindo', '2018-09-24', '0.3', 'Fotografer dan editor foto wajib membaca buku yang mengupas 12 jurus editing foto menggunakan Adobe Photoshop CC 2018 ini. Kedua belas jurus itu adalah: Memilih Foto, Komposisi dan Lensa, Temperatur Cahaya, Koreksi Warna, Koreksi Cahaya, Histogram, Dodge dan Burn Tool, Editing Foto, Blur, Seleksi, Quick Mask, Mencetak Foto Setelah membaca materi yang disajikan, foto yang indah baik dari segi pewarnaan, cahaya, maupun komposisi, akan bisa Anda peroleh dengan mudah dan murah!', '66000', 'Teknologi', '281120181632049786020483559_12-Jurus-Edit__w200_hauto.jpg'),
('9786020483955', '101+ Pengetahuan Bikin Kamu Mahir IT', '280', 'Elex Media Komputindo', '2018-10-08', '0.35', '101+ Pengetahun Bikin Kamu Mahir IT ini berisi kumpulan pengetahuan praktis dan paling penting dalam dunia IT. Berdasarkan pengalaman mengajar selama 13 tahun serta profesi sebagai IT Manager selama 8 tahun, maka dirangkum sebuah buku yang berisi pengetahuan yang tidak akan Anda dapatkan sekedar belajar sendiri atau di bangku kuliah. ', '64000', 'Teknologi', '281120181633479786020483955_101-Pengetah__w200_hauto.jpg'),
('9786020484563', 'Kupas Tuntas Rumus & Fungsi Excel 2007, 2010, 2013, 2016', '432', 'Elex Media Komputindo', '2018-10-15', '0.5', 'Di dalam buku ini akan dibahas step-by-step cara menggunakan formula dan fungsi yang terdapat di dalam Excel. Terdapat sebanyak 296 fungsi yang akan dikupas secara detail sehingga kita benar-benar ahli dalam menggunakannya. ', '89000', 'Teknologi', '281120181625589786020484563_Kupas-Tuntas-Rumus--Fungsi-Excel-2007-2010-2013-2016__w200_hauto.jpg'),
('9786020485096', 'Akame Ga Kill', '248', 'Elex Media Komputind', '2017-11-07', '0.11', 'Tatsumi datang ke ibukota dengan tujuan sukses berkarier dalam militer di sana dan menolong desanya dari kemiskinan. Namun, pertemuannya dengan Akame dan Leone, anggota kelompok pembunuh bayaran Night Raid, mengubah hidupnya secara total! Kekagumannya pada ibukota pun terkikis setelah melihat sisi busuk ibukota yang sesungguhnya. Tatsumi pun akhirnya turut masuk ke Night Raid dengan tekad mengubah kerajaan.', '30000', 'Komik', '19112018061242Akame ga KILL.jpg'),
('9786020485225', '20 Kisah Pembentuk Karakter Anak', '119', 'Elex Media Komputindo', '2018-11-19', '0.265', 'Peran Ayah Bunda dalam membentuk karakter anak sangat penting. Apalagi di era yang terus berkembang seperti saat ini. Kebanyakan anak-anak lebih suka mendengar cerita atau membaca cerita dengan tampilan gambar yang menarik. Nah, dalam buku ini penulis menyajikan 20 cerita yang bisa membentuk karakter anak dengan kisah sehari-hari ataupun fabel (cerita binatang). Selain itu, penulis juga menuliskan pesan-pesan yang terkandung di setiap cerita sehingga memudahkan anak-anak untuk memahami hikmah dari masing-masing cerita.', '94000', 'Anak-anak', '011220181612589786020485225_20_kisah_pembentuk_karakter_anak__w200_hauto.jpg'),
('9786020485669', 'Step by Step MS SQL Server', '256', 'Elex Media Komputindo', '2018-10-05', '0,39', 'MS SQL Server dapat digunakan untuk membuat aplikasi berbasis database. Apabila Anda banyak merancang aplikasi-aplikasi yang ditujukan untuk berjalan di platform MS Windows, Anda perlu mengenal dan menguasai MS SQL Server. Buku ini membantu Anda memahami bagaimana menggunakan MS SQL Server untuk mengelola database mulai dari pembuatan hingga konsep CRUD (Create, Read, Update, and Delete). Agar Anda bisa membuat aplikasi utuh berbasis database, maka di akhir bab disertakan contoh kasus lengkap dari awal hingga akhir pembuatan aplikasi tersebut. \r\nUntuk keperluan pembuatan aplikasi, materi disajikan menggunakan Visual Basic .NET. Topik yang dibahas meliputi cara menginstal MS SQL Server, Visual Studio, menggunakan statement SQL, konsep database, dan pembuatan aplikasi secara langsung. Diharapkan setelah membaca buku ini, pemahaman Anda tentang pemrograman database menggunakan MS SQL Server semakin bertambah.\r\n', '59000', 'Teknologi', '28112018071328Step_by_Step_MS_SQL_Server.jpg'),
('9786020485997', 'Menjadi Web Entrepreneur, Siapa takut?', '296', 'Elex Media Komputindo', '2018-11-12', '0.39', 'Bagi Anda yang ingin memonetize ilmu pembuatan website dengan menjadi seorang Web Entrepreneur buku ini berisikan panduan praktis yang memberikan langkah demi langkah membuat dan menjual jasa pembuatan website. Panduan tersebut berasal dari pengalaman pribadi penulis yang mengelola jasa layanan pembuatan website dan SEO sejak tahun 2007.', '69000', 'Teknologi', '281120181629559786020485997_Menjadi_Web_Entrepreneur_Siapa_Takut___w200_hauto.jpg'),
('9786020486000', 'Membangun Aplikasi dengan PHP, Codeigniter, dan Ajax', '200', 'Elex Media Komputindo', '2018-11-12', '0.39', ' Buku ini memberikan gambaran tentang bagaimana cara membuat aplikasi ujian online dengan PHP, Codeigniter, dan Ajax dari pemahaman konsep, struktur database, koding, juga fitur-fitur pelengkap lainnya yang dapat diimplementasikan pada sekolah-sekolah dan disertai source code yang dapat diunduh pada link/tautan di dalam buku. Pembahasan dalam buku mencakup: â€¢Pemahaman Konsep Ujian Online â€¢Pemahaman Struktur Database Ujian Online â€¢Penggunaan Dasar Codeigniter â€¢Penggunaan Dasar Ajax â€¢Cara Menggunakan Codeigniter dengan Ajax â€¢Pembahasan Tentang Ujian Online â€¢Fitur-Fitur Pelengkap Aplikasi', '69000', 'Teknologi', '28112018162353Membangun_Aplikasi_dengan_PHP_Codeigniter_dan_Ajax.jpg'),
('9786020486192', 'Sains Seru untuk Anak: 1', '116', 'Elex Media Komputindo', '2018-12-03', '0.3', 'Buku ini menuntun anak-anak untuk melakukan percobaan sendiri. Dengan percobaan itu, mereka jadi paham bagaimana proses sebuah benda bergerak, berubah, dan berkerja untuk kepentingan kehidupan.', '80000', 'Anak-anak', '011220181606329786020486192_cov_sains_1a__w200_hauto.jpg'),
('9786020486208', 'Sains Seru Untuk Anak: 2', '116', 'Elex Media Komputindo', '2018-12-03', '0.3', 'Buku ini berisi percobaan-percobaan seru yang bisa dilakukan anak-anak karena percobaannya sederhana dan tidak membahayakan mereka. Dengan percobaan ini, anak-anak jadi memahami bagaimana cara benda berkerja.', '80000', 'Anak-anak', '011220181604569786020486208_cov_sains_2A__w200_hauto.jpg'),
('9786020486246', 'Opredo Cerita Asli Indonesia Vol. 1', '92', 'Elex Media Komputindo', '2018-11-26', '0.29', 'Buku ini berisikan tentang dongeng, legenda, dan cerita rakyat yang sudah tidak asing lagi di kalangan masyarakat Indonesia. Nah, dengan adanya buku ini ini diharapkan cerita rakyat Indonesia bisa tetap dikenal, dilestarikan, dan dikembangkan oleh generasi penerus.', '110000', 'Anak-anak', '011220181555169786020486246_Oopredoo_Cerita_Asli_Indonesia_Vol_1__w200_hauto.jpg'),
('9786020513782', 'Mowgli', '112', 'Gramedia Widiasarana', '2018-10-22', '0,2', 'Ayah Serigala mendengus mencari mangsa. Ia mengendap-endap. Tiba-tiba, ia melihat sesuatu yang bersembunyi di semak belukar. Saat moncongnya mendekat, ia melihat makhluk kecil berkulit merah muda dengan mata besar dan bersinar. Ayah Serigala tahu betul, itu anak manusia. Kisah Mowgli di hutan rimba yang dibesarkan klan serigala ini sangat menarik karena banyak kejadian-kejadian lucu yang dialami Mowgli anak manusia dengan binatang-binatang.', '79000', 'Komik', '19112018053441Mowgli.jpg'),
('9786020616261', '35 Snack Gurih Populer + Step by Step Resep Antigagal Kursus NCC', '204', 'Gramedia Pustaka Utama', '2018-10-15', '0.3', 'Fatmah Bahlwan dan Naturan Cooking Club (NCC) adalah ikon bagi dunia kuliner Indonesia. Resep-resep ciptaan tim solid ini sellau dinatikan para pehobi masak. Karena semua resepnya dijamin antigagal dan tak dipungkiri kelezatannya. Anda dapat buktikan dengan membuat sendiri salah satu resep dari 35 resep snack gurih populer yang ada di buku ini, antara lain: Amrican Risoles, Semar Mendem, Talam Ebi, Sosisi Solo, Panada, Roti Keju, Bitter ballen, Sus Maker, Saomsa, Serabi Oncom, Siomay, dan masih banyak lagi.', '138000', 'Memasak', '2911201803400535 snack gurih.jpg'),
('9786020618142', '50 Resep Masakan Serba Ikan Rendah Karbo', '106', 'Gramedia Pustaka Utama', '2018-10-06', '0.15', 'Ikan merupakan sumber protein yang bagus untuk kesehatan kita. Anak-anak, dewasa, hingga manula pun perlu makan ikan. Ikan termasuk sumber protein yang mudah diperoleh, apalagi Indonesia adalah negara kepulauan dengan segudang koleksi aneka ikan laut, serta masih ditambah lagi jenis ikan air tawar yang melimpah di perairan darat. Karena itu, janganlah bosan mempraktikkan berbagai resep ikan dengan varietas ikan beragam, agar keunggulan nutrisinya bisa bermanfaat bagi keluarga tercinta. Buku ini menyajikan 50 resep masakan serba ikan yang rendah karbo. Resep-resep yang ditampilkan dipilih untuk Anda yang cinta akan ikan dan aman dari karbohidrat tinggi. ', '118000', 'Memasak', '2911201803444450 resep ikan rendah karbo.jpg'),
('9786022130550', 'Bekal Praktis Dan Sehat', '80', 'Kriya Pustaka', '2018-02-21', '0.17', 'Bekal ayah hari ini ke kantor apa ya? Bekal kakak ke sekolah, bekal adik? Wah, rasanya terlalu banyak yang dimasak. Bunda, sekarang tak perlu khawatir menyajikan bekat harian untuk keluarga. Sajikan menu yang semua suka. Buku ini menampilkan bekal sehat dan praktis untuk ke kantor atau sekolah. Menunya bervariasi dan mudah dipraktikkan. Buku ini juga bisa menjadi diari harian Bunda di rumah. Ada video membuat 2 menu yang sehat untuk Bunda di rumah. Pindai QR Code-nya, Bunda. Selamat memasak.\r\nInfo : \r\n', '68000', 'Memasak', '29112018034603bekal praktis dan sehat.jpg'),
('9786023399628', 'Haikyuu!! Volleyball ', '192', 'M & C', '2016-07-09', '0.1', '"Aku bisa terbang!â€ Pada pertandingan voli yang pertama sekaligus terakhir di masa SMP, Shoyo Hinata yang terpesona pada olahraga voli dikalahkan secara telak oleh Kageyama, pemain jenius yang dijuluki â€œRaja Lapanganâ€. Hinata bersumpah untuk membalas dendam, lalu melanjutkan sekolah ke SMA Karasuno. Akan tetapi, Hinata malah bertemu sosok tak terduga di klub voli!"', '35000', 'Komik', '19112018063640haikyuu.jpg'),
('9786023782246', ' Story Telling: Cerita Rakyat Nusantara', '280', 'Wahyumedia', '2018-11-24', '0.38', 'Cerita Timun Emas mengisahkan keluarga miskin yang tidak mempunya anak. Suatu hari, mereka meminta bantuan raksasa. Akhirnya, raksasa itu memberikan seorang anak perempuan dari dalam sebuah timun. Anak ini diberi nama Timun Emas. Setelah Timun Emas dewasa, raksasa ingin mengambilnya untuk dimakan. Namun, Timun Emas berhasil lolos dari kejaran raksasa itu. Bagaimana cara Timun Emas bisa lolos ya? Cerita Timun Emas hanya salah satu cerita menarik dalam buku ini.\r\n\r\nStory Telling Cerita Rakyat Nusantara ini memuat kumpulan cerita pilihan penjuru Nusantara. Cerita yang dihadirkan mempunya pesan moral atau nilai karakter untuk anak. Ilustrasi yang digunakan juga menarik dan penuh warna. Buku ini diharapkan meningkatkan rasa sosial dan emosi. Anak mempunyai kepribadian baik dan kemandirian untuk masa depan.', '125000', 'Anak-anak', '011220181557109786023782246_story_telling_cerita_rakyat_nusantara__w200_hauto.jpg'),
('9786023782253', 'Cake From My Kitchen (Kue Dari Dapur Saya)', '250', 'Wahyumedia', '2018-11-02', '0.59', 'Sebuah kepuasan tersendiri ketika cake hasil buatan mommies menjadi hidangan yang paling ditunggu keluarga. Berbagai resep yang mudah dipraktikkan beserta step by step dalam buku ini siap memandu para mommies membuat cake. ', '149000', 'Memasak', '28112018164617cake my kitchen.jpg'),
('9786023980338', 'Buku Pintar Percakapan Bahasa Arab', '200', 'E Prim', '2018-04-20', '0.2', 'Untuk menguasai dan pintar berbahasa arab dalam waktu yang singkat secara otodidak, buku ini adalah jawabannya. Karena di dalam buku ini tersaji lengkap semua kebutuhan untuk bisa berbahasa arab yang disampaikan dengan praktis, rinci dan gampang dicerna oleh setiap orang yang meliputi semua unsur pengetahuan dasar Bahasa Arab, istilah-istilah sehari-hari, hingga percakapan sederhana sampai dengan yang sulit dalam berbagai situasi dan kondisi dalam kehidupan sehari-hari.', '54000', 'Kamus', '011220181547239786023980338_Buku-Pintar-Percakapan-Bahasa-Arab__w200_hauto.jpg'),
('9786024073626', 'Bisnis Menu Diet Sehat', '228', 'Laksana', '2018-08-09', '0.13', 'Didalam Buku ini akan diajarkan bagaimana Cara berbisnis dengan Menu â€œDiet Sehatâ€ dan Sukses meraup Jutaan Rupiah.', '55000', 'Memasak', '29112018034149bisnis diet sehat.jpg'),
('9786024073671', 'Explore Indonesia!', '208', 'Laksana', '2018-04-23', '0.20', 'Traveling menjadi kebutuhan baru yang menuntut untuk dipenuhi di era masa kini. Tak jarang, orang-orang lebih memilih berbondong-bondong ke luar negeri sebagai tempat tujuan wisata. Padahal, Indonesia menyimpan banyak sekali pesona yang tak kalah mengagumkan. Buku ini hadir sebagai wawasan tentang tempat-tempat di Indonesia yang sangat cocok dijadikan tempat traveling.', '50000', 'Travel', '291120180356039786024073671_Explore-Indonesia__w200_hauto.jpg'),
('9786024260965', '69 Cara Traveling Gratis', '134', 'Benteng Pustaka', '2018-05-18', '0.20', 'Siapa yang suka traveling? Banyak! Siapa yang mau traveling GRATIS? Mau! Emang bisa? Bisa! Kamu baca, nih, caranya di buku ini! Trinityâ€”penulis buku travel terlaris seri "The Naked Traveler"â€”dan sahabatnya Yasmin, yang udah sering traveling keliling dunia tanpa pusing kantong bakal bolong, membagi 69 cara untuk traveling gratis. Dari profesi apa aja yang bisa kamu jalani, hingga siapa yang wajib kamu dekati! Jangan khawatir, buku ini nggak akan menjerumuskanmu untuk ikut hal yang aneh-aneh. Satu yang pasti, buku ini akan menjerumuskanmu untuk semakin cinta traveling, sesering mungkin secara gratis! Berangkaaat!', '78000', 'Travel', '291120180357279786024260965_69-Cara-Traveling-Gratis__w200_hauto.jpg'),
('9786024285883', 'My Hero Academia', '192', 'M & C', '2017-10-04', '0,129', '"Di suatu masa saat sebagian besar orang memiliki kekuatan super yang disebut dengan â€œQuirkâ€. Aku, Izuku Midoriya, seorang penggemar â€œHeroâ€ yang bercita-cita mengikuti jejak Sang Hero Nomor 1 di Dunia, â€œAll Mightâ€, malah divonis tidak memiliki â€œQuirkâ€. Inilah awal ceritaku menuju Hero nomor 1 di dunia! â€œPLUS ULTRAâ€! Lady Hair Shampoo & Treatment Mempercantik dan memperkuat rambut.".', '40000', 'Komik', '19112018053929my-hero-academia-01.jpg'),
('9786024551698', 'Jelajah Rusia dengan Trans Siberia', '372', 'Buana Ilmu Populer', '2017-10-02', '0.24', 'Trans Siberia merupakan salah satu cara paling asyik untuk menjelajah Rusia, negara terluas di dunia. Jalur ini terbentang dari Vladivostok hingga Moskow dan menjadikannya jalur kereta api terpanjang di dunia! Di buku Jelajah Rusia dengan Trans Siberia ini, kita diajak untuk jalan-jalan keliling Rusia, mulai dari Vladiostok, Khabarovsk, Chita, Ula Ude, Slyudyanka, Irkutsk, Lake Baikal (Olkhon Island), Krasnoyarsk, Novosibirsk, Ekaterinburg, Nizhnym Novgorod, Vladimir, Moskow, hingga St. Petersburg.', '114000', 'Travel', '291120180402029786024551698_jelajah-rusia-dengan-trans-siberia__w200_hauto.jpg'),
('9786024802813', 'Seri Pertumbuhan Anak : Aku Takut Gelap', '112', 'm&c!', '2018-11-26', '0.15', 'Aaaaah! Aku takut Korong Korong! Takut sekali! Wang So Shim takut gelap karena Korong Korong akan muncul di tempat gelap. Korong Korong adalah hantu pencuri mimpi yang senang bersembunyi di kolong tempat tidur dan di dalam lemari. Wang So Shim berusaha bercerita kepada Ibu, tetapi Ibu sibuk bekerja hingga larut malam. Wang So Shim berusaha bercerita kepada Pak Guru di sekolah, tetapi Pak Guru hanya tersenyum. Kenapa sih orang dewasa tidak mau mendengarkan ketakutannya? Wang So Shim sangat takut sampai tidak mau pulang ke rumah. Syukurlah ada Pak Polisi yang mau mendengarkan keluhannya. Pak Polisi memberikan sesuatu kepada Wang So Shim untuk melawan ketakutannya pada Korong Korong.', '80000', 'Anak-anak', '031220180219319786024802813_Seri_Pertumbuhan_Anak_Aku_Takut_Gelap__w200_hauto.jpg'),
('9786024832261', 'Ayo, Hemat Energi!', '104', 'Buana Ilmu Populer', '2018-11-19', '0.23', 'Buku ini dibuat untuk membantu orangtua untuk mengajak anak-anaknya dalam melakukan hemat energi. Banyak tema yang diangkat mengenai hemat energi dalam buku ini. Tak lupa, diserta pula tip di setiap cerita dan ragam aktivitas untuk mengetahui pemahaman anak tentang hemat energi.', '92000', 'Anak-anak', '011220181608589786024832261_cover_Ayo_Hemat_EnergiOk__w200_hauto.jpg'),
('9786024832278', 'Ensiklopedia Anak Cerdas: Tubuh', '96', 'Buana Ilmu Populer', '2018-11-19', '0.25', 'Tubuh manusia itu menakjubkan, lho! Semua organ tubuh memiliki fungsinya masing-masing. Dan, ada beberapa anggota tubuh yang memiliki kemampuan unik!. Teknologi yang semakin canggih membuat manusia makin memahami tubuhnya. Teknologi pun membuat manusia mampu mengenali berbagai penyakit sehingga dapat mencari alternatif pengobatan bagi tubuh yang sakit. Zaman sekarang, kita harus rajin merawat tubuh kita agar tetap sehat, kuat, dan bugar!', '135000', 'Anak-anak', '011220181615359786024832278_Tubuh_Manusia__w200_hauto.jpg'),
('9786024832285', 'Ensiklopedia Anak Cerdas: Penemuan', '96', 'Buana Ilmu Populer', '2018-11-19', '0.25', 'Kini, kamu hidup di zaman modern yang semuanya sudah serba praktis. Namun, bisakah kamu bayangkan dulu sebelum ada teknologi modern seperti sekarang ini? Waktu demi waktu, manusia mulai menciptakan barang-barang yang mereka butuhkan pada masa itu. Semakin hari, penemuan itu semakin disempurnakan hingga seperti sekarang ini. Kira-kira bagaimana awal mula penciptaan barang-barang di sekitar kita, ya? Misalnya saja, sikat gigi, pensil, antibiotik, tempat sampah, dan masih banyak lainnya. Penasaran, kan? Yuk, kita pelajari bersama!', '135000', '', '011220181616429786024832285_Penemuan_ZC19p8y__w200_hauto.jpg'),
('9786025006944', 'Kamus Bahasa Jerman: Excellent Dictionary', '448', 'Cemerlang Publishing', '2017-12-06', '0.3', 'Kamus bahasa Jerman ini merupakan upaya kami untuk membantu pelajar, mahasiswa, dan kalangan umum pembaca, semakin mudah dalam menerjemahkan setiap kosakata dalam bahasa Jerman. Disusun secara alpabetis dan mencakup kosakata pilihan dan populer dalam bahasa Jerman. Selain itu, penyusunan kamus ini tentu dapat membantu dan menambah wawasan pembaca dalam berpikir, berekspresi, dan berkomunikasi dalam segala bidang. Akhirnya, semoga kamus ini bisa membantu pembaca untuk mempermudah proses belajar bahasa Jerman.', '68000', 'Kamus', '01122018154956Kamus-Bahasa-Jerman-Excellent-Dictionary__w200_hauto.jpg'),
('9786025134760', 'Simple Master English Coversation', '424', 'Scritto Books', '2018-06-01', '0.25', 'Buku ini berisi :\r\n\r\n- Latihan-latihan percakapan tepat sasaran segala situasi\r\n- Vocabulary Enrichment\r\n- Easy Grammar Focus\r\n- Full Expressions\r\n- Amarican English Idiomatic Expressions\r\n-Formal and Informal English\r\n- Common Differences Of American and British English\r\n- Audio Listening\r\n- Aplikasi Test Toefl Berbasis Android\r\n- E-kamus Bahasa Inggris\r\nSimple Master ini untuk :\r\n- Pelajar SD. SMP, dan SMA\r\n- Mahasiswa semua jurusan\r\n- Guru, Dosen, Pekerja TKI, Wisatawan\r\n- Pembelajar Bahsa tingkat pemula', '50000', 'Kamus', '011220181543439786025134760_Simple-Master__w200_hauto.jpg'),
('9786025479588', 'Buku Pintar Percakapan Bahasa Jepang Sehari-Hari Praktis & Mudah', '186', 'Checklist', '2018-05-01', '0.2', 'Buku ini mengulas beragam percakapan dalam bahasa Jepang, lengkap dengan huruf Jepang, Romaji, dan terjemahannya. Tak hanya itu, buku ini juga membahas berbagai kebudayaan, kebiasaan, dan adat istiadat Jepang serta perbedaanya dengan negara-negara lain. Disusun tahap demi tahap dan mendetail, buku ini sangat cocok bagi anda yang ingin mempelajari bahasa Jepang dengna asyik dan mudah.\r\n\r\n- Pengenalan huruf Jepang (Hiragana, Katakana, Romaji, Kanji)\r\n- Ungkapan sehari-hari dalam bahasa Jepang\r\n- Percakapan saat berlibur\r\n- Percakapan di tempat umum\r\n- Kebudayaan, kebiasaan, dan adat istiadat Jepang', '54000', 'Kamus', '011220181545309786025479588_Buku-Pintar-P__w200_hauto.jpg'),
('978602549640', 'Backpacking: Thailand Malaysia Singapura Di Bawah 2 Juta', '208', 'Histeria', '2017-11-21', '0.21', 'Bagi yang belum pernah backpacking, luar negeri selalu terasa asing dan menakutkan. Tapi kalau tidak mencoba maka tidak akan pernah tahu apakah memang benar menakutkan atau itu semua hanyalah dalam imajinasi kita. Cobalah sesekali melihat ke luar dan cobalah Negara Asia Tenggara terdekat dari Indonesia. ', '54000', 'Travel', '291120180354519786025469640_BACKPACKING-T__w200_hauto.jpg'),
('9786026091567', 'Project PHP : Menyelesaikan Website 30 Juta Secara Profesional', '225', 'Asfa Solustion', '2018-04-01', '0.3', 'Dalam buku ini akan dibahas trik-trik dan langkah menjadi PHP coder menggunakan smarty, berisi berbagai macam studi kasus dalam menguasai logika php dan tak lupa diakhir pembahasan, Anda akan diajak untuk bersama-sama dalam membangun Project PHP senilai 30 juta, lengkap dengan sentuhan bootstrap (responsive web design) pada bonus project yang disertakan dalam buku ini.', '84000', 'Teknologi', '281120181637349786026091567_Project-PHP-M__w200_hauto.jpg'),
('9786026232632', 'Unity Tutorial Game Engine Revisi Kedua', '560', 'Informatika', '2018-04-01', '0.6', 'Unity telah mengokohkan dirinya sebagai game engine handal yang mampu menghasilkan game kelas dunia atau biasa disebut dengan game AAA. dukungan forum yang solid, asset store yang lengkap, serta beragam dukungan pihak ketiga menjadikan unity sebagai pilihan tepat untuk membuat game komersial atau pun media edukasi.', '134000', 'Teknologi', '281120181639259786026232632_Unity-Tutoria__w200_hauto.jpg'),
('9786028517430', 'Kamus Besar Bahasa Indonesia Edisi Lux Index', '703', 'Widya Karya', '2018-11-12', '1.1', 'Didalam kamus ini terdapat banyak kosa kata baku bahasa indonesia dan lengkap.Kamus Besar Bahasa Indonesia Edisi Lux Index', '120000', 'Kamus', '011220181532239786028517430_kamus_besar_bahasa_indonesia_edisi_lux__w200_hauto.jpg'),
('9789790822962', 'Cake & Bolu: Kukus dan Panggang', '160', 'Demedia Pustaka', '2018-01-16', '0.29', 'Cake dan bolu adalah "saudara sekandung", karena dibuat dengan bahan yang nyaris sama, disajikan dengan cara yang sama pula. Masyarakat kita mengenal keduanya dengan sebutan yang berbeda, sesuai dengan budaya lokal setempat. Namun, sebenarnya keduanya adalah sama. Cake atau bolu modern sering disajikan dengan hiasan krim, cokelat leleh atau butter-cream. Sementara, cake dan bolu tradisional disajikan dengan cara yang lebih sederhana. ', '78000', 'Memasak', '29112018035223cake & bolu.jpg'),
('9789792099546', 'Naruto Shippuden', '184', 'Elex Media Komputindo', '2007-01-01', '0.11', 'Dua tahun sudah berlalu sejak saat itu... latihan dengan Jiraiya sudah selesai dan Naruto yang terlihat gagah pulang ke desa Konohagakure...!! Di saat Naruto punya waktu luang untuk reuni dengan teman-teman yang dirindukannya, cengkeraman jahat "Akatsuki" membayangi Gaara yang sudah jadi Kazekage!! Perubahan bagian kedua akan dimulai!!', '25000', 'Komik', '19112018065041naruto shippuden.jpg'),
('9789792264005', 'Masakan Jepang Populer Ala Kaki Lima', '150', 'Gramedia Pustaka Utama', '2013-02-06', '0,.14', 'Selera sajian dari dapur Asia yang kini bisa diminati keluarga Indonesia adalah selera sajian dari dapur Jepang. Sajian Jepang terkenal dengan sajian yang sederhana, lezat, tampilannya cantik, berkualitas prima karena dibuat dari bahan-bahan bermutu, penuh filosofi, dan praktis memasaknya. Buku ini menawarkan selera Jepang ala kaki lima yang populer, lezat, mudah dibuat. Semuanya terangkum dalam 25 resep Jepang populer, di antaranya Mix Vegetable Tempura, Chicken Yakitori, Kani Roll, Seafood Yakitori, Ekado, Sukiyaki, Shabu-Shabu..', '33000', 'Memasak', '29112018034858Masakan Jepang.jpg'),
('9789792285048', 'Cita Rasa Asyik - Masakan Korea', '155', 'Gramedia Pustaka Utama', '2013-02-06', '0.16', '"Masakan Korea terdiri dari berbagai jenis mulai dari jenis masakan rumahan, masakan pedagang kaki lima, masakan restoran, hingga masakan istana. Berbagai daerah di negara Korea juga memiliki masakannya sendiri- sendiri, sehingga dalam perkembangannya perpaduan antara cita rasa lezat trandisional dan uniknya kombinasi Korea modern, menyatu menjadi hidangan dengan cita rasa eksotik. Bahan dasar masakan Korea biasanya terdiri dari beras, mie, tahu / tofu, sayur, dan daging. Bahan pelengkap hidangan utama Korea adalah kimchi, yaitu semacam acar dari sayuran sawi putih, lobak, kobis, atau mentimun. Sedangkan bumbu-bumbu yang biasanya menjadi ciri khas masakan Korea antara lain minyak wijen, biji wijen sangrai, kecap manis, kecap ikan, bawang putih. jahe, gochujang (pasta / saus cabai), doenjang (cabai bubuk), merica halus, dan garam. ', '37000', 'Memasak', '29112018035008cita rasa asyik korea.jpg'),
('9789792365405', '119 Resep Hidangan Populer Khas Asia', '350', 'Samindra Utama', '2018-09-01', '1.0', 'Buku ini berguna bagi Anda yang ingin Mengetahui Makanan apa saja yang ada di Asia. Di dalam buku terdapat hingga 119 Resep hidangan khas Asia Lengkap tentang cara memasak dan menghidangkannya .', '160000', 'Memasak', '29112018034320119 resep hidangan populer khas asia.jpg'),
('9789792730418', 'Fairy Tail', '180', 'Elex Media Komputind', '2008-01-10', '0.2', 'Natsu, Happy, dan Lucy melakukan perjalanan untuk mencari rekan-rekan mereka demi membangkitkan kembali Fairy Tail, dan mereka berhasil bertemu kembali dengan Wendy dan Carla yang telah bergabung ke Lamia Scale. Kemudian, mereka bertemu lagi dengan Juvia di desa Amefurashi. Dia berputus asa dan kembali menjadi â€œgadis hujanâ€... Dan ternyata alasannya karena Gray hilang!', '25000', 'Komik', '19112018060556Fairy Tail.jpg'),
('9789796377909', 'Detektif Conan', '192', 'Elex Media Komputind', '2000-01-01', '0.11', 'Conan dan Heiji memusnahkan Nue. Akhirnya kid berhadapan dengan Okiya! Ada gadis Kyoto mencolok yang terlihat mengincar Heiji dan guru ceroboh yang seperti menyembunyikan sesuatu. Kali ini mulai bermunculan banyak perempuan yang mencurigakan!', '25000', 'Komik', '19112018055933Detektif-Conan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_masuk`
--

CREATE TABLE `order_masuk` (
  `nomor` int(11) NOT NULL,
  `id_transaksi` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `total` varchar(50) NOT NULL,
  `tgl_order` date NOT NULL,
  `jam_order` time NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_masuk`
--

INSERT INTO `order_masuk` (`nomor`, `id_transaksi`, `judul`, `jumlah`, `nama_pembeli`, `alamat`, `telepon`, `total`, `tgl_order`, `jam_order`, `status`) VALUES
(1, 'TRK497705078', 'One Punch Man', '1', 'Arya', 'Jalan Ceria', '089650576665', '25000', '2018-12-03', '08:52:42', 'Sedang Diproses'),
(2, 'TRK842181396', '101+ Pengetahuan Bikin Kamu Mahir IT', '1', 'Deni', 'Jalan Ceria', '089650576665', '64000', '2018-12-03', '08:53:08', 'Sedang Diproses'),
(3, 'TRK646569824', 'Mowgli', '1', 'rama', 'jl.hitam', '089762536352', '79000', '2018-12-03', '08:54:04', 'Sedang Dalam Pengiriman Kurir');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`email`) VALUES
('aryaaditiya15@gmail.com'),
('a_aditiya25@ymail.com'),
('danialfarizi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_transbuku`
--

CREATE TABLE `tmp_transbuku` (
  `isbn` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_selesai`
--

CREATE TABLE `transaksi_selesai` (
  `id_transaksi` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `total` varchar(50) NOT NULL,
  `tgl_order` date NOT NULL,
  `jam_order` time NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_selesai`
--

INSERT INTO `transaksi_selesai` (`id_transaksi`, `judul`, `jumlah`, `nama_pembeli`, `alamat`, `telepon`, `total`, `tgl_order`, `jam_order`, `status`) VALUES
('TRK245953369', '50 Best of Sumatera', '1', 'dm nopal', 'jl.serpong', '08127338378', '44000', '2018-12-03', '08:55:58', 'Transaksi Selesai'),
('TRK310223388', 'Belajar Sendiri Desain 3D Rumah dengan Google Sketchup', '1', 'Arya Aditiya', 'Jalan Ceria', '089650576665', '54000', '2018-12-03', '10:38:41', 'Transaksi Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `order_masuk`
--
ALTER TABLE `order_masuk`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tmp_transbuku`
--
ALTER TABLE `tmp_transbuku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `transaksi_selesai`
--
ALTER TABLE `transaksi_selesai`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order_masuk`
--
ALTER TABLE `order_masuk`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
