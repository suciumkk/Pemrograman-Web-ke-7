CREATE TABLE 'mahasiswa'(
    'nim' varchar(13) NOT NULL,
    'id_mahasiswa' int(11) NOT NULL,
    'nama' varchar(40) NOT NULL,
    'jens_kelamin' enum('P','L') NOT NULL,
    'jurusan' varchar(30) NOT NULL,
    'alamat' text NOT NULL
) ENGINE*InnoDB DEFAULT CHARSET*latin1;
