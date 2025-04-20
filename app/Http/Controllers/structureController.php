<?php

namespace App\Http\Controllers;

use App\Models\Gov;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class structureController extends Controller
{
    public function pemerintah()
    {
        $govs = Gov::all();
        $tree = $this->buildTree($govs);
        return view('structure.structure-gov', compact('tree'));
    }

    public function bpd()
    {
        return view('structure.structure-bpd');
    }


    /*
     * build Tree
     * 
     * 
    */

    protected function buildTree($elements, $parentId = null)
    {
        $branch = [];

        foreach ($elements as $element) {
            if ($element->parent == $parentId) {
                $children = $this->buildTree($elements, $element->id);
                $node = [
                    'id' => $element->id,
                    'name' => $element->name,
                    'title' => $element->position,
                    'image' => $element->image,
                    'children' => $children
                ];
                $branch[] = $node;
            }
        }

        return $branch;
    }
}
