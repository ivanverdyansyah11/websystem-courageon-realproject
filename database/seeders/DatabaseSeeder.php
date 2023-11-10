<?php

namespace Database\Seeders;

use App\Models\Alumni;
use App\Models\Auth;
use App\Models\Beasiswa;
use App\Models\BeasiswaPenerima;
use App\Models\Berita;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Denah;
use App\Models\Employee;
use App\Models\Extracurricular;
use App\Models\Gallery;
use App\Models\HeaderAcademic;
use App\Models\HeaderHome;
use App\Models\HeaderHumas;
use App\Models\HeaderProfile;
use App\Models\HeaderSaranaPrasarana;
use App\Models\HeaderStudent;
use App\Models\HistoryHome;
use App\Models\HistoryKenaikanSiswa;
use App\Models\Hymne;
use App\Models\Index;
use App\Models\Journal;
use App\Models\Jurusan;
use App\Models\KategoriPrestasi;
use App\Models\Kelas;
use App\Models\KenaikanKelas;
use App\Models\Logo;
use App\Models\Mars;
use App\Models\Motto;
use App\Models\Navigasi;
use App\Models\OpeningHome;
use App\Models\Partnership;
use App\Models\PelayananKarir;
use App\Models\PembinaanSiswa;
use App\Models\Prasarana;
use App\Models\Prestasi;
use App\Models\Program;
use App\Models\Project;
use App\Models\RemarkHome;
use App\Models\RoleEmployee;
use App\Models\SectionAchievement;
use App\Models\SectionAlumni;
use App\Models\SectionBeasiswa;
use App\Models\SectionBerita;
use App\Models\SectionContact;
use App\Models\SectionDenah;
use App\Models\SectionExtracurricular;
use App\Models\SectionGallery;
use App\Models\SectionGraduation;
use App\Models\SectionJournal;
use App\Models\SectionKemitraan;
use App\Models\SectionManagement;
use App\Models\SectionPrasarana;
use App\Models\SectionProgram;
use App\Models\SectionProyek;
use App\Models\SectionService;
use App\Models\SectionStaff;
use App\Models\SectionStudent;
use App\Models\SectionTeacher;
use App\Models\SectionVideo;
use App\Models\Semester;
use App\Models\Student;
use App\Models\TahunAjaran;
use App\Models\Video;
use App\Models\VisionMission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthSeeder::class);
        $this->call(HeaderHomeSeeder::class);
        $this->call(HistoryHomeSeeder::class);
        $this->call(OpeningHomeSeeder::class);
        $this->call(RemarkHomeSeeder::class);
        $this->call(NavigasiSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(HeaderProfileSeeder::class);
        $this->call(HymneSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(MarsSeeder::class);
        $this->call(MottoSeeder::class);
        $this->call(VisionMissionSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(RoleEmployeeSeeder::class);
        $this->call(SectionContactSeeder::class);
        $this->call(SectionManagementSeeder::class);
        $this->call(SectionStaffSeeder::class);
        $this->call(SectionTeacherSeeder::class);
        $this->call(CurriculumSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(SectionGallerySeeder::class);
        $this->call(SectionProgramSeeder::class);
        $this->call(SectionProyekSeeder::class);
        $this->call(HeaderAcademicSeeder::class);
        $this->call(HeaderStudentSeeder::class);
        $this->call(HistoryKenaikanSiswaSeeder::class);
        $this->call(IndexSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(KenaikanKelasSeeder::class);
        $this->call(SectionGraduationSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(TahunAjaranSeeder::class);
        $this->call(AlumniSeeder::class);
        $this->call(BeasiswaSeeder::class);
        $this->call(BeasiswaPenerimaSeeder::class);
        $this->call(ExtracurricularSeeder::class);
        $this->call(KategoriPrestasiSeeder::class);
        $this->call(PelayananKarirSeeder::class);
        $this->call(PembinaanSiswaSeeder::class);
        $this->call(PrestasiSeeder::class);
        $this->call(SectionAchievementSeeder::class);
        $this->call(SectionAlumniSeeder::class);
        $this->call(SectionBeasiswaSeeder::class);
        $this->call(SectionExtracurricularSeeder::class);
        $this->call(SectionServiceSeeder::class);
        $this->call(SectionStudentSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(DenahSeeder::class);
        $this->call(HeaderHumasSeeder::class);
        $this->call(HeaderSaranaPrasaranaSeeder::class);
        $this->call(PartnershipSeeder::class);
        $this->call(PrasaranaSeeder::class);
        $this->call(SectionDenahSeeder::class);
        $this->call(SectionJournalSeeder::class);
        $this->call(SectionKemitraanSeeder::class);
        $this->call(SectionPrasaranaSeeder::class);
        $this->call(SectionVideoSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(SectionBeritaSeeder::class);
    }
}
