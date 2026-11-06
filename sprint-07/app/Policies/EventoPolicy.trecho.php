<?php
public function moderate(User $user, Evento $evento): bool
{
    return $user->id === $evento->user_id;
}
