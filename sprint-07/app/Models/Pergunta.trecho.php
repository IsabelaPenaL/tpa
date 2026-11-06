<?php
public function moderacoes(): HasMany
{
    return $this->hasMany(Moderacao::class);
}

