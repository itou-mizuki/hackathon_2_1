<nav class="navigation">
    <div class="footer-images">
        <a href="/">
            <img src="{{ asset('img/HOME.jpg') }}" alt="HOME" class="footer-img">
        </a>
        <a href="/achievement">
            <img src="{{ asset('img/achievement.jpg') }}" alt="Achievement" class="footer-img">
        </a>
        <a href="/mypage">
            <img src="{{ asset('img/My page.jpg') }}" alt="My Page" class="footer-img">
        </a>
    </div>
</nav>

<style>
    .navigation {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #308e9b;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px 0 20px;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }

    .footer-images {
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 40px;
        width: 100%;
        max-width: 400px;
    }

    .footer-images a {
        display: block;
    }

    .footer-img {
        width: 80px;
        height: 80px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .footer-img:hover {
        transform: scale(1.1);
    }
</style>