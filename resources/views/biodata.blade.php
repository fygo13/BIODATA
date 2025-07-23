<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Biodata Figo</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Outfit', sans-serif;
      background: linear-gradient(135deg, #000428, #004e92);
      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      display: flex;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
      max-width: 900px;
      width: 100%;
      animation: fadeIn 1.2s ease;
    }

    .left {
      flex: 1;
      min-height: 400px;
      background: #00000033;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .left img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      border: 4px solid #00ffc8;
      object-fit: cover;
      box-shadow: 0 0 15px #00ffc8aa;
      transition: transform 0.3s ease;
    }

    .left img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px #00ffc8ee;
    }

    .right {
      flex: 2;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    h1 {
      font-size: 2rem;
      color: #00ffc8;
      margin-bottom: 1rem;
    }

    .info p {
      font-size: 1rem;
      margin: 6px 0;
      line-height: 1.5;
    }

    .label {
      font-weight: 600;
      color: #ffd700;
    }

    .about {
      margin-top: 1.5rem;
      font-size: 0.95rem;
      color: #e0e0e0;
      line-height: 1.6;
      background: rgba(255, 255, 255, 0.03);
      padding: 1rem;
      border-left: 4px solid #00ffc8;
      border-radius: 10px;
    }

    .socials {
      margin-top: 2rem;
      display: flex;
      gap: 1.2rem;
      flex-wrap: wrap;
    }

    .socials a {
      background: #00ffc8;
      color: #000;
      padding: 10px 16px;
      border-radius: 30px;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 600;
      transition: 0.3s;
    }

    .socials a:hover {
      background: #7bffd6;
      box-shadow: 0 0 10px #00ffc8;
      transform: scale(1.05);
    }

    .socials img {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .left {
        min-height: 250px;
        padding: 1.5rem;
      }

      .right {
        padding: 1.5rem;
      }

      .socials {
        justify-content: center;
      }
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(40px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- FOTO -->
    <div class="left">
      <img src="{{ asset('gambar') }}/diri.jpg" alt="Foto Profil">
    </div>

    <!-- BIODATA -->
    <div class="right">
      <h1>Figo Adytia</h1>

      <div class="info">
        <p><span class="label">Tempat, Tanggal Lahir:</span> Tanjung Pandan, 11 Februari 2008</p>
        <p><span class="label">Alamat:</span> Jl. Dahlan RT. 12 RW. 05, Tanjung Pandan</p>
        <p><span class="label">Jenis Kelamin:</span> Laki-laki</p>
        <p><span class="label">Asal Sekolah:</span> SMKN 1 Tanjung Pandan</p>
        <p><span class="label">Agama:</span> Islam</p>
        <p><span class="label">Kewarganegaraan:</span> Indonesia</p>
        <p><span class="label">Hobi:</span> Menonton, Membaca, Bermain Game, Bermain Voli, Mendengar Musik</p>
        <p><span class="label">Cita-cita:</span> Pengusaha, Investor, dan Streamer</p>
      </div>

      <!-- TENTANG SAYA -->
      <div class="about">
        Saya adalah seorang pelajar sekaligus pengembang web yang antusias dengan teknologi dan desain.
        Fokus saya adalah menciptakan tampilan digital yang menarik dan fungsional untuk pengalaman pengguna yang lebih baik.
      </div>

      <!-- SOSIAL MEDIA -->
      <div class="socials">
        <a href="https://www.instagram.com/fygoady_14?igsh=bGNxY240cnRubHoz" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram">
          Instagram
        </a>
        <a href="https://github.com/fygo13" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" alt="GitHub">
          GitHub
        </a>
      </div>
    </div>
  </div>

</body>
</html>