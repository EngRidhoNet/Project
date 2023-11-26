<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinaryTree extends Model
{
    public $symbol;
    public $ticker;
    public $left;
    public $right;

    public function __construct($symbol, $ticker)
    {
        $this->symbol = $symbol;
        $this->ticker = $ticker;
        $this->left = null;
        $this->right = null;
    }
    // ini untuk fungsi awal
    public function insert($symbol, $ticker)
    {
        if ($symbol < $this->symbol) {
            if ($this->left === null) {
                $this->left = new BinaryTree($symbol, $ticker);
            } else {
                $this->left->insert($symbol, $ticker);
            }
        } elseif ($symbol > $this->symbol) {
            if ($this->right === null) {
                $this->right = new BinaryTree($symbol, $ticker);
            } else {
                $this->right->insert($symbol, $ticker);
            }
        }
    }
    public function inOrderTraversal()
    {
        $result = [];

        if ($this->left !== null) {
            $result = array_merge($result, $this->left->inOrderTraversal());
        }

        $result[] = $this;

        if ($this->right !== null) {
            $result = array_merge($result, $this->right->inOrderTraversal());
        }

        return $result;
    }
}

