<?php

function valida_jogo(array $tabuleiro, String $jogador): bool
{

    return (
        ($tabuleiro[0] === $jogador && $tabuleiro[1] === $jogador && $tabuleiro[2] === $jogador) ||
        ($tabuleiro[3] === $jogador && $tabuleiro[4] === $jogador && $tabuleiro[5] === $jogador) ||
        ($tabuleiro[6] === $jogador && $tabuleiro[7] === $jogador && $tabuleiro[8] === $jogador) ||
        ($tabuleiro[0] === $jogador && $tabuleiro[3] === $jogador && $tabuleiro[6] === $jogador) ||
        ($tabuleiro[1] === $jogador && $tabuleiro[4] === $jogador && $tabuleiro[7] === $jogador) ||
        ($tabuleiro[2] === $jogador && $tabuleiro[5] === $jogador && $tabuleiro[8] === $jogador) ||
        ($tabuleiro[0] === $jogador && $tabuleiro[4] === $jogador && $tabuleiro[8] === $jogador) ||
        ($tabuleiro[2] === $jogador && $tabuleiro[4] === $jogador && $tabuleiro[6] === $jogador));
}
