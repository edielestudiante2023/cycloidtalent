<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña | Cycloid Talent</title>
    <link rel="icon" type="image/png" href="<?= base_url('img/otto-favicon.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{box-sizing:border-box}
        body{margin:0;font-family:'Inter',system-ui,-apple-system,sans-serif;min-height:100vh;min-height:100dvh;display:flex;align-items:center;justify-content:center;padding:1rem;background:#0D1B2A;background-image:radial-gradient(ellipse at top,#0345BF 0%,#0D1B2A 60%),radial-gradient(ellipse at bottom,#00C9DB1A 0%,transparent 60%);background-blend-mode:screen;color:#1f2937}
        .auth-wrap{width:100%;max-width:26rem}
        .auth-card{background:#fff;border-radius:1.5rem;padding:2.5rem 2rem;box-shadow:0 25px 50px -12px rgba(3,69,191,.4),0 0 0 1px rgba(255,255,255,.1)}
        .auth-header{text-align:center;margin-bottom:2rem}
        .auth-logo{display:inline-flex;align-items:center;justify-content:center;width:72px;height:72px;background:linear-gradient(135deg,#0345BF,#00C9DB);border-radius:1.25rem;margin-bottom:1rem;box-shadow:0 10px 25px -5px rgba(3,69,191,.4)}
        .auth-logo svg{width:36px;height:36px;color:#fff}
        .auth-title{font-size:1.5rem;font-weight:800;color:#0D1B2A;margin:0 0 .25rem}
        .auth-subtitle{font-size:.875rem;color:#6b7280;margin:0;line-height:1.5}
        .alert{padding:.875rem 1rem;border-radius:.75rem;font-size:.875rem;margin-bottom:1rem;border:1px solid}
        .alert-error{background:#fef2f2;border-color:#fecaca;color:#991b1b}
        .alert-success{background:#f0fdf4;border-color:#bbf7d0;color:#166534}
        .form-group{margin-bottom:1.5rem}
        .form-label{display:block;font-size:.8rem;font-weight:600;color:#374151;margin-bottom:.375rem}
        .form-input{width:100%;padding:.75rem 1rem;border:1.5px solid #e5e7eb;border-radius:.75rem;font-size:.9rem;font-family:inherit;transition:all .15s;background:#f9fafb;color:#1f2937}
        .form-input:focus{outline:none;border-color:#0345BF;background:#fff;box-shadow:0 0 0 3px rgba(3,69,191,.12)}
        .btn-primary{width:100%;padding:.875rem 1rem;background:linear-gradient(135deg,#0345BF,#0057E5);color:#fff;border:none;border-radius:.75rem;font-size:.95rem;font-weight:700;cursor:pointer;font-family:inherit;transition:all .2s;box-shadow:0 4px 14px 0 rgba(3,69,191,.35)}
        .btn-primary:hover{transform:translateY(-1px);box-shadow:0 6px 20px 0 rgba(3,69,191,.5)}
        .btn-primary:active{transform:translateY(0)}
        .back-link{display:block;text-align:center;margin-top:1.25rem;font-size:.825rem;color:#6b7280;text-decoration:none;font-weight:500;transition:color .15s}
        .back-link:hover{color:#0345BF}
        .auth-footer{text-align:center;margin-top:1.5rem;font-size:.7rem;color:rgba(255,255,255,.6);letter-spacing:.05em}
    </style>
</head>
<body>
    <div class="auth-wrap">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-logo">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                    </svg>
                </div>
                <h1 class="auth-title">¿Olvidaste tu contraseña?</h1>
                <p class="auth-subtitle">Ingresa tu email y te enviaremos un<br>enlace para restablecerla</p>
            </div>

            <?php if (! empty($error)): ?>
                <div class="alert alert-error"><?= esc($error) ?></div>
            <?php endif; ?>

            <?php if (! empty($success)): ?>
                <div class="alert alert-success"><?= esc($success) ?></div>
            <?php endif; ?>

            <form action="<?= base_url('admin/forgot') ?>" method="POST">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" required autofocus
                        placeholder="tu@email.com" class="form-input">
                </div>

                <button type="submit" class="btn-primary">Enviar enlace</button>
            </form>

            <a href="<?= base_url('admin/login') ?>" class="back-link">&larr; Volver al login</a>
        </div>
        <p class="auth-footer">&copy; <?= date('Y') ?> Cycloid Talent S.A.S.</p>
    </div>
</body>
</html>
