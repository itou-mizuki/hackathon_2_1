{{-- resources/views/components/fail-screen.blade.php --}}
@props([
  'id' => 'fail-screen',
  'message' => '次こそ逃げ切ろう！',
])

<div
  id="{{ $id }}"
  class="fail-overlay"
  data-fail-overlay
  aria-hidden="true"
>
  <div class="fail-modal" role="dialog" aria-modal="true" aria-labelledby="{{ $id }}-title">
    <button type="button" class="fail-close" data-fail-close aria-label="閉じる">×</button>

    <div class="fail-image">
      {{-- ✅ ここに画像を埋め込み（public/img配下） --}}
      <img
        src="{{ asset('img/スクリーンショット 2026-02-01 16.50.16.png') }}"
        alt="Fail"
      />
    </div>

    <p id="{{ $id }}-title" class="fail-text">{{ $message }}</p>
  </div>
</div>

<style>
  .fail-overlay{
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    padding: 16px;
  }
  .fail-overlay.is-open{ display: flex; }

  .fail-modal{
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    max-width: 500px;
    width: 90%;
    position: relative;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }

  .fail-close{
    position: absolute;
    top: 20px;
    right: 20px;
    background: none;
    border: none;
    font-size: 32px;
    cursor: pointer;
    padding: 0;
    line-height: 1;
  }

  .fail-image{
    width: 100%;
    height: 400px;
    background: #f0f0f0;
    border-radius: 10px;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }
  .fail-image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .fail-text{
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin: 0;
    color: #333;
  }
</style>

<script>
(function () {
  const overlay = document.getElementById('{{ $id }}');
  if (!overlay) return;

  if (overlay.dataset.inited === '1') return;
  overlay.dataset.inited = '1';

  const closeBtn = overlay.querySelector('[data-fail-close]');

  function openFailScreen() {
    overlay.classList.add('is-open');
    overlay.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    if (closeBtn) closeBtn.focus();
  }

  function closeFailScreen() {
    overlay.classList.remove('is-open');
    overlay.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  if (closeBtn) closeBtn.addEventListener('click', closeFailScreen);

  overlay.addEventListener('click', function (e) {
    if (e.target === overlay) closeFailScreen();
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && overlay.classList.contains('is-open')) {
      closeFailScreen();
    }
  });

  window.FailScreen = window.FailScreen || {};
  window.FailScreen.open = function(targetId){
    if (targetId && targetId !== overlay.id) return;
    openFailScreen();
  };
  window.FailScreen.close = function(targetId){
    if (targetId && targetId !== overlay.id) return;
    closeFailScreen();
  };
})();
</script>
