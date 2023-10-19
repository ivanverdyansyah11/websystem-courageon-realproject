-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2023 at 08:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_courageon`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` bigint UNSIGNED NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran_lulus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimoni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `profile`, `tahun_ajaran_lulus`, `pekerjaan`, `testimoni`, `students_id`, `created_at`, `updated_at`) VALUES
(1, 'alumni-1.jpg', '2019/2020', 'Part Of Carnival Cruise Line (CCL) as a Commis', 'Pendidikan di SMA Negeri 1 Selat telah membantu saya memahami pentingnya pendekatan ilmiah dalam memecahkan masalah. Kini, saya bekerja sebagai peneliti di sebuah lembaga riset internasional dan berkontribusi dalam mengembangkan solusi untuk isu-isu lingkungan.', 8, '2023-10-12 05:43:35', '2023-10-12 16:15:11'),
(2, 'alumni-2.jpg', '2019/2020', 'Insinyur di PT Teknologi Maju Indonesia', 'SMAN 1 Selat adalah tempat di mana saya menemukan minat dan passion saya dalam seni dan desain. Terima kasih atas dukungan para guru dan teman-teman yang telah membantu mengembangkan bakat saya. Saat ini, saya telah mendirikan perusahaan desain grafis.', 7, '2023-10-12 05:43:35', '2023-10-12 16:15:17'),
(3, 'alumni-3.jpg', '2023/2024', 'Pendiri dan Desainer Grafis di Maya Design Studio', 'Halo teman-teman alumni sekolah! Saya sangat senang ingin berbagi kabar baik. Saat ini, saya bekerja sebagai Komisaris di Carnival Cruise Line. Selama perjalanan karier ini, banyak pelajaran berharga yang saya pelajari. Bersama-sama, mari kita berikan kontribusi positif bagi masa depan sekolah kita.', 6, '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `auths`
--

CREATE TABLE `auths` (
  `id` bigint UNSIGNED NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auths`
--

INSERT INTO `auths` (`id`, `profile`, `username`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'profile-admin.png', 'Admin Sekolah', 'Manajemen Admin', 'admin123@gmail.com', NULL, '$2y$10$8r1m9FpKjXAHqkk4t7kTEOppSXuBElI9zvdEuLTJDDP.oPRYw1f36', NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswas`
--

CREATE TABLE `beasiswas` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswas`
--

INSERT INTO `beasiswas` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Beasiswa Akademik Unggulan', 'Siswa yang mendapatkan beasiswa ini akan menerima dukungan finansial untuk biaya pendidikan selama satu tahun ajaran, sebagai penghargaan atas dedikasi dan kerja keras mereka dalam prestasi akademik.', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'Beasiswa Non-Akademik', 'Siswa yang menunjukkan prestasi di luar akademik seperti dalam olahraga, atau pelayanan masyarakat. Beasiswa ini bertujuan untuk mendorong dan mendukung perkembangan bakat dan kemampuan siswa di berbagai bidang non-akademik.', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'Beasiswa Bantuan Keuangan', 'Beasiswa ini diberikan kepada siswa yang memiliki kebutuhan finansial dan kesulitan dalam membayar biaya pendidikan. Beasiswa ini bertujuan untuk membantu siswa yang kurang mampu agar tetap dapat melanjutkan pendidikan dengan layak.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa_penerimas`
--

CREATE TABLE `beasiswa_penerimas` (
  `id` bigint UNSIGNED NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `digunakan_untuk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_id` bigint NOT NULL,
  `beasiswas_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswa_penerimas`
--

INSERT INTO `beasiswa_penerimas` (`id`, `tahun`, `digunakan_untuk`, `jumlah_beasiswa`, `students_id`, `beasiswas_id`, `created_at`, `updated_at`) VALUES
(1, '2022/2023', 'Sebagai pengakuan atas prestasi akademik yang luar biasa', '500000', 5, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, '2022/2023', 'mendorong mereka untuk terus berkinerja baik dalam pendidikan', '1000000', 4, 2, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, '2022/2023', 'meringankan beban finansial keluarga dan membantu memfasilitasi akses pendidikan yang berkualitas', '750000', 3, 3, '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `banner`, `title`, `author`, `created_date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'berita-1.jpg', 'Berita Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?', 'I Made Artana', '2023-06-03', 'Siswa kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(2, 'berita-2.jpg', 'Berita 2 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?', 'I Made Artana 2', '2023-06-03', 'Siswa 2 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(3, 'berita-3.jpg', 'Berita 3 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?', 'I Made Artana 3', '2023-06-03', 'Siswa 3 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(4, 'berita-4.jpg', 'Berita 4 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?', 'I Made Artana 4', '2023-06-03', 'Siswa 4 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(5, 'berita-5.jpg', 'Berita 5 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?', 'I Made Artana 5', '2023-06-03', 'Siswa 5 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(6, '1697126097.jpg', 'htyhtyjhm', 'yjyujhkhjl', '2023-10-12', '<p>fghjgjnhjgmhj</p>', '2023-10-12 14:54:57', '2023-10-12 14:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `icon`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'email-icon.svg', 'Email', 'smanegeri1selat@gmail.com', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'address-icon.svg', 'Address', 'Jl. Baledan, Duda, Kec. Selat, Kabupaten Karangasem, Bali 80862', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'phone-icon.svg', 'Phone Number', '0274 - 513454', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'fax-icon.svg', 'FAX', '0274 - 513454', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours_per_week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `hours_per_week`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', '12', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'IPA', '8', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'PPKN', '10', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'Bahasa Indonesia', '11', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(5, 'Bahasa Inggris', '9', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `curricula`
--

CREATE TABLE `curricula` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curricula`
--

INSERT INTO `curricula` (`id`, `banner`, `title_section`, `description`, `created_at`, `updated_at`) VALUES
(1, 'banner-kurikulum.png', 'Langkah Kami Menghadapi Pendidikan Abad Ke-21', 'Kurikulum di sekolah merupakan inti dari pendidikan formal, dan terus mengalami transformasi untuk menghadapi perubahan zaman dan tantangan abad ke-21. Deskripsi ini akan mengeksplorasi perubahan signifikan dalam kurikulum yang dilakukan oleh institusi pendidikan guna mempersiapkan generasi muda untuk menghadapi dunia yang cepat berubah dan kompleks. Fokus akan diberikan pada pengintegrasian teknologi dalam pembelajaran, pendekatan kreatif dalam mengajar, inklusi pendidikan bagi semua, serta upaya untuk mengembangkan keterampilan abad ke-21 seperti kritis berpikir, kerjasama, keterampilan digital, dan pemecahan masalah.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `denahs`
--

CREATE TABLE `denahs` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `denahs`
--

INSERT INTO `denahs` (`id`, `code`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Ruang Kelas', 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'B', 'Ruang Guru', '\r\n            Ruang guru adalah tempat di mana para guru berkumpul untuk merencanakan pelajaran, berkolaborasi dengan kolega, dan beristirahat. Biasanya terletak di dekat kantor kepala sekolah atau dekan, dan sering kali memiliki akses ke komputer, printer, dan sumber daya lainnya. Ruang guru juga dapat digunakan untuk pertemuan dengan orang tua atau wali murid, dan kadang-kadang digunakan untuk kegiatan ekstrakurikuler.', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'C', 'Ruang Waka', 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'D', 'Ruang BK', 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(5, 'E', 'Ruang Kepala Sekolah', 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(6, 'F', 'Kantin', 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(7, 'G', 'Lapangan Basket', 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `role_employees_id` bigint NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pns','pppk','honorer') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highest_rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt` date DEFAULT NULL,
  `last_number_skp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_date_skp` date DEFAULT NULL,
  `work_tenure` date DEFAULT NULL,
  `first_number_skp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_date_skp` date DEFAULT NULL,
  `salary_increase` date DEFAULT NULL,
  `employee_card_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `role_employees_id`, `fullname`, `image`, `nip`, `place_of_birth`, `date_of_birth`, `rank`, `position`, `gender`, `status`, `course_id`, `highest_rank`, `room_type`, `tmt`, `last_number_skp`, `last_date_skp`, `work_tenure`, `first_number_skp`, `first_date_skp`, `salary_increase`, `employee_card_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'I Komang Wirasatya', 'manajemen-1.jpg', NULL, 'karangasem', '1995-11-23', NULL, 'Kontrak Provinsi', 'L', 'pns', NULL, 'SMKN 2014', NULL, NULL, '5/04.C/HK/2022', '2022-01-03', NULL, '1553/03-A/HK/2014', '2014-08-01', NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 1, 'I Made Satyawan', 'manajemen-2.jpg', NULL, 'bangli', '1985-10-23', NULL, 'Kontrak Provinsi', 'L', 'pns', NULL, 'SMKN 2000', NULL, NULL, '5/04.C/HK/2022', '2022-01-03', NULL, '1553/03-A/HK/2014', '2014-08-01', NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 1, 'I Kadek Satria', 'manajemen-3.jpg', NULL, 'Denpasar', '1996-12-21', NULL, 'Kontrak Provinsi', 'L', 'pns', NULL, 'SMKN 2018', NULL, NULL, '5/04.C/HK/2022', '2022-01-03', NULL, '1553/03-A/HK/2014', '2014-08-01', NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 1, 'I Putu Adiawan', 'manajemen-4.jpg', NULL, 'Denpasar', '1990-10-11', NULL, 'Kontrak Provinsi', 'L', 'pns', NULL, 'SMKN 2011', NULL, NULL, '5/04.C/HK/2022', '2022-01-03', NULL, '1553/03-A/HK/2014', '2014-08-01', NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(5, 2, 'Drs. I Wayan Cenik, M.Pd.', 'guru-1.jpg', '19650428 199512 1 002', NULL, NULL, NULL, 'Guru Ahli Madya', 'L', 'pns', '1', NULL, 'Pembina Tk. I / IVb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(6, 2, 'Ida Bagus Nyoman Gelgel, S.Pd.', 'guru-2.jpg', '19670110 199203 1 012', NULL, NULL, NULL, 'Guru Ahli Madya', 'P', 'pns', '2', NULL, 'Pembina Tk. I / IVb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(7, 2, 'I Wayan Suarsana, S.Pd.', 'guru-3.jpg', '19680517 199512 1 003', NULL, NULL, NULL, 'Guru Ahli Madya', 'L', 'pns', '1', NULL, 'Pembina Tk. I / IVb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(8, 2, 'I Wayan Mudayasa, S.Pd', 'guru-4.jpg', '19700622 199512 1 001', NULL, NULL, NULL, 'Guru Ahli Madya', 'L', 'pns', '1', NULL, 'Pembina Tk. I / IVb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(9, 3, 'I Nengah Sumerta, S.Sos.', 'pegawai-1.jpg', NULL, NULL, NULL, 'Penata / IIIc', 'Analis SDM / KTU', 'L', 'pns', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(10, 3, 'I Gusti Agung Putra, S.E.', 'pegawai-2.jpg', NULL, NULL, NULL, 'Penata Tk.1/ III/.d', 'Pengelola Data', 'L', 'pns', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(11, 3, 'Putu Ari Setiawati.,S.E.', 'pegawai-3.jpg', NULL, NULL, NULL, 'Penata/ III/.c', 'Pengelola BMD', 'P', 'pns', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(12, 3, 'I Wayan Putu Adi Jenar, S.Pd', 'pegawai-4.jpg', NULL, NULL, NULL, 'Penata Muda /III/a', 'Pengelola Keuangan', 'L', 'pns', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculars`
--

CREATE TABLE `extracurriculars` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `coach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone_coach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extracurriculars`
--

INSERT INTO `extracurriculars` (`id`, `icon`, `banner`, `data_siswa`, `name`, `title`, `description`, `schedule_day`, `start_time`, `end_time`, `coach`, `number_phone_coach`, `link_register`, `created_at`, `updated_at`) VALUES
(1, 'ekstrakurikuler-1.png', 'ekstrakurikuler-banner-1.jpg', 'data-siswa-1.pdf', 'Sepak Bola', 'Berkembang Bersama Bola : Membangun Keterampilan Sepak Bola Unggul & Jiwa Kolaboratif Melalui Ekstrakurikuler Sepak Bola', 'Ekstrakulikuler Sepak Bola adalah salah satu kegiatan di luar kurikulum yang ditawarkan oleh sekolah atau lembaga pendidikan untuk memberikan kesempatan kepada siswa untuk berpartisipasi dalam olahraga sepak bola. Kegiatan ini bertujuan untuk mengembangkan keterampilan sepak bola, mempromosikan kesehatan dan kebugaran, serta membentuk karakter positif pada siswa.', 'Senin', '13:00:00', '16:00:00', 'Komang Budi Setiawan', '08236756854', 'https://docs.google.com/forms/u/0/', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'ekstrakurikuler-2.png', 'ekstrakurikuler-banner-2.jpg', 'data-siswa-2.pdf', 'Basket', 'Tumbuhkan Bakat, Kembangkan Keterampilan Bola Basket, dan Fostering Kolaborasi Melalui Ekstrakurikuler Bola Basket yang Dinamis', 'Bola basket adalah salah satu ekstrakulikuler yang menarik dan populer di kalangan siswa sekolah. Ekstrakulikuler bola basket memberikan kesempatan kepada siswa untuk belajar dan berpartisipasi dalam olahraga tim yang penuh aksi dan dinamis ini. Kegiatan ini biasanya diadakan di sekolah-sekolah sebagai sarana pengembangan bakat, keterampilan, dan semangat kompetitif.', 'Sabtu', '17:00:00', '19:00:00', 'Dewi Sekarini', '08126456756', 'https://docs.google.com/forms/u/0/', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'ekstrakurikuler-3.png', 'ekstrakurikuler-banner-3.jpg', 'data-siswa-3.pdf', 'Paduan Suara', 'Ekstrakulikuler Paduan Suara sebagai Wadah Kreativitas Musikal, Kolaborasi Tim, dan Pertumbuhan Pribadi', 'Paduan Suara adalah salah satu ekstrakulikuler yang menawarkan pengalaman musikal yang memuaskan bagi para siswa di sekolah. Kegiatan ini melibatkan kumpulan siswa yang memiliki minat dan bakat dalam bernyanyi, dan mereka bekerja bersama untuk menciptakan harmoni vokal yang indah. Ekstrakulikuler Paduan Suara mengajarkan nilai-nilai kerjasama, disiplin, kesabaran, dan apresiasi seni musik kepada pesertanya.', 'Jumat', '10:00:00', '112:00:00', 'Manorez Anthonio', '08123786754', 'https://docs.google.com/forms/u/0/', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'ekstrakurikuler-4.png', 'ekstrakurikuler-banner-4.jpg', 'data-siswa-4.pdf', 'Teater & Drama', 'Melalui Panggung Emosi: Menjelajahi Kreativitas, Ekspresi Diri, dan Kolaborasi dalam Ekstrakurikuler Teater & Drama', 'Ekstrakurikuler Teater & Drama \"Panggung Emosi\" adalah wadah kreatif bagi siswa-siswi untuk mengeksplorasi seni peran, ekspresi diri, dan pengembangan kepribadian melalui dunia panggung. Dalam ekstrakurikuler ini, siswa akan diajak untuk merasakan pengalaman bermain peran, memahami karakter, dan membangun suasana berbagai cerita. Melalui beragam kegiatan seperti latihan improvisasi, pembacaan skenario, dan latihan fisik, siswa akan mengembangkan kemampuan berbicara di depan umum, keterampilan sosial, serta rasa percaya diri yang mendalam.', 'Rabu', '16:00:00', '18:00:00', 'Daniel Marcella', '08345676456', 'https://docs.google.com/forms/u/0/', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'galeri-1.jpg', 'Image 1', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'galeri-2.jpg', 'Image 2', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'galeri-3.jpg', 'Image 3', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'galeri-4.jpg', 'Image 4', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(5, 'galeri-5.jpg', 'Image 5', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(6, 'galeri-6.jpg', 'Image 6', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(7, 'galeri-7.jpg', 'Image 7', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(8, 'galeri-8.jpg', 'Image 8', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `header_academics`
--

CREATE TABLE `header_academics` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_academics`
--

INSERT INTO `header_academics` (`id`, `banner`, `title_header`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'banner-header.png', 'Inovasi Peningkatan Prestasi Akademik di Sekolah!', 'Penelitian ini mencari cara-cara inovatif untuk meningkatkan prestasi akademik siswa di sekolah. Metode baru seperti teknologi edukasi terkini, pembelajaran berbasis proyek, dan kurikulum lintas disiplin akan dieksplorasi. Penelitian ini juga menyoroti peran guru, staf, orang tua, dan dukungan keluarga dalam mencapai hasil akademik yang lebih baik.', 'Lihat Selengkapnya', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'banner-header-2.png', 'Inovasi Peningkatan Prestasi Akademik di Sekolah! 2', 'Penelitian ini mencari cara-cara inovatif untuk meningkatkan prestasi akademik siswa di sekolah. Metode baru seperti teknologi edukasi terkini, pembelajaran berbasis proyek, dan kurikulum lintas disiplin akan dieksplorasi. Penelitian ini juga menyoroti peran guru, staf, orang tua, dan dukungan keluarga dalam mencapai hasil akademik yang lebih baik.', 'Lihat Selengkapnya 2', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `header_homes`
--

CREATE TABLE `header_homes` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_homes`
--

INSERT INTO `header_homes` (`id`, `banner`, `title_header`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'banner-header.png', 'SMA Negeri 1 Selat, Wujudkan Impianmu Yang Tinggi Di Sini!', 'Selamat datang di SMA Negeri 1 Selat, tempat perlindungan pendidikan yang luar biasa di mana keberanian bertemu dengan keunggulan. Komitmen kami untuk merawat keunggulan akademis dan pertumbuhan pribadi membuat kami menjadi institusi terdepan yang menggenggam potensi dalam setiap individu.', 'Lihat Profile', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'banner-header-2.png', 'SMA Negeri 1 Selat, Wujudkan Impianmu Yang Tinggi Di Sini! 2', '123 Selamat datang di SMA Negeri 1 Selat, tempat perlindungan pendidikan yang luar biasa di mana keberanian bertemu dengan keunggulan. Komitmen kami untuk merawat keunggulan akademis dan pertumbuhan pribadi membuat kami menjadi institusi terdepan yang menggenggam potensi dalam setiap individu.', 'Lihat Profile 123', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `header_humas`
--

CREATE TABLE `header_humas` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_humas`
--

INSERT INTO `header_humas` (`id`, `banner`, `title_header`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'banner-header.png', 'Kemitraan Sekolah-Industri untuk Masa Depan Sekolah', 'Kemitraan antara sekolah dan industri menjadi kunci untuk mempersiapkan generasi muda menghadapi tuntutan dunia kerja. Artikel ini membahas pentingnya kemitraan ini dalam menciptakan kurikulum yang relevan dan mengembangkan keterampilan berdaya saing. Berbagai model kemitraan sukses, manfaatnya, serta cara mengatasi tantangan.', 'Lihat Selengkapnya', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'banner-header-2.png', 'Kemitraan Sekolah-Industri untuk Masa Depan Sekolah 2', 'Kemitraan antara sekolah dan industri menjadi kunci untuk mempersiapkan generasi muda menghadapi tuntutan dunia kerja. Artikel ini membahas pentingnya kemitraan ini dalam menciptakan kurikulum yang relevan dan mengembangkan keterampilan berdaya saing. Berbagai model kemitraan sukses, manfaatnya, serta cara mengatasi tantangan.', 'Lihat Selengkapnya 2', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `header_profiles`
--

CREATE TABLE `header_profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_profiles`
--

INSERT INTO `header_profiles` (`id`, `banner`, `title_header`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'banner-header.jpg', 'Profile Dan informasi mengenai SMA Negeri 1 Selat', 'SMA Negeri 1 Selat adalah sekolah negeri yang terletak di Kota Bahagia. Kami didirikan dengan tekad kuat untuk menciptakan lingkungan pendidikan yang inspiratif dan inklusif bagi setiap siswa. Visi kami adalah membentuk generasi pemberani, cerdas, dan berdaya saing yang siap menghadapi tantangan dunia global.', 'Lihat Selengkapnya', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'banner-header-2.jpg', 'Profile Dan informasi mengenai SMA Negeri 1 Selat 2', 'SMA Negeri 1 Selat adalah sekolah negeri yang terletak di Kota Bahagia. Kami didirikan dengan tekad kuat untuk menciptakan lingkungan pendidikan yang inspiratif dan inklusif bagi setiap siswa. Visi kami adalah membentuk generasi pemberani, cerdas, dan berdaya saing yang siap menghadapi tantangan dunia global.', 'Lihat Selengkapnya 2', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `header_sarana_prasaranas`
--

CREATE TABLE `header_sarana_prasaranas` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_sarana_prasaranas`
--

INSERT INTO `header_sarana_prasaranas` (`id`, `banner`, `title_header`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'banner-header.png', 'Lingkungan Belajar Unggul melalui Sarana & Prasarana Sekolah', 'Pentingnya sarana dan prasarana dalam menciptakan lingkungan belajar yang unggul di sekolah. Dalam tulisan ini, akan dipaparkan bagaimana infrastruktur fisik yang baik, pemanfaatan teknologi modern, keselamatan siswa, inklusivitas, dan manajemen fasilitas yang efektif berkontribusi dalam meningkatkan kualitas pendidikan.', 'Lihat Selengkapnya', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'banner-header-2.png', 'Lingkungan Belajar Unggul melalui Sarana & Prasarana Sekolah 2', 'Pentingnya sarana dan prasarana dalam menciptakan lingkungan belajar yang unggul di sekolah. Dalam tulisan ini, akan dipaparkan bagaimana infrastruktur fisik yang baik, pemanfaatan teknologi modern, keselamatan siswa, inklusivitas, dan manajemen fasilitas yang efektif berkontribusi dalam meningkatkan kualitas pendidikan.', 'Lihat Selengkapnya 2', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `header_students`
--

CREATE TABLE `header_students` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_students`
--

INSERT INTO `header_students` (`id`, `banner`, `title_header`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'banner-header.png', 'Kesiswaan Membentuk Karakter & Kreativitas di Sekolah', 'Kesiswaan di sekolah merupakan peran penting dalam membentuk karakter siswa. Melalui kegiatan ekstrakurikuler dan edukatif, siswa dapat mengasah keterampilan sosial, kepemimpinan, dan kerjasama tim. Program kesiswaan juga membantu mengembangkan ketahanan mental dan emosional.', 'Lihat Selengkapnya', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'banner-header-2.png', 'Kesiswaan Membentuk Karakter & Kreativitas di Sekolah 2', 'Kesiswaan di sekolah merupakan peran penting dalam membentuk karakter siswa. Melalui kegiatan ekstrakurikuler dan edukatif, siswa dapat mengasah keterampilan sosial, kepemimpinan, dan kerjasama tim. Program kesiswaan juga membantu mengembangkan ketahanan mental dan emosional.', 'Lihat Selengkapnya 2', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `history_homes`
--

CREATE TABLE `history_homes` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_history` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_homes`
--

INSERT INTO `history_homes` (`id`, `banner`, `title_history`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'banner-sejarah.jpg', 'Sejarah Singkat Tentang SMA Negeri 1 Selat', 'SMA Negeri 1 Selat didirikan pada tahun 1995 oleh sekelompok pendidik visioner yang percaya bahwa pendidikan sejati tidak hanya tentang akademik, tetapi juga tentang memupuk keberanian dan semangat dalam setiap siswa. Berlokasi di sebuah desa kecil yang indah, sekolah ini berkomitmen untuk menciptakan lingkungan pembelajaran yang inklusif dan inspiratif.', 'Lihat Profile', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `history_kenaikan_siswas`
--

CREATE TABLE `history_kenaikan_siswas` (
  `id` bigint UNSIGNED NOT NULL,
  `students_id` bigint NOT NULL,
  `jurusans_id` bigint NOT NULL,
  `kelases_id` bigint NOT NULL,
  `indexes_id` bigint NOT NULL,
  `semesters_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_kenaikan_siswas`
--

INSERT INTO `history_kenaikan_siswas` (`id`, `students_id`, `jurusans_id`, `kelases_id`, `indexes_id`, `semesters_id`, `created_at`, `updated_at`) VALUES
(1, 7, 2, 3, 2, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 6, 2, 3, 2, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 6, 2, 3, 2, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 1, 1, 2, 1, 1, '2023-10-12 15:24:19', '2023-10-12 15:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `hymnes`
--

CREATE TABLE `hymnes` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hymne` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hymnes`
--

INSERT INTO `hymnes` (`id`, `banner`, `title_section`, `hymne`, `creation`, `created_at`, `updated_at`) VALUES
(1, 'banner-hymne.png', 'Hymne SMA Negeri 1 Selat', '<span style=\"white-space:pre-wrap\">Disini Tempat Kami Berkreasi<br />Tuk’ Jadi Siswa Yang Kreatif<br />Bertaqwa Landasan Hidup Kami<br />Berprestasi Tujuan Kami SMANEBA<br />Tempat kami Belajar<br />Pencetak Insan Muda Bangsa<br />Berpribadi Luhur Dan Berakhlaq Mulia<br />Mutu Berdaya Saing Global<br />Ayo …… Ayo Semua<br />Torehkan Prestasi Tuk’ SMANEBA<br />Jadikan Dia Gudang Juara Skolah<br />Tercinta Kita Semua<br />Sayangi , Cintai, SMANEBA slalu dihati</span>', 'Dr. Andi Pranoto, M.Pd.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `indices`
--

CREATE TABLE `indices` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indices`
--

INSERT INTO `indices` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'B', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `thumbnail`, `title`, `description`, `document_pdf`, `author`, `created_date`, `created_at`, `updated_at`) VALUES
(1, 'journal-1.jpg', 'Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota', 'Siswa kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.', 'journal-pdf-1.pdf', 'I Made Sudiana', '2023-06-28', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(2, 'journal-2.jpg', 'Pengaruh Teknologi dalam Dunia Pendidikan, Tantangan di Sekolah', 'Pengaruh teknologi dalam dunia pendidikan semakin mengubah cara belajar dan mengajar, membuka peluang baru untuk interaktif dan kolaboratif, namun juga menghadirkan tantangan adaptasi bagi sekolah dalam mengintegrasikan teknologi secara efektif ke dalam kurikulum.', 'journal-pdf-2.pdf', 'Ni Kadek Putri', '2023-06-23', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(3, 'journal-3.jpg', 'Tips untuk Membangun Kemitraan dengan Sekolah', 'Terlibatlah secara aktif dalam kegiatan sekolah dan komunikasi yang terbuka dengan staf serta orang tua siswa adalah kunci dalam membangun kemitraan yang kuat untuk mendukung perkembangan pendidikan.', 'journal-pdf-3.pdf', 'Ni Kadek Putri', '2023-06-19', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(4, 'journal-4.jpg', 'Menelusuri Jejak Sejarah Sekolah: Kilas Balik 50 Tahun Perjalanan Pendidikan', 'Dengan bangga kami merayakan 50 tahun perjalanan pendidikan yang penuh prestasi, sambil merenung pada jejak sejarah sekolah yang telah membentuk visi dan misi kami saat ini.', 'journal-pdf-4.pdf', 'I Made Sudiana', '2023-06-15', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(5, 'journal-5.jpg', 'Belajar dari Pengalaman, Siswa Berbagi Cerita tentang Ujian Nasional', 'Melalui berbagi cerita tentang pengalaman ujian nasional, siswa-siswa kami menunjukkan ketekunan dan semangat dalam menghadapi tantangan akademik yang menginspirasi sesama rekan mereka.', 'journal-pdf-5.pdf', 'Wayan Surya', '2023-06-12', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(6, 'journal-6.jpg', 'Pengalaman Program Pertukaran Pelajar di Courageon School', 'Program pertukaran pelajar di Courageon School memberikan kesempatan tak ternilai bagi siswa-siswa kami untuk memperluas wawasan budaya, memperdalam pengetahuan, dan mengembangkan hubungan internasional yang langgeng.', 'journal-pdf-6.pdf', 'Wayan Surya', '2023-06-09', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(7, 'journal-7.jpg', 'Menjaga Kesehatan Mental di Tengah Tuntutan Sekolah', 'Di tengah tuntutan sekolah yang sering kali menuntut, penting bagi siswa untuk menjaga kesehatan mental mereka melalui istirahat yang cukup dan dukungan emosional yang memadai.', 'journal-pdf-7.pdf', 'Wayan Surya', '2023-06-03', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(8, 'journal-8.jpg', 'Mengenal Ekstrakurikuler Unggulan di Sekolah, Meraih Potensi Terbaik Siswa!', 'Dengan ragam ekstrakurikuler unggulan yang kami tawarkan, siswa kami memiliki kesempatan untuk mengembangkan bakat dan minat mereka, serta meraih potensi terbaik dalam berbagai bidang, menjadikan pengalaman sekolah mereka lebih kaya dan berarti.', 'journal-pdf-8.pdf', 'Wayan Surya', '2023-06-03', '2023-10-12 05:43:36', '2023-10-12 05:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Ilmu Pengetahuan Alam', 'IPA', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'Ilmu Pengetahuan Sosial', 'IPS', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_prestasis`
--

CREATE TABLE `kategori_prestasis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_prestasis`
--

INSERT INTO `kategori_prestasis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Akademik', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'Non Akademik', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'X', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'XI', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'XII', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `kenaikan_kelas`
--

CREATE TABLE `kenaikan_kelas` (
  `id` bigint UNSIGNED NOT NULL,
  `tahun_ajarans_id` bigint NOT NULL,
  `jumlah_siswa_x` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_siswa_xi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_siswa_xii` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_tertinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_terendah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rata_nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kenaikan_kelas`
--

INSERT INTO `kenaikan_kelas` (`id`, `tahun_ajarans_id`, `jumlah_siswa_x`, `jumlah_siswa_xi`, `jumlah_siswa_xii`, `gender`, `nilai_tertinggi`, `nilai_terendah`, `rata_nilai`, `total_siswa`, `created_at`, `updated_at`) VALUES
(1, 4, '300', '400', '450', 'L', '96', '80', '86', '1150', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 4, '400', '300', '450', 'P', '96', '80', '86', '1150', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 3, '150', '250', '300', 'L', '92', '78', '89', '800', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 3, '250', '150', '300', 'P', '92', '78', '89', '800', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(5, 2, '200', '300', '400', 'L', '90', '70', '82', '900', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(6, 2, '300', '200', '400', 'P', '90', '70', '82', '900', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(7, 1, '100', '200', '300', 'L', '90', '60', '75', '600', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(8, 1, '200', '100', '300', 'P', '90', '60', '75', '600', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(11, 5, '100', '100', '100', 'P', '100', '100', '100', '100', '2023-10-12 14:09:52', '2023-10-12 14:42:52'),
(12, 8, '300', '300', '300', 'L', '300', '300', '300', '300', '2023-10-12 15:04:24', '2023-10-12 15:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_meaning` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `font_meaning` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_meaning` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `logo_meaning`, `font_meaning`, `color_meaning`, `created_at`, `updated_at`) VALUES
(1, 'brand-logo.png', 'Buku dalam logo menggambarkan komitmen sekolah untuk memberikan pendidikan yang berkualitas tinggi kepada siswa. Ini mengandung pesan bahwa sekolah adalah tempat belajar dan pengetahuan yang didorong untuk membekali siswa dengan bekal yang kuat untuk masa depan.', 'Penggunaan font sans serif capitalize menunjukkan kesan modern dan progresif dari sekolah tersebut. Logo ini ingin menyampaikan bahwa sekolah memiliki pendekatan yang inovatif dalam pendidikan dan selalu berada di garis depan perkembangan pendidikan.', 'Warna biru tua sering dikaitkan dengan keberlanjutan dan konsistensi. Logo ini ingin menyampaikan bahwa sekolah memiliki dedikasi yang kuat untuk memberikan pendidikan berkualitas dan berkomitmen untuk mencapai tujuan jangka panjang.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `mars`
--

CREATE TABLE `mars` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mars` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mars`
--

INSERT INTO `mars` (`id`, `banner`, `title_section`, `mars`, `creation`, `created_at`, `updated_at`) VALUES
(1, 'banner-mars.png', 'Mars SMA Negeri 1 Selat', '<span style=\"white-space:pre-wrap\">Disini Tempat Kami Berkreasi<br />Tuk’ Jadi Siswa Yang Kreatif<br />Bertaqwa Landasan Hidup Kami<br />Berprestasi Tujuan Kami SMANEBA<br />Tempat kami Belajar<br />Pencetak Insan Muda Bangsa<br />Berpribadi Luhur Dan Berakhlaq Mulia<br />Mutu Berdaya Saing Global<br />Ayo …… Ayo Semua<br />Torehkan Prestasi Tuk’ SMANEBA<br />Jadikan Dia Gudang Juara Skolah<br />Tercinta Kita Semua<br />Sayangi , Cintai, SMANEBA slalu dihati</span>', 'Dr. Andi Pranoto, M.Pd.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_08_09_065431_create_auths_table', 1),
(5, '2023_08_11_090715_create_header_homes_table', 1),
(6, '2023_08_11_200629_create_opening_homes_table', 1),
(7, '2023_08_11_202843_create_remark_homes_table', 1),
(8, '2023_08_11_205655_create_history_homes_table', 1),
(9, '2023_08_11_214015_create_header_profiles_table', 1),
(10, '2023_08_11_225553_create_vision_missions_table', 1),
(11, '2023_08_11_233438_create_mottoes_table', 1),
(12, '2023_08_12_000627_create_logos_table', 1),
(13, '2023_08_12_131916_create_mars_table', 1),
(14, '2023_08_12_182022_create_employees_table', 1),
(15, '2023_08_12_183837_create_role_employees_table', 1),
(16, '2023_08_18_080545_create_courses_table', 1),
(17, '2023_08_18_111503_create_section_management_table', 1),
(18, '2023_08_18_113848_create_section_teachers_table', 1),
(19, '2023_08_18_114959_create_section_staff_table', 1),
(20, '2023_08_18_171249_create_section_contacts_table', 1),
(21, '2023_08_18_173814_create_contacts_table', 1),
(22, '2023_08_18_205905_create_header_humas_table', 1),
(23, '2023_08_18_212345_create_section_kemitraans_table', 1),
(24, '2023_08_19_065223_create_partnerships_table', 1),
(25, '2023_08_19_081314_create_journals_table', 1),
(26, '2023_08_19_082149_create_section_journals_table', 1),
(27, '2023_08_19_103224_create_header_sarana_prasaranas_table', 1),
(28, '2023_08_19_114756_create_section_prasaranas_table', 1),
(29, '2023_08_19_122442_create_section_denahs_table', 1),
(30, '2023_08_19_124059_create_denahs_table', 1),
(31, '2023_08_19_164553_create_prasaranas_table', 1),
(32, '2023_08_19_173540_create_header_academics_table', 1),
(33, '2023_08_19_175527_create_curricula_table', 1),
(34, '2023_08_19_181825_create_section_programs_table', 1),
(35, '2023_08_19_182835_create_programs_table', 1),
(36, '2023_08_19_191248_create_section_proyeks_table', 1),
(37, '2023_08_19_195752_create_projects_table', 1),
(38, '2023_08_19_204034_create_section_galleries_table', 1),
(39, '2023_08_19_205250_create_galleries_table', 1),
(40, '2023_08_19_223934_create_header_students_table', 1),
(41, '2023_08_19_225550_create_section_students_table', 1),
(42, '2023_08_19_232027_create_section_extracurriculars_table', 1),
(43, '2023_08_19_233009_create_extracurriculars_table', 1),
(44, '2023_08_20_023458_create_section_graduations_table', 1),
(45, '2023_08_20_170924_create_section_services_table', 1),
(46, '2023_08_20_181932_create_section_achievements_table', 1),
(47, '2023_08_20_183135_create_section_beasiswas_table', 1),
(48, '2023_08_20_184347_create_beasiswas_table', 1),
(49, '2023_08_20_190855_create_section_alumnis_table', 1),
(50, '2023_08_20_202507_create_tahun_ajarans_table', 1),
(51, '2023_08_20_204650_create_semesters_table', 1),
(52, '2023_08_20_211710_create_kelas_table', 1),
(53, '2023_08_20_213027_create_jurusans_table', 1),
(54, '2023_08_20_214228_create_indices_table', 1),
(55, '2023_08_20_225825_create_students_table', 1),
(56, '2023_08_21_013921_create_pelayanan_karirs_table', 1),
(57, '2023_08_21_031406_create_pembinaan_siswas_table', 1),
(58, '2023_08_21_040739_create_alumnis_table', 1),
(59, '2023_08_21_090121_create_beasiswa_penerimas_table', 1),
(60, '2023_08_21_090505_create_prestasis_table', 1),
(61, '2023_08_21_123847_create_history_kenaikan_siswas_table', 1),
(62, '2023_08_21_132709_create_kenaikan_kelas_table', 1),
(63, '2023_08_21_181645_create_navigasis_table', 1),
(64, '2023_08_22_021139_create_kategori_prestasis_table', 1),
(65, '2023_09_16_170110_create_hymnes_table', 1),
(66, '2023_10_10_014059_create_beritas_table', 1),
(67, '2023_10_10_014524_create_section_beritas_table', 1),
(68, '2023_10_10_091225_create_section_videos_table', 1),
(69, '2023_10_10_093237_create_videos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mottoes`
--

CREATE TABLE `mottoes` (
  `id` bigint UNSIGNED NOT NULL,
  `speaker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mottoes`
--

INSERT INTO `mottoes` (`id`, `speaker`, `motto`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Sekolah SMA Negeri 1 Selat', 'Bangsa yang malas belajar tidak akan bisa berkembang!', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `navigasis`
--

CREATE TABLE `navigasis` (
  `id` bigint UNSIGNED NOT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigasis`
--

INSERT INTO `navigasis` (`id`, `link_1`, `link_2`, `link_3`, `link_4`, `link_5`, `link_6`, `created_at`, `updated_at`) VALUES
(1, 'Beranda', 'Profil', 'Akademik', 'Kesiswaan', 'Sarana Prasarana', 'Humas', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `opening_homes`
--

CREATE TABLE `opening_homes` (
  `id` bigint UNSIGNED NOT NULL,
  `title_opening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opening_homes`
--

INSERT INTO `opening_homes` (`id`, `title_opening`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Selamat Datang Di SMA Negeri 1 Selat!!', 'Di SMA Negeri 1 Selat, kami menciptakan lingkungan yang mendukung dan memelihara, yang mendorong individualitas dan kreativitas. Tim pendidik kami yang berdedikasi penuh komitmen untuk menyediakan pendidikan terbaik, dan perhatian pribadi.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `partnerships`
--

CREATE TABLE `partnerships` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnerships`
--

INSERT INTO `partnerships` (`id`, `logo`, `name`, `created_at`, `updated_at`) VALUES
(1, 'kemitraan-1.png', 'Kemitraan 1', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(2, 'kemitraan-2.png', 'Kemitraan 2', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(3, 'kemitraan-3.png', 'Kemitraan 3', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(4, 'kemitraan-4.png', 'Kemitraan 4', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(5, 'kemitraan-5.png', 'Kemitraan 5', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(6, 'kemitraan-8.png', 'Kemitraan 8', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(7, 'kemitraan-7.png', 'Kemitraan 7', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(8, 'kemitraan-9.png', 'Kemitraan 9', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(9, 'kemitraan-10.png', 'Kemitraan 10', '2023-10-12 05:43:36', '2023-10-12 05:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan_karirs`
--

CREATE TABLE `pelayanan_karirs` (
  `id` bigint UNSIGNED NOT NULL,
  `dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masalah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelayanan_karirs`
--

INSERT INTO `pelayanan_karirs` (`id`, `dokumentasi`, `tanggal`, `judul`, `masalah`, `solusi`, `students_id`, `created_at`, `updated_at`) VALUES
(1, 'pelayanan-karir-1.jpg', '2023-03-25', 'Kurangnya Akses dan Informasi yang Komprehensif tentang Berbagai Pilihan Karir, Menghambat Kemampuan Siswa untuk Mengambil Keputusan Karir yang Terinformasi', 'Banyak siswa menghadapi kesulitan dalam merencanakan masa depan karir mereka karena kurangnya akses yang memadai terhadap informasi yang komprehensif tentang berbagai pilihan karir yang tersedia. Ketidakjelasan mengenai jalur pendidikan yang diperlukan, persyaratan pekerjaan, dan perkembangan industri dapat menyebabkan ketidakpastian dalam mengambil keputusan karir yang tepat.', 'Implementasi Pusat Sumber Informasi Karir yang Terintegrasi Deskripsi Solusi: Untuk mengatasi tantangan ini, sekolah perlu mendirikan dan mengelola Pusat Sumber Informasi Karir yang komprehensif. Pusat ini akan menyediakan akses kepada siswa terhadap database informasi tentang berbagai industri, profesi, jalur pendidikan, peluang pekerjaan, serta tren pasar kerja terbaru. Selain itu, melalui kerja sama dengan para profesional industri, penyelenggaraan seminar karir, dan sesi tanya jawab, siswa akan mendapatkan wawasan yang lebih baik tentang dunia kerja dan langkah-langkah yang perlu mereka ambil untuk mencapai tujuan karir mereka.', 4, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'pelayanan-karir-2.jpg', '2023-02-12', 'Kesenjangan dalam Pengembangan Keterampilan Lunak dan Teknis yang Membatasi Persiapan Siswa untuk Sukses dalam Lingkungan Kerja yang Beragam', 'Siswa sering kali lulus dengan pengetahuan teknis yang kuat, tetapi kekurangan keterampilan lunak yang penting seperti komunikasi efektif, kerja tim, kepemimpinan, dan kreativitas. Kesenjangan ini dapat menghambat kemampuan siswa untuk beradaptasi dan berhasil dalam lingkungan kerja yang semakin dinamis dan beragam.', 'Mengatasi kesenjangan keterampilan lunak dan teknis memerlukan pendekatan pendidikan holistik. Sekolah dapat merancang kurikulum yang memadukan pembelajaran teknis dengan proyek kolaboratif, simulasi situasi nyata, dan tantangan interdisipliner yang mendorong pengembangan keterampilan lunak. Selain itu, program ekstrakurikuler yang fokus pada debat, teater, kegiatan sosial, dan pengembangan kepemimpinan juga dapat membantu siswa mengasah keterampilan sosial mereka.', 6, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'pelayanan-karir-3.jpg', '2023-01-08', 'Rendahnya Klarifikasi Rencana Karir dan Panduan yang Menyebabkan Kecemasan dan Tidak Pastinya Masa Depan Profesional Siswa', 'Banyak siswa merasa cemas dan tidak yakin tentang langkah-langkah yang harus mereka ambil untuk mencapai tujuan karir mereka. Ketidakjelasan mengenai pilihan pendidikan lanjutan, peluang pekerjaan, serta perkembangan pribadi yang diperlukan dapat menyebabkan kebingungan dan kekhawatiran yang berkelanjutan.', 'Sekolah dapat memperkenalkan program pembimbingan karir yang personal dan terstruktur. Setiap siswa akan memiliki guru pembimbing karir yang akan membantu mereka melakukan penilaian minat, mengidentifikasi kekuatan dan kelemahan, serta merencanakan langkah-langkah konkret dalam mencapai tujuan karir mereka. Dengan dukungan ini, siswa akan mendapatkan panduan yang lebih jelas dan berfokus dalam merencanakan masa depan profesional mereka.', 2, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'pelayanan-karir-4.jpg', '2023-01-02', 'Kekurangan Pengalaman Praktis yang Menghambat Kemampuan Siswa untuk Menghubungkan Teori dengan Dunia Nyata', 'Siswa sering kesulitan memahami bagaimana teori yang dipelajari di sekolah dapat diterapkan dalam situasi nyata. Kurangnya peluang magang, kunjungan industri, atau keterlibatan praktis dapat menghambat perkembangan pemahaman praktis siswa tentang bagaimana ilmu yang mereka pelajari dapat diaplikasikan dalam dunia pekerjaan.', 'Sekolah dapat bekerja sama dengan perusahaan lokal dan industri terkait untuk menyelenggarakan program magang yang relevan dengan kurikulum. Selain itu, penggunaan simulasi dan proyek nyata yang mensimulasikan situasi di dunia pekerjaan juga dapat membantu siswa mengalami pengalaman praktis. Melalui kunjungan industri, seminar tamu, dan partisipasi dalam proyek kolaboratif dengan profesional industri, siswa dapat menghubungkan teori dengan praktik dan membangun pemahaman yang lebih mendalam tentang realitas dunia kerja.', 5, '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `pembinaan_siswas`
--

CREATE TABLE `pembinaan_siswas` (
  `id` bigint UNSIGNED NOT NULL,
  `dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `masalah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembinaan_siswas`
--

INSERT INTO `pembinaan_siswas` (`id`, `dokumentasi`, `tanggal`, `masalah`, `solusi`, `students_id`, `created_at`, `updated_at`) VALUES
(1, 'pembinaan-siswa-1.jpg', '2023-03-22', 'Belum melengkapi nilai beberapa mata pelajaran, menurut keterangan dari bibinya siswa tersebut tergolong siswa kurang mampu', 'Siswa bersangkutan tidak memiliki fasilitas HP untuk mengikuti pembelajaran secara daring, karena orangtuanya belum bisa membelikan (penghasilan tidak menentu). Siswa akan melengkapi nilai ke sekolah.', 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'pembinaan-siswa-2.jpg', '2023-02-27', 'Siswa belum bisa menyelesaikan administrasi dan belum mendapatkan raport/hasil belajar semester genap 2020/2021', 'Siswa bersangkutan masih mengikuti pembelajaran di sekolah, orangtuanya tidak ada di rumah karena masih bekerja. Petugas BK diterima oleh bibi dari siswa bersangkutan.', 4, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'pembinaan-siswa-3.jpg', '2023-02-02', 'Siswa bersangkutan hanya 2 (dua) kali mengikuti kegiatan Pembelajaran Tatap Muka tanpa keterangan yang jelas', 'Saat kunjungan, siswa bersangkutan berada di rumah. Menurut keterangan ibu siswa bersangkutan siswa bersangkutan dapat sakit 2 hari, telat bangun, hari itu tidak ke sekolah karena salah mengartikan pengumuman tentang kegiatan persembahyangan purnama yang dilaksanakan secara bergilir', 7, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'pembinaan-siswa-4.jpg', '2023-01-22', 'Siswa bersangkutan tidak pernah mengikuti kegiatan pembelajaran selama PTM', 'Siswa bersangkutan sulit bersosialisasi dengan teman sebayanya, perilaku masih seperti anak kecil (berkebutuhan khusus). Guru BK menindaklanjuti dengan mengundang orangtua siswa untuk hadir ke sekolah pada tanggal 20 Januari 2022', 6, '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prasaranas`
--

CREATE TABLE `prasaranas` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prasaranas`
--

INSERT INTO `prasaranas` (`id`, `image`, `name`, `description`, `total`, `created_at`, `updated_at`) VALUES
(1, 'sarana-prasarana-1.jpg', 'Ruang Kelas', 'Sarana dan prasarana ruangan kelas merujuk pada fasilitas dan perlengkapan yang ada di dalam sebuah ruangan kelas yang dirancang untuk mendukung proses pembelajaran dan kenyamanan siswa dan guru. Berikut ini adalah deskripsi singkat mengenai beberapa sarana dan prasarana umum yang biasanya ada dalam ruangan kelas', '26', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'sarana-prasarana-2.jpg', 'Ruang Guru', 'Ruang Guru yang modern dan dilengkapi dengan teknologi canggih menjadi tempat inspirasi bagi pendidik untuk mengembangkan metode pengajaran yang inovatif, memastikan pembelajaran berjalan efektif dan dinamis di Courageon School.', '3', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'sarana-prasarana-3.jpg', 'Perpustakaan', 'Ruang Perpustakaan kami adalah tempat yang nyaman dan inspiratif bagi siswa untuk menjelajahi dunia pengetahuan melalui koleksi buku-buku bermutu tinggi serta fasilitas modern yang mendukung proses pembelajaran dan eksplorasi.', '2', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'sarana-prasarana-4.jpg', 'Mushola', 'Tempat beribadah kami adalah ruang yang disediakan dengan penuh hormat, menciptakan lingkungan yang tenang dan khusyuk bagi siswa untuk melaksanakan praktik agama mereka dengan hikmat dan damai.', '1', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(5, 'sarana-prasarana-5.jpg', 'Laboratorium Sains', 'Laboratorium Sains kami adalah tempat di mana siswa dapat menjalankan eksperimen ilmiah dengan peralatan canggih, memfasilitasi penemuan, eksplorasi, dan pemahaman mendalam tentang konsep-konsep ilmiah dalam lingkungan yang aman dan terarah.', '2', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(6, 'sarana-prasarana-6.jpg', 'Kantin Sekolah', 'Kantin sekolah kami menyediakan pilihan makanan yang sehat dan lezat bagi siswa, menciptakan ruang yang nyaman untuk makan bersama dan berinteraksi, mendukung gaya hidup sehat dan sosial di antara komunitas sekolah kami.', '3', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(7, 'sarana-prasarana-7.jpg', 'Lapangan Basket', 'Lapangan basket kami merupakan tempat yang dinamis dan energik, menginspirasi siswa untuk berolahraga, bekerja sama dalam tim, dan mengembangkan keterampilan atletik dalam suasana yang penuh semangat dan kompetitif.', '1', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(8, 'sarana-prasarana-8.jpg', 'Kamar mandi Siswa', 'Kamar mandi siswa kami dirancang untuk memberikan kenyamanan dan kebersihan, menciptakan lingkungan yang mendukung kebutuhan praktis siswa dalam menjaga kebersihan dan kesehatan mereka selama jam sekolah.', '6', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint UNSIGNED NOT NULL,
  `dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Guru','Pegawai','Siswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat` enum('Kecamatan','Kabupaten','Provinsi','Negara') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_prestasis_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `dokumentasi`, `status`, `tanggal`, `nama_kegiatan`, `penyelenggara`, `nama_peserta`, `hasil`, `tingkat`, `pembina`, `deskripsi`, `kategori_prestasis_id`, `created_at`, `updated_at`) VALUES
(1, 'prestasi-1.jpg', 'Siswa', '2023-06-02', 'Olimpiade Fisika', 'Gedung Serbaguna Kota, Jakarta', 'Putu Aditya Prayatna', 'Juara 1', 'Provinsi', 'Putra Rizky', 'Dengan dedikasi dan pemahaman yang mendalam terhadap konsep-konsep fisika, siswa kami berhasil meraih prestasi sebagai juara pertama dalam Olimpiade Fisika, menegaskan keunggulan mereka dalam bidang ilmu pengetahuan alam ini.', 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'prestasi-2.jpg', 'Siswa', '2023-05-23', 'Olimpiade Sains', 'Universitas Gadjah Mada, Yogyakarta', 'Ayu Puradewi Putri', 'Juara 2', 'Provinsi', 'Siti Rahma', 'Prestasi luar biasa siswa kami dalam Olimpiade Sains terbukti dengan peraihan juara kedua, memperlihatkan dedikasi mereka terhadap pembelajaran ilmiah dan semangat kompetitif yang kuat.', 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'prestasi-3.jpg', 'Siswa', '2023-05-12', 'Lomba Renang', 'Balai Kartini, Jakarta', 'Putu Aditya Prayatna', 'Juara 1', 'Kecamatan', 'Jessi Nanda Putra', 'Dalam lomba renang tingkat sekolah, siswa-siswa kami memamerkan keterampilan renang yang handal dan semangat sportivitas, menciptakan momen yang penuh kegembiraan dan kebersamaan di dalam air.', 2, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'prestasi-4.jpg', 'Siswa', '2023-04-27', 'Olimpiade Biologi', 'Hotel Sultan, Surabaya', 'Alicia Destina Ayu', 'Juara 2', 'Provinsi', 'Putra Rizky', 'Dalam Olimpiade Biologi, siswa-siswa kami menunjukkan pemahaman mendalam terhadap ilmu biologi dan kemampuan analisis yang unggul, meraih prestasi yang gemilang dalam ajang kompetisi ilmiah tersebut.', 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `banner`, `title`, `description`, `button`, `link`, `created_at`, `updated_at`) VALUES
(1, 'banner-elerning.png', 'E-Learning SMA Negeri 1 Selat', 'Program E-Learning di SMA Negeri 1 Selat adalah platform pembelajaran digital yang inovatif dan interaktif, dirancang untuk mendukung proses belajar-mengajar yang efektif dan efisien. Melalui E-Learning, siswa memiliki akses ke beragam materi pembelajaran, modul, dan sumber daya pendukung yang dapat diakses kapan saja. Platform ini menawarkan berbagai fitur canggih, termasuk video pembelajaran, forum diskusi, ujian online, dan berbagai tugas interaktif. Dengan bimbingan dari para guru, siswa dapat berpartisipasi dalam diskusi dan berkolaborasi dengan sesama siswa dalam proses belajar.', 'Website E-Learning', 'https://guru.kemdikbud.go.id/', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'banner-asessment.jpg', 'E-Asessment SMA Negeri 1 Selat', 'E-Assessment di Sekolah SMA Negeri 1 Selat merupakan sistem evaluasi dan penilaian berbasis teknologi yang inovatif untuk mengukur kemajuan belajar siswa secara akurat dan efisien. Dengan menggunakan teknologi canggih, E-Assessment memungkinkan siswa untuk mengikuti berbagai jenis ujian dan tugas evaluasi secara online melalui platform pembelajaran digital yang terintegrasi. Platform E-Assessment ini menyediakan berbagai format ujian, termasuk pilihan ganda, uraian, dan tugas interaktif yang dirancang untuk mengukur pemahaman siswa dalam berbagai tingkatan kognitif.', 'Website E-Asessment', 'https://guru.kemdikbud.go.id/', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `description`, `topic`, `created_at`, `updated_at`) VALUES
(1, 'proyek-1.jpg', 'Gaya Hidup Berkelanjutan, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)', 'Proyek penguatan profil pelajar Pancasila dengan tema gaya hidup berkelanjutan di sekolah adalah inisiatif yang bertujuan untuk mengintegrasikan nilai-nilai Pancasila dengan kesadaran akan pentingnya gaya hidup yang ramah lingkungan dan berkelanjutan. Proyek ini bertujuan untuk membentuk generasi muda yang memiliki kepekaan sosial, etika, dan tanggung jawab terhadap masyarakat dan lingkungan sekitarnya, sejalan dengan prinsip-prinsip dasar Pancasila.', 'Gaya Hidup Berkelanjutan', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'proyek-2.jpg', 'Bhinneka Tunggal Ika, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)', 'Proyek penguatan profil pelajar Pancasila dengan tema Bhinneka Tunggal Ika di sekolah merupakan upaya yang diarahkan untuk membentuk generasi muda yang memiliki pemahaman mendalam tentang nilai-nilai Pancasila dan mampu menjalankan semangat persatuan dalam keragaman budaya, agama, dan suku di Indonesia. Tema Bhinneka Tunggal Ika menjadi landasan penting dalam proyek ini, mengingat kekayaan keragaman yang ada di Indonesia menjadi modal sosial yang harus dihargai dan dijaga.', 'Bhinneka Tunggal Ika', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'proyek-3.jpg', 'Kearifan Lokal, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)', 'Proyek penguatan profil pelajar Pancasila dengan tema kearifan lokal di sekolah merupakan upaya yang bertujuan untuk mengintegrasikan nilai-nilai luhur Pancasila dengan nilai-nilai kearifan lokal dalam pendidikan. Tujuan dari proyek ini adalah menghasilkan generasi muda yang tidak hanya mengerti dan menghargai prinsip-prinsip dasar negara Indonesia, tetapi juga memiliki pemahaman yang mendalam terhadap budaya dan tradisi lokal yang kaya.', 'Kearifan Lokal', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, 'proyek-4.jpg', 'Bangunlah Jiwa dan Raganya, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)', 'Proyek penguatan profil pelajar Pancasila dengan tema Bhinneka Tunggal Ika di sekolah merupakan upaya yang diarahkan untuk membentuk generasi muda yang memiliki pemahaman mendalam tentang nilai-nilai Pancasila dan mampu menjalankan semangat persatuan dalam keragaman budaya, agama, dan suku di Indonesia. Tema Bhinneka Tunggal Ika menjadi landasan penting dalam proyek ini, mengingat kekayaan keragaman yang ada di Indonesia menjadi modal sosial yang harus dihargai dan dijaga.', 'Bangunlah Jiwa dan Raganya', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `remark_homes`
--

CREATE TABLE `remark_homes` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `remark_homes`
--

INSERT INTO `remark_homes` (`id`, `banner`, `title_remark`, `message`, `created_at`, `updated_at`) VALUES
(1, 'banner-sambutan.jpg', 'Sambutan Dari Kepala Sekolah SMA Negeri 1 Selat', 'Puji Syukur kepada Tuhan Yang Maha Esa yang telah memberkati SMA Negeri 1 Selat sehingga boleh berkembang dan mendapat kepercayaan masyarakat. Berkomitmen meningkatkan mutu dan pelayanan, teguh dalam iman, berbudaya serta berwawasan lingkungan sehingga mampu menghasilkan lulusan yang siap terjun ke Dunia Usaha, Dunia Industri, dan Dunia Kerja serta memiliki jiwa enterpreneur, mandiri dan mampu berkompetisi di segala bidang.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_employees`
--

CREATE TABLE `role_employees` (
  `id` bigint UNSIGNED NOT NULL,
  `role` enum('management','teacher','employee') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_employees`
--

INSERT INTO `role_employees` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'management', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'teacher', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, 'employee', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_achievements`
--

CREATE TABLE `section_achievements` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_achievements`
--

INSERT INTO `section_achievements` (`id`, `title_section`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Mencetak Prestasi Gemilang, Kisah Sukses Siswa Inspiratif Di Sekolah Kami', 'Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi mereka di luar lingkup pembelajaran akademis.', 'Lihat Semua', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_alumnis`
--

CREATE TABLE `section_alumnis` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_alumnis`
--

INSERT INTO `section_alumnis` (`id`, `title_section`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Apa Kata Alumni di SMA Negeri 1 selat?', 'Sejumlah alumni terbaik dari sekolah kami. Dari berbagai latar belakang dan jurusan studi, alumni kami telah mencapai kesuksesan dalam berbagai bidang pro', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_beasiswas`
--

CREATE TABLE `section_beasiswas` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_beasiswas`
--

INSERT INTO `section_beasiswas` (`id`, `title_section`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ayo dapatkan Peluang Beasiswa di Sekolah!', 'Dengan adanya beasiswa di sekolah, para siswa berpeluang untuk mengakses pendidikan yang berkualitas tanpa memandang latar belakang ekonomi. Ini juga membuka pintu bagi mereka untuk mengembangkan potensi diri', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_beritas`
--

CREATE TABLE `section_beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_beritas`
--

INSERT INTO `section_beritas` (`id`, `title_header`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Berita Terbaru Mengenai SMA Negeri 1 Selat', 'Lihat Semua Berita', '2023-10-12 05:43:36', '2023-10-12 05:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `section_contacts`
--

CREATE TABLE `section_contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_contacts`
--

INSERT INTO `section_contacts` (`id`, `title_section`, `url_maps`, `created_at`, `updated_at`) VALUES
(1, 'Hubungi Kami', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.576504957393!2d115.48273847492702!3d-8.44318009159662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2053a75a7b143%3A0x5e66d8200f7bf2a2!2sSMA%20Negeri%201%20Selat!5e0!3m2!1sid!2sid!4v1692022962270!5m2!1sid!2sid', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_denahs`
--

CREATE TABLE `section_denahs` (
  `id` bigint UNSIGNED NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_denahs`
--

INSERT INTO `section_denahs` (`id`, `map`, `title_section`, `title_code`, `title_room`, `button`, `created_at`, `updated_at`) VALUES
(1, 'denah-map.jpg', 'Kode Denah', 'Kode Ruangan', 'Nama Ruangan', 'Detail', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_extracurriculars`
--

CREATE TABLE `section_extracurriculars` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_extracurriculars`
--

INSERT INTO `section_extracurriculars` (`id`, `title_section`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ekstrakulikuler Membuka Potensi Dan Meningkatkan Kolaborasi', 'Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi mereka di luar lingkup pembelajaran akademis.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_galleries`
--

CREATE TABLE `section_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_galleries`
--

INSERT INTO `section_galleries` (`id`, `title_section`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Galeri Dokumentasi Sekolah', 'Masuki dunia kecemerlangan seni di Galeri SMA Negeri 1 Selat. Lepaskan kreativitasmu dan saksikan ekspresi berani dari para siswa dan seniman berbakat kami.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_graduations`
--

CREATE TABLE `section_graduations` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_graduations`
--

INSERT INTO `section_graduations` (`id`, `title_section`, `button_1`, `button_2`, `button_3`, `caption_1`, `caption_2`, `caption_3`, `created_at`, `updated_at`) VALUES
(1, 'Grafik Data Kenaikan Kelas & Kelulusan', 'Semua Siswa', 'Siswa Laki-Laki', 'Siswa Perempuan', 'Kelas X', 'Kelas XI', 'Kelas XII', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_journals`
--

CREATE TABLE `section_journals` (
  `id` bigint UNSIGNED NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_journals`
--

INSERT INTO `section_journals` (`id`, `title_header`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Majalah Terbaru Mengenai SMA Negeri 1 Selat', 'Lihat Semua Majalah', '2023-10-12 05:43:36', '2023-10-12 05:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `section_kemitraans`
--

CREATE TABLE `section_kemitraans` (
  `id` bigint UNSIGNED NOT NULL,
  `title_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_kemitraans`
--

INSERT INTO `section_kemitraans` (`id`, `title_header`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Melangkah Bersama dengan Kemitraan Aktif Sekolah-Industri', 'Manfaat kemitraan sekolah-industri dalam mempersiapkan siswa untuk masa depan dunia kerja. Dengan menjalin hubungan erat antara sekolah.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_management`
--

CREATE TABLE `section_management` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_management`
--

INSERT INTO `section_management` (`id`, `title_section`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Data Manajemen SMA Negeri 1 Selat', 'Lihat Semua', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_prasaranas`
--

CREATE TABLE `section_prasaranas` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_prasaranas`
--

INSERT INTO `section_prasaranas` (`id`, `title_section`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Pentingnya Peningkatan Sarana Dan Prasarana Di Sekolah', 'Peningkatan sarana dan prasarana di sekolah untuk menciptakan lingkungan belajar yang optimal. Infrastruktur fisik, teknologi pendidikan, keamanan, dan aksesibilitas.', 'Lihat Semua', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_programs`
--

CREATE TABLE `section_programs` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_programs`
--

INSERT INTO `section_programs` (`id`, `title_section`, `created_at`, `updated_at`) VALUES
(1, 'Program Akademik Sekolah', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_proyeks`
--

CREATE TABLE `section_proyeks` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_proyeks`
--

INSERT INTO `section_proyeks` (`id`, `title_section`, `button`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila) Di SMA Negeri 1 Selat', 'Lihat Semua', 'Proyek 5P di SMA Negeri 1 Selat tingkatkan pemahaman siswa tentang nilai-nilai Pancasila lewat pendidikan, diskusi, kegiatan sosial, dan kompetisi. Siswanya diharapkan menerapkan nilai-nilai ini dalam kehidupan sehari-hari dan masyarakat.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_services`
--

CREATE TABLE `section_services` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_services`
--

INSERT INTO `section_services` (`id`, `title_section`, `description`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Kami Mengarahkan Siswa Menuju Kesuksesan Karir', 'Kami memandu setiap siswa menuju pencapaian kesuksesan yang berkelanjutan dalam berbagai bidang karir yang mereka pilih. Visi kami adalah membantu siswa mengembangkan potensi terbaik mereka untuk meraih prestasi luar biasa dalam perjalanan karir mereka yang penuh prestasi.', 'Lihat Semua', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_staff`
--

CREATE TABLE `section_staff` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_staff`
--

INSERT INTO `section_staff` (`id`, `title_section`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Data Pegawai SMA Negeri 1 Selat', 'Lihat Semua', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_students`
--

CREATE TABLE `section_students` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_students`
--

INSERT INTO `section_students` (`id`, `title_section`, `button_1`, `button_2`, `button_3`, `caption_1`, `caption_2`, `caption_3`, `created_at`, `updated_at`) VALUES
(1, 'Grafik Data Kesiswaan', 'Semua Siswa', 'Siswa Laki-Laki', 'Siswa Perempuan', 'Kelas X', 'Kelas XI', 'Kelas XII', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_teachers`
--

CREATE TABLE `section_teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `title_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_teachers`
--

INSERT INTO `section_teachers` (`id`, `title_section`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Data Guru SMA Negeri 1 Selat', 'Lihat Semua', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_videos`
--

CREATE TABLE `section_videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_videos`
--

INSERT INTO `section_videos` (`id`, `title`, `button`, `created_at`, `updated_at`) VALUES
(1, 'Mempersembahkan tarian kebesaran SMA Negeri 1 Selat', 'Lihat Semua Video', '2023-10-12 05:43:36', '2023-10-12 05:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'Ganjil', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, 'Genap', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `kelases_id` bigint DEFAULT NULL,
  `tahun_ajarans_id` bigint DEFAULT NULL,
  `jurusans_id` bigint DEFAULT NULL,
  `indices_id` bigint DEFAULT NULL,
  `semesters_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nis`, `nisn`, `nama_lengkap`, `tahun_masuk`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kelurahan`, `kecamatan`, `alamat`, `kelases_id`, `tahun_ajarans_id`, `jurusans_id`, `indices_id`, `semesters_id`, `created_at`, `updated_at`) VALUES
(1, '28819', '45645768', 'Aditya Prayatna', '2023/2024', 'Bali', '2008-08-03', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Ahmad Yani, Denpasar, Bali', 2, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 15:24:19'),
(2, '28820', '0065471181', 'Aditya Aji Putra', '2023/2024', 'Bali', '2008-08-03', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Ubud, Ubud, Gianyar, Bali', 1, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, '28821', '797829542', 'I Kadek Agung Surya', '2023/2024', 'Bali', '2008-05-13', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Pantai Kuta, Kuta, Badung, Bali', 1, 3, 2, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, '28822', '862701208', 'Putu Gede Arya Wijaya', '2023/2024', 'Bali', '2008-05-10', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Seminyak, Seminyak, Kuta, Badung, Bali', 1, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(5, '28823', '768565785', 'Adiyasa Aiswarya', '2023/2024', 'Bali', '2008-08-03', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Tukad Citarum, No. 123, Denpasar, Bali', 1, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(6, '28824', '342565757', 'Made Ayu Wijaya', '2023/2024', 'Bali', '2008-05-13', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Danau Poso, No. 456, Kuta, Bali', 1, 3, 2, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(7, '28825', '45675758', 'Komang Sari', '2023/2024', 'Bali', '2008-05-10', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Gunung Batur, No. 789, Ubud, Bali', 1, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(8, '28826', '973844481', 'Ngurah Agung Putra Pradnya', '2022/2023', 'Bali', '2007-01-29', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Danau Buyan, Sanur, Denpasar, Bali', 2, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(9, '28827', '495433817', 'I Dewa Nyoman Tresna', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Desa Pecatu, Uluwatu, Badung, Bali', 2, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(10, '28828', '495433817', 'I Dewa Nyoman Kusuma', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Desa Pecatu, Uluwatu, Badung, Bali', 2, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(11, '28829', '456375676', 'Ni Komang Putri Wijaya', '2022/2023', 'Bali', '2007-01-29', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Tukad Citarum No. 123, Denpasar, Bali', 2, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(12, '28830', '457678689', 'Putu Ayu Saraswati', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Danau Poso No. 456, Kuta, Bali', 2, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(13, '28831', '495433817', 'Ayu Dewi Lestari', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Gunung Batur No. 789, Ubud, Bali', 2, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(14, '28832', '744424024', 'Ida Bagus Dewana', '2021/2022', 'Bali', '2007-11-24', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Tegallalang, Tegallalang, Gianyar, Bali', 3, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(15, '28833', '565765786', 'Kadek Wira', '2021/2022', 'Bali', '2006-05-12', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Bypass Ngurah Rai, Jimbaran, Badung, Bali', 3, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(16, '28834', '234234546', 'Hary Suputra', '2021/2022', 'Bali', '2006-09-18', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Pantai Sindhu, Sanur, Denpasar, Bali', 3, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(17, '28835', '546457567', 'Kadek Padma', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Hanoman, Ubud, Gianyar, Bali', 3, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(18, '28836', '87688687', 'Agni Widya', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Legian No. 543, Kuta, Bali', 3, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(19, '28837', '345346543', 'Aiswarya Laksmi', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Ubud No. 210, Ubud, Bali', 3, 3, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(20, '28838', '089789456', 'I Kadek Agung Surya', '2023/2024', 'Bali', '2008-08-03', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Seminyak No. 987, Badung, Bali', 1, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(21, '28839', '23435467', 'I Made Gede Wijaya', '2023/2024', 'Bali', '2008-05-13', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Teuku Umar No. 654, Denpasar, Bali', 1, 4, 2, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(22, '28840', '67568776', 'I Gusti Ngurah Arya', '2023/2024', 'Bali', '2008-05-10', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Diponegoro No. 321, Denpasar, Bali', 1, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(23, '28841', '34645768', 'Ni Komang Putri Wijaya', '2023/2024', 'Bali', '2008-08-03', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Seminyak No. 987, Badung, Bali', 1, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(24, '28842', '576576867', 'Putu Ayu Saraswati', '2023/2024', 'Bali', '2008-05-13', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Teuku Umar No. 654, Denpasar, Bali', 1, 4, 2, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(25, '28843', '675678679', 'Ayu Dewi Lestari', '2023/2024', 'Bali', '2008-05-10', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Diponegoro No. 321, Denpasar, Bali', 1, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(26, '28844', '5467567868', 'Made Putra Wijaya', '2022/2023', 'Bali', '2007-01-29', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Legian No. 543, Kuta, Bali', 2, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(27, '28845', '78678797', 'Wayan Putra Wijaya', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Ubud No. 210, Ubud, Bali', 2, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(28, '28846', '57657868', 'Nyoman Putra Wijaya', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan By Pass Ngurah Rai No. 1098, Denpasar, Bali', 2, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(29, '28847', '56768679', 'Ni Kadek Putri Wijaya', '2022/2023', 'Bali', '2007-01-29', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Legian No. 543, Kuta, Bali', 2, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(30, '28848', '567657868', 'Putu Gede Saraswati', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Ubud No. 210, Ubud, Bali', 2, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(31, '28849', '68678899', 'Komang Putri Sari', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan By Pass Ngurah Rai No. 1098, Denpasar, Bali', 2, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(32, '28850', '457568679', 'Nyoman Putra Wijaya', '2021/2022', 'Bali', '2007-11-24', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan By Pass Ngurah Rai No. 1098, Denpasar, Bali', 3, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(33, '28851', '56756768', 'Gede Putra Wijaya', '2021/2022', 'Bali', '2006-05-12', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Tukad Citarum No. 123, Denpasar, Bali', 3, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(34, '28852', '767856867', 'Agung Putra Wijaya', '2021/2022', 'Bali', '2006-09-18', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Danau Poso No. 456, Kuta, Bali', 3, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(35, '28853', '6575686789', 'Komang Putri Sari', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan By Pass Ngurah Rai No. 1098, Denpasar, Bali', 3, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(36, '28854', '67568679', 'Sari Ayu Wijaya', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Tukad Citarum No. 123, Denpasar, Bali', 3, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(37, '28855', '6578567867', 'Aiswarya Laksmi', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Danau Poso No. 456, Kuta, Bali', 3, 4, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(38, '28856', '54676879', 'I Gusti Ngurah Putra Wijaya', '2023/2024', 'Bali', '2008-08-03', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Kuta No. 123, Kuta, Bali', 1, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(39, '28857', '56756867', 'I Made Gede Wijaya Kusuma', '2023/2024', 'Bali', '2008-05-13', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Sanur No. 456, Sanur, Bali', 1, 5, 2, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(40, '28858', '78678989', 'Gede Pasek Surya Darma', '2023/2024', 'Bali', '2008-05-10', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Canggu No. 789, Canggu, Bali', 1, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(41, '28859', '678567879', 'Ni Wayan Saraswati Dewi', '2023/2024', 'Bali', '2008-08-03', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Legian No. 543, Kuta, Bali', 1, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(42, '28860', '4564567568', 'Putu Dewi Lestari Sari', '2023/2024', 'Bali', '2008-05-13', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Nusa Dua No. 789, Nusa Dua, Bali', 1, 5, 2, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(43, '28861', '5676868', 'Ayu Maharani Widya', '2023/2024', 'Bali', '2008-05-10', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Jimbaran No. 1098, Jimbaran, Bali', 1, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(44, '28862', '456756867', 'Agung Rai Kusuma', '2022/2023', 'Bali', '2007-01-29', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Ubud No. 1098, Ubud, Bali', 2, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(45, '28863', '56457687', 'Ngurah Putra Wijaya Dana', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Seminyak No. 987, Badung, Bali', 2, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(46, '28864', '547687978', 'Surya Darma Putra', '2022/2023', 'Bali', '2007-10-08', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Denpasar No. 654, Denpasar, Bali', 2, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(47, '28865', '3453768679', 'Komang Sari Ayu', '2022/2023', 'Bali', '2007-01-29', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Uluwatu No. 987, Uluwatu, Bali', 2, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(48, '28866', '465668678', 'Sari Dewi Saraswati', '2022/2023', 'Bali', '2007-10-08', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Gianyar No. 654, Gianyar, Bali', 2, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(49, '28867', '34547678', 'Aiswarya Laksmi Wijaya', '2022/2023', 'Bali', '2007-10-08', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Jalan Raya Klungkung No. 321, Klungkung, Bali', 2, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(50, '28868', '456457568', 'Ratih Puspa Dewi', '2021/2022', 'Bali', '2007-11-24', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Karangasem No. 210, Karangasem, Bali', 3, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(51, '28869', '34534646', 'Wijaya Kusuma Putra', '2021/2022', 'Bali', '2006-05-12', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Singaraja No. 321, Singaraja, Bali', 3, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(52, '28870', '54643657', 'Adi Sastra Wijaya', '2021/2022', 'Bali', '2006-09-18', 'L', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Tabanan No. 210, Tabanan, Bali', 3, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(53, '28871', '46456578', 'Widya Saraswati Putri', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Buleleng No. 1098, Buleleng, Bali', 3, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(54, '28872', '34534567568', 'Ni Wayan Sar', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Jalan Raya Ubud, Gianyar, Bali', 3, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(55, '28873', '45645657', 'Ida Ayu Dewi', '2021/2022', 'Bali', '2006-02-26', 'P', 'Ubung Kaja', 'Denpasar Utara', 'Puri Dewa, Gianyar, Bali', 3, 5, 1, 1, 1, '2023-10-12 05:43:35', '2023-10-12 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajarans`
--

CREATE TABLE `tahun_ajarans` (
  `id` bigint UNSIGNED NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajarans`
--

INSERT INTO `tahun_ajarans` (`id`, `tahun`, `created_at`, `updated_at`) VALUES
(1, '2019/2020', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(2, '2020/2021', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(3, '2021/2022', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(4, '2022/2023', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(5, '2023/2024', '2023-10-12 05:43:35', '2023-10-12 05:43:35'),
(6, '2024/2025', '2023-10-12 12:34:26', '2023-10-12 12:34:26'),
(7, '2025/2026', '2023-10-12 13:01:41', '2023-10-12 13:01:41'),
(8, '2026/2027', '2023-10-12 14:43:27', '2023-10-12 14:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/embed/D0UnqGm_miA?si=iZkOKj3FrwbuWIaY', '2023-10-12 05:43:36', '2023-10-12 05:43:36'),
(3, 'https://www.youtube.com/embed/M5RwaWjQZmE?si=eWnc3mzm_DnT9eTa', '2023-10-12 14:50:52', '2023-10-12 14:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `vision_missions`
--

CREATE TABLE `vision_missions` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_vision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_mission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vision_missions`
--

INSERT INTO `vision_missions` (`id`, `banner`, `title_vision`, `description_vision`, `title_mission`, `description_mission`, `created_at`, `updated_at`) VALUES
(1, 'banner-visi-misi.jpg', 'Visi sekolah', 'Menjadi lembaga pendidikan yang unggul dan inovatif dalam membentuk pemimpin masa depan yang berintegritas dan berbudaya global.', 'Misi sekolah', 'Misi Courageon School adalah menyediakan pendidikan yang berkualitas tinggi dengan mengadopsi kurikulum inovatif dan metode pembelajaran berpusat pada siswa. Kami berusaha membimbing siswa untuk mengembangkan keberanian dan kreativitas mereka melalui berbagai program ekstrakurikuler yang beragam. Melalui nilai-nilai keberanian, inovasi, dan tanggung jawab, kami berkomitmen untuk membentuk siswa yang memiliki karakter unggul, siap menghadapi tantangan masa depan, dan berkontribusi positif bagi masyarakat dan dunia.', '2023-10-12 05:43:35', '2023-10-12 05:43:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auths`
--
ALTER TABLE `auths`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auths_email_unique` (`email`);

--
-- Indexes for table `beasiswas`
--
ALTER TABLE `beasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beasiswa_penerimas`
--
ALTER TABLE `beasiswa_penerimas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curricula`
--
ALTER TABLE `curricula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denahs`
--
ALTER TABLE `denahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_role_employees_id_course_id_created_at_index` (`role_employees_id`,`course_id`,`created_at`);

--
-- Indexes for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_academics`
--
ALTER TABLE `header_academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_homes`
--
ALTER TABLE `header_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_humas`
--
ALTER TABLE `header_humas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_profiles`
--
ALTER TABLE `header_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_sarana_prasaranas`
--
ALTER TABLE `header_sarana_prasaranas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_students`
--
ALTER TABLE `header_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_homes`
--
ALTER TABLE `history_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_kenaikan_siswas`
--
ALTER TABLE `history_kenaikan_siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hymnes`
--
ALTER TABLE `hymnes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indices`
--
ALTER TABLE `indices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_prestasis`
--
ALTER TABLE `kategori_prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenaikan_kelas`
--
ALTER TABLE `kenaikan_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kenaikan_kelas_tahun_ajarans_id_index` (`tahun_ajarans_id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mars`
--
ALTER TABLE `mars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mottoes`
--
ALTER TABLE `mottoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigasis`
--
ALTER TABLE `navigasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_homes`
--
ALTER TABLE `opening_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnerships`
--
ALTER TABLE `partnerships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelayanan_karirs`
--
ALTER TABLE `pelayanan_karirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembinaan_siswas`
--
ALTER TABLE `pembinaan_siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prasaranas`
--
ALTER TABLE `prasaranas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remark_homes`
--
ALTER TABLE `remark_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_employees`
--
ALTER TABLE `role_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_achievements`
--
ALTER TABLE `section_achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_alumnis`
--
ALTER TABLE `section_alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_beasiswas`
--
ALTER TABLE `section_beasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_beritas`
--
ALTER TABLE `section_beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_contacts`
--
ALTER TABLE `section_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_denahs`
--
ALTER TABLE `section_denahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_extracurriculars`
--
ALTER TABLE `section_extracurriculars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_galleries`
--
ALTER TABLE `section_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_graduations`
--
ALTER TABLE `section_graduations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_journals`
--
ALTER TABLE `section_journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_kemitraans`
--
ALTER TABLE `section_kemitraans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_management`
--
ALTER TABLE `section_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_prasaranas`
--
ALTER TABLE `section_prasaranas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_programs`
--
ALTER TABLE `section_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_proyeks`
--
ALTER TABLE `section_proyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_services`
--
ALTER TABLE `section_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_staff`
--
ALTER TABLE `section_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_students`
--
ALTER TABLE `section_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_teachers`
--
ALTER TABLE `section_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_videos`
--
ALTER TABLE `section_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision_missions`
--
ALTER TABLE `vision_missions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auths`
--
ALTER TABLE `auths`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beasiswas`
--
ALTER TABLE `beasiswas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beasiswa_penerimas`
--
ALTER TABLE `beasiswa_penerimas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `curricula`
--
ALTER TABLE `curricula`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `denahs`
--
ALTER TABLE `denahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `header_academics`
--
ALTER TABLE `header_academics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_homes`
--
ALTER TABLE `header_homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_humas`
--
ALTER TABLE `header_humas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_profiles`
--
ALTER TABLE `header_profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_sarana_prasaranas`
--
ALTER TABLE `header_sarana_prasaranas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_students`
--
ALTER TABLE `header_students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_homes`
--
ALTER TABLE `history_homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_kenaikan_siswas`
--
ALTER TABLE `history_kenaikan_siswas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hymnes`
--
ALTER TABLE `hymnes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `indices`
--
ALTER TABLE `indices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_prestasis`
--
ALTER TABLE `kategori_prestasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kenaikan_kelas`
--
ALTER TABLE `kenaikan_kelas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mars`
--
ALTER TABLE `mars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `mottoes`
--
ALTER TABLE `mottoes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navigasis`
--
ALTER TABLE `navigasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opening_homes`
--
ALTER TABLE `opening_homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partnerships`
--
ALTER TABLE `partnerships`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelayanan_karirs`
--
ALTER TABLE `pelayanan_karirs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembinaan_siswas`
--
ALTER TABLE `pembinaan_siswas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prasaranas`
--
ALTER TABLE `prasaranas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `remark_homes`
--
ALTER TABLE `remark_homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_employees`
--
ALTER TABLE `role_employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_achievements`
--
ALTER TABLE `section_achievements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_alumnis`
--
ALTER TABLE `section_alumnis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_beasiswas`
--
ALTER TABLE `section_beasiswas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_beritas`
--
ALTER TABLE `section_beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_contacts`
--
ALTER TABLE `section_contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_denahs`
--
ALTER TABLE `section_denahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_extracurriculars`
--
ALTER TABLE `section_extracurriculars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_galleries`
--
ALTER TABLE `section_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_graduations`
--
ALTER TABLE `section_graduations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_journals`
--
ALTER TABLE `section_journals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_kemitraans`
--
ALTER TABLE `section_kemitraans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_management`
--
ALTER TABLE `section_management`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_prasaranas`
--
ALTER TABLE `section_prasaranas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_programs`
--
ALTER TABLE `section_programs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_proyeks`
--
ALTER TABLE `section_proyeks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_services`
--
ALTER TABLE `section_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_staff`
--
ALTER TABLE `section_staff`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_students`
--
ALTER TABLE `section_students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_teachers`
--
ALTER TABLE `section_teachers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_videos`
--
ALTER TABLE `section_videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vision_missions`
--
ALTER TABLE `vision_missions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
