<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Biodata Diri</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Rubik', sans-serif;
      background: linear-gradient(135deg, #0f0c29, #004e92, #24243e);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      padding: 2rem;
      backdrop-filter: blur(15px);
      box-shadow: 0 0 30px rgba(0, 255, 200, 0.25);
      max-width: 600px;
      width: 100%;
      animation: fadeIn 1.2s ease;
    }

    .card img.profile {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 3px solid #00ffc8;
      object-fit: cover;
      display: block;
      margin: 0 auto 1.2rem auto;
    }

    .card h1 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #00ffc8;
    }

    .info p {
      font-size: 1rem;
      line-height: 1.6;
      margin: 6px 0;
    }

    .label {
      font-weight: 600;
      color: #ffdf91;
    }

    .socials {
      margin-top: 2rem;
      display: flex;
      justify-content: center;
      gap: 1.2rem;
      flex-wrap: wrap;
    }

    .socials a {
      background: #00ffc8;
      color: #000;
      padding: 8px 16px;
      border-radius: 30px;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .socials a:hover {
      background: #7bffd6;
      transform: translateY(-3px);
    }

    .socials img.icon {
      width: 20px;
      height: 20px;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: scale(0.95);}
      to {opacity: 1; transform: scale(1);}
    }

    @media (max-width: 480px) {
      .socials {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <div class="card">
    <img src="{{ asset('gambar') }}/diri.jpg" alt="Foto Profil" class="profile">
    <h1>Figo Adytia</h1>
    
    <div class="info">
      <p><span class="label">Tempat, Tanggal Lahir:</span> Tanjung Pandan, 11 February 2008</p>
      <p><span class="label">Alamat:</span> Jl. Dahlan RT. 12 RW. 05, Tanjung Pandan</p>
      <p><span class="label">Jenis Kelamin:</span> Laki-laki</p>
      <p><span class="label">Agama:</span> Islam</p>
      <p><span class="label">Kewarganegaraan:</span> Indonesia</p>
      <p><span class="label">Hobi:</span> Menonton, Membaca, Bermain Game, Bermain Voly, Mendengar Musik</p>
      <p><span class="label">Cita-cita:</span> Pengusaha, Investor, dan Streamer</p>
    </div>

    <div class="socials">
      <a href="https://www.instagram.com/fygoady_14?igsh=bGNxY240cnRubHoz" target="_blank">
        <img src="https://i.pinimg.com/736x/f4/1e/2d/f41e2dab621c1ee5253cef74e3642fcf.jpg" alt="Instagram" class="icon">
        Instagram
      </a>
      <a href="https://github.com/figoadytia" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" alt="GitHub" class="icon">
        GitHub
      </a>
    </div>
  </div>

</body>
</html>