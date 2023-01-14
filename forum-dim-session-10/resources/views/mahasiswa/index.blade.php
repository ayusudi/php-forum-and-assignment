<style>
  p, input, button, td, label {
    font-size: 16px;
  }
  table {
    margin: 15px 0 ;
  }
  th, td {
    padding: 5px;
  }
  a {
    padding: 0 5px;
    color: white;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: buttonborder;
    border-radius: 4px;
    text-decoration: none;
  }
  a#ToPageFormMahasiswaCREATE{
    background-color: rgb(14, 155, 14);
    cursor: pointer;
  }
  a[id*=ToPageFormMahasiswaUPDATE-]{
    background-color: rgb(20, 193, 193);
    cursor: not-allowed;
  }
  a[id*=MahasiswaDELETE-]{
    background-color: rgb(215, 43, 43);
    cursor: not-allowed;
  }
</style>
<section id="PageListMahasiswaREAD">
    <h1>Daftar Data <?php // echo msg;?></h1>
    <a id="ToPageFormMahasiswaCREATE" href="{{ url('/mahasiswa/create') }}">Tambah</a>
    <table border="1">
      <thead>
          <th>No.</th>
          <th>NIM</th>
          <th>Name</th>
          <th></th>
      </thead>
      <tbody>
        @foreach ($data as $mahasiswa)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>
              <a id="ToPageFormMahasiswaUPDATE-1">Update</a>
              <a id="MahasiswaDELETE-1">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>