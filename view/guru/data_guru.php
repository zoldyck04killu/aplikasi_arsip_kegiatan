<script type="text/javascript">
    $(document).ready( function () {
      $('#table').DataTable();
    } );
</script>

<?php if (@$_SESSION['user']) { ?>
<a href="?view=register-guru">
  <button type="button" class="btn btn-outline-dark">Register Guru</button>
</a>
<?php } ?>

<div class="header-hal">
    <h1>DATA GURU</h1>
</div>
<div class="daftar-table">
    <table class="table table-striped text-center" id="table">
      <thead>
      <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Pekerjaan</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Jabatan</th>
        <th>Golongan</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $data = $objAdmin->showGuru();
    $no = 1;
    while ($a = $data->fetch_object()) {
    ?>
      <tr>
        <td><?= $no ?></td>
        <td><?= $a->guru_nip; ?></td>
        <td><?= $a->guru_nama; ?></td>
        <td><?= $a->guru_pekerjaan; ?></td>
        <td><?= $a->guru_jekel; ?></td>
        <td><?= $a->guru_alamat; ?></td>
        <td><?= $a->guru_telp; ?></td>
        <td><?= $a->guru_jabatan; ?></td>
        <td><?= $a->guru_golongan; ?></td>
        <td>
            <div class="btn-group">
          <a href="?view=guru-edit&id=<?= $a->guru_nip; ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="?view=guru-reset&id=<?= $a->guru_nip; ?>" class="btn btn-sm btn-info">Reset Password</a>
          <a href="?view=guru-hapus&id=<?= $a->guru_nip; ?>" class="btn btn-sm btn-danger">Hapus</a>
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
