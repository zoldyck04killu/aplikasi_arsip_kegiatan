<script type="text/javascript">
    $(document).ready( function () {
      $('#table').DataTable();
    } );
</script>


<div class="header-hal">
    <h1>DATA SISWA</h1>
</div>
<div class="daftar-table">
    <table class="table table-striped text-center" id="table">
      <thead>
      <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Kelas</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $data = $objAdmin->showSiswa();
    $no = 1;
    while ($a = $data->fetch_object()) {
    ?>
      <tr>
        <td><?= $no ?></td>
        <td><?= $a->siswa_nis; ?></td>
        <td><?= $a->siswa_nama; ?></td>
        <td><?= $a->siswa_jekel; ?></td>
        <td><?= $a->siswa_alamat; ?></td>
        <td><?= $a->siswa_telp; ?></td>
        <td><?= $a->siswa_kelas; ?></td>
        <td>
          <div class="btn-group">
          <a href="?view=siswa-edit&id=<?= $a->siswa_nis; ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="?view=siswa-reset&id=<?= $a->siswa_nis; ?>" class="btn btn-sm btn-info">Reset password</a>
          <a href="?view=siswa-hapus&id=<?= $a->siswa_nis; ?>" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
      <?php
      $no++;
      }
      ?>
    </tbody>
    </table>
</div>
