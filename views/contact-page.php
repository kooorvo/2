<?php require "../head.php" ?>
<body class="contact-body">
    <main class="contact-main">
        <div class="bg"></div>
        <h1>CONTACT ME</h1>
        <form>
            <input type="text" for="name" id="name" placeholder="Name :">
            <input type="email" for="email" id="email" placeholder="Email :">
            <textarea name="msg" id="msg" placeholder="Your message :"></textarea>
            <button class="send-form-btn" id="send-form-btn" onclick="goToHomePage()">SEND</button>
            <a href="../index.php">BACK TO WEBSITE</a>
        </form>
    </main>

    <script src="../js/main.js"></script>
</body>
</html