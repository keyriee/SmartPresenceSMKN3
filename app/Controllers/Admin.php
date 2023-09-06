<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\JabatanModel;
use App\Models\PegawaiModel;
use App\Models\PengaturanModel;
use App\Models\AbsenModel;
use App\Models\AbsenDetailModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Admin extends BaseController
{
    protected $AdminModel;
    protected $JabatanModel;
    protected $PegawaiModel;
    protected $PengaturanModel;
    protected $AbsenModel;
    protected $AbsenDetailModel;

    public function __construct()
    {

        $this->AdminModel = new AdminModel();
        $this->JabatanModel = new JabatanModel();
        $this->PegawaiModel = new PegawaiModel();
        $this->PengaturanModel = new PengaturanModel();
        $this->AbsenModel = new AbsenModel();
        $this->AbsenDetailModel = new AbsenDetailModel();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => 'show active',
            'tab_master' => '',
            'dashboard' => 'current-page',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => ''
        ];

        // Plugin Tambahan
        $data['plugin'] = '
            
        ';

        $data['judul_halaman'] = 'Dashboard Admin | Presensi Pegawai By Keyrie Eleison';
        $data['judul_sidebar'] = 'Dashboard';
        $data['admin'] = $this->AdminModel->asObject()->first();
        $data['pegawai'] = $this->PegawaiModel->asObject()->findAll();
        $data['jabatan'] = $this->JabatanModel->asObject()->findAll();

        return view('admin/dashboard', $data);
    }
    public function profile()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => 'show active',
            'tab_master' => '',
            'dashboard' => 'current-page',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => ''
        ];

        // Plugin Tambahan
        $data['plugin'] = '
            
        ';

        $data['judul_halaman'] = 'Profile Admin | Presensi Pegawai By Keyrie Eleison';
        $data['judul_sidebar'] = 'Dashboard';
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/profile', $data);
    }
    public function profile_()
    {
        $fileGambar = $this->request->getFile('gambar');

        // Cek Gambar, Apakah Tetap Gambar lama
        if ($fileGambar->getError() == 4) {
            $nama_gambar = $this->request->getVar('gambar_lama');
        } else {
            // Generate nama file Random
            $nama_gambar = $fileGambar->getRandomName();
            // Upload Gambar

            $fileGambar->move('assets/img/pegawai', $nama_gambar);
            if ($this->request->getVar('gambar_lama') != 'default.jpg') {
                unlink('assets/img/pegawai/' . $this->request->getVar('gambar_lama'));
            }
        }

        $this->AdminModel
            ->set('nama_admin', $this->request->getVar('nama'))
            ->set('gambar', $nama_gambar)
            ->where('id_admin', session()->get('id_admin'))
            ->update();

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Profile Updated!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/profile');
    }
    public function password()
    {
        $admin = $this->AdminModel->asObject()->first();

        $current_password = $this->request->getVar('current_password');
        $new_password = $this->request->getVar('new_password');

        if ($current_password != $admin->password) {
            session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Error!',
                        'Current Password salah!',
                        'error'
                    )
                </script>
            ");

            return redirect()->to('admin/profile');
        }

        $this->AdminModel
            ->set('password', $new_password)
            ->where('id_admin', session()->get('id_admin'))
            ->update();

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Password Terupdate!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/profile');
    }

    // START::PEGAWAI
    public function pegawai()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => 'current-page',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => ''
        ];

        $data['plugin'] = '
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4.css" />
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4-custom.css" />
            <link href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.bs.css" rel="stylesheet" />
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bootstrap.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/custom/custom-datatables.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/jszip.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/pdfmake.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/vfs_fonts.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/html5.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.print.min.js"></script>	
        ';

        $data['judul_halaman'] = 'Data Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['pegawai'] = $this->PegawaiModel->getAll();
        $data['jabatan'] = $this->JabatanModel->asObject()->findAll();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/pegawai/data-pegawai', $data);
    }
    public function tambah_pegawai()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => 'current-page',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => ''
        ];

        $data['plugin'] = '
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/bs-select/bs-select.css" />
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/bs-select/bs-select.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/bs-select/bs-select-custom.js"></script>
        ';

        $data['judul_halaman'] = 'Tambah Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['jabatan'] = $this->JabatanModel->asObject()->findAll();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/pegawai/tambah-pegawai', $data);
    }
    public function tambah_pegawai_()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $dataPegawai = $this->PegawaiModel->getByNip($this->request->getVar('nip'));

        if ($dataPegawai != null) {
            session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Error!',
                    'NIP sudah terpakai!',
                    'error'
                );
            </script>
        ");

            return redirect()->to('admin/tambah_pegawai');
        } else {
            $fileGambar = $this->request->getFile('gambar');

            // Cek Gambar, Apakah Tetap Gambar lama
            if ($fileGambar->getError() == 4) {
                $nama_gambar = 'default.jpg';
            } else {
                // Generate nama file Random
                $nama_gambar = $fileGambar->getRandomName();
                // Upload Gambar
                $fileGambar->move('assets/img/pegawai', $nama_gambar);
            }

            $data_pegawai = [
                'nip' => $this->request->getVar('nip'),
                'nama_pegawai' => $this->request->getVar('nama_pegawai'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'jabatan' => $this->request->getVar('jabatan'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('nip'),
                'gambar' => $nama_gambar,
                'is_active' => 1,
                'role' => 2
            ];

            $this->PegawaiModel->save($data_pegawai);

            $cek = $this->AbsenModel->getByTanggal(date('d-M-Y', time()));

            $cekPegawai = $this->PegawaiModel->getByNip($this->request->getVar('nip'));

            $detail_pegawai = [
                'kode_absensi' => $cek->kode_absensi,
                'pegawai' => $cekPegawai->id_pegawai,
            ];

            if ($cek != null) {
                $this->AbsenDetailModel->save($detail_pegawai);
            }

            session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Data Berhasil Di Tambah!',
                    'success'
                )
            </script>
        ");

            return redirect()->to('admin/pegawai');
        }
    }
    public function edit_pegawai()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        if ($this->request->isAJAX()) {
            $id_pegawai = $this->request->getVar('id_pegawai');
            $pegawai = $this->PegawaiModel->asObject()->find($id_pegawai);
            echo json_encode($pegawai);
        }
    }
    public function edit_pegawai_()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $fileGambar = $this->request->getFile('gambar');

        // Cek Gambar, Apakah Tetap Gambar lama
        if ($fileGambar->getError() == 4) {
            $nama_gambar = $this->request->getVar('gambar_lama');
        } else {
            // Generate nama file Random
            $nama_gambar = $fileGambar->getRandomName();
            // Upload Gambar
            $fileGambar->move('assets/img/pegawai', $nama_gambar);
            // hapus File Yang Lama
            if ($this->request->getVar('gambar_lama') != 'default.jpg') {
                unlink('assets/img/pegawai/' . $this->request->getVar('gambar_lama'));
            }
        }

        $this->PegawaiModel->save([
            'id_pegawai' => $this->request->getVar('id_pegawai'),
            'nama_pegawai' => $this->request->getVar('nama_pegawai'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'jabatan' => $this->request->getVar('jabatan'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'gambar' => $nama_gambar,
            'is_active' => $this->request->getVar('is_active'),
        ]);

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Data Berhasil Di Update!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/pegawai');
    }
    public function download_excel()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        return $this->response->download('assets/file-upload/' . 'template_pegawai.xlsx', null);
    }
    public function excel_pegawai()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        // TANGKAP FILE EXCEL YANG DI UPLLOAD
        $file = $this->request->getFile('excel');
        // AMBIL EXTENSI EXCEL YANG DI UPLOAD
        $ekstensi = $file->getClientExtension();
        $mime = $file->getMimeType();

        // CEK APAKAH YG DI UPLOAD FILE EXCEL SUNGGUHAN
        if ($mime != 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {

            session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Error!',
                        'File yg di upload harus excel!',
                        'error'
                    )
                </script>
            ");

            return redirect()->to('admin/tambah_pegawai');
        }

        // JIKA EKSTENSINYA XLS BERARTI FORMAT EXCEL VERSI LAMA
        if ($ekstensi == 'xls') {
            $reader = new Xls();
        }
        // JIKA EKSTENSINYA XLSX BERARTI FORMAT EXCEL VERSI BARU
        if ($ekstensi == 'xlsx') {
            $reader = new Xlsx();
        }
        /** Load $inputFileName to a Spreadsheet Object  **/
        $spreadsheet = $reader->load($file);
        // SIMPAN DATA EXCEL KEDALAM VARIABLE $data DAN UBAH MENJADI ARRAY
        $data = $spreadsheet->getActiveSheet()->toArray();
        // LOOPING DATA EXCEL

        // DATA DETAIL UJIAN PG
        $data_pegawai = [];

        foreach ($data as $baris => $kolom) {
            // KARENA DI DALAM EXCELNYA MEMILIKI HEADER / JUDUL (contoh : nama | jabatan | email)
            // MAKA SKIP BAGIAN JUDUL / BARIS PERTAMA
            if ($baris != 0) {
                // AMBDIL DATA DARI BARIS KEDUA DAN MENYIMPANNYA KEDALAM VARIABEL $data_pegawai
                if ($kolom[0] != null) {
                    array_push($data_pegawai, array(
                        'nip' => $kolom[0],
                        'nama_pegawai' => $kolom[1],
                        'jenis_kelamin' => $kolom[2],
                        'jabatan' => $kolom[3],
                        'email' => $kolom[4],
                        'password' => $kolom[0],
                        'gambar' => 'default.jpg',
                        'is_active' => 1,
                        'role' => 2
                    ));
                }
            }
        }

        $this->PegawaiModel->insertBatch($data_pegawai);
        session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Berhasil!',
                        'Data berhasil di Tambah!',
                        'success'
                    )
                </script>
            ");

        return redirect()->to('admin/pegawai');
    }
    public function hapus_pegawai($id)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $pegawai = $this->PegawaiModel->asObject()->find($id);

        if ($pegawai == null) {
            session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Error!',
                        'Data Pegawai Tidak ditemukan!',
                        'error'
                    )
                </script>
            ");

            return redirect()->to('admin/pegawai');
        }

        if ($pegawai->gambar != 'default.jpg') {
            unlink('assets/img/pegawai/' . $pegawai->gambar);
        }

        $this->PegawaiModel->delete($id);
        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Data Pegawai di hapus!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/pegawai');
    }
    // END::PEGAWAI

    // START::JABATAN
    public function jabatan()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => 'current-page',
            'pengaturan_absen' => '',
            'absensi' => ''
        ];

        $data['plugin'] = '
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4.css" />
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4-custom.css" />
            <link href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.bs.css" rel="stylesheet" />
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bootstrap.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/custom/custom-datatables.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/jszip.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/pdfmake.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/vfs_fonts.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/html5.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.print.min.js"></script>	
        ';

        $data['judul_halaman'] = 'Data Jabatan';
        $data['judul_sidebar'] = 'Master Data';

        $data['jabatan'] = $this->JabatanModel->asObject()->findAll();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/pegawai/data-jabatan', $data);
    }
    public function tambah_jabatan()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => 'current-page',
            'pengaturan_absen' => '',
            'absensi' => ''
        ];

        $data['plugin'] = '
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/bs-select/bs-select.css" />
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/bs-select/bs-select.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/bs-select/bs-select-custom.js"></script>
        ';

        $data['judul_halaman'] = 'Tambah Jabatan';
        $data['judul_sidebar'] = 'Master Data';
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/pegawai/tambah-jabatan', $data);
    }
    public function tambah_jabatan_()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data_jabatan = [];
        $nama_jabatan = $this->request->getVar('nama_jabatan');

        foreach ($nama_jabatan as $nama) {
            array_push($data_jabatan, [
                'nama_jabatan' => $nama
            ]);
        }

        $this->JabatanModel->insertBatch($data_jabatan);

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Data Berhasil Di Tambah!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/jabatan');
    }
    public function hapus_jabatan($id)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $this->JabatanModel->delete($id);

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Data Berhasil Di Hapus!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/jabatan');
    }
    public function edit_jabatan()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $this->JabatanModel->save([
            'id_jabatan' => $this->request->getVar('id_jabatan'),
            'nama_jabatan' => $this->request->getVar('nama_jabatan')
        ]);

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Data Berhasil Di Update!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/jabatan');
    }
    // END::JABATAN

    // START::PENGATURAN ABSEN
    public function pengaturan_absen()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => 'current-page',
            'absensi' => ''
        ];

        $data['plugin'] = '';

        $data['judul_halaman'] = 'Setting Absensi';
        $data['judul_sidebar'] = 'Master Data';

        $data['jabatan'] = $this->JabatanModel->asObject()->findAll();
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/setting-absensi', $data);
    }
    public function setting_absen_()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();
        $latitude_longitude = explode(',', $this->request->getVar('latitude_longitude'));

        $this->PengaturanModel->save([
            'id_pengaturan_absen' => $this->request->getVar('id_pengaturan_absen'),
            'jam_masuk' => $this->request->getVar('jam_masuk'),
            'jam_keluar' => $this->request->getVar('jam_keluar'),
            'latitude' => $latitude_longitude[0],
            'longitude' => trim($latitude_longitude[1], ' '),
            'batas_jarak' => $this->request->getVar('batas_jarak')
        ]);

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Data Berhasil Di Update!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/pengaturan_absen');
    }
    public function hitung_jarak()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        function distance($lat1, $lon1, $lat2, $lon2, $unit)
        {
            if (($lat1 == $lat2) && ($lon1 == $lon2)) {
                return 0;
            } else {
                $theta = $lon1 - $lon2;
                $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                $miles = $dist * 60 * 1.1515;
                $unit = strtoupper($unit);

                if ($unit == "K") {
                    return ($miles * 1.609344);
                } else if ($unit == "N") {
                    return ($miles * 0.8684);
                } else {
                    return $miles;
                }
            }
        }

        // echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
        // echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
        // echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";

        echo (ceil(distance(-6.299343650274825, 107.28533103878851, -6.205034529440262, 107.53736151406567, "K")) * 1000) . " Meter<br>";
    }
    // END::PENGATURAN ABSEN

    // START::ABSENSI
    public function absensi()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4.css" />
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4-custom.css" />
            <link href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.bs.css" rel="stylesheet" />
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bootstrap.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/custom/custom-datatables.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/jszip.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/pdfmake.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/vfs_fonts.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/html5.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.print.min.js"></script>	
        ';

        $data['judul_halaman'] = 'Data Absensi';
        $data['judul_sidebar'] = 'Master Data';

        $data['absensi'] = $this->AbsenModel->getByTanggal(date('d-M-Y', time()));
        $data['riwayat_absen'] = $this->AbsenDetailModel->getAllByMonth();
        $data['admin'] = $this->AdminModel->asObject()->first();
        $data['bulan'] = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        // // Mendapatkan tahun saat ini
        // $year = date('Y');

        // // Membuat array 5 tahun terakhir
        // $lastFiveYears = array();
        // for ($i = 0; $i < 5; $i++) {
        //     $lastFiveYears[] = $year - $i;
        // }

        $tahun = 2023;
        $tahunNow = date('Y');
        $jmlTahun = $tahunNow - $tahun;

        $arrTahun = [];
        for ($i = 0; $i <= $jmlTahun; $i++) {
            $lastFiveYears[] = $tahun + $i;
        }

        $data['tahun'] = $lastFiveYears;

        $data['getBulan'] = "";
        $data['getTahun'] = "";


        return view('admin/absensi/data-absensi', $data);
    }

    public function filter_absensi()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4.css" />
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4-custom.css" />
            <link href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.bs.css" rel="stylesheet" />
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bootstrap.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/custom/custom-datatables.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/jszip.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/pdfmake.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/vfs_fonts.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/html5.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.print.min.js"></script>	
        ';

        $data['judul_halaman'] = 'Data Absensi';
        $data['judul_sidebar'] = 'Master Data';

        $data['absensi'] = $this->AbsenModel->getByTanggal(date('d-M-Y', time()));

        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');

        $data['getBulan'] = $bulan;
        $data['getTahun'] = $tahun;

        $data['bulan'] = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        //  // Mendapatkan tahun saat ini
        //  $year = date('Y');

        //  // Membuat array 5 tahun terakhir
        //  $lastFiveYears = array();
        //  for ($i = 0; $i < 5; $i++) {
        //      $lastFiveYears[] = $year - $i;
        //  }

        $tahun = 2023;
        $tahunNow = date('Y');
        $jmlTahun = $tahunNow - $tahun;

        $arrTahun = [];
        for ($i = 0; $i <= $jmlTahun; $i++) {
            $lastFiveYears[] = $tahun + $i;
        }

        $data['tahun'] = $lastFiveYears;

        $data['riwayat_absen'] = $this->AbsenDetailModel->getAllByMonthFilter($bulan, $tahun);

        // echo $this->AbsenModel->getLastQuery();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/data-absensi', $data);
    }

    public function absen_hari_ini()
    {
        $absen_hari_ini = $this->AbsenModel->getByTanggal(date('d-M-Y', time()));
        $pegawai = $this->PegawaiModel->asObject()->findAll();

        if ($absen_hari_ini != null) {
            // ABSEN SUDAH DIBUAT
            session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Error!',
                        'Absen hari ini sudah pernah dibuat!',
                        'error'
                    );
                </script>
            ");
            return redirect()->to('admin/absensi');
        }

        if ($pegawai == null) {
            // BELUM ADA DATA PEGAWAI
            session()->setFlashdata('pesan', "
                <script>
                    Swal.fire(
                        'Error!',
                        'Belum ada data pegawai, absen tidak bisa dibuat!',
                        'error'
                    );
                </script>
            ");
            return redirect()->to('admin/absensi');
        }

        absen_hari_ini();;
        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Absen Dibuat!',
                    'success'
                )
            </script>
        ");
        return redirect()->to('admin/absensi');
    }
    public function absen($kode_absen)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4.css" />
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4-custom.css" />
            <link href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.bs.css" rel="stylesheet" />
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bootstrap.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/custom/custom-datatables.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/jszip.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/pdfmake.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/vfs_fonts.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/html5.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.print.min.js"></script>	
        ';

        $data['judul_halaman'] = 'Detail Absensi';
        $data['judul_sidebar'] = 'Master Data';

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getAllByKodeAbsen($kode_absen);
        $data['admin'] = $this->AdminModel->asObject()->first();
        $data['set_absen'] = $this->PengaturanModel
            ->get()->getRowObject();

        $data['kode_absen'] = $kode_absen;

        return view('admin/absensi/detail-absensi', $data);
    }
    public function detail_pegawai()
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4.css" />
            <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4-custom.css" />
            <link href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.bs.css" rel="stylesheet" />
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bootstrap.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/custom/custom-datatables.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/jszip.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/pdfmake.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/vfs_fonts.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/html5.min.js"></script>
            <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.print.min.js"></script>	
        ';

        $data['judul_halaman'] = 'Detail Absensi';
        $data['judul_sidebar'] = 'Master Data';

        $id_pegawai = $this->request->getVar('id');
        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');

        $data['getBulan'] = $bulan;
        $data['getTahun'] = $tahun;
        $data['getPegawai'] = $id_pegawai;

        $data['detail_absensi'] = $this->AbsenDetailModel->getAllByMonthByPegawai($id_pegawai, $bulan, $tahun);
        $data['pegawai'] = $this->PegawaiModel->getByID($id_pegawai);
        $data['admin'] = $this->AdminModel->asObject()->first();
        $data['set_absen'] = $this->PengaturanModel
            ->get()->getRowObject();

        $data['bulan'] = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        return view('admin/absensi/detail-absensi-2', $data);
    }
    public function absen_pegawai($kode_absen, $id_pegawai)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
        ';

        $data['judul_halaman'] = 'Data Absensi Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getByKodeAndIdPegawai($kode_absen, $id_pegawai);
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/detail-absensi-pegawai', $data);
    }
    public function izin_pegawai($kode_absen, $id_pegawai)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
        ';

        $data['judul_halaman'] = 'Data Izin Absensi Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getByKodeAndIdPegawai($kode_absen, $id_pegawai);
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/detail-izin-pegawai', $data);
    }
    public function sakit_pegawai($kode_absen, $id_pegawai)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
        ';

        $data['judul_halaman'] = 'Data Sakit Absensi Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getByKodeAndIdPegawai($kode_absen, $id_pegawai);
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/detail-sakit-pegawai', $data);
    }
    public function dinas_luar_pegawai($kode_absen, $id_pegawai)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
        ';

        $data['judul_halaman'] = 'Data Dinas Luar Absensi Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getByKodeAndIdPegawai($kode_absen, $id_pegawai);
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/detail-dinas-luar-pegawai', $data);
    }
    public function view_cetak($kode_absen)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }

        // Plugin Tambahan
        $data['plugin'] = '
         <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4.css" />
         <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4-custom.css" />
         <link href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.bs.css" rel="stylesheet" />
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bootstrap.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/custom/custom-datatables.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/jszip.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/pdfmake.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/vfs_fonts.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/html5.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.print.min.js"></script>	
     ';

        $data['judul_halaman'] = 'Detail Absensi';
        $data['judul_sidebar'] = 'Master Data';

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['riwayat_absensi'] = $this->AbsenDetailModel->getAllByKodeAbsen($kode_absen);
        $data['admin'] = $this->AdminModel->getAdminByEmail(session()->get('email'));
        $data['set_absen'] = $this->PengaturanModel
            ->get()->getRowObject();

        return view('admin/pegawai/view_cetak', $data);
    }
    public function view_cetak2($id_pegawai, $bulan, $tahun)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }

        // Plugin Tambahan
        $data['plugin'] = '
         <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4.css" />
         <link rel="stylesheet" href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bs4-custom.css" />
         <link href="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.bs.css" rel="stylesheet" />
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/dataTables.bootstrap.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/custom/custom-datatables.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/jszip.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/pdfmake.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/vfs_fonts.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/html5.min.js"></script>
         <script src="' . base_url('assets/template/presensi-abdul') . '/vendor/datatables/buttons.print.min.js"></script>	
     ';

        $data['judul_halaman'] = 'Detail Absensi';
        $data['judul_sidebar'] = 'Master Data';

        // $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        // $data['riwayat_absensi'] = $this->AbsenDetailModel->getAllByKodeAbsen($kode_absen);
        $data['riwayat_absensi'] = $this->AbsenDetailModel->getAllByMonthByPegawai($id_pegawai, $bulan, $tahun);
        $data['admin'] = $this->AdminModel->getAdminByEmail(session()->get('email'));
        $data['set_absen'] = $this->PengaturanModel
            ->get()->getRowObject();

        return view('admin/pegawai/view_cetak2', $data);
    }

    public function absen_pegawai_2($kode_absen, $id_pegawai, $bulan, $tahun)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
        ';

        $data['judul_halaman'] = 'Data Absensi Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['id_pegawai'] = $id_pegawai;

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getByKodeAndIdPegawai($kode_absen, $id_pegawai);
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/detail-absensi-pegawai-2', $data);
    }
    public function izin_pegawai_2($kode_absen, $id_pegawai, $bulan, $tahun)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
        ';

        $data['judul_halaman'] = 'Data Izin Absensi Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['id_pegawai'] = $id_pegawai;

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getByKodeAndIdPegawai($kode_absen, $id_pegawai);
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/detail-izin-pegawai-2', $data);
    }
    public function sakit_pegawai_2($kode_absen, $id_pegawai, $bulan, $tahun)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
        ';

        $data['judul_halaman'] = 'Data Sakit Absensi Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['id_pegawai'] = $id_pegawai;

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getByKodeAndIdPegawai($kode_absen, $id_pegawai);
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/detail-sakit-pegawai-2', $data);
    }
    public function dinas_luar_pegawai_2($kode_absen, $id_pegawai, $bulan, $tahun)
    {
        if (session()->get('role') != 1) {
            return redirect()->to('auth');
        }
        // absen_hari_ini();

        $data['menu'] = [
            'tab_home' => '',
            'tab_master' => 'show active',
            'dashboard' => '',
            'pegawai' => '',
            'jabatan' => '',
            'pengaturan_absen' => '',
            'absensi' => 'current-page'
        ];

        $data['plugin'] = '
        ';

        $data['judul_halaman'] = 'Data Dinas Luar Absensi Pegawai';
        $data['judul_sidebar'] = 'Master Data';

        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['id_pegawai'] = $id_pegawai;

        $data['absensi'] = $this->AbsenModel->getByKode($kode_absen);
        $data['detail_absensi'] = $this->AbsenDetailModel->getByKodeAndIdPegawai($kode_absen, $id_pegawai);
        $data['pengaturan'] = $this->PengaturanModel->asObject()->first();
        $data['admin'] = $this->AdminModel->asObject()->first();

        return view('admin/absensi/detail-dinas-luar-pegawai-2', $data);
    }
    public function download_izin($bukti_izin)
    {
        return $this->response->download('assets/img/pegawai/' . $bukti_izin, null);
    }
    public function izinkan($kode_absen, $id_pegawai)
    {
        $this->AbsenDetailModel
            ->set('status_izin', 1)
            ->where('kode_absensi', $kode_absen)
            ->where('pegawai', $id_pegawai)
            ->update();

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Berhasil Diizinkan!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/izin_pegawai' . '/' . $kode_absen . '/' . $id_pegawai);
    }
    public function setujuisakit($kode_absen, $id_pegawai)
    {
        $this->AbsenDetailModel
            ->set('status_sakit', 1)
            ->where('kode_absensi', $kode_absen)
            ->where('pegawai', $id_pegawai)
            ->update();

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Berhasil Disetujui!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/sakit_pegawai' . '/' . $kode_absen . '/' . $id_pegawai);
    }
    public function setujuidinasluar($kode_absen, $id_pegawai)
    {
        $this->AbsenDetailModel
            ->set('status_dinas_luar', 1)
            ->where('kode_absensi', $kode_absen)
            ->where('pegawai', $id_pegawai)
            ->update();

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Berhasil Disetujui!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/dinas_luar_pegawai' . '/' . $kode_absen . '/' . $id_pegawai);
    }
    public function hapus_absen($kode_absen)
    {
        $this->AbsenModel
            ->where('kode_absensi', $kode_absen)
            ->delete();

        $this->AbsenDetailModel
            ->where('kode_absensi', $kode_absen)
            ->delete();

        session()->setFlashdata('pesan', "
            <script>
                Swal.fire(
                    'Berhasil!',
                    'Data Berhasil Di Hapus!',
                    'success'
                )
            </script>
        ");

        return redirect()->to('admin/absensi');
    }
    // END::ABSENSI
}
