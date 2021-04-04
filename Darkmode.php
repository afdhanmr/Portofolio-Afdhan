  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <p><h3>Mencoba DarkMode</h3></p>
         <p>
              <span>Klik bagian ini</span>
              <p><span class="icon" onclick="setDarkMode(false)"> Ada 🌝 </span></p>
              <p><span class="icon" onclick="setDarkMode(true)"> Tidak Ada 🌚  </span></p>
          </p>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<style>
    #darkmode {
      background: green;
      color: white;
    }
</style>

<script>
    function setDarkMode(isDark) {
        if(isDark) {
            document.body.setAttribute('id', 'darkmode')
        } else {
            document.body.setAttribute('id', '')
        }
    }
</script>