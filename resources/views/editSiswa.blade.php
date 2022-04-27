@extends('layouts.template')

@push('style')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('content')
    <div class="container p-5">
        <div class="row mb-3">
            <h3 class="font-weight-bold">Form Ubah Data Siswa</h3>
        </div>
        <form action="{{ route('update') }}" method="POST" id="myForm">
            @csrf
            <div class="row">
                <div class="col-md-2 my-3 mx-auto d-block">
                    <input type="hidden" name="photoLink" value="{{ $dataSiswa->photoLink }}">
                    <img src="https://drive.google.com/uc?export=view&id={{ $dataSiswa->photoLink }}"
                        class="rounded" width="180" alt="{{ $dataSiswa->fullName }}">
                    <small class="form-text text-muted text-center">Foto Ijazah - {{ $dataSiswa->fullName }} -
                        {{ $dataSiswa->class12 }}</small>
                    <a href="https://drive.google.com/uc?export=download&id={{ $dataSiswa->photoLink }}"
                        class="btn btn-sm btn-info">Download Foto</a>
                </div>
                <div class="col-md-8 ">
                    <h5>Nomor Identitas</h5>
                    <table class="table table-sm">
                        <tr>
                            <td>NISN</td>
                            <td>
                                <p title="Data tidak dapat diubah" class="d-inline">{{ $dataSiswa->nisn }}</p>
                                <input type="hidden" name="nisn" value="{{ $dataSiswa->nisn }}">
                            </td>
                        </tr>
                        <tr>
                            <td>NIS Mahad</td>
                            <td>
                                <p title="Data tidak dapat diubah" class="d-inline">{{ $dataSiswa->nism }}</p>
                                <input type="hidden" name="nism" value="{{ $dataSiswa->nism }}">
                            </td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="nik" name="nik" value="{{ $dataSiswa->nik }}">
                            </td>
                        </tr>
                    </table>
                    <h5>Data Siswa</h5>
                    <table class="table table-sm">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="fullName" name="fullName" value="{{ $dataSiswa->fullName }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Arab</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="arabicName" name="arabicName" value="{{ $dataSiswa->arabicName }}"></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="birthPlace" name="birthPlace" value="{{ $dataSiswa->birthPlace }}"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="birthDate" name="birthDate"
                                    value="{{ date('d-m-Y', strtotime($dataSiswa->birthDate)) }}">
                                <small class="form-text text-muted">Format yang digunakan adalah DD-MM-YYYY</small>
                            </td>
                        </tr>
                        <tr>
                            <td>Kelas </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="custom-select my-1 mr-sm-2" name="class10" id="class10" required>
                                            <option {{ $dataSiswa->class10 == '10A' ?? 'selected' }}>10A</option>
                                            <option {{ $dataSiswa->class10 == '10B' ?? 'selected' }}>10B</option>
                                            <option {{ $dataSiswa->class10 == '10C' ?? 'selected' }}>10C</option>
                                            <option {{ $dataSiswa->class10 == '10D' ?? 'selected' }}>10D</option>
                                            <option {{ $dataSiswa->class10 == '10E' ?? 'selected' }}>10E</option>
                                            <option {{ $dataSiswa->class10 == '10F' ?? 'selected' }}>10F</option>
                                            <option {{ $dataSiswa->class10 == '10G' ?? 'selected' }}>10G</option>
                                            <option {{ $dataSiswa->class10 == '10H' ?? 'selected' }}>10H</option>
                                            <option {{ $dataSiswa->class10 == '10I' ?? 'selected' }}>10I</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="custom-select my-1 mr-sm-2" name="class11" id="class11" required>
                                            <option {{ $dataSiswa->class11 == '11A' ?? 'selected' }}>11A</option>
                                            <option {{ $dataSiswa->class11 == '11B' ?? 'selected' }}>11B</option>
                                            <option {{ $dataSiswa->class11 == '11C' ?? 'selected' }}>11C</option>
                                            <option {{ $dataSiswa->class11 == '11D' ?? 'selected' }}>11D</option>
                                            <option {{ $dataSiswa->class11 == '11E' ?? 'selected' }}>11E</option>
                                            <option {{ $dataSiswa->class11 == '11F' ?? 'selected' }}>11F</option>
                                            <option {{ $dataSiswa->class11 == '11G' ?? 'selected' }}>11G</option>
                                            <option {{ $dataSiswa->class11 == '11H' ?? 'selected' }}>11H</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="custom-select my-1 mr-sm-2" name="class12" id="class12" required>
                                            <option {{ $dataSiswa->class12 == '12A' ?? 'selected' }}>12A</option>
                                            <option {{ $dataSiswa->class12 == '12B' ?? 'selected' }}>12B</option>
                                            <option {{ $dataSiswa->class12 == '12C' ?? 'selected' }}>12C</option>
                                            <option {{ $dataSiswa->class12 == '12D' ?? 'selected' }}>12D</option>
                                            <option {{ $dataSiswa->class12 == '12E' ?? 'selected' }}>12E</option>
                                            <option {{ $dataSiswa->class12 == '12F' ?? 'selected' }}>12F</option>
                                            <option {{ $dataSiswa->class12 == '12G' ?? 'selected' }}>12G</option>
                                            <option {{ $dataSiswa->class12 == '12H' ?? 'selected' }}>12H</option>
                                            <option {{ $dataSiswa->class12 == '12I' ?? 'selected' }}>12I</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Kamar Kelas 10 </td>
                            <td>
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="room10" name="room10" value="{{ $dataSiswa->room10 }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Kamar Kelas 11 </td>
                            <td>
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="room11" name="room11" value="{{ $dataSiswa->room11 }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Kamar Kelas 12 </td>
                            <td>
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="room12" name="room12" value="{{ $dataSiswa->room12 }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Lengkap </td>
                            <td>
                                <textarea class="form-control form-control-sm @error('title') is-invalid @enderror" required id="address"
                                    name="address">{{ $dataSiswa->address }}</textarea>
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="village" name="village" value="{{ $dataSiswa->village }}">
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="district" name="district" value="{{ $dataSiswa->district }}">
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="city" name="city" value="{{ $dataSiswa->city }}">
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="province" name="province" value="{{ $dataSiswa->province }}">
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="zipCode" name="zipCode" value="{{ $dataSiswa->zipCode }}">
                                <small class="form-text text-muted">Jangan lupa lengkapi unsur-unsur berikut : jalan, RT/RW,
                                    desa/kelurahan, kecamatan, kabupaten, kode pos!</small>
                            </td>
                        </tr>
                    </table>

                    <h5>Riwayat Pendidikan</h5>
                    <table class="table table-sm">
                        <tr>
                            <td>Nama SD</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="SDName" name="SDName" value="{{ $dataSiswa->SDName }}"></td>
                        </tr>
                        <tr>
                            <td>Tahun Kelulusan SD</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="SDYear" name="SDYear" value="{{ $dataSiswa->SDYear }}"></td>
                        </tr>
                        <tr>
                            <td>Nama SMP</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="SMPName" name="SMPName" value="{{ $dataSiswa->SMPName }}"></td>
                        </tr>
                        <tr>
                            <td>Tahun Kelulusan SMP</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    id="SMPYear" name="SMPYear" value="{{ $dataSiswa->SMPYear }}"></td>
                        </tr>
                    </table>

                    <h5>Data Orang Tua</h5>
                    <table class="table table-sm">
                        <tr>
                            <td>Nama Ayah</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="fatherName" value="{{ $dataSiswa->fatherName }}"></td>
                        </tr>
                        <tr>
                            <td>Status Ayah</td>
                            <td><select class="custom-select" name="fatherStatus">
                                    <option {{ $dataSiswa->fatherStatus == 'Hidup' ?? 'selected' }}>Hidup</option>
                                    <option {{ $dataSiswa->fatherStatus == 'Wafat' ?? 'selected' }}>Wafat</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ayah</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="fatherJob" value="{{ $dataSiswa->fatherJob }}"></td>
                        </tr>
                        <tr>
                            <td>No Telp Ayah</td>
                            <td>
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="fatherPhone" value="{{ $dataSiswa->fatherPhone }}">
                                <small class="form-text text-muted">Gunakan format kode negara, seperti 6285xxxx. Bukan
                                    085xxxxx.</small>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Ibu </td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="motherName" value="{{ $dataSiswa->motherName }}"></td>
                        </tr>
                        <tr>
                            <td>Status Ibu </td>
                            <td><select class="custom-select" name="motherStatus">
                                    <option {{ $dataSiswa->motherStatus == 'Hidup' ?? 'selected' }}>Hidup</option>
                                    <option {{ $dataSiswa->motherStatus == 'Wafat' ?? 'selected' }}>Wafat</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ibu </td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="motherJob" value="{{ $dataSiswa->motherJob }}"></td>
                        </tr>
                        <tr>
                            <td>No Telp Ibu </td>
                            <td>
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="motherPhone" value="{{ $dataSiswa->motherPhone }}">
                                <small class="form-text text-muted">Gunakan format kode negara, seperti 6285xxxx. Bukan
                                    085xxxxx.</small>
                            </td>
                        </tr>
                    </table>
                    <h5>Status & Data Kelanjutan</h5>
                    <table class="table table-sm">
                        <tr>
                            <td>Status Pernikahan</td>
                            <td>
                                <select class="custom-select my-1 mr-sm-2" name="maritalStatus" id="maritalStatus" required>
                                    <option {{ $dataSiswa->maritalStatus == 'Belum menikah' ?? 'selected' }}>Belum
                                        menikah</option>
                                    <option {{ $dataSiswa->maritalStatus == 'Sudah menikah' ?? 'selected' }}>Sudah
                                        menikah</option>
                                    <option {{ $dataSiswa->maritalStatus == 'Cerai hidup' ?? 'selected' }}>Cerai hidup
                                    </option>
                                    <option {{ $dataSiswa->maritalStatus == 'Cerai mati' ?? 'selected' }}>Cerai mati
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Lokasi Khidmah</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="khidmahPlace" value="{{ $dataSiswa->khidmahPlace }}"></td>
                        </tr>
                        <tr>
                            <td>Studi Lanjut</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="furtherStudy" value="{{ $dataSiswa->furtherStudy }}"></td>
                        </tr>
                        <tr>
                            <td>Link Drive Berkas </td>
                            <td><a href="{{ $dataSiswa->fileDriveLink }}" title="Data tidak dapat diubah"
                                    class="badge badge-info">Link Drive</a> <input type="hidden" name="fileDriveLink"
                                    value="{{ $dataSiswa->fileDriveLink }}">
                            </td>
                        </tr>
                    </table>
                    <h5>Kontak</h5>
                    <table class="table table-sm">
                        <tr>
                            <td>No WA </td>
                            <td>
                                <input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="myPhone" value="{{ $dataSiswa->myPhone }}">
                                <small class="form-text text-muted">Gunakan format kode negara, seperti 6285xxxx. Bukan
                                    085xxxxx.</small>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Email Angkatan</td>
                            <td>
                                <p title="Data tidak dapat diubah" class="d-inline">{{ $dataSiswa->shEmail }}</p>
                                <a class="badge badge-info" href="https://webmail.satuhaluan.com">Klik disini untuk
                                    login</a>
                                <input type="hidden" name="shEmail" value="{{ $dataSiswa->shEmail }}">

                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Email Pribadi</td>
                            <td><input class="form-control form-control-sm @error('title') is-invalid @enderror" required
                                    name="myEmail" value="{{ $dataSiswa->myEmail }}">
                            </td>
                        </tr>
                    </table>
                    <div>
                        <input type="checkbox" class="form-check-input" name="makeSureForm" id="makeSureForm" required>
                        <label class="form-check-label" for="makeSureForm">Dengan ini saya menyatakan data yang saya
                            masukkan
                            sudah benar dan sesuai dan siap untuk dijadikan sebagai acuan data nantinya (ijazah, pendaftaran
                            kuliah, dsb)</label>
                    </div>
                    <div class="mt-4 float-right">
                        <a href="/" class="btn btn-secondary">Cancel</a>
                        <button class="btn btn-primary show_confirm" type="submit">Submit</button>
                    </div>
        </form>
    </div>
    </div>
    </div>
@endsection
