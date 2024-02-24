<?php

namespace App\Lib;

class MyStr
{
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public static function from(string $text): static
    {
        return new static($text);
    }

    public function offset(int $offset): static
    {
        if (mb_strlen($this->text) > $offset) {
            $this->text = mb_substr($this->text, $offset);
        } else {
            $this->text = '';
        }

        return $this;
    }

    public function limit(int $limit): static
    {
        if (mb_strlen($this->text) > $limit) {
            $this->text = mb_substr($this->text, 0, $limit);
        }

        return $this;
    }

    public function padding(int $length): static
    {
        $this->text = mb_str_pad($this->text, $length, '　', STR_PAD_RIGHT);

        return $this;
    }

    public function kana(): static
    {
        $this->text = mb_convert_kana($this->text, 'RNASKV');

        return $this;
    }

    public function str(): string
    {
        return $this->text;
    }
}
