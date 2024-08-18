<?php require "../head.php" ?>
<body class="contact-body">
    <main class="contact-main">
        <form method="POST" action="../scripts/form-traitement.php">
            <h1>CONTACT ME</h1>
            <input type="email" for="email" id="email" placeholder="Email :">
            <input type="tel" name="tel" id="tel" placeholder="Telephone (not obligatory) :">
            <input type="text" name="subject" id="subject" placeholder="Subject :">
            <textarea name="msg" id="msg" placeholder="Your message (less than 72 characters):"></textarea>
            <button class="send-form-btn" id="send-form-btn" name="send-form-btn">SEND</button>
            <a href="../index.php"><i class="fa-solid fa-arrow-left"></i>BACK TO WEBSITE</a>
        </form>
        <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc4FyH0FQTB3F746QDTr3bZaE3GkwbWE_jSfgGCUORlG9SqPQ/viewform?embedded=true" width="640" height="1015" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe> -->
    </main>

    <script src="../js/main.js"></script>
</body>
</html