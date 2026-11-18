<?php

function flattenMenu($menu)
{
    $result = [];

    foreach ($menu as $item) {
        $result[] = [
            'id'       => $item->id,
            'label'    => $item->label,
            'link'     => $item->link,
            'parent'   => $item->parent,
            'language' => $item->language,
        ];

        if (isset($item->child) && is_object($item->child)) {
            $childItems = flattenMenu($item->child);
            $result = array_merge($result, $childItems);
        }
    }

    return $result;
}

function simplify_menu($menu)
{
    $result = [];
    foreach ($menu as $item) {
        $new_item = [
            'label' => $item->label ?? '',
            'link'  => $item->link ?? '',
        ];
        if (!empty($item->child)) {
            $new_item['child'] = simplify_menu($item->child);
        }
        $result[] = $new_item;
    }
    return $result;
}



function wa_message($webname = "", $whatsapp = "", $package = "", $lang = "en") 
{
    $waPhone = preg_replace('/[^0-9]/', '', $whatsapp);

    if (strtolower($lang) === 'id') {
        $waText = "Halo {$webname}, saya ingin memesan paket {$package}. Apakah Anda bisa membantu saya?";
    } else {
        $waText = "Hello {$webname}, I would like to book a package {$package}. Would you assist me with that?";
    }

    $waUrl = "https://wa.me/" . $waPhone . "?text=" . rawurlencode($waText);

    return $waUrl;
}

