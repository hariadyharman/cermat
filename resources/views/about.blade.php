<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Profil — Azwa Nisyiatul Rizky</title>

    <style>
        /* ---------- Reset sederhana ---------- */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        /* ---------- Background gradasi dinamis (lebih jelas) ---------- */
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(1200px 600px at 10% 20%, rgba(255, 180, 200, 0.18), transparent 12%),
                radial-gradient(1000px 500px at 90% 80%, rgba(150, 120, 255, 0.18), transparent 12%),
                linear-gradient(135deg, #4f46e5 0%, #8b5cf6 40%, #ec4899 100%);
            background-color: #6b21a8;
            overflow: hidden;
            animation: bgShift 12s linear infinite;
        }

        @keyframes bgShift {
            0% {
                background-position: 0% 0%, 0% 0%, 0% 0%;
            }

            50% {
                background-position: 10% 20%, -10% -20%, 0% 0%;
            }

            100% {
                background-position: 0% 0%, 0% 0%, 0% 0%;
            }
        }

        /* ---------- floating bokeh blobs (soft lights) ---------- */
        .bokeh {
            position: absolute;
            filter: blur(40px);
            opacity: 0.55;
            pointer-events: none;
            mix-blend-mode: screen;
        }

        .b1 {
            width: 420px;
            height: 420px;
            background: radial-gradient(circle, rgba(255, 183, 197, 0.9), rgba(255, 183, 197, 0.0));
            top: 6%;
            left: 4%;
            animation: floatS 9s ease-in-out infinite;
        }

        .b2 {
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(154, 120, 255, 0.85), rgba(154, 120, 255, 0.0));
            bottom: 6%;
            right: 6%;
            animation: floatS 11s ease-in-out infinite reverse;
        }

        .b3 {
            width: 260px;
            height: 260px;
            background: radial-gradient(circle, rgba(255, 235, 156, 0.75), rgba(255, 235, 156, 0));
            top: 36%;
            left: 52%;
            animation: floatS 12s ease-in-out infinite;
        }

        @keyframes floatS {
            0% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-18px) scale(1.05);
            }

            100% {
                transform: translateY(0) scale(1);
            }
        }

        /* ---------- card glass ---------- */
        .card {
            width: min(920px, 95%);
            max-width: 920px;
            border-radius: 22px;
            padding: 40px;
            position: relative;
            z-index: 10;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0.06));
            box-shadow: 0 10px 30px rgba(10, 10, 20, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px) saturate(140%);
            -webkit-backdrop-filter: blur(10px) saturate(140%);
            color: rgba(255, 255, 255, 0.95);
            overflow: hidden;
        }

        /* subtle inner sheen */
        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0.0) 25%);
            pointer-events: none;
        }

        /* ---------- avatar floating ---------- */
        .avatar-wrap {
            display: flex;
            justify-content: center;
            margin-bottom: 18px;
        }

        .avatar {
            width: 128px;
            height: 128px;
            border-radius: 999px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(135deg, #6d28d9, #a78bfa);
            box-shadow: 0 8px 22px rgba(13, 12, 40, 0.5), inset 0 -8px 20px rgba(255, 255, 255, 0.06);
            border: 4px solid rgba(255, 255, 255, 0.08);
            transform-origin: center;
            animation: floatAvatar 4.8s ease-in-out infinite;
        }

        @keyframes floatAvatar {
            0% {
                transform: translateY(0) rotate(-1deg);
            }

            50% {
                transform: translateY(-14px) rotate(1deg);
            }

            100% {
                transform: translateY(0) rotate(-1deg);
            }
        }

        /* ---------- text ---------- */
        h1 {
            font-size: 34px;
            margin-bottom: 6px;
            letter-spacing: -0.6px;
            text-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
        }

        p.email {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 18px;
            font-weight: 600;
        }

        p.desc {
            color: rgba(255, 255, 255, 0.88);
            max-width: 760px;
            margin: 0 auto;
            line-height: 1.6;
            font-size: 16px;
        }

        /* ---------- glass button ---------- */
        .controls {
            margin-top: 26px;
            display: flex;
            justify-content: center;
            gap: 14px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 22px;
            border-radius: 999px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.04));
            color: white;
            box-shadow: 0 8px 18px rgba(12, 10, 35, 0.38);
            transition: transform .25s cubic-bezier(.2, .9, .3, 1), box-shadow .25s, background .25s;
        }

        .btn:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 18px 40px rgba(12, 10, 35, 0.45);
        }

        .btn.ghost {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: #fff;
        }

        .btn.primary {
            background: linear-gradient(90deg, #7c3aed, #ec4899);
            color: #fff;
            border: none;
        }

        /* subtle accent line */
        .accent-line {
            height: 1px;
            width: 180px;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.0));
            margin: 22px auto 16px;
            border-radius: 2px;
        }

        /* ---------- responsive ---------- */
        @media (max-width:720px) {
            .card {
                padding: 28px;
                border-radius: 18px;
            }

            h1 {
                font-size: 26px;
            }

            .avatar {
                width: 100px;
                height: 100px;
                font-size: 36px;
            }
        }
    </style>
