<?php
Route::middleware('auth')->group(function () {
    Route::post('/perguntas/{pergunta}/moderar', [ModeracaoController::class, 'store'])
        ->name('moderacoes.store');

    Route::get('/eventos/{evento}/moderacoes', [ModeracaoController::class, 'index'])
        ->name('moderacoes.index');

    Route::patch('/moderacoes/{moderacao}/status', [ModeracaoController::class, 'updateStatus'])
        ->name('moderacoes.updateStatus');
});
