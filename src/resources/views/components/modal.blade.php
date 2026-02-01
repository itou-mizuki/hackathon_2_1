{{-- resources/views/components/modal.blade.php --}}

<div class="modal-root" data-modal>
    {{-- モーダルを開くトリガー --}}
    <div data-modal-open>
        {{ $trigger }}
    </div>

    {{-- オーバーレイ --}}
    <div
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden"
        data-modal-overlay
        aria-hidden="true"
    >
        {{-- モーダル本体 --}}
        <div
            class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-hidden relative shadow-2xl"
            role="dialog"
            aria-modal="true"
            data-modal-content
        >
            {{-- 閉じるボタン --}}
            <button
                type="button"
                class="absolute top-4 right-4 z-10 w-12 h-12 flex items-center justify-center hover:bg-gray-100 rounded-full transition"
                aria-label="閉じる"
                data-modal-close
            >
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>

            {{-- スクロール可能コンテンツ --}}
            <div class="overflow-y-auto max-h-[90vh] p-8 custom-scrollbar">
                {{ $slot }}
            </div>

            {{-- フッター（必要なければ消してOK） --}}
            <div class="bg-white border-t border-gray-200 grid grid-cols-3 text-center py-3 text-sm text-gray-500">
                <div>HOME</div>
                <div>achievement</div>
                <div>My Page</div>
            </div>
        </div>
    </div>
</div>

@once
<style>
/* カスタムスクロールバー */
.custom-scrollbar::-webkit-scrollbar {
    width: 8px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: rgba(156, 163, 175, 0.5);
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: rgba(107, 114, 128, 0.7);
}
</style>
@endonce