</head>

<body>

    <!-- bokeh blobs -->
    <div class="bokeh b1"></div>
    <div class="bokeh b2"></div>
    <div class="bokeh b3"></div>

    <!-- main card -->
    <main class="card" role="main" aria-labelledby="profile-name">
        <div class="avatar-wrap" aria-hidden="true">
            <!-- ganti huruf 'A' dengan <img src="..."> jika mau foto -->
            <div class="avatar" id="avatar">Azwa</div>
        </div>

        <h1 id="profile-name">🌸 Azwa Nisyiatul Rizky</h1>
        <p class="email">📧 <a href="mailto:mandoubuntu0046@gmail.com"
                style="color:#ffd6e8; text-decoration:underline;">send email to me</a></p>

        <div class="accent-line" aria-hidden="true"></div>

        <p class="desc">
            Halo! 👋 Saya <strong>Azwa Nisyiatul Rizky</strong>, seseorang yang bersemangat untuk belajar dan berkembang
            —
            terutama dalam pengembangan diri dan kecermatan kerja. Ketelitian dan fokus adalah kunci utama dalam
            menghadapi
            tantangan seleksi dan ujian psikologi.
        </p>

        <div class="controls" role="group" aria-label="controls">
            <a class="btn primary" href="/" id="homeBtn">🏠 Kembali ke Beranda</a>
            <a class="btn ghost" href="mailto:azwa_nisya@gmail.com">✉️ Kirim Email</a>
        </div>
    </main>

    <!-- optional little JS: menambahkan beberapa partikel kecil untuk dinamika (tidak wajib) -->
    <script>
        // Buat beberapa titik kecil bergerak secara acak untuk menambah "keceriaan" background
        (function createTinyOrbs() {
            const qty = Math.min(12, Math.floor(window.innerWidth / 80));
            for (let i = 0; i < qty; i++) {
                const d = document.createElement('div');
                d.style.position = 'absolute';
                const size = 8 + Math.random() * 18;
                d.style.width = d.style.height = size + 'px';
                d.style.borderRadius = '50%';
                d.style.left = Math.random() * 100 + '%';
                d.style.top = Math.random() * 100 + '%';
                d.style.background =
                    `radial-gradient(circle, rgba(255,255,255,${0.35 + Math.random()*0.45}), rgba(255,255,255,0))`;
                d.style.filter = 'blur(6px)';
                d.style.opacity = 0.6;
                d.style.pointerEvents = 'none';
                d.style.transform = `translate(-50%, -50%)`;
                d.style.transition =
                    `transform ${6 + Math.random()*8}s ease-in-out, top ${6 + Math.random()*8}s linear, left ${6 + Math.random()*8}s linear`;
                document.body.appendChild(d);

                // random periodic movement
                (function animateOrb(el) {
                    setInterval(() => {
                        el.style.left = Math.random() * 100 + '%';
                        el.style.top = Math.random() * 100 + '%';
                        el.style.transform = `translate(-50%, -50%) scale(${0.6 + Math.random()*1.2})`;
                    }, 3500 + Math.random() * 5000);
                })(d);
            }
        })();
    </script>
</body>

</html>
