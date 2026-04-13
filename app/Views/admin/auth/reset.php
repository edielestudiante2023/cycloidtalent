<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva contraseña | Cycloid Talent</title>
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
        .auth-subtitle{font-size:.875rem;color:#6b7280;margin:0}
        .alert{padding:.875rem 1rem;border-radius:.75rem;font-size:.875rem;margin-bottom:1rem;border:1px solid}
        .alert-error{background:#fef2f2;border-color:#fecaca;color:#991b1b}
        .form-group{margin-bottom:1rem}
        .form-label{display:block;font-size:.8rem;font-weight:600;color:#374151;margin-bottom:.375rem}
        .form-hint{font-size:.7rem;color:#9ca3af;margin-top:.375rem}
        .form-input{width:100%;padding:.75rem 1rem;border:1.5px solid #e5e7eb;border-radius:.75rem;font-size:.9rem;font-family:inherit;transition:all .15s;background:#f9fafb;color:#1f2937}
        .form-input:focus{outline:none;border-color:#0345BF;background:#fff;box-shadow:0 0 0 3px rgba(3,69,191,.12)}
        .input-wrapper{position:relative}
        .input-wrapper .form-input{padding-right:3rem}
        .toggle-eye{position:absolute;right:.5rem;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;padding:.5rem;color:#9ca3af;display:flex;align-items:center;justify-content:center;border-radius:.5rem;transition:color .15s}
        .toggle-eye:hover{color:#0345BF}
        .toggle-eye svg{width:1.25rem;height:1.25rem}
        .btn-primary{width:100%;padding:.875rem 1rem;margin-top:.5rem;background:linear-gradient(135deg,#0345BF,#0057E5);color:#fff;border:none;border-radius:.75rem;font-size:.95rem;font-weight:700;cursor:pointer;font-family:inherit;transition:all .2s;box-shadow:0 4px 14px 0 rgba(3,69,191,.35)}
        .btn-primary:hover{transform:translateY(-1px);box-shadow:0 6px 20px 0 rgba(3,69,191,.5)}
        .btn-primary:active{transform:translateY(0)}
        .auth-footer{text-align:center;margin-top:1.5rem;font-size:.7rem;color:rgba(255,255,255,.6);letter-spacing:.05em}
    </style>
</head>
<body>
    <div class="auth-wrap">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-logo">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h1 class="auth-title">Nueva contraseña</h1>
                <p class="auth-subtitle">Crea una contraseña segura</p>
            </div>

            <?php if (! empty($error)): ?>
                <div class="alert alert-error"><?= esc($error) ?></div>
            <?php endif; ?>

            <form action="<?= base_url('admin/reset/' . $token) ?>" method="POST">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="password" class="form-label">Contraseña nueva</label>
                    <div class="input-wrapper">
                        <input type="password" name="password" id="password" required minlength="8" autofocus
                            placeholder="••••••••" class="form-input">
                        <button type="button" id="toggle1" class="toggle-eye" aria-label="Mostrar/ocultar contraseña">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    <p class="form-hint">Mínimo 8 caracteres</p>
                </div>

                <div class="form-group">
                    <label for="password_confirm" class="form-label">Confirmar contraseña</label>
                    <div class="input-wrapper">
                        <input type="password" name="password_confirm" id="password_confirm" required minlength="8"
                            placeholder="••••••••" class="form-input">
                        <button type="button" id="toggle2" class="toggle-eye" aria-label="Mostrar/ocultar contraseña">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-primary">Actualizar contraseña</button>
            </form>
        </div>
        <p class="auth-footer">&copy; <?= date('Y') ?> Cycloid Talent S.A.S.</p>
    </div>

    <script>
        (function() {
            function setupToggle(btnId, inputId) {
                var btn = document.getElementById(btnId);
                var input = document.getElementById(inputId);
                btn.addEventListener('click', function() {
                    input.type = input.type === 'password' ? 'text' : 'password';
                });
            }
            setupToggle('toggle1', 'password');
            setupToggle('toggle2', 'password_confirm');
        })();
    </script>
</body>
</html>
