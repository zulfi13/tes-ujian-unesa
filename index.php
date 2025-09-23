<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Jadwal Dummy</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
    .clock {
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 30px;
    }
    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 20px;
      margin-bottom: 20px;
    }
    .card h2 {
      margin-top: 0;
      color: #333;
    }
    .card p, .card li {
      font-size: 16px;
      margin: 6px 0;
    }
    ol {
      padding-left: 20px;
    }
  </style>
</head>
<body>
  <h1>Dashboard Jadwal</h1>

  <div class="clock" id="clock">Loading time...</div>

  <div class="card">
    <h2>Check In (Sedang Berlangsung)</h2>
    <p><strong>Algoritma dan Pemrograman</strong> di Ruang A</p>
    <p>08:00 - 09:30</p>
  </div>

  <div class="card">
    <h2>Waiting List (Berikutnya)</h2>
    <ol>
      <li>Struktur Data — Ruang B (10:00 - 11:30)</li>
      <li>Basis Data — Ruang C (13:00 - 14:30)</li>
    </ol>
  </div>

  <script>
    // Update jam realtime
    function updateClock() {
      const el = document.getElementById("clock");
      const d = new Date();
      el.textContent =
        d.getFullYear() + "-" +
        String(d.getMonth()+1).padStart(2,'0') + "-" +
        String(d.getDate()).padStart(2,'0') + " " +
        String(d.getHours()).padStart(2,'0') + ":" +
        String(d.getMinutes()).padStart(2,'0') + ":" +
        String(d.getSeconds()).padStart(2,'0');
    }
    setInterval(updateClock, 1000);
    updateClock();
  </script>
</body>
</html>
