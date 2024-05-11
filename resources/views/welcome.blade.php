<!DOCTYPE html>
<html>
<head>
    <title>PSAS Amelia Nurbaeti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        #video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            background-size: cover;
        }
        #text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h4 class="card-header p-3 d-flex justify-content-between">
        <span>Tugas Amelia Nurbaeti</span>
        <a href="{{ route('outlets.index') }}" style="text-decoration: none; color: inherit;">Login</a>
    </h4>    

    <video autoplay muted loop id="video-background">
        <source src="https://videos.pexels.com/video-files/854236/854236-hd_1280_720_29fps.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div id="text-overlay">
        <p>Saya Amelia Nurbaeti kelas XI IPA 3. Saya hobi berenang dan membaca buku. Suka coding karena seru saat membenarkan error.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
