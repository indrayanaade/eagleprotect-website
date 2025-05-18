<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us Message</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      padding: 20px;
    }
    .email-container {
      max-width: 600px;
      margin: auto;
      background-color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .logo img {
      max-width: 160px;
    }
    h2 {
      color: #103f66;
      text-align: center;
    }
    .info {
      margin: 20px 0;
    }
    .info p {
      margin: 10px 0;
      line-height: 1.5;
    }
    .label {
      font-weight: bold;
      color: #0f3057;
    }
    .footer {
      margin-top: 30px;
      font-size: 0.9em;
      color: #888;
      text-align: center;
    }
    @media (prefers-color-scheme: dark) {
      body {
        background-color: #121212;
        color: #e0e0e0;
      }
      .email-container {
        background-color: #1e1e1e;
        color: #e0e0e0;
      }
      .label {
        color: #4dd0e1;
      }
      .footer {
        color: #aaa;
      }
    }
  </style>
</head>
<body>
  <div class="email-container">
    <div class="logo">
      <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=700,fit=crop,q=95/YBgo52MOblSRJyJ1/logo-ep-233-AzG82K4Rn3cyZBP0.png" alt="Eagle Protect Logo">
    </div>
    <h2>New Contact Us Message</h2>

    <div class="info">
      <p><span class="label">Name:</span> <?= esc($fullname) ?></p>
      <p><span class="label">Company:</span> <?= esc($company) ?></p>
      <p><span class="label">Email:</span> <?= esc($email) ?></p>
      <p><span class="label">Phone:</span> <?= esc($phone) ?></p>
      <p><span class="label">Message:</span><br><?= nl2br(esc($user_message)) ?></p>
    </div>

    <div class="footer">
      &copy; <?= date('Y') ?> Eagle Protect. All rights reserved.
    </div>
  </div>
</body>
</html>
