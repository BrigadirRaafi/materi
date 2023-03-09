<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  .tes{
      width: 120px;
      height: 30px;
    }

    .lol{
      width: 120px;
      height: 50px;
    }

    .ye{
      width: 600px;
      height: 70px;
    }

    .lmao{
      width: 277px;
    }

    .img{
      width: 150px;
      height: 200px;
    }
</style>
<body>
  <nav class="fixed-top h-16 bg-stone-500 shadow-md shadow-gray-500">
    <div class="container m-auto flex justify-between items-center">
      <div>
        <ul class="flex">
          <li>
            <button class=" bg-white rounded  mr-8 mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
              </svg>
            </button>
          </li>
          <li>
            <button onclick="goBack()" class="transition ease-in-out delay-50 font-semibold bg-neutral-400 hover:-translate-y-1-x-1 hover:scale-110 hover:bg-neutral-400 duration-100 w-20 h-9 mt-3 rounded ">BACK</button>
            <script>
          function goBack() {
              window.history.back();
          }
      </script>
          </li>
        </ul>
      </div>
        <p class="text-4xl text-white text-right mr-5  ">E-DISCIPLINE</p>
      </div>
    </div>
  </nav>

  <div class="container mx-auto my-8 rounded bg-neutral-400">
    <div class="grid grid-rows-4 grid-cols-4 gap-4">
      <div class="img ml-8 row-span-2 mt-4 rounded bg-stone-800"></div>
      <div class="mt-4 text-left font-semibold text-xl col-span-2">
        <ul>
          <li>Nama : Rapi</li>
          <li>Kelas : pplg</li>
          <li>Nis : 9669</li>
        </ul>
      </div>
      <div class="text-center row-span-2 container pl-10">
          <div class="tes text-lg bg-white mt-12">STATUS</div>
          <div class="lol text-xl p-2 text-white bg-stone-500">RINGAN</div>
      </div>
      <div class="text-left font-semibold text-xl">
        <ul>
          <li>Orangtua/Wali :</li>
          <li>Ayah : Udin</li>
          <li>Ibu : Yenny</li>
          <li>Wali : -</li>
        </ul>
      </div>
      <div class="text-left font-semibold text-xl ">
        <ul>
          <li>No Tlp :</li>
          <li>Ayah : 082165823647</li>
          <li>Ibu : 082187630974</li>
          <li>Wali :</li>
        </ul>
      </div>
      <div class="container col-span-2 row-span-2 p-4 m-4 rounded bg-stone-500">
        <ul class="list-none">
          <li class="text-2xl font-semibold">Riwayat Poin</li>
          <li class="text-lg">-Terlambat</li>
          <li class="text-lg">-Berkelahi</li>
          <li class="text-lg">-Merokok</li>
          <li class="text-lg">-Tidak mengerjakan tugas</li>
        </ul>
      </div>
      <div class="ye container col-span-2 rounded bg-white border-solid border-4 px-40 border-stone-500 m-4">
        <?php
    $date = date('2023-03-10');
    $time = date('08:45:00');
    $date_today = $date . ' ' . $time;
    ?>
    <script type="text/javascript">
    //set the date we are counting day to
    var count_id = "<?php echo $date_today; ?>";
    var countDownDate = new Date(count_id).getTime();
    //update the count down every 1 second
    var x = setInterval(function(){
    //get today's date and time
    var now = new Date().getTime();
    //find the distance between now and the countdown date
    var distance = countDownDate - now;
    //time calculations for day, hours,minutes and seconds
    var days = Math.floor(distance/(1000 * 60 * 60 * 24));
    var hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((distance%(1000*60*60))/(1000*60));
    var seconds = Math.floor((distance%(1000*60))/1000);
    //output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " + 
    minutes + "m " + seconds + "s";
    //if the countdown over, write some over text
    if(distance<0){
        clearInterval(x);
        document.getElementById("demo").innerHTML="SELESAI"
    }
},1000);
    </script>
    <?php
    echo '<p id="demo" style="font-size:35px"></p>';
    ?>
      </div>
      <div class="container bg-green-500 border-solid border-4 border-stone-500 mb-7 rounded ml-4 text-2xl text-center font-semibold py-1">Bicarakan dengan siswa yang terhubung!</div>
      <button class="lmao container bg-stone-500 mb-7 rounded ml-4"></button>
  </div>
</body>
</html>