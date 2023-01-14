<style>
  p, input {
    font-size: 16px;
  }
  form div {
    margin: 10px 0;
  }
  label {
    display: block;
    margin-bottom: 5px;
  }
  input[type=text]{
    padding-left: 5px;
  }
  input[type=submit]{
    background-color: rgb(14, 155, 14);
    color: white;
    border-radius: 4px;
    padding: 1px 6px;
  }
  input[type=reset]{
    background-color: rgb(224, 171, 39);
    color: white;
    border-radius: 4px;
    padding: 1px 6px;

  }
</style>  
  <section id="PageFormMahasiswaCREATE">
    <h1>Data Mahasiswa</h1>
    <form method="POST" action="{{url('mahasiswa/create')}}" >
      @csrf
      <div>
        <label for="NIM">NIM :</label>
        <input type="text" name="nim" id="InputNIMCREATE">
      </div>
      <div>
        <label for="Nama">Nama :</label>
        <input type="text" name="nama" id="InputNamaCREATE">
      </div>
      <div>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
      </div>
    </form>
  </section>
