<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\Maker4;

use Eccube\Common\EccubeNav;

class MakerNav implements EccubeNav
{
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getNav()
    {
        return [
            'product' => [
                'children' => [
                    'maker4' => [
                        'id' => 'maker4',
                        'name' => 'maker.admin.sub_title',
                        'url' => 'maker_admin_index',
                    ],
                ],
            ],
        ];
    }
}
