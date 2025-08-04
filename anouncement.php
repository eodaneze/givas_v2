<div id="feature-announcement">
  <div class="feature-content">
    <p><strong>🌸 Coming Soon:</strong> Sell your digital products on <strong>Givas Marketplace</strong>. Launching soon — get ready! 🚀</p>
  </div>
</div>
<style>
  #feature-announcement {
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 15px;
    z-index: 9999;
    background: linear-gradient(270deg, #fe7f4c, #07847f, rgb(3, 67, 214));
    background-size: 600% 600%;
    animation: gradientShift 10s infinite linear;
    overflow: hidden;
    text-align: center;
  }

  @keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  .feature-content p {
    color: white;
    font-size: 16px;
    margin: 0;
    padding: 0;
    font-weight: 500;
  }

  .falling-item {
    position: absolute;
    font-size: 24px;
    animation: fall linear infinite;
    pointer-events: none;
    z-index: 1;
  }

  @keyframes fall {
    0% {
      transform: translateY(0) rotate(0deg);
      opacity: 1;
    }
    100% {
      transform: translateY(100vh) rotate(360deg);
      opacity: 0;
    }
  }
</style>


<script>
  const items = ['🎈', '💐', '🌸', '🌼', '🎉'];

  function createFallingItem() {
    const item = document.createElement('div');
    item.className = 'falling-item';
    item.innerText = items[Math.floor(Math.random() * items.length)];
    item.style.left = Math.random() * 100 + 'vw';
    item.style.animationDuration = (6 + Math.random() * 4) + 's'; // was 3 + random(3), now slower: 6–10s
    item.style.fontSize = (20 + Math.random() * 10) + 'px';
    document.getElementById('feature-announcement').appendChild(item);

    setTimeout(() => {
      item.remove();
    }, 11000); // slightly more than max duration
  }

  setInterval(createFallingItem, 500); // Optional: slightly slower spawn rate
</script>

