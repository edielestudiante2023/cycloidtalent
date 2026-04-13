<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | Cycloid Talent</title>
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
        .auth-logo img{width:44px;height:44px;object-fit:contain;filter:brightness(0) invert(1)}
        .auth-title{font-size:1.5rem;font-weight:800;color:#0D1B2A;margin:0 0 .25rem}
        .auth-subtitle{font-size:.875rem;color:#6b7280;margin:0}
        .auth-slogan{display:inline-block;margin-top:.75rem;font-size:.7rem;font-weight:700;color:#00C9DB;text-transform:uppercase;letter-spacing:.15em}
        .alert{padding:.875rem 1rem;border-radius:.75rem;font-size:.875rem;margin-bottom:1rem;border:1px solid}
        .alert-error{background:#fef2f2;border-color:#fecaca;color:#991b1b}
        .alert-success{background:#f0fdf4;border-color:#bbf7d0;color:#166534}
        .form-group{margin-bottom:1rem}
        .form-label{display:block;font-size:.8rem;font-weight:600;color:#374151;margin-bottom:.375rem}
        .form-input{width:100%;padding:.75rem 1rem;border:1.5px solid #e5e7eb;border-radius:.75rem;font-size:.9rem;font-family:inherit;transition:all .15s;background:#f9fafb;color:#1f2937}
        .form-input:focus{outline:none;border-color:#0345BF;background:#fff;box-shadow:0 0 0 3px rgba(3,69,191,.12)}
        .input-wrapper{position:relative}
        .input-wrapper .form-input{padding-right:3rem}
        .toggle-eye{position:absolute;right:.5rem;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;padding:.5rem;color:#9ca3af;display:flex;align-items:center;justify-content:center;border-radius:.5rem;transition:color .15s}
        .toggle-eye:hover{color:#0345BF}
        .toggle-eye svg{width:1.25rem;height:1.25rem}
        .auth-link{font-size:.825rem;color:#0345BF;text-decoration:none;font-weight:500;transition:color .15s}
        .auth-link:hover{color:#00C9DB;text-decoration:underline}
        .forgot-row{text-align:right;margin-bottom:1.5rem}
        .btn-primary{width:100%;padding:.875rem 1rem;background:linear-gradient(135deg,#0345BF,#0057E5);color:#fff;border:none;border-radius:.75rem;font-size:.95rem;font-weight:700;cursor:pointer;font-family:inherit;transition:all .2s;box-shadow:0 4px 14px 0 rgba(3,69,191,.35)}
        .btn-primary:hover{transform:translateY(-1px);box-shadow:0 6px 20px 0 rgba(3,69,191,.5)}
        .btn-primary:active{transform:translateY(0)}
        .back-link{display:block;text-align:center;margin-top:1.25rem;font-size:.825rem;color:#6b7280;text-decoration:none;transition:color .15s}
        .back-link:hover{color:#0345BF}
        .auth-footer{text-align:center;margin-top:1.5rem;font-size:.7rem;color:rgba(255,255,255,.6);letter-spacing:.05em}
    </style>
</head>
<body>
    <div class="auth-wrap">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-logo">
                    <img src="<?= base_url('assets/img/logos/cycloid-logo-azul.png') ?>" alt="Cycloid Talent">
                </div>
                <h1 class="auth-title">Bienvenido</h1>
                <p class="auth-subtitle">Ingresa a tu panel administrativo</p>
                <span class="auth-slogan">Sistemas que evolucionan</span>
            </div>

            <?php if (! empty($error)): ?>
                <div class="alert alert-error"><?= esc($error) ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>

            <form action="<?= base_url('admin/login') ?>" method="POST">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" required autofocus
                        placeholder="tu@email.com" class="form-input">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="input-wrapper">
                        <input type="password" name="password" id="password" required
                            placeholder="••••••••" class="form-input">
                        <button type="button" id="togglePassword" class="toggle-eye" aria-label="Mostrar/ocultar contraseña">
                            <svg id="eyeIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="forgot-row">
                    <a href="<?= base_url('admin/forgot') ?>" class="auth-link">¿Olvidaste tu contraseña?</a>
                </div>

                <button type="submit" class="btn-primary">Iniciar sesión</button>
            </form>

            <a href="<?= base_url('/') ?>" class="back-link">&larr; Volver al sitio</a>
        </div>
        <p class="auth-footer">&copy; <?= date('Y') ?> Cycloid Talent S.A.S.</p>
    </div>

    <script>
        (function() {
            var btn = document.getElementById('togglePassword');
            var input = document.getElementById('password');
            var icon = document.getElementById('eyeIcon');
            var eyeOpen = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>';
            var eyeClosed = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"/>';
            btn.addEventListener('click', function() {
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.innerHTML = eyeClosed;
                } else {
                    input.type = 'password';
                    icon.innerHTML = eyeOpen;
                }
            });
        })();
    </script>
</body>
</html>
